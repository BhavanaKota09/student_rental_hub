-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 05:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `problem` text NOT NULL,
  `account_number` bigint(16) NOT NULL,
  `edate` date DEFAULT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `owner`, `user_id`, `problem`, `account_number`, `edate`, `etime`) VALUES
(10, 5, 6, 'Fever', 22393934499438, '2021-04-23', '06:18:00'),
(11, 5, 6, 'Back Pain', 12345786906, '2021-04-26', '15:32:00'),
(12, 7, 8, 'Fever', 347638473945, '2021-04-26', '04:05:00'),
(13, 5, 8, 'skin', 3483948349, '2021-04-30', '10:06:00'),
(14, 5, 8, 'eyes pain', 634782394782394, '2021-04-28', '10:15:00'),
(15, 7, 9, 'Back Pain', 23872832837129, '2021-04-29', '09:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`) VALUES
(1, 'Owner'),
(2, 'admin'),
(3, 'students');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role_id`, `address`) VALUES
(3, 'priya', 'priya@gmail.com', 'test', '', 2, '1234675803030'),
(5, 'Seema', 'seema@gmail.com', 'seema@123', '9877694853', 1, 'xyz city, banglore'),
(6, 'Divya', 'divya@gmail.com', 'divya@123', '8567097560', 3, 'abc city, india'),
(7, 'Vasu', 'vasu@gmail.com', 'vasu@123', '9875674045', 1, 'xyz city, india'),
(8, 'Sai', 'sai@gmail.com', 'sai@123', '9875400657', 3, 'test city, India'),
(9, 'Karan', 'karan@gmail.com', 'karan@123', '8768490304', 3, 'model town, india'),
(10, 'Dewanshu', 'dewanshu@gmail.com', 'd@123', '8756923023', 1, 'Model town, india');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
