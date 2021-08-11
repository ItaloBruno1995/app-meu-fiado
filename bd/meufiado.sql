CREATE DATABASE  IF NOT EXISTS `id17137590_meufiado` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `id17137590_meufiado`;
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
SET FOREIGN_KEY_CHECKS =  0 ;

--
-- Table structure for table `tb_assinatura`
--

DROP TABLE IF EXISTS `tb_assinatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_assinatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` double DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_assinatura`
--

LOCK TABLES `tb_assinatura` WRITE;
/*!40000 ALTER TABLE `tb_assinatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_assinatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'ITALO BRUNO C','11111','123'),(2,'ITALO','61047057310','123'),(7,'MARIA','61047057310','123'),(9,'SITEMA','61047057310','123'),(11,'MARIA TEREZADE DE JESUS COSTA MONTEIRO','61047057310','123'),(12,'ITALO BRUNO SANTOS PEREIRA','61047057310','123'),(13,'MARIA TEREZADE DE JESUS COSTA MONTEIRO','123456','123'),(14,'ITALO BRUNO SANTOS PEREIRA','61047057310','123'),(15,'ITALO BRUNO SANTOS PEREIRA','61047057310','123'),(16,'italo bruno santos pereira','61047057310','123'),(17,'sistema','61047057310','123'),(18,'sistema','93882696320','123'),(19,'italo bruno santos pereira','61047057310','123'),(20,'fabricio santos andrade','60171212355','123'),(21,'Italo','123','123'),(22,'ITALO','321','123'),(23,'ORDEN DE SERVIÃ§OS','61047057311','123'),(24,'ADRINA','15494466464','123');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_cliente_has_tb_proposta`
--

DROP TABLE IF EXISTS `tb_cliente_has_tb_proposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente_has_tb_proposta` (
  `tb_cliente_id` int(11) NOT NULL,
  `tb_proposta_id` int(11) NOT NULL,
  KEY `fk_tb_cliente_has_tb_proposta_tb_proposta1_idx` (`tb_proposta_id`),
  KEY `fk_tb_cliente_has_tb_proposta_tb_cliente1_idx` (`tb_cliente_id`),
  CONSTRAINT `fk_tb_cliente_has_tb_proposta_tb_cliente1` FOREIGN KEY (`tb_cliente_id`) REFERENCES `tb_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_cliente_has_tb_proposta_tb_proposta1` FOREIGN KEY (`tb_proposta_id`) REFERENCES `tb_proposta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente_has_tb_proposta`
--

LOCK TABLES `tb_cliente_has_tb_proposta` WRITE;
/*!40000 ALTER TABLE `tb_cliente_has_tb_proposta` DISABLE KEYS */;
INSERT INTO `tb_cliente_has_tb_proposta` VALUES (1,3),(1,4);
/*!40000 ALTER TABLE `tb_cliente_has_tb_proposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_compras_cliente`
--

DROP TABLE IF EXISTS `tb_compras_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_compras_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL DEFAULT 'COMP',
  `data` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_compras_cliente`
--

LOCK TABLES `tb_compras_cliente` WRITE;
/*!40000 ALTER TABLE `tb_compras_cliente` DISABLE KEYS */;
INSERT INTO `tb_compras_cliente` VALUES (14,'CAFE PEQUENO 50','2021-01-29',50,'2021-01-29 20:05:19'),(15,' BISCOITO PEQUENO','2021-01-29',50,'2021-01-29 20:05:19'),(16,' SAPATO 100','2021-01-29',100,'2021-01-29 20:05:19'),(17,' VALOR ÃºNICO ','2021-01-29',100,'2021-01-29 20:11:27'),(18,' ','2021-01-29',25,'2021-01-29 20:17:21'),(19,' ','2021-01-29',25,'2021-01-29 20:17:53'),(20,' T','2021-01-29',25,'2021-01-29 20:18:33'),(21,' Y','2021-01-29',25,'2021-01-29 20:20:37'),(22,' COMPRA PRA TESTAR DATA ','2021-01-31',1,'2021-01-31 15:33:19'),(23,' 7 REAIS DE PÃ£O','2021-01-31',7,'2021-01-31 22:42:27'),(24,' ','2021-02-03',1,'2021-02-03 20:31:10'),(26,' TESTE MOVITACAO |#','2021-03-20',20,'2021-03-20 20:14:52'),(27,' #MOMENTACAO','2021-03-20',10,'2021-03-20 20:28:19'),(28,'R$ 2,00 DE POES','2021-06-25',2,'2021-06-26 01:28:59'),(29,' ','2021-06-25',10,'2021-06-26 01:41:51');
/*!40000 ALTER TABLE `tb_compras_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_estabelecimento`
--

DROP TABLE IF EXISTS `tb_estabelecimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_estabelecimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_estabelecimento` varchar(45) NOT NULL,
  `nome_proprietario` varchar(45) NOT NULL,
  `user` varchar(50) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `fone` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `tb_status_assinatura_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_estabelecimento_tb_status_assinatura1_idx` (`tb_status_assinatura_id`),
  CONSTRAINT `fk_tb_estabelecimento_tb_status_assinatura1` FOREIGN KEY (`tb_status_assinatura_id`) REFERENCES `tb_status_assinatura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estabelecimento`
--

LOCK TABLES `tb_estabelecimento` WRITE;
/*!40000 ALTER TABLE `tb_estabelecimento` DISABLE KEYS */;
INSERT INTO `tb_estabelecimento` VALUES (1,'SEU RIBA','RIBA','TESTE','123',NULL,NULL,1);
/*!40000 ALTER TABLE `tb_estabelecimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_estabelecimento_has_tb_cliente`
--

DROP TABLE IF EXISTS `tb_estabelecimento_has_tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_estabelecimento_has_tb_cliente` (
  `tb_estabelecimento_id` int(11) NOT NULL,
  `tb_cliente_id` int(11) NOT NULL,
  KEY `fk_tb_estabelecimento_has_tb_cliente_tb_cliente1_idx` (`tb_cliente_id`),
  KEY `fk_tb_estabelecimento_has_tb_cliente_tb_estabelecimento1_idx` (`tb_estabelecimento_id`),
  CONSTRAINT `fk_tb_estabelecimento_has_tb_cliente_tb_cliente1` FOREIGN KEY (`tb_cliente_id`) REFERENCES `tb_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_estabelecimento_has_tb_cliente_tb_estabelecimento1` FOREIGN KEY (`tb_estabelecimento_id`) REFERENCES `tb_estabelecimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estabelecimento_has_tb_cliente`
--

LOCK TABLES `tb_estabelecimento_has_tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_estabelecimento_has_tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_estabelecimento_has_tb_cliente` VALUES (1,1),(1,2),(1,7),(1,9),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,22),(1,23),(1,24);
/*!40000 ALTER TABLE `tb_estabelecimento_has_tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_pagamento_assinatura`
--

DROP TABLE IF EXISTS `tb_pagamento_assinatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pagamento_assinatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `descricao` varchar(45) DEFAULT 'PAG.',
  `observacao` varchar(100) DEFAULT NULL,
  `tb_assinatura_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_pagamento_assinatura_tb_assinatura1_idx` (`tb_assinatura_id`),
  CONSTRAINT `fk_tb_pagamento_assinatura_tb_assinatura1` FOREIGN KEY (`tb_assinatura_id`) REFERENCES `tb_assinatura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pagamento_assinatura`
