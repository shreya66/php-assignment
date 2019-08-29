-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 06:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `mobile`, `email`, `gender`, `country`, `state`, `city`, `image`, `address`, `status`) VALUES
(6, 'saksham', 2147483647, 'desaishreya@gmail.com', 'male', '', '', '', '', '', 1),
(7, 'saksham', 2147483647, 'desaishreya@gmail.com', 'female', '', '', '', '', '', 1),
(8, 'rekha', 2147483647, 'desaishreya@gmail.com', 'male', '', '', '', '', '', 1),
(9, 'shreya', 2147483647, 'desaishreya@gmail.com', 'female', 'India', 'MP', 'Indore', '', 'Pleh', 1),
(10, 'shreya', 2147483647, 'desaishreya@gmail.com', 'female', 'India', 'MP', 'Indore', '', 'Pleh', 0),
(11, 'shreya', 2147483647, 'desaishreya@gmail.com', 'female', '', '', '', '', '', 0),
(12, 'akrati', 2147483647, 'desaishreya@gmail.com', 'female', '', '', '', '', '', 0),
(13, 'sakshi', 2147483647, 'desaishreya@gmail.com', 'female', '', '', '', '', '', 0),
(14, 'shreya', 2147483647, 'desaishreya@gmail.com', 'female', '', '', '', '', '', 0),
(15, 'shreya', 2147483647, 'desaishreya@gmail.com', 'male', '', '', '', '', '', 0),
(16, 'shreya', 2147483647, 'desaishreya@gmail.com', 'male', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
