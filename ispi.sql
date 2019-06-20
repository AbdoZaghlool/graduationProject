-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 06:01 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ispi`
--

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `cer_id` int(10) NOT NULL,
  `cer_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cer_desc` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `cer_duration` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`cer_id`, `cer_name`, `cer_desc`, `cer_duration`) VALUES
(1, 'MSCE', 'microsoft certified system engineer', 4),
(2, 'MSAD', 'microsoft certified application developer', 4),
(3, 'MSCD', 'Microsoft certified solution developer', 4),
(4, 'MSCA', 'Microsoft certified system administrator', 4),
(5, 'MSDBA', 'microsoft certified database administrator', 4),
(6, 'CCNA', 'Cisco Certified Network Associate', 4),
(7, 'AWS', 'amazon web services', 4);

-- --------------------------------------------------------

--
-- Table structure for table `certification scheduling`
--

CREATE TABLE `certification scheduling` (
  `cer_id` int(10) NOT NULL,
  `cer_sc_id` int(10) NOT NULL,
  `cer_sc_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cer_sc_date` date NOT NULL,
  `cer_sc_duration` float NOT NULL,
  `cer_sc_price` float NOT NULL,
  `cer_sc_desc` varchar(1000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `certification scheduling`
--

INSERT INTO `certification scheduling` (`cer_id`, `cer_sc_id`, `cer_sc_name`, `cer_sc_date`, `cer_sc_duration`, `cer_sc_price`, `cer_sc_desc`) VALUES
(1, 3, 'MSCE', '2019-08-03', 4, 5000, 'Certification Exam MSCE'),
(6, 1, 'CCNA', '2019-08-01', 4, 2000, 'Certification Exam CCNA'),
(7, 2, 'AWS', '2019-08-02', 4, 5000, 'Certification Exam AWS');

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
  `course_duration` int(5) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `d_id` int(10) DEFAULT NULL,
  `cer_id` int(10) DEFAULT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_duration`, `company_id`, `d_id`, `cer_id`, `Category_id`) VALUES
