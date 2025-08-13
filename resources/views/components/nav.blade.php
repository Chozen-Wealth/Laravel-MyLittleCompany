<nav class="navbar navbar-expand-lg bg-body-tertiary">
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
          <a class="nav-link active" href="{{ route("produits") }}">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route("equipe") }}">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route("contact") }}">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search"/>
        <button class="btn btn-outline-dark" type="submit">Chercher</button>
      </form>
      <a class="btn btn-dark ms-2" href="{{ route("messages") }}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
        fill="#FFFFFF" viewBox="0 0 24 24" >
        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
        <path d="M4 11.4v2.17c0 .85 3.1 2.86 8 2.86s8-2.01 8-2.86V11.4c-1.86 1.21-4.81 2.03-8 2.03s-6.14-.82-8-2.03"></path><path d="M4 16.4V18c0 2.17 3.66 4 8 4s8-1.83 8-4v-1.6c-1.86 1.21-4.81 2.03-8 2.03s-6.14-.82-8-2.03M12 2C7.66 2 4 3.83 4 6v2.57c0 .85 3.1 2.86 8 2.86s8-2.01 8-2.86V6c0-2.17-3.66-4-8-4"></path>
        </svg>
      </a>
    </div>
  </div>
</nav>