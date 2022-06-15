<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function displayProducts()
    {
        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }

    public function displayID(int $id)
    {
        return view('product-details', ['id' => $id]);

    }
}
