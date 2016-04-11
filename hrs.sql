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
  `status` int(11) DEFAULT '0',
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
INSERT INTO `cashadvances` VALUES (1,'Joene Floresca','4376 Montojo St. Brgy. Tejeros','joenefloresca@gmail.com','9277878032','100','TEST','Monthly','1299','2016-04-23',1,1,'2016-04-07 19:28:01','2016-04-07 19:30:55');
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
INSERT INTO `changeschedules_header` VALUES (1,'Joene Floresca','IT','Change in work schedule',1,0,'2016-03-22 23:28:31','2016-03-22 23:28:31');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `changeschedules_items`
--

LOCK TABLES `changeschedules_items` WRITE;
/*!40000 ALTER TABLE `changeschedules_items` DISABLE KEYS */;
INSERT INTO `changeschedules_items` VALUES (1,1,'2016-03-22','MWF','TTH','TEST','2016-03-22 23:28:32','2016-03-22 23:28:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaverequests`
--

LOCK TABLES `leaverequests` WRITE;
/*!40000 ALTER TABLE `leaverequests` DISABLE KEYS */;
INSERT INTO `leaverequests` VALUES (1,'Joene Floresca','1775','2016-03-01','2016-03-25','Vacation','IT','TEST',1,0,'2016-03-22 18:49:43','2016-03-22 18:50:51');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'Joene Floresca Submitted Leave Request','2016-03-22 18:49:43','2016-03-22 18:49:43'),(2,'Joene Floresca Updated Leave Request ID 1','2016-03-22 18:50:51','2016-03-22 18:50:51'),(3,'Joene Floresca Submitted Change Schedule Request','2016-03-22 23:28:32','2016-03-22 23:28:32'),(4,'Joene Floresca Submitted Payroll Query','2016-04-07 18:41:44','2016-04-07 18:41:44'),(5,'Joene Floresca Submitted Cash Advance Request','2016-04-07 19:28:01','2016-04-07 19:28:01'),(6,'Joene Floresca Updated Cash Advance Request ID 1','2016-04-07 19:30:55','2016-04-07 19:30:55'),(7,'Joene Floresca Submitted Overtime Request','2016-04-07 19:37:01','2016-04-07 19:37:01');
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
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_11_072929_create-social-logins',2),('2016_03_18_153353_create_cashadvances_table',0),('2016_03_18_153353_create_changeschedules_header_table',0),('2016_03_18_153353_create_changeschedules_items_table',0),('2016_03_18_153353_create_leaverequests_table',0),('2016_03_18_153353_create_logs_table',0),('2016_03_18_153353_create_overtime_application_header_table',0),('2016_03_18_153353_create_overtime_application_items_table',0),('2016_03_18_153353_create_password_resets_table',0),('2016_03_18_153353_create_payrollqueries_table',0),('2016_03_18_153353_create_social_logins_table',0),('2016_03_18_153353_create_timechanges_table',0),('2016_03_18_153353_create_users_table',0),('2016_03_18_153356_add_foreign_keys_to_social_logins_table',0),('2016_03_23_153639_create_sessions_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overtime_application_header`
--

LOCK TABLES `overtime_application_header` WRITE;
/*!40000 ALTER TABLE `overtime_application_header` DISABLE KEYS */;
INSERT INTO `overtime_application_header` VALUES (1,'Joene Floresca','1775','MIS',1,0,'2016-04-07 19:37:01','2016-04-07 19:37:01');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overtime_application_items`
--

