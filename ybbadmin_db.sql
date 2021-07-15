-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 02:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ybbadmin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `password`, `status`, `id_summit`, `image`) VALUES
(1, 'qoriah', 'dummy', 1, 1, 'default.jpg'),
(2, 'hendra', 'hendra', 1, 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `meal_attendances`
--

CREATE TABLE `meal_attendances` (
  `id_participant` varchar(50) NOT NULL,
  `summit_day` int(11) NOT NULL,
  `check_in_time` datetime NOT NULL,
  `meal_type` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id_participant` varchar(50) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_fully_funded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id_participant`, `id_summit`, `email`, `status`, `qr_code`, `created_date`, `is_fully_funded`) VALUES
('0FkIptVWVifKb9sHqhvsWDDVinx2', 1, 'hendrapolover@gmail.com', 1, '0FkIptVWVifKb9sHqhvsWDDVinx2.png', '2021-07-13 18:35:03', 0),
('3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 1, 'hendracodes@gmail.com', 1, '3Fvu6qHKvnhfkbx6tP4ybIWYTJz2.png', '2021-07-15 09:13:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `participant_details`
--

CREATE TABLE `participant_details` (
  `id_participant` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `field_of_study` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `emergency_contact` varchar(50) NOT NULL,
  `wa_number` varchar(20) NOT NULL,
  `ig_account` varchar(20) NOT NULL,
  `tshirt_size` varchar(5) NOT NULL,
  `disease_history` varchar(100) NOT NULL,
  `contact_relation` varchar(20) NOT NULL,
  `is_vegetarian` int(11) NOT NULL,
  `subtheme` varchar(20) NOT NULL,
  `essay` varchar(1000) NOT NULL,
  `social_projects` varchar(100) NOT NULL,
  `talents` varchar(100) NOT NULL,
  `achievements` varchar(100) NOT NULL,
  `experiences` varchar(100) NOT NULL,
  `know_program_from` varchar(20) NOT NULL,
  `source_account_name` varchar(20) NOT NULL,
  `video_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant_details`
--

INSERT INTO `participant_details` (`id_participant`, `photo`, `full_name`, `birthdate`, `gender`, `address`, `nationality`, `occupation`, `field_of_study`, `institution`, `emergency_contact`, `wa_number`, `ig_account`, `tshirt_size`, `disease_history`, `contact_relation`, `is_vegetarian`, `subtheme`, `essay`, `social_projects`, `talents`, `achievements`, `experiences`, `know_program_from`, `source_account_name`, `video_link`) VALUES
('0FkIptVWVifKb9sHqhvsWDDVinx2', 'image_picker2980659738196630803.jpg', 'hendra', '2000-01-01', 'F', 'sometimes', 'Afghanistan (AF)', 'sometimes', 'sometimes', 'point', '08854554', '363255', 'please', 'XXL', 'question', 'love', 0, 'Mental Health', 'morning', 'no', 'my', 'right', 'zaman', 'WhatsApp', 'ııhgıvj', 'ıu6ı767ook'),
('3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 'image_picker4208947843771662846.jpg', 'polo', '2000-01-12', 'F', 'hehe', 'Bahamas (BS)', 'popo', 'popo', 'as', '88999', '85555', 'popo', 'L', 'pop', 'popo', 0, 'Public Policy', 'popop', 'pop', 'po', 'pop', 'popo', 'Facebook', 'popo', 'poop');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payment` int(11) NOT NULL,
  `id_participant` varchar(50) NOT NULL,
  `id_payment_type` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_proof` varchar(100) NOT NULL,
  `check_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_payment_type` int(11) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `summits`
--

CREATE TABLE `summits` (
  `id_summit` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `regist_fee` int(11) NOT NULL,
  `program_fee` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summits`
--

INSERT INTO `summits` (`id_summit`, `description`, `regist_fee`, `program_fee`, `status`) VALUES
(1, 'The 5th Istanbul Youth Summit (IYS)', 125000, 4500000, 1),
(2, 'Asia Youth Summit (AYS) 2021', 0, 0, 0),
(3, 'Digital Youth Summit (DYS)', 0, 0, 0),
(4, 'Global Youth Ambassador (GYA)', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `summit_contents`
--

CREATE TABLE `summit_contents` (
  `id_summit_content` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summit_contents`
--

INSERT INTO `summit_contents` (`id_summit_content`, `id_admin`, `id_summit`, `description`, `file_path`, `created_date`, `modified_date`, `status`) VALUES
(1, 2, 1, 'vfr', 'FRS SUHENDRA.pdf', '2021-07-14 10:16:17', '2021-07-14 10:16:17', 1),
(2, 2, 1, 'ttgtgtg', '2021-07-13 18_45_50-tryQr (320×320).jpg', '2021-07-14 10:23:26', '2021-07-14 10:23:26', 2),
(3, 1, 1, 'hhehe', 'Player found_Icon.png', '2021-07-14 13:16:56', '2021-07-14 13:16:56', 0),
(4, 1, 1, 'qwertt', 'UII-Facade-11.jpg', '2021-07-14 13:18:34', '2021-07-14 13:18:34', 0),
(5, 1, 1, 'grtuj', 'image_picker4192625658663213975.jpg', '2021-07-14 14:04:15', '2021-07-14 14:04:15', 0),
(6, 1, 1, 'tes', 'image_picker2446118780825124885.jpg', '2021-07-14 14:06:25', '2021-07-14 14:06:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `summit_timelines`
--

CREATE TABLE `summit_timelines` (
  `id_summit` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `timeline` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_id_summit_admin` (`id_summit`);

--
-- Indexes for table `meal_attendances`
--
ALTER TABLE `meal_attendances`
  ADD KEY `fk_participant_meals_id` (`id_participant`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participant`),
  ADD KEY `fk_id_summit_participant` (`id_summit`);

--
-- Indexes for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD KEY `fk_participant_details_id` (`id_participant`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `fk_participant_payment` (`id_participant`),
  ADD KEY `fk_type_payment` (`id_payment_type`),
  ADD KEY `fk_admin_payment` (`id_admin`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id_payment_type`);

--
-- Indexes for table `summits`
--
ALTER TABLE `summits`
  ADD PRIMARY KEY (`id_summit`);

--
-- Indexes for table `summit_contents`
--
ALTER TABLE `summit_contents`
  ADD PRIMARY KEY (`id_summit_content`),
  ADD KEY `fk_admin_summit_content` (`id_admin`),
  ADD KEY `fk_id_summit_content` (`id_summit`);

--
-- Indexes for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  ADD KEY `fk_id_summit_timeline` (`id_summit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `summits`
--
ALTER TABLE `summits`
  MODIFY `id_summit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `summit_contents`
--
ALTER TABLE `summit_contents`
  MODIFY `id_summit_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_id_summit_admin` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `meal_attendances`
--
ALTER TABLE `meal_attendances`
  ADD CONSTRAINT `fk_participant_meals_id` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `meal_attendances_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`);

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `fk_id_summit_participant` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD CONSTRAINT `fk_participant_details_id` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_admin_payment` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `fk_participant_payment` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `fk_type_payment` FOREIGN KEY (`id_payment_type`) REFERENCES `payment_types` (`id_payment_type`);

--
-- Constraints for table `summit_contents`
--
ALTER TABLE `summit_contents`
  ADD CONSTRAINT `fk_admin_summit_content` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `fk_id_summit_content` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  ADD CONSTRAINT `fk_id_summit_timeline` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
