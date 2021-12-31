-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 05:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `Id` int(10) NOT NULL,
  `BranchName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IdStore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`Id`, `BranchName`, `IdStore`) VALUES
(31, 'Tầng 1', 9),
(32, 'Tầng 2', 9),
(33, 'Tầng 3', 9),
(34, 'Tầng 4', 9),
(35, 'Sân Vườn', 9);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Id` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdTable` int(11) NOT NULL,
  `IdStore` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Sale` int(3) DEFAULT NULL,
  `Bill_Status` int(1) DEFAULT NULL,
  `Totalprice` int(10) DEFAULT NULL,
  `Note` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Id`, `IdUser`, `IdTable`, `IdStore`, `create_at`, `Sale`, `Bill_Status`, `Totalprice`, `Note`) VALUES
(49, 1, 59, 9, '2019-02-23 23:03:49', NULL, 1, 165000, 'test'),
(50, 1, 55, 9, '2019-03-01 08:51:51', NULL, 1, 100000, ''),
(51, 1, 55, 9, '2019-03-05 02:47:31', NULL, 1, 20000, ''),
(52, 1, 55, 9, '2019-03-07 19:06:11', NULL, 1, 90000, ''),
(53, 1, 67, 9, '2019-08-02 20:10:05', NULL, 1, 80000, ''),
(54, 1, 65, 9, '2019-08-12 19:09:46', NULL, 1, 105000, ''),
(55, 1, 67, 9, '2019-08-25 23:28:45', NULL, 1, 65000, ''),
(56, 1, 70, 9, '2019-09-22 18:54:24', NULL, 0, 80000, ''),
(57, 1, 71, 9, '2019-02-23 23:04:25', NULL, 1, 60000, ''),
(58, 1, 72, 9, '2019-02-23 23:15:12', NULL, 1, 40000, ''),
(59, 1, 55, 9, '2019-02-25 20:19:26', NULL, 1, 85000, ''),
(60, 1, 57, 9, '2019-02-27 05:34:49', NULL, 1, 175000, ''),
(61, 1, 59, 9, '2019-02-27 05:40:58', NULL, 1, 65000, ''),
(62, 1, 59, 9, '2019-02-27 05:45:29', NULL, 1, 40000, ''),
(63, 1, 60, 9, '2019-03-01 06:13:47', NULL, 1, 145000, ''),
(64, 1, 67, 9, '2019-03-01 06:16:46', NULL, 1, 65000, ''),
(66, 1, 71, 9, '2021-12-20 03:15:22', NULL, 1, 65000, NULL),
(67, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 32000, NULL),
(68, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 76000, NULL),
(69, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 86000, NULL),
(70, 1, 55, 9, '2021-12-20 03:17:26', NULL, 1, 93000, NULL),
(71, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(72, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 74000, NULL),
(73, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 76000, NULL),
(74, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 36000, NULL),
(75, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 24000, NULL),
(76, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 34000, NULL),
(77, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 84000, NULL),
(78, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 86000, NULL),
(79, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 86000, NULL),
(80, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 45000, NULL),
(81, 1, 55, 9, '2021-12-20 03:17:26', NULL, 1, 30000, NULL),
(82, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 97000, NULL),
(83, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 26000, NULL),
(84, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 64000, NULL),
(85, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 23000, NULL),
(86, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 63000, NULL),
(87, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 95000, NULL),
(88, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 85000, NULL),
(89, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 15000, NULL),
(90, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 71000, NULL),
(91, 1, 55, 9, '2021-12-20 03:17:26', NULL, 1, 54000, NULL),
(92, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 49000, NULL),
(93, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 65000, NULL),
(94, 1, 55, 9, '2021-12-20 03:17:26', NULL, 1, 58000, NULL),
(95, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 89000, NULL),
(96, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 25000, NULL),
(97, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 15000, NULL),
(98, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 21000, NULL),
(99, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 72000, NULL),
(100, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 48000, NULL),
(101, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 78000, NULL),
(102, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 24000, NULL),
(103, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 100000, NULL),
(104, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 19000, NULL),
(105, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 10000, NULL),
(106, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 14000, NULL),
(107, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 65000, NULL),
(108, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 65000, NULL),
(109, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 89000, NULL),
(110, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 21000, NULL),
(111, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 70000, NULL),
(112, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 86000, NULL),
(113, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 66000, NULL),
(114, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 41000, NULL),
(115, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 53000, NULL),
(116, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 47000, NULL),
(117, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 21000, NULL),
(118, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 66000, NULL),
(119, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 64000, NULL),
(120, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 72000, NULL),
(121, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 13000, NULL),
(122, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 15000, NULL),
(123, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 30000, NULL),
(124, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 66000, NULL),
(125, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 11000, NULL),
(126, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 60000, NULL),
(127, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 55000, NULL),
(128, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 65000, NULL),
(129, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 59000, NULL),
(130, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 45000, NULL),
(131, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(132, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 38000, NULL),
(133, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 19000, NULL),
(134, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 16000, NULL),
(135, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 78000, NULL),
(136, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 94000, NULL),
(137, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 11000, NULL),
(138, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 53000, NULL),
(139, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 65000, NULL),
(140, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 63000, NULL),
(141, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 54000, NULL),
(142, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 33000, NULL),
(143, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 51000, NULL),
(144, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 50000, NULL),
(145, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 36000, NULL),
(146, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 12000, NULL),
(147, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 17000, NULL),
(148, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 63000, NULL),
(149, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 67000, NULL),
(150, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 67000, NULL),
(151, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 72000, NULL),
(152, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 34000, NULL),
(153, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 55000, NULL),
(154, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 17000, NULL),
(155, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 30000, NULL),
(156, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 21000, NULL),
(157, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 99000, NULL),
(158, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 34000, NULL),
(159, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 79000, NULL),
(160, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 16000, NULL),
(161, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 14000, NULL),
(162, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 42000, NULL),
(163, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 66000, NULL),
(164, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 16000, NULL),
(165, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 60000, NULL),
(166, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 97000, NULL),
(167, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 97000, NULL),
(168, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 57000, NULL),
(169, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 54000, NULL),
(170, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 34000, NULL),
(171, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 21000, NULL),
(172, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 12000, NULL),
(173, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 15000, NULL),
(174, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 13000, NULL),
(175, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 53000, NULL),
(176, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 46000, NULL),
(177, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 24000, NULL),
(178, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 57000, NULL),
(179, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 98000, NULL),
(180, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 13000, NULL),
(181, 1, 55, 9, '2021-12-20 03:17:26', NULL, 1, 40000, NULL),
(182, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 35000, NULL),
(183, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 12000, NULL),
(184, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 15000, NULL),
(185, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 11000, NULL),
(186, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 44000, NULL),
(187, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 27000, NULL),
(188, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 11000, NULL),
(189, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 84000, NULL),
(190, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 78000, NULL),
(191, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 24000, NULL),
(192, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 61000, NULL),
(193, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 52000, NULL),
(194, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 18000, NULL),
(195, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(196, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 36000, NULL),
(197, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 73000, NULL),
(198, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 49000, NULL),
(199, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 31000, NULL),
(200, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 61000, NULL),
(201, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 24000, NULL),
(202, 1, 55, 9, '2021-12-20 03:17:26', NULL, 1, 12000, NULL),
(203, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 21000, NULL),
(204, 1, 66, 9, '2021-12-20 03:17:26', NULL, 1, 30000, NULL),
(205, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 41000, NULL),
(206, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 55000, NULL),
(207, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 48000, NULL),
(208, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 41000, NULL),
(209, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 70000, NULL),
(210, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 30000, NULL),
(211, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(212, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 91000, NULL),
(213, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 57000, NULL),
(214, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 56000, NULL),
(215, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(216, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(217, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 92000, NULL),
(218, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 23000, NULL),
(219, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 42000, NULL),
(220, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 90000, NULL),
(221, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 68000, NULL),
(222, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 72000, NULL),
(223, 1, 68, 9, '2021-12-20 03:17:26', NULL, 1, 77000, NULL),
(224, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 60000, NULL),
(225, 1, 71, 9, '2021-12-20 03:17:26', NULL, 1, 13000, NULL),
(226, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 73000, NULL),
(227, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 100000, NULL),
(228, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 55000, NULL),
(229, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 92000, NULL),
(230, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 75000, NULL),
(231, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 16000, NULL),
(232, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 70000, NULL),
(233, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 10000, NULL),
(234, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 56000, NULL),
(235, 1, 62, 9, '2021-12-20 03:17:26', NULL, 1, 44000, NULL),
(236, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 78000, NULL),
(237, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 60000, NULL),
(238, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 76000, NULL),
(239, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 27000, NULL),
(240, 1, 61, 9, '2021-12-20 03:17:26', NULL, 1, 85000, NULL),
(241, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 57000, NULL),
(242, 1, 65, 9, '2021-12-20 03:17:26', NULL, 1, 76000, NULL),
(243, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 98000, NULL),
(244, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 84000, NULL),
(245, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 95000, NULL),
(246, 1, 60, 9, '2021-12-20 03:17:26', NULL, 1, 100000, NULL),
(247, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 33000, NULL),
(248, 1, 59, 9, '2021-12-20 03:17:26', NULL, 1, 19000, NULL),
(249, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 40000, NULL),
(250, 1, 72, 9, '2021-12-20 03:17:26', NULL, 1, 73000, NULL),
(251, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 62000, NULL),
(252, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 11000, NULL),
(253, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 53000, NULL),
(254, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 16000, NULL),
(255, 1, 67, 9, '2021-12-20 03:17:26', NULL, 1, 66000, NULL),
(256, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 61000, NULL),
(257, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 38000, NULL),
(258, 1, 70, 9, '2021-12-20 03:17:26', NULL, 1, 42000, NULL),
(259, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 84000, NULL),
(260, 1, 56, 9, '2021-12-20 03:17:26', NULL, 1, 12000, NULL),
(261, 1, 63, 9, '2021-12-20 03:17:26', NULL, 1, 58000, NULL),
(262, 1, 69, 9, '2021-12-20 03:17:26', NULL, 1, 26000, NULL),
(263, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 98000, NULL),
(264, 1, 57, 9, '2021-12-20 03:17:26', NULL, 1, 20000, NULL),
(265, 1, 58, 9, '2021-12-20 03:17:26', NULL, 1, 63000, NULL),
(266, 1, 64, 9, '2021-12-20 03:17:26', NULL, 1, 42000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `Id` int(11) NOT NULL,
  `IdBill` int(11) NOT NULL,
  `IdMenu` int(11) NOT NULL,
  `Quantity` int(3) DEFAULT NULL,
  `Price` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billdetail`
