-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 03:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut_studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `User_password` varchar(255) NOT NULL,
  `User_nam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`User_id`, `User_name`, `User_password`, `User_nam`) VALUES
(1, 'prince', '1234', 'Prince'),
(2, 'king', '2468', 'King');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `User_studentnumber` varchar(100) NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `User_temperature` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`User_id`, `User_name`, `User_studentnumber`, `User_email`, `User_temperature`) VALUES
(8, 'Prince', '232422', 'bruce@gmail.com', '37.5'),
(9, 'king', '123', 'marish', '36.0'),
(10, 'sfdsd', '331', 'mmm', '37.1'),
(11, 'king', '214242', 'marip98@gmail.com', '22.0'),
(14, 'akak', '45454', 'mdkdks@', '87'),
(15, 'geneva', '1234344', 'gene@gmail.com', '36.7'),
(16, 'prince', '1234565', 'marishane@gmail.com', '36.2'),
(18, 'sfdsd', '5522', 'adad@.com', '38.8'),
(19, 'king', '331', 'mmm', '42'),
(20, 'king', '214242', 'braz@gmail.com', '56'),
(21, 'Prince', '331', 'marish', '30'),
(22, 'love', '331', 'mmm', '22.0'),
(23, 'bruce', '331', 'marish', '30'),
(24, 'Prince', '55555', 'mmm', '22.0'),
(25, 'Prince', '214242', 'adad@.com', '00'),
(26, 'bruce', '55555', 'marish', '22.6'),
(27, 'lesogo', '214242', 'marip98@gmail.com', '30'),
(28, 'bruce', '77', 'map98@gmail.com', '30'),
(29, 'john', '454545', 'john@gmail.com', '32.8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
