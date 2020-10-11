-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2020 at 05:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_hmj_fixed`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'inti_hmj', 'General User'),
(3, 'pemilih', 'pemilih digunakan untuk di sistem evoting'),
(4, 'koordinator_sie', 'koordinator sie digunakan untuk di sistem eors'),
(5, 'inti_kepanitiaan', 'inti kepanitiaan digunakan untuk sistem eors');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_pilihan` int(11) NOT NULL,
  `nama_pilihan` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_pilihan`, `nama_pilihan`, `create_at`) VALUES
(38, 'Ketua', '2020-09-17 23:14:39'),
(39, 'Wakil Ketua', '2020-09-17 23:14:39'),
(40, 'Bidang 1', '2020-09-17 23:15:32'),
(41, 'Bidang 2', '2020-09-17 23:15:32'),
(42, 'Bidang 3', '2020-09-17 23:15:32'),
(43, 'Bidang 4', '2020-09-17 23:15:32'),
(44, 'Bidang 5', '2020-09-17 23:15:32'),
(45, 'Panitia Inti Lainnya', '2020-09-17 23:16:09'),
(46, 'Administrator', '2020-09-17 23:18:02'),
(47, 'Sie Acara', '2020-09-26 23:58:42'),
(48, 'Sie Humas', '2020-09-26 23:58:49'),
(49, 'Sie Expo', '2020-09-26 23:58:58'),
(50, 'Sie Penggalian Dana', '2020-10-07 12:45:59'),
(51, 'Sie Publikasi dan Dokumentasi', '2020-10-07 12:46:37'),
(52, 'Sie Teknologi dan Informasi', '2020-10-07 12:43:58'),
(53, 'Sie Kesekretariatan', '2020-10-07 12:44:16'),
(54, 'Sie Pendaftaran', '2020-10-07 12:44:29'),
(55, 'Sie MGS', '2020-10-07 12:44:43'),
(56, 'Sie Social Event', '2020-10-07 12:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id_links` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `href` varchar(200) NOT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id_links`, `title`, `icon`, `href`, `type`) VALUES
(9, 'Website', 'fas fa-globe', 'web/home', 'main'),
(10, 'E-ORS', 'fas fa-users', 'eors/home', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `readme`
--

CREATE TABLE `readme` (
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

CREATE TABLE `s1_detail_hmj` (
  `id_detail_hmj` int(11) NOT NULL,
  `id_hmj` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `deskripsi_bidang` text NOT NULL,
  `ketua_nama` varchar(50) NOT NULL,
  `ketua_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1_detail_hmj`
--

INSERT INTO `s1_detail_hmj` (`id_detail_hmj`, `id_hmj`, `nama_bidang`, `deskripsi_bidang`, `ketua_nama`, `ketua_foto`) VALUES
(7, 16, 'Pendidikan dan Penalaran ', '<p style=\"text-align:justify\">Bidang yang menaungi dan memfasilitasi mahasiswa Jurusan Teknik Informatika dalam bidang pendidikan dan penalaran, seperti PKM, PMW dan Jurnalistik. Bidang 1 HMJ Teknik Informatika terdiri atas dua sub-bidang yaitu Sub-Bidang Karya Ilmiah dan Sub-Bidang Jurnalistik</p>\r\n', ' Gede Budi Setiawan', '20200824140454.png'),
(8, 16, 'Minat dan Bakat ', '<p style=\"text-align:justify;\">Bidang yang menaungi dan memfasilitasi Minat dan Bakat mahasiswa Teknik Informatika baik dibidang Akademik maupun non Akademik. Didalam bidang 2 terdapat beberapa sub bidang yang diantaranya adalah Sub Bidang Olaharaga dan Sub Bidang Seni yang didalamnya dibagi menjadi sub-sub bidang lainnya.</p>', 'Putu Erik Hendrawan', '20200824140548.png'),
(9, 16, 'Kesejahteraan Mahasiswa', '<p style=\"text-align:justify;\">Bidang yang bertugas menaungi bagian kerumah tanggaan pada intern HMJ TI. Pada bidang 3 terdapat beberapa Sub bidang yakni Sub Bidang Kewirausahaan, Sub Bidang Inventaris, Sub Bidang Kesejahteraan Mahasiswa, dan Sub Bidang Suka Duka</p>', 'Rifki Nur Fauzi', '20200824140629.png'),
(10, 16, 'Pengabdian Masyarakat', '<p style=\"text-align:justify;\">Bidang yang bertugas menaungi pengabdian kepada masyarakat. Pada Bidang 4 HMJ TI memiliki beberapa sub bidang didalamnya, diantaranya adalah Sub Bidang Humas, Sub Bidang Intern Kampus, dan Sub Bidang Masyarakat.</p>', 'Willy Yogantara Sidhi', '20200824140750.png'),
(11, 16, 'Teknologi', '<p style=\"text-align:justify;\">Bidang yang menaungi aktivitas media informasi HMJ TI serta komunitas-komunitas yang bergerak dalam bidang TI. Pada bidang 5, terdapat beberapa sub bidang yakni Sub Bidang Informasi dan Komunikasi, Sub Bidang Komunitas TKJ dan Robotik, Sub Bidang Komunitas Programming, dan Sub Bidang Komunitas Multimedia.</p>', 'I Gede Riyan Ardi Darmawan', '20200824140840.png');

-- --------------------------------------------------------

--
-- Table structure for table `s1_detail_kegiatan`
--

CREATE TABLE `s1_detail_kegiatan` (
  `id_detail_kegiatan` int(11) NOT NULL,
  `id_kegiatan_hmj` int(11) NOT NULL,
  `nama_repositori` varchar(50) NOT NULL,
  `deskripsi_repositori` text NOT NULL,
  `kode_repositori` varchar(255) DEFAULT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1_detail_kegiatan`
--

