-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 11:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` bigint(20) NOT NULL,
  `adminid` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `adminid`, `first_name`, `last_name`, `email`, `password`) VALUES
(3, 1733772855962988, 'Admin', 'Admin', 'admin.admin@gmail.com', 'admin.admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `Q1` varchar(10) NOT NULL,
  `Q2` varchar(10) NOT NULL,
  `Q3` varchar(10) NOT NULL,
  `Q4` varchar(10) NOT NULL,
  `Q5` varchar(10) NOT NULL,
  `Q6` varchar(10) NOT NULL,
  `Q7` varchar(10) NOT NULL,
  `Q8` varchar(10) NOT NULL,
  `Q9` varchar(10) NOT NULL,
  `Q10` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `class` (`class`),
  ADD KEY `year` (`year`),
  ADD KEY `academic_year` (`academic_year`),
  ADD KEY `Q1` (`Q1`),
  ADD KEY `Q2` (`Q2`),
  ADD KEY `Q3` (`Q3`),
  ADD KEY `Q4` (`Q4`),
  ADD KEY `Q5` (`Q5`),
  ADD KEY `Q6` (`Q6`),
  ADD KEY `Q7` (`Q7`),
  ADD KEY `Q8` (`Q8`),
  ADD KEY `Q9` (`Q9`),
  ADD KEY `Q10` (`Q10`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
