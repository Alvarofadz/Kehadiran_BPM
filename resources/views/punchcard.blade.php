@extends('layouts.app')

@section('content')
<head>
  <title>Punch card</title>
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
            <h1><strong> PUNCH CARD</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-block btn-primary" alt="Print Receipt" onclick="window.print();" target="_blank" style="cursor:pointer; width:250px;"> PRINT </button>
            </ol>
          </div>
          <div style = "padding-top: 25px;text-align:right;padding-left:50px;">
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
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="text-align:center; font-size:30px;" colspan ="7">KERAJAAN MALAYSIA</th>
                  </tr>
                  <tr>
                    <th style="font-size:20px; padding-left: 50px; text-transform: uppercase;" colspan = "7">NO     : <br/> <br/> NAMA : {{ $staff->NAMA }} <br/> BAH. : BAHAGIAN PENGURUSAN MAKLUMAT <br/> KEM. : KEMENTERIAN KESIHATAN MALAYSIA<br/>BULAN : 
                      @if( $staff->TARIKH == '2021-08-01') OGOS 
                      @else($staff->TARIKH == '') LAIN 
                      @endif</th>
                  </tr>
                  <tr>
                    <th>TARIKH</th>
                    <th>MASUK</th>
                    <th>KELUAR</th>
                    <th>MASUK</th>
                    <th>KELUAR</th>
                    <th>KENYATAAN</th>
                    <th>T/T KETUA</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                    
                  @foreach ($data as $user)
                  <tr>
                    <td>{{substr($user->TARIKH,8)}}</td>
                    <td>{{substr($user->MASA_MASUK,-8)}}</td>
                    <td></td>
                    <td></td>
                    <td>{{substr($user->MASA_KELUAR,-8)}}</td>
                    <td>{{ $user->STATUS_KEHADIRAN}}</td>
                    <td></td>
                    
                  </tr>
                  
                
                @endforeach
                </tbody>
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

</body>
@endsection