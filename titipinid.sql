-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 06:24 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama_file`, `ukuran_file`, `tipe_file`) VALUES
(7, 'aaa.png', 95.52, 'image/png'),
(8, 'a.png', 52.76, 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL,
  `judul_news` text,
  `isi_news` text,
  `id_author` int(11) DEFAULT NULL,
  `waktu_news` datetime DEFAULT NULL,
  `id_gambar` int(11) DEFAULT NULL,
  `PinFlag` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `isi_news`, `id_author`, `waktu_news`, `id_gambar`, `PinFlag`) VALUES
(7, 'News', '<p><strong>TRIBUNNEWS.COM, DEPOK -</strong> Mabes Polri melalui Karo Penmas Divisi Humas Polri Brigjen Pol Mohammad Iqbal menyatakan lima orang anggota polisi yang tewas di Mako Brimob adalah Bhayangkara terbaik Polri.</p>\r\n\r\n<p>Lima orang polisi ini diketahui tewas dalam penyanderaan oleh tahanan teroris serta kerusuhan di Rutan Mako Brimob, sejak Selasa (8/5/2018) malam.</p>\r\n\r\n<p>&quot;Lima petugas kami, rekan kami yang gugur adalah petugas terbaik, kita berbelasungkawa. Sekali lagi (mereka) adalah Bhayangkara terbaik Kepolisian Negara RI,&quot; ujar Iqbal di Mako Brimob, Depok, Jawa Barat, Rabu (9/5/2018).</p>\r\n\r\n<p><strong>Baca: <a href="http://www.tribunnews.com/nasional/2018/05/09/puluhan-orang-diduga-keluarga-korban-rusuh-rutan-mako-brimob-datangi-instalasi-forensik-rs-polri">Puluhan Orang Diduga Keluarga Korban Rusuh Rutan Mako Brimob Datangi Instalasi Forensik RS Polri</a></strong></p>\r\n\r\n<p>Saat ini, masih ada satu orang anggota yang masih disandera oleh tahanan.</p>\r\n\r\n<p>Sehingga, Iqbal mengatakan pihaknya terus berupaya melakukan negosiasi agar sandera bebas.</p>\r\n\r\n<p>Upaya negosiasi dilakukan juga agar korban tak bertambah lebih banyak, dan Polri mengaku menghargai Hak Asasi Manusia (HAM).</p>\r\n\r\n<p>&quot;Kami tidak ingin ada korban yang lebih banyak, kami menghargai hak asasi manusia (HAM), maka dari itu kami terus upayakan maksimal negosisasi dengan perwakilan perwakilan mereka napi teroris sampai detik ini,&quot; kata Iqbal.&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href="http://www.tribunnews.com">Tribunnews.com</a> dengan judul Polri Sebut 5 Polisi Tewas sebagai Bhayangkara Terbaik, <a href="http://www.tribunnews.com/nasional/2018/05/09/polri-sebut-5-polisi-tewas-sebagai-bhayangkara-terbaik">http://www.tribunnews.com/nasional/2018/05/09/polri-sebut-5-polisi-tewas-sebagai-bhayangkara-terbaik</a>.<br />\r\nPenulis: Vincentius Jyestha Candraditya<br />\r\nEditor: Hasanudin Aco</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2018-05-14 13:50:48', 7, 0),
(8, 'Coba Baru', '<p><strong>TRIBUNNEWS.COM, SURABAYA -</strong> Serangan <a href="http://www.tribunnews.com/tag/bom">bom</a> di 3 gereja di <a href="http://www.tribunnews.com/tag/surabaya">Surabaya</a>, Jawa Timur, hampir bersamaan.</p>\r\n\r\n<p>Kejadian pertama di Gereja Katolik Santa Maria Tak Bercela Jl Ngagel Madya pukul 06.30 WIB, disusul ledakan <a href="http://www.tribunnews.com/tag/bom">bom</a> di GKI Jl Diponegoro pukul 07.30 Wib dan kemurian ledakan di Gereja Pantekosta Jl Arjuno Pukul 07.53 WIB.</p>\r\n\r\n<p>&nbsp;Jumlah korban meninggal dunia akibat ledakan <a href="http://www.tribunnews.com/tag/bom">bom</a> di tiga gereja di <a href="http://www.tribunnews.com/tag/surabaya">Surabaya</a> terus bertambah.</p>\r\n\r\n<p>Sudah ada 10 orang dipastikan tewas dalam peristiwa memilukan di <a href="http://www.tribunnews.com/tag/surabaya">Surabaya</a>, Minggu (13/5/2018).</p>\r\n\r\n<p>Hingga pukul 12.15 WIB, sudah ada 10 orang tewas dan 41 orang dirawat di berbagai rumah sakit di <a href="http://www.tribunnews.com/tag/surabaya">Surabaya</a>.</p>\r\n\r\n<p>Salah satu korban meninggal itu diketahui bernama&nbsp;Aloysius Bayu Rendra Wardhana.</p>\r\n\r\n<p>Bayu Rendra adalah koordinator relawan keamanan Gereja Santa Maria Tak Bercela (SMTB).</p>\r\n\r\n<p>Sesaat sebelum kejadian Bayu Rendra diketahui menghadang motor yang digunakan teroris untuk masuk ke dalam gereja.</p>\r\n\r\n<p>Saat dihadang Bayu itulah teroris itu meledakkan diri.&nbsp;Tubuh Bayu hancur tak bersisa.</p>\r\n\r\n<p>Namun seandainya tak dihadang Bayu teroris itu akan meledakkan diri di dalam gereja dan akan menimbulkan banyak korban.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href="http://www.tribunnews.com">Tribunnews.com</a> dengan judul Kisah Heroik Aloysius Bayu yang Halangi Teroris Masuk Gereja, Relakan Tubuh Hancur Dibom, <a href="http://www.tribunnews.com/regional/2018/05/13/kisah-heroik-aloysius-bayu-yang-halangi-teroris-masuk-gereja-relakan-tubuh-hancur-dibom">http://www.tribunnews.com/regional/2018/05/13/kisah-heroik-aloysius-bayu-yang-halangi-teroris-masuk-gereja-relakan-tubuh-hancur-dibom</a>.<br />\r\n<br />\r\nEditor: Sugiyarto</p>\r\n', 1, '2018-05-14 21:30:32', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_topic`
--

CREATE TABLE IF NOT EXISTS `news_topic` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) DEFAULT NULL,
  `id_news` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(30) DEFAULT NULL,
  `password_pengguna` varchar(64) DEFAULT NULL,
  `nama_pengguna` varchar(45) DEFAULT NULL,
  `email_pengguna` varchar(45) DEFAULT NULL,
  `no_hp_pengguna` varchar(20) DEFAULT NULL,
  `role` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `password_pengguna`, `nama_pengguna`, `email_pengguna`, `no_hp_pengguna`, `role`) VALUES
(1, 'admin', '2f05dba7a113ad46a6b16fc1d65714a0bae5d162bb035dc613f5ad83837092b1', 'Admin Ganteng', 'admin@titipin.id', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(2) NOT NULL,
  `nama_role` varchar(20) DEFAULT NULL,
  `dekripsi_role` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `dekripsi_role`) VALUES
(3, 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL,
  `nama_topic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `news_topic`
--
ALTER TABLE `news_topic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_topic` (`id_topic`),
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
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id`);

--
-- Constraints for table `news_topic`
--
ALTER TABLE `news_topic`
  ADD CONSTRAINT `news_topic_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`),
  ADD CONSTRAINT `news_topic_ibfk_2` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
