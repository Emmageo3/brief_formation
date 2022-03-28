<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-white fw-bold">
            <div class="container">
                <a class="navbar-brand" href="#" title="Logo Simplon">
                    <img src="https://simplonp4.github.io/simplon-website/formations/img/simplonSN.png" alt="Logo Simplon" width="150" class=" d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler border  border-2 border-black" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon sp-red"></span> -->
                    <i class="bi bi-menu-app-fill text-danger"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link " aria-current="page" href="#row-secondary">Accueil</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Fabrique</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="">Formations</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="">Partenariat</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="">Espaces</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="">Entites</a>
                        </li>
                    </ul>
                        <div class="dropdown mx-sm-0 mx-sm-1 nav-item ">
                            <!-- <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                EN
                            </a> -->
                            <a class="nav-link d-flex sp-dropdown-toggle text-black" href="#">
                                EN
                                <i class=" bi bi-caret-down-fill text-danger"></i>
                            </a>
                            <ul class="dropdown-menu mw-5 " aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item sp-hover-red" href="#">EN</a>
                                </li>
                                <li>
                                    <a class="dropdown-item sp-hover-red" href="#">FR</a>
                                </li>
                            </ul>
                        </div>
                        <a href="" class="sm px-3 py-2 sp-rounded-link  sp-btn-danger">Contact</a>
                </div>
            </div>
        </nav>
    </header>




<div class="col-12 px-0">
    <div class="col-10 offset-1">
        <!-- Parcours title -->
        <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Résultat de la recherche </h2>
        <p class="my-5 text-justify">
                @if (count($formations) == 0)
                <div class="text-center">
                    <span class="" style="color: red; font-size: 25px;">Aucune formation trouver </span>
                </div>
            @endif
            @if (count($formations) > 0)
                <div class="text-center">
                    <span class="" style="font-size: 25px;"> liste des formations  </span>
                </div>
            @endif
        </p>
        <div class="row align-items-center p-relative">
            <!-- menu secondaire -->
            
            <!-- menu -->
            <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start  ">
                    <div class="vertical-bar">
                    </div>
                </div>
            </div>
            <!-- card formation -->
            <div class="col-md  ">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                    
                    @foreach ($formations as $formation)
                        <div class="my-3 justify-content-center ">
                            <div class="card shadow-sm h-100 text-center sp-rounded-to sp-rounded-bottom-15">
                                <div class="card-body sp-rounded-bottom-15">
                                    <h5 class="card-title center text-uppercase fw-bold sp-red sp-text-sm">
                                    {{$formation->titre}}</h5>
                                    <p class="card-text"> 
                                        {{$formation->description}}
                                    </p>
                                    <a href="{{ route('formations.show',$formation) }}"
                                        class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">En
                                        savoir plus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>