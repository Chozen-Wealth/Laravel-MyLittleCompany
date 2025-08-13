@extends("Layouts.app")

@section("title", "Page produits")

@section("content")
    <h1>Nos produits</h1>
    <div class="d-flex flex-wrap gap-3">
        @foreach ($produits as $produit)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset("storage/".$produit["img"]) }}" class="card-img-top" alt="Image du produit">
            <div class="card-body">
                <h5 class="card-title">{{ $produit["nom"] }}</h5>
                <p class="card-text">{{ $produit["descriptif"] }}</p>
                <p class="card-text">{{ number_format($produit["prix"], 2, ",", " ") }}€</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection