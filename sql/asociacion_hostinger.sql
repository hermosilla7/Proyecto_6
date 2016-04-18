-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2016 a las 10:41:23
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asociacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `img` varchar(20) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `dni`, `correo`, `direccion`, `telefono`, `img`, `activo`) VALUES
(1, 'Raul', 'Perez', '46218852P', 'raul@fje.edu', 'Av. Bellvitge 30', 934741212, '1.jpg', 1),
(2, 'Felipe', 'Iglesias', '44952145E', 'felipe@iglesias.com', 'C/ Cobre, 21', 933733369, '2.jpg', 1),
(3, 'Roger', 'Calatayud', '47598830G', 'roger@gmail.com', 'C/ Metal, 172', 975422684, '3.jpg', 1),
(4, 'Oscar', 'Ortiz', '41235506P', 'oscar@gmail.com', 'C/ St Joan 35', 795462444, '4.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE IF NOT EXISTS `entrada` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `cliente_id`, `fecha`) VALUES
(1, 1, '2016-02-03 10:12:28'),
(2, 1, '2016-03-01 18:22:41'),
(3, 1, '2016-03-04 10:30:28'),
(4, 1, '2016-04-15 19:00:41'),
(5, 1, '2016-03-23 10:15:00'),
(6, 1, '2016-03-10 19:23:32'),
(7, 2, '2016-04-05 10:00:00'),
(8, 2, '2016-04-05 21:46:00'),
(9, 2, '2016-04-10 10:00:00'),
(10, 2, '2016-04-12 21:46:00'),
(11, 3, '2016-04-01 11:34:00'),
(12, 3, '2016-04-03 23:48:00'),
(13, 3, '2016-04-05 04:18:48'),
(14, 3, '2016-04-07 18:16:24'),
(15, 4, '2016-03-07 16:00:00'),
(16, 4, '2016-03-09 17:00:00'),
(17, 4, '2016-03-11 16:00:00'),
(18, 4, '2016-04-09 17:00:00'),
(19, 4, '2016-04-11 17:00:00'),
(20, 4, '2016-02-09 19:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(3) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(75) COLLATE utf8_bin NOT NULL,
  `pass` varchar(50) COLLATE utf8_bin NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `telefono` int(9) NOT NULL,
  `dni` varchar(9) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `correo`, `pass`, `activo`, `telefono`, `dni`) VALUES
(1, 'David ', 'Marin Salvador', 'david.marin@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 933367898, '33789876A'),
(2, 'Ignasi', 'Romero Sanjuan', 'ignasi.romero@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 654678987, '33567987B'),
(3, 'Armand', 'Gutierrez Arumi', 'armand.gutierrez@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 634789867, '44567908B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`correo`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `correo_2` (`correo`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
