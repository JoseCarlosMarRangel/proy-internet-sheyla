-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2022 a las 18:26:58
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
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id_cita` int(11) NOT NULL,
  `Nombre_cliente` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Fechas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `ID_departamento` int(11) NOT NULL,
  `Nombre_departamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `ID_documento` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Directorio` varchar(150) NOT NULL,
  `Fecha_de_subida` date NOT NULL,
  `ID_departamento` int(11) NOT NULL,
  `Estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------
--
--Estructura de tabla para la tabla 'eventos'
--
CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(30) NOT NULL,
  `fecha` Date NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID_inventario` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id_cita`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`ID_departamento`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`ID_documento`),
  ADD KEY `ID_departamento` (`ID_departamento`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `dept` (`ID_departamento`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_inventario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `ID_departamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `ID_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`ID_departamento`) REFERENCES `departamentos` (`ID_departamento`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `dept` FOREIGN KEY (`ID_departamento`) REFERENCES `departamentos` (`ID_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


///////////////////////////////////////////////////Insertar datos de departamentos

INSERT INTO `departamentos` (`ID_departamento`, `Nombre_departamento`) VALUES(1, 'Direccion general'),(2, 'Direccion'),(3, 'Recursos Humanos'),(4, 'Administracion'),(5, 'Comercial'),(6, 'Legal'),(7, 'Produccion');


////////////////////////////////////////////////// Insertar datos de los empleados de la tabla empleados 

INSERT INTO `empleados` (`ID_empleado`, `ID_departamento`, `Nombre_empleado`, `Apellido_empleado`, `Correo`, `Usuario`, `Password`) VALUES
(1, 1, 'Alfonso Aldahir ', 'Hernandez Rodriguez', 'AAHernandezR@upred.com', 'DGAlfonso', 'dg1'),
(2, 1, 'Adriana', 'Palmero Torres', 'APalemeroT@upred.com', 'DGPalemero', 'dg2'),
(3, 2, 'Gustavo Angel', 'Vargas Pesina', 'GAVargasP@upred.com', 'DGustavo', 'd1'),
(4, 2, 'Marco Alejandro', 'Hernández Castellanos', 'MAHernandezC@upred.com', 'DMarco', 'd2'),
(9, 5, 'José Carlos', 'Mar Rangel', 'JCMarR@upred.com', 'CJose', 'c1'),
(10, 5, 'Cristal Elizabeth', 'Toscano Hernández', 'CEToscanoH@upred.com', 'CCristal', 'c2');

/*Password = Iniciales del departanento ejemplo direccion general=DG, numero consecutivo 
nota= si el departamento solo tiene una palabra es la inicial y un numero consecutivo ejemplo = Comercio = c1*/
