<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uhud Tour</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- My style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/e632a4a2d6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent my-3">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Uhud Tour</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index-umrah') }}">Paket Umrah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index-haji') }}">Paket Haji</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-login" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <div class="bg-hero"></div>
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text">
              <h5 class="fw-normal">Mau umrah atau haji dengan agen yang terpecaya?</h5>
              <h4 class="fw-semibold">Yuk, terbang bersama Uhud Tour yang siap menemani perjalanan ibadah anda ke tanah suci</h4>
              <h6 class="fw-normal">Segera isi biodata dirimu dan pilih sesuai paket yang kamu inginkan</h6>
              <a class="btn btn-umrah btn-primary mt-2 me-4" href="{{ route('index-umrah') }}">Umrah</a>
              <a class="btn btn-haji btn-primary mt-2" href="{{ route('index-haji') }}">Haji</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>