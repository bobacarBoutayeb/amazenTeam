<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function indexByName()
    {
        return view('product.index', ['products' => Product::orderBy('name')->get()]);
    }

    public function indexByPrice()
    {
        return view('product.index', ['products' => Product::orderBy('price')->get()]);
    }

    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }
}
