-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2019 at 02:00 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darfour`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`) VALUES
(1, 'الاول'),
(2, 'الثاني'),
(4, 'الثاث'),
(5, 'الرابع'),
(6, 'الخامس'),
(7, 'السادس'),
(8, 'السابع'),
(9, 'الثامن'),
(10, 'التاسع'),
(11, 'العاشر'),
(12, 'الحادي عشر'),
(13, 'الثاني عشر');

-- --------------------------------------------------------

--
-- Table structure for table `depart_table`
--

CREATE TABLE `depart_table` (
  `id` int(11) NOT NULL,
  `fac_name` varchar(255) NOT NULL,
  `depart_name` varchar(255) NOT NULL,
  `depart_asign` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sem_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depart_table`
--

INSERT INTO `depart_table` (`id`, `fac_name`, `depart_name`, `depart_asign`, `status`, `date`, `sem_no`) VALUES
(58, 'الطب', 'الجراحة', 'jraha', 1, '2019-10-22 17:05:03', '12'),
(59, 'الطب', 'البيطرة', 'bit', 0, '2019-10-22 17:05:37', '12'),
(61, 'الطب', 'y', '3', 1, '2019-10-22 17:25:50', '3'),
(62, 'الطب', 'y4', '34', 1, '2019-10-22 17:26:19', '3'),
(63, 'الطب', '5', '5', 0, '2019-10-23 07:58:05', '5'),
(64, 'الطب', '55', '5', 1, '2019-10-23 07:58:17', '5');

-- --------------------------------------------------------

--
-- Table structure for table `fac_table`
--

CREATE TABLE `fac_table` (
  `id` int(11) NOT NULL,
  `fac_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fac_table`
--

INSERT INTO `fac_table` (`id`, `fac_name`, `date`) VALUES
(4, 'الطب', '2019-10-19 12:02:58'),
(5, 'التقانة', '2019-10-19 12:07:15'),
(6, 'الزراعة', '2019-10-19 12:07:24'),
(7, '222', '2019-10-19 12:19:47'),
(8, 'هندسه', '2019-10-19 17:17:53'),
(9, 'computer cs', '2019-10-21 19:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `name`, `status`) VALUES
(1, 'admin', '1111', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depart_table`
--
ALTER TABLE `depart_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fac_table`
--
ALTER TABLE `fac_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `depart_table`
--
ALTER TABLE `depart_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `fac_table`
--
ALTER TABLE `fac_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
