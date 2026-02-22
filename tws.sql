-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 10:46 AM
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
-- Database: `tws`
--

-- --------------------------------------------------------

--
-- Table structure for table `tws`
--

CREATE TABLE `tws` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tws`
--

INSERT INTO `tws` (`id`, `fname`, `lname`, `username`, `password`, `dt`) VALUES
(1, 'vighnesh', 'rane', 'vig123', '111111', '2023-04-09 09:54:49'),
(2, 'Vighnesh', 'Rane', 'vigh1234', '111111', '2023-04-09 10:27:40'),
(3, 'Darshan', 'Hande', 'Darsh', 'darshande1909', '2023-04-21 10:37:09'),
(4, 'vighnesh', 'rane', 'vighnesh11', '@123456', '2023-05-02 15:27:03'),
(5, 'saharash', 'more', 'smore', '@123456', '2023-05-03 03:31:46'),
(6, 'Darshan', 'Hande', 'darshan1', '@123456', '2023-05-03 04:24:31'),
(7, 'vicky', 'red', 'vicky', '123456', '2023-05-22 10:35:24'),
(8, 'vicky', 'red', 'vighneshhgfh', 'trytyrty', '2023-06-09 09:13:59'),
(9, 'vicky', 'red', 'HGJGJGJ', 'JKGJGJHG', '2023-06-09 18:37:48'),
(10, 'nvhv', 'hhvhjgj', 'mnnvmhvm', 'jhgjgj', '2023-06-09 18:47:27'),
(11, 'Vighnesh', 'Rane', 'fffff', 'ffffff', '2023-07-07 18:56:44'),
(12, 'Vighnesh', 'Rane', 'hgjghjghj', 'ggggggg', '2023-07-07 19:30:30'),
(13, 'Vighnesh', 'Rane', 'kkmlkmlm', 'hgikbj', '2023-07-15 06:54:51'),
(14, 'tatya', 'tope', 'tatya', '12345678', '2024-02-28 09:03:44'),
(15, 'prince', 'rane', 'prince', '12345678', '2024-02-28 09:16:09'),
(16, 'example', 'example', 'example', '12345678', '2024-03-31 08:10:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tws`
--
ALTER TABLE `tws`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tws`
--
ALTER TABLE `tws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
