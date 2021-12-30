@extends('layouts.app')

@section('content')
<head>
  <title>BPM</title>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"">
  @include('layouts.header')
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div>
    @include('layouts.sidebar')
  </div>
  </aside>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Lewat masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lewat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Staff yang lewat akan dijana di sini</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Pegawai</th>
                    <th>Bahagian</th>
                    <th>Tarikh</th>
                    <th>Jam Bekerja</th>
                    <th>Catatan Keluar</th>
                    <th>Status Kehadiran</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                    
                  @foreach ($data as $user)
                  <tr>
                    <td>{{ $user->NAMA }}</td>
                    <td>{{ $user->BAHAGIAN}}</td>
                    <td>{{ $user->TARIKH }}</td>
                    <td>{{ $user->JAM_BEKERJA }}</td>
                    <td>{{ $user->CATATAN_KELUAR}}</td>
                    <td>{{ $user->STATUS_KEHADIRAN}}</td>                
                  </tr>
                  @endforeach
                </tbody>

                  <tfoot>
                  <tr>
                    <th>Nama Pegawai</th>
                    <th>Bahagian</th>
                    <th>Tarikh</th>
                    <th>Jam Bekerja</th>
                    <th>Catatan Masuk</th>
                    <th>Status Kehadiran</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
@endsection