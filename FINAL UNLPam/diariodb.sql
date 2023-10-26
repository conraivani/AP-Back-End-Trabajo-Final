-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 01:23 AM
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
-- Database: `diariodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `copete` text NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `autor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `id_usuario`, `titulo`, `copete`, `cuerpo`, `imagen`, `fecha`, `categoria`, `autor`) VALUES
(19, 1, 'este es un titulo', 'mi copete', 'sdas sad sa dasd \r\n\r\ndas dasd asd sa d\r\n\r\n\r\n\r\nda sd sa dasd sa', '1695687973-P1200008.JPG', '2023-09-26', 'Moda', ''),
(20, 1, 'dsadsad', 'ddasdasd', '<p>hola</p><p><b>ddddd</b></p><p>gdfgfdg<b><br></b></p><p><br></p>', '1695688718-P1200026.JPG', '2023-09-26', 'Deportes', ''),
(21, 1, 'dasdas', 'dasdasd sad asd as as dsa assa dsad ads as das sadd asd asd asd as asd as dsa as dsad asd', '<p>dsa as </p><p>&nbsp;das</p><p>d </p><p>d </p><p>asd <br></p>', '1695689521-P1200023.JPG', '2023-09-26', 'Moda', ''),
(22, 1, 'asdas', 'ddddddddddddddddd ddddddddddddddddddddddddd ddddddddddddddd', '<p>ddddddddddddd<br></p>', '1695689538-P1200085.JPG', '2023-09-26', 'Deportes', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'Conrado', 'Ivani', 'Conra', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
