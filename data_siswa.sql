-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 09:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru`
--

CREATE TABLE `siswa_baru` (
  `id_siswa` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `ekskul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru`
--

INSERT INTO `siswa_baru` (`id_siswa`, `nama`, `tanggal_lahir`, `alamat`, `asal_sekolah`, `jurusan`, `ekskul`) VALUES
(2, 'arfa', '1996-04-15', 'Depok', 'SMP Plumbon', 'TKJ', 'badminton'),
(4, 'jenal', '1996-07-16', 'Depok', 'SMP Sumber', 'RPL', 'taekwondo'),
(5, 'marco', '2005-11-21', 'Jamblang', 'SMP Jamblang', 'Multimedia', 'futsal'),
(7, 'makmur', '1995-10-16', 'Sumber', 'SMP Plumbon', 'Akutansi', 'basket'),
(14, 'junaedi', '2009-02-04', 'Watubelah', 'SMP Plered', 'TKJ', 'badminton');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa_baru`
--
ALTER TABLE `siswa_baru`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa_baru`
--
ALTER TABLE `siswa_baru`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
