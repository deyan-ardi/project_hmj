-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Agu 2020 pada 17.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id_links` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `href` varchar(200) NOT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`id_links`, `title`, `icon`, `href`, `type`) VALUES
(9, 'Website', 'fas fa-globe', 'web/home', 'main');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `readme`
--

CREATE TABLE `readme` (
  `Kode` varchar(2) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `readme`
--

INSERT INTO `readme` (`Kode`, `Keterangan`) VALUES
('s1', 'Sistem HMJ dan Repositori'),
('s2', 'Sistem Inventaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_detail_hmj`
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
-- Dumping data untuk tabel `s1_detail_hmj`
--

INSERT INTO `s1_detail_hmj` (`id_detail_hmj`, `id_hmj`, `nama_bidang`, `deskripsi_bidang`, `ketua_nama`, `ketua_foto`) VALUES
(7, 16, 'Pendidikan dan Penalaran ', '<p style=\"text-align:justify;\">Bidang yang menaungi dan memfasilitasi mahasiswa Jurusan Teknik Informatika dalam bidang pendidikan dan penalaran, seperti PKM, PMW dan Jurnalistik. Bidang 1 HMJ Teknik Informatika terdiri atas dua sub-bidang yaitu Sub-Bidang Karya Ilmiah dan Sub-Bidang Jurnalistik</p>', ' Gede Budi Setiawan', '20200824140454.png'),
(8, 16, 'Minat dan Bakat ', '<p style=\"text-align:justify;\">Bidang yang menaungi dan memfasilitasi Minat dan Bakat mahasiswa Teknik Informatika baik dibidang Akademik maupun non Akademik. Didalam bidang 2 terdapat beberapa sub bidang yang diantaranya adalah Sub Bidang Olaharaga dan Sub Bidang Seni yang didalamnya dibagi menjadi sub-sub bidang lainnya.</p>', 'Putu Erik Hendrawan', '20200824140548.png'),
(9, 16, 'Kesejahteraan Mahasiswa', '<p style=\"text-align:justify;\">Bidang yang bertugas menaungi bagian kerumah tanggaan pada intern HMJ TI. Pada bidang 3 terdapat beberapa Sub bidang yakni Sub Bidang Kewirausahaan, Sub Bidang Inventaris, Sub Bidang Kesejahteraan Mahasiswa, dan Sub Bidang Suka Duka</p>', 'Rifki Nur Fauzi', '20200824140629.png'),
(10, 16, 'Pengabdian Masyarakat', '<p style=\"text-align:justify;\">Bidang yang bertugas menaungi pengabdian kepada masyarakat. Pada Bidang 4 HMJ TI memiliki beberapa sub bidang didalamnya, diantaranya adalah Sub Bidang Humas, Sub Bidang Intern Kampus, dan Sub Bidang Masyarakat.</p>', 'Willy Yogantara Sidhi', '20200824140750.png'),
(11, 16, 'Teknologi', '<p style=\"text-align:justify;\">Bidang yang menaungi aktivitas media informasi HMJ TI serta komunitas-komunitas yang bergerak dalam bidang TI. Pada bidang 5, terdapat beberapa sub bidang yakni Sub Bidang Informasi dan Komunikasi, Sub Bidang Komunitas TKJ dan Robotik, Sub Bidang Komunitas Programming, dan Sub Bidang Komunitas Multimedia.</p>', 'I Gede Riyan Ardi Darmawan', '20200824140840.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_detail_kegiatan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_hmj`
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
-- Dumping data untuk tabel `s1_hmj`
--

INSERT INTO `s1_hmj` (`id_hmj`, `nama_hmj`, `deskripsi_hmj`, `ketua_hmj`, `ketua_foto`, `wakil_hmj`, `wakil_foto`, `visi_hmj`, `misi_hmj`, `vertikal_struktur_hmj`, `landscape_struktur_hmj`, `status_pakai`, `create_by`, `create_at`, `update_at`) VALUES
(16, 'HMJ TI Undiksha 2020-2021', '<p style=\"text-align:justify;\">Repositori ini digunakan untuk menyimpan segala file yang berkaitan dengan kegiatan-kegiatan yang dilaksanakan oleh kepengurusan HMJ TI Undiksha 2020-2021</p>', 'Irfan Walhidayah', '1f7c6659dbd16ea69d52ce5af7536069.png', 'Putu Zasya Eka Satya Nugraha', '3df2cb61563fe9f31a3a633f92acf1e2.png', '<p style=\"text-align:justify;\">Mewujudkan Himpunan Mahasiswa Jurusan Teknik Informatika Yang PATEN (Profesional, Aktif, Transparansi, Empati, dan Nasionalis) serta Berkualitas, Berkarakter, dan Unggul baik di bidang Akademik maupun non Akademik</p>', '<ol><li style=\"text-align:justify;\">Menjadikan HMJ Teknik Informatika sebagai wadah untuk menampung aspirasi bagi seluruh Mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Menjadikan HMJ Teknik Informatika sebagai wadah untuk menampung aspirasi bagi seluruh Mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Bersinergi serta Mengayomi seluruh mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Menyelenggarakan program kerja yang menarik dan bermanfaat bagi seluruh Mahasiswa Teknik Informatika dengan tetap berpegang teguh pada Falsafah Tri Hita Karana</li><li style=\"text-align:justify;\">Memfasilitasi serta mengapresiasi mahasiswa Teknik Informatika untuk meningkatkan serta mengembangkan minat dan bakat. Guna mewujudkan mahasiswa Teknik Informatika yang berprestasi baik dibidang akademik maupun non akademik</li><li style=\"text-align:justify;\">Memegang teguh nilai kebersamaan dan kekeluargaan tanpa terjadi perselisihan baik di lingkungan internal maupun eksternal</li></ol>', 'db7fd6535ea7cddbc0d956b6c54d07a9.png', '6f7df0f103c4873dcd8a4d541549721f.png', 1, 'Admin', '2020-08-24 01:27:04', '2020-08-24 01:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_informasi`
--

CREATE TABLE `s1_informasi` (
  `id_informasi` int(11) NOT NULL,
  `foto1_informasi` text NOT NULL,
  `foto2_informasi` text DEFAULT NULL,
  `foto3_informasi` text DEFAULT NULL,
  `video_informasi` text DEFAULT NULL,
  `nama_kepengurusan` varchar(60) NOT NULL,
  `judul_informasi` varchar(40) NOT NULL,
  `kategori_informasi` varchar(20) NOT NULL,
  `konten_informasi` text NOT NULL,
  `file_informasi` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_kegiatan_hmj`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_barang`
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
-- Struktur dari tabel `s2_detail_peminjaman`
--

CREATE TABLE `s2_detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `harga_pinjaman` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `s2_detail_peminjaman`
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
-- Struktur dari tabel `s2_organisasi`
--

CREATE TABLE `s2_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `ketua_organisasi` varchar(50) NOT NULL,
  `notelp_organisasi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_peminjam`
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
-- Struktur dari tabel `s2_peminjaman`
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
-- Trigger `s2_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `Selesai_pinjam` AFTER UPDATE ON `s2_peminjaman` FOR EACH ROW BEGIN
	DELETE FROM s2_detail_peminjaman WHERE OLD.id_peminjaman = s2_peminjaman.id_peminjaman AND s2_peminjaman.status_peminjaman = 2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$zotV59v60G..Z2mko/zs0uGOQ6gAs9FyMaPckq5OvwfdtLGi6eNQ2', 'hmjtiundiksha@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1598353437, 1, 'Admin', '1815091037', 'Administrator', '081915656865'),
(4, '127.0.0.1', NULL, '$2y$10$g/F9rFfU0BI6v592ioVx1u7Mu8DzSrRdSotsIguNj8fPneI9lki4m', 'irfan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366481, NULL, 1, 'IRFAN WALHIDAYAH', '1815091002', 'Ketua', '08983197636'),
(5, '127.0.0.1', NULL, '$2y$10$dEJhYDARQm2KLVc3eTRNFOW3riiKQx7SJkNtu6IVosZouEjs43nym', 'budi.setiawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366533, NULL, 1, 'Gede Budi Setiawan', '1815051083', 'Koor Bidang 1', '081339289008'),
(6, '127.0.0.1', NULL, '$2y$10$8f8cN68JlmYR06enqHt3bedJHxDRsc.SjpznWRMt1Dk0eSsQ4P346', 'riyan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366575, NULL, 1, 'I Gede Riyan Ardi Darmawan', '1815091037', 'Koor Bidang 5', '081915656865'),
(7, '127.0.0.1', NULL, '$2y$10$SJfWbTDGZKBYEp5WI1.Dde1DAoq/46Ps9djX7LRe8OMvSnaCf8qtS', 'willy@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366639, NULL, 1, 'Willy Yogantara Sidhi', '1815091063', 'Koor Bidang 4', '087853652474'),
(8, '127.0.0.1', NULL, '$2y$10$t90cFNvkVrmnqhWHMSuj7OrSy6Q97DE7l2yXXVu7H3gwX9xGwZ7EC', 'primadwi84@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366719, NULL, 1, 'Dwi Prima Handayani Putri', '1915101012', 'Bendahara II', '081246342145'),
(9, '127.0.0.1', NULL, '$2y$10$Ei8Psz3K2AemekBhdei7cuaDT5Dwcldb47DrmfVqAnkycLjpE7b1e', 'komangdianary23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366786, NULL, 1, 'Komang Dian Ary Kristiadi', '1815051040', 'Sekretaris I', '081339320140'),
(10, '127.0.0.1', NULL, '$2y$10$SlIzdi2xRdhVBrSn21Peb.g..fA1V8KEEvV.7xhuc3W7imRqpu4dm', 'gustiaditya123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366830, NULL, 1, 'Gusti Aditya Trisna Murti', '1815051092', 'Bendahara I', '0895395013615'),
(11, '127.0.0.1', NULL, '$2y$10$rnOqYpYSj4AU8xCCeFPRhe2Mld/.52Y.1SXBHIOmL/84Ls.TATEMS', 'bagus.alviantara@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366877, NULL, 1, 'I Made Bagus Alviantara', '1915091037', 'Koor Prodi SI', '082236608104'),
(12, '127.0.0.1', NULL, '$2y$10$OKhDauuCVTkRkLvhykaMJuQWlz7d3Uya40SuoDhszirGWuqcBDsd.', 'beny.indrawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366921, NULL, 1, 'Gede Beny Indrawan', '1915101002', 'Koor Prodi ILKOM', '087761750517'),
(13, '127.0.0.1', NULL, '$2y$10$GgBXaa793c8eXSCroLAoZeWI2l03E53j8SjmhEzfXZy07Ooj9MDvS', 'zasyasatya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598366964, NULL, 1, 'Putu Zasya Eka Satya Nugraha', '1915051024', 'Wakil Ketua', '081238824262'),
(14, '127.0.0.1', NULL, '$2y$10$HcFAFtNne78jsu.cy78Ix.yqZb2z6pnv3b2oB4cjwPI4ojcUMrCbq', 'anisamarta17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367010, NULL, 1, 'Ni Putu Anisa Marta Widyasari', '1915091024', 'Sekretaris II', '081235170840'),
(15, '127.0.0.1', NULL, '$2y$10$EcWpGLCa908k7FfAihqe2.Q3vjZtx7.UfIq4vL7zhhUiOuQ7pE0Wm', 'rifki@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367059, NULL, 1, 'Rifki Nur Fauzi', '1815091048', 'Koor Bidang 3', '08980138994'),
(16, '127.0.0.1', NULL, '$2y$10$HSg8e7NjHVjaqXtWINX8WOLIQQBYhwgWORvjbtVyzDZvsuHMc6URG', 'ega@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367098, NULL, 1, 'I Putu Ega Suwidi Darma', '1805021012', 'Koor Prodi MI', '08523774442'),
(17, '127.0.0.1', NULL, '$2y$10$.PbI5DpKftREFzSKRj/zjOrlwLx.LeTueNni.he7fAKUeVxgQpKOK', 'erik@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367131, NULL, 1, 'Putu Erik Hendrawan', '1815051052', 'Koor Bidang 2', '08980244454'),
(18, '127.0.0.1', NULL, '$2y$10$bDcwWvWvkxwGuXCTKC7hjuQSRUFGIKRCtc2LwdOW5OlKqBq1C9M.K', 'dwiki.anggara49@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1598367167, NULL, 1, 'I Made Dwiki Pasek Anggara', '1815051078', 'Koor Prodi PTI', '089606254400');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_links`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  ADD PRIMARY KEY (`id_detail_hmj`),
  ADD KEY `id_hmj` (`id_hmj`);

--
-- Indeks untuk tabel `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  ADD PRIMARY KEY (`id_detail_kegiatan`),
  ADD KEY `id_kegiatan_hmj` (`id_kegiatan_hmj`);

--
-- Indeks untuk tabel `s1_hmj`
--
ALTER TABLE `s1_hmj`
  ADD PRIMARY KEY (`id_hmj`);

--
-- Indeks untuk tabel `s1_informasi`
--
ALTER TABLE `s1_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  ADD PRIMARY KEY (`id_kegiatan_hmj`),
  ADD KEY `id_hmj` (`id_hmj`);

--
-- Indeks untuk tabel `s2_barang`
--
ALTER TABLE `s2_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `s2_organisasi`
--
ALTER TABLE `s2_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_organisasi` (`id_organisasi`);

--
-- Indeks untuk tabel `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  MODIFY `id_detail_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  MODIFY `id_detail_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `s1_hmj`
--
ALTER TABLE `s1_hmj`
  MODIFY `id_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `s1_informasi`
--
ALTER TABLE `s1_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  MODIFY `id_kegiatan_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `s2_barang`
--
ALTER TABLE `s2_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_organisasi`
--
ALTER TABLE `s2_organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  ADD CONSTRAINT `s1_detail_hmj_ibfk_1` FOREIGN KEY (`id_hmj`) REFERENCES `s1_hmj` (`id_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  ADD CONSTRAINT `s1_detail_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan_hmj`) REFERENCES `s1_kegiatan_hmj` (`id_kegiatan_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  ADD CONSTRAINT `s1_kegiatan_hmj_ibfk_2` FOREIGN KEY (`id_hmj`) REFERENCES `s1_hmj` (`id_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  ADD CONSTRAINT `s2_detail_peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `s2_barang` (`id_barang`),
  ADD CONSTRAINT `s2_detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `s2_peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  ADD CONSTRAINT `s2_peminjam_ibfk_2` FOREIGN KEY (`id_organisasi`) REFERENCES `s2_organisasi` (`id_organisasi`);

--
-- Ketidakleluasaan untuk tabel `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  ADD CONSTRAINT `s2_peminjaman_ibfk_1` FOREIGN KEY (`id_peminjam`) REFERENCES `s2_peminjam` (`id_peminjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
