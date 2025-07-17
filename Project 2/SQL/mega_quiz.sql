-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 08:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mega quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gmail` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `gmail`, `comment`) VALUES
(1, 'utsav', 'chotaliya', 'utsavchotaliya1603@gmail.com', 'wow'),
(2, 'saurabh', 'dave', 'saurabhdave942@gmail.com', 'super'),
(3, 'om', 'mavani', 'ommavani123@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `registor`
--

CREATE TABLE `registor` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registor`
--

INSERT INTO `registor` (`id`, `user_name`, `password`, `usertype`, `gmail`) VALUES
(1, 'utsav', '8866', 'user', 'utsavchotaliya1603@gmail.com'),
(2, 'saurabh', '5300', 'user', 'saurabhdave942@gmail.com'),
(6, 'om', '6666', '', 'ommavani1232hmail.com');

--
-- Triggers `registor`
--
DELIMITER $$
CREATE TRIGGER `delete trigger` AFTER DELETE ON `registor` FOR EACH ROW DELETE FROM users WHERE users.id = OLD.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert trigger` AFTER INSERT ON `registor` FOR EACH ROW insert into users values(new.id,new.user_name,new.password,new.usertype)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_trigger` AFTER UPDATE ON `registor` FOR EACH ROW UPDATE users
SET user_name = NEW.user_name,password = NEW.password
WHERE users.id = NEW.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `usertype` mediumtext NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `usertype`) VALUES
(1, 'utsav', '8866', 'user'),
(2, 'saurabh', '5300', 'user'),
(3, 'admin', '2116', 'admin'),
(6, 'om', '6666', '');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `registor` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
   
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registor`
--
ALTER TABLE `registor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registor`
--
ALTER TABLE `registor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