INSERT INTO `s1_detail_kegiatan` (`id_detail_kegiatan`, `id_kegiatan_hmj`, `nama_repositori`, `deskripsi_repositori`, `kode_repositori`, `create_by`, `create_at`, `update_at`) VALUES
(13, 25, 'LPJ IT Mission #1', '<p>Berikut merupakan file LPJ IT Mission #1</p>\r\n', '01092020205117.pdf', 'Admin', '2020-09-01 20:51:17', '2020-09-01 20:51:17'),
(14, 25, 'Proposal Kegiatan IT Mission #1', '<p>Berikut merupakan file proposal kegiatan IT Mission #1</p>\r\n', '01092020205236.pdf', 'Admin', '2020-09-01 20:52:36', '2020-09-01 20:52:36'),
(15, 25, 'Surat Peminjaman Fasilitas', '<p style=\"text-align:justify\">Berikut merupakan surat peminjaman fasilitas Zoom terhadap UPT TIK. Untuk Desain, dan Dokumentasi Kegiatan dapat mengunjungi Link Google Drive Berikut<br />\r\nLink : <a href=\"https://drive.google.com/drive/folders/1y1YrsfmgdYvMdNAFXvXfTAhqzl9B69ru?usp=sharing\">Dokumentasi Kegiatan IT Mission #1</a></p>\r\n', '01092020205916.pdf', 'Admin', '2020-09-01 20:59:16', '2020-09-01 20:59:16'),
(16, 25, 'Notula Bimbingan Kegiatan - 1', '<p>Berikut merupakan Notula Bimbingan Kegiatan bersama Bapak Gede Aditra Pradnyana,S.Kom.,M.Kom</p>\r\n', '01092020210110.pdf', 'Admin', '2020-09-01 21:01:10', '2020-09-01 21:01:10'),
(17, 25, 'Notula Bimbingan Kegiatan - 2', '<p style=\"text-align:justify\">Berikut merupakan Notula Bimbingan kegiatan bersama Ibu Dr.Luh Joni Erawati Dewi,S.T.,M.Pd</p>\r\n', '01092020210212.pdf', 'Admin', '2020-09-01 21:02:12', '2020-09-01 21:02:12'),
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
(53, 26, 'Surat Peminjaman Fasilitas', '<p>Berikut merupakan surat peminjaman fasilitas Zoom terhadap UPT TIK. Untuk Desain dan Dokumentasi Kegiatan dapat mengunjugi Link Google Drive berikut.</p>\r\n\r\n<p>Link :&nbsp;<a href=\"https://drive.google.com/drive/u/0/folders/1OHQi5qsLZ3TFqaSiJNKFy_SFi2tddOgw\">Dokumentasi Kegiatan IT Mission #2</a></p>\r\n', '12092020102805.pdf', 'Rifki Nur Fauzi', '2020-09-12 10:28:05', '2020-09-12 10:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `s1_hmj`
--

CREATE TABLE `s1_hmj` (
  `id_hmj` int(11) NOT NULL,
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
  `status_pakai` int(1) NOT NULL DEFAULT 0,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1_hmj`
--

INSERT INTO `s1_hmj` (`id_hmj`, `nama_hmj`, `deskripsi_hmj`, `ketua_hmj`, `ketua_foto`, `wakil_hmj`, `wakil_foto`, `visi_hmj`, `misi_hmj`, `vertikal_struktur_hmj`, `landscape_struktur_hmj`, `status_pakai`, `create_by`, `create_at`, `update_at`) VALUES
(16, 'HMJ TI Undiksha 2020-2021', '<p style=\"text-align:justify;\">Repositori ini digunakan untuk menyimpan segala file yang berkaitan dengan kegiatan-kegiatan yang dilaksanakan oleh kepengurusan HMJ TI Undiksha 2020-2021</p>', 'Irfan Walhidayah', '1f7c6659dbd16ea69d52ce5af7536069.png', 'Putu Zasya Eka Satya Nugraha', '3df2cb61563fe9f31a3a633f92acf1e2.png', '<p style=\"text-align:justify;\">Mewujudkan Himpunan Mahasiswa Jurusan Teknik Informatika Yang PATEN (Profesional, Aktif, Transparansi, Empati, dan Nasionalis) serta Berkualitas, Berkarakter, dan Unggul baik di bidang Akademik maupun non Akademik</p>', '<ol><li style=\"text-align:justify;\">Menjadikan HMJ Teknik Informatika sebagai wadah untuk menampung aspirasi bagi seluruh Mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Bersinergi serta Mengayomi seluruh mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Menyelenggarakan program kerja yang menarik dan bermanfaat bagi seluruh Mahasiswa Teknik Informatika dengan tetap berpegang teguh pada Falsafah Tri Hita Karana</li><li style=\"text-align:justify;\">Memfasilitasi serta mengapresiasi mahasiswa Teknik Informatika untuk meningkatkan serta mengembangkan minat dan bakat. Guna mewujudkan mahasiswa Teknik Informatika yang berprestasi baik dibidang akademik maupun non akademik</li><li style=\"text-align:justify;\">Memegang teguh nilai kebersamaan dan kekeluargaan tanpa terjadi perselisihan baik di lingkungan internal maupun eksternal</li></ol>', 'db7fd6535ea7cddbc0d956b6c54d07a9.png', '6f7df0f103c4873dcd8a4d541549721f.png', 1, 'Admin', '2020-08-24 01:27:04', '2020-08-24 01:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `s1_informasi`
--

CREATE TABLE `s1_informasi` (
  `id_informasi` int(11) NOT NULL,
  `foto1_informasi` text NOT NULL,
  `foto2_informasi` text DEFAULT NULL,
  `foto3_informasi` text DEFAULT NULL,
  `video_informasi` text DEFAULT NULL,
  `nama_kepengurusan` varchar(60) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `kategori_informasi` varchar(20) NOT NULL,
  `konten_informasi` text NOT NULL,
  `file_informasi` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1_informasi`
--

INSERT INTO `s1_informasi` (`id_informasi`, `foto1_informasi`, `foto2_informasi`, `foto3_informasi`, `video_informasi`, `nama_kepengurusan`, `judul_informasi`, `kategori_informasi`, `konten_informasi`, `file_informasi`, `create_at`, `create_by`) VALUES
(27, 'ac9306276823bd80991f080982d6e42d.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Peluncuran Website HMJ TI Undiksha', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nTepat pada hari ini, 1 September 2020 kami dari Bidang 5 Kepengurusan HMJ TI Undiksha 2020-2021 telah meluncurkan Website Resmi HMJ TI Undiksha yang memiliki alamat URL : <a href=\"http://if.undiksha.ac.id/web/home\">http://if.undiksha.ac.id/web/home</a>. Dengan adanya website ini harapannya dapat mempermudah dalam pengelolaan Repositori kegiatan-kegiatan HMJ TI Undiksha yang telah dilaksanakan sebelumnya. Untuk informasi tentang website, dapat menghubungi beberapa kontak berikut. Terimakasih<br />\r\n<br />\r\nIG : hmj_ti.undiksha<br />\r\nEmail : hmjtiundiksha@gmail.com<br />\r\nFB : hmj_ti.undiksha<br />\r\n<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology</p>\r\n', NULL, '2020-09-01 20:33:31', 'Admin'),
(30, '147b5ea9bbf622137ecb67209b3bed5e.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Pelaksanaaan Perkuliahan Semester Ganjil', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nBerikut merupakan informasi resmi pelaksanaan perkuliahan di semester ganjil tahun ajaran 2020-2021. Untuk file dapat didownload pada tombol Download yang terletak disebelah tanggal.<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology<br />\r\n#informasi_perkuliahan</p>\r\n', '04092020112349.pdf', '2020-09-04 11:23:49', 'Admin'),
(32, '40cab4d7802ebd0c1e4b158802f4a86d.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Group Maba Jurusan TI', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nBagi seluruh mahasiswa baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan, Universitas Pendidikan Ganesha. Diharapkan agar segera join ke group Mahasiswa Baru Jurusan Teknik Informatika, berikut merupakan link groupnya :</p>\r\n\r\n<p>Telegram :<br />\r\n<a href=\"https://t.me/joinchat/LKiWvBsl4A2b_2g4BaMglA\">https://t.me/joinchat/LKiWvBsl4A2b_2g4BaMglA</a></p>\r\n\r\n<p style=\"text-align:justify\">Demikian informasi, terimakasih</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology<br />\r\n#informasi<br />\r\n#mahasiswa_baru</p>\r\n', NULL, '2020-09-04 11:29:32', 'Admin'),
(34, 'bec24a1cb59294ebdd6752ca6b92c091.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Pengunggahan PKM', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nBerikut merupakan informasi terkait pengumpulan PKM bagi Mahasiswa Aktif Fakultas Teknik dan Kejuruan Semseter 3,5,7. Diinformasikan kepada seluruh mahasiswa Fakultas Teknik dan Kejuruan untuk pengumpulan PKM diharapkan mengunggah PKM&nbsp; pada tanggal 8-9 September 2020<br />\r\n<br />\r\nLink pengunggahan PKM :<br />\r\n<a href=\"https://forms.gle/iReTg1UvUQFdkRaM8\">https://forms.gle/iReTg1UvUQFdkRaM8</a><br />\r\n<br />\r\nDiharapkan tetap mengikuti panduan PKM 2020<br />\r\nJika masih ada yang ingin ditanyakan bisa hubungi kontak dibawah ini<br />\r\nRizal : +62 877-6590-2479<br />\r\nSekian dan terimakasih</p>\r\n\r\n<p style=\"text-align:justify\">#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology<br />\r\n#pengumpulanpkm</p>\r\n', NULL, '2020-09-04 11:38:00', 'Admin'),
(37, '50920bd1fb25062d7ec980089f8a7e83.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'PMB Undiksha Tahun 2020', 'Pengumuman', '<p style=\"text-align:justify\">Yth Calon Mahasiswa Baru Undiksha yang tidak lulus SMBJM<br />\r\n<br />\r\nBerdasarkan banyaknya permintaan calon mahasiswa yang tidak lulus jalur SMBJM untuk tetap kuliah di Undiksha, Undiksha memberikan kesempatan bagi mahasiswa tersebut untuk bergabung di Undiksha pada program studi tertentu sesuai dengan jurusan/program keahlian sekolah. Terkait dengan hal tersebut, bagi mahasiswa yang tertarik silakan login ke <a href=\"https://penerimaan.undiksha.ac.id/ujian-tulis\">https://penerimaan.undiksha.ac.id/ujian-tulis</a> sesuai dengan nomor pendaftaran dan pin masing-masing. Mahasiswa bisa memilih program studi yang disediakan sesuai daya tampung dan akan ditutup jika sudah memenuhi kuota. Pendaftaran dan daftar ulang akan ditutup pada tanggal 5 September 2020 pukul 23.59 Wita.</p>\r\n\r\n<p style=\"text-align:justify\">Demikian informasi yang kami sampaikan, atas perhatiannya&nbsp; kami ucapkan terima kasih.</p>\r\n\r\n<p style=\"text-align:justify\">Panitia Penerimaan Mahasiswa Baru Undiksha 2020</p>\r\n', NULL, '2020-09-04 11:55:27', 'Admin'),
(41, '15ea290347456067696f4162eb0d151b.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Kelengkapan Administrasi', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nDiumumkan kepada seluruh mahasiswa baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan. Berikut merupakan informasi resmi terkait dengan biaya kelengkapan administrasi bagi mahasiswa baru. Adapun rincian terkait dengan kelengkapan administrasi tersebut dapat didownload pada tombol download diatas. Untuk informasi dan pertanyaan lebih lanjut dapat menghubungi <em>official account</em> HMJ TI Undiksha<br />\r\nIG : @hmj_ti.undiksha<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#pengumuman_biaya_administrasi<br />\r\n#mahasiswa_baru_tahun_2020</p>\r\n', '08092020121729.pdf', '2020-09-08 12:17:29', 'Admin'),
(52, '90d0662b2e19fdeee5ac624fc5144b0c.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Twibbon Mahasiswa Baru', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nDiumumkan kepada seluruh mahasiswa baru Undiksha tahun 2020, untuk memenuhi syarat&nbsp; bergabung bersama kami di Jurusan Teknik Informatika dalam kegiatan Pengenalan Kehidupan Fakultas Teknik dan Kejuruan Tahun 2020. Adik-adik diwajibkan untuk mengupload Twibbon dan diupload ke Instagram masing-masing dengan menyertakan caption yang menarik dengan format sebagai berikut :</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><em>&ldquo;(Motto Hidup Kalian)&rdquo;</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>Hallo perkenalkan nama saya&hellip;. dari prodi&hellip;&hellip;.<br />\r\nSaya bangga menjadi bagian dari Jurusan Teknik Informatika Universitas Pendidikan Ganesha Tahun 2020.</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>#include &lt;iostream&gt;<br />\r\nusing namespace std;<br />\r\nint main(){<br />\r\ncout&lt;&lt;&rdquo;I&rsquo;m ready to be a part of Infinity&rdquo;&lt;&lt;endl;<br />\r\nreturn 0;<br />\r\n}</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>@hmj_ti.undiksha</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>#INFINITY<br />\r\n#gotechnology<br />\r\n#TeknikInformatikaUndiksha2020</em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Untuk Twibbon dapat didownload pada link dibawah ini</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://drive.google.com/file/d/14Ur_gQ561U30kGko5trIzmt4Sk_uU6hz/view?usp=sharing\">Link Twibbon Jurusan Teknik Informatika</a></p>\r\n\r\n<p style=\"text-align:justify\">Twibbon diupload paling lambat sebelum pelaksanaan Pengenalan Kehidupan Fakultas Teknik dan Kejuruan. Untuk informasi dan pertanyaan dapat menghubungi akun instagram HMJ Teknik Informatika.</p>\r\n\r\n<p style=\"text-align:justify\">IG : @hmj_ti.undiksha<br />\r\nDemikian informasi, terimakasih<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#twibbon_mahasiswa_baru</p>\r\n', NULL, '2020-09-10 22:57:16', 'Admin'),
(54, '4248c4dd62e6e5b416ad34943135e608.png', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Penyusunan KRS Mahasiswa Baru', 'Pengumuman', '<p style=\"text-align:justify\">Hallo infinity,</p>\r\n\r\n<p style=\"text-align:justify\">Kami informasikan kepada seluruh Mahasiswa Baru Jurusan Teknik Informatika, Fakuktas Teknik dan Kejuruan bahwa Pelaksanaan Penyusunan Kartu Rencana Studi (KRS) untuk mahasiswa baru tahun 2020 dilaksanakan secara online melalui:<br />\r\n<a href=\"https://siakng.undiksha.ac.id\">https://siakng.undiksha.ac.id</a><br />\r\nmulai tanggal 12 s/d 18 September 2020.</p>\r\n\r\n<p style=\"text-align:justify\">Sehubungan dengan itu kami mohon bantuan Bapak/Ibu agar menginformasikan kepada mahasiswa baru dan dosen yang terlibat sebagai Pembimbing Akademik (PA) di lingkungan fakultas masing-masing untuk melakukan pembimbingan KRS secara daring kepada mahasiswa yang bersangkutan.</p>\r\n\r\n<p style=\"text-align:justify\">Untuk surat edaran resmi terkait informasi ini, dapat didownload pada tombol download diatas.</p>\r\n\r\n<p style=\"text-align:justify\">Sekian Informasi yang dapat kami sampaikan, Atas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p style=\"text-align:justify\">#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTeknologi</p>\r\n', '13092020001811.pdf', '2020-09-13 00:18:11', 'Admin'),
(55, '03d926db7d12faccf6891235d20c950c.png', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Sosialisasi KRS dan Pengenalan Komunitas', 'Pengumuman', '<p style=\"text-align:justify\">Hallo infinity,<br />\r\nDiinformasikan kepada seluruh Mahasiswa Baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan akan diadakan pelaksanaan sosialisasi KRS-an dan pengenalan Komunitas HMJ TI 2020 pada Senin, 14 September 2020 secara online dengan menggunakan google meet. Acara akan dibagi menjadi 2 sesi yaitu :<br />\r\n1. Sesi pertama untuk prodi SI dan MI dimulai pukul 09.45-12.15 WITA.<br />\r\n2. Sesi kedua untuk prodi PTI dan ILKOM dimulai pukul 12.45-15.15 WITA.<br />\r\n<br />\r\nMahasiswa wajib mengikuti acara sampai selesai dengan berpakaian rapi dan sopan (berkerah).</p>\r\n\r\n<p style=\"text-align:justify\">Untuk rincian jadwal acara dapat didownload pada tombol download diatas<br />\r\nSekian Informasi yang dapat kami sampaikan, Remember to stay safe and healthy<br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p style=\"text-align:justify\">#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTechnology</p>\r\n', '13092020003322.pdf', '2020-09-13 00:33:22', 'Admin'),
(56, '139dff926ae085a5b3a1f62622adbcce.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Link Pendaftaran Komunitas', 'Pengumuman', '<p style=\"text-align:justify\">Halo infinity,<br />\r\ndiumumkan kepada seluruh mahasiswa aktif jurusan teknik informatika, bagi yang berkeinginan untuk bergabung bersama komunitas yang ada di Jurusan Teknik Informatika, dapat melakukan pendaftaran pada link berikut, berdasarkan komunitas yang dipilih. Masing-masing mahasiswa boleh memilih komunitas lebih dari 1, asalkan bisa fokus dalam mengatur waktu antara komunitas dan perkuliahan.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Link Pendaftaran Komunitas Multimedia :&nbsp;<a href=\"http://bit.ly/komunitasmultimedia\">http://bit.ly/komunitasmultimedia</a></li>\r\n	<li style=\"text-align: justify;\">Link Pendaftaran Komunitas TKJ : <a href=\"http://bit.ly/formkomunitastkj\">http://bit.ly/formkomunitastkj</a></li>\r\n	<li style=\"text-align: justify;\">Link Pendaftaran Komunitas Programming : <a href=\"http://bit.ly/JoinG-PromersFamily\">http://bit.ly/JoinG-PromersFamily</a></li>\r\n	<li style=\"text-align: justify;\">Link Pendaftaran Komunitas Robotik : <a href=\"http://bit.ly/formkomunitasrobotik\">http://bit.ly/formkomunitasrobotik</a></li>\r\n	<li style=\"text-align: justify;\">Link Pendaftaran Komunitas Minat dan Bakat : <a href=\"https://docs.google.com/forms/d/e/1FAIpQLSe0wZr_1I_OA4NfCV2_j8SgnJ3qk5RWA8N3iPVV93ajpMrp3g/viewform?usp=sf_link\">http://bit.ly/pendaftaranminatbakat</a></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Demikian informasi terkait dengan pendaftaran komunitas, jika ada yang ingin ditanyakan dapat menghubungi akun instagram resmi HMJ TI Undiksha<br />\r\nIG : @hmj_ti.undiksha</p>\r\n\r\n<p style=\"text-align:justify\">#hmjti<br />\r\n#undiksha<br />\r\n#go_technology<br />\r\n#info_komunitas</p>\r\n', NULL, '2020-09-14 19:19:17', 'Admin'),
(57, '546637b277a791398dbbfab4eccd8047.png', '1145729e373ef80eb7a2627ae244b98a.jpg', 'b4aecefde1b3d8d03bd3aeb4d7c7c0b5.jpg', NULL, 'HMJ TI Undiksha 2020-2021', 'SOSIALISASI KRS DAN KOMUNITAS ', 'Berita', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Singaraja</strong> &ndash; <em>Penyusunan Kartu Rencana Studi dan perkenalan komunitas, HMJ TI Universitas Pendidikan Ganesha melakukan penyampaian gambaran umum proses akademik yang akan berlangsung.</em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Serangkaian Orientasi Kegiatan Jurusan (OKJ) di lingkungan Jurusan Teknik Informatika, HMJ TI Universitas Pendidikan Ganesha mensosialisasikan mengenai sistem dan alur pelaksanaan KRS Mahasiswa secara online. Tujuan dari kegiatan ini adalah memberikan pengenalan sistem yang akan digunakan mahasiswa baru dalam perkuliahan dan menyalurkan informasi pemahaman mengenai prosedur penyusunan Kartu Rencana Studi (KRS) online mahasiswa yang dilakukan setiap awal semester.&nbsp;Kegiatan sosialisasi dimulai sejak pukul 09.45 WITA &ndash; 12.15 WITA yang diawali dengan presensi mahasiswa baru.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">HMJ TI Universitas Pendidikan Ganesha melakukan penyampaian gambaran umum proses akademik yang akan berlangsung.&nbsp;Kegiatan ini dihadiri 98 peserta yang terdiri pengurus HMJ TI dan Mahasiswa Baru TI. Mahasiswa tampak begitu antusias dengan materi dan aktif melakukan diskusi.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&ldquo;Perancangan KRS dilakukan sesuai dengan algoritma yang berlaku dan dilakukan pada tanggal 10-14 September, nanti untuk lebih jelas terkait penyusunan KRS akan diinformasikan,&rdquo; ujar Irfan Walhidayah selaku Ketua HMJ TI, Senin (14/9/2020).</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Penjelasan yang berlangsung terkait penyusunan KRS mendapatkan kendala bagi mahasiswa baru, salah satunya adalah tidak bisa melakukan penyusunan KRS yang dilakukan oleh mahasiswa Manajemen Informatika karena tidak ada pilihan kelas. Terkait dengan itu maka I Putu Ega Suwidi Darma selaku Koordinator Prodi Manajemen Informatika menyampaikan bahwa &ldquo;Kurikulum D3 Manajemen Informatika sistem paket yang sudah ditentukan oleh ketua Program Studi Manajemen Informatika, jadi tinggal melakukan penyusunann KRS sesuai dengan paket mata kuliah yang berlaku. Untuk kelas yang belum muncul saat penyusunan KRS akan saya tanyakan keatasan, tapi kerana jumlah mahasiswa MI 20 orang maka dipastikan dapat kelas A&rdquo; ujarnya.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Melanjutkan penyampaian cara penyusunan KRS, mahasiswa baru mendapatkan tips jitu untuk kedepannya jika melakukan penyusunan KRS.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&ldquo;Ada tips untuk mahasiswa baru bila nanti melakukan penyusunan KRS yaitu membuat group komukasi antar teman jika mendapatkan pembimbing akademik agar pada saat melakukan koordinasi terhadap dosen hanya melalui perwakilan saja, jadi koordinasi terhadap PA bisa terlaksana secara baik karena kita tidak tau karakter dari masing masing pembimbing akademik tersebut,&rdquo; tutur Zasya selaku Wakil Ketua HMJ TI.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Seiring dengan kegiatan tersebut, HMJ TI Universitas Pendidikan Ganesha melakukan pengenalan seputar jurusan dan HMJ TI Universitas Pendidikan Ganesha diantaranya pengenalan berbagai jenis iuran kepada mahasiswa baru, pengenalan seputar Pembimbing Akademik (PA), Koordinator Tingkat (KORTI), Kepala Program Studi (KAPRODI), dan tata cara menghubungi dosen. Kemudian, dilanjutkan pula dengan pengenalan komunitas untuk mengembangkan bakat dan minat mahasiswa di lingkungan Jurusan Teknik Informatika.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Salam hangat dari Irfan Walhidayah, dibuka dengan dijelaskan ulang iuran HMJ TI yang diberlakukan supaya mahasiswa baru lebih jelas dan paham terkait rincian biaya dari iuran HMJ TI. Setelah itu dilanjutkan dengan pembahasan terkait komunitas yang ada di lingkungan Teknik Informatika.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Perkenalan komunitas yang berfungsi sebagai wadah penyaluran minat dan bakat mahsiswa teknik informatika. Penyampaian tersebut terdapat 5 komunitas yang ada di Teknik Informatika, diantaranya :</span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Komunitas Multimedia</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Komunitas Programming</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Komunitas Teknik Komputer Jaringan</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Komunitas Robotika</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Komunitas Olahraga dan Seni</span></span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mahasiswa baru akan diarahkan sesuai dengan minat dan bakat yang dimiliki melalui 5 komunitas tersebut dan nantinya akan dilakukan pendataan terhadap komunitas yang akan dianut oleh mahasiswa baru.</span></span></p>\r\n', NULL, '2020-09-14 17:58:20', 'Sub Bidang Jurnalistik'),
(58, '9ca14bb57d4b43a3a6d3ccdd461dac62.png', NULL, NULL, NULL, 'HMJ TI Undiksha 2020-2021', 'Info Mahasiswa Baru 2020', 'Pengumuman', '<p>[INFINITY]<br />\r\n[INFO JURUSAN]</p>\r\n\r\n<p>Om Swastyatu<br />\r\nAssalamualaikum Warahmatulahhi Wabarakatuh<br />\r\nShalom<br />\r\nNamo Budhaya<br />\r\nSalam Harmoni<br />\r\nHallo INFINITY<br />\r\n<strong>&bull; INFO PENDATAAN UKURAN BAJU DAN JAKET MAHASISWA BARU</strong><br />\r\nDiinformasikan kepada seluruh Mahasiswa Baru Angkatan Tahun 2020 Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan untuk melengkapi data ukuran baju dan jaket pada link berikut:&nbsp;<br />\r\nhttps://bit.ly/PendataanBajuJaket<br />\r\nBagi mahasiswa yang<strong> telah</strong> membayar administrasi dan iuran <strong>diwajibkan</strong> untuk mengisi link pendataan baju dan jaket tersebut. Untuk mahasiswa yang <strong>belum</strong> membayar administrasi dan iuran juga <strong>boleh</strong>&nbsp;mengisi pendataan baju dan jaket tersebut terlebih dahulu.<br />\r\nSekian Informasi yang dapat kami sampaikan,<br />\r\nRemember to stay safe and healthy<br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p>#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTeknologi</p>\r\n', NULL, '2020-09-14 19:25:00', 'Dwi Prima Handayani Putri'),
(59, 'd3f902bfb4d714e3f4249acd297a56ed.png', NULL, NULL, NULL, 'HMJ TI Undiksha 2020-2021', 'Info Data Iuran HMJ 2020 ', 'Pengumuman', '<p>[INFINITY]<br />\r\n[INFO JURUSAN]</p>\r\n\r\n<p>Om Swastyatu<br />\r\nAssalamualaikum Warahmatulahhi Wabarakatuh<br />\r\nShalom<br />\r\nNamo Budhaya<br />\r\nSalam Harmoni<br />\r\nHallo INFINITY<br />\r\n<strong>&bull; INFO DATA PEMBAYARAN IURAN HMJ 2020</strong><br />\r\nDiinformasikan kepada seluruh Mahasiswa Aktif di Jurusan Teknik Informatika semester 3, 5, dan 7 untuk melakukan pengecekan nama dan keterangan terkait pembayaran iuran HMJ TI untuk Bulan Agustus s.d. Desember 2020 yang telah dilakukan.<br />\r\nData pembayaran dapat diakses pada link berikut: &nbsp;<br />\r\nhttps://docs.google.com/spreadsheets/d/10nsUVpVNl9Y1qDw720Oyx6dLmfiY8irnDjgS2IE35nw/edit?usp=sharing<br />\r\nJika terdapat kesalahan bisa menghubungi <strong>salah satu </strong>kontak berikut<strong> via wa</strong>:<br />\r\n+62 895-3950-13615<br />\r\n(Gusti Aditya Trisna Murti)<br />\r\n+62 812-4634-2145<br />\r\n(Dwi Prima Handayani Putri)<br />\r\n.<br />\r\n.<br />\r\nSekian informasi yang dapat kami sampaikan.<br />\r\nRemember to stay safe and healthy<img alt=\"wink\" src=\"http://if.undiksha.ac.id/assets/ckeditor/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /><br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p>#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTechnology</p>\r\n', NULL, '2020-09-16 23:05:51', 'Dwi Prima Handayani Putri'),
(60, 'df93f35e1ce525963a3eb390164012fc.jpg', '8a5ff1569889c639aa3f00fbafa7ab6d.jpg', '942cc8c328403932e8f9017cbd956e6d.jpg', NULL, 'HMJ TI Undiksha 2020-2021', 'RAPAT KERJA HMJ TI MASA BAKTI 2020/2021', 'Berita', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\"><em>Singaraja &ndash; Pelaksanaan Rapat Kerja Himpunan Mahasiswa Jurusan Teknik Informatika, Universitas Pendidikan Ganesha. Rapat membahas Program Kerja dari masing-masing Bidang yang ada pada HMJ TI Undiksha masa bakti 2020/2021.</em></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Rapat Kerja Himpunan Mahasiswa Jurusan Teknik Informatika, Universitas Pendidikan Ganesha, dilaksanakan secara daring dan dihadiri oleh pengurus HMJ Teknik Informatika masa bakti 2020/2021, 2 orang perwakilan kelas yang ada di&nbsp; Jurusan Teknik Informatika serta tamu undangan yang meliputi Dekan FTK, Ketua Jurusan TI, Sekretaris Jurusan TI, Wakil Dekan 3, Ketua Ormawa di lingkungan FTK, perwakilan dari BEM FTK, perwakilan dari MPM REMA, BEM REMA , serta demisioner HMJ TI masa bakti 2019/2020. Sehingga total peserta dalam kegiatan Rapat Kerja ini berjumlah 120 peserta.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Dalam acara Rapat Kerja HMJ TI Undiksha ini, Dekan FTK yakni Dr. I Gede Sudirtha, S.Pd, M.Pd, memberikan sambutan yang sekaligus membuka acara Rapat Kerja HMJ TI. &ldquo; Saya sangat mengapresiasi seluruh kegiatan mahasiswa karena kegiatannya berjalan dengan lancar, saya bangga kepada semua program studi yang ada di lingkungan FTK, salah satunya adalah program studi Pendidikan Teknik Informatika yang telah mendapatkan akreditasi A. Semoga program studi yang lainnya bisa memperoleh akreditasi nilai A kedepannya. Perlu kita ketahui Jurusan Teknik Informatika memiliki segudang prestasi yang dihasilkan oleh Mahasiswa Jurusan Teknik Informatika, terbukti dari lomba - lomba gemastik, game dll. Pada tahun 2019 FTK memperoleh peringkat ke-4 dalam prestasi di klasterisasi walaupun fakultas nya kecil akan tetapi memiliki segudang prestasi semoga bisa termotivasi lagi agar bisa meningkatkan prestasi lagi. &ldquo;&nbsp; ujarnya saat membuka kegiatan Rapat Kerja HMJ TI</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Irfan Walhidayah selaku Ketua HMJ TI masa bakti 2020/2021, juga memberikan tanggapan tentang tujuan diadakannya Rapat Kerja HMJ TI ini. Tujuan dari kegiatan ini adalah ,tercapainya susunan jadwal program kerja HMJ Teknik Informatika&nbsp; periode 2020/2021 yang sistematis,tercapainya insan akademis yang disiplin, cakap, terampil dan bertanggung jawab dalam mengemban keprofesian dan tercapainya rancangan pasti sebuah program kerja yang menjadi patokan oleh organisasi ini dalam berkegiatan.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">&ldquo;Landasan terbentuknya sebuah organisasi tentunya adalah memiliki tujuan bersama, organisasi layaknya ditopang oleh elemen-elemen penting seperti anggota, program kerja, dan pengurus inti yang menjalankan roda organisasinya. Elemen-elemen penting itu memiliki fungsinya tersendiri, anggota dalam organisasi akan melaksanakan program kerja sehingga dapat mencapai tujuan organisasi. Program kerja dirancang dan dilaksanakan dalam rangka mencapai tujuan organisasi, dengan adanya program kerja akan membuat langkah organisasi dalam mencapai tujuan organisasi menjadi jelas. Dalam setiap organisasi diperlukan pengurus yang menjadi penggerak dalam berorganisasi, pengurus merumuskan dan menjadi nahkoda dalam bahtera organisasi. Organisasi yang baik tentu saja perlu didukung dengan terbentuknya program kerja yang jelas dan memiliki kualitas, melihat pentingnya program kerja dalam sebuah organisasi, maka dipandang sangat perlu untuk melakukan program tahunan yaitu Rapat Kerja Himpunan Mahasiswa Jurusan Teknik Informatika Masa Bakti 2020/2021 untuk menyusun Program Kerja (Proker) Himpunan Mahasiswa Jurusan Teknik Informatika Masa Bakti 2020/2021.&rdquo;, imbuhnya .</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Hal senada juga disampaikan oleh Zasya Eka, selaku ketua panitia Rapat Kerja HMJ TI. &ldquo;Untuk Raker kali ini berjalan dengan lancar walau kita melakukannya secara full daring. Jadi mengingat kondisi seperti ini, kami dari kepanitiaan memutuskan untuk melaksanakan kegiatan Raker HMJ TI masa bakti 2020/2021 secara full daring. Ini merupakan tantangan bagi panitia karena dengan kondisi seperti ini koordinasi tidak akan intens seperti ketika kita melaksanakan kegiatan secara luring.&rdquo;,ujarnya</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Tak hanya itu, mahasiswa yang juga menjabat sebagi Wakil Ketua HMJ TI ini juga mengucapkan terimakasih kepada semua pihak yang telah terlibat dalam kegiatan kali ini sehingga dapat berjalan dengan baik.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, '2020-10-05 23:10:44', 'Sub Bidang Jurnalistik');

-- --------------------------------------------------------

--
-- Table structure for table `s1_kegiatan_hmj`
--

CREATE TABLE `s1_kegiatan_hmj` (
  `id_kegiatan_hmj` int(11) NOT NULL,
  `id_hmj` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1_kegiatan_hmj`
--

INSERT INTO `s1_kegiatan_hmj` (`id_kegiatan_hmj`, `id_hmj`, `nama_kegiatan`, `deskripsi_kegiatan`, `create_by`, `create_at`, `update_at`) VALUES
(24, 16, 'TI Peduli Pencegahan Penyebaran COVID-19', '<p style=\"text-align:justify\"><span style=\"color:hsl(0, 0%, 0%)\">Program Kerja ini merupakan program kerja yang dilaksanakan oleh bidang 4 HMJ TI Undiksha. TI Peduli Pencagahan Penyebaran COVID merupakan program kerja yang dilaksanakan HMJ TI Undiksha 2020-2021, program kerja ini dilaksanakan dengan cara membagikan masker dan hand sanitizer gratis kepada masyarakat di sekitaran Kota Singaraja.</span></p>\r\n', 'Admin', '2020-09-01 20:18:23', '2020-09-01 20:18:23'),
(25, 16, 'IT Mission #1', '<p style=\"text-align:justify\"><span style=\"color:hsl(0, 0%, 0%)\">IT Mission #1 adalah kegiatan Webinar yang diadakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika. IT Mission #1 ini diadakan pada tanggal 28 Juni 2020 melalui platform Zoom. Terdapat 3 pemateri utama pada IT Mission #1 ini, yakni Bapak Anditya, S.T, Bapak Ida Bagus Nyoman Pascima, S.Pd., M.Cs. dan Bapak I Made Edy Listartha, S.Kom., M.Kom. Kegiatan ini sudah berjalan dengan baik.</span></p>\r\n', 'I Gede Riyan Ardi Darmawan', '2020-09-01 20:18:59', '2020-09-06 20:26:16'),
(26, 16, 'IT Mission #2', '<p style=\"text-align:justify\"><span style=\"color:hsl(0, 0%, 0%)\">IT Mission #2 adalah kegiatan Webinar yang diadakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika. IT Mission #2 ini diadakan pada tanggal 18 Agustus 2018 melalui platform Zoom. Pada IT Mission #2 ini, HMJ TI Undiksha bekerja sama dengan pihak DANA Wallet Indonesia. Terdapat 4 pemateri pada IT Mission #2 ini, dimana pemateri ini didatangkan langsung dari pihak DANA </span></p>\r\n', 'Admin', '2020-09-01 20:21:01', '2020-09-01 20:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `s2_barang`
--

CREATE TABLE `s2_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan_barang` int(11) NOT NULL,
  `nama_pengisi` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s2_detail_peminjaman`
--

CREATE TABLE `s2_detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `harga_pinjaman` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `s2_detail_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `Peminjaman` AFTER INSERT ON `s2_detail_peminjaman` FOR EACH ROW BEGIN
	UPDATE s2_barang SET jumlah_barang = jumlah_barang - NEW.jumlah_pinjaman
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Pengembalian` AFTER DELETE ON `s2_detail_peminjaman` FOR EACH ROW BEGIN
	UPDATE s2_barang
    SET jumlah_barang = jumlah_barang + OLD.jumlah_pinjaman WHERE s2_barang.id_barang = OLD.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `s2_organisasi`
--

CREATE TABLE `s2_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `ketua_organisasi` varchar(50) NOT NULL,
  `notelp_organisasi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s2_peminjam`
--

CREATE TABLE `s2_peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `nim_peminjam` int(10) NOT NULL,
  `notelp_peminjam` varchar(13) NOT NULL,
  `email_peminjam` varchar(50) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s2_peminjaman`
--

CREATE TABLE `s2_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `status_peminjaman` int(1) NOT NULL,
  `total_peminjaman` bigint(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `s2_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `Selesai_pinjam` AFTER UPDATE ON `s2_peminjaman` FOR EACH ROW BEGIN
	DELETE FROM s2_detail_peminjaman WHERE OLD.id_peminjaman = s2_peminjaman.id_peminjaman AND s2_peminjaman.status_peminjaman = 2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `s3_berita_integer`
--

CREATE TABLE `s3_berita_integer` (
  `id_berita_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_berita_integer` varchar(200) NOT NULL,
  `kategori_berita_integer` varchar(1) NOT NULL,
  `konten_berita_integer` text NOT NULL,
  `youtube_berita_integer` text DEFAULT NULL,
  `file_berita_integer` text DEFAULT NULL,
  `foto1_berita_integer` text NOT NULL,
  `foto2_berita_integer` text DEFAULT NULL,
  `foto3_berita_integer` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_berita_integer`
--

INSERT INTO `s3_berita_integer` (`id_berita_integer`, `id_integer`, `nama_berita_integer`, `kategori_berita_integer`, `konten_berita_integer`, `youtube_berita_integer`, `file_berita_integer`, `foto1_berita_integer`, `foto2_berita_integer`, `foto3_berita_integer`, `create_at`, `create_by`) VALUES
(5, 19, 'contoh berita', '1', 'adaa dadad adad e ddrn fna nownfaomfnawfnan lwopawpm apemfpamp mopqp pwpfmapfawmolfn ol\'f anfoa oawf anwfawnf anca wnf awojfaoa pqpf anonf afn aa[anfa wohf aooa', '', 'adada', '125f9f46aa78599bf4fb4f5800e695e9.jpg', 'bf2b40e41b1ee4425a7f6106bc19918b.png', NULL, '2020-10-10 23:39:03', 'Admin'),
(6, 19, 'contoh pengumuman', '2', 'konten 1 ada daa adada', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ORda-LwrEwE\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'b7fc1073e01f8073d7d99b51e3674dab.pdf', '6cab97a9afd0c3ae6e59ac7823258b25.jpg', NULL, 'b04cbb5933a8e7b987db38657615c973.jpg', '2020-10-11 00:32:11', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_detail_hari_integer`
--

CREATE TABLE `s3_detail_hari_integer` (
  `id_detail_hari_integer` int(11) NOT NULL,
  `id_hari_integer` int(11) NOT NULL,
  `nama_detail_hari_integer` varchar(200) NOT NULL,
  `waktu_mulai` varchar(8) NOT NULL,
  `waktu_akhir` varchar(8) NOT NULL,
  `tempat_detail_hari_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_detail_hari_integer`
--

INSERT INTO `s3_detail_hari_integer` (`id_detail_hari_integer`, `id_hari_integer`, `nama_detail_hari_integer`, `waktu_mulai`, `waktu_akhir`, `tempat_detail_hari_integer`, `create_at`, `create_by`) VALUES
(8, 6, 'kakakak', '13:53', '13:53', 'ada', '2020-10-07 13:53:29', 'Admin'),
(10, 7, 'makan makan', '23:02', '23:02', 'rumah', '2020-10-10 23:02:39', 'Admin'),
(11, 7, 'manggang', '10:54', '11:54', 'rumah', '2020-10-11 10:54:48', 'Admin'),
(12, 8, 'ada', '11:21', '12:21', 'adad', '2020-10-11 11:21:18', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_hari_integer`
--

CREATE TABLE `s3_hari_integer` (
  `id_hari_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_hari_integer` date NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_hari_integer`
--

INSERT INTO `s3_hari_integer` (`id_hari_integer`, `id_integer`, `nama_hari_integer`, `create_at`, `create_by`) VALUES
(6, 19, '2020-10-09', '2020-10-07 13:52:47', 'Admin'),
(7, 19, '2020-10-11', '2020-10-10 22:49:29', 'Admin'),
(8, 19, '2020-10-13', '2020-10-10 22:52:33', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_integer`
--

CREATE TABLE `s3_integer` (
  `id_integer` int(11) NOT NULL,
  `nama_integer` varchar(100) NOT NULL,
  `logo_integer` text NOT NULL,
  `video_integer` text NOT NULL,
  `tema_integer` varchar(200) NOT NULL,
  `deskripsi_integer` text NOT NULL,
  `status_integer` int(1) NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_integer`
--

INSERT INTO `s3_integer` (`id_integer`, `nama_integer`, `logo_integer`, `video_integer`, `tema_integer`, `deskripsi_integer`, `status_integer`, `create_at`, `create_by`) VALUES
(19, 'Integer #2', '878f35280a86fe40e19cca46399fe101.png', 'f5fb987af0f577ae113b7cd52c291141.mp4', 'ada deh', 'ada', 1, '2020-09-28 11:34:16', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_kategori_lomba_integer`
--

CREATE TABLE `s3_kategori_lomba_integer` (
  `id_kategori_lomba_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_kategori_lomba_integer` varchar(30) NOT NULL,
  `icon_kategori_lomba_integer` text NOT NULL,
  `deskripsi_kategori_lomba_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_kategori_lomba_integer`
--

INSERT INTO `s3_kategori_lomba_integer` (`id_kategori_lomba_integer`, `id_integer`, `nama_kategori_lomba_integer`, `icon_kategori_lomba_integer`, `deskripsi_kategori_lomba_integer`, `create_at`, `create_by`) VALUES
(6, 19, 'ada', '252df573a338156f42aed40c4edd90f0.png', 'ada', '2020-10-07 14:00:41', 'Admin'),
(7, 19, 'ada deh', '8529176360f9cb7accc3dca874f0bd91.png', '<p>ada</p>\r\n', '2020-10-10 00:12:41', 'Admin'),
(8, 19, 'ddd', '93a593f3924f87d962411956105a642b.png', '<p>dd</p>\r\n', '2020-10-10 00:13:10', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_lomba_integer`
--

CREATE TABLE `s3_lomba_integer` (
  `id_lomba_integer` int(11) NOT NULL,
  `id_kategori_lomba_integer` int(11) NOT NULL,
  `nama_lomba_integer` varchar(60) NOT NULL,
  `deskripsi_lomba_integer` text NOT NULL,
  `icon_lomba_integer` text NOT NULL,
  `waktu_mulai_pendaftaran` datetime NOT NULL,
  `waktu_akhir_pendaftaran` datetime NOT NULL,
  `pendaftaran_lomba_integer` text NOT NULL,
  `pengumpulan_proposal` int(1) NOT NULL DEFAULT 0,
  `waktu_awal_pengumpulan` datetime DEFAULT NULL,
  `waktu_akhir_pengumpulan` datetime DEFAULT NULL,
  `pengumpulan_lomba_integer` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_lomba_integer`
--

INSERT INTO `s3_lomba_integer` (`id_lomba_integer`, `id_kategori_lomba_integer`, `nama_lomba_integer`, `deskripsi_lomba_integer`, `icon_lomba_integer`, `waktu_mulai_pendaftaran`, `waktu_akhir_pendaftaran`, `pendaftaran_lomba_integer`, `pengumpulan_proposal`, `waktu_awal_pengumpulan`, `waktu_akhir_pengumpulan`, `pengumpulan_lomba_integer`, `create_at`, `create_by`) VALUES
(0, 6, 'ngentot', '<p>ada</p>\r\n', '773657761a6f3df0f32184f4187b5214.png', '2020-10-09 15:57:41', '2020-10-10 15:57:45', 'https://lldldl', 1, '2020-10-10 15:54:50', '2020-10-10 15:55:10', 'https://adaada', '2020-10-08 23:22:00', 'Admin'),
(8, 6, 'kadek', '<p>adaq</p>\r\n', '5a9ae0a19ff4104c3e7130eb4bcc4873.png', '2020-10-10 15:59:33', '2020-10-10 16:00:07', 'ada', 0, NULL, NULL, NULL, '2020-10-08 23:56:32', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_sponsor_integer`
--

CREATE TABLE `s3_sponsor_integer` (
  `id_sponsor_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_sponsor_integer` varchar(200) NOT NULL,
  `deskripsi_sponsor_integer` text NOT NULL,
  `foto_sponsor_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_sponsor_integer`
--

INSERT INTO `s3_sponsor_integer` (`id_sponsor_integer`, `id_integer`, `nama_sponsor_integer`, `deskripsi_sponsor_integer`, `foto_sponsor_integer`, `create_at`, `create_by`) VALUES
(5, 19, 'Sampoerna', 'Sampoerna', 'c012c66e50fae0f691d052af8466e336.JPG', '2020-10-07 13:52:09', 'Admin'),
(6, 19, 'aqua', '<p>ada</p>\r\n', 'cc526a8439bb02393d3255340f3fd119.png', '2020-10-10 00:37:51', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s4_informasi_umum`
--

CREATE TABLE `s4_informasi_umum` (
  `id_informasi` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat_asal` text NOT NULL,
  `alamat_sekarang` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `pilihan_wajib` varchar(100) NOT NULL,
  `pilihan_opsional` varchar(100) DEFAULT NULL,
  `riwayat_kesehatan` text DEFAULT NULL,
  `hobi` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `sd` varchar(100) DEFAULT NULL,
  `thn_sd` varchar(4) DEFAULT NULL,
  `smp` varchar(100) DEFAULT NULL,
  `thn_smp` varchar(4) DEFAULT NULL,
  `sma` varchar(100) DEFAULT NULL,
  `thn_sma` varchar(4) DEFAULT NULL,
  `file_foto` text DEFAULT NULL,
  `file_dokumen` text DEFAULT NULL,
  `ket_wawancara` int(11) NOT NULL DEFAULT 0,
  `diterima_di` varchar(100) NOT NULL DEFAULT 'Belum Ada',
  `ket_lulus` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s4_kegiatan`
--

CREATE TABLE `s4_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `icon_kegiatan` text NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `persyaratan` text NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL,
  `aktivasi` int(1) NOT NULL DEFAULT 0,
  `target_pendaftar` int(11) NOT NULL,
  `jumlah_pendaftar` int(11) NOT NULL DEFAULT 0,
  `upload_file` int(11) NOT NULL DEFAULT 0,
  `informasi_pribadi` int(11) NOT NULL DEFAULT 0,
  `informasi_pendidikan` int(11) NOT NULL DEFAULT 0,
  `wawancara` int(11) NOT NULL DEFAULT 0,
  `penilaian` int(11) NOT NULL DEFAULT 0,
  `hasil_akhir` int(11) NOT NULL DEFAULT 0,
  `pengumuman` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s4_kegiatan`
--

INSERT INTO `s4_kegiatan` (`id_kegiatan`, `icon_kegiatan`, `nama_kegiatan`, `deskripsi`, `persyaratan`, `tgl_mulai`, `tgl_akhir`, `aktivasi`, `target_pendaftar`, `jumlah_pendaftar`, `upload_file`, `informasi_pribadi`, `informasi_pendidikan`, `wawancara`, `penilaian`, `hasil_akhir`, `pengumuman`, `create_at`, `create_by`) VALUES
(7, '605b1e9fc7ea2474a51f1093c4e5369f.JPG', 'ada deh', '<p>ada deh</p>\r\n', '<p>ada deh</p>\r\n', '2020-10-07 00:00:00', '2020-10-09 00:00:00', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, '2020-10-07 13:05:51', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s4_pilihan`
--

CREATE TABLE `s4_pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s4_pilihan`
--

INSERT INTO `s4_pilihan` (`id_pilihan`, `id_kegiatan`, `id_jabatan`) VALUES
(16, 7, 48),
(17, 7, 47);

-- --------------------------------------------------------

--
-- Table structure for table `s4_wawancara`
--

CREATE TABLE `s4_wawancara` (
  `id_wawancara` int(11) NOT NULL,
  `id_informasi` int(11) NOT NULL,
  `nilai_1` float NOT NULL,
  `nilai_2` float NOT NULL,
  `nilai_3` float NOT NULL,
  `nilai_4` float NOT NULL,
  `total` float NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$zotV59v60G..Z2mko/zs0uGOQ6gAs9FyMaPckq5OvwfdtLGi6eNQ2', 'hmjtiundiksha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1268889823, 1602384849, 1, 'Admin', '1815091037', 46, '081915656865'),
(22, '127.0.0.1', NULL, '$2y$10$g/F9rFfU0BI6v592ioVx1u7Mu8DzSrRdSotsIguNj8fPneI9lki4m', 'irfan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601478582, 1601478918, 1, 'IRFAN WALHIDAYAH', '1815091002', 38, '08983197636'),
(23, '127.0.0.1', NULL, '$2y$10$oZZGNZj4iE8g53ONFgRFIe4LVgMBa/egnW3h49VEeWhsEZaSRptQK', 'jurnalistik@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601478638, 1601478958, 1, 'Sub Bidang Jurnalistik', '1815051083', 40, '081339289008'),
(24, '127.0.0.1', NULL, '$2y$10$DAWjFjedaWxM7yQEoLhFueum.UMmxHelnKxrFvFzncohmqe.y/v1O', 'riyan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601992246, 1602043638, 1, 'I Gede Riyan Ardi Darmawan', '1815091037', 38, '081915656865'),
(25, '127.0.0.1', NULL, '$2y$10$SJfWbTDGZKBYEp5WI1.Dde1DAoq/46Ps9djX7LRe8OMvSnaCf8qtS', 'willy@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601992447, NULL, 1, 'Willy Yogantara Sidhi', '1815091063', 43, '087853652474'),
(26, '127.0.0.1', NULL, '$2y$10$t90cFNvkVrmnqhWHMSuj7OrSy6Q97DE7l2yXXVu7H3gwX9xGwZ7EC', 'primadwi84@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601992497, NULL, 1, 'Dwi Prima Handayani Putri', '1915101012', 45, '081246342145'),
(27, '127.0.0.1', NULL, '$2y$10$Ei8Psz3K2AemekBhdei7cuaDT5Dwcldb47DrmfVqAnkycLjpE7b1e', 'komangdianary23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601994775, NULL, 1, 'Komang Dian Ary Kristiadi', '1815051040', 45, '081339320140'),
(28, '127.0.0.1', NULL, '$2y$10$SlIzdi2xRdhVBrSn21Peb.g..fA1V8KEEvV.7xhuc3W7imRqpu4dm', 'gustiaditya123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601994837, NULL, 1, 'Gusti Aditya Trisna Murti', '1815051092', 45, '0895395013615'),
(29, '127.0.0.1', NULL, '$2y$10$GgBXaa793c8eXSCroLAoZeWI2l03E53j8SjmhEzfXZy07Ooj9MDvS', 'zasyasatya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601994963, NULL, 1, 'Putu Zasya Eka Satya Nugraha', '1915051024', 39, '081238824262'),
(30, '127.0.0.1', NULL, '$2y$10$HcFAFtNne78jsu.cy78Ix.yqZb2z6pnv3b2oB4cjwPI4ojcUMrCbq', 'anisamarta17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601995022, NULL, 1, 'Ni Putu Anisa Marta Widyasari', '1915091024', 45, '081235170840'),
(31, '127.0.0.1', NULL, '$2y$10$EcWpGLCa908k7FfAihqe2.Q3vjZtx7.UfIq4vL7zhhUiOuQ7pE0Wm', 'rifki@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601995120, NULL, 1, 'Rifki Nur Fauzi', '1815091048', 42, '08980138994'),
(32, '127.0.0.1', NULL, '$2y$10$.PbI5DpKftREFzSKRj/zjOrlwLx.LeTueNni.he7fAKUeVxgQpKOK', 'erik@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601995159, NULL, 1, 'Putu Erik Hendrawan', '1815051052', 41, '08980244454'),
(33, '127.0.0.1', NULL, '$2y$10$rnOqYpYSj4AU8xCCeFPRhe2Mld/.52Y.1SXBHIOmL/84Ls.TATEMS', 'bagus.alviantara@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045314, NULL, 1, 'I Made Bagus Alviantara', '1915091037', 45, '082236608104'),
(34, '127.0.0.1', NULL, '$2y$10$OKhDauuCVTkRkLvhykaMJuQWlz7d3Uya40SuoDhszirGWuqcBDsd.', 'beny.indrawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045362, NULL, 1, 'Gede Beny Indrawan', '1915101002', 45, '087761750517'),
(35, '127.0.0.1', NULL, '$2y$10$HSg8e7NjHVjaqXtWINX8WOLIQQBYhwgWORvjbtVyzDZvsuHMc6URG', 'ega@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045445, NULL, 1, 'I Putu Ega Suwidi Darma', '1805021012', 45, '08523774442'),
(36, '127.0.0.1', NULL, '$2y$10$bDcwWvWvkxwGuXCTKC7hjuQSRUFGIKRCtc2LwdOW5OlKqBq1C9M.K', 'dwiki.anggara49@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045499, NULL, 1, 'I Made Dwiki Pasek Anggara', '1815051078', 45, '089606254400'),
(37, '127.0.0.1', NULL, '$2y$10$.ISk6Z2/vVlDvRqoKvGPfe3LLpeeED5zrbY.9LACI53vAqCSNXTby', 'nova.wirya@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046090, NULL, 1, 'Ketut Nova Wirya Dinata', '1800000000', 51, '082237653029'),
(38, '127.0.0.1', NULL, '$2y$10$ntr/XNk9E6/V9jGwmoCP0eFwwxwSha5w200bPGIICXyabpndXYSfG', 'triarta.art@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046177, NULL, 1, 'I Nyoman Triarta', '1800000000', 52, '085967153944'),
(39, '127.0.0.1', NULL, '$2y$10$hnkNoIsALHwhshUA5VvKNeRiDqSH3UE.DmqRzsgnWVyP0UIKXYAvK', 'tesdyanakelin2001@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046222, NULL, 1, 'Ni Luh Putu Tesdyana Kelin', '1800000000', 54, '083112292535'),
(40, '127.0.0.1', NULL, '$2y$10$jQSWofC./CC0HgK0UOQaEOcFWiI7oBXhc1Pppxx9EGUwh3UkOrdyC', 'dwitasri123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046268, NULL, 1, 'Ni Kadek Dwita Sri Wahyuni', '1800000000', 53, '081238758402'),
(41, '127.0.0.1', NULL, '$2y$10$9pgfC03xonKPowlGhhK8Z.vETzBoj/kwRemCr3Gkv/dC5z.ITk/j6', 'subiksaketutgede2000@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046316, NULL, 1, 'Ketut Gede Subiksa', '1800000000', 55, '081917021065'),
(42, '127.0.0.1', NULL, '$2y$10$aSNT2v3409GRypo8dD.VG.H.j1/QDHvmjq8KNXKgYN8ErYtlpsdAC', 'utaridp145@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046355, NULL, 1, 'Kadek Utari Darma Putri', '1800000000', 48, '085739637185'),
(43, '127.0.0.1', NULL, '$2y$10$3oDM160Ru.5mXwslBRyDYu5SJsvw10hIw3063RrtasdW4T3AX5E/K', 'pramayasa@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046397, NULL, 1, 'Komang Pramayasa', '1800000000', 49, '083114682628'),
(44, '127.0.0.1', NULL, '$2y$10$wLvn9ew6Z25WNfBvTsBtWuHMogDn0BkHUqdTQlyeMvmM.ydEMiWPS', 'vinavelina.id13@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046432, NULL, 1, 'Vina Velina', '1915051080', 56, '081805783010'),
(45, '127.0.0.1', NULL, '$2y$10$ehzkweiD3gGvYwfl3OuXhe761aHK8pcp44PpNOwtPuAhkhs9xpD/6', 'mitta20177@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046515, NULL, 1, 'Ni Made Ayu Mita Kusumadewi', '1800000000', 47, '082146115112'),
(46, '127.0.0.1', NULL, '$2y$10$RgXSbNSQlUrpdPOOIGin.eRQIyWR8ek1Il1hjfg4V4mUM2hYMs/.W', 'dius@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046561, NULL, 1, 'I Made Dius Wahyu Aditya', '1800000000', 39, '081239962713'),
(47, '127.0.0.1', NULL, '$2y$10$Ku1suPcVsdwsKcny5jbjTevtQfuYGcHoYLQlprkhU3YcGSqQLAggC', 'budi.setiawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046995, NULL, 1, 'Gede Budi Setiawan', '1815051083', 50, '081339289008');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(24, 1, 1),
(71, 22, 5),
(48, 23, 2),
(84, 24, 5),
(39, 25, 2),
(40, 26, 2),
(41, 27, 2),
(42, 28, 2),
(73, 29, 5),
(44, 30, 2),
(46, 31, 2),
(47, 32, 2),
(55, 33, 2),
(56, 34, 2),
(57, 35, 2),
(58, 36, 2),
(61, 37, 4),
(82, 38, 4),
(74, 39, 4),
(75, 40, 4),
(76, 41, 4),
(77, 42, 4),
(78, 43, 4),
(79, 44, 4),
(80, 45, 4),
(81, 46, 5),
(85, 47, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_links`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  ADD PRIMARY KEY (`id_detail_hmj`),
  ADD KEY `id_hmj` (`id_hmj`);

--
-- Indexes for table `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  ADD PRIMARY KEY (`id_detail_kegiatan`),
  ADD KEY `id_kegiatan_hmj` (`id_kegiatan_hmj`);

--
-- Indexes for table `s1_hmj`
--
ALTER TABLE `s1_hmj`
  ADD PRIMARY KEY (`id_hmj`);

--
-- Indexes for table `s1_informasi`
--
ALTER TABLE `s1_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  ADD PRIMARY KEY (`id_kegiatan_hmj`),
  ADD KEY `id_hmj` (`id_hmj`);

--
-- Indexes for table `s2_barang`
--
ALTER TABLE `s2_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `s2_organisasi`
--
ALTER TABLE `s2_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_organisasi` (`id_organisasi`);

--
-- Indexes for table `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indexes for table `s3_berita_integer`
--
ALTER TABLE `s3_berita_integer`
  ADD PRIMARY KEY (`id_berita_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indexes for table `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  ADD PRIMARY KEY (`id_detail_hari_integer`),
  ADD KEY `id_hari_integer` (`id_hari_integer`);

--
-- Indexes for table `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  ADD PRIMARY KEY (`id_hari_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indexes for table `s3_integer`
--
ALTER TABLE `s3_integer`
  ADD PRIMARY KEY (`id_integer`);

--
-- Indexes for table `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  ADD PRIMARY KEY (`id_kategori_lomba_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indexes for table `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  ADD PRIMARY KEY (`id_lomba_integer`),
  ADD KEY `id_kategori_lomba_integer` (`id_kategori_lomba_integer`);

--
-- Indexes for table `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  ADD PRIMARY KEY (`id_sponsor_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indexes for table `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `fk_info_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `s4_kegiatan`
--
ALTER TABLE `s4_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  ADD PRIMARY KEY (`id_pilihan`),
  ADD KEY `fk_jabatan_pilihan` (`id_jabatan`),
  ADD KEY `fk_kegiatan_pilihan` (`id_kegiatan`);

--
-- Indexes for table `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  ADD PRIMARY KEY (`id_wawancara`),
  ADD KEY `fk_wawancara_info` (`id_informasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`),
  ADD KEY `fk_company` (`company`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  MODIFY `id_detail_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  MODIFY `id_detail_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `s1_hmj`
--
ALTER TABLE `s1_hmj`
  MODIFY `id_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `s1_informasi`
--
ALTER TABLE `s1_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  MODIFY `id_kegiatan_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `s2_barang`
--
ALTER TABLE `s2_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s2_organisasi`
--
ALTER TABLE `s2_organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s3_berita_integer`
--
ALTER TABLE `s3_berita_integer`
  MODIFY `id_berita_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  MODIFY `id_detail_hari_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  MODIFY `id_hari_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `s3_integer`
--
ALTER TABLE `s3_integer`
  MODIFY `id_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  MODIFY `id_kategori_lomba_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  MODIFY `id_lomba_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  MODIFY `id_sponsor_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `s4_kegiatan`
--
ALTER TABLE `s4_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  MODIFY `id_wawancara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

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
-- Constraints for table `s3_berita_integer`
--
ALTER TABLE `s3_berita_integer`
  ADD CONSTRAINT `s3_berita_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  ADD CONSTRAINT `s3_detail_hari_integer_ibfk_1` FOREIGN KEY (`id_hari_integer`) REFERENCES `s3_hari_integer` (`id_hari_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  ADD CONSTRAINT `s3_hari_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  ADD CONSTRAINT `s3_kategori_lomba_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  ADD CONSTRAINT `s3_lomba_integer_ibfk_1` FOREIGN KEY (`id_kategori_lomba_integer`) REFERENCES `s3_kategori_lomba_integer` (`id_kategori_lomba_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  ADD CONSTRAINT `s3_sponsor_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  ADD CONSTRAINT `fk_info_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `s4_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  ADD CONSTRAINT `fk_jabatan_pilihan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_pilihan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kegiatan_pilihan` FOREIGN KEY (`id_kegiatan`) REFERENCES `s4_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  ADD CONSTRAINT `fk_wawancara_info` FOREIGN KEY (`id_informasi`) REFERENCES `s4_informasi_umum` (`id_informasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_company` FOREIGN KEY (`company`) REFERENCES `jabatan` (`id_pilihan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
