-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 07:21 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `countryid` int(9) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countryid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `interestid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(9) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `value` longtext,
  `allowed_searches` int(9) DEFAULT NULL,
  `price` int(9) DEFAULT NULL,
  `packageDuration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `pid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectoptions`
--

CREATE TABLE `projectoptions` (
  `umid` int(9) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `rid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search_calculator`
--

CREATE TABLE `search_calculator` (
  `shid` int(9) NOT NULL,
  `uid` int(9) DEFAULT NULL,
  `remaining` int(9) DEFAULT NULL,
  `consumed` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sect`
--

CREATE TABLE `sect` (
  `sid` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usermeta`
--

CREATE TABLE `usermeta` (
  `umid` int(9) NOT NULL,
  `uid` int(9) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `upid` int(9) NOT NULL,
  `uid` int(9) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `profileImages` longtext,
  `interestedIn` varchar(255) DEFAULT NULL,
  `religion` int(9) DEFAULT NULL,
  `sect` int(9) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `motherTongue` int(9) DEFAULT NULL,
  `livingIn_Country` int(9) DEFAULT NULL,
  `livingIn_city` int(9) DEFAULT NULL,
  `base_country` int(9) DEFAULT NULL,
  `base_city` int(9) DEFAULT NULL,
  `profession` int(9) DEFAULT NULL,
  `aboutme` longtext,
  `interests` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `urid` int(9) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(9) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `joiningDate` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `profilePhoto` varchar(255) DEFAULT NULL,
  `gender` int(9) DEFAULT NULL,
  `packageID` int(9) DEFAULT NULL,
  `profilestatus` varchar(7) DEFAULT NULL,
  `userrole` int(9) DEFAULT NULL,
  `isemailverified` tinyint(1) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `isDeleted` tinyint(1) DEFAULT NULL,
  `deletedBy` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `firstName`, `lastName`, `email`, `password`, `joiningDate`, `phoneNumber`, `profilePhoto`, `gender`, `packageID`, `profilestatus`, `userrole`, `isemailverified`, `isActive`, `isDeleted`, `deletedBy`) VALUES
(3, 'sdfsf', 'sdf', 'sdfsf', 'sdfsdf@sdsdf.com', 'alishan11221122', '', '2342947824728', '', 0, 0, '', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countryid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`interestid`),
  ADD UNIQUE KEY `interestid_UNIQUE` (`interestid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `projectoptions`
--
ALTER TABLE `projectoptions`
  ADD PRIMARY KEY (`umid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `search_calculator`
--
ALTER TABLE `search_calculator`
  ADD PRIMARY KEY (`shid`);

--
-- Indexes for table `sect`
--
ALTER TABLE `sect`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD PRIMARY KEY (`umid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`upid`),
  ADD UNIQUE KEY `upid_UNIQUE` (`upid`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`urid`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countryid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `interestid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `pid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projectoptions`
--
ALTER TABLE `projectoptions`
  MODIFY `umid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `rid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `search_calculator`
--
ALTER TABLE `search_calculator`
  MODIFY `shid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sect`
--
ALTER TABLE `sect`
  MODIFY `sid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usermeta`
--
ALTER TABLE `usermeta`
  MODIFY `umid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `upid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `urid` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
