<ul style="background-color: #108DE9;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
      <div class="sidebar-brand-icon">
          <i class="fas fa-plane"></i>
      </div>
      <div class="sidebar-brand-text mx-3 fs-4">Uhud Tour</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Daftar Paket
  </div>

  <!-- Nav Item - Umrah -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('umrah.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Paket Umrah</span></a>
  </li>

  <!-- Nav Item - Haji -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('haji.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Paket Haji</span></a>
  </li>

   <!-- Nav Item - Order -->
   <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-fw fa-clock"></i>
            <span>Order</span></a>
    </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>