<!DOCTYPE html>
<html>

<head>

    <title>Etiquetas QR</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            text-align:center;
        }

        .activo{
            width:220px;
            border:1px solid #000;
            display:inline-block;
            margin:10px;
            padding:10px;
        }

        h4{
            margin:5px;
        }

        p{
            margin:4px;
            font-size:12px;
        }

    </style>

</head>

<body>

<h2>Etiquetas de Activos</h2>

@foreach($activos as $activo)

<div class="activo">

    <h4>{{ $activo->codigo }}</h4>

    <p>{{ $activo->descrip }}</p>

    <img src="data:image/png;base64,{{ $activo->qr }}">

    <p><strong>Oficina:</strong> {{ $activo->oficina->nombre }}</p>

    <p>{{ $activo->fadquisicion }}</p>

</div>

@endforeach

</body>

</html>


