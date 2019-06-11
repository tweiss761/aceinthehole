-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2019 at 10:44 PM
-- Server version: 10.1.40-MariaDB
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
-- Database: `tammywei_aith`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `email` text NOT NULL,
  `emergencyname` text NOT NULL,
  `emergencyphone` int(11) NOT NULL,
  `gender` text NOT NULL,
  `saturday` text NOT NULL,
  `sunday` text NOT NULL,
  `accommodations` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `email`, `emergencyname`, `emergencyphone`, `gender`, `saturday`, `sunday`, `accommodations`, `position`) VALUES
(1, 'tammy weiss', 30, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'longcourse', '', 'none', 'volunteer'),
(2, 'tammy weiss', 30, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'longcourse', '', 'none', 'volunteer'),
(3, 'Susan Watson', 45, 'stwatson@pcc.edu', 'Joe Big', 2147483647, 'female', 'olympic', '', 'Gluten Intolerant', 'participant'),
(4, 'tammy weiss', 40, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(5, 'tammy weiss', 43, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'Choose Your Event', '', 'none', 'volunteer'),
(6, 'tammy weiss', 43, 'tammy.weiss@pcc.edu', 'none', 2147483647, 'female', 'longcourse', '', 'none', 'volunteer'),
(7, 'tammy weiss', 43, 'tammy.weiss@pcc.edu', 'dad', 2147483647, 'female', 'try-a-tri', '', 'none', 'volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
