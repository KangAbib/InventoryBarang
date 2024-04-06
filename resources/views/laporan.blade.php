@extends('layouts.master')

@section('title', 'Laporan')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-0">
        <div class="col-12 d-none d-sm-block">
            <h3><strong>Laporan</strong></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('laporan.index') }}">Laporan</a></li>
                </ol>
            </nav>
            <hr style="border: 2px solid #1e8a97;">
        </div>
        <!-- test -->
        <div class="tombol-tambah">
            <div class="btn-group">
              {{-- <select id="dropdown" name="bagian_id">
                <option value="">test</option>
              </select> --}}
                  <button type="button" class="btn btn-warning">Filter</button>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('laporan.index') }}">Semua</a></li>
                    <li><a href="{{ route('laporan.baik') }}">Baik</a></li>
                    <li><a href="{{ route('laporan.rusak') }}">Rusak</a></li>
                    <li><a href="{{ route('laporan.tersedia') }}">Tersedia</a></li>
                    <li><a href="{{ route('laporan.habis') }}">Habis</a></li>
                  </ul>
            </div>
            <button onclick="window.print()" class="btn btn-success">Cetak</button>
        </div>
        <br>
        <br>
        <table class="table table-bordered table-striped" id="table-daftar">
            <thead>
              <tr>
                <th scope="col">Nama Barang</th>
                <th scope="col">Nama Ruang</th>
                <th scope="col">Jenis</th>
                <th scope="col">Kondisi</th>
                <th scope="col">TGL Masuk</th>
                <th scope="col">TGL Keluar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
                <tr>
                    <td>{{ $item->barang->namaBarang }}</td>
                    <td>{{ $item->ruang->namaRuang }}</td>
                    <td>{{ $item->barang->jenis->namaJenis }}</td>
                    <td>{{ $item->barang->kondisi->kondisiBarang }}</td>
                    <td>{{ $item->tglMasuk }}</td>
                    <td>{{ $item->tglKeluar }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
@endsection