-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 09:02 AM
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
-- Table structure for table `forex`
--

CREATE TABLE `forex` (
  `id` int(11) NOT NULL,
  `branchcode` varchar(222) NOT NULL,
  `cardnumber` varchar(222) NOT NULL,
  `first_name` varchar(222) NOT NULL,
  `last_name` varchar(222) NOT NULL,
  `mother_name` varchar(222) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `traveltype` varchar(255) NOT NULL,
  `traveldate` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `mobilephone` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `pasportnumber` varchar(255) NOT NULL,
  `pasportexpirydate` varchar(255) NOT NULL,
  `branchnumber` varchar(255) NOT NULL,
  `forigncurrency` varchar(255) NOT NULL,
  `amouttobeload` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) NOT NULL,
  `to_currency` varchar(255) NOT NULL,
  `amount_loaded` varchar(255) NOT NULL,
  `account_balance` varchar(255) NOT NULL,
  `card_issued_date` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forex`
--

INSERT INTO `forex` (`id`, `branchcode`, `cardnumber`, `first_name`, `last_name`, `mother_name`, `status`, `gender`, `nationality`, `date`, `traveltype`, `traveldate`, `pincode`, `mobilephone`, `emailid`, `pasportnumber`, `pasportexpirydate`, `branchnumber`, `forigncurrency`, `amouttobeload`, `createdat`, `title`, `to_currency`, `amount_loaded`, `account_balance`, `card_issued_date`, `charges`, `total_amount`, `active`) VALUES
(1, '78945612378', '789654198652', 'Patty ', 'Jhon', 'Polly Wannakrakouer', 'Married', 'Female', 'INDIAN', '', '', '', '', '8712345634', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '500000', '', '', '', 'Inactive'),
(2, '45645454544', '789654198653', 'Radhika', 'Reddy', 'Con Staninterupshuns', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345635', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '100000', '', '', '', 'Inactive'),
(3, '85236974125', '789654198654', 'Olive ', 'Yew', 'Fran Tick', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345636', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '50000', '', '', '', 'Inactive'),
(4, '98653214785', '789654198655', 'Aida', ' Bugg', 'Santi Argo', 'Married', 'Male', 'INDIAN', '', '', '', '', '8712345637', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '10000', '', '', '', 'Inactive'),
(5, '96587412301', '789654198656', 'Maureen', ' Biologist', 'Carmen Goh', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345638', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '5000', '', '', '', 'Inactive'),
(6, '52032145698', '789654198657', 'Teri ', 'Dactyl', 'Carmen Sayid', 'Married', 'Male', 'INDIAN', '', '', '', '', '8712345639', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '250000', '', '', '', 'Inactive'),
(7, '65412301254', '789654198658', 'Peg ', 'Legge', 'Norma Stitts', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345640', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '85000', '', '', '', 'Inactive'),
(8, '45698745632', '789654198659', 'Allie', ' Grater', 'Ester La Vista', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345641', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '170000', '', '', '', 'Inactive'),
(9, '36985214785', '789654198660', 'Liz ', 'Erd', 'Manuel Labor', 'Married', 'Female', 'INDIAN', '', '', '', '', '8712345642', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '108000', '', '', '', 'Inactive'),
(10, '85624789635', '789654198661', 'A. Mused', 'Bugg', 'Ivan Itchinos', 'Married', 'Male', 'INDIAN', '', '', '', '', '8712345643', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '40000', '', '', '', 'Inactive'),
(11, '96582314721', '789654198662', 'Constance', ' Noring', 'Ivan Notheridiya', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345644', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '45700', '', '', '', 'Inactive'),
(12, '75869325641', '789654198663', 'Lois Di ', 'Nominator', 'Mustafa Leek', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345645', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '75000', '', '', '', 'Inactive'),
(13, '52014523698', '789654198664', 'Minnie Van ', 'Ryder', 'Emma Grate', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345646', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '500000', '', '', '', 'Inactive'),
(14, '52365412365', '789654198665', 'Lynn ', 'Leeum', 'Annie Versaree', 'Married', 'Male', 'INDIAN', '', '', '', '', '8712345647', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '540000', '', '', '', 'Inactive'),
(15, '78563214563', '789654198666', 'P. Ann ', 'Recital', 'Tim Midsaylesman', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345648', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '800000', '', '', '', 'Inactive'),
(16, '54698712365', '789654198667', 'Ray ', 'Sun', 'Mary Krismass', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345649', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '7000', '', '', '', 'Inactive'),
(17, '78563254162', '789654198668', 'Lee', ' A. Sun', 'Tim ?Buck? Too', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345650', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '28000', '', '', '', 'Inactive'),
(18, '98653214756', '789654198669', 'Ray ', 'Sin', 'Lana Lynne Creem', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345651', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '117890', '', '', '', 'Inactive'),
(19, '54698756321', '789654198670', 'Isabelle', ' Ringing', 'Wiley Waites', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345652', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '15000', '', '', '', 'Inactive'),
(20, '78963598742', '789654198671', 'Eileen ', 'Sideways', 'Ty R. Leeva', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345653', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '60000', '', '', '', 'Inactive'),
(21, '52364125632', '789654198672', 'Rita', ' Book', 'Ed U. Cayshun', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345654', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '781400', '', '', '', 'Inactive'),
(22, '65432178965', '789654198673', 'Paige ', 'Turner', 'Anne T. Dote', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345655', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '7500', '', '', '', 'Inactive'),
(23, '59874653214', '789654198674', 'Rhoda ', 'Report', 'Claude Strophobia', 'Single', 'Female', 'INDIAN', '', '', '', '', '8712345656', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Miss', '', '', '470000', '', '', '', 'Inactive'),
(24, '65498736985', '789654198675', 'Augusta ', 'Wind', 'Anne Gloindian', 'Single', 'Male', 'INDIAN', '', '', '', '', '8712345657', '', '', '', '', '', '', '2022-08-02 12:27:24', 'Mr', '', '', '780000', '', '', '', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forex`
--
ALTER TABLE `forex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forex`
--
ALTER TABLE `forex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
