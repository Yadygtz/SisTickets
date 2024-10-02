@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Ticket</h1>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $ticket->title }}" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha de solicitud</label>
                <input type="date" class="form-control" name="fecha_ticket" id="fecha_ticket" value="" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Area</label>
                <input type="text" class="form-control" name="area" id="area" value="" required>
            </div>

        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $ticket->description }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Quien solicita</label>
                <input type="text" class="form-control" name="solicita" id="solicita" value="" required>
            </div>
            <div class="col-md-6">
                <label for="asignado" class="form-label">Quien atiende</label>
                <input type="text" class="form-control" name="atiende" id="atiende" value="" required>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="status" class="form-label">Estado</label>
                <select class="form-select" id="status" name="status">
                    <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }}>Abierto</option>
                    <option value="progreso" >En progreso</option>
                    <option value="closed" {{ $ticket->status == 'closed' ? 'selected' : '' }}>Cerrado</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha cierre</label>
                <input type="date" class="form-control" name="fecha_cierre" id="fecha_cierre" value="" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
