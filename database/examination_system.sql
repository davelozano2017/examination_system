-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 10:23 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `es_accounts_tbl`
--

CREATE TABLE `es_accounts_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_accounts_tbl`
--

INSERT INTO `es_accounts_tbl` (`id`, `name`, `email`, `address`, `gender`, `role`, `username`, `password`, `date`) VALUES
(12, 'John David Lozano', 'lozanojohndavid@gmail.com', 'Quezon CIty', 'Male', 1, 'OES-b694507', '12345', '2017-04-17 20:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `es_school_information`
--

CREATE TABLE `es_school_information` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_school_information`
--

INSERT INTO `es_school_information` (`id`, `name`, `email`, `address`, `contact`, `slogan`) VALUES
(19, 'Access Computer College', 'accesscomputercollege@gmail.com', 'Zabarte Rd. Camarin Caloocan', '09226645555', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `es_accounts_tbl`
--
ALTER TABLE `es_accounts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_school_information`
--
ALTER TABLE `es_school_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `es_accounts_tbl`
--
ALTER TABLE `es_accounts_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `es_school_information`
--
ALTER TABLE `es_school_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
