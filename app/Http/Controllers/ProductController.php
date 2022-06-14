<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function displayProducts()
    {
        return view('product-list');
    }

    public function displayID(int $id)
    {
        return view('product-details', ['id' => $id]);

    }
}
