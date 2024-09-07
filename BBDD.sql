-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.3.0 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para vinculacion
DROP DATABASE IF EXISTS `vinculacion`;
CREATE DATABASE IF NOT EXISTS `vinculacion` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish2_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `vinculacion`;

-- Volcando estructura para tabla vinculacion.alumnos
DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `fechaEnvio` date NOT NULL,
  `nombres` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `paterno` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `materno` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `noint` varchar(5) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `noext` varchar(5) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `cp` varchar(6) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `colonia` varchar(150) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `estado` varchar(150) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `municipio` varchar(150) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `telefono` varchar(10) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `sexo` varchar(1) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '0',
  `especialidad` varchar(150) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `semestre` varchar(1) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `grupo` varchar(1) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `generacion` varchar(10) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `noctrl` varchar(14) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `curp` varchar(18) COLLATE utf16_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla vinculacion.dt_practicas
DROP TABLE IF EXISTS `dt_practicas`;
CREATE TABLE IF NOT EXISTS `dt_practicas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `incentivo` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `departamento` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `horario` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `jefe_inmediato` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `giro` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `inicio` date NOT NULL DEFAULT (0),
  `termino` date NOT NULL DEFAULT (0),
  `actividades` longtext CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla vinculacion.empresas
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `direccion` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `colonia` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `cp` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `telefono` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `jefe_inmediato` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `correo` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `puesto` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `tipo` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `giro` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla vinculacion.practicas
DROP TABLE IF EXISTS `practicas`;
CREATE TABLE IF NOT EXISTS `practicas` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla vinculacion.reportes
DROP TABLE IF EXISTS `reportes`;
CREATE TABLE IF NOT EXISTS `reportes` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla vinculacion.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `apellido_pat` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `apellido_mat` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `cargo` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `departamento` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `nivel_acceso` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
