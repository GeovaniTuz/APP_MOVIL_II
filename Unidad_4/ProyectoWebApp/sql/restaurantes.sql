-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2013 a las 00:00:40
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `interaccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE IF NOT EXISTS `restaurantes` (
  `id` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `etiquetas` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `img`, `foto`, `titulo`, `direccion`, `telefono`, `etiquetas`) VALUES
('1', 'contenido/miniatura/defaul_restauran.png', 'contenido/miniatura/defaul_restauran_min.png', 'Restaurante Eugenia', 'Calle El Castillo, sector Lisboa', '', 'restauran,comida'),
('1', 'contenido/miniatura/defaul_restauran.png', 'contenido/miniatura/defaul_restauran_min.png', 'Restaurante Abuela Mercedes', 'Calle La Marina frente a la playa.', '', 'restauran,comida');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
