<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GALERI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route ('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('index')}}">Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('index')}}">Feature</a>
          </li>

        </ul>
        <ul class="nav">
            <li class="nav-item"><a href='{{route ('login')}}' class="nav-link link-body-emphasis px-2">Login</a></li>
        </ul>




      </div>
    </div>
  </nav>
</header>
