<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Profile</h2>
    @if($errors->any())
        <div style="color:red">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ url('/profile') }}">
        @csrf
        @method('PUT')
        <label>Gender:</label>
        <input type="text" name="gender" value="{{ $profile->gender ?? '' }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $profile->email ?? '' }}" required><br>
        <label>University Name:</label>
        <input type="text" name="university_name" value="{{ $profile->university_name ?? '' }}" required><br>
        <label>Majors:</label>
        <input type="text" name="majors" value="{{ $profile->majors ?? '' }}" required><br>
        <label>Prodi:</label>
        <input type="text" name="prodi" value="{{ $profile->prodi ?? '' }}" required><br>
        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" value="{{ $profile->date_of_birth ?? '' }}" required><br>
        <button type="submit">{{ $profile ? 'Update' : 'Simpan' }}</button>
    </form>
    <a href="{{ url('/profile') }}">Back to Profile</a>
</body>
</html>