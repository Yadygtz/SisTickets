@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Ticket</h1>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $ticket->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $ticket->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Estado</label>
            <select class="form-select" id="status" name="status">
                <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }}>Abierto</option>
                <option value="closed" {{ $ticket->status == 'closed' ? 'selected' : '' }}>Cerrado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
