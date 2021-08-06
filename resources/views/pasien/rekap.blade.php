<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Status Gizi Balita</title>


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/dashboard/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dashboard/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>

        </ul>

        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">Si-Zigzak </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/dashboard/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pasien/create" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Pasien</p>
                </a>
                <li class="nav-item">
                <a href="/data/pasien" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
                <li class="nav-item">
                  <a href="/rekap" class="nav-link active ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rekap Pasien </p>
                  </a>
                </li>

              </aside>

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">

                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                  {{session('sukses')}}
                </div>
                @endif
                <!-- Content Header (Page header) -->
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1 class="mb-4  text-dark">Rekap Pasien</h1>

                        <form action="/cariRekap" method="GET" class="mb-4">
                          <div class="input-group">  
                            <input type="search" name="cari" class="form-control" placeholder="Cari Data Balita">
                            <button class="btn btn-primary" type="submit">Cari</button>
                          </div>
                        </form>

                        

                      </div><!-- /.col -->
                      <div class="box">
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <!--  <th>ID</th> -->
                                <th>No</th>
                                <th>Nib</th>
                                <th>Nama Pasien</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Usia</th>
                                <th>Nilai Gizi </th>
                                <th>Hasil Gizi</th>
                                <th>Saran</th>
                                <th>Waktu Periksa</th>
                                </tr>


                            </thead>
                            <tbody>
                              @foreach($periksa as $item)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nib}}</td>
                                <td>{{$item->nama_pasien}}</td>
                                <td>{{$item->berat_badan}}</td>
                                <td>{{$item->tinggi_badan}}</td>
                                <td>{{$item->usia}}</td>
                                <td>{{$item->nilai_gizi}}</td>
                                <td>{{$item->hasil_gizi}}</td>
                                <td>{{$item->saran}}</td>
                                <td>{{$item->waktu_periksa}}</td>


                            

                              

                              @endforeach





                            </tbody>

                          </table>

                        </div>
                        <!-- /.box-body -->
                      </div>
                    </div><!-- /.row -->

                  </div><!-- /.container-fluid -->
                  {{ $periksa->links() }}
                </div>
                <!-- /.content-header --> 
                <!-- /.content-wrapper -->

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                  <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->

                <!-- Main Footer -->

              </div>

              <!-- REQUIRED SCRIPTS -->
              <!-- jQuery -->
              <script src="/dashboard/plugins/jquery/jquery.min.js"></script>
              <!-- Bootstrap -->
              <script src="/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
              <!-- overlayScrollbars -->
              <script src="/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
              <!-- AdminLTE App -->
              <script src="/dashboard/dist/js/adminlte.js"></script>

              <!-- OPTIONAL SCRIPTS -->
              <script src="/dashboard/dist/js/demo.js"></script>

              <!-- PAGE PLUGINS -->
              <!-- jQuery Mapael -->
              <script src="/dashboard/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
              <script src="/dashboard/plugins/raphael/raphael.min.js"></script>
              <script src="/dashboard/plugins/jquery-mapael/jquery.mapael.min.js"></script>
              <script src="/dashboard/plugins/jquery-mapael/maps/usa_states.min.js"></script>
              <!-- ChartJS -->
              <script src="plugins/chart.js/Chart.min.js"></script>

              <!-- PAGE SCRIPTS -->
              <script src="/dashboard/dist/js/pages/dashboard2.js"></script>

            </body>
            </html>
