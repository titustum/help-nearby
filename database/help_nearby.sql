-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 07:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_nearby`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `category`, `description`, `phone`, `location`, `latitude`, `longitude`, `logo`, `created_at`) VALUES
(1, 'Watalii Ambulances', 'Medical', 'Emergency medical transport and first aid services', '0721 223 344', 'Nyeri Fire Station, Nyeri Town', -0.4234, 36.9535, 'uploads/logos/images (3).png', '2025-05-20 15:09:31'),
(2, 'St. John Ambulance, Nairobi', 'Medical', '24/7 medical emergency services and transport.', '0721223344', 'Nairobi', -1.2921, 36.8219, '/uploads/logos/st-john.png', '2025-05-20 15:48:19'),
(3, 'City Fire Department, Nairobi', 'Fire', 'Emergency fire response and rescue in Nairobi central.', '0722112233', 'Nairobi CBD', -1.287, 36.8252, '/uploads/logos/nairobi-city-logo.jpg', '2025-05-20 15:48:19'),
(4, 'Kenya Red Cross, Mombasa', 'Medical', 'Medical rescue and blood donation services.', '0700999888', 'Mombasa', -4.0435, 39.6682, '/uploads/logos/red-cross.png', '2025-05-20 15:48:19'),
(5, 'Westlands Police Station', 'Police', 'Community safety and emergency response.', '0712345678', 'Westlands, Nairobi', -1.2648, 36.8051, '/uploads/logos/police-logo.jpeg', '2025-05-20 15:48:19'),
(6, 'Kisumu Fire & Rescue Services', 'Fire', 'Fire emergency and safety rescue operations.', '0733445566', 'Kisumu', -0.0917, 34.7679, '/uploads/logos/kisumu-county-logo.jpeg', '2025-05-20 15:48:19'),
(7, 'Machakos County Ambulance Service', 'Medical', 'County ambulance transport and response.', '0720111222', 'Machakos', -1.5177, 37.2634, '/uploads/logos/machakos-county-logo.jpeg', '2025-05-20 15:48:19'),
(8, 'Thika Road Patrol Unit', 'Police', 'Traffic enforcement and crime emergency response.', '0755332211', 'Thika Road, Nairobi', -1.1741, 36.9584, '/uploads/logos/police-logo.jpeg', '2025-05-20 15:48:19'),
(9, 'Naivasha Disaster Response Team', 'Disaster', 'Natural disaster and flood response unit.', '0700777888', 'Naivasha', -0.7184, 36.431, '/uploads/logos/national-emergency-logo.jpeg', '2025-05-20 15:48:19'),
(10, 'Eldoret Emergency Rescue', 'Accident', 'Vehicle accident rescue and emergency support.', '0733999777', 'Eldoret', 0.5167, 35.2833, '/uploads/logos/rescue-logo.png', '2025-05-20 15:48:19'),
(11, 'Kitui County Fire Station', 'Fire', 'Fire fighting and emergency rescue in Kitui.', '0700123456', 'Kitui', -1.3741, 38.0106, '/uploads/logos/Kitui_County.jpg', '2025-05-20 15:48:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
