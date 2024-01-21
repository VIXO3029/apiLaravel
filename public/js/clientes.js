// document.addEventListener('DOMContentLoaded', function () {
//     cargarClientes();
// });

// async function cargarClientes() {
//     try {
//         const response = await axios.get('/api/clientes');
//         const clientes = response.data;

//         const tablaClientes = document.getElementById('tablaClientes');

//         clientes.forEach(cliente => {
//             const fila = document.createElement('tr');
//             fila.innerHTML = `
//                 <td>${cliente.id}</td>
//                 <td>${cliente.nombre}</td>
//                 <td>${cliente.apellidos}</td>
//             `;
//             tablaClientes.appendChild(fila);
//         });
//     } catch (error) {
//         console.error('Error al cargar los clientes:', error);
//     }
// }

//------------------------------------------------------------------------------------------------
// document.addEventListener('DOMContentLoaded', async function () {
//     try {
//         await cargarClientes();
//     } catch (error) {
//         console.error('Error al cargar los clientes:', error);
//     }
// });

// async function cargarClientes() {
//     const tablaClientes = document.getElementById('tablaClientes');

//     try {
//         const response = await axios.get('/api/clientes');
//         const clientes = response.data;

//         clientes.forEach(cliente => {
//             const fila = crearFilaCliente(cliente);
//             tablaClientes.appendChild(fila);
//         });
//     } catch (error) {
//         throw new Error('Error al obtener los datos de la API');
//     }
// }

// function crearFilaCliente(cliente) {
//     const fila = document.createElement('tr');
//     fila.innerHTML = `
//         <td>${cliente.id}</td>
//         <td>${cliente.nombre}</td>
//         <td>${cliente.apellidos}</td>
//     `;
//     return fila;
// }
//---------------------------------------------------------------------------------------------------
//public/js/clientes.js

document.addEventListener('DOMContentLoaded', function () {
    cargarClientes();
});

async function cargarClientes() {
    try {
        const response = await axios.get('/api/clientes');
        const clientes = response.data;

        const tablaClientes = document.getElementById('tablaClientes');
        // Limpiar contenido existente en la tabla
        tablaClientes.innerHTML = '';

        clientes.forEach(cliente => {
            const fila = document.createElement('tr');
            // Añadir clase 'eliminar-cliente' a la fila para el evento click
            fila.classList.add('eliminar-cliente');
            fila.dataset.id = cliente.id;
            fila.dataset.nombre = `${cliente.nombre} ${cliente.apellidos}`;

            fila.innerHTML = `
                <td>${cliente.id}</td>
                <td>${cliente.nombre}</td>
                <td>${cliente.apellidos}</td>
                <td>
                    <button class="btn btn-danger btn-sm eliminar-btn" data-id="${cliente.id}" data-nombre="${cliente.nombre} ${cliente.apellidos}">Eliminar</button>
                    <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}" class="btn btn-warning btn-sm">Modificar Cliente</a>

            `;
            tablaClientes.appendChild(fila);
        });

        // Delegación de eventos para el evento click en botones dentro de '#tablaClientes'
        tablaClientes.addEventListener('click', function (event) {
            if (event.target.classList.contains('eliminar-btn')) {
                // Si el clic fue en un botón de eliminar, obtener datos del cliente y mostrar el modal
                const idCliente = event.target.dataset.id;
                const nombreCliente = event.target.dataset.nombre;

                $('#nombreClienteEliminar').text(nombreCliente);
                $('#confirmarEliminarModal').modal('show');

                // Al hacer clic en el botón "Eliminar" del modal
                $('#btnEliminarCliente').one('click', function () {
                    // Realizar la solicitud al servidor para eliminar el cliente con el ID proporcionado
                    axios.delete(`/api/clientes/${idCliente}`)
                        .then(function (response) {
                            // Actualizar la tabla después de eliminar el cliente
                            cargarClientes();
                        })
                        .catch(function (error) {
                            console.error('Error al eliminar el cliente:', error);
                        })
                        .finally(function () {
                            $('#confirmarEliminarModal').modal('hide');
                        });
                });
            }
        });

    } catch (error) {
        console.error('Error al cargar los clientes:', error);
    }
}
