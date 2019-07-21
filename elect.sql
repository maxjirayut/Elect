-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 06:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Username`, `Password`, `Name`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Faculty_ID` int(11) NOT NULL,
  `Faculty_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_number`
--

CREATE TABLE `tb_number` (
  `Number_ID` int(11) NOT NULL,
  `Number_Code` varchar(50) NOT NULL,
  `Number_User` varchar(50) NOT NULL,
  `Number_Name` varchar(50) NOT NULL,
  `Number_Sub` varchar(150) NOT NULL,
  `Number_Phone` varchar(50) NOT NULL,
  `Grade` double NOT NULL,
  `status` int(11) NOT NULL,
  `Year` varchar(150) NOT NULL,
  `room` int(11) NOT NULL,
  `Faculty_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_number`
--

INSERT INTO `tb_number` (`Number_ID`, `Number_Code`, `Number_User`, `Number_Name`, `Number_Sub`, `Number_Phone`, `Grade`, `status`, `Year`, `room`, `Faculty_Name`) VALUES
(1, '573170010324', '1449900375011', 'jirayut', 'สาขาวิชาเทคโนโลยีสารสนเทศ', '0908614171', 3.25, 0, '', 0, ''),
(4, '573170010325', '1449900375011', 'test', 'สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ', '', 0, 0, '', 0, ''),
(5, '603170010324', '', 'test', '', '', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `status_id` int(11) NOT NULL,
  `status_code` int(11) NOT NULL,
  `status_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`status_id`, `status_code`, `status_number`) VALUES
(1, 57, '570000000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `ST_ID` int(10) NOT NULL,
  `ST_Code` varchar(50) NOT NULL,
  `ST_Number` varchar(3) NOT NULL,
  `ST_Name` varchar(50) NOT NULL,
  `ST_Sub` varchar(50) NOT NULL,
  `ST_Address` varchar(50) NOT NULL,
  `ST_Email` varchar(50) NOT NULL,
  `ST_Phone` varchar(15) NOT NULL,
  `ST_Grede` double NOT NULL,
  `ST_Score` int(11) NOT NULL,
  `ST_Status` varchar(50) NOT NULL,
  `ST_Img_Grade` varchar(150) NOT NULL,
  `ST_Profile` varchar(150) NOT NULL,
  `ST_Policy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`ST_ID`, `ST_Code`, `ST_Number`, `ST_Name`, `ST_Sub`, `ST_Address`, `ST_Email`, `ST_Phone`, `ST_Grede`, `ST_Score`, `ST_Status`, `ST_Img_Grade`, `ST_Profile`, `ST_Policy`) VALUES
(6, '', '1', 'sata', 'สาขาวิชาเทคโนโลยีสารสนเทศ', 'sadsad', 'dsadsad', '0908614171', 3, 0, 'อนุมัติ', '181005853720190511_213806.png', '', ''),
(7, '573170010325', '2', 'test 2.2', 'สาขาวิชาเทคโนโลยีสารสนเทศ', '132/12 ', 'test@gmail.com', '090000123', 3, 0, 'อนุมัติ', '19249658320190714_154056.jpg', '', 'นำแสงสว่างสู่ครอบครัว');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `Username`, `Password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `YearID` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `YearCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`YearID`, `Year`, `YearCode`) VALUES
(2, 2559, 4),
(3, 2560, 3),
(4, 2561, 2),
(5, 2562, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Faculty_ID`);

--
-- Indexes for table `tb_number`
--
ALTER TABLE `tb_number`
  ADD PRIMARY KEY (`Number_ID`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`YearID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Faculty_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_number`
--
ALTER TABLE `tb_number`
  MODIFY `Number_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `ST_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `YearID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
