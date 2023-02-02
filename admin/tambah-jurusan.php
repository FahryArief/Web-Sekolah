<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Panel Admin</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="bg-light">
    
        <!-- navbar -->
        <div class="navbar">

            <div class="container">

                <!-- navbar brand -->
                <h2 class="nav-brand float-left"><a href="index.php">Nama Sekolah</a></h2>

                <!-- navbar menu -->
                <ul class="nav-menu float-left">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="jurusan.php">Jurusan</a></li>
                    <li><a href="eskul.php">Eskul</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li>
                        <a href="">Galeri <i class="fa fa-caret-down"></i></a>

                        <!-- sub menu -->
                        <ul class="dropdown">
                            <li><a href="galeri-jurusan.php">Galeri Jurusan</a></li>
                            <li><a href="galeri-eskul.php">Galeri Eskul</a></li>
                            <li><a href="galeri-eskul.php">Galeri Eskul</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Akun <i class="fa fa-caret-down"></i></a>

                        <!-- sub menu -->
                        <ul class="dropdown">
                            <li><a href="ubah-password.php">Ubah Password</a></li>
                            <li><a href="logout.php">Keluar</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>

        </div>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        Tambah Jurusan
                    </div>

                    <div class="box-body">

                        <form accept="" method="POST">

                            <div class="from-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="Nama Jurusan" class="input-control">
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- footer -->
        <div class="footer">
            <div class="container text-center">
                Copyrigt &copy - Panca Team.
            </div>
        </div>

    </body>
</html>