-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 04:42 PM
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
-- Table structure for table `meal_attendance`
--

CREATE TABLE `meal_attendance` (
  `id_meal_attendance` int(11) NOT NULL,
  `id_participant` varchar(50) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `id_meal_type` int(11) NOT NULL,
  `check_in_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meal_type`
--

CREATE TABLE `meal_type` (
  `id_meal_type` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
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
('3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 1, 'hendracodes@gmail.com', 1, '3Fvu6qHKvnhfkbx6tP4ybIWYTJz2.png', '2021-07-15 09:13:07', 0),
('Icsd98LatKcS94gyrPx5NAyvFtz2', 1, 'ybbuserdemo@gmail.com', 0, 'Icsd98LatKcS94gyrPx5NAyvFtz2.png', '2021-07-15 15:30:09', 0),
('ynD3p86rqVc2mOIO83YOpXdWGtX2', 1, 'ybb.admn@gmail.com', 4, 'ynD3p86rqVc2mOIO83YOpXdWGtX2.png', '2021-07-16 16:22:40', 0);

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
  `video_link` varchar(100) NOT NULL,
  `id_participant_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant_details`
--

INSERT INTO `participant_details` (`id_participant`, `photo`, `full_name`, `birthdate`, `gender`, `address`, `nationality`, `occupation`, `field_of_study`, `institution`, `emergency_contact`, `wa_number`, `ig_account`, `tshirt_size`, `disease_history`, `contact_relation`, `is_vegetarian`, `subtheme`, `essay`, `social_projects`, `talents`, `achievements`, `experiences`, `know_program_from`, `source_account_name`, `video_link`, `id_participant_detail`) VALUES
('3Fvu6qHKvnhfkbx6tP4ybIWYTJz2', 'image_picker4208947843771662846.jpg', 'polo', '2000-01-12', 'F', 'hehe', 'Bahamas (BS)', 'popo', 'popo', 'as', '88999', '85555', 'popo', 'L', 'pop', 'popo', 0, 'Public Policy', 'popop', 'pop', 'po', 'pop', 'popo', 'Facebook', 'popo', 'poop', 1),
('0FkIptVWVifKb9sHqhvsWDDVinx2', 'image_picker833877294705401663.jpg', 'hendra', '2000-01-01', 'F', 'sometimes', 'Republic of Congo (CG)', 'sometimes', 'sometimes', 'point', '08854554', '363255', 'please', 'XXL', 'question', 'love', 0, 'Mental Health', 'Selatan, menyediakan tempat isolasi khusus untuk warga terpapar COVID-19. Fasilitas isolasi ODP Center Teluk Gelam ini telah dioperasikan sejak Maret 2020 lalu dan diresmikan langsung SE penggunaannya oleh Bupati OKI, Iskandar.Adapun pasien yang dilayani di wisma karantina ini ialah pasien dengan tanpa gejala atau OTG dan pasien dengan gejala ringan hingga sedang, atau yang tidak memerlukan bantuan pernapasan (oksigen).Iwan pun mengungkap fasilitas isoman ini merupakan inisiatif Bupati OKI, Iskandar, untuk memberikan kenyamanan pada pasien. Sebab, Iskandar menilai jika orang sakit ditempatkan di tempat yang nyaman maka akan dapat membantu proses penyembuhannya.Dokter jaga di fasilitas isolasi terpusat Teluk Gelam, dr Rika Dayanti mengatakan ada beberapa hal yang perlu disiapkan ketika pasien COVID-19 melakukan isolasi. Ia menyebutkan persiapan tersebut antara lain ruangan isolasi yang nyaman, cukup terpapar matahari, ventilasi cukup, dan akses kamar mandi', 'Selatan, menyediakan tempat isolasi khusus untuk warga terpapar COVID-19. Fasilitas isolasi ODP Cent', 'Selatan, menyediakan tempat isolasi khusus untuk warga terpapar COVID-19. Fasilitas isolasi ODP Cent', 'Selatan, menyediakan tempat isolasi khusus untuk warga terpapar COVID-19. Fasilitas isolasi ODP Cent', 'Selatan, menyediakan tempat isolasi khusus untuk warga terpapar COVID-19. Fasilitas isolasi ODP Cent', 'WhatsApp', 'ııhgıvj', 'ıu6ı767ook', 2),
('ynD3p86rqVc2mOIO83YOpXdWGtX2', 'image_picker4205930858170312751.jpg', 'jjohn mayer', '2000-01-10', 'M', 'somewhere', 'Latvia (LV)', 'ulan', 'kadar lütfen', 'güzel', '0849', '08525', 'partininkarizması', 'L', 'şey', 'her', 0, 'Public Policy', 'really', 'she', 'we', 'my', 'how', 'Friends', 'family', 'business', 3);

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
  `id_admin` int(11) NOT NULL DEFAULT 2,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id_payment`, `id_participant`, `id_payment_type`, `bank_name`, `account_name`, `payment_date`, `payment_proof`, `check_status`, `payment_status`, `id_admin`, `amount`) VALUES
(2, '0FkIptVWVifKb9sHqhvsWDDVinx2', 1, 'BRI', 'Hendra', '2021-07-16', 'Player_found_Icon.png', 0, 0, 2, 125000),
(9, 'ynD3p86rqVc2mOIO83YOpXdWGtX2', 1, 'same thing', 'for the', '2021-07-15', 'image_picker10626766285759127.jpg', 0, 1, 2, 125000),
(10, 'ynD3p86rqVc2mOIO83YOpXdWGtX2', 2, 'come over', 'but I have', '2021-07-16', 'image_picker9128702545984890694.jpg', 0, 1, 2, 2250000),
(11, 'ynD3p86rqVc2mOIO83YOpXdWGtX2', 3, 'you are', 'no I', '2021-07-13', 'image_picker7399602237835542327.jpg', 0, 1, 2, 2250000);

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_payment_type` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id_payment_type`, `id_summit`, `description`, `start_date`, `end_date`, `type`) VALUES
(1, 1, 'Registration Fee', '2021-07-14', '2021-07-16', 'regist_fee'),
(2, 1, 'Program Fee Batch 1', '2021-07-16', '2021-07-16', 'program_fee'),
(3, 1, 'Program Fee Batch 2', '2021-07-16', '2021-08-20', 'program_fee');

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
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summit_contents`
--

INSERT INTO `summit_contents` (`id_summit_content`, `id_admin`, `id_summit`, `title`, `description`, `file_path`, `file_type`, `created_date`, `modified_date`, `status`) VALUES
(7, 2, 1, 'IYS Rundown', 'this is a content', 'FRS_SUHENDRA.pdf', 'pdf', '2021-07-16 13:07:27', '2021-07-16 13:07:27', 1),
(8, 2, 1, 'defef', 'this is a pic', 'download_(11).jpg', 'jpg', '2021-07-16 13:08:08', '2021-07-16 13:08:08', 1),
(9, 2, 1, 'ftgtg', 'fefefe', 'TOEFL_SUHENDRA.pdf', 'pdf', '2021-07-17 07:07:36', '2021-07-17 07:07:36', 1),
(10, 2, 1, 'Fully Funded Announcement', 'fgr', 'bukti_persetujuan_bu_yekti.jpg', 'jpg', '2021-07-17 07:08:02', '2021-07-17 07:08:02', 1),
(11, 2, 1, 'vbcbcb', 'ttty', 'bukti_persetujuan_BAK.jpg', 'jpg', '2021-07-17 07:28:52', '2021-07-17 07:28:52', 0),
(12, 2, 1, 'This is a title', 'You can use PHP date() function or DateTime() class to get current Date & Time in PHP. This tutorial will help you to get current date time in PHP.  The provided results based on the timezone settings in the php.ini file. You may need to modify this setting to get date and time in the required timezone. Read this tutorial to set timezone in PHP configuration.', 'Formulir_Verifikasi_Judul_dan_Abstrak_TM_-_SUHENDRA.pdf', 'pdf', '2021-07-17 07:58:41', '2021-07-17 07:58:41', 1),
(13, 2, 1, 'new content', 'something to write', 'no file', 'no type', '2021-07-17 08:58:49', '2021-07-17 08:58:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `summit_days`
--

CREATE TABLE `summit_days` (
  `id_summit_day` int(11) NOT NULL,
  `id_summit` int(11) NOT NULL,
  `day_date` date NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `summit_timelines`
--

CREATE TABLE `summit_timelines` (
  `id_summit` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `timeline` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `id_summit_timeline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summit_timelines`
--

INSERT INTO `summit_timelines` (`id_summit`, `description`, `timeline`, `status`, `id_summit_timeline`) VALUES
(1, 'Registration', 'August 1- 31, 2021', 0, 1),
(1, 'LoA Distibution', 'September 15, 2021', 2, 2);

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
-- Indexes for table `meal_attendance`
--
ALTER TABLE `meal_attendance`
  ADD PRIMARY KEY (`id_meal_attendance`),
  ADD KEY `id_participant` (`id_participant`),
  ADD KEY `id_summit` (`id_summit`),
  ADD KEY `id_meal_type` (`id_meal_type`);

--
-- Indexes for table `meal_type`
--
ALTER TABLE `meal_type`
  ADD PRIMARY KEY (`id_meal_type`);

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
  ADD PRIMARY KEY (`id_participant_detail`),
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
  ADD PRIMARY KEY (`id_payment_type`),
  ADD KEY `id_summit` (`id_summit`);

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
-- Indexes for table `summit_days`
--
ALTER TABLE `summit_days`
  ADD PRIMARY KEY (`id_summit_day`),
  ADD KEY `id_summit` (`id_summit`);

--
-- Indexes for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  ADD PRIMARY KEY (`id_summit_timeline`),
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
-- AUTO_INCREMENT for table `meal_attendance`
--
ALTER TABLE `meal_attendance`
  MODIFY `id_meal_attendance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meal_type`
--
ALTER TABLE `meal_type`
  MODIFY `id_meal_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participant_details`
--
ALTER TABLE `participant_details`
  MODIFY `id_participant_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id_payment_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `summits`
--
ALTER TABLE `summits`
  MODIFY `id_summit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `summit_contents`
--
ALTER TABLE `summit_contents`
  MODIFY `id_summit_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `summit_days`
--
ALTER TABLE `summit_days`
  MODIFY `id_summit_day` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  MODIFY `id_summit_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_id_summit_admin` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `meal_attendance`
--
ALTER TABLE `meal_attendance`
  ADD CONSTRAINT `meal_attendance_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `meal_attendance_ibfk_2` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`),
  ADD CONSTRAINT `meal_attendance_ibfk_3` FOREIGN KEY (`id_meal_type`) REFERENCES `meal_type` (`id_meal_type`);

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
-- Constraints for table `summit_days`
--
ALTER TABLE `summit_days`
  ADD CONSTRAINT `summit_days_ibfk_1` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `summit_timelines`
--
ALTER TABLE `summit_timelines`
  ADD CONSTRAINT `fk_id_summit_timeline` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
