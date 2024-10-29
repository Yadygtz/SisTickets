<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Area;
use App\Models\Personal;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.index');
    }


    public function getdata()
    {

        $puesto = auth()->user()->puesto;
        $tipo = auth()->user()->tipo;
        $id_usuario = auth()->user()->id;
        $area = auth()->user()->id_area;

        $usuarios = User::where('id_area',$area)->pluck('id')->toArray();

        if($puesto == "Director" OR $puesto == "Jefe de Departamento"){
            $data = Ticket::select('tickets.*','users.nombre_p_mostrar','areas.area','servicio.servicio')
            ->join('users','tickets.id_personal','=','users.id')
            ->join('areas','tickets.id_area','=','areas.id_area')
            ->join('servicio','tickets.id_servicio','=','servicio.id_servicio')
            ->get();
        }elseif( $puesto == 'Jefe de Unidad'){
            $data = Ticket::select('tickets.*','users.nombre_p_mostrar','areas.area','servicio.servicio')
            ->join('users','tickets.id_personal','=','users.id')
            ->join('areas','tickets.id_area','=','areas.id_area')
            ->join('servicio','tickets.id_servicio','=','servicio.id_servicio')
            ->whereIn('tickets.id_personal',$usuarios)
            ->get();
        }else{
            $data = Ticket::select('tickets.*','users.nombre_p_mostrar','areas.area','servicio.servicio')
            ->join('users','tickets.id_personal','=','users.id')
            ->join('areas','tickets.id_area','=','areas.id_area')
            ->join('servicio','tickets.id_servicio','=','servicio.id_servicio')
             ->where('tickets.id_personal','=',$id_usuario)
            ->get();
        }

        return response()->json($data);
    }

    public function create()
    {
        $areasCB = Area::select('id_area','area')->get();
        $servicioCB = Servicio::select('id_servicio','servicio')->get();
        $usuarioCB = User::select('id','nombre_p_mostrar')->get();
        $tarjetas = DB::connection('remote')->select("select no_oficio from correspondencia where interno = '1' and area = 'INFORMÁTICA' and estatus != '1'");

        return view('tickets.create',compact('areasCB','servicioCB','usuarioCB','tarjetas'));
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([

            'description' => 'required|string',
            'estatus' => 'required|string',
            'solicita' => 'required',

        ]);


                // Crear el ticket con el user_id
                Ticket::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'user_id' => auth()->user()->id,
                    'id_servicio'=>$request->id_servicio,
                    'id_area'=>$request->id_area,
                    'id_personal'=>$request->id_personal,
                    'solicita'=>$request->solicita,
                    'fecha_registro'=> $request->fecha_registro,
                    'fecha_aprox'=> $request->fecha_aprox,
                    'fecha_termino'=> $request->fecha_termino,
                    'estatus'=>$request->estatus,
                    'prioridad'=>$request->prioridad,
                    'origen'=>$request->origen
                ]);

                // Redirigir con un mensaje de éxito
                return redirect()->route('tickets.index')->with('success', 'Ticket creado exitosamente.');
    }

    public function show($id)
    {
        $ticket = Ticket::select('tickets.*','users.nombre_p_mostrar','areas.area','servicio.servicio')
        ->join('users','tickets.id_personal','=','users.id')
        ->join('areas','tickets.id_area','=','areas.id_area')
        ->join('servicio','tickets.id_servicio','=','servicio.id_servicio')
        ->where('tickets.id','=',$id)
        ->first();
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        $areasCB = Area::select('id_area','area')->get();
        $servicioCB = Servicio::select('id_servicio','servicio')->get();
        $usuarioCB = User::select('id','nombre_p_mostrar')->get();
        $tarjetasCB = DB::connection('remote')->select("select no_oficio from correspondencia where interno = '1' and area = 'INFORMÁTICA' and estatus != '1'");
        return view('tickets.edit', compact('ticket','areasCB','servicioCB','usuarioCB','tarjetasCB'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        // Validar los datos de entrada
        $request->validate([
            'description' => 'required|string',
            'estatus' => 'required|string',
        ]);

        // Actualizar el ticket
        $ticket->update([
            'title' => $request->title,
            'description' => $request->description,
            'estatus' => $request->estatus,
            'prioridad' =>$request->prioridad,
            'id_personal'=>$request->id_personal,
            'id_servicio'=>$request->id_servicio,
            'id_area'=>$request->id_area,
            'fecha_registro'=>$request->fecha_registro,
            'fecha_aprox'=>$request->fecha_aprox,
            'fecha_termino'=>$request->fecha_termino,
            'solicita'=>$request->solicita,
            'origen'=>$request->origen,
            'user_id' => auth()->user()->id, // Puedes actualizar el user_id si es necesario
        ]);
        $pendientes = Ticket::where('title',$request->title)->whereIn('estatus',['ABIERTO','EN PROGRESO'])->exists();

        if($pendientes){

        }else{
            DB::connection('remote')->table('correspondencia')->where('no_oficio',$request->title)->update(['estatus'=>'1']);
        }
        // Redirigir con un mensaje de éxito
        return redirect()->route('tickets.index')->with('success', 'Ticket actualizado exitosamente.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }

    public function get_tarjeta($oficio)
    {

        $rutaCompletaFTP = "Oficios/" . $oficio . ".pdf";
        if (Storage::disk('ftp')->exists($rutaCompletaFTP)) {
            $existe = "SI";
        } else {
            $existe  = "NO";
        }
        $fecha_oficio = DB::connection('remote')->select("select fecha_oficio from correspondencia where interno = '1' and area = 'INFORMÁTICA' and estatus != '1' and no_oficio = '$oficio'");
        $fecha = Carbon::createFromFormat('d/m/Y', $fecha_oficio[0]->fecha_oficio)->format('Y-m-d');
        //dd($fecha_oficio);
        return response()->json([
            'existe' => $existe,
            'fecha_oficio'=>$fecha
        ]);

    }



}
