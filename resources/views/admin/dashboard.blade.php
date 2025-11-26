<x-admin-layout title="Dashboard | TecSoftware" :breadcrumbs="[
    [
        'name' => 'Dashboard',
    ]
]">

    <div class="space-y-6 text-white">

        {{-- Saludo y Fecha --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-black">Bienvenido al Dashboard</h1>
                <p class="text-gray-400 mt-1">Lunes, 25 de Noviembre de 2025</p>
            </div>
        </div>

        {{-- Tarjetas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-lg p-6 hover:scale-105 duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300 text-sm">Total Alumnos</p>
                        <p class="text-3xl font-bold mt-2">1,248</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-full">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                </div>
                <span class="text-sm text-gray-300 mt-4 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i> Registrados
                </span>
            </div>

            <div class="bg-gradient-to-br from-gray-700 to-black rounded-xl shadow-lg p-6 hover:scale-105 duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300 text-sm">Total Profesores</p>
                        <p class="text-3xl font-bold mt-2">12</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-full">
                        <i class="fas fa-solid fa-chalkboard-user text-3xl"></i>
                    </div>
                </div>
                <span class="text-sm text-gray-300 mt-4 flex items-center">
                    <i class="fas fa-check-circle mr-1"></i> Configurados
                </span>
            </div>

            <div class="bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-lg p-6 hover:scale-105 duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300 text-sm">Total Permisos</p>
                        <p class="text-3xl font-bold mt-2">48</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-full">
                        <i class="fas fa-key text-3xl"></i>
                    </div>
                </div>
                <span class="text-sm text-gray-300 mt-4 flex items-center">
                    <i class="fas fa-lock mr-1"></i> Disponibles
                </span>
            </div>

            <div class="bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-lg p-6 hover:scale-105 duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300 text-sm">Administradores</p>
                        <p class="text-3xl font-bold mt-2">8</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-full">
                        <i class="fas fa-user-shield text-3xl"></i>
                    </div>
                </div>
                <span class="text-sm text-gray-300 mt-4 flex items-center">
                    <i class="fas fa-crown mr-1"></i> Con rol admin
                </span>
            </div>

        </div>

        {{-- Contenido inferior --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- Usuarios recientes --}}
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <div class="flex justify-between mb-4 items-center">
                    <h2 class="text-xl font-bold">
                        <i class="fas fa-user-plus text-gray-300 mr-2"></i>
                        Usuarios Recientes
                    </h2>
                    <a href="#" class="text-gray-300 hover:text-white text-sm">Ver todos →</a>
                </div>

                <div class="space-y-3">

                    <div class="flex items-center p-3 bg-gray-700 hover:bg-gray-600 rounded-lg transition">
                        <div class="w-10 h-10 bg-gray-900 rounded-full flex items-center justify-center text-white font-bold">JD</div>
                        <div class="ml-3 flex-1">
                            <p class="font-medium">Juan Díaz</p>
                            <p class="text-sm text-gray-400">juan.diaz@example.com</p>
                        </div>
                        <span class="text-xs text-gray-500">Hace 2 hrs</span>
                    </div>

                </div>
            </div>

            {{-- Accesos rápidos --}}
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-bold mb-4">
                    <i class="fas fa-bolt text-gray-300 mr-2"></i>
                    Accesos Rápidos
                </h2>

                <div class="grid grid-cols-2 gap-4">

                    <button class="bg-gray-700 hover:bg-gray-600 text-white p-4 rounded-lg transition">
                        <i class="fas fa-users text-lg"></i>
                        <p class="mt-2 font-medium">Gestionar Alumnos</p>
                    </button>

                    <button class="bg-gray-700 hover:bg-gray-600 text-white p-4 rounded-lg transition">
                        <i class="fas fa-shield-alt text-lg"></i>
                        <p class="mt-2 font-medium">Gestionar Profes</p>
                    </button>

                </div>
            </div>

        </div>

        {{-- Información Sistema --}}
        <div class="bg-gradient-to-r from-gray-700 to-black rounded-xl shadow-lg p-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="bg-white/10 p-4 rounded-full mr-4">
                        <i class="fas fa-info-circle text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Sistema de Gestión TecSoftware</h3>
                        <p class="text-gray-300 mt-1">Gestión de profesores, alumnos y materias</p>
                    </div>
                </div>

                <div class="text-right">
                    <p class="text-sm text-gray-400">Versión</p>
                    <p class="text-2xl font-bold">1.0.0</p>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>