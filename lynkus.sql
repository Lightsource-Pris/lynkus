-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 11:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `emailadd` varchar(30) NOT NULL,
  `subject` char(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owners_details`
--

CREATE TABLE `owners_details` (
  `ID` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `first_name` char(40) NOT NULL,
  `last_name` char(40) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `passworde` varchar(40) NOT NULL,
  `signup_type` char(15) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `course` varchar(40) NOT NULL,
  `llevel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `property_name` text NOT NULL,
  `property_phone_num` varchar(232) NOT NULL,
  `property_email` varchar(234) NOT NULL,
  `property_category` text NOT NULL,
  `property_price` varchar(234) NOT NULL,
  `property_address` varchar(234) NOT NULL,
  `property_description` varchar(234) NOT NULL,
  `property_image` text NOT NULL,
  `property_image2` varchar(100) NOT NULL,
  `property_image3` varchar(100) NOT NULL,
  `property_image4` varchar(100) NOT NULL,
  `property_status` varchar(232) NOT NULL,
  `property_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `ID` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email_add` varchar(30) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `property_id` int(50) NOT NULL,
  `image` text NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `request_date` date NOT NULL,
  `location` varchar(20) NOT NULL,
  `owners_email` varchar(40) NOT NULL,
  `description` varchar(300) NOT NULL,
  `llevel` varchar(20) NOT NULL,
  `course` varchar(40) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renters_details`
--

CREATE TABLE `renters_details` (
  `ID` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `passworde` varchar(20) NOT NULL,
  `signup_type` char(15) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `course` varchar(40) NOT NULL,
  `llevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `owners_details`
--
ALTER TABLE `owners_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `renters_details`
--
ALTER TABLE `renters_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners_details`
--
ALTER TABLE `owners_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `renters_details`
--
ALTER TABLE `renters_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