--

INSERT INTO `billdetail` (`Id`, `IdBill`, `IdMenu`, `Quantity`, `Price`) VALUES
(248, 49, 4, 1, '15000'),
(249, 49, 3, 1, '25000'),
(250, 50, 3, 1, '25000'),
(251, 50, 4, 1, '15000'),
(252, 50, 5, 1, '20000'),
(253, 50, 6, 1, '25000'),
(254, 51, 4, 1, '15000'),
(255, 51, 3, 1, '25000'),
(256, 51, 2, 1, '20000'),
(257, 51, 1, 1, '20000'),
(258, 51, 5, 1, '20000'),
(259, 51, 6, 1, '25000'),
(260, 51, 7, 1, '30000'),
(261, 51, 8, 1, '20000'),
(262, 52, 1, 1, '20000'),
(263, 52, 2, 1, '20000'),
(264, 52, 3, 1, '25000'),
(265, 53, 1, 1, '20000'),
(266, 53, 2, 1, '20000'),
(267, 54, 7, 1, '30000'),
(268, 54, 8, 1, '20000'),
(269, 54, 2, 1, '20000'),
(270, 54, 6, 3, '25000'),
(271, 55, 1, 1, '20000'),
(272, 55, 2, 1, '20000'),
(273, 55, 3, 1, '25000'),
(274, 56, 2, 1, '20000'),
(275, 56, 3, 1, '25000'),
(276, 56, 4, 1, '15000'),
(277, 56, 1, 2, '20000'),
(278, 57, 1, 1, '20000'),
(279, 57, 3, 2, '25000'),
(280, 57, 2, 1, '20000'),
(281, 57, 1, 1, '20000'),
(282, 58, 2, 4, '20000'),
(283, 59, 1, 3, '20000'),
(284, 59, 2, 1, '20000'),
(285, 59, 3, 1, '25000'),
(286, 60, 2, 2, '20000'),
(287, 60, 3, 1, '25000'),
(288, 64, 1, 1, '20000'),
(289, 64, 2, 1, '20000'),
(290, 64, 3, 1, '25000'),
(291, 64, 4, 1, '15000'),
(292, 51, 1, 1, '20000'),
(297, 61, 1, 1, '20000'),
(298, 241, 7, 1, NULL),
(299, 233, 2, 1, NULL),
(300, 242, 4, 1, NULL),
(301, 143, 8, 1, NULL),
(302, 95, 4, 1, NULL),
(303, 106, 8, 1, NULL),
(304, 148, 6, 1, NULL),
(305, 212, 7, 1, NULL),
(306, 136, 5, 1, NULL),
(307, 93, 5, 1, NULL),
(308, 201, 3, 1, NULL),
(309, 147, 7, 1, NULL),
(310, 260, 8, 1, NULL),
(311, 197, 8, 1, NULL),
(312, 180, 1, 1, NULL),
(313, 180, 7, 1, NULL),
(314, 160, 3, 1, NULL),
(315, 99, 8, 1, NULL),
(316, 181, 1, 1, NULL),
(317, 57, 4, 1, NULL),
(318, 263, 7, 1, NULL),
(319, 247, 5, 1, NULL),
(320, 131, 2, 1, NULL),
(321, 117, 5, 1, NULL),
(322, 140, 8, 1, NULL),
(323, 142, 2, 1, NULL),
(324, 206, 5, 1, NULL),
(325, 212, 4, 1, NULL),
(326, 248, 4, 1, NULL),
(327, 60, 8, 1, NULL),
(328, 175, 8, 1, NULL),
(329, 96, 5, 1, NULL),
(330, 144, 6, 1, NULL),
(331, 169, 3, 1, NULL),
(332, 153, 8, 1, NULL),
(333, 189, 7, 1, NULL),
(334, 121, 4, 1, NULL),
(335, 209, 8, 1, NULL),
(336, 217, 1, 1, NULL),
(337, 266, 6, 1, NULL),
(338, 244, 3, 1, NULL),
(339, 165, 8, 1, NULL),
(340, 173, 3, 1, NULL),
(341, 193, 8, 1, NULL),
(342, 266, 4, 1, NULL),
(343, 68, 5, 1, NULL),
(344, 199, 8, 1, NULL),
(345, 175, 6, 1, NULL),
(346, 162, 8, 1, NULL),
(347, 255, 2, 1, NULL),
(348, 158, 6, 1, NULL),
(349, 234, 2, 1, NULL),
(350, 135, 6, 1, NULL),
(351, 256, 5, 1, NULL),
(352, 256, 7, 1, NULL),
(353, 95, 7, 1, NULL),
(354, 112, 1, 1, NULL),
(355, 218, 1, 1, NULL),
(356, 148, 5, 1, NULL),
(357, 244, 8, 1, NULL),
(358, 199, 1, 1, NULL),
(359, 198, 6, 1, NULL),
(360, 59, 1, 1, NULL),
(361, 127, 7, 1, NULL),
(362, 51, 8, 1, NULL),
(363, 265, 3, 1, NULL),
(364, 90, 1, 1, NULL),
(365, 223, 6, 1, NULL),
(366, 188, 8, 1, NULL),
(367, 146, 6, 1, NULL),
(368, 149, 1, 1, NULL),
(369, 220, 6, 1, NULL),
(370, 126, 4, 1, NULL),
(371, 85, 6, 1, NULL),
(372, 162, 3, 1, NULL),
(373, 260, 3, 1, NULL),
(374, 221, 1, 1, NULL),
(375, 50, 2, 1, NULL),
(376, 114, 6, 1, NULL),
(377, 99, 5, 1, NULL),
(378, 75, 4, 1, NULL),
(379, 197, 1, 1, NULL),
(380, 171, 8, 1, NULL),
(381, 175, 4, 1, NULL),
(382, 127, 8, 1, NULL),
(383, 157, 4, 1, NULL),
(384, 217, 5, 1, NULL),
(385, 158, 5, 1, NULL),
(386, 184, 4, 1, NULL),
(387, 167, 2, 1, NULL),
(388, 188, 2, 1, NULL),
(389, 104, 2, 1, NULL),
(390, 50, 7, 1, NULL),
(391, 173, 7, 1, NULL),
(392, 71, 7, 1, NULL),
(393, 263, 5, 1, NULL),
(394, 222, 8, 1, NULL),
(395, 64, 1, 1, NULL),
(396, 102, 3, 1, NULL),
(397, 168, 8, 1, NULL),
(398, 114, 2, 1, NULL),
(399, 236, 3, 1, NULL),
(400, 255, 6, 1, NULL),
(401, 207, 5, 1, NULL),
(402, 96, 6, 1, NULL),
(403, 148, 3, 1, NULL),
(404, 175, 6, 1, NULL),
(405, 219, 1, 1, NULL),
(406, 147, 3, 1, NULL),
(407, 103, 2, 1, NULL),
(408, 49, 6, 1, NULL),
(409, 120, 4, 1, NULL),
(410, 201, 5, 1, NULL),
(411, 115, 8, 1, NULL),
(412, 75, 2, 1, NULL),
(413, 193, 2, 1, NULL),
(414, 243, 5, 1, NULL),
(415, 173, 2, 1, NULL),
(416, 210, 4, 1, NULL),
(417, 104, 5, 1, NULL),
(418, 71, 4, 1, NULL),
(419, 185, 4, 1, NULL),
(420, 85, 2, 1, NULL),
(421, 101, 7, 1, NULL),
(422, 218, 6, 1, NULL),
(423, 227, 3, 1, NULL),
(424, 256, 7, 1, NULL),
(425, 81, 5, 1, NULL),
(426, 146, 1, 1, NULL),
(427, 133, 7, 1, NULL),
(428, 225, 5, 1, NULL),
(429, 174, 1, 1, NULL),
(430, 258, 2, 1, NULL),
(431, 92, 2, 1, NULL),
(432, 220, 2, 1, NULL),
(433, 189, 2, 1, NULL),
(434, 111, 5, 1, NULL),
(435, 158, 8, 1, NULL),
(436, 76, 2, 1, NULL),
(437, 185, 1, 1, NULL),
(438, 94, 5, 1, NULL),
(439, 130, 3, 1, NULL),
(440, 121, 8, 1, NULL),
(442, 236, 5, 1, NULL),
(443, 83, 6, 1, NULL),
(444, 109, 6, 1, NULL),
(445, 198, 8, 1, NULL),
(446, 186, 3, 1, NULL),
(447, 201, 8, 1, NULL),
(448, 175, 5, 1, NULL),
(449, 170, 1, 1, NULL),
(450, 140, 7, 1, NULL),
(451, 129, 1, 1, NULL),
(452, 175, 8, 1, NULL),
(453, 120, 7, 1, NULL),
(454, 199, 6, 1, NULL),
(455, 121, 1, 1, NULL),
(456, 265, 3, 1, NULL),
(457, 153, 1, 1, NULL),
(458, 237, 1, 1, NULL),
(459, 161, 3, 1, NULL),
(460, 191, 5, 1, NULL),
(461, 224, 4, 1, NULL),
(462, 233, 5, 1, NULL),
(463, 140, 6, 1, NULL),
(464, 151, 3, 1, NULL),
(465, 195, 7, 1, NULL),
(466, 245, 1, 1, NULL),
(467, 216, 1, 1, NULL),
(468, 175, 3, 1, NULL),
(469, 256, 4, 1, NULL),
(470, 218, 6, 1, NULL),
(471, 175, 2, 1, NULL),
(472, 66, 4, 1, NULL),
(473, 68, 2, 1, NULL),
(474, 112, 1, 1, NULL),
(475, 219, 5, 1, NULL),
(476, 219, 2, 1, NULL),
(477, 66, 4, 1, NULL),
(478, 256, 4, 1, NULL),
(479, 149, 8, 1, NULL),
(480, 90, 8, 1, NULL),
(481, 136, 8, 1, NULL),
(482, 254, 6, 1, NULL),
(483, 223, 8, 1, NULL),
(484, 256, 7, 1, NULL),
(485, 177, 7, 1, NULL),
(486, 227, 3, 1, NULL),
(487, 95, 6, 1, NULL),
(488, 142, 8, 1, NULL),
(489, 228, 7, 1, NULL),
(490, 121, 8, 1, NULL),
(491, 197, 6, 1, NULL),
(492, 86, 1, 1, NULL),
(493, 101, 8, 1, NULL),
(494, 135, 1, 1, NULL),
(495, 262, 5, 1, NULL),
(496, 220, 8, 1, NULL),
(497, 138, 7, 1, NULL),
(498, 110, 5, 1, NULL),
(499, 131, 4, 1, NULL),
(500, 207, 7, 1, NULL),
(501, 231, 7, 1, NULL),
(502, 245, 1, 1, NULL),
(503, 211, 8, 1, NULL),
(504, 237, 6, 1, NULL),
(505, 194, 7, 1, NULL),
(506, 179, 8, 1, NULL),
(507, 188, 4, 1, NULL),
(508, 227, 4, 1, NULL),
(509, 193, 7, 1, NULL),
(510, 176, 2, 1, NULL),
(511, 251, 2, 1, NULL),
(512, 187, 7, 1, NULL),
(513, 189, 8, 1, NULL),
(514, 239, 8, 1, NULL),
(515, 250, 3, 1, NULL),
(516, 92, 3, 1, NULL),
(517, 96, 8, 1, NULL),
(518, 262, 2, 1, NULL),
(519, 82, 8, 1, NULL),
(520, 233, 6, 1, NULL),
(521, 217, 8, 1, NULL),
(522, 81, 8, 1, NULL),
(523, 100, 3, 1, NULL),
(524, 246, 1, 1, NULL),
(525, 141, 6, 1, NULL),
(526, 256, 1, 1, NULL),
(527, 132, 5, 1, NULL),
(528, 92, 2, 1, NULL),
(529, 98, 7, 1, NULL),
(530, 183, 2, 1, NULL),
(531, 210, 4, 1, NULL),
(532, 170, 1, 1, NULL),
(533, 139, 1, 1, NULL),
(534, 155, 1, 1, NULL),
(535, 191, 8, 1, NULL),
(536, 264, 8, 1, NULL),
(537, 149, 4, 1, NULL),
(538, 171, 4, 1, NULL),
(539, 107, 3, 1, NULL),
(540, 146, 2, 1, NULL),
(541, 145, 7, 1, NULL),
(542, 140, 6, 1, NULL),
(543, 81, 5, 1, NULL),
(544, 184, 5, 1, NULL),
(545, 69, 3, 1, NULL),
(546, 101, 6, 1, NULL),
(547, 84, 8, 1, NULL),
(548, 111, 1, 1, NULL),
(549, 265, 3, 1, NULL),
(550, 102, 8, 1, NULL),
(551, 261, 4, 1, NULL),
(552, 164, 3, 1, NULL),
(553, 240, 5, 1, NULL),
(554, 137, 4, 1, NULL),
(555, 72, 7, 1, NULL),
(556, 135, 4, 1, NULL),
(557, 69, 6, 1, NULL),
(558, 77, 1, 1, NULL),
(559, 174, 8, 1, NULL),
(560, 182, 7, 1, NULL),
(561, 249, 4, 1, NULL),
(562, 184, 4, 1, NULL),
(563, 208, 3, 1, NULL),
(564, 224, 5, 1, NULL),
(565, 232, 1, 1, NULL),
(566, 219, 6, 1, NULL),
(567, 74, 1, 1, NULL),
(568, 222, 3, 1, NULL),
(569, 262, 6, 1, NULL),
(570, 171, 1, 1, NULL),
(571, 132, 2, 1, NULL),
(572, 103, 5, 1, NULL),
(573, 232, 4, 1, NULL),
(574, 171, 4, 1, NULL),
(575, 174, 4, 1, NULL),
(576, 263, 6, 1, NULL),
(577, 89, 2, 1, NULL),
(578, 227, 8, 1, NULL),
(579, 116, 2, 1, NULL),
(580, 259, 5, 1, NULL),
(581, 179, 1, 1, NULL),
(582, 244, 6, 1, NULL),
(583, 128, 2, 1, NULL),
(584, 229, 3, 1, NULL),
(585, 226, 3, 1, NULL),
(586, 87, 8, 1, NULL),
(587, 194, 5, 1, NULL),
(588, 140, 3, 1, NULL),
(589, 221, 2, 1, NULL),
(590, 256, 5, 1, NULL),
(591, 241, 4, 1, NULL),
(592, 206, 4, 1, NULL),
(593, 79, 5, 1, NULL),
(594, 201, 8, 1, NULL),
(595, 129, 5, 1, NULL),
(596, 164, 5, 1, NULL),
(597, 202, 1, 1, NULL),
(598, 66, 8, 1, NULL),
(599, 174, 3, 1, NULL),
(600, 110, 2, 1, NULL),
(601, 214, 5, 1, NULL),
(602, 174, 5, 1, NULL),
(603, 197, 5, 1, NULL),
(604, 103, 6, 1, NULL),
(605, 83, 7, 1, NULL),
(606, 85, 5, 1, NULL),
(607, 182, 3, 1, NULL),
(608, 119, 3, 1, NULL),
(609, 127, 3, 1, NULL),
(610, 127, 1, 1, NULL),
(611, 73, 2, 1, NULL),
(612, 146, 1, 1, NULL),
(613, 198, 2, 1, NULL),
(614, 91, 5, 1, NULL),
(615, 225, 1, 1, NULL),
(616, 74, 8, 1, NULL),
(617, 208, 8, 1, NULL),
(618, 130, 3, 1, NULL),
(619, 198, 6, 1, NULL),
(620, 220, 6, 1, NULL),
(621, 210, 1, 1, NULL),
(622, 98, 3, 1, NULL),
(623, 101, 3, 1, NULL),
(624, 136, 4, 1, NULL),
(625, 68, 1, 1, NULL),
(626, 197, 7, 1, NULL),
(627, 207, 8, 1, NULL),
(628, 131, 2, 1, NULL),
(629, 208, 3, 1, NULL),
(630, 174, 8, 1, NULL),
(631, 166, 4, 1, NULL),
(632, 108, 3, 1, NULL),
(633, 102, 8, 1, NULL),
(634, 219, 6, 1, NULL),
(635, 182, 4, 1, NULL),
(636, 236, 4, 1, NULL),
(637, 96, 2, 1, NULL),
(638, 97, 4, 1, NULL),
(639, 119, 1, 1, NULL),
(640, 169, 1, 1, NULL),
(641, 78, 7, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(10) NOT NULL,
  `CateName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ParentId` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `CateName`, `ParentId`) VALUES
