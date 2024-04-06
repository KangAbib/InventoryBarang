@extends('layouts.master')

@section('title', 'Inventaris')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-0">
        <div class="col-12 d-none d-sm-block">
            <h3><strong>Daftar Inventaris</strong></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('inventaris.index') }}">Inventaris</a></li>
                </ol>
            </nav>
            <hr style="border: 2px solid #1e8a97;">
        </div>
        <!-- test -->
        @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
        <div class="tombol-tambah">
            <a href="{{ route('inventaris.create') }}"><button type="button" class="btn btn-success">Tambah</button></a>
        </div>
        @endif
        <br>
        <br>
        <table class="table table-bordered table-striped" id="table-daftar">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Nama Ruang</th>
                <th scope="col">TGL Masuk</th>
                <th scope="col">TGL Keluar</th>
                @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
                <th scope="col">Aksi</th>
                @endif
              </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>INV-{{ $item->id }}</td>
                    <td>{{ $item->barang->namaBarang }}</td>
                    <td>{{ $item->ruang->namaRuang }}</td>
                    <td>{{ $item->tglMasuk }}</td>
                    <td>{{ $item->tglKeluar }}</td>
                    @if (Auth::check() && (Auth::user()->bagian->bagian == "Admin Bengkel"))
                    <td>
                        <form action="{{ route('inventaris.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal-{{ $item->id }}">
                                Hapus
                            </button>
                            <div class="modal fade" id="confirmDeleteModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data "{{ $item->barang->namaBarang}} / {{$item->ruang->namaRuang}}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger" onclick="submitDeleteForm({{ $item->id }})">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            <a href="{{ route('inventaris.edit', $item->id) }}"><button type="button" class="btn btn-info">Update</button></a>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
@endsection