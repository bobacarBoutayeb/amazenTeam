{{-- views/product/edit.blade.php --}}
@extends('includes.homepage.layout')

@if(isset($product))
    @section('title', 'Editer le produit : ' . $product->name)
@else
    @section('title', 'Ajouter un produit')
@endif

@section('content')
    <div class="d-flex justify-content-center">

        @if(isset($product))

            <form method="POST" action="{{ route('backoffice.products.update', $product) }}">
                <!-- <input type="hidden" name="_method" value="PUT"> -->
                @method('PUT')

        @else

            <form method="POST" action="{{ route('backoffice.products.store') }}">

        @endif

{{--            //TODO Ajouter le drag and drop pour les images--}}
{{--            //<form method="POST" action="{{ route('backoffice.products.store') }}" enctype="multipart/form-data">--}}

            <!-- Le token CSRF -->
            @csrf
            <p>
                <label for="name">Nom :</label><br/>

                <!-- S'il y a un $post->name, on complète la valeur de l'input -->
                <input type="text" name="name" value="{{ isset($product->name) ? $product->name : old('name') }}" id="name" placeholder="Le nom du produit">

                <!-- Le message d'erreur pour "title" -->
            @error("name")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="description">Description :</label><br/>

                <!-- S'il y a un $post->description, on complète la valeur de l'input -->
                <textarea name="description" id="description" cols="30" rows="10" placeholder="La description du produit">{{ isset($product->description) ? $product->description : old('description') }}</textarea>

                <!-- Le message d'erreur pour "description" -->
            @error("description")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="price">Prix (en centimes):</label><br/>

                <!-- S'il y a un $post->price, on complète la valeur de l'input -->
                <input type="number" name="price" value="{{ isset($product->price) ? $product->price : old('price') }}" id="price" placeholder="Le prix du produit">

                <!-- Le message d'erreur pour "price" -->
            @error("price")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="discount">Discount :</label><br/>

                <!-- S'il y a un $post->discount, on complète la valeur de l'input -->
                <input type="number" name="discount" value="{{ isset($product->discount) ? $product->discount : old('discount') }}" id="discount" placeholder="Le discount du produit">

                <!-- Le message d'erreur pour "discount" -->
            @error("discount")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="weight">Poids (en gramme) :</label><br/>

                <!-- S'il y a un $post->weight, on complète la valeur de l'input -->
                <input type="number" name="weight" value="{{ isset($product->weight) ? $product->weight : old('weight') }}" id="weight" placeholder="Le poids du produit">

                <!-- Le message d'erreur pour "weight" -->
            @error("weight")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="url_image">Url image :</label><br/>

                <!-- S'il y a un $post->url_image, on complète la valeur de l'input -->
                <input type="text" name="url_image" value="{{ isset($product->url_image) ? $product->url_image : old('url_image') }}" id="url_image" placeholder="L'url de l'image du produit">

                <!-- Le message d'erreur pour "url_image" -->
            @error("url_image")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="quantity">Quantité :</label><br/>

                <!-- S'il y a un $post->quantity, on complète la valeur de l'input -->
                <input  type="number" name="quantity" value="{{ isset($product->quantity) ? $product->quantity : old('quantity') }}" id="quantity" placeholder="La quantité du produit">

                <!-- Le message d'erreur pour "quantity" -->
            @error("quantity")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="available">Disponible :</label><br/>
                <input type="radio" name="availability" value="1" id="available" {{ $product->available ? "checked" : old('availablility') }}>
                <label for="available">Oui</label><br/>
                <input type="radio" name="availability" value="0" id="unavailable" {{ !$product->available ? "checked" : old('availablility') }}>
                <label for="unavailable">Non</label>
                <!-- Le message d'erreur pour "availability" -->
            @error("available")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="category">Catégorie :</label><br/>
                <select name="categories_id" id="category">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
{{--                    @foreach($categories as $category)--}}
{{--                        <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                    @endforeach--}}
                </select>

                <!-- Le message d'erreur pour "category_id" -->
            @error("categories_id")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <input type="submit" name="valider" value="Valider">

        </form>
    </div>
@endsection
