@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-white bg-dark">
            <h2 class="mb-0">Tambah Forum Jurusan</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('forum.store') }}" method="POST">
                @csrf

                {{-- Nama Jurusan --}}
                <div class="mb-3">
                    <label for="jurusan_forum" class="form-label">Jurusan:</label>
                    <input type="text" id="jurusan_forum" name="jurusan_forum" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
