{{-- views/backoffice/index.blade.php --}}
@extends('backoffice.layout')

@section('content')

    <div class="table-responsive">
        <h2>Enregistrement du produit :</h2>
        <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 g-4 mb-5" id="products">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-center h4">{{ ucfirst($product->name) }}</h3>
                        <h4 class="text-center h5">Description :</h4>
                        <p class="text-center">{{ ucfirst($product->description) }}</p>

                        <h4 class="text-center h5">Quantité :</h4>
                        <p class="text-center">{{ $product->quantity }}</p>

                        <h4 class="text-center h5">Disponibilité :</h4>
                        <p class="text-center">
                            @if($product->available)
                                Oui
                            @else
                                Non
                            @endif
                        </p>

                        <h4 class="text-center h5">Prix :</h4>
                        <p>Prix TTC : {{ $product->price / 100 }} €</p>

                        <h4 class="text-center h5">Remise :</h4>
                        <p>

                            @if($product->discount)
                                {{ $product->discount / 100 }} %
                            @else
                                Aucune
                            @endif
                        </p>
                        <h4 class="text-center h5">Poids :</h4>
                        <p>{{ $product->weight / 1000 }} kg</p>

                        <h4 class="text-center h5">Image :</h4>
                        <img class="m-2" src="{{ $product->url_image }}" width="120" alt="Product picture">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
