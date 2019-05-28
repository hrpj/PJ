-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 07:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `staffID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(16) NOT NULL,
  `description` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `telNo` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchName`, `address`, `telNo`) VALUES
('Hello Branch', 'Somewhere', '1234512344'),
('Test Branch', 'Another dimension', '0999995599');

-- --------------------------------------------------------

--
-- Table structure for table `competence`
--

CREATE TABLE `competence` (
  `staffID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `accomplishment` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

CREATE TABLE `concern` (
  `staffID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `concernBehavior` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dailyworkingtime`
--

CREATE TABLE `dailyworkingtime` (
  `positionID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `timeIn` time NOT NULL,
  `timeOut` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `staffID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(16) NOT NULL,
  `description` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentID` int(16) NOT NULL,
  `departmentName` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BranchName` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentID`, `departmentName`, `BranchName`) VALUES
(1, 'HR', 'Test Branch'),
(2, 'Marketing', 'Test Branch'),
(17, 'HelloDepartment', 'Hello Branch');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `staffID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `date` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`date`, `description`, `year`) VALUES
('01/12', 'CEO HBD', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `increasesalaryrecord`
--

CREATE TABLE `increasesalaryrecord` (
  `staffID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leavehistory`
--

CREATE TABLE `leavehistory` (
  `staffID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `positionName` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `minSalary` int(16) NOT NULL,
  `maxSalary` int(16) NOT NULL,
  `departmentID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionID`, `positionName`, `minSalary`, `maxSalary`, `departmentID`) VALUES
('0001001', 'Manager', 80000, 100000, 1),
('0001002', 'Developement', 50000, 70000, 1),
('0002001', 'Manager', 90000, 110000, 2),
('0017001', 'Dunno', 100, 200, 17),
('0017002', 'Eat and Sleep', 10, 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `promotionhistory`
--

CREATE TABLE `promotionhistory` (
  `staffID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `positionID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirecourse`
--

CREATE TABLE `requirecourse` (
  `positionID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `courseID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staffName` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `positionID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bankAccount` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telNo` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `password` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staffName`, `positionID`, `bankAccount`, `dateOfBirth`, `gender`, `address`, `telNo`, `startDate`, `password`, `remember_token`) VALUES
('000100100001', 'Test Manager', '0001001', '0000000000', '2019-05-20', 'Male', 'Another Dimension', '0999599955', '2019-05-31', '123456', NULL),
('000100200001', 'Test HRD', '0001002', '000000000', '2019-05-01', 'Female', '100km beneath sea level', '0999929922', '2019-05-31', '123456', NULL),
('000200100001', 'Test Other Manager', '0002001', '00000000', '2019-05-01', 'Male', 'Namek Planet', '0110110111', '2019-05-30', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timeattendance`
--

CREATE TABLE `timeattendance` (
  `staffID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `status` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourse`
--

CREATE TABLE `trainingcourse` (
  `courseID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traininghistory`
--

CREATE TABLE `traininghistory` (
  `staffID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `courseID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trainingDate` date NOT NULL,
  `place` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `inChargePerson` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workinghistory`
--

CREATE TABLE `workinghistory` (
  `staffID` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `departmentBefore` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `PositionBefore` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`staffID`,`description`,`date`,`year`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchName`);

--
-- Indexes for table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`staffID`,`accomplishment`,`date`,`year`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `concern`
--
ALTER TABLE `concern`
  ADD PRIMARY KEY (`staffID`,`concernBehavior`,`date`,`year`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `dailyworkingtime`
--
ALTER TABLE `dailyworkingtime`
  ADD PRIMARY KEY (`positionID`,`day`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`staffID`,`description`,`date`,`year`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentID`) USING BTREE,
  ADD KEY `BranchName` (`BranchName`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`staffID`,`year`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`date`,`description`);

--
-- Indexes for table `increasesalaryrecord`
--
ALTER TABLE `increasesalaryrecord`
  ADD PRIMARY KEY (`staffID`,`salary`);

--
-- Indexes for table `leavehistory`
--
ALTER TABLE `leavehistory`
  ADD PRIMARY KEY (`staffID`,`date`,`year`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionID`) USING BTREE,
  ADD KEY `departmentID` (`departmentID`);

--
-- Indexes for table `promotionhistory`
--
ALTER TABLE `promotionhistory`
  ADD PRIMARY KEY (`staffID`,`positionID`,`date`) USING BTREE,
  ADD KEY `positionID` (`positionID`);

--
-- Indexes for table `requirecourse`
--
ALTER TABLE `requirecourse`
  ADD PRIMARY KEY (`positionID`,`courseID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`),
  ADD KEY `positionID` (`positionID`);

--
-- Indexes for table `timeattendance`
--
ALTER TABLE `timeattendance`
  ADD PRIMARY KEY (`staffID`,`date`,`time`,`year`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `traininghistory`
--
ALTER TABLE `traininghistory`
  ADD PRIMARY KEY (`staffID`,`courseID`,`trainingDate`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `workinghistory`
--
ALTER TABLE `workinghistory`
  ADD PRIMARY KEY (`staffID`,`startDate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bonus`
--
ALTER TABLE `bonus`
  ADD CONSTRAINT `bonus_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `competence_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `concern`
--
ALTER TABLE `concern`
  ADD CONSTRAINT `concern_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dailyworkingtime`
--
ALTER TABLE `dailyworkingtime`
  ADD CONSTRAINT `dailyworkingtime_ibfk_1` FOREIGN KEY (`positionID`) REFERENCES `position` (`positionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deduction`
--
ALTER TABLE `deduction`
  ADD CONSTRAINT `deduction_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `FK_branchName` FOREIGN KEY (`BranchName`) REFERENCES `branch` (`branchName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `increasesalaryrecord`
--
ALTER TABLE `increasesalaryrecord`
  ADD CONSTRAINT `increasesalaryrecord_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leavehistory`
--
ALTER TABLE `leavehistory`
  ADD CONSTRAINT `leavehistory_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`);

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `Department_FK` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotionhistory`
--
ALTER TABLE `promotionhistory`
  ADD CONSTRAINT `promotionhistory_ibfk_1` FOREIGN KEY (`positionID`) REFERENCES `position` (`positionID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `promotionhistory_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirecourse`
--
ALTER TABLE `requirecourse`
  ADD CONSTRAINT `requirecourse_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `trainingcourse` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requirecourse_ibfk_2` FOREIGN KEY (`positionID`) REFERENCES `position` (`positionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_Position` FOREIGN KEY (`positionID`) REFERENCES `position` (`positionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timeattendance`
--
ALTER TABLE `timeattendance`
  ADD CONSTRAINT `timeattendance_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `traininghistory`
--
ALTER TABLE `traininghistory`
  ADD CONSTRAINT `traininghistory_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `trainingcourse` (`courseID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `traininghistory_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workinghistory`
--
ALTER TABLE `workinghistory`
  ADD CONSTRAINT `workinghistory_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
