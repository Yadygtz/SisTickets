@extends('layouts.app')
@section('titulo','Tickets')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
        <h1>Editar Ticket</h1>
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
        <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-2">
                <label for="title" class="form-label">Tarjeta Informativa</label>
                <select class="form-select" id="title" name="title">
                    <option value=""> </option>
                    @foreach($tarjetasCB as $tarjeta)
                    <option value="{{ $tarjeta->no_oficio}}" {{ $tarjeta->no_oficio == $ticket->title ? 'selected' : '' }}>{{ $tarjeta->no_oficio }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <label class="form-label">Fecha de solicitud</label>
                <input type="date" class="form-control" name="fecha_registro" id="fecha_registro" value="{{ $ticket->fecha_registro }}" required>
            </div>
            <div class="col-md-2">
                <label for="area" class="form-label">Área</label>
                <select class="form-select" id="id_area" name="id_area">
                    @foreach($areasCB as $area)
                    <option value="{{ $area->id_area}}" {{ $area->id_area == $ticket->id_area ? 'selected' : '' }}>{{ $area->area }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label for="origen" class="form-label">Origen de solicitud</label>
                <select class="form-select" id="origen" name="origen">
                    <option value="Llamada" {{$ticket->origen == 'Llamada' ? 'selected' : '' }}>LLAMADA</option>
                    <option value="Tarjeta" {{$ticket->origen == 'Tarjeta' ? 'selected' : '' }}>TARJETA</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Quien solicita</label>
                <input type="text" class="form-control" name="solicita" id="solicita" value="{{ $ticket->solicita }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="servicio" class="form-label">Servicio</label>
                <select class="form-select" id="id_servicio" name="id_servicio">
                    @foreach($servicioCB as $servicio)
                    <option value="{{ $servicio->id_servicio}}" {{ $servicio->id_servicio == $ticket->id_servicio ? 'selected' : '' }}>{{ $servicio->servicio }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="prioridad" class="form-label">Prioridad</label>
                <select class="form-select" id="prioridad" name="prioridad">
                    <option value="ALTA" {{ $ticket->prioridad == 'ALTA' ? 'selected' : '' }}>ALTA</option>
                    <option value="MEDIA" {{ $ticket->prioridad == 'MEDIA' ? 'selected' : '' }}>MEDIA</option>
                    <option value="BAJA" {{ $ticket->prioridad == 'BAJA' ? 'selected' : '' }}>BAJA</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha aproximada de atención</label>
                <input type="date" class="form-control" name="fecha_aprox" id="fecha_aprox" value="{{ $ticket->fecha_aprox }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $ticket->description }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="observaciones" name="observaciones" rows="3">{{ $ticket->observaciones }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="asignado" class="form-label">Quien atiende</label>
                <select class="form-select" id="id_personal" name="id_personal">
                    @foreach($usuarioCB as $usuario)
                    <option value="{{ $usuario->id}}" {{ $usuario->id == $ticket->id_personal ? 'selected' : '' }}>{{ $usuario->nombre_p_mostrar }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3">
                <label for="status" class="form-label">Estado</label>
                <select class="form-select" id="estatus" name="estatus">
                    <option value="ABIERTO" {{ $ticket->estatus == 'ABIERTO' ? 'selected' : '' }}>ABIERTO</option>
                    <option value="EN PROGRESO" {{ $ticket->estatus == 'EN PROGRESO' ? 'selected' : '' }}>EN PROGRESO</option>
                    <option value="CERRADO" {{ $ticket->estatus == 'CERRADO' ? 'selected' : '' }}>CERRADO</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha cierre</label>
                <input type="date" class="form-control" name="fecha_termino" id="fecha_termino" value="{{ $ticket->fecha_termino }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    </div>
    </div>
</div>

@endsection
@push('scripts')
    <script>
        var fechaActual = "{{ $fechaActual }}";
        $("#fecha_termino").prop("disabled",true);

        $("#estatus").on('change', function() {
                //console.log( $("#estatus").is(":checked"));
                var myDateInput3 = document.getElementById("fecha_termino");
                //myDateInput.disabled = !$("#estatus").is(":checked");
                if ($("#estatus").val() === 'CERRADO') {
                    myDateInput3.value = fechaActual;
                    myDateInput3.disabled = true; // Habilita el campo de fecha
                } else {
                    myDateInput3.disabled = true; // Deshabilita el campo de fecha
                    myDateInput3.value = ''; // Limpia el campo de fecha
                }
            });
    </script>
@endpush
