-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 09:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senatevotesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `recID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`recID`, `username`, `password`, `name`, `position`) VALUES
(1, 'user', 'user', 'Rene', 'Voter'),
(4, 'admin', 'admin', 'Albert', 'Voter');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `recID` int(5) NOT NULL,
  `idNo` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `party` varchar(15) NOT NULL,
  `ncr` int(3) NOT NULL,
  `reg1` int(3) NOT NULL,
  `reg2` int(3) NOT NULL,
  `reg3` int(3) NOT NULL,
  `reg4` int(3) NOT NULL,
  `reg5` int(3) NOT NULL,
  `reg6` int(3) NOT NULL,
  `reg7` int(3) NOT NULL,
  `reg8` int(3) NOT NULL,
  `reg9` int(3) NOT NULL,
  `reg10` int(3) NOT NULL,
  `reg11` int(3) NOT NULL,
  `reg12` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`recID`, `idNo`, `name`, `party`, `ncr`, `reg1`, `reg2`, `reg3`, `reg4`, `reg5`, `reg6`, `reg7`, `reg8`, `reg9`, `reg10`, `reg11`, `reg12`) VALUES
(1, 'C-01', 'Escudero F.', 'KMP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'C-02', 'Drilon F.', 'LDP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'C-03', 'Lacson P.', 'KMP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'C-04', 'Pacquiao M.', 'Nacionalista', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'C-05', 'Villar C.', 'LDP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'C-06', 'Go B.', 'PDP-Laban', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'C-07', 'Revilla B.', 'LDP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'C-08', 'Marcos Jr.  F.', 'Independent', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `ID` (`idNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `recID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
