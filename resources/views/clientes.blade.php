<!-- resources/views/clientes.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>

    <div class="container mt-5">
        <h2>Tabla de Clientes</h2>
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




