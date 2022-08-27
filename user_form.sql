-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2022 at 11:23 AM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voomghco_ecg`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'kevin', 'kevin@gmail.com', '9d5e3ecdeb4cdb7acfd63075ae046672', 'user'),
(2, 'bubu', 'bubu@gmail.com', '098eb8ba2cc924fad0ec05acd869a4eb', 'user'),
(3, 'Elon', 'elon@gmail.com', '9e887375eaba77dc7568e4048268520e', 'user'),
(4, 'henry', 'henry@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'dennis', 'dennis@gmail.com', '7daacea5f373b4c1c054158b126d317f', 'user'),
(6, 'Dennis', 'dennistheking0@gmail.com', 'f7fa436c321854aa36f1458f0e2baf5b', 'admin'),
(7, 'Joshua Appiah', 'gead133@outlook.com', '953f733c902356b78cfbe68599e574e5', 'user'),
(8, 'Nartey Kelvin ', 'narteyk131@gmail.com', '3330826a8076fb7e638186f203629d01', 'user'),
(9, 'Bediako Simpson', 'agyeitawiah51@gmail.com', '0a1098ec2fa8aedce113c956146e302e', 'user'),
(10, 'Antwi Francis ', 'fantwi039@gmail.com', '3c90e08826a27d858b909cfd8fbfeec5', 'admin'),
(11, 'Michael Selasie Tormeti', 'jasfatorm@gmail.com', 'fb17cc03dfd99331f2b49e1bc9886771', 'user'),
(12, 'Akafari Vincent ', 'vincentakafari06@gmail.com', '3797675bc69464d3bdc2c10a161af428', 'user'),
(13, 'Ice', 'ice@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(14, 'Hyun', 'w@w', 'c20ad4d76fe97759aa27a0c99bff6710', 'admin'),
(15, 'Oh', 'y@y', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(16, 'Badour Ofotsu Emmanuel ', 'marvelousbadour98@gmail.com', 'db38ecfa3b790473d087d45fa8b2b34b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
