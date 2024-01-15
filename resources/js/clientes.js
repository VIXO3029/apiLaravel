import './bootstrap';
//  public/js/clientes.js

document.addEventListener('DOMContentLoaded', function () {
    cargarClientes();
});

async function cargarClientes() {
    try {
        const response = await axios.get('/api/clientes');
        const clientes = response.data;

        const tablaClientes = document.getElementById('tablaClientes');

        clientes.forEach(cliente => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${cliente.id}</td>
                <td>${cliente.nombre}</td>
                <td>${cliente.apellidos}</td>
            `;
            tablaClientes.appendChild(fila);
        });
    } catch (error) {
        console.error('Error al cargar los clientes:', error);
    }
}

// Evento click para mostrar el modal y obtener el nombre del cliente a modificar
$('#tablaClientes').on('click', '.modificar-cliente', function() {
    var idCliente = $(this).data('id');
    var nombreCliente = $(this).data('nombre');

    // Agregar lógica para redireccionar a la página de modificación
    window.location.href = "/clientes/" + idCliente + "/edit";
});


// Evento click para mostrar el modal y obtener el nombre del cliente a eliminar
$('#tablaClientes').on('click', '.eliminar-cliente', function() {
    var idCliente = $(this).data('id');
    var nombreCliente = $(this).data('nombre');
    
    $('#nombreClienteEliminar').text(nombreCliente);
    
    $('#confirmarEliminarModal').modal('show');
    
    // Al hacer clic en el botón "Eliminar" del modal
    $('#btnEliminarCliente').on('click', function() {
        eliminarCliente(idCliente);
        $('#confirmarEliminarModal').modal('hide');
    });
});

// Función para eliminar un cliente
function eliminarCliente(idCliente) {
    // Realizar la solicitud al servidor para eliminar el cliente con el ID proporcionado
    axios.delete(`/api/clientes/${idCliente}`)
        .then(function (response) {
            // Actualizar la tabla después de eliminar el cliente
            cargarClientes();
        })
        .catch(function (error) {
            console.error('Error al eliminar el cliente:', error);
        });
}