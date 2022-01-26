-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 06:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `height`
--

CREATE TABLE `height` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `height` double DEFAULT NULL,
  `seibetu` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `height`
--

INSERT INTO `height` (`id`, `height`, `seibetu`, `created`, `modified`) VALUES
(1, 150, 1, '2022-01-25 04:02:03', '2022-01-25 05:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `weight_management`
--

CREATE TABLE `weight_management` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `keisokuday` datetime DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `memo` text DEFAULT NULL,
  `bmi` double DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weight_management`
--

INSERT INTO `weight_management` (`id`, `keisokuday`, `weight`, `memo`, `bmi`, `created`, `modified`) VALUES
(4, '2022-01-25 05:00:21', 50, 'test', 50, '2022-01-25 09:30:21', '2022-01-25 05:00:21'),
(5, '2022-01-25 05:01:41', 40, 'tt', 40, '2022-01-25 09:31:41', '2022-01-25 05:01:41'),
(6, '2022-01-25 05:15:04', 60, 'test', 60, '2022-01-25 09:45:04', '2022-01-25 05:15:04'),
(7, '2022-01-25 05:23:01', 80, 'test', 35.56, '2022-01-25 09:53:01', '2022-01-25 05:23:01'),
(8, '2022-01-25 05:52:04', 4, 'dfg', 1.78, '2022-01-25 10:22:04', '2022-01-25 05:52:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `height`
--
ALTER TABLE `height`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight_management`
--
ALTER TABLE `weight_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `height`
--
ALTER TABLE `height`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weight_management`
--
ALTER TABLE `weight_management`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
