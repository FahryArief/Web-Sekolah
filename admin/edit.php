<?php
session_start();
if ($_SESSION['role'] != "1") {
    header("location:../index.php");
}
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_informasi = ($_GET['id']);
    $query = "SELECT * FROM informasi WHERE id_informasi='$id_informasi'";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Admin - SMKN 8 Bandar Lampung</title>
    <link rel="icon" href="../styling/img/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        .cancela,
        .cancela:link,
        .cancela:visited,
        .cancela:hover,
        .cancela:focus,
        .cancela:active {
            color: inherit;
            text-decoration: none;
        }
    </style>
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
                    <!-- SEARCH FORM -->
                </div>
                <!-- Right navbar links -->
            </div>
        </nav>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3>Edit Data Informasi</h3>
                            </div>
                            <form method="post" action="proses.php" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul Informasi</label>
                                        <input type="hidden" name="id_informasi" value="<?= $data['id_informasi']; ?>">
                                        <input id="judul" type="text" name="judul" value="<?= $data['judul']; ?>" class="form-control" placeholder="Judul Informasi">
                                    </div>
                                    <div class="form-group summernote-form-group">
                                        <label for="isi">Konten</label>
                                        <br>
                                        <textarea name="isi" id="summernotes"><?= $data['isi'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>">
                                    </div>
                                    <label>Jenis Informasi</label>
                                    <select name="jenis_informasi" class="form-control" id="">
                                        <option disabled selected value="<?= $data['jenis_informasi']; ?>">
                                            <?php
                                            if ($data['jenis_informasi'] == 'B') {
                                                echo "Berita";
                                            } elseif ($data['jenis_informasi'] == 'P') {
                                                echo "Pengumuman";
                                            } else {
                                                echo "Kegiatan";
                                            } ?></option>
                                        <option value="B">Berita</option>
                                        <option value="P">Pengumuman</option>
                                        <option value="K">Kegiatan</option>
                                    </select>
                                    <div class="form-group">
                                        <label>Foto Informasi</label>
                                        <img class="d-block" src="gambar/<?php echo $data['thumbnail']; ?>" height="200">
                                        <input type="file" name="thumbnail_informasi" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-primary"><a class="cancela" href="informasi.php">Close</a></button>
                                    <button type="submit" name="updateinf" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote -->
    <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="../assets/dist/js/adminlte.min.js"></script>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Page specific script -->

    <script>
        $(document).ready(function() {
            $("#summernote").summernote({

                callbacks: {
                    onImageUpload: function(files) {
                        for (let i = 0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    }
                },
                height: 200
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
            $("#summernotes").summernote({

                callbacks: {
                    onImageUpload: function(files) {
                        for (let i = 0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    }
                },
                height: 200
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
                        $('#summernotes').summernote('insertImage', img);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            };
        });
        $(function() {

            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>