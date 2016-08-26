-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2016 at 02:10 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_type` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `quantity`, `price`) VALUES
(1, 'Muminur Rahman', 'Vegetable', 33, 55),
(2, 'd', 'Vegetable', 33, 33);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `password`, `user_type`, `gender`, `city`, `address`) VALUES
(20, 'Md. Sujan ', 'sa', '1', 'superadmin', 'Male', 'Dhaka', 'Mahammadpur, Dhaka-1207'),
(21, 'Md. Mominul Islam', '2014141012', 'momi123', 'user', 'Male', 'Dhaka', 'Jatrabari, Dhaka-1205'),
(22, 'Mr. Plabon ', '2013141013', 'plo123', 'user', 'Male', 'Dhaka', 'Rampura, Dhaka-1209'),
(23, 'Md. korimul Hok', '2014141015', 'kori123', 'user', 'Male', 'Khulna', 'Khulna, Bangladesh'),
(25, 'Mst. Anika ', '2013141015', 'ani123', 'user', 'Male', 'Dhaka', 'Mahammappur, Dhaka-1207'),
(26, 'Md. Badon ', '2014141012', 'bad123', 'user', 'Male', 'Dhaka', 'Danmondi, Dhaka-1205'),
(30, 'Md. Rasel ', 'rasel123', '123456', 'user', 'Male', 'Chittagong', 'chittagong, Bangladesh '),
(31, 'Md. Tarun ', 'tarun123', '12345', 'user', 'Male', 'Dhaka', 'Khilkhet, DHaka '),
(32, 'Simu ', 'simu123', '12345', 'user', 'Male', 'Dhaka', 'Danmondi, DHaka '),
(33, 'Rakhi ', 'rakhi123', '12345', 'user', 'Female', 'Dhaka', 'Danmondi, DHaka '),
(34, 'Tanvir', 'tanvir123', '12345', 'user', 'Male', 'Dhaka', 'Ajimpur, DHaka '),
(35, 'Simu ', 'simu123', '12345', 'admin', 'Female', '', 'dhaka'),
(36, 'plabon', '201314101', 'polo123', 'admin', 'Male', '', 'Dhaka'),
(37, 'Mr. Shikdar', 'sikdar123', '12345', 'user', 'Male', 'Dhaka', 'Dhaka'),
(38, 'Srabonti', 'sra123', '12345', 'user', 'Male', 'Dhaka', 'danmondi, Dhaka'),
(40, 'Toma ', 'toma123', '12345', 'admin', 'Female', '', '\r\n\r\n'),
(41, 'Toma ', 'toma123', '12345', 'admin', 'Female', '', 'danmondi, Dhaka\r\n'),
(42, 'Lal shak', '', '', 'user', '', '', ''),
(43, 'Muminur Rahman', 'superadmin', 'dfdf', 'admin', 'Male', '', 'sfsf'),
(44, 's', 'aa', 's', 'user', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
