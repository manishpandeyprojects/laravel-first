<?php

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/blog', function (Request $request) {
    return Blog::all();
});


Route::get('/products', function (Request $request) {
    return Product::all();
});
