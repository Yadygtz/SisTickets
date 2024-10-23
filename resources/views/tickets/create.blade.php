@extends('layouts.app')
@section('titulo', '')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Crear Ticket</h1>
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
                <form action="{{ route('tickets.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label for="title" class="form-label">Tarjeta Informativa</label>
                                <select class="form-select" id="title" name="title">
                                    <option selected value=""> Seleccione una tarjeta </option>
                                    @foreach ($tarjetas as $tarjeta)
                                        <option value="{{ $tarjeta->no_oficio }}">{{ $tarjeta->no_oficio }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Fecha de solicitud</label>
                                <input type="date" class="form-control" name="fecha_registro" id="fecha_registro"
                                    value="" required>
                            </div>
                            <div class="col-md-2">
                                <label for="area" class="form-label">Área</label>
                                <select class="form-select" id="id_area" name="id_area">
                                    @foreach ($areasCB as $area)
                                        <option value="{{ $area->id_area }}">{{ $area->area }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="origen" class="form-label">Origen de solicitud</label>
                                <select class="form-select" id="origen" name="origen">
                                    <option value="Llamada">Llamada</option>
                                    <option value="Tarjeta">Tarjeta</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Quien solicita</label>
                                <input type="text" class="form-control" name="solicita" id="solicita" value=""
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="servicio" class="form-label">Servicio</label>
                                <select class="form-select" id="id_servicio" name="id_servicio">
                                    @foreach ($servicioCB as $servicio)
                                        <option value="{{ $servicio->id_servicio }}">{{ $servicio->servicio }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="prioridad" class="form-label">Prioridad</label>
                                <select class="form-select" id="prioridad" name="prioridad">
                                    <option value="Alta">ALTA</option>
                                    <option value="Media">MEDIA</option>
                                    <option value="Baja">BAJA</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Fecha aproximada de atención</label>
                                <input type="date" class="form-control" name="fecha_aprox" id="fecha_aprox"
                                    value="">
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
                                <select class="form-select" id="id_personal" name="id_personal">
                                    @foreach ($usuarioCB as $usuario)
                                        <option value="{{ $usuario->id }}">{{ $usuario->nombre_p_mostrar }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="estatus" class="form-label">Estado</label>
                                <select class="form-select" id="estatus" name="estatus">
                                    <option value="Abierto">Abierto</option>
                                    <option value="En progreso">En progreso</option>
                                    <option value="Cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Fecha cierre</label>
                                <input type="date" class="form-control" name="fecha_termino" id="fecha_termino"
                                    value="">
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
                        <a type="button" class="btn btn-icon bg-gradient-secondary mb-0" id="pdf_tarjeta"
                            nombre = 'pdf_tarjeta' href="" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                <path d="M17 18h2" />
                                <path d="M20 15h-3v6" />
                                <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                            </svg></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $("#fecha_termino").prop("disabled", true);
        $("#estatus").on('change', function() {
            //console.log( $("#estatus").is(":checked"));
            var myDateInput = document.getElementById("fecha_termino");
            //myDateInput.disabled = !$("#estatus").is(":checked");
            if ($("#estatus").val() === 'Cerrado') {
                myDateInput.disabled = false; // Habilita el campo de fecha
            } else {
                myDateInput.disabled = true; // Deshabilita el campo de fecha
                myDateInput.value = ''; // Limpia el campo de fecha
            }
        });


        $("#pdf_tarjeta").addClass('disabled');

        $("#title").on('change', function() {
            //console.log($("#title").val());

            if ($("#title").val() === null) {
                $("#pdf_tarjeta").addClass('disabled');

            } else {
                var titulo = $("#title").val().replace(/\//g, '-');
                $.ajax({
                    url: "{{ route('get_tarjeta', ':id') }}".replace(':id', titulo),
                    method: 'GET',
                    success: function(data) {

                        if (data.existe == "SI") {
                            $("#fecha_registro").val(data.fecha_oficio);
                            $("#pdf_tarjeta").removeClass('disabled');
                            $("#pdf_tarjeta").attr("href", "{{ route('veroficio', ':id') }}".replace(':id', titulo));
                            } else {
                            $("#pdf_tarjeta").addClass('disabled');
                        }
                    }
                });
            }


        });
    </script>
@endpush
