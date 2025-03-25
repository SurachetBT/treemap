-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 12:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treemap`
--

-- --------------------------------------------------------

--
-- Table structure for table `imageshistory`
--

CREATE TABLE `imageshistory` (
  `images_id` int(10) UNSIGNED NOT NULL,
  `tree_id` int(10) UNSIGNED NOT NULL,
  `Image_url_past` varchar(255) DEFAULT NULL,
  `date_image` datetime DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Locations_id` int(10) UNSIGNED NOT NULL,
  `tree_id` int(10) UNSIGNED NOT NULL,
  `Latitude` float(10,6) NOT NULL,
  `Longitude` float(10,6) NOT NULL,
  `Soil_type` varchar(50) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `is_current` tinyint(1) DEFAULT 1,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`Locations_id`, `tree_id`, `Latitude`, `Longitude`, `Soil_type`, `role_id`, `is_current`, `start_date`, `end_date`) VALUES
(1, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-23', '0000-00-00'),
(2, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-23', NULL),
(3, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-24', NULL),
(4, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-24', NULL),
(5, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-24', NULL),
(6, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-25', NULL),
(7, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-25', NULL),
(8, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-23', NULL),
(9, 2, 7.007306, 100.495560, '', 1, 0, '0000-00-00', NULL),
(10, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-23', NULL),
(11, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-17', NULL),
(12, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-17', NULL),
(13, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-23', '2025-03-08'),
(14, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 0, '2025-03-24', NULL),
(15, 2, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-24', NULL),
(16, 1, 7.007306, 100.495560, 'ดินร่วน', 1, 1, '2025-03-16', '2025-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `locationshistory`
--

CREATE TABLE `locationshistory` (
  `Locationshis_id` int(10) UNSIGNED NOT NULL,
  `tree_id` int(10) UNSIGNED NOT NULL,
  `past_Latitude` float(10,6) NOT NULL,
  `Longitude` float(10,6) NOT NULL,
  `past_Longitude` varchar(50) NOT NULL,
  `date_changed_lo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` enum('Admin','employee','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'employee'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `treecare`
--

CREATE TABLE `treecare` (
  `Care_id` int(10) UNSIGNED NOT NULL,
  `tree_id` int(10) UNSIGNED NOT NULL,
  `Care_date` date NOT NULL,
  `Activity` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treemeasurement`
--

CREATE TABLE `treemeasurement` (
  `measurement_id` int(10) UNSIGNED NOT NULL,
  `tree_id` int(10) UNSIGNED NOT NULL,
  `Hight_m` decimal(5,2) NOT NULL,
  `Tree_Cicumference_cm` decimal(5,2) NOT NULL,
  `date_height` date NOT NULL,
  `date_circumference` date NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trees`
--

CREATE TABLE `trees` (
  `tree_id` int(10) UNSIGNED NOT NULL,
  `tree_name` varchar(255) NOT NULL,
  `sci_name` varchar(255) NOT NULL,
  `Family` varchar(255) NOT NULL,
  `Date_Time` date NOT NULL,
  `Hight_m` decimal(5,2) NOT NULL,
  `Tree_Cicumference_cm` decimal(5,2) NOT NULL,
  `Status_Tree` varchar(45) NOT NULL,
  `Update_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `properties` varchar(255) DEFAULT NULL,
  `Image_url_past` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `trees`
--

INSERT INTO `trees` (`tree_id`, `tree_name`, `sci_name`, `Family`, `Date_Time`, `Hight_m`, `Tree_Cicumference_cm`, `Status_Tree`, `Update_Date`, `role_id`, `properties`, `Image_url_past`) VALUES
(1, 'ฟ้าทะลายโจร(Kariyat)', 'Andrographis paniculata (Burm.f.) Wall.ex Nees', 'วงศ์เหงือกปลาหมอ(ACANTHACEAE) ', '2025-03-22', 1.56, 3.23, 'ดีมาก', '2025-03-21 19:26:54', 1, 'เเก้ร้อนใน', '67ddbd7e8b188.jpg'),
(2, 'บัวบก', 'Centella asiatica', 'Apiaceae (วงศ์ผักชี)', '2025-03-22', 1.54, 3.54, 'ดีมาก', '2025-03-21 19:36:42', 1, 'เเก้ร้อนใน', '67ddbfca5a06d.jpg'),
(3, 'มะม่วง', 'Mangifera Indica', ' Anacardiaceae', '2025-03-22', 2.51, 20.30, 'ดีมาก', '2025-03-21 19:42:18', 1, 'ผลมะม่วงดิบมีวิตามินซีสูง แก้เลือดออกตามไรฟัน', '67ddc11a4b676.png'),
(5, 'พลูฉลุ', ' Monstera obliqua (Miq.) Walp. ‘Expilata’', 'Araceae', '2025-03-22', 0.80, 60.00, 'ดีมาก', '2025-03-21 19:56:33', 1, 'สวยงาม', '67ddc471e895b.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) UNSIGNED NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_lastname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `U_phone` varchar(15) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_lastname`, `u_email`, `u_pass`, `U_phone`, `role_id`) VALUES
(1, 'สุรเชษฐ์ ', 'ลิ้มศิริรัศมี', 'gamesurachet2310@gmail.com', '$2y$10$tXlkPGSm9FRfhxNgii6JmO6COKpd8ArUc5oU81NqVbV1w8nFCmbrK', '0801422024', 1),
(2, 'นานา', 'หมูกะทะ', 'nana@gmail.com', '$2y$10$BYW5WjjGPXECbnVx.tXX6u8rQAlHRFX2trCvM.39V1PF.ehpezBOG', '08014654892', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imageshistory`
--
ALTER TABLE `imageshistory`
  ADD PRIMARY KEY (`images_id`),
  ADD KEY `FK_Imageshistory_trees` (`tree_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`Locations_id`),
  ADD KEY `FK_Locations_roles` (`role_id`),
  ADD KEY `FK_Locations_trees` (`tree_id`);

--
-- Indexes for table `locationshistory`
--
ALTER TABLE `locationshistory`
  ADD PRIMARY KEY (`Locationshis_id`),
  ADD KEY `FK_Locationshistory_trees` (`tree_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `treecare`
--
ALTER TABLE `treecare`
  ADD PRIMARY KEY (`Care_id`),
  ADD KEY `FK_TreeCare_roles` (`role_id`),
  ADD KEY `FK_TreeCare_trees` (`tree_id`);

--
-- Indexes for table `treemeasurement`
--
ALTER TABLE `treemeasurement`
  ADD PRIMARY KEY (`measurement_id`),
  ADD KEY `FK_treeMeasurement_roles` (`role_id`),
  ADD KEY `FK_treeMeasurement_trees` (`tree_id`);

--
-- Indexes for table `trees`
--
ALTER TABLE `trees`
  ADD PRIMARY KEY (`tree_id`),
  ADD UNIQUE KEY `tree_name` (`tree_name`),
  ADD UNIQUE KEY `sci_name` (`sci_name`),
  ADD UNIQUE KEY `Family` (`Family`),
  ADD KEY `FK_trees_roles` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_name` (`u_name`),
  ADD UNIQUE KEY `u_lastname` (`u_lastname`),
  ADD UNIQUE KEY `u_pass` (`u_pass`),
  ADD UNIQUE KEY `u_pass_2` (`u_pass`),
  ADD KEY `FK_users_roles` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imageshistory`
--
ALTER TABLE `imageshistory`
  MODIFY `images_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `Locations_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `locationshistory`
--
ALTER TABLE `locationshistory`
  MODIFY `Locationshis_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treecare`
--
ALTER TABLE `treecare`
  MODIFY `Care_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treemeasurement`
--
ALTER TABLE `treemeasurement`
  MODIFY `measurement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trees`
--
ALTER TABLE `trees`
  MODIFY `tree_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imageshistory`
--
ALTER TABLE `imageshistory`
  ADD CONSTRAINT `FK_Imageshistory_trees` FOREIGN KEY (`tree_id`) REFERENCES `trees` (`tree_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `FK_Locations_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Locations_trees` FOREIGN KEY (`tree_id`) REFERENCES `trees` (`tree_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locationshistory`
--
ALTER TABLE `locationshistory`
  ADD CONSTRAINT `FK_Locationshistory_trees` FOREIGN KEY (`tree_id`) REFERENCES `trees` (`tree_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treecare`
--
ALTER TABLE `treecare`
  ADD CONSTRAINT `FK_TreeCare_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TreeCare_trees` FOREIGN KEY (`tree_id`) REFERENCES `trees` (`tree_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treemeasurement`
--
ALTER TABLE `treemeasurement`
  ADD CONSTRAINT `FK_treeMeasurement_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_treeMeasurement_trees` FOREIGN KEY (`tree_id`) REFERENCES `trees` (`tree_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trees`
--
ALTER TABLE `trees`
  ADD CONSTRAINT `FK_trees_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
