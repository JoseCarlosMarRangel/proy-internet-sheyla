-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2022 a las 18:00:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upv_red`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_empleado` int(11) NOT NULL,
  `ID_departamento` int(11) NOT NULL,
  `Nombre_empleado` varchar(30) NOT NULL,
  `Apellido_empleado` varchar(30) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_empleado`, `ID_departamento`, `Nombre_empleado`, `Apellido_empleado`, `Correo`, `Usuario`, `Password`) VALUES
(1, 1, 'Alfonso Aldahir ', 'Hernandez Rodriguez', 'AAHernandezR@upred.com', 'DGAlfonso', '196d6f1d668732655663ea5b5f1f3e0f'),
(2, 1, 'Adriana', 'Palmero Torres', 'APalemeroT@upred.com', 'DGPalemero', 'e3346b1398b0b11ed3d86586ade51522'),
(3, 2, 'Gustavo Angel', 'Vargas Pesina', 'GAVargasP@upred.com', 'DGustavo', '4a4079e06eb2f7ba7a12821c7c58a3f6'),
(4, 2, 'Marco Alejandro', 'Hernández Castellanos', 'MAHernandezC@upred.com', 'DMarco', 'c4d62b6dcca08e5caf06c01889282859'),
(9, 5, 'José Carlos', 'Mar Rangel', 'JCMarR@upred.com', 'CJose', '1a2ddc2db4693cfd16d534cde5572cc1'),
(10, 5, 'Cristal Elizabeth', 'Toscano Hernández', 'CEToscanoH@upred.com', 'CCristal', 'f1a543f5a2c5d49bc5dde298fcf716e4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `dept` (`ID_departamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `dept` FOREIGN KEY (`ID_departamento`) REFERENCES `departamentos` (`ID_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
