-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 04:41 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_of_order`
--

CREATE TABLE `address_of_order` (
  `ORDER_ID` int(20) NOT NULL,
  `F_NO` int(10) DEFAULT NULL,
  `S_NAME` varchar(50) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `P_CODE` varchar(50) DEFAULT NULL,
  `LANDMARK` varchar(50) DEFAULT NULL,
  `addtype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_of_order`
--

INSERT INTO `address_of_order` (`ORDER_ID`, `F_NO`, `S_NAME`, `CITY`, `STATE`, `P_CODE`, `LANDMARK`, `addtype`) VALUES
(6869201, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3635783, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7421786, 0, '', '', '', '', '', NULL),
(2117175, 1, 'abx', 'sbc', 'Maharashtra', '422001', 'abc', 'HOME'),
(2447971, 1, 'abx', 'sbc', 'Maharashtra', '422001', 'abc', 'HOME'),
(6032361, 0, '', '', 'Maharashtra', '', '', NULL),
(6976402, 0, 'abcbabxbxb', 'abcbcbcb', 'Maharashtra', '422008', 'abxvssh', 'HOME'),
(3947260, 0, 'sadsa', 'sdsa', 'Maharashtra', '32132', '324324', 'HOME'),
(7190449, 0, 'asdas', 'dasdsa', 'Maharashtra', 'sdsasa', 'sadasd', 'HOME'),
(6386572, 0, 'dsadsa', 'asdasd', 'Maharashtra', 'sadad', 'adsdsa', 'HOME'),
(4924482, 0, 'AsaSA', 'asaS', 'Maharashtra', 'AsaS', 'ASas', 'HOME'),
(1239199, 0, 'rangtarng society', 'Nashik', 'Maharashtra', '422008', 'State Bank Atm', 'HOME'),
(3631091, 0, 'nashik', 'Nashik', 'Maharashtra', '422008', 'nashik', 'HOME'),
(1635110, 4, 'agrtqwta', 'Nashik', 'Maharashtra', '422008', 'thqyathyq', 'HOME'),
(6583918, 0, 'vcxxcvc', 'Nashik', 'Maharashtra', '422010', 'cvcxvxcvc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `SN` int(11) NOT NULL DEFAULT '0',
  `NAME` varchar(50) DEFAULT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `IMG_NAME` varchar(30) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`SN`, `NAME`, `PRICE`, `IMG_NAME`, `id`) VALUES
(1, 'HARRY POTTER PHILOSOPHERS STONE', 150, 'hp_1.jpg', 1),
(2, 'HARRY POTTER AND CHAMBER OF SECRET', 267, 'hp_2.jpg', 1),
(3, 'HARRY POTTER AND PRISONER OF AZKABAN', 194, 'hp_3.jpeg', 1),
(4, 'HARRY POTTER AND GOBLET OF FIRE', 115, 'hp_4.jpg', 1),
(5, 'HARRY POTTER AND ORDER OF PHOENIX', 225, 'hp_5.jpg', 1),
(6, 'HARRY POTTER AND HALF BLOOD PRINCE', 267, 'hp_6.jpg', 1),
(7, 'HARRY POTTER AND DEATHLY HOLLOWS', 289, 'hp_7.jpeg', 1),
(8, 'SHERLOCK HOLMES 1', 256, 'sh_1.jpg', 2),
(9, 'SHERLOCK HOLMES 2', 178, 'sh_2.jpg', 2),
(10, 'SHERLOCK HOLMES 3', 162, 'sh_3.jpg', 2),
(11, 'SHERLOCK HOLMES 4', 225, 'sh_4.jpg', 2),
(12, 'SHERLOCK HOLMES 5', 136, 'sh_5.jpg', 2),
(13, 'SHERLOCK HOLMES 6', 168, 'sh_6.jpg', 2),
(14, 'SHERLOCK HOLMES 7', 159, 'sh_7.jpg', 2),
(15, 'YOUR MIND CAN HEAL YOUR BODY', 245, 'mh_1.jpg', 3),
(16, 'HEALING POWER CHRISTIAN MIND', 276, 'mh_2.jpg', 3),
(17, 'THE TOUCH OF HEALING', 147, 'mh_3.jpg', 3),
(18, 'THE BOOK OF PENDIUM HEALING', 189, 'mh_4.jpg', 3),
(19, 'THROUGH TIME INTO HEALING', 235, 'mh_5.jpg', 3),
(20, 'BOUNDLESS HEALING', 157, 'mh_6.jpg', 3),
(21, 'CHOICES IN HEALING', 128, 'mh_7.jpg', 3),
(22, 'BEYOND PAST LIVES', 123, 'mh_8.jpg', 3),
(23, 'AGATHA KHRISTHI', 345, 'mb_1.jpg', 4),
(24, 'MRITUNJAY', 235, 'mb_2.jpg', 4),
(25, 'MI MRITUNJAY MI SAMBHAJI', 117, 'mb_3.jpg', 4),
(26, 'YAYATI', 367, 'mb_4.jpg', 4),
(27, 'CHETAN BHAGAT HALF GIRLFRIEND', 289, 'mb_5.jpg', 4),
(28, 'SHIVBACHA SHILEDAR', 276, 'mb_6.jpg', 4),
(29, 'MI ABHIMANYU', 178, 'mb_7.jpg', 4),
(30, 'CHHAVA', 145, 'mb_8.jpg', 4),
(31, 'SHAMCHI AAI', 290, 'mb_9.jpg', 4),
(32, 'PANIPAT', 137, 'mb_10.jpg', 4),
(33, 'SAMBHAJI SHAPIT RAJHANS', 256, 'mb_11.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `SN` int(5) NOT NULL,
  `BOOK_NAME` varchar(50) DEFAULT NULL,
  `B_QTY` int(10) DEFAULT NULL,
  `T_PRICE` int(10) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`SN`, `BOOK_NAME`, `B_QTY`, `T_PRICE`, `username`) VALUES
(8, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(10, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(11, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(12, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(13, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(14, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(15, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(16, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(18, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(19, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(20, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(21, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(22, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(23, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(24, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(25, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(26, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(27, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(28, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(29, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(30, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(31, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(32, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(33, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(34, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(35, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(36, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(37, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(38, 'HARRY POTTER AND ORDER OF PHOENIX', 1, 225, 'legpasca'),
(39, 'HARRY POTTER AND GOBLET OF FIRE', 1, 115, 'legpasca'),
(40, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(41, 'HARRY POTTER AND CHAMBER OF SECRET', 1, 267, 'legpasca'),
(42, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(43, 'HARRY POTTER AND CHAMBER OF SECRET', 1, 267, 'legpasca'),
(44, 'HARRY POTTER AND PRISONER OF AZKABAN', 1, 194, 'legpasca'),
(45, 'HARRY POTTER AND CHAMBER OF SECRET', 1, 267, 'legpasca'),
(46, 'HARRY POTTER AND ORDER OF PHOENIX', 3, 675, 'legpasca'),
(47, 'HARRY POTTER PHILOSOPHERS STONE', 1, 150, 'legpasca'),
(48, 'HARRY POTTER AND CHAMBER OF SECRET', 1, 267, 'legpasca'),
(49, 'HARRY POTTER AND HALF BLOOD PRINCE', 3, 801, 'legpasca');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `officename` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `officetype` varchar(50) DEFAULT NULL,
  `Deliverystatus` varchar(50) DEFAULT NULL,
  `divisionname` varchar(50) DEFAULT NULL,
  `regionname` varchar(50) DEFAULT NULL,
  `circlename` varchar(50) DEFAULT NULL,
  `taluk` varchar(50) DEFAULT NULL,
  `districtname` varchar(50) DEFAULT NULL,
  `statename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `NO` int(11) NOT NULL,
  `un` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mob` int(11) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`NO`, `un`, `email`, `mob`, `msg`) VALUES
(1, 'legpasca', 'dsvsvdsd@gmail.com', 343453434, 'sadsadas'),
(2, 'legpasca', 'sadasd@ssd.com', 98298329, 'dsdcsdc'),
(3, 'legpasca', 'sadasd@ssd.com', 98298329, 'dsdcsdc'),
(4, 'legpasca', 'sadasd@ssd.com', 98298329, 'dsdcsdc'),
(5, 'legpasca', 'sadasd@ssd.com', 98298329, 'dsdcsdc'),
(6, 'legpasca', 'leg@gmail.com', 2147483647, 'hello'),
(7, 'legpasca', 'leg@gmail.com', 989828828, 'hhszhjshzjhgshjg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `BOOK_NAME` varchar(50) DEFAULT NULL,
  `B_QTY` int(10) DEFAULT NULL,
  `T_PRICE` int(10) DEFAULT NULL,
  `exp_del` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'To Be Delivered',
  `ORDER_ID` int(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `birthdate`, `gender`, `email`, `username`, `password`) VALUES
('leg', 'pasca', '2001-05-31', 'male', 'leg@gmail.com', 'legpasca', 'legpasca'),
('Prafull', 'Chavan', '2001-05-31', 'male', 'leg@gmail.com', 'PrafullChavan', 'PrafullChavan'),
('sam', 'Chavan', '2001-01-01', 'female', 'sam@gmsail.com', 'samchavan', 'samchavan'),
('Nita', 'Shimpi', '1990-05-09', 'female', 'nita@gmail.com', 'nita@123', 'prafull'),
('sadhasdjkh', 'sjsakjdsakjsk', '2001-03-31', 'male', 'ffasdlklk@gmail.com', 'majdklasj', 'sajkdkas'),
('ash', 'asg', '2000-12-01', 'female', 'ash@gmail.com', 'abcdefgh', 'abcdefgh'),
('sandeep', 'shewale', '2001-05-31', 'male', 'hshdkhska@gmail.com', 'hsjhhsdh', 'jjshjhdsj'),
('prafull', 'chavan', '2001-05-31', 'male', 'Prafullchavan0123@gmail.com', 'pr123456', 'pr123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `SN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
