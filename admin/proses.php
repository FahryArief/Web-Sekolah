<?php
session_start();
if ($_SESSION['role'] != "1") {
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

// Jurusan

if (isset($_POST['tombolj'])) {
  $nama_jurusan = $_POST['nama_jurusan'];
  $keterangan = $_POST['keterangan'];
  $visi = $_POST['visi'];
  $misi = $_POST['misi'];
  $thumbnail_jurusan = $_FILES['thumbnail_jurusan']['name'];
  $logo_jurusan = $_FILES['logo_jurusan']['name'];

  if ($thumbnail_jurusan != "" || $logo_jurusan != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_jurusan);
    $xx = explode('.', $logo_jurusan);
    $extensi = strtolower(end($x));
    $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
    $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_jurusan;
    $nama_gambar_baruu = $angka_acak . '-' . $logo_jurusan;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      move_uploaded_file($file_tmpp, 'gambar/' . $nama_gambar_baruu);
      $query = "INSERT INTO jurusan (nama_jurusan,keterangan,visi,misi,thumbnail_jurusan,logo_jurusan) VALUES ('$nama_jurusan','$keterangan','$visi','$misi','$nama_gambar_baru','$nama_gambar_baruu')";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='jurusan.php';</script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='jurusan.php';</script>";
    }
  } else {
    $querys = "INSERT INTO jurusan (nama_jurusan,keterangan,visi,misi) VALUES ('$nama_jurusan', '$keterangan', '$visi','$misi')";
    $result = mysqli_query($koneksi, $querys);

    if (!$result) {
      die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Di Tambahkan');window.location='jurusan.php';</script>";
    }
  }
}

if (isset($_GET['deletej'])) {
  $id = $_GET['deletej'];
  $sql = "DELETE FROM jurusan WHERE id_jurusan='$id'";
  $query = mysqli_query($koneksi, $sql);
  header('location:jurusan.php');
}

if (isset($_POST['updatej'])) {
  $id_jurusan = $_POST['id_jurusan'];
  $nama_jurusan = $_POST['nama_jurusan'];
  $keterangan = $_POST['keterangan'];
  $visi = $_POST['visi'];
  $misi = $_POST['misi'];
  $thumbnail_jurusan = $_FILES['thumbnail_jurusan']['name'];
  $logo_jurusan = $_FILES['logo_jurusan']['name'];
  if ($thumbnail_jurusan != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_jurusan);
    // $xx = explode('.', $logo_jurusan);
    $extensi = strtolower(end($x));
    // $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
    $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_jurusan;
    // $nama_gambar_baruu = $angka_acak.'-'.$logo_jurusan;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      // move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
      $query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
        ', keterangan = '$keterangan', visi = '$visi', misi = '$misi', thumbnail_jurusan= '$nama_gambar_baru'";
      $query .= "WHERE id_jurusan = '$id_jurusan'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
      }
    } else {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='jurusan.php';</script>";
    }
  } elseif ($logo_jurusan != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    // $x = explode('.', $thumbnail_jurusan);
    $xx = explode('.', $logo_jurusan);
    // $extensi = strtolower(end($x));
    $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
    $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
    $angka_acak = rand(1, 999);
    // $nama_gambar_baru = $angka_acak.'-'.$thumbnail_jurusan;
    $nama_gambar_baruu = $angka_acak . '-' . $logo_jurusan;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      // move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
      move_uploaded_file($file_tmpp, 'gambar/' . $nama_gambar_baruu);
      $query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
', keterangan = '$keterangan', visi = '$visi', misi = '$misi', logo_jurusan= '$nama_gambar_baruu'";
      $query .= "WHERE id_jurusan = '$id_jurusan'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
      }
    } elseif ($logo_jurusan != "") {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='jurusan.php';</script>";
    }
  } elseif ($logo_jurusan != "" && $thumbnail_jurusan != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_jurusan);
    $xx = explode('.', $logo_jurusan);
    $extensi = strtolower(end($x));
    $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_jurusan']['tmp_name'];
    $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_jurusan;
    $nama_gambar_baruu = $angka_acak . '-' . $logo_jurusan;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      move_uploaded_file($file_tmpp, 'gambar/' . $nama_gambar_baruu);
      $query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
