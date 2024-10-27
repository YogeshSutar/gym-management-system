-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 01:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `sendotp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `phone`, `username`, `password`, `gender`, `picture`, `created_at`, `resettoken`, `resettokenexpire`, `sendotp`) VALUES
(2, '', '', '', 'yogesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', '', '', '2022-04-15 04:09:48', '5784d0516bac9eca012b6499fe008784', '2022-04-27', 0),
(3, '', '', '', 'mahesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', '', '', '2022-04-17 00:26:54', '5784d0516bac9eca012b6499fe008784', '2022-04-27', 0),
(4, 'yogesh', 'yogesh1@gmail.com', '7894566564', 'yogesh1', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:09:11', NULL, NULL, 0),
(5, 'yogesh', 'yogesh134@gmail.com', '549545916', 'magesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:12:31', NULL, NULL, 0),
(6, 'yogesh', 'y1ogesh@gmail.com', '8494654', 'mahesh1', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:26:56', NULL, NULL, 0),
(7, 'yogesh111', 'yogesh111@gmail.com', '4561234564', 'yogesh111', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:40:48', NULL, NULL, 0),
(8, 'yogesh 123', 'yogesh123@gmail.com', '4567891235', 'yogesh 123', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', 'fund flow statement new     1 (1).pdf', '2022-04-17 07:36:02', 'cf53d8d37791ea9232951749dccc5bde', '2022-04-18', 0),
(9, 'yogiall', 'yogiall@gmail.com', '1234567885', 'yogiall', '$2y$10$Vbeog.MFug7TaJaFuW5qHOQhfjyUOp8Xii5cXbVutRsVnmtdcO9TK', 'Male', '', '2022-04-17 08:52:48', '', '2022-04-18', 0),
(10, 'library', 'library@gmail.com', 'library', 'library', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 11:49:38', 'be5a69fcceaadeeab1ed6135fcc0933b', '2022-04-18', 0),
(13, 'yogesh1234', 'yogesh@gmail.com', '549199', 'yogesh1234', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-23 09:04:13', NULL, NULL, 0),
(15, 'ganesh', 'ganesh@gmail.com', '4567891233', 'ganesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Select Gender', '', '2022-04-23 09:08:13', NULL, NULL, 0),
(16, 'ganesh', 'ganesh123@gmail.com', '123456789', 'ganesh123', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Select Gender', '', '2022-04-26 11:16:10', NULL, NULL, 0),
(17, 'yogiall', 'yogiall12345@gmail.com', '23457996519', 'yogiall10', '$2y$10$R3SPKU9VTDpsIWUS.qMB5.jMA9VnpXy9TaDQU1P8uE0Iios35MsmS', 'Male', '', '2022-04-27 11:34:29', 'b854031d1c81a5e872b71d8e187ec20b', '2022-05-07', 527135),
(18, 'asda', 'asd@gmal.com', '564654611', 'asd', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-27 11:56:25', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
