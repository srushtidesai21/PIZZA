-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 08:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `nameUsers` tinytext NOT NULL,
  `emailUsers` varchar(150) NOT NULL,
  `pwdUsers` varchar(500) NOT NULL,
  `contactUsers` int(100) NOT NULL,
  `cityUsers` tinytext NOT NULL,
  `addrUsers` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `nameUsers`, `emailUsers`, `pwdUsers`, `contactUsers`, `cityUsers`, `addrUsers`) VALUES
(6, 'Srushti', 'srushtidesai@gmail.com', '', 683798, 'vapi', 'lkvkkmkm23knvf'),
(7, 'Srushti', 'mallsgai@gmail.com', '', 98798, 'hgbj', 'jhgjhfhg'),
(8, 'Rucha', 'ruchad@gmail.com', '', 980, 'kjnj', 'knlml'),
(10, 'drishti', 'drishti@gmail.com', '', 8708, 'khjlk', 'lkdjsllf'),
(11, 'Moosa', 'ansarimoosa99@gmail.com', '', 2147483647, 'bom', 'bombay'),
(12, 'Moosa', 'moo99@gmail.com', '', 9808, 'jskjhfs', 'khek'),
(13, 'hyh', 'yh7@gmail.com', '', 12345, 'ldfkj', 'jrfhu'),
(14, 'heeta', 'heeta@gmail.com', '', 980809, 'kjdskcj', 'dnhkjjjdj'),
(15, 'manoj', 'mano@gmail.com', '', 9878765, 'jhgh', 'jhgjnkjk'),
(16, 'sid', 'sid@gmail.com', '$2y$10$8aTGi02HnsO9xMYGoapgT.x9uH32o45f.mTlXb2rFzVzC26KM8ss2', 887, 'oiuyt', 'lkjytggf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
