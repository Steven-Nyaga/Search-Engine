-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 01:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cID` int(11) NOT NULL,
  `name` text NOT NULL,
  `motto` text NOT NULL,
  `contact` text NOT NULL,
  `cartegory` text NOT NULL,
  `tags` text NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cID`, `name`, `motto`, `contact`, `cartegory`, `tags`, `website`) VALUES
(1, 'Google', 'Dont be evil', 'google@gmail.com', 'IT', 'google dont be evil', 'https://www.google.com/'),
(2, 'Microsoft', 'Be whats next', 'microsoft@gmail.com', 'IT', 'microsoft be whats next', 'https://www.microsoft.com/en-us/'),
(3, 'Apple', 'Think different', 'apple@gmail.com', 'IT', 'apple think different', 'https://www.apple.com/ke/'),
(4, 'Android', 'Be together, not the same', 'android@gmail.com', 'IT', 'android be together not the same', 'https://www.android.com/'),
(5, 'Foster farms', 'no motto', '1-800-255-7227', 'agri', '#foster farms#', 'https://www.fosterfarms.com'),
(6, 'Alltech', 'When alltech does things, we do them fast', 'facebook.com/AlltechNaturally/', 'agri', '#alltech#', 'https://www.alltech.com'),
(7, 'Tyson Foods', 'Powered by Tyson', 'twitter.com/TysonFoods/', 'agri', '#tyson# #foods# #tyson foods#', 'https://www.tysonfoods.com');

-- --------------------------------------------------------

--
-- Table structure for table `for_admin`
--

CREATE TABLE `for_admin` (
  `adminid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `for_user`
--

CREATE TABLE `for_user` (
  `username` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_user`
--

INSERT INTO `for_user` (`username`, `passsword`, `email`, `gender`, `userid`) VALUES
('Trevor_Noah', 'e10adc3949ba59abbe56e057f20f883e', 'Noah@gmail.com', 'Male', 1),
('Dan', 'e2fc714c4727ee9395f324cd2e7f331f', 'Daniel@gmail.com', 'Male', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `for_admin`
--
ALTER TABLE `for_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `for_user`
--
ALTER TABLE `for_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `for_admin`
--
ALTER TABLE `for_admin`
  MODIFY `adminid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `for_user`
--
ALTER TABLE `for_user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
