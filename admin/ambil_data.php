<?php
include 'koneksi.php';
if (isset($_GET['id_informasi'])) {
    $query = mysqli_query($koneksi, "select * from informasi where id_informasi='" . $_GET['id_informasi'] . "'");
    $row = mysqli_fetch_array($query);
    echo $row["thumbnail"];
} elseif (isset($_GET['id_fasilitas'])) {
    $querys = mysqli_query($koneksi, "select * from fasilitas where id_fasilitas='" . $_GET['id_fasilitas'] . "'");
    $rows = mysqli_fetch_array($querys);
    header("Content-type: " . $rows["tipe_foto"]);
    echo $rows["foto"];
} else {
    header('location:index.php');
}