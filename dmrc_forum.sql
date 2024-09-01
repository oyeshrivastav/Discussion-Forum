-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2024 at 06:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmrc_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_text` varchar(255) NOT NULL,
  `discussion_id` int(10) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `discussion_id`, `comment_by`, `comment_time`) VALUES
(43, 'check', 82, '10', '2023-08-17 23:04:57'),
(44, '&lt;script&gt;checking&lt;/script&gt;', 82, '10', '2023-08-17 23:08:38'),
(45, '&lt;script&gt;posting comment&lt;/script&gt;', 83, '10', '2023-08-17 23:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_id` int(10) NOT NULL,
  `Dept_name` varchar(255) NOT NULL,
  `Dept_description` varchar(255) NOT NULL,
  `Dept_img` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_id`, `Dept_name`, `Dept_description`, `Dept_img`, `timestamp`) VALUES
(1, 'IT Department', 'The IT department of the Delhi Metro is responsible for managing and maintaining the information technology infrastructure and systems that support various operations of the Delhi Metro Rail Corporation.', 'IT.jpeg', '2023-08-11 11:47:15'),
(2, 'S&T Department', 'The Signalling and Telecommunication Department of the Delhi Metro plays a critical role in ensuring the safe, efficient, and reliable operation of the metro system. This department is responsible for two key areas: Signalling and Telecommunication.', 'S&T.jpg', '2023-08-11 11:48:36'),
(3, 'RS Department', 'The Rolling Stock Department of the Delhi Metro is responsible for the management, maintenance, and operation of the metro\'s fleet of trains, also known as \"rolling stock.\" Rolling stock refers to the vehicles (trains) that move on the tracks and carry pa', 'RS.jpg', '2023-08-11 11:50:19'),
(4, 'E&M Department', 'The Electrical and Maintenance Department of the Delhi Metro is responsible for managing and maintaining the electrical systems, equipment, and infrastructure of the metro network. This department plays a crucial role in ensuring the safe, reliable, and e', 'E&M.jpg', '2023-08-11 11:51:54'),
(5, 'ATP Department', 'Automatic Train Protection (ATP) is a crucial safety system used in modern rail and metro systems to prevent collisions, enforce safe train separation, and ensure the overall safety of passengers, employees, and infrastructure. ATP systems work by continu', 'ATP.jpg', '2023-08-11 11:52:43'),
(6, 'DCOS Department', 'If \"Deputy Custody of Store\" is a specific role or department within the Delhi Metro, I recommend checking the official website of DMRC or contacting their official communication channels to get accurate and up-to-date information about the role\'s functio', 'DCOS.jpg', '2023-08-11 11:53:23'),
(7, 'PWay Department', 'The Permanent Way Department of the Delhi Metro Rail Corporation (DMRC) is responsible for the maintenance and management of the tracks and related infrastructure that form the permanent way or rail bed of the metro system. ', 'Pway.jpg', '2023-08-11 11:53:59'),
(8, 'AFC Department', ' The AFC system is a crucial component of any modern mass transit system, including metro systems, as it enables efficient and convenient fare collection from passengers.', 'AFC.jpg', '2023-08-11 11:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `Discussion_id` int(10) NOT NULL,
  `Discussion_title` varchar(255) NOT NULL,
  `Discussion_description` varchar(255) NOT NULL,
  `Discussion_dept_id` int(10) NOT NULL,
  `Discussion_user_id` int(10) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`Discussion_id`, `Discussion_title`, `Discussion_description`, `Discussion_dept_id`, `Discussion_user_id`, `timestamp`) VALUES
(78, 'Use the sample text below, or else you can replace it by typing over or pasting in your own block of text', 'A computer program can easily produce gibberish - especially if it has been provided with garbage beforehand. This program does something a little different. It takes a block of text as input and works out the proportion of characters within the text acco', 1, 9, '2023-08-17 22:28:30'),
(82, 'hello', 'yoo', 2, 10, '2023-08-17 23:03:57'),
(83, '&lt;script&gt;hello&lt;/script&gt;', 'checking whether it is working or not', 2, 10, '2023-08-17 23:10:14'),
(84, '&lt;script&gt;checking here&lt;/script&gt;', 'hi i\'m here for checking syntax', 1, 10, '2023-08-17 23:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `Password`, `confirm_password`, `user_img`, `timestamp`) VALUES
(9, 'Ankur kumar', 'ankur1503@gmail.com', '$2y$10$jOv9xLgNnd2SOzk7GRrc9O3.PubEv3/dYl.TtE4bpLzc41qii/F4G', '$2y$10$jOv9xLgNnd2SOzk7GRrc9O3.PubEv3/dYl.TtE4bpLzc41qii/F4G', '', '2023-08-17 22:27:16'),
(10, 'Neha Verma', 'neha3009@gmail.com', '$2y$10$/f7ZfnRoJm1ocCxgLmr7sObOydPiimQ8PcWVZKuFMYVv2JVlLCHkm', '$2y$10$/f7ZfnRoJm1ocCxgLmr7sObOydPiimQ8PcWVZKuFMYVv2JVlLCHkm', '', '2023-08-17 22:29:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`Discussion_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `Discussion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
