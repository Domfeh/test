-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2022 at 10:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ProjectManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `BerekusoDrivers`
--

CREATE TABLE `BerekusoDrivers` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `phoneNumber` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BerekusoDrivers`
--

INSERT INTO `BerekusoDrivers` (`id`, `name`, `phoneNumber`) VALUES
(1, 'Sarpong', '0277794435'),
(2, 'Young', '0542211071'),
(3, 'Frank', '024381731'),
(4, 'Prince', '0541790893'),
(5, 'Nana Kofi/Ogada', '05518295143'),
(6, 'Kobwoo', '0551820442'),
(7, 'Daniel', '0242604610');

-- --------------------------------------------------------

--
-- Table structure for table `DriversInformation`
--

CREATE TABLE `DriversInformation` (
  `DriverName` varchar(200) NOT NULL,
  `PhoneNumber` varchar(200) NOT NULL,
  `NumberPlate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DriversInformation`
--

INSERT INTO `DriversInformation` (`DriverName`, `PhoneNumber`, `NumberPlate`) VALUES
('Kofi ', '+2334567890', 'GS-23-AS'),
('Mary ', '0248697356', 'G1-SDH'),
('Jojo', '0322783', 'Uk328932');

-- --------------------------------------------------------

--
-- Table structure for table `Logins`
--

CREATE TABLE `Logins` (
  `Name` varchar(200) NOT NULL,
  `PhoneNumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ScheduleTrip`
--

CREATE TABLE `ScheduleTrip` (
  `id` int(11) NOT NULL,
  `pickUpPoint` varchar(155) NOT NULL,
  `Date` varchar(155) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `PhoneNumber` varchar(200) NOT NULL,
  `email` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ScheduleTrip`
--

INSERT INTO `ScheduleTrip` (`id`, `pickUpPoint`, `Date`, `Destination`, `PhoneNumber`, `email`) VALUES
(5, 'Accra', '20/20/2022', 'Ashesi', '0328382932', 'kofi@ashesi.edu.gh'),
(6, 'Accra', '20/20/2022', 'Ashesi', '0328382932', ''),
(7, 'Kwabenya', '2022-04-20', 'Ashesi', '04378343', ''),
(8, 'accra mall', '2022-04-23', 'ashesi', '02379323', ''),
(9, 'accra mall', '2022-04-23', 'ashesi', '02379323', ''),
(10, 'Achimota mall', '2022-04-17', 'ashesi', '0489343', ''),
(11, 'ashesi', '2022-04-21', 'home', '57883822', ''),
(15, 'Kwabenya ', '2022-04-20', 'Legon ', '+23324567890', ''),
(16, 'Dufie', '2022-08-16', 'RB 100', '06822092', 'kofi@ashesi.edu.gh'),
(17, 'Dufie', '2022-09-16', 'RB 100', '06822092', 'kofi@ashesi.edu.gh'),
(18, 'Dufie', '2022-04-07', 'Accra', '484849849', 'kofi@ashesi.edu.gh');

-- --------------------------------------------------------

--
-- Table structure for table `signUp`
--

CREATE TABLE `signUp` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signUp`
--

INSERT INTO `signUp` (`id`, `name`, `email`, `password`) VALUES
(3, 'Kofi', 'kofi@ashesi.edu.gh', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BerekusoDrivers`
--
ALTER TABLE `BerekusoDrivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DriversInformation`
--
ALTER TABLE `DriversInformation`
  ADD PRIMARY KEY (`PhoneNumber`);

--
-- Indexes for table `Logins`
--
ALTER TABLE `Logins`
  ADD PRIMARY KEY (`PhoneNumber`);

--
-- Indexes for table `ScheduleTrip`
--
ALTER TABLE `ScheduleTrip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signUp`
--
ALTER TABLE `signUp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BerekusoDrivers`
--
ALTER TABLE `BerekusoDrivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ScheduleTrip`
--
ALTER TABLE `ScheduleTrip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `signUp`
--
ALTER TABLE `signUp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
