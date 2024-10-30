<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Evento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-size: 0.9rem;
            background-color: #f8f9fa;
        }
        h2 {
            color: #ffc107;
            text-align: left;
            font-size: 1.5rem;
        }
        th {
            background-color: #343a40;
            color: #ffc107;
            font-size: 0.9rem;
            width: 200px;
        }
        td {
            background-color: #e9ecef;
            color: #343a40;
            white-space: nowrap;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Detalles del Evento</h2>
        <table class="table table-bordered mt-3">
            <tbody>
                <tr>
                    <th>PID</th>
                    <td>{{ $pid->id }}</td>
                </tr>
                <tr>
                    <th>Creación</th>
                    <td>{{ $pid->created_at->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th>Tipo de Transmisión</th>
                    <td>{{ $pid->tipo_transmision }}</td>
                </tr>
                <tr>
                    <th>Fecha Inicial</th>
                    <td>{{ $pid->fecha_inicial }}</td>
                </tr>
                <tr>
                    <th>Fecha Final</th>
                    <td>{{ $pid->fecha_final }}</td>
                </tr>
                <tr>
                    <th>Origen</th>
                    <td>{{ $pid->origen }}</td>
                </tr>
                <tr>
                    <th>Destino</th>
                    <td>{{ $pid->destino }}</td>
                </tr>
                <tr>
                    <th>Descripción del Evento</th>
                    <td>{{ $pid->descripcion_evento }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ url('/list') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
