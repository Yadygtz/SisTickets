@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Ticket</h1>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Estado</label>
            <select class="form-select" id="status" name="status">
                <option value="open">Abierto</option>
                <option value="closed">Cerrado</option>
            </select>
        </div>
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
