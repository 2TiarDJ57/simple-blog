<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="/">Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($tittle === "Home") ? 'active' : "" }}" href="/">Home</a>
          <a class="nav-link {{ ($tittle === "About") ? 'active' : "" }}" href="/about">About</a>
          <a class="nav-link {{ ($tittle === "All Posts") ? 'active' : "" }}" href="/posts">Blog</a>
          <a class="nav-link {{ ($tittle === "Post Categories") ? 'active' : "" }}" href="/categories">Categories</a>
          <a class="nav-link {{ ($tittle === "Service") ? 'active' : "" }}" href="/service">Service</a>
        </div>
      </div>

      
      
      <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Wellcome Back. {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></li></button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        
      </ul>
      @endauth

    </div>
  </nav>