(5, 'Đồ Ăn', NULL),
(6, 'Nước Uống', NULL),
(7, 'Bia', NULL),
(8, 'Thuốc Lá', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `Id` int(11) NOT NULL,
  `NameMenu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) DEFAULT NULL,
  `Images` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Unit` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Idcate` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`Id`, `NameMenu`, `Price`, `Images`, `Unit`, `Idcate`) VALUES
(1, 'Coffe Sữa', 20000, 'caffesuada.jpg', 'Ly', 6),
(2, 'Coffe Sữa Sài Gòn', 20000, 'caffesuanong.jpg', 'Ly', 6),
(3, 'Nước ép cà rốt', 25000, 'nuocepcarot.jpg', 'Ly', 6),
(4, 'Bò Húc', 15000, 'bohuc.jpg', 'Lon', 6),
(5, 'Nước cam ép', 20000, 'nuoccamep.jpg', 'Ly', 6),
(6, 'Thuốc Ngựa', 25000, 'marlborored.jpg', 'Gói', 8),
(7, 'Bánh Cookies ', 30000, 'banhcookies.jpg', 'Đĩa', 5),
(8, 'Bánh flan', 20000, 'banhflan.jpg', 'Cái', 5),
(9, 'Nước xaclxrlsux ', 44000, ' nuoccamep.jpg ', ' Ly', 6),
(10, 'Nước epannenvql ', 39000, ' nuocchanhday.jpg ', ' Ly', 6),
(11, 'Nước akxawsrmaw ', 38000, ' nuocchanhday.jpg ', ' Ly', 6),
(12, 'Nước qtdraqlaui ', 44000, ' nuoccamep.jpg ', ' Ly', 6),
(13, 'Nước bgsrhsriiy ', 38000, ' nuocepcarot.jpg ', ' Ly', 6),
(14, 'Nước eutwognerf ', 48000, ' bohuc.jpg ', ' Ly', 6),
(15, 'Bánh lidoyvvcob ', 43000, ' banhcookies.jpg ', ' Cá', 6),
(16, 'Bánh xhfthnxrey ', 44000, ' banhcookies.jpg ', ' Cá', 6),
(17, 'Bánh kwbndjzjdh ', 46000, ' banhflan.jpg ', ' Cá', 6),
(18, 'Bánh hbxjvcdcsc ', 32000, ' banhcookies.jpg ', ' Cá', 6),
(19, 'Bánh eiyfayulcg ', 46000, ' banhflan.jpg ', ' Cá', 6);

-- --------------------------------------------------------

--
-- Table structure for table `payslips`
--

CREATE TABLE `payslips` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `IdStore` int(10) NOT NULL,
  `DatePay` date DEFAULT NULL,
  `Note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Format` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Totalprice` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payslips`
--

INSERT INTO `payslips` (`Id`, `UserId`, `IdStore`, `DatePay`, `Note`, `Format`, `Image`, `Totalprice`) VALUES
(2, 1, 9, '2019-02-16', 'Tiền xăng xe', NULL, '', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `NameProduct` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Unit` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Images` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CostPrice` int(10) DEFAULT NULL,
  `SallingPrice` int(10) DEFAULT NULL,
  `IdSupplier` int(11) NOT NULL,
  `Idcate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `NameProduct`, `Quantity`, `Unit`, `Images`, `CostPrice`, `SallingPrice`, `IdSupplier`, `Idcate`) VALUES
(3, 'Cafe Bột', 500, 'g', NULL, 50000, NULL, 0, 6),
(4, 'Đường Trắng', 10, 'kg', NULL, 9000, NULL, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `receiptdetail`
--

CREATE TABLE `receiptdetail` (
  `Id` int(11) NOT NULL,
  `Idreceipt` int(11) NOT NULL,
  `IdProduct` int(11) NOT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Unit` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `Id` int(10) NOT NULL,
  `UserId` int(11) NOT NULL,
  `IdStore` int(10) NOT NULL,
  `Totalprice` int(11) DEFAULT NULL,
  `Note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Format` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`Id`, `UserId`, `IdStore`, `Totalprice`, `Note`, `Image`, `Date`, `Format`) VALUES
