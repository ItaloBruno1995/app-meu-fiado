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
-- Table structure for table `tb_movimentacao`
--

DROP TABLE IF EXISTS `tb_movimentacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_movimentacao` (
  `id_movimentacao` int(11) NOT NULL AUTO_INCREMENT,
  `data_movimentacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_movimentacao` varchar(5) NOT NULL,
  `observacao_movimentacao` varchar(45) DEFAULT NULL,
  `tb_cliente_id` int(11) NOT NULL,
  `valorFinal_movimentado` double NOT NULL,
  `valor_desconto` double DEFAULT NULL,
  PRIMARY KEY (`id_movimentacao`),
  KEY `fk_tb_movimentacao_tb_cliente1_idx` (`tb_cliente_id`),
  CONSTRAINT `fk_tb_movimentacao_tb_cliente1` FOREIGN KEY (`tb_cliente_id`) REFERENCES `tb_cliente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_movimentacao`
--

LOCK TABLES `tb_movimentacao` WRITE;
/*!40000 ALTER TABLE `tb_movimentacao` DISABLE KEYS */;
INSERT INTO `tb_movimentacao` VALUES (4,'2021-03-20 17:28:19','C',NULL,1,10,0),(5,'2021-03-20 17:30:44','P',' #MOVIENATCAO',1,5,0),(6,'2021-06-25 22:28:59','C',NULL,7,2,0),(7,'2021-06-25 22:32:20','P',' VAI PAGAR SOMENTE R$ 2,00',7,2,0),(8,'2021-06-25 22:41:51','C',NULL,1,10,0),(9,'2021-06-25 22:44:14','P',' ',1,0,0),(10,'2021-06-25 23:36:18','P',' ',7,7,0);
/*!40000 ALTER TABLE `tb_movimentacao` ENABLE KEYS */;
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
