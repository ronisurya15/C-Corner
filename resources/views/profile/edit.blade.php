@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-7 col-lg-6 col-12">
            <div class="card">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <span>Edit Profile</span>
                    <a href="{{ url('/profile') }}" class="btn btn-sm btn-warning">Back to Profile</a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <form method="POST" action="{{ url('/profile') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Gender <span class="text-danger">*</span></label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="">-- Pilih Gender --</option>
                                <option value="Perempuan" {{ old('gender', $profile->gender ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                <option value="Laki-laki" {{ old('gender', $profile->gender ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $profile->email ?? '') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="university_name">University Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="university_name" name="university_name" value="{{ old('university_name', $profile->university_name ?? '') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="majors">Majors <span class="text-danger">*</span></label>
                            <select class="form-control" id="majors" name="majors" required>
                                <option value="">-- Pilih Jenjang --</option>
                                <option value="D1" {{ old('majors', $profile->majors ?? '') == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="D2" {{ old('majors', $profile->majors ?? '') == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('majors', $profile->majors ?? '') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4" {{ old('majors', $profile->majors ?? '') == 'D4' ? 'selected' : '' }}>D4</option>
                                <option value="S1" {{ old('majors', $profile->majors ?? '') == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ old('majors', $profile->majors ?? '') == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('majors', $profile->majors ?? '') == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="prodi">Prodi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ old('prodi', $profile->prodi ?? '') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date_of_birth">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $profile->date_of_birth ?? '') }}" required>
                        </div>
                        <div class="mt-2 mb-2">
                            <hr>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100">{{ $profile ? 'Update' : 'Simpan' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection