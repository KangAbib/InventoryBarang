@extends('layouts.master')

@section('title', 'Tambah Ruang')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-0">
        <div class="col-12 d-none d-sm-block">
            <h3><strong>Tambah Ruang</strong></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('ruang.index') }}">Ruang</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
            <hr style="border: 2px solid #1e8a97;">
        </div>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <form class="form-horizontal" action="{{ route('ruang.store') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="id" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="ID Ruang" name="id" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="namaRuang" class="col-sm-2 control-label">Nama Ruang</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Nama Ruang" name="namaRuang" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Kepala Ruang</label>
                  <div class="col-sm-7">
                  <select id="dropdown" name="user_id">
                        @foreach($data1 as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                  </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a href="{{ route('ruang.index') }}"><button type="submit" class="btn btn-info pull-right">Save</button></a>
                <a href="{{ route('ruang.index') }}"><button type="button" class="btn btn-warning pull-left">Back</button></a>
              </div>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection