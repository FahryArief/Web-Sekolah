<?php
session_start();
if ($_SESSION['role'] != "1") {
    header("location:../login.php");
}
include("koneksi.php");
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
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
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
                        <?php
                        $db = "SELECT * FROM tentang";
                        $hasil = mysqli_query($koneksi, $db);
                        $no = 1;
                        $querys = mysqli_query($koneksi, "select * from tentang");
                        $rows = mysqli_fetch_array($querys);
                        $data = mysqli_fetch_assoc($hasil);
                        ?>
                        <form action="proses.php" enctype="multipart/form-data" method="post">
                            <div class="card card-outline card-info">
                                <div class="card-body">
                                    <div class="form-group col-3">
                                        <img src="gambar/<?php echo $data['foto_sambutan']; ?>" height="200px" class="d-block mb-2" alt="" srcset="">
                                        <input type="file" name="foto_sambutan" class="form-control">
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="form-group col-3">
                                            <h2>Profile Video</h2>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="560" height="315" src="<?= $data['link_profile']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                            <br>
                                            <input type="text" placeholder="<?= $data['link_profile']; ?>" value="<?= $data['link_profile']; ?>" name="link_profile" class="form-control">
                                        </div>
                                        <div class="row mx-auto"></div>
                                        <div class="row mx-auto">
                                            <div class="form-group col-sm-12">
                                                <h3>Nama Sekolah</h3>
                                                <input type="text" name="nama" value="<?= $data['nm_sekolah']; ?>" id="">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <h3>Nama Kepala Sekolah</h3>
                                                <input type="text" value="<?= $data['nm_kepsek']; ?>" name="kepsek" id="">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <h3>Sambutan</h3>
                                                <textarea name="sambutan" id="sambutan" placeholder="<?= $data['sambutan']; ?>" cols="30" rows="-3"><?= $data['sambutan']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group ml-2 col-3">
                                        <h2>VISI</h2>
                                        <textarea name="visi" id="visi" cols="30" rows="-3"><?= $data['visi']; ?></textarea>
                                    </div>
                                    <div class="form-group ml-5 col-3">
                                        <h2>MISI</h2>
                                        <textarea name="misi" id="misi" cols="30" rows="-3"><?= $data['misi']; ?></textarea>
                                    </div>
                                    <div class="form-group ml-5 col-3">
                                        <h2>Tujuan</h2>
                                        <textarea name="tujuan" id="tujuan" cols="30" rows="-3"><?= $data['tujuan']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group ml-2 col-3">
                                        <h2>SEJARAH</h2>
                                        <textarea name="sejarah" id="sejarah" cols="30" rows="-3"><?= $data['sejarah']; ?></textarea>
                                    </div>
                                    <div class="form-group ml-5 col-3">
                                        <h2>IDENTITAS</h2>
                                        <textarea name="identitas" id="identitas" cols="30" rows="-3"><?= $data['identitas']; ?></textarea>
                                    </div>
                                    <div class="form-group ml-5 col-3">
                                        <h2>STRUKTUR</h2>
                                        <textarea name="struktur" id="struktur" cols="30" rows="10"><?= $data['struktur'] ?></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="tentang" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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
    <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Summernote
            $('#sambutan').summernote({
                height: 200,
                width: 500,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['fullscreen']],
                ]
            });
            $('#visi').summernote({
                height: 200,
                width: 300,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['fullscreen']],
                ]
            });
            $('#misi').summernote({
                height: 200,
                width: 300,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['fullscreen']],
                ]
            });
            $('#tujuan').summernote({
                height: 200,
                width: 300,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['fullscreen']],
                ]
            });
            $('#sejarah').summernote({
                height: 200,
                width: 300,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['fullscreen']],
                ]
            });
            $('#identitas').summernote({
                height: 200,
                width: 300,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen']],
                ]
            });

            $("#struktur").summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i = 0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    }
                },
                height: 200,
                width: 300,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen']],
                ]
            });
            // $('.dropdown-toggle').dropdown();
            $.upload = function(file) {
                let out = new FormData();
                out.append('file', file, file.name);

                $.ajax({
                    method: 'POST',
                    url: 'upload.php',
                    contentType: false,
                    cache: false,
                    processData: false,
                    data: out,
                    success: function(img) {
                        $('#summernote').summernote('insertImage', img);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            };
        })
    </script>
</body>

</html>