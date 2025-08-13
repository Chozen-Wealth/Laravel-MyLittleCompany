@extends("Layouts.app")

@section("title", "Page equipe")

@section("content")
    <h1>Notre équipe</h1>
    <div class="d-flex flex-wrap gap-3">
        @foreach ($employes as $employe)
        <div class="card" style="width: 18rem; overflow: hidden;">
            <img src="https://static1.moviewebimages.com/wordpress/wp-content/uploads/2024/10/steve-carell-as-michael-scott-in-the-office.jpg" class="card-img-top" alt="Image du produit">
            <div class="card-body">
                <h5 class="card-title">{{ $employe["nom"] }} {{ $employe["prenom"] }}</h5>
                <p class="card-text">{{ $employe["post"] }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection