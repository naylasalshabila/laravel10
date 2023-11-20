@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.addguru') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">

        <tr>
            <th>no</th>
            <th>email</th>
            <th>nama guru</th>
            <th>no hp</th>
            <th>aksi</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($data as $d)
            <tr>
                <td>1</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->no_hp }}</td>
                <td>aksi</td>


            </tr>
        @endforeach

    </table>
@endsection
