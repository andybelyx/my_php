-- MySQL dump 10.17  Distrib 10.3.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: music
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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `album_id` int(100) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) NOT NULL,
  `singer_id` int(100) NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,'21',1,2011),(2,'25',1,2015),(3,'Kamikaze',2,2018),(4,'Revival',2,2017);
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(255) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'soul'),(2,'pop'),(3,'rap');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `singers`
--

DROP TABLE IF EXISTS `singers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `singers` (
  `singer_id` int(100) NOT NULL AUTO_INCREMENT,
  `singer_name` varchar(255) NOT NULL,
  PRIMARY KEY (`singer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `singers`
--

LOCK TABLES `singers` WRITE;
/*!40000 ALTER TABLE `singers` DISABLE KEYS */;
INSERT INTO `singers` VALUES (1,'Adele'),(2,'Eminem');
/*!40000 ALTER TABLE `singers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `songs` (
  `song_id` int(100) NOT NULL AUTO_INCREMENT,
  `song_name` varchar(255) NOT NULL,
  `singer_id` int(100) NOT NULL,
  `genre_id` int(100) NOT NULL,
  `album_id` int(100) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songs`
--

LOCK TABLES `songs` WRITE;
/*!40000 ALTER TABLE `songs` DISABLE KEYS */;
INSERT INTO `songs` VALUES (1,'Rolling in the Deep',1,1,1),(2,'Someone like You',1,2,1),(3,'Set Fire to the Rain',1,1,1),(4,'Rumour Has It',1,1,1),(5,'Turning Tables',1,2,1),(6,'Hello',1,2,2),(7,'Send My Love (To Your New Lover)',1,2,2),(8,'I Miss You',1,1,2),(9,'When We Were Young',1,1,2),(10,'Remedy',1,1,2),(11,'Water Under the Bridge',1,2,2),(12,'River Lea',1,2,2),(13,'Love in the Dark',1,1,2),(14,'Million Years Ago',1,2,2),(15,'All I Ask',1,1,2),(16,'Sweetest Devotion',1,1,2),(17,'Walk on Water',2,3,4),(18,'Belive',2,3,4),(19,'Chloraseptic',2,3,4),(20,'Untouchable',2,3,4),(21,'River',2,3,4),(22,'Remind Me',2,3,4),(23,'Revival',2,3,4),(24,'Like Home',2,3,4),(25,'Bad Husband',2,3,4),(26,'Tragic Endings',2,3,4),(27,'Framed',2,3,4),(28,'Nowhere Fast',2,3,4),(29,'Heat',2,3,4),(30,'Offended',2,3,4),(31,'In Your Head',2,3,4),(32,'Need Me',2,3,4),(33,'In Your Head',2,3,4),(34,'Castle',2,3,4),(35,'Arose',2,3,4),(36,'The Ringer',2,3,3),(37,'Greatest',2,3,3),(38,'Lucky You',2,3,3),(39,'Paul',2,3,3),(40,'Normal',2,3,3),(41,'Em Calls Paul',2,3,3),(42,'Stepping Store',2,3,3),(43,'Not Alike',2,3,3),(44,'Kamikaze',2,3,3),(45,'Fall',2,3,3),(46,'Nice Guy',2,3,3),(47,'Good Guy',2,3,3),(48,'Venom',2,3,3);
/*!40000 ALTER TABLE `songs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-09 22:20:45
