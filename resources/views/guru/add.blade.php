@extends('layouts.app')

@section('content')
    <h3>tambah guru</h3>
    <form action="{{ route('admin.insertguru') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3">


                <div class="form-group">
                    <label for="">nama guru</label>
                    <input type="text" name="nama_guru" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">no hp</label>
                    <input type="text" name="no_hp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}"required>
                    <div class="text-danger">
                        @error('email')
                            {{ $massage }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}"required>
                        <div class="text-danger">
                            @error('password')
                                {{ $massage }}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>

    </form>
@endsection
