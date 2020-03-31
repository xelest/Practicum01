-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 02:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it199r-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attnmessage`
--

CREATE TABLE `attnmessage` (
  `imsg_no` int(11) NOT NULL,
  `imsg_sender` text NOT NULL,
  `id_no` int(11) NOT NULL,
  `imsg_Date` date NOT NULL,
  `imsg_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `minfo`
--

CREATE TABLE `minfo` (
  `id_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `accstatus` text NOT NULL,
  `dept` text NOT NULL,
  `guardian_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minfo`
--

INSERT INTO `minfo` (`id_no`, `name`, `accstatus`, `dept`, `guardian_no`) VALUES
(2012180011, 'Yatco Keith', 'A', 'Admin', 0),
(2014100069, 'Chua Jan Eduward', 'A', 'CCIS', 0),
(2015100246, 'Guinto Joviel', 'A', 'MITL', 0),
(2015102433, 'Nuval Cyrhene Asheley', 'A', 'CCIS', 0),
(2015246179, 'Lazaga Joseph', 'D', 'CCIS', 0),
(2016180067, 'Hernandez Mark Anthony', 'D', 'SHS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mmobile`
--

CREATE TABLE `mmobile` (
  `msg_no` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `guardian_no` int(11) NOT NULL,
  `msg` text NOT NULL,
  `msgDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rf_accounts`
--

CREATE TABLE `rf_accounts` (
  `rf_id` text NOT NULL,
  `id_no` int(11) NOT NULL,
  `passkey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rf_accounts`
--

INSERT INTO `rf_accounts` (`rf_id`, `id_no`, `passkey`) VALUES
('1', 2015100246, '2015100246_1234567890'),
('2', 2014100069, '2014100069_1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `systemlogs`
--

CREATE TABLE `systemlogs` (
  `log_no` int(11) NOT NULL,
  `action` text NOT NULL,
  `log_date` datetime NOT NULL DEFAULT current_timestamp(),
  `systemuser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `systemusers`
--

CREATE TABLE `systemusers` (
  `uid` int(11) NOT NULL,
  `uname` text NOT NULL,
  `pword` text NOT NULL,
  `status` text NOT NULL,
  `urole` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemusers`
--

INSERT INTO `systemusers` (`uid`, `uname`, `pword`, `status`, `urole`) VALUES
(1, 'admin', 'a147c25f4b18563249aa0291b780cf08', 'A', 'SystemAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `tapin_logs`
--

CREATE TABLE `tapin_logs` (
  `log_no` int(11) NOT NULL,
  `rf_id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `inDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `inDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapin_logs`
--

INSERT INTO `tapin_logs` (`log_no`, `rf_id`, `id_no`, `inDate`, `inDesc`) VALUES
(1, 1, 2015100246, '2020-02-01 00:30:00', 'in'),
(2, 2, 2014100069, '2020-02-01 02:15:00', 'in'),
(3, 2, 2014100069, '2020-02-02 05:00:00', 'out'),
(4, 1, 2015100246, '2020-02-02 07:00:00', 'out'),
(5, 2, 2014100069, '2020-02-20 03:05:00', 'in'),
(6, 2, 2014100069, '2020-02-20 04:08:00', 'out'),
(7, 2, 2014100069, '2020-02-20 05:27:00', 'in'),
(8, 2, 2014100069, '2020-02-20 09:16:00', 'out'),
(9, 0, 2015100246, '2020-03-20 22:30:14', 'in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attnmessage`
--
ALTER TABLE `attnmessage`
  ADD PRIMARY KEY (`imsg_no`);

--
-- Indexes for table `guardianinfo`
--
ALTER TABLE `guardianinfo`
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `minfo`
--
ALTER TABLE `minfo`
  ADD UNIQUE KEY `id_no` (`id_no`);

--
-- Indexes for table `rf_accounts`
--
ALTER TABLE `rf_accounts`
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `systemlogs`
--
ALTER TABLE `systemlogs`
  ADD PRIMARY KEY (`log_no`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attnmessage`
--
ALTER TABLE `attnmessage`
  MODIFY `imsg_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systemlogs`
--
ALTER TABLE `systemlogs`
  MODIFY `log_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systemusers`
--
ALTER TABLE `systemusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tapin_logs`
--
ALTER TABLE `tapin_logs`
  MODIFY `log_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guardianinfo`
--
ALTER TABLE `guardianinfo`
  ADD CONSTRAINT `guardianinfo_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `minfo` (`id_no`);

--
-- Constraints for table `rf_accounts`
--
ALTER TABLE `rf_accounts`
  ADD CONSTRAINT `rf_accounts_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `minfo` (`id_no`);

--
-- Constraints for table `tapin_logs`
--
ALTER TABLE `tapin_logs`
  ADD CONSTRAINT `tapin_logs_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `minfo` (`id_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
