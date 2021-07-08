-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_code`) VALUES
(1, 'Tables', '001'),
(2, 'Chairs', '002'),
(3, 'Desks', '003'),
(4, 'Stools / Stands', '004'),
(5, 'Filling Cabinets', '005'),
(6, 'Almirah', '006'),
(7, 'Boxes', '007'),
(8, 'Computer & Accessories', '008'),
(9, 'Printers', '009'),
(12, 'Fan', '012'),
(13, 'Lamps', '013'),
(14, 'Copiers / Scanners', '014'),
(15, 'Duplicating Machines', '015'),
(16, 'Stabilizing Equipment', '010'),
(17, 'Calculators / Adding Machines', '011'),
(18, 'Audio Visual Equipment', '016'),
(19, 'Vacuum Cleaners', '017'),
(20, 'Telephone Systems', '018'),
(21, 'Fax Machines', '19'),
(22, 'Mobile Phones', '020'),
(23, 'Safe', '021'),
(24, 'Postal Franking Machines', '022'),
(25, 'Cookers', '023'),
(26, 'Refrigerators / Freezers', '024'),
(27, 'Air Conditioners', '025'),
(28, 'Board', '026'),
(29, 'Lockers', '027'),
(30, 'Laminating Machines', '028'),
(31, 'Weighing Machines', '029'),
(32, 'Trays', '030'),
(33, 'Stapler Machines', '031'),
(34, 'Punching Machines', '032'),
(35, 'Numbering Machines', '033'),
(36, 'Binding / Gathering Equipment', '034'),
(37, 'Boilers / Kettle', '035'),
(38, 'Newspaper Stands', '036'),
(39, 'Floor Polishers', '037'),
(40, 'Lawnmowers', '038');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(100) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `dcode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dname`, `dcode`) VALUES
(1, 'Super Admin', 1),
(2, 'Department of Ayurveda Basic Principles', 2),
(3, 'Department of Dravyagunavijnana', 3),
(4, 'Department of Cikitsa', 4),
(5, 'Department of Desiya Cikitsa', 5),
(6, 'Department of Rogavijnana', 6),
(7, 'Department of Salya - Salakya', 7),
(8, 'Department of Kaumarabhritya & Striroga', 8),
(9, 'Department of Languages', 9),
(10, 'Department of Indigenous Health Sciences', 10),
(11, 'Department of Technology', 11),
(12, 'Department of Indigenous Medical Resources', 12),
(13, 'Department of Graduate Studies', 13),
(14, 'Library Facility', 14),
(15, 'Information & Communication Facility', 15),
(16, 'Sports  &  Entertainments', 16),
(17, 'Medical Services', 17),
(20, 'Career Guidance', 18),
(21, 'Stores', 19),
(22, 'Student Welfare Branch', 20),
(23, 'Maintenance Division', 21),
(24, 'Central Lab', 22),
(25, 'Research & Publication Unit', 23),
(26, 'Account Branch - Ground Floor', 24),
(27, 'Register Office', 25),
(28, 'Academic Non Academic Branch', 26),
(29, 'Media Unit', 27),
(30, 'VC Office', 28),
(31, 'Legal Office', 29),
(32, 'General Admin', 30),
(33, 'Examination Branch', 31),
(34, 'Department of Indigenous Social Sciences', 32);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(100) NOT NULL,
  `scategory_name` varchar(255) NOT NULL,
  `scategory_code` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `scategory_name`, `scategory_code`, `category`) VALUES
(21, 'Lunch Boxes', '002', '004');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept_code` int(50) NOT NULL,
  `emp_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `dept_code`, `emp_code`, `name`, `telephone`) VALUES
(1, 'admin@gmail.com', '123', 1, '0086', 'admin', '0754077052');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
