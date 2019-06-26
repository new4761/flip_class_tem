-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 06:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krudeec1_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_email`, `rank`) VALUES
(1, 'admin@krudee1', 'e2c7c2e875a214475bcdd7048d0b63fa', 'electormark@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `choicetest`
--

CREATE TABLE `choicetest` (
  `choice_id` int(11) NOT NULL,
  `choice_head` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `choice_A` varchar(255) CHARACTER SET utf8 NOT NULL,
  `choice_B` varchar(255) CHARACTER SET utf8 NOT NULL,
  `choice_C` varchar(255) CHARACTER SET utf8 NOT NULL,
  `choice_D` varchar(255) CHARACTER SET utf8 NOT NULL,
  `choice_E` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `choice_correct` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_level` varchar(100) NOT NULL,
  `lesson_name` varchar(255) NOT NULL,
  `lesson_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_level`, `lesson_name`, `lesson_content`) VALUES
(2, '2', 'บทเรียนที่ 3 ', '<p>\r\n	sfafaf</p>\r\n'),
(3, 'ทดสอบ', 'บทเรียนที่ 3 ', '<p>\r\n	ไทยทดสอบ</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `lessonimage`
--

CREATE TABLE `lessonimage` (
  `imglesson_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `imglesson_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `m_firstname` varchar(255) NOT NULL,
  `m_lastname` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_year` varchar(100) NOT NULL,
  `m_level` varchar(255) NOT NULL DEFAULT '1',
  `m_studentid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_username`, `m_password`, `m_firstname`, `m_lastname`, `m_email`, `m_year`, `m_level`, `m_studentid`) VALUES
(1, 'tesdt', '684952', 'test', 'test', 'test', 'test', '', '1'),
(3, 'mark', 'e2c7c2e875a214475bcdd7048d0b63fa', 'Khajohnyos', 'Zeukigkj', 'electormark@gmail.com', '4/3', '1', '19587'),
(4, 'admin', 'e2c7c2e875a214475bcdd7048d0b63fa', 'Khajohnyos', 'Zeukigkj', 'electormark@gmail.com', '4/3', '1', '19587');

-- --------------------------------------------------------

--
-- Table structure for table `resultlesson`
--

CREATE TABLE `resultlesson` (
  `resultlesson_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `choice_score` varchar(255) NOT NULL,
  `writing_score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `writingtest`
--

CREATE TABLE `writingtest` (
  `writing_id` int(11) NOT NULL,
  `writing_header` varchar(255) NOT NULL,
  `writing_answer` varchar(255) DEFAULT NULL,
  `lesson_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `choicetest`
--
ALTER TABLE `choicetest`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `lessonimage`
--
ALTER TABLE `lessonimage`
  ADD PRIMARY KEY (`imglesson_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `resultlesson`
--
ALTER TABLE `resultlesson`
  ADD PRIMARY KEY (`resultlesson_id`);

--
-- Indexes for table `writingtest`
--
ALTER TABLE `writingtest`
  ADD PRIMARY KEY (`writing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `choicetest`
--
ALTER TABLE `choicetest`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessonimage`
--
ALTER TABLE `lessonimage`
  MODIFY `imglesson_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resultlesson`
--
ALTER TABLE `resultlesson`
  MODIFY `resultlesson_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writingtest`
--
ALTER TABLE `writingtest`
  MODIFY `writing_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
