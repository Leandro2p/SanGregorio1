-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2019 a las 19:05:52
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id11534443_sangregorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `ID_ASIG` int(11) NOT NULL,
  `NombreAsignatura` varchar(120) NOT NULL,
  `ID_RegimenAsig` int(11) NOT NULL,
  `Regularizada_Cursar` varchar(100) NOT NULL,
  `Aprobada_Rendir` varchar(100) NOT NULL,
  `ID_Regularizada_Aprobacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notaalumno`
--

CREATE TABLE `notaalumno` (
  `ID_NA` int(11) NOT NULL,
  `Nro_Legajo` int(11) NOT NULL,
  `Nombre_Apellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `primer_parcial` double DEFAULT NULL,
  `fh_PP` date DEFAULT NULL,
  `Recuperatorio_PP` double DEFAULT NULL,
  `Fh_RPP` date DEFAULT NULL,
  `Segundo_parcial` double DEFAULT NULL,
  `FH_SP` date DEFAULT NULL,
  `Recuperatorio_SP` double DEFAULT NULL,
  `FH_RSP` date DEFAULT NULL,
  `Promedio` double DEFAULT NULL,
  `id_Condicion` int(11) DEFAULT NULL,
  `materia` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notaalumno`
--

INSERT INTO `notaalumno` (`ID_NA`, `Nro_Legajo`, `Nombre_Apellido`, `primer_parcial`, `fh_PP`, `Recuperatorio_PP`, `Fh_RPP`, `Segundo_parcial`, `FH_SP`, `Recuperatorio_SP`, `FH_RSP`, `Promedio`, `id_Condicion`, `materia`) VALUES
(1, 512, 'Diaz', 9, '1998-12-12', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', NULL, NULL, 'Ingles II'),
(2, 123, 'Alan', 10, '1122-02-12', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', NULL, NULL, 'Enfermeria Basica y en Salud Comunitaria'),
(3, 21, 'Kevin', 10, '1202-02-12', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', NULL, NULL, 'Enfermeria Basica y en Salud Comunitaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen`
--

CREATE TABLE `regimen` (
  `ID_Reg` int(11) NOT NULL,
  `Nombre_Regimen` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimenaprobacion`
--

CREATE TABLE `regimenaprobacion` (
  `ID_RegApro` int(11) NOT NULL,
  `Nombre_RegimenApro` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`ID_ASIG`);

--
-- Indices de la tabla `notaalumno`
--
ALTER TABLE `notaalumno`
  ADD PRIMARY KEY (`ID_NA`),
  ADD UNIQUE KEY `Nro_Legajo` (`Nro_Legajo`);

--
-- Indices de la tabla `regimen`
--
ALTER TABLE `regimen`
  ADD PRIMARY KEY (`ID_Reg`);

--
-- Indices de la tabla `regimenaprobacion`
--
ALTER TABLE `regimenaprobacion`
  ADD PRIMARY KEY (`ID_RegApro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `ID_ASIG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notaalumno`
--
ALTER TABLE `notaalumno`
  MODIFY `ID_NA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `regimen`
--
ALTER TABLE `regimen`
  MODIFY `ID_Reg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regimenaprobacion`
--
ALTER TABLE `regimenaprobacion`
  MODIFY `ID_RegApro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
