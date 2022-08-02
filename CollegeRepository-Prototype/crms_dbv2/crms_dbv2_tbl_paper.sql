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
-- Table structure for table `tbl_paper`
--

DROP TABLE IF EXISTS `tbl_paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_paper` (
  `paper_id` int NOT NULL AUTO_INCREMENT,
  `paper_author` varchar(255) DEFAULT NULL,
  `paper_title` varchar(255) DEFAULT NULL,
  `paper_description` varchar(1000) DEFAULT NULL,
  `paper_pages` varchar(45) DEFAULT NULL,
  `paper_name` varchar(100) DEFAULT NULL,
  `paper_type` varchar(100) DEFAULT NULL,
  `date_uploaded` varchar(45) DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`paper_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_paper`
--

LOCK TABLES `tbl_paper` WRITE;
/*!40000 ALTER TABLE `tbl_paper` DISABLE KEYS */;
INSERT INTO `tbl_paper` VALUES (1,'Juhn Marvelou Perez','College Research Monitoring System','A college repository for PUP COLLEGE OF MANILA','42',NULL,NULL,NULL,NULL),(2,'Alexander Cebreiros','College Research Monitoring System','A college repository for PUP COLLEGE OF MANILA','75',NULL,NULL,NULL,NULL),(4,'Kurt Dela Cruz','CRMS','A integrated system proposed on behalf of PUPs research team','45','25587131_1592286307504557_8007148395723441291_o.jpg','image/jpeg','2022-08-02','files/25587131_1592286307504557_8007148395723441291_o.jpg'),(5,'Paulo Christian See','CRMS','A research paper design for research storing and preservation','44','Activity_PEREZ.docx','application/vnd.openxmlformats-officedocument.wordprocessingml.document','2022-08-02','files/Activity_PEREZ.docx'),(6,'JUHN MARVELOU PEREZ','COLLEGE RESEARCH MONITORING SYSTEM ','A college research study about storing research data and papers','58','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(7,'Kurt Dela Cruz','CRMS','A integrated system proposed on behalf of PUPs research team','23','Assesment2.docx','application/vnd.openxmlformats-officedocument.wordprocessingml.document','2022-08-02','files/Assesment2.docx'),(8,'alex cebreiros','crmsv2','test 123 ','44','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(9,'testAuthro','testTitle','testDesc','123','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(10,'test123','test123','test123','123','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(11,'faculty','faculty','faculty','44','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(12,'somefaculty','facultytest2','facultydescpaper','123','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(13,'anotherfaculty','anotherfaculty','somepaper','33','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(14,'lastTest','lastTest','lastTest','66','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf'),(15,'test123','test123','test123','55','Activity1.pdf','application/pdf','2022-08-02','files/Activity1.pdf');
/*!40000 ALTER TABLE `tbl_paper` ENABLE KEYS */;
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
