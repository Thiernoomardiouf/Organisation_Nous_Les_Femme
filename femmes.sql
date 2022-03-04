-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: femmes
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
-- Table structure for table `commune`
--

DROP TABLE IF EXISTS `commune`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commune` (
  `id_commune` int NOT NULL AUTO_INCREMENT,
  `nom_commune` varchar(65) NOT NULL,
  `departement_id` int NOT NULL,
  PRIMARY KEY (`id_commune`),
  KEY `departement_id` (`departement_id`),
  CONSTRAINT `commune_ibfk_1` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id_departement`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commune`
--

LOCK TABLES `commune` WRITE;
/*!40000 ALTER TABLE `commune` DISABLE KEYS */;
INSERT INTO `commune` VALUES (1,'Dakar',1),(2,'Pikine',1),(3,'Bambey',2),(4,'Mbacke',2),(5,'Mbour',8),(6,'Diourbel',2),(7,'Kaolack',3),(8,'Saint louis',4),(9,'Louga',5),(10,'Fatick',6),(11,'Zinginchor',7),(12,'Thies',8);
/*!40000 ALTER TABLE `commune` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departement` (
  `id_departement` int NOT NULL AUTO_INCREMENT,
  `nom_departement` varchar(65) NOT NULL,
  `region_id` int NOT NULL,
  PRIMARY KEY (`id_departement`),
  KEY `region_id` (`region_id`),
  CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` VALUES (1,'Dakar',1),(2,'Pikine',1),(3,'Bambey',2),(4,'Mbacke',2),(5,'Mbour',8),(6,'Diourbel',2),(7,'Kaolack',3),(8,'Saint louis',4),(9,'Louga',5),(10,'Fatick',6),(11,'Zinginchor',7),(12,'Thies',8);
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
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
  `contrat` varchar(65) NOT NULL,
  `formation` varchar(65) NOT NULL,
  `quotisation` varchar(120) NOT NULL,
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
  CONSTRAINT `organisation_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `utilisateur` (`id_utilisa`),
  CONSTRAINT `organisation_ibfk_2` FOREIGN KEY (`ressource_id`) REFERENCES `quartier` (`id_quartier`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisation`
--

LOCK TABLES `organisation` WRITE;
/*!40000 ALTER TABLE `organisation` DISABLE KEYS */;
INSERT INTO `organisation` VALUES (1,'Simplon','Parcelle 23 Mermoz','ZE233','OUI','OUI','OUI','Sacré coeur','345','SARL',32,'2017-11-07',1,1),(2,'Simplon','Parcelle 23 Mermoz','ZE233','OUI','OUI','OUI','Sacré coeur','345','SARL',32,'2017-11-07',1,1),(3,'Atos','Dakar 23 Mermoz','AA33','OUI','OUI','OUI','Sacré coeur','225','SARL',232,'2011-11-07',1,2);
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
-- Table structure for table `quartier`
--

DROP TABLE IF EXISTS `quartier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quartier` (
  `id_quartier` int NOT NULL AUTO_INCREMENT,
  `nom_quartier` varchar(65) NOT NULL,
  `commune_id` int NOT NULL,
  PRIMARY KEY (`id_quartier`),
  KEY `commune_id` (`commune_id`),
  CONSTRAINT `quartier_ibfk_1` FOREIGN KEY (`commune_id`) REFERENCES `commune` (`id_commune`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quartier`
--

LOCK TABLES `quartier` WRITE;
/*!40000 ALTER TABLE `quartier` DISABLE KEYS */;
INSERT INTO `quartier` VALUES (1,'Mermoz',1),(2,'Sacré coeur',1),(3,'Medinatoul',6),(4,'Darou Miname',4),(5,'Khar Yalla',1),(6,'Keur Cheikh',1),(7,'Tip',4);
/*!40000 ALTER TABLE `quartier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `region` (
  `id_region` int NOT NULL AUTO_INCREMENT,
  `nom_region` varchar(65) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Dakar'),(2,'Diourbel'),(3,'Kaolack'),(4,'Saint louis'),(5,'Louga'),(6,'Fatick'),(7,'Zinginchor'),(8,'Thies');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repondant`
--

LOCK TABLES `repondant` WRITE;
/*!40000 ALTER TABLE `repondant` DISABLE KEYS */;
INSERT INTO `repondant` VALUES (1,'Sene','Abdou','Mananger','77 878 54 35','abdousene@gmail.com',1),(2,'Diouf','Thierno','Informaticien','77 878 22 35','thiernodiouf@gmail.com',3);
/*!40000 ALTER TABLE `repondant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `id_utilisa` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(65) NOT NULL,
  `prenom` varchar(65) NOT NULL,
  `adresse` varchar(65) NOT NULL,
  `mot_de_passe` varchar(65) NOT NULL,
  `login` varchar(65) NOT NULL,
  PRIMARY KEY (`id_utilisa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'Diouf','Omar','Parcelle','123','user1'),(2,'Diop','Modou','Dakar','123','user2'),(3,'Diouf','Pape','Pikine','123','user3');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-04 10:39:01
