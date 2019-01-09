-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 04:09 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedb`
--

CREATE TABLE `feedb` (
  `fid` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_email` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedb`
--

INSERT INTO `feedb` (`fid`, `f_name`, `f_email`, `feedback`) VALUES
(1, 'udara', 'ma@gmail.com', 'good service'),
(2, 'madumalka', 'ma@gmail.com', 'some services are good'),
(3, 'oshara', 'oshara@gmail.com', 'very good'),
(4, 'madumalka', 'ma@gmail.com', 'hi hello '),
(5, 'udaram', 'ma@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ser_id` int(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `guest` varchar(500) NOT NULL,
  `equipment` varchar(20) NOT NULL,
  `food` varchar(20) NOT NULL,
  `preferences` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ser_id`, `type`, `place`, `guest`, `equipment`, `food`, `preferences`, `price`) VALUES
(1, 'Wedding', 'Galadari Hotel', '200', 'Dj', 'Lunch', 'Vegetarian', '500000'),
(2, 'Birthday', 'Galadari Hotel', '200', 'Dj', 'Dinner', 'Non Veg/Veg', '300000'),
(3, 'Gathering', 'Avendra Garden', '250', 'Dj', 'Lunch', 'Vegetarian/Non Veg', '400000'),
(4, 'Aniversary', 'Cinamon Garaden', '100', 'Dj', 'Dinner', 'Vegetarian', '600000'),
(5, 'Wedding', 'Cineman Garden', '150', 'Dj', 'Lunch', 'Vegetarian', '450000'),
(6, 'Wedding', 'Cineman Garden', '150', 'Dj', 'Lunch', 'Vegetarian', '450000'),
(7, 'Bithday', 'Hilton Hotel', '100', 'Stage', 'Tea and Snack', 'non veg', '600000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(19, 'ucsc', 'ucsc@gmail.com', 'ucsc', 1),
(25, 'madu', 'madu@gmail.com', '08fafe1d8fca7c3b5be5f248c03b5fc937893ab0', 0),
(27, 'chamodi', 'ch@gmail.com', 'chamodi', 0),
(29, 'udara', 'udaramadumalka3@gmail.com', 'udara', 0),
(30, 'yasika', 'ya@gmail.com', 'yasika', 0),
(31, 'ridmi', 'r@gmail.com', 'ridmi', 0),
(33, 'malka', 'uu@gmail.com', 'Udara1234', 0),
(34, 'yda', 'y@gmail.com', '1234', 0),
(35, 'yka', 'q@gmail.com', '98765', 0),
(36, 'ua', 'au@gmail.com', 'udara3456', 0),
(37, 'um', 'mn@gmail.com', '12345', 0),
(38, 'yasika', 'yasika14@gmail.com', 'yg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedb`
--
ALTER TABLE `feedb`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedb`
--
ALTER TABLE `feedb`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ser_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
