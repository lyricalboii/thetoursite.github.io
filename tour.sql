-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220611.3e6b0abbe2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 04:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ddate` date NOT NULL,
  `adate` date NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `first`, `last`, `phoneno`, `email`, `ddate`, `adate`, `date`) VALUES
(2, 'roshan', 'thummar', 1236567890, 'roshan@gmail.com', '2022-07-09', '2022-07-20', '2022-07-09 18:28:13'),
(3, 'renish', 'suriya', 1234567890, 'renish@gmail.com', '2022-07-14', '2022-07-22', '2022-07-09 19:32:35'),
(4, 'prince', 'suriya', 1236547896, 'admin@gmail.com', '2022-08-02', '2022-08-10', '2022-07-09 19:45:32'),
(5, 'prince', 'suriya', 1236547896, 'admin@gmail.com', '2022-08-02', '2022-08-10', '2022-07-09 19:46:16'),
(6, 'renish', 'suriya', 1236549870, '5291901632a@gmail.com', '2022-02-02', '2022-03-02', '2022-07-09 19:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(10) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `descripstion` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `destination`, `duration`, `price`, `descripstion`, `date`) VALUES
(2, 'Mahabalipuram', '8 days', 30000, 'Mahabalipuram, also known as Mamallapuram is a tow...\r\n', '2022-07-09 18:31:42'),
(3, 'maldiv', '10 days', 30000, 'A perfect getaway destination that stands apart from all the island countries in the world is none other than the Maldives.', '2022-07-09 19:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `username`, `email`, `password`, `date`) VALUES
(1, 'renish', 'renish@gmail.com', 'renish5291', '2022-07-09 15:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `work`, `msg`, `date`) VALUES
(1, 'Renish', 'Web Developer', 'This is Tour and Travel website and very usfull website which have travel agency.', '2022-07-09 15:56:21'),
(2, 'roshan', 'Web Developer', 'This is Best Website in Fronend.', '2022-07-09 15:58:33'),
(3, 'roshan', 'Web Developer', 'This is Best Website in Fronend.', '2022-07-09 16:00:21'),
(4, 'roshan', 'Web Developer', 'This is Best Website in Fronend.', '2022-07-09 16:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



