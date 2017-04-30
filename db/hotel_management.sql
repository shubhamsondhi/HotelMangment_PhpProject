-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 12:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_id` int(20) NOT NULL,
  `A_name` varchar(200) NOT NULL,
  `A_email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_id`, `A_name`, `A_email`, `password`) VALUES
(1, 'Prabhjot Kaur', 'jyotimand9@gmail.com', '123'),
(2, 'Rajinder Kaur', 'rajinderbhatti08@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Check-in_date` date NOT NULL,
  `Check-out_date` date NOT NULL,
  `u_id` int(100) NOT NULL,
  `r_id` int(100) NOT NULL,
  `facilty1` varchar(100) NOT NULL,
  `facility2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Check-in_date`, `Check-out_date`, `u_id`, `r_id`, `facilty1`, `facility2`) VALUES
('2016-07-14', '2016-07-14', 1, 5, 'no', 'no'),
('2016-07-26', '2016-07-27', 1, 5, 'no', 'no'),
('2016-06-05', '2016-06-05', 1, 12, 'no', 'no'),
('2016-06-05', '2016-06-05', 1, 14, 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `contect us`
--

CREATE TABLE `contect us` (
  `First name` varchar(100) NOT NULL,
  `Last name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contect us`
--

INSERT INTO `contect us` (`First name`, `Last name`, `Email`, `Phone`, `massage`) VALUES
('dasd', 'asdas', 'sdf@fdf.c', '1234567890', 'asd'),
('dasd', 'asdas', 'sdf@fdf.c', '1234567890', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `Customer_id` int(200) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Postcode` int(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `Mobile_no.` varchar(200) NOT NULL,
  `E_mail` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`Customer_id`, `First_name`, `Last_name`, `Address`, `Postcode`, `State`, `Mobile_no.`, `E_mail`, `password`) VALUES
(1, 'Manmeet', 'Singh', 'Near Baba Deep Singh Med. Store,Sarhali Rd.,Patti', 143416, 'Punab', '9517306863', 'manmeetsingh1@gmail.com', ''),
(2, 'Kuldeep', 'Kaur', 'v.p.o. Sarhali Mandan, teh_Patti,disst_Taran-Taran', 143415, 'Punjab', '9780828329', 'kaurkuldeep@gmail.com', ''),
(3, 'Dharminder', 'Singh', 'v.p.o. Sarhali Mandan, teh_Patti,disst_Taran-Taran', 143415, 'Punjab', '9780509726', 'singhdharminder0568@gmail.com', ''),
(4, 'as', '66', 'sd', 123, 'ass', '123', 'admin@admin', '123'),
(5, 'as', '66', 'sd', 123, 'ass', '123', 'shubham@gg', '123'),
(6, 'as', '66', 'sd', 123, 'ass', '123', 'shubham@gg', '123'),
(7, 'as', '66', 'sd', 123, 'ass', '123', 'shubham@gg', '123'),
(8, 'as', '66', 'sd', 123, 'ass', '123', 'shubham@gg', '123'),
(9, 'as', '66', 'sd', 123, 'ass', '123', 'shubham@gg', '123'),
(10, 'shubam', 'shubam', 'ghjkll;t5y', 456, 'asr', '1234567804', 'shubam@gm', '123'),
(11, 'veena', 'veena', 'gyhjkjklg', 41, 'ssss', '1234567803', 'veena@gm.com', '123'),
(12, 'poona', 'poona', 'lohari gate', 12, 'ars', '1234567803', 'poona@gm.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_name` varchar(200) NOT NULL,
  `Hotel_location` varchar(200) NOT NULL,
  `Hotel_Website` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_name`, `Hotel_location`, `Hotel_Website`) VALUES
('Hotel Mand Inn', 'Hotel Mand Inn,Green Avenue,Amritsar', 'www.hotelmandinn.co.in'),
('Room', 'India', 'fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_billing`
--

CREATE TABLE `invoice_billing` (
  `Id` int(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_type` varchar(200) NOT NULL,
  `Customer_id` int(200) NOT NULL,
  `Booking_id` int(200) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Credit_card_no.` int(200) NOT NULL,
  `Expire_date` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_type`, `Customer_id`, `Booking_id`, `First_name`, `Last_name`, `Credit_card_no.`, `Expire_date`) VALUES
('0', 1, 0, 'Manmeet', 'Singh', 2147483647, 17);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_id` int(200) NOT NULL,
  `Room_type` varchar(200) NOT NULL,
  `Room_name` varchar(200) NOT NULL,
  `Room_price` int(200) NOT NULL,
  `Room_image` varchar(200) NOT NULL,
  `Room_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_id`, `Room_type`, `Room_name`, `Room_price`, `Room_image`, `Room_description`) VALUES
(5, 'Delux room', '2', 3000, 'image/FB_IMG_1467130001202.jpg', 'Queen size bed,Furniture,Aircon,Free wi_fi,Cable T.V.'),
(8, '24', '1', 2000, 'image/ishot-1.jpg', 'good'),
(9, '23', '12', 1000, 'image/london-luxury-mansion-living-room-design.jpg', 'god'),
(10, '14', '4', 0, 'image/', ''),
(11, '74', '5', 1000, 'image/luxurious-white-bedrom-by-bonaldo.jpg', 'good'),
(12, '78', '2', 3000, 'image/miami-hotel-room.jpg', 'vry good'),
(13, '45', '6', 2000, 'image/london-luxury-mansion-living-room-design.jpg', 'wonderful'),
(14, '46', '8', 3000, 'image/zalf-kids-bedroom-3.jpg', 'oswm'),
(15, '13', '10', 2500, 'image/london-luxury-mansion-living-room-design.jpg', 'wonderful'),
(16, '94', '15', 2000, 'image/suite-new-york-hotel.jpg', 'good'),
(17, '94', 'rhate', 2000, 'image/suite-new-york-hotel.jpg', 'good'),
(18, '94', 'rhate', 2000, 'image/suite-new-york-hotel.jpg', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_name`);

--
-- Indexes for table `invoice_billing`
--
ALTER TABLE `invoice_billing`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `Customer_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
