<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
</head>
<body>
    <h2>Sign In</h2>
    @if($errors->any())
        <div style="color:red">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ url('/auth/signin') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Sign In</button>
    </form>
    <a href="{{ url('/auth/signup') }}">Sign Up</a> |
    <a href="{{ url('/auth/reset-password') }}">Forgot Password?</a>
</body>
</html>