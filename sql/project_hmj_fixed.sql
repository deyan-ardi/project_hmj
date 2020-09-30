-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2020 at 12:23 PM
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
(2, 'members', 'General User'),
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
(50, 'Sie Pengda', '2020-09-26 23:59:46');

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
(9, 'Website', 'fas fa-globe', 'web/home', 'main');

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
(56, 'b30969944da34481272232e8f9d9bd48.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'ada deg', 'Pengumuman', '<p style=\"text-align:justify\">????[INFINITY]<br />\r\n????[INFO JURUSAN]</p>\r\n\r\n<p style=\"text-align:justify\">Om Swastyatu<br />\r\nAssalamualaikum Warahmatulahhi Wabarakatuh<br />\r\nShalom<br />\r\nNamo Budhaya<br />\r\nSalam Harmoni????????<br />\r\nHallo INFINITY????????????????????????<br />\r\n&bull; INFO PENDATAAN UKURAN BAJU DAN JAKET MAHASISWA BARU<br />\r\nDiinformasikan kepada seluruh Mahasiswa Baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan untuk melengkapi data ukuran baju dan jaket pada link berikut:<br />\r\nhttps://bit.ly/PendataanBajuJaket<br />\r\nSekian Informasi yang dapat kami sampaikan,<br />\r\nRemember to stay safe and healthy????<br />\r\nAtas perhatiannya kami ucapkan terima kasih????????????????</p>\r\n\r\n<p style=\"text-align:justify\">#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTeknologi</p>\r\n', NULL, '2020-09-14 19:19:17', 'Admin');

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
(2, 19, 'ada', '2', 'ada', 'ada', NULL, 'c4351de5c3994226fef3ae695947fcac.png', NULL, NULL, '2020-09-28 13:46:01', 'Admin'),
(3, 19, 'adad', '2', 'adad', 'ad', '21f7309c0a42925203668c9b91c975be.pdf', '93bfb01738b432f28334f21365119b96.jpg', NULL, NULL, '2020-09-28 18:10:18', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s3_detail_hari_integer`
--

CREATE TABLE `s3_detail_hari_integer` (
  `id_detail_hari_integer` int(11) NOT NULL,
  `id_hari_integer` int(11) NOT NULL,
  `nama_detail_hari_integer` varchar(200) NOT NULL,
  `waktu_mulai_jam` varchar(2) NOT NULL,
  `waktu_mulai_menit` varchar(2) NOT NULL,
  `waktu_akhir_jam` varchar(2) NOT NULL,
  `waktu_akhir_menit` varchar(2) NOT NULL,
  `tempat_detail_hari_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s3_hari_integer`
--

CREATE TABLE `s3_hari_integer` (
  `id_hari_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_hari_integer` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3_hari_integer`
--

INSERT INTO `s3_hari_integer` (`id_hari_integer`, `id_integer`, `nama_hari_integer`, `create_at`, `create_by`) VALUES
(4, 19, '2020-09-30', '2020-09-28 11:55:34', 'Admin');

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
(19, 'ada', '878f35280a86fe40e19cca46399fe101.png', 'f5fb987af0f577ae113b7cd52c291141.mp4', 'ada', 'ada', 1, '2020-09-28 11:34:16', 'Admin');

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
  `pendaftaran_lomba_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 19, 'ada', 'ada', 'c2074d19e3448b20b1f900263a7acfce.png', '2020-09-28 11:52:10', 'Admin');

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

--
-- Dumping data for table `s4_informasi_umum`
--

INSERT INTO `s4_informasi_umum` (`id_informasi`, `id_kegiatan`, `nim`, `nama_lengkap`, `angkatan`, `jenis_kelamin`, `agama`, `alamat_asal`, `alamat_sekarang`, `email`, `wa`, `prodi`, `pilihan_wajib`, `pilihan_opsional`, `riwayat_kesehatan`, `hobi`, `motto`, `ipk`, `sd`, `thn_sd`, `smp`, `thn_smp`, `sma`, `thn_sma`, `file_foto`, `file_dokumen`, `ket_wawancara`, `diterima_di`, `ket_lulus`, `create_at`) VALUES
(1, 1, '1815091037', 'I Gede Riyan Ardi Darmawan', 2018, 'Laki-Laki', 'Hindu', '<p>Lovina</p>\r\n', '<p>Lovina</p>\r\n', 'riyan.clsg11@gmail.com', '081915656865', 'SI', ' Sie Acara', 'Sie Expo', NULL, NULL, NULL, 4, 'SD N 2 Kalibukbuk', '2012', 'SMP N 2 Singaraja', '2015', 'SMA N 1 Singaraja', '2018', NULL, NULL, 0, 'Belum Ada', 0, '2020-09-27 00:20:08'),
(2, 1, '1815091038', 'Kadek Bagus Genjing', 2020, 'Laki-Laki', 'Konghucu', '<p>Ada</p>\r\n', '<p>Ada</p>\r\n', 'riyan.clsg@yahoo.com', '081915656865', 'ILKOM', ' Sie Acara', 'Sie Pengda', NULL, NULL, NULL, 3, 'sd', '2020', 'sd', '2020', 'sd', '2020', NULL, NULL, 0, 'Belum Ada', 0, '2020-09-27 00:22:36');

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
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
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
(1, 'b5e51c9ab7a64064a8e1aa4ee97c6b2b.png', 'Kepanitiaan Integer', '<p>Kepanitian Integer #2</p>\r\n', '<p>Mahasiswa Undiksha</p>\r\n', '2020-09-27', '2020-09-29', 1, 2, 2, 0, 0, 1, 0, 1, 0, 0, '2020-09-26 23:56:50', 'Admin');

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
(1, 1, 47),
(2, 1, 48),
(3, 1, 49),
(4, 1, 50);

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
(1, '127.0.0.1', 'administrator', '$2y$12$BEzghKoXZdRN9TvTBKG/gO2Fmd5nARtU6QAFEj9pjl9sH3Y3VmFp.', 'hmjtiundiksha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1268889823, 1601287182, 1, 'Admin', '1815091037', 46, '081915656865'),
(21, '127.0.0.1', NULL, '$2y$10$uaGnGP/qqL6DwDGpF7Uyke7g0Az3R7pKoSC0Vu5sL5nHkHxg30oU6', 'riyan.clsg11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601135894, 1601137099, 1, 'I Gede Riyan Ardi Darmawan', '1815091037', 38, '081915656865');

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
(27, 21, 5);

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
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
  MODIFY `id_berita_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  MODIFY `id_detail_hari_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  MODIFY `id_hari_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `s3_integer`
--
ALTER TABLE `s3_integer`
  MODIFY `id_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  MODIFY `id_kategori_lomba_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  MODIFY `id_lomba_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  MODIFY `id_sponsor_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s4_kegiatan`
--
ALTER TABLE `s4_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  MODIFY `id_wawancara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
