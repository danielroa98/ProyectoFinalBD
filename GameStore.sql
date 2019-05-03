-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: gamestore
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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cart` (
  `USERS_Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `GAMES_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`USERS_Username`,`GAMES_id`),
  KEY `fk_USERS_has_GAMES_GAMES1_idx` (`GAMES_id`),
  KEY `fk_USERS_has_GAMES_USERS_idx` (`USERS_Username`),
  CONSTRAINT `fk_USERS_has_GAMES_GAMES1` FOREIGN KEY (`GAMES_id`) REFERENCES `games` (`id`),
  CONSTRAINT `fk_USERS_has_GAMES_USERS` FOREIGN KEY (`USERS_Username`) REFERENCES `users` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creditcard`
--

DROP TABLE IF EXISTS `creditcard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `creditcard` (
  `Number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `SecurityCode` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `ExpirationDate` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USERS_Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Number`),
  KEY `fk_CREDITCARD_USERS1_idx` (`USERS_Username`),
  CONSTRAINT `fk_CREDITCARD_USERS1` FOREIGN KEY (`USERS_Username`) REFERENCES `users` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcard`
--

LOCK TABLES `creditcard` WRITE;
/*!40000 ALTER TABLE `creditcard` DISABLE KEYS */;
INSERT INTO `creditcard` VALUES ('1234123412341234','1234','05/20','DrGoku151'),('2345234523452345','2345','07/20','Tlacuachi'),('3456345634563456','3456','08/20','DonYepez'),('5678567856785678','5678','06/20','StarKiller9981');
/*!40000 ALTER TABLE `creditcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `games` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Name` mediumtext COLLATE utf8_unicode_ci,
  `Image` tinytext COLLATE utf8_unicode_ci,
  `Description` text COLLATE utf8_unicode_ci,
  `Price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES ('00000001','Moonlighter','Placeholder/moonlighter.jpg','Moonlighter is an Action RPG with rogue-lite elements that demonstrates two sides of the coin – revealing everyday routines of Will, an adventurous shopkeeper that secretly dreams of becoming a hero.',189.99),('00000002','Metro2033','Placeholder/metro2033.jpg','In 2013 the world was devastated by an apocalyptic event, annihilating almost all mankind and turning the Earth\'s surface into a poisonous wasteland. A handful of survivors took refuge in the depths of the Moscow underground, and human civilization entered a new Dark Age. The year is 2033.',179.99),('00000003','Atelier Sophie: The Alchemist of the Mysterious Book','Placeholder/atelier.jpg','17th in the Atelier series. The budding alchemist Sophie of Kirchen Bell meets the Mysterious Book, Plachta, and embarks on a wonderful adventure of fulfilling dreams.',269.99),('00000004','Doki Doki Literature Club!','Placeholder/doki.jpg','The Literature Club is full of cute girls! Will you write the way into their heart? This game is not suitable for children or those who are easily disturbed.',109.99);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Funds` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('DonYepez','yoSoyThanos','Luis Yépez','lyepez@tec.mx',4567.98),('DrGoku151','polloconmole2','Luis Armando Ortiz','luisrevilla20@gmail.com',9999.99),('StarKiller9981','Prueba_123','Luis Daniel Roa','daniel.roa98@gmail.com',873.42),('Tlacuachi','lolis4eva','Luis Sebastian Vives','sebas_vives@hotmail.com',539.64);
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

-- Dump completed on 2019-05-03 13:39:54
