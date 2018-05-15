-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 01:47 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama_file`, `ukuran_file`, `tipe_file`) VALUES
(11, 'test.png', 576.74, 'image/png'),
(12, '-2018-03-10-_Bingung_Jualan_Online_Titipin_id_Aja_1.jpg', 57.75, 'image/jpeg'),
(13, '85b74f74810f973b9f7bf250a212fc0b.jpg', 39.68, 'image/jpeg');

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
  `id_tag` int(11) NOT NULL,
  `PinFlag` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `isi_news`, `id_author`, `waktu_news`, `id_gambar`, `id_tag`, `PinFlag`) VALUES
(11, 'Jaga Kebersihan Hijab Agar Terhindar 5 Masalah Kulit Ini', '<p>Jakarta Ada banyak hal yang perlu kamu perhatikan lebih dalam saat memakai hijab, terutama soal kebersihannya. Apalagi jika kamu sering beraktivitas di luar ruangan, hijab jadi lebih mudah kotor karena terpapar oleh&nbsp;polusi, debu dan keringat. Meski kamu merasa hijab yang dikenakan&nbsp;belum kotor, coba deh teliti kembali, pasti ada banyak debu yang menempel di serat-serat kainnya. Belum lagi, keringat yang diproduksi kulit&nbsp;kepala pasti ikut menempel juga kan?&nbsp;Jika sehari&nbsp;atau dua hari&nbsp;lupa mencuci hijab, mungkin masih tak apa. Tapi, kalau terus-menerus&nbsp;malas mengganti dan membersihkan hijab,&nbsp;apa jadinya ya?</p>\r\n\r\n<p>Selain bau, kurang telaten dalam menjaga kebersihan hijab rupanya juga dapat memicu timbulnya&nbsp;jerawat. Dahi, pelipis dan pipi merupakan bagian wajah yang biasanya jadi sasaran &rsquo;empuk&rsquo; untuk jerawat bersarang. Meski kelihatannya tidak kotor, serat-serat kain hijab sebenarnya menyimpan banyak debu dan kuman. Apalagi jika kamu memiliki jenis wajah berminyak, debu pada kain hijab pun akan lebih mudah menempel ke&nbsp;kulit wajah.</p>\r\n\r\n<h2>Rambut Rontok</h2>\r\n\r\n<p>Masalah kerontokan rambut pada wanita berjilbab memang sudah lumrah terjadi. Percaya atau tidak, kondisi hijab yang lembap ternyata menjadi alasan utama mengapa para hijabers lebih sering mengalami&nbsp;masalah rambut rontok. Maka dari itu, untuk memastikan hijab sudah benar-benar kering, akan lebih baik jika kamu menyetrika dulu hijab yang sudah dijemur. Selain membuat hijab menjadi lebih rapi, menyetrika juga dapat memastikan kondisi hijab sudah benar-benar dalam kondisi kering.</p>\r\n\r\n<p>Baca juga :&nbsp;<a href="https://www.sociolla.com/141-hair-care" target="_blank">5 Penyebab Rambut Rontok yang Tak Terduga</a></p>\r\n\r\n<p><strong>Ketombe</strong></p>\r\n\r\n<p>Kurang bersih dalam membilas sisa deterjen yang menempel pada hijab rupanya dapat&nbsp;menyebabkan rambut berketombe. Sisa detergen yang menempel pada hijab lama kelamaan akan &lsquo;rontok&rsquo; dan menumpuk di kulit kepala. Tumpukkan kotoran inilah yang kemudian akan menyumbat kulit kepala hingga menyebabkan masalah ketombe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://www.liputan6.com/ramadan/read/3522952/jaga-kebersihan-hijab-agar-terhindar-5-masalah-kulit-ini">sumber</a></p>\r\n', 1, '2018-05-15 21:57:26', 11, 2, 0),
(12, 'Bingung Mau Jualan Online? Titipin.id Aja', '<p>Berawal dari keinginan untuk membangun sebuah startup sendiri, M. Kharisma Ramadhan, Mahasiswa Teknik Komputer Universitas Indonesia (UI) mengembangkan Titipan.id, sebuah startup yang menyediakan jasa penitipan jual beli di&nbsp;<em>e-commerce</em>&nbsp;dengan cara menyatukan sistem&nbsp;<em>consignment</em>&nbsp;(titip jual) dan jasa titip (titip beli).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Saat saya dan temen temen kumpul bareng, kita&nbsp;<em>sharing&nbsp;</em>mengenai masalah masing masing dan akhirnya tercetus ide untuk yang akhirnya menjadi landasan berdirinya Titipin.id,&rdquo; tutur Kharisma dalam &nbsp;wawancara dengan&nbsp;<em>Digination.id</em>, (Senin, 5/3).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kharisma menuturkan pernah ingin menjual barang miliknya secara&nbsp;<em>online</em>&nbsp;dan sudah memasang di beberapa situs, namun iklan tersebut tidak tampil atau terkubur oleh penjual skala besar. Di lain kasus, ia juga pernah ingin membeli sesuatu dari suatu&nbsp;<em>event</em>, namun karena terbatas jarak dan waktu ia menggunakan jasa titip konvensional (perseorangan lewat Instagram). Namun tidak beruntung, ia justru tertipu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Inspirasi berdirinya Titipin.id berawal dari keresahan pribadi. Dan ternyata, keresahan tersebut bukan hanya saya yang merasakan. Berdasarkan data dari tim Titipin.id (survei mandiri), sekitar 75% peserta merasa tidak aman dalam menggunakan jasa titip. Dan sekitar 70% pernah mengiklankan barang bekas miliknya di&nbsp;<em>marketplace</em>&nbsp;tapi tidak optimal. Oleh karena itu saya berpikir kenapa tidak saya menyatukan kedua ide tersebut dalam satu platform, karena basis kedua masalah tersebut adalah &quot;titip&quot;,&rdquo; terangnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Setelah melakukan validasi jasa selama kurang lebih tujuh bulan dengan dibantu teman-temannya, Kharisma pun memberanikan diri untuk memulai Titipin.id yang fokus memberikan dua layanan utama yaitu titip jual dan titip beli. Tidak disangka, baru tiga bulan berdiri yaitu pada Januari lalu, Titipan.id telah berhasil menyabet juara pertama di ajang Priceza Young Entrepreneurship Competition 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Bener bener nggak nyangka. Kami langsung ikut&nbsp;<em>event</em>&nbsp;ini dengan kondisi kami baru banget berdiri. Ditambah melihat kontestan lain yang sangat kompeten di bidangnya. Dan kami bener bener baru di dunia startup. Tapi Alhamdulillah berkat keyakinan, usaha, dan bantuan dari rekan rekan yang lain kami bisa mewujudkan apa yang tadinya kami anggap tidak mungkin menjadi mungkin,&rdquo; ujarnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mahasiwa yang masih duduk di semester empat tersebut mengungkapkan kendala yang dihadapi dalam membangun startup baginya adalah membagi waktu. &ldquo;Karena saya sebagai mahasiswa, apalagi Jurusan Teknik pasti disibukkan sekali dengan kuliah, sehingga sedikit kewalahan untuk membagi waktu dengan kuliah. Selain itu, yang jadi kendala adalah jarak. Saya dan tim terpisah lumayan jauh. Ada yang di Jogja, Malang, dan Semarang sehingga perlu teknik yang tepat dalam berkomunikasi dengan mereka,&rdquo; tuturnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ke depan, Kharisma berharap Titipin.id dapat berjalan sesuai dengan rencana, dapat membantu memecahkan masalah jual beli bagi masyarakat, dan dapat menghasilkan lapangan pekerjaan atau penghasilan yang memadai. Untuk itu, ia akan mulai dengan fokus terhadap masalah jual beli yang ada di Indonesia, dan berusaha menghadirkan pemecah masalah dengan konsep mempermudah dan tidak memberatkan dari segi apapun jalin relasi yang kuat dengan beberapa rekan yang berkaitan dengan usahanya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber:&nbsp;http://www.digination.id/updates/bingung-mau-jualan-online-titipin-id-aja</p>\r\n', 1, '2018-05-16 05:47:03', 12, 1, 1),
(13, 'Titip Jual di Titipin.id', '<p>KHARISMA Ramadhan terpapar kisah yang kurang memuaskan dengan penjualan daring. Temannya yang ingin menjual laptop bekas di market place tak kunjung bisa menjual dagangannya lantaran akunnya belum terverifikasi dan belum tergolong premium. Belum lagi, foto yang kurang menarik sehingga produk yang dijual tidak muncul dalam sistem pencarian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk itu, pada 2017 Kharisma bersama timnya merintis Titipin.id, solusi bagi para pelaku bisnis digital skala mikro termasuk UKM untuk bisa mengoptimalkan pengiklanan produk yang akan mereka jual secara daring termasuk lewat market place digital.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Saat ini Titipin.id masih dalam tahap pengembangan. Namun, mereka sudah mendapat pengakuan dari kalangan profesional, di antaranya saat Kharisma mengikutkan Titipin.id dalam kompetisi Priceza Young Entrepreneur Competition 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Priceza adalah mesin pencari belanja dan platform pembanding harga di Indonesia. Mendapat juara I dalam kompetisi tersebut, Titipin.id berhak menggondol hadiah Rp25 juta untuk melanjutkan pengembangan usaha Titipin.id. Yuk, simak petikan wawancara Muda dengan Kharisma.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Titipin.id kan tidak ubahnya platform jual beli, lalu apa yang membedakan dengan market place atau online shop yang sudah besar?</strong><br />\r\nBetul, Titipin.id merupakan salah satu platform jual beli online. Yang membedakan Titipin.id dengan platform jual beli online lainnya adalah kami lebih memfokuskan ke dua jasa, yaitu konsinyasi (titip jual) dan jasa titip (titip beli). Penerapan kedua fitur ini kami nilai tepat karena basis keduanya adalah titip sehingga terciptalah Titipin.id.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Apa sih, yang ingin kamu fokuskan dalam titipin.id?</strong><br />\r\nDalam Titipin.id, yang ingin saya fokuskan dan memang menjadi tujuan dari Titipin.id adalah agar bagaimana barang milik penjual menjadi cepat laku dan agar bagaimana pembeli dapat mendapatkan barang impiannya dalam waktu cepat, dari mana pun dan kapan pun. Selain itu, Titipin.id menjamin kemudahan akses dan juga kejelasan produk.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Penawaran dan fitur apa saja nantinya yang akan menjadi keunggulan Titipin.id?</strong><br />\r\nTerdapat dua fitur unggulan dari Titipin.id, yaitu titip jual dan titip beli. Titip jual adalah salah satu fitur untuk mempermudah penjual dalam menjual barang baru atau bekas miliknya. Teknik yang kami gunakan dalam titip jual adalah mass advertising pada seluruh market place yang ada dan juga pemasaran barang kepada rekanan pemborong.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Titip beli adalah salah satu fitur yang hampir serupa dengan jasa titip konvensional. Namun, yang membedakan adalah kami sudah menyediakan perwakilan tim yang terikat di seluruh daerah dan beberapa negara besar, sehingga tidak perlu menunggu pelancong untuk menuju daerah tersebut karena barang akan dibeli langsung dan dikirim jika ada pesanan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dengan menggunakan rekan yang terikat, risiko penipuan akan minim. Selain itu, titip beli melayani impor barang skala kecil baik dari Ebay, Amazon.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kedua fitur tersebut kami jamin kualitas barang dan pemaketannya. Kondisi barang akan sama ketika produk dikirim hingga diterima pembeli. Penggabungan dari kedua fitur tersebut dapat dibuat semacam garage sale, para penitip titip jual akan menitipkan barang pada Titipin.id dan kemudian akan dipajang, dijual, dan dipromosikan secara langsung ke penjual dalam waktu tertentu dan pada event tertentu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Siapa saja sih, nanti yang akan jadi partner kerja sama dengan Titipin.id?</strong><br />\r\nPartner kerja sama yang sudah kami jalin adalah rekan pemborong dari beberapa kategori barang, seperti gawai, IT, dan hobi. Terdapat kemungkinan nantinya kami akan menjalin relasi dengan market place lain untuk media pemasaran produk kami.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Awalnya kamu membuat Titipin.id karena resah saat menjual barang lewat online tak kunjung terjual, solusi apa yang kamu tawarkan di Titipin.id?</strong><br />\r\nSolusi yang saya tawarkan adalah titip jual. Beberapa faktor yang membuat barang lama untuk terjual antara lain faktor dokumentasi produk yang kurang baik, penjelasan kondisi produk yang kurang jelas, media market place yang digunakan hanya sedikit, dan akun yang digunakan masih belum premium sehingga iklan akan terkubur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Titipin.id hadir untuk menjadi solusi tersebut. Tim Titipin.id akan datang langsung ke tempat penjual untuk mendokumentasikan produk dengan standar kualitas foto (atau video review jika memungkinkan) yang baik. Selain itu, barang akan diiklankan tim Titipin.id ke seluruh market place yang ada di Indonesia atau dunia dengan akun yang sudah memiliki reputasi dan verified.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk selalu mengoptimalkan iklan, kami akan melakukan push barang setiap hari. Untuk mempercepat kemungkinan barang terjual, kami juga akan menawarkan barang ke pemborong rekanan kami. Jika barang terjual, tim Titipin.id yang akan melakukan packing sesuai dengan QC yang ada untuk menjamin kualitas barang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seluruh proses yang kami lakukan bersifat gratis bagi penjual sehingga tidak ada pemotongan harga jual bagi penjual. Biarkan Titipin.id yang bekerja dan Anda yang menikmati hasilnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kapan situs ini akan dirilis?</strong><br />\r\nTitipin.id saat ini masih dalam tahap pengembangan. Target rilis kami Lebaran nanti. Titipin.id terdiri atas 7 orang pada tim eksekutif dan 5 orang timnon eksekutif yang sudah terikat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ke depannya kami akan merekrut anggota tim kami dari beberapa daerah di Indonesia dan negara lain untuk meluaskan jaringan kami.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Butuh berapa lama sih untuk menggodok Titipin.id, dan bagaimana dengan pendanaannya?</strong><br />\r\nIde awal Titipin.id tercipta awal 2017 lalu. Kemudian saya melakukan validasi pasar untuk menemukan apakah solusi ini cocok untuk diterapkan di masyarakat. Kemudian di awal tahun 2018 Titipin.id berdiri. Pendanaan untuk awal ini masih dilakukan secara individu oleh anggota tim, dan juga dari modal awal yang didapatkan dari hadiah memenangi Priceza YEC 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Seberapa yakin kamu bersama Titipin.id akan bekerja?</strong><br />\r\nSaya sangat yakin Titipin.id akan digunakan masyarakat karena sifat masyarakat Indonesia saat ini suka belanja dan juga belum ada platform untuk membantu menjual/membeli produk yang dekat dengan masyarakat. Jika ada kendala atau tidak optimal, tentunya kami akan mengambil saran dari pengguna jasa kami yang nantinya akan dievaluasi tim dan jika akhirnya dapat menemukan inovasi baru, akan diterapkan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Harapan dan mimpi bareng Titipin.id?</strong><br />\r\nHarapan dan mimpi saya adalah Titipin.id dapat diminati masyarakat. Juga saya harap saya dapat membantu UKM-UKM Indonesia agar produk mereka dapat terjual di Indonesia atau pun di dunia dengan cara diiklankan melalui Titipin.id.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber:&nbsp;http://www.mediaindonesia.com/read/detail/159048-titip-jual-di-titipinid</p>\r\n', 1, '2018-05-16 05:49:11', 13, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE IF NOT EXISTS `news_tag` (
  `id` int(11) NOT NULL,
  `id_tag` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `password_pengguna`, `nama_pengguna`, `email_pengguna`, `no_hp_pengguna`, `role`) VALUES
(1, 'admin', '2f05dba7a113ad46a6b16fc1d65714a0bae5d162bb035dc613f5ad83837092b1', 'Admin Ganteng', 'admin@titipin.id', '088085083082', 3),
(3, 'dummy', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'user dummy', 'dummy@titipin.id', '085085083082', 1),
(4, 'dummy2', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'user dummy', 'dummy2@titipin.id', '085085083082', 1),
(5, 'test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'Choirul Mukadir', 'test@titipin.id', '213424324324324', 1);

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
(1, 'User Biasa', NULL),
(3, 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL,
  `nama_tag` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id`),
  ADD CONSTRAINT `news_ibfk_3` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

--
-- Constraints for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD CONSTRAINT `news_tag_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`),
  ADD CONSTRAINT `news_tag_ibfk_2` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
