@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form method="POST" action="{{ route('register.action') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_user" value="{{ old('nama_user') }}" />
                </div>
                <div class="mb-3">
                    <label>Email <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="email_user" value="{{ old('email_user') }}" />
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password_user" />
                </div>
                <div class="mb-3">
                    <label>Konfirmasi Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password_user_confirmation" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Register</button>
                    <a class="btn btn-danger" href="{{ route('index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection