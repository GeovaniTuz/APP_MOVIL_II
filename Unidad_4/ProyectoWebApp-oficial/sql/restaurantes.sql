-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-07-2021 a las 22:15:23
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
-- Estructura de tabla para la tabla `restaurantes`
--

DROP TABLE IF EXISTS `restaurantes`;
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
('1', 'contenido/miniatura/defaul_restauran.png', 'contenido/miniatura/defaul_restauran_min.png', 'Restaurante Abuela Mercedes', 'Calle La Marina frente a la playa.', '', 'restauran,comida'),
('2', 'contenido/miniatura/defaul_restauran_min.png', 'contenido/miniatura/defaul_restauran_min.png', 'vallisoletano', 'calle 76 x 33 y 31, plaza.', '9869086789', 'Restaurante Vallisoletano');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
