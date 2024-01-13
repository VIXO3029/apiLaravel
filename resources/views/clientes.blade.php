<!-- resources/views/clientes.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
     <!-- Agrego esto para incluir Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container mt-5">
        <h2>Tabla de Clientes</h2>

        <div class="action-buttons">
            <button onclick="handleButton('consultar')">Consultar Cliente</button>
            <button onclick="handleButton('añadir')">Añadir Cliente</button>
            <button onclick="handleButton('modificar')">Modificar Cliente</button>
            <button onclick="handleButton('borrar')">Borrar Cliente</button>
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

    <script>
        function handleButton(action) {
            switch (action) {
                case 'consultar':
                    consultarClientes();
                    break;
                case 'añadir':
                    abrirModalAñadirCliente();
                    break;
                case 'modificar':
                    modificarCliente();
                    break;
                case 'borrar':
                    borrarCliente();
                    break;
                default:
                    console.error('Acción no reconocida');
            }
        }

        function abrirModalAñadirCliente() {
            // Lógica para abrir el modal de añadir cliente
            // Puedes utilizar bibliotecas como Bootstrap para modales o diseñar el tuyo propio
            console.log('Abriendo modal para añadir cliente');
        }
    </script>
    <div class="modal fade" id="modalInsertarCliente" tabindex="-1" role="dialog" aria-labelledby="modalInsertarClienteLabel" aria-hidden="true">
    <!-- ... (contenido del modal) -->
</div>

<!-- Agrega este código al final, antes de </body> -->
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
                    <button type="submit" class="btn btn-primary">Insertar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function abrirModalInsertarCliente() {
        $('#modalInsertarCliente').modal('show');
    }

    // Puedes agregar más lógica para enviar el formulario y procesar la inserción del cliente
    document.getElementById('formularioInsertarCliente').addEventListener('submit', function (event) {
        event.preventDefault();

        // Obtener datos del formulario y realizar la inserción
        const nombre = document.getElementById('nombre').value;
        const apellidos = document.getElementById('apellidos').value;

        // Aquí puedes realizar una solicitud AJAX (por ejemplo, con Axios) para enviar los datos al servidor
        // y actualizar la tabla de clientes.

        // Ejemplo de cómo puedes actualizar la tabla (puedes ajustarlo según tu lógica específica)
        const tablaClientes = document.getElementById('tablaClientes');
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${Math.floor(Math.random() * 1000)}</td>
            <td>${nombre}</td>
            <td>${apellidos}</td>
        `;
        tablaClientes.appendChild(fila);

        // Cerrar el modal después de la inserción
        $('#modalInsertarCliente').modal('hide');
    });
</script>
</body>
</html>



