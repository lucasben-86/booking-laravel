<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de eventos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de eventos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Creación del evento</h2>
        <form action="{{ url('/') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pid">PID:</label>
                <input type="number" name="pid" id="pid" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="creacion">Creación:</label>
                <input type="date" name="creacion" id="creacion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tipo_transmision">Tipo de transmisión:</label>
                <input type="text" name="tipo_transmision" id="tipo_transmision" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="fecha_inicial">Fecha inicial:</label>
                <input type="date" name="fecha_inicial" id="fecha_inicial" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="fecha_final">Fecha final:</label>
                <input type="date" name="fecha_final" id="fecha_final" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="origen">Origen:</label>
                <input type="text" name="origen" id="origen" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" name="destino" id="destino" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion_evento">Descripción del evento:</label>
                <input type="text" name="descripcion_evento" id="descripcion_evento" class="form-control" required>
            </div>

            <button type="submit" value="Agregar nuevo PID" class="btn btn-primary">Enviar</button>
        </form>

        <br><br>
        
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

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>