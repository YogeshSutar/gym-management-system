-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 11:05 AM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `admin_username`, `admin_password`, `date_time`) VALUES
(1, 'YOYOYO', 'YOGESH@()', '2022-11-22 07:24:15'),
(2, 'mahesh', 'mahesh@123123123', '2022-11-22 07:24:15'),
(40, 'asdasdas', 'asfasdasfd', '2022-11-22 07:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `checkoutplane`
--

CREATE TABLE `checkoutplane` (
  `id` int(11) NOT NULL,
  `orderid` int(100) NOT NULL,
  `order_new_id` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `selected_plan` varchar(30) NOT NULL,
  `txn_amount` int(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `duration` varchar(300) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `resettoken` varchar(222) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkoutplane`
--

INSERT INTO `checkoutplane` (`id`, `orderid`, `order_new_id`, `name`, `username`, `selected_plan`, `txn_amount`, `status`, `duration`, `payment_type`, `resettoken`, `datetime`) VALUES
(979, 0, 'ORDS20095202 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-15 21:59:47'),
(980, 0, 'ORDS36080120 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-15 22:07:18'),
(981, 0, 'ORDS17446615 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-15 22:10:35'),
(982, 0, 'ORDS8153380 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-15 22:11:01'),
(983, 0, 'ORDS76168389 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-15 22:19:09'),
(984, 0, 'ORDS70360755 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-15 22:21:22'),
(985, 0, 'OFF86422977', 'Yogesh Hanumant Sutar', 'Yogesh@123', '1 day', 50, 'SUCCESS', '1', 'Offline', '', '2022-12-15 22:28:21'),
(986, 0, 'ORDS74186954 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-15 23:50:34'),
(987, 0, 'ORDS74186954 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-15 23:50:46'),
(988, 0, 'OFF35425136', 'Yogesh Hanumant Sutar', 'Yogesh@123', '1 day', 50, 'SUCCESS', '1', 'Offline', '', '2022-12-15 23:54:33'),
(989, 0, 'ORDS17747880 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 00:32:57'),
(990, 0, 'ORDS29016320 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 00:35:33'),
(991, 0, 'ORDS28491381 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-16 00:37:53'),
(992, 0, 'ORDS97761516 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-16 18:15:45'),
(993, 0, 'ORDS18243624 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-16 18:41:16'),
(994, 0, 'ORDS32698585 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 18:41:44'),
(995, 0, 'ORDS1722253 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 18:44:39'),
(996, 0, 'ORDS58796946 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 18:46:22'),
(997, 0, 'ORDS96202058 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 18:52:54'),
(998, 0, 'ORDS90312725 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-16 18:53:21'),
(999, 0, 'ORDS78890412 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 19:37:40'),
(1000, 0, 'ORDS41745024 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 19:40:25'),
(1001, 0, 'ORDS3963734 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 19:49:55'),
(1002, 0, 'ORDS12870444 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-16 19:52:33'),
(1003, 0, 'ORDS18539137 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 13:01:46'),
(1004, 0, 'ORDS18539137 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 13:02:08'),
(1005, 0, 'ORDS10304771 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 13:12:52'),
(1006, 0, 'ORDS83322713 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 13:26:32'),
(1007, 0, 'ORDS67355691 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 13:56:44'),
(1008, 0, 'ORDS90678361 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 13:57:04'),
(1009, 0, 'ORDS35521833 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 14:05:21'),
(1010, 0, 'ORDS47375411 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 14:07:28'),
(1011, 0, 'ORDS60201661 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 14:48:12'),
(1012, 0, 'ORDS25732062 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-18 14:48:31'),
(1013, 0, 'ORDS27370315 ', 'Yogesh Hanumant sutar', 'Yogesh@123', 'Personal ', 2000, 'TXN_SUCCESS', '20', 'Online', '', '2022-12-18 14:48:54'),
(1014, 0, 'ORDS17482303 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 14:49:12'),
(1015, 0, 'ORDS82647331 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 15:08:35'),
(1016, 0, 'ORDS29055436 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 15:11:33'),
(1017, 0, 'ORDS13304377 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 15:14:23'),
(1018, 0, 'ORDS35310601 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:18:56'),
(1019, 0, 'ORDS85307964 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 18:19:32'),
(1020, 0, 'ORDS81173892 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-18 18:22:11'),
(1021, 0, 'ORDS41174666 ', 'Yogesh Hanumant sutar', 'Yogesh@123', 'Personal ', 2000, 'TXN_SUCCESS', '20', 'Online', '', '2022-12-18 18:22:42'),
(1022, 0, 'ORDS46491857 ', 'Krishna Hanumant Sutar', 'Krishna@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:23:21'),
(1023, 0, 'ORDS15714086 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:26:00'),
(1024, 0, 'ORDS58993870 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:29:30'),
(1025, 0, 'ORDS40160229 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 18:29:49'),
(1026, 0, 'ORDS10926589 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:30:22'),
(1027, 0, 'ORDS4624643 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 18:30:40'),
(1028, 0, 'ORDS67928308 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-18 18:30:58'),
(1029, 0, 'ORDS75770038 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', 'Personal ', 2000, 'TXN_SUCCESS', '20', 'Online', '', '2022-12-18 18:31:18'),
(1030, 0, 'ORDS23223871 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:32:21'),
(1031, 0, 'ORDS68179036 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:36:59'),
(1032, 0, 'ORDS95355706 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 18:37:20'),
(1033, 0, 'ORDS541693 ', 'Krishna Hanumant Sutar', 'Krishna@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 18:40:43'),
(1034, 0, 'ORDS58326837 ', 'Krishna Hanumant Sutar', 'Krishna@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 18:41:02'),
(1035, 0, 'ORDS89896505 ', 'Krishna Hanumant Sutar', 'Krishna@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-18 18:41:22'),
(1036, 0, 'ORDS65212253 ', 'Krishna Hanumant Sutar', 'Krishna@123', 'Personal ', 2000, 'TXN_SUCCESS', '20', 'Online', '', '2022-12-18 18:41:39'),
(1037, 0, 'ORDS94582240 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 19:01:47'),
(1038, 0, 'ORDS52161517 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 19:03:46'),
(1039, 0, 'ORDS68622864 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 19:28:49'),
(1040, 0, 'ORDS48212471 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 19:39:26'),
(1041, 0, 'ORDS75356842 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 19:55:25'),
(1042, 0, 'ORDS54127868 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 19:57:18'),
(1043, 0, 'ORDS61525786 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 20:37:39'),
(1044, 0, 'ORDS3961822 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 20:38:18'),
(1045, 0, 'ORDS3236630 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 20:41:51'),
(1046, 0, 'ORDS52159848 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 20:43:33'),
(1047, 0, 'ORDS90257906 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 20:44:36'),
(1048, 0, 'ORDS9695428 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 Month ', 400, 'TXN_SUCCESS', '3', 'Online', '', '2022-12-18 20:45:46'),
(1049, 0, 'ORDS1306587 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '3 Month ', 1000, 'TXN_SUCCESS', '10', 'Online', '', '2022-12-18 20:46:31'),
(1050, 0, 'ORDS94021953 ', 'Yogesh Hanumant sutar', 'Yogesh@123', ' 3 Month   ', 1000, 'TXN_SUCCESS', ' 90 ', 'Online', '', '2022-12-18 20:53:52'),
(1051, 0, 'OFF35737997', 'mahesh hanumant sutar', 'Mahesh@123', '1 day', 50, 'SUCCESS', '1', 'Offline', '', '2022-12-18 20:59:00'),
(1052, 0, 'ORDS6779986 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 21:08:09'),
(1053, 0, 'ORDS67582989 ', 'Yogesh Hanumant sutar', 'Yogesh@123', ' Personal   ', 2000, 'TXN_SUCCESS', ' 120 ', 'Online', '', '2022-12-18 23:52:14'),
(1054, 0, 'ORDS67582989 ', 'Yogesh Hanumant sutar', 'Yogesh@123', ' Personal   ', 2000, 'TXN_SUCCESS', ' 120 ', 'Online', '', '2022-12-18 23:53:28'),
(1055, 0, 'ORDS35362764 ', 'Yogesh Hanumant sutar', 'Yogesh@123', ' 3 Month   ', 1000, 'TXN_SUCCESS', ' 90 ', 'Online', '', '2022-12-18 23:55:54'),
(1056, 0, 'ORDS35267893 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 23:56:20'),
(1057, 0, 'ORDS77221048 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-18 23:57:13'),
(1058, 0, 'ORDS66654419 ', 'Yogesh Hanumant sutar', 'Yogesh@123', ' 1 Month   ', 400, 'TXN_SUCCESS', ' 30', 'Online', '', '2022-12-19 00:04:17'),
(1059, 0, 'ORDS1260566 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-19 00:04:52'),
(1060, 0, 'ORDS50361538 ', 'Krishna Hanumant Sutar', 'Krishna@123', '5 days ', 200, 'TXN_SUCCESS', '5', 'Online', '', '2022-12-19 00:05:42'),
(1061, 0, 'ORDS67888241 ', 'Mahesh Hanumant Sutar', 'Mahesh@123', ' 1 Month   ', 400, 'TXN_SUCCESS', ' 30', 'Online', '', '2022-12-19 00:11:48'),
(1062, 0, 'ORDS55425091 ', 'yogesh', 'newyogesh@123', ' 3 Month   ', 1000, 'TXN_SUCCESS', ' 90 ', 'Online', '', '2022-12-20 17:07:36'),
(1063, 0, 'ORDS5107800 ', 'mahesh', 'newmahesh@123', ' 3 Month   ', 1000, 'TXN_SUCCESS', ' 90 ', 'Online', '', '2022-12-20 17:08:21'),
(1064, 0, 'ORDS1960290 ', 'krishna', 'newkrishna@123', ' 1 Month   ', 400, 'TXN_SUCCESS', ' 30', 'Online', '', '2022-12-20 17:09:07'),
(1065, 0, 'ORDS91964006 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-20 19:50:08'),
(1066, 0, 'ORDS27118480 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-20 21:20:46'),
(1067, 0, 'ORDS41708486 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-20 21:23:08'),
(1068, 0, 'ORDS76515643 ', 'yogesh', 'newyogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-20 21:30:17'),
(1069, 0, 'ORDS74237092 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-20 21:41:22'),
(1070, 0, 'ORDS21488888 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-20 21:43:01'),
(1071, 0, 'ORDS78422962 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '5 days ', 200, 'TXN_SUCCESS', '5', 'Online', '', '2022-12-21 19:01:23'),
(1072, 0, 'ORDS10214089 ', 'mahesh', 'newmahesh@123', '5 days ', 200, 'TXN_SUCCESS', '5', 'Online', '', '2022-12-21 19:02:53'),
(1073, 0, 'ORDS94104387 ', 'krishna', 'newkrishna@123', '5 days ', 200, 'TXN_SUCCESS', '5', 'Online', '', '2022-12-21 19:03:39'),
(1074, 0, 'ORDS8185285 ', 'Yogesh Hanumant sutar', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1', 'Online', '', '2022-12-21 19:26:48'),
(1075, 0, 'ORDS20023759 ', 'Yogesh Hanumant sutar', 'Yogesh@123', ' 3 Month   ', 1000, '', ' 90 ', 'Online', '', '2023-05-04 21:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `idpass`
--

CREATE TABLE `idpass` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ac_create_data` datetime NOT NULL,
  `resettoken` varchar(222) NOT NULL,
  `resettokenexpire` datetime DEFAULT NULL,
  `sendotp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idpass`
--

INSERT INTO `idpass` (`userID`, `username`, `password`, `name`, `email`, `mobileno`, `gender`, `ac_create_data`, `resettoken`, `resettokenexpire`, `sendotp`) VALUES
(8, 'yogesh', '$2y$10$AcIknovo897djehdeLNEDe4uan.cP9D0R6FCnGzo9nRGooUbGnwOy', 'yogesh', 'yogiall12345@gmail.com', 1234125434, '', '0000-00-00 00:00:00', 'a34c3028a7c3f1bbd3ced8e584b6bc12', '2022-05-23 00:00:00', 200304),
(9, 'Yyy', '$2y$10$rGJlnT1uLeGwOCyazlgDO.Gz0Jd/GY0pNnewZ/asgaXjNLELmRgZy', 'yogeshss', 'yogeshss@gmail.com', 2147483647, '', '0000-00-00 00:00:00', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `planname` varchar(200) NOT NULL,
  `info` varchar(300) NOT NULL,
  `expired_plan_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `username`, `name`, `planname`, `info`, `expired_plan_date`) VALUES
(34, 'Mahesh@123', 'Mahesh Hanumant Sutar', '1 day', 'plan is EXPIRED', '2022-12-18 18:37:46'),
(37, 'Mahesh@123', 'Mahesh Hanumant Sutar', '3 Month', 'plan is EXPIRED', '2022-12-18 18:42:45'),
(38, 'Mahesh@123', 'Mahesh Hanumant Sutar', 'Personal', 'plan is EXPIRED', '2022-12-18 18:51:34'),
(39, 'Yogesh@123', 'Yogesh Hanumant sutar', 'Personal', 'plan is EXPIRED', '2022-12-18 19:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `h` varchar(20) NOT NULL,
  `m` varchar(20) NOT NULL,
  `s` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `plan_name`, `price`, `duration`, `date`, `h`, `m`, `s`) VALUES
(31, ' 1 Month  ', 400, ' 30', NULL, '', '', ''),
(32, ' 3 Month  ', 1000, ' 90 ', NULL, '', '', ''),
(33, ' Personal  ', 2000, ' 120 ', NULL, '', '', ''),
(34, '1 day', 50, '1', NULL, '', '', ''),
(35, '5 days', 200, '5', NULL, '', '', ''),
(47, 'asd', 0, 'asd', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `plan_user`
--

CREATE TABLE `plan_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `end_time` datetime NOT NULL DEFAULT current_timestamp(),
  `status_notification` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_user`
--

INSERT INTO `plan_user` (`id`, `name`, `username`, `plan_name`, `duration`, `date_time`, `end_time`, `status_notification`) VALUES
(885, 'Krishna Hanumant Sutar', 'Krishna@123', '5 days ', '5', '2022-12-19 00:06:12', '2022-12-19 00:11:12', 0),
(886, 'Mahesh Hanumant Sutar', 'Mahesh@123', ' 1 Month   ', ' 30', '2022-12-19 00:12:06', '2022-12-19 00:42:06', 0),
(892, 'yogesh', 'newyogesh@123', '1 day ', '1', '2022-12-20 21:30:39', '2022-12-20 21:31:39', 0),
(896, 'mahesh', 'newmahesh@123', '5 days ', '5', '2022-12-21 19:03:09', '2022-12-21 19:08:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `txn`
--

CREATE TABLE `txn` (
  `orderid` int(11) NOT NULL,
  `ordernewid` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `planname` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `duration` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `txn`
--

INSERT INTO `txn` (`orderid`, `ordernewid`, `username`, `planname`, `amount`, `status`, `duration`) VALUES
(507, 'ORDS67888241 ', 'Mahesh@123', ' 1 Month   ', 400, 'TXN_SUCCESS', ' 30'),
(508, 'ORDS55425091 ', 'newyogesh@123', ' 3 Month   ', 1000, 'TXN_SUCCESS', ' 90 '),
(509, 'ORDS5107800 ', 'newmahesh@123', ' 3 Month   ', 1000, 'TXN_SUCCESS', ' 90 '),
(510, 'ORDS1960290 ', 'newkrishna@123', ' 1 Month   ', 400, 'TXN_SUCCESS', ' 30'),
(511, 'ORDS91964006 ', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(512, 'ORDS27118480 ', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(513, 'ORDS41708486 ', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(514, 'ORDS76515643 ', 'newyogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(515, 'ORDS74237092 ', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(516, 'ORDS21488888 ', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(517, 'ORDS78422962 ', 'Yogesh@123', '5 days ', 200, 'TXN_SUCCESS', '5'),
(518, 'ORDS10214089 ', 'newmahesh@123', '5 days ', 200, 'TXN_SUCCESS', '5'),
(519, 'ORDS94104387 ', 'newkrishna@123', '5 days ', 200, 'TXN_SUCCESS', '5'),
(520, 'ORDS8185285 ', 'Yogesh@123', '1 day ', 50, 'TXN_SUCCESS', '1'),
(521, 'ORDS20023759 ', 'Yogesh@123', ' 3 Month   ', 1000, '', ' 90 ');

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
(184, 'Yogesh Hanumant sutar', 'Yogeshsutar@123', '66666666', 'Yogesh@123', '$2y$10$Nf66ZD1j4ow.PSvfOFjzB.fh5agLByC3s2.Viz5VbIdnDrDIf3K.6', 'Male', '', '2022-12-01 10:15:00', NULL, NULL, 0),
(185, 'Mahesh Hanumant Sutar', 'Mahesh@123', '457891231', 'Mahesh@123', '$2y$10$Lie8Lyu46QUMEFYC/wZAmO6jkgFiq1uZBn2pHtqJw9m6YrOZf8J5G', 'MALE', '', '2022-12-01 10:15:36', NULL, NULL, 0),
(186, 'Krishna Hanumant Sutar', 'Krishna@123', '7894561231', 'Krishna@123', '$2y$10$21JNgLXCZYOUDFEI5JAN7uM8JupzbpbN6LEQvQENMK18jCqIbwtse', '', '', '2022-12-01 10:16:16', NULL, NULL, 0),
(190, 'Yogesh@123asdasd asdasd asdasdasd asdasd', 'Yogesh@123123', '1231231231', 'Yogesh@123123', '$2y$10$q6LIUxMmD3EJZeuKo.YYm.sni1l/JkvYGaGBRZcfX4g64m.2cGH5W', '', '', '2022-12-08 05:39:28', NULL, NULL, 0),
(191, 'yogesh', 'newyogesh@123', '4564564566', 'newyogesh@123', '$2y$10$Oj4ymwhwBjbEZelHh0ZmVOmjnW97gGRsJ.Di4chEIIMTmxZcYU0GS', '', '', '2022-12-20 17:05:22', NULL, NULL, 0),
(192, 'mahesh', 'newmahesh@123', '4567891235', 'newmahesh@123', '$2y$10$dik9DOuMN8MOyhR8OxIw1.EQ.xkx5A.T9HsE2HPNh0mlUN.NH9jUi', '', '', '2022-12-20 17:05:53', NULL, NULL, 0),
(193, 'krishna', 'newkrishna@123', '1325416485', 'newkrishna@123', '$2y$10$yrl6Fb/vc/1wfD0e.0tSPOCUbokWV5HXLos9tymSkDNJjGmjcjOkW', '', '', '2022-12-20 17:06:45', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `checkoutplane`
--
ALTER TABLE `checkoutplane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idpass`
--
ALTER TABLE `idpass`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plan_name` (`plan_name`);

--
-- Indexes for table `plan_user`
--
ALTER TABLE `plan_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `txn`
--
ALTER TABLE `txn`
  ADD PRIMARY KEY (`orderid`);

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
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `checkoutplane`
--
ALTER TABLE `checkoutplane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1076;

--
-- AUTO_INCREMENT for table `idpass`
--
ALTER TABLE `idpass`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `plan_user`
--
ALTER TABLE `plan_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=899;

--
-- AUTO_INCREMENT for table `txn`
--
ALTER TABLE `txn`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
