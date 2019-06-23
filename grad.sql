-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2019 at 12:53 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grad`
--

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `cer_id` int(10) NOT NULL,
  `cer_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cer_desc` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`cer_id`, `cer_name`, `cer_desc`) VALUES
(1, 'MSCE', 'microsoft certified system engineer'),
(2, 'MSAD', 'microsoft certified application developer'),
(3, 'MSCD', 'Microsoft certified solution developer'),
(4, 'MSCA', 'Microsoft certified system administrator'),
(5, 'MSDBA', 'microsoft certified database administrator'),
(6, 'CCNA', 'Cisco Certified Network Associate'),
(7, 'AWS', 'amazon web services');

-- --------------------------------------------------------

--
-- Table structure for table `certification scheduling`
--

CREATE TABLE `certification scheduling` (
  `cer_id` int(10) NOT NULL,
  `cer_sc_id` int(10) NOT NULL,
  `city_institute_id` int(11) NOT NULL,
  `cer_sc_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cer_sc_date` date NOT NULL,
  `cer_sc_duration` float NOT NULL,
  `cer_sc_price` float NOT NULL,
  `cer_sc_desc` varchar(1000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `certification scheduling`
--

INSERT INTO `certification scheduling` (`cer_id`, `cer_sc_id`, `city_institute_id`, `cer_sc_name`, `cer_sc_date`, `cer_sc_duration`, `cer_sc_price`, `cer_sc_desc`) VALUES
(6, 1, 0, 'CCNA', '2019-08-01', 4, 2000, 'Certification Exam CCNA'),
(7, 2, 0, 'AWS', '2019-08-02', 4, 5000, 'Certification Exam AWS'),
(1, 3, 0, 'MSCE', '2019-08-03', 4, 5000, 'Certification Exam MSCE');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `city_name` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `g_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `g_id`) VALUES
(1, 'Alexandria', 1),
(2, 'Asyut', 2),
(3, 'Maadi', 3),
(4, 'El Nozha', 3),
(5, 'El Shorouk', 3),
(6, 'Zamalek', 3),
(7, 'Hada\'iq El Qobbah', 3),
(8, 'Helwan', 3),
(9, 'Nasr City', 3),
(10, 'El Mansoura', 8),
(11, 'Kafr el Sheikh', 5),
(12, 'Desouk', 5),
(13, 'Banha', 7),
(14, 'Zagazig	', 6),
(15, 'Suez', 9);

-- --------------------------------------------------------

--
-- Table structure for table `city_institutes`
--

CREATE TABLE `city_institutes` (
  `id` int(11) NOT NULL,
  `institute_id` int(10) NOT NULL,
  `city_id` int(11) NOT NULL,
  `branch_name` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `city_institutes`
--

INSERT INTO `city_institutes` (`id`, `institute_id`, `city_id`, `branch_name`) VALUES
(1, 1, 4, 'Route Maadi'),
(2, 2, 5, 'Gelecom Abbas'),
(3, 3, 6, 'Egy Set Mansoura');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `company_desc` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `company_link` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_desc`, `company_link`) VALUES
(1, 'Microsoft', 'It develops, manufactures, licenses, supports and sells computer software', 'https://www.microsoft.com/ar-eg'),
(2, 'Oracle', 'One of the largest and most important IT companies in general and databases in particular', 'https://www.oracle.com'),
(3, 'Amazon', 'The world\'s largest provider of cloud infrastructure services (IaaS and PaaS). Amazon also sells som', 'https://www.amazon.com/'),
(4, 'Cisco System', 'The world\'s first in the field of network equipment has benefited from the Internet boom to become o', 'https://www.cisco.com/');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(5) NOT NULL,
  `course_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `course_desc` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `d_id` int(10) DEFAULT NULL,
  `cer_id` int(10) DEFAULT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `company_id`, `d_id`, `cer_id`, `Category_id`) VALUES
