-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran-utron`
--
CREATE DATABASE IF NOT EXISTS `pendaftaran-utron` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pendaftaran-utron`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `nama` varchar(255) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `program_studi` varchar(30) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `nama_kelompok` varchar(25) NOT NULL,
  `bukti_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `nrp`, `program_studi`, `nomor_telepon`, `email_address`, `nama_kelompok`, `bukti_pembayaran`) VALUES
('Alton Gunawan Purwanto', '31120007', 'Teknik Informatika', '085706918892', 'altongunawan27@gmail.com', 'Test', '31120007.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nrp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;