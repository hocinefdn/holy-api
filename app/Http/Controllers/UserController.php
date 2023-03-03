<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // register
    public function register(Request $request)
    {
        // hashing
        $password = Hash::make($request->password);

        // if (Hash::check('secret', $hashedPassword))
        // {
        // The passwords match...
        // }

        $user = User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => $password,
            "role" => 0
        ]);

        $token = $user->createToken("web-token")->plainTextToken;

        return response([
            "user" => $user,
            "token" => $token
        ]);
    }

    // login function
    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $user = User::where('email', $request->email)->first();
            return response()->json([
                'status' => true,
                'user' => $user,
                'message' => "L'utilisateur s'est connecté avec succès",
                'token' => $user->createToken("web-token")->plainTextToken
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => "L'e-mail ou le mot de passe ne correspondent pas.",
            ], 401);
        };
    }



    public function getUser()
    {


        // $token = $user->createToken('main'->plainTextToken);

        return response([
            "user" => "test",
            // "token" => $token
        ]);
    }
}