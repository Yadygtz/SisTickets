<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::select('users.*', 'areas.area')
            ->join('areas', 'users.id_area', '=', 'areas.id_area')
            ->get();
        return view("users.index", compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ids = ['SISTEMAS', 'REDES','DIRECCIÓN'];
        $areasCB = Area::select('id_area', 'area')->WhereIn('area', $ids)->get();
        return view("users.create", compact('areasCB'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string',
            'paterno' => 'required|string',
            'materno' => 'required|string',
            'nombre_p_mostrar' => 'required|string',
            'tipo' => 'required|string',
            'puesto' => 'required|string',
            'clave' => 'required|string',
            'password' => 'required',
            'id_area' => 'required|string'

        ]);


        // Crear el ticket con el user_id
        User::create([
            'nombre' => $request->nombre,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'nombre_p_mostrar' => $request->nombre_p_mostrar,
            'tipo' => $request->tipo,
            'puesto' => $request->puesto,
            'clave' => $request->clave,
            'password' => Hash::make($request['password']),
            'id_area' => $request->id_area
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        //
        $areasCB = Area::select('id_area', 'area')->get();
        return view("users.edit", compact('usuario', 'areasCB'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {

        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string',
            'paterno' => 'required|string',
            'materno' => 'required|string',
            'nombre_p_mostrar' => 'required|string',
            'tipo' => 'required|string',
            'puesto' => 'required|string',
            'clave' => 'required|string',
            'id_area' => 'required|string'

        ]);

        if ($request->input('password')) {
            //dd($request->has('password'));
            try {
                $usuario->update([
                    'nombre' => $request->nombre,
                    'paterno' => $request->paterno,
                    'materno' => $request->materno,
                    'nombre_p_mostrar' => $request->nombre_p_mostrar,
                    'tipo' => $request->tipo,
                    'puesto' => $request->puesto,
                    'clave' => $request->clave,
                    'password' => Hash::make($request['password']),
                    'id_area' => $request->id_area
                ]);
            } catch (\Throwable $th) {
                dd($th);
            }
        } else {
            try {
                $usuario->update([
                    'nombre' => $request->nombre,
                    'paterno' => $request->paterno,
                    'materno' => $request->materno,
                    'nombre_p_mostrar' => $request->nombre_p_mostrar,
                    'tipo' => $request->tipo,
                    'puesto' => $request->puesto,
                    'clave' => $request->clave,
                    'id_area' => $request->id_area
                ]);
            } catch (\Throwable $th) {
                dd($th);
            }
        }
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
