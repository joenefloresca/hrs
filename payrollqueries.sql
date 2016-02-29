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
-- Table structure for table `payrollqueries`
--

DROP TABLE IF EXISTS `payrollqueries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payrollqueries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `payroll` varchar(45) DEFAULT NULL,
  `inquiry` varchar(3000) DEFAULT NULL,
  `recieved_by` varchar(45) DEFAULT NULL,
  `date_recieved_by` date DEFAULT NULL,
  `action_taken` varchar(300) DEFAULT NULL,
  `feedback_given` varchar(45) DEFAULT NULL,
  `date_feedback_given` date DEFAULT NULL,
  `acknowledge` varchar(1000) DEFAULT NULL,
  `date_acknowledge` date DEFAULT NULL,
  `submitted_by_id` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payrollqueries`
--

LOCK TABLES `payrollqueries` WRITE;
/*!40000 ALTER TABLE `payrollqueries` DISABLE KEYS */;
INSERT INTO `payrollqueries` VALUES (1,'sdsa','0000-00-00','MIS','sad','asd','asd','0000-00-00','asd','asd','0000-00-00','da','0000-00-00','2','2016-02-29 12:44:49','2016-02-29 12:44:49'),(2,'22222','0000-00-00','IT','55222','5555','66050550','0000-00-00','50045454','251465456','0000-00-00','55454','0000-00-00','2','2016-02-29 14:51:46','2016-02-29 14:51:46'),(3,'5555555555555555','0000-00-00','MIS','5222000000000000000000','5444541545','552255','0000-00-00','54564545','55555','4441-10-01','11110010','4440-11-00','2','2016-02-29 14:52:35','2016-02-29 14:52:35'),(4,'ferdinand','2016-02-05','MIS','sdf','sdf','sdf','0000-00-00','sdf','sdf','2016-02-05','sdf','2016-02-05','2','2016-02-29 15:27:56','2016-02-29 15:27:56');
/*!40000 ALTER TABLE `payrollqueries` ENABLE KEYS */;
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

-- Dump completed on 2016-02-29 10:56:11
