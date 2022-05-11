-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 05:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecho`
--

-- --------------------------------------------------------

--
-- Table structure for table `anti`
--

CREATE TABLE `anti` (
  `user282200123` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `password282200123` varchar(100) COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `anti`
--

INSERT INTO `anti` (`user282200123`, `password282200123`) VALUES
('Dev@Scimail.com', '$2y$10$kdq8q13pElqQNsZm3Ujoxuldk9jhslRjIaAxa1c4vTsFZGfJ6tRzq');

-- --------------------------------------------------------

--
-- Table structure for table `bookcount`
--

CREATE TABLE `bookcount` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `count` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `bookcount`
--

INSERT INTO `bookcount` (`id`, `count`, `date`) VALUES
(1, '0', '2022-03-22 17:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `mail` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `phone` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `issue` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `location` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `slip_code` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `phone` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `message` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `c_count`
--

CREATE TABLE `c_count` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `count` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `c_count`
--

INSERT INTO `c_count` (`id`, `count`, `date`) VALUES
(1, '0', '2022-03-22 23:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `hashed_cuppon`
--

CREATE TABLE `hashed_cuppon` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `post_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `cuppon` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `textbox` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id`, `img1`, `name`, `textbox`, `date`) VALUES
(0, '@Space-package16473514731361899694.jpg', 'heloni cane', 'Burn with desire There are countless people who go to the pitch every day to play football\r\nSome do it for fun, others do it part-time, and others full time\r\nIf you\'ve decided to take football as your career, you should have a burning desire ', '2022-03-15 13:37:53'),
(0, '@Space-package16473515681325493146.jpg', 'kou huu', 'Burn with desire There are countless people who go to the pitch every day to play football\r\nSome do it for fun, others do it part-time, and others full time\r\nIf you\'ve decided to take football as your career, you should have a burning desire to succeed as a professional playerthousand hours\r\nIt may sound like a far-fetched rule, but it works\r\nThe basis of it in', '2022-03-15 13:39:28'),
(0, '@Space-package16473516081264337114.jpg', 'white molo', 'Burn with desire There are countless people who go to the pitch every day to play football\r\nSome do it for fun, others do it part-time, and others full time\r\nIf you\'ve decided to take football as your career, you should have a burning desire to succeed as a professional player', '2022-03-15 13:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `sms_adm`
--

CREATE TABLE `sms_adm` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `too` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `message` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sms_notf`
--

CREATE TABLE `sms_notf` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `count` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `sms_notf`
--

INSERT INTO `sms_notf` (`id`, `count`, `date`) VALUES
(0, '0', '2022-03-22 23:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `sms_user`
--

CREATE TABLE `sms_user` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `sms_user`
--

INSERT INTO `sms_user` (`id`, `user_ip`, `date`) VALUES
(1, 'adefsdasasda', '2022-03-11 02:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `soci`
--

CREATE TABLE `soci` (
  `wat` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `fb` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `inst` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `Phone` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `TWEETER` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `linke` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `adress` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `soci`
--

INSERT INTO `soci` (`wat`, `fb`, `inst`, `Phone`, `TWEETER`, `linke`, `email`, `adress`, `date`) VALUES
('http://localhost/topKonect%20v0.3/_.php?id=21', 'http://localhost/topKonect%20v0.3/_.php?id=21', 'http://localhost/topKonect%20v0.3/_.php?id=21', '08169743963', 'http://localhost/topKonect%20v0.3/_.php?id=21', 'http://localhost/topKonect%20v0.3/_.php?id=21', 'Sanashaikh@Gmail.Com', 'Mumbai, India - 400104\n\nMumbai, India - 400104', '2022-02-09 11:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `post_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `user_ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_dural_282200123`
--

CREATE TABLE `user_dural_282200123` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `lname` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pass` varchar(10000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `user_dural_282200123`
--

INSERT INTO `user_dural_282200123` (`id`, `fname`, `lname`, `email`, `pass`, `date`) VALUES
(46, 'durallite', 'ademola', 'durallite@gmail.com', '$2y$10$dQnQ.BYPDJ6d8WNI3tK0k.N6cQ7igEmOkJk4xJscJT8tAzmSHud7q', '2021-11-23 20:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`) VALUES
(1, 'DESKTOP-DDR1HLM', '2021-11-14 12:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `webd`
--

CREATE TABLE `webd` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `img2` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `webname` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `webd`
--

INSERT INTO `webd` (`id`, `img1`, `img2`, `webname`, `date`) VALUES
(1, '@Space-package16459578031606661360.jpg', '@Space-package16459578031288309079.png', 'MyMecho', '2022-02-27 10:30:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcount`
--
ALTER TABLE `bookcount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_count`
--
ALTER TABLE `c_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashed_cuppon`
--
ALTER TABLE `hashed_cuppon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_adm`
--
ALTER TABLE `sms_adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_user`
--
ALTER TABLE `sms_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcount`
--
ALTER TABLE `bookcount`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_count`
--
ALTER TABLE `c_count`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_adm`
--
ALTER TABLE `sms_adm`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_user`
--
ALTER TABLE `sms_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
