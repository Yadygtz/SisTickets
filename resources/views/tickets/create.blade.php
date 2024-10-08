@extends('layouts.user_type.auth')
@section('titulo','')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
        <h1>Crear Ticket</h1>
        <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="title" class="form-label">Tarjeta Informativa</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Fecha de solicitud</label>
                    <input type="date" class="form-control" name="fecha_ticket" id="fecha_ticket" value="" required>
                </div>
                <div class="col-md-2">
                    <label for="area" class="form-label">Área</label>
                    <select class="form-select" id="area" name="area">
                        @foreach ($areasCB as $area)
                        <option value="{{ route('tickets.getAreas', $area->id_area) }}">{{ $area->area }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Quien solicita</label>
                    <input type="text" class="form-control" name="solicita" id="solicita" value="" required>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="servicio" class="form-label">Servicio</label>
                    <select class="form-select" id="servicio" name="servicio">
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="servicio" class="form-label">Prioridad</label>
                    <select class="form-select" id="servicio" name="servicio">
                        <option value="">ALTA</option>
                        <option value="">MEDIA</option>
                        <option value="">BAJA</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha aproximada de atención</label>
                    <input type="date" class="form-control" name="fecha_aprox" id="fecha_aprox" value="">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="asignado" class="form-label">Quien atiende</label>
                    <input type="text" class="form-control" name="atiende" id="atiende" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="status" class="form-label">Estado</label>
                    <select class="form-select" id="status" name="status">
                        <option value="open">Abierto</option>
                        <option value="progreso" >En progreso</option>
                        <option value="closed">Cerrado</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha cierre</label>
                    <input type="date" class="form-control" name="fecha_cierre" id="fecha_cierre" value="">
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
        </form>
    </div>
    </div>
</div>
@endsection
