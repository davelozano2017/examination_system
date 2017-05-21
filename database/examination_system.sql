-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 12:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
(6, 'http://localhost/examination_system/assets/uploads/administrator.png', 'Administrator', 'admin@noreply.com', 'Holy Spirit Quezon City', 'Male', 0, 'Administrator', '$2y$10$t6dhw0uuqAuzB3UCgAUZHuvvRQWSeZ1Tqbz5EnwhrADIib8cUw0am', '19th  April 2017 04:40:44 PM'),
(22, 'http://localhost/examination_system/assets/uploads/mahal.png', 'Jeddahlyn Cabuga', 'cabugajeddahlyn@gmail.com', 'Quezon City', 'Female', 1, 'ES-6569010', '$2y$10$hvROveTLLjZzE8Z2AdrBYuDgPyPR4y71pqMD2k3m3W4b57ur4Si9u', 'April 21,  2017 03:45 PM'),
(23, 'http://localhost/examination_system/assets/uploads/sajer.jpg', 'Sajer Broncano', 'sajerbroncano@gmail.com', 'Bulacan City', 'Male', 1, 'ES-9370930', '$2y$10$aod4PqTmjc0yxWqL7xfxxeIZx660IQx18G2F1TiBEROqC.TRXrZeW', 'April 21,  2017 03:45 PM'),
(24, 'http://localhost/examination_system/assets/uploads/jade.png', 'Jade Batal', 'jadebatal@gmail.com', 'Caloocan City', 'Male', 1, 'ES-5752495', '$2y$10$QBymd9HS/RRa3MpFbtA4L.Ns94vs8PAhIl1k6dLcbNHQnVMZoe18y', 'April 21,  2017 03:45 PM'),
(25, 'http://localhost/examination_system/assets/uploads/paul.png', 'John Paul Bobila', 'johnpaulbobila@gmail.com', 'Caloocan City', 'Male', 1, 'ES-7315266', '$2y$10$VIpe5qobxmjFf4zAuKUW/uc8trm67AIqQGl3oAvVvXJ93I4ZJPMyS', 'April 21,  2017 03:45 PM'),
(26, 'http://localhost/examination_system/assets/uploads/shin.png', 'Shinjie Calica', 'shinjiecalica@gmail.com', 'Caloocan City', 'Male', 1, 'ES-5296223', '$2y$10$yoDx3/tD90ZE508Ee2eKeuqWed9T7WjsIyj74w/rtdowXLi5w2F1S', 'April 21,  2017 03:46 PM'),
(75, 'http://localhost/examination_system/assets/images/male.jpg', 'John David Lozano', 'lozanojohndavid@gmail.com', 'Quezon City', 'Male', 1, 'ES-7664387', '$2y$10$8sH2huBXehcGIwg4KIX1TOQkor4hHyvCyjIZzANi85GiTf9VaVXKe', 'April 23,  2017 01:55 AM');

-- --------------------------------------------------------

--
-- Table structure for table `es_category_tbl`
--

CREATE TABLE `es_category_tbl` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_category_tbl`
--

INSERT INTO `es_category_tbl` (`id`, `category`) VALUES
(5, 'PC hardware and software'),
(6, 'Logic Gates'),
(7, 'PC Networking');

-- --------------------------------------------------------

--
-- Table structure for table `es_instructions_tbl`
--

CREATE TABLE `es_instructions_tbl` (
  `id` int(11) NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_instructions_tbl`
--

INSERT INTO `es_instructions_tbl` (`id`, `instructions`) VALUES
(5, 'The examination contains 20 questions.'),
(7, 'Please choose your answer carefully.'),
(8, '50% is the passing rate. Below that you have failed the exam.'),
(9, 'If you are going to logout your account when the assestment is started, then you\'ll automatically fail your exam.'),
(10, '<strong class=\'text-danger\'>STRICTLY</strong> obey all instructions above.');

-- --------------------------------------------------------

--
-- Table structure for table `es_questions_tbl`
--

CREATE TABLE `es_questions_tbl` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `option_a` varchar(1000) NOT NULL,
  `option_b` varchar(1000) NOT NULL,
  `option_c` varchar(1000) NOT NULL,
  `option_d` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_questions_tbl`
--

INSERT INTO `es_questions_tbl` (`id`, `question`, `category`, `answer`, `option_a`, `option_b`, `option_c`, `option_d`) VALUES
(1, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(2, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(5, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(6, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(7, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(8, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(9, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(10, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(11, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(12, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(13, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(14, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(15, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(16, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(17, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(18, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(19, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(20, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory'),
(21, 'What is CPU?', 'PC hardware and software', 'Is a main brain of the computer.', 'Is a main brain of the computer.', 'N/a', 'N/a', 'N/a'),
(22, 'RAM stands for?', 'PC hardware and software', 'Random Access Memory', 'Random Access Memory', 'Random Acces Memory', 'Random Access Memmory', 'Rand0m Access Memory');

-- --------------------------------------------------------

--
-- Table structure for table `es_results_tbl`
--

CREATE TABLE `es_results_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `es_school_information`
--

INSERT INTO `es_school_information` (`id`, `image`, `name`, `email`, `address`, `contact`) VALUES
(19, 'http://localhost/examination_system/assets/uploads/logo.png', 'Our Lady of Fatima University', 'examination@fatima.edu.ph', 'Lagro Hilltop Quezon City', '09226645555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `es_accounts_tbl`
--
ALTER TABLE `es_accounts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_category_tbl`
--
ALTER TABLE `es_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_instructions_tbl`
--
ALTER TABLE `es_instructions_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_questions_tbl`
--
ALTER TABLE `es_questions_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_results_tbl`
--
ALTER TABLE `es_results_tbl`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `es_category_tbl`
--
ALTER TABLE `es_category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `es_instructions_tbl`
--
ALTER TABLE `es_instructions_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `es_questions_tbl`
--
ALTER TABLE `es_questions_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `es_results_tbl`
--
ALTER TABLE `es_results_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `es_school_information`
--
ALTER TABLE `es_school_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
