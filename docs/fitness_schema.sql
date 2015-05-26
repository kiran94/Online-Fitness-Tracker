-- MySQL dump 10.13  Distrib 5.6.20, for osx10.6 (x86_64)
--
-- Host: localhost    Database: fitnessapp
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `ExerciseLogs`
--

DROP TABLE IF EXISTS `ExerciseLogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ExerciseLogs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exercise_weight` smallint(3) DEFAULT NULL,
  `exercise_reps` tinyint(4) DEFAULT NULL,
  `dateVal` date DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ExerciseLogs`
--

LOCK TABLES `ExerciseLogs` WRITE;
/*!40000 ALTER TABLE `ExerciseLogs` DISABLE KEYS */;
INSERT INTO `ExerciseLogs` VALUES (1,2,1,15,3,'2015-02-12'),(2,4,1,20,10,'2015-02-12'),(3,1,1,25,10,'2015-02-12'),(4,1,1,25,15,'0000-00-00'),(5,1,1,50,20,'0000-00-00'),(6,4,1,85,30,'0000-00-00'),(7,5,1,25,15,'0000-00-00'),(8,1,1,30,0,'0000-00-00'),(9,1,1,0,0,'0000-00-00'),(10,1,1,25,0,'0000-00-00'),(11,1,1,0,0,'0000-00-00'),(12,4,1,20,15,'0000-00-00'),(13,5,1,0,0,'0000-00-00'),(14,3,1,20,15,'0000-00-00'),(15,3,1,10,10,'0000-00-00'),(16,1,1,0,15,'0000-00-00'),(17,1,1,20,10,'0000-00-00'),(18,1,1,0,0,'0000-00-00'),(19,1,1,0,15,'2015-04-26'),(20,4,1,10,10,'2015-05-26'),(21,5,1,30,0,'2015-05-26');
/*!40000 ALTER TABLE `ExerciseLogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercises` (
  `exercise_id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_name` varchar(100) DEFAULT NULL,
  `exercise_img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`exercise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES (1,'dumbell lateral raises','res/exercises/dumbelllateralraises.jpg'),(2,'front dumbell raises','res/exercises/frontdumbellraises.jpg'),(3,'Bench Press','res/exercises/benchpress.png'),(4,'Hammer Curls','res/exercises/hammercurls.png'),(5,'Pull Ups','res/exercises/pullups.png');
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `measurements`
--

DROP TABLE IF EXISTS `measurements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `measurements` (
  `measurement_id` int(11) NOT NULL AUTO_INCREMENT,
  `chest` smallint(3) DEFAULT NULL,
  `upper_arms` smallint(3) DEFAULT NULL,
  `fore_arms` smallint(3) DEFAULT NULL,
  `waist` smallint(3) DEFAULT NULL,
  `thighs` smallint(3) DEFAULT NULL,
  `calves` smallint(3) DEFAULT NULL,
  `bodyfat` tinyint(4) DEFAULT NULL,
  `weight` smallint(3) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`measurement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `measurements`
--

LOCK TABLES `measurements` WRITE;
/*!40000 ALTER TABLE `measurements` DISABLE KEYS */;
INSERT INTO `measurements` VALUES (1,23,2,3,2,34,2,3,70,1);
/*!40000 ALTER TABLE `measurements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_height` smallint(3) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'kiran','2014-09-02',172,''),(2,'kiran','1994-08-05',172,'');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-26 12:26:19
