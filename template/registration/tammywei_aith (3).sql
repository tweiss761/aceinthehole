-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 04:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tammywei_aith`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `questionscomments` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `questionscomments`, `position`) VALUES
(1, '', 'tammy.weiss@pcc.edu', 'none', 'athlete'),
(2, '', 'tammy.weiss@pcc.edu', 'none', 'athlete'),
(3, '', 'tammy.weiss@pcc.edu', 'none', 'athlete');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `email` text NOT NULL,
  `emergencycontactname` text NOT NULL,
  `emergencycontactphone` int(11) NOT NULL,
  `genderid` text NOT NULL,
  `saturday` text NOT NULL,
  `sunday` text NOT NULL,
  `accommodations` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `email`, `emergencycontactname`, `emergencycontactphone`, `genderid`, `saturday`, `sunday`, `accommodations`, `position`) VALUES
(1, 'tammy weiss', 30, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'longcourse', '', 'none', 'volunteer'),
(2, 'tammy weiss', 30, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'longcourse', '', 'none', 'volunteer'),
(3, 'tammy weiss', 41, 'tammy.weiss@pcc.edu', 'mom', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(4, 'tammy weiss', 41, 'tammy.weiss@pcc.edu', 'mom', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(5, 'tammy weiss', 32, 'tammy.weiss@pcc.edu', 'brother', 2147483647, 'female', 'Choose Your Event', '', 'tons', 'volunteer'),
(6, 'tammy weiss', 32, 'tammy.weiss@pcc.edu', 'brother', 2147483647, 'female', 'Choose Your Event', '', 'tons', 'volunteer'),
(7, 'tammy weiss', 32, 'tammy.weiss@pcc.edu', 'brother', 2147483647, 'female', 'Choose Your Event', '', 'tons', 'volunteer'),
(8, 'tammy weiss', 34, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(9, 'tammy weiss', 34, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(10, 'tammy weiss', 34, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(11, 'tammy weiss', 34, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
