-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 08:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-attendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence1`
--

CREATE TABLE `attendence1` (
  `id` int(11) NOT NULL,
  `facid` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(30) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence1`
--

INSERT INTO `attendence1` (`id`, `facid`, `time`, `date`, `subject`, `semester`) VALUES
(102, 'xyz', '10.45-11.45', '2020-03-03', 'Python', 'I'),
(103, 'xyz', '10.45-11.45', '2020-06-04', 'AI', 'I'),
(104, 'xyz', '10.45-11.45', '2020-03-05', 'AI', 'I'),
(105, 'xyz', '10.45-11.45', '2020-03-06', 'AI', 'I'),
(106, 'xyz', '10.45-11.45', '2020-03-07', 'AI', 'II'),
(107, 'xyz', '10.45-11.45', '2020-03-08', 'AI', 'II'),
(108, 'xyz', '10.45-11.45', '2020-03-09', 'AI', 'IV'),
(109, 'xyz', '4.30-5.30', '2020-03-10', 'AI', 'VI'),
(110, 'xyz', '4.30-5.30', '2020-03-11', 'AI', 'VI'),
(111, 'abc', '4.30-5.30', '2020-03-12', 'WEB', 'VI'),
(112, 'abc', '4.30-5.30', '2020-03-13', 'AI', 'VI');

-- --------------------------------------------------------

--
-- Table structure for table `attendence2`
--

CREATE TABLE `attendence2` (
  `id` int(11) NOT NULL,
  `facid` varchar(30) NOT NULL,
  `enrollment` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence2`
--

INSERT INTO `attendence2` (`id`, `facid`, `enrollment`, `date`, `time`, `subject`, `semester`) VALUES
(18, 'abc', '160430116002', '2020-02-03', '10.45-11.45', 'web', 'I'),
(19, 'xyz', '160430116003', '2020-02-03', '10.45-11.45', 'AI', 'I'),
(20, 'xyz', '160430116002', '2020-06-04', '10.45-11.45', 'AI', 'II'),
(21, 'xyz', '160430116002', '2020-03-05', '10.45-11.45', 'AI', 'I'),
(22, 'xyz', '160430116002', '2020-03-06', '10.45-11.45', 'AI', 'II'),
(23, 'xyz', '160430116002', '2020-03-07', '10.45-11.45', 'AI', 'II');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence1`
--
ALTER TABLE `attendence1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence2`
--
ALTER TABLE `attendence2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence1`
--
ALTER TABLE `attendence1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `attendence2`
--
ALTER TABLE `attendence2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
