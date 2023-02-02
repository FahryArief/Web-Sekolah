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
                        Jurusan
                    </div>

                    <div class="box-body">
                        
                        <a href="tambah-jurusan.php"><i class="fa fa-plus"></i>Tambah</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>RPL</td>
                                    <td>Lorem ipLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni</td>
                                    <td><img src="../styling/img/crush.jpg" height="80px" width="60px"></td>
                                    <td>
                                        <a href="" title="Edit Data"><i class="fa fa-edit"></i></a> |
                                        <a href="" title="Hapus Data"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>APL</td>
                                    <td>orem ipLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni</td>
                                    <td><img src="../styling/img/crush.jpg" height="80px" width="60px" height="80px"></td>
                                    <td>
                                        <a href="" title="Edit Data"><i class="fa fa-edit"></i></a> |
                                        <a href="" title="Hapus Data"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>Pemasaran</td>
                                    <td>orem ipLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni</td>
                                    <td><img src="../styling/img/crush.jpg" height="80px" width="60px" height="80px"></td>
                                    <td>
                                        <a href="" title="Edit Data"><i class="fa fa-edit"></i></a> |
                                        <a href="" title="Hapus Data"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>Akutansi</td>
                                    <td>orem ipLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni</td>
                                    <td><img src="../styling/img/siti_cantik.jpg" height="80px" width="60px" height="80px"></td>
                                    <td>
                                        <a href="" title="Edit Data"><i class="fa fa-edit"></i></a> |
                                        <a href="" title="Hapus Data"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td>Kimia Industri</td>
                                    <td>orem ipLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni</td>
                                    <td><img src="../styling/img/siti_cantik.jpg" height="80px" width="60px" height="80px"></td>
                                    <td>
                                        <a href="" title="Edit Data"><i class="fa fa-edit"></i></a> |
                                        <a href="" title="Hapus Data"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        

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