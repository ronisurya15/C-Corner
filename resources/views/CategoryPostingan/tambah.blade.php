@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
                    <span>Daftar Kategori</span>
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                </div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" class="form-controll">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection