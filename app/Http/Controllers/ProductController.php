<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', ['products' => Product::all()]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

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

    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'));
    }
}
