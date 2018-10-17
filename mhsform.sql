-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 06:58 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhsform`
--

CREATE TABLE `mhsform` (
  `Nama` varchar(50) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Jenis Kelamin` varchar(10) NOT NULL,
  `Prodi` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Motto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhsform`
--

INSERT INTO `mhsform` (`Nama`, `NIM`, `Jenis Kelamin`, `Prodi`, `Fakultas`, `Asal`, `Motto`) VALUES
('', '', '', '', '', '', ''),
('Yuna', '1234567890', 'Perempuan', '0', '0', 'Cimahi', 'Be you!'),
('Hikma Sekar Tabayun', '2147483647', 'Perempuan', '0', '0', 'Southampton', 'This too, shall pass'),
('Yuni', '6701167743', 'Perempuan', 'Ilmu Komunikasi', 'FKB', 'Bandung', 'Sni dong!'),
('Hikma Sekar Tabayun', '6701173022', 'Perempuan', 'Manajemen Teknologi Bisnis dan Informatika', 'FEB', 'New Forest', 'This too, shall pass'),
('Yuna', '6701173043', 'Perempuan', 'Manajemen Teknologi Bisnis dan Informatika', 'FEB', 'New Forest', 'This too, shall pass'),
('Tiara Lolo', '6701174030', 'Perempuan', 'Desain Komunikasi Visual', 'FIK', 'Tanggerang', 'Kamu siapa?'),
('dhrcc', '7574234567', 'Perempuan', 'Administrasi Bisnis', 'FKB', 'Cimahi', 'This too, shall pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhsform`
--
ALTER TABLE `mhsform`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
