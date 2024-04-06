<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard.index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SIM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI Inventory MI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://media.istockphoto.com/id/1300845620/id/vektor/ikon-pengguna-datar-terisolasi-pada-latar-belakang-putih-simbol-pengguna-ilustrasi-vektor.jpg?s=612x612&w=0&k=20&c=QN0LOsRwA1dHZz9lsKavYdSqUUnis3__FQLtZTQ--Ro=" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="https://media.istockphoto.com/id/1300845620/id/vektor/ikon-pengguna-datar-terisolasi-pada-latar-belakang-putih-simbol-pengguna-ilustrasi-vektor.jpg?s=612x612&w=0&k=20&c=QN0LOsRwA1dHZz9lsKavYdSqUUnis3__FQLtZTQ--Ro=" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->name }} - {{ Auth::user()->bagian->bagian }}
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat">Sign Out</button>
                  </form>
                  {{-- <a href="" class="btn btn-default btn-flat">Sign out</a> --}}
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://media.istockphoto.com/id/1300845620/id/vektor/ikon-pengguna-datar-terisolasi-pada-latar-belakang-putih-simbol-pengguna-ilustrasi-vektor.jpg?s=612x612&w=0&k=20&c=QN0LOsRwA1dHZz9lsKavYdSqUUnis3__FQLtZTQ--Ro=" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>{{ Auth::user()->bagian->bagian }}</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == "Petugas BMN" || Auth::user()->bagian->bagian == "Kepala Ruang"))
          <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
          <li><a href="{{ route('jenis.index') }}"><i class="fa fa-server"></i> <span>Data Jenis</span></a></li>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == "Petugas BMN" || Auth::user()->bagian->bagian == "Kepala Ruang"))
          <li><a href="{{ route('barang.index') }}"><i class="fa fa-archive"></i> <span>Data Barang</span></a></li>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == "Kepala Ruang"))
          <li><a href="{{ route('ruang.index') }}"><i class="fa fa-building-o"></i> <span>Data Ruang</span></a></li>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
          <li><a href="{{ route('user.index') }}"><i class="fa fa-user"></i> <span>Data User</span></a></li>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == "Petugas BMN" || Auth::user()->bagian->bagian == "Kepala Ruang"))
          <li><a href="{{ route('inventaris.index') }}"><i class="fa fa-clipboard"></i> <span>Inventaris</span></a></li>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
          <li><a href="{{ route('laporan.index') }}"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
</div>
</body>
</html>