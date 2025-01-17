<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

<nav class="navbar navbar-expand-lg bg-filter text-secondary">
  <div class="container-fluid text-secondary">
    <a class="navbar-brand text-white" href="#">KALIMANTAN WETLAND</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active pointer text-white" aria-current="page" id="btn-pop-up">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white pointer" aria-current="page" id="btn-pop-up2">Learn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white pointer" aria-current="page" href="#">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white pointer" aria-current="page" id="btn-pop-up3">About</a>
        </li>
    </div>
  </div>
</nav>
<div class="flex-container">
  <div><p class="tajuk">AYO EKSPLOR <br>BERSAMA <br>KAMI!</p></div>
  <div><p class="decs_1">Mencoba mengenali keindahan <br> alam di kalimantan wetland</p></div>
  <a class="play" href="/login">PLAY NOW!</a>
</div>

<!-- TEMPLATE ENGINE POP UP FEATURES -->
@extends('layout.pop-up')
<!-- =============================== -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>