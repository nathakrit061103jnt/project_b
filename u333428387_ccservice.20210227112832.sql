-- MariaDB dump 10.17  Distrib 10.4.15-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u333428387_ccservice
-- ------------------------------------------------------
-- Server version	10.4.15-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'a','1','บดินทร์ นาพิลา','สูง'),(2,'T','2','วิทวัส บุญลือ','กลาง'),(3,'witthawat.boon','1250200263478','วิทวัส บุญลือ','สูง'),(19,'b','1234','TaeyBC','ทั่วไป');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(20) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (1,'Acer'),(2,'Asus'),(3,'Dell'),(4,'Msi'),(5,'Samsung');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

--
-- Table structure for table `cause`
--

DROP TABLE IF EXISTS `cause`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cause` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cause`
--

/*!40000 ALTER TABLE `cause` DISABLE KEYS */;
INSERT INTO `cause` VALUES (1,'ติดตั้ง Windows'),(2,'ติดตั้ง Microsoft Office'),(3,'ติดตั้งโปรแกรมพื้นฐาน'),(4,'ตรวจสอบกู้/สำรองข้อมูล'),(5,'ตรวจสอบไวรัส/กำจัดไวรัส');
/*!40000 ALTER TABLE `cause` ENABLE KEYS */;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `dep_id` int(3) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'คณะมนุษยศาสตร์และสังคมศาสตร์'),(2,'คณะศึกษาศาสตร์'),(3,'คณะการบัญชีและการจัดการ'),(4,'คณะศิลปกรรมศาสตร์'),(5,'คณะการท่องเที่ยวและการโรงแรม'),(6,'วิทยาลัยการเมืองการปกครอง'),(7,'วิทยาลัยดุริยางคศิลป์'),(8,'คณะวัฒนธรรมศาสตร์'),(9,'คณะนิติศาสตร์'),(10,'คณะวิทยาศาสตร์'),(11,'คณะเทคโนโลยี'),(12,'คณะวิศวกรรมศาสตร์'),(13,'คณะสถาปัตยกรรมศาสตร์ '),(14,'คณะสิ่งแวดล้อมและทรัพยากรศาสตร์'),(15,'คณะวิทยาการสารสนเทศ'),(16,'สถาบันวิจัยวลัยรุกขเวช'),(17,'คณะพยาบาลศาสตร์'),(18,'คณะเภสัชศาสตร์'),(19,'คณะสาธารณสุขศาสตร์'),(20,'คณะแพทยศาสตร์'),(21,'คณะสัตวแพทยศาสตร์'),(22,'โรงเรียนสาธิตมหาวิทยาลัยมหาสารคาม (ฝ่ายประถม)'),(23,'โรงเรียนสาธิตมหาวิทยาลัยมหาสารคาม (ฝ่ายมัธยม)'),(24,'สำนักงานอธิการบดี'),(25,'กองกลาง'),(26,'กองแผนงาน'),(27,'กองการเจ้าหน้าที่'),(28,'กองกิจการนิสิต'),(29,'กองคลังและพัสดุ'),(30,'กองบริการการศึกษา'),(31,'กองทะเบียนและประมวลผล'),(32,'กองส่งเสริมการวิจัยและบริการวิชาการ'),(33,'กองอาคารสถานที่'),(34,'กองประชาสัมพันธ์และกิจการต่างประเทศ'),(35,'สำนักตรวจสอบภายใน'),(36,'ศูนย์พัฒนาและประกันคุณภาพการศึกษา'),(37,'บัณฑิตวิทยาลัย'),(38,'สำนักคอมพิวเตอร์'),(39,'สำนักวิทยบริการ'),(40,'สำนักศึกษาทั่วไป'),(41,'สถาบันวิจัยศิลปะและวัฒนธรรมอีสาน'),(42,'ศูนย์วิจัยและการศึกษาบรรพชีวินวิทยา'),(43,'สำนักบริการวิชาการ');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine`
--

/*!40000 ALTER TABLE `machine` DISABLE KEYS */;
INSERT INTO `machine` VALUES (1,'เครื่องส่วนตัว'),(2,'เครื่องหน่วยงาน');
/*!40000 ALTER TABLE `machine` ENABLE KEYS */;

--
-- Table structure for table `machine_type`
--

DROP TABLE IF EXISTS `machine_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine_type` (
  `mtype_id` int(3) NOT NULL AUTO_INCREMENT,
  `mtype_name` varchar(50) NOT NULL,
  PRIMARY KEY (`mtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_type`
--

/*!40000 ALTER TABLE `machine_type` DISABLE KEYS */;
INSERT INTO `machine_type` VALUES (1,'คอมพิวเตอร์ PC'),(2,'All in  One'),(3,'Note Book , Net Book'),(4,'อื่นๆ');
/*!40000 ALTER TABLE `machine_type` ENABLE KEYS */;

--
-- Table structure for table `services_requests`
--

DROP TABLE IF EXISTS `services_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services_requests` (
  `sr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีการขอรับบริการ',
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
  `sr_user_position` varchar(100) DEFAULT NULL COMMENT 'ตำแหน่ง กรณีผู้ขอรับบริการ ไม่ใช่นิสต',
  `status` varchar(50) NOT NULL,
  `day` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `studen_id` varchar(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `m_id` varchar(20) NOT NULL,
  `report` text NOT NULL,
  PRIMARY KEY (`sr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='ตารางการขอรับบริการ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services_requests`
--

/*!40000 ALTER TABLE `services_requests` DISABLE KEYS */;
INSERT INTO `services_requests` VALUES (1,1,'บดินทร์ นาพิลา','witthawat Boonlou','zxop69@gmail.com','0995121214',19,2,3,'ที่ชาจ','Drive D','2018',3,'-',NULL,2,'25625635495962666',NULL,'ซ่อมเสร็จแล้ว','23','02','2564','','20:33','1',''),(2,1,'วิทวัส บุญลือ','witthawat Boonlou','zxop69@gmail.com','0995121214',15,2,3,'ที่ชาจ','Drive D','2018',2,'-','1250200263478',1,NULL,NULL,'ซ่อมเสร็จแล้ว','23','02','2564','59010912730','20:34','2',''),(3,1,'วิทวัส บุญลือ','witthawat Boonlou','zxop69@gmail.com','0995121214',22,1,3,'ที่ชาจ','Drive D','2018',3,'-','1250200263478',1,NULL,NULL,'ซ่อมเสร็จแล้ว','23','02','2564','59010912730','20:43','2',''),(4,1,'วิทวัส บุญลือ','witthawat Boonlou','zxop69@gmail.com','0995121214',3,4,3,'ที่ชาจ','Drive D','2018',5,'-','1250200263478',1,NULL,NULL,'ซ่อมเสร็จแล้ว','23','02','2564','59010912730','21:25','1','ไม่มีอุปกรณ์เปลื่ยน');
/*!40000 ALTER TABLE `services_requests` ENABLE KEYS */;

--
-- Table structure for table `success`
--

DROP TABLE IF EXISTS `success`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `success` (
  `s_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `m_id` varchar(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `admin` varchar(70) NOT NULL,
  `report` text NOT NULL,
  `day` varchar(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `success`
--

/*!40000 ALTER TABLE `success` DISABLE KEYS */;
INSERT INTO `success` VALUES (1,'บดินทร์ นาพิลา','คณะสาธารณสุขศาสตร์','บุคคลากร','1','Asus','บดินทร์ นาพิลา','','23','02','2564','20:34','ชาย','ซ่อมได้'),(2,'วิทวัส บุญลือ','คณะวิทยาการสารสนเทศ','นิสิต','2','Asus','บดินทร์ นาพิลา','','23','02','2564','20:34','ชาย','ซ่อมได้'),(5,'วิทวัส บุญลือ','โรงเรียนสาธิตมหาวิทยาลัยมหาสารคาม (ฝ่ายประถม)','นิสิต','2','Acer','บดินทร์ นาพิลา','','23','02','2564','20:53','ชาย','ซ่อมไม่ได้'),(6,'วิทวัส บุญลือ','คณะการบัญชีและการจัดการ','นิสิต','1','Msi','บดินทร์ นาพิลา','','26','02','2564','09:18','ชาย','ซ่อมไม่ได้');
/*!40000 ALTER TABLE `success` ENABLE KEYS */;

--
-- Table structure for table `title_name`
--

DROP TABLE IF EXISTS `title_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `title_name` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(6) NOT NULL,
  `sex` varchar(10) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `title_name`
--

/*!40000 ALTER TABLE `title_name` DISABLE KEYS */;
INSERT INTO `title_name` VALUES (1,'นาย','ชาย'),(2,'นาง','หญิง'),(3,'นางสาว','หญิง');
/*!40000 ALTER TABLE `title_name` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `sex` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'ง่วง','srg','บุคลากร','','','เครื่องส่วนตัว',8,1,'Asus','','เครืองช้า','สายชาร์ต','1234','D','01: 21: 49 am','26','07','2562','0000000000','1121',0,'ซ่อมเสร็จแล้ว','ชาย'),(2,'วิทวัส บุญลือ','ABC','นิสิต','1111111111111','55555555555','เครื่องส่วนตัว',5,3,'Asus','','-','สายชาร์ต','-','D','01: 22: 21 am','26','07','2562','3333333333','',0,'ซ่อมเสร็จแล้ว','ชาย'),(3,'เอ','ae','บุคลากร','','','เครื่องหน่วยงาน',19,2,'Asus','1111','เครืองช้า','-','-','-','01: 23: 01 am','26','07','2562','0000000000','1121',0,'ซ่อมเสร็จแล้ว','หญิง'),(4,'wwwwww','srg','บุคลากร','','','เครื่องส่วนตัว',20,1,'Asus','','rrrrr','-','-','D','02: 07: 27 am','26','07','2562','7777777777','1121',0,'ซ่อมเสร็จแล้ว','ชาย'),(5,'บดินทร์ นาพิลา','Witthawat boonlou','นิสิต','1250200263478','59010912730','',3,3,'Asus','','','สายชาจ','20840','ไม่ีมี','12: 05: 50 pm','03','09','2563','0995121214','',0,'ซ่อมเสร็จแล้ว',''),(6,'วิทวัส บุญลือ','Witthawat boonlou','','1250200263478','59010915027','',1,1,'Asus','','','สายชาจ','20840','ไม่ีมี','01: 10: 35 pm','01','11','2563','0995121214','',0,'ซ่อมเสร็จแล้ว','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `b_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'b','1','บดินทร์ นาพิลา','นิสิต'),(2,'b','2','วิทวัส บุญลือ','นิสิต');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Table structure for table `users_type`
--

DROP TABLE IF EXISTS `users_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_type` (
  `ut_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีประเภทผู้ใช้งาน',
  `ut_name` varchar(100) NOT NULL COMMENT 'ชื่อประเภทผู้ใช้งาน',
  PRIMARY KEY (`ut_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_type`
--

/*!40000 ALTER TABLE `users_type` DISABLE KEYS */;
INSERT INTO `users_type` VALUES (1,'นิสิต'),(2,'บุคคลากร');
/*!40000 ALTER TABLE `users_type` ENABLE KEYS */;

--
-- Dumping routines for database 'u333428387_ccservice'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-27 11:28:39
