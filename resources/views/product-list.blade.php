@extends('layout')

@section('content')
    <div>
        <p class="text-center">CECI EST UNE LISTE DE PRODUITS</p>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" id="products">
            @foreach($products as $product)
                <div class="col">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">{{ ucfirst($product->name) }}</h3>
                            <p>Prix TTC : {{ $product->price / 100 }} €</p>
                            <div class="row p-2">
                                <form method="post" action="{{route('placeOrder')}}">
                                    <label for="quantity">Quantité :</label>
                                    <input type="number" id="quantity" name="product_quantity" height="20"
                                           min="0" max="1337" value="0">
                                    <input type="submit" name="product_name" value="{{ $product->name }}">
                                </form>
                            </div>
                            <img class="m-2" src="{{ $product->url_image }}" width="120" alt="Product picture">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
