-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 12:25 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Admin', '$2y$10$0kzWWLU4cMa3vupZjkjKkOi/vSInWsjAx0g1QW3T3Zg/YH/qmxp9W', '2022-10-20 13:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `adminnotice`
--

CREATE TABLE `adminnotice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminnotice`
--

INSERT INTO `adminnotice` (`id`, `title`, `message`, `created_at`) VALUES
(1, 'Library', 'Hour to learn', '2022-10-22 08:21:52'),
(2, 'Library', 'Hour to learn', '2022-10-22 08:21:59'),
(3, 'Library Hours this semester', 'This semester library hours will be 8:30am to 3:30pm. Students should take notice of these hours and comply accordingly. No student should come when it is not library hours.', '2022-10-22 08:23:07'),
(4, 'Library Hours this semester', 'This semester library hours will be 8:30am to 3:30pm. Students should take notice of these hours and comply accordingly. No student should come when it is not library hours.', '2022-10-22 08:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `form` int(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `programme`, `form`, `stud_id`, `password`, `created_at`) VALUES
(1, 'Igna', 'Tutu', 'tutu@gmail.com', '', 0, 'stud202207', '$2y$10$VeHxToEI0t6YhBIXyn6O3uR1cmRVGcXux1.oJ27YB76St0751K1.O', '2022-10-15 13:56:00'),
(5, 'Ama', 'Beatrice', 'Amabeatrice@gmail.com', '', 0, 'stud202201', '$2y$10$MFkCe1cutb9oKjCPKyr86OsMPdGjnTC8ONNeoSFZOQRtGzlusFraO', '2022-10-21 00:06:40'),
(6, 'Comfort', 'Ahofe', 'Ahofe@gmail', 'Science', 3, 'stud202204', '$2y$10$9AxssyzOcZ4RSewE11GDn.VZmkokjYgKrX9ByGh0mGRTxDWtljAj6', '2022-10-21 23:05:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `adminnotice`
--
ALTER TABLE `adminnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stud_id` (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminnotice`
--
ALTER TABLE `adminnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
