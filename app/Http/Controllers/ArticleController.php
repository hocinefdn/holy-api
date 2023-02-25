<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ArticleController extends Controller
{
    public function addUser(Request $request)
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

        $token = $user->createToken('web-token')->plainTextToken;

        return response([
            "user" => $user,
            "token" => $token
        ]);
    }


    public function login()
    {
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