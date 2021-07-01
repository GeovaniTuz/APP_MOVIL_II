-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2013 a las 00:00:21
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
-- Estructura de tabla para la tabla `ejes`
--

CREATE TABLE IF NOT EXISTS `ejes` (
  `id` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `d_completa` varchar(900) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ejes`
--

INSERT INTO `ejes` (`id`, `titulo`, `foto`, `descripcion`, `d_completa`) VALUES
('1', 'Eje Araya', 'contenido/araya/Castillo-Santiago-de-Arroyo-de-Araya.jpg', 'La península de Araya se encuentra en el estado Sucre, al norte de Cumaná. Para llegar se puede ir por tierra o por mar.', 'Este Eje Turístico lo comprende toda la península de Araya, en el municipio Cruz Salmerón Acosta. Su población más grande es la ciudad de Araya, la cual posee una fuente inagotable de sal mineral que le da gusto al paladar del venezolano.En la península está también la población de Manicuare, cuna del poeta Cruz María Salmerón Acosta, aquel que se inspiró por el azul de los paisajes abrileños, aquel que feneció preso de angustia y dolor, víctima de una incurable dolencia que le consumió en plena juventud.'),
('2', 'Eje Cumaná', 'contenido/cumana/indio.png', 'La capital del estado Sucre y primera ciudad fundada en el continente americano, famosa por sus hermosas playas.', 'Cumaná es la capital del estado Sucre. Es una ciudad marinera, ribereña, primogénita y mariscala. Marinera por encontrarse bañada por el Mar Caribe y el Golfo de Cariaco; ribereña por estar regada por el Río Manzanares; primogénita por ser la primera ciudad erigida en tiempos de la colonia, y mariscala por ser cuna del hombre más glorioso del estado Sucre, el Mariscal Antonio José de Sucre, el que entregó su vida por la libertad y la justicia en la América del Sur. Fue sin dudas un soldado universal.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
