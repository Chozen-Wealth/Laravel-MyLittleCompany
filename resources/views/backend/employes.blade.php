@extends("Layouts.back")

@section("title", "Creation d'employé")

@section("backend")
    <h1>Liste des employés :</h1>
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
                    <td>{{ $personne["salaire"] }}</td>
                    <td>
                    <form action="{{ route("delete_employe", $employe->id) }}" method="POST">
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