/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.36-MariaDB : Database - transporte
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`transporte` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `transporte`;

/*Table structure for table `auditoria` */

DROP TABLE IF EXISTS `auditoria`;

CREATE TABLE `auditoria` (
  `auditoria_id` int(4) NOT NULL AUTO_INCREMENT,
  `fecha_acceso` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL DEFAULT '',
  `response_time` float NOT NULL DEFAULT '0' COMMENT 'tiempo en milisegundos',
  `endpoint` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`auditoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `auditoria` */

insert  into `auditoria`(`auditoria_id`,`fecha_acceso`,`usuario`,`response_time`,`endpoint`) values (2,'2018-12-04 20:16:05','Luis',0.328064,'http://localhost/Proyecto/index.php/vehiculos'),(3,'2018-12-04 20:39:52','Luis',0.494003,'http://localhost/Proyecto/index.php/vehiculos/1'),(4,'2018-12-04 20:42:00','Luis',0.349998,'http://localhost/Proyecto/index.php/vehiculos/1'),(5,'2018-12-04 20:43:59','Luis',76.9782,'http://localhost/Proyecto/index.php/vehiculos/crear'),(6,'2018-12-04 20:49:30','Luis',219.81,'http://localhost/Proyecto/index.php/vehiculos/actualizar/5'),(7,'2018-12-04 20:51:01','Luis',270.743,'http://localhost/Proyecto/index.php/vehiculos/eliminar/5'),(8,'2018-12-05 14:47:30','Luis',0.454903,'http://localhost/Proyecto/index.php/transportes/'),(9,'2018-12-05 14:54:31','Pepe',0.26989,'http://localhost/Proyecto/index.php/transportes/'),(10,'2018-12-05 14:57:46','Pepe',0.382185,'http://localhost/Proyecto/index.php/transportes/4'),(11,'2018-12-05 15:00:22','Luis',74.297,'http://localhost/Proyecto/index.php/transportes/crear'),(12,'2018-12-05 15:04:03','Luis',269.031,'http://localhost/Proyecto/index.php/transportes/actualizar/6'),(13,'2018-12-05 15:19:13','Pepe',180.092,'http://localhost/Proyecto/index.php/transportes/eliminar/6'),(14,'2018-12-05 15:22:25','Pepe',0.241041,'http://localhost/Proyecto/index.php/transportes/'),(15,'2018-12-05 15:23:49','Pepe',0.31805,'http://localhost/Proyecto/index.php/transportes/2'),(16,'2018-12-05 15:24:09','Pepe',0.88501,'http://localhost/Proyecto/index.php/choferes/3'),(17,'2018-12-05 15:24:21','Pepe',0.309944,'http://localhost/Proyecto/index.php/choferes/'),(18,'2018-12-05 15:51:43','Pepe',0.375032,'http://localhost/Proyecto/index.php/choferes/3'),(19,'2018-12-05 15:52:58','Pepe',151.546,'http://localhost/Proyecto/index.php/choferes/crear'),(20,'2018-12-05 16:00:14','Pepe',307.076,'http://localhost/Proyecto/index.php/choferes/actualizar/4'),(21,'2018-12-05 16:03:19','Luis',222.899,'http://localhost/Proyecto/index.php/choferes/eliminar/4'),(22,'2018-12-05 16:07:33','Luis',0.323057,'http://localhost/Proyecto/index.php/sistemavehiculo/'),(23,'2018-12-05 16:10:29','Luis',0.350952,'http://localhost/Proyecto/index.php/sistemavehiculo/2'),(24,'2018-12-05 16:20:58','Luis',116.794,'http://localhost/Proyecto/index.php/sistemavehiculo/crear'),(25,'2018-12-05 16:28:17','Luis',132.301,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(26,'2018-12-05 16:28:47','Luis',109.646,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(27,'2018-12-05 16:29:00','Luis',0.201941,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(28,'2018-12-05 16:29:06','Luis',99.0381,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(29,'2018-12-05 16:30:26','Luis',120.627,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(30,'2018-12-05 16:31:06','Luis',132.771,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(31,'2018-12-05 16:34:45','Luis',0.429153,'http://localhost/Proyecto/index.php/vehiculos/'),(32,'2018-12-05 16:34:49','Luis',0.427008,'http://localhost/Proyecto/index.php/vehiculos/2'),(33,'2018-12-05 16:35:47','Luis',88.5849,'http://localhost/Proyecto/index.php/vehiculos/crear'),(34,'2018-12-05 16:36:36','Luis',156.762,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(35,'2018-12-05 16:37:05','Luis',177.447,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(36,'2018-12-05 16:37:21','Luis',55.937,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(37,'2018-12-05 16:37:55','Luis',163.216,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(38,'2018-12-05 16:38:50','Luis',409.954,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(39,'2018-12-05 16:39:12','Luis',196.257,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(40,'2018-12-05 16:39:25','Luis',99.416,'http://localhost/Proyecto/index.php/sistemavehiculo/actualizar/5'),(41,'2018-12-05 16:42:10','Luis',92.967,'http://localhost/Proyecto/index.php/sistemavehiculo/eliminar/5'),(42,'2018-12-05 16:42:59','Luis',0.233889,'http://localhost/Proyecto/index.php/transportes/'),(43,'2018-12-05 16:43:03','Luis',0.334024,'http://localhost/Proyecto/index.php/transportes/2');

/*Table structure for table `chofer` */

DROP TABLE IF EXISTS `chofer`;

CREATE TABLE `chofer` (
  `chofer_id` int(4) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(100) NOT NULL DEFAULT '',
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `documento` decimal(11,0) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '',
  `vehiculo_id` int(4) DEFAULT NULL,
  `sistema_id` int(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`chofer_id`),
  KEY `documento` (`documento`),
  KEY `vehiculo_id` (`vehiculo_id`),
  KEY `sistema_id` (`sistema_id`),
  CONSTRAINT `chofer_ibfk_1` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo` (`vehiculo_id`),
  CONSTRAINT `chofer_ibfk_2` FOREIGN KEY (`sistema_id`) REFERENCES `sistema_transporte` (`sistema_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `chofer` */

insert  into `chofer`(`chofer_id`,`apellido`,`nombre`,`documento`,`email`,`vehiculo_id`,`sistema_id`,`created`,`updated`) values (1,'Gonzalez','Luis',38476664,'luigonzarat@gmail.com',1,1,'2018-11-08 14:48:30','2018-11-08 14:51:58'),(2,'Zarate','Pablo',34221334,'Pablo@gmail.com',2,2,'2018-11-08 14:53:10','2018-11-08 14:53:13'),(3,'Tofilo','Juan',323232,'teo@gmail.com',3,3,'2018-12-03 19:23:35','2018-12-03 19:36:17');

/*Table structure for table `sistema_transporte` */

DROP TABLE IF EXISTS `sistema_transporte`;

CREATE TABLE `sistema_transporte` (
  `sistema_id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `pais_procedencia` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sistema_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sistema_transporte` */

insert  into `sistema_transporte`(`sistema_id`,`nombre`,`pais_procedencia`,`created`,`updated`) values (1,'Uber','Estados Unidos','2018-11-08 14:43:52','2018-11-08 14:43:55'),(2,'Cabify','España','2018-11-08 14:43:56','2018-11-08 14:43:58'),(3,'Taxi','Argentina','2018-11-01 14:43:58','2018-11-08 14:44:02'),(4,'Remis','Argentina','2018-11-08 14:53:43','2018-11-08 14:53:49'),(5,'AppViaje','Chile','2018-11-08 16:41:16','2018-11-08 16:41:16');

/*Table structure for table `sistema_vehiculo` */

DROP TABLE IF EXISTS `sistema_vehiculo`;

CREATE TABLE `sistema_vehiculo` (
  `sistemavehiculo_id` int(4) NOT NULL AUTO_INCREMENT,
  `vehiculo_id` int(4) DEFAULT NULL,
  `sistema_id` int(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sistemavehiculo_id`),
  UNIQUE KEY `vehiculo_id` (`vehiculo_id`,`sistema_id`),
  KEY `sistema_id` (`sistema_id`),
  CONSTRAINT `sistema_vehiculo_ibfk_1` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo` (`vehiculo_id`),
  CONSTRAINT `sistema_vehiculo_ibfk_2` FOREIGN KEY (`sistema_id`) REFERENCES `sistema_transporte` (`sistema_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `sistema_vehiculo` */

insert  into `sistema_vehiculo`(`sistemavehiculo_id`,`vehiculo_id`,`sistema_id`,`created`,`updated`) values (1,1,1,'2018-11-08 14:55:21','2018-11-08 14:55:23'),(2,2,2,'2018-11-08 14:55:31','2018-11-08 14:55:35'),(3,3,3,'2018-12-03 19:19:25','2018-12-03 19:19:32');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`user_id`,`usuario`,`clave`) values (26,'Luis','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),(27,'Pablo','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),(28,'Pepe','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

/*Table structure for table `vehiculo` */

DROP TABLE IF EXISTS `vehiculo`;

CREATE TABLE `vehiculo` (
  `vehiculo_id` int(4) NOT NULL AUTO_INCREMENT,
  `patente` varchar(10) NOT NULL DEFAULT '',
  `anho_patente` smallint(2) NOT NULL DEFAULT '0',
  `anho_fabricacion` smallint(2) NOT NULL DEFAULT '0',
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`vehiculo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo` */

insert  into `vehiculo`(`vehiculo_id`,`patente`,`anho_patente`,`anho_fabricacion`,`marca`,`modelo`,`created`,`updated`) values (1,'CLX-237',2010,2014,'Chevrolet','Prisma','2018-11-08 14:45:54','2018-11-08 16:11:35'),(2,'NBU-457',1999,1998,'Ford','Fiesta','2018-11-08 14:46:49','2018-11-08 14:46:54'),(3,'OPE-423',1980,1979,'Fiat','Uno','2018-11-08 14:47:22','2018-11-08 14:47:34'),(4,'YYY-777',2018,2018,'Lamborgini','Sevvenn','2018-11-08 16:06:51','2018-12-03 18:35:56'),(5,'TRU-563',2009,2008,'Ford','Fiesta','2018-12-05 16:35:47','2018-12-05 16:35:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
