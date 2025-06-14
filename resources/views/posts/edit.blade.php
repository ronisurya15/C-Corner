@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
                    <span>Edit Postingan</span>

                    <a href="{{ route('posts.index') }}" class="btn btn-sm btn-warning">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('posts.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Judul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan Judul" required value="{{ $data->title }}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Deskripsi</label>
                            <textarea name="description" id="" placeholder="Masukkan Deskripsi" class="form-control" rows="4">{{ $data->description }}</textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Kategori Postingan <span class="text-danger">*</span></label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="">-- Pilih --</option>

                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $data->postCategory->id ? 'selected' : '' }}>
                                    {{ $item->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Forum <span class="text-danger">*</span></label>
                            <select name="forum_id" id="" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                @foreach ($forum as $item)
                                <option value="{{ $item->id }}"
                                    {{ $item->id == $data->forum->id ? 'selected' : '' }}>
                                    {{ $item->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Thumbnail <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept=" image/*">

                            <div class="mt-2">
                                <img id="preview-thumbnail"
                                    src="{{ $data->thumbnail ? asset('storage').'/'.$data->thumbnail : '#' }}"
                                    alt="Preview Thumbnail"
                                    style="max-width: 200px; {{ $data->thumbnail ? '' : 'display: none;' }}">
                            </div>
                        </div>

                        <div class="mt-2 mb-2">
                            <hr>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('thumbnail').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview-thumbnail');

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    });
</script>
@endsection