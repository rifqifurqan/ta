-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2017 at 06:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmatrik`
--

CREATE TABLE `tbmatrik` (
  `idMatrik` int(11) NOT NULL,
  `idCalon` int(11) NOT NULL,
  `Kriteria1` int(11) NOT NULL,
  `Kriteria2` int(11) NOT NULL,
  `Kriteria3` int(11) NOT NULL,
  `Kriteria4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmatrik`
--

INSERT INTO `tbmatrik` (`idMatrik`, `idCalon`, `Kriteria1`, `Kriteria2`, `Kriteria3`, `Kriteria4`) VALUES
(1, 1, 70, 50, 80, 60),
(2, 2, 50, 60, 82, 70),
(3, 3, 85, 55, 80, 75),
(4, 4, 82, 70, 65, 85),
(5, 5, 75, 75, 85, 74),
(6, 6, 62, 50, 75, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmatrik`
--
ALTER TABLE `tbmatrik`
  ADD PRIMARY KEY (`idMatrik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmatrik`
--
ALTER TABLE `tbmatrik`
  MODIFY `idMatrik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
