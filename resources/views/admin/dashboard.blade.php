<x-admin-layout title="Dashboard | TecSoftware" :breadcrumbs="[
    [
        'name' => 'Dashboard',
    ]
]">
    <div class="space-y-6">
        {{-- Saludo y fecha --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Bienvenido al Dashboard</h1>
                <p class="text-gray-600 mt-1">Lunes, 25 de Noviembre de 2025</p>
            </div>
        </div>

        {{-- Tarjetas de estadísticas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Total Usuarios --}}
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm font-medium">Total Usuarios</p>
                        <p class="text-3xl font-bold mt-2">1,248</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm text-blue-100">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>Registrados en el sistema</span>
                </div>
            </div>

            {{-- Total Roles --}}
            <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm font-medium">Total Roles</p>
                        <p class="text-3xl font-bold mt-2">12</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <i class="fas fa-shield-alt text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm text-purple-100">
                    <i class="fas fa-check-circle mr-1"></i>
                    <span>Roles configurados</span>
                </div>
            </div>

            {{-- Total Permisos --}}
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm font-medium">Total Permisos</p>
                        <p class="text-3xl font-bold mt-2">48</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <i class="fas fa-key text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm text-green-100">
                    <i class="fas fa-lock mr-1"></i>
                    <span>Permisos disponibles</span>
                </div>
            </div>

            {{-- Administradores --}}
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-100 text-sm font-medium">Administradores</p>
                        <p class="text-3xl font-bold mt-2">8</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <i class="fas fa-user-shield text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm text-orange-100">
                    <i class="fas fa-crown mr-1"></i>
                    <span>Con rol de admin</span>
                </div>
            </div>
        </div>

        {{-- Sección de contenido adicional --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- Usuarios recientes --}}
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-gray-800">
                        <i class="fas fa-user-plus text-blue-500 mr-2"></i>
                        Usuarios Recientes
                    </h2>
                    <a href="#" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                        Ver todos
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold mr-3">
                            JD
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">Juan Díaz</p>
                            <p class="text-sm text-gray-500">juan.diaz@example.com</p>
                        </div>
                        <span class="text-xs text-gray-400">Hace 2 horas</span>
                    </div>

                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-white font-bold mr-3">
                            MG
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">María García</p>
                            <p class="text-sm text-gray-500">maria.garcia@example.com</p>
                        </div>
                        <span class="text-xs text-gray-400">Hace 5 horas</span>
                    </div>

                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-white font-bold mr-3">
                            CL
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">Carlos López</p>
                            <p class="text-sm text-gray-500">carlos.lopez@example.com</p>
                        </div>
                        <span class="text-xs text-gray-400">Hace 1 día</span>
                    </div>

                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center text-white font-bold mr-3">
                            AR
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">Ana Rodríguez</p>
                            <p class="text-sm text-gray-500">ana.rodriguez@example.com</p>
                        </div>
                        <span class="text-xs text-gray-400">Hace 2 días</span>
                    </div>

                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center text-white font-bold mr-3">
                            PM
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">Pedro Martínez</p>
                            <p class="text-sm text-gray-500">pedro.martinez@example.com</p>
                        </div>
                        <span class="text-xs text-gray-400">Hace 3 días</span>
                    </div>
                </div>
            </div>

            {{-- Accesos rápidos --}}
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-bolt text-yellow-500 mr-2"></i>
                    Accesos Rápidos
                </h2>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-lg hover:shadow-md transition-shadow group">
                        <div class="flex flex-col items-center text-center">
                            <div class="bg-blue-500 rounded-full p-3 mb-3 group-hover:scale-110 transition-transform">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <span class="text-gray-800 font-medium">Gestionar Usuarios</span>
                        </div>
                    </a>

                    <a href="#" class="bg-gradient-to-br from-purple-50 to-purple-100 p-4 rounded-lg hover:shadow-md transition-shadow group">
                        <div class="flex flex-col items-center text-center">
                            <div class="bg-purple-500 rounded-full p-3 mb-3 group-hover:scale-110 transition-transform">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <span class="text-gray-800 font-medium">Gestionar Roles</span>
                        </div>
                    </a>

                    <a href="#" class="bg-gradient-to-br from-green-50 to-green-100 p-4 rounded-lg hover:shadow-md transition-shadow group">
                        <div class="flex flex-col items-center text-center">
                            <div class="bg-green-500 rounded-full p-3 mb-3 group-hover:scale-110 transition-transform">
                                <i class="fas fa-plus-circle text-white text-xl"></i>
                            </div>
                            <span class="text-gray-800 font-medium">Crear Rol</span>
                        </div>
                    </a>

                    <a href="#" class="bg-gradient-to-br from-orange-50 to-orange-100 p-4 rounded-lg hover:shadow-md transition-shadow group">
                        <div class="flex flex-col items-center text-center">
                            <div class="bg-orange-500 rounded-full p-3 mb-3 group-hover:scale-110 transition-transform">
                                <i class="fas fa-user-plus text-white text-xl"></i>
                            </div>
                            <span class="text-gray-800 font-medium">Crear Usuario</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Información del sistema --}}
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="bg-white/20 rounded-full p-4 mr-4">
                        <i class="fas fa-info-circle text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Sistema de Gestión TecSoftware</h3>
                        <p class="text-indigo-100 mt-1">Plataforma de gestión de usuarios, roles y permisos</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm text-indigo-100">Versión</p>
                    <p class="text-2xl font-bold">1.0.0</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>