(1, 'HTML', 'ااااااااااااا', NULL, NULL, NULL, 1),
(2, 'CSS', 'يبششششش', NULL, NULL, NULL, 1),
(3, 'javascript', 'يبثبث', NULL, NULL, NULL, 1),
(4, 'PHP', 'يييييث', NULL, NULL, NULL, 1),
(5, 'MYSQL', 'صصضس', NULL, NULL, NULL, 1),
(6, 'classic control', 'ببثقل', NULL, NULL, NULL, 3),
(7, 'PLC', 'قثثص', NULL, NULL, NULL, 3),
(8, 'CCNA', 'فف55ف', NULL, NULL, NULL, 2),
(9, 'CCNP', 'صصص', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course category`
--

CREATE TABLE `course category` (
  `d` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course category`
--

INSERT INTO `course category` (`d`, `name`) VALUES
(1, 'Web'),
(2, 'Networks'),
(3, 'Control'),
(4, 'Embedded Systems');

-- --------------------------------------------------------

--
-- Table structure for table `course_scheduling`
--

CREATE TABLE `course_scheduling` (
  `course_id` int(10) NOT NULL,
  `co_sc_id` int(10) NOT NULL,
  `city_institute_id` int(10) NOT NULL,
  `co_sc_sDate` date NOT NULL,
  `co_sc_price` float NOT NULL,
  `duration` int(11) NOT NULL,
  `trainer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_scheduling`
--

INSERT INTO `course_scheduling` (`course_id`, `co_sc_id`, `city_institute_id`, `co_sc_sDate`, `co_sc_price`, `duration`, `trainer`) VALUES
(1, 1, 2, '2019-06-12', 22, 44, 'fddsfs'),
(2, 2, 1, '2019-06-29', 55, 34, 'dfggf'),
(4, 3, 2, '2019-06-24', 33, 44, 'fdfe'),
(3, 4, 2, '2019-06-28', 21, 14, 'fsdsdf');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `d_id` int(10) NOT NULL,
  `d_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `d_desc` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`d_id`, `d_name`, `d_desc`) VALUES
(1, 'Full Stack Web ', 'web design and web devoleper'),
(2, 'Networks', 'CCNA,CCNP,MCSA'),
(3, 'android full stack developer', 'android '),
(4, 'Automation control', 'plc1, plc advaced');

-- --------------------------------------------------------

--
-- Table structure for table `diploma scheduling`
--

CREATE TABLE `diploma scheduling` (
  `d_id` int(10) NOT NULL,
  `d_sc_id` int(10) NOT NULL,
  `city_institute_id` int(10) NOT NULL,
  `d_sc_sDate` date NOT NULL,
  `d_sc_price` float NOT NULL,
  `duration` int(11) NOT NULL,
  `trainer` varchar(40) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `diploma scheduling`
--

INSERT INTO `diploma scheduling` (`d_id`, `d_sc_id`, `city_institute_id`, `d_sc_sDate`, `d_sc_price`, `duration`, `trainer`) VALUES
(3, 1, 1, '2019-07-01', 2000, 44, 'ddf'),
(4, 2, 3, '2019-07-01', 2200, 33, 'ffffd'),
(2, 3, 2, '2019-07-03', 3000, 55, 'eeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `governorate`
--

CREATE TABLE `governorate` (
  `g_id` int(3) NOT NULL,
  `g_name` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `governorate`
--

INSERT INTO `governorate` (`g_id`, `g_name`) VALUES
(1, 'Alexandria'),
(2, 'Asyut'),
(3, 'Cairo'),
(4, 'Giza'),
(5, 'Kafr El Sheikh'),
(6, 'Sharqia'),
(7, 'Qalyubia'),
(8, 'Dakahlia'),
(9, 'Suez');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id` int(10) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `brief` varchar(1000) COLLATE utf8mb4_bin DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `remember_token` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `state` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `name`, `brief`, `phone`, `email`, `website`, `remember_token`, `password`, `state`) VALUES
(1, 'Route', '', '01005020364', 'route50@gmail.com', '', 'route1', '12345', 1),
(2, 'Gelecom', '', '01225689145', 'gelecom15@gmail.com', '', 'gelecom2', '12345', 2),
(3, 'Egy Set', '', '01012278951', 'egyset3@gmail.com', '', 'egyset15', '12345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `neighborhood`
--

CREATE TABLE `neighborhood` (
  `n_id` int(11) NOT NULL,
  `n_name` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `city_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `neighborhood`
--

INSERT INTO `neighborhood` (`n_id`, `n_name`, `city_id`) VALUES
(1, 'Montaza', 1),
(2, 'Sidi Gaber', 1),
(3, 'Ain Shams', 7),
(4, 'Maadi	', 3),
(5, 'Abbas El Akkad', 9),
(6, 'El Mansoura	', 10),
(7, 'Agouza	', 3),
(8, 'Stad Street', 11),
(9, 'Banha	', 13),
(10, 'Zagazig	', 14),
(11, 'Suez	', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_login` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_state` int(1) DEFAULT NULL,
  `n_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `Dob`, `email`, `user_login`, `password`, `user_state`, `n_id`, `updated_at`, `created_at`) VALUES
(1, 'Mahmoud Emarah', '01017890989', '1994-10-01', 'home.mahmoudemarah@gmail.com', 'mahmoudemarah20', '12345', 1, 10, '2019-06-22 02:51:26', '0000-00-00 00:00:00'),
(2, 'Tareq Ahmed Rezk', '01027121838', '1993-06-01', 'tareq.rezk.1@gmail.com', 'tarekrezk10', '12345', 1, 8, '2019-06-22 02:51:26', '0000-00-00 00:00:00'),
(3, 'Abdel Rahman Saad', '01097589015', '1996-04-01', 'abdulrahmansaad4010@azhar.edu.eg', 'abdosaad14', '12345', 1, 6, '2019-06-22 02:51:26', '0000-00-00 00:00:00'),
(4, 'Asmaa Okasha', '01096451591', '1996-04-02', 'Asmaawebdev@gmail.com', 'asmaaokasha8', '12345', 2, 8, '2019-06-22 02:51:26', '0000-00-00 00:00:00'),
(10, 'Yousef2', NULL, NULL, 'abdoeldhan1999@gmail.com', NULL, '$2y$10$9Ry8gfXujE1DT16wxeZFguaURG4WWQVmzUvrf.dBrkjG13OLyc7TG', NULL, NULL, '2019-06-22 03:20:32', '2019-06-22 03:20:32'),
(11, 'Yousef3', NULL, NULL, 'sds@gmail.com', NULL, '$2y$10$NNJomilwP8tq/fVOqASuI..ql3eJ79mGPjunL/rXsKzykpbdbGcqC', NULL, NULL, '2019-06-22 06:59:41', '2019-06-22 06:59:41'),
(12, 'mar3y', NULL, NULL, 'm.mar3y96@gmail.com', NULL, '$2y$10$OikJbiaaRJfTIqTOG5m1..WOymz9GeHIo1kz0UuY40c8POVIgAPru', NULL, NULL, '2019-06-22 09:57:09', '2019-06-22 09:57:09'),
(13, 'aaaaaa', NULL, NULL, 'aaaaaa@gmail.com', NULL, '$2y$10$8NTln.Sf79RUtDkPFVUh3eXT/SXZV3wO/JFQQJKCVMeVm3PWKYfpO', NULL, NULL, '2019-06-22 13:04:48', '2019-06-22 13:04:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`cer_id`);

--
-- Indexes for table `certification scheduling`
--
ALTER TABLE `certification scheduling`
  ADD PRIMARY KEY (`cer_sc_id`),
  ADD KEY `cer_id` (`cer_id`,`cer_sc_id`) USING BTREE;

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `g_id` (`g_id`);

--
-- Indexes for table `city_institutes`
--
ALTER TABLE `city_institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_id` (`course_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `cer_id` (`cer_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `course category`
--
ALTER TABLE `course category`
  ADD PRIMARY KEY (`d`),
  ADD UNIQUE KEY `Category_id` (`d`);

--
-- Indexes for table `course_scheduling`
--
ALTER TABLE `course_scheduling`
  ADD PRIMARY KEY (`co_sc_id`),
  ADD UNIQUE KEY `co_sc_id` (`co_sc_id`);

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_id` (`d_id`);

--
-- Indexes for table `diploma scheduling`
--
ALTER TABLE `diploma scheduling`
  ADD PRIMARY KEY (`d_sc_id`) USING BTREE,
  ADD KEY `institute_id` (`city_institute_id`),
  ADD KEY `d_id` (`d_id`,`d_sc_id`) USING BTREE;

--
-- Indexes for table `governorate`
--
ALTER TABLE `governorate`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `institute_id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `user__id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_institutes`
--
ALTER TABLE `city_institutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `course category`
--
ALTER TABLE `course category`
  MODIFY `d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `course_scheduling`
--
ALTER TABLE `course_scheduling`
  MODIFY `co_sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `diploma scheduling`
--
ALTER TABLE `diploma scheduling`
  MODIFY `d_sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
