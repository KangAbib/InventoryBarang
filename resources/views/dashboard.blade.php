@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $jumlahJenis }}</h3>

              <p>Data Jenis</p>
            </div>
            <div class="icon">
              <i class="fa fa-server"></i>
            </div>
            <a href="{{ route('jenis.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
        <!-- ./col -->
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == 'Petugas BMN' || Auth::user()->bagian->bagian == 'Kepala Ruang'))
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3>{{ $jumlahBarang }}</h3>

              <p>Data Barang</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="{{ route('barang.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
        <!-- ./col -->
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == 'Kepala Ruang'))
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $jumlahRuang }}</h3>

              <p>Data Ruang</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
            <a href="{{ route('ruang.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
        <!-- ./col -->
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $jumlahUser }}</h3>

              <p>Data User</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="{{ route('user.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel" || Auth::user()->bagian->bagian == 'Petugas BMN' || Auth::user()->bagian->bagian == 'Kepala Ruang'))
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>{{ $jumlahInventaris }}</h3>

              <p>Inventaris</p>
            </div>
            <div class="icon">
              <i class="fa fa-clipboard"></i>
            </div>
            <a href="{{ route('inventaris.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
        <!-- ./col -->
      </div>
    </section>
@endsection