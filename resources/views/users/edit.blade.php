{{-- Formulario para editar el usuario --}}

@extends('layouts.app')
@section('titulo', '')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Editar Usuario</h1>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                @endif
                <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $usuario->nombre }}" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Paterno</label>
                                <input type="text" class="form-control" name="paterno" id="paterno" value="{{ $usuario->paterno }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Materno</label>
                                <input type="text" class="form-control" name="materno" id="materno" value="{{ $usuario->materno }}" required>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Nombre corto</label>
                                <input type="text" class="form-control" name="nombre_p_mostrar" id="nombre_p_mostrar" value="{{ $usuario->nombre_p_mostrar }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="tipo" class="form-label">Tipo</label>
                                <select class="form-select" id="tipo" name="tipo">
                                    <option value="Administrador" {{$usuario->tipo == 'Administrador' ? 'selected' : '' }}>ADMINISTRADOR</option>
                                    <option value="Operativo" {{$usuario->tipo == 'Operativo' ? 'selected' : '' }}>OPERATIVO</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="puesto" class="form-label">Puesto</label>
                                <select class="form-select" id="puesto" name="puesto">
                                    <option value="Director" {{$usuario->puesto == 'Director' ? 'selected' : '' }}>DIRECTOR</option>
                                    <option value="Jefe de Departamento" {{$usuario->puesto == 'Jefe de Departamento' ? 'selected' : '' }}>JEFE DE DEPARTAMENTO</option>
                                    <option value="Jefe de Unidad" {{$usuario->puesto == 'Jefe de Unidad' ? 'selected' : '' }}>JEFE DE UNIDAD</option>
                                    <option value="Auxiliar" {{$usuario->puesto == 'Auxiliar' ? 'selected' : '' }} >AUXILIAR</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Clave</label>
                                <input type="text" class="form-control" name="clave" id="clave" value="{{ $usuario->clave }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="area" class="form-label">Área</label>
                                <select class="form-select" id="id_area" name="id_area">
                                    @foreach ($areasCB as $area)
                                        <option value="{{ $area->id_area }}" {{ $usuario->id_area == $area->id_area ? 'selected' : '' }}>{{ $area->area }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
