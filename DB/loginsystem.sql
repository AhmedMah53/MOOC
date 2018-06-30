-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 01:17 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsysteme`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `c_id` int(20) UNSIGNED NOT NULL,
  `c_categorie` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_desc` varchar(250) NOT NULL,
  `c_img` varchar(100) NOT NULL,
  `c_vid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) UNSIGNED NOT NULL,
  `user_first` varchar(30) DEFAULT NULL,
  `user_last` varchar(30) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_uid` varchar(30) DEFAULT NULL,
  `user_pwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Ahmed', 'Zahlan', 'ahmed.zahlan.97@gmail.com', '@Zah', '$2y$10$ppd8M/KSIkWLXa1zYeTGWeKZFCTdZ9ia0SML6EupI3VL6GkH6a9NW'),
(2, 'Ahmed', 'Mahroug', 'ahmedmahroug53@gmail.com', '@Mah', '$2y$10$4T5yXM.h9Pb5fi3QZh/O1O3tLhiGR4e17rYlW/k3sGFh.aXjZPNQm'),
(3, 'oualid', 'rghioui', 'oualidrghioui@gmail.com', '@Rgh', '$2y$10$GdIglbYkhaB7pY8wcdui5uNQlw1AayUtimuTgETdWUKkGemepJY4G'),
(5, 'abdeslam', 'amrabbat', 'abdeslam-amrabbat@gmail.com', '@Abdo', '$2y$10$QvDZWKZTQyMPO0Y1cQzepe8ST49ZqGV64H5Knzr5NlHN8bGaON00W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `c_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
