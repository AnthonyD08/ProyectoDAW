-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 11:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daw`
--

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `ID_Usuario` int(9) NOT NULL,
  `Nombre_Completo` varchar(80) NOT NULL,
  `Correo_Usuario` varchar(30) NOT NULL,
  `Nombre_Usuario` varchar(30) NOT NULL,
  `Contraseña_Usuario` varchar(30) NOT NULL,
  `Recibir_Correos` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`ID_Usuario`, `Nombre_Completo`, `Correo_Usuario`, `Nombre_Usuario`, `Contraseña_Usuario`, `Recibir_Correos`) VALUES
(23, 'test', 'test@gmail.com', 'test', '123', 'Si'),
(24, 'anthony', 'aaa@yahoo.com', 'a1', 'aaaaa', 'Si'),
(25, 'anthony', 'abcdddd@yahoo.com', 'proyecto', 'abc123', 'Si');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_Usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
