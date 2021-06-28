-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 05:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ybbadminweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `password`, `image`) VALUES
(1, 'qoriahindah', 'dummy', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id_participant` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('registered','paid') NOT NULL,
  `portal_password` varchar(100) NOT NULL,
  `qr_code` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `is_fully_funded` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participant_details`
--

CREATE TABLE `participant_details` (
  `id_participant_details` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(2) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('P','L') NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `name_of_school` varchar(100) NOT NULL,
  `contact_emergency` varchar(15) NOT NULL,
  `relation` enum('parents','siblings','others') NOT NULL,
  `wa_number` varchar(15) NOT NULL,
  `ig_account` varchar(100) NOT NULL,
  `tshirt_size` enum('s','m','l','xl','xxl') NOT NULL,
  `disease_history` text NOT NULL,
  `is_vegetarian` int(1) NOT NULL,
  `essay` varchar(100) NOT NULL,
  `is_talent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payment` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `id_payment_type` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `payment_date` date NOT NULL,
  `proof` varchar(100) NOT NULL,
  `payment_status` enum('valid','invalid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_payment_type` int(11) NOT NULL,
  `description` enum('registrasi','program') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regist_info_detail`
--

CREATE TABLE `regist_info_detail` (
  `id` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `info_ybb` varchar(100) NOT NULL,
  `detail_info` varchar(150) NOT NULL,
  `proof_share` varchar(100) NOT NULL,
  `is_agree` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `summit`
--

CREATE TABLE `summit` (
  `id_summit` int(5) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `regist_fee` int(10) NOT NULL,
  `program_fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participant`),
  ADD KEY `id_summit` (`id_summit`);

--
-- Indexes for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD PRIMARY KEY (`id_participant_details`),
  ADD KEY `id_participant` (`id_participant`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_participant` (`id_participant`),
  ADD KEY `id_payment_type` (`id_payment_type`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id_payment_type`);

--
-- Indexes for table `regist_info_detail`
--
ALTER TABLE `regist_info_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_participant` (`id_participant`);

--
-- Indexes for table `summit`
--
ALTER TABLE `summit`
  ADD PRIMARY KEY (`id_summit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participant_details`
--
ALTER TABLE `participant_details`
  MODIFY `id_participant_details` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id_payment_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regist_info_detail`
--
ALTER TABLE `regist_info_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `summit`
--
ALTER TABLE `summit`
  MODIFY `id_summit` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`id_summit`) REFERENCES `summit` (`id_summit`);

--
-- Constraints for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD CONSTRAINT `participant_details_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`id_payment_type`) REFERENCES `payment_types` (`id_payment_type`);

--
-- Constraints for table `regist_info_detail`
--
ALTER TABLE `regist_info_detail`
  ADD CONSTRAINT `regist_info_detail_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
