@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
                    <span>Tambah Postingan</span>

                    <a href="{{ route('posts.index') }}" class="btn btn-sm btn-warning">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Judul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan Judul" require>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Deskripsi</label>
                            <textarea name="description" id="" placeholder="Masukkan Deskripsi" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Kategori Postingan <span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" name="file">
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