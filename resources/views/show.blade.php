<div class="card">
    <header class="card-header">
        <p class="card-header-title">Titre : {{ $formation->title }}</p>
    </header>
    <div class="card-content">
        <div class="content">
            <p>Image : {{ $formation->image }}</p>
            <hr>
            <p>sous-Catégories :</p>
            <ul>
                @foreach($formation->souscategories as $souscategory)
                    <li>{{ $souscategory->name }}</li>
                @endforeach
            </ul>
            <hr>
            <p>Description :</p>
            <p>{{ $formation->description }}</p>
        </div>
    </div>
</div>