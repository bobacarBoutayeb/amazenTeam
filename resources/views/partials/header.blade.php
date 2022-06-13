<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exemple d'une page produit telle qu'elles seront disponibles sur notre site">
    <meta name="keywords" content="Oeufs, Produit locaux, Nom producteur">
    <meta name="author" content="Robin">
    <title>Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/Styles/styleheader.css" rel="stylesheet">
    <link href="/Styles/stylefooter.css" rel="stylesheet">
    <link href="/Styles/styleform.css" rel="stylesheet">
    <link href="/Styles/stylecart.css" rel="stylesheet">
</head>
<body class="backgroundProduit">
<!-- HEADER START -->
<div class="doubleheader">
    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-around justify-content-md-around py-3">
            <a href="index.php"><img class="navlogo" src="/img/LOGO_AMAZEN-1.avif" alt="logo"></a>
            <div class="col-md-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="nav1" src="/img/geolocpic.png" alt="iconegeolocalisation">Me
                    géolocaliser
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLabel">Renseignez votre adresse pour
                                    découvrir les produits près de chez vous</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container py-5">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col">
                                            <div class="card my-4 shadow-3">
                                                <div class="row g-0">
                                                    <div class="col-xl-12">
                                                        <div class="card-body p-md-5 text-black">
                                                            <h3 class="mb-4 text-uppercase">Votre adresse</h3>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                        <input type="text" id="form3Example1m"
                                                                               class="form-control form-control-lg" />
                                                                        <label class="form-label"
                                                                               for="form3Example1m">Prénom</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                        <input type="text" id="form3Example1n"
                                                                               class="form-control form-control-lg" />
                                                                        <label class="form-label"
                                                                               for="form3Example1n">Nom</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <input type="text" id="form3Example8"
                                                                       class="form-control form-control-lg" />
                                                                <label class="form-label"
                                                                       for="form3Example8">Adresse</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-4">
                                                                    <select class="select">
                                                                        <option value="1">Pays</option>
                                                                        <option value="2">France</option>
                                                                        <option value="3">Belgique</option>
                                                                        <option value="4">Luxembourg</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 mb-4">
                                                                    <div class="form-outline mb-4">
                                                                        <input type="text" id="form3Example3"
                                                                               class="form-control form-control-lg" />
                                                                        <label class="form-label"
                                                                               for="form3Example3">Ville</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <input type="text" id="form3Example3"
                                                                       class="form-control form-control-lg" />
                                                                <label class="form-label"
                                                                       for="form3Example3">Code Postal</label>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <input type="text" id="form3Example2"
                                                                       class="form-control form-control-lg" />
                                                                <label class="form-label"
                                                                       for="form3Example2">Email</label>
                                                            </div>
                                                            <div class="d-flex justify-content-end pt-3">
                                                                <button type="button"
                                                                        class="btn btn-success btn-lg ms-2"
                                                                        style="background-color:hsl(210, 100%, 50%) ">Valider adresse</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0">
                <input type="search" class="form-control formperso" placeholder="Taper ma recherche..."
                       aria-label="Search">
            </form>
            <div class="col-md-3 text-end">
                <a href="#">
                    <button type="button" class="btn">
                        <img class="nav2" src="/img/panierpic.png" alt="iconepanier">Panier
                    </button></a>
                <button type="button" class="btn">
                    <img class="nav3" src="/img/comptepic.png" alt="iconecompte"> Mon compte
                </button>
            </div>
        </header>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light " id="categ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Mobilier Déco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Mode</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Jeux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Electronique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Objets cuisine</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


