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

        // Limpiar contenido actual de la tabla
        tablaClientes.innerHTML = '';

        // Crear filas para cada cliente
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

//-------------------------------------------------------------------------------

//public/js/clientes.js

// import './bootstrap';

// document.addEventListener('DOMContentLoaded', function () {
//     cargarClientes();
// });

// async function cargarClientes() {
//     try {
//         const response = await axios.get('/api/clientes');
//         const clientes = response.data;

//         const tablaClientes = document.getElementById('tablaClientes');
//         // Limpiar contenido existente en la tabla
//         tablaClientes.innerHTML = '';

//         clientes.forEach(cliente => {
//             const fila = document.createElement('tr');
//             // Añadir clase 'eliminar-cliente' a la fila para el evento click
//             fila.classList.add('eliminar-cliente');
//             fila.dataset.id = cliente.id;
//             fila.dataset.nombre = `${cliente.nombre} ${cliente.apellidos}`;

//             fila.innerHTML = `
//                 <td>${cliente.id}</td>
//                 <td>${cliente.nombre}</td>
//                 <td>${cliente.apellidos}</td>
//                 <td>
//                     <button class="btn btn-danger btn-sm">Eliminar</button>
//                 </td>
//             `;
//             tablaClientes.appendChild(fila);
//         });
//     } catch (error) {
//         console.error('Error al cargar los clientes:', error);
//     }
// }

// // Delegación de eventos para el evento click en botones dentro de '#tablaClientes'
// document.getElementById('tablaClientes').addEventListener('click', function (event) {
//     if (event.target.classList.contains('btn-danger')) {
//         // Si el clic fue en un botón de eliminar, obtener datos del cliente y mostrar el modal
//         var fila = event.target.closest('tr');
//         var idCliente = fila.dataset.id;
//         var nombreCliente = fila.dataset.nombre;

//         $('#nombreClienteEliminar').text(nombreCliente);
//         $('#confirmarEliminarModal').modal('show');

//         // Al hacer clic en el botón "Eliminar" del modal
//         $('#btnEliminarCliente').on('click', function () {
//             eliminarCliente(idCliente);
//             $('#confirmarEliminarModal').modal('hide');
//         });
//     }
// });

// // Función para eliminar un cliente
// function eliminarCliente(idCliente) {
//     // Realizar la solicitud al servidor para eliminar el cliente con el ID proporcionado
//     axios.delete(`/api/clientes/${idCliente}`)
//         .then(function (response) {
//             // Actualizar la tabla después de eliminar el cliente
//             cargarClientes();
//         })
//         .catch(function (error) {
//             console.error('Error al eliminar el cliente:', error);
//         });
// }
