@extends("Layouts.app")

@section("title", "Page contact")

@section("content")
    <img class="w-100" src="https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/7PCJVVULBBBJXAXS6BH7HMMUL4.jpg&w=1600&h=900" alt="">
    <form style="position: absolute; z-index: 1; left: 50%; top: 50%; transform: translate(-50%,-50%); background-color: rgba(255, 255, 255, 0.9);" class="form-control w-25 d-flex flex-column gap-2 p-5" action="{{ route("message") }}" method="POST">
        @csrf
        <h1 class="text-center">Contactez-nous :</h1>
        <div class="d-flex gap-2">
            <input class="form-control" type="text" name="nom" id="" placeholder="Nom...">
            <input class="form-control" type="text" name="prenom" id="" placeholder="Prenom...">
        </div>
        <input class="form-control" type="email" name="mail" id="" placeholder="E-mail...">
        <input class="form-control" type="number" name="tel" id="" placeholder="Numéro de téléphone...">
        <input class="form-control" type="text" name="sujet" placeholder="Sujet...">
        <textarea class="form-control" name="message" id="" placeholder="Message..."></textarea>
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
@endsection