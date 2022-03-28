@include('navbar');

    <main>
        <figure>
            <img src="https://simplonp4.github.io/simplon-website/formations/img/formationsproBestResolution.jpg" alt="banniere" width="100%" height="650px">
        </figure>

        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                <form action="{{ route('formations.search')}}">
                    <div class="input-group my-3">
                        <input type="text" class="form-control sp-input-shadow" placeholder="Rechercher une formation"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" name="q" value="{{ request()->q ?? '' }}">
                        <button type="submit" class="input-group-text sp-btn-danger" id="basic-addon2">
                            <i class="bi bi-search   text-black" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>

        <div class="col-12 px-0">
            <div class="col-10 offset-1">
                <!-- Parcours title -->
                <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2 mt-4" >Résultat de la recherche </h2>
                <p class="my-5 text-justify">
                        @if (count($formations) == 0)
                        <div class="text-center">
                            <span class="" style="color: red; font-size: 25px;">Aucune formation trouvée </span>
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
                    
                    <!-- card formation -->
                    <div class="col  ">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                            
                            @foreach ($formations as $formation)
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

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
</style>




