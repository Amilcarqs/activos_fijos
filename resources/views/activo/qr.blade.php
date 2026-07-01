<!DOCTYPE html>
<html>

<head>

    <title>QR Activos</title>

    <style>

        body{

            font-family: Arial;
            text-align:center;

        }

        .activo{

            border:1px solid #CCC;
            padding:20px;
            margin:20px;
            display:inline-block;

        }

    </style>

</head>

<body>

<h2>Prueba de Códigos QR</h2>

@foreach($activos as $activo)

<div class="activo">

    <h4>{{ $activo->codigo }}</h4>

    {!! QrCode::size(180)->generate(
        "Codigo: ".$activo->codigo."\n".
        "Descripcion: ".$activo->descrip."\n".
        "Oficina: ".$activo->oficina->nombre."\n".
        "Fecha adquisicion: ".$activo->fadquisicion
    ) !!}

</div>

@endforeach

</body>

</html>