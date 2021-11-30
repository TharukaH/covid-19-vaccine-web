-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 01:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citysmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `name`, `vaccine`, `total`, `status`) VALUES
('C1', 'General hospital Divulapitiya', 'Synopharm', 2345678, 'Normal'),
('C2', 'KDU hospital', 'Phizer', 845678, 'Low'),
('C3', 'Ratnapura Hospital', 'Modarna', 5632, ''),
('C4', 'Colombo Hospital', 'Phizer', 56632, ''),
('C5', 'Anuradhapura Hospital', 'Synopharm', 7632, '');

-- --------------------------------------------------------

--
-- Table structure for table `head_office`
--

CREATE TABLE `head_office` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head_office`
--

INSERT INTO `head_office` (`id`, `user_name`, `password`) VALUES
(1, 'head123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `district` varchar(100) NOT NULL,
  `dose1` date DEFAULT NULL,
  `dose2` date DEFAULT NULL,
  `vaccine_center_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `age`, `district`, `dose1`, `dose2`, `vaccine_center_id`) VALUES
(1, 'gayan', 21, 'Matale', '2021-09-21', '2021-09-14', NULL),
(2, 'gayani', 25, 'Ampara', '2021-09-21', '2021-10-14', NULL),
(3, 'amal', 35, 'Ampara', '2021-09-22', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head_office`
--
ALTER TABLE `head_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `head_office`
--
ALTER TABLE `head_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
