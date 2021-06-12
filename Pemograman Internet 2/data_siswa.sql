-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblll_bk`
--

CREATE TABLE `tblll_bk` (
  `ID_Buku` int(20) NOT NULL,
  `ID_Siswa` int(20) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `namasiswa` varchar(20) NOT NULL,
  `durasipinjaman` varchar(20) NOT NULL,
  `Tgl_Pinjam` varchar(20) NOT NULL,
  `Tgl_Kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblll_bk`
--

INSERT INTO `tblll_bk` (`ID_Buku`, `ID_Siswa`, `judulbuku`, `namasiswa`, `durasipinjaman`, `Tgl_Pinjam`, `Tgl_Kembali`) VALUES
(123456, 2017113001, 'Harry Potter and The Chamber Of Secret', 'Adi', '7 Hari', '5 Januari 2017', '12 Januari 2017'),
(789101, 2017113002, 'Harry Potter and The Goblet Of Fire', 'Arman', '7 Hari', '15 Januari 2017', '22 Januari 2017'),
(121314, 2017113003, 'Harry Potter and The Prisoner Of Azkaban', 'Asta', '7 Hari', '19 Januari 2017', '26 Januari 2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbll_siswa`
--

CREATE TABLE `tbll_siswa` (
  `ID_Siswa` int(20) NOT NULL,
  `namasiswa` varchar(20) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `durasipinjaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbll_siswa`
--

INSERT INTO `tbll_siswa` (`ID_Siswa`, `namasiswa`, `judulbuku`, `durasipinjaman`) VALUES
(2017113001, 'Adi', 'Harry Potter and The Chamber Of Secret', '7 Hari'),
(2017113002, 'Arman', 'Harry Potter and The Goblet Of Fire', '7 Hari'),
(2017113003, 'Asta', 'Harry Potter and The Prisoner Of Azkaban', '7 Hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblll_bk`
--
ALTER TABLE `tblll_bk`
  ADD PRIMARY KEY (`ID_Siswa`);

--
-- Indexes for table `tbll_siswa`
--
ALTER TABLE `tbll_siswa`
  ADD KEY `ID_Siswa` (`ID_Siswa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbll_siswa`
--
ALTER TABLE `tbll_siswa`
  ADD CONSTRAINT `tbll_siswa_ibfk_1` FOREIGN KEY (`ID_Siswa`) REFERENCES `tblll_bk` (`ID_Siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
