{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

<link href="css/bootstrap.min.css" rel="stylesheet">

   
    
    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center bg-dark text-light">
    
<main class="form-signin w-100 m-auto bg-dark text-light">
  <form action="/register" method="POST">
    @csrf
    <img class="mb-" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvNOQRBGkU93glu_-uQezyC-Bg2CC16JL2YCn8LRdpig&s" alt="" width="72" height="57">
    <h1 class="h3 mb-2 fw-normal">Register</h1>

    <div class="form-floating mb-3">
      <input type="text" class="form-control bg-dark text-light @error('name') is-invalid @enderror" id="floatingInput" name="name">
      <label for="floatingInput">nama</label>
    </div>
    @error('name')
    <div class="invalid-feedback">
      {{$massage}}
    </div>
    @enderror
    <div class="form-floating mb-3">
      <input type="text" class="form-control bg-dark text-light" name="username" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">username</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control bg-dark text-light" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control bg-dark text-light" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <p>Sudah Punya akun? <a href="../login" class="text-decoration-none"> Login</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>


    
  </body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="/css/register/style.css">
</head>
<body>
  <div class="container">
    <img class="gambar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHMplHP5wWvFAZUusPdeSw_ppjTuEGtQ9Y0w&usqp=CAU" alt="">
    
    <form action="/register" method="POST">
      @csrf
        <img src="/images/logo.png" alt="" class="logo">
        <h2>Create an account</h2>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="Nama" name="name" placeholder="nama">
        </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="username">
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" id="email" name="email" placeholder="email">
    </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password">
      </div>
      <a class="lupa" href="#">Lupa Password?</a>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
