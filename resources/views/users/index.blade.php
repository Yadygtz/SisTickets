@extends('layouts.app')
@section('titulo', 'Usuarios')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Usuarios</h1>
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->nombre}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
