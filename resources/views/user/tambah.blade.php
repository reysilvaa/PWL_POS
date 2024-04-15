@extends('adminlte::page')
@section('title', 'User')
@section('content_header')
    <h1>Tambah User</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Kolom kiri -->
            <div class="col-md-6">
                <!-- Elemen formulir umum -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- Mulai formulir -->

                    @if ($errors->any())
                    <div class="alert alert-danger">
                         <strong>Ops</strong> Input gagal<br><br>
                         <ul>
                              @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                              @endforeach
                         </ul>
                    </div>
               @endif
                    <form action="{{ route('user.tambah_simpan') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputUsername">Username</label>
                                <input name="username" type="text" class="form-control" id="exampleInputUsername" placeholder="Nama username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputName" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLevel">Level</label>
                                <input name="level" type="text" class="form-control" id="exampleInputLevel" placeholder="Masukkan Level">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
