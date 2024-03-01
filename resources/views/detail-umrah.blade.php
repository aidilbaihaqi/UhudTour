<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Paket Umrah</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- My style -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
</head>
<body>

  <div class="container mb-5">
    <main>
      <div class="pt-5 text-center">
        <h4>Uhud Tour</h4>
        <hr>
        <h2>Checkout form</h2>
        <p class="lead">Mau umrah atau haji dengan agen yang terpecaya? Yuk, terbang bersama Uhud Tour yang siap menemani perjalanan ibadah anda ke tanah suci.</p>
        <p class="lead" style="margin-top: -15px;">Segera isi biodata dirimu dan pilih sesuai paket yang kamu inginkan</p>
      </div>

      @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Berhasil!</strong> {{ Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Paket Terpilih</span>
          </h4>
          <div class="col">
            <div class="card shadow-sm">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img class="bd-placeholder-img card-img-top" src="{{ asset('img/Makkah.jpeg') }}" width="100%" height="225" alt="">
              <div class="card-body">
                <p class="card-text">{{ $data->nama_paket }}</p>
                <p class="card-text"><i class="fa-solid fa-calendar-days"></i> {{ $data->keberangkatan }}</p>
                <p class="card-text text-danger">IDR {{ $data->harga }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-lg-8">
          <form action="{{ route('store-umrah', $data->id) }}" method="POST">
            @csrf 
          <h4 class="mb-3">Informasi Detail Paket</h4>
            <div class="row g-3">
              <div class="col-12">
                <label for="kode_paket" class="form-label">Kode Paket</label>
                <input type="text" class="form-control" name="kode_paket" id="kode_paket" value="{{ $data->kode_paket }}" disabled>
              </div>
              <div class="col-12">
                <label for="nama_paket" class="form-label">Nama Paket</label>
                <input type="text" class="form-control" name="nama_paket" id="nama_paket" value="{{ $data->nama_paket }}" disabled>
              </div>
              <div class="col-12">
                <label for="jenis_paket" class="form-label">Jenis Paket</label>
                <input type="text" class="form-control" name="jenis_paket" id="jenis_paket" value="{{ $data->jenis_paket }}" disabled>
              </div>
              <div class="col-12">
                <label for="hotel_mekkah" class="form-label">Hotel Mekkah</label>
                <input type="text" class="form-control" name="hotel_mekkah" id="hotel_mekkah" value="{{ $data->hotel_mekkah }}" disabled>
              </div>
              <div class="col-12">
                <label for="hotel_madinah" class="form-label">Hotel Madinah</label>
                <input type="text" class="form-control" name="hotel_madinah" id="hotel_madinah" value="{{ $data->hotel_madinah }}" disabled>
              </div>
              <div class="col-12">
                <label for="program_hari" class="form-label">Program Hari</label>
                <input type="number" class="form-control" name="program_hari" id="program_hari" value="{{ $data->program_hari }}" disabled>
              </div>
              <div class="col-12">
                <label for="bandara_keberangkatan" class="form-label">Bandara Keberangkatan</label>
                <input type="text" class="form-control" name="bandara_keberangkatan" id="bandara_keberangkatan" value="{{ $data->bandara_keberangkatan }}" disabled>
              </div>
              <div class="col-12">
                <label for="keberangkatan" class="form-label">Keberangkatan</label>
                <input type="date" class="form-control" name="keberangkatan" id="keberangkatan" value="{{ $data->keberangkatan }}" disabled>
              </div>
              <div class="col-12">
                <label for="kamar" class="form-label">Kamar</label>
                <input type="text" class="form-control" name="kamar" id="kamar" value="{{ $data->kamar }}" disabled>
              </div>
              <div class="col-12">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" value="{{ $data->harga }}" disabled>
              </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Biodata Diri</h4>

            <div class="row gy-3">
              <div class="col-12 d-none">
                <input type="number" class="form-control" name="umrah_id" id="umrah_id" value="{{ $data->id }}" required>
              </div>
              <div class="col-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama pemesan" required>
              </div>
              <div class="col-12">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" placeholder="Umur pemesan" required>
              </div>
              <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Pemesan" required></textarea>
              </div>
              <div class="col-12">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telp" id="telp" placeholder="(+62) 8xxxx" required>
              </div>
              <div class="col-md-6">
                <label for="jamaah" class="form-label">Jumlah Jamaah</label>
                <input type="number" class="form-control" name="jamaah" onkeyup="sum()" id="jamaah" placeholder="(format angka)" required>
              </div>
              <div class="col-md-6">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" name="total" onkeyup="sum()" id="total" required>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-25 btn btn-primary btn-md" type="submit">Checkout</button>
            <a href="{{ route('index-umrah') }}" class="w-25 btn btn-secondary btn-md">Kembali</a>
          </form>
        </div>
      </div>
    </main>
  </div>

  <script>
    function sum() {
      let jamaah = document.getElementById('jamaah').value;
      let harga = document.getElementById('harga').value;
      let result =  parseInt(jamaah) * parseInt(harga);
      if(!isNaN(result)) {
        document.getElementById('total').value = result;
      }
    }
  </script>
  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="{{ asset('js/form-validation.js') }}"></script>
</body>
</html>