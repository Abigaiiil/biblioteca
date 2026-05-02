<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;
use App\Http\Resources\LibroResource;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        #Validar los datos de inicio de sesión
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email',$credentials['email'])
        ->where('password',bcrypt($credentials['password']));

        #Intentar iniciar sesión
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('api-token')->plainTextToken;

            return ['token' => $token];
        }

        return ['error' => 'Datos incorrectos.'];
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return ['data' => 'Sesión cerrada.'];
    }

    public function libros_disponibles()
    {
        $libros = Libro::where('estatus', 0)->orderBy('id', 'asc')->get();
        $libros_resource = LibroResource::collection($libros);
        return $libros_resource;
    }
}