--

LOCK TABLES `tb_pagamento_assinatura` WRITE;
/*!40000 ALTER TABLE `tb_pagamento_assinatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pagamento_assinatura` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_pagamento_cliente_has_tb_cliente`
--

DROP TABLE IF EXISTS `tb_pagamento_cliente_has_tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pagamento_cliente_has_tb_cliente` (
  `tb_pagamento_cliente_id` int(11) NOT NULL,
  `tb_cliente_id` int(11) NOT NULL,
  KEY `fk_tb_pagamento_cliente_has_tb_cliente_tb_cliente1_idx` (`tb_cliente_id`),
  KEY `fk_tb_pagamento_cliente_has_tb_cliente_tb_pagamento_cliente_idx` (`tb_pagamento_cliente_id`),
  CONSTRAINT `fk_tb_pagamento_cliente_has_tb_cliente_tb_cliente1` FOREIGN KEY (`tb_cliente_id`) REFERENCES `tb_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_pagamento_cliente_has_tb_cliente_tb_pagamento_cliente1` FOREIGN KEY (`tb_pagamento_cliente_id`) REFERENCES `tb_pagamento_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pagamento_cliente_has_tb_cliente`
--

LOCK TABLES `tb_pagamento_cliente_has_tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_pagamento_cliente_has_tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_pagamento_cliente_has_tb_cliente` VALUES (7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,7),(17,1),(18,7);
/*!40000 ALTER TABLE `tb_pagamento_cliente_has_tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_proposta`
--

DROP TABLE IF EXISTS `tb_proposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_proposta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `validade` date DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_proposta`
--

LOCK TABLES `tb_proposta` WRITE;
/*!40000 ALTER TABLE `tb_proposta` DISABLE KEYS */;
INSERT INTO `tb_proposta` VALUES (3,'2021-01-28',' PROPOSTA TESTE VENCIDA ','2021-01-30 14:57:33'),(4,'2021-02-27',' PROPOSTA VALIDA','2021-01-30 14:57:33'),(5,'2021-01-30',' PARA TODOS','2021-01-30 14:57:33'),(6,'2021-01-29',' OUTRA TESTE','2021-01-30 15:25:25');
/*!40000 ALTER TABLE `tb_proposta` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_status_assinatura`
--

DROP TABLE IF EXISTS `tb_status_assinatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_status_assinatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `decricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_status_assinatura`
--

LOCK TABLES `tb_status_assinatura` WRITE;
/*!40000 ALTER TABLE `tb_status_assinatura` DISABLE KEYS */;
INSERT INTO `tb_status_assinatura` VALUES (1,'ATIVA');
/*!40000 ALTER TABLE `tb_status_assinatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'meu-fiado'
--

--
-- Dumping routines for database 'meu-fiado'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-26 11:30:00
