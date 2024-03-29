<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">RusAcademy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto ">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active " aria-current="page" href="/dashboard/student">
              Student
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 " href="/dashboard/kelas" id="kelas">
              Class
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 " href="/home" id="home">
              Home
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <div class="nav flex-column mt-96"> 
          <form action="/logout" method="POST">
            @csrf
            <li class="nav-item"> 
              <button type="submit" class="nav-link d-flex align-items-center gap-2" id="logout">Logout</button>
            </li>
          </form>
        </div>
      </div>
    </div>
  </div>