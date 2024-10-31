<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .btn-custom {
            background-color: #6c757d;
            color: #ffc107;
            margin-right: 5px;
        }

        .btn-custom:last-child {
            margin-right: 0;
        }

        h2 {
            font-size: 1rem;
        }
    </style>
</head>

<body>
<div class="container mt-5">
        <h2>Procesos disponibles:</h2>
        <div class="btn-container mt-4">
            <a href="{{ url('/list') }}" class="btn btn-custom">Lista de trabajos</a>
            <a href="{{ url('/create') }}" class="btn btn-custom">Iniciar trabajo</a>
        </div>
    </div>

</body>
</html>
