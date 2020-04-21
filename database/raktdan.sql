-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 08:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raktdan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`

--

CREATE TABLE `admin` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('shukla', '1234'),
('shukla@123', '1234'),
('shukla@123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `donar_registration`
--

CREATE TABLE `donar_registration` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(35) NOT NULL,
  `age` varchar(25) NOT NULL,
  `bggroup` varchar(35) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `mno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donar_registration`
--

INSERT INTO `donar_registration` (`id`, `name`, `fname`, `address`, `city`, `age`, `bggroup`, `e_mail`, `mno`) VALUES
(1, 'anand jha', 'patiram jha', 'lkjhgf', 'bhopal', '20', 'O+', 'anandcbz1998@gmail.com', '8871616229'),
(2, 'Anand shukla', 'Lakshmi shankar shukla', 'classmate boys hostel', 'bhopal', '20', 'O+', 'anandshukla8268@gmail.com', '8871616229'),
(3, 'prashant jaiswal', 'dont know', 'dhanbaad', 'bhopal', '20', 'O+', 'prashant385@gmail.com', '9917392343'),
(4, 'geetansh temre', 'fff', '', 'bhopal', '20', 'O+', 'kjdhfhkhd@gmail.com', '98765432'),
(5, 'ajeetr singh', 'dfgyh', 'dfgh', 'bhopal', '20', 'O+', 'ajeetsingh@gmail.com', '8871616229'),
(6, 'rajesh', 'sdjfjsdof', 'sdfjhsjfhsdjf', 'kushdfhdsif', '21', 'AB_', 'rajeshbeti@gmail.com', '1234567890'),
(7, 'kaancha', 'sdjhfjdh', 'resdfgyhuj', '', '', 'O+', 'efghjhgfds', ''),
(8, 'manju kumari', 'badhan mahto', 'sitamadhi ramour', 'hzaribag', '87', 'O+', 'manju@gmail.com', '8458827320');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar_registration`
--
ALTER TABLE `donar_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar_registration`
--
ALTER TABLE `donar_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
