@extends('layouts.master')

@section('title', 'Tambah User')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-0">
        <div class="col-12 d-none d-sm-block">
            <h3><strong>Create Update User</strong></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
            <hr style="border: 2px solid #1e8a97;">
        </div>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <form class="form-horizontal" action="{{ route('user.store') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="id" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="id" placeholder="ID User" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="noPegawai" class="col-sm-2 control-label">Nomor Pegawai</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="noPegawai" placeholder="Nomor Pegawai" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Nama Pegawai</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="name" placeholder="Nama Pegawai" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="bagian_id" class="col-sm-2 control-label">Bagian</label>
                  <div class="col-sm-7">
                  <select id="dropdown" name="bagian_id">
                      @foreach($data1 as $item)
                      <option value="{{ $item->id }}">{{ $item->bagian }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
                <a href="{{ route('user.index') }}"><button type="button" class="btn btn-warning pull-left">Back</button></a>
              </div>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection