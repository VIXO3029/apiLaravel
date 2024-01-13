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

// public/js/clientes.js

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


