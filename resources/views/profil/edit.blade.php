

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="/css/profil/profile.css">
</head>
<body>
    <header>
        @include('navbar.navbar')
    </header>
    <div class="container">
        <h1>Edit Profile</h1>
        @if (session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Field Nama -->
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" value="{{ $user->name }}" required>
            </div>
          
            <!-- Field Password -->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password">
            </div>
          
            <!-- Field Konfirmasi Password -->
            <div class="form-group">
              <label for="password_confirmation">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
          
            <!-- Field About Me -->
            <div class="form-group">
              <label for="aboutme">Tentang Saya</label>
              <textarea name="aboutme" id="aboutme" rows="5">{{ $user->aboutme }}</textarea>
            </div>
          
            <!-- Field Foto Profil -->
            <div class="form-group">
                <label for="foto">Foto Profil</label>
                <input type="file" name="foto" id="foto">
              </div>
            <!-- Tombol Submit -->
            <button type="submit">Simpan</button>
          </form>
          
    </div>
</body>
</html>
