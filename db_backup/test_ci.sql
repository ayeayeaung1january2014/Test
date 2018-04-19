-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 08:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `shortlist_flag` int(1) NOT NULL DEFAULT '0',
  `image_url` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `shortlist_flag`, `image_url`, `created`, `modified`) VALUES
(1, 'Building 1', 0, '/assets/uploads/1ac1196c8f40eaa2e1b8e8b7cc1b4a0c.jpg', '2018-04-19', '2018-04-19'),
(2, 'Building 2', 1, '/assets/uploads/09b4f720a888ec2ff075401e3736ce3e.jpg', '2018-04-19', '2018-04-19'),
(3, 'Building 3', 1, '/assets/uploads/21f79505e50adb6b5ac7fb6362193418.jpg', '2018-04-19', '2018-04-19'),
(4, 'Building 4', 1, '/assets/uploads/93b6bd03ddf73500a63b7d0f02bc2497.jpg', '2018-04-19', '2018-04-19'),
(5, 'Building 5', 1, '/assets/uploads/a360a8f4b3e9f11fd3ca65cdaf66fd90.jpg', '2018-04-19', '2018-04-19'),
(6, 'Building 6', 1, '/assets/uploads/8b219c373be1c44707e14db90d92dcb0.jpg', '2018-04-19', '2018-04-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
