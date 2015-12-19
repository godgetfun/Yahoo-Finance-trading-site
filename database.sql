
USE pset7;
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(10) unsigned NOT NULL,
  `transaction` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `symbol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) unsigned NOT NULL,
  `price` decimal(64,5) unsigned NOT NULL DEFAULT '0.00000',
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (6,'BUY','2014-06-26 02:55:01','AAPL',5,90.36000),(6,'SELL','2014-06-26 02:58:00','AAPL',5,90.36000),(6,'SELL','2014-06-26 04:05:55','FB',200,67.44000),(6,'SELL','2014-06-26 04:06:20','MSFT',10,42.03000);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;


DROP TABLE IF EXISTS `portfolios`;

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `symbol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) NOT NULL,
  PRIMARY KEY (`id`,`symbol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;


LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;


DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash` decimal(64,5) unsigned NOT NULL DEFAULT '0.00000',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'caesar','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(2,'hirschhorn','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(3,'jharvard','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(4,'malan','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(5,'milo','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(6,'skroob','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(7,'zamyla','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000),(23,'gharshit11','$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/',10000.00000);
UNLOCK TABLES;

