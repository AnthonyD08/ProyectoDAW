-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 10:23 PM
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
-- Table structure for table `lugares`
--

CREATE TABLE `lugares` (
  `ID_Lugares` int(9) NOT NULL,
  `Nombre_Lugar` varchar(80) NOT NULL,
  `Horario_Lugar` varchar(50) NOT NULL,
  `Correo_Lugar` varchar(50) NOT NULL,
  `telefono_Lugar` varchar(20) NOT NULL,
  `Direccion_Lugar` varchar(100) NOT NULL,
  `Link_lugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lugares`
--

INSERT INTO `lugares` (`ID_Lugares`, `Nombre_Lugar`, `Horario_Lugar`, `Correo_Lugar`, `telefono_Lugar`, `Direccion_Lugar`, `Link_lugar`) VALUES
(1, 'Museo de Jade', 'Lunes a Domingo de 8:00 am a 5:00 pm', 'museodeljade@ins-cr.com', '(+506)2521-6610', 'Avenida central, calle 13 y 13 bis, San Jose, Cost...', 'https://museodeljade.grupoins.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`ID_Lugares`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lugares`
--
ALTER TABLE `lugares`
  MODIFY `ID_Lugares` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
