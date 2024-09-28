-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 10:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adehye3`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegeregistrationform`
--

CREATE TABLE `jobregistrationform` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `personaldateofbirth` date NOT NULL,
  `personalplaceofplaceofbirth` varchar(50) NOT NULL,
  `personalcontact` int(20) NOT NULL,
  `idcard` int(20) NOT NULL,
  `idcardnumber` int(20) NOT NULL,
  `idcardissuedate` date NOT NULL,
  `idcardexpirydate` date NOT NULL,
  `maritalstatus` enum('single','married','divorced','widow') NOT NULL,
  `spousename` varchar(50) NOT NULL,
  `spousedateofmarriage` date NOT NULL,
  `spouseplaceofmarriage` varchar(50) NOT NULL,
  `spouseaddress` varchar(50) NOT NULL,
  `spousehouseaddress` varchar(50) NOT NULL,
  `spousedigitaladdress` varchar(20) NOT NULL,
  `spousemailingaddress` varchar(50) NOT NULL,
  `spouseemail` varchar(50) NOT NULL,
  `spousenativelanguage` varchar(30) NOT NULL,
  `nameoflastschoolattended` varchar(50) NOT NULL,
  `addressoftheschool` varchar(50) NOT NULL,
  `dateyoustarttheschool` date NOT NULL,
  `dateofcompletionofschool` date NOT NULL,
  `employment` varchar(50) NOT NULL,
  `dateofstartingthework` date NOT NULL,
  `dateofstopping` date NOT NULL,
  `schoolcontact` int(20) NOT NULL,
  `wifename` varchar(50) NOT NULL,
  `wifedateofbirth` date NOT NULL,
  `wifeplaceofbirth` varchar(50) NOT NULL,
  `wifecontact` int(20) NOT NULL,
  `wifeoccupation` varchar(50) NOT NULL,
  `childrenname` varchar(100) NOT NULL,
  `childrendateofbirth` date NOT NULL,
  `sex` enum('male','female','others','') NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `motherdateofbirth` date NOT NULL,
  `motherhouseaddress` varchar(50) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `mothercontact` int(20) NOT NULL,
  `ifdeceasedmother` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `fatherdateofbirth` date NOT NULL,
  `fatherhouseaddress` varchar(50) NOT NULL,
  `fatheroccupation` varchar(50) NOT NULL,
  `fathercontact` int(20) NOT NULL,
  `ifdeceasedfather` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegeregistrationform`
--
ALTER TABLE `collegeregistrationform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegeregistrationform`
--
ALTER TABLE `collegeregistrationform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
