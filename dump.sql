-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: projet_film_lp
-- ------------------------------------------------------
-- Server version	5.5.58-0+deb8u1

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
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `datesortie` int(4) NOT NULL,
  `synopsis` varchar(10000) DEFAULT NULL,
  `note` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES (1,'Les Visiteurs',1993,'En 1123, pour avoir sauvé la vie du roi de France Louis VI, dit « le Gros », le comte Godefroy de Montmirail, dit « le Hardi », se voit promettre en épousailles Frénégonde de Pouille, la fillotte du duc Fulbert de Pouille. Alors que Godefroy fait route vers le château de sa promise, une sorcière lui fait absorber un breuvage à son insu. Ce dernier donne des hallucinations au comte, au point de lui faire assassiner, par erreur, son futur beau-père, qu\'il a pris pour un ours. Afin de réparer sa faute, Godefroy demande conseil au mage Eusæbius, qui lui concocte une potion afin de le renvoyer dans le passé, peu de temps avant le drame. Le mage ayant oublié un ingrédient indispensable à la préparation de la potion, Godefroy et son écuyer Jacquouille la Fripouille se retrouvent propulsés au XXe siècle, en 1992.',5),(2,'Les Petits câlins',1977,NULL,NULL),(3,'Retour en force',1980,NULL,NULL),(4,'Les Hommes préfèrent les grosses',1981,NULL,NULL),(5,'Le Père Noël est une ordure',1982,NULL,NULL),(6,'Papy fait de la résistance',1983,NULL,NULL),(7,'Twist again à Moscou',1986,NULL,NULL),(8,'Mes meilleurs copains',1988,NULL,NULL),(9,'L\'Opération Corned beef',1991,NULL,NULL),(10,'Les Visiteurs',1993,NULL,NULL),(11,'Les anges gardiens',1995,NULL,NULL),(12,'Panique au Plazza',1996,NULL,NULL),(13,'Les Visiteurs 2 : Les couloirs du temps',1998,NULL,NULL),(14,'Les Visiteurs en Amérique',2001,NULL,NULL),(15,'Ma femme... s\'appelle Maurice',2002,NULL,NULL),(16,'Les Visiteurs - La Révolution',2016,NULL,NULL);
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film_has_personne`
--

DROP TABLE IF EXISTS `film_has_personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_has_personne` (
  `id_film` int(11) NOT NULL DEFAULT '0',
  `id_personne` int(11) NOT NULL DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_film`,`id_personne`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `film_has_personne_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  CONSTRAINT `film_has_personne_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_has_personne`
--

LOCK TABLES `film_has_personne` WRITE;
/*!40000 ALTER TABLE `film_has_personne` DISABLE KEYS */;
INSERT INTO `film_has_personne` VALUES (1,1,'realisateur'),(1,2,'acteur'),(1,3,'acteur'),(1,4,'acteur'),(1,5,'acteur'),(2,1,'realisateur'),(3,1,'realisateur'),(4,1,'realisateur'),(5,1,'realisateur'),(6,1,'realisateur'),(7,1,'realisateur'),(8,1,'realisateur'),(9,1,'realisateur'),(10,1,'realisateur'),(11,1,'realisateur'),(12,1,'realisateur'),(13,1,'realisateur'),(14,1,'realisateur'),(15,1,'realisateur'),(16,1,'realisateur');
/*!40000 ALTER TABLE `film_has_personne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film_has_photo`
--

DROP TABLE IF EXISTS `film_has_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_has_photo` (
  `id_film` int(11) NOT NULL DEFAULT '0',
  `id_photo` int(11) NOT NULL DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_film`,`id_photo`),
  KEY `id_photo` (`id_photo`),
  CONSTRAINT `film_has_photo_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  CONSTRAINT `film_has_photo_ibfk_2` FOREIGN KEY (`id_photo`) REFERENCES `photo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_has_photo`
--

LOCK TABLES `film_has_photo` WRITE;
/*!40000 ALTER TABLE `film_has_photo` DISABLE KEYS */;
INSERT INTO `film_has_photo` VALUES (1,1,'affiche'),(1,2,'affiche'),(1,3,'affiche'),(1,4,'galerie'),(1,5,'galerie'),(1,6,'galerie'),(1,7,'galerie'),(1,8,'galerie');
/*!40000 ALTER TABLE `film_has_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `biographie` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (1,'Poiré','Jean-Marie','1945-07-10','Il débute comme photo­graphe, mais égale­ment comme cn­teur du grouThe Fren­chies. En 1968, il se tourne vers le cinéma en deve­nad’abord assis­tant-opéra­teur, puis scéna­riste pour Michel Audiard, avec notam­ Faut pas prendre les enfants duieu pour des canards sauvages et Elle boit pas, elle fume pas, elle drague pas, mais… elle cause?! Il colla­bore égale­menavec Robert Lamou­reux sur On a retrouvé la septième ca­gnie (1975), un film oduit par son père Alain Poiré. En 1977, Jean-Marie Poiré fait la rencontre de Josiane Balasko, et grâce à elle de toute l’équipe du Splen­did. Il adaptà l’écan leur pièce Le Père Noël est une ordure, qui devient un véri­table film culte t, quelques années plus tard, Papy fait de la Résis­tance, d’après la pièce de Cris­tian vier et Martin Lamotte. Avec Chris­tian Clavier, Jean-Marie Poiré to­nera une dizaine de films, parmi lesquels Les Visi­teurs et Les Anges gardiens,ui rencontrent un énorme suc. Les Visi­teurs affichent 13 millions d’en­tréesn 1993 et obtiennent trois nomi­na­tions aux César.'),(2,'Clavier','Christian','1952-05-06',NULL),(3,'Reno','Jean','1648-07-30',NULL),(4,'Chazel','Marie-Anne','1951-09-19',NULL),(5,'Lemercier','Valérie','1964-03-09',NULL);
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne_has_photo`
--

DROP TABLE IF EXISTS `personne_has_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne_has_photo` (
  `id_personne` int(11) NOT NULL DEFAULT '0',
  `id_photo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_personne`,`id_photo`),
  KEY `id_photo` (`id_photo`),
  CONSTRAINT `personne_has_photo_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`),
  CONSTRAINT `personne_has_photo_ibfk_2` FOREIGN KEY (`id_photo`) REFERENCES `photo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne_has_photo`
--

LOCK TABLES `personne_has_photo` WRITE;
/*!40000 ALTER TABLE `personne_has_photo` DISABLE KEYS */;
INSERT INTO `personne_has_photo` VALUES (1,4),(2,5),(3,6),(4,7),(5,8);
/*!40000 ALTER TABLE `personne_has_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) DEFAULT NULL,
  `legende` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (1,'./img1.jpg','Premiere photo'),(2,'./img2.jpg','Seconde photo'),(3,'./img3.jpg','4L Sarrasins'),(4,'./auteur.jpg','Jean-Marie Poiré'),(5,'./acteur1.jpg','Christian Clavier'),(6,'./acteur2.jpg','Jean Reno'),(7,'./acteur3.JPG','Marie-Anne Chazel'),(8,'./acteur4.jpg','Valérie Lemercier');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-13  9:33:45
