-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 14, 2020 at 03:14 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendymarkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `first_nameUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `first_nameUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Matthew', 'matt.xqsf@hotmail.com', '$2y$10$tujkAGn09AAwYnVqPSt5g.dFaSFQYn3utRT3EI0MjaxMoIopcWaBG'),
(2, 'Duke', 'matthewdukepan@gmail.com', '$2y$10$f.NyoeCzkd4sgJX/ElLZb.DwnpDKw08R6LTJuoE99nlYMKc.Wca4a'),
(3, 'test', 'test@gmail.com', '$2y$10$Tbv93f2zMgu8lgqF90PJyuNRZQfc9BY/NcY6qulh0P9jfOIX9KBOW'),
(4, 'admin', 'admin@trendymarkt.com', '$2y$10$XB8g9lBt6paK4RtVSmalD.Y7ds4aCQByjZVNod0VyuBmypq3MORV.'),
(5, 'Joblo', 'general@skyline.com', '$2y$10$zoKCKfMZtmP1Oswk6aTdBeABvZpCmIfVg36KW297ZQcEzMTQwFp9O'),
(6, 'John', 'general-skyline@hotmail.com', '$2y$10$exFNFEe0dh0QgSIXi64s..DJDGaM9XpIvTXe5.bA1Tlntkm5G2J4S'),
(7, 'Cookie', 'cookie@cookie.com', '$2y$10$7aLApq2UaMhXqcon2AIStuE.O9mLvAvBDqUTxMZ6YFZtI6zs5WZWu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
