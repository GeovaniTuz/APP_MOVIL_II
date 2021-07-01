-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-07-2021 a las 04:01:56
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
-- Estructura de tabla para la tabla `ejes`
--

DROP TABLE IF EXISTS `ejes`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turismo`
--

DROP TABLE IF EXISTS `turismo`;
CREATE TABLE IF NOT EXISTS `turismo` (
  `id` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `etiquetas` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `turismo`
--

INSERT INTO `turismo` (`id`, `titulo`, `img`, `direccion`, `telefono`, `etiquetas`) VALUES
('1', 'Castillo Santiago de Arroyo', 'contenido/araya/monumentos/Castillo Santiago de Arroyo de Araya.jpg', 'Población Araya', '', 'monumentos'),
('2', 'Playa San Luis', 'contenido/cumana/playas/sanluis_prev.png', 'Av. Universidad', '+58 (0293) 4512725', 'playas,rios,san luis');

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
