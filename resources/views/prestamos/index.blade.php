@extends('layout.admin')

@section('content')

<div class="flex flex-col md:flex-row">
    <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
        <h1 class= "text-2xl font-bold mb-6">Prestamos</h1>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Prestamo</a>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                <tr class="bg-gray-50">
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Libro</th>
                <th class="px-4 py-2 border-b">Usuario</th>
                <th class="px-4 py-2 border-b">Fecha</th>
                <th class="px-4 py-2 border-b">Estatus</th>
                <th class="px-4 py-2 border-b">Fecha de Entrega</th>
                <th class="px-4 py-2 border-b">Acciones</th>
                </tr>
                </thead>
            
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($prestamos as $prestamo)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->libro->nombre }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->usuario->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($prestamo->estado == 'pendiente')
                                    <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Pendiente</span>
                                @else
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Entregado</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : '' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($prestamo->estado == 'pendiente')
                                <a href = "{{ route('prestamos.entregar', $prestamo->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Entregar</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
        </div>
    
    </main>
</div>


@endsection
