@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Postingan</h2>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tips Belajar Efektif</h5>
                    <p class="card-text">Cara belajar yang terbukti meningkatkan konsentrasi dan pemahaman materi.</p>
                    <span class="badge bg-primary mb-3">Edukasi</span>
                    <div class="text-muted small">
                        <div><i class="bi bi-person-fill"></i> Andi Mahasiswa</div>
                        <div><i class="bi bi-calendar-event"></i> 10 Juni 2025</div>
                        <div><i class="bi bi-heart-fill text-danger"></i> 125</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu Postingan 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Waktu Kuliah & Kerja</h5>
                    <p class="card-text">Trik menjaga keseimbangan antara kuliah dan pekerjaan tanpa burnout.</p>
                    <span class="badge bg-success mb-3">Produktivitas</span>
                    <div class="text-muted small">
                        <div><i class="bi bi-person-fill"></i> Siti Kampus</div>
                        <div><i class="bi bi-calendar-event"></i> 8 Juni 2025</div>
                        <div><i class="bi bi-heart-fill text-danger"></i> 89</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan kartu postingan lainnya di sini... -->
    </div>
</div>
@endsection