-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 10:28 AM
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
-- Database: `gexton_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `task7`
--

CREATE TABLE `task7` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task7`
--

INSERT INTO `task7` (`id`, `name`, `email`) VALUES
(2, 'Sabahat Zainab', 'sabahatzainab65@gmail.com'),
(3, 'Sabahat Zainab', 'sabahatzainab65@gmail.com'),
(4, 'Sabahat Zainab', 'sabahzmemon@gmail.com'),
(6, 'Konain Memon', 'konainmemon477@gmail.com'),
(7, 'Waryal B Memon', 'waryalbmemon@gmail.com'),
(8, 'Sabahat Zainab', 'sabahzmemon@gmail.com'),
(10, 'Sabahat Zainab', 'sabahatzainab65@gmail.com'),
(17, 'Konain Memon', 'konainmemon477@gmail.com'),
(19, 'Waryal B Memon', 'waryalbmemon@gmail.com'),
(20, 'Sabahat Zainab', 'sabahatzainab65@gmail.com'),
(21, 'Konain Memon', 'konainmemon477@gmail.com'),
(22, 'Waryal B Memon', 'waryalbmemon@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task7`
--
ALTER TABLE `task7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task7`
--
ALTER TABLE `task7`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
