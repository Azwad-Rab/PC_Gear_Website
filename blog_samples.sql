-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 09:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_samples`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 3, 1, 16000),
(2, 1, 8, 1, 15700),
(3, 1, 8, 1, 15700),
(4, 1, 8, 1, 15700),
(5, 1, 8, 1, 15700),
(6, 1, 8, 1, 15700),
(7, 1, 8, 1, 15700),
(8, 1, 8, 1, 15700),
(9, 1, 8, 1, 15700),
(10, 1, 1, 1, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`id`, `fname`, `pass`) VALUES
(1, 'Azwad', '1234'),
(2, 'Bapon', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `Catagory` varchar(255) NOT NULL,
  `Specs` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `Catagory`, `Specs`) VALUES
(1, '3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00, '', ''),
(2, 'External Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00, '', ''),
(3, 'Asus Motherboard', 'MOBO', 'images/ASUS.png', 16000.00, 'Motherboard', ''),
(4, 'Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00, '', ''),
(5, 'Antec VSK4000B-U3 Value Solution Gaming Casing', 'case1', 'images/casing/case 1.jpg', 2900.00, 'Casing', ''),
(6, 'Antec GX200 Mid Tower Window Gaming Casing', 'case2', 'images/casing/case 2.jpg', 3500.00, 'Casing', ''),
(7, 'Antec GX505 Mid Tower Window Gaming Casing', 'case3', 'images/casing/case 3.jpg', 4500.00, 'Casing', ''),
(8, 'AMD RYZEN 5 1400 4-Core 3.2GHz Turbo Core Speed 3.4GHz Processor', 'proc1', 'images/processor/proc 1.jpg', 15700.00, 'Processor', 'High Processor\nsssssssss\nhhhhhhhh\njjjjjjjj\nkkkkkkkk\njjjjjjjj\niiiiiiiii'),
(9, 'Viper DDR4 4GB 2400MHz DIMM Ram', 'ram1', 'images/ram/ram 1.jpg', 3500.00, 'RAM', ''),
(10, 'Antec C400 Elite Performance CPU Cooler', 'cooler1', 'images/cooler/cooler 1.jpg', 2800.00, 'Cooler', ''),
(11, 'Kingston Digital 120GB SSDNow UV400 Solid State Drive', 'ssd1', 'images/ssd/ssd 1.jpg', 5200.00, 'SSD', ''),
(12, 'ADATA HD 650 1TB USB 3.0 External HDD Red/Black', 'hdd1', 'images/hdd/hdd 1.jpg', 5400.00, 'HDD', ''),
(13, 'ASUS ROG STRIX-GTX1070-O8G-GAMING Graphics Card', 'gpu1', 'images/gpu/gpu 1.jpg', 55000.00, 'GPU', '');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `fname`, `email`, `phone`, `company`, `message`) VALUES
(1, 'Azwad', 'azwadrab@gmail.com', 154, 'stu', 'hjkjj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
