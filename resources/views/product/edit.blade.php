@extends('includes.homepage.layout')
@section('title', "'Editer le produit ' {{ $product->name }}")
@section('content')
    <div>
        <h2 class="text-center">Nos produits :</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" id="products">
                <div class="col">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title"><a class="text-decoration-none"
                                                      href="{{ route('products.show', $product->id) }}">{{ ucfirst($product->name) }}</a>
                            </h3>
                            <p>Prix TTC : {{ $product->price / 100 }} €</p>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <label for="quantity">Quantité :</label>
                                <input class="w-auto " type="number" id="quantity" name="product_quantity" height="20"
                                       min="0" max="1337" value="0">
                            </div>
                            <img class="m-2" src="{{ $product->url_image }}" width="120" alt="Product picture">
                            <h6 class="card-title"><a class="text-decoration-none"
                                                      href="{{ route('products.show', $product->id) }}">Voir la fiche
                                    produit</a></h6>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
