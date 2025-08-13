@extends("Layouts.app")

@section("title", "Home page")

@section("content")
    <h1></h1>
    @include("components.carousel")
    <h1 class="mt-5">Bienvenue chez Dunder Mifflin Papier & Co.</h1>
    <p>Fournisseur officiel de papier de qualité douteuse… mais avec beaucoup de cœur ! Depuis notre siège de Scranton, nous livrons nos produits aux quatre coins de la région, parfois même dans les délais. Notre équipe dévouée (et parfois un peu trop enthousiaste) est prête à vous offrir le meilleur service possible, tant que personne ne déclenche l’alarme incendie par erreur.</p>
    <section>
        <h1 class="text-center mt-5 bg-primary text-white p-2 rounded">Nos services</h1>
        <div class="d-flex align-items-center mt-5">
            <div class="w-50">
                <h2>Fourniture de papier</h2>
                <p>De la rame classique A4 au papier parchemin « édition spéciale Michael Scott », nous avons tout ce qu’il vous faut pour remplir vos imprimantes et vos poubelles.</p>
            </div>
            <img class="w-50" src="https://newsfeed.time.com/wp-content/uploads/sites/9/2011/11/dundermifflin.jpg?w=600" alt="">
        </div>
        <div class="d-flex align-items-center mt-5">
            <div class="w-50">
                <h2>Conseils personnalisés</h2>
                <p>Nos vendeurs (certains plus motivés que d’autres) vous guident dans vos choix comme si vous étiez leur seul client… même si Stanley est en pause café.</p>
            </div>
            <img class="w-50" src="https://www.nbc.com/sites/nbcblog/files/styles/scale_862/public/2023/08/the-office-character-recap-oscar-nunez.jpg" alt="">
        </div>
        <h2>Livraison rapide</h2>
        <p>Si Dwight conduit le camion, vous recevrez votre commande avant même de l’avoir passée. Si c’est Kevin… comptez plutôt la semaine prochaine.</p>
    </section>
    <section>
        <h1>Pourquoi nous choisir ?</h1>
        <p>Parce que chez nous, ce n’est pas seulement du papier, c’est un style de vie. Et aussi parce que Creed a promis qu’il n’ajouterait plus rien de bizarre dans les cartons.</p>
    </section>
    <section>
        <h1>Témoignages clients</h1>
        <ul>
            <li>“Le papier est arrivé plié… mais le vendeur était sympa.” – Jim H.</li>
            <li>“Meilleure entreprise après moi.” – Michael S.</li>    
            <li>“Ils m’ont offert un stylo gratuit.” – Pam B.</li>
        </ul>
    </section>
@endsection