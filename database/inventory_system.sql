-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 07:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_account`
--

CREATE TABLE `company_account` (
  `CompanyAccountID` int(5) NOT NULL,
  `CompanyEmail` varchar(50) NOT NULL,
  `CompanyPassword` varchar(30) NOT NULL,
  `CompanyID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_account`
--

INSERT INTO `company_account` (`CompanyAccountID`, `CompanyEmail`, `CompanyPassword`, `CompanyID`) VALUES
(1, 'thom@gmail.com', '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `CompanyID` int(5) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `CompanyContactNumber` varchar(13) NOT NULL,
  `CompanyCreditCard` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`CompanyID`, `CompanyName`, `CompanyContactNumber`, `CompanyCreditCard`) VALUES
(1, 'Thom', '09664174255', '1234567890123456');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(5) NOT NULL,
  `InvoiceDate` date NOT NULL,
  `CompanyAccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `InvoiceDate`, `CompanyAccountID`) VALUES
(1, '2023-02-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemID` int(5) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `CompanyID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `CompanyID`) VALUES
(1, 'Caldareta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(5) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductQuantity` int(11) NOT NULL,
  `ProductSold` int(11) NOT NULL,
  `ProductDefect` int(11) NOT NULL,
  `ProductPrice` decimal(11,2) NOT NULL,
  `ItemID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductQuantity`, `ProductSold`, `ProductDefect`, `ProductPrice`, `ItemID`) VALUES
(1, 'Walang Gata', 10, 0, 0, '100.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_description`
--

CREATE TABLE `product_description` (
  `ProductID` int(5) NOT NULL,
  `CategoryName` varchar(30) NOT NULL,
  `CategoryValue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_description`
--

INSERT INTO `product_description` (`ProductID`, `CategoryName`, `CategoryValue`) VALUES
(1, 'Masarap', 'Kahit walang gata');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SalesID` int(5) NOT NULL,
  `TotalSold` int(11) NOT NULL,
  `TotalDefect` int(11) NOT NULL,
  `TotalRevenue` decimal(11,2) NOT NULL,
  `SalesDate` date NOT NULL,
  `InvoiceID` int(5) NOT NULL,
  `ProductID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SalesID`, `TotalSold`, `TotalDefect`, `TotalRevenue`, `SalesDate`, `InvoiceID`, `ProductID`) VALUES
(1, 0, 0, '0.00', '2023-02-13', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `SubscriptionID` int(5) NOT NULL,
  `SubscriptionType` varchar(20) NOT NULL,
  `ExpirationDate` date NOT NULL,
  `CompanyAccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`SubscriptionID`, `SubscriptionType`, `ExpirationDate`, `CompanyAccountID`) VALUES
(1, 'Premium', '2033-02-13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_account`
--
ALTER TABLE `company_account`
  ADD PRIMARY KEY (`CompanyAccountID`),
  ADD KEY `profile-account` (`CompanyID`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`CompanyID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD KEY `account-invoice` (`CompanyAccountID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `item-company` (`CompanyID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `product-item` (`ItemID`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
  ADD KEY `description-product` (`ProductID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SalesID`),
  ADD KEY `sales-invoice` (`InvoiceID`),
  ADD KEY `sales-product` (`ProductID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`SubscriptionID`),
  ADD KEY `subscription-account` (`CompanyAccountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_account`
--
ALTER TABLE `company_account`
  MODIFY `CompanyAccountID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `CompanyID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SalesID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `SubscriptionID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_account`
--
ALTER TABLE `company_account`
  ADD CONSTRAINT `profile-account` FOREIGN KEY (`CompanyID`) REFERENCES `company_profile` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `account-invoice` FOREIGN KEY (`CompanyAccountID`) REFERENCES `company_account` (`CompanyAccountID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item-company` FOREIGN KEY (`CompanyID`) REFERENCES `company_profile` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product-item` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_description`
--
ALTER TABLE `product_description`
  ADD CONSTRAINT `description-product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales-invoice` FOREIGN KEY (`InvoiceID`) REFERENCES `invoice` (`InvoiceID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales-product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription-account` FOREIGN KEY (`CompanyAccountID`) REFERENCES `company_account` (`CompanyAccountID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
