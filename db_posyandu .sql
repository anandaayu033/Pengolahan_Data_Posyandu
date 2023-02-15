-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 23, 2023 at 04:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` date DEFAULT NULL,
  `alamat` varchar(25) NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `perayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `nik`, `nama`, `tgl`, `alamat`, `agama`, `tempat_lahir`, `jk`, `ibu`, `ayah`, `perayah`) VALUES
(20, '2002563273726764', 'Milah Fauziah', '2017-02-09', 'Jln. Jatinegara RT/02 RW/', 'Islam', 'Sumedang', 'Perempuan', 'Yani', 'Yubi', 'Wiraswasta'),
(21, '20083727436463716', 'Ananda Ayu Oktaviany', '2018-02-04', 'Jln. Marga RT/09 RW/10', 'Islam', 'Kuningan', 'Perempuan', 'Nunung', 'Mamat', 'Guru'),
(22, '2007364526839', 'Selvi Andriani', '2016-06-21', 'Jln. Dirgahayu RT/08 RW/0', 'Islam', 'Cianjur', 'Perempuan', 'Rani', 'Junaedi', 'Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE `data_anak` (
  `id` int(11) NOT NULL,
  `no_pemeriksaan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `saran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_anak`
--

INSERT INTO `data_anak` (`id`, `no_pemeriksaan`, `nama`, `berat_badan`, `tinggi_badan`, `keluhan`, `diagnosa`, `saran`) VALUES
(12, 1, 'Milah Fauziah', '24 Kg', '110 Cm', 'Panas Tinggi', 'Radang Amandel', 'Konsultasikan Ke Rumah Sakit'),
(13, 2, 'Ananda Ayu Oktaviany', '25 Kg', '120 Cm', 'Panas Dingin', 'Cacar Air', 'Menjaga Asupan Cairan'),
(14, 3, 'Selvi Andriani', '28 Kg', '129 Cm', 'Susah BAB', 'Diare', 'Berbanyak Makan Sayur');

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu_hamil`
--

CREATE TABLE `data_ibu_hamil` (
  `id` int(11) NOT NULL,
  `no_pemeriksaan` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `umur_ibu` varchar(50) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `usia_kandungan` int(11) NOT NULL,
  `tinggi_fundus` int(11) NOT NULL,
  `denyut_janin` int(11) NOT NULL,
  `keluhan` varchar(500) NOT NULL,
  `saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ibu_hamil`
--

INSERT INTO `data_ibu_hamil` (`id`, `no_pemeriksaan`, `nama_ibu`, `umur_ibu`, `berat_badan`, `tinggi_badan`, `tekanan_darah`, `usia_kandungan`, `tinggi_fundus`, `denyut_janin`, `keluhan`, `saran`) VALUES
(1, 987654, 'Rani', '45', 70, 167, 90, 9, 7, 23, 'Sakit ', 'Kedokter aja');

-- --------------------------------------------------------

--
-- Table structure for table `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id` int(11) NOT NULL,
  `nik` int(25) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindu','Budha') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibu_hamil`
--

INSERT INTO `ibu_hamil` (`id`, `nik`, `nama_ibu`, `tgl`, `tempat_lahir`, `pekerjaan_ibu`, `nama_suami`, `alamat`, `agama`, `pekerjaan`) VALUES
(1, 2345799, 'Susanti', '1999-01-10', 'Kuningan', 'IRT', 'Mail', 'Darangdan Kebon, 02/15, Kota Kulon, Kuningan Selatan', 'Islam', 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'Milah Fauziah', '10519118', 'Milah Fauziah'),
(2, 'Ananda Ayu Oktaviany', '10519110', 'Ananda Ayu Oktaviany'),
(3, 'Selvi Andriani', '10519099', 'Selvi Andriani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nik`);

--
-- Indexes for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_pemeriksaan` (`no_pemeriksaan`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `data_ibu_hamil`
--
ALTER TABLE `data_ibu_hamil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_pemeriksaan` (`no_pemeriksaan`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `data_anak`
--
ALTER TABLE `data_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_ibu_hamil`
--
ALTER TABLE `data_ibu_hamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
