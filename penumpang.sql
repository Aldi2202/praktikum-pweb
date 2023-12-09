-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 07:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb_ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `identitas_penumpang` char(20) NOT NULL,
  `email` char(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `kode_booking` char(5) NOT NULL,
  `nama_kereta` varchar(50) NOT NULL,
  `kelas_kereta` varchar(20) NOT NULL,
  `stasiun_keberangkatan` varchar(50) NOT NULL,
  `stasiun_tujuan` varchar(50) NOT NULL,
  `tanggal_keberangkatan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `nama`, `identitas_penumpang`, `email`, `no_hp`, `kode_booking`, `nama_kereta`, `kelas_kereta`, `stasiun_keberangkatan`, `stasiun_tujuan`, `tanggal_keberangkatan`) VALUES
(5, 'Aldi Pratama Putra', '123123050610', 'mahaputra216@gmail.net', '087877204777', '7DE45', 'Argo Parahyangan', 'Eksekutif', 'Stasiun Gambir - Jakarta', 'Stasiun Bandung Kota - Bandung', '2023-12-22 08:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
