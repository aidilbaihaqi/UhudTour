<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paket Haji | Uhud Tour</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- More Fontawesome Icon --}}
    <script src="https://kit.fontawesome.com/e632a4a2d6.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"
        media="screen">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('./partials/_sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('./partials/_topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow d-sm-flex p-3 justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Paket Haji</h1>
                    </div>

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ Session::get('success') }}
                        </div>
                    @endif

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 style="color: #108DE9;" class="m-0 font-weight-bold">Tambah Paket Haji</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('haji.store') }}" method="POST" style="width: 70%;">
                                        @csrf 
                                        
                                        <div class="form-group">
                                            <label for="kode_paket" class="text-gray-900">Kode Paket</label>
                                            <input type="text" name="kode_paket" id="kode_paket" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_paket" class="text-gray-900">Nama Paket</label>
                                            <input type="text" name="nama_paket" id="nama_paket" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_paket" class="text-gray-900">Jenis Paket</label>
                                            <input type="text" name="jenis_paket" id="jenis_paket" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="hotel_mekkah" class="text-gray-900">Hotel Mekkah</label>
                                            <input type="text" name="hotel_mekkah" id="hotel_mekkah" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="hotel_madinah" class="text-gray-900">Hotel Madinah</label>
                                            <input type="text" name="hotel_madinah" id="hotel_madinah" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="arafah" class="text-gray-900">Arafah</label>
                                            <input type="text" name="arafah" id="arafah" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="aziziyah" class="text-gray-900">Aziziyah</label>
                                            <input type="text" name="aziziyah" id="aziziyah" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mabit" class="text-gray-900">Mabit</label>
                                            <input type="text" name="mabit" id="mabit" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="program_hari" class="text-gray-900">Program Hari</label>
                                            <input type="number" name="program_hari" id="program_hari" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bandara_keberangkatan" class="text-gray-900">Bandara Keberangkatan</label>
                                            <input type="text" name="bandara_keberangkatan" id="bandara_keberangkatan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="keberangkatan" class="text-gray-900">Keberangkatan</label>
                                            <input type="date" name="keberangkatan" id="keberangkatan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_keberangkatan" class="text-gray-900">Tahun Keberangkatan</label>
                                            <input type="text" name="tahun_keberangkatan" id="tahun_keberangkatan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kamar" class="text-gray-900">Kamar</label>
                                            <input type="text" name="kamar" id="kamar" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga" class="text-gray-900">Harga</label>
                                            <input type="number" name="harga" id="harga" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-success">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('./partials/_footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>