-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `Sno.` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `EmailAddress` varchar(30) NOT NULL,
  `Class` text NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `YOA` date NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`Sno.`, `Name`, `DOB`, `Mobile`, `EmailAddress`, `Class`, `Address`, `YOA`, `Gender`) VALUES
(1, 'Hore Krishna', '2023-07-13', 1234567890, 'saikatdam327@gmail.com', 'XII', 'gghfhfasg', '2023-07-12', 'Female'),
(3, 'Saikat dam', '2023-07-05', 1234567890, 'saikatdam327@gmail.com', 'X', 'gghfhfasg', '2023-07-30', 'Others'),
(8, 'manjima das', '2003-06-06', 1234567890, 'manjima@gmailcom', 'XII', 'yeyyuryiueyr', '2023-08-30', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`Sno.`),
  ADD UNIQUE KEY `Sno.` (`Sno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `Sno.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
