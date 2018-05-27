-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2018 a las 05:52:16
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comite_academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_de_acuerdo`
--

CREATE TABLE `acta_de_acuerdo` (
  `id_acta_de_acuerdo` bigint(20) NOT NULL,
  `id_reunion` bigint(20) NOT NULL,
  `id_lugar` bigint(20) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` bigint(20) NOT NULL,
  `nombre_carrera` varchar(30) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` bigint(20) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` bigint(20) NOT NULL,
  `nombre_departamento` varchar(30) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_acta`
--

CREATE TABLE `departamento_acta` (
  `id_departamento_acta` bigint(20) NOT NULL,
  `id_departamento` bigint(20) NOT NULL,
  `id_acta_de_acuerdo` bigint(20) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id_lugar` bigint(20) NOT NULL,
  `nombre_lugar` varchar(25) NOT NULL,
  `calle` varchar(20) DEFAULT NULL,
  `numero_exterior` varchar(7) DEFAULT NULL,
  `colonia` varchar(20) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `id_prioridad` int(11) NOT NULL,
  `prioridad` varchar(30) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE `reunion` (
  `id_reunion` bigint(20) NOT NULL,
  `numero_control` bigint(20) NOT NULL,
   `id_lugar` bigint(20) NOT NULL,
  `fecha_citada` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_finalizada` time NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` bigint(20) NOT NULL,
  `interesado` bigint(20) NOT NULL,
  `coordinador` bigint(20) NOT NULL,
  `solicitud` varchar(200) NOT NULL,
  `motivo_academico` varchar(400)  NULL,
  `motivo_personal` varchar(400)  NULL,
  `motivo_otro` varchar(400) NULL, 
   `id_estatus` bigint(20) not NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `ultima_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;







-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_detalle_comentario`
--

CREATE TABLE `solicitud_detalle_comentario` (
  `id_solicitud_detalle_comentario` bigint(20) NOT NULL,
  `id_solicitud` bigint(20) NOT NULL,
  `id_comentario` bigint(20) NOT NULL,
  `numero_control` bigint(20) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numero_control` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) DEFAULT NULL,
  `puesto` varchar(40) NOT NULL,
  `prioridad` int(11) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_carrera`
--

CREATE TABLE `usuario_carrera` (
  `id_usuario_carrera` bigint(20) NOT NULL,
  `numero_control` bigint(20) NOT NULL,
  `id_carrera` bigint(20) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_evidencia`
--

CREATE TABLE `usuario_evidencia` (
  `id_usuario_evidencia` bigint(20) NOT NULL,
  `numero_control` bigint(20) DEFAULT NULL,
  `id_solicitud` bigint(20) DEFAULT NULL,
  `evidencia` varchar(50) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `reunion_solicitud`
--

CREATE TABLE `reunion_solicitud` (
  `id_reunion_solicitud` int(11) NOT NULL,
  `id_reunion` bigint(20) NOT NULL,
  `id_solicitud` bigint(20) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--

CREATE TABLE `estatus` (
  `id_estatus` bigint(20) NOT NULL,
  `nombre_estatus` varchar(50) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta_de_acuerdo`
--
ALTER TABLE `acta_de_acuerdo`
  ADD PRIMARY KEY (`id_acta_de_acuerdo`),
  ADD KEY `FK_acta_de_acuerdo_reunion` (`id_reunion`),
  ADD KEY `FK_acta_de_acuerdo_lugar` (`id_lugar`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);
  
 
 
  
  ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `departamento_acta`
--
ALTER TABLE `departamento_acta`
  ADD PRIMARY KEY (`id_departamento_acta`),
  ADD KEY `FK_departamento_acta_departamento` (`id_departamento`),
  ADD KEY `FK_departamento_acta_acta` (`id_acta_de_acuerdo`);


--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`id_prioridad`);

--
-- Indices de la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`id_reunion`),
  ADD KEY `FK_reunion_usuario` (`numero_control`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `FK_solicitud_usuario_interesado` (`interesado`),
  ADD KEY `FK_solictud_usuario_coordinador` (`coordinador`);

--
-- Indices de la tabla `solicitud_detalle_comentario`
--
ALTER TABLE `solicitud_detalle_comentario`
  ADD PRIMARY KEY (`id_solicitud_detalle_comentario`),
  ADD KEY `FK_solicitud_detalle_comentario_usuario` (`numero_control`),
  ADD KEY `FK_solicitud_detalle_comentario_solicitud` (`id_solicitud`);
  
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numero_control`),
  ADD KEY `FK_usuario_prioridad` (`prioridad`),
  ADD KEY `FK_usuario_estatus` (`estatus`);

--
-- Indices de la tabla `usuario_carrera`
--
ALTER TABLE `usuario_carrera`
  ADD PRIMARY KEY (`id_usuario_carrera`),
  ADD KEY `FK_usuario_carrera_usuario` (`numero_control`),
  ADD KEY `FK_usuario_carrera_carrera` (`id_carrera`);

--
-- Indices de la tabla `usuario_evidencia`
--
ALTER TABLE `usuario_evidencia`
  ADD PRIMARY KEY (`id_usuario_evidencia`),
  ADD KEY `FK_usuario_evidencia_usuario` (`numero_control`),
  ADD KEY `FK_usuario_evidencia_solicitud` (`id_solicitud`);
  
--
-- Indices de la tabla `reunion_solicitud`
--
ALTER TABLE `reunion_solicitud`
  ADD PRIMARY KEY (`id_reunion_solicitud`),
  ADD KEY `FK_reunion_solicitud_reunion` (`id_reunion`),
  ADD KEY `FK_reunion_solicitud_solicitud` (`id_solicitud`);
  

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta_de_acuerdo`
--
ALTER TABLE `acta_de_acuerdo`
  MODIFY `id_acta_de_acuerdo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` bigint(20) NOT NULL AUTO_INCREMENT;

  
 
--
-- AUTO_INCREMENT de la tabla `departamento_acta`
--
ALTER TABLE `departamento_acta`
  MODIFY `id_departamento_acta` bigint(20) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_lugar` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  MODIFY `id_prioridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reunion`
--
ALTER TABLE `reunion`
  MODIFY `id_reunion` bigint(20) NOT NULL AUTO_INCREMENT;



--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud_detalle_comentario`
--
ALTER TABLE `solicitud_detalle_comentario`
  MODIFY `id_solicitud_detalle_comentario` bigint(20) NOT NULL AUTO_INCREMENT;

--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `numero_control` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_carrera`
--
ALTER TABLE `usuario_carrera`
  MODIFY `id_usuario_carrera` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_evidencia`
--
ALTER TABLE `usuario_evidencia`
  MODIFY `id_usuario_evidencia` bigint(20) NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT de la tabla `reunion_solicitud`
--
ALTER TABLE `reunion_solicitud`
  MODIFY `id_reunion_solicitud` bigint(20) NOT NULL AUTO_INCREMENT;
  
--


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta_de_acuerdo`
--
ALTER TABLE `acta_de_acuerdo`
  ADD CONSTRAINT `FK_acta_de_acuerdo_lugar` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id_lugar`),
  ADD CONSTRAINT `FK_acta_de_acuerdo_reunion` FOREIGN KEY (`id_reunion`) REFERENCES `reunion` (`id_reunion`);

--
-- Filtros para la tabla `departamento_acta`
--
ALTER TABLE `departamento_acta`
  ADD CONSTRAINT `FK_departamento_acta_acta` FOREIGN KEY (`id_acta_de_acuerdo`) REFERENCES `acta_de_acuerdo` (`id_acta_de_acuerdo`),
  ADD CONSTRAINT `FK_departamento_acta_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `FK_reunion_lugar` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id_lugar`),
  ADD CONSTRAINT `FK_reunion_usuario` FOREIGN KEY (`numero_control`) REFERENCES `usuario` (`numero_control`);


