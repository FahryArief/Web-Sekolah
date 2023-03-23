<?php
if ($_SESSION['role'] != "2") {
    header("location:../index.php");
}

// Konfigurasi Database
$host       = 'localhost'; // host
$username   = 'root'; // username database
$password   = ''; // password database
$dbname     = 'dbsekolah'; // nama database

$koneksi = mysqli_connect($host, $username, $password, $dbname);

if (!$koneksi) {

    echo "Database Error";
}
