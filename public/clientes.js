import './bootstrap';
//  public/js/clientes.js;

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
