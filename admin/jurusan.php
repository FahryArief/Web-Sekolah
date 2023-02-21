<?php
include 'koneksi.php'; 
if (isset($_POST['tombol'])) {
    $nama_jurusan = $_POST['nama_jurusan'];
$keterangan = $_POST['keterangan'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];
$thumbnail_jurusan = $_FILES['thumbnail_jurusan']['name'];
$logo_jurusan = $_FILES['logo_jurusan']['name'];

    if ($thumbnail_jurusan !="" || $logo_jurusan !="") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $thumbnail_jurusan);
        $xx = explode('.', $logo_jurusan);
        $extensi = strtolower(end($x));
        $extensii = strtolower(end($xx));
        $file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
        $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$thumbnail_jurusan;
        $nama_gambar_baruu = $angka_acak.'-'.$logo_jurusan;
        if (in_array($extensi || $extensii, $ekstensi_diperbolehkan)=== true) {
         move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
         move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
         $query = "INSERT INTO jurusan (nama_jurusan,keterangan,visi,misi,thumbnail_jurusan,logo_jurusan) VALUES ('$nama_jurusan','$keterangan','$visi','$misi','$nama_gambar_baru','$nama_gambar_baruu')";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
         die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
        } else {
         echo "<script>alert('Data Berhasil Di Tambahkan');window.location='jurusan.php';</script>";
        }
        
     }
      else {
         echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='jurusan.php';</script>";
     }
     }else{
        $querys = "INSERT INTO jurusan (nama_jurusan,keterangan,visi,misi,thumbnail_jurusan,logo_jurusan) VALUES ('$nama_jurusan', '$keterangan', '$visi','$misi', '' ,'')";
        $result = mysqli_query($koneksi, $querys);
        
        if (!$result) {
            die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
           } else {
            echo "<script>alert('Data Berhasil Di Tambahkan');window.location='jurusan.php';</script>";
           }
    }
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM jurusan WHERE id_jurusan='$id'";
    $query= mysqli_query($koneksi,$sql);
}

if(isset($_POST['update'])){
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $keterangan = $_POST['keterangan'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $thumbnail_jurusan = $_FILES['thumbnail_jurusan']['name'];
    $logo_jurusan = $_FILES['logo_jurusan']['name'];
    if($thumbnail_jurusan !="") {
      $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $thumbnail_jurusan);
        // $xx = explode('.', $logo_jurusan);
        $extensi = strtolower(end($x));
        // $extensii = strtolower(end($xx));
        $file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
        $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$thumbnail_jurusan;
        // $nama_gambar_baruu = $angka_acak.'-'.$logo_jurusan;
      if(in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true)  {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
        // move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
        $query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
        ', keterangan = '$keterangan', visi = '$visi', misi = '$misi', thumbnail_jurusan= '$nama_gambar_baru'";
        $query .= "WHERE id_jurusan = '$id_jurusan'";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
        }
      } else {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='jurusan.php';</script>";
      }
    }
    elseif($logo_jurusan !="")
    {
$ekstensi_diperbolehkan = array('png','jpg','jpeg');
// $x = explode('.', $thumbnail_jurusan);
$xx = explode('.', $logo_jurusan);
// $extensi = strtolower(end($x));
$extensii = strtolower(end($xx));
$file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
$file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
$angka_acak = rand(1,999);
// $nama_gambar_baru = $angka_acak.'-'.$thumbnail_jurusan;
$nama_gambar_baruu = $angka_acak.'-'.$logo_jurusan;
if(in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true)  {
// move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
$query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
', keterangan = '$keterangan', visi = '$visi', misi = '$misi', logo_jurusan= '$nama_gambar_baruu'";
$query .= "WHERE id_jurusan = '$id_jurusan'";
$result = mysqli_query($koneksi, $query);
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
   " - ".mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
}
} elseif($logo_jurusan !="") {
echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='jurusan.php';</script>";
}
    }
    elseif ($logo_jurusan !="" && $thumbnail_jurusan !="") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
