<!-- resources/views/welcome/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Mi Página Laravel</h1>
    </header>

    <main>
        <p>Bienvenido a mi página en Laravel. Esta es una estructura básica.</p>
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
    </main>

    <footer>
        <p>&copy; 2024 Mi Página Laravel. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
