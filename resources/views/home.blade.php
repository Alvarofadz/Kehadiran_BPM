@extends('layouts.app')

@section('content')
<head>
    <title> BPM </title>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src='/img/zon_ict.png' alt="AdminLTELogo" height="120" width="120">
  </div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light"">
  @include('layouts.header')
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div>
    @include('layouts.sidebar')
  </div>
</aside>
                
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $data1}}<sup style="font-size: 20px"> laporan</sup></h3>

                <p>Laporan lewat</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/laporan1" class="small-box-footer">Lihat laporan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $data2}}<sup style="font-size: 20px"> laporan</sup></h3>

                <p>Kurang Jam</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/laporan2" class="small-box-footer">Lihat laporan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $data3}}<sup style="font-size: 20px"> laporan</sup></h3>

                <p>Luar Kawasan</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
              <a href="/laporan3" class="small-box-footer">Lihat laporan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>160 <sup style="font-size: 20px"> staff</sup></h3>

                <p>Punchcard Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="laporan4" class="small-box-footer">Lihat paparan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Info
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">KKM</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">ZON ICT</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div style="text-align:center;">
                    <img src='/img/kkm.jpg' height="125" width="125">
                    <div style="text-align:center; font-size:15px;padding-top:5px;"><strong> KEMENTERIAN KESIHATAN MALAYSIA </strong><br/></div>
                    <div style="text-align:justify; font-size:14px;padding:5px;">Kementerian Kesihatan ialah sebuah kementerian Kerajaan Malaysia yang bertanggungjawab ke atas sistem kesihatan: tingkah laku kesihatan, kanser, kesihatan awam, pengurusan kesihatan, penyelidikan perubatan, penyelidikan sistem kesihatan, perubatan pernafasan, promosi kesihatan, penjagaan kesihatan pelancongan, peranti perubatan, pengumpulan darah, kawalan kusta, penyelidikan klinikal, penjagaan kesihatan, penjagaan pergigian, institusi kesihatan, makmal, farmaseutikal, keselamatan pesakit.</div>
                  </div>                   
                </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <div style="text-align:center; font-size:18px;">
                    <img src='/img/zon_ict.png' height="125" width="125">
                    <div style="text-align:center; font-size:15px;padding-top:5px;"><strong> ZON ICT BPM </strong><br/></div>
                    <div style="text-align:justify; font-size:14px;padding:5px;">Kementerian Kesihatan ialah sebuah kementerian Kerajaan Malaysia yang bertanggungjawab ke atas sistem kesihatan: tingkah laku kesihatan, kanser, kesihatan awam, pengurusan kesihatan, penyelidikan perubatan, penyelidikan sistem kesihatan, perubatan pernafasan, promosi kesihatan, penjagaan kesihatan pelancongan, peranti perubatan, pengumpulan darah, kawalan kusta, penyelidikan klinikal, penjagaan kesihatan, penjagaan pergigian, institusi kesihatan, makmal, farmaseutikal, keselamatan pesakit.</div>
                  </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Lokasi
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
</div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('layouts.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection
