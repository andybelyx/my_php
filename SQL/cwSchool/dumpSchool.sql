-- MySQL dump 10.17  Distrib 10.3.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	10.3.12-MariaDB-2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `class_id` int(100) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'1-А'),(2,'1-Б'),(3,'2-А'),(4,'2-Б'),(5,'3-А'),(6,'3-Б');
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pupil`
--

DROP TABLE IF EXISTS `pupil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pupil` (
  `pupil_id` int(100) NOT NULL AUTO_INCREMENT,
  `pupil_name` varchar(255) NOT NULL,
  `pupil_age` int(10) NOT NULL,
  `class_id` int(100) NOT NULL,
  PRIMARY KEY (`pupil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pupil`
--

LOCK TABLES `pupil` WRITE;
/*!40000 ALTER TABLE `pupil` DISABLE KEYS */;
INSERT INTO `pupil` VALUES (1,'Сергеев Иван',6,1),(2,'Озеров Максим',7,1),(3,'Степанян Артур',6,1),(4,'Цветкова Анна',7,1),(5,'Смактуновский Инокентий',6,1),(6,'Кольцова Марина',6,2),(7,'Жук Александра',7,2),(8,'Варламов Игорь',6,2),(9,'Цветаев Антон',6,2),(10,'Краснико Дмитрий',6,2),(11,'Дорошенко Егор',8,3),(12,'Жуков Генадий',8,3),(13,'Матиаш Алина',7,3),(14,'Кораблев Кирилл',7,3),(15,'Шевченко Виолетта',8,3),(16,'Чубар Егор',8,4),(17,'Лунин Артем',8,4),(18,'Козлова Марина',8,4),(19,'Никитюк Леся',7,4),(20,'Трамп Дон',8,4),(21,'Потапов Илья',9,5),(22,'Лазарев Константин',9,5),(23,'Королев Лев',9,5),(24,'Грекова Наталья',9,5),(25,'Чернов Федор',9,5),(26,'Сахаров Илья',9,6),(27,'Котова Елезавета',9,6),(28,'Глаткова Дарина',9,6),(29,'Поленов Олег',9,6),(30,'Светличная Вероника',9,6);
/*!40000 ALTER TABLE `pupil` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-09 23:48:58
