-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 05:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koreanlanguage`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `number` int(10) NOT NULL,
  `eventid` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`number`, `eventid`, `name`, `email`, `quantity`, `contactno`) VALUES
(1, 1, 'Chau Gu', 'weihao240599@gmail.com', 1, '11111111'),
(3, 1, 'what', 'limks-wp16@student.tarc.edu.com', 4, '2222'),
(4, 3, 'owh', 'lalal@gmail.com', 2, '11111111'),
(6, 9, 'lalazai', 'lalazai@gmail.com', 9, '99999999'),
(8, 7, 'ni', 'ni@gmail.com', 8, '8888888888'),
(9, 1, 'owh', '444@gmail.com', 1, '2222');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(10) NOT NULL,
  `eventdate` date DEFAULT NULL,
  `eventname` varchar(30) NOT NULL,
  `eventlocation` varchar(255) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventdate`, `eventname`, `eventlocation`, `image`, `description`) VALUES
(2, '1212-12-11', 'Hello event', 'Batu Caves kuala lumpur', 'event8.jpg', 'lalala'),
(4, '3333-03-31', 'kimchi', 'Batu Caves kuala lumpur', 'event6.jpg', 'kimchi is good'),
(7, '5555-05-06', 'han bok', 'Batu Caves kuala lumpur', 'event7.jpg', 'very beautiful'),
(8, '4444-04-04', 'jiayi', 'Batu Caves kuala lumpur', '20150715152609_05607.jpg', 'jiayi noob'),
(9, '1111-11-11', 'Wong Kai YYY', 'Batu Caves kuala lumpur', 'a4.jpg', '121212121212');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(0, 'weihao240599', 'ooiwh-wm18@student.tarc.edu.my', 'admin', '6a6360e517586fee8d2efc01ec9fd801'),
(0, 'lksoon', 'limks-wp16@student.tarc.edu.com', 'admin', '9caa343d42ad7ec29e39107983f30df2'),
(0, 'tanpk', 'tanpk-wm18@student.tarc.edu.my', 'user', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
