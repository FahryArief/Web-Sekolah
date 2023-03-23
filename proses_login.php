<?php

$host       = 'localhost'; // host
$username   = 'root'; // username database
$password   = ''; // password database
$dbname     = 'dbsekolah'; // nama database

$koneksi = mysqli_connect($host, $username, $password, $dbname);

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if (password_verify($password, $data['password'])) {
		if ($data['role'] == "1") {

			// buat session login dan username
			$_SESSION['id_user'] = $data['id_user'];
			$_SESSION['username'] = $username;
			$_SESSION['role'] = "1";
			// alihkan ke halaman dashboard admin

			header("location:admin");
		} else if ($data['role'] == "2") {
			// buat session login dan username
			$_SESSION['id_user'] = $data['id_user'];
			$_SESSION['username'] = $username;
			$_SESSION['role'] = "2";
			// 		// alihkan ke halaman dashboard resepsionis
			header("location:petugas");
		} else {
			// Gagal Login Username atau Password salah
			header("location:index.php?pesan=gagal");
		}
	} else {
		// Password Salah
		header("location:index.php?pesan=salah");
	}
} else {
	//Akun tidak ditemukan di database
	header("location:index.php?pesan=kosong");
}