', keterangan = '$keterangan', visi = '$visi', misi = '$misi',thumbnail_jurusan = '$nama_gambar_baru', logo_jurusan= '$nama_gambar_baruu'";
      $query .= "WHERE id_jurusan = '$id_jurusan'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
      }
    } elseif ($logo_jurusan != "") {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='jurusan.php';</script>";
    }
  } else {
    $query  = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan
      ', keterangan = '$keterangan', visi = '$visi', misi = '$misi'";
    $query .= "WHERE id_jurusan = '$id_jurusan'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='jurusan.php';</script>";
    }
  }
}
// USER
if (isset($_GET['deleteuser'])) {
  $id = $_GET['deleteuser'];
  $sql = "DELETE FROM user WHERE id_user='$id'";
  $query = mysqli_query($koneksi, $sql);
  header("location:data_users.php");
}

if (isset($_POST['adduser'])) {
  $nama = $_POST['nama_lengkap'];
  $username = $_POST['nama'];
  $password = $_POST['password'];
  $pw =  password_hash($password, PASSWORD_DEFAULT);
  $role = $_POST['role'];

  //mengirim ke databases

  mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$pw',  '$nama', now(), '$role')");
  header("location:data_users.php");
}

if (isset($_POST['edituser'])) {
  $id_user = $_POST['id_user'];
  $nama = $_POST['nama_lengkap'];
  $username = $_POST['nama'];
  $password = $_POST['password'];
  $pw =  password_hash($password, PASSWORD_DEFAULT);

  //mengirim ke databases

  $query = "UPDATE user SET username = '$username', password ='$pw', full_name = '$nama' ";
  $query .= "WHERE id_user = '$id_user'";
  mysqli_query($koneksi, $query);
  header("location:data_users.php");
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

// Eskul

if (isset($_POST['tomboles'])) {
  $nama_eskul = $_POST['nama_eskul'];
  $keterangan = $_POST['keterangan'];
  $visi = $_POST['visi'];
  $misi = $_POST['misi'];
  $thumbnail_eskul = $_FILES['thumbnail_eskul']['name'];
  $logo_eskul = $_FILES['logo_eskul']['name'];

  if ($thumbnail_eskul != "" || $logo_eskul != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_eskul);
    $xx = explode('.', $logo_eskul);
    $extensi = strtolower(end($x));
    $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_eskul']['tmp_name'];
    $file_tmpp = $_FILES['logo_eskul']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_eskul;
    $nama_gambar_baruu = $angka_acak . '-' . $logo_eskul;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      move_uploaded_file($file_tmpp, 'gambar/' . $nama_gambar_baruu);
      $query = "INSERT INTO eskul (nama_eskul,keterangan,visi,misi,thumbnail_eskul,logo_eskul) VALUES ('$nama_eskul','$keterangan','$visi','$misi','$nama_gambar_baru','$nama_gambar_baruu')";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='eskul.php';</script>";
      }
    } else {
      echo "<script>alert('Extensi gambar harus berupa .jpg atau .png');window.location='eskul.php';</script>";
    }
  } else {
    $querys = "INSERT INTO eskul (nama_eskul,keterangan,visi,misi,thumbnail_eskul,logo_eskul) VALUES ('$nama_eskul', '$keterangan', '$visi','$misi', '' ,'')";
    $result = mysqli_query($koneksi, $querys);

    if (!$result) {
      die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Di Tambahkan');window.location='eskul.php';</script>";
    }
  }
}

if (isset($_GET['deletees'])) {
  $id = $_GET['deletees'];
  $sql = "DELETE FROM eskul WHERE id_eskul='$id'";
  $query = mysqli_query($koneksi, $sql);
  header("location:eskul.php");
}

