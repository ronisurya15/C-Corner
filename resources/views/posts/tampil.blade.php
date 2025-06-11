@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
            <span>Daftar Postingan</span>
            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">Tambah</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Thumbnail</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Kategori Postingan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>Tips Belajar Efektif</td>
                        <td>Cara belajar yang terbukti meningkatkan konsentrasi dan pemahaman materi.</td>
                        <td>Edukasi</td>
                        <td><a href="{{ route('posts.edit') }}" class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td>Resep Mie Gacoan Homemade</td>
                        <td>Langkah mudah membuat mie gacoan di rumah dengan bahan sederhana.</td>
                        <td>Kuliner</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td>Review Film "Dune"</td>
                        <td>Ulasan lengkap film Dune dengan analisis cerita dan visual efeknya.</td>
                        <td>Hiburan</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td>Cara Mengelola Keuangan Mahasiswa</td>
                        <td>Tips menyusun anggaran bulanan untuk mahasiswa agar tidak bokek di akhir bulan.</td>
                        <td>Keuangan</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td></td>
                        <td>Belajar Git dalam 10 Menit</td>
                        <td>Ringkasan dasar-dasar Git yang wajib diketahui pemula.</td>
                        <td>Teknologi</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td></td>
                        <td>Destinasi Wisata Murah di Indonesia</td>
                        <td>Daftar tempat wisata indah dan ramah kantong untuk liburan akhir semester.</td>
                        <td>Travel</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td></td>
                        <td>Strategi Lolos Beasiswa</td>
                        <td>Langkah-langkah penting agar Kamu bisa lolos seleksi beasiswa dalam dan luar negeri.</td>
                        <td>Beasiswa</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td></td>
                        <td>Menghadapi Quarter Life Crisis</td>
                        <td>Pembahasan ringan namun bermakna soal krisis identitas usia 20-an.</td>
                        <td>Psikologi</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td></td>
                        <td>Trend Fashion Mahasiswa 2025</td>
                        <td>Model dan gaya fashion terkini yang sedang hits di kalangan mahasiswa.</td>
                        <td>Fashion</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td></td>
                        <td>Manajemen Waktu untuk Kuliah dan Kerja</td>
                        <td>Trik menjaga keseimbangan antara kuliah dan pekerjaan tanpa burnout.</td>
                        <td>Produktivitas</td>
                        <td><a class="btn btn-warning btn-sm">Edit</a> <a class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection