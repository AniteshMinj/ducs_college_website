-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 10:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ducs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE DATABASE ducs_database;

USE ducs_database;

CREATE TABLE `course` (
  `course_id` int(4) NOT NULL,
  `title` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `credits` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`) VALUES
(1, 'MSC', 'Computer Science', 600),
(2, 'MCA', 'Computer Science', 600);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(30) NOT NULL,
  `building` varchar(30) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `building`, `budget`) VALUES
('Arts', 'Department of Arts', 10000023),
('Computer Science', 'Dept of CS', 1000000000),
('Maths', 'Department of Mathematics', 123001000);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `dept_name`, `salary`) VALUES
(1, 'Arun', 'Computer Science', 40000),
(2, 'Khusboo', 'Computer Science', 45000),
(3, 'Gaurav', 'Computer Science', 60000),
(4, 'Ajay', 'Maths', 50000),
(5, 'Arpita', 'Computer Science', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_id` int(4) NOT NULL,
  `sec_id` int(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `building` varchar(30) DEFAULT NULL,
  `room_no` int(4) DEFAULT NULL,
  `time_slot_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL,
  `sec_id` int(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL,
  `sec_id` int(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`name`, `password`, `email`, `phone`, `type`) VALUES
('Aman', 'd879c7acdc51df44ca9480f9b97ff806', 'aman@du.ac.in', '6498897979', 'student'),
('Anitesh', 'cd61f80d7301b5134fac1699d7739ec1', 'anit@du.ac.in', '9365300706', 'student'),
('subham', '1a6c42113064a6c2888f5064385bbbef', 'subham@du.ac.in', '9635300562', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inst_dept` (`dept_name`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`semester`,`year`);



--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD KEY `takes_sec` (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `stu_takes` (`id`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD KEY `sec_teaches` (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `inst_teaches` (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_dept` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `inst_dept` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE CASCADE ON UPDATE CASCADE;



--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `inst_teaches` FOREIGN KEY (`id`) REFERENCES `instructor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sec_teaches` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
