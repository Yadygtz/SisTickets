@extends('layouts.app')
@section('titulo', 'Tickets')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h1 style="margin-bottom: 0">Tickets</h1>
            <a href="{{ route('tickets.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Crear Ticket
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="filtro_estatus" class="form-label">Estado</label>
                        <select class="form-select" id="filtro_estatus" name="filtro_estatus">
                            <option selected value="">Todos</option>
                            <option value="Abierto">Abierto</option>
                            <option value="En progreso">En progreso</option>
                            <option value="Cerrado">Cerrado</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align items-center pb-0 mt-1" id="DStabla">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Tarjeta</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Servicio</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Area</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Estado</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Prioridad</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Atiende</th>
                                <th class="text-uppercase text-secondary fs-6 font-weight-bolder opacity-7">Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        @if (session('error'))
            Swal.fire({
                icon: "error",
                title: @json(session('error'))
            });
        @endif
        @if (session('success'))
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: @json(session('success'))
            });
        @endif

        var confidioma = {
            "info": "<span class='text-sm text-secondary opacity-9'>Mostrando _START_ a _END_ de _TOTAL_ registros</span>",
            "infoEmpty": "Mostrando 0 a 0 de 0 registros",
            "infoFiltered": "<span class='text-sm text-secondary opacity-9'>(filtrado de _MAX_ registros en total)</span>",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "<span> _MENU_ registros por página</span>",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron registros",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": ">",
                "previous": "<"
            },
            "aria": {
                "sortAscending": ": activar para ordenar la columna ascendente",
                "sortDescending": ": activar para ordenar la columna descendente"
            }
        };



        let table = new DataTable('#DStabla', {
            "ajax": {
                "url": @json(route('getdata')),
                "dataSrc": '',
                "type": "get"
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "title"
                },
                {
                    "data": "servicio"
                },
                {
                    "data": "area"
                },
                {
                    "data": "estatus"
                },
                {
                    "data": "prioridad"
                },
                {
                    "data": "nombre_p_mostrar"
                },
                {
                    "orderable": false,
                    "data": null,
                    "render": function(data, type) {
                        var deshabilitado = data.estatus == 'CERRADO'?'disabled':'';
                        var r1 = "{{ route('tickets.show',':id') }}".replace(':id',data.id);
                        var r2 = "{{ route('tickets.edit',':id') }}".replace(':id',data.id);
                        return '<div class="d-flex"> ' +
                            '<a href="'+r1+'"' +
                            'class="btn btn-primary w-30 btn-icon mb-0 me-1" > <svg xmlns="http://www.w3.org/2000/svg" width="24"' +
                            'height="24" viewBox="0 0 24 24" fill="none"' +
                            'stroke="currentColor" stroke-width="2" stroke-linecap="round" ' +
                            'stroke-linejoin="round"' +
                            'class="icon icon-tabler icons-tabler-outline icon-tabler-eye">' +
                            '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
                            '<path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />' +
                            '<path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /> </svg>' +
                            '</a>' +
                            '<a href="'+r2+'"' +
                            'class="btn btn-outline-secondary w-30 btn-icon mb-0 '+ deshabilitado +' " >' +
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24"' +
                            'height="24" viewBox="0 0 24 24" fill="none"' +
                            'stroke="currentColor" stroke-width="2" stroke-linecap="round"' +
                            'stroke-linejoin="round"' +
                            'class="icon icon-tabler icons-tabler-outline icon-tabler-edit">' +
                            '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
                            '<path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /> <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /> <path d="M16 5l3 3" />' +
                            '</svg>' +
                            '</a>' +
                            '</div>'
                    }
                },

            ],
            "language": confidioma,
            "autoWidth": false,
            "columnDefs": [{
                    "targets": "_all",
                    "className": "fs-5 font-weight-bold align-middle"
                },

            ],
            "order": [
                [0, 'desc']
            ]

        });

        $("#filtro_estatus").on('change', function() {

            estatus = $(this).val();
            $('#DStabla tbody tr').filter(function() {
            $(this).toggle($(this).find('td:eq(4)').text() === estatus || estatus === "");
        });
        });
    </script>
@endpush
