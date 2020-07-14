<?php

namespace App\Http\Controllers;

class ProductController
{
    public function show($product)
    {
        $products = [
            'name' => 'Cadbury',
            'description' => 'Chocolate',
            'price' => 50
        ];
    
        if(!array_key_exists($product, $products)){
            abort(404,'Sorry, not found!');
        }
    
        return view('test',['product' => $products[$product]]);
    
    }
}