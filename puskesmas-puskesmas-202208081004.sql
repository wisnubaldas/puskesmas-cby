-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: puskesmas
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `berobat`
--

DROP TABLE IF EXISTS `berobat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL AUTO_INCREMENT,
  `nik` bigint(20) NOT NULL,
  `nama_pasien_berobat` varchar(100) NOT NULL,
  `s` text NOT NULL,
  `o` text NOT NULL,
  `a` text NOT NULL,
  `p` text NOT NULL,
  `tgl_berobat` date NOT NULL,
  `jenis_pembayaran` text NOT NULL,
  `jenis_poli` varchar(100) NOT NULL,
  `diagnosa` text DEFAULT NULL,
  `hasil_lab` varchar(255) NOT NULL,
  `rujukan` varchar(100) DEFAULT NULL,
  `jenis_obat` text DEFAULT NULL,
  `pembayaran` int(40) DEFAULT NULL,
  PRIMARY KEY (`id_berobat`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berobat`
--

LOCK TABLES `berobat` WRITE;
/*!40000 ALTER TABLE `berobat` DISABLE KEYS */;
INSERT INTO `berobat` VALUES (6,111123123123,'Hendri Tri Putri','-','-','-','-','2022-07-05','Umum','KLinik Umum','','Ini_hanya_contoh.pdf','','',0),(16,1802130505620002,'tifaniayucahya','-','-','-','-','2022-07-26','BPJS','BP Gigi','-','-','Kuburan','Termoxox',10000),(20,123456780,'dadang juliansyah','-','-','-','-','2022-08-02','Umum','Klinik Gizi',NULL,'-',NULL,NULL,50000),(21,1802131502680001,'Siska aulia','-','-','-','-','2022-08-02','Umum','BP Gigi',NULL,'-',NULL,NULL,700000),(22,12345678,'Putri Jumanda','-','-','-','-','2022-08-02','Umum','Klinik Umum',NULL,'-',NULL,NULL,1300000),(23,1802130505620002,'salsabilla','-','-','-','-','2022-08-03','Umum','Klinik Umum',NULL,'-',NULL,NULL,12349000),(24,111321321321,'Hendri Tri Putri','23','11','23','12','2022-08-17','BPJS','Rawat Inap',NULL,'-',NULL,NULL,NULL),(25,123,'wisnu','1','1','1','1','2022-08-08','BPJS','Klinik Gizi',NULL,'-',NULL,NULL,NULL);
/*!40000 ALTER TABLE `berobat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasien`
--

DROP TABLE IF EXISTS `pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` bigint(20) DEFAULT NULL,
  `nik` bigint(20) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `umur_pasien` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` int(200) DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tgl_lahir_pasien` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `no_bpjs` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasien`
--

LOCK TABLES `pasien` WRITE;
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` VALUES (8,111321321321,111123123123,'trihendri','intan','Hendri Tri Putri',23,'Pahoman',81369933,'Lampung','1999-06-01','Laki-laki',162,78,71923718236123),(14,52625251711862,1802130505620002,'Salsa','salsa','tifani ayu cahya salsabilla',22,'palembang',2147483647,'Lampung','2022-07-21','Perempuan',153,48,71923718236123),(19,1234143162356123,123456780,'dadang','dadang','dadang juliansyah',22,'banyuasin',2147483647,'banyu asin','2001-05-06','Laki-laki',170,45,0),(20,1802132505050656,18021315020001,'Siska','siska','Siska aulia',24,'',0,'Lampung','1996-09-09','Laki-laki',150,60,0),(21,1802132505050656,1802130505620002,'salsa','salsa','salsabilla',22,'lampung',2147483647,'palembang','2000-06-09','Perempuan',150,54,0),(22,123,123,'wisnubaldas','123','wisnu',12,'',0,'jakarta','2022-08-07','Laki-laki',12,21,0),(23,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(24,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(25,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(26,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(27,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(28,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(29,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(30,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(31,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(32,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(33,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(34,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(37,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(38,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(39,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0),(40,0,0,'','','',0,'',0,'','0000-00-00','Laki-laki',0,0,0);
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','admin'),(2,'poligigi','admingigi','gigi'),(3,'klinikumum','adminumum','umum'),(4,'klinikkia','adminkia','kia'),(5,'klinikgizi','admingizi','gizi');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'puskesmas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-08 10:04:58
