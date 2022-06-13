<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return view('admin.index');
});

//Route::resource('products','ProductController');
Route::resource('products' , '\App\Http\Controllers\Admin\ProductController')->except(['show']);
Route::resource('posts' , '\App\Http\Controllers\Admin\PostController')->except(['show']);

Route::get('users',function (){
    return 'users list';
});
