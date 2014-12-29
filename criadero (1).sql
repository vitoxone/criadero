-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-03-2014 a las 23:15:30
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.4.4-14+deb7u7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `criadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `breeds`
--

CREATE TABLE IF NOT EXISTS `breeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET latin2 NOT NULL,
  `description` text CHARACTER SET latin2,
  `state` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `breeds`
--

INSERT INTO `breeds` (`id`, `name`, `description`, `state`, `created`, `modified`) VALUES
(3, 'Dales', 'El caballo Poni Dales es una raza de Poni proveniente de Reino Unido. El Poni Dales tiene un temperamento de Sangre Tibia. Esta raza tiende a tener una altura de alrededor de 147 cm. Esta raza de caballo puede tener un color Bayo, Casta?o, Moro y Negro.', 1, '0000-00-00 00:00:00', '2014-02-19 02:19:11'),
(4, 'Haflinger', 'La raza Haflinger o Avelignese es una raza de caballos desarrollada a finales del siglo XIX en Austria e Italia.\r\nSe trata de un caballo peque?o y robusto muy adaptado a marchar por la monta?a.', 0, '0000-00-00 00:00:00', '2014-02-19 02:33:07'),
(2, 'Arabe', 'El caballo de raza árabe debe su reputación a su inteligencia, carácter fuerte y resistencia sobresaliente. Con una cabeza característica y la cola siempre en alto, el caballo árabe es una de las razas de caballos mejor reconocidas en el mundo.', 1, '0000-00-00 00:00:00', '2014-02-19 02:17:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `state` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id`, `name`, `description`, `state`, `created`, `modified`) VALUES
(1, 'Mulato', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Colorado', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Colorado con Rosillo', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Mula?', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `eventype_id` int(11) NOT NULL,
  `horse_id` int(11) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `date`, `eventype_id`, `horse_id`, `duration`, `detail`) VALUES
(1, '2014-02-11', 1, 1, '', 'Buen Paseo'),
(2, '2014-02-12', 1, 1, '1 hora', 'Muy buen paseo'),
(3, '2014-02-12', 1, 1, '', 'ddsdsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventypes`
--

CREATE TABLE IF NOT EXISTS `eventypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eventypes`
--

INSERT INTO `eventypes` (`id`, `name`) VALUES
(1, 'Paseo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horses`
--

CREATE TABLE IF NOT EXISTS `horses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender_id` int(10) DEFAULT NULL,
  `breed_id` int(10) DEFAULT NULL,
  `type_id` int(10) DEFAULT NULL,
  `color_id` int(10) DEFAULT NULL,
  `state_id` int(10) DEFAULT NULL,
  `description` text,
  `image` varchar(256) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `last_walk` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `horses`
--

INSERT INTO `horses` (`id`, `name`, `number`, `birthdate`, `gender_id`, `breed_id`, `type_id`, `color_id`, `state_id`, `description`, `image`, `lft`, `rght`, `created`, `modified`, `last_walk`) VALUES
(1, 'Tornado', 1232323, '2005-02-10', 1, 2, 1, 2, 1, '', 'tornado.jpg', NULL, NULL, '2014-02-10 16:19:54', '2014-02-19 02:17:54', '2014-02-10'),
(2, 'Afinao', 175848, '2006-02-10', 1, 2, 1, 3, 1, '', 'Afinao.jpg', NULL, NULL, '2014-02-10 16:26:57', '2014-02-10 16:26:57', '2014-02-09'),
(3, 'Jaquimon', 78736273, '1996-02-10', 1, 2, 1, 1, 1, '', 'Jaquimon.jpg', NULL, NULL, '2014-02-10 18:45:28', '2014-02-10 18:45:28', '2014-02-08'),
(4, 'Chitakelinda', 148323, '2003-02-10', 2, 2, 4, 3, 3, '', 'Chitakelinda', NULL, NULL, '2014-02-10 19:50:50', '2014-02-10 19:50:50', '2014-02-07'),
(5, 'asicalao', 3232323, '2014-02-24', 1, 3, 1, 2, 1, 'muy buen cabasho', '302833_4598651562393_321744591_n.jpg.jpg', 1, 4, '2014-02-24 18:12:41', '2014-02-24 18:12:41', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Entidad'),
(3, 'Empresa'),
(4, 'Persona Natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `state` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `name`, `description`, `state`, `created`, `modified`) VALUES
(1, 'Corriendo', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'En Trabajo', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Reproductor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `state` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `name`, `description`, `state`, `created`, `modified`) VALUES
(1, 'Caballo', 'Tipo de animal', 1, '0000-00-00 00:00:00', '2014-02-22 03:25:19'),
(2, 'Potro', 'Tipo de animal', 0, '0000-00-00 00:00:00', '2014-02-22 03:25:24'),
(3, 'Montas', 'Tipo de animal', 0, '0000-00-00 00:00:00', '2014-02-22 03:25:29'),
(4, 'Yegua', 'Tipo de animal', 0, '0000-00-00 00:00:00', '2014-02-22 03:25:35'),
(5, 'Crianza', 'Tipo de animal', 0, '0000-00-00 00:00:00', '2014-02-22 03:25:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `rut` varchar(45) DEFAULT NULL,
  `cuenta_corriente` varchar(45) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`roles_id`,`email`),
  KEY `fk_users_roles1_idx` (`roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `username`, `email`, `telefono`, `roles_id`, `rut`, `cuenta_corriente`, `password`) VALUES
(10, 'admin', 'apellido', 'admin@a.cl', 'admin@a.cl', '', 1, '', '', 'e4f0f0fbe184648dfcd2470313182c353911c29b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `walks`
--

CREATE TABLE IF NOT EXISTS `walks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `horse_id` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `details` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `walks`
--

INSERT INTO `walks` (`id`, `date`, `horse_id`, `duration`, `details`, `created`, `modified`) VALUES
(1, '2014-02-18', 1, '1 hora', 'muy relajante', '2014-02-18 16:24:27', '2014-02-18 16:24:27'),
(5, '0000-00-00', 1, '< 30 min', 'dsdsd', '2014-02-24 17:39:02', '2014-02-24 17:39:02'),
(6, '2014-02-08', 2, '30 min > 1 hora', 'sdsdsad', '2014-02-24 17:41:51', '2014-02-24 17:41:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
