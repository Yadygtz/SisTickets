@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Ticket</h1>
    <div class="mb-3">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $ticket->id }}" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" class="form-control" value="{{ $ticket->title }}" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" rows="3" disabled>{{ $ticket->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <input type="text" class="form-control" value="{{ $ticket->status }}" disabled>
    </div>
    <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
