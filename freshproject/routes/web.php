<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/{product}', function ($product) {
    $products = [
        'name' => 'Cadbury',
        'description' => 'Chocolate',
        'price' => 50
    ];

    if(!array_key_exists($product, $products)){
        abort(404,'Sorry, not found!');
    }

    return view('test',['product' => $products[$product]]);
});*/


Route::get('/{product}', 'ProductController@show');