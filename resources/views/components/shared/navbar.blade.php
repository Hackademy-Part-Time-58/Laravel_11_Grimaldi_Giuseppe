<nav class="navbar navbar-expand-lg bg-body-tertiary shadow ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">Cineblog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contatti')}}">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chi.siamo')}}">Chi siamo</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles.create')}}">Pubblica articolo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user me-1"></i>{{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class="dropdown-item" href="{{route('dashboard')}}">I miei annunci</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="nav-item d-flex justify-content-start align-items-center px-3">
              <form class="nav-link m-0 p-0 " action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn m-0 p-0 text-danger">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-house-user me-1"></i>Accedi</a>
        </li>
        @endguest
        </li>
        </ul>

    </div>
  </div>
</nav>