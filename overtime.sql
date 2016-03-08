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
-- Table structure for table `overtime_application_header`
--

DROP TABLE IF EXISTS `overtime_application_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `overtime_application_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `employee_no` varchar(300) DEFAULT NULL,
  `department` varchar(1000) DEFAULT NULL,
  `submitted_by_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overtime_application_header`
--

LOCK TABLES `overtime_application_header` WRITE;
/*!40000 ALTER TABLE `overtime_application_header` DISABLE KEYS */;
INSERT INTO `overtime_application_header` VALUES (1,'Joene floresa','1956','Finance',2,0,'2016-03-08 08:30:20','2016-03-08 08:30:20'),(2,'Ferdinand Estoque','1896','Operations',2,0,'2016-03-08 09:03:56','2016-03-08 09:03:56');
/*!40000 ALTER TABLE `overtime_application_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `overtime_application_items`
--

DROP TABLE IF EXISTS `overtime_application_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `overtime_application_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `overtime_application_header_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `no_of_hours` float DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overtime_application_items`
--

LOCK TABLES `overtime_application_items` WRITE;
/*!40000 ALTER TABLE `overtime_application_items` DISABLE KEYS */;
INSERT INTO `overtime_application_items` VALUES (1,1,'2006-05-23','2006-05-23','2006-05-23',10,'sick','2016-03-08 08:30:20','2016-03-08 08:30:20'),(2,1,'2006-05-23','2006-05-23','2006-05-23',52,'sick','2016-03-08 08:30:20','2016-03-08 08:30:20'),(3,1,'2006-05-23','2006-05-23','2006-05-23',41,'sick','2016-03-08 08:30:20','2016-03-08 08:30:20'),(4,1,'2006-05-23','2006-05-23','2006-05-23',52,'sick','2016-03-08 08:30:20','2016-03-08 08:30:20'),(5,1,'2006-05-23','2006-05-23','2006-05-23',2,'sick','2016-03-08 08:30:20','2016-03-08 08:30:20'),(6,2,'2006-05-23','2006-05-23','2006-05-23',20,'nothing','2016-03-08 09:03:56','2016-03-08 09:03:56');
/*!40000 ALTER TABLE `overtime_application_items` ENABLE KEYS */;
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

-- Dump completed on 2016-03-08  4:17:26
