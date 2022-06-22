{{-- views/product/edit.blade.php --}}
@extends('backoffice.layout')

@if(isset($product))
    @section('title', 'Editer le produit : ' . $product->name)
@else
    @section('title', 'Ajouter un produit')
@endif

@section('content')
    <div class="table-responsive">
        @isset($product)
            <h2>Edition du produit :</h2>
        @endisset

        @empty($product)
            <h2>Ajout d'un produit :</h2>
        @endempty

        <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
        @isset($product)

                            <form method="POST" action="{{ route('backoffice.products.update', $product) }}">
    <!-- <input type="hidden" name="_method" value="PUT"> -->
                                @method('PUT')

                                @endisset

                                @empty($product)
                                    <form method="POST" action="{{ route('backoffice.products.store') }}">

                            @endempty

                                        {{--    //TODO Ajouter le drag and drop pour les images--}}
                                        {{--    //<form method="POST" action="{{ route('backoffice.products.store') }}" enctype="multipart/form-data">--}}

                                        <!-- Le token CSRF -->
                                        @csrf
                                        <p>
                                <label for="name" class="h5">Nom :</label><br/>

                                            <!-- S'il y a un $post->name, on complète la valeur de l'input -->
                                <input type="text" name="name"
                                       value="{{ isset($product) ? $product->name : old('name') }}"
                                       id="name" placeholder="Le nom du produit">

                                            <!-- Le message d'erreur pour "title" -->
                                        @error("name")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="description" class="h5">Description :</label><br/>

                                            <!-- S'il y a un $post->description, on complète la valeur de l'input -->
                                <textarea name="description" id="description" cols="30" rows="10"
                                          placeholder="La description du produit">{{ isset($product) ? $product->description : old('description') }}</textarea>

                                            <!-- Le message d'erreur pour "description" -->
                                        @error("description")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="price" class="h5">Prix (en centimes):</label><br/>

                                            <!-- S'il y a un $post->price, on complète la valeur de l'input -->
                                <input type="number" name="price"
                                       value="{{ isset($product) ? $product->price : old('price') }}" id="price"
                                       placeholder="Le prix du produit">

                                            <!-- Le message d'erreur pour "price" -->
                                        @error("price")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="discount" class="h5">Discount :</label><br/>

                                            <!-- S'il y a un $post->discount, on complète la valeur de l'input -->
                                <input type="number" name="discount"
                                       value="{{ isset($product) ? $product->discount : old('discount') }}"
                                       id="discount"
                                       placeholder="Le discount du produit">

                                            <!-- Le message d'erreur pour "discount" -->
                                        @error("discount")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="weight" class="h5">Poids (en gramme) :</label><br/>

                                            <!-- S'il y a un $post->weight, on complète la valeur de l'input -->
                                <input type="number" name="weight"
                                       value="{{ isset($product) ? $product->weight : old('weight') }}" id="weight"
                                       placeholder="Le poids du produit">

                                            <!-- Le message d'erreur pour "weight" -->
                                        @error("weight")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="url_image" class="h5">Url image :</label><br/>

                                            <!-- S'il y a un $post->url_image, on complète la valeur de l'input -->
                                <input type="text" name="url_image"
                                       value="{{ isset($product) ? $product->url_image : old('url_image') }}"
                                       id="url_image"
                                       placeholder="L'url de l'image du produit">

                                            <!-- Le message d'erreur pour "url_image" -->
                                        @error("url_image")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="quantity" class="h5">Quantité :</label><br/>

                                            <!-- S'il y a un $post->quantity, on complète la valeur de l'input -->
                                <input type="number" name="quantity"
                                       value="{{ isset($product) ? $product->quantity : old('quantity') }}"
                                       id="quantity"
                                       placeholder="La quantité du produit">

                                            <!-- Le message d'erreur pour "quantity" -->
                                        @error("quantity")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="stock" class="h5">Disponible :</label><br/>
                                            @isset($product)
                                                <input type="radio" name="available" value="1"
                                                       id="stock" {{ $product->available ? 'checked' : old('available') }}>
                                            @endisset

                                            @empty($product)
                                                <input type="radio" name="available" value="1"
                                                       id="stock" {{ old('available') }}>
                                            @endempty

                                            <label for="stock">Oui</label><br/>

                                            @isset($product)
                                                <input type="radio" name="available" value="0"
                                                       id="nostock" {{ !$product->available ? "checked" : old('available') }}>
                                            @endisset

                                            @empty($product)
                                                <input type="radio" name="available" value="0"
                                                       id="nostock" {{ old('available') }}>
                                            @endempty

                                            <label for="nostock">Non</label>

                                            <!-- Le message d'erreur pour "availability" -->
                                        @error("available")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <p>
                                <label for="category" class="h5">Catégorie :</label><br/>
                                <select name="categories_id" id="category">

                                    @isset($product)
                                        <option value="{{ $product->categories_id }}"
                                                selected>{{ $product->categories_id }} {{ old('available') }}</option>
                                    @endisset

                                    @empty($product)
                                        <option selected {{ old('available') }}>Choisir</option>
                                    @endempty

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>

                                            <!-- Le message d'erreur pour "category_id" -->
                                        @error("categories_id")
                                        <div>{{ $message }}</div>
                                        @enderror
                            </p>

                                        <input type="submit" name="valider" value="Valider">

                        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection
