@extends('layout.admin')

@section('content')

<div class="flex flex-col md:flex-row">
    <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
        <h1 class= "text-2xl font-bold mb-6">Agregar Nueva Categoría</h1>

        <form action="{{ route('categorias.store') }}" method="POST" class = "bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la categoría:</label>
                <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                <a href="{{ route('categorias.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
            </div>
        </form> 
    </main>
</div>

@endsection