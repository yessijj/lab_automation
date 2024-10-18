-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 04:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_username` varchar(50) NOT NULL,
  `Admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`Admin_Id`, `Admin_username`, `Admin_password`) VALUES
(1, 'Admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_Id` varchar(100) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Product_type` varchar(100) NOT NULL,
  `Product_code` varchar(100) NOT NULL,
  `Revision_of_product` int(100) NOT NULL,
  `Manufacture_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`Product_Id`, `Product_name`, `Product_type`, `Product_code`, `Revision_of_product`, `Manufacture_code`) VALUES
('9268P035417D', 'Electrolytic capacitor', 'PROTYPE3', 'CC27663BHJ', 5, 'mc45574hg7');

-- --------------------------------------------------------

--
-- Table structure for table `product_test_table`
--

CREATE TABLE `product_test_table` (
  `Product_test_Id` varchar(100) NOT NULL,
  `Product_Id` varchar(100) NOT NULL,
  `Testing_Id` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Product_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `Product_Id` varchar(100) NOT NULL,
  `Prod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`Product_Id`, `Prod`) VALUES
('PROTYPE2', 'tool'),
('PROTYPE3', 'capacitor'),
('PROTYPE4', 'wire'),
('PROTYPE5', 'machine');

-- --------------------------------------------------------

--
-- Table structure for table `tester_table`
--

CREATE TABLE `tester_table` (
  `Tester_Id` varchar(100) NOT NULL,
  `Tester_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tester_table`
--

INSERT INTO `tester_table` (`Tester_Id`, `Tester_name`) VALUES
('Tester1', 'Jessica'),
('Tester2', 'Warda'),
('Tester3', 'Izzah'),
('Tester4', 'Aiman'),
('Tester5', 'Alina');

-- --------------------------------------------------------

--
-- Table structure for table `testing_record_table`
--

CREATE TABLE `testing_record_table` (
  `Testing_Id` varchar(100) NOT NULL,
  `Product_Id` varchar(100) NOT NULL,
  `Test_name` varchar(100) NOT NULL,
  `Date_col` varchar(50) NOT NULL,
  `Product_type` varchar(100) NOT NULL,
  `Prdouct_status` varchar(100) NOT NULL,
  `Tester_name` varchar(100) NOT NULL,
  `Reviews` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing_record_table`
--

INSERT INTO `testing_record_table` (`Testing_Id`, `Product_Id`, `Test_name`, `Date_col`, `Product_type`, `Prdouct_status`, `Tester_name`, `Reviews`) VALUES
('5093ts148e72', '9268P035417D', 'Test1', '2021-01-12T00:35', 'PROTYPE3', 'tested', 'Jessica', 'rfverver'),
('5t713se024T6', '9268P035417D', 'Test1', '2021-01-28T03:38', 'PROTYPE3', 'tested', 'Warda', 'swedwed'),
('67E9TS38405T', '9268P035417D', 'Test1', '2021-01-14', 'tested', 'PROTYPE3', 'Warda', 'kjk,');

-- --------------------------------------------------------

--
-- Table structure for table `test_name_table`
--

CREATE TABLE `test_name_table` (
  `Test_Id` varchar(100) NOT NULL,
  `Test_name` varchar(100) NOT NULL,
  `Test_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_name_table`
--

INSERT INTO `test_name_table` (`Test_Id`, `Test_name`, `Test_code`) VALUES
('Test1', 'quality test', 'testcode345566');

-- --------------------------------------------------------

--
-- Table structure for table `user_panel`
--

CREATE TABLE `user_panel` (
  `User_Id` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `User_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_panel`
--

INSERT INTO `user_panel` (`User_Id`, `User_name`, `User_password`) VALUES
(1, 'User12345', 'user1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `product_test_table`
--
ALTER TABLE `product_test_table`
  ADD PRIMARY KEY (`Product_test_Id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `tester_table`
--
ALTER TABLE `tester_table`
  ADD PRIMARY KEY (`Tester_Id`);

--
-- Indexes for table `testing_record_table`
--
ALTER TABLE `testing_record_table`
  ADD PRIMARY KEY (`Testing_Id`),
  ADD KEY `foreign1` (`Product_type`),
  ADD KEY `foreign2` (`Test_name`),
  ADD KEY `Tester_name` (`Tester_name`),
  ADD KEY `foreign` (`Product_Id`) USING BTREE;

--
-- Indexes for table `test_name_table`
--
ALTER TABLE `test_name_table`
  ADD PRIMARY KEY (`Test_Id`);

--
-- Indexes for table `user_panel`
--
ALTER TABLE `user_panel`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_panel`
--
ALTER TABLE `user_panel`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testing_record_table`
--
ALTER TABLE `testing_record_table`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`Product_Id`) REFERENCES `product_table` (`Product_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
