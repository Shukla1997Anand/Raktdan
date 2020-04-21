-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 10:18 PM
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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state_code` varchar(5) NOT NULL,
  `city_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `city_name`, `state_code`, `city_code`) VALUES
(1, 'Bhopal', '23', '1'),
(2, 'Indore', '23', '2'),
(3, 'Kanpur', '522', '3'),
(4, 'Jhansi', '522', '4'),
(5, 'Hyderabad', '25', '5'),
(6, 'Visakhapatnam', '25', '6'),
(7, 'Warangal', '25', '7'),
(8, 'Guntur', '25', '8'),
(9, 'Ranchi', '671', '9'),
(10, 'Chatra', '671', '10'),
(11, 'Hazaribag', '671', '11'),
(12, 'Dumka', '671', '12'),
(13, 'Devghar', '671', '13'),
(14, 'Simdega', '671', '14'),
(15, 'Saraykela', '671', '15'),
(16, 'Dhanbad', '671', '16'),
(17, 'Godda', '671', '17'),
(18, 'Gumla', '671', '18'),
(19, 'Latehar', '671', '19'),
(20, 'Lohardaga', '671', '20'),
(21, 'Jamshedpur', '671', '21'),
(22, 'Gumla', '671', '22'),
(23, 'Bokaro', '671', '23'),
(24, 'Koderma', '671', '24'),
(25, 'Daltonganj', '671', '25'),
(26, '	Ramgarh', '671', '26'),
(27, '	Jamtara', '671', '27'),
(28, '	Khunti', '671', '28'),
(29, '	Sahibganj', '671', '29'),
(30, 'Pakur', '671', '30'),
(31, '	Giridih', '671', '31'),
(32, '	Chaibasa', '671', '32'),
(33, 'Alot', '577', '33'),
(34, 'Agar', '577', '34'),
(35, 'Sagar', '577', '35'),
(36, 'Nainpur', '577', '36'),
(37, 'Itarsi', '577', '37'),
(38, 'Baldi', '577', '38'),
(39, 'Ajaigarh', '577', '39'),
(40, 'Alirajpur', '577', '40'),
(41, 'Amarpatan', '577', '41'),
(42, 'Amarwada', '577', '42'),
(43, 'Ambah', '577', '43'),
(44, 'Arone', '577', '44'),
(45, 'Ashoknagar', '577', '45'),
(46, 'Ashta', '577', '46'),
(47, 'Atner', '577', '47'),
(48, 'Hoshangabad', '577', '48'),
(49, '	Gwalior', '577', '49'),
(50, 'Jabalpur ', '577', '50'),
(51, 'Betul', '577', '51'),
(52, 'Kareli', '577', '52'),
(53, 'Katni', '577', '53'),
(54, 'Khandwa', '577', '54'),
(55, 'Sihora', '577', '55'),
(56, 'Vidisha', '577', '56'),
(57, 'Ujjain', '577', '57'),
(58, 'Dewas', '577', '58'),
(59, 'BUXER', '632', '59'),
(60, 'DANAPUR', '632', '60'),
(61, 'DARBHANGA', '632', '61'),
(62, 'GAYA', '632', '62'),
(63, 'PATNA', '632', '63'),
(64, 'SONEPUR', '632', '64'),
(65, 'SIWAN', '632', '65'),
(66, 'SAMASTIPUR', '632', '66'),
(67, 'SAHARSA', '632', '67'),
(68, 'KATIHAR', '632', '68'),
(69, 'GHAZIPUR', '522', '69'),
(70, 'Agra', '522', '70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
