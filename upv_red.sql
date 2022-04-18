SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `citas` (
  `Id_cita` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `Telefono` bigint(30) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Fechas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `departamentos` (
  `ID_departamento` int(11) NOT NULL,
  `Nombre_departamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `documento` (
  `ID_documento` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Directorio` varchar(150) NOT NULL,
  `Fecha_de_subida` date NOT NULL,
  `ID_departamento` int(11) NOT NULL,
  `Estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `empleados` (
  `ID_empleado` int(11) NOT NULL,
  `ID_departamento` int(11) NOT NULL,
  `Nombre_empleado` varchar(30) NOT NULL,
  `Apellido_empleado` varchar(30) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `inventario` (
  `ID_inventario` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id_cita`);

ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`ID_departamento`);

ALTER TABLE `documento`
  ADD PRIMARY KEY (`ID_documento`),
  ADD KEY `ID_departamento` (`ID_departamento`);

ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `dept` (`ID_departamento`);

ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_inventario`);

ALTER TABLE `citas`
  MODIFY `Id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `departamentos`
  MODIFY `ID_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `documento`
  MODIFY `ID_documento` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `empleados`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `inventario`
  MODIFY `ID_inventario` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`ID_departamento`) REFERENCES `departamentos` (`ID_departamento`);

ALTER TABLE `empleados`
  ADD CONSTRAINT `dept` FOREIGN KEY (`ID_departamento`) REFERENCES `departamentos` (`ID_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

INSERT INTO `departamentos` (`ID_departamento`, `Nombre_departamento`) VALUES
(1, 'Direccion general'),
(2, 'Direccion'),
(3, 'Recursos Humanos'),
(4, 'Administracion'),
(5, 'Comercial'),
(6, 'Legal'),
(7, 'Produccion');

INSERT INTO `empleados` (`ID_empleado`, `ID_departamento`, `Nombre_empleado`, `Apellido_empleado`, `Correo`, `Usuario`, `pass`, `rol`) VALUES
(1, 1, 'Alfonso Aldahir ', 'Hernandez Rodriguez', 'AAHernandezR@upred.com', 'DGAlfonso', 'dg1', 0),
(2, 1, 'Adriana', 'Palmero Torres', 'APalemeroT@upred.com', 'DGPalemero', 'dg2', 0),
(3, 2, 'Gustavo Angel', 'Vargas Pesina', 'GAVargasP@upred.com', 'DGustavo', 'd1', 0),
(4, 2, 'Marco Alejandro', 'Hernández Castellanos', 'MAHernandezC@upred.com', 'DMarco', 'd2', 0),
(9, 5, 'José Carlos', 'Mar Rangel', 'JCMarR@upred.com', 'CJose', 'c1', 0),
(10, 5, 'Cristal Elizabeth', 'Toscano Hernández', 'CEToscanoH@upred.com', 'CCristal', 'c2', 0);

INSERT INTO `citas` (`Id_cita`, `title`, `Telefono`, `Description`, `Fechas`) VALUES
(1, 'carl', 8342666114, 'soy carlos', '2022-04-13');