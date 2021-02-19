-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2021 at 07:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `pwd`, `name`, `status`) VALUES
(1, 'a', '1', 'บดินทร์ นาพิลา', 'สูง'),
(10, 'T', '2', 'วิทวัส บุญลือ', 'กลาง'),
(11, 'witthawat.boon', '1250200263478', 'วิทวัส บุญลือ', 'สูง'),
(12, 'B', '1234', 'xxx', 'ทั่วไป');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `bid` int(11) NOT NULL,
  `bname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bid`, `bname`) VALUES
(1, 'Acer'),
(2, 'Asus'),
(3, 'Dell'),
(4, 'Msi'),
(5, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

CREATE TABLE `cause` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cause`
--

INSERT INTO `cause` (`cid`, `cname`) VALUES
(1, 'ติดตั้ง Windows'),
(2, 'ติดตั้ง Microsoft Office'),
(3, 'ติดตั้งโปรแกรมพื้นฐาน'),
(4, 'ตรวจสอบกู้/สำรองข้อมูล'),
(5, 'ตรวจสอบไวรัส/กำจัดไวรัส');

-- --------------------------------------------------------

--
-- Table structure for table `count_ad`
--

CREATE TABLE `count_ad` (
  `name` varchar(255) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `ad` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `count_dep`
--

CREATE TABLE `count_dep` (
  `dep_name` varchar(50) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `ad` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `count_result`
--

CREATE TABLE `count_result` (
  `result` varchar(20) DEFAULT NULL,
  `ad` bigint(21) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `count_type`
--

CREATE TABLE `count_type` (
  `mtype_name` varchar(50) DEFAULT NULL,
  `ad` bigint(21) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(3) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'คณะมนุษยศาสตร์และสังคมศาสตร์'),
(2, 'คณะศึกษาศาสตร์'),
(3, 'คณะการบัญชีและการจัดการ'),
(4, 'คณะศิลปกรรมศาสตร์'),
(5, 'คณะการท่องเที่ยวและการโรงแรม'),
(6, 'วิทยาลัยการเมืองการปกครอง'),
(7, 'วิทยาลัยดุริยางคศิลป์'),
(8, 'คณะวัฒนธรรมศาสตร์'),
(9, 'คณะนิติศาสตร์'),
(10, 'คณะวิทยาศาสตร์'),
(11, 'คณะเทคโนโลยี'),
(12, 'คณะวิศวกรรมศาสตร์'),
(13, 'คณะสถาปัตยกรรมศาสตร์ ผังเมือง นฤมิตศิลป์'),
(14, 'คณะสิ่งแวดล้อมและทรัพยากรศาสตร์'),
(15, 'คณะวิทยาการสารสนเทศ'),
(16, 'สถาบันวิจัยวลัยรุกขเวช'),
(17, 'คณะพยาบาลศาสตร์'),
(18, 'คณะเภสัชศาสตร์'),
(19, 'คณะสาธารณสุขศาสตร์'),
(20, 'คณะแพทยศาสตร์'),
(21, 'คณะสัตวแพทยศาสตร์'),
(22, 'โรงเรียนสาธิตมหาวิทยาลัยมหาสารคาม (ฝ่ายประถม)'),
(23, 'โรงเรียนสาธิตมหาวิทยาลัยมหาสารคาม (ฝ่ายมัธยม)'),
(24, 'สำนักงานอธิการบดี'),
(25, 'กองกลาง'),
(26, 'กองแผนงาน'),
(27, 'กองการเจ้าหน้าที่'),
(28, 'กองกิจการนิสิต'),
(29, 'กองคลังและพัสดุ'),
(30, 'กองบริการการศึกษา'),
(31, 'กองทะเบียนและประมวลผล'),
(32, 'กองส่งเสริมการวิจัยและบริการวิชาการ'),
(33, 'กองอาคารสถานที่'),
(34, 'กองประชาสัมพันธ์และกิจการต่างประเทศ'),
(35, 'สำนักตรวจสอบภายใน'),
(36, 'ศูนย์พัฒนาและประกันคุณภาพการศึกษา'),
(37, 'บัณฑิตวิทยาลัย'),
(38, 'สำนักคอมพิวเตอร์'),
(39, 'สำนักวิทยบริการ'),
(40, 'สำนักศึกษาทั่วไป'),
(41, 'สถาบันวิจัยศิลปะและวัฒนธรรมอีสาน'),
(42, 'ศูนย์วิจัยและการศึกษาบรรพชีวินวิทยา'),
(43, 'สำนักบริการวิชาการ');

-- --------------------------------------------------------

--
-- Table structure for table `machine_type`
--

CREATE TABLE `machine_type` (
  `mtype_id` int(3) NOT NULL,
  `mtype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machine_type`
--

INSERT INTO `machine_type` (`mtype_id`, `mtype_name`) VALUES
(1, 'คอมพิวเตอร์ PC'),
(2, 'All in  One'),
(3, 'Note Book , Net Book'),
(4, 'อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `s_id` int(4) NOT NULL,
  `name` varchar(70) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `dev_type` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `admin` varchar(70) NOT NULL,
  `report` text NOT NULL,
  `day` varchar(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`s_id`, `name`, `dep`, `type`, `dev_type`, `brand`, `admin`, `report`, `day`, `month`, `year`, `time`, `sex`, `result`) VALUES
(13, 'ง่วง', 'คณะวัฒนธรรมศาสตร์', 'บุคลากร', 'เครื่องส่วนตัว', 'Asus', 'Palm', '33333', '26', '07', '2562', '01: 23: 44', 'ชาย', 'ซ่อมได้'),
(14, 'gg', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'นิสิต', 'เครื่องส่วนตัว', 'Asus', 'Palm', '444444444444', '26', '07', '2562', '01: 24: 12', 'ชาย', 'ซ่อมได้'),
(15, 'เอ', 'คณะสาธารณสุขศาสตร์', 'บุคลากร', 'เครื่องหน่วยงาน', 'Asus', 'Palm', '456789', '26', '07', '2562', '01: 24: 21', 'หญิง', 'ซ่อมได้'),
(16, 'ง่วง', 'คณะวัฒนธรรมศาสตร์', 'บุคลากร', 'เครื่องส่วนตัว', 'Asus', 'Palm', '444444444', '26', '07', '2562', '01: 25: 11', 'ชาย', 'ซ่อมไม่ได้'),
(17, 'wwwwww', 'คณะแพทยศาสตร์', 'บุคลากร', 'เครื่องส่วนตัว', 'Asus', '', '11111', '18', '12', '2562', '02: 39: 39', 'ชาย', 'ซ่อมได้'),
(18, 'gg', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'นิสิต', 'เครื่องส่วนตัว', 'Asus', 'Palm', 'qe', '18', '12', '2562', '02: 41: 00', 'ชาย', 'ซ่อมได้'),
(19, 'wwwwww', 'คณะแพทยศาสตร์', 'บุคลากร', 'เครื่องส่วนตัว', 'Asus', 'Palm', 'qww', '18', '12', '2562', '02: 51: 43', 'ชาย', 'ซ่อมได้'),
(20, 'วิทวัส บุญลือ', 'คณะการบัญชีและการจัดการ', 'นิสิต', '', 'Asus', 'Palm', 'ไม่สามารถซ่อมได้', '03', '09', '2563', '12: 09: 05', '', 'ซ่อมไม่ได้'),
(21, 'วิทวัส บุญลือ', 'คณะมนุษยศาสตร์และสังคมศาสตร์', '', '', 'Asus', 'Palm', 'คอมมึงกาก', '11', '11', '2563', '12: 22: 46', '', 'ซ่อมไม่ได้');

-- --------------------------------------------------------

--
-- Table structure for table `title_name`
--

CREATE TABLE `title_name` (
  `tid` int(11) NOT NULL,
  `tname` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title_name`
--

INSERT INTO `title_name` (`tid`, `tname`) VALUES
(1, 'นาย'),
(2, 'นาง'),
(3, 'นางสาว');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `Tname` varchar(255) NOT NULL,
  `Ename` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `idcard` varchar(13) NOT NULL,
  `studen_id` varchar(11) NOT NULL,
  `m_use` varchar(50) NOT NULL,
  `dep_id` int(3) NOT NULL,
  `mtype_id` int(3) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `cause` varchar(50) NOT NULL,
  `device` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `drive` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `phone_dep` varchar(10) NOT NULL,
  `a_id` int(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Tname`, `Ename`, `type`, `idcard`, `studen_id`, `m_use`, `dep_id`, `mtype_id`, `brand`, `no`, `cause`, `device`, `password`, `drive`, `time`, `day`, `month`, `year`, `phone_number`, `phone_dep`, `a_id`, `status`, `sex`) VALUES
(1, 'ง่วง', 'srg', 'บุคลากร', '', '', 'เครื่องส่วนตัว', 8, 1, 'Asus', '', 'เครืองช้า', 'สายชาร์ต', '1234', 'D', '01: 21: 49 am', '26', '07', '2562', '0000000000', '1121', 0, 'ซ่อมเสร็จแล้ว', 'ชาย'),
(2, 'วิทวัส บุญลือ', 'ABC', 'นิสิต', '1111111111111', '55555555555', 'เครื่องส่วนตัว', 5, 3, 'Asus', '', '-', 'สายชาร์ต', '-', 'D', '01: 22: 21 am', '26', '07', '2562', '3333333333', '', 0, 'ซ่อมเสร็จแล้ว', 'ชาย'),
(3, 'เอ', 'ae', 'บุคลากร', '', '', 'เครื่องหน่วยงาน', 19, 2, 'Asus', '1111', 'เครืองช้า', '-', '-', '-', '01: 23: 01 am', '26', '07', '2562', '0000000000', '1121', 0, 'ซ่อมเสร็จแล้ว', 'หญิง'),
(4, 'wwwwww', 'srg', 'บุคลากร', '', '', 'เครื่องส่วนตัว', 20, 1, 'Asus', '', 'rrrrr', '-', '-', 'D', '02: 07: 27 am', '26', '07', '2562', '7777777777', '1121', 0, 'ซ่อมเสร็จแล้ว', 'ชาย'),
(5, 'บดินทร์ นาพิลา', 'Witthawat boonlou', 'นิสิต', '1250200263478', '59010912730', '', 3, 3, 'Asus', '', '', 'สายชาจ', '20840', 'ไม่ีมี', '12: 05: 50 pm', '03', '09', '2563', '0995121214', '', 0, 'ซ่อมเสร็จแล้ว', ''),
(6, 'วิทวัส บุญลือ', 'Witthawat boonlou', '', '1250200263478', '59010915027', '', 1, 1, 'Asus', '', '', 'สายชาจ', '20840', 'ไม่ีมี', '01: 10: 35 pm', '01', '11', '2563', '0995121214', '', 0, 'ซ่อมเสร็จแล้ว', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `b_id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`b_id`, `username`, `pwd`, `name`, `status`) VALUES
(1, 'b', '1', 'วิทวัส บุญลือ', 'นิสิต'),
(2, 'b', '2', 'บดินทร์ นาพิลา', 'นิสิต');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `title_name`
--
ALTER TABLE `title_name`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cause`
--
ALTER TABLE `cause`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `title_name`
--
ALTER TABLE `title_name`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
