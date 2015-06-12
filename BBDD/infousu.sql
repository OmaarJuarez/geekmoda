# Host: localhost  (Version: 5.6.12-log)
# Date: 2015-06-08 20:26:44
# Generator: MySQL-Front 5.3  (Build 4.214)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "descripcion"
#

DROP TABLE IF EXISTS `descripcion`;
CREATE TABLE `descripcion` (
  `id_descripcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL,
  `fecnac` date DEFAULT NULL,
  `linkfb` varchar(255) DEFAULT NULL,
  `linktw` varchar(255) DEFAULT NULL,
  `linkpt` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `fecreg` datetime DEFAULT NULL,
  PRIMARY KEY (`id_descripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "descripcion"
#


#
# Structure for table "prenda"
#

DROP TABLE IF EXISTS `prenda`;
CREATE TABLE `prenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `svg` text,
  `nombre` varchar(100) DEFAULT NULL,
  `reg_pedido` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "prenda"
#


#
# Structure for table "seguidores"
#

DROP TABLE IF EXISTS `seguidores`;
CREATE TABLE `seguidores` (
  `idseguidores` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) DEFAULT NULL,
  `idusuario2` int(11) DEFAULT NULL,
  PRIMARY KEY (`idseguidores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "seguidores"
#


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#