--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `FK_solicitud_usuario_interesado` FOREIGN KEY (`interesado`) REFERENCES `usuario` (`numero_control`),
  ADD CONSTRAINT `FK_solictud_usuario_coordinador` FOREIGN KEY (`coordinador`) REFERENCES `usuario` (`numero_control`),
  ADD CONSTRAINT `FK_solictud_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`);

--
-- Filtros para la tabla `solicitud_detalle_comentario`
--
ALTER TABLE `solicitud_detalle_comentario`
  ADD CONSTRAINT `FK_solicitud_detalle_comentario_comentario` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`),
  ADD CONSTRAINT `FK_solicitud_detalle_comentario_solicitud` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`),
  ADD CONSTRAINT `FK_solicitud_detalle_comentario_usuario` FOREIGN KEY (`numero_control`) REFERENCES `usuario` (`numero_control`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_prioridad` FOREIGN KEY (`prioridad`) REFERENCES `prioridad` (`id_prioridad`);

--
-- Filtros para la tabla `usuario_carrera`
--
ALTER TABLE `usuario_carrera`
  ADD CONSTRAINT `FK_usuario_carrera_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `FK_usuario_carrera_usuario` FOREIGN KEY (`numero_control`) REFERENCES `usuario` (`numero_control`);

--
-- Filtros para la tabla `usuario_evidencia`
--
ALTER TABLE `usuario_evidencia`
  ADD CONSTRAINT `FK_usuario_evidencia_solicitud` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`),
  ADD CONSTRAINT `FK_usuario_evidencia_usuario` FOREIGN KEY (`numero_control`) REFERENCES `usuario` (`numero_control`);
  
--
-- Filtros para la tabla `reunion_solicitud`
--
ALTER TABLE `reunion_solicitud`
  ADD CONSTRAINT `FK_reunion_solicitud_solicitud` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`),
  ADD CONSTRAINT `FK_reunion_solicitud_reunion` FOREIGN KEY (`id_reunion`) REFERENCES `reunion` (`id_reunion`);
COMMIT;

--

 
  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
