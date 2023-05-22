<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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

<body>
    <div class="wrapper">
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
    </div>

    <div class="events">
        <div class="container">
            <div class="row events_row">
                <!-- Berita -->
                <div class="col-lg-4 event_col mt-5">
                    <div class="event event_left">
                        <div class="event_image"><img src="styling/img/bg-2.jpg" alt=""></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200">21</div>
                                    <div class="event_month trans_200">Aug</div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="#">Peringatan Hari Kemerdekaan</a></div>
                                <div class="event_info_container">
                                    <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
                                    <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
                                    <div class="event_text">
                                        <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 event_col mt-5">
                    <div class="event event_mid">
                        <div class="event_image"><img src="styling/img/bg-2.jpg" alt=""></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200">27</div>
                                    <div class="event_month trans_200">Aug</div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="#">Peringatan Hari Guru Nasional</a></div>
                                <div class="event_info_container">
                                    <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                    <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 Brooklyn City</span></div>
                                    <div class="event_text">
                                        <p>This Consumer Action News issue covers topics now being debated before...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 event_col mt-5">
                    <div class="event event_mid">
                        <div class="event_image mx-2">
                            <p style="text-align:justify; float:left;"><img src="styling/img/siti_cantik.jpg" height="" width="150px" />
                            <div class=" event_title" style="text-align: center;"> <a href="#">Peringatan Hari Guru Nasional</a></div>
                            </p>
                        </div>
                    </div>
                    <div class="event event_mid">
                        <div class="event_image mx-2">
                            <p style="text-align:justify; float:left;"><img src="styling/img/siti_cantik.jpg" height="" width="150px" />
                            <div class=" event_title" style="text-align: center;"> <a href="#">Peringatan Hari Guru Nasional</a></div>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row events_row">
                    <!-- Berita -->
                    <div class="col-lg-4 event_col">
                        <div class="event event_left">
                            <div class="event_image"><img src="styling/img/bg-2.jpg" alt=""></div>
                            <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                <div class="event_date">
                                    <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                        <div class="event_day trans_200">21</div>
                                        <div class="event_month trans_200">Aug</div>
                                    </div>
                                </div>
                                <div class="event_content">
                                    <div class="event_title"><a href="#">Peringatan Hari Kemerdekaan</a></div>
                                    <div class="event_info_container">
                                        <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
                                        <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
                                        <div class="event_text">
                                            <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 event_col">
                        <div class="event event_mid">
                            <div class="event_image"><img src="styling/img/bg-2.jpg" alt=""></div>
                            <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                <div class="event_date">
                                    <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                        <div class="event_day trans_200">27</div>
                                        <div class="event_month trans_200">Aug</div>
                                    </div>
                                </div>
                                <div class="event_content">
                                    <div class="event_title"><a href="#">Peringatan Hari Guru Nasional</a></div>
                                    <div class="event_info_container">
                                        <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                        <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 Brooklyn City</span></div>
                                        <div class="event_text">
                                            <p>This Consumer Action News issue covers topics now being debated before...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 event_col">
                        <div class="event event_mid">
                            <div class="event_image mx-2">
                                <p style="text-align:justify; float:left;"><img src="styling/img/siti_cantik.jpg" height="" width="150px" />
                                <div class=" event_title" style="text-align: center;"> <a href="#">Peringatan Hari Guru Nasional</a></div>
                                </p>
                            </div>
                        </div>

                        <div class="event event_mid">
                            <div class="event_image mx-2">
                                <p style="text-align:justify; float:left;"><img src="styling/img/siti_cantik.jpg" height="" width="150px" />
                                <div class=" event_title" style="text-align: center;"> <a href="#">Peringatan Hari Guru Nasional</a></div>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="styling/style.js"></script>
</body>

</html>