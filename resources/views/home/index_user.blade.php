@extends('layout.user')

@section('content')
<main class="w-full lg:ml-64 mt-16 p-6 min-h-screen"> 
    <h1>Bienvenido {{ auth()->user()->name }}</h1>
    </main>
@endsection 