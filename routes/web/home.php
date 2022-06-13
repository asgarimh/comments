<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
//Auth::user()->id
////    return \auth()->user();
/*    $product = Product::find(5);
     auth()->user()->comments()->create([
         'comment'=> 'first',
         'commentable_id'=> $product->id,
         'commentable_type'=> 'App\Product'
     ]);
     return $product;*/
    return view('welcome');
});


Route::get('products',[\App\Http\Controllers\ProductController::class, 'index']);

Route::get('products/{product}',[\App\Http\Controllers\ProductController::class, 'single']);


Route::get('posts',[\App\Http\Controllers\PostController::class, 'index']);

Route::get('posts/{post}',[\App\Http\Controllers\PostController::class, 'single']);
Route::post('comments',[\App\Http\Controllers\HomeController::class, 'comment'])->name('send.comment');
