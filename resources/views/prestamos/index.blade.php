@extends('layout.admin')

@section('content')

<div class="flex flex-col md:flex-row">
    <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
        <h1 class= "text-2xl font-bold mb-6">Prestamos</h1>

        <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Prestamo</a>
        <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        <table class = "min-w-full table-auto">
        <thead>
            <tr>
              <th class="px-4 py-2 border-b">ID</th>
              <th class="px-4 py-2 border-b"></th>
              <th class="px-4 py-2 border-b"></th>
              <th class="px-4 py-2 border-b"></th>
              <th class="px-4 py-2 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            </tbody>
        </table>
        
    
    
    </main>
</div>


@endsection
