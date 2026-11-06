-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2011 at 11:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jonathan`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` text NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('jonathan', '1234'),
('rukundo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `avail`
--

CREATE TABLE `avail` (
  `room_type` text NOT NULL,
  `room_number` int(255) NOT NULL,
  `unit_price` text NOT NULL,
  `customer_type` text NOT NULL,
  `c_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avail`
--

INSERT INTO `avail` (`room_type`, `room_number`, `unit_price`, `customer_type`, `c_number`) VALUES
('FAMILY ROOM', 123, '$12', 'CITEZNS', 5),
('LUXUARY ROOM', 66, '', 'VIP', 0),
('LUXUARY ROOM', 66, '$6', 'VIP', 0);

-- --------------------------------------------------------

--
-- Table structure for table `availablerooms`
--

CREATE TABLE `availablerooms` (
  `room_type` text NOT NULL,
  `room_number` int(222) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_id` int(222) NOT NULL,
  `starting_date` date NOT NULL,
  `leaving_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availablerooms`
--

INSERT INTO `availablerooms` (`room_type`, `room_number`, `customer_name`, `customer_email`, `customer_id`, `starting_date`, `leaving_date`) VALUES
('SPECIAL SPA ROOM', 345, 'bora jonathan', 'jonathan@gmail.com', 546, '2013-10-09', '2014-04-17'),
('DELUXE ROOM', 343, 'RUKUNDO Arsenal', 'rukundo@gmail.com', 213435678, '2015-06-11', '2012-01-11'),
('family room', 121, 'jonathan', 'jonathan@gmail.com', 21313, '2012-01-11', '2012-04-26'),
('family room', 126, 'jonas', 'jonathan@gmail.com', 43343, '2019-02-05', '2019-12-28'),
('SPECIAL SPA ROOM', 13, 'manzi', 'manzi@gmail.com', 123234, '2019-12-22', '2019-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `name` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `room_type` text NOT NULL,
  `data` date NOT NULL,
  `date_of_d` date NOT NULL,
  `address` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`name`, `email`, `room_type`, `data`, `date_of_d`, `address`) VALUES
('bora jonathan', 'jonathantherex@gmail.com', 'SPECIAL SPA ROOM', '2019-11-29', '2019-12-27', 'kigali'),
('afazari jonas', 'jonas@gmail.com', 'SPECIAL SPA ROOM', '2019-12-17', '2019-12-24', 'ruhango'),
('mbavu', 'mbavu@gmail.com', 'SPECIAL SPA ROOM', '2012-01-10', '2012-01-26', 'kibungo'),
('jimmy ntwari', 'jimmy@gmail.com', 'simple room', '2012-01-11', '2012-01-27', 'kibungo'),
('pasi', 'paso@gmail.com', 'family room', '2012-01-25', '2012-01-28', 'kibungo'),
('arsnal rukundo', 'rukundo@gmail.com', 'family room', '2019-01-07', '2020-09-21', 'kibungo'),
('arsnal rukundo', 'jonathantherex@gmail.com', 'LUXUARY ROOM', '2019-12-22', '2019-12-31', 'kibungo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
