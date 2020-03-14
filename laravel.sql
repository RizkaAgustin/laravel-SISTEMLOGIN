-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2020 pada 19.38
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_users`
--

CREATE TABLE `model_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_users`
--

INSERT INTO `model_users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Iis Maesaroh', 'admin', 'admin@gmail.com', NULL, '$2y$10$OKCieHDo9/VPvDbWkzlufegrd91Btz/fjF9lY9VZjD9Ug9kywb34C', NULL, '2020-02-09 03:33:15', '2020-02-09 03:33:15'),
(5, 'Rizka Agustin', 'superadmin', 'superadmin@gmail.com', NULL, '$2y$10$9EMHFiuaHlMrOBinYQWx9eaznJz79cc15tSFUQx/73JD.kD97wtJK', NULL, '2020-02-09 03:33:58', '2020-02-09 03:33:58'),
(6, 'Amira Syifa\r\n', 'user', 'user@gmail.com', NULL, '$2y$10$kvQiCxuBa5IFtxi3vjThN.seVafDfkZnIXyjsB7aOcXbAPHq6t1tu', NULL, '2020-02-09 07:10:51', '2020-02-09 07:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskripsi_si`
--

CREATE TABLE `tb_deskripsi_si` (
  `id` int(11) NOT NULL,
  `id_kategori_si` int(11) NOT NULL,
  `id_eselon1` int(11) NOT NULL,
  `nama_url` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskripsi_web`
--

CREATE TABLE `tb_deskripsi_web` (
  `id` int(11) NOT NULL,
  `id_kategori_web` int(11) NOT NULL,
  `id_eselon1` int(11) NOT NULL,
  `nama_url` varchar(255) NOT NULL,
  `nama_eselon` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` mediumtext NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_deskripsi_web`
--

INSERT INTO `tb_deskripsi_web` (`id`, `id_kategori_web`, `id_eselon1`, `nama_url`, `nama_eselon`, `ip_address`, `deskripsi`, `status`, `image`, `update_at`) VALUES
(1, 1, 1, 'http://ppid.menlhk.go.id/', 'Sekretarial Jenderal', '123436578', 'Sesuai dengan amanat pasal 13 UU No.14 Tahun 2008, Kementerian Lingkungan Hidup dan Kehutanan sebagai salah satu Badan Publik telah membentuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) melalui Keputusan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor : SK. 185/MENLHK/SETJEN/HMS.3/4/2017 tentang Pejabat Pengelola Informasi dan Dokumentasi (PPID) Lingkup Kementerian Lingkungan Hidup dan Kehutanan . Dengan terbentuknya Pejabat Pengelola Informasi dan Dokumentasi (PPID) pemohon informasi sesuai dengan haknya dapat memperoleh informasi publik yang dihasilkan oleh Kementerian Lingkungan Hidup dan Kehutanan sesuai dengan ketentuan dalam UU No. 14 Tahun 2008.\r\n\r\nUntuk mengatur pelaksanaan pelayanan informasi melalui PPID di lingkungan Kementerian Lingkungan Hidup dan Kehutanan, maka disusun Peraturan Menteri Lingkungan Hidup dan Kehutanan P.18 Tahun 2018 tentang Pelayanan Informasi Publik di lingkungan Kementerian Lingkungan Hidup dan Kehutanan.\r\n\r\n\r\nVisi\r\nMewujudkan hak setiap orang untuk berkomunikasi dan memperoleh informasi \r\n\r\nMisi\r\nMenjamin pelayanan informasi dalam waktu yang cepat, dengan cara yang sederhana, dan dengan biaya yang murah.\r\nInovasi teknologi untuk mendukung implementasi keterbukaan informasi publik.\r\nMendorong partisipasi masyarakat dan meningkatkan akuntabilitas dlm proses pengambilan kebijakan publik.', 'Aktif', '', '2020-02-27 02:30:39'),
(2, 2, 2, 'http://itjen.menlhk.go.id', 'Sekretarial Jenderal', '546698976412', '\r\n\r\nDalam pelaksanaan tugas dan fungsi tersebut, Inspektorat Jenderal dibantu oleh unit organisasi Eselon II yang meliputi Sekretariat Inspektorat Jenderal, Inspektorat Wilayah I, Inspektorat Wilayah II, Inspektorat Wilayah III, Inspektorat Wilayah IV dan Inspektorat Investigasi. Adapun tugas dan fungsi unit organisasi Eselon II lingkup Inspektorat Jenderal Kementerian Lingkungan Hidup dan Kehutanan adalah sebagai berikut :\r\n\r\nInspektorat Wilayah I mempunyai tugas melaksanakan pengawasan intern terhadap kinerja, keuangan dan administrasi melalui audit, reviu, evaluasi, pemantauan, dan kegiatan pengawasan lainnya, pengawasan untuk tujuan tertentu termasuk pendanaan dekonsentrasi, tugas pembantuan dan dana alokasi khusus pada unit-unit kerja ', 'Aktif', '', '2020-02-27 02:30:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_eselon1`
--

CREATE TABLE `tb_eselon1` (
  `id` int(11) NOT NULL,
  `nama_eselon1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_eselon1`
--

INSERT INTO `tb_eselon1` (`id`, `nama_eselon1`) VALUES
(1, 'Sekretariat Jenderal'),
(2, 'Inspektorat Jenderal'),
(3, 'Planologi Kehutanan Dan Tata Lingkungan'),
(4, 'Konservasi Sumber Daya Alam Dan Ekosistem'),
(5, 'Pengendalian DAS Dan Hutan Lindung'),
(6, 'Pengelolaan Hutan Dan Produksi Lestari'),
(7, 'Pengendalian Pencemaran Dan Kerusakan Lingkungan'),
(8, 'Pengelolaan Sampah, Limbah Dan B3'),
(9, 'Pengendalian Perubahan Iklim'),
(10, 'Perhutanan Sosial Dan Kemitraan Lingkungan'),
(11, 'Penegakkan Hukum Lingkungan Hidup Dan Kehutanan'),
(12, 'BP2SDM'),
(13, 'Badan Litbang Dan Inovasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_si`
--

CREATE TABLE `tb_kategori_si` (
  `id` int(11) NOT NULL,
  `id_eselon1` int(11) NOT NULL,
  `nama_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_web`
--

CREATE TABLE `tb_kategori_web` (
  `id` int(11) NOT NULL,
  `id_eselon1` int(11) NOT NULL,
  `nama_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_web`
--

INSERT INTO `tb_kategori_web` (`id`, `id_eselon1`, `nama_url`) VALUES
(1, 1, 'http://ppid.menlhk.go.id/'),
(2, 2, 'http://itjen.menlhk.go.id/'),
(3, 3, 'http://pktl.menlhk.go.id/'),
(4, 4, 'http://ksdae.menlhk.go.id/'),
(5, 5, 'http://sim-pdashl.menlhk.go.id/'),
(6, 6, 'http://phpl.menlhk.go.id/'),
(7, 7, 'https://ppkl.menlhk.go.id/website/index.php'),
(8, 8, 'http://pslb3.menlhk.go.id/'),
(9, 9, 'http://ditjenppi.menlhk.go.id/'),
(10, 10, 'http://pskl.menlhk.go.id/'),
(11, 11, 'http://gakkum.menlhk.go.id/'),
(12, 12, 'http://bp2sdm.menlhk.go.id/'),
(13, 13, 'https://www.forda-mof.org/');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_users`
--
ALTER TABLE `model_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_deskripsi_si`
--
ALTER TABLE `tb_deskripsi_si`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori_si` (`id_kategori_si`),
  ADD KEY `id_eselon1` (`id_eselon1`);

--
-- Indeks untuk tabel `tb_deskripsi_web`
--
ALTER TABLE `tb_deskripsi_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori_web` (`id_kategori_web`),
  ADD KEY `id_eselon1` (`id_eselon1`);

--
-- Indeks untuk tabel `tb_eselon1`
--
ALTER TABLE `tb_eselon1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori_si`
--
ALTER TABLE `tb_kategori_si`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_eselon1` (`id_eselon1`);

--
-- Indeks untuk tabel `tb_kategori_web`
--
ALTER TABLE `tb_kategori_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_eselon1` (`id_eselon1`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `model_users`
--
ALTER TABLE `model_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_deskripsi_si`
--
ALTER TABLE `tb_deskripsi_si`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_deskripsi_web`
--
ALTER TABLE `tb_deskripsi_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_eselon1`
--
ALTER TABLE `tb_eselon1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_si`
--
ALTER TABLE `tb_kategori_si`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_web`
--
ALTER TABLE `tb_kategori_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_deskripsi_si`
--
ALTER TABLE `tb_deskripsi_si`
  ADD CONSTRAINT `tb_deskripsi_si_ibfk_1` FOREIGN KEY (`id_kategori_si`) REFERENCES `tb_kategori_si` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_deskripsi_si_ibfk_2` FOREIGN KEY (`id_eselon1`) REFERENCES `tb_eselon1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_deskripsi_web`
--
ALTER TABLE `tb_deskripsi_web`
  ADD CONSTRAINT `tb_deskripsi_web_ibfk_1` FOREIGN KEY (`id_kategori_web`) REFERENCES `tb_kategori_web` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_deskripsi_web_ibfk_2` FOREIGN KEY (`id_eselon1`) REFERENCES `tb_eselon1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kategori_si`
--
ALTER TABLE `tb_kategori_si`
  ADD CONSTRAINT `tb_kategori_si_ibfk_1` FOREIGN KEY (`id_eselon1`) REFERENCES `tb_eselon1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kategori_web`
--
ALTER TABLE `tb_kategori_web`
  ADD CONSTRAINT `tb_kategori_web_ibfk_1` FOREIGN KEY (`id_eselon1`) REFERENCES `tb_eselon1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
