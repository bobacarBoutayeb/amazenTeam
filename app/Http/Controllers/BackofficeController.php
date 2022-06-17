<?php

namespace App\Http\Controllers;

use App\Models\Product;

class BackofficeController extends Controller
{
    public function homepage()
    {
        return view('backoffice.layout', ['products' => Product::all()]);
    }
    public function index()
    {
        return view('backoffice.products', ['products' => Product::all()]);
    }
}
