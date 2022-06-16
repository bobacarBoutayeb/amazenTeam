@extends('layout')

@section('content')
    @if(isset($product))
        <div>
            <h2 class="text-center">Fiche du produit {{$product->name}} :</h2>
            <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 g-4 mb-5" id="products">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">{{ ucfirst($product->name) }}</h3>
                            <p>Prix TTC : {{ $product['price'] / 100 }} €</p>
                            <img class="m-2" src="{{ $product->url_image }}" width="120" alt="Product picture">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        vide
    @endif
@endsection

