-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2021 at 05:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `services_requests`
--

CREATE TABLE `services_requests` (
  `sr_id` int(11) NOT NULL COMMENT 'ไอดีการขอรับบริการ',
  `tid` int(11) NOT NULL COMMENT 'ไอดีคำนำหน้าผู้ขอรับบริการ',
  `sr_u_fname_th` varchar(100) NOT NULL COMMENT 'ชื่อผู้ขอรับบริการ ไทย',
  `sr_u_fname_en` varchar(100) NOT NULL COMMENT 'ชื่อผู้ขอรับบริการ อังกฤษ',
  `sr_email` varchar(100) NOT NULL COMMENT 'อีเมล ',
  `sr_tel` varchar(20) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `dep_id` int(11) NOT NULL COMMENT 'ไอดีของคณะผู้ขอรับบริการ',
  `bid` int(11) NOT NULL COMMENT 'brand ของผู้ขอรับบริการ',
  `mtype_id` int(11) NOT NULL COMMENT 'ไอดีชนิดเครื่อง ของผู้ขอรับบริการ',
  `sr_item_user` text NOT NULL COMMENT 'สิ่งที่มาพร้อมเครื่อง',
  `sr_Important_data` text NOT NULL COMMENT 'ข้อมูลสำคัญที่ต้องเก็บ',
  `sr_password_machine` text NOT NULL COMMENT 'รหัสเข้าเครื่อง',
  `cid` int(11) NOT NULL COMMENT 'สาเหตุเบื้องต้น',
  `sr_c_orther` text NOT NULL COMMENT 'สาเหตุอื่นๆ',
  `sr_id_card_number` varchar(20) DEFAULT '0' COMMENT 'เลขบัตรประชาชน 13 หลัก',
  `ut_id` int(11) NOT NULL COMMENT 'รปะเภทของผู้ขอรับบริการ',
  `sr_machine_number` varchar(100) DEFAULT NULL COMMENT 'หมายเลขเครื่อง',
  `sr_user_position` varchar(100) DEFAULT NULL COMMENT 'ตำแหน่ง กรณีผู้ขอรับบริการ ไม่ใช่นิสต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางการขอรับบริการ';

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

-- --------------------------------------------------------

--
-- Table structure for table `users_type`
--

CREATE TABLE `users_type` (
  `ut_id` int(11) NOT NULL COMMENT 'ไอดีประเภทผู้ใช้งาน',
  `ut_name` varchar(100) NOT NULL COMMENT 'ชื่อประเภทผู้ใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_type`
--

INSERT INTO `users_type` (`ut_id`, `ut_name`) VALUES
(1, 'นิสิต'),
(2, 'บุคคลากร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `machine_type`
--
ALTER TABLE `machine_type`
  ADD PRIMARY KEY (`mtype_id`);

--
-- Indexes for table `services_requests`
--
ALTER TABLE `services_requests`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `title_name`
--
ALTER TABLE `title_name`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `users_type`
--
ALTER TABLE `users_type`
  ADD PRIMARY KEY (`ut_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `machine_type`
--
ALTER TABLE `machine_type`
  MODIFY `mtype_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services_requests`
--
ALTER TABLE `services_requests`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีการขอรับบริการ', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `title_name`
--
ALTER TABLE `title_name`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_type`
--
ALTER TABLE `users_type`
  MODIFY `ut_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีประเภทผู้ใช้งาน', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
