@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
                    <span>Tambah Forum</span>
                    <a href="{{ route('forum.index') }}" class="btn btn-sm btn-warning">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('forum.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Forum <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan Nama Forum" require>
                        </div>
                        <div class="mt-2 mb-2">
                            <hr>
                        </div>
                        <button class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection