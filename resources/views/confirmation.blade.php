@extends("Layouts.app")

@section("title", "Page confirmation")

@section("content")
<div style="height: calc(100vh - 290px)" class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-center">Votre message a bien été envoyé.</h1>
    <h3 class="text-center">Nous vous répondrons dans les plus brefs délais !</h3>
    <a class="btn btn-primary" href="{{ route("home") }}">Retourner à l'accueil</a>
</div>
@endsection