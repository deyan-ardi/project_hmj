-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2020 at 10:29 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_if`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id_links` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `href` varchar(200) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_links`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id_links`, `title`, `icon`, `href`, `type`) VALUES
(9, 'Website', 'fas fa-globe', 'web/home', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Table structure for table `readme`
--

CREATE TABLE IF NOT EXISTS `readme` (
  `Kode` varchar(2) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `readme`
--

INSERT INTO `readme` (`Kode`, `Keterangan`) VALUES
('s1', 'Sistem HMJ dan Repositori'),
('s2', 'Sistem Inventaris');

-- --------------------------------------------------------

--
-- Table structure for table `s1_detail_hmj`
--

CREATE TABLE IF NOT EXISTS `s1_detail_hmj` (
  `id_detail_hmj` int(11) NOT NULL AUTO_INCREMENT,
  `id_hmj` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `deskripsi_bidang` text NOT NULL,
  `ketua_nama` varchar(50) NOT NULL,
  `ketua_foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_detail_hmj`),
  KEY `id_hmj` (`id_hmj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `s1_detail_hmj`
--

INSERT INTO `s1_detail_hmj` (`id_detail_hmj`, `id_hmj`, `nama_bidang`, `deskripsi_bidang`, `ketua_nama`, `ketua_foto`) VALUES
(7, 16, 'Pendidikan dan Penalaran ', '<p style="text-align:justify;">Bidang yang menaungi dan memfasilitasi mahasiswa Jurusan Teknik Informatika dalam bidang pendidikan dan penalaran, seperti PKM, PMW dan Jurnalistik. Bidang 1 HMJ Teknik Informatika terdiri atas dua sub-bidang yaitu Sub-Bidang Karya Ilmiah dan Sub-Bidang Jurnalistik</p>', ' Gede Budi Setiawan', '20200824140454.png'),
(8, 16, 'Minat dan Bakat ', '<p style="text-align:justify;">Bidang yang menaungi dan memfasilitasi Minat dan Bakat mahasiswa Teknik Informatika baik dibidang Akademik maupun non Akademik. Didalam bidang 2 terdapat beberapa sub bidang yang diantaranya adalah Sub Bidang Olaharaga dan Sub Bidang Seni yang didalamnya dibagi menjadi sub-sub bidang lainnya.</p>', 'Putu Erik Hendrawan', '20200824140548.png'),
(9, 16, 'Kesejahteraan Mahasiswa', '<p style="text-align:justify;">Bidang yang bertugas menaungi bagian kerumah tanggaan pada intern HMJ TI. Pada bidang 3 terdapat beberapa Sub bidang yakni Sub Bidang Kewirausahaan, Sub Bidang Inventaris, Sub Bidang Kesejahteraan Mahasiswa, dan Sub Bidang Suka Duka</p>', 'Rifki Nur Fauzi', '20200824140629.png'),
(10, 16, 'Pengabdian Masyarakat', '<p style="text-align:justify;">Bidang yang bertugas menaungi pengabdian kepada masyarakat. Pada Bidang 4 HMJ TI memiliki beberapa sub bidang didalamnya, diantaranya adalah Sub Bidang Humas, Sub Bidang Intern Kampus, dan Sub Bidang Masyarakat.</p>', 'Willy Yogantara Sidhi', '20200824140750.png'),
(11, 16, 'Teknologi', '<p style="text-align:justify;">Bidang yang menaungi aktivitas media informasi HMJ TI serta komunitas-komunitas yang bergerak dalam bidang TI. Pada bidang 5, terdapat beberapa sub bidang yakni Sub Bidang Informasi dan Komunikasi, Sub Bidang Komunitas TKJ dan Robotik, Sub Bidang Komunitas Programming, dan Sub Bidang Komunitas Multimedia.</p>', 'I Gede Riyan Ardi Darmawan', '20200824140840.png');

-- --------------------------------------------------------

--
-- Table structure for table `s1_detail_kegiatan`
--

CREATE TABLE IF NOT EXISTS `s1_detail_kegiatan` (
  `id_detail_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan_hmj` int(11) NOT NULL,
  `nama_repositori` varchar(50) NOT NULL,
  `deskripsi_repositori` text NOT NULL,
  `kode_repositori` varchar(255) DEFAULT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_detail_kegiatan`),
  KEY `id_kegiatan_hmj` (`id_kegiatan_hmj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `s1_detail_kegiatan`
--

INSERT INTO `s1_detail_kegiatan` (`id_detail_kegiatan`, `id_kegiatan_hmj`, `nama_repositori`, `deskripsi_repositori`, `kode_repositori`, `create_by`, `create_at`, `update_at`) VALUES
(13, 25, 'LPJ IT Mission #1', '<p>Berikut merupakan file LPJ IT Mission #1</p>\r\n', '01092020205117.pdf', 'Admin', '2020-09-01 20:51:17', '2020-09-01 20:51:17'),
(14, 25, 'Proposal Kegiatan IT Mission #1', '<p>Berikut merupakan file proposal kegiatan IT Mission #1</p>\r\n', '01092020205236.pdf', 'Admin', '2020-09-01 20:52:36', '2020-09-01 20:52:36'),
(15, 25, 'Surat Peminjaman Fasilitas', '<p style="text-align:justify">Berikut merupakan surat peminjaman fasilitas Zoom terhadap UPT TIK. Untuk Desain, dan Dokumentasi Kegiatan dapat mengunjungi Link Google Drive Berikut<br />\r\nLink : <a href="https://drive.google.com/drive/folders/1y1YrsfmgdYvMdNAFXvXfTAhqzl9B69ru?usp=sharing">Dokumentasi Kegiatan IT Mission #1</a></p>\r\n', '01092020205916.pdf', 'Admin', '2020-09-01 20:59:16', '2020-09-01 20:59:16'),
(16, 25, 'Notula Bimbingan Kegiatan - 1', '<p>Berikut merupakan Notula Bimbingan Kegiatan bersama Bapak Gede Aditra Pradnyana,S.Kom.,M.Kom</p>\r\n', '01092020210110.pdf', 'Admin', '2020-09-01 21:01:10', '2020-09-01 21:01:10'),
(17, 25, 'Notula Bimbingan Kegiatan - 2', '<p style="text-align:justify">Berikut merupakan Notula Bimbingan kegiatan bersama Ibu Dr.Luh Joni Erawati Dewi,S.T.,M.Pd</p>\r\n', '01092020210212.pdf', 'Admin', '2020-09-01 21:02:12', '2020-09-01 21:02:12'),
(18, 25, 'Notula Rapat Kepantiaan - 1', '<p>Berikut merupakan Notula Rapat Kepanitiaan - 1</p>\r\n', '01092020210328.pdf', 'Admin', '2020-09-01 21:03:28', '2020-09-01 21:03:28'),
(19, 25, 'Notula Rapat Kepantiaan - 2', '<p>Berikut merupakan Notula Rapat Kepanitiaan - 2</p>\r\n', '01092020210400.pdf', 'Admin', '2020-09-01 21:04:00', '2020-09-01 21:04:00'),
(20, 25, 'Notula Rapat Kepantiaan - 3', '<p>Berikut merupakan Notula Rapat Kegiatan - 3</p>\r\n', '01092020210429.pdf', 'Admin', '2020-09-01 21:04:29', '2020-09-01 21:04:29'),
(21, 25, 'Notula Rapat Kepantiaan - 4', '<p>Berikut merupakan Notula Rapat Kegiatan - 4</p>\r\n', '01092020210450.pdf', 'Admin', '2020-09-01 21:04:50', '2020-09-01 21:04:50'),
(22, 25, 'Notula Rapat Kepantiaan - 5', '<p>Berikut merupakan Notula Rapat Kegiatan - 5</p>\r\n', '01092020210512.pdf', 'Admin', '2020-09-01 21:05:12', '2020-09-01 21:05:12'),
(24, 24, 'LPJ Kegiatan TI Peduli ', '<p>Berikut merupakan file LPJ kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020084503.pdf', 'Willy Yogantara Sidhi', '2020-09-06 08:45:03', '2020-09-06 08:45:03'),
(25, 24, 'Proposal Kegiatan TI Peduli', '<p>Berikut merupakan proposal kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020085013.pdf', 'Willy Yogantara Sidhi', '2020-09-06 08:50:13', '2020-09-06 08:50:13'),
(26, 24, 'Surat Menghadiri Kegiatan TI Peduli', '<p>Berikut merupakan file surat-surat untuk menghadiri kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020092305.pdf', 'Willy Yogantara Sidhi  ?&gt;', '2020-09-06 09:23:05', '2020-09-06 10:24:47'),
(27, 24, 'Surat Izin  Melakukan Kegiatan TI Peduli', '<p>Berikut merupakan file surat izin&nbsp;kepada Kapolsek Singaraja untuk melakukan kegiatan TI Peduli Pencegahan COVID-19</p>\r\n', '06092020092802.pdf', 'Willy Yogantara Sidhi', '2020-09-06 09:28:02', '2020-09-06 09:28:02'),
(28, 24, 'Surat Permohonan Dana kegiatan TI Peduli', '<p>Berikut merupakan file surat permohonan dana untuk kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020093541.pdf', 'Willy Yogantara Sidhi', '2020-09-06 09:35:41', '2020-09-06 09:35:41'),
(31, 24, 'Notula Bimbingan kegiatan-1', '<p>Berikut merupakan Notula Bimbingan Kegiatan Bersama Bapak Gede Aditra Pradnyana,S.Kom.,M.Kom</p>\r\n', '06092020095908.pdf', 'Willy Yogantara Sidhi', '2020-09-06 09:59:08', '2020-09-06 09:59:08'),
(32, 24, 'Notula Rapat Kepanitian-1', '<p>Berikut Merupakan File Notula Rapat&nbsp; Kegiatan -1</p>\r\n', '06092020100119.pdf', 'Willy Yogantara Sidhi  ?&gt;', '2020-09-06 10:01:20', '2020-09-06 10:14:42'),
(33, 24, 'Notula Rapat Kepanitian-2', '<p>Berikut Merupakan File Notula Rapat Kegiatan-2</p>\r\n', '06092020100322.pdf', 'Willy Yogantara Sidhi  ?&gt;', '2020-09-06 10:03:22', '2020-09-06 10:05:53'),
(34, 24, 'Notula Rapat Kepanitian-3', '<p>Berikut Merupakan File Notula Rapat Kegiatan -3</p>\r\n', '06092020101155.pdf', 'Willy Yogantara Sidhi', '2020-09-06 10:11:55', '2020-09-06 10:11:55'),
(44, 26, 'Proposal Kegiatan IT Mission #2', '<p>Berikut merupakan Proposal Kegiatan IT Mission #2</p>\r\n', '10092020092251.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:22:51', '2020-09-10 09:22:51'),
(46, 26, 'Notula Bimbingan Kegiatan 2', '<p>Berikut merupakan Notula Bimbingan Kegiatan 2</p>\r\n', '10092020092432.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:24:32', '2020-09-10 09:24:32'),
(47, 26, 'Notula Bimbingan Kegiatan 1', '<p>Berikut merupakan Notula Bimbingan Kegiatan 1</p>\r\n', '10092020092510.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:25:10', '2020-09-10 09:25:10'),
(48, 26, 'Notula Rapat Panitia - 3', '<p>Berikut merupakan Notula Rapat Panitia 3</p>\r\n', '10092020092538.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:25:38', '2020-09-10 09:25:38'),
(49, 26, 'Notula Rapat Panitia - 2', '<p>Berikut merupakan Notula Rapat Panitia 2</p>\r\n', '10092020092602.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:26:02', '2020-09-10 09:26:02'),
(50, 26, 'Notula Rapat Panitia - 1', '<p>Berikut merupakan Notula Rapat Panitia 1</p>\r\n', '10092020092635.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:26:35', '2020-09-10 09:26:35'),
(51, 26, 'File LPJ IT Mission #2', '<p>Berikut merupakan File LPJ IT Mission #2</p>\r\n', '12092020101453.pdf', 'Rifki Nur Fauzi', '2020-09-12 10:14:53', '2020-09-12 10:14:53'),
(53, 26, 'Surat Peminjaman Fasilitas', '<p>Berikut merupakan surat peminjaman fasilitas Zoom terhadap UPT TIK. Untuk Desain dan Dokumentasi Kegiatan dapat mengunjugi Link Google Drive berikut.</p>\r\n\r\n<p>Link :&nbsp;<a href="https://drive.google.com/drive/u/0/folders/1OHQi5qsLZ3TFqaSiJNKFy_SFi2tddOgw">Dokumentasi Kegiatan IT Mission #2</a></p>\r\n', '12092020102805.pdf', 'Rifki Nur Fauzi', '2020-09-12 10:28:05', '2020-09-12 10:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `s1_hmj`
--

CREATE TABLE IF NOT EXISTS `s1_hmj` (
  `id_hmj` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmj` varchar(50) NOT NULL,
  `deskripsi_hmj` text NOT NULL,
  `ketua_hmj` varchar(50) NOT NULL,
  `ketua_foto` varchar(50) NOT NULL,
  `wakil_hmj` varchar(50) NOT NULL,
  `wakil_foto` varchar(50) NOT NULL,
  `visi_hmj` text NOT NULL,
  `misi_hmj` text NOT NULL,
  `vertikal_struktur_hmj` varchar(50) NOT NULL,
  `landscape_struktur_hmj` varchar(50) NOT NULL,
  `status_pakai` int(1) NOT NULL DEFAULT '0',
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_hmj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `s1_hmj`
--

INSERT INTO `s1_hmj` (`id_hmj`, `nama_hmj`, `deskripsi_hmj`, `ketua_hmj`, `ketua_foto`, `wakil_hmj`, `wakil_foto`, `visi_hmj`, `misi_hmj`, `vertikal_struktur_hmj`, `landscape_struktur_hmj`, `status_pakai`, `create_by`, `create_at`, `update_at`) VALUES
(16, 'HMJ TI Undiksha 2020-2021', '<p style="text-align:justify;">Repositori ini digunakan untuk menyimpan segala file yang berkaitan dengan kegiatan-kegiatan yang dilaksanakan oleh kepengurusan HMJ TI Undiksha 2020-2021</p>', 'Irfan Walhidayah', '1f7c6659dbd16ea69d52ce5af7536069.png', 'Putu Zasya Eka Satya Nugraha', '3df2cb61563fe9f31a3a633f92acf1e2.png', '<p style="text-align:justify;">Mewujudkan Himpunan Mahasiswa Jurusan Teknik Informatika Yang PATEN (Profesional, Aktif, Transparansi, Empati, dan Nasionalis) serta Berkualitas, Berkarakter, dan Unggul baik di bidang Akademik maupun non Akademik</p>', '<ol><li style="text-align:justify;">Menjadikan HMJ Teknik Informatika sebagai wadah untuk menampung aspirasi bagi seluruh Mahasiswa Teknik Informatika</li><li style="text-align:justify;">Bersinergi serta Mengayomi seluruh mahasiswa Teknik Informatika</li><li style="text-align:justify;">Menyelenggarakan program kerja yang menarik dan bermanfaat bagi seluruh Mahasiswa Teknik Informatika dengan tetap berpegang teguh pada Falsafah Tri Hita Karana</li><li style="text-align:justify;">Memfasilitasi serta mengapresiasi mahasiswa Teknik Informatika untuk meningkatkan serta mengembangkan minat dan bakat. Guna mewujudkan mahasiswa Teknik Informatika yang berprestasi baik dibidang akademik maupun non akademik</li><li style="text-align:justify;">Memegang teguh nilai kebersamaan dan kekeluargaan tanpa terjadi perselisihan baik di lingkungan internal maupun eksternal</li></ol>', 'db7fd6535ea7cddbc0d956b6c54d07a9.png', '6f7df0f103c4873dcd8a4d541549721f.png', 1, 'Admin', '2020-08-24 01:27:04', '2020-08-24 01:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `s1_informasi`
--

CREATE TABLE IF NOT EXISTS `s1_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `foto1_informasi` text NOT NULL,
  `foto2_informasi` text,
  `foto3_informasi` text,
  `video_informasi` text,
  `nama_kepengurusan` varchar(60) NOT NULL,
  `judul_informasi` varchar(40) NOT NULL,
  `kategori_informasi` varchar(20) NOT NULL,
  `konten_informasi` text NOT NULL,
  `file_informasi` text,
  `create_at` datetime NOT NULL,
  `create_by` varchar(60) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `s1_informasi`
--

INSERT INTO `s1_informasi` (`id_informasi`, `foto1_informasi`, `foto2_informasi`, `foto3_informasi`, `video_informasi`, `nama_kepengurusan`, `judul_informasi`, `kategori_informasi`, `konten_informasi`, `file_informasi`, `create_at`, `create_by`) VALUES
(27, 'ac9306276823bd80991f080982d6e42d.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Peluncuran Website HMJ TI Undiksha', 'Pengumuman', '<p style="text-align:justify">Hallo Infinity,<br />\r\nTepat pada hari ini, 1 September 2020 kami dari Bidang 5 Kepengurusan HMJ TI Undiksha 2020-2021 telah meluncurkan Website Resmi HMJ TI Undiksha yang memiliki alamat URL : <a href="http://if.undiksha.ac.id/web/home">http://if.undiksha.ac.id/web/home</a>. Dengan adanya website ini harapannya dapat mempermudah dalam pengelolaan Repositori kegiatan-kegiatan HMJ TI Undiksha yang telah dilaksanakan sebelumnya. Untuk informasi tentang website, dapat menghubungi beberapa kontak berikut. Terimakasih<br />\r\n<br />\r\nIG : hmj_ti.undiksha<br />\r\nEmail : hmjtiundiksha@gmail.com<br />\r\nFB : hmj_ti.undiksha<br />\r\n<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology</p>\r\n', NULL, '2020-09-01 20:33:31', 'Admin'),
(30, '147b5ea9bbf622137ecb67209b3bed5e.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Pelaksanaaan Perkuliahan Semester Ganjil', 'Pengumuman', '<p style="text-align:justify">Hallo Infinity,<br />\r\nBerikut merupakan informasi resmi pelaksanaan perkuliahan di semester ganjil tahun ajaran 2020-2021. Untuk file dapat didownload pada tombol Download yang terletak disebelah tanggal.<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology<br />\r\n#informasi_perkuliahan</p>\r\n', '04092020112349.pdf', '2020-09-04 11:23:49', 'Admin'),
(32, '40cab4d7802ebd0c1e4b158802f4a86d.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Group Maba Jurusan TI', 'Pengumuman', '<p style="text-align:justify">Hallo Infinity,<br />\r\nBagi seluruh mahasiswa baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan, Universitas Pendidikan Ganesha. Diharapkan agar segera join ke group Mahasiswa Baru Jurusan Teknik Informatika, berikut merupakan link groupnya :</p>\r\n\r\n<p>Telegram :<br />\r\n<a href="https://t.me/joinchat/LKiWvBsl4A2b_2g4BaMglA">https://t.me/joinchat/LKiWvBsl4A2b_2g4BaMglA</a></p>\r\n\r\n<p style="text-align:justify">Demikian informasi, terimakasih</p>\r\n\r\n<p style="text-align:justify"><br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology<br />\r\n#informasi<br />\r\n#mahasiswa_baru</p>\r\n', NULL, '2020-09-04 11:29:32', 'Admin'),
(34, 'bec24a1cb59294ebdd6752ca6b92c091.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Pengunggahan PKM', 'Pengumuman', '<p style="text-align:justify">Hallo Infinity,<br />\r\nBerikut merupakan informasi terkait pengumpulan PKM bagi Mahasiswa Aktif Fakultas Teknik dan Kejuruan Semseter 3,5,7. Diinformasikan kepada seluruh mahasiswa Fakultas Teknik dan Kejuruan untuk pengumpulan PKM diharapkan mengunggah PKM&nbsp; pada tanggal 8-9 September 2020<br />\r\n<br />\r\nLink pengunggahan PKM :<br />\r\n<a href="https://forms.gle/iReTg1UvUQFdkRaM8">https://forms.gle/iReTg1UvUQFdkRaM8</a><br />\r\n<br />\r\nDiharapkan tetap mengikuti panduan PKM 2020<br />\r\nJika masih ada yang ingin ditanyakan bisa hubungi kontak dibawah ini<br />\r\nRizal : +62 877-6590-2479<br />\r\nSekian dan terimakasih</p>\r\n\r\n<p style="text-align:justify">#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology<br />\r\n#pengumpulanpkm</p>\r\n', NULL, '2020-09-04 11:38:00', 'Admin'),
(37, '50920bd1fb25062d7ec980089f8a7e83.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'PMB Undiksha Tahun 2020', 'Pengumuman', '<p style="text-align:justify">Yth Calon Mahasiswa Baru Undiksha yang tidak lulus SMBJM<br />\r\n<br />\r\nBerdasarkan banyaknya permintaan calon mahasiswa yang tidak lulus jalur SMBJM untuk tetap kuliah di Undiksha, Undiksha memberikan kesempatan bagi mahasiswa tersebut untuk bergabung di Undiksha pada program studi tertentu sesuai dengan jurusan/program keahlian sekolah. Terkait dengan hal tersebut, bagi mahasiswa yang tertarik silakan login ke <a href="https://penerimaan.undiksha.ac.id/ujian-tulis">https://penerimaan.undiksha.ac.id/ujian-tulis</a> sesuai dengan nomor pendaftaran dan pin masing-masing. Mahasiswa bisa memilih program studi yang disediakan sesuai daya tampung dan akan ditutup jika sudah memenuhi kuota. Pendaftaran dan daftar ulang akan ditutup pada tanggal 5 September 2020 pukul 23.59 Wita.</p>\r\n\r\n<p style="text-align:justify">Demikian informasi yang kami sampaikan, atas perhatiannya&nbsp; kami ucapkan terima kasih.</p>\r\n\r\n<p style="text-align:justify">Panitia Penerimaan Mahasiswa Baru Undiksha 2020</p>\r\n', NULL, '2020-09-04 11:55:27', 'Admin'),
(41, '15ea290347456067696f4162eb0d151b.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Kelengkapan Administrasi', 'Pengumuman', '<p style="text-align:justify">Hallo Infinity,<br />\r\nDiumumkan kepada seluruh mahasiswa baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan. Berikut merupakan informasi resmi terkait dengan biaya kelengkapan administrasi bagi mahasiswa baru. Adapun rincian terkait dengan kelengkapan administrasi tersebut dapat didownload pada tombol download diatas. Untuk informasi dan pertanyaan lebih lanjut dapat menghubungi <em>official account</em> HMJ TI Undiksha<br />\r\nIG : @hmj_ti.undiksha<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#pengumuman_biaya_administrasi<br />\r\n#mahasiswa_baru_tahun_2020</p>\r\n', '08092020121729.pdf', '2020-09-08 12:17:29', 'Admin'),
(52, '90d0662b2e19fdeee5ac624fc5144b0c.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Twibbon Mahasiswa Baru', 'Pengumuman', '<p style="text-align:justify">Hallo Infinity,<br />\r\nDiumumkan kepada seluruh mahasiswa baru Undiksha tahun 2020, untuk memenuhi syarat&nbsp; bergabung bersama kami di Jurusan Teknik Informatika dalam kegiatan Pengenalan Kehidupan Fakultas Teknik dan Kejuruan Tahun 2020. Adik-adik diwajibkan untuk mengupload Twibbon dan diupload ke Instagram masing-masing dengan menyertakan caption yang menarik dengan format sebagai berikut :</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><em>&ldquo;(Motto Hidup Kalian)&rdquo;</em></p>\r\n\r\n<p style="text-align:justify"><em>Hallo perkenalkan nama saya&hellip;. dari prodi&hellip;&hellip;.<br />\r\nSaya bangga menjadi bagian dari Jurusan Teknik Informatika Universitas Pendidikan Ganesha Tahun 2020.</em></p>\r\n\r\n<p style="text-align:justify"><em>#include &lt;iostream&gt;<br />\r\nusing namespace std;<br />\r\nint main(){<br />\r\ncout&lt;&lt;&rdquo;I&rsquo;m ready to be a part of Infinity&rdquo;&lt;&lt;endl;<br />\r\nreturn 0;<br />\r\n}</em></p>\r\n\r\n<p style="text-align:justify"><em>@hmj_ti.undiksha</em></p>\r\n\r\n<p style="text-align:justify"><em>#INFINITY<br />\r\n#gotechnology<br />\r\n#TeknikInformatikaUndiksha2020</em></p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Untuk Twibbon dapat didownload pada link dibawah ini</p>\r\n\r\n<p style="text-align:justify"><a href="https://drive.google.com/file/d/14Ur_gQ561U30kGko5trIzmt4Sk_uU6hz/view?usp=sharing">Link Twibbon Jurusan Teknik Informatika</a></p>\r\n\r\n<p style="text-align:justify">Twibbon diupload paling lambat sebelum pelaksanaan Pengenalan Kehidupan Fakultas Teknik dan Kejuruan. Untuk informasi dan pertanyaan dapat menghubungi akun instagram HMJ Teknik Informatika.</p>\r\n\r\n<p style="text-align:justify">IG : @hmj_ti.undiksha<br />\r\nDemikian informasi, terimakasih<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#twibbon_mahasiswa_baru</p>\r\n', NULL, '2020-09-10 22:57:16', 'Admin'),
(54, '4248c4dd62e6e5b416ad34943135e608.png', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Penyusunan KRS Mahasiswa Baru', 'Pengumuman', '<p style="text-align:justify">Hallo infinity,</p>\r\n\r\n<p style="text-align:justify">Kami informasikan kepada seluruh Mahasiswa Baru Jurusan Teknik Informatika, Fakuktas Teknik dan Kejuruan bahwa Pelaksanaan Penyusunan Kartu Rencana Studi (KRS) untuk mahasiswa baru tahun 2020 dilaksanakan secara online melalui:<br />\r\n<a href="https://siakng.undiksha.ac.id">https://siakng.undiksha.ac.id</a><br />\r\nmulai tanggal 12 s/d 18 September 2020.</p>\r\n\r\n<p style="text-align:justify">Sehubungan dengan itu kami mohon bantuan Bapak/Ibu agar menginformasikan kepada mahasiswa baru dan dosen yang terlibat sebagai Pembimbing Akademik (PA) di lingkungan fakultas masing-masing untuk melakukan pembimbingan KRS secara daring kepada mahasiswa yang bersangkutan.</p>\r\n\r\n<p style="text-align:justify">Untuk surat edaran resmi terkait informasi ini, dapat didownload pada tombol download diatas.</p>\r\n\r\n<p style="text-align:justify">Sekian Informasi yang dapat kami sampaikan, Atas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p style="text-align:justify">#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTeknologi</p>\r\n', '13092020001811.pdf', '2020-09-13 00:18:11', 'Admin'),
(55, '03d926db7d12faccf6891235d20c950c.png', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Sosialisasi KRS dan Pengenalan Komunitas', 'Pengumuman', '<p style="text-align:justify">Hallo infinity,<br />\r\nDiinformasikan kepada seluruh Mahasiswa Baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan akan diadakan pelaksanaan sosialisasi KRS-an dan pengenalan Komunitas HMJ TI 2020 pada Senin, 14 September 2020 secara online dengan menggunakan google meet. Acara akan dibagi menjadi 2 sesi yaitu :<br />\r\n1. Sesi pertama untuk prodi SI dan MI dimulai pukul 09.45-12.15 WITA.<br />\r\n2. Sesi kedua untuk prodi PTI dan ILKOM dimulai pukul 12.45-15.15 WITA.<br />\r\n<br />\r\nMahasiswa wajib mengikuti acara sampai selesai dengan berpakaian rapi dan sopan (berkerah).</p>\r\n\r\n<p style="text-align:justify">Untuk rincian jadwal acara dapat didownload pada tombol download diatas<br />\r\nSekian Informasi yang dapat kami sampaikan, Remember to stay safe and healthy<br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p style="text-align:justify">#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTechnology</p>\r\n', '13092020003322.pdf', '2020-09-13 00:33:22', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s1_kegiatan_hmj`
--

CREATE TABLE IF NOT EXISTS `s1_kegiatan_hmj` (
  `id_kegiatan_hmj` int(11) NOT NULL AUTO_INCREMENT,
  `id_hmj` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_kegiatan_hmj`),
  KEY `id_hmj` (`id_hmj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `s1_kegiatan_hmj`
--

INSERT INTO `s1_kegiatan_hmj` (`id_kegiatan_hmj`, `id_hmj`, `nama_kegiatan`, `deskripsi_kegiatan`, `create_by`, `create_at`, `update_at`) VALUES
(24, 16, 'TI Peduli Pencegahan Penyebaran COVID-19', '<p style="text-align:justify"><span style="color:hsl(0, 0%, 0%)">Program Kerja ini merupakan program kerja yang dilaksanakan oleh bidang 4 HMJ TI Undiksha. TI Peduli Pencagahan Penyebaran COVID merupakan program kerja yang dilaksanakan HMJ TI Undiksha 2020-2021, program kerja ini dilaksanakan dengan cara membagikan masker dan hand sanitizer gratis kepada masyarakat di sekitaran Kota Singaraja.</span></p>\r\n', 'Admin', '2020-09-01 20:18:23', '2020-09-01 20:18:23'),
(25, 16, 'IT Mission #1', '<p style="text-align:justify"><span style="color:hsl(0, 0%, 0%)">IT Mission #1 adalah kegiatan Webinar yang diadakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika. IT Mission #1 ini diadakan pada tanggal 28 Juni 2020 melalui platform Zoom. Terdapat 3 pemateri utama pada IT Mission #1 ini, yakni Bapak Anditya, S.T, Bapak Ida Bagus Nyoman Pascima, S.Pd., M.Cs. dan Bapak I Made Edy Listartha, S.Kom., M.Kom. Kegiatan ini sudah berjalan dengan baik.</span></p>\r\n', 'I Gede Riyan Ardi Darmawan', '2020-09-01 20:18:59', '2020-09-06 20:26:16'),
(26, 16, 'IT Mission #2', '<p style="text-align:justify"><span style="color:hsl(0, 0%, 0%)">IT Mission #2 adalah kegiatan Webinar yang diadakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika. IT Mission #2 ini diadakan pada tanggal 18 Agustus 2018 melalui platform Zoom. Pada IT Mission #2 ini, HMJ TI Undiksha bekerja sama dengan pihak DANA Wallet Indonesia. Terdapat 4 pemateri pada IT Mission #2 ini, dimana pemateri ini didatangkan langsung dari pihak DANA </span></p>\r\n', 'Admin', '2020-09-01 20:21:01', '2020-09-01 20:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `s2_barang`
--

CREATE TABLE IF NOT EXISTS `s2_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan_barang` int(11) NOT NULL,
  `nama_pengisi` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `s2_detail_peminjaman`
--

CREATE TABLE IF NOT EXISTS `s2_detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `harga_pinjaman` bigint(20) NOT NULL,
  PRIMARY KEY (`id_detail_peminjaman`),
  KEY `id_peminjaman` (`id_peminjaman`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

--
-- Triggers `s2_detail_peminjaman`
--
DROP TRIGGER IF EXISTS `Peminjaman`;
DELIMITER //
CREATE TRIGGER `Peminjaman` AFTER INSERT ON `s2_detail_peminjaman`
 FOR EACH ROW BEGIN
	UPDATE s2_barang SET jumlah_barang = jumlah_barang - NEW.jumlah_pinjaman
    WHERE id_barang = NEW.id_barang;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `Pengembalian`;
DELIMITER //
CREATE TRIGGER `Pengembalian` AFTER DELETE ON `s2_detail_peminjaman`
 FOR EACH ROW BEGIN
	UPDATE s2_barang
    SET jumlah_barang = jumlah_barang + OLD.jumlah_pinjaman WHERE s2_barang.id_barang = OLD.id_barang;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `s2_organisasi`
--

CREATE TABLE IF NOT EXISTS `s2_organisasi` (
  `id_organisasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_organisasi` varchar(100) NOT NULL,
  `ketua_organisasi` varchar(50) NOT NULL,
  `notelp_organisasi` varchar(13) NOT NULL,
  PRIMARY KEY (`id_organisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `s2_peminjam`
--

CREATE TABLE IF NOT EXISTS `s2_peminjam` (
  `id_peminjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_organisasi` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `nim_peminjam` int(10) NOT NULL,
  `notelp_peminjam` varchar(13) NOT NULL,
  `email_peminjam` varchar(50) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_peminjam`),
  KEY `id_organisasi` (`id_organisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `s2_peminjaman`
--

CREATE TABLE IF NOT EXISTS `s2_peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_peminjam` int(11) NOT NULL,
  `status_peminjaman` int(1) NOT NULL,
  `total_peminjaman` bigint(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `id_peminjam` (`id_peminjam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

--
-- Triggers `s2_peminjaman`
--
DROP TRIGGER IF EXISTS `Selesai_pinjam`;
DELIMITER //
CREATE TRIGGER `Selesai_pinjam` AFTER UPDATE ON `s2_peminjaman`
 FOR EACH ROW BEGIN
	DELETE FROM s2_detail_peminjaman WHERE OLD.id_peminjaman = s2_peminjaman.id_peminjaman AND s2_peminjaman.status_peminjaman = 2;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$zotV59v60G..Z2mko/zs0uGOQ6gAs9FyMaPckq5OvwfdtLGi6eNQ2', 'hmjtiundiksha@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1599927204, 1, 'Admin', '1815091037', 'Administrator', '081915656865'),
(4, '127.0.0.1', NULL, '$2y$10$g/F9rFfU0BI6v592ioVx1u7Mu8DzSrRdSotsIguNj8fPneI9lki4m', 'irfan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366481, NULL, 1, 'IRFAN WALHIDAYAH', '1815091002', 'Ketua', '08983197636'),
(5, '127.0.0.1', NULL, '$2y$10$dEJhYDARQm2KLVc3eTRNFOW3riiKQx7SJkNtu6IVosZouEjs43nym', 'budi.setiawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366533, NULL, 1, 'Gede Budi Setiawan', '1815051083', 'Koor Bidang 1', '081339289008'),
(6, '127.0.0.1', NULL, '$2y$10$z4HMcCz642GGdQPGu33Q8e0.u5Ll.NT4E6jo.n9xED5vCiv/Rzqre', 'riyan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366575, 1599953016, 1, 'I Gede Riyan Ardi Darmawan', '1815091037', 'Koor Bidang 5', '081915656865'),
(7, '127.0.0.1', NULL, '$2y$10$SJfWbTDGZKBYEp5WI1.Dde1DAoq/46Ps9djX7LRe8OMvSnaCf8qtS', 'willy@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366639, 1599352556, 1, 'Willy Yogantara Sidhi', '1815091063', 'Koor Bidang 4', '087853652474'),
(8, '127.0.0.1', NULL, '$2y$10$t90cFNvkVrmnqhWHMSuj7OrSy6Q97DE7l2yXXVu7H3gwX9xGwZ7EC', 'primadwi84@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366719, NULL, 1, 'Dwi Prima Handayani Putri', '1915101012', 'Bendahara II', '081246342145'),
(9, '127.0.0.1', NULL, '$2y$10$Ei8Psz3K2AemekBhdei7cuaDT5Dwcldb47DrmfVqAnkycLjpE7b1e', 'komangdianary23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366786, NULL, 1, 'Komang Dian Ary Kristiadi', '1815051040', 'Sekretaris I', '081339320140'),
(10, '127.0.0.1', NULL, '$2y$10$SlIzdi2xRdhVBrSn21Peb.g..fA1V8KEEvV.7xhuc3W7imRqpu4dm', 'gustiaditya123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366830, NULL, 1, 'Gusti Aditya Trisna Murti', '1815051092', 'Bendahara I', '0895395013615'),
(11, '127.0.0.1', NULL, '$2y$10$rnOqYpYSj4AU8xCCeFPRhe2Mld/.52Y.1SXBHIOmL/84Ls.TATEMS', 'bagus.alviantara@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366877, 1598486220, 1, 'I Made Bagus Alviantara', '1915091037', 'Koor Prodi SI', '082236608104'),
(12, '127.0.0.1', NULL, '$2y$10$OKhDauuCVTkRkLvhykaMJuQWlz7d3Uya40SuoDhszirGWuqcBDsd.', 'beny.indrawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366921, NULL, 1, 'Gede Beny Indrawan', '1915101002', 'Koor Prodi ILKOM', '087761750517'),
(13, '127.0.0.1', NULL, '$2y$10$GgBXaa793c8eXSCroLAoZeWI2l03E53j8SjmhEzfXZy07Ooj9MDvS', 'zasyasatya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366964, 1598532547, 1, 'Putu Zasya Eka Satya Nugraha', '1915051024', 'Wakil Ketua', '081238824262'),
(14, '127.0.0.1', NULL, '$2y$10$HcFAFtNne78jsu.cy78Ix.yqZb2z6pnv3b2oB4cjwPI4ojcUMrCbq', 'anisamarta17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367010, NULL, 1, 'Ni Putu Anisa Marta Widyasari', '1915091024', 'Sekretaris II', '081235170840'),
(15, '127.0.0.1', NULL, '$2y$10$EcWpGLCa908k7FfAihqe2.Q3vjZtx7.UfIq4vL7zhhUiOuQ7pE0Wm', 'rifki@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367059, 1599876672, 1, 'Rifki Nur Fauzi', '1815091048', 'Koor Bidang 3', '08980138994'),
(16, '127.0.0.1', NULL, '$2y$10$HSg8e7NjHVjaqXtWINX8WOLIQQBYhwgWORvjbtVyzDZvsuHMc6URG', 'ega@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367098, 1598490549, 1, 'I Putu Ega Suwidi Darma', '1805021012', 'Koor Prodi MI', '08523774442'),
(17, '127.0.0.1', NULL, '$2y$10$.PbI5DpKftREFzSKRj/zjOrlwLx.LeTueNni.he7fAKUeVxgQpKOK', 'erik@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367131, NULL, 1, 'Putu Erik Hendrawan', '1815051052', 'Koor Bidang 2', '08980244454'),
(18, '127.0.0.1', NULL, '$2y$10$bDcwWvWvkxwGuXCTKC7hjuQSRUFGIKRCtc2LwdOW5OlKqBq1C9M.K', 'dwiki.anggara49@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367167, NULL, 1, 'I Made Dwiki Pasek Anggara', '1815051078', 'Koor Prodi PTI', '089606254400');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(22, 1, 1),
(6, 4, 2),
(7, 5, 2),
(8, 6, 2),
(9, 7, 2),
(10, 8, 2),
(11, 9, 2),
(12, 10, 2),
(13, 11, 2),
(14, 12, 2),
(15, 13, 2),
(16, 14, 2),
(17, 15, 2),
(18, 16, 2),
(19, 17, 2),
(20, 18, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  ADD CONSTRAINT `s1_detail_hmj_ibfk_1` FOREIGN KEY (`id_hmj`) REFERENCES `s1_hmj` (`id_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  ADD CONSTRAINT `s1_detail_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan_hmj`) REFERENCES `s1_kegiatan_hmj` (`id_kegiatan_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  ADD CONSTRAINT `s1_kegiatan_hmj_ibfk_2` FOREIGN KEY (`id_hmj`) REFERENCES `s1_hmj` (`id_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  ADD CONSTRAINT `s2_detail_peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `s2_barang` (`id_barang`),
  ADD CONSTRAINT `s2_detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `s2_peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  ADD CONSTRAINT `s2_peminjam_ibfk_2` FOREIGN KEY (`id_organisasi`) REFERENCES `s2_organisasi` (`id_organisasi`);

--
-- Constraints for table `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  ADD CONSTRAINT `s2_peminjaman_ibfk_1` FOREIGN KEY (`id_peminjam`) REFERENCES `s2_peminjam` (`id_peminjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
