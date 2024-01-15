<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    
    <!-- Incluye Bootstrap y jQuery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Incluye estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="container mt-5">
        <h2>Tabla de Clientes</h2>

        <!-- Botones de acción -->
        <div class="action-buttons">
            <button onclick="handleButton('consultar')">Consultar Cliente</button>
            <button id="btnAñadirCliente" onclick="abrirModalInsertarCliente()">Añadir Cliente</button>
            <!-- <button onclick="handleButton('modificar')">Modificar Cliente</button> -->
            <button class="btn btn-warning" id="btnModificarCliente">Modificar Cliente</button>
            <button onclick="handleButton('borrar')">Borrar Cliente</button>
        </div>

        <!-- Tabla de clientes -->
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

    <!-- Incluye la biblioteca Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Archivo de scripts personalizado -->
    <script src="{{ asset('js/clientes.js') }}"></script>

    <!-- Modal para insertar clientes -->
    <div class="modal fade" id="modalInsertarCliente" tabindex="-1" role="dialog" aria-labelledby="modalInsertarClienteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInsertarClienteLabel">Insertar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para insertar cliente -->
                    <form id="formularioInsertarCliente">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="insertarCliente()">Insertar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para manejar la lógica de inserción de clientes -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            cargarClientes();
            const btnAñadirCliente = document.getElementById('btnAñadirCliente');
            btnAñadirCliente.addEventListener('click', abrirModalInsertarCliente);
        });

        function insertarCliente() {
            const nombre = document.getElementById('nombre').value;
            const apellidos = document.getElementById('apellidos').value;

            axios.post('/clientes', { nombre, apellidos })
                .then(response => {
                    console.log(response.data);
                    cargarClientes(); // Actualiza la tabla después de la inserción
                    $('#modalInsertarCliente').modal('hide');
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
</body>
</html>

