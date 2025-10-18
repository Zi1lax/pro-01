-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 09:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_helpdesk`
--
CREATE DATABASE IF NOT EXISTS `db_helpdesk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_helpdesk`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_phone` varchar(20) DEFAULT NULL,
  `admin_status` int(1) NOT NULL COMMENT '1 admin, 2 member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_email`, `admin_pwd`, `admin_name`, `admin_phone`, `admin_status`) VALUES
(1, 'admin@a.com', '5cb0c624bea136e200c0957928b2d69d9f2c2724', 'Admin-Technician', '1122', 1),
(2, 'member@a.com', '898e7cf8e66e4c9cca7054c75f546a6fa9bd411c', 'สมาชิก', '1003', 2),
(3, 'mm@m.com', '1bdf0b24dc771be652567ff502dc6cdc9a5680ee', 'คุณเจ้าหน้าที่', '1144', 2),
(4, 'mem@m.com', '07c7c0e046f1bed320b7d522d0f1cd2b96974d96', 'member 001', '1114', 2),
(5, 'abc@d.com', '8fc4a4ddcfb5f8926192cc1da984a6007a5bb585', 'นายสมาชิก ทดสอบ', '5544', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `id` int(11) NOT NULL,
  `case_type` varchar(100) NOT NULL,
  `case_detail` text NOT NULL,
  `case_loc` varchar(200) NOT NULL,
  `member_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `case_status` int(1) NOT NULL DEFAULT 1,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp(),
  `tech_id` int(11) NOT NULL DEFAULT 0 COMMENT 'ไอดีช่าง',
  `tech_name` varchar(50) NOT NULL COMMENT 'ชื่อช่าง',
  `case_update` datetime DEFAULT NULL COMMENT 'ว/ด/ป  ที่มีการอัพเดท',
  `case_update_log` text DEFAULT NULL COMMENT 'รายละเอียดการอัพเดทงานซ่อม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_device`
--

CREATE TABLE `tbl_device` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_device`
--

INSERT INTO `tbl_device` (`d_id`, `d_name`) VALUES
(1, 'คอมพิวเตอร์'),
(2, 'ซอฟแวร์'),
(3, 'ไฟฟ้า'),
(4, 'อาคาร'),
(5, 'ประปา'),
(6, 'อื่นๆ'),
(7, 'อุปกรณ์เครือข่าย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_device`
--
ALTER TABLE `tbl_device`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_device`
--
ALTER TABLE `tbl_device`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
