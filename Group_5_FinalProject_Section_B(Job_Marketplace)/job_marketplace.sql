-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 05:15 PM
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
-- Database: `job_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `resume_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `notification_message` text DEFAULT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `full_name`, `email`, `resume_link`, `created_at`, `updated_at`, `notification_message`, `status`) VALUES
(2, 'Saklain', 'saklain@gmail.com', '../uploads/67798e9b67ce9.docx', '2025-01-04 19:40:11', '2025-01-04 19:40:11', NULL, 'pending'),
(3, 'Kabya Das', 'daskabbo03@gmail.com', '../uploads/6779932f690f0.docx', '2025-01-04 19:59:43', '2025-01-04 19:59:43', NULL, 'pending'),
(4, 'Kabya Das', 'daskabbo03@gmail.com', '../uploads/678c38e552445.docx', '2025-01-18 23:27:33', '2025-01-18 23:27:33', NULL, 'pending'),
(5, 'Kabya Das', 'rr@gmail.com', '../uploads/678f249ae6c27.docx', '2025-01-21 04:37:46', '2025-01-21 04:37:46', NULL, 'pending'),
(6, 'Kabya Das', 'qwe@e.com', '../uploads/678f289b53e15.docx', '2025-01-21 04:54:51', '2025-01-21 04:54:51', NULL, 'pending'),
(7, 'hu', 'yyyu@gmail.com', '../uploads/678f2ffdee4fe.docx', '2025-01-21 05:26:21', '2025-01-21 05:26:21', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company`, `salary`, `status`) VALUES
(1, 'Engineer', 'Adobe Inc.', '340000', 'rejected'),
(2, 'Engineer', 'Microsoft', '500000', 'approved'),
(3, 'Doctor', 'Square', '500000', 'approved'),
(4, '', '', '', 'pending'),
(5, '', '', '', 'pending'),
(6, '', '', '', 'pending'),
(7, '', '', '', 'pending'),
(8, '', '', '', 'pending'),
(9, '', '', '', 'pending'),
(10, '', '', '', 'pending'),
(11, '', '', '', 'pending'),
(12, 'dsfds', 'saadsad', '2323', 'pending'),
(13, 'dasd', '', '', 'pending'),
(14, '44', 'fdfs', '121', 'pending'),
(15, '444', 'rt', '34', 'pending'),
(16, '3', 'w', '5', 'pending'),
(17, '3', 'w', '5', 'pending'),
(18, '9', 'ih', '787', 'pending'),
(19, '9', 'ih', '787', 'pending'),
(20, 'Laravel', 'Microsoft', '12222', 'pending'),
(21, 'Driver', 'Berger', '190000', 'pending'),
(22, 'Amina', 'Jamina', '5000', 'pending'),
(23, '', '', '', 'pending'),
(24, 'salman', 'khan', '1000', 'pending'),
(25, 'hi', 'ok', '89', 'pending'),
(26, 'axxassdd', 'asas', '2121', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `created_at`) VALUES
(1, 'Hi, Kabya', '2025-01-04 14:03:25'),
(2, 'hvdfhjd', '2025-01-19 06:46:33'),
(3, 'hvdfhjdw', '2025-01-19 06:46:42'),
(4, 'saklain', '2025-01-19 06:47:38'),
(5, 'saklain', '2025-01-19 06:47:44'),
(6, 'saklain', '2025-01-19 06:47:50'),
(7, 'iuuyt', '2025-01-19 06:48:31'),
(8, 'iuuyt', '2025-01-19 06:48:38'),
(9, 'stshg', '2025-01-19 06:50:22'),
(10, 'saklain', '2025-01-19 06:58:08'),
(11, 'saklain', '2025-01-19 07:01:17'),
(12, 'tfytyt', '2025-01-19 07:02:43'),
(13, 'gfydrx', '2025-01-19 07:03:00'),
(14, 'fouvtf', '2025-01-19 07:03:34'),
(15, 'fouvtf', '2025-01-19 07:03:36'),
(16, 'fouvtf', '2025-01-19 07:03:37'),
(17, 'fouvtf', '2025-01-19 07:03:37'),
(18, 'fouvtf', '2025-01-19 07:03:39'),
(19, 'fouvtf', '2025-01-19 07:03:40'),
(20, 'fouvtf', '2025-01-19 07:03:40'),
(21, 'fouvtf', '2025-01-19 07:03:40'),
(22, 'fouvtf', '2025-01-19 07:03:42'),
(23, 'fouvtf', '2025-01-19 07:03:42'),
(24, 'fouvtf', '2025-01-19 07:03:42'),
(25, 'fouvtf', '2025-01-19 07:03:43'),
(26, 'fouvtf', '2025-01-19 07:03:43'),
(27, 'fouvtf', '2025-01-19 07:03:44'),
(28, 'fouvtf', '2025-01-19 07:10:24'),
(29, 'ddsfsdf', '2025-01-21 05:04:45'),
(30, 'wow', '2025-01-21 05:05:02'),
(31, 'Hello bro', '2025-01-21 05:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pictures`
--

CREATE TABLE `profile_pictures` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` text NOT NULL,
  `user_type` enum('Employer','Job Seeker','Admin') NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `dob`, `gender`, `address`, `user_type`, `password_hash`, `created_at`) VALUES
(1, 'Kabya Das', 'daskabbo03@gmail.com', '2002-05-17', 'Male', 'Dhaka', 'Job Seeker', '$2y$10$/wNQtJ9NFT3AVrQj0rf9Ge9theV63XzIcJjUUMD7fCR9BPiEsQ34a', '2025-01-18 22:22:40'),
(2, 'Amina Tazin', 'amina@gmail.com', '2021-04-02', 'Female', 'Dhaka', 'Job Seeker', '$2y$10$GY4PhkLU6o7uPSjzR/WRA.pND5vEi5wva34.C3iBQeertQUqwGXSG', '2025-01-19 01:50:35'),
(3, 'saklain', 'saklain@gmail.com', '2025-01-25', 'Male', 'Dhaka', 'Admin', '$2y$10$WO62qC59VhIkS1Rp6ODs6ukSRyI2utCcZ3zuEcWUU8Xm8pjpZlDyG', '2025-01-19 06:45:25'),
(4, 'salman', 'salman@gmail.com', '2025-01-16', 'Male', 'Dhaka', 'Job Seeker', '$2y$10$ZU/5SqXfytx1XeO9PohK0OlD3GhDZZdszENs/mdfLAIznR9t3EIzC', '2025-01-21 04:29:43'),
(5, 'saklain', 'admin@gmail.com', '2025-01-05', 'Male', 'Dhaka', 'Job Seeker', '$2y$10$S7rro9IglYXgBhtarKyc0.hYvuMspE1teOPm/ZiARIH4B8p0A9OHq', '2025-01-21 05:02:37'),
(6, 'Admin', 'admin123@gmail.com', '2025-01-21', 'Male', 'Dhaka', 'Admin', '$2y$10$POSoJ/fu5FEuAvS.6M/y8.QHc1moII9aDQuyEJ0FlzsvSF2dZ4aPW', '2025-01-21 05:04:14'),
(7, 'kabya', 'kabbo@gmail.com', '2025-01-08', 'Male', 'Dhaka', 'Employer', '$2y$10$rQ.M7ezea0CtqRDb46YF7uMUU4x2MGHdmCvHuLiz9gz37ozYBrOLu', '2025-01-21 05:09:47'),
(8, 'Kabya', 'kabya@gmail.com', '2000-03-02', 'Male', 'laxmebazar dhaka', 'Employer', '$2y$10$aJrPfHMQuTJbmPmRE/78m.ri4kx0jpKG31tqYBH3KUQ3X5fipGrYi', '2025-01-21 09:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_pictures`
--
ALTER TABLE `profile_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `profile_pictures`
--
ALTER TABLE `profile_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
