-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 08:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem2`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL,
  `s9name` varchar(30) DEFAULT NULL,
  `s9marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL,
  `s9name` varchar(30) DEFAULT NULL,
  `s9marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL,
  `s9name` varchar(30) DEFAULT NULL,
  `s9marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(11) NOT NULL,
  `Sem` decimal(2,0) DEFAULT NULL,
  `s1name` varchar(30) DEFAULT NULL,
  `s1marks` decimal(4,0) DEFAULT NULL,
  `s2name` varchar(30) DEFAULT NULL,
  `s2marks` decimal(4,0) DEFAULT NULL,
  `s3name` varchar(30) DEFAULT NULL,
  `s3marks` decimal(4,0) DEFAULT NULL,
  `s4name` varchar(30) DEFAULT NULL,
  `s4marks` decimal(4,0) DEFAULT NULL,
  `s5name` varchar(30) DEFAULT NULL,
  `s5marks` decimal(4,0) DEFAULT NULL,
  `s6name` varchar(30) DEFAULT NULL,
  `s6marks` decimal(4,0) DEFAULT NULL,
  `s7name` varchar(30) DEFAULT NULL,
  `s7marks` decimal(4,0) DEFAULT NULL,
  `s8name` varchar(30) DEFAULT NULL,
  `s8marks` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) DEFAULT NULL,
  `USN` varchar(12) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `USN`, `email`, `pass`) VALUES
('Chanakya', '1TJ18CS022', 'chanakyaserver@gmail.com', 'chan0201'),
('Deepak', '1TJ18CS030', 'deepak.d8296@gmail.com', 'Detorus01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem7`
--
ALTER TABLE `sem7`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem8`
--
ALTER TABLE `sem8`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
