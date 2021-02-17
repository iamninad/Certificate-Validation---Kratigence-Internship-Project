-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 10:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificates`
--

-- --------------------------------------------------------

--
-- Table structure for table `certs`
--

CREATE TABLE `certs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(50) NOT NULL,
  `cert_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certs`
--

INSERT INTO `certs` (`id`, `name`, `event`, `date`, `duration`, `cert_id`) VALUES
(1, 'Andrew John', 'Web Dev', '2020-12-10', '2 Months', 'abcd1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certs`
--
ALTER TABLE `certs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certs`
--
ALTER TABLE `certs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
