<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Add article
     * @param Resquest $request
     *
     **/
    public function addArticle(Request $request)
    {
        $shop = Shop::where('id', $request->shopId)->first();

        $article = Article::create([
            'name' => str_replace(' ', '-', strtolower($request->title)),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'rate' => 0,
            'stock' => $request->stock,
            'details' => json_encode($request->details),
            'category_id' => $request->categoryId,
            'shop_id' => $request->shopId
        ]);

        // strore the images in storage
        $shopPath = 'shops/' . $shop->slug . '/' . $article->name;
        $imagePath = Storage::disk('public')->put($shopPath, $request->articleImages);
        $imagePath = '/storage/' . $imagePath;

        DB::table('images_article')->insert([
            'title' => "test",
            "type" => "index",
            "link" => $imagePath,
            "is_active" => 1,
            "article_id" => $article->id
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
        $articles = Article::where('shop_id', $shop->id)->with('images')->get();

        return response(["articles" => $articles]);
    }

    // get shop articles from slug
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