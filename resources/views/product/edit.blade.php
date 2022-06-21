{{-- views/product/edit.blade.php --}}
@extends('includes.homepage.layout')
{{--@section('title', "'Editer le produit ' {{ $product->name }}")--}}
@section('content')
    <div class="d-flex justify-content-center">
        @section('title', 'Créer un produit :')
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">

            <!-- Le token CSRF -->
            @csrf
            <p>
                <label for="name">Nom :</label><br/>
                <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Le nom du produit">

                <!-- Le message d'erreur pour "title" -->
            @error("name")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="description">Description :</label><br/>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="La description du produit">{{ old('description') }}</textarea>

                <!-- Le message d'erreur pour "description" -->
            @error("description")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="price">Prix :</label><br/>
                <input type="number" name="price" value="{{ old('price') }}" id="price" placeholder="Le prix du produit">

                <!-- Le message d'erreur pour "price" -->
            @error("price")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="discount">Discount :</label><br/>
                <input type="number" name="discount" value="{{ old('discount') }}" id="discount" placeholder="Le discount du produit">

                <!-- Le message d'erreur pour "discount" -->
            @error("discount")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="weight">Poids :</label><br/>
                <input type="number" name="weight" value="{{ old('weight') }}" id="weight" placeholder="Le poids du produit">

                <!-- Le message d'erreur pour "weight" -->
            @error("weight")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="url_image">Url image :</label><br/>
                <input type="text" name="url_image" value="{{ old('url_image') }}" id="url_image" placeholder="L'url de l'image du produit">

                <!-- Le message d'erreur pour "url_image" -->
            @error("url_image")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="quantity">Quantité :</label><br/>
                <input type="number" name="quantity" value="{{ old('quantity') }}" id="quantity" placeholder="La quantité du produit">

                <!-- Le message d'erreur pour "quantity" -->
            @error("quantity")
            <div>{{ $message }}</div>
            @enderror
            </p>

            <p>
                <label for="available">Disponible :</label><br/>
                <input type="radio" name="availability" value="1" id="available" {{ old('availablility') ? "checked" : '' }}>
                <label for="available">Oui</label><br/>
                <input type="radio" name="availability" value="0" id="unavailable" {{ old('availablility') ? "checked" : '' }}>
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
