-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 05:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_details`
--

CREATE TABLE `add_details` (
  `id` int(11) NOT NULL,
  `enroll_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_details`
--

INSERT INTO `add_details` (`id`, `enroll_id`, `name`, `age`, `course`, `branch`, `contact`, `email`) VALUES
(1584979075, 'GE-172012618', 'Rishit', '19', 'B.Tech', 'Computer Science', '7015457296', 'rishitaggarwal1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_details`
--
ALTER TABLE `add_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enroll_id` (`enroll_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
