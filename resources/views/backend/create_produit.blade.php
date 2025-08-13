@extends("Layouts.back")

@section("title", "Creation d'employé")

@section("backend")
<div class="d-flex justify-content-center">
    <form class="form-control d-flex flex-column gap-2 w-50" action="{{ route("create_produits") }}" method="POST" enctype="multipart/form-data">
        <h1>Ajout d'un nouveau produit</h1>
        @csrf
        <input class="form-control" type="text" name="nom" id="" placeholder="Nom...">
        <input class="form-control" type="text" name="type" id="" placeholder="Type...">
        <input class="form-control" type="text" name="descriptif" id="" placeholder="Descriptif...">
        <input class="form-control" type="number" name="prix" id="" placeholder="Prix...">
        <input type="file" class="form-control" name="img" id="" accept="image/*">
        <button class="btn btn-primary" type="submit">Confirmer</button>
    </form>
</div>
@endsection