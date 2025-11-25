<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email Invalido, porfavor ingrese de nuevo',
                'password.required' => 'Contraseña Invalida, porfavor ingrese de nuevo'
            ]
        );

        if (!Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $token = $user->createToken('my_token')->plainTextToken;

        $res = [
            'message' => 'Se inicio sesión correctamente',
            'token' => $token,
            'user' => $user
        ];

        return response()->json($res, 200);
    }

   

    public function register(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|string|email',
                'password' => 'required|string',
                'name' => 'required|string'
            ]
        );

        $user = User::create(['name' => $validate['name'], 'email' => $validate['email'], 'password' => $validate['password']]);
        $token = $user->createToken("first-token");
        return ['token' => $token->plainTextToken];
    }

    public function validate_token(Request $request)
    {
        return response()->json(
            [
                'message' => 'Token correcto',
                'user' => $request->user()
            ],
            200
        );
    }
}
