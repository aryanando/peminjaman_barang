-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 03:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `type` int(4) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `deskripsi` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `type`, `foto`, `deskripsi`) VALUES
(1, 'NB 001', 1, 'laptop2.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(2, 'NB 002', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(3, 'NB 003', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(4, 'NB 004', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(5, 'NB 005', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(6, 'NB 006', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(7, 'NB 007', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(8, 'NB 008', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(9, 'NB 009', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(10, 'NB 010', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(11, 'NB 011', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(12, 'NB 012', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(13, 'NB 013', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(14, 'NB 014', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(15, 'NB 015', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(16, 'NB 016', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(17, 'NB 017', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(18, 'NB 018', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(19, 'NB 019', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(20, 'NB 020', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(21, 'NB 021', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(22, 'NB 022', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(23, 'NB 023', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(24, 'NB 024', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(25, 'NB 025', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(26, 'NB 026', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(27, 'NB 027', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(28, 'NB 028', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(29, 'NB 029', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(30, 'NB 030', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(31, 'NB 031', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(32, 'NB 032', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(33, 'NB 033', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(34, 'NB 034', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(35, 'NB 035', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(36, 'NB 036', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(37, 'NB 037', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(38, 'NB 038', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(39, 'NB 039', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(40, 'NB 040', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(41, 'NB 041', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(42, 'NB 042', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(43, 'NB 043', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(44, 'NB 044', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(45, 'NB 045', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(46, 'NB 046', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(47, 'NB 047', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(48, 'NB 048', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(49, 'NB 049', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(50, 'NB 050', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(51, 'NB 051', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(52, 'NB 052', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(53, 'NB 053', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(54, 'NB 054', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(55, 'NB 055', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(56, 'NB 056', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(57, 'NB 057', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(58, 'NB 058', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(59, 'NB 059', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(60, 'NB 060', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(61, 'NB 061', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(62, 'NB 062', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(63, 'NB 063', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(64, 'NB 064', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(65, 'NB 065', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(66, 'NB 066', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(67, 'NB 067', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(68, 'NB 068', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(69, 'NB 069', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(70, 'NB 070', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(71, 'NB 071', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(72, 'NB 072', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(73, 'NB 073', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(74, 'NB 074', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(75, 'NB 075', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(76, 'NB 076', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(77, 'NB 077', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(78, 'NB 078', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(79, 'NB 079', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(80, 'NB 080', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(81, 'NB 081', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(82, 'NB 082', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(83, 'NB 083', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(84, 'NB 084', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(85, 'NB 085', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(86, 'NB 086', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(87, 'NB 087', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(88, 'NB 088', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(89, 'NB 089', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(90, 'NB 090', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(91, 'NB 091', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(92, 'NB 092', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(93, 'NB 093', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(94, 'NB 094', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(95, 'NB 095', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(96, 'NB 096', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(97, 'NB 097', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(98, 'NB 098', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(99, 'NB 099', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(100, 'NB 100', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(101, 'NB 101', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(102, 'NB 102', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(103, 'NB 103', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(104, 'NB 104', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(105, 'NB 105', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(106, 'NB 106', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(107, 'NB 107', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(108, 'NB 108', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(109, 'NB 109', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(110, 'NB 110', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(111, 'NB 111', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(112, 'NB 112', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(113, 'NB 113', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(114, 'NB 114', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(115, 'NB 115', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(116, 'NB 116', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(117, 'NB 117', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(118, 'NB 118', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(119, 'NB 119', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(120, 'NB 120', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(121, 'NB 121', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(122, 'NB 122', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(123, 'NB 123', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(124, 'NB 124', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(125, 'NB 125', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(126, 'NB 126', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(127, 'NB 127', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(128, 'NB 128', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(129, 'NB 129', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(130, 'NB 130', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(131, 'NB 131', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(132, 'NB 132', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(133, 'NB 133', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(134, 'NB 134', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(135, 'NB 135', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(136, 'NB 136', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(137, 'NB 137', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(138, 'NB 138', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(139, 'NB 139', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(140, 'NB 140', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(141, 'NB 141', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(142, 'NB 142', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(143, 'NB 143', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(144, 'NB 144', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(145, 'NB 145', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(146, 'NB 146', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(147, 'NB 147', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(148, 'NB 148', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(149, 'NB 149', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(150, 'NB 150', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(151, 'NB 151', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(152, 'NB 152', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(153, 'NB 153', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(154, 'NB 154', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(155, 'NB 155', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(156, 'NB 156', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(157, 'NB 157', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(158, 'NB 158', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(159, 'NB 159', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(160, 'NB 160', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(161, 'NB 161', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(162, 'NB 162', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(163, 'NB 163', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(164, 'NB 164', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(165, 'NB 165', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(166, 'NB 166', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(167, 'NB 167', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(168, 'NB 168', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(169, 'NB 169', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(170, 'NB 170', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(171, 'NB 171', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(172, 'NB 172', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(173, 'NB 173', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(174, 'NB 174', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(175, 'NB 175', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(176, 'NB 176', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(177, 'NB 177', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(178, 'NB 178', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(179, 'NB 179', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(180, 'NB 180', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(181, 'NB 181', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(182, 'NB 182', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(183, 'NB 183', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(184, 'NB 184', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(185, 'NB 185', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(186, 'NB 186', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(187, 'NB 187', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(188, 'NB 188', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(189, 'NB 189', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(190, 'NB 190', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(191, 'NB 191', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(192, 'NB 192', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(193, 'NB 193', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(194, 'NB 194', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(195, 'NB 195', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(196, 'NB 196', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(197, 'NB 197', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(198, 'NB 198', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(199, 'NB 199', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(200, 'NB 200', 1, 'laptop3.jpg', 'Laptop Mantap - Cepat Sat Set Wat Wet'),
(201, 'VTH 01', NULL, 'laptop3.jpg', NULL),
(202, 'VTH 02', NULL, 'laptop3.jpg', NULL),
(203, 'VTH 03', NULL, 'laptop3.jpg', NULL),
(204, 'VTH 04', NULL, 'laptop3.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `barang_ibfk_1` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type_barang` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
