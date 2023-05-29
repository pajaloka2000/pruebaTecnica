-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: datos_clima
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `datos`
--

DROP TABLE IF EXISTS `datos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) DEFAULT NULL,
  `humedad` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos`
--

LOCK TABLES `datos` WRITE;
/*!40000 ALTER TABLE `datos` DISABLE KEYS */;
INSERT INTO `datos` VALUES (56,'Miami','77','2023-05-29 04:54:24'),(57,'Orlando','88','2023-05-29 04:54:24'),(58,'New York','64','2023-05-29 04:54:24'),(59,'Miami','77','2023-05-29 05:06:07'),(60,'Orlando','88','2023-05-29 05:06:07'),(61,'New York','64','2023-05-29 05:06:07'),(62,'Miami','80','2023-05-29 05:50:36'),(63,'Orlando','89','2023-05-29 05:50:36'),(64,'New York','63','2023-05-29 05:50:36'),(65,'Miami','80','2023-05-29 05:51:12'),(66,'Orlando','89','2023-05-29 05:51:12'),(67,'New York','64','2023-05-29 05:51:12'),(68,'Miami','80','2023-05-29 05:51:24'),(69,'Orlando','89','2023-05-29 05:51:24'),(70,'New York','64','2023-05-29 05:51:24'),(71,'Miami','84','2023-05-29 06:58:20'),(72,'Orlando','90','2023-05-29 06:58:20'),(73,'New York','65','2023-05-29 06:58:20'),(74,'Miami','85','2023-05-29 07:24:41'),(75,'Orlando','92','2023-05-29 07:24:41'),(76,'New York','67','2023-05-29 07:24:41'),(77,'Miami','86','2023-05-29 07:36:08'),(78,'Orlando','91','2023-05-29 07:36:08'),(79,'New York','67','2023-05-29 07:36:08'),(80,'Miami','86','2023-05-29 07:37:36'),(81,'Orlando','91','2023-05-29 07:37:36'),(82,'New York','67','2023-05-29 07:37:36'),(83,'Miami','86','2023-05-29 07:38:21'),(84,'Orlando','91','2023-05-29 07:38:21'),(85,'New York','67','2023-05-29 07:38:21'),(86,'Miami','86','2023-05-29 07:42:37'),(87,'Orlando','91','2023-05-29 07:42:37'),(88,'New York','67','2023-05-29 07:42:37'),(89,'Miami','86','2023-05-29 07:43:49'),(90,'Orlando','91','2023-05-29 07:43:49'),(91,'New York','67','2023-05-29 07:43:49'),(92,'Miami','86','2023-05-29 07:43:56'),(93,'Orlando','91','2023-05-29 07:43:56'),(94,'New York','67','2023-05-29 07:43:56');
/*!40000 ALTER TABLE `datos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-29  3:25:00
