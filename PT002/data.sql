-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 01:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `mntab`
--
CREATE TABLE `mntab` (
  `id` int(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `button` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mntab`
--

INSERT INTO `mntab` (`id`, `heading`, `description`, `button`, `image`) VALUES
(4, 'myheading', 'Cras justo odio, dapibus ac facilisis in, egestas ', 'Learn more', 'r.jpg'),
(5, 'myheading', 'Cras justo odio, dapibus ac facilisis in, egestas ', 'Learn more', 'r.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mstab`
--

CREATE TABLE `mstab` (
  `id` int(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `button` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstab`
--

INSERT INTO `mstab` (`id`, `heading`, `description`, `button`, `image`) VALUES
(8, 'Example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas ', 'Brouse gallery', 'q.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mytab`
--

CREATE TABLE `mytab` (
  `id` int(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `button` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytab`
--

INSERT INTO `mytab` (`id`, `heading`, `description`, `button`, `image`) VALUES
(10, 'myheading', 'mydescription', 'Learn more', 'p.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mntab`
--
ALTER TABLE `mntab`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=50;

--
-- Indexes for table `mstab`
--
ALTER TABLE `mstab`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=50;

--
-- Indexes for table `mytab`
--
ALTER TABLE `mytab`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=50;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mntab`
--
ALTER TABLE `mntab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mstab`
--
ALTER TABLE `mstab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mytab`
--
ALTER TABLE `mytab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
