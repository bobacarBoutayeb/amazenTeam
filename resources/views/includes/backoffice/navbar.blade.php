<nav class="nav nav-pills nav-fill">
    <a class="nav-link" aria-current="page" href="{{ route('backoffice.homepage') }}">Tableau de bord</a>
    <a class="nav-link" href="#">Commandes</a>
{{--    //TODO active selon page--}}
    <a class="nav-link active" href="{{ route('backoffice.products.index') }}">Produits</a>
    <a class="nav-link" href="#">Clients</a>
    <a class="nav-link" href="#">Rapports</a>
    <a class="nav-link" href="#">Catégories</a>
</nav>
