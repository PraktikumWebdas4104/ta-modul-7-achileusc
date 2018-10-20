-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 08:03 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `prodi` varchar(70) NOT NULL,
  `fakultas` varchar(70) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `moto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mhs`
--

INSERT INTO `data_mhs` (`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('Santi', '158534715', 'Perempuan', 'Ilmu Komunikasi', 'Fakultas Komunikasi Bisnis', 'Yogyakarta', 'yg penting hidup'),
('Valentino', '6701170079', 'Laki - laki', 'Sistem Informasi', 'Fakultas Ilmu Terapan', 'Kuningan', 'naonnya'),
('Tono', '6701174022', 'Laki - laki', 'MBTI', 'Fakultas Ekonomi Bisnis', 'Solo', 'hmmm'),
('Tama', '6701174034', 'Laki - laki', 'Sistem Informasi', 'FIT', 'Bandung', 'sing genah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
