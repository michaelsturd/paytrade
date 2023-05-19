-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2020 at 10:51 PM
-- Server version: 5.7.25-28-log
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbczedvfwvh4pr`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `account_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `plan` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `bank` varchar(150) NOT NULL,
  `account_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `ssn` varchar(150) NOT NULL,
  `pobox` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `status` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `account_id`, `name`, `email`, `phone`, `plan`, `country`, `bank`, `account_name`, `account_number`, `ssn`, `pobox`, `token`, `status`, `date`, `password`) VALUES
(12, 'ExdqpH', 'Orezi odezi', 'Oderhohwoefe@dsmt.edu.ng', '', '', 'Austria', '', '', '', '', '', 'gB86ybXx8gu9', 0, '2020-07-08 04:29:38pm', '$2y$10$95By7sXcep8IFdH9ecE.Ve/C4GW4G1W7ZxkbAMAUCTqZOY/h/qcka'),
(26, 'hFkgd3', 'AGOGO Collins', 'agogocollins80@gmail.com', '', '', 'Nigeria', '', '', '', '', '', '', 1, '2020-07-25 12:09:34am', '$2y$10$sGXgfUGuPPXeCLB1f42JLuUrQ6WQu8sZv84owVMyGE.JCJqxENDWK'),
(27, 'F9IV1H', 'Oyibode ', 'oyibodenielden@gmail.com', '', '', 'Nigeria', '', '', '', '', '', 'Nb9uGznxkkEc', 1, '2020-07-25 10:59:51am', '$2y$10$MhcBHhprfx08S9orm2e5J.l1T.9.RnHJLJb9dxhOx7HbDvkBimFLS'),
(13, '0cRHW7', 'Orezi odezi', 'Oyibode@gmail.com', '', '', 'Bahamas', '', '', '', '', '', 'dmVFmKIdbu2o', 0, '2020-07-08 04:32:31pm', '$2y$10$7FtD5q5GGBC29hIupUAqnuAKvEfDnkdmjedSPhEifCuO/XN1AMoqi'),
(14, '8ctObe', 'Rukome', 'jonathanrukkeys@gmail.com', '', '', 'Nigeria', '', '', '', '', '', 'lEemWgq1A4hV', 1, '2020-07-08 11:17:00pm', '$2y$10$C6PagRCxyAS1N/JDkgDBWOVJ01zxKzrXZLisFj3uNka5V028G8laW'),
(15, '6Kl0TZ', 'RAMSON SCOTT', 'ramsonscott533@gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', 'tEgM9Ok6fDMo', 1, '2020-07-09 01:11:34am', '$2y$10$7BQwjtG9nWHAvILyZUDbyuWAqobHnYXtJfWjqpvpYxAEu8tYDG0a6'),
(16, 'ubBKjI', 'Oyibode dennis', 'oyibodenielden0007@gmail.com', '', 'Silva Plan', 'Nigeria', '', '', '', '', '', 'Sxe9GWJgPusC', 1, '2020-07-09 07:01:14pm', '$2y$10$A9YSu9ELdHZuI4AomOY26umBkxggh9V3uAgxzxHfU2h.TWfThgCaW'),
(17, 'ddYWu8', 'Emmanuel ', 'oyibodeemmanuel@gmail.com', '', '', 'Nigeria', '', '', '', '', '', 'wamDOcvR6Axi', 1, '2020-07-10 01:10:52pm', '$2y$10$nToF/mzUhiP9oCzRgQuq6.ZVT2uESzTtkjlkJIG9TWBeZisLG8wbG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
