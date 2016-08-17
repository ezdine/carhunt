-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 01:37 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carhunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carid` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `rating` text NOT NULL,
  `review_url` text NOT NULL,
  `image_url` text NOT NULL,
  `mileage` varchar(30) NOT NULL,
  `torq` varchar(20) NOT NULL,
  `c0to100` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carid`, `type`, `brand`, `price`, `rating`, `review_url`, `image_url`, `mileage`, `torq`, `c0to100`) VALUES
('Continental GT V8', 'coupe', 'bentley', '1.43 Cr', 'http://topgear.com/india/images/stories/rating/7.png', 'http://www.topgear.com/india/our-car-reviews/continental-gt?id=2784', 'http://topgear.com/india/images/stories/articles/512x288/2014Feb24101647.jpg', '10kmpl', '40nm', '4s'),
('Merc Benz CLA', 'sedan', 'merc', '44L', 'http://topgear.com/india/images/stories/rating/7.png', 'http://www.topgear.com/india/our-car-reviews/cla-class/itemid-51?id=3522', 'http://topgear.com/india/images/stories/articles/512x288/2015Jan06211021.jpg', '20kmpl', '30NM', '9s'),
('Merc GLC 300 ', 'coupe', 'merc', '70L', 'http://topgear.com/india/images/stories/rating/8.png', 'http://www.topgear.com/india/mercedes-benz/review-merc-glc-300-coupe/itemid-51', 'http://topgear.com/india/images/stories/articles/512x288/2016Aug12042124.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cardealer`
--

CREATE TABLE `cardealer` (
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardealer`
--

INSERT INTO `cardealer` (`name`, `brand`, `location`, `contact`) VALUES
('Pothens', 'Hyndai', 'TVM', '8714520112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `cardealer`
--
ALTER TABLE `cardealer`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
