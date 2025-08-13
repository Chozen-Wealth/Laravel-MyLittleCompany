@extends("Layouts.back")

@section("title", "Creation d'employé")

@section("backend")
    <form action="" method="POST">
        @csrf
        <input type="text" name="nom" id="">
        <input type="text" name="prenom" id="">
        <input type="number" name="tel" id="">
        <input type="email" name="email" id="">
        <input type="radio" name="post" id="">
        <input type="radio" name="role" id="">
        <input type="number" name="salaire" id="">
        <button type="submit">Confirmer</button>
    </form>
@endsection