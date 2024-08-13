-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 04:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_tb`
--

CREATE TABLE `company_tb` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_type` int(11) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_tb`
--

INSERT INTO `company_tb` (`company_id`, `company_name`, `company_type`, `company_email`, `company_address`) VALUES
(27, '    asd6666666', 3, 'asd@gmail.com', '    sdfs12    '),
(28, 'as', 3, 'as@gmail.com', 'on'),
(29, 'aaa', 3, 'asas@dd', 'on'),
(30, 'afaf', 3, 'sassa@af', 'on'),
(31, 'ฟฟหฟ', 3, 'sasda@a', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `company_type_tb`
--

CREATE TABLE `company_type_tb` (
  `company_type_id` int(11) NOT NULL,
  `company_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_type_tb`
--

INSERT INTO `company_type_tb` (`company_type_id`, `company_type_name`) VALUES
(3, 'Dev'),
(4, 'iT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_tb`
--
ALTER TABLE `company_tb`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `company_type` (`company_type`);

--
-- Indexes for table `company_type_tb`
--
ALTER TABLE `company_type_tb`
  ADD PRIMARY KEY (`company_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_tb`
--
ALTER TABLE `company_tb`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `company_type_tb`
--
ALTER TABLE `company_type_tb`
  MODIFY `company_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_tb`
--
ALTER TABLE `company_tb`
  ADD CONSTRAINT `company_tb_ibfk_1` FOREIGN KEY (`company_type`) REFERENCES `company_type_tb` (`company_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
