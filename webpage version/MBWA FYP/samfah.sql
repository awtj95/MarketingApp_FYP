-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 10:58 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samfah`
--

-- --------------------------------------------------------

--
-- Table structure for table `retailer_list`
--

CREATE TABLE `retailer_list` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `company` varchar(255) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer_list`
--

INSERT INTO `retailer_list` (`id`, `name`, `email`, `password`, `company`, `contact`, `description`) VALUES
(1, 'sdf jhfc', 'asjfg@g.com', 'ajdfg861', 'jkasdc jags', '1236891613', 'sdfkjga ufg ef'),
(2, 'as', 'asjfg@g.com', 'i7t ', 'jhf hjf', '3456789056', 'hgajshc iuasc'),
(3, 'wef', 'wf@g.ovm', 'kaslfh', 'jkavf', '8t76215678', 'g dsgcjkb'),
(4, 'asd', 'asc@ha.com', 'ogy98', 'gugc', '8916245998', 'hgv vkdc lwef'),
(5, 'sauk', 'je@h.com', '86896hjg', 'jgd ewhr', '91863681237', 'jgdb sdfgwj errf');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_request`
--

CREATE TABLE `retailer_request` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `contact`, `description`) VALUES
(1, 'asd', 'asd', 'asd@g.com', 'q3r12xc', 'male', '123896124', 'ad asd asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retailer_list`
--
ALTER TABLE `retailer_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_request`
--
ALTER TABLE `retailer_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `retailer_list`
--
ALTER TABLE `retailer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `retailer_request`
--
ALTER TABLE `retailer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
