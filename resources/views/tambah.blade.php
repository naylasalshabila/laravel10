@extends('layouts.app')

@section('content')
    <h3>tambah Buku</h3>
    <form action="{{ route('admin.addbuku') }}" method="POST">
        @csrf
        <div class="row">
            <input type="text" name="id" value="{{ $data->id }}" hidden>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">nama buku</label>
                    <input type="text" name="nama_buku" class="form-control" value="{{ $data->nama_buku }}" required>
                </div>

                <div class="form-group">
                    <label for="">jumlah halaman</label>
                    <input type="text" name="jml_hal" class="form-control" value="{{ $data->jml_hal }}" required>
                </div>

                <div class="form-group">
                    <label for="">penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="{{ $data->penerbit }}" required>
                </div>


                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>

    </form>
@endsection
