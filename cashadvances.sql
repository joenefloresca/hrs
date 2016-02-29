CREATE DATABASE  IF NOT EXISTS `hrs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hrs`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: hrs
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cashadvances`
--

DROP TABLE IF EXISTS `cashadvances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cashadvances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employees_name` varchar(300) DEFAULT NULL,
  `home_address` varchar(1000) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact_details` varchar(1000) DEFAULT NULL,
  `requested_amount` varchar(45) DEFAULT NULL,
  `reason` varchar(3000) DEFAULT NULL,
  `terms` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `repayment_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cashadvances`
--

LOCK TABLES `cashadvances` WRITE;
/*!40000 ALTER TABLE `cashadvances` DISABLE KEYS */;
INSERT INTO `cashadvances` VALUES (1,'ferdinand','004 san antonio','test@qdf-phils.com','06465','74148','Pangit ako','Semi Monthly','51015165',NULL,'2016-02-29 10:20:38','2016-02-29 10:20:38');
/*!40000 ALTER TABLE `cashadvances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'hrs'
--

--
-- Dumping routines for database 'hrs'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-29  5:27:39
