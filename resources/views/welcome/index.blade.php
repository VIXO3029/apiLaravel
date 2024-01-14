<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #495057;
        }

        header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-group {
            margin-bottom: 20px;
        }

        .btn-group button {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Mi Página Laravel</h1>
    </header>

    <main>
        <div class="container">
            <h2 class="mb-4">Tabla de Clientes</h2>
            <div class="btn-group">
                <button class="btn btn-primary" id="btnRefresh">Actualizar</button>
                <a href="{{ route('clientes.create') }}" class="btn btn-success">Agregar Cliente</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tablaClientes">
                    <!-- Aquí se insertarán los datos dinámicamente desde JavaScript -->
                </tbody>
            </table>
            <!-- Modal para confirmar la eliminación -->
                <div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmarEliminarModalLabel">Confirmar Eliminación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar al cliente <span id="nombreClienteEliminar"></span>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" id="btnEliminarCliente">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/clientes.js') }}"></script>

    <footer>
        <p>&copy; 2024 Mi Página Laravel. Victor Manuel Rodriguez Pena, Todos los derechos reservados.</p>
    </footer>

</body>
</html>



