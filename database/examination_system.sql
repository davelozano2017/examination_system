-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 12:01 AM
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
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_accounts_tbl`
--

INSERT INTO `es_accounts_tbl` (`id`, `image`, `name`, `email`, `address`, `gender`, `role`, `username`, `password`, `date`) VALUES
(6, 'http://localhost/examination_system/assets/uploads/oficcial-512.png', 'Administrator', 'admin@noreply.com', 'Holy Spirit Quezon City', 'Male', 0, 'Administrator', '$2y$10$t6dhw0uuqAuzB3UCgAUZHuvvRQWSeZ1Tqbz5EnwhrADIib8cUw0am', '19th  April 2017 04:40:44 PM'),
(7, 'http://localhost/examination_system/assets/uploads/10949719_823337744409879_7506382810893741841_n.jpg', 'John David Lozano', 'lozanojohndavid@gmail.com', 'Holy Spirit Quezon City', 'Male', 1, 'davelozano06142016', '$2y$10$t6dhw0uuqAuzB3UCgAUZHuvvRQWSeZ1Tqbz5EnwhrADIib8cUw0am', '19th  April 2017 04:40:44 PM'),
(8, 'http://localhost/examination_system/assets/uploads/mahal.png', 'Jeddahlyn Cabuga', 'cabugajeddahlyn@gmail.com', 'Maligaya Park Quezon City', 'Female', 1, 'ES-1687825', '$2y$10$8vJyTk43ls/1eyIA5lbLG.9P91MHeB0YJi6eEpHBcDsI8HZw6OVma', '20th  April 2017 05:14:24 AM'),
(9, 'http://localhost/examination_system/assets/uploads/sajer.jpg', 'Sajer Broncano', 'sajerbroncano@gmail.com', 'Caloocan City', 'Male', 1, 'ES-9821777', '$2y$10$66eoC2pbvNIAj/lWMuH5pe8ZRmu/19S5fXoGoHHVQfLpYYprlpmue', '20th  April 2017 05:15:32 AM'),
(10, 'http://localhost/examination_system/assets/uploads/jade.png', 'Jade Batal', 'jadebatal@gmail.com', 'Kiko Caloocan City', 'Male', 1, 'ES-3304850', '$2y$10$wHHoJ/jv3gh4hDqZCRKNMez36MAnkJfrxzWUCd2z8tZ2oTrKe8/Xq', '20th  April 2017 05:15:57 AM'),
(11, 'http://localhost/examination_system/assets/uploads/paul.png', 'John Paul Bobila', 'johnpaulbobila@gmail.com', 'Caloocan City', 'Male', 1, 'ES-3716362', '$2y$10$T9CYCb9yRRXJpnZz.mrso.uMbRi399KkVClfjWhncIsBZONPKS63C', '20th  April 2017 05:16:36 AM'),
(12, 'http://localhost/examination_system/assets/uploads/shin.png', 'Shinjie Calica', 'shinjiecalica@gmail.com', 'Caloocan City', 'Male', 1, 'ES-7891167', '$2y$10$Aq.kkHknCa19KJG8otxOLete23Yog3nOeD5fiiOYDl3/58TyOAxE2', '20th  April 2017 05:29:15 AM');

-- --------------------------------------------------------

--
-- Table structure for table `es_mail_credentials`
--

CREATE TABLE `es_mail_credentials` (
  `id` int(11) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_mail_credentials`
--

INSERT INTO `es_mail_credentials` (`id`, `hostname`, `username`, `password`, `port`) VALUES
(1, 'smtp.gmail.com', 'infinixcherrymobile@gmail.com', '12345123', '465');

-- --------------------------------------------------------

--
-- Table structure for table `es_school_information`
--

CREATE TABLE `es_school_information` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_school_information`
--

INSERT INTO `es_school_information` (`id`, `image`, `name`, `email`, `address`, `contact`, `slogan`) VALUES
(19, 'http://localhost/examination_system/assets/uploads/Our_Lady_of_Fatima_University_logo.jpg', 'Our Lady of Fatima University', 'examination@fatima.edu.ph', 'Lagro Hilltop Quezon City', '09226645555', 'Slogan mo to!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `es_accounts_tbl`
--
ALTER TABLE `es_accounts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_mail_credentials`
--
ALTER TABLE `es_mail_credentials`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `es_mail_credentials`
--
ALTER TABLE `es_mail_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `es_school_information`
--
ALTER TABLE `es_school_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
