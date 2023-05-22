<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

<link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center bg-dark text-light">
    
<main class="form-signin w-100 m-auto bg-dark text-light">
  <form action="/login" method="POST">
    @csrf 
    <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvNOQRBGkU93glu_-uQezyC-Bg2CC16JL2YCn8LRdpig&s" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control bg-dark text-light" name="username" placeholder="name@example.com" autofocus required>
      <label for="username">username </label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control bg-dark text-light" id="password" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p>Belum Punya akun? <a href="register" class="text-decoration-none"> Daftar</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>


    
  </body>
</html>
