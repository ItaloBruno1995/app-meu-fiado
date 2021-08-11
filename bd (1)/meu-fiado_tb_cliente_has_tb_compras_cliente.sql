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
-- Table structure for table `tb_cliente_has_tb_compras_cliente`
--

DROP TABLE IF EXISTS `tb_cliente_has_tb_compras_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente_has_tb_compras_cliente` (
  `tb_cliente_id` int(11) NOT NULL,
  `tb_compras_cliente_id` int(11) NOT NULL,
  KEY `fk_tb_cliente_has_tb_compras_cliente_tb_compras_cliente1_idx` (`tb_compras_cliente_id`),
  KEY `fk_tb_cliente_has_tb_compras_cliente_tb_cliente1_idx` (`tb_cliente_id`),
  CONSTRAINT `fk_tb_cliente_has_tb_compras_cliente_tb_cliente1` FOREIGN KEY (`tb_cliente_id`) REFERENCES `tb_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_cliente_has_tb_compras_cliente_tb_compras_cliente1` FOREIGN KEY (`tb_compras_cliente_id`) REFERENCES `tb_compras_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente_has_tb_compras_cliente`
--

LOCK TABLES `tb_cliente_has_tb_compras_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente_has_tb_compras_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente_has_tb_compras_cliente` VALUES (1,14),(1,15),(1,16),(1,17),(2,18),(2,19),(1,20),(1,21),(1,22),(7,23),(1,24),(1,26),(1,27),(7,28),(1,29);
/*!40000 ALTER TABLE `tb_cliente_has_tb_compras_cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-26 11:25:50
