-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 10:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rakatdan`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(11) NOT NULL,
  `state_name` tinytext NOT NULL,
  `state_abbr` varchar(3) NOT NULL,
  `state_code` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `state_name`, `state_abbr`, `state_code`) VALUES
(1, 'Madhya Pradesh', 'MP', 577),
(2, 'Uttar Pradesh', 'UP', 522),
(3, '	Andhra Pradesh', 'AP', 8415),
(4, 'Assam', 'AS', 26),
(5, 'Bihar', 'BR', 632),
(6, 'Chhattisgarh', 'CG', 771),
(7, 'Goa', 'GA', 832),
(8, 'Gujarat', 'GJ', 79),
(9, 'Haryana', 'HR', 172),
(10, 'Himachal Pradesh', 'HP', 177),
(11, 'jammmu & kashmir', 'JK', 194),
(12, 'Jharkhand', 'JH', 671),
(13, 'Karnataka', 'KA', 80),
(14, 'Kerala', 'KL', 471),
(15, 'Maharastra', 'MH', 22),
(16, 'Manipur', 'MN', 385),
(17, 'Meghalaya', 'ML', 364),
(18, 'Mizoram', 'MZ', 389),
(19, 'Nagaland', 'NL', 370),
(20, 'Orissa', 'OR', 674),
(21, 'Punjab', 'PB', 172),
(22, 'Rajasthan', 'RJ', 141),
(23, 'Sikkim', 'SK', 3592),
(24, 'Tamil Nadu', 'TN', 4549),
(25, 'Tripura', 'TR', 381),
(26, 'Uttarkhand', 'UK', 135),
(27, 'West Bengal', 'WB', 33),
(29, 'Chandigarh', 'CH', 172),
(30, 'Delhi', 'DL', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
