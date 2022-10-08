-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 11:35 AM
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
-- Table structure for table `task10_login`
--

CREATE TABLE `task10_login` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `usertype` varchar(250) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task10_login`
--

INSERT INTO `task10_login` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'Saba', 'sabahatzainab65@gmail.com', 'system', 'admin'),
(2, 'waryal', 'waryal@gmail.com', 'goal', 'user'),
(9, '18CS115', '18cs115@students.muet.edu.pk', '@System786', 'admin'),
(10, 'Konain', 'konain@gmail.com', '123', 'user'),
(11, 'baba', 'waryalbmemon@gmail.com', 'baba', 'admin'),
(14, '18CS115', 'saba@gmail.com', '@System786', 'admin'),
(15, '18CS115', '18cs115@edu.pk', '@System786', 'admin'),
(17, '18CS115', 'suha@gmail.com', '@System786', 'admin'),
(18, '18CS115', 'hat@gmail.com', '@System786', 'admin'),
(20, '18CS115', 'ahmed@gmail.com', '@System786', 'user'),
(21, '18CS115', 'aliakbarjamali84@gmail.com', '@System786', 'user'),
(22, '18CS115', 'aniqa@gmail.com', '@System786', 'user'),
(23, 'Zainab', 'zainab@gmail.com', '@System786', 'user'),
(24, 'Sabahat Zainab', 'zainab65@gmail.com', '@System786', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task10_login`
--
ALTER TABLE `task10_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task10_login`
--
ALTER TABLE `task10_login`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
