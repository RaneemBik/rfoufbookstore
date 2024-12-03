-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 12:17 PM
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
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(80) NOT NULL,
  `db_name` varchar(80) NOT NULL,
  `db_author` varchar(80) NOT NULL,
  `db_category` varchar(80) NOT NULL,
  `db_about` varchar(300) NOT NULL,
  `db_price` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `db_name`, `db_author`, `db_category`, `db_about`, `db_price`) VALUES
(25, 'Hidden Truth', 'Raneem bikai', 'life style stories', 'talks about adventures in life and how to live properly and the truth of everything behind us', '15.99$'),
(31, 'history of lebanon', 'lina as', 'Action and more', 'this story talks about the history of lebanon during all days and years', '15.99$'),
(32, 'The Killer', 'lina as', 'history', 'this story talks about the history ', '8.00$'),
(33, 'life', 'Raneem', 'life style stories', 'talks about adventures in life and how to live properly', '8.00$');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `int` int(11) NOT NULL,
  `db_email` varchar(70) NOT NULL,
  `db_password` varchar(80) NOT NULL,
  `db_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`int`, `db_email`, `db_password`, `db_name`) VALUES
(1, 'raneemb@gmail.com', '12345678', 'raneem bikai'),
(2, 'halaz@gmail.com', '12345678', 'hala zayour'),
(3, 'raneemb@gmail.com', '12345678', 'raneem bikai'),
(4, 'halaz@gmail.com', '12345678', 'hala zayour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`int`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
