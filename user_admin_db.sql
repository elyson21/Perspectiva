-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 02:26 AM
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
-- Database: `user_admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `barangay`, `username`, `password`) VALUES
(1, 'Sumapang Matanda', 'admin001', '012002');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_place` varchar(255) DEFAULT NULL,
  `event_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_place`, `event_description`) VALUES
(1, 'sample 1', '2024-10-03', 'place', 'desc'),
(2, 'sample 2', '2024-10-07', 'place', 'desc');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `sender_username` varchar(255) NOT NULL,
  `sender_barangay` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `news_id` varchar(100) DEFAULT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_content` text DEFAULT NULL,
  `allow_comments` tinyint(1) DEFAULT NULL,
  `allow_reactions` tinyint(1) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `news_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `barangay`, `news_id`, `news_title`, `news_content`, `allow_comments`, `allow_reactions`, `date`, `news_image`, `created_at`) VALUES
(9, 'barangay1', '002', 'sample 2', 'sample', NULL, NULL, '2024-10-11 17:11:21', 'uploads/nat3-lgu-barangay-hall_2019-09-27_20-33-13.jpg', '2024-10-12 01:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `login_attempts` int(11) DEFAULT 0,
  `account_locked` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `barangay`, `name`, `username`, `password`, `login_attempts`, `account_locked`) VALUES
(1, 'Sumapang Matanda', 'George Elyson De Guzman', 'SMMDeGuzmanGE', '$2y$10$W/jYyDkNQAg6tC3hbjBhOOIeD9GOqgrWRwodxIfh8qt5wUzC8JFgm', 0, 0),
(2, 'Bangkal', 'Sample User', 'user0001', '$2y$10$O97.vT3sSLcTKV79uLZFQ.MdK5.gGrfvfEqCXGGbuI5O/7i4KWriW', 0, 0),
(4, 'Bagna', 'Sample Two', 'user02', '$2y$10$.ofLI0pSYJkYnd.1j6yLsOuMEUbCX1OzNyH3Iw7RWii7gf6i1UgRe', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
