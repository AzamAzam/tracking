-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 07:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `contactNo`, `email`, `password`, `address`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Hafiz Aqib', '+923237513200', 'admin', '123', 'Pakistan', 'What\' s your pet name?', 'RDx', '2019-03-13 09:19:01', '2019-03-04 07:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hours` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentID`, `name`, `hours`, `created_at`, `updated_at`) VALUES
(1, 'Account', '201', '2019-02-18 00:05:48', '2019-02-17 19:05:48'),
(2, 'MS', '10', '2019-02-14 11:02:55', '2019-02-14 06:02:55'),
(5, 'Finance', '2301', '2019-02-14 11:00:34', '2019-02-14 06:00:34'),
(6, 'test', '23', '2019-03-04 04:14:21', '2019-03-04 04:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designationID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designationID`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '2019-02-18 06:23:15', '2019-02-18 06:23:15'),
(2, 'CFO', '2019-02-18 06:23:37', '2019-02-18 06:23:37'),
(3, 'COO', '2019-02-18 06:23:44', '2019-02-18 06:23:44'),
(4, 'Internee', '2019-02-18 06:23:52', '2019-02-18 06:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `salary` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `hireDate` varchar(20) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `bankName` varchar(30) NOT NULL,
  `accountName` varchar(30) NOT NULL,
  `accountNo` varchar(50) NOT NULL,
  `iban` varchar(50) NOT NULL,
  `branchName` varchar(30) NOT NULL,
  `branchCode` varchar(20) NOT NULL,
  `bankAddress` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `name`, `dob`, `gender`, `salary`, `email`, `password`, `contactNo`, `hireDate`, `designation`, `department`, `address`, `bankName`, `accountName`, `accountNo`, `iban`, `branchName`, `branchCode`, `bankAddress`, `created_at`, `updated_at`) VALUES
(1, 'User 1', 'dob', 'gender', 'salary', 'user1@gmail.com', '32', 'contact', 'hiredate', 'designation', 'depart', 'address', 'b name', 'a n', 'a no', 'iban', 'branck name', 'b code', 'b addrss', '2019-03-02 11:02:30', '2019-03-02 06:02:30'),
(2, 'Hafiz Aqib', '2019-02-13', 'Male', '12000', 'hafizaqib22@gmail.com', '123', '03237513200', '2019-02-17', 'Category 1', 'Category 1', 'Street no. 3, House no. 116, Karim Town, Okara', 'MCB', 'Hafiz Aqib Javed', '123456781234567812345', 'PK22MCB123456789123456789', 'Galla Mandi Branch', 'MCB1234', 'Community Centre 15a, Wilberforce Road, London, NW9 6BA', '2019-02-18 12:12:36', '2019-02-18 12:12:36'),
(5, 'User 2', 'date', 'male', 'salary', 'user2@gmail.com', '88', '0', 'hire', 'seg', 'depart', 'address', 'bank', 'account', 'no', 'iban', 'branch', 'code', 'b addrss', '2019-03-04 09:23:17', '2019-03-04 04:23:17'),
(8, 'User 3', 'jsd', 'usd', 'jhfd', 'user3@gmail.com', '125435', 'iusd', 'jhdf', 'jkh', 'A', 'jhjh', 'jh', 'jh', 'jh', 'jh', 'jh', 'jh', 'jh', '2019-03-02 11:19:35', '2019-03-02 06:19:35'),
(9, 'My NAme', '2016-12-30', 'Male', '19', 'user4@gmail.com', '123', '5', '2019-12-29', 'Manager', 'Account', 'yes', 'HBL', 'admin', '6876', 'y698', 'yikh', 'hkb,', '.kn', '2019-03-14 20:15:27', '2019-03-14 15:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `dateofattendance` date DEFAULT NULL,
  `hours` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `userid`, `dateofattendance`, `hours`, `created_at`, `updated_at`) VALUES
(17, 1, '2019-03-16', '10:05:00', '2019-03-15 13:10:13', '2019-03-16 01:21:17'),
(18, 2, '2019-03-15', '00:02:00', '2019-03-15 13:10:13', '2019-03-15 13:43:15'),
(19, 1, '2019-03-23', '00:04:00', '2019-03-15 15:13:57', '2019-03-15 15:13:57'),
(20, 1, '2019-03-22', '00:02:00', '2019-03-15 15:15:32', '2019-03-15 15:19:29'),
(21, 1, '2019-03-15', '00:03:00', '2019-03-15 15:21:12', '2019-03-15 18:04:19'),
(22, 1, '2019-04-23', '00:02:00', '2019-03-15 15:15:32', '2019-03-15 15:19:29'),
(23, 1, '2019-03-13', '00:03:00', '2019-03-15 15:21:12', '2019-03-15 18:04:19'),
(24, 1, '2019-03-19', '00:03:00', '2019-03-15 15:21:12', '2019-03-15 18:04:19'),
(25, 1, '2019-03-29', '00:03:00', '2019-03-15 15:21:12', '2019-03-15 18:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designationID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
