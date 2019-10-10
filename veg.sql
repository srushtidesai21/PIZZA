-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 08:05 PM
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
-- Database: `veg`
--

-- --------------------------------------------------------

--
-- Table structure for table `veg1`
--

CREATE TABLE `veg1` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veg1`
--

INSERT INTO `veg1` (`id`, `image`, `name`, `ingredients`, `price`) VALUES
(1, 'img3/farmhouse.jpg', 'FARMHOUSE', 'Delightful combination of onion, capsicum, tomato and grilled mushroom.', 350),
(2, 'img3/margherita.jpg', 'CLASSIC MARGHERITA', 'A classic delight with 100% real mozzarella cheese and Tomato sauce', 350),
(3, 'img3/cf.jpg', 'COUNTRY FEAST', 'Green capsicum,Mushroom,Onion,Sweetcorn,Tomato,Olives', 350),
(4, 'img3/mexican.jpg', 'MEXICAN VEGGIE', 'Mexican herbs sprinkled on onion,capsicum,tomato and jalapeno', 350),
(5, 'img3/paneersoyamasala.jpg', 'PANEER SOYA MASALA', 'Green Capsicum,Masala soya chunk,onion,paneer,red paprika', 350),
(6, 'img3/spicedpaneer.jpg', 'SPICED PANEER', 'Flavorful trio of juicy paneer,crisp capsicum with spicy red paprika', 350),
(7, 'img3/tandooripaneer.jpg', 'TANDOORI PANEER', 'Paneer Chunks,Green capsicum,onion,,red paprika,tomato,jalapenos', 350),
(8, 'img3/vegexotica.jpg', 'VEG EXOTICA', ' Babycorn, black olives, green capsicum,jalapenoS,Red and yellow capsicums.', 350),
(9, 'img3/veggiefeast.jpg', 'VEGGIE FEAST', 'The awesome foursome!Golden corn,black olives,capsicum,red paprika', 350),
(10, 'img3/veggieparadise.jpg', 'VEGGIE PARADISE', ' Onion,tomato,jalapeno,babycorn,olives,paprika and some herbs', 350),
(11, 'img3/vegitaliano.jpg', 'VEG ITALIANO', 'Black olives,green and yellow zucchini,jalapeno,mushroom,red paprika', 350),
(12, 'img3/vegsupereme.jpg', 'VEG SUPREME', 'Black olives,green capsicum,mushroom,onion,red paprika,sweet corn', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veg1`
--
ALTER TABLE `veg1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veg1`
--
ALTER TABLE `veg1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
