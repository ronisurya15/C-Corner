<!DOCTYPE html>
<html>
<head>
    <title>Profile Detail</title>
</head>
<body>
    <h2>Profile Detail</h2>
    @if(session('status'))
        <div style="color:green">{{ session('status') }}</div>
    @endif

    @if($profile)
        <ul>
            <li><b>Email :</b> {{ $profile->email }}</li>
            <li><b>Gender:</b> {{ $profile->gender }}</li>
            <li><b>University Name:</b> {{ $profile->university_name }}</li>
            <li><b>Majors:</b> {{ $profile->majors }}</li>
            <li><b>Prodi:</b> {{ $profile->prodi }}</li>
            <li><b>Date of Birth:</b> {{ $profile->date_of_birth }}</li>
        </ul>
        <a href="{{ url('/profile/edit') }}">Edit Profile</a>
    @else
        <ul>
            <li><b>Nama:</b> {{ $user->name }}</li>
            <li><b>Email :</b> {{ $user->email }}</li>
        </ul>
        <p>Profile belum lengkap.</p>
        <a href="{{ url('/profile/edit') }}">Isi Profile</a>
    @endif

    <br>
    <a href="{{ route('manual.reset-password') }}">Reset Password</a>
    <form method="POST" action="{{ url('/auth/logout') }}" style="display:inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>