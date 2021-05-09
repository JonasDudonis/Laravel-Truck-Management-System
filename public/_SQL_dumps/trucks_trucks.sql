-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: trucks
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `trucks`
--

DROP TABLE IF EXISTS `trucks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trucks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint(20) unsigned NOT NULL,
  `year_of_manufacture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_s_name_and_surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_owners` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trucks`
--

LOCK TABLES `trucks` WRITE;
/*!40000 ALTER TABLE `trucks` DISABLE KEYS */;
INSERT INTO `trucks` VALUES (1,4,'1994','Elonas Muskas','416','puiki masina!','2021-05-08 19:06:09','2021-05-08 19:06:09'),(2,3,'1994','Janina Janinaityte','147','Ai būna ir geriau','2021-05-08 19:10:41','2021-05-08 19:10:41'),(3,3,'2016','Jonas Jonaitis','22','10/10!','2021-05-08 19:13:05','2021-05-08 19:13:05'),(4,3,'2012','Vaidas Vaidaits','501','Nu liuks','2021-05-08 20:02:37','2021-05-08 20:02:37'),(5,1,'1972','Tomas Tomaits','408','Tikrai kad super','2021-05-08 20:03:56','2021-05-08 20:03:56'),(6,2,'1970','Nerijus Giedraitis','352','Nuostabu','2021-05-08 20:04:10','2021-05-08 20:04:10'),(7,1,'1977','Petras Petraitis','169','10/10!','2021-05-08 20:04:37','2021-05-08 20:04:37'),(8,2,'1973','Alius Alutis','733','Ai būna ir geriau','2021-05-08 20:05:09','2021-05-08 20:05:09'),(9,1,'2000','Valdas Kazlauskas','703','Leki ir greičio nematuoji','2021-05-08 20:30:14','2021-05-08 20:30:14'),(10,2,'1992','Stasys Stasėnas','645','10/10!','2021-05-08 20:33:18','2021-05-08 20:33:18'),(11,4,'1979','Kazys Kazėnas','821','O man opeliai labiau patinka','2021-05-08 20:33:29','2021-05-08 20:33:29'),(12,4,'2010','Viljamas Šekspyras','239','Man labiau Audi patinka','2021-05-09 07:35:37','2021-05-09 07:35:37'),(13,2,'1992','Tomas Augulis','593','Leki ir greičio nematuoji','2021-05-09 07:36:45','2021-05-09 07:36:45'),(14,3,'1999','Karolis Tamasauskas','165','Nieko gero','2021-05-09 07:44:14','2021-05-09 07:44:14'),(15,2,'1993','Edgaras Giedrė','157','Gal ir nieko','2021-05-09 07:51:10','2021-05-09 07:51:10'),(16,1,'1973','Tautvydas Vaičiulis','488','Geras sunkvežimis','2021-05-09 07:52:46','2021-05-09 07:52:46'),(17,4,'1978','Jonas Giedrė','933','Leki ir greičio nematuoji','2021-05-09 10:11:54','2021-05-09 10:11:54'),(18,4,'2014','Homer Simpson','901','Leki ir greičio nematuoji','2021-05-09 10:19:31','2021-05-09 10:19:31'),(19,2,'2019','Erika Jennings','107','Gal ir nieko','2021-05-09 10:47:38','2021-05-09 10:47:38'),(20,4,'2007','Harmon Gonzales','469','Man labiau Audi patinka','2021-05-09 18:11:19','2021-05-09 18:11:19');
/*!40000 ALTER TABLE `trucks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-10  0:24:14
