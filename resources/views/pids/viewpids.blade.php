<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
        <h2 class="mt-5">Eventos creados</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>PID</th>
                    <th>Creación</th>
                    <th>Tipo de Transmisión</th>
                    <th>Fecha Inicial</th>
                    <th>Fecha Final</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Descripción del Evento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pids as $pid)
                <tr>
                    <td>{{ $pid->pid }}</td>
                    <td>{{ $pid->creacion }}</td>
                    <td>{{ $pid->tipo_transmision }}</td>
                    <td>{{ $pid->fecha_inicial }}</td>
                    <td>{{ $pid->fecha_final }}</td>
                    <td>{{ $pid->origen }}</td>
                    <td>{{ $pid->destino }}</td>
                    <td>{{ $pid->descripcion_evento }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>