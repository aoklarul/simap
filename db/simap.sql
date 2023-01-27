-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2023 pada 13.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_pkh`
--

CREATE TABLE `jumlah_pkh` (
  `id` int(11) NOT NULL,
  `idKelurahan` int(3) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jumlah_pkh`
--

INSERT INTO `jumlah_pkh` (`id`, `idKelurahan`, `bulan`, `tahun`, `jumlah`) VALUES
(58, 1, 2, 2020, 177),
(59, 2, 2, 2020, 831),
(60, 3, 2, 2020, 244),
(61, 4, 2, 2020, 658),
(62, 5, 2, 2020, 109),
(63, 6, 2, 2020, 124),
(64, 7, 2, 2020, 293),
(65, 8, 2, 2020, 388),
(66, 9, 2, 2020, 186),
(67, 10, 2, 2020, 29),
(68, 11, 2, 2020, 91),
(69, 12, 2, 2020, 106),
(70, 13, 2, 2020, 107),
(71, 14, 2, 2020, 76),
(72, 15, 2, 2020, 44),
(73, 16, 2, 2020, 162),
(74, 17, 2, 2020, 124),
(75, 18, 2, 2020, 134),
(76, 19, 2, 2020, 264),
(77, 20, 2, 2020, 482),
(78, 21, 2, 2020, 162),
(79, 22, 2, 2020, 237),
(80, 23, 2, 2020, 260),
(81, 24, 2, 2020, 403),
(82, 25, 2, 2020, 272),
(83, 26, 2, 2020, 764),
(84, 27, 2, 2020, 718),
(85, 28, 2, 2020, 861),
(86, 29, 2, 2020, 606),
(87, 1, 3, 2020, 181),
(88, 2, 3, 2020, 848),
(89, 3, 3, 2020, 249),
(90, 4, 3, 2020, 665),
(91, 5, 3, 2020, 111),
(92, 6, 3, 2020, 131),
(93, 7, 3, 2020, 295),
(94, 8, 3, 2020, 400),
(95, 9, 3, 2020, 191),
(96, 10, 3, 2020, 29),
(97, 11, 3, 2020, 91),
(98, 12, 3, 2020, 109),
(99, 13, 3, 2020, 107),
(100, 14, 3, 2020, 76),
(101, 15, 3, 2020, 45),
(102, 16, 3, 2020, 161),
(103, 17, 3, 2020, 128),
(104, 18, 3, 2020, 142),
(105, 19, 3, 2020, 262),
(106, 20, 3, 2020, 474),
(107, 21, 3, 2020, 163),
(108, 22, 3, 2020, 241),
(109, 23, 3, 2020, 252),
(110, 24, 3, 2020, 393),
(111, 25, 3, 2020, 279),
(112, 26, 3, 2020, 771),
(113, 27, 3, 2020, 721),
(114, 28, 3, 2020, 859),
(115, 29, 3, 2020, 605),
(116, 1, 4, 2020, 195),
(117, 2, 4, 2020, 976),
(118, 3, 4, 2020, 288),
(119, 4, 4, 2020, 712),
(120, 5, 4, 2020, 122),
(121, 6, 4, 2020, 140),
(122, 7, 4, 2020, 352),
(123, 8, 4, 2020, 436),
(124, 9, 4, 2020, 217),
(125, 10, 4, 2020, 36),
(126, 11, 4, 2020, 97),
(127, 12, 4, 2020, 115),
(128, 13, 4, 2020, 112),
(129, 14, 4, 2020, 91),
(130, 15, 4, 2020, 50),
(131, 16, 4, 2020, 163),
(132, 17, 4, 2020, 132),
(133, 18, 4, 2020, 144),
(134, 19, 4, 2020, 285),
(135, 20, 4, 2020, 536),
(136, 21, 4, 2020, 174),
(137, 22, 4, 2020, 285),
(138, 23, 4, 2020, 279),
(139, 24, 4, 2020, 462),
(140, 25, 4, 2020, 307),
(141, 26, 4, 2020, 830),
(142, 27, 4, 2020, 773),
(143, 28, 4, 2020, 956),
(144, 29, 4, 2020, 669),
(145, 1, 5, 2020, 194),
(146, 2, 5, 2020, 985),
(147, 3, 5, 2020, 290),
(148, 4, 5, 2020, 721),
(149, 5, 5, 2020, 122),
(150, 6, 5, 2020, 140),
(151, 7, 5, 2020, 353),
(152, 8, 5, 2020, 435),
(153, 9, 5, 2020, 217),
(154, 10, 5, 2020, 37),
(155, 11, 5, 2020, 97),
(156, 12, 5, 2020, 116),
(157, 13, 5, 2020, 112),
(158, 14, 5, 2020, 94),
(159, 15, 5, 2020, 49),
(160, 16, 5, 2020, 159),
(161, 17, 5, 2020, 129),
(162, 18, 5, 2020, 145),
(163, 19, 5, 2020, 290),
(164, 20, 5, 2020, 532),
(165, 21, 5, 2020, 178),
(166, 22, 5, 2020, 284),
(167, 23, 5, 2020, 281),
(168, 24, 5, 2020, 465),
(169, 25, 5, 2020, 305),
(170, 26, 5, 2020, 844),
(171, 27, 5, 2020, 779),
(172, 28, 5, 2020, 968),
(173, 29, 5, 2020, 656),
(174, 1, 6, 2020, 194),
(175, 2, 6, 2020, 985),
(176, 3, 6, 2020, 290),
(177, 4, 6, 2020, 721),
(178, 5, 6, 2020, 123),
(179, 6, 6, 2020, 140),
(180, 7, 6, 2020, 354),
(181, 8, 6, 2020, 434),
(182, 9, 6, 2020, 217),
(183, 10, 6, 2020, 37),
(184, 11, 6, 2020, 96),
(185, 12, 6, 2020, 116),
(186, 13, 6, 2020, 112),
(187, 14, 6, 2020, 94),
(188, 15, 6, 2020, 49),
(189, 16, 6, 2020, 159),
(190, 17, 6, 2020, 129),
(191, 18, 6, 2020, 145),
(192, 19, 6, 2020, 290),
(193, 20, 6, 2020, 529),
(194, 21, 6, 2020, 178),
(195, 22, 6, 2020, 282),
(196, 23, 6, 2020, 281),
(197, 24, 6, 2020, 464),
(198, 25, 6, 2020, 304),
(199, 26, 6, 2020, 839),
(200, 27, 6, 2020, 778),
(201, 28, 6, 2020, 963),
(202, 29, 6, 2020, 653),
(203, 1, 7, 2020, 208),
(204, 2, 7, 2020, 955),
(205, 3, 7, 2020, 271),
(206, 4, 7, 2020, 711),
(207, 5, 7, 2020, 119),
(208, 6, 7, 2020, 137),
(209, 7, 7, 2020, 374),
(210, 8, 7, 2020, 426),
(211, 9, 7, 2020, 216),
(212, 10, 7, 2020, 37),
(213, 11, 7, 2020, 95),
(214, 12, 7, 2020, 114),
(215, 13, 7, 2020, 110),
(216, 14, 7, 2020, 94),
(217, 15, 7, 2020, 48),
(218, 16, 7, 2020, 151),
(219, 17, 7, 2020, 129),
(220, 18, 7, 2020, 145),
(221, 19, 7, 2020, 301),
(222, 20, 7, 2020, 507),
(223, 21, 7, 2020, 185),
(224, 22, 7, 2020, 287),
(225, 23, 7, 2020, 277),
(226, 24, 7, 2020, 447),
(227, 25, 7, 2020, 295),
(228, 26, 7, 2020, 849),
(229, 27, 7, 2020, 755),
(230, 28, 7, 2020, 957),
(231, 29, 7, 2020, 623),
(232, 1, 8, 2020, 208),
(233, 2, 8, 2020, 947),
(234, 3, 8, 2020, 271),
(235, 4, 8, 2020, 708),
(236, 5, 8, 2020, 117),
(237, 6, 8, 2020, 127),
(238, 7, 8, 2020, 371),
(239, 8, 8, 2020, 426),
(240, 9, 8, 2020, 216),
(241, 10, 8, 2020, 36),
(242, 11, 8, 2020, 96),
(243, 12, 8, 2020, 117),
(244, 13, 8, 2020, 110),
(245, 14, 8, 2020, 93),
(246, 15, 8, 2020, 48),
(247, 16, 8, 2020, 151),
(248, 17, 8, 2020, 129),
(249, 18, 8, 2020, 145),
(250, 19, 8, 2020, 294),
(251, 20, 8, 2020, 504),
(252, 21, 8, 2020, 158),
(253, 22, 8, 2020, 273),
(254, 23, 8, 2020, 273),
(255, 24, 8, 2020, 442),
(256, 25, 8, 2020, 283),
(257, 26, 8, 2020, 846),
(258, 27, 8, 2020, 747),
(259, 28, 8, 2020, 955),
(260, 29, 8, 2020, 615),
(261, 1, 9, 2020, 211),
(262, 2, 9, 2020, 971),
(263, 3, 9, 2020, 283),
(264, 4, 9, 2020, 745),
(265, 5, 9, 2020, 134),
(266, 6, 9, 2020, 149),
(267, 7, 9, 2020, 355),
(268, 8, 9, 2020, 471),
(269, 9, 9, 2020, 222),
(270, 10, 9, 2020, 34),
(271, 11, 9, 2020, 95),
(272, 12, 9, 2020, 109),
(273, 13, 9, 2020, 120),
(274, 14, 9, 2020, 84),
(275, 15, 9, 2020, 51),
(276, 16, 9, 2020, 153),
(277, 17, 9, 2020, 130),
(278, 18, 9, 2020, 155),
(279, 19, 9, 2020, 282),
(280, 20, 9, 2020, 531),
(281, 21, 9, 2020, 152),
(282, 22, 9, 2020, 279),
(283, 23, 9, 2020, 286),
(284, 24, 9, 2020, 445),
(285, 25, 9, 2020, 299),
(286, 26, 9, 2020, 858),
(287, 27, 9, 2020, 781),
(288, 28, 9, 2020, 948),
(289, 29, 9, 2020, 627),
(290, 1, 10, 2020, 148);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `geojson` varchar(128) NOT NULL,
  `warna` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `geojson`, `warna`) VALUES
