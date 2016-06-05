-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2013 a las 03:04:28
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `meditorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `nume` varchar(10) NOT NULL,
  `rzs` varchar(20) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `cp` int(11) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `cel` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `obs` varchar(25) NOT NULL,
  PRIMARY KEY (`nume`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nume`, `rzs`, `dom`, `cp`, `tel`, `cel`, `email`, `obs`) VALUES
('20', 'iudhwihdh', 'huhuhuhuhuh', 2000, '215151131', '1515115151', 'jiiuhiuinjk', 'kjnkjnkjnkjnkjnk'),
('4038', 'Ispi Juan Pablo 2', 'Urquiza ', 2134, '4968189', '1677866789', 'Ispi@gmail.', 'Sandra Directora'),
('643', 'Escuela de Educacion', 'San Martin 1200', 2000, '49645454', '879746', '614646446', 'oihjdoiwejcdowijxoimxlkmx'),
('9110', 'Familia del Señor', 'Zeballos 732', 2000, '6788654446', '15678896567', 'no tiene', 'Patricia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigospostales`
--

CREATE TABLE IF NOT EXISTS `codigospostales` (
  `cp` int(11) NOT NULL,
  `desc` varchar(20) NOT NULL,
  PRIMARY KEY (`cp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codigospostales`
--

INSERT INTO `codigospostales` (`cp`, `desc`) VALUES
(2000, 'Rosario'),
(2134, 'Roldan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallespedidos`
--

CREATE TABLE IF NOT EXISTS `detallespedidos` (
  `nump` varchar(10) NOT NULL,
  `numr` varchar(10) NOT NULL,
  `codp` varchar(10) NOT NULL,
  `cant` varchar(11) NOT NULL,
  `importe` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosc`
--

CREATE TABLE IF NOT EXISTS `pedidosc` (
  `nump` varchar(10) NOT NULL,
  `nume` varchar(10) NOT NULL,
  `fechap` varchar(10) NOT NULL,
  `fechah` varchar(10) NOT NULL,
  `fechae` varchar(10) NOT NULL,
  `nota` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `codp` int(10) NOT NULL AUTO_INCREMENT,
  `detalle` varchar(20) NOT NULL,
  `cantp` int(10) NOT NULL,
  `precioc` float NOT NULL,
  `preciov` float NOT NULL,
  `gana` int(10) NOT NULL,
  PRIMARY KEY (`codp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codp`, `detalle`, `cantp`, `precioc`, `preciov`, `gana`) VALUES
(5, 'Libreta Color ', 250, 1.5, 2.1, 40),
(6, 'Libro de Firmas', 500, 11.5, 17.25, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosp`
--

CREATE TABLE IF NOT EXISTS `productosp` (
  `codp` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `detalle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rzs` varchar(20) NOT NULL,
  `dire` varchar(20) NOT NULL,
  `cp` int(10) NOT NULL,
  `tele` varchar(20) NOT NULL,
  `celu` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `detalle` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `rzs`, `dire`, `cp`, `tele`, `celu`, `mail`, `detalle`) VALUES
(1, 'Papeles Troxo', 'Albear 243', 2000, '49087678', '156789765', 'troxo@gmail.com', 'Imprecion Color');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
