-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2023 at 03:33 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keepitsimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_notifications`
--

CREATE TABLE `main_notifications` (
  `id` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `uid` text DEFAULT NULL,
  `status` enum('VIEWED','NOT_VIEWED') NOT NULL DEFAULT 'NOT_VIEWED',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `type_of_notification` varchar(50) NOT NULL DEFAULT 'DEFAULT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_notifications`
--

INSERT INTO `main_notifications` (`id`, `text`, `uid`, `status`, `date_created`, `type_of_notification`) VALUES
(1, 'Sample notification', '1', 'VIEWED', '2023-08-15 12:35:18', 'DEFAULT'),
(2, 'Sample notification', '1', 'VIEWED', '2023-08-15 12:35:19', 'DEFAULT'),
(3, 'Sample notification', '1', 'VIEWED', '2023-08-15 12:35:21', 'DEFAULT'),
(4, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:01:57', 'DEFAULT'),
(5, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:01:59', 'DEFAULT'),
(6, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:01:59', 'DEFAULT'),
(7, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:00', 'DEFAULT'),
(8, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:00', 'DEFAULT'),
(9, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:00', 'DEFAULT'),
(10, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:00', 'DEFAULT'),
(11, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:01', 'DEFAULT'),
(12, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:01', 'DEFAULT'),
(13, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:01', 'DEFAULT'),
(14, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:02:01', 'DEFAULT'),
(15, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:04:56', 'DEFAULT'),
(16, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:04:56', 'DEFAULT'),
(17, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:04:56', 'DEFAULT'),
(18, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:04:56', 'DEFAULT'),
(19, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:04:57', 'DEFAULT'),
(20, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:06:52', 'DEFAULT'),
(21, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:06:53', 'DEFAULT'),
(22, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:06:54', 'DEFAULT'),
(23, 'Sample notification', '1', 'VIEWED', '2023-08-15 13:06:54', 'DEFAULT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_notifications`
--
ALTER TABLE `main_notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_notifications`
--
ALTER TABLE `main_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
