-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 04:39 PM
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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_number`
--

INSERT INTO `tb_number` (`Number_ID`, `Number_Code`, `Number_User`, `Number_Name`, `Number_Sub`, `Number_Phone`, `Grade`, `status`) VALUES
(1, '573170010324', '', 'jirayut khanyota', '', '0961155023', 3.25, 0),
(4, '563170010324', '1449900375011', 'จิรายุทธ ขันโยธา', 'สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ', '0908614171', 0, 0);

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
  `ST_Name` varchar(50) NOT NULL,
  `ST_Sub` varchar(50) NOT NULL,
  `ST_Address` varchar(50) NOT NULL,
  `ST_Email` varchar(50) NOT NULL,
  `ST_Phone` varchar(15) NOT NULL,
  `ST_Score` int(11) NOT NULL,
  `ST_Status` varchar(50) NOT NULL,
  `ST_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`ST_ID`, `ST_Name`, `ST_Sub`, `ST_Address`, `ST_Email`, `ST_Phone`, `ST_Score`, `ST_Status`, `ST_img`) VALUES
(6, 'sata', 'สาขาวิชาเทคโนโลยีสารสนเทศ', 'sadsad', 'dsadsad', '0961155023', 0, 'อนุมัติ', '181005853720190511_213806.png');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_number`
--
ALTER TABLE `tb_number`
  MODIFY `Number_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `ST_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
