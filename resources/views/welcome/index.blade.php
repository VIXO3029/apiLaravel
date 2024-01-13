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
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
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
    </style>
</head>
<body>

    <header>
        <h1>Mi Página Laravel</h1>
    </header>

    <main>
        <p>Bienvenido a mi página en Laravel. Esta es una estructura básica.</p>
        <div class="container">
            <h2 class="mb-4">Tabla de Clientes</h2>
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
    </main>

    <footer>
        <p>&copy; 2024 Mi Página Laravel. Victor Manuel Rodriguez Pena, Todos los derechos reservados.</p>
    </footer>

</body>
</html>
