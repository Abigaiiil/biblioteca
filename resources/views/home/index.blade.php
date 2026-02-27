@extends('layout.admin')
 
@section('content')

<!-- Contenido principal -->
<div class="flex flex-col md:flex-row">
        
        <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
            <!-- Encabezado -->
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Gestión de Libros</h1>
                <p class="text-gray-600">Administra el catálogo de libros de la biblioteca</p>
            </header>

            <!-- Tarjetas de estadísticas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <h3 class="text-gray-500 text-sm uppercase">Total de libros</h3>
                    <p class="text-3xl font-bold">1,247</p>
                    <span class="text-xs text-green-500">+12 nuevos</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-yellow-500">
                    <h3 class="text-gray-500 text-sm uppercase">Libros prestados</h3>
                    <p class="text-3xl font-bold">189</p>
                    <span class="text-xs text-gray-500">15.2% del total</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
                    <h3 class="text-gray-500 text-sm uppercase">Categorías</h3>
                    <p class="text-3xl font-bold">12</p>
                    <span class="text-xs text-blue-500">+2 nuevas</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-purple-500">
                    <h3 class="text-gray-500 text-sm uppercase">Devoluciones pendientes</h3>
                    <p class="text-3xl font-bold">24</p>
                    <span class="text-xs text-red-500">-3.4% desde ayer</span>
                </div>
            </div>

            <!-- Sección de categorías -->
            <section class="bg-white shadow-md rounded-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">
                        <i class="fas fa-tags text-blue-600 mr-2"></i>
                        Categorías
                    </h2>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition flex items-center text-sm">
                        <i class="fas fa-plus-circle mr-2"></i>
                        Nueva categoría
                    </button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
                    <span class="bg-blue-100 text-blue-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Literatura</span>
                    <span class="bg-purple-100 text-purple-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Ciencia Ficción</span>
                    <span class="bg-green-100 text-green-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Historia</span>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Infantil</span>
                    <span class="bg-pink-100 text-pink-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Poesía</span>
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Ciencia</span>
                    <span class="bg-red-100 text-red-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Autoayuda</span>
                    <span class="bg-teal-100 text-teal-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Biografía</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Filosofía</span>
                    <span class="bg-cyan-100 text-cyan-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Arte</span>
                    <span class="bg-emerald-100 text-emerald-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Religión</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-2 rounded-lg text-sm font-medium text-center">Tecnología</span>
                </div>
                <div class="mt-3 text-right">
                    <a href="#" class="text-blue-600 text-sm hover:underline">Ver todas las categorías →</a>
                </div>
            </section>

            <!-- Barra de búsqueda y filtros -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-4 gap-4">
                <div class="relative w-full md:w-96">
                    <input type="text" placeholder="Buscar libro por título, autor o ISBN..." 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="flex space-x-2 w-full md:w-auto">
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Todas las categorías</option>
                        <option>Literatura</option>
                        <option>Ciencia Ficción</option>
                        <option>Historia</option>
                    </select>
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Todos los estados</option>
                        <option>Disponible</option>
                        <option>Prestado</option>
                        <option>Atrasado</option>
                    </select>
                    <button class="bg-gray-100 text-gray-700 px-3 py-2 rounded-lg hover:bg-gray-200">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </div>

            <!-- Tabla de libros -->
            <section class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">
                        <i class="fas fa-book text-blue-600 mr-2"></i>
                        Lista de Libros
                    </h2>
                    <a href="{{ route('libros.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition flex items-center text-sm">
                        <i class="fas fa-plus-circle mr-2"></i>
                        Agregar libro
                    </a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="p-3 border-b text-gray-600 font-semibold text-sm">TÍTULO</th>
                                <th class="p-3 border-b text-gray-600 font-semibold text-sm">AUTOR</th>
                                <th class="p-3 border-b text-gray-600 font-semibold text-sm">ISBN</th>
                                <th class="p-3 border-b text-gray-600 font-semibold text-sm">CATEGORÍA</th>
                                <th class="p-3 border-b text-gray-600 font-semibold text-sm">DISPONIBILIDAD</th>
                                <th class="p-3 border-b text-gray-600 font-semibold text-sm">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($libros as $libro)
                            <tr>
                                <td class="p-3 border-b text-sm font-medium">{{ $libro->nombre }}</td>
                                <td class="p-3 border-b text-sm">{{ $libro->autor }}</td>
                                <td class="p-3 border-b text-sm font-mono text-xs">{{ $libro->isbn }}</td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">{{ $libro->categoria->nombre }}</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Disponible</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!--<tr>
                                <td class="p-3 border-b text-sm font-medium">1984</td>
                                <td class="p-3 border-b text-sm">George Orwell</td>
                                <td class="p-3 border-b text-sm font-mono text-xs">978-0451524935</td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full text-xs">Ciencia Ficción</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs">Prestado</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 border-b text-sm font-medium">Don Quijote de la Mancha</td>
                                <td class="p-3 border-b text-sm">Miguel de Cervantes</td>
                                <td class="p-3 border-b text-sm font-mono text-xs">978-8420732855</td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">Literatura</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Disponible</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 border-b text-sm font-medium">Breve historia del tiempo</td>
                                <td class="p-3 border-b text-sm">Stephen Hawking</td>
                                <td class="p-3 border-b text-sm font-mono text-xs">978-8498920356</td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded-full text-xs">Ciencia</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Disponible</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 border-b text-sm font-medium">El principito</td>
                                <td class="p-3 border-b text-sm">Antoine de Saint-Exupéry</td>
                                <td class="p-3 border-b text-sm font-mono text-xs">978-0156013987</td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs">Infantil</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Atrasado</span>
                                </td>
                                <td class="p-3 border-b text-sm">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>-->
                        </tbody>
                    </table>
                </div>

                <!-- Paginación -->
                <div class="flex justify-between items-center mt-4 text-sm">
                    <p class="text-gray-600">Mostrando 1-5 de 1,247 libros</p>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">Anterior</button>
                        <button class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700">1</button>
                        <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">3</button>
                        <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">Siguiente</button>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @endsection