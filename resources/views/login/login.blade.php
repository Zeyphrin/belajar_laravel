@extends('layout.main')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>


@elseif (session()->has('loginError'))
<div class="alert alert-danger col-lg-12" role="alert">
  {{ session('loginError') }}
</div>

@endif


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    
<main class="form-signin w-100 m-auto">
  <form action="/login" method="POST">
    @csrf
    <img class="mb-4" src="img/Neon Genesis GIF - Neon Genesis Evangelion - GIF を見つけて共有する.gif" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    <p class="mt-5 mb-3 text-body-secondary">Didnt have account? <a href="/register">Register here!</a></p>
  </form>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
@endsection