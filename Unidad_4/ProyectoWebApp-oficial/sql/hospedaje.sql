-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-07-2021 a las 22:15:16
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectowebapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospedaje`
--

DROP TABLE IF EXISTS `hospedaje`;
CREATE TABLE IF NOT EXISTS `hospedaje` (
  `id` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `etiquetas` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `hospedaje`
--

INSERT INTO `hospedaje` (`id`, `titulo`, `img`, `foto`, `direccion`, `telefono`, `etiquetas`) VALUES
('2', 'Casa de los aluxes', 'contenido/araya/lagunas/laguna_grande1.jpg', 'contenido/araya/lagunas/laguna_grande1.jpg', 'Terreno con camino de tierra', '9864523652', 'Laguna para disfrutar el lugar'),
('2', 'Casa de los aluxes', 'contenido/araya/lagunas/laguna_grande1.jpg', 'contenido/araya/lagunas/laguna_grande1.jpg', 'Terreno con camino de tierra', '9864523652', 'Laguna para disfrutar el lugar'),
('2', 'Casa de los aluxes', 'contenido/araya/lagunas/laguna_grande1.jpg', 'contenido/araya/lagunas/laguna_grande1.jpg', 'Terreno con camino de tierra', '9864523652', 'Laguna para disfrutar el lugar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hospedaje`
--
ALTER TABLE `hospedaje` ADD FULLTEXT KEY `id` (`id`,`titulo`,`img`,`foto`,`direccion`,`telefono`,`etiquetas`);
ALTER TABLE `hospedaje` ADD FULLTEXT KEY `id_2` (`id`,`titulo`,`img`,`foto`,`direccion`,`telefono`,`etiquetas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
