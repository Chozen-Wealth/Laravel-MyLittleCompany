@extends("Layouts.back")

@section("title", "Liste produits")

@section("backend")
    <div class="d-flex align-items-center justify-content-between">
        <h1>Liste des produits :</h1>
        <a class="btn btn-primary" href="{{ route("create_produits_page") }}">Ajouter un produit</a>
    </div>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Descriptif</th>
                <th>Image(url)</th>
                <th>prix</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @if (count($produits) > 0)
                @foreach ( $produits as $produit)
                <tr>
                    <td>{{ $produit["nom"] }}</td>
                    <td>{{ $produit["type"] }}</td>
                    <td>{{ $produit["descriptif"] }}</td>
                    <td>{{ $produit["img"] }}</td>
                    <td>{{ $produit["prix"] }} €</td>
                    <td>
                        <form action="{{ route("delete_employe", $produit->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td>Aucun produit pour le moment</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endif
        </tbody>
    </table>
@endsection