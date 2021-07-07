-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 11:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
-- Table structure for table `jumlah_pkh`
--

CREATE TABLE `jumlah_pkh` (
  `id` int(3) NOT NULL,
  `idKecamatan` int(3) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `tahun` text NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah_pkh`
--

INSERT INTO `jumlah_pkh` (`id`, `idKecamatan`, `bulan`, `tahun`, `jumlah`) VALUES
(7, 3, 'April', '2020', 2171),
(8, 2, 'April', '2020', 1267),
(9, 1, 'April', '2020', 451),
(10, 5, 'April', '2020', 2328),
(11, 6, 'April', '2020', 489),
(12, 4, 'April', '2020', 3228),
(13, 3, 'Mei', '2020', 2190),
(14, 2, 'Mei', '2020', 1267),
(15, 1, 'Mei', '2020', 456),
(16, 6, 'Mei', '2020', 482),
(17, 5, 'Mei', '2020', 2335),
(18, 4, 'Mei', '2020', 3247),
(19, 3, 'Juni', '2020', 2190),
(20, 2, 'Juni', '2020', 1268),
(21, 1, 'Juni', '2020', 455),
(22, 6, 'Juni', '2020', 482),
(23, 5, 'Juni', '2020', 2328),
(24, 4, 'Juni', '2020', 3233),
(25, 3, 'Juli', '2020', 2145),
(26, 2, 'Juli', '2020', 1272),
(27, 1, 'Juli', '2020', 450),
(28, 6, 'Juli', '2020', 473),
(29, 5, 'Juli', '2020', 2299),
(30, 4, 'Juli', '2020', 3184),
(31, 3, 'Agustus', '2020', 2134),
(32, 2, 'Agustus', '2020', 1257),
(33, 1, 'Agustus', '2020', 452),
(34, 6, 'Agustus', '2020', 473),
(35, 5, 'Agustus', '2020', 2227),
(36, 4, 'Agustus', '2020', 3163),
(37, 3, 'September', '2020', 2210),
(38, 2, 'September', '2020', 1331),
(39, 1, 'September', '2020', 442),
(40, 6, 'September', '2020', 489),
(41, 5, 'September', '2020', 2274),
(42, 4, 'September', '2020', 3214);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `geojson` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `geojson`) VALUES
(1, 'Pontianak Selatan', 'pontianak_selatan.geojson'),
(2, 'Pontianak Kota', 'pontianak_kota.geojson'),
(3, 'Pontianak Barat', 'pontianak_barat.geojson'),
(4, 'Pontianak Utara', 'pontianak_utara.geojson'),
(5, 'Pontianak Timur', 'pontianak_timur.geojson'),
(6, 'Pontianak Tenggara', 'pontianak_tenggara.geojson');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(3) NOT NULL,
  `idKecamatan` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `geojson` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `idKecamatan`, `nama`, `geojson`) VALUES
(1, 3, 'Pal Lima', 'pal_lima.geojson'),
(2, 3, 'Sungai Beliung', 'sungai_beliung.geojson'),
(3, 3, 'Sungaijawi Dalam', 'sungaijawi_dalam.geojson'),
(4, 3, 'Sungaijawi Luar', 'sungaijawi_luar.geojson'),
(5, 2, 'Daratsekip', 'daratsekip.geojson'),
(6, 2, 'Mariana', 'mariana.geojson'),
(7, 2, 'Sungai Bangkong', 'sungai_bangkong.geojson'),
(8, 2, 'Sungaijawi', 'sungaijawi.geojson'),
(9, 2, 'Tengah', 'tengah.geojson'),
(10, 1, 'Akcaya', 'akcaya.geojson'),
(11, 1, 'Benuamelayu Darat', 'benuamelayu_darat.geojson'),
(12, 1, 'Benuamelayu Laut', 'Benuamelayu_laut.geojson'),
(13, 1, 'Kota Baru', 'kota_baru.geojson'),
(14, 1, 'Parittokaya', 'parittokaya.geojson'),
(15, 6, 'Bangka Belitung Darat', 'bangka_belitung_darat.geojson'),
(16, 6, 'Bangka Belitung Laut', 'bangka_belitung_laut.geojson'),
(17, 6, 'Bansir Darat', 'bansir_darat.geojson'),
(18, 6, 'Bansir Laut', 'bansir_laut.geojson'),
(19, 5, 'Banjar Serasan', 'banjar_serasan.geojson'),
(20, 5, 'Dalambugis', 'dalambugis.geojson'),
(21, 5, 'Paritmayor', 'paritmayor.geojson'),
(22, 5, 'Saigon', 'saigon.geojson'),
(23, 5, 'Tambelansampit', 'tambelansampit.geojson'),
(24, 5, 'Tanjunghulu', 'tanjunghulu.geojson'),
(25, 5, 'Tanjunghilir', 'tanjunghilir.geojson'),
(26, 4, 'Batulayang', 'batulayang.geojson'),
(27, 4, 'Siantan Hilir', 'siantan_hilir.geojson'),
(28, 4, 'Siantan Hulu', 'siantan_hulu.geojson'),
(29, 4, 'Siantan Tengah', 'siantan_tengah.geojson');

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id` int(3) NOT NULL,
  `idJumlah_pkh` int(3) NOT NULL,
  `nilai_sem` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `image`, `status`, `level_user`) VALUES
(1, 'Chairul', 'admin', '$2y$10$L3XHN325CeloM6EiuPyKA.0WH3FzhAjbwluVjFHDCqxgdL48hE5bi', 'chairul@gmail.com', '005940800_1552970791-fotoHL_kucing.jpg', 'Aktif', 'Admin'),
(2, 'Muhammad Febri', 'pengawas', '$2y$10$MHrDBgdjupWta6Uekpptsen.y9gGM3pyFZa8PX3D7d5PtUFoflg6u', 'febri12@gmail.com', '1200px-White_domesticated_duck,_stretching.jpg', 'Aktif', 'Pengawas'),
(5, 'Muhammad Iqbal', 'iqbal', '$2y$10$7FISbcYOLQ0aO5bFJnu.qOykfzZJIilIPA5OvTAOsvaxW2oJZl2eK', 'iqbal@gmail.com', '133149-1000xauto-anak-anjing-lucu.jpg', 'Aktif', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jumlah_pkh`
--
ALTER TABLE `jumlah_pkh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jumlahpkh_kecamatan` (`idKecamatan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kelurahan_kecamatan` (`idKecamatan`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_perhitungan_jumlahpkh` (`idJumlah_pkh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jumlah_pkh`
--
ALTER TABLE `jumlah_pkh`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jumlah_pkh`
--
ALTER TABLE `jumlah_pkh`
  ADD CONSTRAINT `fk_jumlahpkh_kecamatan` FOREIGN KEY (`idKecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_kelurahan_kecamatan` FOREIGN KEY (`idKecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD CONSTRAINT `fk_perhitungan_jumlahpkh` FOREIGN KEY (`idJumlah_pkh`) REFERENCES `jumlah_pkh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
