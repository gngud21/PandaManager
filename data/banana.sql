-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 05:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banana`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `model` varchar(50) DEFAULT NULL,
  `piece` int(255) DEFAULT NULL,
  `plant` varchar(50) DEFAULT NULL,
  `stamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `model`, `piece`, `plant`, `stamp`) VALUES
('330acd', 'c', 3, 'banana', '2017-04-01 03:10:08'),
('413e8d', 'c', 3, 'banana', '2017-04-01 03:27:14'),
('3bc6fe', 'c', 3, 'banana', '2017-04-01 03:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE `parts` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `model` varchar(50) DEFAULT NULL,
  `piece` int(255) DEFAULT NULL,
  `plant` varchar(50) DEFAULT NULL,
  `stamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `model`, `piece`, `plant`, `stamp`) VALUES
('1091c8', 'b', 3, 'banana', '2017-04-01 00:18:31'),
('123bc7', 'w', 2, 'banana', '2017-04-01 00:18:22'),
('127989', 'b', 2, 'banana', '2017-04-01 00:18:22'),
('12e647', 'w', 3, 'banana', '2017-04-01 00:17:54'),
('1332f5', 'w', 1, 'banana', '2017-04-01 00:16:39'),
('13b185', 'b', 2, 'banana', '2017-03-31 23:48:08'),
('145e70', 'c', 2, 'banana', '2017-04-01 00:17:46'),
('145fba', 'b', 1, 'banana', '2017-03-31 23:50:10'),
('15a539', 'b', 3, 'banana', '2017-04-01 00:18:22'),
('165e7d', 'b', 3, 'banana', '2017-04-01 00:18:15'),
('168c03', 'm', 3, 'banana', '2017-04-01 00:18:15'),
('17ffd6', 'a', 3, 'banana', '2017-04-01 00:26:43'),
('19456f', 'r', 2, 'banana', '2017-04-01 00:18:15'),
('19d4ba', 'a', 3, 'banana', '2017-04-01 00:17:46'),
('19dfea', 'w', 1, 'banana', '2017-04-01 00:16:45'),
('19f0bd', 'b', 2, 'banana', '2017-04-01 00:18:22'),
('1ac6be', 'r', 2, 'banana', '2017-04-01 00:18:15'),
('1e0f63', 'w', 3, 'banana', '2017-04-01 00:18:22'),
('1e8da1', 'c', 3, 'banana', '2017-04-01 02:25:30'),
('1e93d4', 'a', 2, 'banana', '2017-04-01 00:18:31'),
('1fdfaa', 'a', 2, 'banana', '2017-03-31 23:48:08'),
('2062b3', 'c', 1, 'banana', '2017-04-01 00:17:54'),
('21197c', 'b', 2, 'banana', '2017-04-01 00:16:45'),
('2156ea', 'w', 2, 'banana', '2017-04-01 00:17:54'),
('222d3c', 'a', 1, 'banana', '2017-04-01 00:17:54'),
('22ac85', 'a', 2, 'banana', '2017-04-01 00:16:39'),
('234c51', 'a', 3, 'banana', '2017-04-01 00:17:46'),
('2361c2', 'w', 1, 'banana', '2017-04-01 00:16:45'),
('23d712', 'c', 2, 'banana', '2017-04-01 03:27:18'),
('247b74', 'b', 3, 'banana', '2017-04-01 03:27:44'),
('24ee6b', 'r', 3, 'banana', '2017-04-01 00:16:39'),
('25e443', 'c', 1, 'banana', '2017-03-31 23:50:10'),
('26ead7', 'r', 1, 'banana', '2017-04-01 00:17:46'),
('271689', 'c', 2, 'banana', '2017-04-01 00:17:54'),
('271d61', 'r', 2, 'banana', '2017-03-31 23:48:08'),
('27f5c7', 'b', 3, 'banana', '2017-03-31 23:48:08'),
('28ee9c', 'm', 3, 'banana', '2017-03-31 23:48:08'),
('29007c', 'c', 3, 'banana', '2017-04-01 00:16:45'),
('29c485', 'b', 2, 'banana', '2017-04-01 00:17:46'),
('29fd52', 'c', 2, 'banana', '2017-03-31 23:50:10'),
('2a68d0', 'a', 2, 'banana', '2017-04-01 00:16:45'),
('2b95da', 'r', 2, 'banana', '2017-03-31 23:50:10'),
('2c2a1b', 'w', 2, 'banana', '2017-03-31 23:50:10'),
('2c8308', 'b', 3, 'banana', '2017-04-01 00:18:15'),
('2d1cbe', 'r', 1, 'banana', '2017-04-01 00:18:31'),
('2dc987', 'c', 3, 'banana', '2017-04-01 00:16:39'),
('2dcd83', 'm', 2, 'banana', '2017-03-31 23:50:10'),
('2ddac2', 'm', 3, 'banana', '2017-03-31 23:48:08'),
('2e31d1', 'r', 1, 'banana', '2017-04-01 00:18:22'),
('2eb3f6', 'b', 1, 'banana', '2017-03-31 23:48:08'),
('2ef1b9', 'c', 2, 'banana', '2017-04-01 00:18:31'),
('301ce7', 'a', 2, 'banana', '2017-04-01 00:18:15'),
('30fd7b', 'r', 1, 'banana', '2017-04-01 00:16:45'),
('316aa2', 'r', 3, 'banana', '2017-04-01 00:18:31'),
('31fd9f', 'a', 1, 'banana', '2017-03-31 23:48:08'),
('328c7b', 'b', 1, 'banana', '2017-04-01 00:18:31'),
('32e6f1', 'a', 2, 'banana', '2017-04-01 00:16:45'),
('344171', 'c', 2, 'banana', '2017-04-01 00:17:46'),
('34d0fb', 'b', 1, 'banana', '2017-04-01 00:18:31'),
('359700', 'm', 2, 'banana', '2017-03-31 23:48:08'),
('35a130', 'm', 2, 'banana', '2017-04-01 00:16:39'),
('35b2cd', 'b', 2, 'banana', '2017-04-01 00:16:39'),
('36e1cf', 'w', 2, 'banana', '2017-04-01 00:17:54'),
('370c86', 'b', 3, 'banana', '2017-04-01 00:17:54'),
('37ed9a', 'r', 1, 'banana', '2017-04-01 03:27:28'),
('380fe0', 'b', 3, 'banana', '2017-04-01 00:32:48'),
('386d53', 'a', 3, 'banana', '2017-04-01 00:16:45'),
('387af2', 'w', 1, 'banana', '2017-04-01 00:18:31'),
('3889c8', 'w', 3, 'banana', '2017-04-01 00:17:46'),
('39d0bf', 'c', 2, 'banana', '2017-04-01 00:18:15'),
('39eff4', 'w', 3, 'banana', '2017-04-01 00:17:46'),
('3b5098', 'm', 2, 'banana', '2017-04-01 00:18:31'),
('3b8634', 'a', 3, 'banana', '2017-04-01 00:18:22'),
('3bc6fe', 'c', 3, 'banana', '2017-04-01 03:27:46'),
('3c40d9', 'r', 3, 'banana', '2017-04-01 00:17:46'),
('3ca779', 'w', 1, 'banana', '2017-04-01 00:16:39'),
('3d4763', 'w', 2, 'banana', '2017-04-01 00:16:39'),
('3f9c11', 'b', 2, 'banana', '2017-04-01 00:16:39'),
('3fc1a0', 'r', 1, 'banana', '2017-04-01 00:18:15'),
('406e9c', 'a', 2, 'banana', '2017-04-01 00:18:31'),
('40d02a', 'b', 1, 'banana', '2017-03-31 23:48:08'),
('40e230', 'c', 1, 'banana', '2017-04-01 00:18:15'),
('411371', 'r', 3, 'banana', '2017-04-01 00:17:54'),
('413e8d', 'c', 3, 'banana', '2017-04-01 03:27:14'),
('4164f2', 'm', 1, 'banana', '2017-04-01 00:17:46'),
('423887', 'm', 1, 'banana', '2017-04-01 00:17:54'),
('431b8b', 'c', 3, 'banana', '2017-04-01 02:55:30'),
('457946', 'm', 2, 'banana', '2017-03-31 23:50:10'),
('45d877', 'r', 1, 'banana', '2017-04-01 00:18:22'),
('46115b', 'r', 2, 'banana', '2017-04-01 00:18:15'),
('4646c5', 'm', 2, 'banana', '2017-04-01 00:18:22'),
('46897a', 'b', 2, 'banana', '2017-04-01 00:17:54'),
('469804', 'w', 1, 'banana', '2017-03-31 23:50:10'),
('48dc6b', 'r', 1, 'banana', '2017-04-01 01:11:39'),
('497175', 'm', 2, 'banana', '2017-04-01 00:16:39'),
('4979e9', 'a', 3, 'banana', '2017-04-01 00:18:22'),
('497fb9', 'c', 2, 'banana', '2017-04-01 00:16:45'),
('49af1b', 'r', 2, 'banana', '2017-03-31 23:50:10'),
('49d0ac', 'b', 3, 'banana', '2017-03-31 23:50:10'),
('4a6381', 'r', 3, 'banana', '2017-04-01 01:12:26'),
('4b22ae', 'b', 3, 'banana', '2017-04-01 00:19:44'),
('4bc087', 'a', 3, 'banana', '2017-04-01 00:16:45'),
('f6e34', 'c', 3, 'banana', '2017-04-01 02:25:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
