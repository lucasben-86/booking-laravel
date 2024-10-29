<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar trabajo</title>
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

        .form-group {
            margin-bottom: 0.5rem;
        }

        .form-group label {
            color: #343a40;
            font-size: 0.8rem;
        }

        .form-control {
            max-width: 50%;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
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
    </div>
</body>
</html>
