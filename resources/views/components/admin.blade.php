<div class="flex justify-center items-center h-screen">
    <div class="bg-white shadow-md rounded p-6 w-full max-w-lg">
        <p class="text-lg font-semibold mb-4">Bienvenido, {{ auth()->user()->name }}.</p>
        <h2 class="text-xl font-semibold mb-2">Panel de Administración</h2>
        <div class="flex justify-center space-x-4">
            <a  class="h-20 w-20 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver Usuarios</a>
            <a  class="h-20 w-20 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Agregar Usuario</a>
            <a  class="h-20 w-20 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Vista Laravel React</a>
            <!-- Agrega aquí los botones adicionales según sea necesario -->
        </div>
    </div>
</div>
