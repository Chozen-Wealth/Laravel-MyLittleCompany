@extends("Layouts.app")

@section("title", "Page produits")

@section("content")
    <h1>Nos produits</h1>
    <div class="card" style="width: 18rem;">
      <img src="https://m.media-amazon.com/images/I/616HbuvufcL.jpg" class="card-img-top" alt="Image du produit">
      <div class="card-body">
        <h5 class="card-title">Nom du produit</h5>
        <p class="card-text">Description du produit</p>
      </div>
    </div>
@endsection