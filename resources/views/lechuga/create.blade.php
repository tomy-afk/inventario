<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lechuga</title>
    <!-- Agregar tus estilos CSS aquí si los tienes -->
    <link rel="stylesheet" href="tu_estilo.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Agregar Lechuga</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lechuga.store') }}">
                            @csrf <!-- Agrega un token CSRF para proteger tu formulario -->
                            <div class="form-group">
                                <label for="tipo_lechuga">Tipo de Lechuga (TIPOL)</label>
                                <input type="text" name="tipo_lechuga" id="tipo_lechuga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="cantidad_lechuga">Cantidad de Lechuga (CANTL)</label>
                                <input type="number" name="cantidad_lechuga" id="cantidad_lechuga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre_cliente">Nombre del Cliente (NOMBREC)</label>
                                <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agregar tus scripts JS aquí si los tienes -->
    <script src="tus_scripts.js"></script>
</body>
</html>
