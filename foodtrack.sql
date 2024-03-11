-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 07:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `email`, `phonenum`, `address`, `quantity`, `datetime`) VALUES
('Dev zinzuvadiya', 'devkzinzuvadiya19@gmail.com', '08141089787', 'H/403 Verona Residency', '1', '2024-03-01T00:05'),
('karan mistry', 'karan.uehs21@gajeratrust.org', '9426836393', 'vraj chowk, Surat', '2', '2024-03-02T00:22'),
('Sagar chauhan', 'sagar11@gmail.com', '9658741023', 'mumbai', '1', '2024-02-02T20:02'),
('daksh', 'daksh@gmail.com', '7410852963', 'surat', '2', '2024-02-03T06:22');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullname`, `email`, `username`, `password`, `mobile`) VALUES
('Dev zinzuvadiya', 'devkzinzuvadiya19@gmail.com', 'Dev19', '$2y$10$dnGk4G4P7q6tXEu/w/r8x.wVRrehnLQUnvKAPkxiEB4L9eoK.8QEe', '8141089787'),
('Mahim thakkar', 'mahimt@gmail.com', 'mahimt', '$2y$10$FNGGYJMh/rf6qnDl7utGX.SvFdGv8FpMIfUu1fozIRd50H8jPQwby', '9856320147'),
('Karan Mistry', 'karan.uehs21@gajeratrust.org', 'karank', '$2y$10$yFIGvU.RsLBpPKnbWXaJvepgn/x9otXC93490JQy730qAWmwlsXe2', '9426836393'),
('rahul rathod', 'rahulnamtosunahonga123@gmail.com', 'rrr', '$2y$10$94uY86OQeRSusc.HU7tIkOd6yYYZGONNFAvZXrGoBTWV3peFG6zD6', '9865983241'),
('kamal prajapati', 'kamalp@gmail.com', 'kkamal', '$2y$10$GdM7wSiETahH4ARjQyeqoOfi5dhcxsyPuWLDCvUu4ulRnxcARdQY2', '7859634125'),
('Sagar chauhan', 'sagar11@gmail.com', 'sagar11', '$2y$10$3Kds.tveT9fbQL9giM0byu.Nmh4EG2rmnBXmiHYmPQux2gL.IioTm', '8529630147'),
('raj kuamr', 'raj@gmail.com', 'rajk', '$2y$10$XS83NpLp5P08WBtOmNlPoeQ0SUxhuYpuvfsMtk4Af9METxwL/bdTe', '7896541023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
