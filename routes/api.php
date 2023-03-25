<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//user

Route::post('/user/register', [UserController::class, 'register']);
Route::post('/user/login', [UserController::class, 'login']);
Route::get('/user', [UserController::class, 'getUser']);


//articles
Route::post('/articles', [ArticleController::class, 'addArticle']);
Route::get('/articles/{article}', [ArticleController::class, 'getArticle']);
Route::get('/articles/get-shop-articles/{shop}', [ArticleController::class, 'getShopArticles']);

//caterogies
Route::get('/categories/getAll', [CategoryController::class, 'getAllCategories']);

// shops
Route::get('/shops/{user}', [ShopController::class, 'getShops']);
Route::post('/shops/', [ShopController::class, 'createShops']);