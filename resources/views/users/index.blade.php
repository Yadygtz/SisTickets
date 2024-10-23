@extends('layouts.app')
@section('titulo', 'Usuarios')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h1>Tickets</h1>
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Usuario</a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive p-0">
                    <table class="table align items-center pb-0 mt-1" id="DStabla">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Clave</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Area</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->nombre_p_mostrar }}</td>
                                <td>{{ $usuario->clave }}</td>
                                <td>{{ $usuario->tipo }}</td>
                                <td>{{ $usuario->area }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-outline-secondary w-30 btn-icon mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                <path d="M16 5l3 3" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




