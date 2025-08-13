@extends("Layouts.back")

@section("title", "liste des messages")

@section("backend")
    <h1>Liste des messages :</h1>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Tel</th>
                <th>Mail</th>
                <th>Envoyé le :</th>
                <th>Action</th>
            </tr>
        </thead>
        @if (count($liste_messages) > 0)
        
            @foreach ($liste_messages as $message)
                <tr>
                    <td>{{ $message["nom"] }}</td>
                    <td>{{ $message["prenom"] }}</td>
                    <td>{{ $message["sujet"] }}</td>
                    <td>{{ $message["message"] }}</td>
                    <td>{{ $message["tel"] }}</td>
                    <td>{{ $message["mail"] }}</td>
                    <td>{{ $message["created_at"] }}</td>
                    <td>
                        <form action="{{ route("delete_message", $message->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        
        @else
            <tr>
                <td>Aucun message reçu</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endif
    </table>
@endsection