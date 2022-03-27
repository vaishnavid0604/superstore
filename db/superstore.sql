-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 04:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superstore`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `distributordetails` ()  NO SQL
SELECT * FROM dstbr order by DID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `storedetails` ()  NO SQL
SELECT * FROM store order by SID$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ANAME` varchar(20) NOT NULL,
  `APASS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ANAME`, `APASS`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `c_name`, `c_mobile`, `c_email`, `c_address`, `c_message`) VALUES
(6, 'vaishnavid', '9878749887', 'vaishnavi.19cs109@sode-edu.in', 'udupi', 'its qworking');

-- --------------------------------------------------------

--
-- Table structure for table `dstbr`
--

CREATE TABLE `dstbr` (
  `DID` int(11) NOT NULL,
  `DNAME` varchar(20) NOT NULL,
  `DPASS` varchar(20) NOT NULL DEFAULT 'password',
  `DTYPE` varchar(20) NOT NULL,
  `DLOC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dstbr`
--

INSERT INTO `dstbr` (`DID`, `DNAME`, `DPASS`, `DTYPE`, `DLOC`) VALUES
(1000, 'ASUS', 'asus@123', 'Laptop', 'Bombay'),
(1001, 'Pepsico', 'password', 'Soft Drinks', 'Delhi'),
(1003, 'Nike', 'password', 'Shoes', 'Bombay');

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderlist_store`
-- (See below for the actual view)
--
CREATE TABLE `orderlist_store` (
`SID` int(11)
,`ORDID` int(11)
,`DID` int(11)
,`ORDDATE` timestamp
,`PMYSTAT` varchar(20)
,`SHPMODE` varchar(20)
,`SHPSTAT` varchar(20)
,`DTYPE` varchar(20)
,`DNAME` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SALESID` int(11) NOT NULL,
  `SDATE` varchar(20) NOT NULL,
  `SCOST` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SALESID`, `SDATE`, `SCOST`, `SID`, `remarks`) VALUES
(201, '2021-12-21', 10950, 100, 'Good Day'),
(232, '2021-12-22', 5500, 100, 'Not Your Day'),
(237, '2021-12-28', 34943, 100, 'Good Day'),
(238, '2021-12-29', 15600, 101, 'Good Day'),
(239, '2021-12-29', 5600, 102, 'Not Your Day'),
(240, '2021-12-29', 19400, 103, 'Good Day'),
(241, '2022-02-08', 1000, 100, 'Not Your Day');

--
-- Triggers `sales`
--
DELIMITER $$
CREATE TRIGGER `remarks` BEFORE INSERT ON `sales` FOR EACH ROW set NEW.remarks = if(NEW.SCOST >= 10000,'Good Day','Not Your Day')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `SID` int(11) NOT NULL,
  `SPASS` varchar(20) NOT NULL DEFAULT 'password',
  `SBRANCHNAME` varchar(20) NOT NULL,
  `SCITY` varchar(20) NOT NULL,
  `SREGION` varchar(20) NOT NULL,
  `SSTATE` varchar(20) NOT NULL,
  `SPCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`SID`, `SPASS`, `SBRANCHNAME`, `SCITY`, `SREGION`, `SSTATE`, `SPCODE`) VALUES
(100, 'password', 'Madhuvana', 'Udupi', 'South India', 'Karnataka', 576210),
(101, 'password', 'Silk Zone', 'Mangalore', 'South India', 'Karnataka', 573467),
(102, 'password', 'D Mart', 'Kota', 'North India', 'Rajasthan', 576210),
(103, 'password', 'Big Bazar', 'Mangalore', 'South India', 'Karnataka', 576210);

--
-- Triggers `store`
--
DELIMITER $$
CREATE TRIGGER `ondeletestore` AFTER DELETE ON `store` FOR EACH ROW delete from strorders where strorders.sid=old.sid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `strorders`
--

CREATE TABLE `strorders` (
  `SID` int(11) NOT NULL,
  `ORDID` int(11) NOT NULL,
  `DID` int(11) NOT NULL,
  `ORDDATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `PMYSTAT` varchar(20) NOT NULL DEFAULT 'UNPAID',
  `SHPMODE` varchar(20) NOT NULL DEFAULT 'NORMAL',
  `SHPSTAT` varchar(20) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strorders`
--

INSERT INTO `strorders` (`SID`, `ORDID`, `DID`, `ORDDATE`, `PMYSTAT`, `SHPMODE`, `SHPSTAT`) VALUES
(100, 509, 1000, '2021-12-21 16:14:17', 'UNPAID', 'NORMAL', 'PENDING'),
(100, 510, 1003, '2021-12-21 16:14:22', 'UNPAID', 'NORMAL', 'PENDING'),
(100, 511, 1001, '2021-12-21 16:14:32', 'PAID', 'NORMAL', 'PENDING'),
(100, 512, 1000, '2021-12-21 17:11:03', 'PAID', 'NORMAL', 'PENDING'),
(100, 513, 1003, '2021-12-21 17:24:00', 'PAID', 'NORMAL', 'DELIVERED'),
(100, 515, 1000, '2021-12-28 15:06:42', 'UNPAID', 'NORMAL', 'PENDING'),
(101, 516, 1000, '2021-12-29 06:04:23', 'PAID', 'PREMIUM', 'DELIVERED'),
(102, 517, 1001, '2021-12-29 06:09:16', 'UNPAID', 'NORMAL', 'PENDING'),
(103, 518, 1003, '2021-12-29 06:11:22', 'UNPAID', 'NORMAL', 'PENDING');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_queries`
-- (See below for the actual view)
--
CREATE TABLE `view_queries` (
`c_id` int(11)
,`c_name` varchar(100)
,`c_mobile` varchar(100)
,`c_email` varchar(100)
,`c_address` varchar(500)
,`c_message` text
);

-- --------------------------------------------------------

--
-- Structure for view `orderlist_store`
--
DROP TABLE IF EXISTS `orderlist_store`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderlist_store`  AS SELECT `s`.`SID` AS `SID`, `s`.`ORDID` AS `ORDID`, `s`.`DID` AS `DID`, `s`.`ORDDATE` AS `ORDDATE`, `s`.`PMYSTAT` AS `PMYSTAT`, `s`.`SHPMODE` AS `SHPMODE`, `s`.`SHPSTAT` AS `SHPSTAT`, `m`.`DTYPE` AS `DTYPE`, `m`.`DNAME` AS `DNAME` FROM (`strorders` `s` join `dstbr` `m`) WHERE `m`.`DID` = `s`.`DID` ;

-- --------------------------------------------------------

--
-- Structure for view `view_queries`
--
DROP TABLE IF EXISTS `view_queries`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_queries`  AS SELECT `contactus`.`c_id` AS `c_id`, `contactus`.`c_name` AS `c_name`, `contactus`.`c_mobile` AS `c_mobile`, `contactus`.`c_email` AS `c_email`, `contactus`.`c_address` AS `c_address`, `contactus`.`c_message` AS `c_message` FROM `contactus` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ANAME`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dstbr`
--
ALTER TABLE `dstbr`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SALESID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `strorders`
--
ALTER TABLE `strorders`
  ADD PRIMARY KEY (`ORDID`),
  ADD KEY `DID` (`DID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dstbr`
--
ALTER TABLE `dstbr`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SALESID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `strorders`
--
ALTER TABLE `strorders`
  MODIFY `ORDID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `strorders`
--
ALTER TABLE `strorders`
  ADD CONSTRAINT `strorders_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `dstbr` (`DID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