if (isset($_POST['updatees'])) {
  $id_eskul = $_POST['id_eskul'];
  $nama_eskul = $_POST['nama_eskul'];
  $keterangan = $_POST['keterangan'];
  $visi = $_POST['visi'];
  $misi = $_POST['misi'];
  $thumbnail_eskul = $_FILES['thumbnail_eskul']['name'];
  $logo_eskul = $_FILES['logo_eskul']['name'];
  if ($thumbnail_eskul != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_eskul);
    // $xx = explode('.', $logo_eskul);
    $extensi = strtolower(end($x));
    // $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_eskul']['tmp_name'];
    $file_tmpp = $_FILES['logo_eskul']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_eskul;
    // $nama_gambar_baruu = $angka_acak.'-'.$logo_eskul;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      // move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
      $query  = "UPDATE eskul SET nama_eskul = '$nama_eskul
      ', keterangan = '$keterangan', visi = '$visi', misi = '$misi', thumbnail_eskul= '$nama_gambar_baru'";
      $query .= "WHERE id_eskul = '$id_eskul'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='eskul.php';</script>";
      }
    } else {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='eskul.php';</script>";
    }
  } elseif ($logo_eskul != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    // $x = explode('.', $thumbnail_eskul);
    $xx = explode('.', $logo_eskul);
    // $extensi = strtolower(end($x));
    $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_eskul']['tmp_name'];
    $file_tmpp = $_FILES['logo_eskul']['tmp_name'];
    $angka_acak = rand(1, 999);
    // $nama_gambar_baru = $angka_acak.'-'.$thumbnail_eskul;
    $nama_gambar_baruu = $angka_acak . '-' . $logo_eskul;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      // move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
      move_uploaded_file($file_tmpp, 'gambar/' . $nama_gambar_baruu);
      $query  = "UPDATE eskul SET nama_eskul = '$nama_eskul
', keterangan = '$keterangan', visi = '$visi', misi = '$misi', logo_eskul= '$nama_gambar_baruu'";
      $query .= "WHERE id_eskul = '$id_eskul'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='eskul.php';</script>";
      }
    } elseif ($logo_eskul != "") {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='eskul.php';</script>";
    }
  } elseif ($logo_eskul != "" && $thumbnail_eskul != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $thumbnail_eskul);
    $xx = explode('.', $logo_eskul);
    $extensi = strtolower(end($x));
    $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['thumbnail_eskul']['tmp_name'];
    $file_tmpp = $_FILES['logo_eskul']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $thumbnail_eskul;
    $nama_gambar_baruu = $angka_acak . '-' . $logo_eskul;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      move_uploaded_file($file_tmpp, 'gambar/' . $nama_gambar_baruu);
      $query  = "UPDATE eskul SET nama_eskul = '$nama_eskul
', keterangan = '$keterangan', visi = '$visi', misi = '$misi',thumbnail_eskul = '$nama_gambar_baru', logo_eskul= '$nama_gambar_baruu'";
      $query .= "WHERE id_eskul = '$id_eskul'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='eskul.php';</script>";
      }
    } elseif ($logo_eskul != "") {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='eskul.php';</script>";
    }
  } else {
    $query  = "UPDATE eskul SET nama_eskul = '$nama_eskul
    ', keterangan = '$keterangan', visi = '$visi', misi = '$misi'";
    $query .= "WHERE id_eskul = '$id_eskul'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='eskul.php';</script>";
    }
  }
}
// TENTANG

if (isset($_POST['tentang'])) {
  $id_tentang = 1;
  $nm_sekolah = $_POST['nama'];
  $nm_kepsek = $_POST['kepsek'];
  $sambutan = $_POST['sambutan'];
  $link_profile = $_POST['link_profile'];
  $visi = $_POST['visi'];
  $misi = $_POST['misi'];
  $tujuan = $_POST['tujuan'];
  $sejarah = $_POST['sejarah'];
  $identitas = $_POST['identitas'];
  $foto_sambutan = $_FILES['foto_sambutan']['name'];
  $struktur = $_POST['struktur'];
  if ($foto_sambutan != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto_sambutan);
    // $xx = explode('.', $logo_jurusan);
    $extensi = strtolower(end($x));
    // $extensii = strtolower(end($xx));
    $file_tmp = $_FILES['foto_sambutan']['tmp_name'];
    // $file_tmpp = $_FILES['logo_jurusan']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_sambutan;
    // $nama_gambar_baruu = $angka_acak.'-'.$logo_jurusan;
    if (in_array($extensi || $extensii, $ekstensi_diperbolehkan) == true) {
      move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
      // move_uploaded_file($file_tmpp, 'gambar/'.$nama_gambar_baruu);
      $query  = "UPDATE tentang SET nm_sekolah = '$nm_sekolah', nm_kepsek = '$nm_kepsek', sambutan = '$sambutan', foto_sambutan= '$nama_gambar_baru', struktur = '$struktur', link_profile = '$link_profile',visi='$visi',misi='$misi',tujuan='$tujuan',sejarah='$sejarah',identitas='$identitas'";
      $query .= "WHERE id_tentang = '$id_tentang'";
      $result = mysqli_query($koneksi, $query);
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='tentang.php';</script>";
      }
    } else {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tentang.php';</script>";
    }
  } else {
    $query  = "UPDATE tentang SET nm_sekolah = '$nm_sekolah', nm_kepsek = '$nm_kepsek', sambutan = '$sambutan', link_profile = '$link_profile',visi='$visi',misi='$misi',tujuan='$tujuan',sejarah='$sejarah',identitas='$identitas',struktur = '$struktur'";
    $query .= "WHERE id_tentang = '$id_tentang'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='tentang.php';</script>";
    }
  }
}
