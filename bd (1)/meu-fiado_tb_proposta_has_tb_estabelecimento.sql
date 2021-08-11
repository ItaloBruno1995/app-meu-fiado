-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: meu-fiado
-- ------------------------------------------------------
-- Server version	5.7.31-log

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
-- Table structure for table `tb_proposta_has_tb_estabelecimento`
--

DROP TABLE IF EXISTS `tb_proposta_has_tb_estabelecimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_proposta_has_tb_estabelecimento` (
  `tb_proposta_id` int(11) NOT NULL,
  `tb_estabelecimento_id` int(11) NOT NULL,
  KEY `fk_tb_proposta_has_tb_estabelecimento_tb_estabelecimento1_idx` (`tb_estabelecimento_id`),
  KEY `fk_tb_proposta_has_tb_estabelecimento_tb_proposta1_idx` (`tb_proposta_id`),
  CONSTRAINT `fk_tb_proposta_has_tb_estabelecimento_tb_estabelecimento1` FOREIGN KEY (`tb_estabelecimento_id`) REFERENCES `tb_estabelecimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_proposta_has_tb_estabelecimento_tb_proposta1` FOREIGN KEY (`tb_proposta_id`) REFERENCES `tb_proposta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_proposta_has_tb_estabelecimento`
--

LOCK TABLES `tb_proposta_has_tb_estabelecimento` WRITE;
/*!40000 ALTER TABLE `tb_proposta_has_tb_estabelecimento` DISABLE KEYS */;
INSERT INTO `tb_proposta_has_tb_estabelecimento` VALUES (5,1),(6,1);
/*!40000 ALTER TABLE `tb_proposta_has_tb_estabelecimento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-26 11:25:49