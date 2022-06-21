<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('product.edit');
    }

    public function store(Request $request)
    {
//        dd($request);
        // 1. La validation
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            "description" => 'bail|required',
            'price' => 'bail|required|numeric',
            'discount' => 'bail|nullable|numeric',
            'weight' => 'bail|required|numeric',
            'url_image' => 'bail|required|url',
            'quantity' => 'bail|required|numeric',
            'availability' => 'bail|required|boolean',
            'categories_id' => 'bail|required|numeric',
        ]);

//        // 2. On upload l'image dans "/storage/app/public/posts"
//        $img_path = $request->picture->store("products");

        // 3. On enregistre les informations du Post
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'weight' => $request->weight,
            'url_image' => $request->url_image,
            'quantity' => $request->quantity,
            'available' => $request->availability,
            'categories_id' => $request->categories_id,
        ]);

        // 4. On retourne vers tous les produits : route("products.index")
        return redirect(route("products.index"));
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
