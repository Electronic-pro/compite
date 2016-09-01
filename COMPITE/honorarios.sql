-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-08-2016 a las 00:13:11
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `honorarios`
-- 

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
  `Ciudad_proyecto` varchar(45) default NULL,
  PRIMARY KEY  (`codigo_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `proyectos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `nombre_usuario` varchar(70) NOT NULL,
  `rut_usuario` varchar(45) default NULL,
  `correo_usuario` varchar(45) default NULL,
  `pw_usuario` varchar(11) default NULL,
  `rol_usuario` varchar(45) default NULL,
  `proyecto_usuario` varchar(45) default NULL,
  `telefono_usuario` varchar(45) default NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES (1, 'armando', '181818181818', 'armando@compite.cl', 'armando', 'Admin', '1', '1881818181');
