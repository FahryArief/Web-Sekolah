<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 8 Bandar Lampung</title>

    <link rel="icon" href="styling/img/favicon.ico" type="image/x-icon" />
    <!------------ GOOGLE FONTS ------------>
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet">
    <!------------ FONT AWESOME ------------>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- <link rel="stylesheet" href="styling/style.css"> -->
</head>
<style>
    .ccenter {
        text-align: center;
    }

    footer {
        background-image: url(styling/img/footer.jpg);
        background-size: cover;
        filter: grayscale("100%");
    }

    .carousel-inner {
        padding: 1em;
    }

    .card {
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        border: none;
    }

    .carousel-control-prev,
    .carousel-control-next {
        background-color: #e1e1e1;
        width: 6vh;
        height: 6vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    @media (min-width: 375px) {
        .carousel-item {
            margin-right: 0;
            flex: 0 0 33.333333%;
            display: block;
        }

        .carousel-inner {
            display: flex;
        }
    }

    .card .img-wrapper {
        max-width: 100%;
        height: 13em;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card img {
        max-height: 100%;
    }

    @media (max-width: 374px) {
        .card .img-wrapper {
            height: 17em;
        }
    }
</style>

<body class="">
    <?php
    include("koneksi.php");
    if (isset($_GET['id'])) {
        $id = ($_GET['id']);
        $query = "SELECT * FROM eskul WHERE id_eskul='$id'";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
        }
        $data = mysqli_fetch_assoc($result);
        if ($data == NULL) {
            echo "<script>alert('Data Tidak Di Temukan Di Database');window.location='informasi.php';</script>";
        }
    } else {
        echo "<script>alert('Masukan Data');window.location='informasi.php';</script>";
    }

    ?>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <img src="styling/img/logoe.png" alt="Logo" height="50px" class="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                                <li><a class="dropdown-item" href="pengumuman.php">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="kegiatan.php">Kegiatan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /end-navbar -->

        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->

        <!-- /.container-fluid -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col mt-5 ccenter">
                        <img src="admin/gambar/<?= $data['logo_eskul'] ?>" style="height: 200px;" srcset="">

                    </div>
                    <div class="col-md-12 ccenter">
                        <!-- Default box -->
                        <h1><?= $data['nama_eskul'] ?></h1>
                        <hr style="width: 50%; margin:auto;">
                        <p class="font-grey" style="margin-top: 5px; padding: 20px 10%;"><?= $data['keterangan'] ?></p>
                        <!-- /.card -->
                        <h1 style="margin-top: 25px;">VISI </h1>
                        <hr style="width: 15%; margin:auto; color:darkred; height:4px;">
                        <p class="font-grey ccenter" style="margin-top: 15px; padding: 20px 10%;"><?= $data['visi'] ?></p>
                        <!-- Start Informasi -->
                        <div class="news">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="section_title_container text-center">
                                            <h2 class="section_title">MISI</h2>
                                            <div class="section_subtitle font-grey">
                                                <p><?= $data['misi'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Informasi -->
                        <!-- Start Kegiatan -->
                        <div class="events">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="section_title_container text-center">
                                            <h2 class="section_title">PRESTASI EKSTRAKURIKULER</h2>
                                            <div class="section_subtitle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9 mx-auto pt-10" style="width: 1000px;">
                                        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                                            <div class="carousel-inner">

                                                <?php
                                                include("koneksi.php");
                                                $db = "SELECT * FROM galeri_eskul WHERE id_eskul = '$id'";
                                                $hasil = mysqli_query($koneksi, $db);
                                                $no = 1;
                                                while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>

                                                    <div class="carousel-item active">
                                                        <div class="card">
                                                            <div class="img-wrapper"><img src="admin/gambar/<?= $data['foto_galeri'] ?>" class="d-block w-100" alt="styling/img/a.jpg"> </div>
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?= $data['keterangan'] ?></h5>
                                                                <!-- <a href="detaileskul.php?id=<?= $data['id_eskul']; ?>" class="btn btn-primary">Selengkapnya</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php $no++;
                                                }  ?>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Kegiatan -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-light"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-twitter"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-google"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-instagram"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-linkedin"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-github"></i>
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
                    <div class="col-md-3 mx-auto mb-2">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            <i class="md-3 text-secondary"></i>SMK NEGERI 8 Bandar Lampung
                        </h6>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=smkn%208%20bandar%20lampung&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 250px;
                                        width: 250px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 250px;
                                        width: 250px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-1 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Links
                        </h6>
                        <p>
                            <a href="index.php" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="jurusan.php" class="text-reset">Jurusan</a>
                        </p>
                        <p>
                            <a href="ekskul.php" class="text-reset">Ekstrakurikuler</a>
                        </p>
                        <p>
                            <a href="tentang.php" class="text-reset">Tentang</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-2 mx-auto mb-4">
                        <img class="img" src="styling/img/logo.png" height="200px">
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 mx-auto mb-4">
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
                    <div class="col-md-3 mx-auto  mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">Contact</h6>
                        <p><i class="fas fa-home md-3 text-light"></i> Jl.Imam Bonjol No.52, Kemiling Raya Bandar Lampung</p>
                        <p>
                            <i class="fas fa-envelope md-3 text-light"></i>
                            smkn8bdl@yahoo.com
                        </p>
                        <p><i class="fas fa-phone md-3 text-light"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print md-3 text-light"></i> + 01 234 567 89</p>
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
    </div>
    <!-- ./wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="styling/style.js"></script>
    <!-- jQuery -->
</body>

</html>