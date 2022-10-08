-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 10:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task2_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `email`, `course`, `phone`, `gender`) VALUES
(1, 'Saaaaaba', 'Zainab', 'sabahatzainab2k17@gm', 'Graphics', 33333, 'female'),
(2, 'Sabahat', 'Zainab', 'sabahatzainab2k17@gm', 'Web', 33333, 'female'),
(3, 'Sarfraz', 'Ahmed', 'aliakbarjamali84@gma', 'Web', 4444, 'male'),
(4, 'Sarfraz', 'Ahmed', 'aliakbarjamali84@gma', 'Web', 4444, 'male'),
(5, 'fff', 'Zainab', 'waryalbmemon@gmail.c', 'Web', 666666666, 'female'),
(6, 'saba', 'Zainab', 'sabahatzainab65@gmai', 'Graphics', 666666, 'female'),
(7, 'baba', 'amm', 'waryalbmemon@gmail.c', 'Java', 444444444, 'female'),
(8, 'baba', 'amm', 'waryalbmemon@gmail.c', 'Java', 444444444, 'female'),
(9, 'Muzamil', 'memon', 'muzamil@gmail.com', 'Graphics', 8888, 'male'),
(10, 'Muzamil', 'memon', 'muzamil@gmail.com', 'Graphics', 8888, 'male'),
(11, 'waryal', 'har', 'waryalbmemon@gmail.c', 'Java', 555555, 'male'),
(12, 'saba', 'har', 'aliakbarjamali84@gma', 'Android', 5555555, 'female'),
(13, 'Sara', 'Dawson', 'sara123@gmail.com', 'Web', 1827716276, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
