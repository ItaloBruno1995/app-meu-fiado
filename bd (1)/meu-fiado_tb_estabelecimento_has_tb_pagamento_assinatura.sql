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
-- Table structure for table `tb_estabelecimento_has_tb_pagamento_assinatura`
--

DROP TABLE IF EXISTS `tb_estabelecimento_has_tb_pagamento_assinatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_estabelecimento_has_tb_pagamento_assinatura` (
  `tb_estabelecimento_id` int(11) NOT NULL,
  `tb_pagamento_assinatura_id` int(11) NOT NULL,
  KEY `fk_tb_estabelecimento_has_tb_pagamento_assinatura_tb_pagame_idx` (`tb_pagamento_assinatura_id`),
  KEY `fk_tb_estabelecimento_has_tb_pagamento_assinatura_tb_estabe_idx` (`tb_estabelecimento_id`),
  CONSTRAINT `fk_tb_estabelecimento_has_tb_pagamento_assinatura_tb_estabele` FOREIGN KEY (`tb_estabelecimento_id`) REFERENCES `tb_estabelecimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_estabelecimento_has_tb_pagamento_assinatura_tb_pagament1` FOREIGN KEY (`tb_pagamento_assinatura_id`) REFERENCES `tb_pagamento_assinatura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estabelecimento_has_tb_pagamento_assinatura`
--

LOCK TABLES `tb_estabelecimento_has_tb_pagamento_assinatura` WRITE;
/*!40000 ALTER TABLE `tb_estabelecimento_has_tb_pagamento_assinatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_estabelecimento_has_tb_pagamento_assinatura` ENABLE KEYS */;
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
