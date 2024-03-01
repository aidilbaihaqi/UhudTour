<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paket Umrah</title>
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
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <link rel="stylesheet" href="{{ asset('css/modals.css') }}">
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
              <a class="nav-link"  href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index-umrah') }}">Paket Umrah</a>
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

    <!-- Paket Umrah -->
    <section class="umrah">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-2">
            <div class="d-flex justify-content-around">
              <img src="./img/Itinerary Umroh Madinah.png" width="49%" alt="">
              <img src="./img/images.jpeg" width="49%" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mt-5">
            <h5>Daftar Paket Umrah</h5>
            <hr class="border border-secondary border-2 opacity-50">
          </div>
        </div>
        <div class="row">
          <div class="album py-5">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($data as $d)
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="./img/Makkah.jpeg" width="100%" height="225" alt="">
                    <div class="card-body">
                      <p class="card-text">{{ $d->nama_paket }}</p>
                      <p class="card-text"><i class="fa-solid fa-calendar-days"></i> {{ $d->keberangkatan }}</p>
                      <p class="card-text text-danger">IDR {{ $d->harga }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="{{ route('show-umrah', $d->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </div>
                        <small class="text-muted">Paket Umrah Terbaru</small>
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                    
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>