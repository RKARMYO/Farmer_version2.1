-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 04:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localstorage`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `dbId` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `part1` blob NOT NULL,
  `part2` blob NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `dbId` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `part1` blob NOT NULL,
  `part2` blob NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insects`
--

CREATE TABLE `insects` (
  `dbId` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `part1` blob NOT NULL,
  `part2` blob NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `dbId` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `part1` blob NOT NULL,
  `part2` blob NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serverdata`
--

CREATE TABLE `serverdata` (
  `dbId` int(11) NOT NULL,
  `data_title` text COLLATE utf8_unicode_ci NOT NULL,
  `data_main` text COLLATE utf8_unicode_ci NOT NULL,
  `data_image` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `serverdata`
--

INSERT INTO `serverdata` (`dbId`, `data_title`, `data_main`, `data_image`) VALUES
(1, 'test1', 'my name is arkarmyo.', NULL),
(2, 'test2', 'i live in myitkyina.', NULL),
(3, 'test3', 'hello, every body...', NULL),
(4, 'test4', 'ok,,,finally it work.ha ha', NULL),
(5, 'test5', 'error found in localstorage.', NULL),
(6, 'test6', 'how are you?', NULL),
(7, 'test7', 'အာကာမျိုး', NULL),
(8, 'test8', 'happy New Year!', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usersend`
--

CREATE TABLE `usersend` (
  `dbId` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usersend`
--

INSERT INTO `usersend` (`dbId`, `title`, `paragraph`) VALUES
(1, 'test1', 0x7465737431),
(2, 'test2', 0x7465737432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`dbId`);

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`dbId`);

--
-- Indexes for table `insects`
--
ALTER TABLE `insects`
  ADD PRIMARY KEY (`dbId`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`dbId`);

--
-- Indexes for table `serverdata`
--
ALTER TABLE `serverdata`
  ADD PRIMARY KEY (`dbId`);

--
-- Indexes for table `usersend`
--
ALTER TABLE `usersend`
  ADD PRIMARY KEY (`dbId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `insects`
--
ALTER TABLE `insects`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `serverdata`
--
ALTER TABLE `serverdata`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usersend`
--
ALTER TABLE `usersend`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
