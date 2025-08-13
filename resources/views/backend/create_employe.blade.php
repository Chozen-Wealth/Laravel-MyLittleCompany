@extends("Layouts.back")

@section("title", "Creation d'employé")

@section("backend")
<div class="d-flex justify-content-center">
    <form class="form-control d-flex flex-column gap-2 w-50" action="{{ route("create_employe") }}" method="POST">
        <h1>Ajout d'un nouvel employé</h1>
        @csrf
        <input class="form-control" type="text" name="nom" id="" placeholder="Nom...">
        <input class="form-control" type="text" name="prenom" id="" placeholder="Prenom...">
        <input class="form-control" type="number" name="tel" id="" placeholder="Tel...">
        <input class="form-control" type="email" name="email" id="" placeholder="Email...">
        <select class="form-control" name="post" id="">
            <option value="">Choisir un post</option>
            <option value="Logistique">Logistique</option>
            <option value="Réception">Réception</option>
            <option value="Comptabilité">Comptabilité</option>
            <option value="Vente">Vente</option>
            <option value="Direction">Direction</option>
        </select>
        <select class="form-control" name="role" id="">
            <option value="">Choisir un role</option>
            <option value="Ouvrier polyvalent">Ouvrier polyvalent</option>
            <option value="Employé polyvalent">Employé polyvalent</option>
            <option value="Comptable">Comptable</option>
            <option value="Assistant du régional manager">Assistant du régional manager</option>
            <option value="Régional manager">Régional manager</option>
        </select>
        <input class="form-control" type="number" name="salaire" id="" placeholder="Salaire...">
        <button class="btn btn-primary" type="submit">Confirmer</button>
    </form>
</div>
@endsection