-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 11:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebarn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `message`) VALUES
(1, 'vitae', 'Faucibus nisl tincidunt eget nullam non nisi est.'),
(2, 'lorem', 'Orci a scelerisque purus semper eget duis at tellus.'),
(3, 'ipsum', 'Amet commodo nulla facilisi nullam vehicula ipsum a arcu.'),
(4, 'dolor', 'Mi eget mauris pharetra et ultrices neque ornare aenean.'),
(5, 'sit', 'Cras pulvinar mattis nunc sed blandit libero volutpat sed.'),
(6, 'amet', 'Mollis aliquam ut porttitor leo a diam sollicitudin tempor id.'),
(7, 'consectetur', 'Mauris sit amet massa vitae tortor condimentum.'),
(8, 'adipiscing', 'Vitae tortor condimentum lacinia quis.'),
(9, 'elit', 'Duis at consectetur lorem donec massa sapien faucibus et.'),
(10, 'sed do', 'Bibendum est ultricies integer quis auctor.'),
(11, 'eiusmod', 'Ultricies leo integer malesuada nunc vel risus commodo viverra maecenas.'),
(12, 'tempor', 'Augue neque gravida in fermentum et sollicitudin ac orci.'),
(13, 'incididunt', 'Lorem mollis aliquam ut porttitor leo a.'),
(14, 'sollicitudin', 'Lectus sit amet est placerat in egestas erat.'),
(15, 'pellentesque', 'Ullamcorper malesuada proin libero nunc consequat.'),
(16, 'aliquam', 'Cras semper auctor neque vitae tempus quam.'),
(17, 'quisque', 'Viverra nam libero justo laoreet sit amet cursus sit.'),
(18, 'lacus', 'At tellus at urna condimentum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
