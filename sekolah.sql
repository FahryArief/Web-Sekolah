-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2023 pada 15.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `eskul`
--

CREATE TABLE `eskul` (
  `id_eskul` int(11) NOT NULL,
  `nama_eskul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `thumbnail_eskul` varchar(255) NOT NULL,
  `logo_eskul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `eskul`
--

INSERT INTO `eskul` (`id_eskul`, `nama_eskul`, `keterangan`, `visi`, `misi`, `thumbnail_eskul`, `logo_eskul`) VALUES
(1, 'basket', 'basket', 'Meningkatkan dan melatih kualitas, mental, dan skill serta memperkuat fisik tiap anggota dan melatih rasa disiplin masing-masing', '1.Meningkatkan kualitas, mental, dan kemampuan masing-masing anggota.\r\n2.Meningkatkan dan memperkuat fisik tiap anggota.\r\n3.Melatih kemampuan dan mempertajam skill masing-masing.\r\n4.Melatih dan menumbuhkan sikap disiplin.\r\n5.Menjadikan ekskul Basket sebagai wadah bagi para anggotanya bertukar pikiran.', '825-WhatsApp_Image_2023-03-22_at_21_29_56_waifu2x_photo_noise2-transformed.png', '825-@basskapan_jaya.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_eskul`
--

CREATE TABLE `galeri_eskul` (
  `id_galeri_eskul` int(11) NOT NULL,
  `id_eskul` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri_eskul`
--

INSERT INTO `galeri_eskul` (`id_galeri_eskul`, `id_eskul`, `keterangan`, `foto_galeri`) VALUES
(1, 1, 'kghghjgj', '748-0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_jurusan`
--

CREATE TABLE `galeri_jurusan` (
  `id_galeri_jurusan` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `jenis_informasi` enum('B','P','K') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `isi`, `tanggal`, `thumbnail`, `jenis_informasi`) VALUES
(1, 'Korlantas Tetap Berlakukan E-TLE Selama Mudik Lebaran 2023             \r\n      ', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Peristiwa bocornya dokumen internal KPK bukan hal baru dan aneh terjadi di KPK. Itu juga pernah terjadi di era Abraham Samad (2013), Sprindik Anas Urbaningrum bocor ke publik,” kata Koordinator Simpul Aktivis Angkatan 98 (Siaga 98) dikutip&nbsp;<em>Kantor Berita Politik RMOL,</em>&nbsp;Senin (10/4).</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">Demikian juga Sprindik Jero Wacik. Disebutkan Jero tersangka dalam perkara suap di SKK Migas. Itu di era, Bambang Widjojanto (BW), yang kemudian BW membantah, bahwa sprindik itu palsu. Juga dalam Kasus Bupati Bogor Rachmat Yasin. Bocor, tertanggal 22 Mei 2013.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Demikian juga menimpa Setya Novanto. Sama di Era, Bambang Widjoyanto,” beber Hasanuddin.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">Namun, Hasanuddin merasa aneh sekaligus heran, mantan pimpinan KPK melakukan demonstrasi di bekas kantornya lalu berteriak soal kebocoran dokumen di internal KPK.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Siaga 98 berpendapat biasa di KPK dokumen bocor, sudah sejak tahun 2013, di Era Abraham Samad dan BW, ini ironi yang memalukan. Sekarang mantan pimpinan KPK demo KPK, sungguh luar biasa,” ujarnya heran.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">Terkait aksi yang dilakukan oleh mantan pimpinan KPK, Hasanuddin menduga sangat kental dengan politik kepentingan, Politik Pemilu 2024 dan pergantian pimpinan KPK yang sebentar lagi dilakukan.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Ini, sudah menjadi kelompok politik tersendiri dalam pemberantasan korupsi. Kami sarankan, sebaiknya mereka masuk partai politik. Agar tersalurkan kehendaknya,” demikian Hasanuddin.</p>', '2023-04-11', '889-20230410_124618.jpg', 'B'),
(2, 'Pemerintah Daerah\r\n       ', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Peristiwa bocornya dokumen internal KPK bukan hal baru dan aneh terjadi di KPK. Itu juga pernah terjadi di era Abraham Samad (2013), Sprindik Anas Urbaningrum bocor ke publik,” kata Koordinator Simpul Aktivis Angkatan 98 (Siaga 98) dikutip&nbsp;<em>Kantor Berita Politik RMOL,</em>&nbsp;Senin (10/4).</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">Demikian juga Sprindik Jero Wacik. Disebutkan Jero tersangka dalam perkara suap di SKK Migas. Itu di era, Bambang Widjojanto (BW), yang kemudian BW membantah, bahwa sprindik itu palsu. Juga dalam Kasus Bupati Bogor Rachmat Yasin. Bocor, tertanggal 22 Mei 2013.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Demikian juga menimpa Setya Novanto. Sama di Era, Bambang Widjoyanto,” beber Hasanuddin.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">Namun, Hasanuddin merasa aneh sekaligus heran, mantan pimpinan KPK melakukan demonstrasi di bekas kantornya lalu berteriak soal kebocoran dokumen di internal KPK.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Siaga 98 berpendapat biasa di KPK dokumen bocor, sudah sejak tahun 2013, di Era Abraham Samad dan BW, ini ironi yang memalukan. Sekarang mantan pimpinan KPK demo KPK, sungguh luar biasa,” ujarnya heran.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">Terkait aksi yang dilakukan oleh mantan pimpinan KPK, Hasanuddin menduga sangat kental dengan politik kepentingan, Politik Pemilu 2024 dan pergantian pimpinan KPK yang sebentar lagi dilakukan.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px;\">“Ini, sudah menjadi kelompok politik tersendiri dalam pemberantasan korupsi. Kami sarankan, sebaiknya mereka masuk partai politik. Agar tersalurkan kehendaknya,” demikian Hasanuddin.</p>', '2023-04-11', '486-DSC00010.jpg', 'B'),
(3, 'Korlantas Tetap Berlakukan E-TLE Selama Mudik Lebaran 2023\r\n       ', '<p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">“Peristiwa bocornya dokumen internal KPK bukan hal baru dan aneh terjadi di KPK. Itu juga pernah terjadi di era Abraham Samad (2013), Sprindik Anas Urbaningrum bocor ke publik,” kata Koordinator Simpul Aktivis Angkatan 98 (Siaga 98) dikutip&nbsp;<em>Kantor Berita Politik RMOL,</em>&nbsp;Senin (10/4).</p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">Demikian juga Sprindik Jero Wacik. Disebutkan Jero tersangka dalam perkara suap di SKK Migas. Itu di era, Bambang Widjojanto (BW), yang kemudian BW membantah, bahwa sprindik itu palsu. Juga dalam Kasus Bupati Bogor Rachmat Yasin. Bocor, tertanggal 22 Mei 2013.</p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">“Demikian juga menimpa Setya Novanto. Sama di Era, Bambang Widjoyanto,” beber Hasanuddin.</p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">Namun, Hasanuddin merasa aneh sekaligus heran, mantan pimpinan KPK melakukan demonstrasi di bekas kantornya lalu berteriak soal kebocoran dokumen di internal KPK.</p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">“Siaga 98 berpendapat biasa di KPK dokumen bocor, sudah sejak tahun 2013, di Era Abraham Samad dan BW, ini ironi yang memalukan. Sekarang mantan pimpinan KPK demo KPK, sungguh luar biasa,” ujarnya heran.</p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\"><br></p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">Terkait aksi yang dilakukan oleh mantan pimpinan KPK, Hasanuddin menduga sangat kental dengan politik kepentingan, Politik Pemilu 2024 dan pergantian pimpinan KPK yang sebentar lagi dilakukan.</p><p open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51);\">“Ini, sudah menjadi kelompok politik tersendiri dalam pemberantasan korupsi. Kami sarankan, sebaiknya mereka masuk partai politik. Agar tersalurkan kehendaknya,” demikian Hasanuddin.</p>', '2023-04-11', '7-Download-Minecraft-Java-Edition.png', 'B'),
(4, 'PENERIMAAN PESERTA DIDIK BARU (PPDB) TAHUN PELAJARAN 2022/2023\r\n       ', '<h4 data-zanim-xs=\"{&quot;delay&quot;:0.1}\" style=\"margin-bottom: 1.333rem; font-family: Montserrat, Poppins, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-weight: 700; font-size: 1.77689rem; letter-spacing: -0.05rem; background-color: rgb(250, 250, 250); transform: translate(0px, 0px); opacity: 1;\"><span style=\"color: rgb(106, 106, 106); font-family: &quot;Open Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">INFORMASI MENGENAI PENERIMAAN PESERTA DIDIK BARU (PPDB)<br>SMK NEGERI 8 BANDAR LAMPUNG<br>TAHUN PELAJARAN 2022/2023</span><br></h4>', '2023-04-11', '414-FLAYER PPDB IG-01.jpg', 'P'),
(5, 'Kelulusan Siswa\r\n       ', '<p>Kelulusan Siswa SMKN 8 Bandar Lampung&nbsp;</p>', '2023-04-11', '346-kelulusan-01.jpg', 'P'),
(6, 'TES BAKAT MINAT\r\n       ', '<p><span style=\"font-weight: 600; color: rgb(106, 106, 106); font-family: &quot;Open Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">INFO TERBARU UNTUK TES BAKAT MINAT<br>SMK NEGERI 8 BANDAR LAMPUNG</span><br></p>', '2023-04-11', '323-PENGUMUMAN PPDB oke-01.jpg', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `logo_jurusan` varchar(255) NOT NULL,
  `thumbnail_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `keterangan`, `visi`, `misi`, `logo_jurusan`, `thumbnail_jurusan`) VALUES
(1, 'gaugdkafd', 'sadsd', 'afasfas', 'afasfas', '995-4.jpg', '995-3.jpg'),
(3, '', '<p>s</p>', '<p>a</p>', '<p>s</p>', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `nm_sekolah` varchar(50) NOT NULL,
  `nm_kepsek` varchar(50) NOT NULL,
  `sambutan` text NOT NULL,
  `link_profile` text NOT NULL,
  `foto_sambutan` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `sejarah` text NOT NULL,
  `identitas` text NOT NULL,
  `struktur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `nm_sekolah`, `nm_kepsek`, `sambutan`, `link_profile`, `foto_sambutan`, `visi`, `misi`, `tujuan`, `sejarah`, `identitas`, `struktur`) VALUES
(1, 'SMK NEGERI 8 BANDAR LAMPUNG', 'Fahry', 'Selamat datang di Portal SMK NEGERI 8 Bandar Lampung. Website ini sebagai sarana publikasi untuk memberikan Informasi dan gambaran SMK NEGERI 8 Bandar Lampung dalam melaksanakan pelayanan pendidikan sekolah menengah kejuruan .</span><br>\" cols=\"30\" rows=\"-3\"><span style=\"color: rgb(106, 106, 106); font-family: \"Open Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; text-align: center;\">Selamat datang di Portal SMK NEGERI 8 Bandar Lampung. Website ini sebagai sarana publikasi untuk memberikan Informasi dan gambaran SMK NEGERI 8 Bandar Lampung dalam melaksanakan pelayanan pendidikan sekolah menengah kejuruan .</span><br>', 'https://youtube.com/embed/e2a1J4W-sjg', '336-DSC00010.jpg', '<ul><li>Menjadi Lembaga diklat yang mampu menghasilkan lulusan yang kompeten dengan landasan penguasaan Teknologi Informasi dan berakhlak mulia.</li></ul>', '<ul><li>Mengembangkan nilai dan budaya sekolah yang seluruh warganya menjunjung tinggi nilai - nilai disiplin etika dan moral.</li><li>Mengembangkan lingkungan sekolah yang berwawasan lingkungan hidup dan sekolah sehat untuk memberikan rasa aman, nyaman dan menyenangkan.</li><li>Menyelenggarakan pendidikan berstandar untuk menghasilkan lulusan yang kompeten dan profesional dibidangnya dengan memanfaatkan perkembangan teknologi informasi secara optimal.</li></ul>', '<ul style=\"padding-left: 2rem; color: rgb(106, 106, 106); font-family: \"Open Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; text-align: justify; background-color: rgb(250, 250, 250);\"><li>Mewujudkan sekolah yang seluruh warganya menerapkan nilai dan budaya disiplin, beretika dan bermoral.</li><li>Mewujudkan sekolah yang berwawasan lingkungan hidup dan sekolah sehat dengan lingkingan yang aman, nyaman, dan meneyangkan</li><li>Mewujudkan sekolah dengan pengelolaan yang berpedoiman kepada 8 standart nasional pendidikan dengan memanfaatkan teknologi informasi untuk mendukung terciptanya lulusan tingkat menengah yang kompeten, mampu berkarir, mandiri dan mampu beradaptasi di lingkungan kerja sesuai bidangnya serta mampu menghadapi perubahan yang terjadi</li><li>Mengembangkan hubungan kerja yang harmonis baik di dalam lingkungan sekolah maupun dengan pihak luar sekolah</li></ul>', '<p style=\"color: rgb(106, 106, 106); font-family: \"Open Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; text-align: justify; background-color: rgb(250, 250, 250);\">SMK Negeri 8 Bandar Lampung berdiri berdasarkan Surat Keputusan Bapak Walikota Bandar Lampung, Nomor : 511/14.40/HK/2014 tanggal 11 April 2014 dan menempati eks Gedung SD Jalan Pramuka Raden Imba Kusuma Kemiling Raya, Bandar Lampung yang telah melaksanakan operasional pembelajaran. Pembukaan awal tahun Pelajaran 2014/2015 menerima sebanyak 228 orang untuk 4 jurusan yaitu : RPL , MM , AK ,AP</p><p style=\"color: rgb(106, 106, 106); font-family: \"Open Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; text-align: justify; background-color: rgb(250, 250, 250);\">Memasuki tahun kedua 2015/2016 yang sekarang menempati eks Gedung SMPN 26 Bandar Lampung beralamat di Jalan Imam Bonjol No.52 Kemiling, Bandar Lampung 35153 menambah 1 jurusan baru yaitu : Kimia Analis, total siswa kami saat itu sebanyak 554 orang siswa dengan 16 rombongan belajar. Pada bulan januari 2016 kami menempati lokasi baru Jalan Imam Bonjol No.52 Kemiling Raya Bandar Lampung 35153 . Dengan pelayanan yang baik kepada masyarakat serta fasilitas sekolah yang relatif tambah maju.</p><p style=\"color: rgb(106, 106, 106); font-family: \"Open Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; text-align: justify; background-color: rgb(250, 250, 250);\">Memasuki tahun ketiga pada Tahun Pelajaran 2017/2018 kami memiliki 1.122 orang siswa dengan 33 rombongan belajar, itupun kami telah menambah 2 Paket Keahlian baru yaitu : Kimia Industri dan Perbankan Syariah kini dengan tag line \"Pendidikan Untuk Kesejahteraan Kami Berjuang dan Mengabdi untuk mendidik masyarakat untuk kesejahteraan hidupnya di masa mendatang menuju kebahagian\".</p><span style=\"color: rgb(106, 106, 106); font-family: \"Open Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; text-align: justify; background-color: rgb(250, 250, 250);\">Sejarah SMKN 8 Bandar Lampung</span>', '<table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr></tbody></table>', '<p><img src=\"https://smkn8bl.sch.id/images/struktur-sekolah.png\" style=\"width: 278.667px;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `full_name`, `created_at`, `role`) VALUES
(2, 'a', '$2y$10$izJ7QNj55K7fHYfZmd2Tn.Vi9cq.wLOC82YB6rZIEP.erqiToASa2', 'a', '2023-04-11 10:25:13', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indeks untuk tabel `galeri_eskul`
--
ALTER TABLE `galeri_eskul`
  ADD PRIMARY KEY (`id_galeri_eskul`);

--
-- Indeks untuk tabel `galeri_jurusan`
--
ALTER TABLE `galeri_jurusan`
  ADD PRIMARY KEY (`id_galeri_jurusan`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri_eskul`
--
ALTER TABLE `galeri_eskul`
  MODIFY `id_galeri_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri_jurusan`
--
ALTER TABLE `galeri_jurusan`
  MODIFY `id_galeri_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
