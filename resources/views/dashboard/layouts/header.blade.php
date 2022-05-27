<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">BlogQueh </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="dropdown text-danger ">
      <button class="btn btn-secondary dropdown-toggle bi bi-person-circle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
         Welcome, {{ auth()->user()->name }}
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item bi bi-person-lines-fill " href="/dashboard/profil" ><span data-feather="users"> </span> My Profile</a></li>
        
        
        <li><a class="dropdown-item bi bi-person-lines-fill " href="/posts" ><span data-feather="book-open"> </span> All Post</a></li>
        
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="post">
            @csrf
          <button type="submit" class="dropdown-item bi bi-box-arrow-left" ><span data-feather="log-out"></span> Log Out</button>
        
          </form>
        </li>
      </ul>
    </div>
  </header>