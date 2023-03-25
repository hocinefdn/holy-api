<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ArticleController extends Controller
{
    public function addArticle(Request $request)
    {

        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'rate' => 0,
            'stock' => $request->stock,
            'details' => json_encode($request->details),
            'category_id' => $request->categoryId,
            'shop_id' => $request->shopId
        ]);

        return response([
            "message" => "Article ajouté avec succès",
        ]);
    }


    public function getArticle(Article $article)
    {

        return response([
            "article" => $article,
        ]);
    }


    public function getShopArticles(Shop $shop)
    {
        $articles = Article::where('shop_id', $shop->id)->get();

        return response(["articles" => $articles]);
    }
}