(1, 'HTML', '', 12, NULL, NULL, NULL, 1),
(2, 'CSS', '', 24, NULL, NULL, NULL, 1),
(3, 'javascript', '', 48, NULL, NULL, NULL, 1),
(4, 'PHP', '', 100, NULL, NULL, NULL, 1),
(5, 'MYSQL', '', 24, NULL, NULL, NULL, 1),
(6, 'classic control', '', 48, NULL, NULL, NULL, 3),
(7, 'PLC', '', 20, NULL, NULL, NULL, 3),
(8, 'CCNA', '', 48, NULL, NULL, NULL, 2),
(9, 'CCNP', '', 48, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course category`
--

CREATE TABLE `course category` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course category`
--

INSERT INTO `course category` (`Category_id`, `Category_name`) VALUES
(1, 'Web'),
(2, 'Networks'),
(3, 'Control'),
(4, 'Embedded Systems');

-- --------------------------------------------------------

--
-- Table structure for table `course scheduling`
--

CREATE TABLE `course scheduling` (
  `course_id` int(10) NOT NULL,
  `co_sc_id` int(10) NOT NULL,
  `institute_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `co_sc_sDate` date NOT NULL,
  `co_sc_eDate` date NOT NULL,
  `co_sc_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course scheduling`
--

INSERT INTO `course scheduling` (`course_id`, `co_sc_id`, `institute_id`, `trainer_id`, `co_sc_sDate`, `co_sc_eDate`, `co_sc_price`) VALUES
(1, 1, 1, 3, '2019-07-01', '2019-07-30', 100),
(2, 4, 1, 3, '2019-07-03', '2019-07-31', 100),
(3, 5, 1, 3, '2019-08-08', '2019-09-18', 200),
(6, 3, 3, 1, '2019-07-05', '2019-08-08', 500),
(8, 2, 2, 2, '2019-07-10', '2019-08-14', 500);

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `d_id` int(10) NOT NULL,
  `d_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `d_desc` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `d_duration` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`d_id`, `d_name`, `d_desc`, `d_duration`) VALUES
(1, 'Full Stack Web ', 'web design and web devoleper', 6),
(2, 'Networks', 'CCNA,CCNP,MCSA', 5),
(3, 'android full stack developer', 'android ', 6),
(4, 'Automation control', 'plc1, plc advaced', 6);

-- --------------------------------------------------------

--
-- Table structure for table `diploma scheduling`
--

CREATE TABLE `diploma scheduling` (
  `d_id` int(10) NOT NULL,
  `d_sc_id` int(10) NOT NULL,
  `institute_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `d_sc_sDate` date NOT NULL,
  `d_sc_eDate` date NOT NULL,
  `d_sc_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `diploma scheduling`
--

INSERT INTO `diploma scheduling` (`d_id`, `d_sc_id`, `institute_id`, `trainer_id`, `d_sc_sDate`, `d_sc_eDate`, `d_sc_price`) VALUES
(2, 3, 2, 2, '2019-07-03', '2020-02-28', 3000),
(3, 1, 1, 3, '2019-07-01', '2019-12-31', 2000),
(4, 2, 3, 2, '2019-07-01', '2019-12-31', 2200);

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
  `institute_id` int(10) NOT NULL,
  `institute_name` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `institute_brief` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `institute_phone` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `institute_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `institute_website` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `institute_login` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `institute_password` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `institute_state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`institute_id`, `institute_name`, `institute_brief`, `institute_phone`, `institute_email`, `institute_website`, `institute_login`, `institute_password`, `institute_state`) VALUES
(1, 'Route', '', '01005020364', 'route50@gmail.com', '', 'route1', '12345', 1),
(2, 'Gelecom', '', '01225689145', 'gelecom15@gmail.com', '', 'gelecom2', '12345', 2),
(3, 'Egy Set', '', '01012278951', 'egyset3@gmail.com', '', 'egyset15', '12345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `instneigh`
--

CREATE TABLE `instneigh` (
  `institute_id` int(10) NOT NULL,
  `n_id` int(11) NOT NULL,
  `branch_name` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `instneigh`
--

INSERT INTO `instneigh` (`institute_id`, `n_id`, `branch_name`) VALUES
(1, 4, 'Route Maadi'),
(2, 5, 'Gelecom Abbas'),
(3, 6, 'Egy Set Mansoura');

-- --------------------------------------------------------

--
-- Table structure for table `insttrain`
--

CREATE TABLE `insttrain` (
  `institute_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `insttrain`
--

INSERT INTO `insttrain` (`institute_id`, `trainer_id`, `start_date`) VALUES
(1, 3, '2017-09-06'),
(2, 2, '2019-01-01'),
(3, 1, '2019-03-01');

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
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(10) NOT NULL,
  `trainer_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `trainer_brief` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `trainer_phone` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `trainer_email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `n_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_name`, `trainer_brief`, `trainer_phone`, `trainer_email`, `n_id`) VALUES
(1, 'Ahmed Ali', '', '01012345678', 'ahmedali1@gmail.com', 5),
(2, 'Kareem Mohammed', '', '01023456789', 'kareemmohammed2@gmail.com', 9),
(3, 'Khaled Samy', '', '01155678912', 'khaledsamy3@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user__id` int(20) NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `user_phone` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `user_dob` date NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `user_login` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `user_password` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `user_state` int(1) NOT NULL,
  `n_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user__id`, `user_name`, `user_phone`, `user_dob`, `user_email`, `user_login`, `user_password`, `user_state`, `n_id`) VALUES
(1, 'Mahmoud Emarah', '01017890989', '1994-10-01', 'home.mahmoudemarah@gmail.com', 'mahmoudemarah20', '12345', 1, 10),
(2, 'Tareq Ahmed Rezk', '01027121838', '1993-06-01', 'tareq.rezk.1@gmail.com', 'tarekrezk10', '12345', 1, 8),
(3, 'Abdel Rahman Saad', '01097589015', '1996-04-01', 'abdulrahmansaad4010@azhar.edu.eg', 'abdosaad14', '12345', 1, 6),
(4, 'Asmaa Okasha', '01096451591', '1996-04-02', 'Asmaawebdev@gmail.com', 'asmaaokasha8', '12345', 2, 8);

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
  ADD PRIMARY KEY (`cer_id`,`cer_sc_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `g_id` (`g_id`);

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
  ADD KEY `company_id` (`company_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `cer_id` (`cer_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `course category`
--
ALTER TABLE `course category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `course scheduling`
--
ALTER TABLE `course scheduling`
  ADD PRIMARY KEY (`course_id`,`co_sc_id`),
  ADD KEY `institute_id` (`institute_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `diploma scheduling`
--
ALTER TABLE `diploma scheduling`
  ADD PRIMARY KEY (`d_id`,`d_sc_id`),
  ADD KEY `institute_id` (`institute_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `governorate`
--
ALTER TABLE `governorate`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`institute_id`);

--
-- Indexes for table `instneigh`
--
ALTER TABLE `instneigh`
  ADD PRIMARY KEY (`institute_id`,`n_id`),
  ADD KEY `n_id` (`n_id`);

--
-- Indexes for table `insttrain`
--
ALTER TABLE `insttrain`
  ADD PRIMARY KEY (`institute_id`,`trainer_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`),
  ADD KEY `n_id` (`n_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user__id`),
  ADD KEY `n_id` (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `cer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course category`
--
ALTER TABLE `course category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `governorate`
--
ALTER TABLE `governorate`
  MODIFY `g_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `institute_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `neighborhood`
--
ALTER TABLE `neighborhood`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user__id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certification scheduling`
--
ALTER TABLE `certification scheduling`
  ADD CONSTRAINT `certification scheduling_ibfk_1` FOREIGN KEY (`cer_id`) REFERENCES `certification` (`cer_id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `governorate` (`g_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `course category` (`Category_id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `course_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `diploma` (`d_id`),
  ADD CONSTRAINT `course_ibfk_4` FOREIGN KEY (`cer_id`) REFERENCES `certification` (`cer_id`);

--
-- Constraints for table `course scheduling`
--
ALTER TABLE `course scheduling`
  ADD CONSTRAINT `course scheduling_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `course scheduling_ibfk_2` FOREIGN KEY (`institute_id`) REFERENCES `institute` (`institute_id`),
  ADD CONSTRAINT `course scheduling_ibfk_3` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

--
-- Constraints for table `diploma scheduling`
--
ALTER TABLE `diploma scheduling`
  ADD CONSTRAINT `diploma scheduling_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `diploma` (`d_id`),
  ADD CONSTRAINT `diploma scheduling_ibfk_2` FOREIGN KEY (`institute_id`) REFERENCES `institute` (`institute_id`),
  ADD CONSTRAINT `diploma scheduling_ibfk_3` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

--
-- Constraints for table `instneigh`
--
ALTER TABLE `instneigh`
  ADD CONSTRAINT `instneigh_ibfk_1` FOREIGN KEY (`n_id`) REFERENCES `neighborhood` (`n_id`),
  ADD CONSTRAINT `instneigh_ibfk_2` FOREIGN KEY (`institute_id`) REFERENCES `institute` (`institute_id`);

--
-- Constraints for table `insttrain`
--
ALTER TABLE `insttrain`
  ADD CONSTRAINT `insttrain_ibfk_1` FOREIGN KEY (`institute_id`) REFERENCES `institute` (`institute_id`),
  ADD CONSTRAINT `insttrain_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

--
-- Constraints for table `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD CONSTRAINT `neighborhood_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`n_id`) REFERENCES `neighborhood` (`n_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`n_id`) REFERENCES `neighborhood` (`n_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
