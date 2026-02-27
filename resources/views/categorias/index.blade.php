@extends('layout.admin')

@section('content')

    <div class="flex flex-col md:flex-row">
        <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
            <h1 class= "text-2xl font-bold mb-6">Categorías</h1>

            <div class="bg-white shadow-md rounded-lg p-6">
                <table class = "min-w-full table-auto">
                    <thead>
                        <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                            <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $categoria->nombre }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
