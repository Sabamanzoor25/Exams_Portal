-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 07:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('test', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clienttrans`
--

CREATE TABLE `clienttrans` (
  `ctid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `bal` int(11) NOT NULL,
  `mode` varchar(20) DEFAULT NULL,
  `numb` varchar(20) DEFAULT NULL,
  `unitprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cell` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `description`, `address`, `email`, `cell`) VALUES
('OSAKA ENTERPRISES', 'Deals in Import & Export', 'University road Kara', 'osaka@gmail.com', '922132352698523');

-- --------------------------------------------------------

--
-- Table structure for table `prodtrans`
--

CREATE TABLE `prodtrans` (
  `ptid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `bal` int(11) NOT NULL,
  `mode` varchar(20) DEFAULT NULL,
  `numb` varchar(30) DEFAULT NULL,
  `unitprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `pquantity` int(11) DEFAULT NULL,
  `unit` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `clienttrans`
--
ALTER TABLE `clienttrans`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `client` (`cid`),
  ADD KEY `product` (`pid`);

--
-- Indexes for table `prodtrans`
--
ALTER TABLE `prodtrans`
  ADD PRIMARY KEY (`ptid`),
  ADD KEY `productrel` (`pid`),
  ADD KEY `supplier` (`sid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clienttrans`
--
ALTER TABLE `clienttrans`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodtrans`
--
ALTER TABLE `prodtrans`
  MODIFY `ptid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clienttrans`
--
ALTER TABLE `clienttrans`
  ADD CONSTRAINT `client` FOREIGN KEY (`cid`) REFERENCES `client` (`cid`),
  ADD CONSTRAINT `product` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);

--
-- Constraints for table `prodtrans`
--
ALTER TABLE `prodtrans`
  ADD CONSTRAINT `productrel` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`),
  ADD CONSTRAINT `supplier` FOREIGN KEY (`sid`) REFERENCES `client` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
