<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href='/css/all.min.css'>
  <link rel="stylesheet" href='plugins/fontawesome-free/css/all.min.css'>
  
  <!-- DataTables -->
  <link rel="stylesheet" href='/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'>
  <link rel="stylesheet" href='/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'>
  <link rel="stylesheet" href='/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'>
  <!-- Theme style -->
  <link rel="stylesheet" href='/css/adminlte.min.css'>

    <!-- Brand Logo -->
    <a href="https://www.moh.gov.my/" class="brand-link" target="_blank">
      <img src='/img/kkm.jpg' alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KKM</span> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src='/img/zon_ict.png' class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Zon ICT</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/laporan1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lewat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/laporan2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kurang jam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/laporan3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Luar kawasan</p>
                </a>
              <li class="nav-item">
                <a href="/laporan4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Punch card</p>
                </a>
              </li>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
</html> 