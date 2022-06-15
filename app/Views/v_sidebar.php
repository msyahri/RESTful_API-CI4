  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a hidden href="" class="brand-link">
      <img hidden src="<?php echo base_url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span hidden class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets') ?>/login/images/lg.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jalumas Banyumas</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if (in_array($activeMenu, ['dashboard','produk', 'agen','kontak','admin','apis'])) echo
          "menu-open"?>">
            <a href="#" class="nav-link <?php if (in_array($activeMenu, ['dashboard','produk', 'agen','kontak','admin','apis'])) echo
          "active"?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin') ?>" class="nav-link <?php if ($activeMenu == 'dashboard') echo "active" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard Panel</p>
                </a>
              </li>
        
          <li class="nav-item">
            <a href="<?php echo base_url('admin/produk') ?>" class="nav-link <?php if ($activeMenu == 'produk') echo "active" ?>"> 
              <i class="nav-icon far fa-edit"></i>
              <p>
                Produk
                <span class="badge badge-warning right">IMPORTANT</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/agen') ?>" class="nav-link <?php if ($activeMenu == 'agen') echo "active" ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Agen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/pesan') ?>" class="nav-link <?php if ($activeMenu == 'kontak') echo "active" ?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>
          
          
          <li class="nav-header"><b>KREDENSIAL AKSES</b></li>
          <li class="nav-item">
          <a href="<?php echo base_url('admin/apis') ?>" class="nav-link <?php if ($activeMenu == 'apis') echo "active" ?>">
              <i class="fas fa-key nav-icon"></i>
              <p>Akses <b>API</b></p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url('admin/super') ?>" class="nav-link <?php if ($activeMenu == 'admin') echo "active" ?>">
              <i class="fas fa-user nav-icon"></i>
              <p>Akses <b>Admin</b></p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>