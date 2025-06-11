@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
                    <span>Reset Password Manual</span>
                    <a href="{{ url('/auth/signin') }}" class="btn btn-sm btn-warning">Kembali ke Login</a>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <form method="POST" action="{{ url('/auth/reset-password') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password Baru <span class="text-danger">*</span></label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password Baru" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation">Konfirmasi Password Baru <span class="text-danger">*</span></label>
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password Baru" required>
                        </div>
                        <div class="mt-2 mb-2">
                            <hr>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection