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

    <main>
        <figure>
            <img src="https://simplonp4.github.io/simplon-website/formations/img/formationsproBestResolution.jpg" alt="banniere" width="100%" height="650px">
        </figure>

        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                @include('search')
                
            </div>
        </div>

        @foreach ($categories as $category)
        <section class="row mb-3 justify-content-center row-secondary public-section">
            <div class="col-12">
                <div class="col-10 offset-1">
                    <h2 class="fw-bold text-uppercase sp-red sp-line-under mb-2">
                        {{ $category->titre}}
                    </h2>
                    <p class="my-5 text-justify">
                        {{ $category->description }}
                    </p>

                    
                    <div class="row align-items-center">
                        <div class="menu secondary-menu position-fixed d-md-none secondary-menu-public sp-hidden-left">

                            <p class="active align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconFemmeBlanc.svg"
                                    title="icon"></object>
                                </span>
                            </p>
                        </div>

                        <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                            <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start">
                                <div class="vertical-bar"></div>
                                
                                <div class="menu flex-column menu-public">
                                    @foreach ($category->souscategories as $souscategory)
                                    <button href="" class="active align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="./formations/img/SVG/IconFemmeBlanc.svg"
                                                title="icon"></object>
                                        </span>
                                        
                                        {{ $souscategory->titre }}
                                    </button>

                                    
                                    @endforeach
                                </div>

                                
                               
                                    
                                
                            </div>
                        </div>

                        <div class="col-md  col-sm-12">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">

                                @foreach ($category->souscategories as $souscategory)

                                @foreach ($souscategory->formations as $formation)

                                

                                    

                               

                                    @if ($category->id == $souscategory->category_id)

                                    
                                    <div class="my-3 justify-content-center ">
                                        <div class="card shadow-sm h-100 text-center sp-rounded-top-15 sp-rounded-bottom-15">
                                            <img src="{{$formation->image}}" class="card-img-top sp-rounded-top-15"
                                                alt="Emailing Illustration">
                                            <div class="card-body sp-rounded-bottom-15">
                                                <h5 class="card-title center text-uppercase fw-bold sp-red sp-text-sm">
                                                    {{$formation->titre}} </h5>
                                                <p class="card-text">{{$formation->description}}</p>
                                                <a href="{{ 'show', $formation->id }}"
                                                    class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">En
                                                    savoir plus</a>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                        
                                        
                                    @endif

                                    
                                @endforeach

                                
                            @endforeach
                                
                            </div>
                        </div>
                        
                            
                       
                                
                                
                            
                          </div>
                    </div>
                    
                </div>
            </div>
        </section>
        @endforeach

    </main>
    
    
</body>
</html>



<style>


    @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap");
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Nunito Sans', sans-serif;
        font-size: 0.9rem;
    }


    .sp-input-shadow:focus {
        box-shadow: 0 0 0 0.25rem rgb(220 53 69 / 30%);
    }

    .sp-line {
        height: 3px !important;
        background: #000 !important;
        border-radius: 10px;
        opacity: 1;
        /* color:rgb(206, 0, 51) !important;
        */
    }

    h2.sp-line-under {
        position: relative;
        width: -moz-fit-content;
        width: fit-content;
    }

    h2.sp-line-under::after {
        content: "";
        position: absolute;
        width: 50%;
        height: 3px;
        left: 0;
        top: 105%;
        background: #000 !important;
    }

    .sp-red {
        color: #ce0033;
    }

    .sp-bg-red {
        background-color: #ce0033;
    }
    .sp-hover-red:hover, .sp-hover-red:active{
        color: #ce0033 !important;
        background-color: #fff !important;
    }

    .sp-btn-danger {
        color: #fff;
        background-color: #ce0033;
        border: 1px solid #ce0033;
    }

    .sp-btn-danger:hover {
        color: #ce0033;
        background-color: #fff;
        transition: 0.4s;
    }

    .sp-rounded-top-15 {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .sp-rounded-bottom-15 {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .dropdown-icon {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
    }

    .dropdown-menu.mw-5 {
        min-width: initial;
        font-size: 0.8rem;
    }

    .col.mh-790 {
        min-height: 790px;
    }

    .sp-rounded-link {
        border-radius: 40px;
        text-decoration: none;
        line-height: normal;
        width: fit-content;
    }

    header {
        font-size: 1rem;
    }
    a.nav-link {
        font-weight: 900;
    }
    label[for="search"] {
        /* border: 1px solid  lightgray; */
        position: relative;
        width: 50%;
        height: fit-content;
        
    }
    /* input[name="search"]:hover ,input[name="search"]:focus{
            border-color: #ce0033;
            
        } */
    label[for="search"] input{
        padding: 2px 16px;
        margin-right: 10px;
        /* height: 10px; */
        outline: 1px solid  lightgray;
        border-radius: 40px;
        outline-offset:3px ;
        width: 100%;
    }
    label[for="search"] input:focus{
        outline: 1px solid  #000;
        transition: 1s;
    }
    label[for="search"] i{
        position: absolute;
        font-weight: 900;
        cursor: pointer;
        right: 15px;
        
    }
    label[for="search"] i:hover{
        color: #ce0033;
        transform: scale(1.1);
    }
    a.nav-link:hover, a.hover-text-red:hover{
        color: #ce0033;
        transition: 0.4s;
    }
    a.nav-link.active {
        color: #ce0033;
    }

    .sp-text-sm {
        font-size: small;
    }

    .sp-text-md {
        font-size: 1rem;
    }

    .navbar-nav .nav-link {
        color: #000;
    }

    figure{
        position: relative;
    }
    figcaption{
        /* font-size: 3rem; */
        width: 100%;
        font-size: 4.5rem;
        font-weight: 800;
        /* background-color: red; */
        text-align: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%);
        color: #fff;
        text-transform: uppercase;
    }
    .left-bloc {
        /* background-color: #E35D6A; */
    }

    .left-bloc, .right-bloc {
        width: 100%;
        position: relative;
    }

    .right-bloc {
        display: -ms-grid;
        display: grid;
    }

    .mw-50 {
        max-width: 50% !important;
    }

    .h-40 {
        height: 40vh;
    }

    .vertical-bar {
        min-height: 300px;
        height: 757px;
        max-height: 700px;
        width: 13px;
        background-color: #ce0033;
        float: left;
        border-radius: 0;
    }

    .menu {
        position: absolute;
        top: 20%;
        margin-left: 0;
    }

    .menu, .secondary-menu {
        width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        margin-left: 0;
        padding-left: 0;
        transition: all 2s linear;
    }

    .secondary-menu {
        display: inline-block;
        z-index: 1000;
        left: 5%;
    }


    .menu button:hover, .menu p.active {
        color: #ce0033;
        border-color: #ce0033;
        background: #fff;
        transition: 0.4s;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .menu button {
        background-color: #ce0033;
        color: black;
        font-weight: bold;
        color: #fff;
        border: 1px solid transparent;
        border-left-width: 0;
        padding: 10px;
        text-transform: uppercase;
        width: -moz-fit-content;
        width: fit-content;
        font-size: large;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0) !important;
    }
    .text-justify{
        text-align: justify !important;
    }
    .menu button:hover span, .menu p.active span {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        box-shadow: 0 0 4px 0px #000;
        border-width: 2px;
    }

    .menu button>span {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid #fff;
        background-color: #ce0033;
        position: relative;
        left: -15px;
    }

    .menu button>object {
        max-width: 100%;
        height: auto;
    }

    path.cls-1:hover {
        fill: #ce0033 !important;
    }
    img.card-img-top {
        max-width: 100%;
        height: 160px;
        overflow: hidden;
        aspect-ratio: initial;
    }

    @media (max-width: 991.98px) {
    
        label[for="search"] input {
            width: 50%;
            padding: 10px 16px;
        }
        li.nav-item a::after {
        display: none;
        }
        .menu p {
            font-size: x-small;
            font-weight: bold;
        }
        .menu {
            z-index: 10;
        }
        .sp-text-sm {
            font-size: x-small;
        }
    }

    @media (max-width: 300px) {
        .sp-input-group {
            justify-content: center;
        }
    }
    @media (max-width: 768px) {

        img.card-img-top {
            height: initial;
        }
        label[for="search"] input{
            width: 100%;
            padding: 10px 16px;
        }
        figcaption{
            
            font-size: 2.5rem;
        }
        a.nav-link.active {
            border-bottom: none;
        }

        .left-bloc {
            /* background-color: #E35D6A; */
            border: 1px solid;
        }
        .vertical-bar {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            height: 4px;
            min-height: 0;
            width: 100%;
            background-color: #ce0033;
            float: none;
            border-radius: 40px;
        }
        .menu, .secondary-menu {
            width: 100%;
            margin: 0 auto;
            /* border: 1px solid; */
            /* position: relative; */
            display: flex;
            justify-content: space-between;
            margin-left: 0;
            padding-left: 0;
            transition: all 0.2s ease-in;
        }
        .secondary-menu {
            display: inline-block;
            z-index: 1000;
            left: -50%;
        }
        .classUnder{
            z-index: 1001;
        }
        .classOn{
            z-index: 2000;
        }
        .sp-hidden-left {
            left: 2%;
            transition: 0.5s ease-out;
        }
        .menu p {
            text-transform: uppercase;
            width: -moz-fit-content;
            width: fit-content;
            font-size: xx-small;
            /* border-radius: 10px 50px 50px 10px; */
        }
        .menu p>span {
            width: 15px;
            height: 15px;
            margin: 0 8px 0px 2px;
            border-radius: 50%;
            left: 0;
        }
        .menu p:hover, .menu p.active {
            border: 1px solid transparent;
            border-left: 5px solid #ce0033;
        }
        .menu p {
            border: 1px solid transparent;
            border-left: 5px solid transparent;
        }
        .sp-btn-danger {
            font-size: 0.6rem;
        }
        .sp-text-sm {
            font-size: 0.9rem;
        }

    }

    .sp-footer {
        width: 100%;
        min-height: 200px;
        background-image: url(../img/SVG/Footer.svg);
        background-size: cover;
    }

    .sp-footer .col {
        /* max-width: -moz-fit-content;
        max-width: fit-content; */
    }

    .sp-footer .col a {
        text-decoration: none;
    }

    .sp-link-light {
        color: #f8f9fa;
    }

    .sp-link-light:hover, .sp-link-light:focus {
        color: #ce0033;
        transition: 0.4s;
    }

    .sp-input-group {
        display: flex;
    }

    .sp-input-group input, .sp-input-group a {
        margin: 0;
        border: 0;
        outline: none;
        outline-offset: -2px;
        border-radius: initial;
        padding: 0.4em 0.6em;
    }

    .sp-input-group #email {
        width: 70%;
        border-radius: 4px 0 0 4px;
    }

    .sp-input-group #email:focus, .sp-input-group #email:hover {
        outline: 1px solid #ce0033;
    }

    .sp-input-group #btn-submit {
        border-radius: 0 4px 4px 0;
        background-color: #ce0033;
    }

    .sp-input-group #btn-submit:hover {
        background-color: #ce0034e0;
        color: #fff;
    }

    .logo-icons {
        display: flex;
        flex-direction: column;
        font-size: small;
    }

    .sp-footer img {
        width: 80%;
        max-width: 150px;
    }

    .sp-footer .icons i {
        font-size: x-large;
    }

    .sp-footer .icons {
        width: 70%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        align-content: flex-start;
    }

    .copyright {
        width: 100%;
        min-height: 50px;
        background-color: #ce0033;
        font-size: small;
    }

    .twitter-color {
        color: #17a1fa;
    }

    .facebook-color {
        color: #4267b2;
    }

    .youtube-color {
        color: #ff0000;
    }

    .instagram-color {
        color: #f24e1e;
    }

    .twitter-color:hover {
        color: #38afff;
        transition: 0.5s;
        transform: scale(1.1);
    }

    .facebook-color:hover {
        color: #607aad;
        transition: 0.5s;
        transform: scale(1.1);
    }

    .youtube-color:hover {
        color: #ff4e4e;
        transition: 0.5s;
        transform: scale(1.1);
    }

    .instagram-color:hover {
        color: #fc7e58;
        transition: 0.5s;
        transform: scale(1.1);
    }

    li.nav-item a{
        position: relative;
    }

    li.nav-item a::after{
        position: absolute;
        content: "";
        top: 160%;
        height: 4px;
        left: 50%;
        transform: translateX(-50%);
        background: #ce0033;
        width: 0%;
    }

    @media screen and (min-width: 768px) {
    
        .logo-icons {
            display: inline-block;
        }
        .sp-footer .icons {
            justify-content: space-between;
        }
        li.nav-item a:hover::after, li.nav-item a.active::after {
            width: 120%;
            transition: .4s;
        }

        .sp-row-cols-md-3 {
            display: grid;
            display: -ms-grid;
            grid-template-columns: repeat(3, minmax(30%, 300px));
            -ms-grid-template-columns: repeat(3, minmax(30%, 300px));
            grid-column-gap: 6%;
        }
        .row.sp-gutter-x-0 {
            --bs-gutter-x: 0 !important;
        }
        .sp-row-cols-md-3 .col {
            grid-column: span 1;
            /* margin: 0 auto; */
        }
    }

        svg.dropdown {
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
        }

        .card-header.emailing {
            position: relative;
        }

        .logo-partenaire {
            width: 50%;
            max-width: 100px;
            height: auto;
        }

    

</style>