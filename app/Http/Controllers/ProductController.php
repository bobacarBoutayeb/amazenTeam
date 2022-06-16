<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function showAllByName()
    {
        return view('product.show', ['products' => Product::orderBy('name')->get()]);
    }

    public function showAllByPrice()
    {
        return view('product.show', ['products' => Product::orderBy('price')->get()]);
    }

    public function showOneById(int $id)
    {
        return view('product.show_one', ['product' => Product::find($id)]);
    }
}
