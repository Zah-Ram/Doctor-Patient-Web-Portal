-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 04:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `aid` int(11) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `avail` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`aid`, `patient`, `doctor`, `date`, `time`, `avail`, `id`, `did`) VALUES
(4, 'sdfsdf', 'dsfsdfsf', '2019-12-22', '10:00:00', 'dsfsdf', 12, 70),
(5, 'ertert', 'etertert', '2019-12-24', '01:00:00', 'fdfgfg', 12, 71),
(8, 'Niqab khan', 'dr danial khan', '2019-12-24', '12:22:00', '', 5, 71),
(9, 'Mr Uzair Khan', 'Dr mujtaba ahmad', '2019-12-25', '11:28:00', 'Slots are full with doctors', 8, 69),
(10, 'zahid', 'Dr mujtaba ahmad', '2019-12-24', '15:22:00', '', 9, 69),
(27, 'zahid', 'Dr mujtaba ahmad', '2019-12-29', '6 :00 AM', '', 14, 70),
(28, 'zahid', 'Dr mujtaba ahmad', '2019-12-30', '6 :00 AM', '', 14, 70),
(29, 'Niqab khan', 'Dr mujtaba ahmad', '2020-01-22', '8 :00 AM', '', 5, 69),
(30, 'Ali', 'Talha', '2020-01-22', '8 :00 AM', '', 19, 72),
(31, 'zahid', 'Dr Tariq', '2020-01-23', '8 :00 AM', '', 18, 70);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `spe` varchar(100) NOT NULL,
  `pmc` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `timeto` time NOT NULL,
  `holiday` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `pass`, `address`, `phone`, `price`, `spe`, `pmc`, `time`, `timeto`, `holiday`, `pic`) VALUES
(69, 'Dr Mujtaba Ahmad', '123', 'Islamabad ', '2147483647', '1000', 'Pysiologist', 0, '10 am - 3 pm', '00:00:00', 'Friday', 'images/d1.jpg'),
(70, 'Zahid Rahman', '123', 'Nowshera, Pakistan', '3168870891', '5000', 'Gynologist', 0, '1.00 pm - 6.00 pm', '00:00:00', 'Sunday', 'images/dr-1.jpg'),
(71, 'Dr Danial Khan', '1234', 'Islamabad, G10', '3168870891', '2000', 'Physiotherapist', 0, '10 am - 3 pm', '00:00:00', 'Friday', 'images/ss.jpg'),
(72, 'Dr Talha', 'z1234', 'Charsadda', '324234', '1000', 'Dentist', 0, '8 am - 6 pm', '00:00:00', 'Friday, Monday', 'images/800px_COLOURBOX7095362.jpg'),
(73, 'zahid', '12345', 'Peshawar', '435345', '1000', 'Physiotherapist', 0, '1.00 pm - 6.00 pm', '00:00:00', 'Sunday, Saturday and Friday', 'images/kkkkkk.jpg'),
(74, 'Ali', 'z5911WE[99', 'Peshawar', '324234', '100', 'Physiotherapist', 0, '00:01', '01:58:00', 'on,on,on', 'images/800px_COLOURBOX7095362.jpg'),
(75, 'Mr zohaib', 'ZXC1235236%aASXDbb', 'nowshera', '435345', '199', 'Dentist', 0, '12:23', '00:12:00', 'ononon', 'images/kkkkkk-min.jpg'),
(76, 'Zahid Rahmanww', 'GHGydtt768;', 'nowshera', '324234', '323', 'werwerwe', 0, '02:12', '04:34:00', 'Sunday,Monday,Thursday', 'images/kkkkkk-min.jpg'),
(77, 'Mr zohaib khan', '12AZazxbcb33&', 'Peshawar', '324234', '212', 'Physiotherapist', 232323, '00:12', '12:11:00', 'Sunday,Monday,Saturday', 'images/kkkkkk-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `pass`, `address`, `phone`, `pic`) VALUES
(18, 'zahid', '123', 'Peshawar', '324234', 'images/kkkkkk.jpg'),
(19, 'Ali', '1234', 'charsadda', '345345', 'images/f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
