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
    <title>Events SMKN 8 Bandar Lampung</title>
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        footer {
            background-image: url(styling/img/footer.jpg);
            background-size: cover;
            filter: grayscale("100%");

        }

        .body {
            min-height: 100vh;
            width: 100%;
            font-size: 16px;
            /* background: #eee; */
            color: #777;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .item-container {
            position: relative;
            margin: 24px;
            width: 320px;
            height: 570px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.15);
            cursor: pointer;
        }

        .img-container,
        .body-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .img-container img {
            width: 100%;
        }

        .body-container {
            position: relative;
        }

        .overlay {
            position: relative;
            width: 100%;
            height: 400px;
            background-color: rgba(24, 83, 122, 0.6);
            opacity: 0;
            transition: height linear 0.4s, opacity linear 0.2s;
        }

        .item-container:hover .overlay {
            opacity: 1;
            height: 200px;
        }

        .event-info {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 8px;
        }

        .title,
        .price {
            color: #18537a;
            font-size: 1.5em;
            font-weight: bold;
            letter-spacing: 1px;
            margin: 12px;
        }

        .info {
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }

        .separator {
            width: 20%;
            height: 6px;
            background-color: #17537a;
            margin-bottom: 16px;
        }

        .additional-info {
            border-top: 1px solid #bbb;
            margin-top: 12px;
            padding: 28px;
            padding-bottom: 0;
        }

        .additional-info .info {
            font-size: 0.9em;
            margin-bottom: 20px;
            text-align: center;
        }

        .info i {
            color: #18537a;
            font-size: 1.1em;
            margin-right: 4px;
        }

        .info span {
            color: #18537a;
            font-weight: bolder;
        }

        .action {
            color: #fff;
            border: 3px solid #fff;
            background-color: transparent;
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            outline: none;
            cursor: pointer;
            padding: 12px;
            text-transform: uppercase;
            font-size: 1.3em;
            font-weight: bold;
            letter-spacing: 2px;
            transition: background-color 0.4s, top 0.4s;
        }

        .item-container:hover .action {
            top: 50px;
        }

        .action:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="">
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
        <br>
        <br>
        <br>
        <br>
        <div class="body container">

            <?php
            include("koneksi.php");
            $jumlahDataPerhalaman = 4;
            $db = mysqli_query($koneksi, "SELECT * FROM informasi WHERE jenis_informasi = 'P' ORDER BY id_informasi DESC");
            $jumlahData = mysqli_num_rows($db);
            $jumlahhalaman = ceil($jumlahData / $jumlahDataPerhalaman);
            $halamanaktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
            $awalData = ($jumlahDataPerhalaman * $halamanaktif) - $jumlahDataPerhalaman;
            $hasil = mysqli_query($koneksi, "SELECT * FROM informasi WHERE jenis_informasi = 'P' ORDER BY id_informasi DESC LIMIT $awalData, $jumlahDataPerhalaman");

            $row = mysqli_fetch_all($hasil, MYSQLI_ASSOC);
            foreach ($row as $data) :
            ?>
                <div class="item-container">
                    <div class="img-container">
                        <img src="admin/gambar/<?= $data['thumbnail'] ?>" height="400px" alt="Event image">
                    </div>

                    <div class="body-container">
                        <div class="overlay"></div>

                        <div class="event-info">
                            <p class="title"><?= $data['judul'] ?></p>
                            <div class="separator"></div>

                            <div class="additional-info">

                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    <?php setlocale(LC_TIME, 'id_ID', 'Indonesian_Indonesia.1252');
                                    echo strftime('%A, %e %B %Y', strtotime($data['tanggal']));
                                    ?>
                                </p>

                                <p class="info description">

                                    <a href="detailberita.php?id_informasi=<?= $data['id_informasi']; ?>"><span>Baca Berita</span></a>
                                </p>
                            </div>
                        </div>
                        <button class="action"><a href="detailberita.php?id_informasi=<?= $data['id_informasi']; ?>">Baca Selengkapnya </a></button>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php if ($halamanaktif > 1) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanaktif - 1 ?>">Previous</a>
                    </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
                    <?php if ($i == $halamanaktif) : ?>
                        <li class="page-item active"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a></li>
                    <?php else : ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php if ($halamanaktif < $jumlahhalaman) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanaktif + 1 ?>">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <br>
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
                            <a href="berita.php" class="text-reset">Berita</a>
                        </p>
                        <p>
                            <a href="kegiatan.php" class="text-reset">Kegiatan</a>
                        </p>
                        <p>
                            <a href="pengumuman.php" class="text-reset">Pengumuman </a>
                        </p>
                        <p>
                            <a href="login.php" class="text-reset">Login</a>
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
                        <p><i class="fas fa-phone md-3 text-light"></i> (0721) 8019298</p>
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
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>