(1, 'Pontianak Selatan', 'pontianak_selatan.geojson', '#0000FF'),
(2, 'Pontianak Kota', 'pontianak_kota.geojson', '#964B00'),
(3, 'Pontianak Barat', 'pontianak_barat.geojson', '#FFD700'),
(4, 'Pontianak Utara', 'pontianak_utara.geojson', '#00FF00'),
(5, 'Pontianak Timur', 'pontianak_timur.geojson', '#FF00FF'),
(6, 'Pontianak Tenggara', 'pontianak_tenggara.geojson', '#FF0000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(3) NOT NULL,
  `idKecamatan` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `geojson` varchar(128) NOT NULL,
  `warna` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `idKecamatan`, `nama`, `geojson`, `warna`) VALUES
(1, 3, 'Pal Lima', 'pal_lima.geojson', '#808080'),
(2, 3, 'Sungai Beliung', 'sungai_beliung.geojson', '#0000FF'),
(3, 3, 'Sungai Jawi Dalam', 'sungaijawi_dalam.geojson', '#000080'),
(4, 3, 'Sungai Jawi Luar', 'sungaijawi_luar.geojson', '#00FFFF'),
(5, 2, 'Darat Sekip', 'daratsekip.geojson', '#964B00'),
(6, 2, 'Mariana', 'mariana.geojson', '#FFD700'),
(7, 2, 'Sungai Bangkong', 'sungai_bangkong.geojson', '#00FF00'),
(8, 2, 'Sungai Jawi', 'sungaijawi.geojson', '#800000'),
(9, 2, 'Tengah', 'tengah.geojson', '#FF0000'),
(10, 1, 'Akcaya', 'akcaya.geojson', '#FFFF00'),
(11, 1, 'Benua Melayu Darat', 'benuamelayu_darat.geojson', '#FF00FF'),
(12, 1, 'Benua Melayu Laut', 'benuamelayu_laut.geojson', '#FFC0CB'),
(13, 1, 'Kota Baru', 'kota_baru.geojson', '#6F00FF'),
(14, 1, 'Parit Tokaya', 'parittokaya.geojson', '#BF00FF'),
(15, 6, 'Bangka Belitung Darat', 'bangka_belitung_darat.geojson', '#FF7F00'),
(16, 6, 'Bangka Belitung Laut', 'bangka_belitung_laut.geojson', '#808000'),
(17, 6, 'Bansir Darat', 'bansir_darat.geojson', '#CD5C5C'),
(18, 6, 'Bansir Laut', 'bansir_laut.geojson', '#FFA07A'),
(19, 5, 'Banjar Serasan', 'banjar_serasan.geojson', '#F0E68C'),
(20, 5, 'Dalam Bugis', 'dalambugis.geojson', '#BDB76B'),
(21, 5, 'Parit Mayor', 'paritmayor.geojson', '#4B0082'),
(22, 5, 'Saigon', 'saigon.geojson', '#006400'),
(23, 5, 'Tambelan Sampit', 'tambelansampit.geojson', '#4682B4'),
(24, 5, 'Tanjung Hilir', 'tanjunghilir.geojson', '#BC8F8F'),
(25, 5, 'Tanjung Hulu', 'tanjunghulu.geojson', '#F4A460'),
(26, 4, 'Batu Layang', 'batulayang.geojson', '#000000'),
(27, 4, 'Siantan Hilir', 'siantan_hilir.geojson', '#2F4F4F'),
(28, 4, 'Siantan Hulu', 'siantan_hulu.geojson', '#708090'),
(29, 4, 'Siantan Tengah', 'siantan_tengah.geojson', '#D2691E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id` int(3) NOT NULL,
  `idJumlah_pkh` int(3) NOT NULL,
  `nilai_sem` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `level_user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `image`, `status`, `level_user`) VALUES
(1, 'Alexander Di Caprio', 'alexan', '$2y$10$YY3FHMKQjh7nfftDxMpOBuBDAZ.ThYKH/RcElraKUwSEFhjc4ja22', 'alexan@gmail.com', 'default.jpg', 'Aktif', 'Pengawas'),
(2, 'Michel', 'pengawas', '$2y$10$L3XHN325CeloM6EiuPyKA.0WH3FzhAjbwluVjFHDCqxgdL48hE5bi', 'febri12@gmail.com', 'micel.jpeg', 'Aktif', 'Pengawas'),
(3, 'Chairul Admin', 'admin', '$2y$10$Z0YOy0XSkCNY7wrNwCmbMOfCTrb5drrsdx6UQDswqk74210zdsk3m', 'chairul_admin@gmail.com', 'arul.jpg', 'Aktif', 'Admin'),
(5, 'Muhammad Iqbal', 'iqbal', '$2y$10$L3XHN325CeloM6EiuPyKA.0WH3FzhAjbwluVjFHDCqxgdL48hE5bi', 'iqbal@gmail.com', 'iqbalganteng.jpeg', 'Nonaktif', 'Pengawas'),
(428, 'Naruto Uzumaki', 'naruto', '$2y$10$UJsci6jH4HjDTFOhYgogOejGbwOBCVe3iKahOoLEC6EMjIYoU2V4.', 'naruto@gmail.com', 'default.jpg', 'Nonaktif', 'Pengawas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jumlah_pkh`
--
ALTER TABLE `jumlah_pkh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jumlahpkh_kecamatan` (`idKelurahan`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kelurahan_kecamatan` (`idKecamatan`);

--
-- Indeks untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_perhitungan_jumlahpkh` (`idJumlah_pkh`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jumlah_pkh`
--
ALTER TABLE `jumlah_pkh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jumlah_pkh`
--
ALTER TABLE `jumlah_pkh`
  ADD CONSTRAINT `fk_jumlahpkh_kecamatan` FOREIGN KEY (`idKelurahan`) REFERENCES `kelurahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_kelurahan_kecamatan` FOREIGN KEY (`idKecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD CONSTRAINT `fk_perhitungan_jumlahpkh` FOREIGN KEY (`idJumlah_pkh`) REFERENCES `jumlah_pkh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
