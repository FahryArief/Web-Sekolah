<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/style1.css">
    <title>DETAIL BERITA - SMKN 8 BANDAR LAMPUNG</title>
</head>

<body>
    <?php
    include("koneksi.php");
    if (isset($_GET['id_informasi'])) {
        $id_informasi = ($_GET['id_informasi']);
        $query = "SELECT * FROM informasi WHERE id_informasi='$id_informasi'";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query gagal dijalankan : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
        }
        $queryss = mysqli_query($koneksi, "SELECT
    CASE DAYOFWEEK(tanggal)
        WHEN 1 THEN 'Minggu'
        WHEN 2 THEN 'Senin'
        WHEN 3 THEN 'Selasa'
        WHEN 4 THEN 'Rabu'
        WHEN 5 THEN 'Kamis'
        WHEN 6 THEN 'Jumat'
        WHEN 7 THEN 'Sabtu'
    END AS hari
FROM informasi WHERE id_informasi='$id_informasi'");
        $results = mysqli_fetch_assoc($queryss);
        $day = $results['hari'];
        $data = mysqli_fetch_assoc($result);
        if ($data == NULL) {
            echo "<script>alert('Data Tidak Di Temukan Di Database');window.location='informasi.php';</script>";
        }
    } else {
        echo "<script>alert('Masukan Data');window.location='informasi.php';</script>";
    }
    ?>
    <div class="container">
        <header>
            <h1 class="heading-1"><?= $data['judul'] ?></h1>
            <div class="sub-heading">
                <p><?= $day;   ?><span><?php setlocale(LC_TIME, 'id_ID', 'Indonesian_Indonesia.1252');
                                        echo strftime(', %e %B  %Y', strtotime($data['tanggal']));
                                        ?></span></p>
                <p class="importent">BY TEAM JURNALIS</p>
            </div>
        </header>

        <div class="main">
            <div class="home">
                <div class="left">
                    <img src="admin/gambar/<?= $data['thumbnail'] ?>" class="home-img" alt="Paper photo">
                    <h2 class="heading-2">
                        <?= $data['judul'] ?>
                    </h2>
                </div>
                <div class="right">
                    <h3 class="heading-3">latest news</h3>
                    <?php
                    $db = "SELECT * FROM informasi ORDER BY id_informasi DESC LIMIT 5";
                    $hasil = mysqli_query($koneksi, $db);
                    while ($dataa = mysqli_fetch_assoc($hasil)) {
                    ?>
                        <div class="lists">
                            <div class="list">
                                <img src="admin/gambar/<?= $dataa['thumbnail'] ?>" alt="photo 1">
                                <div class="news_post_small_title"><a href="detailberita.php?id_informasi=<?= $dataa['id_informasi']; ?>"><?= $dataa['judul'] ?></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <article>
                <?php
                $html = $data['isi'];
                $p = str_replace('src="gambar/', 'src="admin/gambar/', $html);
                echo $p;
                ?>
            </article>
        </div>
    </div>
</body>

</html>