$x = explode('.', $thumbnail_jurusan);
$xx = explode('.', $logo_jurusan);
$extensi = strtolower(end($x));
$extensii = strtolower(end($xx));
$file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
$file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
$angka_acak = rand(1,999);
$nama_gambar_baru = $angka_acak.'-'.$thumbnail_jurusan;
$nama_gambar_baruu = $angka_acak.'-'.$logo_jurusan;
if(in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true)  {
move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
$query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
', keterangan = '$keterangan', visi = '$visi', misi = '$misi',thumbnail_jurusan = '$nama_gambar_baru', logo_jurusan= '$nama_gambar_baruu'";
$query .= "WHERE id_jurusan = '$id_jurusan'";
$result = mysqli_query($koneksi, $query);
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
   " - ".mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
}
} elseif($logo_jurusan !="") {
echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='jurusan.php';</script>";
}
    }
    else {
      $query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
      ', keterangan = '$keterangan', visi = '$visi', misi = '$misi'";
      $query .= "WHERE id_jurusan = '$id_jurusan'";
      $result = mysqli_query($koneksi, $query);
          // periska query apakah ada error
      if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../assets/image/favicon.ico">

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
                        <h1 class="m-0">Jurusan</h1>
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
                                        <th>Nama Jurusan</th>
                                        <th>Keterangan</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Gambar</th>
                                        <th>Logo Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $db = "SELECT * FROM jurusan ORDER BY id_jurusan ASC";
                                    $hasil = mysqli_query($koneksi,$db);
                                    
                                    $no = 1;
                                    $querys = mysqli_query($koneksi, "select * from jurusan");
                                    $rows = mysqli_fetch_array($querys);
                                    while($data = mysqli_fetch_assoc($hasil)){
                                        ?>
                                    <tr>
                                        <td><?=$no; ?></td>
                                        <td><?= $data['nama_jurusan']?></td>
                                        <td><?= $data['keterangan']?></td>
                                        <td><?= $data['visi']?></td>
                                        <td><?= $data['misi']?></td>
                                        <td><img class="d-block" height="150px" src="gambar/<?php echo $data['thumbnail_jurusan']; ?>" alt="" srcset=""></td>
                                        
                                        <td><img class="d-block" height="150px" src="gambar/<?php echo $data['logo_jurusan']; ?>" alt="" srcset=""></td>
                                        <td> <a data-toggle="modal" data-target="#edit<?= $data['id_jurusan']; ?>" class="btn btn-primary" data-toggle="tooltip" >Edit</a>
                                            <a href="jurusan.php?delete=<?php echo $data['id_jurusan']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ...?') ">Hapus</a>
                                        </td>
                                        <div class="modal fade" id="edit<?= $data['id_jurusan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Jurusan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input type="hidden" value="<?= $data['id_jurusan']; ?>" name="id_jurusan">
                                <input type="text" name="nama_jurusan" class="form-control" value="<?= $data['nama_jurusan']?>">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <br>
                               <textarea name="keterangan" id="keterangan" cols="56" rows="-3"><?= $data['keterangan']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <br>
                               <textarea name="visi" id="visi" cols="56" rows="-3"><?= $data['visi']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <br>
                               <textarea name="misi" id="misi" cols="56" rows="-3"><?= $data['misi']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto Jurusan</label>
                                <img class="d-block" src="gambar/<?php echo $data['thumbnail_jurusan']; ?>" height="200"
                                            width="200">
                                <input type="file" name="thumbnail_jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Logo Jurusan</label>
                                <img class="d-block" src="gambar/<?php echo $data['logo_jurusan']; ?>" height="200"
                                            width="200">
                                <input type="file" value="gambar/<?= $data['logo_jurusan']; ?>" name="logo_jurusan" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">update</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</tr>
<?php $no++; }?>
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
                    <h4 class="modal-title">Tambah Jurusan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input type="text" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <br>
                               <textarea name="keterangan" id="keterangan" cols="56" rows="-3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Visi</label>
                                <input type="text" name="visi" class="form-control" placeholder="Visi">
                            </div>
                            <div class="form-group">
                                <label>Misi</label>
                                <input type="text" name="misi" class="form-control" placeholder="Misi">
                            </div>
                            <div class="form-group">
                                <label>Foto Jurusan</label>
                                <input type="file" name="thumbnail_jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Logo Jurusan</label>
                                <input type="file" name="logo_jurusan" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="tombol" class="btn btn-primary">Simpan</button>
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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