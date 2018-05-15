-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2018 pada 17.07
-- Versi Server: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titipinid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama_file`, `ukuran_file`, `tipe_file`) VALUES
(7, 'aaa.png', 95.52, 'image/png'),
(8, 'a.png', 52.76, 'image/png'),
(9, 'aldo.png', 572.76, 'image/png'),
(10, '5f0d861017c17066de2e2405637fa246.jpg', 85.24, 'image/jpeg'),
(11, 'test.png', 576.74, 'image/png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `judul_news` text,
  `isi_news` text,
  `id_author` int(11) DEFAULT NULL,
  `waktu_news` datetime DEFAULT NULL,
  `id_gambar` int(11) DEFAULT NULL,
  `id_tag` int(11) NOT NULL,
  `PinFlag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `isi_news`, `id_author`, `waktu_news`, `id_gambar`, `id_tag`, `PinFlag`) VALUES
(7, 'News', '<p><strong>TRIBUNNEWS.COM, DEPOK -</strong> Mabes Polri melalui Karo Penmas Divisi Humas Polri Brigjen Pol Mohammad Iqbal menyatakan lima orang anggota polisi yang tewas di Mako Brimob adalah Bhayangkara terbaik Polri.</p>\r\n\r\n<p>Lima orang polisi ini diketahui tewas dalam penyanderaan oleh tahanan teroris serta kerusuhan di Rutan Mako Brimob, sejak Selasa (8/5/2018) malam.</p>\r\n\r\n<p>&quot;Lima petugas kami, rekan kami yang gugur adalah petugas terbaik, kita berbelasungkawa. Sekali lagi (mereka) adalah Bhayangkara terbaik Kepolisian Negara RI,&quot; ujar Iqbal di Mako Brimob, Depok, Jawa Barat, Rabu (9/5/2018).</p>\r\n\r\n<p><strong>Baca: <a href=\"http://www.tribunnews.com/nasional/2018/05/09/puluhan-orang-diduga-keluarga-korban-rusuh-rutan-mako-brimob-datangi-instalasi-forensik-rs-polri\">Puluhan Orang Diduga Keluarga Korban Rusuh Rutan Mako Brimob Datangi Instalasi Forensik RS Polri</a></strong></p>\r\n\r\n<p>Saat ini, masih ada satu orang anggota yang masih disandera oleh tahanan.</p>\r\n\r\n<p>Sehingga, Iqbal mengatakan pihaknya terus berupaya melakukan negosiasi agar sandera bebas.</p>\r\n\r\n<p>Upaya negosiasi dilakukan juga agar korban tak bertambah lebih banyak, dan Polri mengaku menghargai Hak Asasi Manusia (HAM).</p>\r\n\r\n<p>&quot;Kami tidak ingin ada korban yang lebih banyak, kami menghargai hak asasi manusia (HAM), maka dari itu kami terus upayakan maksimal negosisasi dengan perwakilan perwakilan mereka napi teroris sampai detik ini,&quot; kata Iqbal.&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"http://www.tribunnews.com\">Tribunnews.com</a> dengan judul Polri Sebut 5 Polisi Tewas sebagai Bhayangkara Terbaik, <a href=\"http://www.tribunnews.com/nasional/2018/05/09/polri-sebut-5-polisi-tewas-sebagai-bhayangkara-terbaik\">http://www.tribunnews.com/nasional/2018/05/09/polri-sebut-5-polisi-tewas-sebagai-bhayangkara-terbaik</a>.<br />\r\nPenulis: Vincentius Jyestha Candraditya<br />\r\nEditor: Hasanudin Aco</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2018-05-14 13:50:48', 7, 3, 0),
(8, 'Coba Baru', '<p><strong>TRIBUNNEWS.COM, SURABAYA -</strong> Serangan <a href=\"http://www.tribunnews.com/tag/bom\">bom</a> di 3 gereja di <a href=\"http://www.tribunnews.com/tag/surabaya\">Surabaya</a>, Jawa Timur, hampir bersamaan.</p>\r\n\r\n<p>Kejadian pertama di Gereja Katolik Santa Maria Tak Bercela Jl Ngagel Madya pukul 06.30 WIB, disusul ledakan <a href=\"http://www.tribunnews.com/tag/bom\">bom</a> di GKI Jl Diponegoro pukul 07.30 Wib dan kemurian ledakan di Gereja Pantekosta Jl Arjuno Pukul 07.53 WIB.</p>\r\n\r\n<p>&nbsp;Jumlah korban meninggal dunia akibat ledakan <a href=\"http://www.tribunnews.com/tag/bom\">bom</a> di tiga gereja di <a href=\"http://www.tribunnews.com/tag/surabaya\">Surabaya</a> terus bertambah.</p>\r\n\r\n<p>Sudah ada 10 orang dipastikan tewas dalam peristiwa memilukan di <a href=\"http://www.tribunnews.com/tag/surabaya\">Surabaya</a>, Minggu (13/5/2018).</p>\r\n\r\n<p>Hingga pukul 12.15 WIB, sudah ada 10 orang tewas dan 41 orang dirawat di berbagai rumah sakit di <a href=\"http://www.tribunnews.com/tag/surabaya\">Surabaya</a>.</p>\r\n\r\n<p>Salah satu korban meninggal itu diketahui bernama&nbsp;Aloysius Bayu Rendra Wardhana.</p>\r\n\r\n<p>Bayu Rendra adalah koordinator relawan keamanan Gereja Santa Maria Tak Bercela (SMTB).</p>\r\n\r\n<p>Sesaat sebelum kejadian Bayu Rendra diketahui menghadang motor yang digunakan teroris untuk masuk ke dalam gereja.</p>\r\n\r\n<p>Saat dihadang Bayu itulah teroris itu meledakkan diri.&nbsp;Tubuh Bayu hancur tak bersisa.</p>\r\n\r\n<p>Namun seandainya tak dihadang Bayu teroris itu akan meledakkan diri di dalam gereja dan akan menimbulkan banyak korban.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"http://www.tribunnews.com\">Tribunnews.com</a> dengan judul Kisah Heroik Aloysius Bayu yang Halangi Teroris Masuk Gereja, Relakan Tubuh Hancur Dibom, <a href=\"http://www.tribunnews.com/regional/2018/05/13/kisah-heroik-aloysius-bayu-yang-halangi-teroris-masuk-gereja-relakan-tubuh-hancur-dibom\">http://www.tribunnews.com/regional/2018/05/13/kisah-heroik-aloysius-bayu-yang-halangi-teroris-masuk-gereja-relakan-tubuh-hancur-dibom</a>.<br />\r\n<br />\r\nEditor: Sugiyarto</p>\r\n', 1, '2018-05-14 21:30:32', 8, 1, 0),
(9, 'test baru', '<p><strong>TRIBUNNEWS.COM -</strong> Satu demi satu fakta Dita Supriyanto, pelaku <a href=\"http://www.tribunnews.com/tag/bom-bunuh-diri\">bom bunuh diri</a> yang menyerang tiga gereja di <a href=\"http://www.tribunnews.com/tag/surabaya\">Surabaya</a>, Minggu (13/5/2018), terungkap.</p>\r\n\r\n<p>Tak sendiri, aksi tersebut juga dilakukan Dita dengan istri dan empat anaknya. Mereka adalah Puji Kuswati (43) istri Dita, dan empat anak mereka yakni Yusuf Fadhil (18), Firman Halim (16), Fadhila Sari (12) serta Famela Rizqita (9).</p>\r\n\r\n<p>Dita dan keluarga tinggal di kawasan Wonorejo, Rungkut, <a href=\"http://www.tribunnews.com/tag/surabaya\">Surabaya</a>.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"http://www.tribunnews.com\">Tribunnews.com</a> dengan judul Duh, Adik Kelas Pelaku Bom di Surabaya Ungkap, Bibit Radikal Dita Supriyanto Tertanam Sejak SMA, <a href=\"http://www.tribunnews.com/techno/2018/05/14/duh-adik-kelas-pelaku-bom-di-surabaya-ungkap-bibit-radikal-dita-supriyanto-tertanam-sejak-sma\">http://www.tribunnews.com/techno/2018/05/14/duh-adik-kelas-pelaku-bom-di-surabaya-ungkap-bibit-radikal-dita-supriyanto-tertanam-sejak-sma</a>.<br />\r\nPenulis: Sugiyarto</p>\r\n', 1, '2018-05-15 08:23:59', 9, 1, 1),
(10, 'apa deh', '<p><strong>TRIBUNNEWS.COM, SEMARANG -</strong> Berita duka datang dari <a href=\"http://www.tribunnews.com/tag/kabupaten-tegal\">Kabupaten Tegal</a>.</p>\r\n\r\n<p>Bupati petahana, <a href=\"http://www.tribunnews.com/tag/ki-enthus-susmono\">Ki Enthus Susmono</a> meninggal dunia, Senin (14/5/2018) sekitar pukul 19.15 WIB.</p>\r\n\r\n<p>Berita ini dibagikan melalui <a href=\"http://www.tribunnews.com/tag/pesan-singkat\">pesan singkat</a> kepada wartawan.</p>\r\n\r\n<p><em>Inna lillahi wa ina ilaihi rojijn... telah pulang ke Rahmat Allah, har ini 14 Mei 2018sekitar pukul 19.15 WIB saudara kita, seniman besar Tegal Jawa Tengah, Indonesia <a href=\"http://www.tribunnews.com/tag/ki-enthus-susmono\">Ki Enthus Susmono</a>. Mohon dimaafkan atas segala kesalahannya, semoga Khusnul Kotimah Amin... ya Rob. Mohon dishare terimakasih. Wassalam.</em></p>\r\n\r\n<p>Belum diketahui penyebab meninggalnya seniman besar Tegal Jawa Tengah tersebut.(*)</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"http://www.tribunnews.com\">Tribunnews.com</a> dengan judul BREAKING NEWS : Bupati Tegal Petahana Ki Enthus Susmono Meninggal Dunia, <a href=\"http://www.tribunnews.com/regional/2018/05/14/breaking-news-bupati-tegal-petahana-ki-enthus-susmono-meninggal-dunia\">http://www.tribunnews.com/regional/2018/05/14/breaking-news-bupati-tegal-petahana-ki-enthus-susmono-meninggal-dunia</a>.<br />\r\n<br />\r\nEditor: Eko Sutriyanto</p>\r\n', 1, '2018-05-15 08:24:33', 10, 1, 0),
(11, 'Jaga Kebersihan Hijab Agar Terhindar 5 Masalah Kulit Ini', '<p>Jakarta Ada banyak hal yang perlu kamu perhatikan lebih dalam saat memakai hijab, terutama soal kebersihannya. Apalagi jika kamu sering beraktivitas di luar ruangan, hijab jadi lebih mudah kotor karena terpapar oleh&nbsp;polusi, debu dan keringat. Meski kamu merasa hijab yang dikenakan&nbsp;belum kotor, coba deh teliti kembali, pasti ada banyak debu yang menempel di serat-serat kainnya. Belum lagi, keringat yang diproduksi kulit&nbsp;kepala pasti ikut menempel juga kan?&nbsp;Jika sehari&nbsp;atau dua hari&nbsp;lupa mencuci hijab, mungkin masih tak apa. Tapi, kalau terus-menerus&nbsp;malas mengganti dan membersihkan hijab,&nbsp;apa jadinya ya?</p>\r\n\r\n<p>Selain bau, kurang telaten dalam menjaga kebersihan hijab rupanya juga dapat memicu timbulnya&nbsp;jerawat. Dahi, pelipis dan pipi merupakan bagian wajah yang biasanya jadi sasaran &rsquo;empuk&rsquo; untuk jerawat bersarang. Meski kelihatannya tidak kotor, serat-serat kain hijab sebenarnya menyimpan banyak debu dan kuman. Apalagi jika kamu memiliki jenis wajah berminyak, debu pada kain hijab pun akan lebih mudah menempel ke&nbsp;kulit wajah.</p>\r\n\r\n<h2>Rambut Rontok</h2>\r\n\r\n<p>Masalah kerontokan rambut pada wanita berjilbab memang sudah lumrah terjadi. Percaya atau tidak, kondisi hijab yang lembap ternyata menjadi alasan utama mengapa para hijabers lebih sering mengalami&nbsp;masalah rambut rontok. Maka dari itu, untuk memastikan hijab sudah benar-benar kering, akan lebih baik jika kamu menyetrika dulu hijab yang sudah dijemur. Selain membuat hijab menjadi lebih rapi, menyetrika juga dapat memastikan kondisi hijab sudah benar-benar dalam kondisi kering.</p>\r\n\r\n<p>Baca juga :&nbsp;<a href=\"https://www.sociolla.com/141-hair-care\" target=\"_blank\">5 Penyebab Rambut Rontok yang Tak Terduga</a></p>\r\n\r\n<p><strong>Ketombe</strong></p>\r\n\r\n<p>Kurang bersih dalam membilas sisa deterjen yang menempel pada hijab rupanya dapat&nbsp;menyebabkan rambut berketombe. Sisa detergen yang menempel pada hijab lama kelamaan akan &lsquo;rontok&rsquo; dan menumpuk di kulit kepala. Tumpukkan kotoran inilah yang kemudian akan menyumbat kulit kepala hingga menyebabkan masalah ketombe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.liputan6.com/ramadan/read/3522952/jaga-kebersihan-hijab-agar-terhindar-5-masalah-kulit-ini\">sumber</a></p>\r\n', 1, '2018-05-15 21:57:26', 11, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_tag`
--

CREATE TABLE `news_tag` (
  `id` int(11) NOT NULL,
  `id_tag` int(11) DEFAULT NULL,
  `id_news` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(30) DEFAULT NULL,
  `password_pengguna` varchar(64) DEFAULT NULL,
  `nama_pengguna` varchar(45) DEFAULT NULL,
  `email_pengguna` varchar(45) DEFAULT NULL,
  `no_hp_pengguna` varchar(20) DEFAULT NULL,
  `role` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `password_pengguna`, `nama_pengguna`, `email_pengguna`, `no_hp_pengguna`, `role`) VALUES
(1, 'admin', '2f05dba7a113ad46a6b16fc1d65714a0bae5d162bb035dc613f5ad83837092b1', 'Admin Ganteng', 'admin@titipin.id', '088085083082', 3),
(3, 'dummy', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'user dummy', 'dummy@titipin.id', '085085083082', 1),
(4, 'dummy2', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'user dummy', 'dummy2@titipin.id', '085085083082', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(2) NOT NULL,
  `nama_role` varchar(20) DEFAULT NULL,
  `dekripsi_role` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `dekripsi_role`) VALUES
(1, 'User Biasa', NULL),
(3, 'Admin', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `nama_tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`) VALUES
(1, 'TEKNOLOGI'),
(2, 'KESEHATAN'),
(3, 'PENDIDIKAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `ID_Author` (`id_author`),
  ADD KEY `id_gambar` (`id_gambar`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Indexes for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_topic` (`id_tag`),
  ADD KEY `id_news` (`id_news`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`ID_Author`) REFERENCES `pengguna` (`id_Pengguna`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id`),
  ADD CONSTRAINT `news_ibfk_3` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

--
-- Ketidakleluasaan untuk tabel `news_tag`
--
ALTER TABLE `news_tag`
  ADD CONSTRAINT `news_tag_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`),
  ADD CONSTRAINT `news_tag_ibfk_2` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
