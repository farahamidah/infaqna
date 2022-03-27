<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">INFAQNA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav ms-auto">
          @auth
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : ''}}">LOGIN</a>
          </li>
          @endauth
        </ul>
      
    </div>
  </div>
</nav>