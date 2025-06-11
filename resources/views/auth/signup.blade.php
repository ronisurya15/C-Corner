<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-Corner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">C-Corner</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>

    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header text-white bg-dark d-flex justify-content-between align-items-center">
                    <span>Sign Up</span>
                    <a href="{{ url('/') }}" class="btn btn-sm btn-warning">Kembali Beranda</a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <form method="POST" action="{{ url('/auth/signup') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nama <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation">Konfirmasi Password <span class="text-danger">*</span></label>
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
                        </div>
                        <div class="mt-2 mb-2">
                            <hr>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100">Sign Up</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="{{ url('/auth/signin') }}">Sudah punya akun? Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</body>

</html>