<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="/css/login/style.css">
</head>
<body>
  <div class="container">
    
     <img src="/images/view.png" alt="" class="gambar">
    <form action="/login" method="POST">
      @csrf 
        <img src="/images/logo.png" alt="" class="logo">
        <h2>Please sign in</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password">
      </div>
      <a class="lupa" href="/register">Belum Punya Akun? Daftar</a><br><br>
      <a class="lupa" href="#">Lupa Password?</a>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>

