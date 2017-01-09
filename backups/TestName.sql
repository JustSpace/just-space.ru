-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: litespace
-- ------------------------------------------------------
-- Server version	5.6.23

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
-- Current Database: `litespace`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `litespace` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `litespace`;

--
-- Table structure for table `ls_loc`
--

DROP TABLE IF EXISTS `ls_loc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_loc` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `localization` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_loc`
--

LOCK TABLES `ls_loc` WRITE;
/*!40000 ALTER TABLE `ls_loc` DISABLE KEYS */;
INSERT INTO `ls_loc` VALUES (1,'ru'),(2,'en');
/*!40000 ALTER TABLE `ls_loc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ls_users`
--

DROP TABLE IF EXISTS `ls_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_users` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `login` char(14) NOT NULL,
  `password` char(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rights` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_users`
--

LOCK TABLES `ls_users` WRITE;
/*!40000 ALTER TABLE `ls_users` DISABLE KEYS */;
INSERT INTO `ls_users` VALUES (12,'akpoflash1','$2y$10$o6pQRpH0nPeNTS0M74LSH.TzObJBLkLKZdB6rT0V.6UR9XlE/6Cie','Анисимов Кирилл Андреевич','',0),(13,'akpoflash','$2y$10$nbfYFdG6CrrYnIK4tZxKkO2tRHk.I85nszbz4hl9JVl.uTcf.fcne','Анисимов Кирилл Андреевич','infinit.tula@gmail.com',7),(14,'MegaRulez','$2y$10$lAuf7QYPkXYexvxVSHuI7uGHnvV20kwhMPsRb91jsftD1Jv4cjJkW','Аза Аза Аза','aka@aka.aka',0),(16,'imb95','$2y$10$Qgroi/h7TuwCKuggS1TPvOcHPu5iX.9w/yEX4CUeBSqjLZD0EELbO','Пуханов Антон Николаевич','imb95@mail.ru',1),(17,'Mon','$2y$10$iVFmJZnd15qsd8QA/RX.mOzuuCLnO6SoaXenrhSB0.bOyqA7Mlv5S','','',0),(18,'Кир','$2y$10$XhfGOTlJilIjW51OsJmxkOs8kKdYnB8RNxa/rhKHvSiPPckR1l2Ki','','',0);
/*!40000 ALTER TABLE `ls_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-28  1:24:42
