<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 11px;
            color: #333;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
        }

        .logo {
            width: 70px;
        }

        .titulo {
            text-align: center;
        }

        .titulo h2 {
            margin: 0;
        }

        .titulo p {
            margin: 2px;
        }

        .fecha {
            text-align: right;
            font-size: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #0d6efd;
            color: white;
        }

        th {
            border: 1px solid #444;
            padding: 8px;
        }

        td {
            border: 1px solid #666;
            padding: 5px;
            text-align: center;
            vertical-align: middle;
        }

        img {
            width: 60px;
            height: 60px;
            border: 1px solid #999;
        }

        tbody tr:nth-child(even) {
            background: #f3f3f3;
        }

        .footer {

            position: fixed;
            bottom: -15px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 10px;

        }
    </style>

</head>

<body>

    <table class="header" border="0">

        <tr>

            <td width="15%">
                <img src="storage/activo-fijo.png" alt="">
            </td>

            <td width="70%" class="titulo">

                <h2>SISTEMA DE REGISTRO Y CONTROL DE ACTIVOS FIJOS</h2>

                <p>Reporte General de Activos</p>

            </td>

            <td width="15%" class="fecha">

                Fecha de emisión: {{ date('d/m/Y') }}<br>
                Hora: {{ date('H:i')}}
            </td>
        </tr>

    </table>

    <table>

        <thead>

            <tr>

                <th>Código</th>
                <th>Fotografía</th>
                <th>Descripción</th>
                <th>Grupo</th>
                <th>Estado</th>
                <th>Oficina</th>
                <th>Responsable</th>
                <th>Precio</th>
                <th>Fecha</th>

            </tr>

        </thead>

        <tbody>

            @foreach($activos as $activo)

            <tr>

                <td>{{ $activo->codigo }}</td>

                <td>

                    @if($activo->foto)

                    <img src="{{ public_path('storage/'.$activo->foto) }}">

                    @endif

                </td>

                <td>{{ $activo->descrip }}</td>

                <td>{{ $activo->grupo->descrip }}</td>

                <td>{{ $activo->estado->descrip }}</td>

                <td>{{ $activo->oficina->nombre }}</td>

                <td>{{ $activo->responsable->nombre }}</td>

                <td>
                    Bs {{ number_format($activo->precio,2) }}
                </td>

                <td>
                    {{ \Carbon\Carbon::parse($activo->fadquisicion)->format('d/m/Y') }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

    <div class="footer">

        Sistema de Registro y Control de Activos

    </div>

</body>

</html>