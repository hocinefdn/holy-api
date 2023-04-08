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

    // get specific article
    public function getArticle(Article $article)
    {

        return response([
            "article" => $article,
        ]);
    }

    // get shop articles
    public function getShopArticles(Shop $shop)
    {
        $articles = Article::where('shop_id', $shop->id)->get();

        return response(["articles" => $articles]);
    }

    // get shop articles
    public function getShopArticlesFromSlug($shopSlug)
    {
        $shop = Shop::where('slug', $shopSlug)->first();
        $articles = Article::where('shop_id', $shop->id)->get();

        return response(["articles" => $articles]);
    }


    // delete an article
    public function deleteArticle(Article $article)
    {
        $article->delete();

        return response(["message" => "L'article est supprimé avec succès"]);
    }
}