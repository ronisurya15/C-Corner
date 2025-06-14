@extends('layouts.master')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark text-center">
                    <span class="fs-5">Masuk</span>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('signin') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <div class="mt-2 mb-2">
                            <hr>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md w-100">Masuk</button>
                    </form>
                    <div class="mt-3 d-flex justify-content-center" style="font-size: 0.9rem;">
                        <a href="{{ url('/auth/signup') }}">Belum punya akun?</a>
                        <!-- <a href="{{ url('/auth/reset-password') }}">Lupa Password?</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection