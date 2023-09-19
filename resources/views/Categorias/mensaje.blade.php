<!DOCTYPE html>
<html>
<head>
    <title>Alert Message</title>
    <style>
        /* Estilo para el mensaje de alerta */
        .alert {
            padding: 10px;
            background-color: #f2f2f2;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        /* Estilo para un mensaje de éxito */
        .alert-success {
            background-color: #4CAF50;
            color: white;
        }

        /* Estilo para un mensaje de error */
        .alert-error {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="alert alert-success">
        <strong>Éxito:</strong> Categoria creada correctamente.
    </div>
    <a href="{{url('Productos')}}" class="btn btn-secondary">Regresar</a>
</body>
</html>
