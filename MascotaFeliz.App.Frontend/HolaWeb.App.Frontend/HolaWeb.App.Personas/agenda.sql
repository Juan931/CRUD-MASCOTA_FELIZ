-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2021 at 10:33 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `idPersona` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Direccion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`idPersona`, `Nombre`, `Telefono`, `Correo`, `Direccion`) VALUES
(5, 'juan medina', '3005444843', 'juandavidds08@gmail.com', 'calel 145 # 128-41'),
(6, 'df', '3005444843', 'yoeni_lopez@live.com', 'call 145 # 128-41'),
(7, 'jua', '305', 'juandavidds08@gmail.com', 'tv 1a bis Â·3-52 zipaquira'),
(8, 'juan medina', '3005444843', 'juandavidds08@gmail.com', 'calel 145 # 128-41'),
(9, 'juan medina', '3005444843', 'juandavidds08@gmail.com', 'calel 145 # 128-41'),
(10, 'matias jorge', '3058290381', 'mat@gmail.com', 'calel 145 # 128-41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersona`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
