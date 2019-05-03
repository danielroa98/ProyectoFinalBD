-- MySQL dump 10.13  Distrib 8.0.15, for macos10.14 (x86_64)
--
-- Host: localhost    Database: TiendaVirtual
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
-- Table structure for table `ACCOUNT`
--

DROP TABLE IF EXISTS `ACCOUNT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ACCOUNT` (
  `Username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountType` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Funds` decimal(6,2) DEFAULT NULL,
  `Salary` decimal(8,2) DEFAULT NULL,
  `WorkHoursEntry` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WorkHoursExit` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ACCOUNT`
--

LOCK TABLES `ACCOUNT` WRITE;
/*!40000 ALTER TABLE `ACCOUNT` DISABLE KEYS */;
INSERT INTO `ACCOUNT` VALUES ('DrGoku151','Luis Revilla','polloconmole2','luisrevilla20@gmail.com','User',NULL,NULL,NULL,NULL),('StarKiller9981','Daniel Roa','Barry.2016','daniel.roa98@gmail.com','Admin',NULL,3750.00,'8:30','20:30'),('Tlacuachi','Sebastian Vives','loliscumdumpster69\n','sebas_vives@hotmail.com\n','Admin',NULL,1500.35,'7:45','20:45');
/*!40000 ALTER TABLE `ACCOUNT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CREDITCARD`
--

DROP TABLE IF EXISTS `CREDITCARD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `CREDITCARD` (
  `Number` int(11) NOT NULL,
  `Expiration` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SecurityCode` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACCOUNT_Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Number`),
  KEY `fk_CREDITCARD_ACCOUNT1_idx` (`ACCOUNT_Username`),
  CONSTRAINT `fk_CREDITCARD_ACCOUNT1` FOREIGN KEY (`ACCOUNT_Username`) REFERENCES `account` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CREDITCARD`
--

LOCK TABLES `CREDITCARD` WRITE;
/*!40000 ALTER TABLE `CREDITCARD` DISABLE KEYS */;
/*!40000 ALTER TABLE `CREDITCARD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GAMES`
--

DROP TABLE IF EXISTS `GAMES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `GAMES` (
  `Id.` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Image` longtext COLLATE utf8_unicode_ci,
  `Name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Genre` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` decimal(6,2) DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Developer` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id.`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GAMES`
--

LOCK TABLES `GAMES` WRITE;
/*!40000 ALTER TABLE `GAMES` DISABLE KEYS */;
INSERT INTO `GAMES` VALUES ('01234567',NULL,'Stardew Valley','RPG',150.00,'You\'ve inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home?','ConcernedApe'),('01234568',NULL,'Atelier Sophie: The Alchemist of the Mysterious Book','Cute',269.99,'17th in the Atelier series. The budding alchemist Sophie of Kirchen Bell meets the Mysterious Book, Plachta, and embarks on a wonderful adventure of fulfilling dreams.','KOEI TECMO GAMES CO., LTD'),('01234569',NULL,'Final Fantasy XV','JRPG',1500.00,'Take the journey, now in ultimate quality. Boasting a wealth of bonus content and supporting ultra high-resolution graphical options and HDR 10, you can now enjoy the beautiful and carefully-crafted experience of FINAL FANTASY XV like never before.','Square Enix');
/*!40000 ALTER TABLE `GAMES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SHOPPINGLIST`
--

DROP TABLE IF EXISTS `SHOPPINGLIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `SHOPPINGLIST` (
  `Id` int(11) NOT NULL,
  `DATE` datetime DEFAULT NULL,
  `ACCOUNT_Username1` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GAMES_Id.` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_SHOPPINGLIST_ACCOUNT2_idx` (`ACCOUNT_Username1`),
  KEY `fk_SHOPPINGLIST_GAMES2_idx` (`GAMES_Id.`),
  CONSTRAINT `fk_SHOPPINGLIST_ACCOUNT2` FOREIGN KEY (`ACCOUNT_Username1`) REFERENCES `account` (`Username`),
  CONSTRAINT `fk_SHOPPINGLIST_GAMES2` FOREIGN KEY (`GAMES_Id.`) REFERENCES `games` (`Id.`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SHOPPINGLIST`
--

LOCK TABLES `SHOPPINGLIST` WRITE;
/*!40000 ALTER TABLE `SHOPPINGLIST` DISABLE KEYS */;
/*!40000 ALTER TABLE `SHOPPINGLIST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `WISHLIST`
--

DROP TABLE IF EXISTS `WISHLIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `WISHLIST` (
  `ACCOUNT_Username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GAMES_Id.` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ACCOUNT_Username`,`GAMES_Id.`),
  KEY `fk_ACCOUNT_has_GAMES_GAMES1_idx` (`GAMES_Id.`),
  KEY `fk_ACCOUNT_has_GAMES_ACCOUNT1_idx` (`ACCOUNT_Username`),
  CONSTRAINT `fk_ACCOUNT_has_GAMES_ACCOUNT1` FOREIGN KEY (`ACCOUNT_Username`) REFERENCES `account` (`Username`),
  CONSTRAINT `fk_ACCOUNT_has_GAMES_GAMES1` FOREIGN KEY (`GAMES_Id.`) REFERENCES `games` (`Id.`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `WISHLIST`
--

LOCK TABLES `WISHLIST` WRITE;
/*!40000 ALTER TABLE `WISHLIST` DISABLE KEYS */;
/*!40000 ALTER TABLE `WISHLIST` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-02 19:45:40
