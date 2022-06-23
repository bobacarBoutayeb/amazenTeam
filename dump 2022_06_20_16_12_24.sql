-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: amazenlaravel
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'cat 1','la première catégorie'),(2,'cat 2','la deuxieme catégorie'),(3,'cat 3','la troisieme catégorie');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `zip_code` int(10) unsigned DEFAULT NULL,
  `city` varchar(58) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Chuck','Norris','lorem ipsum',18181,'Grenoble'),(2,'Charlize','Theron','lorem ipsum120230',19415,'Grenoble'),(3,'Ryan','Gosling','lorem ipsum lorem ipsum lorem ipsum',38100,'Grenoble');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2020_11_24_145812_init_playground',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `quantity` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`order_id`),
  KEY `fk_order_product_products1_idx` (`product_id`),
  KEY `fk_order_product_orders1_idx` (`order_id`),
  CONSTRAINT `fk_order_product_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_product_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,1,1),(1,7,3),(1,7,5),(2,8,4),(2,9,1),(2,14,2),(1,15,3),(1,16,5),(1,17,2),(1,18,4);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` char(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `total` int(10) unsigned DEFAULT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_customers1_idx` (`customer_id`),
  CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'00000001','2022-05-19 14:18:19',120,1),(2,'00000002','2022-05-15 14:27:18',600,1),(3,'00000003','2022-05-14 06:20:00',150,2),(4,'00000004','2022-05-13 23:34:21',520,2),(5,'00000005','2022-05-19 05:36:21',600,2),(6,'00000006','2022-05-19 15:37:32',300,1),(17,NULL,'2022-05-25 00:00:00',2730,2),(18,NULL,'2022-05-25 00:00:00',2730,2),(19,NULL,'2022-05-25 00:00:00',2730,2),(20,NULL,'2022-05-25 00:00:00',21000,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` mediumtext,
  `price` int(10) unsigned DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `weight` int(10) unsigned DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `available` tinyint(4) DEFAULT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_categories1_idx` (`categories_id`),
  CONSTRAINT `fk_products_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Cote de boeuf','lorem ipsum lorem ipsum',10550,NULL,1000,'http://www.maison-lascours.fr/Files/123193/Img/03/cote-de-boeuf-simmental-big.jpg',30,1,1),(7,'Chocolat','lorem ipsum lorem ipsum lorem ipsum',10500,NULL,1000,'https://www.chocolatleroux.com/611-full_default/tablettes-de-chocolat-noir.jpg',10,1,1),(8,'Oeuf','lorem ipsum lorem ipsum lorem ipsum',1000,NULL,500,'https://www.framboizeinthekitchen.com/wp-content/uploads/2018/04/oeufs.jpg',1,1,1),(9,'Fromage','lorem ipsum lorem ipsum',1000,NULL,500,'https://s3.ca-central-1.amazonaws.com/medias.fromagesdici.fabrique3.net/fromages/le-menestrel-02-4131.png',1,1,1),(10,'Salade','lorem ipsum',1000,NULL,500,'https://fr.rc-cdn.community.thermomix.com/recipeimage/2nc1g3lr-77de7-564089-cfcd2-b67ljhi0/0d0d5043-f22b-4b08-8d9c-2578e0802b37/main/salade-verte.jpg',1,0,1),(11,'Courgette','lorem ipsum lorem ipsum lorem ipsum',1000,NULL,500,'https://img-3.journaldesfemmes.fr/qCyan5Hu2LMbSGDay4UcNbFKvhs=/1500x/smart/a36d3c6e1273430d896ae8d3c2634531/ccmcms-jdf/24762747.jpg',1,0,1),(12,'Nourriture pour chien','miam miam',1300,NULL,500,'https://www.wanimo.com/veterinaire/wp-content/uploads/2016/10/images_articles_chien_moment-repas@2x.jpg',0,1,2),(13,'Nourriture pour chat','miam miam miam',1300,NULL,500,'https://www.zoobio.fr/blog/wp-content/uploads/sites/6/2017/02/chats-alimentation-humide-de-la-prise.jpeg',0,1,2),(14,'Nourriture pour poisson rouge','pas miam pas miam',5000,NULL,1200,'https://napoleon-storage.s3.eu-west-3.amazonaws.com/product-images/main/nourriture-poissons-rouges-jbl-novopearl-5aad4c01045b1.jpg',2,1,2),(15,'Nourriture pour tortue','miam miam miam miam miam',5000,NULL,1200,'https://www.enviesanimales.fr/img/cms/Page%20Guides%20&%20conseils/TT/Images%20fiches/alimentation/tortue%20mange%20interdit.jpg',2,1,2),(16,'Tondeuse à gazon','brrrrrrrrrrrrrrrrrrrrrrrrrrr',50000,NULL,1200,'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Tondeuse.png/1200px-Tondeuse.png',5,1,3),(17,'Motoculteur','dodododdododododo',50000,NULL,1200,'https://jardinage.lemonde.fr/images/dossiers/2017-11/motoculteur-093813.jpg',5,1,3),(18,'Trampoline','boing boing',50000,NULL,1200,'https://flyjump-trampoline.com/127-large_default/trampoline-400-cm.jpg',5,1,3),(19,'carottes','ca rend aimable',500,NULL,100,'https://upload.wikimedia.org/wikipedia/commons/b/b5/Carrots_on_Display.jpg',10,1,1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sql_playground_test`
--

DROP TABLE IF EXISTS `sql_playground_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sql_playground_test` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sql_playground_test`
--

LOCK TABLES `sql_playground_test` WRITE;
/*!40000 ALTER TABLE `sql_playground_test` DISABLE KEYS */;
INSERT INTO `sql_playground_test` VALUES (1,'Campus Numérique In The Alps',NULL,NULL);
/*!40000 ALTER TABLE `sql_playground_test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-20 16:12:24
