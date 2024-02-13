<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/student/all">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/extracurricular">Extracurricular</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/kelas/all">Class</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
            <li class="nav-item dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="true">Selamat Datang, {{ auth()->user()->name }} </button>
                <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <a type="submit" class="droapdown-item">Logout</a>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <li>
                <a class="btn btn-outline-primary" href="/login" aria-current="page" role="button">Login</a>
            </li>
        @endauth
    </ul>
      </div>
    </div>
  </div>
</nav>