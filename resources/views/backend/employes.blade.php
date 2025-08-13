@extends("Layouts.back")

@section("title", "Liste d'employés")

@section("backend")
    <div class="d-flex align-items-center justify-content-between">
        <h1>Liste des employés :</h1>
        <a class="btn btn-primary" href="{{ route("create_employe_page") }}">Ajouter un employé</a>
    </div>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Post</th>
                <th>Role</th>
                <th>Salaire</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @if (count($employe) > 0)
                @foreach ( $employe as $personne)
                <tr>
                    <td>{{ $personne["nom"] }}</td>
                    <td>{{ $personne["prenom"] }}</td>
                    <td>{{ $personne["tel"] }}</td>
                    <td>{{ $personne["email"] }}</td>
                    <td>{{ $personne["post"] }}</td>
                    <td>{{ $personne["role"] }}</td>
                    <td>{{ number_format($personne["salaire"], 2, ",", " ") }} €</td>
                    <td>
                    <form action="{{ route("delete_employe", $personne->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td>Aucun employé pour le moment</td>
                <td></td>
                <td></td>
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