@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
     <div class="container-fluid">
          <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
               <div class="card-header">
               <h3 class="card-title">Form <small>User</small></h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div>
               @endif
               <!-- form start -->
               <form action="{{ route('level.tambah_simpan') }}" method="POST">
                @csrf
               <div class="card-body">
                    <div class="form-group">
                    <label for="kodeLevel">Kode Level</label>
                    <input type="text" name="level_kode" class="form-control" id="level_kode" placeholder="Masukkan Kode Level">
                    </div>
                    <div class="form-group">
                    <label for="namaLevel">Nama Level</label>
                    <input type="text" name="level_nama" class="form-control" id="level_nama" placeholder="Masukkan Nama Level">
                    </div>
               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>
               </form>
          </div>
          <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
          </div>
          <!-- /.row -->
     </div><!-- /.container-fluid -->
@stop

@section('css')
     {{-- Add here extra stylesheets --}}
     {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
     <script>
          console.log("Hi, I'm using the Laravel-AdminLTE package!");
     </script>
@stop
