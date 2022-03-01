-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-03-2022 a las 04:30:51
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `k2`
--
CREATE DATABASE IF NOT EXISTS `k2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `k2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diabetes`
--

DROP TABLE IF EXISTS `diabetes`;
CREATE TABLE IF NOT EXISTS `diabetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `eps` varchar(255) NOT NULL,
  `neurovegetativos` varchar(255) DEFAULT 'no',
  `trastornos` varchar(255) DEFAULT 'no',
  `deshidratación` varchar(255) DEFAULT 'no',
  `sepsis` varchar(255) DEFAULT 'no',
  `patologias` varchar(255) DEFAULT 'no',
  `nivel` double DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diabetes`
--

INSERT INTO `diabetes` (`id`, `nombre`, `apellido`, `cedula`, `eps`, `neurovegetativos`, `trastornos`, `deshidratación`, `sepsis`, `patologias`, `nivel`, `created_at`, `updated_at`) VALUES
(12, 'NELSON', 'Ortega', '1006108696', 'Famisanar', NULL, NULL, 'si', 'si', NULL, 35.3, '2022-03-01 09:23:28', '2022-03-01 09:23:28'),
(11, '1Pruebita', 'Ortega', '1059698358', 'Famisanar', NULL, NULL, 'si', 'si', NULL, 12.7, '2022-03-01 09:16:02', '2022-03-01 09:16:02'),
(7, 'Prueba2', 'Ortega', '1059698358', 'Famisanar', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 07:33:24', '2022-03-01 07:33:24'),
(9, 'Prueba1', 'Ortega', '1006108696', 'Famisanar', NULL, NULL, NULL, 'si', NULL, 13, '2022-03-01 09:10:51', '2022-03-01 09:10:51'),
(10, 'Prueba1', 'Ortega', '1006108696', 'Famisanar', NULL, NULL, NULL, 'si', 'si', 13.6, '2022-03-01 09:11:06', '2022-03-01 09:11:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hemoglobinas`
--

DROP TABLE IF EXISTS `hemoglobinas`;
CREATE TABLE IF NOT EXISTS `hemoglobinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `resultado` varchar(255) DEFAULT NULL,
  `nivel` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sexo_id` (`sexo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hemoglobinas`
--

INSERT INTO `hemoglobinas` (`id`, `nombre`, `apellido`, `correo`, `fecha_nacimiento`, `sexo_id`, `resultado`, `nivel`, `created_at`, `updated_at`) VALUES
(32, '2', 'Ortega', 'nelkon2214@gmail.com', '2002-05-14', 2, 'Negativo', 15.6, '2022-03-01 09:25:10', '2022-03-01 09:25:10'),
(31, 'NELSON', 'Ortega', 'Ortegaurbanonelsonstiven@gmail.com', '2022-02-25', 2, 'Positivo', 12.5, '2022-03-01 09:24:16', '2022-03-01 09:24:16'),
(30, '1Pruebita', 'Ortega', 'nelkon2214@gmail.com', '2022-02-26', 1, 'Positivo', 7.3, '2022-03-01 09:17:12', '2022-03-01 09:17:12'),
(29, '1Pruebita', 'Ortega', 'nelorval3149@hotmail.com', '2021-02-28', 1, 'Positivo', 9.6, '2022-03-01 04:57:49', '2022-03-01 04:57:49'),
(28, '1Pruebita', 'Ortega', 'nelorval3149@hotmail.com', '2021-02-28', 1, 'Negativo', 12.6, '2022-03-01 04:57:40', '2022-03-01 04:57:40');

--
-- Disparadores `hemoglobinas`
--
DROP TRIGGER IF EXISTS `autoResultado`;
DELIMITER $$
CREATE TRIGGER `autoResultado` BEFORE INSERT ON `hemoglobinas` FOR EACH ROW BEGIN
CASE
WHEN ((new.`sexo_id`= 2)AND(new.`nivel` BETWEEN 14.0 AND 18.0) AND (TIMESTAMPDIFF(YEAR,(new.fecha_nacimiento),(now())))>15)THEN
    SET new.`resultado`="Negativo";
WHEN ((new.`sexo_id`= 1)AND(new.`nivel` BETWEEN 12.0 AND 16.0) AND (TIMESTAMPDIFF(YEAR,(new.fecha_nacimiento),(now())))>15)THEN
    SET new.`resultado`="Negativo";
WHEN ((new.`nivel` BETWEEN 12.6 AND 15.5) AND ((TIMESTAMPDIFF(YEAR,(new.fecha_nacimiento),(now())))>5) AND ((TIMESTAMPDIFF(YEAR,(new.fecha_nacimiento),(now())))<11))THEN
    SET new.`resultado`="Negativo";
WHEN ((new.`nivel` BETWEEN 11.5 AND 15.0) AND ((TIMESTAMPDIFF(YEAR,(new.fecha_nacimiento),(now())))>1) AND ((TIMESTAMPDIFF(YEAR,(new.fecha_nacimiento),(now())))<6))THEN
    SET new.`resultado`="Negativo";
    WHEN ((new.`nivel` BETWEEN 11.0 AND 15.0) AND ((TIMESTAMPDIFF(MONTH,(new.fecha_nacimiento),(now())))>6) AND ((TIMESTAMPDIFF(MONTH,(new.fecha_nacimiento),(now())))<13))THEN
    SET new.`resultado`="Negativo";
WHEN ((new.`nivel` BETWEEN 10.0 AND 18.0) AND ((TIMESTAMPDIFF(MONTH,(new.fecha_nacimiento),(now())))>1) AND ((TIMESTAMPDIFF(MONTH,(new.fecha_nacimiento),(now())))<6))THEN
    SET new.`resultado`="Negativo";
WHEN ((new.`nivel` BETWEEN 13.0 AND 26.0) AND ((TIMESTAMPDIFF(MONTH,(new.fecha_nacimiento),(now())))<1))THEN
    SET new.`resultado`="Negativo";
    ELSE
    	SET new.`resultado`="Positivo";
END CASE;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

DROP TABLE IF EXISTS `sexo`;
CREATE TABLE IF NOT EXISTS `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Femenino', NULL, NULL),
(2, 'Masculino', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
