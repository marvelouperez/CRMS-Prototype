-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: crms_dbv2
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(45) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_uuid` varchar(45) DEFAULT NULL,
  `user_usertype` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'test@email.com','marvelouperez','2019-123-456','student'),(2,'test2@email.com','marvelouperez2','2019-123-789','faculty'),(3,'test3@email.com','marvelouperez3','2019-123-123','student'),(4,'test4@email.com','user123','2019-123-321','faculty'),(5,'test5@email.com','user321','2019-456-123',NULL),(6,'test6@email.com','user123','2020-09-1234','student'),(7,'testHash@email.com','$2y$10$BQjgg0ZerBadXnKznP/7s.DrHk2qR2s5I4OPeIUk0xORt6gEmDlS.','2019-2020-2022','faculty'),(8,'testHash2@email.com','$2y$10$ybi8KodGgGp2DUwnj4rtHeyDJ6GaRynMb91GZJY9.pRoWtxCz7A4G','2019-2022-2022','student'),(9,'testHash3@email.com','$2y$10$QfYcyAUjf2w59aZc3XBbKOoAKnTM/AtSnLZsQn.FZcpg7GFWZNxH6','2019-01-01','faculty'),(10,'hashFinal@email.com','$2y$10$QZFQHQZLjWbmx8ojALeHzuoC3.M.EHsrQn6GRRklargHOokofo5JC','2019-02-02','student'),(11,'adminHash@email.com','$2y$10$egLW5qtIv9jR.htHHvA28OIj0KHDGGttHk/BrD7piVFVptxlsULLq','2019-02-03','faculty'),(12,'faculty@email.com','$2y$10$c0McJfMjvsHbmv/3iO.ygOAobB79OMH/rCdFX2FK5Q6uwp3G8qx2.','faculty-01-01','faculty');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-02 17:00:06
