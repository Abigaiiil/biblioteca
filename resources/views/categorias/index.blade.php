@extends('layout.admin')

@section('content')

    <div class="flex flex-col md:flex-row">
        <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
            <h1 class= "text-2xl font-bold mb-6">Categorías</h1>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar categoría</a>
             <br><br>   

            <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                        <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($categorias as $categoria)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $categoria->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $categoria->nombre }} </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $categorias->links() }}
                </div>
            </div>
        </main>
    </div>
@endsection
