-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 06:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan_request`
--

CREATE TABLE `loan_request` (
  `id` int(5) NOT NULL,
  `loan_id` varchar(10) NOT NULL,
  `loan_purpose` varchar(2000) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `request_date` varchar(30) NOT NULL,
  `loan_type` varchar(10) NOT NULL,
  `access1` varchar(10) NOT NULL,
  `access2` varchar(10) NOT NULL,
  `access3` varchar(10) NOT NULL,
  `document_name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loan_request`
--

INSERT INTO `loan_request` (`id`, `loan_id`, `loan_purpose`, `amount`, `currency`, `request_date`, `loan_type`, `access1`, `access2`, `access3`, `document_name`, `status`, `datetime`) VALUES
(1, '014426', 'I Want to buy a company.That is suitable for business', '50000', 'DDK', '12/01/2018', 'f2', 'e_tax', '', 'account', '014426084426.pdf', 1, '2018-12-01 07:44:26'),
(3, '012109', 'I want to buy a new brand car', '50000', 'DDK', '12/01/2018', 'f2', 'e_tax', '', '', '012109052109.pdf', 1, '2018-12-01 16:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(3) NOT NULL,
  `message_first` varchar(50) NOT NULL,
  `message_acces` varchar(1000) NOT NULL,
  `message_id` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message_first`, `message_acces`, `message_id`, `datetime`) VALUES
(1, 'Loan application #', 'please provide all information', '014426', '2018-12-01 07:55:22'),
(2, 'Loan application #', 'has been submitted', '014426', '2018-12-01 07:55:33'),
(3, 'Loan application #', 'please provide all information\r\n', '011012', '2018-12-01 16:10:59'),
(4, 'Loan application #', 'has been submitted', '011012', '2018-12-01 16:11:09'),
(5, 'Loan application #', 'please provide all information', '012109', '2018-12-01 16:30:40'),
(6, 'Loan application #', 'has been submitted', '012109', '2018-12-01 16:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan_request`
--
ALTER TABLE `loan_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_request`
--
ALTER TABLE `loan_request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
