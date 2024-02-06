-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 04:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbtamu`
--

CREATE TABLE `tbtamu` (
  `no` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtamu`
--

INSERT INTO `tbtamu` (`no`, `nama`, `email`, `pesan`) VALUES
(2, 'Dedi Mulyana S.Pdi', 'mirna@gmail.com', 'qsfd'),
(3, 'Dra.Midah Samidah,M.', 'remivi565@gmail.com', 'wewfhk'),
(7, 'Sri mirnawati', 'mirna@gmail.com', 'abcdefghijklmn'),
(8, 'Evi Nuraysah', 'remivi565@gmail.com', 'yfhfh'),
(9, 'tuty', 'mirna@gmail.com', 'asdf'),
(10, 'Sri mirnawati', 'mirna@gmail.com', 'abcdefghijklmn'),
(11, 'Evi Nuraysah', 'remivi565@gmail.com', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbtamu`
--
ALTER TABLE `tbtamu`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbtamu`
--
ALTER TABLE `tbtamu`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
