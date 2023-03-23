<?php
session_start();
if ($_SESSION['role'] != "1") {
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Admin - SMKN 8 Bandar Lampung</title>
    <link rel="icon" href="../styling/img/favicon.ico" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-primary navbar-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img width="150px" src="../styling/img/logoe.png" alt="Logo" class="brand-image">
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="eskul.php" class="nav-link">Ekstrakurikuler</a>
                        </li>
                        <li class="nav-item">
                            <a href="jurusan.php" class="nav-link">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a href="informasi.php" class="nav-link">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="tentang.php" class="nav-link">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Galeri</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="galeri_jurusan.php" class="dropdown-item">Galeri Jurusan</a></li>
                                <li><a href="galeri_eskul.php" class="dropdown-item">Galeri Ekstrakurikuler</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="data_users.php" class="nav-link">Data Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tentang Sekolah</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="content">
                <div class="container">
                    <div class="col-md-auto">
                        <div class="card card-outline card-info">
                            <div class="card-body">
                                <div class="form-group col-3">
                                    <img src="../styling/img/firaun.jpeg" height="80px" class="d-block mb-2" alt="" srcset="">
                                    <input type="file" class="form-control">
                                </div>
                                <div class="row mx-auto">
                                    <div class="form-group col-3">
                                        <h2>Profile Video</h2>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9-tH1tFyNO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="row mx-auto"></div>
                                    <div class="row mx-auto">
                                        <div class="col-sm-12">
                                            <h3>NAMA SEKOLAH</h3>
                                            <input type="text" name="" id="">
                                        </div>
                                        <div class="col-sm-12">
                                            <h3>Nama Kepala Sekolah</h3>
                                            <input type="text" name="" id="">
                                        </div>
                                        <div class="col-sm-12">
                                            <h3>NIP</h3>
                                            <input type="text" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group ml-2 col-3">
                                    <h2>VISI</h2>
                                    <textarea name="keterangan" id="keterangan" cols="30" rows="-3"></textarea>
                                </div>
                                <div class="form-group ml-5 col-3">
                                    <h2>VISI</h2>
                                    <textarea name="keterangan" id="keterangan" cols="30" rows="-3"></textarea>
                                </div>
                                <div class="form-group ml-5 col-3">
                                    <h2>VISI</h2>
                                    <textarea name="keterangan" id="keterangan" cols="30" rows="-3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group ml-2 col-3">
                                    <h2>IDENTITAS</h2>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group ml-5 col-3">
                                    <h2>STRUKTUR</h2>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group ml-5 col-3">
                                    <h2>SARPRAS</h2>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
</body>

</html>