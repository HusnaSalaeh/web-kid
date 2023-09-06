-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2023 at 09:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_d_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child`
--

CREATE TABLE `tbl_child` (
  `childID` int(3) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(3) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `height` varchar(10) NOT NULL,
  `disease` varchar(10) NOT NULL COMMENT 'โรคประจำตัว',
  `developmentalDisorder` varchar(255) NOT NULL,
  `birthWeight` varchar(10) NOT NULL,
  `birthHistory` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ref_parent_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_child`
--

INSERT INTO `tbl_child` (`childID`, `firstName`, `lastName`, `gender`, `birthdate`, `age`, `weight`, `height`, `disease`, `developmentalDisorder`, `birthWeight`, `birthHistory`, `address`, `ref_parent_id`) VALUES
(1, 'fchild1', 'lchild2', '', '2016-09-13', 15, '45', '159', 'มี', 'สมาธิสั้น', '20', 'มี', '1416 ต.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent`
--

CREATE TABLE `tbl_parent` (
  `parentID` int(3) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `childNo` varchar(10) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `dateSaveParent` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_parent`
--

INSERT INTO `tbl_parent` (`parentID`, `firstName`, `lastName`, `gender`, `age`, `disease`, `childNo`, `relation`, `telephone`, `dateSaveParent`) VALUES
(1, 'user1first', 'user1last', 'male', 68, 'ไม่มี', '3', 'พ่อ', '', '2023-09-06 03:12:39'),
(2, 'user2first', 'user2last', 'female', 54, 'กระดูกเสื่อม', '2', 'แม่', '', '2023-09-06 03:12:16'),
(3, 'user3first', 'user3last', 'female', 25, 'ไม่มี', '5', 'แม่', '', '2023-09-06 12:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` varchar(10) NOT NULL,
  `ref_user_level` int(3) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `email`, `password`, `user_level`, `ref_user_level`, `date_save`) VALUES
(1, 'admin', 'admin@gmail.com', '7d7b2156b3b5071039a4ad4cabc2f53f', 'admin', 1, '2023-09-06 01:41:36'),
(2, 'user1', 'user1@gmail.com', '7d7b2156b3b5071039a4ad4cabc2f53f', 'user', 2, '2023-09-06 01:41:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_child`
--
ALTER TABLE `tbl_child`
  ADD PRIMARY KEY (`childID`);

--
-- Indexes for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  ADD PRIMARY KEY (`parentID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_child`
--
ALTER TABLE `tbl_child`
  MODIFY `childID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  MODIFY `parentID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
