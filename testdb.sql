-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 26, 2021 at 08:07 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajx`
--

DROP TABLE IF EXISTS `ajx`;
CREATE TABLE IF NOT EXISTS `ajx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `terms` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ajx`
--

INSERT INTO `ajx` (`id`, `terms`) VALUES
(1, 'web'),
(2, 'hypertext'),
(3, 'hypermedia'),
(4, 'AJAX'),
(5, 'HTML'),
(6, 'CSS'),
(7, 'ASD'),
(8, 'ASF'),
(9, 'ASx'),
(10, 'ASZ'),
(11, 'ASW');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `u_id`, `p_id`, `p_name`, `p_price`, `quantity`, `size`, `picture`) VALUES
(37, 1, 6, 'Grey Shorts', 1100, 1, 'large', 'uploads/6.jpg'),
(33, 1, 9, 'Black Jeans', 1800, 1, 'large', 'uploads/11.jpg'),
(34, 1, 9, 'Black Jeans', 7200, 4, 'xlarge', 'uploads/11.jpg'),
(4, 3, 2, 'Casual Dress Shirt', 6000, 3, 'xlarge', 'uploads/2.PNG'),
(35, 1, 9, 'Black Jeans', 5400, 3, 'medium', 'uploads/11.jpg'),
(42, 3, 2, 'Casual Dress Shirt', 2000, 1, 'medium', 'uploads/2.PNG'),
(43, 3, 4, 'Plain White Shirt', 700, 1, 'xlarge', 'uploads/w4.jpg'),
(44, 3, 5, 'Plain Grey Shirt', 750, 1, 'large', 'uploads/w5.jpg'),
(45, 3, 5, 'Plain Grey Shirt', 750, 1, 'large', 'uploads/w5.jpg'),
(46, 1, 5, 'Plain Grey Shirt', 750, 1, 'medium', 'uploads/w5.jpg'),
(47, 1, 5, 'Plain Grey Shirt', 750, 1, 'xlarge', 'uploads/w5.jpg'),
(48, 3, 3, 'Red Polo shirt', 1000, 1, 'xlarge', 'uploads/3.jpg'),
(51, 1, 9, 'Black Jeans', 1800, 1, 'large', 'uploads/11.jpg'),
(50, 3, 3, 'Red Polo shirt', 4000, 4, 'xlarge', 'uploads/3.jpg'),
(52, 3, 6, 'Grey Shorts', 1100, 1, 'xlarge', 'uploads/6.jpg'),
(53, 3, 6, 'Grey Shorts', 1100, 1, 'xlarge', 'uploads/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

DROP TABLE IF EXISTS `cart2`;
CREATE TABLE IF NOT EXISTS `cart2` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity2` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price2` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart2`
--

