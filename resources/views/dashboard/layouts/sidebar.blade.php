<nav id="sidebarMenu" class="col-md-4 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="text-center">
        <img class="mb-0 mt-3" src="\img\unida1.png" alt="" width="80" height="120">
    </div>
      <div class="position-sticky pt-3">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard')? 'active' :''}} text-dark" aria-current="page" href="dashboard">
              <span data-feather="home"></span>
              <h7 class="text-light">DASHBOARD</h7>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('infaqmasuk')? 'active' :''}} text-dark" aria-current="page" href="{{route('infaqmasuk.index')}}">
              <span data-feather="trending-down"></span>
              <h7 class="text-light">INFAQ MASUK</h7>
            </a>
          </li>   
          <li class="nav-item">
            <a class="nav-link {{ Request::is('infaqkeluar')? 'active' :''}} text-dark" href="{{route('infaqkeluar.index')}}">
              <span data-feather="trending-up"></span>
              <h7 class="text-light">INFAQ KELUAR</h7>
            </a>
          </li>  
          <li class="nav-item">
            <a class="nav-link {{ Request::is('rekapitulasidata')? 'active' :''}} text-dark" href="{{route('rekapitulasidata.index')}}">
              <span data-feather="save"></span>
              <h7 class="text-light">REKAPITULASI</h7>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('rekapitulasidata')? '' :''}} text-dark" href="{{route('rekapitulasidata.index')}}">
              <span data-feather="save"></span>
              <h7 class="text-light">SETORAN</h7>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('rekapitulasidata')? '' :''}} text-dark" href="{{route('rekapitulasidata.index')}}">
              <span data-feather="save"></span>
              <h7 class="text-light">PENYETOR</h7>
            </a>
          </li>      
        </ul>
      </div>
</nav>



   