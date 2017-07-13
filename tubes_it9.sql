-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2017 at 03:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_it9`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL COMMENT 'to store guest id',
  `name` varchar(100) NOT NULL COMMENT 'to store guest name',
  `address` varchar(200) NOT NULL COMMENT 'to store guest address',
  `email` varchar(50) NOT NULL COMMENT 'to store guest email',
  `gender` enum('p','l') NOT NULL COMMENT 'to store guest gender',
  `comment` varchar(500) NOT NULL COMMENT 'to store guest comments',
  `visit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `name`, `address`, `email`, `gender`, `comment`, `visit`) VALUES
(1, 'ada', 'ada', 'ada@gmail.com', 'p', 'ada', '0000-00-00 00:00:00'),
(2, 't', 't', 'test@gmail.com', 'l', ' t', '0000-00-00 00:00:00'),
(3, 'test2', 'test2', 'test2@gmail.com', 'l', 'test2', '2017-07-13 13:02:50'),
(4, 'test3', 'test3', 'test3@gmail.com', 'p', 'test3', '2017-07-13 13:03:20'),
(5, 'test4', 'test4', 'test4@gmail.com', 'p', 'test4', '2017-07-13 13:04:48'),
(6, 'test5', 'test5', 'test5@gmail.com', 'l', 'test5', '2017-07-13 13:08:31'),
(7, 'test6', 'test6', 'test6@gmail.com', 'p', 'test6', '2017-07-13 13:08:56'),
(8, 'test', 'test', 'test@gmail.com', 'l', 'test', '2017-07-13 13:16:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to store guest id', AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