(2, 1, 9, 1000000, 'Tiền khách bo', NULL, '2019-02-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storereceipts`
--

CREATE TABLE `storereceipts` (
  `Id` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdStore` int(11) NOT NULL,
  `Idsupplier` int(11) NOT NULL,
  `Dateinput` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Paymentmethod` int(1) DEFAULT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Totalprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `Id` int(10) NOT NULL,
  `StoreName` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`Id`, `StoreName`) VALUES
(9, 'Hội An');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `Id` int(11) NOT NULL,
  `Namesupplier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Debit` int(10) DEFAULT NULL,
  `Avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Id`, `Namesupplier`, `Email`, `Phone`, `Address`, `Note`, `Debit`, `Avatar`) VALUES
(0, 'Hoàng Trường An', 'hta.1795@gmail.com', 935421855, '124 Trần Nhân Tông', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `Id` int(11) NOT NULL,
  `TableName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(1) NOT NULL,
  `IdArea` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`Id`, `TableName`, `Status`, `IdArea`) VALUES
(55, 'Bàn 1', 1, 31),
(56, 'Bàn 2', 0, 31),
(57, 'Bàn 3', 0, 31),
(58, 'Bàn 4', 0, 31),
(59, 'Bàn 5', 0, 31),
(60, 'Bàn 6', 0, 31),
(61, 'Bàn 7', 0, 32),
(62, 'Bàn 8', 0, 32),
(63, 'Bàn 9', 0, 32),
(64, 'Bàn 10', 0, 32),
(65, 'Bàn 11', 0, 32),
(66, 'Bàn 12', 0, 32),
(67, 'Bàn 13', 0, 33),
(68, 'Bàn 14', 0, 33),
(69, 'Bàn 15', 0, 33),
(70, 'Bàn 16', 0, 34),
(71, 'Bàn VIP', 0, 35),
(72, 'Bàn VIP 2', 0, 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthday` date NOT NULL,
  `Pass` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(10) DEFAULT NULL,
  `IdStore` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Email`, `Address`, `Phone`, `Avatar`, `Birthday`, `Pass`, `level`, `IdStore`) VALUES
(1, 'TrongNhan', 'admin@gmail.com', NULL, 387476706, NULL, '2011-12-15', '12345', 1, 1),
(3, 'trongnhan', 'Nhan@gmail,com', 'c', 123, 'null', '0000-00-00', '123', 0, 9),
(4, 'admin', 'nhanphan@gmail.com', 'c', 123, 'null', '0000-00-00', '123', 0, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdStore` (`IdStore`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `IdTable` (`IdTable`),
  ADD KEY `IdStore` (`IdStore`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdBill` (`IdBill`),
  ADD KEY `IdMenu` (`IdMenu`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Idcate` (`Idcate`);

--
-- Indexes for table `payslips`
--
ALTER TABLE `payslips`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `IdStore` (`IdStore`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdSupplier` (`IdSupplier`),
  ADD KEY `Idcate` (`Idcate`);

--
-- Indexes for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Idreceipt` (`Idreceipt`),
  ADD KEY `IdProduct` (`IdProduct`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `IdStore` (`IdStore`);

--
-- Indexes for table `storereceipts`
--
ALTER TABLE `storereceipts`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `IdStore` (`IdStore`),
  ADD KEY `Idsupplier` (`Idsupplier`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdArea` (`IdArea`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdStore` (`IdStore`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payslips`
--
ALTER TABLE `payslips`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`IdStore`) REFERENCES `stores` (`Id`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`IdTable`) REFERENCES `tables` (`Id`),
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`IdStore`) REFERENCES `stores` (`Id`);

--
-- Constraints for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_ibfk_1` FOREIGN KEY (`IdBill`) REFERENCES `bill` (`Id`),
  ADD CONSTRAINT `billdetail_ibfk_2` FOREIGN KEY (`IdMenu`) REFERENCES `menus` (`Id`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`Idcate`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `payslips`
--
ALTER TABLE `payslips`
  ADD CONSTRAINT `payslips_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `payslips_ibfk_2` FOREIGN KEY (`IdStore`) REFERENCES `stores` (`Id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`IdSupplier`) REFERENCES `suppliers` (`Id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`Idcate`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
  ADD CONSTRAINT `receiptdetail_ibfk_1` FOREIGN KEY (`Idreceipt`) REFERENCES `storereceipts` (`Id`),
  ADD CONSTRAINT `receiptdetail_ibfk_2` FOREIGN KEY (`IdProduct`) REFERENCES `products` (`Id`);

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `receipts_ibfk_2` FOREIGN KEY (`IdStore`) REFERENCES `stores` (`Id`);

--
-- Constraints for table `storereceipts`
--
ALTER TABLE `storereceipts`
  ADD CONSTRAINT `storereceipts_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `storereceipts_ibfk_2` FOREIGN KEY (`IdStore`) REFERENCES `stores` (`Id`),
  ADD CONSTRAINT `storereceipts_ibfk_3` FOREIGN KEY (`Idsupplier`) REFERENCES `suppliers` (`Id`);

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_ibfk_1` FOREIGN KEY (`IdArea`) REFERENCES `areas` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
