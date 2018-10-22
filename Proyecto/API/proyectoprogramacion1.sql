/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.36-MariaDB : Database - proyectoprogramacion1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyectoprogramacion1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyectoprogramacion1`;

/*Table structure for table `chofer` */

DROP TABLE IF EXISTS `chofer`;

CREATE TABLE `chofer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `dni` varchar(200) DEFAULT NULL,
  `vehiculo` int(100) NOT NULL,
  `transporte` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transporte` (`transporte`),
  KEY `id` (`id`),
  KEY `vehiculo` (`vehiculo`),
  CONSTRAINT `chofer_ibfk_1` FOREIGN KEY (`transporte`) REFERENCES `transporte` (`id`),
  CONSTRAINT `chofer_ibfk_2` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `chofer` */

insert  into `chofer`(`id`,`nombre`,`apellido`,`email`,`dni`,`vehiculo`,`transporte`) values (5,'Luis','Gonzalez','luigonzarat@gmail.com','38476664',1,1);

/*Table structure for table `transporte` */

DROP TABLE IF EXISTS `transporte`;

CREATE TABLE `transporte` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `transporte` */

insert  into `transporte`(`id`,`nombre`,`pais`) values (1,'Cabify','España'),(2,'Remis','Argentina'),(3,'Taxi','Argentina'),(4,'Uber','Estados Unidos');

/*Table structure for table `vehiculo` */

DROP TABLE IF EXISTS `vehiculo`;

CREATE TABLE `vehiculo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `marca` varchar(200) DEFAULT NULL,
  `modelo` varchar(200) DEFAULT NULL,
  `año` int(10) DEFAULT NULL,
  `patente` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo` */

insert  into `vehiculo`(`id`,`marca`,`modelo`,`año`,`patente`) values (1,'Ford','Fiesta',1998,'CLX-237'),(2,'Chevrolet','Prisma',2015,'NBU-476');

/*Table structure for table `vehiculo_transporte` */

DROP TABLE IF EXISTS `vehiculo_transporte`;

CREATE TABLE `vehiculo_transporte` (
  `vehiculo_id` int(10) NOT NULL,
  `transporte_id` int(10) NOT NULL,
  KEY `vehiculo_id` (`vehiculo_id`),
  KEY `transporte_id` (`transporte_id`),
  CONSTRAINT `vehiculo_transporte_ibfk_1` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo` (`id`),
  CONSTRAINT `vehiculo_transporte_ibfk_2` FOREIGN KEY (`transporte_id`) REFERENCES `transporte` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo_transporte` */

insert  into `vehiculo_transporte`(`vehiculo_id`,`transporte_id`) values (1,4),(1,3),(2,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
