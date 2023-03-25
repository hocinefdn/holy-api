<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // get user's shop
    public function getShops($userId)
    {
        $shops = Shop::where('user_id', $userId)->get();
        return response()->json(['shops' => $shops]);
    }


    // create shop
    public function createShops(Request $request)
    {
        $shop = Shop::create([
            "name" => $request->name,
            "description" => $request->description,
            "style" => json_encode($request->style),
            "rate" => 0,
            "details" => json_encode($request->details),
            "slug" => str_replace(' ', '-', strtolower($request->name)),
            "user_id" => $request->userId
        ]);

        return response([
            "message" => "Boutique créer avec succès"
        ])->status(200);
    }
}