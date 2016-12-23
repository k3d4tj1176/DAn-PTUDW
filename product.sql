-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 07:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Category` varchar(20) NOT NULL,
  `ImageUrl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `ProductName`, `Price`, `Category`, `ImageUrl`) VALUES
(1, 'Giày 1', 100000, 'Giay the thao 1', 'shoes-1.png'),
(45, 'Giày 2', 200000, 'Giay the thao 2', 'shoes-2.png'),
(46, 'Giày 3', 300000, 'Giay the thao 3', 'shoes-3.png'),
(47, 'Giày 5', 100000, 'Giay the thao 5', 'shoes-5.png'),
(48, 'Giày 6', 100001, 'Giay the thao 6', 'shoes-6.png'),
(49, 'Giày 7', 100000, 'Giay the thao 7', 'shoes-7.png'),
(50, 'Giày 8', 10000, 'Giay the thao 8', 'shoes-8.png'),
(51, 'Giày 9', 900000, 'Giay the thao 9', 'shoes-9.png'),
(52, 'Giày 10', 100000, 'Giay the thao 10', 'shoes-10.png'),
(53, 'Giày 11', 100002, 'Giay the thao 11', 'shoes-11.png'),
(54, 'Giày 12', 100002, 'Giày th? thao 12', 'shoes-12.png'),
(55, 'Giày 13', 100001, 'Giay the thao 13', 'shoes-13.png'),
(56, 'Giày 14', 100000, 'Giày th? thao 14', 'shoes-15.png'),
(57, 'Giày 16', 10000, 'Giay the thao 16', 'shoes-16.png'),
(58, 'Giày 17', 10000, 'Giay the thao 18', 'shoes-1.png'),
(59, 'Giày 102', 10000, 'Giay the thao 102', 'shoes-6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
