-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2018 at 02:28 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j4jugaad`
--

-- --------------------------------------------------------

--
-- Table structure for table `STUDENTS`
--

CREATE TABLE `STUDENTS` (
  `nos` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `handle` varchar(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENTS`
--

INSERT INTO `STUDENTS` (`nos`, `name`, `gender`, `email`, `password`, `mobile`, `handle`, `college`, `stream`, `address`, `time`) VALUES
(1, 'test', 'Male', 'a@b.c', '4a7d1ed414474e4033ac29ccb8653d9b', 65, '000', '00', '00', '00', '2018-09-07 01:47:16'),
(3, 'Test', 'Male', 'tester@t.t', '81dc9bdb52d04dc20036dbd8313ed055', 987654321, 'tester', 'Test', 'Test', 'Test', '2018-09-07 23:55:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `STUDENTS`
--
ALTER TABLE `STUDENTS`
  ADD PRIMARY KEY (`handle`),
  ADD UNIQUE KEY `nos` (`nos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `STUDENTS`
--
ALTER TABLE `STUDENTS`
  MODIFY `nos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
