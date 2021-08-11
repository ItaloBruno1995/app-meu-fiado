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
-- Table structure for table `tb_pagamento_cliente`
--

DROP TABLE IF EXISTS `tb_pagamento_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pagamento_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `valor_pago` double NOT NULL,
  `observacao` varchar(45) DEFAULT NULL,
  `desconto` double DEFAULT NULL,
  `valor_final` double DEFAULT NULL,
  `faltou` varchar(1) DEFAULT NULL,
  `ficouDevendo` double unsigned DEFAULT NULL,
  `resgistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pagamento_cliente`
--

LOCK TABLES `tb_pagamento_cliente` WRITE;
/*!40000 ALTER TABLE `tb_pagamento_cliente` DISABLE KEYS */;
INSERT INTO `tb_pagamento_cliente` VALUES (7,'2021-01-29',100,' ',0,100,'F',0,'2021-01-29 20:03:10'),(8,'2021-01-29',100,' DESCONTO DE 50% OFERECIDO NO APP',50,50,'F',0,'2021-01-29 20:07:23'),(9,'2021-01-29',100,' VOU DA METADE NO OUTRO MÃªS',50,50,'V',25,'2021-01-29 20:13:00'),(10,'2021-01-29',25,' ',50,12.5,'F',0,'2021-01-29 20:15:43'),(11,'2021-01-29',25,' T',50,12.5,'F',0,'2021-01-29 20:19:24'),(12,'2021-01-29',25,' Y',50,12.5,'V',0.5,'2021-01-29 20:22:39'),(13,'2021-02-04',2.5,' ',50,1.25,'V',0.25,'2021-02-04 15:32:02'),(14,'2021-03-20',20.25,' #MOVENTACAO',50,10.13,'F',0,'2021-03-20 20:25:13'),(15,'2021-03-20',10,' #MOVIENATCAO',0,10,'V',5,'2021-03-20 20:30:44'),(16,'2021-06-25',9,' VAI PAGAR SOMENTE R$ 2,00',0,9,'V',7,'2021-06-26 01:32:20'),(17,'2021-06-25',15,' ',0,15,'V',15,'2021-06-26 01:44:14'),(18,'2021-06-25',7,' ',0,7,'F',0,'2021-06-26 02:36:18');
/*!40000 ALTER TABLE `tb_pagamento_cliente` ENABLE KEYS */;
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
