-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12


CREATE DATABASE IF NOT EXISTS pg;
USE pg;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(2) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `facilities` varchar(200) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `ownername` varchar(200) NOT NULL,
  `ownermobile` varchar(10) NOT NULL,
  `owneraddress` varchar(500) NOT NULL,
  `area` varchar(200) NOT NULL,
  `buildingname` varchar(200) NOT NULL,
  `roommates` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `landmark` varchar(200) NOT NULL,
  `map` varchar(200) NOT NULL,
  `nosroom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `image1`, `image2`, `image3`, `name`, `price`, `facilities`, `roomtype`, `address`, `ownername`, `ownermobile`, `owneraddress`, `area`, `buildingname`, `roommates`, `gender`, `landmark`, `map`, `nosroom`) VALUES
(1, 'img/bg1.jpg', 'img/bg2.jpg', 'img/bg3.jpg', 'Room 1', 'Price:₹8,000/month', 'Wi-Fi, AC, Laundry, Kitchen', '1 BHK', 'bibewadi', 'Deepika Sidral', '8010282423', 'ABC', '', '', '', '', '', '', ''),
(2, 'img/bg1.jpg', 'img/bg2.jpg', 'img/bg3.jpg', 'Room 2', 'Price: ₹10,000/month', 'Wi-Fi, AC, Laundry, Kitchen', '2 BHK', 'bibewadi', 'Deepika Sidral', '8010282423', 'ABC', '', '', '', '', '', '', ''),
(14, 'uploads/', 'uploads/', 'uploads/', 'Room3', '10000', 'Parking', '1bhk', 'shdghjas', 'Deepika', '8010282423', 'jsdhksajh', 'wdjashg', 'ejwhe', '6', 'any', 'asdjash', 'https://www.google.com/maps?q=18.49482039206196,73.89474946794638&output=embed', ''),
(15, 'uploads/', 'uploads/', 'uploads/', '', '500', '', '1bhk', '', '', '', '', '', '', '', 'any', '', '', ''),
(16, 'uploads/', 'uploads/', 'uploads/', '', '600', '', '1bhk', '', '', '', '', '', '', '', 'any', '', '', ''),
(18, 'uploads/', 'uploads/', 'uploads/', 'Room4', '4000', 'Gym', '1bhk', 'bibewadi', 'Deepika', '8010282423', 'hgdjhg', 'chintamani nagar', 'Chaitany Apt', '3', 'any', 'near VIT', 'https://www.google.com/maps?q=18.501657665232422,73.8720043355001&output=embed', '10');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `mobile`, `email`, `password`, `gender`, `Address`) VALUES
(1, 'Deepika Sidral ', '8010282423', 'deepikasidral@gmail.com', '123', 'female', 'asasa'),
(4, 'mahi', '8010282423', 'nandinimaheshwaram24@gmail.com', '456', 'female', 'asdasdsa'),
(5, 'mahi', '1234567890', 'kore@gmail.com', '12345', 'male', 'asdsadad'),
(6, 'mahi', '1234567890', 'kore@gmail.com', '$2y$10$PPpfMRIkMIBBz', 'male', 'asdsadad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
