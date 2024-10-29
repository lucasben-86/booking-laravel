<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos creados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-size: 0.8rem;
        }

        h2 {
            color: #ffc107;
            text-align: left;
            font-size: 1.25rem;
        }

        th {
            background-color: #ffc107;
            color: #343a40;
            font-size: 0.8rem;
        }

        .table {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
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
        </table>
        <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
