@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
            <span>Daftar Forum</span>
            <a href="{{ route('forum.index') }}" class="btn btn-sm btn-primary">Tambah</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Forum</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Olahraga</td>
                        <td><a href="{{ route('forum.edit') }}" class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection