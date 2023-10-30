@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.addsiswa') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">

        <tr>
            <th>no</th>
            <th>nama siswa</th>
            <th>no hp</th>
            <th>jenis kelamin</th>
            <th>aksi</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($data as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->nama_siswa }}</td>
                <td>{{ $d->no_hp }}</td>
                <td>{{ $d->jengkel == 'l' ? 'laki-laki' : 'perempuan' }}</td>
                <td>
                    <a href="{{ route('admin.editsiswa', ['id' => $d->id]) }}" class="btn btn-info">edit</a>
                    <a href="{{ route('admin.deletesiswa', ['id' => $d->id]) }}" class="btn btn-danger">delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
