drop database if exists Muebleria;
create database Muebleria;
use muebleria; 

DROP TABLE IF EXISTS `tipo_articulo`;
CREATE TABLE `tipo_articulo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `tamano` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `articulo` varchar(45) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `FK_tipo` (`id_tipo`),
  CONSTRAINT `FK_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_articulo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE `muebleria`.`usuarios` (
  `usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `tipo_usuario` varchar(45) NOT NULL,
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC));
  
  INSERT INTO `muebleria`.`usuarios`
(`usuario`,
`contrasena`,
`tipo_usuario`)
VALUES
('admin',
'1234',
'administrador');