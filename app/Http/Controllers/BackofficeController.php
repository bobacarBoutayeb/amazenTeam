<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function homepage()
    {
        return view('backoffice.layout-rempli');
    }
    public function index()
    {
        return view('backoffice.product.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('backoffice.product.edit');
    }

    public function store(Request $request)
    {
        // 1. La validation
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'description' => 'bail|required',
            'price' => 'bail|required|numeric',
            'discount' => 'bail|nullable|numeric',
            'weight' => 'bail|required|numeric',
            'url_image' => 'bail|nullable|url',
            'quantity' => 'bail|required|numeric',
            'available' => 'bail|required|boolean',
            'categories_id' => 'bail|required|numeric',
        ]);

        //TODO
        // 2. On upload l'image dans "/storage/app/public/posts"
        // $img_path = $request->picture->store("products");

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
        return redirect(route("backoffice.products.index"));
    }

    public function show(Product $product)
    {
        return view('backoffice.product.show', ['product' => $product]);
    }

    public function edit(Product $product, Category $category)
    {
        return view('backoffice.product.edit', [
            'product' => $product,
            'category' => $category,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        // 1. La validation

        // Les règles de validation pour "title" et "content"
        $rules = [
            'name' => 'bail|required|string|max:255',
            'description' => 'bail|required',
            'price' => 'bail|required|numeric',
            'discount' => 'bail|nullable|numeric',
            'weight' => 'bail|required|numeric',
            'url_image' => 'bail|nullable|url',
            'quantity' => 'bail|required|numeric',
            'available' => 'bail|required|boolean',
            'categories_id' => 'bail|required|numeric',
        ];

        //TODO Gestion image
//        // Si une nouvelle image est envoyée
//        if ($request->has("picture")) {
//            // On ajoute la règle de validation pour "picture"
//            $rules["picture"] = 'bail|required|image|max:1024';
//        }
//
        $this->validate($request, $rules);
//
//        // 2. On upload l'image dans "/storage/app/public/posts"
//        if ($request->has("picture")) {
//
//            //On supprime l'ancienne image
//            Storage::delete($product->picture);
//
//            $chemin_image = $request->picture->store("posts");
//        }

        // 3. On met à jour les informations du Post
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'weight' => $request->weight,
            'url_image' => $request->url_image,
            'quantity' => $request->quantity,
            'available' => $request->available,
            'categories_id' => $request->categories_id,
//            "picture" => isset($chemin_image) ? $chemin_image : $product->picture,
        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("backoffice.products.show", $product));
    }

    public function destroy(Product $product)
    {
//        //TODO image
//        // On supprime l'image existant
//        Storage::delete($product->picture);

        $product->delete();

        return redirect(route('backoffice.products.index'));
    }
}
