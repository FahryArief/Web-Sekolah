<?php
// session_start();
// if ($_SESSION['role'] != "1") {
//     header("location:../index.php");
// }
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
                        <h1 class="m-0">Daftar Informasi</h1>
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
                                        <th>Nama Lengkap</th>
                                        <th>Nama Pengguna</th>
                                        <th>Role</th>
                                        <!-- <th>Kata Sandi</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $db = "SELECT * FROM user ORDER BY id_user ASC";
                                    $hasil = mysqli_query($koneksi, $db);
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($hasil)) {
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['full_name']; ?></td>
                                            <td><?= $data['username']; ?></td>
                                            <td><?php
                                                if ($data['role'] == 1) {
                                                    echo "<span class=\"badge badge-success\">Administrator</span>";
                                                } else {
                                                    echo "<span class=\"badge badge-primary\">Petugas</span>";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($data['role'] != 1) { ?>
                                                    <a data-toggle="modal" data-target="#edit<?= $data['id_user']; ?>" class="btn btn-primary">Edit</a>
                                                    <a href="proses.php?deleteuser=<?= $data['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ...?') ">Hapus</a>
                                                <?php } else { ?>
                                                    <button type="button" class="btn btn-primary disabled">Edit</button>
                                                    <button type="button" class="btn btn-danger disabled">Hapus</button>
                                                <?php } ?>
                                            </td>
                                            <div class="modal fade" id="edit<?= $data['id_user'] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data Users</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="proses.php" enctype="multipart/form-data">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label for="nama">Nama Lengkap</label>
                                                                        <input type="hidden" value="<?= $data['id_user'] ?>" name="id_user">
                                                                        <input value="<?= $data['full_name'] ?>" id="nama" type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Nama Pengguna</label>
                                                                        <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna">
                                                                    </div>
                                                                    <!-- <label>Jenis Role</label> -->
                                                                    <!-- <select name="role" class="form-control" id="">
                                                                        <option selected disabled value="">-- Pilih Role --</option>
                                                                        <option value="1">Administrator</option>
                                                                        <option value="2">Petugas</option>
                                                                    </select> -->
                                                                    <div class="form-group">
                                                                        <label for="password" class="control-label">Password</label>
                                                                        <input id="password" type="password" class="form-control" name="password" placeholder="Masukan Kata Sandi" tabindex="2" required>
                                                                        <div class="invalid-feedback">
                                                                            please fill in your password
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="submit" name="edituser" class="btn btn-primary">Simpan</button>
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
                    <h4 class="modal-title">Tambah Data Users</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="proses.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input id="nama" type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna">
                            </div>
                            <label>Jenis Role</label>
                            <select name="role" class="form-control" id="">
                                <option selected disabled>-- Pilih Role --</option>
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
                            </select>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Masukan Kata Sandi" tabindex="2" required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="adduser" class="btn btn-primary">Simpan</button>
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