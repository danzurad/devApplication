-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2016 at 05:27 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(2) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `FirstName`, `LastName`, `Address`, `City`, `State`, `PhoneNumber`, `Notes`) VALUES
(1, 'Albert', 'Adams', '1234 A Street', 'Attica', 'NY', '11111-1111', 'This is the first test note in the system'),
(2, 'Bob', 'Bobbart', '567 B Street', 'Brunswick', 'NJ', '22222-2222', 'The second note.'),
(3, 'Charlie', 'Chaplin', '8 Champ Road', 'Chicago', 'IL', '33333-3333', 'An excellent actor'),
(4, 'Dave', 'Drummond', '9 Dumbledore Drive', 'Denver', 'CO', '44444-4444', 'A wizard?'),
(5, 'Ed', 'Egbert', '10 Fake Lane', 'Eagle''s ROCK', 'WA', '55555-5555', 'let''s see how you handle quotes on import'),
(6, 'Frank', 'Fakerton', '2a O''Malley Street', 'Fumble Falls', 'GA', '66666-6666', 'Getting slightly more interesting data'),
(7, 'George', 'Gimestock', '2b O''Malley Street', 'Georgiana', 'G7', '77777-7777', 'Did you read through the data first and look for invalid entries? Have your CSV fix the state on this one.'),
(8, 'Hogarth', 'Hogarth', '99 Hogarth Hogarth', 'Hogarth', 'Ho', '88888-8888', 'Should be MA.  Solution should be handled by your import.'),
(9, 'Ganesha', 'Venkatanarasimharajuvaripeta', '1234 A Street', 'Milwulkie', 'WI', '89898-564a', 'Got room for long names?'),
(10, 'Igloo', 'IguanaMan', '1 Freezy Street', 'Baja', 'CA', '99999-9999', 'nothing fancy'),
(11, 'Julius', 'Adams', '1234 A Street', 'Attica', 'NY', '11111-1111', 'This is the first test note in the system'),
(12, 'Albert', 'Adams', '1235 A Street', 'Attica', 'NY', '11111-1111', 'neighbors'),
(13, 'Another', 'Record', '456 outa ideas street', 'Granite', 'NV', '98989-9999', 'Just trying to pad out the list so pages aren''t always 5 records tall');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
