@extends('layout.admin')
@section('content')

<div class="flex flex-col md:flex-row">
    <main class="w-full lg:ml-64 mt-16 p-6 min-h-screen">
        <h1 class= "text-2xl font-bold mb-6">Perfil de Usuario</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('usuarios.update_profile') }}" method="POST" class = "bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre del usuario:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('nombre')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                <a href="{{ route('home') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
            </div>
        </form>

        <form action="{{ route('usuarios.update_password') }}" method="POST" class = "bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="current_password" class="block text-gray-700 font-bold mb-2">Contraseña actual:</label>
                <input type="password" name="current_password" id="current_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('current_password')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="new_password" class="block text-gray-700 font-bold mb-2">Nueva contraseña:</label>
                <input type="password" name="new_password" id="new_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('new_password')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="new_password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmar nueva contraseña:</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('new_password_confirmation')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
           
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                <a href="{{ route('home') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
            </div>
        </form>



    </main>
</div>

@endsection