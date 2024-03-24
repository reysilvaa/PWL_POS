@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit Kategori')

{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit kategori</h3>
            </div>
            <form action="/kategori/{{$data->kategori_id}}" method="post">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" value="{{$data->kategori_kode}}" class="form-control" name="kodeKategori" id="kodeKategori">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" value="{{$data->kategori_nama}}" class="form-control" name="namaKategori" id="namaKategori">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
