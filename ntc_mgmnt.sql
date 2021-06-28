-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 11:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27792491_ntc_mgmnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin', 'mayank');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `empid` varchar(8) NOT NULL,
  `password` varchar(20) NOT NULL,
  `desgn` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`empid`, `password`, `desgn`) VALUES
('111', 'mayank', 'hod'),
('112', 'mayank', 'asst. prfsr');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `date1` varchar(200) NOT NULL,
  `time1` varchar(200) NOT NULL,
  `stdnt` varchar(200) NOT NULL,
  `fclty` varchar(200) NOT NULL,
  `hod` varchar(200) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`date1`, `time1`, `stdnt`, `fclty`, `hod`, `notice`, `id`) VALUES
('2021-6-23', '14:8:22', 'N', 'Y', 'Y', 'heyyy\r\n', 1),
('2021-6-23', '14:9:22', 'Y', 'Y', 'Y', 'Freshers party for 2k19 batch on 7.8.2k21', 2),
('2021-6-23', '14:12:41', 'N', 'Y', 'N', 'Mass bunk is allowed for todays classes from 8 to 9 am', 6),
('2021-6-23', '14:15:21', 'N', 'Y', 'Y', 'bye bye', 7),
('2021-6-24', '13:13:16', 'Y', 'Y', 'Y', 'vacation from 8.9.2021 to 9.10.2021. enjoy your vacation and make use of it in a productive way.. thanking you', 9),
('2021-6-27', '13:21:10', 'N', 'Y', 'Y', 'project submissions on 28th onwards', 11);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `password`) VALUES
('19CSE001', 'mayank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
