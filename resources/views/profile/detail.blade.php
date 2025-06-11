@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-7 col-lg-6 col-12">
            <div class="card">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <span>Profile Detail</span>
                    <form method="POST" action="{{ url('/auth/logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                    </form>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    @if($profile)
                        <ul class="list-group mb-3">
                            <li class="list-group-item"><b>Nama:</b> {{ $user->name }}</li>
                            <li class="list-group-item"><b>Email:</b> {{ $profile->email }}</li>
                            <li class="list-group-item"><b>Gender:</b> {{ $profile->gender ?: '-' }}</li>
                            <li class="list-group-item"><b>University Name:</b> {{ $profile->university_name ?: '-' }}</li>
                            <li class="list-group-item"><b>Majors:</b> {{ $profile->majors ?: '-' }}</li>
                            <li class="list-group-item"><b>Prodi:</b> {{ $profile->prodi ?: '-' }}</li>
                            <li class="list-group-item"><b>Date of Birth:</b> {{ $profile->date_of_birth ?: '-' }}</li>
                        </ul>
                        <a href="{{ url('/profile/edit') }}" class="btn btn-primary btn-sm w-100 mb-2">Edit Profile</a>
                        <a href="{{ route('manual.reset-password') }}" class="btn btn-warning btn-sm w-100 mb-2">Reset Password</a>
                    @else
                        <ul class="list-group mb-3">
                            <li class="list-group-item"><b>Nama:</b> {{ $user->name }}</li>
                            <li class="list-group-item"><b>Email:</b> {{ $user->email }}</li>
                        </ul>
                        <div class="alert alert-warning">Profile belum lengkap.</div>
                        <a href="{{ url('/profile/edit') }}" class="btn btn-primary btn-sm w-100 mb-2">Isi Profile</a>
                        <a href="{{ route('manual.reset-password') }}" class="btn btn-warning btn-sm w-100 mb-2">Reset Password</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection