-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: crisiplastica_db
-- ------------------------------------------------------
-- Server version	5.6.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articoli_cp`
--

DROP TABLE IF EXISTS `articoli_cp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articoli_cp` (
  `idarticoli_cp` int(11) NOT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `note_realizzazione` varchar(10000) DEFAULT NULL,
  `prezzo` varchar(45) DEFAULT NULL,
  `immagine` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idarticoli_cp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articoli_cp`
--

LOCK TABLES `articoli_cp` WRITE;
/*!40000 ALTER TABLE `articoli_cp` DISABLE KEYS */;
INSERT INTO `articoli_cp` VALUES (1,'arredo','Cornice con occhio','una bellissima cornice con un bellissimo occhio è stupenda davvero','11 euro','corniceocchio.jpg'),(2,'props','Cuore','un bellissimo cuore di merda','30 euro','cuore.jpg'),(3,'mockup','Formaggi','disgustosi formaggi','12 euro','formaggi.jpg'),(4,'anatomia','Seni','seni stupendi ma per davvero','30 euro','seni.jpg'),(5,'supplies','Pelle sintetica','una bellissima pelle sintetica ','20 euro','pellesintetica.jpg'),(6,'sfx','Coniglio','una bella minchia fritta','20 euro','coniglio.jpg'),(7,'scenografie','Carro','che cazzo è','300 euro','carro.jpg'),(8,'carachters','Profondo rosso','sta gran coppola','50 euro','profondorosso.jpg'),(9,'artwork','Sanguisuga','NON SCRIVIAMO NIENTE','100000 euro','sanguisuga.jpeg');
/*!40000 ALTER TABLE `articoli_cp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-03 14:40:50
