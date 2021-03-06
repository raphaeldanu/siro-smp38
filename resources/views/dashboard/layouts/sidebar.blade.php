<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/students*') ? 'active' : ''}}" href="/dashboard/students">
          <span data-feather="users"></span>
          Siswa
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/import-raport') ? 'active' : ''}}" href="/dashboard/import-raport">
          <span data-feather="file-plus"></span>
          Import Raport
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/import-un') ? 'active' : ''}}" href="/dashboard/import-un">
          <span data-feather="file-plus"></span>
          Import Nilai UN
        </a>
      </li>
    </ul>
  </div>
</nav>