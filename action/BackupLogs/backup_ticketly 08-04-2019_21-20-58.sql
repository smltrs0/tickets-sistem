SET FOREIGN_KEY_CHECKS = 0;
CREATE DATABASE IF NOT EXISTS `ticketly`;
USE `ticketly`;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `category` VALUES("2", "Electrodomestico"); 
INSERT INTO `category` VALUES("6", "Equipos Electromecánicos"); 
INSERT INTO `category` VALUES("7", "Equipos Electronicos"); 
INSERT INTO `category` VALUES("8", "tes"); 
INSERT INTO `category` VALUES("9", "tes"); 
INSERT INTO `category` VALUES("10", "tes"); 
INSERT INTO `category` VALUES("11", "tes"); 
INSERT INTO `category` VALUES("12", "tes"); 
INSERT INTO `category` VALUES("13", "tes"); 
INSERT INTO `category` VALUES("14", "tes"); 
INSERT INTO `category` VALUES("15", "tes"); 
INSERT INTO `category` VALUES("16", "tes"); 
INSERT INTO `category` VALUES("17", "tes"); 
INSERT INTO `category` VALUES("18", "tes"); 
INSERT INTO `category` VALUES("19", "tes"); 
INSERT INTO `category` VALUES("20", "tes"); 
INSERT INTO `category` VALUES("21", "tes"); 
INSERT INTO `category` VALUES("22", "tes"); 
INSERT INTO `category` VALUES("23", "tes"); 
INSERT INTO `category` VALUES("24", "tes"); 
INSERT INTO `category` VALUES("25", "tes"); 
INSERT INTO `category` VALUES("26", "tes"); 


DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `apellido` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cedula` varchar(30) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(30) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `clientes` VALUES("8", "nombre1", "apellido1", "cedula1", "telefono1", "direccion"); 
INSERT INTO `clientes` VALUES("9", "nombre2", "apellido2", "cedula2", "telefono2 ", "direccion 2"); 
INSERT INTO `clientes` VALUES("10", "Samuel", "Trias", "6846701", "0285-6590483", "asd"); 
INSERT INTO `clientes` VALUES("11", "alexander", "malpica", "su cedula", "telefono", "asd"); 
INSERT INTO `clientes` VALUES("12", "Edvelin ", "Mediina", "252222222", "00515520", "Malandra de poz"); 


DROP TABLE IF EXISTS `estadopiezas`;
CREATE TABLE `estadopiezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado_pieza` varchar(11) CHARACTER SET utf8 NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `estadopiezas` VALUES("1", "Agotado", "2019-03-04 00:00:00"); 
INSERT INTO `estadopiezas` VALUES("2", "Existente", "0000-00-00 00:00:00"); 


DROP TABLE IF EXISTS `kind`;
CREATE TABLE `kind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `kind` VALUES("1", "Revision"); 
INSERT INTO `kind` VALUES("2", "Mantenimiento"); 
INSERT INTO `kind` VALUES("3", "Reparacion"); 


DROP TABLE IF EXISTS `piezas`;
CREATE TABLE `piezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pieza` varchar(11) CHARACTER SET utf8 NOT NULL,
  `descripcion_pieza` text COLLATE utf8_spanish_ci NOT NULL,
  `precio_pieza` varchar(11) CHARACTER SET utf8 NOT NULL,
  `fecha` datetime NOT NULL,
  `id_estado` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `fecha_actualizado` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `piezas` VALUES("1", "primera pie", "", "12", "2019-04-05 00:00:00", "2", "1", "0000-00-00"); 
INSERT INTO `piezas` VALUES("2", "motor", "2 tiempos", "500", "2019-04-05 00:00:00", "0", "53", "0000-00-00"); 
INSERT INTO `piezas` VALUES("3", "condensador", "240 v 1100 mf", "110", "2019-04-05 00:00:00", "0", "12", "0000-00-00"); 
INSERT INTO `piezas` VALUES("14", "transistor", "12v", "15", "2019-04-05 00:00:00", "0", "5", "0000-00-00"); 
INSERT INTO `piezas` VALUES("17", "nombre test", "detalle", "2522", "0000-00-00 00:00:00", "0", "5", "0000-00-00"); 
INSERT INTO `piezas` VALUES("18", "test", "test", "123", "2019-04-06 03:48:47", "0", "23", "0000-00-00"); 


DROP TABLE IF EXISTS `priority`;
CREATE TABLE `priority` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `priority` VALUES("1", "Alta"); 
INSERT INTO `priority` VALUES("2", "Media"); 
INSERT INTO `priority` VALUES("3", "Baja"); 


DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `status` VALUES("1", "Pendiente"); 
INSERT INTO `status` VALUES("2", "En Revision"); 
INSERT INTO `status` VALUES("3", "Listo para Entregar"); 
INSERT INTO `status` VALUES("4", "Entregado"); 


DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `description` text CHARACTER SET latin1,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `kind_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `asigned_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority_id` int(11) NOT NULL DEFAULT '1',
  `status_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `priority_id` (`priority_id`),
  KEY `status_id` (`status_id`),
  KEY `user_id` (`user_id`),
  KEY `kind_id` (`kind_id`),
  KEY `category_id` (`category_id`),
  KEY `project_id` (`client_id`),
  CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`priority_id`) REFERENCES `priority` (`id`),
  CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`kind_id`) REFERENCES `kind` (`id`),
  CONSTRAINT `ticket_ibfk_5` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `ticket_ibfk_6` FOREIGN KEY (`client_id`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `ticket` VALUES("5", "condensador", "a<sd", "2019-03-12 01:53:29", "2019-03-10 11:13:55", "1", "1", "0", "8", "2", "1", "1"); 
INSERT INTO `ticket` VALUES("6", "teclado", "teclado mecanico", "2019-03-12 01:53:24", "2019-03-11 04:35:46", "1", "2", "0", "8", "7", "1", "1"); 
INSERT INTO `ticket` VALUES("7", "mouse", "tecla derecha dañada", "2019-04-07 13:43:51", "2019-03-11 05:05:48", "2", "2", "0", "10", "7", "1", "4"); 
INSERT INTO `ticket` VALUES("8", "laptop", "2 condensadores inflados", "2019-03-18 07:43:10", "2019-03-13 01:33:09", "3", "3", "0", "11", "7", "1", "3"); 
INSERT INTO `ticket` VALUES("9", "Genius", "Cable roto", "0000-00-00 00:00:00", "2019-04-05 22:03:59", "1", "1", "0", "12", "7", "3", "1"); 


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `profile_pic` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `kind` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `user` VALUES("1", "admin", "Admistrador", "smltrs0@gmail.com", "90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad", "descarga.jpg", "1", "1", "2017-07-15 12:05:45"); 
INSERT INTO `user` VALUES("2", "", "admin", "admin", "90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad", "descarga.jpg", "1", "1", "2019-03-04 01:26:33"); 
INSERT INTO `user` VALUES("3", "", "root", "root", "83353d597cbad458989f2b1a5c1fa1f9f665c858", "descarga.jpg", "1", "1", "2019-03-12 06:15:20"); 
SET FOREIGN_KEY_CHECKS = 1;