-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 05:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astha`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `mobile` char(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuID` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `menuitem` varchar(40) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuID`, `category`, `menuitem`, `price`) VALUES
(1, 'VEG-snacks', 'French Fry', 120),
(2, 'VEG-snacks', 'Chips Chilly', 150),
(3, 'VEG-snacks', 'Veg Pakauda (8 pcs)', 130),
(4, 'VEG-snacks', 'Paneer Pakauda (8pcs)', 235),
(5, 'VEG-snacks', 'Khaju Fry', 300),
(6, 'VEG-snacks', 'Peanuts Sadeko', 120),
(7, 'VEG-snacks', 'Green Salad', 120),
(8, 'VEG-snacks', 'Bhatmas Sadeko', 100),
(9, 'NON-VEG-snacks', 'Chicken chilly', 230),
(10, 'NON-VEG-snacks', 'Chicken choyala', 180),
(11, 'NON-VEG-snacks', 'Chicken Drumstick', 250),
(12, 'NON-VEG-snacks', 'Chicken sausage ', 45),
(13, 'NON-VEG-snacks', 'Chicken Roast', 350),
(14, 'NON-VEG-snacks', 'Chicken fry', 200),
(15, 'NON-VEG-snacks', 'Fish Fry (4pcs)', 200),
(16, 'NON-VEG-snacks', 'Buff Chilly', 225),
(17, 'NON-VEG-snacks', 'Buff choyala', 180),
(18, 'NON-VEG-snacks', 'Buff Sukuti', 200),
(19, 'NON-VEG-snacks', 'Buff Sausage ', 40),
(20, 'PIZZA', 'Veg. cheese pizza', 250),
(21, 'PIZZA', 'Chicken pizza', 285),
(22, 'PIZZA', 'Mushroom pizza', 285),
(23, 'PIZZA', 'Mix pizza', 300),
(24, 'CHOWMIN', 'Veg. Chowmein', 80),
(25, 'CHOWMIN', 'Chicken Chowmein', 110),
(26, 'CHOWMIN', 'buff Chowmein', 100),
(27, 'CHOWMIN', 'egg Chowmein', 90),
(28, 'SOUP', 'Veg. Soup', 100),
(29, 'SOUP', 'Chicken Soup', 130),
(30, 'SOUP', 'Mushroom Soup', 150),
(31, 'SOUP', 'Hot & Sour  Soup', 170),
(32, 'MOMO', 'Chicken Momo', 110),
(33, 'MOMO', 'buff Momo', 90),
(34, 'MOMO', 'Veg  Momo', 80),
(35, 'CHOPUEY', 'American Chopsuey', 230),
(40, 'CHOPUEY', 'Chinese Chopsuey', 250),
(41, 'CHOPUEY', 'Veg. Chopsuey', 100),
(42, 'THUKPA', 'Veg. Thukpa', 110),
(43, 'THUKPA', 'Chicken  Thukpa', 130),
(44, 'THUKPA', 'Buff Thukpa', 130),
(45, 'THUKPA', 'Mixed thukpa', 150),
(46, 'SEKUWA', 'Chicken Sekuwa', 250),
(47, 'SEKUWA', 'Buff Sekuwa', 200),
(48, 'SEKUWA', 'Pork Sekuwa', 300),
(49, 'SEKUWA', 'Mutton Sekuwa', 350),
(50, 'COLD BEVERAGE', 'Plain Lassi', 110),
(51, 'COLD BEVERAGE', 'Plain Lassi', 65),
(52, 'COLD BEVERAGE', 'Pepsi, Dew, Mirinda', 55),
(53, 'COLD BEVERAGE', 'Coke, Fanta, Sprite', 55),
(54, 'COLD BEVERAGE', 'Lime Juice', 50),
(55, 'COLD BEVERAGE', 'Red Bull', 50),
(56, 'COLD BEVERAGE', 'Mineral Water', 25),
(57, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
