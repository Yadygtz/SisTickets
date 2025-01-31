<!DOCTYPE html>
<html>
<head>
    <title>Informe de Actividades</title>
    {{-- <link href="{{ public_path('css/tabler-ui.css') }}" rel="stylesheet"> --}}
    <style>
        /* Puedes agregar estilos personalizados aquí */
        h1 {
            font-family: Arial, sans-serif;
            font-size: 17px;
        }
        img {
            width: 150px; /* Ajusta el tamaño según sea necesario */

            margin-bottom: 10px; /* Espacio debajo del logo */
        }
        @page {
		margin-left: 0.5cm;
		margin-right: 0;
        margin-top: 0;
	    }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Para evitar bordes duplicados */
        }
        th, td {
            border: 1px solid #000; /* Añadir borde */
            padding: 12px; /* Aumentar el padding */
            text-align: left;
        }
        th {
            background-color: #ab0033; /* Fondo para encabezados */
            color: #f9f9f9;
            font-size: 12px;
            text-align: center;

        }
        tr:nth-child(even) {
            background-color: #f9f9f9e0; /* Alternar filas para mejor legibilidad */

        }
        tr {
            font-size: 11px;
        }

    </style>
</head>
<body>
    <div>
        <img src="{{ public_path('assets/img/C3-horizontal.png') }}" alt="">
    </div>
    <h1>Informe de actividades del {{ $fecha_inicial }} al {{ $fecha_final }}</h1>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>TARJETA</th>
                <th>SERVICIO</th>
                <th>DESCRIPCIÓN</th>
                <th>SOLICITA</th>
                <th>ATIENDE</th>

            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dato->title }}</td>
                    <td>{{ mb_strtoupper($dato->servicio) }}</td>
                    <td>{{ $dato->description }}</td>
                    <td>{{ $dato->solicita }}</td>
                    <td>{{ $dato->nombre_p_mostrar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
