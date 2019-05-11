-- MySQL dump 10.13  Distrib 8.0.15, for macos10.14 (x86_64)
--
-- Host: localhost    Database: GameStore
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CART`
--

DROP TABLE IF EXISTS `CART`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `CART` (
  `USERS_Username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GAMES_id` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`USERS_Username`,`GAMES_id`),
  KEY `fk_USERS_has_GAMES_GAMES1_idx` (`GAMES_id`),
  KEY `fk_USERS_has_GAMES_USERS_idx` (`USERS_Username`),
  CONSTRAINT `fk_USERS_has_GAMES_USERS` FOREIGN KEY (`USERS_Username`) REFERENCES `users` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CREDITCARD`
--

DROP TABLE IF EXISTS `CREDITCARD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `CREDITCARD` (
  `Number` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SecurityCode` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ExpirationDate` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `OwnerName` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Number`),
  KEY `fk_CREDITCARD_USERS1_idx` (`OwnerName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `GAMES`
--

DROP TABLE IF EXISTS `GAMES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `GAMES` (
  `id` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Image` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Genre` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `USERS`
--

DROP TABLE IF EXISTS `USERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `USERS` (
  `Username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'User',
  `Funds` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`Username`,`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-07 22:36:02
