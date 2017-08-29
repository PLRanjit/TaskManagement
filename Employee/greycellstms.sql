-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 04:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greycellstms`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `changes_made_by` varchar(50) NOT NULL DEFAULT 'All',
  `tasktitle` varchar(25) DEFAULT NULL,
  `project_name` varchar(100) NOT NULL,
  `task_desc` varchar(255) NOT NULL,
  `scheduled_for` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `date`, `changes_made_by`, `tasktitle`, `project_name`, `task_desc`, `scheduled_for`, `status`, `priority`, `time`, `state`) VALUES
(22, '201706', 'emp456123', 'rbertbret', 'bgfbb', 'btrbtrr', 'Quartly', 'Not Approved', 1, '2017-06-13 11:01:46', 'Add Task'),
(22, '201706', 'emp456123', 'rbertbret', 'bgfbb', 'btrbtrr', 'Quartly', 'Not Approved', 1, '2017-06-13 11:01:49', 'Delete Task'),
(6, '201706', 'emp456123', 'Mantain the histoory', 'sheko', 'maintain the stack of each changes', 'Monday', 'Not Approved', 3, '2017-06-13 11:02:15', 'Edit Task'),
(23, '201706', 'emp456123', 'check email', 'Rishimu', 'email check', 'Wednesday', 'Not Approved', 1, '2017-06-13 11:03:41', 'Add Task'),
(7, '201706', 'emp456123', 'check email', 'Rishimu', 'email check', 'Daily,Wednesday', 'Not Approved', 1, '2017-06-13 11:12:24', 'Edit Task'),
(7, '201706', 'emp456123', 'check email', 'Rishimu', 'email check', 'Daily', 'Not Approved', 1, '2017-06-13 11:13:26', 'Edit Task'),
(4, '201705', 'emp784562', 'Test Team System', 'Hyuko', 'Check Whether system is working fine or not', 'Monday,Wednesday', 'Urgent', 3, '2017-06-14 04:18:47', 'Edit Task'),
(10, '201706', 'emp784562', 'Check the base', 'Sikori', 'Base Volume of Stereo', 'Wednesday', 'Not Approved', 1, '2017-06-15 02:52:05', 'Add Task'),
(13, '201706', 'emp784562', 'exdex', 'Sikori', 'exer', 'Monday', 'Not Approved', 1, '2017-06-15 02:56:36', 'Add Task'),
(12, '201706', 'emp784562', 'exdex', 'Sikori', 'exer', 'Monday', 'Not Approved', 1, '2017-06-15 02:56:56', 'Delete Task'),
(13, '201706', 'emp784562', 'exdex', 'Sikori', 'exer', 'Monday', 'Not Approved', 1, '2017-06-15 02:57:02', 'Delete Task'),
(14, '201706', 'emp784562', 'vsvsvsd', 'Genko', 'sdvsdv', 'Tuesday', 'Not Approved', 1, '2017-06-15 02:59:08', 'Add Task'),
(14, '201706', 'emp784562', 'vsvsvsd', 'Genko', 'sdvsdv', 'Tuesday', 'Not Approved', 1, '2017-06-15 02:59:34', 'Delete Task'),
(11, '201706', 'emp784562', 'Check the base', 'Sikori', 'Base Volume of Stereo', 'Wednesday', 'Not Approved', 1, '2017-06-15 03:12:51', 'Delete Task'),
(15, '201706', 'emp784562', 'aaaaaaAAAAAAAA', 'Genko', 'AAAAAAAAAAAAAA', 'Wednesday', 'Not Approved', 1, '2017-06-15 03:13:24', 'Add Task');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `ddate` varchar(50) NOT NULL,
  `Occasion` varchar(150) DEFAULT NULL,
  `No_Of_Holidays` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `date`, `sdate`, `ddate`, `Occasion`, `No_Of_Holidays`) VALUES
(1, '201706', '2017-06-10', '2017-06-13', 'Asthama for last 5 weeks', '3'),
(2, '201706', '2017-06-07', '2017-06-14', 'Tech Tech', '7'),
(3, '201706', '2017-06-08', '2017-06-16', 'hjghjgjh', '8');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employment_id` varchar(50) NOT NULL,
  `Reason_for_leave` varchar(120) DEFAULT NULL,
  `Leave_from` varchar(15) DEFAULT NULL,
  `Leave_To` varchar(15) DEFAULT NULL,
  `No_Of_Leaves` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employment_id`, `Reason_for_leave`, `Leave_from`, `Leave_To`, `No_Of_Leaves`) VALUES
(1, 'emp784562', 'Fever', '2017-06-14', '2017-06-15', '1'),
(2, 'emp644563', 'check 5', '2017-06-09', '2017-06-14', '6'),
(3, 'emp456123', 'Check', '2017-06-10', '2017-06-16', '7'),
(4, 'emp753159', 'checkk 4', '2017-06-06', '2017-07-13', '38'),
(9, 'emp784562', 'QMRTEAA', '2017-06-10', '2017-06-16', '7');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `tasktitle` varchar(25) DEFAULT NULL,
  `project_name` varchar(100) NOT NULL,
  `task_desc` varchar(255) NOT NULL,
  `written_by` varchar(255) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `date`, `sdate`, `tasktitle`, `project_name`, `task_desc`, `written_by`, `time`) VALUES
(1, '201706', '2017-06-15', 'Meet watony', 'Hyuko', 'regarding share', 'emp784562', '11:45'),
(14, '201706', '2017-06-15', 'Meet Ruko', 'Sikori', 'Regarding Lee Shares', 'emp784562', '04:57'),
(17, '201706', '2017-06-15', 'Watson Halk', 'Kimono', 'Match the bet of the field for the race of the next week', 'emp784562', '15:57'),
(18, '201706', '2017-06-15', 'Washington Meet', 'Piroku', 'Team Meet Follow Up', 'emp784562', '13:56');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `employment_id` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `doj` varchar(15) DEFAULT NULL,
  `contactno` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `position` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(12) DEFAULT NULL,
  `project` varchar(25) DEFAULT NULL,
  `power` int(2) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `fullname`, `employment_id`, `email`, `dob`, `doj`, `contactno`, `address`, `position`, `username`, `password`, `status`, `project`, `power`) VALUES
(109, 'Ravi Teja', 'emp784562', 'ravi.teja@greyCells.com', '1982-08-25', '1999-03-14', '777880699', 'jogeshwari Mumbai', 'Manager', 'RT_Mngr123', 'RTadmin', 'Active', 'Genko', 1),
(110, 'Mahesh Babu', 'emp644563', 'mahesh.babu@greyCells.com', '1994-09-26', '2006-02-02', '667882299', 'Kandivali', 'Manager', 'MB_Mngr1911', 'MBadmin', 'Active', 'Hyuko', 1),
(111, 'Prabhas', 'emp456123', 'prabhas.bhaubali@south.net', '1983-04-01', '1999-01-05', '789123456', 'South', 'Ceo', 'PBCeo', 'PB_ceo', 'Active', 'Sikori', 1),
(113, 'Allu Arjun', 'emp753159', 'all.arjuin@south.india', '1987-08-12', '2016-09-04', '000111222', 'South karnataka', 'Admin', 'AA_admin', 'AAadmin', 'Active', 'Chiko', 1),
(114, 'NTR', 'emp841256', 'NTR@jr.net', '1993-10-21', '2009-06-29', '75149683', 'South Jogeshwari', 'New Joinee', 'NTR_jr', 'NTRjoinee', 'Active', 'Chiko', 0),
(118, 'Ramesh', 'emp597045', 'ramesha@ganesha.mandir', '1978-12-22', '2007-06-21', '741258963', 'temples road', 'Fresher', 'RE_Fresh123', 'REFresh', 'Active', 'Hyuko', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `ddate` varchar(50) NOT NULL,
  `adate` varchar(50) DEFAULT NULL,
  `tasktitle` varchar(25) DEFAULT NULL,
  `project_name` varchar(100) NOT NULL,
  `task_desc` varchar(255) NOT NULL,
  `assigned_by` varchar(50) DEFAULT NULL,
  `assigned_to` varchar(50) NOT NULL DEFAULT 'All',
  `scheduled_for` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `efficiency` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `date`, `sdate`, `ddate`, `adate`, `tasktitle`, `project_name`, `task_desc`, `assigned_by`, `assigned_to`, `scheduled_for`, `status`, `priority`, `efficiency`) VALUES
(2, '201706', '2017-06-02', '2017-07-17', '', 'Update User Data', 'Sikori', 'userrrr', 'emp784562', 'emp456123', 'Tuesday', 'In Progress', 3, 0),
(5, '201709', '2016-07-13', '2018-05-14', '2018-05-14', 'update user data', 'Hyuko', 'update the users client database', 'emp456123', 'emp753159', 'Monday', 'Completed', 2, 100),
(1, '201711', '2016-09-20', '2017-05-27', '', 'server update', 'Genko', 'patches update', 'emp456123', 'emp644563', 'Friday', 'Approved', 3, 0),
(3, '201706', '2017-06-05', '2017-07-20', '', 'webhosting for the latest', 'Genko', 'webhosting for the latest update', 'emp753159', 'emp456123', 'Thursday,Friday', 'Urgent', 1, 0),
(4, '201705', '2017-05-31', '2017-07-15', '', 'Test Team System', 'Hyuko', 'Check Whether system is working fine or not', 'emp784562', 'emp456123', 'Monday,Wednesday', 'Urgent', 3, 0),
(6, '201706', '2017-06-13', '2017-07-28', '', 'Mantain the histoory', 'sheko', 'maintain the stack of each changes', 'emp784562', 'emp753159', 'Monday', 'Not Approved', 3, 0),
(9, '201706', '2017-06-13', '2017-07-28', '', 'Checking', 'nagori', 'Check system', 'emp456123', 'emp784562', 'Wednesday', 'Approved', 4, 0),
(7, '201706', '2017-06-13', '2017-07-28', '', 'check email', 'Rishimu', 'email check', 'emp456123', 'emp784562', 'Daily', 'Not Approved', 1, 0),
(10, '201706', '2017-06-15', '2017-07-30', '', 'Check the base', 'Sikori', 'Base Volume of Stereo', 'emp784562', 'emp644563', 'Wednesday', 'Not Approved', 1, NULL),
(15, '201706', '2017-06-15', '2017-07-30', '', 'aaaaaaAAAAAAAA', 'Genko', 'AAAAAAAAAAAAAA', 'emp784562', 'emp753159', 'Wednesday', 'Not Approved', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD UNIQUE KEY `time` (`time`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`date`,`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `task_desc` (`task_desc`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`),
  ADD UNIQUE KEY `employment_id` (`employment_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`date`,`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
