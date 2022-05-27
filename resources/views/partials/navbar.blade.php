<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">BlogQueh</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}"  href="/posts">Home</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto"> 
          <li class="nav-item">
            <a class="nav-link {{ ($active === "contac") ? 'active' : '' }}" href="/contac">Contact us </a>
          </li>
        @auth
        <div class="dropdown text-danger ">
          <button class="btn btn-secondary dropdown-toggle bi bi-person-circle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             Welcome, {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item bi bi-layout-text-window- bi bi-arrow-bar-up" href="/dashboard" > Dashboard</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
              <button type="submit" class="dropdown-item bi bi-arrow-return-right" > Log Out</button>
              </form>
            </li>
          </ul>
        </div>

        @else

          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i> Login</a>

        @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>