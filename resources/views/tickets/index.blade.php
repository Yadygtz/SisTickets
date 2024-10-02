@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Tickets</h1>
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Crear Ticket</a>
    </div>
    <div class="card-body px-0">
        <div class="table-responsive p-0">
            <table class="table align items-center pb-0 mt-1" id="DStabla">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Título</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> --}}
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</div>
@endsection

@push('scripts')
    <script>

    var confidioma = {
                "info": "<span class='text-sm text-secondary opacity-9'>Mostrando _START_ a _END_ de _TOTAL_ registros</span>",
                "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                "infoFiltered": "<span class='text-sm text-secondary opacity-9'>(filtrado de _MAX_ registros en total)</span>",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "<span class='ps-4'> _MENU_ registros por página</span>",
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
            "ajax":{
                    "url":@json(route('getdata')),
                    "dataSrc":'',
                    "type":"get"
                },
                "columns":[
                    {"data": "id"},
                    {"data": "title"},
                    {"data": "description"},
                    {"data": "status"},
                    {
                    "orderable": false,
                    "data": null,
                    "render": function (data, type) {

                            return '<div class="d-flex"> '
                                    + '<a href="{{ route('tickets.show', '') }}/' + data.id + '" class="btn btn-primary w-30 btn-icon mb-0 me-1" > <svg xmlns="http://www.w3.org/2000/svg" width="24"'
                                        + 'height="24" viewBox="0 0 24 24" fill="none"'
                                        + 'stroke="currentColor" stroke-width="2" stroke-linecap="round" '
                                        + 'stroke-linejoin="round"'
                                        + 'class="icon icon-tabler icons-tabler-outline icon-tabler-eye">'
                                        + '<path stroke="none" d="M0 0h24v24H0z" fill="none" />'
                                        + '<path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />'
                                        + '<path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /> </svg>'
                                    + '</a>'
                                    + '<a href="/tickets/' + data.id + '/edit" class="btn btn-outline-secondary w-30 btn-icon mb-0">'
                                            + '<svg xmlns="http://www.w3.org/2000/svg" width="24"'
                                                + 'height="24" viewBox="0 0 24 24" fill="none"'
                                                + 'stroke="currentColor" stroke-width="2" stroke-linecap="round"'
                                                + 'stroke-linejoin="round"'
                                                + 'class="icon icon-tabler icons-tabler-outline icon-tabler-edit">'
                                                + '<path stroke="none" d="M0 0h24v24H0z" fill="none" />'
                                                + '<path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /> <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /> <path d="M16 5l3 3" />'
                                            + '</svg>'
                                    + '</a>'
                                    + '</div>'
                    }
                    },

                ],
                "language": confidioma,
                "autoWidth":false,
                "columnDefs": [
                    {
                    "targets": "_all",
                    "className": "text-xs font-weight-bold align-middle"
                    },

                ],
                "order":[[0,'desc']]

            });

    </script>
@endpush

{{-- <tbody>
    @foreach ($tickets as $ticket)
    <tr>
        <td>{{ $ticket->id }}</td>
        <td>{{ $ticket->title }}</td>
        <td>{{ $ticket->description }}</td>
        <td>{{ $ticket->status }}</td>
        <td>
            <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-info btn-sm">Ver</a>
            <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody> --}}
