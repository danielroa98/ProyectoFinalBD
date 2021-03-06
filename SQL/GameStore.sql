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
  `OwnerName` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Number`),
  KEY `fk_CREDITCARD_USERS1_idx` (`OwnerName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcard`
--

LOCK TABLES `creditcard` WRITE;
/*!40000 ALTER TABLE `creditcard` DISABLE KEYS */;
<<<<<<< HEAD:SQL/GameStore.sql
=======
INSERT INTO `creditcard` VALUES ('1234123412341234','1234','10/20','Luis Yepez'),('7890789078907890','7890','08/19','Rodrigo Roa');
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834:SQL/GameStore.sql
/*!40000 ALTER TABLE `creditcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `funds` (
  `CREDITCARD_Number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`CREDITCARD_Number`),
  CONSTRAINT `fk_FUNDS_CREDITCARD1` FOREIGN KEY (`CREDITCARD_Number`) REFERENCES `creditcard` (`Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funds`
--

LOCK TABLES `funds` WRITE;
/*!40000 ALTER TABLE `funds` DISABLE KEYS */;
<<<<<<< HEAD:SQL/GameStore.sql
=======
INSERT INTO `funds` VALUES ('1234123412341234',750.00);
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834:SQL/GameStore.sql
/*!40000 ALTER TABLE `funds` ENABLE KEYS */;
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
  `Genre` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
<<<<<<< HEAD:SQL/GameStore.sql
=======
INSERT INTO `games` VALUES ('00000001','Moonlighter','Placeholder/moonlighter.jpg','Moonlighter is an Action RPG with rogue-lite elements that demonstrates two sides of the coin – revealing everyday routines of Will, an adventurous shopkeeper that secretly dreams of becoming a hero.','RPG',189.99),('00000002','Metro2033','Placeholder/metro2033.jpg','In 2013 the world was devastated by an apocalyptic event, annihilating almost all mankind and turning the Earth\'s surface into a poisonous wasteland. A handful of survivors took refuge in the depths of the Moscow underground, and human civilization entered a new Dark Age. The year is 2033.','Action',179.99),('00000003','Atelier Sophie: The Alchemist of the Mysterious Book','Placeholder/atelierfiris.jpg','17th in the Atelier series. The budding alchemist Sophie of Kirchen Bell meets the Mysterious Book, Plachta, and embarks on a wonderful adventure of fulfilling dreams.','Weeb',269.99),('00000004','Doki Doki Literature Club!','Placeholder/dokidoki.jpg','The Literature Club is full of cute girls! Will you write the way into their heart? This game is not suitable for children or those who are easily disturbed.','Weeb',109.99),('00000006','The Last of Us','Placeholder/LoU.jpg','Abandoned cities reclaimed by nature. A population decimated by a modern plague. Survivors are killing each other for food, weapons whatever they can get their hands on. Joel, a brutal survivor, and Ellie, a brave young teenage girl who is wise beyond her years, must work together if they hope to survive their journey across the US. Download The Last of Us now!','Thriller',250.00);
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834:SQL/GameStore.sql
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
  `Password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'User',
  PRIMARY KEY (`Username`,`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
<<<<<<< HEAD:SQL/GameStore.sql
=======
INSERT INTO `users` VALUES ('boyermo','$2y$10$VdtKCVMU4TVbZOmqKIHB7OmQLrzgpJKBIdy.RN/eLM5u4JD1y7ZgC','Rodrigo Roa','boye.roa@gmail.com','User'),('demo','demo123','Este es un demo','demo@gmail.com','admin'),('demo2','$2y$10$CD/fgn286OtA4jHhSm/y5.0DenrCgLtb6Hcfx.IKX1TgYaBEvZqea','Este Demo','demo2@yahoo.com','User'),('demo3','$2y$10$0Hn6qVU5c6kj3/oAOq/srO16w8KVbYWyOVFAYwHquJsj63Qy672IC','demo3','demo3@yahoo.com','admin'),('demo4','$2y$10$ZqY5dpHxVuQdlrxLHCDGsehDIJoE6fGIv6v8d8UXOz9duclEuwrr6','demo4','demo4@itesm.mx','User'),('demo5','$2y$10$k9uALbu2ch3Ls38yP09UxuR1GPA1pVVy3t4zYoKkjteuyzczK3tLK','demo 5','demo@5.com','User'),('DonYepez','yoSoyThanos','Luis Yépez','lyepez@tec.mx','User'),('DrGoku151','polloconmole2','Luis Armando Ortiz','luisrevilla20@gmail.com','User'),('pruebaE','$2y$10$XGJI3pjTEJk49PMkGM0zAuFXoWU/FMW03mjGJhgcdi7Nv0bgWl.XO','prueba E','prueba@e.com','User'),('pruebaF','$2y$10$dKdLuWCgwYgw19TfWuSVGuTDZY.JGg5h6CQ1lpBb1YLWSlmjCGdIa','prueba F','prueba@f.com','User'),('StarKiller9981','Prueba_123','Luis Daniel Roa','daniel.roa98@gmail.com','User'),('Tlacuachi','lolis4eva','Luis Sebastian Vives','sebas_vives@hotmail.com','User'),('YepezFTW','$2y$10$i81joOXv7BKYYjxjcBmBveez9GFyAuMVb/K1LjFmI0OcpMMfpkf6S','Luis FTW','ftw@yepez.com','User');
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834:SQL/GameStore.sql
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

<<<<<<< HEAD:SQL/GameStore.sql
-- Dump completed on 2019-05-04 23:33:26
=======
-- Dump completed on 2019-05-04 22:57:37
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834:SQL/GameStore.sql
