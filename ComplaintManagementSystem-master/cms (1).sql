-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 06:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(20) NOT NULL,
  `mail_id` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `mail_id`, `password`, `type`) VALUES
('A21126511060', 'sai@1234', '1234', 'Railways'),
('abc', 'abc@1234', '1234', 'Roadways'),
('koko', 'koko@56', '56', 'Roadways');

-- --------------------------------------------------------

--
-- Table structure for table `bus_complaints`
--

CREATE TABLE `bus_complaints` (
  `username` varchar(30) NOT NULL,
  `busNo` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `arrivalTime` varchar(15) NOT NULL,
  `departureTime` varchar(15) NOT NULL,
  `ticketID` varchar(30) NOT NULL,
  `complaint` varchar(300) NOT NULL,
  `ticketProof` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_complaints`
--

INSERT INTO `bus_complaints` (`username`, `busNo`, `date`, `arrivalTime`, `departureTime`, `ticketID`, `complaint`, `ticketProof`, `status`) VALUES
('likitha', '566', '2023-11-27', '01:11', '09:22', '7780', 'no proper seating arrangement', 'Screenshot (2).png', 'pending'),
('abcd', '222', '2023-11-08', '09:40', '21:40', '1231', 'bus damaged', 'busTicket1.jpg', 'pending'),
('lassi', '211', '2023-11-06', '01:06', '03:06', '1121', 'eferg5', 'busTicket1.jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `train_complaints`
--

CREATE TABLE `train_complaints` (
  `username` varchar(30) NOT NULL,
  `trainNo` varchar(10) NOT NULL,
  `trainName` varchar(25) NOT NULL,
  `date` varchar(20) NOT NULL,
  `arrivalTime` varchar(15) NOT NULL,
  `departureTime` varchar(15) NOT NULL,
  `ticketID` varchar(20) NOT NULL,
  `seatNO` varchar(10) NOT NULL,
  `ticketProof` varchar(50) NOT NULL,
  `complaint` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train_complaints`
--

INSERT INTO `train_complaints` (`username`, `trainNo`, `trainName`, `date`, `arrivalTime`, `departureTime`, `ticketID`, `seatNO`, `ticketProof`, `complaint`, `status`) VALUES
('', '1234', 'none', '2023-11-07', '09:52', '21:52', '1121', 's123', '', 'Submit', 'pending'),
('', '1234', 'none', '2023-11-07', '09:52', '21:52', '1121', 's123', '', 'Submit', 'pending'),
('', '1234', 'none', '2023-11-03', '09:54', '21:54', '1121', 's123', '1.png', 'Submit', 'pending'),
('', '1234', 'none', '2023-11-03', '09:54', '21:54', '1121', 's123', '1.png', 'Submit', 'pending'),
('sai', '1234', 'none', '2023-11-08', '01:11', '13:11', '1121', 's12', 'Screenshot (1).png', 'Submit', 'pending'),
('likitha', '645', '654', '2023-11-10', '09:18', '09:19', '8564', 's69', 'Screenshot (11).png', 'Submit', 'pending'),
('abcd', '12717', 'konark express', '2023-11-08', '09:42', '21:42', '7780', 's12', 'busTicket1.jpg', 'Submit', 'pending'),
('sai', '1234', 'none', '2023-11-22', '10:28', '22:28', '1121', '256', 'Screenshot (1).png', 'Submit', 'pending'),
('sai', '1234', 'none', '2023-11-22', '10:30', '22:30', '1121', '256', 'Screenshot (26).png', 'nothing', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(20) NOT NULL,
  `mail_id` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `country` varchar(20) NOT NULL,
  `district` varchar(25) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `mail_id`, `password`, `phone_number`, `country`, `district`, `address`, `pincode`) VALUES
('A21126511060', 'sai@12345', '1234', '123456', 'india', 'vizag', 'nothing', 530013),
('abcd', 'abc@1234', '1234', '23456', 'india', 'vizag', 'nothing', 532221),
('lassi', 'lassi@16', 'kk09', '7890', 'india', 'vizag', 'madd', 530013),
('likitha', 'likki@143', 'likki23', '7896453', 'india', 'sklm', 'madd', 532221),
('sahith', 'sai@22', 'kk09', '8956', 'india', 'vizag', 'nothing', 530013),
('sai', 'sai@1234', '1234', '12345', '', '', '', 0),
('sai charan', 'sai@23', 'sai23', '6444321', 'india', 'vizag', 'wfwe', 25666);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mail id` (`mail_id`),
  ADD UNIQUE KEY `phone number` (`phone_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
