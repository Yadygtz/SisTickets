@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
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
            <h1>Detalles del Ticket</h1>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label class="form-label">Tarjeta Informativa</label>
                    <input type="text" class="form-control" name='title' id="title" value="{{ $ticket->title }}" disabled>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Fecha de solicitud</label>
                    <input type="date" class="form-control" name="fecha_registro" id="fecha_registro" value="{{ $ticket->fecha_registro }}" disabled>
                </div>
                <div class="col-md-2">
                    <label for="area" class="form-label">Área</label>
                    <input type="text" class="form-control" name="area" id="area" value="{{ $ticket->area }}" disabled>
                </div>
                <div class="col-md-2">
                    <label for="origen" class="form-label">Origen de solicitud</label>
                    <input type="text" class="form-control" name="origen" id="origen" value="{{ $ticket->origen }}" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Quien solicita</label>
                    <input type="text" class="form-control" name="solicita" id="solicita" value="{{ $ticket->solicita }}" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Servicio</label>
                    <input type="text" class="form-control" name="servicio" id="servicio" value="{{ $ticket->servicio }}" disabled>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Prioridad</label>
                    <input type="text" class="form-control" name="prioridad" id="prioridad" value="{{ $ticket->prioridad }}" disabled>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha aproximada de atención</label>
                    <input type="text" class="form-control" name="fecha_aprox" id="fecha_aprox" value="{{ $ticket->fecha_aprox }}" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3" disabled>{{ $ticket->description }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="asignado" class="form-label">Quien atiende</label>
                    <input type="text" class="form-control"  name="nombre_p_mostrar" id="nombre_p_mostrar" value="{{ $ticket->nombre_p_mostrar }}" disabled>
                </div>

                <div class="col-md-3">
                    <label for="status" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="estatus" id="estatus" value="{{ $ticket->estatus }}" disabled>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha cierre</label>
                    <input type="text" class="form-control" name="fecha_termino" id="fecha_termino" value="{{ $ticket->fecha_termino }}" disabled>
                </div>
            </div>

            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
