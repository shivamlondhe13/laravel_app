<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route("home")}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
        </li>
        @if (session("client_login"))
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("user.show",base64_encode(session("client_login") ?? 0))}}">Profile</a>
        </li>
        @endif
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{route("home")}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route("home")}}">Action</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex">
        @if (session("client_login"))
        <a href="{{route("logout")}}" class="btn btn-outline-danger mx-1">Logout</a>
        @else
        <a href="{{route("login")}}" class="btn btn-outline-success mx-1">Login</a>
        <a href="{{route("user.create")}}" class="btn btn-outline-success mx-1">Register</a>
        @endif


      </div>
    </div>
  </div>
</nav>