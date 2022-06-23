@extends('includes.homepage.layout')
@section('title','Catégories')
@section('content')
    <div>
        <h2 class="text-center">Catégories :</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" id="products">
            @forelse($categories as $categorie)
                <div class="col">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title">{{ ucfirst($categorie->name) }}</h3>
                            <h4 class="h5">Description :</h4>
                            <p>{{ ucfirst($categorie->description) }}</p>
                            <h4 class="h5">Liste des produits :</h4>
                            @forelse($categorie->products as $product)
                                <p>{{ ucfirst($product->name) }}</p>
                                @empty
                                    Pas de produit
                                    @endforelse
                        </div>
                    </div>
                </div>
            @empty
                <p>Aucune categorie.</p>
            @endforelse
        </div>
    </div>
@endsection