LOCK TABLES `overtime_application_items` WRITE;
/*!40000 ALTER TABLE `overtime_application_items` DISABLE KEYS */;
INSERT INTO `overtime_application_items` VALUES (1,1,'2016-01-01','2016-01-01','2016-01-01',1,'TEST','2016-04-07 19:37:01','2016-04-07 19:37:01'),(2,1,'2016-01-01','2016-01-01','2016-01-01',2,'TEST','2016-04-07 19:37:01','2016-04-07 19:37:01');
/*!40000 ALTER TABLE `overtime_application_items` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payrollqueries`
--

LOCK TABLES `payrollqueries` WRITE;
/*!40000 ALTER TABLE `payrollqueries` DISABLE KEYS */;
INSERT INTO `payrollqueries` VALUES (1,'Joene Floresca','2016-04-14','IT','TEST','TEST','TEST','0000-00-00','TEST','TEST','2016-04-27','TEST','2016-04-27',1,NULL,'2016-04-07 18:41:44','2016-04-07 18:41:44');
/*!40000 ALTER TABLE `payrollqueries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','Full access to create, edit, and update.',NULL,NULL),(2,'Manager','Ability to create new requests and approve requests.',NULL,NULL),(3,'User','A standard user.',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('1c0d82c80436a55c82b7da73dea64b11c83a3edd','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiczV2SFlQZ1E0cE1SQ0JiMXVFMk9DOXBYQWdPbU5KbzNXYUh6TU91WCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2xvY2FsaG9zdC9ocnMvcHVibGljL2hvbWUiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozODoiaHR0cDovL2xvY2FsaG9zdC9ocnMvcHVibGljL2F1dGgvbG9naW4iO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDYwMTIyOTIyO3M6MToiYyI7aToxNDYwMTIyOTE3O3M6MToibCI7czoxOiIwIjt9fQ==',1460122922),('30fcf45a89d25f1abf35192c52acec41fc0a7f39','YTozOntzOjY6Il90b2tlbiI7czo0MDoicjhsdGVBaTVsRWhHc21keUpNTEk5cUhGaDRNVUVNUkplZkluNHg0TSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NTk5NTQ3MTk7czoxOiJjIjtpOjE0NTk5NTQ3MTk7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1459954719),('441338da61b82d4ed27224df603532c21713ee1b','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT3A3bmJNb1E2UkRTUHk2OUNFVVhRS0tIbVF6a0hUSjdOSmVRYVRaQiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbG9jYWxob3N0L2hycy9wdWJsaWMvaG9tZSI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozODoibG9naW5fODJlNWQyYzU2YmRkMDgxMTMxOGYwY2YwNzhiNzhiZmMiO2k6MTtzOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ2MDA5OTcxODtzOjE6ImMiO2k6MTQ2MDAyNTI5MDtzOjE6ImwiO3M6MToiMCI7fX0=',1460099718),('5b52c2490e458a74298619cb5bb43fa715411bc0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaWI4NEt5Y01GYVltajJUZFhmSUp4SkxNb1l2QkVDRG5jcktGQmdvRSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0L2hycy9wdWJsaWMiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6Mzg6ImxvZ2luXzgyZTVkMmM1NmJkZDA4MTEzMThmMGNmMDc4Yjc4YmZjIjtpOjE7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NTk5NTQyOTY7czoxOiJjIjtpOjE0NTk5NTQyODQ7czoxOiJsIjtzOjE6IjAiO319',1459954296),('620bb1b890b99437807173209d98af72f5d93eae','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVzlYTzU5TnpGZGd4OHRwdlJtM1JucVhQMUVJUGVHN2VwOXZ5cnZsMCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNDoiaHR0cDovL2xvY2FsaG9zdC9ocnMvcHVibGljL3VzZXIvMSI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvaHJzL3B1YmxpYy9hdXRoL2xvZ2luIjt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NjAwMzY1MTM7czoxOiJjIjtpOjE0NjAwMzY0Njc7czoxOiJsIjtzOjE6IjAiO319',1460036513),('7debc61386ae806a35c481d5d28840447bd74e84','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWm9LUUdVbUNIdFlrelBjZUdQNGlYM1FuY3czU3hDbml1bmI4RDJWNyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbG9jYWxob3N0L2hycy9wdWJsaWMvaG9tZSI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozODoibG9naW5fODJlNWQyYzU2YmRkMDgxMTMxOGYwY2YwNzhiNzhiZmMiO2k6MTtzOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ1OTk1NDcxOTtzOjE6ImMiO2k6MTQ1OTk1NDUyNDtzOjE6ImwiO3M6MToiMCI7fX0=',1459954719),('8fb2cb624ab03c1e7ace7e53038db3146cc9ca81','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMFZxVUx1MmVod3hLbUxRWWhieGFWTHBOY2c3c0V0bEhOSE9xWUp1MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvaHJzL3B1YmxpYy90aW1lY2hhbmdlIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM4OiJsb2dpbl84MmU1ZDJjNTZiZGQwODExMzE4ZjBjZjA3OGI3OGJmYyI7aToxO3M6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDYwMDIyMzI3O3M6MToiYyI7aToxNDYwMDE4MDMwO3M6MToibCI7czoxOiIwIjt9fQ==',1460022327),('93ef6002417746ae8419ff0299647787c6448e13','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNmRrYmMxUjQxeUpJeGMwVm5oSTRmMjJ1UjdCVEhZYW5MRHJLUFNRYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvaHJzL3B1YmxpYy9hdXRoL2xvZ2luIjt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NjAzNjA3MDQ7czoxOiJjIjtpOjE0NjAzNjA3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1460360707),('c6558c34527481e532502ae1ee143ea8b73f105c','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRjRwUE14OFZBQzZGcGtkODBCd25IelFSZVJVbG1UUlRkVW9wQjgzZyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwOi8vbG9jYWxob3N0L2hycy9wdWJsaWMvdXNlci8xL2VkaXQiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6Mzg6ImxvZ2luXzgyZTVkMmM1NmJkZDA4MTEzMThmMGNmMDc4Yjc4YmZjIjtpOjE7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NTk5NTYwOTQ7czoxOiJjIjtpOjE0NTk5NTQ3ODI7czoxOiJsIjtzOjE6IjAiO319',1459956095),('cb447f84553f28094ebbb763a572325d02d09970','YTozOntzOjY6Il90b2tlbiI7czo0MDoidDV4STk0SURyU1RzSXV0UUZieHphZTNnSVZlbkd0d1p5YVZTUjNVbSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NTk5NTQyOTY7czoxOiJjIjtpOjE0NTk5NTQyOTY7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1459954297),('dde3cc3617576bbadccd7f7dc830957d8c478e07','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3hZdEhVTEc2eWZVa3JYaUxXWTluS0dzUDlXMDNuTHBtN2hQcG1HRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvaHJzL3B1YmxpYy91c2VyLzEvZWRpdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NjAwMTU1MjI7czoxOiJjIjtpOjE0NjAwMTU1MTE7czoxOiJsIjtzOjE6IjAiO319',1460015522),('ecc8d90a01f2628a0eef6d5b930bc7a4f96879d1','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTHZublo5cWpFYWlzSmF5U2IxVG1zWlRaWGZSaFVsVnhzd2FQU2tzRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvaHJzL3B1YmxpYy9hdXRoL2xvZ2luIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ2MDM2NDU4MTtzOjE6ImMiO2k6MTQ2MDM2NDU4MDtzOjE6ImwiO3M6MToiMCI7fX0=',1460364581);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_logins`
--

DROP TABLE IF EXISTS `social_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `social_logins_user_id_index` (`user_id`),
  CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_logins`
--

LOCK TABLES `social_logins` WRITE;
/*!40000 ALTER TABLE `social_logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timechanges`
--

DROP TABLE IF EXISTS `timechanges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timechanges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(300) DEFAULT NULL,
  `dateto_change` date DEFAULT NULL,
  `work_schedule` varchar(300) DEFAULT NULL,
  `clock_in` varchar(300) DEFAULT NULL,
  `clock_out` varchar(300) DEFAULT NULL,
  `change_reason` varchar(300) DEFAULT NULL,
  `no_inout_reason` varchar(300) DEFAULT NULL,
  `form_required` varchar(300) DEFAULT NULL,
  `submitted_by_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timechanges`
--

LOCK TABLES `timechanges` WRITE;
/*!40000 ALTER TABLE `timechanges` DISABLE KEYS */;
/*!40000 ALTER TABLE `timechanges` ENABLE KEYS */;
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
  `role_id` int(11) NOT NULL DEFAULT '3',
  `id_number` int(11) NOT NULL,
  `ameyo_login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic_path` text COLLATE utf8_unicode_ci,
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
INSERT INTO `users` VALUES (1,'Joene Floresca','$2y$10$5vuLHHvekpZ2/VxrDIZCmem557S9yhzPW.F77ZYcOe1aJVFuEXm.e',1,1775,'1775','Operations Department','1460041536.jpg','v8Rzmnxkjy6FgtEC8RYpGX8tWtRXdGJB8z4cYl8ZBeE1Tg72BOzbpzvmaWV6','2016-02-29 01:03:22','2016-04-08 07:15:14');
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

-- Dump completed on 2016-04-11 16:50:22
