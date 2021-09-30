-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 03:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lname` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `username`, `password`) VALUES
('amira', 'robaa', 'amira@gmail.com', 'amirarobaa', '12345678'),
('aya', 'mahmoud', 'ayamahmoud@gmail.com', 'ayamahmoud', '12345678'),
('aya', 'sherif', 'ayasherif@gmail.com', 'ayasherif', '12345678'),
('mohamed', 'mohsen', 'mohamed@gmail.com', 'mohamedmohsen', '2222'),
('shrouk', 'abdelhamid', 'shrouk@gmail.com', 'shrouk', '12345678'),
('yasmine', 'atef', 'yasmine@gmail.com', 'yasmine', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `pname` varchar(40) NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `fee` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `docname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`pname`, `specialization`, `fee`, `date`, `docname`) VALUES
('ahmed', 'surgery', '21', '2021-09-02', 'Mohamed');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(40) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `specialization` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `phone`, `email`, `username`, `password`, `specialization`) VALUES
(1, 'Mohamed', '01299943849', 'mohamed@gmail.com', 'mohamed', '12345', 'Dermatology'),
(2, 'Mohamed Mohsen', '0129332399239', 'mohamed2@gmail.com', 'mohamed1', '123', 'Dermatology');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fullname` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pid` int(40) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fullname`, `pid`, `address`, `phone`, `city`, `email`, `username`, `password`) VALUES
('Mohamed Mohsen', 1, 'banha', '0129399239', 'Cairo', 'mohamedmohsen594@gmail.com', 'mohamedmohsen', '1234'),
('Mohamed Mohsen', 2, 'benha', '0128281288', 'benha', 'mohamed31@gmail.com', 'mohamed221', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `address` (`address`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
