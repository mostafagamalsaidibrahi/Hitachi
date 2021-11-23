-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 02:38 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitachi`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `day` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attId`, `uId`, `username`, `day`, `month`, `year`, `status`) VALUES
(8, 2, 'ali', '13', '05', '20', 'yes'),
(9, 4, 'weza', '13', '06', '20', 'yes'),
(10, 2, 'ali', '14', '05', '20', 'yes'),
(11, 4, 'weza', '14', '05', '20', 'yes'),
(12, 2, 'ali', '15', '05', '20', 'yes'),
(13, 4, 'weza', '15', '05', '20', 'no'),
(14, 2, 'ali', '16', '05', '20', 'yes'),
(15, 4, 'weza', '16', '05', '20', 'no'),
(16, 2, 'ali', '17', '05', '20', 'yes'),
(17, 4, 'weza', '17', '05', '20', 'yes'),
(18, 6, 'mostafa', '17', '05', '20', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fId`, `fullname`, `email`, `message`) VALUES
(1, 'mostafa', 'mostafa@gmail.com', 'this is very good site'),
(2, 'ali', 'ali@gmail.com', 'i am ali weza'),
(3, 'yousra', 'yoursa@yahoo.com', 'i am yousra i love hitachi company');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `username`, `password`, `salary`, `type`) VALUES
(2, 'ali', 'ali', '29000', 'employee'),
(3, 'accounter', 'accounter123', '4000', 'accounter'),
(4, 'weza', 'weza', '2200', 'employee'),
(5, 'admin', 'admin123', '4000', 'admin'),
(6, 'mostafa', 'mostafa', '1200', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
