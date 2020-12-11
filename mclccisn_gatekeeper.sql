-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 01:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mclccisn_gatekeeper`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record`
--

CREATE TABLE `attendance_record` (
  `attendance_id` int(11) NOT NULL,
  `handled_id` int(11) NOT NULL,
  `date_record` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_record`
--

INSERT INTO `attendance_record` (`attendance_id`, `handled_id`, `date_record`) VALUES
(2, 1, '2020-02-23'),
(3, 2, '2020-02-23'),
(4, 4, '2020-01-23'),
(5, 4, '2020-01-22'),
(6, 4, '2020-02-21'),
(7, 4, '2020-02-20'),
(8, 3, '2020-02-23'),
(9, 5, '2020-02-23'),
(10, 0, '2020-03-04'),
(11, 0, '2020-03-05'),
(12, 0, '2020-03-25'),
(13, 0, '2020-01-23'),
(14, 0, '2020-02-27'),
(15, 0, '2020-03-18'),
(16, 0, NULL),
(17, 0, '2020-02-25'),
(18, 0, '2020-02-14'),
(19, 0, '2020-01-22'),
(20, 0, '2020-01-15'),
(21, 0, '2020-03-12'),
(22, 0, '2020-03-18'),
(23, 0, '2020-02-12'),
(24, 0, '2020-03-05'),
(25, 0, '2020-01-23'),
(26, 0, '2020-01-22'),
(27, 0, '2020-01-09'),
(28, 0, '2020-02-27'),
(29, 0, '2020-02-05'),
(30, 0, '2020-03-25'),
(31, 0, '2020-02-20'),
(32, 0, '2020-01-07'),
(33, 0, '2020-02-12'),
(34, 0, '2020-02-06'),
(35, 0, '2020-02-27'),
(36, 0, '2020-03-18'),
(37, 0, '2020-02-20'),
(38, 0, '2020-03-18'),
(39, 0, '2020-03-03'),
(40, 0, '2020-01-07'),
(41, 0, '2020-01-28'),
(44, 3, '2020-02-27'),
(45, 4, '2020-02-27'),
(50, 2, '2020-02-28'),
(51, 5, '2020-02-28'),
(52, 3, '2020-02-28'),
(53, 1, '2020-02-28'),
(54, 4, '2020-02-28'),
(56, 2, '2020-03-12'),
(59, 1, '2020-03-12'),
(61, 6, '2020-03-12'),
(62, 3, '2020-03-12'),
(63, 4, '2020-03-12'),
(65, 1, '2020-03-21'),
(69, 6, '2020-03-21'),
(73, 4, '2020-03-21'),
(74, 2, '2020-03-21'),
(75, 3, '2020-03-21'),
(79, 4, '2020-03-22'),
(80, 1, '2020-03-25'),
(81, 2, '2020-03-25'),
(82, 6, '2020-03-25'),
(88, 2, '2020-03-31'),
(89, 3, '2020-03-28'),
(91, 4, '2020-03-28'),
(92, 4, '2020-03-29'),
(93, 6, '2020-03-28'),
(94, 1, '2020-03-28'),
(96, 1, '2020-03-29'),
(97, 2, '2020-05-07'),
(98, 6, '2020-05-10'),
(99, 6, '2020-05-07'),
(100, 1, '2020-05-20'),
(101, 1, '2020-05-23'),
(102, 1, '2020-06-05'),
(104, 2, '2020-06-05'),
(105, 1, '2020-06-12'),
(107, 1, '2020-06-08'),
(108, 1, '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `attnmessage`
--

CREATE TABLE `attnmessage` (
  `imsg_no` int(11) NOT NULL,
  `imsg_details` text NOT NULL,
  `imsg_sender` text NOT NULL,
  `id_no` int(11) NOT NULL,
  `imsg_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `imsg_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attnmessage`
--

INSERT INTO `attnmessage` (`imsg_no`, `imsg_details`, `imsg_sender`, `id_no`, `imsg_Date`, `imsg_Status`) VALUES
(2, 'You are required to report to the faculty', 'CCIS', 2016180067, '2020-03-27 18:34:20', 'A'),
(3, 'Followup on your psychological test, please drop by and see us. Cheers!', 'Clinic', 2015102434, '2020-03-28 02:48:58', 'A'),
(4, 'Please report to our office. Thank you.', 'Admission', 2015102429, '2020-03-28 11:35:34', 'A'),
(5, 'Please drop by our office.', 'MITL', 2015102430, '2020-03-28 13:10:49', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `authorized_devices`
--

CREATE TABLE `authorized_devices` (
  `device_physical_address` varchar(17) NOT NULL,
  `device_hostname` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_record`
--

CREATE TABLE `course_record` (
  `course_code` varchar(30) NOT NULL,
  `course_desc` varchar(50) NOT NULL,
  `dept` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_record`
--

INSERT INTO `course_record` (`course_code`, `course_desc`, `dept`) VALUES
('ENG001', 'Reading and Writing', 'SHS'),
('ENG002', 'Research', 'SHS'),
('ENG003', 'Public Speaking', 'SHS'),
('IT100P', 'Flowcharts', 'College'),
('IT110P', 'C++', 'College'),
('IT111P', 'C#', 'College'),
('IT180P', 'Mobile and Web Project', 'College'),
('MATH001', 'Advance Algebra', 'SHS'),
('PE01', 'Physical Fitness', 'SHS'),
('VE014', 'Values Education', 'College');

-- --------------------------------------------------------

--
-- Table structure for table `guardianinfo`
--

CREATE TABLE `guardianinfo` (
  `guardian_no` text NOT NULL,
  `Gname` text NOT NULL,
  `id_no` int(11) NOT NULL,
  `email` text NOT NULL,
  `pword` text NOT NULL,
  `mobile_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `handled_course`
--

CREATE TABLE `handled_course` (
  `handled_id` int(11) NOT NULL,
  `course_code` varchar(30) DEFAULT NULL,
  `id_no` varchar(30) DEFAULT NULL,
  `class_sec` varchar(10) NOT NULL,
  `start_class` time NOT NULL,
  `end_class` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handled_course`
--

INSERT INTO `handled_course` (`handled_id`, `course_code`, `id_no`, `class_sec`, `start_class`, `end_class`) VALUES
(1, 'IT180P', '2015102424', 'A54', '08:30:00', '10:00:00'),
(2, 'IT111P', '2015102424', 'A54', '07:00:00', '08:30:00'),
(3, 'IT180P', '2015102433', 'A45', '07:00:00', '08:30:00'),
(4, 'VE014', '2015102433', 'A54', '14:30:00', '16:00:00'),
(5, 'VE014', '2015102434', 'A46', '07:00:00', '08:30:00'),
(6, 'IT180P', '2015102424', 'A55', '13:00:00', '14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `mcl_departments`
--

CREATE TABLE `mcl_departments` (
  `dept_code` tinytext NOT NULL,
  `dept_name` text NOT NULL,
  `dept_head` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcl_departments`
--

INSERT INTO `mcl_departments` (`dept_code`, `dept_name`, `dept_head`) VALUES
('CCIS', 'College of Computer and Information Science', 'Kikuchi, Khristian'),
('ETYCB', 'ET Yuchengco College of Business', 'Austria, Maria Rhodora'),
('CAS', 'College of Arts and Science', 'Hofilena, Joy'),
('MITL', 'Mapúa Institute of Technology at Laguna', ''),
('CMET', 'Mapúa-PTC College of Maritime Education and Training', 'Geguiento, Edgardo'),
('MITL', 'Mapúa Institute of Technology at Laguna', 'Medrano, Anthony Hilmer');

-- --------------------------------------------------------

--
-- Table structure for table `mmobileusers`
--

CREATE TABLE `mmobileusers` (
  `muid` text NOT NULL,
  `mmobileuser` text NOT NULL,
  `mmobilepword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mmobile_msgs`
--

CREATE TABLE `mmobile_msgs` (
  `msg_no` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `guardian_no` int(11) NOT NULL,
  `msg` text NOT NULL,
  `msgDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rfaccounts`
--

CREATE TABLE `rfaccounts` (
  `rf_id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `passkey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `handled_id` int(11) NOT NULL,
  `student_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`handled_id`, `student_id`) VALUES
(3, '2015102429'),
(3, '2015102430'),
(3, '2015102431'),
(3, '2015102432'),
(4, '2015102425'),
(4, '2015102426'),
(4, '2015102427'),
(4, '2015102428'),
(4, '2015102429'),
(4, '2014380025'),
(1, '2015102425'),
(1, '2015102426'),
(2, '2015102425'),
(2, '2015102426'),
(2, '2015102427'),
(2, '2015102428'),
(2, '2015102429'),
(5, '2015102429'),
(5, '2015102430'),
(5, '2015102431'),
(5, '2015102432'),
(6, '2015102427'),
(6, '2015102428');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `attendance_id` int(11) NOT NULL,
  `id_no` varchar(30) NOT NULL,
  `attendance_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`attendance_id`, `id_no`, `attendance_status`) VALUES
(2, '2015102425', 'Absent'),
(2, '2015102426', 'Present'),
(3, '2015102425', 'Absent'),
(3, '2015102426', 'Absent'),
(3, '2015102427', 'Absent'),
(3, '2015102428', 'Absent'),
(3, '2015102429', 'Absent'),
(4, '2015102425', 'Late'),
(4, '2015102426', 'Absent'),
(4, '2015102427', 'Late'),
(4, '2015102428', 'Absent'),
(4, '2015102429', 'Late'),
(5, '2015102425', 'Present'),
(5, '2015102426', 'Absent'),
(5, '2015102427', 'Present'),
(5, '2015102428', 'Absent'),
(5, '2015102429', 'Present'),
(6, '2015102425', 'Present'),
(6, '2015102426', 'Present'),
(6, '2015102427', 'Present'),
(6, '2015102428', 'Present'),
(6, '2015102429', 'Present'),
(7, '2015102425', 'Present'),
(7, '2015102426', 'Present'),
(7, '2015102427', 'Present'),
(7, '2015102428', 'Present'),
(7, '2015102429', 'Present'),
(8, '2015102429', 'Late'),
(8, '2015102430', 'Absent'),
(8, '2015102431', 'Present'),
(8, '2015102432', 'Present'),
(9, '2015102429', 'Absent'),
(9, '2015102430', 'Absent'),
(9, '2015102431', 'Absent'),
(9, '2015102432', 'Absent'),
(10, '2015380013', 'Absent'),
(11, '2015130013', 'Absent'),
(13, '2016180067', 'Late'),
(14, '2016180067', 'Present'),
(14, '2015380017', 'Absent'),
(15, '2015380017', 'Late'),
(7, '2014380025', 'Present'),
(17, '2017000001', 'Present'),
(18, '2017000001', 'Absent'),
(19, '2017000002', 'Late'),
(20, '2017000001', 'Present'),
(21, '2017000001', 'Present'),
(22, '2017000002', 'Late'),
(23, '2017000002', 'Late'),
(24, '2017000002', 'Late'),
(25, '2017000002', 'Late'),
(26, '2017000002', 'Late'),
(27, '2017000003', 'Absent'),
(28, '2017000003', 'Absent'),
(29, '2017000003', 'Absent'),
(30, '2017000003', 'Absent'),
(31, '2017000003', 'Absent'),
(32, '2017000004', 'Present'),
(33, '2017000004', 'Present'),
(34, '2017000004', 'Present'),
(35, '2017000004', 'Present'),
(36, '2017000004', 'Present'),
(37, '2017000005', 'Present'),
(38, '2017000005', 'Present'),
(39, '2017000005', 'Present'),
(41, '2017000005', 'Present'),
(40, '2017000005', 'Present'),
(44, '2015102429', 'Late'),
(44, '2015102430', 'Late'),
(44, '2015102431', 'Late'),
(44, '2015102432', 'Late'),
(45, '2015102425', 'Absent'),
(45, '2015102426', 'Absent'),
(45, '2015102427', 'Absent'),
(45, '2015102428', 'Absent'),
(45, '2015102429', 'Absent'),
(50, '2015102425', 'Present'),
(50, '2015102426', 'Present'),
(50, '2015102427', 'Absent'),
(50, '2015102428', 'Absent'),
(50, '2015102429', 'Absent'),
(51, '2015102429', 'Absent'),
(51, '2015102430', 'Absent'),
(51, '2015102431', 'Absent'),
(51, '2015102432', 'Absent'),
(52, '2015102429', 'Absent'),
(52, '2015102430', 'Absent'),
(52, '2015102431', 'Absent'),
(52, '2015102432', 'Absent'),
(53, '2015102425', 'Present'),
(53, '2015102426', 'Present'),
(54, '2015102425', 'Absent'),
(54, '2015102426', 'Present'),
(54, '2015102427', 'Present'),
(54, '2015102428', 'Absent'),
(54, '2015102429', 'Absent'),
(54, '2014380025', 'Absent'),
(56, '2015102425', 'Absent'),
(56, '2015102426', 'Absent'),
(56, '2015102427', 'Absent'),
(56, '2015102428', 'Absent'),
(56, '2015102429', 'Absent'),
(59, '2015102425', 'Absent'),
(59, '2015102426', 'Absent'),
(61, '2015102427', 'Absent'),
(61, '2015102428', 'Absent'),
(62, '2015102429', 'Absent'),
(62, '2015102430', 'Absent'),
(62, '2015102431', 'Absent'),
(62, '2015102432', 'Absent'),
(63, '2015102425', 'Absent'),
(63, '2015102426', 'Absent'),
(63, '2015102427', 'Absent'),
(63, '2015102428', 'Absent'),
(63, '2015102429', 'Absent'),
(63, '2014380025', 'Absent'),
(65, '2015102425', 'Absent'),
(65, '2015102426', 'Absent'),
(69, '2015102427', 'Absent'),
(69, '2015102428', 'Absent'),
(73, '2015102425', 'Absent'),
(73, '2015102426', 'Absent'),
(73, '2015102427', 'Absent'),
(73, '2015102428', 'Absent'),
(73, '2015102429', 'Absent'),
(73, '2014380025', 'Absent'),
(74, '2015102425', 'Absent'),
(74, '2015102426', 'Absent'),
(74, '2015102427', 'Absent'),
(74, '2015102428', 'Absent'),
(74, '2015102429', 'Absent'),
(75, '2015102429', 'Absent'),
(75, '2015102430', 'Absent'),
(75, '2015102431', 'Absent'),
(75, '2015102432', 'Absent'),
(79, '2015102425', 'Absent'),
(79, '2015102426', 'Absent'),
(79, '2015102427', 'Absent'),
(79, '2015102428', 'Absent'),
(79, '2015102429', 'Absent'),
(79, '2014380025', 'Absent'),
(80, '2015102425', 'Absent'),
(80, '2015102426', 'Absent'),
(81, '2015102425', 'Absent'),
(81, '2015102426', 'Absent'),
(81, '2015102427', 'Absent'),
(81, '2015102428', 'Absent'),
(81, '2015102429', 'Absent'),
(82, '2015102427', 'Absent'),
(82, '2015102428', 'Absent'),
(88, '2015102425', 'Absent'),
(88, '2015102426', 'Absent'),
(88, '2015102427', 'Absent'),
(88, '2015102428', 'Absent'),
(88, '2015102429', 'Absent'),
(89, '2015102429', 'Absent'),
(89, '2015102430', 'Absent'),
(89, '2015102431', 'Absent'),
(89, '2015102432', 'Absent'),
(91, '2015102425', 'Absent'),
(91, '2015102426', 'Absent'),
(91, '2015102427', 'Absent'),
(91, '2015102428', 'Absent'),
(91, '2015102429', 'Absent'),
(91, '2014380025', 'Absent'),
(92, '2015102425', 'Absent'),
(92, '2015102426', 'Absent'),
(92, '2015102427', 'Absent'),
(92, '2015102428', 'Absent'),
(92, '2015102429', 'Absent'),
(92, '2014380025', 'Absent'),
(93, '2015102427', 'Absent'),
(93, '2015102428', 'Absent'),
(94, '2015102425', 'Absent'),
(94, '2015102426', 'Absent'),
(96, '2015102425', 'Absent'),
(96, '2015102426', 'Absent'),
(97, '2015102425', 'N/R'),
(97, '2015102426', 'N/R'),
(97, '2015102427', 'N/R'),
(97, '2015102428', 'N/R'),
(97, '2015102429', 'N/R'),
(98, '2015102427', 'N/R'),
(98, '2015102428', 'N/R'),
(99, '2015102427', 'N/R'),
(99, '2015102428', 'N/R'),
(100, '2015102425', 'N/R'),
(100, '2015102426', 'N/R'),
(101, '2015102425', 'N/R'),
(101, '2015102426', 'N/R'),
(102, '2015102425', 'Present'),
(102, '2015102426', 'Late'),
(104, '2015102425', 'Present'),
(104, '2015102426', 'Present'),
(104, '2015102427', 'Present'),
(104, '2015102428', 'Present'),
(104, '2015102429', 'Late'),
(105, '2015102425', 'N/R'),
(105, '2015102426', 'N/R'),
(107, '2015102425', 'N/R'),
(107, '2015102426', 'N/R'),
(108, '2015102425', 'N/R'),
(108, '2015102426', 'N/R');

-- --------------------------------------------------------

--
-- Table structure for table `systemlogs`
--

CREATE TABLE `systemlogs` (
  `log_no` int(11) NOT NULL,
  `action` text NOT NULL,
  `log_date` datetime NOT NULL DEFAULT current_timestamp(),
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `systemusers`
--

CREATE TABLE `systemusers` (
  `uid` int(11) NOT NULL,
  `uname` text NOT NULL,
  `pword` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `urole` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemusers`
--

INSERT INTO `systemusers` (`uid`, `uname`, `pword`, `status`, `urole`) VALUES
(1, 'admin', 'a147c25f4b18563249aa0291b780cf08', 'A', 'SystemAdmin'),
(2, 'clinic', '53a6fae0b614a03f0783f67c66694f2d', 'A', 'Admin'),
(3, 'cgc', '628eed357b818d4c9337b83461a07ce2', 'A', 'Admin'),
(4, 'oss', '086b2be066b53d2ea26a7742221df698', 'A', 'Admin'),
(5, 'mitl', '2a161406550ad88d447d0e6a12bfe0eb', 'A', 'SystemAdmin'),
(6, 'cas', '4f58fe5f945adfb603e83b49ac6b6fb6', 'D', 'SystemAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `tapin_logs`
--

CREATE TABLE `tapin_logs` (
  `log_no` int(11) NOT NULL,
  `rf_id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `inDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapin_logs`
--

INSERT INTO `tapin_logs` (`log_no`, `rf_id`, `id_no`, `inDate`) VALUES
(1, 0, 2016180067, '2020-03-28 10:40:34'),
(2, 0, 2015102429, '2020-03-28 11:36:22'),
(3, 0, 2015102429, '2020-03-28 11:40:20'),
(4, 0, 2016180067, '2020-03-28 11:41:14'),
(5, 0, 2015102424, '2020-03-28 13:13:17'),
(6, 0, 2015102424, '2020-03-28 14:11:28'),
(7, 0, 2016180067, '2020-03-28 14:11:59'),
(8, 0, 2015102434, '2020-03-28 14:15:48'),
(9, 0, 2016180067, '2020-03-28 14:23:42'),
(10, 0, 2016180067, '2020-03-30 06:17:36'),
(11, 0, 2016180067, '2020-03-30 06:22:49'),
(12, 0, 2016180067, '2020-03-30 06:25:14'),
(13, 0, 2016180067, '2020-03-30 06:27:54'),
(14, 0, 2016180067, '2020-03-30 06:28:19'),
(15, 0, 2016180067, '2020-03-30 06:28:29'),
(16, 0, 2016180067, '2020-03-30 06:33:39'),
(17, 0, 2016180067, '2020-03-30 06:35:20'),
(18, 0, 2016180067, '2020-03-30 06:36:09'),
(19, 0, 2016180067, '2020-03-30 06:36:51'),
(20, 0, 2016180067, '2020-03-30 06:56:34'),
(21, 0, 2016180067, '2020-03-30 06:59:02'),
(22, 0, 2016180067, '2020-03-30 07:01:34'),
(23, 0, 2016180067, '2020-03-30 07:04:49'),
(24, 0, 2016180067, '2020-03-30 07:05:23'),
(25, 0, 2016180067, '2020-03-30 07:05:31'),
(26, 0, 2016180067, '2020-03-30 07:05:45'),
(27, 0, 2016180067, '2020-03-30 07:05:55'),
(28, 0, 2016180067, '2020-03-30 07:06:49'),
(29, 0, 2016180067, '2020-03-30 07:07:23'),
(30, 0, 2016180067, '2020-03-30 07:11:19'),
(31, 0, 2016180067, '2020-03-30 07:13:20'),
(32, 0, 2016180067, '2020-03-30 07:13:24'),
(33, 0, 2016180067, '2020-03-30 07:17:32'),
(34, 0, 2016180067, '2020-03-30 07:17:42'),
(35, 0, 2016180067, '2020-03-30 07:18:41'),
(36, 0, 2016180067, '2020-03-30 07:20:31'),
(37, 0, 2016180067, '2020-03-30 07:20:33'),
(38, 0, 2016180067, '2020-03-30 07:20:36'),
(39, 0, 2016180067, '2020-03-30 07:20:55'),
(40, 0, 2016180067, '2020-03-30 07:21:31'),
(41, 0, 2016180067, '2020-03-30 07:21:38'),
(42, 0, 2016180067, '2020-03-30 07:21:42'),
(43, 0, 2016180067, '2020-03-30 07:21:57'),
(44, 0, 2016180067, '2020-03-30 07:22:10'),
(45, 0, 2016180067, '2020-03-30 07:22:16'),
(46, 0, 2016180067, '2020-03-30 07:22:30'),
(47, 0, 2016180067, '2020-03-30 07:22:31'),
(48, 0, 2016180067, '2020-03-30 07:22:37'),
(49, 0, 2016180067, '2020-03-30 07:22:39'),
(50, 0, 2016180067, '2020-03-30 07:23:32'),
(51, 0, 2016180067, '2020-03-30 07:24:00'),
(52, 0, 2016180067, '2020-03-30 08:02:01'),
(53, 0, 2016180067, '2020-03-30 08:37:23'),
(54, 0, 2016180067, '2020-03-30 18:49:07'),
(55, 0, 2016180067, '2020-03-30 18:50:10'),
(56, 0, 2016180067, '2020-03-30 18:50:17'),
(57, 0, 2016180067, '2020-03-30 18:50:44'),
(58, 0, 2016180067, '2020-03-30 18:51:57'),
(59, 0, 2016180067, '2020-03-30 18:52:56'),
(60, 0, 2016180067, '2020-03-30 18:53:23'),
(61, 0, 2016180067, '2020-03-30 18:53:57'),
(62, 0, 2016180067, '2020-03-30 18:54:49'),
(63, 0, 2016180067, '2020-03-30 18:55:02'),
(64, 0, 2016180067, '2020-03-30 18:55:23'),
(65, 0, 2016180067, '2020-03-30 18:55:29'),
(66, 0, 2016180067, '2020-03-30 18:56:37'),
(67, 0, 2016180067, '2020-03-30 18:56:56'),
(68, 0, 2016180067, '2020-03-30 18:57:46'),
(69, 0, 2016180067, '2020-03-30 18:58:00'),
(70, 0, 2016180067, '2020-03-30 18:58:10'),
(71, 0, 2016180067, '2020-03-30 18:59:09'),
(72, 0, 2016180067, '2020-03-30 18:59:21'),
(73, 0, 2016180067, '2020-03-30 19:00:28'),
(74, 0, 2016180067, '2020-03-30 19:00:55'),
(75, 0, 2016180067, '2020-03-30 19:01:44'),
(76, 0, 2016180067, '2020-03-30 19:02:37'),
(77, 0, 2016180067, '2020-03-30 19:03:22'),
(78, 0, 2016180067, '2020-03-30 19:04:29'),
(79, 0, 2016180067, '2020-03-30 19:04:55'),
(80, 0, 2016180067, '2020-03-30 19:05:08'),
(81, 0, 2016180067, '2020-03-30 19:05:16'),
(82, 0, 2016180067, '2020-03-30 19:05:31'),
(83, 0, 2016180067, '2020-03-30 19:06:31'),
(84, 0, 2016180067, '2020-03-30 19:06:43'),
(85, 0, 2016180067, '2020-03-30 19:07:43'),
(86, 0, 2016180067, '2020-03-30 19:07:50'),
(87, 0, 2016180067, '2020-03-30 19:07:56'),
(88, 0, 2016180067, '2020-03-30 19:08:10'),
(89, 0, 2016180067, '2020-03-30 19:08:41'),
(90, 0, 2016180067, '2020-03-30 19:09:28'),
(91, 0, 2016180067, '2020-03-30 19:10:34'),
(92, 0, 2016180067, '2020-03-30 19:11:36'),
(93, 0, 2016180067, '2020-03-30 19:12:05'),
(94, 0, 2016180067, '2020-03-30 19:13:23'),
(95, 0, 2016180067, '2020-03-30 19:13:57'),
(96, 0, 2016180067, '2020-03-30 19:14:55'),
(97, 0, 2016180067, '2020-03-30 19:15:04'),
(98, 0, 2016180067, '2020-03-30 19:15:45'),
(99, 0, 2016180067, '2020-03-30 19:16:13'),
(100, 0, 2016180067, '2020-03-30 19:16:49'),
(101, 0, 2016180067, '2020-03-30 19:17:00'),
(102, 0, 2016180067, '2020-03-30 19:18:06'),
(103, 0, 2016180067, '2020-03-30 19:18:23'),
(104, 0, 2016180067, '2020-03-30 19:18:47'),
(105, 0, 2016180067, '2020-03-30 19:18:53'),
(106, 0, 2016180067, '2020-03-30 19:19:00'),
(107, 0, 2016180067, '2020-03-30 19:19:06'),
(108, 0, 2016180067, '2020-03-30 19:19:12'),
(109, 0, 2016180067, '2020-03-30 19:19:22'),
(110, 0, 2016180067, '2020-03-30 19:19:28'),
(111, 0, 2016180067, '2020-03-30 19:19:59'),
(112, 0, 2016180067, '2020-03-30 19:20:27'),
(113, 0, 2016180067, '2020-03-30 19:21:19'),
(114, 0, 2016180067, '2020-03-30 19:21:33'),
(115, 0, 2016180067, '2020-03-30 19:21:55'),
(116, 0, 2016180067, '2020-03-30 19:22:12'),
(117, 0, 2016180067, '2020-03-30 19:22:23'),
(118, 0, 2016180067, '2020-03-30 19:22:57'),
(119, 0, 2016180067, '2020-03-30 19:23:32'),
(120, 0, 2016180067, '2020-03-30 19:27:29'),
(121, 0, 2016180067, '2020-04-02 19:15:47'),
(122, 0, 2016180067, '2020-04-02 21:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `tapout_logs`
--

CREATE TABLE `tapout_logs` (
  `log_no` int(11) NOT NULL,
  `rf_id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `outDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapout_logs`
--

INSERT INTO `tapout_logs` (`log_no`, `rf_id`, `id_no`, `outDate`) VALUES
(1, 0, 2016180067, '2020-03-28 10:48:13'),
(2, 0, 2016180067, '2020-03-28 10:48:38'),
(3, 0, 2016180067, '2020-03-28 10:49:27'),
(4, 0, 2016180067, '2020-03-28 10:50:02'),
(5, 0, 2016180067, '2020-03-30 08:02:10'),
(6, 0, 2016180067, '2020-04-02 19:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id_no` varchar(30) NOT NULL,
  `pass_word` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `acc_type` varchar(30) NOT NULL,
  `acc_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id_no`, `pass_word`, `lastname`, `firstname`, `acc_type`, `acc_status`) VALUES
('2014380025', '1', 'Beredo', 'Tommy', 'College', 'Active'),
('2015102424', '1', 'Flores', 'Cedric', 'Teacher', 'Active'),
('2015102425', '1', 'Soliven', 'Zeke', 'College', 'Active'),
('2015102426', '1', 'Tamisin', 'Broan', 'College', 'Active'),
('2015102427', '1', 'Rondilla', 'John', 'College', 'Active'),
('2015102428', '1', 'Paz', 'Patrick', 'College', 'Active'),
('2015102429', '1', 'Fidel', 'Angelo', 'College', 'Active'),
('2015102430', '1', 'Lazaga', 'Joseph', 'College', 'Active'),
('2015102431', '1', 'Monserrate', 'James', 'College', 'Active'),
('2015102432', '1', 'Sobrevinas', 'Lester', 'College', 'Active'),
('2015102433', '1', 'Nuval', 'Cyrhene', 'Teacher', 'Active'),
('2015102434', '1', 'Magbanua', 'Ivan', 'Teacher', 'Active'),
('2015130013', '1', 'Gonzaga', 'Justine', 'College', 'Active'),
('2015380013', '1', 'Lazaga', 'Joseph', 'College', 'Active'),
('2015380017', '1', 'Quinto', 'Joviel', 'College', 'Active'),
('2016180067', '1', 'Hernandez', 'Mark', 'College', 'Active'),
('2017000001', '1', 'Arganda', 'James', 'SHS', 'Active'),
('2017000002', '1', 'Laus', 'Clarisse', 'SHS', 'Active'),
('2017000003', '1', 'Gonzales', 'Adrian', 'SHS', 'Active'),
('2017000004', '1', 'Gilos', 'Mia', 'SHS', 'Active'),
('2017000005', '1', 'Beredo', 'Anton', 'SHS', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id_no` int(11) NOT NULL,
  `pass_word` tinytext NOT NULL,
  `acc_status` tinytext NOT NULL,
  `user_role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id_no` int(11) NOT NULL,
  `user_fname` text NOT NULL,
  `user_lname` text NOT NULL,
  `user_dept` text NOT NULL,
  `user_status` tinytext NOT NULL,
  `user_position` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id_no`, `user_fname`, `user_lname`, `user_dept`, `user_status`, `user_position`) VALUES
(2012123456, 'Andrew', 'Valdez', 'SHS', 'A', 'S'),
(2012123457, 'Ivan', 'Turing', 'CAS', 'D', 'F'),
(2014380025, 'Tommy', 'Beredo', 'CMET', 'D', 'S'),
(2015102424, 'Cedric', 'Flores', 'CCIS', 'A', 'F'),
(2015102425, 'Zeke', 'Soliven', 'CCIS', 'A', 'S'),
(2015102426, 'Broan', 'Tamisin', 'CAS', 'A', 'S'),
(2015102427, 'John', 'Rondilla', 'CCIS', 'A', 'S'),
(2015102428, 'Patrick', 'Paz', 'CAS', 'D', 'S'),
(2015102429, 'Angelo', 'Fidel', 'CAS', 'D', 'S'),
(2015102430, 'Joseph', 'Lazaga', 'MITL', 'A', 'S'),
(2015102431, 'James', 'Monserrate', 'CAS', 'A', 'S'),
(2015102434, 'Ivan', 'Magbanua', 'CCIS', 'A', 'S'),
(2015130013, 'Justine', 'Gonzaga', 'SHS', 'A', 'F'),
(2015380017, 'Joviel', 'Guinto', 'CAS', 'A', 'A'),
(2016180067, 'Mark Anthony', 'Hernandez', 'CCIS', 'A', 'S'),
(2016190009, 'Mark Angelo ', 'Co', 'SHS', 'A', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_record`
--
ALTER TABLE `attendance_record`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `attnmessage`
--
ALTER TABLE `attnmessage`
  ADD PRIMARY KEY (`imsg_no`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `authorized_devices`
--
ALTER TABLE `authorized_devices`
  ADD PRIMARY KEY (`device_physical_address`);

--
-- Indexes for table `course_record`
--
ALTER TABLE `course_record`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `guardianinfo`
--
ALTER TABLE `guardianinfo`
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `handled_course`
--
ALTER TABLE `handled_course`
  ADD PRIMARY KEY (`handled_id`),
  ADD KEY `course_code` (`course_code`),
  ADD KEY `user_name` (`id_no`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD KEY `attendance_id` (`attendance_id`),
  ADD KEY `user_name` (`id_no`);

--
-- Indexes for table `systemlogs`
--
ALTER TABLE `systemlogs`
  ADD PRIMARY KEY (`log_no`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `systemusers`
--
ALTER TABLE `systemusers`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tapin_logs`
--
ALTER TABLE `tapin_logs`
  ADD PRIMARY KEY (`log_no`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `tapout_logs`
--
ALTER TABLE `tapout_logs`
  ADD PRIMARY KEY (`log_no`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_record`
--
ALTER TABLE `attendance_record`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `attnmessage`
--
ALTER TABLE `attnmessage`
  MODIFY `imsg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `handled_course`
--
ALTER TABLE `handled_course`
  MODIFY `handled_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `systemlogs`
--
ALTER TABLE `systemlogs`
  MODIFY `log_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systemusers`
--
ALTER TABLE `systemusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tapin_logs`
--
ALTER TABLE `tapin_logs`
  MODIFY `log_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `tapout_logs`
--
ALTER TABLE `tapout_logs`
  MODIFY `log_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attnmessage`
--
ALTER TABLE `attnmessage`
  ADD CONSTRAINT `attnmessage_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `user_information` (`id_no`);

--
-- Constraints for table `guardianinfo`
--
ALTER TABLE `guardianinfo`
  ADD CONSTRAINT `guardianinfo_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `user_information` (`id_no`);

--
-- Constraints for table `handled_course`
--
ALTER TABLE `handled_course`
  ADD CONSTRAINT `handled_course_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `course_record` (`course_code`),
  ADD CONSTRAINT `handled_course_ibfk_2` FOREIGN KEY (`id_no`) REFERENCES `user_account` (`id_no`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user_account` (`id_no`);

--
-- Constraints for table `student_record`
--
ALTER TABLE `student_record`
  ADD CONSTRAINT `student_record_ibfk_1` FOREIGN KEY (`attendance_id`) REFERENCES `attendance_record` (`attendance_id`),
  ADD CONSTRAINT `student_record_ibfk_2` FOREIGN KEY (`id_no`) REFERENCES `user_account` (`id_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
