<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function showCart()
    {
        return view('cart.show_all');
    }
}
