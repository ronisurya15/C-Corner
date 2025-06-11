<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-Corner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">C-Corner</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('category.index') }}">Kategori Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('posts.index') }}">Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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


    <!-- Script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</body>

</html>