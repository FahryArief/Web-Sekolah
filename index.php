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

    <link rel="stylesheet" href="styling/style.css">
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
            </section>
        </div>
        <!-- /.container-fluid -->
        <?php
        include 'koneksi.php';
        $db = "SELECT * FROM tentang";
        $hasilt = mysqli_query($koneksi, $db);
        $tentang = mysqli_fetch_assoc($hasilt);
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-12 ccenter">
                        <!-- Default box -->
                        <h1>Welcome To <?= $tentang['nm_sekolah'] ?></h1>
                        <hr style="width: 50%; margin:auto;">
                        <h1 style="margin-top: 25px;">Sambutan Kepala Sekolah </h1>
                        <hr style="width: 15%; margin:auto; color:darkred; height:4px;">
                        <a href="">
                            <img src="admin/gambar/<?= $tentang['foto_sambutan'] ?>" style="margin-top:20px; height: 200px;" srcset="">
                        </a>
                        <p class="font-grey ccenter" style="margin-top: 15px; padding: 20px 10%;"><?= $tentang['sambutan'] ?></p>
                        <!-- Start Informasi -->
                        <div class="news">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="section_title_container text-center">
                                            <h2 class="section_title">Informasi Terkini</h2>
                                            <div class="section_subtitle font-grey">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row news_row">
                                    <div class="col-md-7 news_col">
                                        <?php
                                        include 'koneksi.php';
                                        $db = "SELECT * FROM informasi WHERE jenis_informasi = 'B' ORDER BY id_informasi DESC ";
                                        $hasil = mysqli_query($koneksi, $db);
                                        $queryss = mysqli_query($koneksi, "SELECT
    CASE DAYOFWEEK(tanggal)
        WHEN 1 THEN 'Minggu'
        WHEN 2 THEN 'Senin'
        WHEN 3 THEN 'Selasa'
        WHEN 4 THEN 'Rabu'
        WHEN 5 THEN 'Kamis'
        WHEN 6 THEN 'Jumat'
        WHEN 7 THEN 'Sabtu'
    END AS hari
FROM informasi");
                                        $results = mysqli_fetch_assoc($queryss);
                                        $day = $results['hari'];
                                        $data = mysqli_fetch_assoc($hasil); ?>
                                        <!-- News Post Large -->
                                        <div class="news_post_large_container">
                                            <div class="news_post_large">
                                                <div class="news_post_image"><img src="admin/gambar/<?= $data['thumbnail']; ?>" height="350px" alt=""></div>
                                                <div class="news_post_large_title"><a href="detailberita.php?id_informasi=<?= $data['id_informasi']; ?>"><?= $data['judul']; ?></a></div>
                                                <div class="news_post_meta">
                                                    <ul>
                                                        <li>
                                                            <p>
                                                                <?= $day;   ?>
                                                                <span>
                                                                    <?php setlocale(LC_TIME, 'id_ID', 'Indonesian_Indonesia.1252');
                                                                    echo strftime('| %e %B  %Y', strtotime($data['tanggal']));
                                                                    ?>
                                                                </span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="news_post_text">
                                                    <?php
                                                    $html = $data['isi'];
                                                    $p = str_replace('src="gambar/', 'src="admin/gambar/', $html);
                                                    ?>
                                                    <p><?= substr($p, 0, 800); ?></p>
                                                </div>
                                                <div class="news_post_link"><a href="detailberita.php?id_informasi=<?= $data['id_informasi']; ?>">read more</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 news_col">
                                        <?php
                                        include 'koneksi.php';
                                        $db = "SELECT * FROM informasi WHERE jenis_informasi = 'B' ORDER BY id_informasi DESC LIMIT 5";
                                        $hasil = mysqli_query($koneksi, $db);
                                        while ($data = mysqli_fetch_assoc($hasil)) {
                                        ?>
                                            <!-- News Posts Small -->
                                            <div class="news_post_small">
                                                <div class="news_post_small_title"><a href="detailberita.php?id_informasi=<?= $data['id_informasi']; ?>"><?= $data['judul'] ?></a></div>
                                                <div class="news_post_meta">
                                                    <ul>
                                                        <li><a href="#">Admin</a></li>
                                                        <li><a href="#"><?= $data['tanggal'] ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php
                                        } ?>
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
                                            <h2 class="section_title">Kegiatan</h2>
                                            <div class="section_subtitle">
                                                <p class="font-grey" style="padding: 
                                                20px 10%;">Ini </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row events_row">
                                    <!-- Event -->
                                    <?php
                                    include 'koneksi.php';
                                    $db = "SELECT * FROM informasi WHERE jenis_informasi = 'K' ORDER BY id_informasi DESC LIMIT 3 ";
                                    $hasil = mysqli_query($koneksi, $db);
                                    $queryss = mysqli_query($koneksi, "SELECT
    CASE DAYOFWEEK(tanggal)
        WHEN 1 THEN 'Minggu'
        WHEN 2 THEN 'Senin'
        WHEN 3 THEN 'Selasa'
        WHEN 4 THEN 'Rabu'
        WHEN 5 THEN 'Kamis'
        WHEN 6 THEN 'Jumat'
        WHEN 7 THEN 'Sabtu'
    END AS hari
FROM informasi");
                                    $results = mysqli_fetch_assoc($queryss);
                                    $day = $results['hari'];
                                    while ($dataa = mysqli_fetch_assoc($hasil)) {
                                    ?>
                                        <div class="col-lg-4 event_col">
                                            <div class="event event_left">
                                                <div class="event_image"><img src="admin/gambar/<?= $dataa['thumbnail'] ?>" height="350px" alt=""></div>
                                                <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                                    <div class="event_date">
                                                        <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                                            <div class="event_day trans_200"><?php setlocale(LC_TIME, 'id_ID', 'Indonesian_Indonesia.1252');
                                                                                                echo strftime('%e', strtotime($dataa['tanggal']));
                                                                                                ?></div>
                                                            <div class="event_month trans_200"><?php setlocale(LC_TIME, 'id_ID', 'Indonesian_Indonesia.1252');
                                                                                                echo strftime(' %B', strtotime($dataa['tanggal']));
                                                                                                ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="event_content">
                                                        <div class="event_title"><a href="detailberita.php?id_informasi=<?= $dataa['id_informasi']; ?>"><?= $dataa['judul'] ?></a></div>
                                                        <div class="event_info_container">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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
    </div>
    <!-- ./wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- jQuery -->
</body>

</html>