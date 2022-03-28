@include('navbar');

    <main>
        <figure>
            <img src="{{$formation->image}}" alt="banniere" width="100%" height="650px">
        </figure>

        <div class="row" style="text-align: center">
            <h1>{{$formation->titre}}</h1>
        </div>

        <div class="description mt-4"  style="text-align: center">
            <p>
                {{$formation->description}}
            </p>
        </div>

    </main>


