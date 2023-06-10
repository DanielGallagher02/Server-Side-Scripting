-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 05:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `Movie Name` varchar(50) NOT NULL,
  `Movie Start` time NOT NULL,
  `Movie Length` time NOT NULL,
  `Date Released` date NOT NULL,
  `Director` varchar(40) NOT NULL,
  `Genre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Movie Name`, `Movie Start`, `Movie Length`, `Date Released`, `Director`, `Genre`) VALUES
(1, 'Spider-Man: No Way Home', '16:30:00', '02:28:00', '2021-12-15', 'Jon Watts', 'SuperHero'),
(2, 'House of Gucci', '17:00:00', '02:38:00', '2021-11-26', 'Ridley Scott', 'Drama'),
(3, 'The Matrix Resurrections', '21:00:00', '02:28:00', '2021-12-22', 'Lana Wachowski', 'Science fiction'),
(4, 'Ghostbusters: Afterlife', '22:30:00', '02:04:00', '2021-11-18', 'Jason Reitman', 'Supernatural'),
(5, 'Spiderman ', '15:00:00', '02:30:00', '2021-11-11', 'Daniel Gallagher', 'Comedy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