INSERT INTO `cart2` (`cart_id`, `u_id`, `p_id`, `quantity2`, `size`, `price2`, `time`) VALUES
(6, 1, 2, 1, 'small', 2000, '2021-06-25 17:00:00'),
(8, 1, 2, 2, 'medium', 4000, '2021-06-25 17:10:00'),
(5, 4, 10, 3, 'medium', 2250, '0000-00-00 00:00:00'),
(14, 3, 3, 1, 'small', 1000, '2021-06-26 01:28:39'),
(15, 3, 3, 1, 'medium', 1000, '2021-06-26 01:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

DROP TABLE IF EXISTS `extra`;
CREATE TABLE IF NOT EXISTS `extra` (
  `id2` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id2`, `size`, `quantity2`) VALUES
(11, 'large', 10),
(11, 'medium', 11),
(11, 'small', 10),
(2, 'small', 5),
(2, 'medium', 92),
(2, 'large', 10),
(3, 'small', 8),
(3, 'medium', 9),
(3, 'large', 11),
(10, 'small', 9),
(10, 'medium', 7),
(10, 'large', 11),
(10, 'x-large', 12),
(11, 'x-large', 7),
(6, '32', 4),
(6, '34', 9),
(6, '36', 10),
(6, '38', 10),
(12, 'small', 10),
(12, 'medium', 9),
(12, 'large', 10),
(12, 'x-large', 11);

-- --------------------------------------------------------

--
-- Table structure for table `male`
--

DROP TABLE IF EXISTS `male`;
CREATE TABLE IF NOT EXISTS `male` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `details` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `male`
--

INSERT INTO `male` (`id`, `name`, `category`, `details`, `quantity`, `price`, `gender`, `picture`) VALUES
(11, 'Blue shirt', 'shirt', '100% cotton. Easy to wear', 7, 1500, 'male', 'uploads/1.jpg'),
(2, 'Casual Dress Shirt', 'shirt', '100% cotton', 10, 2000, 'male', 'uploads/2.PNG'),
(3, 'Red Polo shirt', 'shirt', '100% cotton', 9, 1000, 'male', 'uploads/3.jpg'),
(10, 'Plain White Shirt', 'shirt', '100% Cotton. Easy to wash', 9, 750, 'male', 'uploads/w4.jpg'),
(12, 'Plain Grey Shirt', 'shirt', '100% Cotton. Easy tow wear', 10, 1000, 'male', 'uploads/w5.jpg'),
(6, 'Grey Shorts', 'pant', '100% Cotton. Easy to Wash', 10, 1100, 'male', 'uploads/6.jpg'),
(8, 'Blue Denim', 'pant', 'Denim. Rugged. Jeans', 7, 2500, 'male', 'uploads/8.jpg'),
(9, 'Black Jeans', 'pant', 'Jeans. Washable.', 11, 1800, 'male', 'uploads/11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_code` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `email`, `address`, `post_code`, `phone`, `p_id`, `quantity`, `size`, `price`, `time`, `completed`) VALUES
(1, 1, 'sani@mail.com', 'B-216 Gulistan Colony', 42450, '03131520078', 2, 1, 'small', 2000, '2021-06-25 17:27:31', 0),
(2, 1, 'sani@mail.com', 'B-216 Gulistan Colony', 42450, '03131520078', 2, 2, 'medium', 2000, '2021-06-25 17:27:31', 0),
(3, 1, 'sani@mail.com', 'B-216 Gulistan Colony', 42450, '03131520078', 6, 3, '32', 1100, '2021-06-25 17:27:31', 0),
(4, 3, 'ab@mail.com', 'A-22 Lalarukh', 43000, '03153404040', 3, 1, 'small', 1000, '2021-06-26 01:31:32', 0),
(5, 3, 'ab@mail.com', 'A-22 Lalarukh', 43000, '03153404040', 3, 1, 'medium', 1000, '2021-06-26 01:31:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

DROP TABLE IF EXISTS `table_users`;
CREATE TABLE IF NOT EXISTS `table_users` (
  `user_Id` int(3) NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(40) NOT NULL,
  `user_Email` varchar(25) NOT NULL,
  `user_CNIC` varchar(18) NOT NULL,
  `user_Comments` varchar(100) NOT NULL,
  `user_Telephone` varchar(15) NOT NULL,
  `user_Picture` varchar(100) NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_users`
--

INSERT INTO `table_users` (`user_Id`, `user_Name`, `user_Email`, `user_CNIC`, `user_Comments`, `user_Telephone`, `user_Picture`) VALUES
(2, 'ali khan', 'alikhan@mail.com', '3212-1111-111', '2nd entry in DB', '022222222', 'uploads/2.PNG'),
(3, 'khan baba', 'khan@hdmdil.com', '3333-3333-333', '3rd entry', '033312334000', 'uploads/3.jpg'),
(4, 'kaka khel', 'kaka@mail.com', '4444-4444-4444', '4th entry', '0444124444', 'uploads/1.jpg'),
(7, 'babu bhai', 'bb@mail.com', '5555-55555-555', '5th entry', '0555555555', 'uploads/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `total_price` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `city`, `post_code`, `phone`, `total_price`) VALUES
(1, 'sani', 'usnain', 'sani@mail.com', 'asdfghjkl', 'B-216 Gulistan Colony', 'WAH CANTT', 42450, '03131520078', 10065),
(3, 'aaa', 'bbb', 'ab@mail.com', 'asdfghjk', 'A-22 Lalarukh', 'WAH CANTT', 43000, '03153404040', 2400),
(4, 'lala', 'khan', 'lala@mail.com', 'asdfghjkl', 'G-6/1 Gali22, Islamabad', 'Islamabad', 44000, '03001233456', 3818);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
