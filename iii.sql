-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 11:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iii`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `room` text NOT NULL,
  `Kwh` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dataid` int(11) NOT NULL,
  `sa` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`room`, `Kwh`, `date`, `time`, `dataid`, `sa`) VALUES
('203', 90, '2023-01-12', '00:00:00', 1, 'o'),
('203', 134, '2023-01-12', '00:00:00', 2, 'n'),
('101', 45.893, '2023-01-06', '01:43:42', 7, 'o'),
('101', 76.657, '2023-01-06', '01:43:42', 11, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `outdata`
--

CREATE TABLE `outdata` (
  `id` int(11) NOT NULL,
  `sty` varchar(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outdata`
--

INSERT INTO `outdata` (`id`, `sty`, `data`) VALUES
(1, 'kwh', 30),
(2, 'stay', 1),
(3, 'mi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `room` int(11) NOT NULL,
  `Kwh` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dataid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`room`, `Kwh`, `date`, `time`, `dataid`) VALUES
(101, 0.36, '2023-01-26', '02:39:19', 1),
(203, 6.33, '2023-01-26', '02:39:24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `telephonenumber` varchar(100) NOT NULL,
  `roomnumber` text NOT NULL,
  `userlevel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `telephonenumber`, `roomnumber`, `userlevel`) VALUES
(8, 'pun', '81dc9bdb52d04dc20036dbd8313ed055', 'Aphisit', 'Paenlaem', '0945531336', '101', 'Admin'),
(9, 'akee', '81dc9bdb52d04dc20036dbd8313ed055', 'Thanutchaporn', 'Boonmaleetrakun', '0917530672', '203', 'User'),
(12, '3', '81dc9bdb52d04dc20036dbd8313ed055', 'ธณรรษชพร', 'บุญมาลีตระกูล', '0917533333', '111', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`dataid`);

--
-- Indexes for table `outdata`
--
ALTER TABLE `outdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`dataid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
