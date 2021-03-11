-- phpMyAdmin SQL Dump
-- version 4.9.4deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-03-2020 a las 21:12:10
-- Versión del servidor: 8.0.19-0ubuntu0.19.10.3
-- Versión de PHP: 7.3.11-0ubuntu0.19.10.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `id` int UNSIGNED NOT NULL,
  `comunidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `casos` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id`, `comunidad`, `casos`) VALUES
(1, 'Andalucía', 115),
(2, 'Aragón', 64),
(3, 'Principado de Asturias', 49),
(4, 'Illes Balears', 22),
(5, 'Canarias', 51),
(6, 'Cantabria', 16),
(7, 'Castilla y León', 92),
(8, 'Castilla - La Mancha', 115),
(9, 'Cataluña', 260),
(10, 'Comunitat Valenciana', 94),
(11, 'Extremadura', 19),
(12, 'Galicia', 35),
(13, 'Comunidad de Madrid ', 1388),
(14, 'Región de Murcia', 26),
(15, 'Comunidad Foral de Navarra', 92),
(16, 'País Vasco', 346),
(17, 'La Rioja', 220),
(18, 'Ceuta', 0),
(19, 'Melilla', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDX_cominidad` (`comunidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
