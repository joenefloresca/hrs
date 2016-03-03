-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
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
  `repayment_date` date DEFAULT NULL,
  `submitted_by_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cashadvances`
--

LOCK TABLES `cashadvances` WRITE;
/*!40000 ALTER TABLE `cashadvances` DISABLE KEYS */;
/*!40000 ALTER TABLE `cashadvances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `changeschedules_header`
--

DROP TABLE IF EXISTS `changeschedules_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `changeschedules_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(300) DEFAULT NULL,
  `department` varchar(300) DEFAULT NULL,
  `change_type` varchar(300) DEFAULT NULL,
  `submitted_by_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `changeschedules_header`
--

LOCK TABLES `changeschedules_header` WRITE;
/*!40000 ALTER TABLE `changeschedules_header` DISABLE KEYS */;
INSERT INTO `changeschedules_header` VALUES (1,'Joene Floresca','IT','Change in work schedule',1,NULL,'2016-03-02 15:24:16','2016-03-02 15:24:16');
/*!40000 ALTER TABLE `changeschedules_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `changeschedules_items`
--

DROP TABLE IF EXISTS `changeschedules_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `changeschedules_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `changeschedules_header_id` int(11) DEFAULT NULL,
  `date_affected` date DEFAULT NULL,
  `current_schedule` varchar(300) DEFAULT NULL,
  `new_schedule` varchar(300) DEFAULT NULL,
  `reason` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `changeschedules_items`
--

LOCK TABLES `changeschedules_items` WRITE;
/*!40000 ALTER TABLE `changeschedules_items` DISABLE KEYS */;
INSERT INTO `changeschedules_items` VALUES (1,1,'2016-01-01','0000-00-00','0000-00-00','0000-00-00','2016-03-02 15:24:16','2016-03-02 15:24:16'),(2,1,'2016-01-02','0000-00-00','0000-00-00','0000-00-00','2016-03-02 15:24:16','2016-03-02 15:24:16'),(3,1,'2016-01-03','0000-00-00','0000-00-00','0000-00-00','2016-03-02 15:24:16','2016-03-02 15:24:16');
/*!40000 ALTER TABLE `changeschedules_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaverequests`
--

DROP TABLE IF EXISTS `leaverequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leaverequests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(300) DEFAULT NULL,
  `employee_id` varchar(300) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `leave_type` varchar(300) DEFAULT NULL,
  `department` varchar(300) DEFAULT NULL,
  `notes` longtext,
  `submitted_by_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaverequests`
--

LOCK TABLES `leaverequests` WRITE;
/*!40000 ALTER TABLE `leaverequests` DISABLE KEYS */;
INSERT INTO `leaverequests` VALUES (1,'Joene Floresca','1775','2016-03-01','2016-03-04','Vacation','Finance','Test request sample',1,1,'2016-02-25 10:36:17','2016-02-26 08:07:22'),(2,'Ferdinand Estoque','1111','2016-02-01','2016-02-11','Vacation','Finance','Test',1,0,'2016-02-25 11:03:18','2016-02-25 11:03:18'),(3,'Argel Piamonte','1340','2016-03-01','2016-03-25','Sick','IT','',1,1,'2016-02-25 11:15:32','2016-02-25 11:15:32');
/*!40000 ALTER TABLE `leaverequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'Joene Floresca submitted new Leave Request','2016-02-25 10:36:17','2016-02-25 10:36:17'),(2,'Joene Floresca submitted new Leave Request','2016-02-25 11:03:18','2016-02-25 11:03:18'),(3,'Joene Floresca submitted new Leave Request','2016-02-25 11:15:32','2016-02-25 11:15:32'),(4,'Joene Floresca submitted new Cash Advance','2016-02-29 09:37:50','2016-02-29 09:37:50'),(5,'Joene Floresca submitted new Cash Advance','2016-02-29 09:41:30','2016-02-29 09:41:30'),(6,'Joene Floresca submitted new Payroll Queries','2016-02-29 15:12:56','2016-02-29 15:12:56');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

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
  `feedback_given` varchar(300) DEFAULT NULL,
  `date_feedback_given` date DEFAULT NULL,
  `acknowledge` varchar(1000) DEFAULT NULL,
  `date_acknowledge` date DEFAULT NULL,
  `submitted_by_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payrollqueries`
--

LOCK TABLES `payrollqueries` WRITE;
/*!40000 ALTER TABLE `payrollqueries` DISABLE KEYS */;
INSERT INTO `payrollqueries` VALUES (5,'Joene Floresca','2016-02-16','MIS','Feb 15','aaaaaaaaaa','aaaaaaaaaa','0000-00-00','aaaaaaaaaa','aaaaaaaaaa','2016-02-18','aaaaaaaaaa','2016-02-17',1,NULL,'2016-02-29 15:12:56','2016-02-29 15:12:56');
/*!40000 ALTER TABLE `payrollqueries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `access_level` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `ameyo_login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id_number_unique` (`id_number`),
  UNIQUE KEY `users_ameyo_login_unique` (`ameyo_login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Joene Floresca','$2y$10$5vuLHHvekpZ2/VxrDIZCmem557S9yhzPW.F77ZYcOe1aJVFuEXm.e',0,1775,'1775','IT','v7etEL5WMmSf1F5rFzCDqL4f2rehHNFjAucAF9CUqM38XPikk2btqAb4RNCb','2016-02-29 01:03:22','2016-02-29 07:13:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-03 16:05:13
