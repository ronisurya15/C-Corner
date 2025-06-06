@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
            <span>Daftar Kategori</span>
            <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Tambah</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection