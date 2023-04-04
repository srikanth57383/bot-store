-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iveondco_bot_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditmemo`
--

CREATE TABLE `creditmemo` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ComingFromCompanyName` varchar(255) NOT NULL,
  `GoingToCompany_Name` varchar(255) NOT NULL,
  `ComingFromCompanyAddress` varchar(255) NOT NULL,
  `GoingToCompanyAddress` varchar(255) NOT NULL,
  `ComingFromCompanyPhoneNo` varchar(255) NOT NULL,
  `Going ToCompanyPhoneNo` varchar(255) NOT NULL,
  `Invoice` varchar(255) NOT NULL,
  `Order` varchar(245) NOT NULL,
  `SalesPerson` varchar(255) NOT NULL,
  `PaymentTerm` varchar(233) NOT NULL,
  `ShippingDate` varchar(255) NOT NULL,
  `orderdetails` blob NOT NULL,
  `AuthorizedBy` varchar(255) NOT NULL,
  `Name_Designation` varchar(255) NOT NULL,
  `created _at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditmemo`
--

INSERT INTO `creditmemo` (`id`, `number`, `date`, `ComingFromCompanyName`, `GoingToCompany_Name`, `ComingFromCompanyAddress`, `GoingToCompanyAddress`, `ComingFromCompanyPhoneNo`, `Going ToCompanyPhoneNo`, `Invoice`, `Order`, `SalesPerson`, `PaymentTerm`, `ShippingDate`, `orderdetails`, `AuthorizedBy`, `Name_Designation`, `created _at`) VALUES
(42, 'Lamar', ' 2022-07-06', 'Glenn and Robertson Plc', 'hulac@mailinator.com ', 'Exercitation quia co ', ' 518', ' Murphy Raymond LLC', 'Nieves and Berry Plc', 'Aut deleniti id accu', ' e', 'Fugiat quis explicab', ' Dolores natus hic vo', '2022-07-08', 0x613a313a7b693a303b613a343a7b733a31313a226465736372697074696f6e223b733a31393a224974617175652069642072656d20746f74616d223b733a393a22756e69745072696365223b733a333a22313630223b733a363a22616d6f756e74223b733a31393a225361657065207175616d2076656c697420766f223b733a383a227175616e74697479223b733a333a22363234223b7d7d20, 'Culpa aut consequun ', ' Roary Kline', '2022-07-25 11:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creditmemo`
--
ALTER TABLE `creditmemo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creditmemo`
--
ALTER TABLE `creditmemo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
