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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="card card-outline card-secondary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3>1</h3>

                                                <p>Ekstrakurikuler</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <a href="eskul.php" class="small-box-footer">
                                                Lihat Data Ekstrakurikuler <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3><?php # echo $id_fasilitas_kamar;
                                                    ?> 5</h3>

                                                <p>jurusan</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-list-alt"></i>
                                            </div>
                                            <a href="jurusan.php" class="small-box-footer">
                                                Lihat Data Jurusan <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3>6 <?php # echo $id_fasilitas;
                                                        ?></h3>

                                                <p>Informasi</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <a href="informasi.php" class="small-box-footer">
                                                Lihat Data Informasi <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3><?php #echo $row['jmlh_kamar'];
                                                    ?></h3>
                                                <p>Tentang</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <a href="tentang.php" class="small-box-footer">
                                                Lihat Data Tentang <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3><?php #echo $row['jmlh_kamar'];
                                                    ?></h3>
                                                <p>Jumlah Kamar Hotel</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <a href="kamar.php" class="small-box-footer">
                                                Lihat Data Kamar <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3><?php # echo  $row['stok_sum'];
                                                    ?></h3>
                                                <p>Kamar Tersedia</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-duotone fa-home"></i>
                                            </div>
                                            <a href="kamar.php" class="small-box-footer">
                                                Lihat Data Kamar <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3><?php # echo  $row['jmlh_kamar'] - $row['stok_sum'];
                                                    ?></h3>

                                                <p>Kamar Disewa</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <a href="kamar.php" class="small-box-footer">
                                                Lihat Data Kamar <i class="fas fa-arrow-circle-right"></i>
                                            </a>
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
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
</body>

</html>