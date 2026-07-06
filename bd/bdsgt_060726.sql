CREATE DATABASE  IF NOT EXISTS `bdsgt` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bdsgt`;
-- MySQL dump 10.13  Distrib 8.0.36, for macos14 (x86_64)
--
-- Host: localhost    Database: bdsgt
-- ------------------------------------------------------
-- Server version	8.0.46-0ubuntu0.24.04.3

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
-- Table structure for table `Concesion`
--

DROP TABLE IF EXISTS `Concesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Concesion` (
  `id_concesion` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(50) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `titular` varchar(100) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  `tipo_concesion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_concesion`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Concesion`
--

LOCK TABLES `Concesion` WRITE;
/*!40000 ALTER TABLE `Concesion` DISABLE KEYS */;
INSERT INTO `Concesion` VALUES (1,'CON-001','2026-05-17 09:52:47','Titular1','2026-12-31','INACTIVO',NULL),(2,'CON-002','2026-05-17 09:52:47','Titular2','2026-12-31','INACTIVO',NULL),(3,'CON-003','2026-05-17 09:52:47','Titular3','2026-12-31','INACTIVO',NULL),(4,'CON-004','2026-05-17 09:52:47','Titular4','2026-12-31','Activa',NULL),(5,'CON-005','2026-05-17 09:52:47','Titular5','2026-12-31','Vencida',NULL),(6,'CON-006','2026-05-17 09:52:47','Titular6','2026-12-31','Activa',NULL),(7,'CON-007','2026-05-17 09:52:47','Titular7','2026-12-31','Activa',NULL),(8,'CON-008','2026-05-17 09:52:47','Titular8','2026-12-31','Activa',NULL),(9,'CON-009','2026-05-17 09:52:47','Titular9','2026-12-31','Suspendida',NULL),(10,'CON-010','2026-05-17 09:52:47','Titular10','2026-12-31','Activa',NULL),(11,'CON-011','2026-05-17 09:52:47','Titular11','2026-12-31','Activa',NULL),(12,'CON-012','2026-05-17 09:52:47','Titular12','2026-12-31','Activa',NULL),(13,'CON-013','2026-05-17 09:52:47','Titular13','2026-12-31','Activa',NULL),(14,'CON-014','2026-05-17 09:52:47','Titular14','2026-12-31','Vencida',NULL),(15,'CON-015','2026-05-17 09:52:47','Titular15','2026-12-31','Activa',NULL),(16,'CON-016','2026-05-17 09:52:47','Titular16','2026-12-31','Activa',NULL),(17,'CON-017','2026-05-17 09:52:47','Titular17','2026-12-31','Activa',NULL),(18,'CON-018','2026-05-17 09:52:47','Titular18','2026-12-31','Suspendida',NULL),(19,'CON-019','2026-05-17 09:52:47','Titular19','2026-12-31','Activa',NULL),(20,'CON-020','2026-05-17 09:52:47','Titular20','2026-12-31','Activa',NULL),(21,'CON-021','2026-05-17 09:52:47','Titular21','2026-12-31','Activa',NULL),(22,'CON-022','2026-05-17 09:52:47','Titular22','2026-12-31','Activa',NULL),(23,'CON-023','2026-05-17 09:52:47','Titular23','2026-12-31','Vencida',NULL),(24,'CON-024','2026-05-17 09:52:47','Titular24','2026-12-31','Activa',NULL),(25,'CON-025','2026-05-17 09:52:47','Titular25','2026-12-31','Activa',NULL),(26,'CON-026','2026-05-17 09:52:47','Titular26','2026-12-31','Activa',NULL),(27,'CON-027','2026-05-17 09:52:47','Titular27','2026-12-31','Suspendida',NULL),(28,'CON-028','2026-05-17 09:52:47','Titular28','2026-12-31','Activa',NULL),(29,'CON-029','2026-05-17 09:52:47','Titular29','2026-12-31','Activa',NULL),(30,'CON-030','2026-05-17 09:52:47','Titular30','2026-12-31','Activa',NULL),(31,'CON-031','2026-05-17 09:52:47','Titular31','2026-12-31','Activa',NULL),(32,'CON-032','2026-05-17 09:52:47','Titular32','2026-12-31','Activa',NULL),(33,'CON-033','2026-05-17 09:52:47','Titular33','2026-12-31','Activa',NULL),(34,'CON-034','2026-05-17 09:52:47','Titular34','2026-12-31','Vencida',NULL),(35,'CON-035','2026-05-17 09:52:47','Titular35','2026-12-31','Activa',NULL),(36,'CON-036','2026-05-17 09:52:47','Titular36','2026-12-31','Activa',NULL),(37,'CON-037','2026-05-17 09:52:47','Titular37','2026-12-31','Suspendida',NULL),(38,'CON-038','2026-05-17 09:52:47','Titular38','2026-12-31','Activa',NULL),(39,'CON-039','2026-05-17 09:52:47','Titular39','2026-12-31','Activa',NULL),(40,'CON-040','2026-05-17 09:52:47','Titular40','2026-12-31','Activa',NULL),(41,'CON-041','2026-05-17 09:52:47','Titular41','2026-12-31','Activa',NULL),(42,'CON-042','2026-05-17 09:52:47','Titular42','2026-12-31','Activa',NULL),(43,'CON-043','2026-05-17 09:52:47','Titular43','2026-12-31','Activa',NULL),(44,'CON-044','2026-05-17 09:52:47','Titular44','2026-12-31','Vencida',NULL),(45,'CON-045','2026-05-17 09:52:47','Titular45','2026-12-31','Activa',NULL),(46,'CON-046','2026-05-17 09:52:47','Titular46','2026-12-31','Activa',NULL),(47,'CON-047','2026-05-17 09:52:47','Titular47','2026-12-31','Activa',NULL),(48,'CON-048','2026-05-17 09:52:47','Titular48','2026-12-31','Suspendida',NULL),(49,'CON-049','2026-05-17 09:52:47','Titular49','2026-12-31','Activa',NULL),(50,'CON-050','2026-05-17 09:52:47','Titular50','2026-12-31','Activa',NULL),(51,'AW1','2026-05-17 09:52:47','MOISES REBOLLEDO','2026-05-16','INACTIVO','TAXI'),(53,'AW2','2026-05-17 12:38:04','MOISES REBOLLEDO','2026-05-17','INACTIVO','ACTIVO'),(54,'AW3','2026-05-17 12:41:57','MOISES REBOLLEDO','2026-05-17','ACTIVO','Urbano'),(55,'AW9','2026-05-17 12:43:45','MOISES ISRAEL','2026-05-17','ACTIVO','COLECTIVO'),(56,'AW5','2026-05-17 13:38:15','MOISES REBOLLEDO','2026-05-15','ACTIVO','TAXI'),(57,'AW2','2026-05-17 13:40:25','MOISES REBOLLEDO','2026-05-17','ACTIVO','TAXI'),(58,'AW10','2026-05-18 11:18:25','MOISES REBOLLEDO','2026-05-18','ACTIVO','TAXI'),(59,'','2026-07-05 13:03:39','','2026-07-05','INACTIVO','TAXI'),(60,'123','2026-07-05 13:50:51','DANIEL','2026-07-03','ACTIVO','TAXI');
/*!40000 ALTER TABLE `Concesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Documento`
--

DROP TABLE IF EXISTS `Documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Documento` (
  `id_documento` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  `ruta_archivo` varchar(255) DEFAULT NULL,
  `fecha_subida` date DEFAULT NULL,
  `id_concesion` int DEFAULT NULL,
  `id_vehiculo` int DEFAULT NULL,
  `id_operador` int DEFAULT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `id_concesion` (`id_concesion`),
  KEY `id_vehiculo` (`id_vehiculo`),
  KEY `id_operador` (`id_operador`),
  CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`id_concesion`) REFERENCES `Concesion` (`id_concesion`),
  CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `Vehiculo` (`id_vehiculo`),
  CONSTRAINT `documento_ibfk_3` FOREIGN KEY (`id_operador`) REFERENCES `Operador` (`id_operador`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Documento`
--

LOCK TABLES `Documento` WRITE;
/*!40000 ALTER TABLE `Documento` DISABLE KEYS */;
INSERT INTO `Documento` VALUES (51,'PDF','/docs/doc1.pdf','2026-01-01',1,1,1),(52,'PDF','/docs/doc2.pdf','2026-01-02',2,2,2),(53,'PDF','/docs/doc3.pdf','2026-01-03',3,3,3),(54,'PDF','/docs/doc4.pdf','2026-01-04',4,4,4),(55,'PDF','/docs/doc5.pdf','2026-01-05',5,5,5),(56,'PDF','/docs/doc6.pdf','2026-01-06',6,6,6),(57,'PDF','/docs/doc7.pdf','2026-01-07',7,7,7),(58,'PDF','/docs/doc8.pdf','2026-01-08',8,8,8),(59,'PDF','/docs/doc9.pdf','2026-01-09',9,9,9),(60,'PDF','/docs/doc10.pdf','2026-01-10',10,10,10),(111,'PDF','/docs/doc1.pdf','2026-01-01',1,1,1),(112,'PDF','/docs/doc2.pdf','2026-01-02',2,2,2),(113,'PDF','/docs/doc3.pdf','2026-01-03',3,3,3),(114,'PDF','/docs/doc4.pdf','2026-01-04',4,4,4),(115,'PDF','/docs/doc5.pdf','2026-01-05',5,5,5),(116,'PDF','/docs/doc6.pdf','2026-01-06',6,6,6),(117,'PDF','/docs/doc7.pdf','2026-01-07',7,7,7),(118,'PDF','/docs/doc8.pdf','2026-01-08',8,8,8),(119,'PDF','/docs/doc9.pdf','2026-01-09',9,9,9),(120,'PDF','/docs/doc10.pdf','2026-01-10',10,10,10);
/*!40000 ALTER TABLE `Documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Expediente`
--

DROP TABLE IF EXISTS `Expediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Expediente` (
  `id_expediente` int NOT NULL AUTO_INCREMENT,
  `fk_usuario` int DEFAULT NULL,
  `fk_tramite` int NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_expediente`),
  KEY `fk_tramite` (`fk_tramite`),
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`fk_tramite`) REFERENCES `Tramite` (`id_tramite`),
  CONSTRAINT `expediente_ibfk_2` FOREIGN KEY (`fk_usuario`) REFERENCES `Usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Expediente`
--

LOCK TABLES `Expediente` WRITE;
/*!40000 ALTER TABLE `Expediente` DISABLE KEYS */;
/*!40000 ALTER TABLE `Expediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Infraccion`
--

DROP TABLE IF EXISTS `Infraccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Infraccion` (
  `id_infraccion` int NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `fecha` date DEFAULT NULL,
  `id_inspeccion` int DEFAULT NULL,
  PRIMARY KEY (`id_infraccion`),
  KEY `id_inspeccion` (`id_inspeccion`),
  CONSTRAINT `infraccion_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `Inspeccion` (`id_inspeccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Infraccion`
--

LOCK TABLES `Infraccion` WRITE;
/*!40000 ALTER TABLE `Infraccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `Infraccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Inspeccion`
--

DROP TABLE IF EXISTS `Inspeccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Inspeccion` (
  `id_inspeccion` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `resultado` varchar(50) DEFAULT NULL,
  `id_vehiculo` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_inspeccion`),
  KEY `id_usuario` (`id_usuario`),
  KEY `idx_inspeccion_vehiculo` (`id_vehiculo`),
  CONSTRAINT `inspeccion_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `Vehiculo` (`id_vehiculo`),
  CONSTRAINT `inspeccion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inspeccion`
--

LOCK TABLES `Inspeccion` WRITE;
/*!40000 ALTER TABLE `Inspeccion` DISABLE KEYS */;
INSERT INTO `Inspeccion` VALUES (61,'2026-01-01','Aprobado',1,1),(62,'2026-01-02','Rechazado',2,1),(63,'2026-01-03','Aprobado',3,1),(64,'2026-01-04','Aprobado',4,1),(65,'2026-01-05','Rechazado',5,1),(66,'2026-01-06','Aprobado',6,1),(67,'2026-01-07','Aprobado',7,1),(68,'2026-01-08','Aprobado',8,1),(69,'2026-01-09','Rechazado',9,1),(70,'2026-01-10','Aprobado',10,1),(71,'2026-01-11','Aprobado',11,1),(72,'2026-01-12','Aprobado',12,1),(73,'2026-01-13','Rechazado',13,1),(74,'2026-01-14','Aprobado',14,1),(75,'2026-01-15','Aprobado',15,1),(76,'2026-01-16','Aprobado',16,1),(77,'2026-01-17','Rechazado',17,1),(78,'2026-01-18','Aprobado',18,1),(79,'2026-01-19','Aprobado',19,1),(80,'2026-01-20','Aprobado',20,1),(81,'2026-01-21','Rechazado',21,1),(82,'2026-01-22','Aprobado',22,1),(83,'2026-01-23','Aprobado',23,1),(84,'2026-01-24','Aprobado',24,1),(85,'2026-01-25','Rechazado',25,1),(86,'2026-01-26','Aprobado',26,1),(87,'2026-01-27','Aprobado',27,1),(88,'2026-01-28','Aprobado',28,1),(89,'2026-01-29','Rechazado',29,1),(90,'2026-01-30','Aprobado',30,1),(91,'2026-01-31','Aprobado',31,1),(92,'2026-02-01','Aprobado',32,1),(93,'2026-02-02','Rechazado',33,1),(94,'2026-02-03','Aprobado',34,1),(95,'2026-02-04','Aprobado',35,1),(96,'2026-02-05','Aprobado',36,1),(97,'2026-02-06','Rechazado',37,1),(98,'2026-02-07','Aprobado',38,1),(99,'2026-02-08','Aprobado',39,1),(100,'2026-02-09','Aprobado',40,1),(101,'2026-02-10','Rechazado',41,1),(102,'2026-02-11','Aprobado',42,1),(103,'2026-02-12','Aprobado',43,1),(104,'2026-02-13','Aprobado',44,1),(105,'2026-02-14','Rechazado',45,1);
/*!40000 ALTER TABLE `Inspeccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Operador`
--

DROP TABLE IF EXISTS `Operador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Operador` (
  `id_operador` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `licencia` varchar(50) DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  `id_concesion` int DEFAULT NULL,
  `id_vehiculo` int DEFAULT NULL,
  PRIMARY KEY (`id_operador`),
  KEY `id_concesion` (`id_concesion`),
  KEY `id_vehiculo` (`id_vehiculo`),
  CONSTRAINT `operador_ibfk_1` FOREIGN KEY (`id_concesion`) REFERENCES `Concesion` (`id_concesion`),
  CONSTRAINT `operador_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `Vehiculo` (`id_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Operador`
--

LOCK TABLES `Operador` WRITE;
/*!40000 ALTER TABLE `Operador` DISABLE KEYS */;
INSERT INTO `Operador` VALUES (1,'Operador1','LIC001','Inactivo',1,1),(2,'Operador2','LIC002','Activo',2,2),(3,'Operador3','LIC003','Activo',3,3),(4,'Operador4','LIC004','Activo',4,4),(5,'Operador5','LIC005','Activo',5,5),(6,'Operador6','LIC006','Activo',6,6),(7,'Operador7','LIC007','Activo',7,7),(8,'Operador8','LIC008','Activo',8,8),(9,'Operador9','LIC009','Activo',9,9),(10,'Operador10','LIC010','Activo',10,10),(11,'Juan Carlos Méndez López','CAM-LIC-001','Activo',1,1),(12,'María Fernanda Castillo Pérez','CAM-LIC-002','Activo',1,1),(13,'José Antonio Reyes Gómez','CAM-LIC-003','Activo',1,1),(14,'Luis Alberto Chan Pech','CAM-LIC-004','Activo',2,2),(15,'Ana Gabriela Hernández Tun','CAM-LIC-005','Activo',2,2),(16,'Ricardo Manuel Cahuich Pool','CAM-LIC-006','Activo',2,2),(17,'Carmen Beatriz López Uc','CAM-LIC-007','Activo',3,3),(18,'Pedro Emilio Sánchez Can','CAM-LIC-008','Activo',3,3),(19,'Daniela Guadalupe Poot Chi','CAM-LIC-009','Activo',4,4),(20,'Miguel Ángel May Hau','CAM-LIC-010','Activo',1,1),(21,'MOISES ISRAEL','LICCAMP9901','Activo',55,52),(22,'Daniel','878','Activo',55,49);
/*!40000 ALTER TABLE `Operador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rol`
--

DROP TABLE IF EXISTS `Rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Rol` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rol`
--

LOCK TABLES `Rol` WRITE;
/*!40000 ALTER TABLE `Rol` DISABLE KEYS */;
INSERT INTO `Rol` VALUES (1,'Administrador'),(2,'Supervisor'),(3,'Inspector'),(4,'Operador'),(5,'Consulta'),(6,'Auditor'),(7,'Capturista'),(8,'Invitado'),(9,'Gestor'),(10,'Analista');
/*!40000 ALTER TABLE `Rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tramite`
--

DROP TABLE IF EXISTS `Tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Tramite` (
  `id_tramite` int NOT NULL AUTO_INCREMENT,
  `nombre_tramite` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tramite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tramite`
--

LOCK TABLES `Tramite` WRITE;
/*!40000 ALTER TABLE `Tramite` DISABLE KEYS */;
/*!40000 ALTER TABLE `Tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_rol` int DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `Rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'moises.rebolledo','moises.rebolledo@gmail.com','ClaveAcceso82?',1),(2,'usuario.inspector','inspector@gmail.com','inspector2026',3);
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vehiculo`
--

DROP TABLE IF EXISTS `Vehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Vehiculo` (
  `id_vehiculo` int NOT NULL AUTO_INCREMENT,
  `placa` varchar(20) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  `id_concesion` int DEFAULT NULL,
  PRIMARY KEY (`id_vehiculo`),
  KEY `id_concesion` (`id_concesion`),
  CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_concesion`) REFERENCES `Concesion` (`id_concesion`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vehiculo`
--

LOCK TABLES `Vehiculo` WRITE;
/*!40000 ALTER TABLE `Vehiculo` DISABLE KEYS */;
INSERT INTO `Vehiculo` VALUES (1,'ABC001','Nissan','Versa','Inactivo',1),(2,'ABC002','Toyota','Corolla','Inactivo',2),(3,'ABC003','Chevrolet','Aveo','Inactivo',3),(4,'ABC004','Ford','Focus','Activo',4),(5,'ABC005','Kia','Rio','Activo',5),(6,'ABC006','Mazda','3','Activo',6),(7,'ABC007','Honda','Civic','Activo',7),(8,'ABC008','Hyundai','Elantra','Activo',8),(9,'ABC009','Volkswagen','Jetta','Activo',9),(10,'ABC010','Nissan','Sentra','Activo',10),(11,'ABC011','Toyota','Yaris','Activo',11),(12,'ABC012','Chevrolet','Onix','Activo',12),(13,'ABC013','Ford','Fiesta','Activo',13),(14,'ABC014','Kia','Forte','Activo',14),(15,'ABC015','Mazda','2','Activo',15),(16,'ABC016','Honda','City','Activo',16),(17,'ABC017','Hyundai','Accent','Activo',17),(18,'ABC018','Volkswagen','Vento','Activo',18),(19,'ABC019','Nissan','March','Activo',19),(20,'ABC020','Toyota','Prius','Activo',20),(21,'ABC021','Chevrolet','Spark','Activo',21),(22,'ABC022','Ford','Ka','Activo',22),(23,'ABC023','Kia','Soul','Activo',23),(24,'ABC024','Mazda','CX-3','Activo',24),(25,'ABC025','Honda','HR-V','Activo',25),(26,'ABC026','Hyundai','Tucson','Activo',26),(27,'ABC027','Volkswagen','Tiguan','Activo',27),(28,'ABC028','Nissan','X-Trail','Activo',28),(29,'ABC029','Toyota','RAV4','Activo',29),(30,'ABC030','Chevrolet','Tracker','Activo',30),(31,'ABC031','Ford','Escape','Activo',31),(32,'ABC032','Kia','Sportage','Activo',32),(33,'ABC033','Mazda','CX-5','Activo',33),(34,'ABC034','Honda','CR-V','Activo',34),(35,'ABC035','Hyundai','Santa Fe','Activo',35),(36,'ABC036','Volkswagen','Taos','Activo',36),(37,'ABC037','Nissan','Kicks','Activo',37),(38,'ABC038','Toyota','Hilux','Activo',38),(39,'ABC039','Chevrolet','S10','Activo',39),(40,'ABC040','Ford','Ranger','Activo',40),(41,'ABC041','Kia','Sorento','Activo',41),(42,'ABC042','Mazda','BT-50','Activo',42),(43,'ABC043','Honda','Pilot','Activo',43),(44,'ABC044','Hyundai','Creta','Activo',44),(45,'ABC045','Volkswagen','Amarok','Activo',45),(46,'ABC046','Nissan','Frontier','Activo',46),(47,'ABC047','Toyota','Tacoma','Activo',47),(48,'ABC048','Chevrolet','Colorado','Activo',48),(49,'ABC049','Ford','Lobo','Activo',55),(50,'ABC050','Kia','Seltos','Activo',55),(51,'DXMZ99','BYD','2026','Inactivo',55),(52,'DXMZ199','TOYOTA','PRIUS','Inactivo',55),(53,'DXMZ99989','TOYOTA','RAV4','Activo',54),(54,'DXMZ9998901','FORD','2026','Inactivo',56),(55,'DXMZ9901','TOYOTA','PRIUS','Inactivo',55),(56,'dog-cf455','jetta','90','Activo',54);
/*!40000 ALTER TABLE `Vehiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogo_conceptos_inspeccion`
--

DROP TABLE IF EXISTS `catalogo_conceptos_inspeccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogo_conceptos_inspeccion` (
  `id_concepto` int NOT NULL AUTO_INCREMENT,
  `concepto` varchar(100) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_concepto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo_conceptos_inspeccion`
--

LOCK TABLES `catalogo_conceptos_inspeccion` WRITE;
/*!40000 ALTER TABLE `catalogo_conceptos_inspeccion` DISABLE KEYS */;
INSERT INTO `catalogo_conceptos_inspeccion` VALUES (1,'Carrocería',1),(2,'Luces',1),(3,'Llantas',1),(4,'Frenos',1),(5,'Espejos',1),(6,'Asientos',1),(7,'Extintor',1),(8,'Botiquín',1),(9,'Señalización',1),(10,'Accesibilidad',1);
/*!40000 ALTER TABLE `catalogo_conceptos_inspeccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogo_infracciones`
--

DROP TABLE IF EXISTS `catalogo_infracciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogo_infracciones` (
  `id_infraccion` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto` decimal(12,2) NOT NULL DEFAULT '0.00',
  `gravedad` enum('LEVE','MEDIA','GRAVE','MUY_GRAVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fundamento_legal` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_infraccion`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo_infracciones`
--

LOCK TABLES `catalogo_infracciones` WRITE;
/*!40000 ALTER TABLE `catalogo_infracciones` DISABLE KEYS */;
INSERT INTO `catalogo_infracciones` VALUES (1,'INF-001','Falta de póliza de seguro vigente',3500.00,'GRAVE',1,'2026-06-15 22:57:48','Ley de Movilidad del Estado de Campeche,\nArtículo 152 Fracción III'),(2,'INF-002','Licencia de conducir vencida',2500.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(3,'INF-003','Tarjeta de circulación vencida',1800.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(4,'INF-004','Concesión vencida',5000.00,'MUY_GRAVE',1,'2026-06-15 22:57:48',NULL),(5,'INF-005','Permiso de ruta no vigente',3000.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(6,'INF-006','Exceso de pasajeros',2200.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(7,'INF-007','Unidad en malas condiciones mecánicas',4500.00,'MUY_GRAVE',1,'2026-06-15 22:57:48',NULL),(8,'INF-008','Llantas en mal estado',2000.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(9,'INF-009','Frenos en mal estado',5000.00,'MUY_GRAVE',1,'2026-06-15 22:57:48',NULL),(10,'INF-010','Falta de extintor',1200.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(11,'INF-011','Falta de botiquín de primeros auxilios',1000.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(12,'INF-012','Luces en mal estado',1500.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(13,'INF-013','Falta de señalización obligatoria',1200.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(14,'INF-014','Cristales polarizados no autorizados',1800.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(15,'INF-015','No portar identificación del operador',800.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(16,'INF-016','Negativa a proporcionar documentación',3500.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(17,'INF-017','Operar fuera de la ruta autorizada',4000.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(18,'INF-018','Cobro de tarifa no autorizada',2500.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(19,'INF-019','Ascenso o descenso en lugares prohibidos',1800.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(20,'INF-020','No respetar la capacidad autorizada de la unidad',2500.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(21,'INF-021','Falta de accesibilidad para personas con discapacidad',2200.00,'MEDIA',1,'2026-06-15 22:57:48',NULL),(22,'INF-022','No exhibir tarifas autorizadas',1200.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(23,'INF-023','No portar uniforme o gafete oficial',1000.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(24,'INF-024','Abandono del servicio sin causa justificada',3000.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(25,'INF-025','Conducir bajo efectos del alcohol o sustancias prohibidas',10000.00,'MUY_GRAVE',1,'2026-06-15 22:57:48',NULL),(26,'INF-026','Conducir utilizando teléfono celular',2500.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(27,'INF-027','Circular con placas no visibles o alteradas',3500.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(28,'INF-028','No atender requerimientos de inspección',4000.00,'GRAVE',1,'2026-06-15 22:57:48',NULL),(29,'INF-029','Unidad sin número económico visible',1000.00,'LEVE',1,'2026-06-15 22:57:48',NULL),(30,'INF-030','Reincidencia en infracciones administrativas',6000.00,'MUY_GRAVE',1,'2026-06-15 22:57:48',NULL);
/*!40000 ALTER TABLE `catalogo_infracciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogo_tipos_inspeccion`
--

DROP TABLE IF EXISTS `catalogo_tipos_inspeccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogo_tipos_inspeccion` (
  `id_tipo_inspeccion` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tipo_inspeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo_tipos_inspeccion`
--

LOCK TABLES `catalogo_tipos_inspeccion` WRITE;
/*!40000 ALTER TABLE `catalogo_tipos_inspeccion` DISABLE KEYS */;
INSERT INTO `catalogo_tipos_inspeccion` VALUES (1,'Ordinaria','Inspección programada de manera periódica',1,'2026-06-15 22:47:13'),(2,'Extraordinaria','Inspección realizada por situaciones especiales o emergentes',1,'2026-06-15 22:47:13'),(3,'Seguimiento','Inspección para verificar el cumplimiento de observaciones previas',1,'2026-06-15 22:47:13'),(4,'Queja Ciudadana','Inspección derivada de una denuncia o reporte ciudadano',1,'2026-06-15 22:47:13'),(5,'Operativo Especial','Inspección realizada dentro de operativos específicos de vigilancia',1,'2026-06-15 22:47:13');
/*!40000 ALTER TABLE `catalogo_tipos_inspeccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspeccion_acciones_correctivas`
--

DROP TABLE IF EXISTS `inspeccion_acciones_correctivas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspeccion_acciones_correctivas` (
  `id_accion` int NOT NULL AUTO_INCREMENT,
  `id_inspeccion` int NOT NULL,
  `accion_requerida` text NOT NULL,
  `fecha_limite` date DEFAULT NULL,
  `responsable` varchar(200) DEFAULT NULL,
  `estatus` enum('PENDIENTE','EN_PROCESO','ATENDIDA') DEFAULT 'PENDIENTE',
  `fecha_atencion` date DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id_accion`),
  KEY `id_inspeccion` (`id_inspeccion`),
  CONSTRAINT `inspeccion_acciones_correctivas_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `inspecciones` (`id_inspeccion`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspeccion_acciones_correctivas`
--

LOCK TABLES `inspeccion_acciones_correctivas` WRITE;
/*!40000 ALTER TABLE `inspeccion_acciones_correctivas` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspeccion_acciones_correctivas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspeccion_evidencias`
--

DROP TABLE IF EXISTS `inspeccion_evidencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspeccion_evidencias` (
  `id_evidencia` int NOT NULL AUTO_INCREMENT,
  `id_inspeccion` int NOT NULL,
  `tipo` enum('FRONTAL','TRASERA','LATERAL_IZQUIERDA','LATERAL_DERECHA','INCIDENCIA','OTRA') DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL,
  `ruta_archivo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `fecha_subida` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_evidencia`),
  KEY `id_inspeccion` (`id_inspeccion`),
  CONSTRAINT `inspeccion_evidencias_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `inspecciones` (`id_inspeccion`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspeccion_evidencias`
--

LOCK TABLES `inspeccion_evidencias` WRITE;
/*!40000 ALTER TABLE `inspeccion_evidencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspeccion_evidencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspeccion_hallazgos`
--

DROP TABLE IF EXISTS `inspeccion_hallazgos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspeccion_hallazgos` (
  `id_hallazgo` int NOT NULL AUTO_INCREMENT,
  `id_inspeccion` int NOT NULL,
  `concepto` varchar(200) DEFAULT NULL,
  `resultado` enum('CUMPLE','NO_CUMPLE') DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`id_hallazgo`),
  KEY `id_inspeccion` (`id_inspeccion`),
  CONSTRAINT `inspeccion_hallazgos_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `inspecciones` (`id_inspeccion`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspeccion_hallazgos`
--

LOCK TABLES `inspeccion_hallazgos` WRITE;
/*!40000 ALTER TABLE `inspeccion_hallazgos` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspeccion_hallazgos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspeccion_infracciones`
--

DROP TABLE IF EXISTS `inspeccion_infracciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspeccion_infracciones` (
  `id_inspeccion_infraccion` int NOT NULL AUTO_INCREMENT,
  `id_inspeccion` int NOT NULL,
  `id_infraccion` int NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id_inspeccion_infraccion`),
  KEY `id_inspeccion` (`id_inspeccion`),
  KEY `id_infraccion` (`id_infraccion`),
  CONSTRAINT `inspeccion_infracciones_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `inspecciones` (`id_inspeccion`) ON DELETE CASCADE,
  CONSTRAINT `inspeccion_infracciones_ibfk_2` FOREIGN KEY (`id_infraccion`) REFERENCES `catalogo_infracciones` (`id_infraccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspeccion_infracciones`
--

LOCK TABLES `inspeccion_infracciones` WRITE;
/*!40000 ALTER TABLE `inspeccion_infracciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspeccion_infracciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspeccion_verificacion_documental`
--

DROP TABLE IF EXISTS `inspeccion_verificacion_documental`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspeccion_verificacion_documental` (
  `id_verificacion_documental` int NOT NULL AUTO_INCREMENT,
  `id_inspeccion` int NOT NULL,
  `tarjeta_circulacion_vigente` tinyint(1) DEFAULT '0',
  `concesion_vigente` tinyint(1) DEFAULT '0',
  `licencia_operador_vigente` tinyint(1) DEFAULT '0',
  `seguro_vigente` tinyint(1) DEFAULT '0',
  `verificacion_vehicular` tinyint(1) DEFAULT '0',
  `permiso_ruta` tinyint(1) DEFAULT '0',
  `observaciones` text,
  PRIMARY KEY (`id_verificacion_documental`),
  KEY `id_inspeccion` (`id_inspeccion`),
  CONSTRAINT `inspeccion_verificacion_documental_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `inspecciones` (`id_inspeccion`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspeccion_verificacion_documental`
--

LOCK TABLES `inspeccion_verificacion_documental` WRITE;
/*!40000 ALTER TABLE `inspeccion_verificacion_documental` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspeccion_verificacion_documental` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspeccion_verificacion_fisica`
--

DROP TABLE IF EXISTS `inspeccion_verificacion_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspeccion_verificacion_fisica` (
  `id_verificacion_fisica` int NOT NULL AUTO_INCREMENT,
  `id_inspeccion` int NOT NULL,
  `concepto` enum('CARROCERIA','LUCES','LLANTAS','FRENOS','ESPEJOS','ASIENTOS','EXTINTOR','BOTIQUIN','SENALIZACION','ACCESIBILIDAD') DEFAULT NULL,
  `resultado` enum('CUMPLE','NO_CUMPLE') DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id_verificacion_fisica`),
  KEY `id_inspeccion` (`id_inspeccion`),
  CONSTRAINT `inspeccion_verificacion_fisica_ibfk_1` FOREIGN KEY (`id_inspeccion`) REFERENCES `inspecciones` (`id_inspeccion`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspeccion_verificacion_fisica`
--

LOCK TABLES `inspeccion_verificacion_fisica` WRITE;
/*!40000 ALTER TABLE `inspeccion_verificacion_fisica` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspeccion_verificacion_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspecciones`
--

DROP TABLE IF EXISTS `inspecciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspecciones` (
  `id_inspeccion` int NOT NULL AUTO_INCREMENT,
  `folio` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_inspector` int NOT NULL,
  `id_tipo_inspeccion` int NOT NULL,
  `id_unidad` int NOT NULL,
  `id_municipio` int DEFAULT NULL,
  `id_localidad` int DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `latitud` decimal(10,8) DEFAULT NULL,
  `longitud` decimal(11,8) DEFAULT NULL,
  `observaciones_generales` text,
  `dictamen` enum('APROBADO','APROBADO_CON_OBSERVACIONES','NO_APROBADO') DEFAULT NULL,
  `estatus` enum('ABIERTA','CERRADA') DEFAULT 'ABIERTA',
  `fecha_cierre` datetime DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_inspeccion`),
  UNIQUE KEY `folio` (`folio`),
  KEY `id_inspector` (`id_inspector`),
  KEY `id_tipo_inspeccion` (`id_tipo_inspeccion`),
  CONSTRAINT `inspecciones_ibfk_1` FOREIGN KEY (`id_inspector`) REFERENCES `Usuario` (`id_usuario`),
  CONSTRAINT `inspecciones_ibfk_2` FOREIGN KEY (`id_tipo_inspeccion`) REFERENCES `catalogo_tipos_inspeccion` (`id_tipo_inspeccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspecciones`
--

LOCK TABLES `inspecciones` WRITE;
/*!40000 ALTER TABLE `inspecciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspecciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `municipio` (
  `id_mpio` int NOT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_mpio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'Calkiní'),(2,'Campeche'),(3,'Carmen'),(4,'Champotón'),(5,'Hecelchakán'),(6,'Hopelchén'),(7,'Palizada'),(8,'Tenabo'),(9,'Escárcega'),(10,'Calakmul'),(11,'Candelaria'),(12,'Seybaplaya'),(13,'Dzitbalché');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-06  9:24:00
