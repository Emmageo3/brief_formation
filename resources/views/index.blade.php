<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   
    

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formations!</title>
    <!-- ********************************************* -->
    <!-- Comment link tags  under Usage 2 if you use bootstrap on local -->
    <!-- Comment link tags  under Usage 1 if you use bootstrap with cdn -->
    <!-- ********************************************* -->

    <!-- ============Usage 1: Local bootstrap CSS ressource file!============= -->
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./formations/css/style.css"> -->
    <!-- ============Usage 2: Online  bootstrap CSS ressource file!============= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./formations/css/style.css">
    
</head>

<body>
    <!-- header -->
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
                            <a class="nav-link " aria-current="page" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="Fabrique/fabrique.html">Fabrique</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="formation.html">Formations</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="partenariat.html">Partenariat</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="Partie_Espace/index.html">Espaces</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="entité.html">Entites</a>
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
    <!-- End header -->
    <!-- Main -->
    <main class="container-fluid ">
        <img src="https://simplonp4.github.io/simplon-website/formations/img/formationsproBestResolution.jpg" height="600px" width="100%" alt="">
        <!-- barre de recherche -->
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="input-group my-3">
                    <input type="text" class="form-control sp-input-shadow" placeholder="Rechercher une formation"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text sp-btn-danger" id="basic-addon2"><i class="bi bi-search   text-black"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <!-- End search bar -->
        <!-- public Section  -->
        @foreach ($formations as $formation)
        <section class="row mb-3 justify-content-center row-secondary public-section">
            <div class="col-12">
                <div class="col-10 offset-1">
                    <!-- Public title -->
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">{{ $formation->souscategory->category->titre }}</h2>
                    <p class="my-5 text-justify">
                        {{ $formation->souscategory->category->description }}
                    </p>
                    <div class="row align-items-center">
                        <!-- menu secondaire -->
                        <div class="menu secondary-menu position-fixed d-md-none secondary-menu-public sp-hidden-left">
                            <p
                                class=" active align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconFemmeBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Femme
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Kids
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                PSH
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Refugies
                            </p>
                        </div>
                        <!-- menu -->
                        <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                            <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start ">
                                <div class="vertical-bar">
                                </div>
                                <div class="menu flex-column menu-public">
                                    <p
                                        class="active align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="./formations/img/SVG/IconFemmeBlanc.svg"
                                                title="icon"></object>
                                        </span>
                                        {{ $formation->souscategory->titre }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <!-- card formation --> 
                        <div class="col-md  col-sm-12">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                                <div class="my-3 justify-content-center ">
                                    <div class="card shadow-sm h-100 text-center sp-rounded-top-15 sp-rounded-bottom-15">
                                        <img src="{{ $formation->image }}"
                                            class="card-img-top sp-rounded-top-15" alt="Leadership illustration">
                                        <div class="card-body sp-rounded-bottom-15">
                                            <h5 class="card-title center text-uppercase fw-bold sp-red sp-text-sm">
                                                {{ $formation->titre }}
                                            </h5>
                                            <p class="card-text">
                                                {{ $formation->description }}
                                            </p>
                                            <a href="#"
                                                class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">En
                                                savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 px-0 text-end alert">
                                <a href="" class="text-decoration-underline alert-dark  alert-link bg-white">Afficher
                                    tout 
                                <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- End public Section  -->
        
    <!-- Section footer -->
    <footer class="sp-footer ">
        <div class="row pt-5 mt-5 text-white d-inline-block row-cols-1 row-cols-sm-2 row-cols-lg-4 d-sm-flex justfy-sm-content-around w-100 gap-0 gap-sm-0 ps-5">
            <div class="logo-icons col col ps-md-0 px-lg-0  my-2 d-lg-flex text-sm-start">
                <img src="./formations/img/logoWhiteSimplon.svg"  class="mx-lg-auto mx-auto mx-sm-0" alt="Logo simplon format blanc" width="150">
                <div class="icons my-5 mx-0 mx-auto mx-sm-0 mx-lg-auto">
                    <i class="bi bi-facebook  facebook-color"></i>
                    <i class="bi bi-twitter twitter-color"></i>
                    <i class="bi bi-youtube youtube-color"></i>
                    <i class="bi bi-instagram instagram-color"></i>
                </div>
            </div>
            <div class="col px-ms-0 my-2 my-lg-0 text-sm-start">
                <p>
                    <a href="" class="d-block sp-link-light fs-4">Voir plus</a>
                </p>
                <p>
                    <a href="" class="d-block sp-link-light my-2">Conditions d'utilisation</a>
                    <a href="" class="d-block sp-link-light my-2">Notre Histoire</a>
                    <a href="" class="d-block sp-link-light my-2">Politique de confidentialite</a>
                    <a href="" class="d-block sp-link-light my-2">FAQ</a>
                </p>
            </div>
            <div class="col px-lg-0 my-2 my-lg-0 text-center text-sm-start">
                <p class="d-block sp-link-light fs-4">Cordonnees</p>
                <p class="d-block sp-link-light ">Cite Keur Goor Gui ,<br> Sicap Liberte 6,<br> Dakar Senegal</p>
                <p>
                    <a href="" class="d-block sp-link-light my-2">simplon@gmail.com</a>
                    <a href="" class="d-block sp-link-light my-2">simplon@contactgmail.com</a>
                </p>
                <p class="d-block ">(+221) 33 234 43 32 <br> (+221) 88 348 98 43 32</p>
            </div>
            <div class="col px-lg-0 my-2 my-lg-0 text-center text-sm-start ">
                <p class="d-block sp-link-light fs-4">Notre Newsletter</p>
                <p id="newsletter-text">Souscrivez vous à notre newsletter pour ne pas manquer aucune de nos acticites
                </p>
                <p class="sp-input-group">
                    <input type="email" placeholder="email@gmail.com" id="email">
                    <input type="button" value="S'abonner" class="sp-btn-danger" id="btn-submit">
                </p>
            </div>
        </div>
        <div
            class="copyright text-white p-3 d-flex align-items-center flex-column flex-sm-row justify-content-between">
            <span>© 2021 Simplon. All rights reserved.</span>
            <span class=" ">made with <i class="bi bi-suit-heart-fill text-black"></i> <strong> by
                    SimplonP4</strong></span>
        </div>
    </footer>
    <!-- End Section footer -->

    <!-- ********************************************* -->
    <!-- Comment Scripts under Usage 1 if you use bootstrap with CDN -->
    <!-- Comment Scripts under Usage 2 if you use bootstrap on local -->
    <!-- ********************************************* -->

    <!-- ============Usage 1: Local bootstrap JavaScript ressource file! ============= -->
    <!-- <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./formations/js/script.js"></script> -->
    
    <!-- ============Usage 2: Online bootstrap JavaScript ressource file! ============= -->
    <!--                jQuery first, then Popper.js, then Bootstrap JS                 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./formations/js/script.js"></script>
</body>

</html>
</body>
</html>