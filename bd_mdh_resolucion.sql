-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-03-2023 a las 05:30:13
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_mdh_resolucion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `IdEstado` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEstado` varchar(150) NOT NULL,
  PRIMARY KEY (`IdEstado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `NombreEstado`) VALUES
(1, 'HABILITAR'),
(2, 'INHABILITAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion`
--

CREATE TABLE IF NOT EXISTS `resolucion` (
  `NumeroRes` varchar(50) NOT NULL,
  `ContenidoRes` text NOT NULL,
  `FechaPublicRes` date NOT NULL,
  `FechaSubRes` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IdTipoRes` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL,
  PRIMARY KEY (`NumeroRes`),
  KEY `fk_resolucion_tiporesolucion` (`IdTipoRes`),
  KEY `fk_resolucion_Estado` (`IdEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporesolucion`
--

CREATE TABLE IF NOT EXISTS `tiporesolucion` (
  `IdTipoRes` int(11) NOT NULL AUTO_INCREMENT,
  `NombreTipoRes` varchar(150) NOT NULL,
  PRIMARY KEY (`IdTipoRes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `IdTipoUsu` int(11) NOT NULL AUTO_INCREMENT,
  `NombreTipoUsu` varchar(150) NOT NULL,
  PRIMARY KEY (`IdTipoUsu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTipoUsu`, `NombreTipoUsu`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'ASISTENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `CodigoUsu` char(12) NOT NULL,
  `PasswordUsu` varchar(12) NOT NULL,
  `ParternoUsu` varchar(100) NOT NULL,
  `MaternoUsu` varchar(100) NOT NULL,
  `NombreUsu` varchar(250) NOT NULL,
  `DNIUsu` varchar(12) NOT NULL,
  `DireccionUsu` varchar(250) DEFAULT NULL,
  `CelularUsu` varchar(9) DEFAULT NULL,
  `EmailUsu` varchar(100) DEFAULT NULL,
  `SexoUsu` char(1) DEFAULT NULL,
  `FechaNacUsu` date DEFAULT NULL,
  `IdTipoUsu` int(11) NOT NULL,
  PRIMARY KEY (`CodigoUsu`),
  KEY `fk_usuario_tipousuario` (`IdTipoUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `resolucion`
--
ALTER TABLE `resolucion`
  ADD CONSTRAINT `fk_resolucion_Estado` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`),
  ADD CONSTRAINT `fk_resolucion_tiporesolucion` FOREIGN KEY (`IdTipoRes`) REFERENCES `tiporesolucion` (`IdTipoRes`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipousuario` FOREIGN KEY (`IdTipoUsu`) REFERENCES `tipousuario` (`IdTipoUsu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
