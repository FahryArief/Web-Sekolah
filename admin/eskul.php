<?php
session_start();
if ($_SESSION['role'] != "1") {
    header("location:../login.php");
}
include 'koneksi.php';
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
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
        <!-- /.navbar -->

        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ekstrakurikuler</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="card card-outline card-dark">
                        <div class="card-header">
                            <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#Tambah">Tambah</button>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Ekstrakurikuler</th>
                                        <th>Keterangan</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Gambar</th>
                                        <th>Logo Ekstrakurikuler</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = "SELECT * FROM eskul ORDER BY id_eskul ASC";
                                    $hasil = mysqli_query($koneksi, $db);
                                    $no = 1;
                                    $querys = mysqli_query($koneksi, "select * from eskul");
                                    $rows = mysqli_fetch_array($querys);
                                    while ($data = mysqli_fetch_assoc($hasil)) {

                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['nama_eskul'] ?></td>
                                            <td><?= $data['keterangan'] ?></td>
                                            <td><?= $data['visi'] ?></td>
                                            <td><?= $data['misi'] ?></td>
                                            <td><img class="d-block" height="150px" src="gambar/<?php echo $data['thumbnail_eskul']; ?>" alt="" srcset=""></td>
                                            <td><img class="d-block" height="150px" src="gambar/<?php echo $data['logo_eskul']; ?>" alt="" srcset=""></td>
                                            <td> <a data-toggle="modal" data-target="#edit<?= $data['id_eskul']; ?>" class="btn btn-primary" data-toggle="tooltip">Edit</a>
                                                <a href="proses.php?deletees=<?php echo $data['id_eskul']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ...?') ">Hapus</a>
                                            </td>
                                            <div class="modal fade" id="edit<?= $data['id_eskul']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Ekstrakurikuler</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="proses.php" enctype="multipart/form-data">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label>Nama Ekstrakurikuler</label>
                                                                        <input type="hidden" value="<?= $data['id_eskul']; ?>" name="id_eskul">
                                                                        <input type="text" name="nama_eskul" class="form-control" value="<?= $data['nama_eskul'] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="keterangan">Keterangan</label>
                                                                        <br>
                                                                        <textarea name="keterangan" id="keterangan" cols="56" rows="-3"><?= $data['keterangan'] ?></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="visi">Visi</label>
                                                                        <br>
                                                                        <textarea name="visi" id="visi" cols="56" rows="-3"><?= $data['visi'] ?></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="misi">Misi</label>
                                                                        <br>
                                                                        <textarea name="misi" id="misi" cols="56" rows="-3"><?= $data['misi'] ?></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Foto Ekstrakurikuler</label>
                                                                        <img class="d-block" src="gambar/<?php echo $data['thumbnail_eskul']; ?>" height="200" width="200">
                                                                        <input type="file" name="thumbnail_eskul" class="form-control">
                                                                        <div class="form-group">
                                                                            <label>Logo Ekstrakurikuler</label>
                                                                            <img class="d-block" src="gambar/<?php echo $data['logo_eskul']; ?>" height="200" width="200">
                                                                            <input type="file" value="gambar/<?= $data['logo_eskul']; ?>" name="logo_eskul" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="submit" name="updatees" class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- /.content -->

    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="Tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Ekstrakurikuler</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="proses.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Ekstrakurikuler</label>
                                <input type="text" name="nama_eskul" class="form-control" placeholder="Nama Ekstrakurikuler">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <br>
                                <textarea name="keterangan" id="keterangan" cols="56" rows="-3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <br>
                                <textarea name="visi" id="visi" cols="56" rows="-3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <br>
                                <textarea name="misi" id="misi" cols="56" rows="-3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto Ekstrakurikuler</label>
                                <input type="file" name="thumbnail_eskul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Logo Ekstrakurikuler</label>
                                <input type="file" name="logo_eskul" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="tomboles" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
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
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["csv", "excel", "pdf", "print", "colvis"]
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