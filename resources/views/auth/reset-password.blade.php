<!DOCTYPE html>
<html>
<head>
    <title>Reset Password Manual</title>
</head>
<body>
    <h2>Reset Password Manual</h2>
    @if(session('status'))
        <div style="color:green">{{ session('status') }}</div>
    @endif
    @if($errors->any())
        <div style="color:red">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ url('/auth/reset-password') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password Baru:</label>
        <input type="password" name="password" required><br>
        <label>Konfirmasi Password Baru:</label>
        <input type="password" name="password_confirmation" required><br>
        <button type="submit">Reset Password</button>
    </form>
    <a href="{{ url('/auth/signin') }}">Kembali ke Login</a>
</body>
</html>