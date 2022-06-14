<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function displayCart()
    {
        return view('cart');
    }
}
