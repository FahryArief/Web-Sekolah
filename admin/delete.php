<?php
include 'koneksi.php';
$id = $_GET['id_informasi'];

$hapus = "DELETE FROM informasi WHERE id_informasi = '$id'";
$hasil_hapus = mysqli_query($koneksi,$hapus);

if(!$hasil_hapus) {
    die ("Gagal menghapus data: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil dihapus.');window.location='informasi.php';</script>";
  }
?>