@extends('layout.admin')

@section('content')

<div class="flex flex-col md:flex-row">
    <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
        <h1 class= "text-2xl font-bold mb-6">Crear Prestamos</h1>

        <div class="bg-white shadow-md rounded-lg p-6 mt-4">
       <form action ="{{ route('prestamos.buscar_usuario') }}" method="POST">
        @csrf
        <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID del Usuario:</label>   
        <input type="text" name="usuario_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre del Usuario:</label>   
        <input type="text" name="usuario_nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

        <div class="flex items-center justify-between mt-4">
           <input type="submit" value="Buscar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
           <a href="{{ route('prestamos.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
        </div>
    </form>
    @isset($usuario)
        <div class="mt-6">
            <h2 class="text-xl font-bold mb-4">Resultados de la búsqueda:</h2>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>
    @endisset
        </div>
    </main>
</div>

@endsection