@extends('layout.admin')

@section('content')

<div class="flex flex-col md:flex-row">
    <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
        <h1 class= "text-2xl font-bold mb-6">Editar Libro</h1>

        <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>


            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-bold mb-2">Autor:</label>
                <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

                        <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial:</label>
                <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoría:</label>
                <select name="categoria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value=""></option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                <a href="{{ route('home') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
            </div>
        </form>
    </main>
</div>

@endsection