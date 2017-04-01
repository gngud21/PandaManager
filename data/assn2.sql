-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 12:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assn2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('186jl8uc9fqgq2pj6nhl96voet4t35gs', '127.0.0.1', 1490934595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933343330313b),
('2jtgjshncde3qdc32ahuta9ib5c40fng', '127.0.0.1', 1491042479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313034323139323b75736572726f6c657c733a31303a2273757065727669736f72223b),
('40b9alm2ra8c0mqugpvqpnm5ds1v9s58', '127.0.0.1', 1490934996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933343833323b),
('6htidquii6e6r3radk3qb7d50rocc1fl', '127.0.0.1', 1490935808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933353636333b),
('7mrdv6qeikd232qpsha96fagck3pkqtu', '127.0.0.1', 1491041708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313034313730313b75736572726f6c657c733a31303a2273757065727669736f72223b),
('876ernserm9eclmc312d0rgdpqsutd4b', '127.0.0.1', 1490935536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933353235343b),
('8hclcp6dbbqoppvn13v93jctpo11m5p9', '127.0.0.1', 1491040232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313033393933303b75736572726f6c657c733a31303a2273757065727669736f72223b),
('8kpnpao0c77q3k524b80jkh5qhhhh8o7', '127.0.0.1', 1490938031, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933373838353b75736572726f6c657c733a353a226775657374223b),
('clmod76tecs2ljllihj5r7mjn97ge8pr', '127.0.0.1', 1491039790, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313033393533313b75736572726f6c657c733a31303a2273757065727669736f72223b),
('h7pb8f186vpnaqn7g4pqbqcq6t707lop', '127.0.0.1', 1491040853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313034303732303b75736572726f6c657c733a31303a2273757065727669736f72223b),
('hlt80gjsdu4vcri9m0738dtpr15afojr', '127.0.0.1', 1491039483, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313033393434343b75736572726f6c657c733a31303a2273757065727669736f72223b),
('i004pg2ojlp6unk8vrs13juk10gmb845', '127.0.0.1', 1491042595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313034323439333b75736572726f6c657c733a353a226775657374223b),
('ltt6er0o1s5rqrhelihm7nupp065uc6b', '127.0.0.1', 1491037616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313033373336303b75736572726f6c657c733a31303a2273757065727669736f72223b),
('n4f6em4ovr1k8c84guot2joo1l4uj0b7', '127.0.0.1', 1490942646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303934323530353b75736572726f6c657c733a31303a2273757065727669736f72223b),
('p1jeqkdqbbu58chaekp19hd6g9re6cus', '127.0.0.1', 1490936373, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933363130383b75736572726f6c657c733a353a226775657374223b),
('pii5338ujip4fpbd4a3ombsih17045mb', '127.0.0.1', 1491036613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313033363338373b75736572726f6c657c733a343a22626f7373223b),
('prbjpb4u58f1c75nvem9pq3i22p4491c', '127.0.0.1', 1491040311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313034303330353b75736572726f6c657c733a31303a2273757065727669736f72223b),
('qm6s288hdvcjqgshppm3brb1uga47n9r', '127.0.0.1', 1491037102, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313033363932353b75736572726f6c657c733a31303a2273757065727669736f72223b),
('r0gr58t57k8brmj0mgnbdrr2lj226g1g', '127.0.0.1', 1490939060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933383933383b75736572726f6c657c733a31303a2273757065727669736f72223b),
('ulv9cuje9jlpj047amvrnll8snh38u4j', '127.0.0.1', 1490938324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933383235373b75736572726f6c657c733a353a226775657374223b);

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
('3bc6fe', 'c', 3, 'banana', '2017-04-01 03:27:46'),
('499bbc', 'c', 3, 'banana', '2017-04-01 10:26:20'),
('1a6c41', 'c', 3, 'banana', '2017-04-01 10:27:55');

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
('1a6c41', 'c', 3, 'banana', '2017-04-01 10:27:55'),
('1a9e4b', 'c', 3, 'banana', '2017-04-01 10:25:35'),
('21197c', 'b', 2, 'banana', '2017-04-01 00:16:45'),
('2156ea', 'w', 2, 'banana', '2017-04-01 00:17:54'),
('22ac85', 'a', 2, 'banana', '2017-04-01 00:16:39'),
('234c51', 'a', 3, 'banana', '2017-04-01 00:17:46'),
('23d712', 'c', 2, 'banana', '2017-04-01 03:27:18'),
('247b74', 'b', 3, 'banana', '2017-04-01 03:27:44'),
('24ee6b', 'r', 3, 'banana', '2017-04-01 00:16:39'),
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
('499bbc', 'c', 3, 'banana', '2017-04-01 10:26:20'),
('49af1b', 'r', 2, 'banana', '2017-03-31 23:50:10'),
('49d0ac', 'b', 3, 'banana', '2017-03-31 23:50:10'),
('4a6381', 'r', 3, 'banana', '2017-04-01 01:12:26'),
('4b22ae', 'b', 3, 'banana', '2017-04-01 00:19:44'),
('4bc087', 'a', 3, 'banana', '2017-04-01 00:16:45'),
('f6e34', 'c', 3, 'banana', '2017-04-01 02:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

DROP TABLE IF EXISTS `robots`;
CREATE TABLE `robots` (
  `ID` int(255) NOT NULL,
  `Top` varchar(20) NOT NULL,
  `Torso` varchar(20) NOT NULL,
  `Bottom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `robots`
--

INSERT INTO `robots` (`ID`, `Top`, `Torso`, `Bottom`) VALUES
(1, 'A1', 'B2', 'A3'),
(2, 'A1', 'A2', 'A3'),
(3, 'B1', 'B2', 'B3'),
(4, 'C1', 'M2', 'A3'),
(5, 'B1', 'A2', 'R3'),
(6, 'W1', 'W2', 'W3'),
(7, 'B1', 'C2', 'W3'),
(8, 'w1', 'r2', 'a3'),
(9, 'c1', 'a2', 'w3'),
(10, 'r1', 'a2', 'c3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
