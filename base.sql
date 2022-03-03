-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: nous_les_femmes
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrateur` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(65) NOT NULL,
  `prenom` varchar(65) NOT NULL,
  `adresse` varchar(65) NOT NULL,
  `mot_de_passe` varchar(65) NOT NULL,
  `login` varchar(65) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrateur`
--

LOCK TABLES `administrateur` WRITE;
/*!40000 ALTER TABLE `administrateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dommaine`
--

DROP TABLE IF EXISTS `dommaine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dommaine` (
  `id_dommaine` int NOT NULL AUTO_INCREMENT,
  `nom_dommaine` varchar(65) NOT NULL,
  `numero` varchar(65) NOT NULL,
  PRIMARY KEY (`id_dommaine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dommaine`
--

LOCK TABLES `dommaine` WRITE;
/*!40000 ALTER TABLE `dommaine` DISABLE KEYS */;
/*!40000 ALTER TABLE `dommaine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organisation`
--

DROP TABLE IF EXISTS `organisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organisation` (
  `id_organisation` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(65) NOT NULL,
  `coordonnees` varchar(65) NOT NULL,
  `ninea` varchar(65) NOT NULL,
  `region` varchar(65) NOT NULL,
  `departement` varchar(65) NOT NULL,
  `commune` varchar(120) NOT NULL,
  `quartier` varchar(65) NOT NULL,
  `siege` varchar(65) NOT NULL,
  `registre` varchar(65) NOT NULL,
  `regime` varchar(65) NOT NULL,
  `nombre_employe` int NOT NULL,
  `date_creation` date DEFAULT NULL,
  `admin_id` int NOT NULL,
  `ressource_id` int NOT NULL,
  PRIMARY KEY (`id_organisation`),
  KEY `admin_id` (`admin_id`),
  KEY `ressource_id` (`ressource_id`),
  CONSTRAINT `organisation_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `administrateur` (`id_admin`),
  CONSTRAINT `organisation_ibfk_2` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id_ressource`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisation`
--

LOCK TABLES `organisation` WRITE;
/*!40000 ALTER TABLE `organisation` DISABLE KEYS */;
/*!40000 ALTER TABLE `organisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organisation_dommaine`
--

DROP TABLE IF EXISTS `organisation_dommaine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organisation_dommaine` (
  `id_ogan_dom` int NOT NULL AUTO_INCREMENT,
  `id_organ` int NOT NULL,
  `id_dom` int NOT NULL,
  `nombre_dommaine` int NOT NULL,
  PRIMARY KEY (`id_ogan_dom`),
  KEY `id_dom` (`id_dom`),
  KEY `id_organ` (`id_organ`),
  CONSTRAINT `organisation_dommaine_ibfk_1` FOREIGN KEY (`id_dom`) REFERENCES `dommaine` (`id_dommaine`),
  CONSTRAINT `organisation_dommaine_ibfk_2` FOREIGN KEY (`id_organ`) REFERENCES `organisation` (`id_organisation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisation_dommaine`
--

LOCK TABLES `organisation_dommaine` WRITE;
/*!40000 ALTER TABLE `organisation_dommaine` DISABLE KEYS */;
/*!40000 ALTER TABLE `organisation_dommaine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repondant`
--

DROP TABLE IF EXISTS `repondant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `repondant` (
  `id_repondant` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(65) NOT NULL,
  `prenom` varchar(65) NOT NULL,
  `fonction` varchar(65) NOT NULL,
  `telephone` varchar(65) NOT NULL,
  `courriel` varchar(65) NOT NULL,
  `organ_id` int NOT NULL,
  PRIMARY KEY (`id_repondant`),
  KEY `organ_id` (`organ_id`),
  CONSTRAINT `repondant_ibfk_1` FOREIGN KEY (`organ_id`) REFERENCES `organisation` (`id_organisation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repondant`
--

LOCK TABLES `repondant` WRITE;
/*!40000 ALTER TABLE `repondant` DISABLE KEYS */;
/*!40000 ALTER TABLE `repondant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ressource` (
  `id_ressource` int NOT NULL AUTO_INCREMENT,
  `contrat` tinyint(1) DEFAULT NULL,
  `formation` tinyint(1) DEFAULT NULL,
  `quotisation_social` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_ressource`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ressource`
--

LOCK TABLES `ressource` WRITE;
/*!40000 ALTER TABLE `ressource` DISABLE KEYS */;
/*!40000 ALTER TABLE `ressource` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-03  8:29:37
