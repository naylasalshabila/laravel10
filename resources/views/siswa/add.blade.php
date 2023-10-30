@extends('layouts.app')

@section('content')
    <h3>tambah siswa</h3>
    <form action="{{ route('admin.insertsiswa') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">No hp</label>
                    <input type="text" name="no_hp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jengkel" class="form-control" required>
                        <option value="pilih jenis kelamin"></option>
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>

    </form>
@endsection
