<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        return view('category.index', ['categories' => Categorie::all()]);
    }
}
