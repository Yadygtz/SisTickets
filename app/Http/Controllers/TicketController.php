<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Area;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.index');
    }

    public function getAreas()
    {
        $areasCB = Area::all();
        return view('tickets.create',compact('areasCB'));
        //return response()->json($areasCB);
    }

    public function getdata()
    {
        $data = Ticket::all();
        return response()->json($data);
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:open,closed',
        ]);

        // Crear el ticket con el user_id
        Ticket::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'user_id' => auth()->user()->id,
            'id_personal'=>$request->id_personal,
            'id_servicio'=>$request->id_servicio,
            'id_area'=>$request->id_area,
            'fecha_registro'=>$request->fecha_registro,
            'fecha_aprox'=>$request->fecha_aprox,
            'fecha_termino'=>$request->fecha_termino,
            'estatus'=>$request->estatus,
            'prioridad'=>$request->prioridad
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('tickets.index')->with('success', 'Ticket creado exitosamente.');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        // Validar los datos de entrada
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:open,closed',
        ]);

        // Actualizar el ticket
        $ticket->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'user_id' => auth()->user()->id, // Puedes actualizar el user_id si es necesario
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('tickets.index')->with('success', 'Ticket actualizado exitosamente.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }
}
