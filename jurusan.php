<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 8 Bandar Lampung</title>

    <!------------ GOOGLE FONTS ------------>
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet">

    <!------------ FONT AWESOME ------------>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"><!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="styling/style.css">
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <img src="assets/dist/img/logo.png" alt="AdminLTE Logo" height="50" class="d-block w-13">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->

                    <ul class="navbar-nav ml-0 ml-md-3">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="tentang.php" class="nav-link">Tentang Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="jurusan.php" class="nav-link">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a href="eskul.php" class="nav-link">Ekstrakurikuler</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Informasi</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="pengumuman.php" class="dropdown-item">Pengumuman</a></li>
                                <li><a href="berita.php" class="dropdown-item">Berita</a></li>
                                <li><a href="kegiatan.php" class="dropdown-item">Kegiatan</a></li>
                            </ul>
                        </li>
                    </ul>


                </div>

                <!-- Right navbar links -->

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <div class="slider">
                    <input type="radio" name="slide" id="slide-1" checked>
                    <input type="radio" name="slide" id="slide-2">
                    <input type="radio" name="slide" id="slide-3">

                    <div class="slides">
                        <div class="slide slide-1">
                            <div class="slide-data">
                                <h1>THIS IS SLIDE # 1</h1>
                                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nemo assumenda perferendis
                                    reprehenderit ex nostrum accusantium sed iste eius distinctio mollitia consectetur, nihil quis
                                    ea cupiditate ullam itaque reiciendis ratione.</P>

                            </div>
                        </div>
                        <div class="slide slide-2">
                            <div class="slide-data">
                                <h1>THIS IS SLIDE # 2</h1>
                                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nemo assumenda perferendis
                                    reprehenderit ex nostrum accusantium sed iste eius distinctio mollitia consectetur, nihil quis
                                    ea cupiditate ullam itaque reiciendis ratione.</P>

                            </div>
                        </div>
                        <div class="slide slide-3">
                            <div class="slide-data">
                                <h1>THIS IS SLIDE # 3</h1>
                                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nemo assumenda perferendis
                                    reprehenderit ex nostrum accusantium sed iste eius distinctio mollitia consectetur, nihil quis
                                    ea cupiditate ullam itaque reiciendis ratione.</P>
                            </div>
                        </div>
                    </div>

                    <div class="arrows arrow-left">
                        <label for="slide-3">
                            <span><i class="fas fa-angle-left"></i></span>
                        </label>
                        <label for="slide-1">
                            <span><i class="fas fa-angle-left"></i></span>
                        </label>
                        <label for="slide-2">
                            <span><i class="fas fa-angle-left"></i></span>
                        </label>
                    </div>

                    <div class="arrows arrow-right">
                        <label for="slide-2">
                            <span><i class="fas fa-angle-right"></i></span>
                        </label>
                        <label for="slide-3">
                            <span><i class="fas fa-angle-right"></i></span>
                        </label>
                        <label for="slide-1">
                            <span><i class="fas fa-angle-right"></i></span>
                        </label>
                    </div>

                </div>



        </div>
        <!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white " style="background: url('styling/footer.jpg') center no-repeat; background-size:cover; filter:grayscale('100%'); ">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-light">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-light">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-light">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-light">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-light">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-light">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-3">
                            <i class="me-3 text-secondary"></i>SMK NEGERI 8 Bandar Lampung
                        </h6>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="300" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=smkn%208%20bandar%20lampung&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 250px;
                                        width: 300px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 250px;
                                        width: 300px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col mb-4">
                        <img class="d-block" src="styling/logo.png" height="200">
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> Jl.Imam Bonjol No.52, Kemiling Raya Bandar Lampung</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            smkn8bdl@yahoo.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://panfateam.com/">PANFA Team</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- End Footer -->
    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js"></script>
</body>

</html>