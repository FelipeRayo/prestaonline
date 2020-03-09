-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2020 a las 23:35:34
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `presta`
--
CREATE DATABASE IF NOT EXISTS `presta` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `presta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDENTIFICACION` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CLI_NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CLI_APELLIDO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CLI_FECNAC` date NOT NULL,
  `CLI_DIRECCION` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CLI_CORREO` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `CLI_TEL` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_CEL1` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_CEL2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_DIRTRA` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_TELTRA` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_FIADOR` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_CONTACFIADOR` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_ESTADO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CLI_FECREG` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDENTIFICACION`, `CLI_NOMBRE`, `CLI_APELLIDO`, `CLI_FECNAC`, `CLI_DIRECCION`, `CLI_CORREO`, `CLI_TEL`, `CLI_CEL1`, `CLI_CEL2`, `CLI_DIRTRA`, `CLI_TELTRA`, `CLI_FIADOR`, `CLI_CONTACFIADOR`, `CLI_ESTADO`, `CLI_FECREG`) VALUES
('1110496012', 'Francisco', 'Javier Diaz', '1990-04-03', 'Carrera 2 # 33b-11', '', '2661466', '3143878430', '3157992425', 'Carrera 2 # 27-84', '3143878430', 'Jose Duvan', '3143878430', 'Actualizado', '2017-10-14 19:35:47'),
('1110582527', 'Jose Duvan', 'Rubiano', '1997-05-13', 'Carrera 2 # 33b-11', '', '2661466', '3143878430', '3157992425', 'Carrera 2 # 27-84', '3143878430', 'Jose Gerardo', '3143878430', 'Actualizado', '2017-10-14 19:31:55'),
('12345678', 'james armando', 'morales', '2018-07-23', 'Ibague', 'prueba@gmail.com', '2615327', '3118711810', '312793929', 'ibague', '0', 'juan', '3152345668', 'Actualizado', '2020-03-02 14:44:29'),
('314354', 'sgvfsf', 'dfbdf', '2020-03-02', 'wefvwv', 'ebbzf', 'dndgng', 'errrntntn', 'svsrbsf', 'berbrn', 'fbbe', 'dfbbe', 'wwbeb', 'Registrado', '2020-03-02 14:34:02'),
('38234769', 'Luz ', 'Elena', '1974-01-30', 'Carrera 2 #27-84', '', '2668237', '3157992425', '3157992425', 'Carrera 3a #33b-11', '3157992425', 'Duvan', '3143878430', 'Registrado', '2018-07-08 15:49:38'),
('93396862', 'Jose', 'Gerardo', '1973-12-01', 'Carrera 2 #27-84', 'piperayo062001@gmail.com', '2668237', '3166595214', '3143878430', 'Carrera 2 # 27-84', '3013062792', 'Carlos', '3157992425', 'Actualizado', '2020-03-02 17:09:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `Cod_Prestamo` int(11) NOT NULL,
  `Cod_Cliente` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Cod_Ruta` int(11) NOT NULL,
  `Fecha_prestamo` datetime NOT NULL,
  `Valor_prestamo` int(11) NOT NULL,
  `Cant_cuotas_prestamo` int(11) NOT NULL,
  `Interes_prestamo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`Cod_Prestamo`, `Cod_Cliente`, `Cod_Ruta`, `Fecha_prestamo`, `Valor_prestamo`, `Cant_cuotas_prestamo`, `Interes_prestamo`) VALUES
(1, '93396862', 1, '2020-02-24 13:01:35', 100000, 6, 1.5),
(2, '1110496012', 1, '2020-02-24 13:03:58', 100000, 4, 1.5),
(3, '1110496012', 1, '2020-02-25 14:06:11', 560000, 4, 2.5),
(5, '93396862', 2, '2020-02-26 17:11:38', 100000, 6, 1.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `Cod_Ruta` int(11) NOT NULL,
  `Desc_Ruta` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`Cod_Ruta`, `Desc_Ruta`) VALUES
(1, 'Prueba1'),
(2, 'Prueba2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `USU_CODIGO` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CLAVE` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `USU_PIN` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CEDULA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USU_NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `USU_APELLIDO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `USU_TEL` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USU_CEL1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CEL2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USU_DIRECCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USU_CORREO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USU_ROL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `USU_ESTADO` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USU_CODIGO`, `USU_CLAVE`, `USU_PIN`, `USU_CEDULA`, `USU_NOMBRE`, `USU_APELLIDO`, `USU_TEL`, `USU_CEL1`, `USU_CEL2`, `USU_DIRECCION`, `USU_CORREO`, `USU_ROL`, `USU_ESTADO`) VALUES
('1234', '1234', '1234', '14138982', 'james armando', 'morales mora', '3', '3', '3', 'colombia', 'jmooo@gmail.com', 'admin', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDENTIFICACION`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`Cod_Prestamo`),
  ADD KEY `Cod_cliente` (`Cod_Cliente`),
  ADD KEY `Cod_Ruta` (`Cod_Ruta`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`Cod_Ruta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`USU_CODIGO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `Cod_Prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `Cod_Ruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `Cod_Ruta` FOREIGN KEY (`Cod_Ruta`) REFERENCES `ruta` (`Cod_Ruta`),
  ADD CONSTRAINT `Cod_cliente` FOREIGN KEY (`Cod_Cliente`) REFERENCES `cliente` (`IDENTIFICACION`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
