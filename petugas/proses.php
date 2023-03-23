<?php
session_start();
if ($_SESSION['role'] != "2") {
  header("location:../index.php");
}

include 'koneksi.php';
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "DELETE FROM galeri_jurusan WHERE id_galeri_jurusan='$id'";
  $query = mysqli_query($koneksi, $sql);
  header('location:galeri_jurusan.php');
}
if (isset($_GET['deletee'])) {
  $id = $_GET['deletee'];
  $sql = "DELETE FROM galeri_eskul WHERE id_galeri_eskul='$id'";
  $query = mysqli_query($koneksi, $sql);
  header('location:galeri_eskul.php');
}

if (isset($_POST['simpan'])) {
  $id_jurusan = $_POST['id_jurusan'];
  $keterangan = $_POST['keterangan'];
  $foto_galeri = $_FILES['foto_galeri']['name'];
  if ($foto_galeri != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto_galeri);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_galeri']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_galeri;
    if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      $query = "INSERT INTO galeri_jurusan (id_jurusan,keterangan,foto_galeri) VALUES ('$id_jurusan','$keterangan','$nama_gambar_baru')";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='galeri_jurusan.php';</script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='galeri_jurusan.php'; </script>";
    }
  } else {
    $query = "INSERT INTO galeri_jurusan (id_jurusan,keterangan,foto_galeri) VALUES ('$id_jurusan', '$keterangan','')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
      die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Di Tambahkan');window.location='galeri_jurusan.php';</script>";
    }
  }
}


if (isset($_POST['update'])) {
  $id_galeri_jurusan = $_POST['id_galeri_jurusan'];
  $id_jurusan = $_POST['id_jurusan'];
  $keterangan = $_POST['keterangan'];
  $foto_galeri = $_FILES['foto_galeri']['name'];
  if ($foto_galeri != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto_galeri);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_galeri']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_galeri;
    if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      $query = "UPDATE galeri_jurusan SET id_jurusan = '$id_jurusan
        ', keterangan = '$keterangan', foto_galeri= '$nama_gambar_baru'";
      $query .= "WHERE id_galeri_jurusan = '$id_galeri_jurusan'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='galeri_jurusan.php'; </script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='galeri_jurusan.php'; </script>";
    }
  } else {
    $query = "UPDATE galeri_jurusan SET id_jurusan = '$id_jurusan
        ', keterangan = '$keterangan'";
    $query .= "WHERE id_galeri_jurusan = '$id_galeri_jurusan'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='galeri_jurusan.php'; </script>";
    }
  }
}

if (isset($_POST['simpann'])) {
  $id_eskul = $_POST['id_eskul'];
  $keterangan = $_POST['keterangan'];
  $foto_galeri = $_FILES['foto_galeri']['name'];
  if ($foto_galeri != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto_galeri);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_galeri']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_galeri;
    if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      $query = "INSERT INTO galeri_eskul (id_eskul,keterangan,foto_galeri) VALUES ('$id_eskul','$keterangan','$nama_gambar_baru')";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='galeri_eskul.php';</script>";
      }
    } else {
      echo "<script>alert('Ekstensi Gambar Tidak Sesuai');window.location='galeri_eskul.php';</script>";
    }
  } else {
    $query = "INSERT INTO galeri_eskul (id_eskul,keterangan,foto_galeri) VALUES ('$id_eskul', '$keterangan','')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
      die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Di Tambahkan');window.location='galeri_eskul.php';</script>";
    }
  }
}

if (isset($_POST['updatee'])) {
  $id_galeri_eskul = $_POST['id_galeri_eskul'];
  $id_eskul = $_POST['id_eskul'];
  $keterangan = $_POST['keterangan'];
  $foto_galeri = $_FILES['foto_galeri']['name'];
  if ($foto_galeri != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto_galeri);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_galeri']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_galeri;
    if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      $query = "UPDATE galeri_eskul SET id_eskul = '$id_eskul
        ', keterangan = '$keterangan', foto_galeri= '$nama_gambar_baru'";
      $query .= "WHERE id_galeri_eskul = '$id_galeri_eskul'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='galeri_eskul.php'; </script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='galeri_eskul.php'; </script>";
    }
  } else {
    $query = "UPDATE galeri_eskul SET id_eskul = '$id_eskul
        ', keterangan = '$keterangan'";
    $query .= "WHERE id_galeri_eskul = '$id_galeri_eskul'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='galeri_eskul.php'; </script>";
    }
  }
}

// informasi

if (isset($_GET['deleteinf'])) {
  $id = $_GET['deleteinf'];
  $sql = "DELETE FROM informasi WHERE id_informasi='$id'";
  $query = mysqli_query($koneksi, $sql);
  header("location:informasi.php");
}

if (isset($_POST['tombolinf'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];
  $jenis = $_POST['jenis_informasi'];
  $thumbnail_informasi = $_FILES['thumbnail_informasi']['name'];
  if ($thumbnail_informasi != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_informasi);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['thumbnail_informasi']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_informasi;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      $query = "INSERT INTO informasi (id_informasi,judul,isi,tanggal,thumbnail,jenis_informasi) VALUES ('','$judul
       ','$isi','$tanggal','$nama_gambar_baru','$jenis')";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='informasi.php'; </script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png'); window.location='informasi.php';</script>";
    }
  } else {
    $query = "INSERT INTO informasi (judul,isi,tanggal,thumbnail,jenis_informasi) VALUES ('$judul', '$isi', '$tanggal','', '$jenis')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
      die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Di Tambahkan');window.location='informasi.php'; </script>";
    }
  }
}

if (isset($_POST['updateinf'])) {
  $id_informasi = $_POST['id_informasi'];
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];
  $jenis = $_POST['jenis_informasi'];
  $thumbnail_informasi = $_FILES['thumbnail_informasi']['name'];
  if ($thumbnail_informasi != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_informasi);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['thumbnail_informasi']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_informasi;
    if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      $query = "UPDATE informasi SET judul = '$judul
      ', isi = '$isi', tanggal = '$tanggal', jenis_informasi = '$jenis', thumbnail= '$nama_gambar_baru'";
      $query .= "WHERE id_informasi = '$id_informasi'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='informasi.php'; </script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='informasi.php'; </script>";
    }
  } else {
    $query = "UPDATE informasi SET judul = '$judul
      ', isi = '$isi', tanggal = '$tanggal', jenis_informasi = '$jenis'";
    $query .= "WHERE id_informasi = '$id_informasi'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='informasi.php'; </script>";
    }
  }
}
