<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', [
        "products" => Product::all()
    ]);
});

Route::get('/info', function () {
    return view('info');
});

