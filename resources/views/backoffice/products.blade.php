@extends('backoffice.layout')

@section('content')

    <h2>Liste des produits :</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Disponible</th>
                <th scope="col">Prix</th>
                <th scope="col">Remise</th>
                <th scope="col">Poids (kg)</th>
                <th scope="col">Image URL</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ ucfirst(Str::limit($product->name, 20)) }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        @if($product->available)
                            Vrai
                        @else
                            Faux
                        @endif
                    </td>
                    <td>{{ $product->price /100 }} €</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->weight /1000}}</td>
                    <td>{{ Str::limit($product->url_image,20) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
