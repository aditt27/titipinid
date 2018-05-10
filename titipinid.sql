-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2018 pada 21.53
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
(7, 'aaa.png', 95.52, 'image/png');

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
  `id_gambar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `isi_news`, `id_author`, `waktu_news`, `id_gambar`) VALUES
(7, 'News', '<p><strong>TRIBUNNEWS.COM, DEPOK -</strong> Karo Penmas Divisi Humas Polri Brigjen Pol <a href=\"http://www.tribunnews.com/tag/mohammad-iqbal\">Mohammad Iqbal</a> memastikan adanya korban tewas akibat kerusuhan tahanan di <a href=\"http://www.tribunnews.com/tag/mako-brimob\">Mako Brimob</a>, Kelapa Dua, <a href=\"http://www.tribunnews.com/tag/depok\">Depok</a>, Jawa Barat.</p>\r\n\r\n<p>Iqbal menyebut 6 orang tewas dalam kerusuhan itu.</p>\r\n\r\n<p>5 Orang korban tewas berasal dari Korps Bhayangkara.</p>\r\n\r\n<p>&quot;Kami sampaikan bahwa insiden ini memakan korban jiwa, ada 5 rekan kami gugur,&quot; ujar Iqbal kepada wartawan di depan <a href=\"http://www.tribunnews.com/tag/mako-brimob\">Mako Brimob</a>, <a href=\"http://www.tribunnews.com/tag/depok\">Depok</a>, Jawa Barat,&nbsp; Rabu (9/5/2018).</p>\r\n\r\n<p>Identitas polisi yang gugur tersebut adalah&nbsp;Bripda Syukron Fadhli,&nbsp;Ipda Yudi Rospuji,&nbsp;Briptu Fandy,&nbsp;Bripka Denny, dan&nbsp;Bripka Iwan Sarjana.&nbsp;</p>\r\n\r\n<p>Sementara, 1 orang lagi merupakan tahanan di <a href=\"http://www.tribunnews.com/tag/mako-brimob\">Mako Brimob</a>.</p>\r\n\r\n<p>Tahanan ini bernama&nbsp;Abu Ibrahim atau biasa dikenal dengan nama Beny Syamsu.</p>\r\n\r\n<p>Teroris dari Pekanbaru itu&nbsp;tewas lantaran sempat mengancam dan merebut senjata petugas.<br />\r\n<br />\r\n&quot;1 Orang tewas mengancam petugas dan mengambil senjata,&quot; imbuh Iqbal.</p>\r\n\r\n<p>Sebelumnya,&nbsp;keributan di <a href=\"http://www.tribunnews.com/tag/mako-brimob\">Mako Brimob</a> Kelapa Dua, <a href=\"http://www.tribunnews.com/tag/depok\">Depok</a>, diduga bermula karena persoalan makanan titipan untuk narapidana.</p>\r\n\r\n<p>Napi mengamuk dan terlibat bentrok dengan aparat kepolisian, Selasa (8/5/2018) malam.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"http://www.tribunnews.com\">Tribunnews.com</a> dengan judul BREAKING NEWS: 5 Polisi dan 1 Tahanan Tewas dalam Kerusuhan Mako Brimob, <a href=\"http://www.tribunnews.com/nasional/2018/05/09/breaking-news-5-polisi-dan-1-tahanan-tewas-dalam-kerusuhan-mako-brimob\">http://www.tribunnews.com/nasional/2018/05/09/breaking-news-5-polisi-dan-1-tahanan-tewas-dalam-kerusuhan-mako-brimob</a>.<br />\r\nPenulis: Vincentius Jyestha Candraditya<br />\r\nEditor: Johnson Simanjuntak</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2018-05-11 02:50:13', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(30) DEFAULT NULL,
  `password_pengguna` varchar(45) DEFAULT NULL,
  `nama_pengguna` varchar(45) DEFAULT NULL,
  `email_pengguna` varchar(45) DEFAULT NULL,
  `no_hp_pengguna` varchar(20) DEFAULT NULL,
  `role` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `password_pengguna`, `nama_pengguna`, `email_pengguna`, `no_hp_pengguna`, `role`) VALUES
(1, 'admin', '2d3dad3fe132f61229c8359c81e251b0', 'Admin Ganteng', 'admin@titipin.id', NULL, 3);

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
(3, 'Admin', NULL);

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
  ADD KEY `id_gambar` (`id_gambar`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`ID_Author`) REFERENCES `pengguna` (`id_Pengguna`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
