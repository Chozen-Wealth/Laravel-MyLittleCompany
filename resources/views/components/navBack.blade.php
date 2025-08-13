<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route("home") }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("messages") }}">Messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("employes") }}">Employés</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("contact") }}">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 bg-light" type="search" placeholder="Rechercher..." aria-label="Search"/>
        <button class="btn btn-outline-light" type="submit">Chercher</button>
      </form>
    </div>
  </div>
</nav>