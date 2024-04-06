@extends('layouts.master')

@section('title', 'Tambah Jenis')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-0">
        <div class="col-12 d-none d-sm-block">
            <h3><strong>Tambah Jenis</strong></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('jenis.index') }}">Jenis</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
            <hr style="border: 2px solid #1e8a97;">
        </div>
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Form</h3>
                </div>
                <form class="form-horizontal" action="{{ route('jenis.store') }}" method="POST">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id" class="col-sm-2 control-label">ID</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="ID Jenis" name="id" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="namaJenis" class="col-sm-2 control-label">Nama Jenis</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama Jenis" name="namaJenis" required>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <a href="{{ route('jenis.index') }}"><button type="submit" class="btn btn-info pull-right">Save</button></a>
                    <a href="{{ route('jenis.index') }}"><button type="button" class="btn btn-warning pull-left">Back</button></a>
                  </div>
                  </div>
                </form>
              </div>
        </div>
</div>
@endsection