-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 07:07 AM
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
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `statement` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `transport_type` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `entertainment` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `authorized_by` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `purpose`, `department`, `statement`, `manager_name`, `category`, `description`, `transport_type`, `tax`, `food`, `entertainment`, `amount`, `others`, `authorized_by`, `designation`, `created_date`, `date`) VALUES
(8, 'varsha', ' 234567', ' 2022-07-26', '  gpay', '1998', '', 'Large select ', 'it\'s ok ', ' 50', ' 10', 'steve-johnson-8wKLla3KHg0-unsplash.jpg', '', '', '', '2022-07-20 16:32:22', ''),
(9, 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxx', 'xxxx', 'xxxxxx', 'xxxxxxxxxxxx ', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', '2022-07-20 16:46:32', 'xxxxxxxxxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
