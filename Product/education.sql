-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 06:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `New_id` int(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `Enddate` date DEFAULT NULL,
  `gender` int(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`New_id`, `name`, `address`, `StartDate`, `Enddate`, `gender`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'PAIR', '0', '0000-00-00', NULL, NULL, 0, 1, 1, '2022-01-07 08:54:47', 1, '2022-01-07 08:54:56', 1, NULL, NULL, NULL, '2022-01-07 07:54:47'),
(2, 'PACKET', '0', '0000-00-00', NULL, NULL, 0, 1, 1, '2022-01-07 08:55:22', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-07 07:55:22'),
(3, 'UNIT', '0', '0000-00-00', NULL, NULL, 0, 1, 1, '2022-01-07 08:55:45', 1, '2022-01-07 08:56:52', 1, NULL, NULL, NULL, '2022-01-07 07:55:45'),
(4, 'dd', '0', '0000-00-00', NULL, NULL, 0, 1, 0, '2022-02-15 14:40:53', 1, NULL, NULL, '2022-02-15 14:41:02', 1, NULL, '2022-02-15 13:40:53'),
(5, 'sd', '0', '0000-00-00', NULL, NULL, 0, 1, 1, '2023-02-24 17:36:12', 1, '2023-02-24 17:36:20', 1, NULL, NULL, NULL, '2023-02-24 16:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `form_one`
--

CREATE TABLE `form_one` (
  `FormOne_id` int(200) NOT NULL,
  `Project_Name` varchar(30) DEFAULT NULL,
  `Project_Marathi_Name` varchar(30) DEFAULT NULL,
  `Project_Short_Name` varchar(30) DEFAULT NULL,
  `Tag_Name` varchar(20) DEFAULT NULL,
  `Project_Type` varchar(20) DEFAULT NULL,
  `Client_Name` varchar(20) DEFAULT NULL,
  `Task_Layout` int(20) DEFAULT NULL,
  `Group_Type1` int(20) DEFAULT NULL,
  `Group_Type2` int(20) DEFAULT NULL,
  `Group_Type3` int(20) DEFAULT NULL,
  `Group_Type4` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `Gender_id` int(20) DEFAULT NULL,
  `Gender_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`Gender_id`, `Gender_name`) VALUES
(1, 'male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `loginregistration`
--

CREATE TABLE `loginregistration` (
  `Userid` bigint(50) NOT NULL,
  `fkuserTypeid` bigint(10) DEFAULT NULL,
  `fkuserName` bigint(50) DEFAULT NULL,
  `userName` varchar(150) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loginregistration`
--

INSERT INTO `loginregistration` (`Userid`, `fkuserTypeid`, `fkuserName`, `userName`, `userPassword`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 0, 0, 'CONTAINS TWO UNITS', NULL, 0, 1, 1, '2022-01-07 08:54:47', 1, '2022-01-07 08:54:56', 1, NULL, NULL, NULL, '2022-01-07 07:54:47'),
(2, 0, 0, 'CONTAINS 6 OR 10 PIECES', NULL, 0, 1, 1, '2022-01-07 08:55:22', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-07 07:55:22'),
(3, 0, 0, 'INCLUDE A SINGLE QUANTITY', NULL, 0, 1, 1, '2022-01-07 08:55:45', 1, '2022-01-07 08:56:52', 1, NULL, NULL, NULL, '2022-01-07 07:55:45'),
(4, 0, 0, 'dd', NULL, 0, 1, 0, '2022-02-15 14:40:53', 1, NULL, NULL, '2022-02-15 14:41:02', 1, NULL, '2022-02-15 13:40:53'),
(5, 0, 0, 'sd', NULL, 0, 1, 1, '2023-02-24 17:36:12', 1, '2023-02-24 17:36:20', 1, NULL, NULL, NULL, '2023-02-24 16:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `member_master`
--

CREATE TABLE `member_master` (
  `Member_id` bigint(50) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `Gender` int(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Qualification` int(20) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member_master`
--

INSERT INTO `member_master` (`Member_id`, `name`, `phone`, `Gender`, `DOB`, `Qualification`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'PAIR', 0, 0, NULL, NULL, 0, 1, 1, '2022-01-07 08:54:47', 1, '2022-01-07 08:54:56', 1, NULL, NULL, NULL, '2022-01-07 07:54:47'),
(2, 'PACKET', 0, 0, NULL, NULL, 0, 1, 1, '2022-01-07 08:55:22', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-07 07:55:22'),
(3, 'UNIT', 0, 0, NULL, NULL, 0, 1, 1, '2022-01-07 08:55:45', 1, '2022-01-07 08:56:52', 1, NULL, NULL, NULL, '2022-01-07 07:55:45'),
(4, 'dd', 0, 0, NULL, NULL, 0, 1, 0, '2022-02-15 14:40:53', 1, NULL, NULL, '2022-02-15 14:41:02', 1, NULL, '2022-02-15 13:40:53'),
(5, 'sd', 0, 0, NULL, NULL, 0, 1, 1, '2023-02-24 17:36:12', 1, '2023-02-24 17:36:20', 1, NULL, NULL, NULL, '2023-02-24 16:36:12'),
(6, 'mera', 2147483647, 0, '2023-12-19', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 11:52:19'),
(7, 'AKANKSHA SANJAY GAJA', 2147483647, 0, '2023-12-11', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 12:01:25'),
(8, 'aaaaaaaaaa', 2147483647, 0, '2023-12-13', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 12:03:23'),
(9, 'tiya', 2147483647, 0, '2023-12-07', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 12:04:04'),
(10, 'sakshi patil', 2147483647, 2, '2002-12-10', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 13:17:40'),
(11, 'siya malii', 2147483647, 2, '2000-12-11', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 13:21:33'),
(12, 'AKANKSHA SANJAY GAJA', 2147483647, 2, '2002-06-13', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 13:22:32'),
(13, 'riya', 2147483647, 2, '2023-12-25', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 13:24:38'),
(14, 'Meena patil', 2147483647, 2, '2002-12-31', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 13:36:15'),
(15, 'snehal ', 2147483647, 2, '2000-12-24', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 13:48:45'),
(16, 'AKANKSHA SANJAY GAJA', 2147483647, 2, '2002-12-12', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:15:33'),
(17, 'Gita patil', 2147483647, 2, '2002-12-18', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:24:35'),
(18, 'rohit patil', 2147483647, 1, '1993-12-03', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:35:35'),
(19, 'AKANKSHA SANJAY GAJA', 2147483647, 2, '2002-12-18', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:36:35'),
(20, 'tokbjADSX', 2147483647, 1, '2023-12-18', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:38:16'),
(21, 'AKANKSHA SANJAY GAJA', 8978675678, 0, '2006-12-22', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:43:00'),
(22, 'shehal patil', 3333333333, 0, '1998-10-23', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 14:53:44'),
(23, 'Aiyshwarya Mane', 8967677889, 0, '1999-12-03', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 09:16:51'),
(24, 'mina', 3333333333, 2, '2000-12-12', 2, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 10:54:40'),
(25, 'Riya', 2222222222, 2, '2002-12-18', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 11:28:11'),
(26, 'Akanksha Singh', 9527426249, 2, '2002-12-12', 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 11:31:37'),
(27, 'AKANKSHA SANJAY GAJA', 9527426249, 2, '2002-12-19', 5, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 11:32:44'),
(28, 'Riya', 9527426249, 2, '2000-12-11', 4, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 11:38:29'),
(29, 'Priya Arora', 7867786778, 0, '1999-12-25', 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 11:56:15'),
(30, 'rohit', 6788899999, 0, '1998-06-25', 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 13:13:07'),
(31, 'df', 2323232323, 1, '2023-12-06', 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 14:09:47'),
(32, 'Arnav', 7878677777, 1, '2002-12-18', 3, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-23 14:22:51'),
(33, 'Heena patil', 9867567899, 0, '2002-07-22', NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 10:00:50'),
(34, 'Mgggggggg', 7888888888, 0, '2000-12-13', 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 10:28:40'),
(35, 'pawan patil', 7788888888, 1, '1995-06-25', 2, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 12:14:31'),
(36, 'sudddha', 9999999999, 2, '2000-12-12', 2, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 12:16:19'),
(37, 'Mayura patil', 9867687777, 2, '1999-06-23', 2, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 11:00:17'),
(38, 'Hrash', 9527426249, 1, '2024-01-15', 4, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 05:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `newdata`
--

CREATE TABLE `newdata` (
  `Member_id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newform`
--

CREATE TABLE `newform` (
  `New_id` int(20) NOT NULL,
  `Full_name` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newform`
--

INSERT INTO `newform` (`New_id`, `Full_name`, `DOB`, `age`, `gender`) VALUES
(1, 'aaaaaaaaaaaaaa', '0000-00-00', 20231220, 0),
(2, 'radha mane', '0000-00-00', NULL, 0),
(3, 'suchitra', '0000-00-00', NULL, 0),
(4, 'radha mane', '0000-00-00', NULL, 0),
(5, 'eaaaa', '0000-00-00', NULL, 0),
(6, 'meera singh', '0000-00-00', NULL, 0),
(7, 'sakshii', '0000-00-00', NULL, 0),
(8, 'Akshu Gajageshwar ', '0000-00-00', 20231201, 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_qualification`
--

CREATE TABLE `new_qualification` (
  `Quali_id` int(255) NOT NULL,
  `Quali_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_qualification`
--

INSERT INTO `new_qualification` (`Quali_id`, `Quali_name`) VALUES
(1, 'B.E'),
(2, 'B.Tech'),
(3, 'BCA'),
(4, 'BSC'),
(5, 'MCA'),
(6, 'MSC');

-- --------------------------------------------------------

--
-- Table structure for table `project_one`
--

CREATE TABLE `project_one` (
  `FormOne_id` int(50) NOT NULL,
  `Project_Name` varchar(10) DEFAULT NULL,
  `Project_Marathi_Name` varchar(20) DEFAULT NULL,
  `Project_Short_Name` varchar(20) DEFAULT NULL,
  `Tag_Name` varchar(20) DEFAULT NULL,
  `Project_Type` varchar(20) DEFAULT NULL,
  `Client_Name` varchar(20) DEFAULT NULL,
  `Task_Layout` varchar(20) DEFAULT NULL,
  `Group_Type1` varchar(20) DEFAULT NULL,
  `Group_Type2` varchar(20) DEFAULT NULL,
  `Group_Type3` varchar(20) DEFAULT NULL,
  `Group_Type4` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile` bigint(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Std` int(50) DEFAULT NULL,
  `Subject` int(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` int(3) DEFAULT NULL,
  `Language1` int(20) DEFAULT NULL,
  `Language2` int(20) DEFAULT NULL,
  `Language3` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`Id`, `FullName`, `Address`, `Mobile`, `Email`, `Std`, `Subject`, `DOB`, `Gender`, `Language1`, `Language2`, `Language3`) VALUES
(1, 'radha ', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'radha@gmail.com', 0, 0, '2023-12-24', 0, NULL, NULL, NULL),
(2, 'yogesh hhhhhhhhhhhhhh', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'sohelmulla@123.com', 0, 0, '2023-12-18', 0, NULL, NULL, NULL),
(3, 'MULLA ASIF AKBAR', 'SAMBHAJI NAGAR, TALANDAGE -416236', 1111111111, 'vdrddgd', 0, 0, '2023-12-29', 0, NULL, NULL, NULL),
(4, 'MULLA 9999999', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'waewwerew', 0, 0, '2023-12-27', 0, NULL, NULL, NULL),
(5, 'asdf', 'dffvgfd', 2147483647, 'ewer', 0, 0, '2023-12-28', 0, NULL, NULL, NULL),
(6, 'sachin', 'dfser', 2147483647, 'sdas', 0, 0, '2023-12-18', 0, NULL, NULL, NULL),
(7, 'Akanksha patil', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-22', 0, NULL, NULL, NULL),
(8, 'Sohel ', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'sohelmulla@123.com', 0, 0, '2023-12-28', 0, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'riya patil', 'NERLI TAG ROAD', 2147483647, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-22', 0, NULL, NULL, NULL),
(11, 'riya patil', 'NERLI TAG ROAD', 2147483647, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-22', 0, NULL, NULL, NULL),
(12, 'Aarati patil', 'NERLI TAG ROAD', 2147483647, 'aaratipatil@gmail.com', 0, 0, '2023-12-22', 0, NULL, NULL, NULL),
(13, 'Aarati patil', 'pune', 2147483647, 'aaratipatil@gmail.com', 0, 0, '2023-12-22', NULL, NULL, NULL, NULL),
(14, 'mina', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'gajageshwarakanksha@gmail.com', 0, 0, '0000-00-00', NULL, NULL, NULL, NULL),
(15, 'Sohel tare', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'sohelmulla@123.com', 0, 0, '2023-12-28', 0, NULL, NULL, NULL),
(16, 'rutuja', 'NERLI TAG ROAD', 2147483647, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-23', 0, NULL, NULL, NULL),
(17, 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaaaaaaaaa', 0, 0, '2023-12-04', 0, NULL, NULL, NULL),
(18, 'kiyara advaniiiiiiii', 'NERLI TAG ROAD', 9877767765, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-20', 0, NULL, NULL, NULL),
(19, 'meraaaaaaaaa', 'aaaaaaaaaaaaa', 6546666666, 'aaaa@gmail.com', 2, 2, '2023-12-12', 0, NULL, NULL, NULL),
(20, 'rrrrrrrrrrrrrrrrr', 'NERLI TAG ROAD', 5666666666, 'gajageshwarakanksha@gmail.com', 5, 4, '2023-12-05', 0, NULL, NULL, NULL),
(21, 'Akshuu Mane', 'NERLI TAG ROAD', 8778678888, 'akshu@gmail.com', 4, 3, '2023-12-21', 0, NULL, NULL, NULL),
(22, 'HARISHCHAND GOUND', 'NERLI TAG ROAD', 8999999999, 'gajageshwarakanksha@gmail.com', 3, 3, '2023-12-12', 1, NULL, NULL, NULL),
(23, 'HARISHCHAND GOUND', 'NERLI TAG ROAD', 7677777777, 'harsh@gmail.com', 2, 3, '2023-12-24', 1, NULL, NULL, NULL),
(24, 'Suyog sawant', 'pune', 8756786789, 'sawantsuyog@gmail.com', 3, 3, '2002-12-17', NULL, NULL, NULL, NULL),
(25, 'Abhi gajageshwar', 'kolhapur', 6788888888, 'gajageshwarakanksha@gmail.com', 3, 3, '2023-12-19', 1, 1, NULL, NULL),
(26, 'HARISHCHAND GOUND', 'NERLI TAG ROAD', 7777777777, 'gajageshwarakanksha@gmail.com', 4, 3, '2023-12-13', 1, NULL, NULL, NULL),
(27, 'Harshada', 'NERLI TAG ROAD', 8988888888, 'harshada@gmail.com', 3, 3, '2002-12-31', 1, 0, NULL, NULL),
(28, 'Mena patil', 'NERLI TAG ROAD', 8978888888, 'menapatil@gmail.com', 3, 2, '2023-12-10', 2, 0, NULL, NULL),
(29, 'HARISHCHAND GOUND', 'NERLI TAG ROAD', 8888888888, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-18', NULL, NULL, NULL, NULL),
(30, 'hbvvvvvvvvvvvv', 'NERLI TAG ROAD', 8999999999, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-12', NULL, 0, NULL, NULL),
(31, 'rohitt', 'NERLI TAG ROAD', 9876678899, 'rohit@gmail.com', 0, 0, '2023-12-11', 1, 1, NULL, NULL),
(32, 'kiyara', 'NERLI TAG ROAD', 8987777778, 'kiyara@gmail.com', 3, 3, '2023-12-17', 2, 2, NULL, NULL),
(33, 'Vaishali Gajageshwar', 'Kolhapur', 9866789778, 'vaishaligajageshwar@gmail.com', 3, 3, '2023-12-11', 2, 2, NULL, NULL),
(34, 'Akshuuuu', 'pune', 9876677899, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-18', 2, 1, 2, 3),
(35, 'Jhon smith', 'USA', 9867677889, 'jhonsmith@gmail.com', 3, 2, '2000-12-17', 1, NULL, NULL, NULL),
(36, 'kiyara Advanii', 'NERLI TAG ROAD', 8888888888, 'gajageshwarakanksha@gmail.com', 2, 4, '2023-12-18', 1, 1, 2, NULL),
(37, 'Madhuriii', 'NERLI TAG ROAD', 7777777777, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-03', NULL, NULL, NULL, NULL),
(38, 'Rohit patil', 'NERLI TAG ROAD', 9999999999, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-25', NULL, NULL, NULL, NULL),
(39, 'Sakshi patil', 'NERLI TAG ROAD', 7888888888, 'gajageshwarakanksha@gmail.com', 0, 0, '2023-12-12', 2, 1, NULL, NULL),
(40, 'Dhiraj', 'NERLI TAG ROAD kohapur', 8978777777, 'dhiraj@gmail.com', 3, 3, '2023-12-24', 1, NULL, 2, NULL),
(41, 'Rutu patil', 'NERLI TAG ROAD', 8778888888, 'rutupatil@gmail.com', 2, 2, '2023-12-10', 2, 1, 2, 3),
(42, 'Vinayak Chavan', 'pune', 8978888888, 'vinayakchavan@gmail.com', 3, 2, '1993-10-04', 1, 1, 2, NULL),
(43, 'Akshass aaaaaaaaaaaaa', 'NERLI TAG ROAD', 8977777777, 'akash@gmail.com', 0, 0, '2023-12-17', 1, 1, NULL, 3),
(44, 'Suchitra patil', 'NERLI TAG ROAD , mahabaleshwar', 9876687666, 'suchitrapatil@gmail.com', 4, 3, '2023-12-12', 2, 1, 2, NULL),
(45, 'Era patil', 'kolhapur', 7878888888, 'erapatil@gmail.com', 3, 3, '2024-01-31', 2, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_std`
--

CREATE TABLE `student_std` (
  `std_id` int(200) NOT NULL,
  `std_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_std`
--

INSERT INTO `student_std` (`std_id`, `std_name`) VALUES
(1, '8th'),
(2, '9th'),
(3, '10th'),
(4, '11th'),
(5, '12th');

-- --------------------------------------------------------

--
-- Table structure for table `student_sub`
--

CREATE TABLE `student_sub` (
  `sub_id` int(20) NOT NULL,
  `sub_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_sub`
--

INSERT INTO `student_sub` (`sub_id`, `sub_name`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'Java'),
(4, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `Id` int(100) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `JoinDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Qualification` int(50) DEFAULT NULL,
  `Experience` int(50) DEFAULT NULL,
  `DateOB` date DEFAULT NULL,
  `Mobile` bigint(11) DEFAULT NULL,
  `Gender` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`Id`, `FullName`, `Address`, `JoinDate`, `EndDate`, `Qualification`, `Experience`, `DateOB`, `Mobile`, `Gender`) VALUES
(1, 'MULLA ASIF AKBAR', 'SAMBHAJI NAGAR, TALANDAGE -416236', '2023-12-28', '2024-04-10', 0, 0, '2023-12-28', 2147483647, 1),
(2, 'rutuja mane', 'NERLI TAG ROAD', '2023-12-22', '2024-01-03', 0, 2, '2023-12-25', 2147483647, 0),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'sneha', 'ratnagiri', '2023-12-23', '2023-12-25', 0, 0, '2023-12-29', 2147483647, 0),
(9, 'Akanksha', 'NERLI TAG ROAD', '2023-12-12', '2023-12-18', 0, 4, '2023-12-11', 2147483647, 0),
(10, 'siyyaaaaaaaaaaaaa', 'NERLI TAG ROAD', '2023-12-18', '2023-12-25', 4, 3, '2023-12-19', 2147483647, 0),
(11, 'Sakshiiiiiiiii', 'NERLI TAG ROAD', '2023-12-11', '2023-12-19', 2, 3, '2023-12-10', 2147483647, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_experience`
--

CREATE TABLE `teacher_experience` (
  `Exp_id` int(255) NOT NULL,
  `Exp_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_experience`
--

INSERT INTO `teacher_experience` (`Exp_id`, `Exp_name`) VALUES
(1, '1 Year'),
(2, '2 Years'),
(3, '3 Years'),
(4, '4 Years'),
(5, '5 Years');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_qualification`
--

CREATE TABLE `teacher_qualification` (
  `Qualification_id` int(255) NOT NULL,
  `Qualification_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_qualification`
--

INSERT INTO `teacher_qualification` (`Qualification_id`, `Qualification_name`) VALUES
(1, 'BE'),
(2, 'B.Tech'),
(3, 'BSC'),
(4, 'BCA'),
(5, 'BSC'),
(6, 'MCA'),
(7, 'BA'),
(8, 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `unit_master`
--

CREATE TABLE `unit_master` (
  `unitId` bigint(50) NOT NULL,
  `unitName` varchar(100) DEFAULT NULL,
  `unitShortName` varchar(100) DEFAULT NULL,
  `unitDescription` varchar(250) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `unit_master`
--

INSERT INTO `unit_master` (`unitId`, `unitName`, `unitShortName`, `unitDescription`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'PAIR', 'PER', 'CONTAINS TWO UNITS', 0, 1, 1, '2022-01-07 08:54:47', 1, '2022-01-07 08:54:56', 1, NULL, NULL, NULL, '2022-01-07 07:54:47'),
(2, 'PACKET', 'PKT', 'CONTAINS 6 OR 10 PIECES', 0, 1, 1, '2022-01-07 08:55:22', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-07 07:55:22'),
(3, 'UNIT', 'UNT', 'INCLUDE A SINGLE QUANTITY', 0, 1, 1, '2022-01-07 08:55:45', 1, '2022-01-07 08:56:52', 1, NULL, NULL, NULL, '2022-01-07 07:55:45'),
(4, 'dd', 'dd', 'dd', 0, 1, 0, '2022-02-15 14:40:53', 1, NULL, NULL, '2022-02-15 14:41:02', 1, NULL, '2022-02-15 13:40:53'),
(5, 'sd', 'sd', 'sd', 0, 1, 1, '2023-02-24 17:36:12', 1, '2023-02-24 17:36:20', 1, NULL, NULL, NULL, '2023-02-24 16:36:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`New_id`);

--
-- Indexes for table `form_one`
--
ALTER TABLE `form_one`
  ADD PRIMARY KEY (`FormOne_id`);

--
-- Indexes for table `loginregistration`
--
ALTER TABLE `loginregistration`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `member_master`
--
ALTER TABLE `member_master`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `newdata`
--
ALTER TABLE `newdata`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `newform`
--
ALTER TABLE `newform`
  ADD PRIMARY KEY (`New_id`);

--
-- Indexes for table `new_qualification`
--
ALTER TABLE `new_qualification`
  ADD PRIMARY KEY (`Quali_id`);

--
-- Indexes for table `project_one`
--
ALTER TABLE `project_one`
  ADD PRIMARY KEY (`FormOne_id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_std`
--
ALTER TABLE `student_std`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `student_sub`
--
ALTER TABLE `student_sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher_experience`
--
ALTER TABLE `teacher_experience`
  ADD PRIMARY KEY (`Exp_id`);

--
-- Indexes for table `teacher_qualification`
--
ALTER TABLE `teacher_qualification`
  ADD PRIMARY KEY (`Qualification_id`);

--
-- Indexes for table `unit_master`
--
ALTER TABLE `unit_master`
  ADD PRIMARY KEY (`unitId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `New_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginregistration`
--
ALTER TABLE `loginregistration`
  MODIFY `Userid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_master`
--
ALTER TABLE `member_master`
  MODIFY `Member_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `newform`
--
ALTER TABLE `newform`
  MODIFY `New_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_qualification`
--
ALTER TABLE `new_qualification`
  MODIFY `Quali_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_std`
--
ALTER TABLE `student_std`
  MODIFY `std_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_sub`
--
ALTER TABLE `student_sub`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher_experience`
--
ALTER TABLE `teacher_experience`
  MODIFY `Exp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_qualification`
--
ALTER TABLE `teacher_qualification`
  MODIFY `Qualification_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `unit_master`
--
ALTER TABLE `unit_master`
  MODIFY `unitId` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
