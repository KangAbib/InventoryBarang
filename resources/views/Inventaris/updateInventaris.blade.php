@extends('layouts.master')

@section('title', 'Update Inventaris')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-0">
        <div class="col-12 d-none d-sm-block">
            <h3><strong>Tambah Inventaris</strong></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('inventaris.index') }}">Inventaris</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
            <hr style="border: 2px solid #1e8a97;">
        </div>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <form class="form-horizontal" action="{{ route('inventaris.update', $data->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="box-body">
                <div class="form-group">
                  <label for="id" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="id" required placeholder="ID Inventaris" required value="{{ $data->id }}" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="barang_id" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-7">
                  <select id="dropdown" name="barang_id">
                    @foreach($data1 as $item)
                    <option value="{{ $item->id }}">{{ $item->namaBarang }}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ruang_id" class="col-sm-2 control-label">Nama Ruang</label>
                  <div class="col-sm-7">
                  <select id="dropdown" name="ruang_id">
                    @foreach($data2 as $item)
                    <option value="{{ $item->id }}">{{ $item->namaRuang }}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tglMasuk" class="col-sm-2 control-label">Tanggal Masuk</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control pull-right" id="datepicker" required name="tglMasuk" value="{{ $data->tglMasuk }}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tglKeluar" class="col-sm-2 control-label">Tanggal Keluar</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control pull-right" id="datepicker" required name="tglKeluar" value="{{ $data->tglKeluar }}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
                <a href="{{ route('inventaris.index') }}"><button type="button" class="btn btn-warning pull-left">Back</button></a>
              </div>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection