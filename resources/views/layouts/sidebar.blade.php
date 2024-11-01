<div class="sidebar">
  <!--- SidebarSearch Form-->
  <div class="form-inline mt-2">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
        <a href="{{ url('/')}}" class="nav-link {{($activeMenu == 'dashboard')? 'active' : ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
    @if(auth()->user()->jenis_pengguna && auth()->user()->jenis_pengguna->jenis_kode == "ADM")
        <li class="nav-item">
          <a href="{{ url('/level')}}" class="nav-link {{($activeMenu == 'level')? 'active' : ''}}">
            <i class="nav-icon fa-solid fa-users-gear"></i>
            <p>Jenis Pengguna</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/user')}}" class="nav-link {{($activeMenu == 'user')? 'active' : ''}}">
            <i class="nav-icon far fa-address-book"></i>
            <p>Data Dosen</p>
          </a>
        </li>
      <li class="nav-item">
        <a href="{{ url('/kegiatan')}}" class="nav-link {{($activeMenu == 'penjualan')? 'active' : ''}}">
          <i class="nav-icon fas fa-bookmark"></i>
          <p>Kegiatan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/stok')}}" class="nav-link {{($activeMenu == 'stok')? 'active' : ''}}">
          <i class="nav-icon fas fa-cubes"></i>
          <p>Statistik </p>
        </a>
      </li>
      @endif
    @if(auth()->user()->jenis_pengguna && auth()->user()->jenis_pengguna->jenis_kode == "PIM")
        <li class="nav-item">
          <a href="{{ url('/level')}}" class="nav-link {{($activeMenu == 'level')? 'active' : ''}}">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>Kegiatan</p>
          </a>
        </li>
      <li class="nav-item">
        <a href="{{ url('/supplier')}}" class="nav-link {{($activeMenu == 'supplier')? 'active' : ''}}">
          <i class="nav-icon fas fa-city"></i>
          <p>Poinku</p>
        </a>
      </li>
      @endif
    @if(auth()->user()->jenis_pengguna && auth()->user()->jenis_pengguna->jenis_kode == "PIC")
        <li class="nav-item">
          <a href="{{ url('/level')}}" class="nav-link {{($activeMenu == 'level')? 'active' : ''}}">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>Kegiatan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/user')}}" class="nav-link {{($activeMenu == 'user')? 'active' : ''}}">
            <i class="nav-icon fas fa-user"></i>
            <p>Data Dosen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/stok')}}" class="nav-link {{($activeMenu == 'stok')? 'active' : ''}}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>Statistik </p>
          </a>
        </li>
      @endif
    </ul>
  </nav>
</div>