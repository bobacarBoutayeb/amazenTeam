<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function display()
    {
        return view('product-list');
    }


    public function index()
    {
        //
    }

    public function displayID(int $id)
    {
        return view('product-details', ['id' => $id]);

    }
}
