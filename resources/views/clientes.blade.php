<!-- resources/views/clientes.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="container mt-5">
        <h2>Tabla de Clientes</h2>

        <div class="action-buttons">
            <button onclick="consultarClientes()">Consultar Cliente</button>
            <button onclick="añadirCliente()">Añadir Cliente</button>
            <button onclick="modificarCliente()">Modificar Cliente</button>
            <button onclick="borrarCliente()">Borrar Cliente</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
            <tbody id="tablaClientes">
                <!-- Aquí se insertarán los datos dinámicamente desde JavaScript -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/clientes.js') }}"></script>
</body>
</html>




