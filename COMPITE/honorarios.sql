-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 22-09-2016 a las 20:37:53
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `honorarios`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `asignacion`
-- 

CREATE TABLE `asignacion` (
  `id` int(11) NOT NULL auto_increment,
  `nombre_usuario` varchar(70) NOT NULL,
  `rut_usuario` varchar(12) NOT NULL,
  `programa` varchar(70) NOT NULL,
  `proyecto` varchar(70) NOT NULL,
  `estado` varchar(70) NOT NULL default 'Desactivado',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Volcar la base de datos para la tabla `asignacion`
-- 

INSERT INTO `asignacion` VALUES (5, 'adrian', '17.631.242-4', 'EM-03', '', 'Desactivado');
INSERT INTO `asignacion` VALUES (6, 'bastian garcia aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '18.428.078-7', '', '', 'Desactivado');
INSERT INTO `asignacion` VALUES (7, 'juanito', '8.451.101-3', '', '', 'Desactivado');
INSERT INTO `asignacion` VALUES (8, 'docente', '16.269.355-7', '', '', 'Desactivado');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comprobante de pago`
-- 

CREATE TABLE `comprobante de pago` (
  `rut_documento` varchar(45) NOT NULL,
  `forma_de_pago_documento` varchar(45) default NULL,
  `empresa_documento` varchar(45) default NULL,
  `detalle_documento` varchar(45) default NULL,
  `numero_documento` varchar(45) NOT NULL default '',
  `fecha_documento` varchar(45) default NULL,
  `banco_documento` varchar(45) default NULL,
  `monto_documento` varchar(45) default NULL,
  PRIMARY KEY  (`numero_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `comprobante de pago`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ficha honorarios`
-- 

CREATE TABLE `ficha honorarios` (
  `nombre_ficha` varchar(70) NOT NULL,
  `rut_ficha` varchar(45) default NULL,
  `pasaporte_ficha` varchar(45) default NULL,
  `fecha_nacimiento_ficha` varchar(45) default NULL,
  `nacionalidad_ficha` varchar(45) default NULL,
  `pais_ficha` varchar(45) default NULL,
  `estado_ficha` varchar(45) default NULL,
  `profesion_ficha` varchar(45) default NULL,
  `correo_personal_ficha` varchar(45) default NULL,
  `correo_ficha` varchar(45) default NULL,
  `domicilio_ficha` varchar(45) default NULL,
  PRIMARY KEY  (`nombre_ficha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ficha honorarios`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proyectos`
-- 

CREATE TABLE `proyectos` (
  `codigo_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(45) default NULL,
  `inicio_proyecto` varchar(45) default NULL,
  `termino_proyecto` varchar(45) default NULL,
  `ciudad_proyecto` varchar(45) default NULL,
  PRIMARY KEY  (`codigo_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `proyectos`
-- 

INSERT INTO `proyectos` VALUES (123, 'Proyecto T', '2016-09-10', '2016-11-10', 'Osorno');
INSERT INTO `proyectos` VALUES (144, 'Proyecto z', '2016-09-08', '2016-11-09', 'Osorno');
INSERT INTO `proyectos` VALUES (444, 'Proyecto h', '2016-09-08', '2016-11-18', 'Osorno');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `nombre_usuario` varchar(50) NOT NULL,
  `rut_usuario` varchar(12) default NULL,
  `correo_usuario` varchar(45) default NULL,
  `pw_usuario` varchar(11) default NULL,
  `rol_usuario` varchar(45) default NULL,
  `proyecto` varchar(45) default NULL,
  `telefono_usuario` varchar(45) default NULL,
  `programa` varchar(30) default NULL,
  `estado` varchar(30) default 'Desactivado',
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES (1, 'armando', '10.666.664-2', 'armando@compite.cl', 'armando', 'Admin', '1', '9281237175', '', '');
INSERT INTO `usuario` VALUES (19, 'juan', '8.451.101-3', 'juan@compite.cl', 'juanito', 'Profesor', 'Proyecto z', '1231233', 'EM-01', 'Activado');
