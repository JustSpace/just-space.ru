-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: litespace
-- ------------------------------------------------------
-- Server version 	5.7.17
-- Date: Mon, 16 Jan 2017 20:54:21 +0300

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
-- Table structure for table `ls_emails`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `site` varchar(50) DEFAULT NULL,
  `availability_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=414 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_emails`
--

LOCK TABLES `ls_emails` WRITE;
/*!40000 ALTER TABLE `ls_emails` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ls_emails` VALUES (1,'versal77@inbox.ru',NULL,NULL),(2,'info@vashstile.ru',NULL,NULL),(3,'kalina@vallexm.ru',NULL,NULL),(4,'anikinairina@mail.ru',NULL,NULL),(5,'trishkin-salon@mail.ru',NULL,NULL),(6,'info@topnailsstudio.ru',NULL,NULL),(7,'salonspice.ru@gmail.com',NULL,NULL),(9,'sivilla-info@yandex.ru',NULL,NULL),(10,'info@salonsona.ru',NULL,NULL),(11,'info@salonparis.ru',NULL,NULL),(12,'info@laesto.ru',NULL,NULL),(13,'salonolga1@yandex.ru',NULL,NULL),(14,'poluakovakarina@bk.ru',NULL,NULL),(16,'info@relax-thai.ru',NULL,NULL),(17,'priyatnoesvidanie@gmail.com',NULL,NULL),(18,'andrewkot@mail.ru',NULL,NULL),(19,'aishatik555@mail.ru',NULL,NULL),(20,'modnycontrol@yandex.ru',NULL,NULL),(22,'info@massimotinelli.ru',NULL,NULL),(23,'masterskayaMG@gmail.ru',NULL,NULL),(24,'magiakrasoty@mail.ru',NULL,NULL),(25,'info@lukss.ru',NULL,NULL),(26,'support@beget.ru',NULL,NULL),(27,'info@levita-med.ru',NULL,NULL),(28,'laviolette2012@mail.ru',NULL,NULL),(29,'info@laser-tag.su',NULL,NULL),(30,'info@lasalute.ru',NULL,NULL),(31,'info@la-digue.ru',NULL,NULL),(32,'kamial@mail.ru',NULL,NULL),(33,'ivan-art@inbox.ru',NULL,NULL),(34,'salon.elegant@gmail.com',NULL,NULL),(36,'kolesnik.angelina@mail.ru',NULL,NULL),(37,'figarocenter@mail.ru',NULL,NULL),(38,'admfendrybar2@mail.ru',NULL,NULL),(39,'salon@empire-of-beauty.ru',NULL,NULL),(40,'salonelenaevald@mail.ru',NULL,NULL),(41,'egoist_ka08@mail.ru',NULL,NULL),(42,'info@eelos.ru',NULL,NULL),(43,'info@edelveispro-salon.ru',NULL,NULL),(44,'info@chuvstvo-stilyamail.ru',NULL,NULL),(45,'bkprince@mail.ru',NULL,NULL),(47,'salon@beautick.ru',NULL,NULL),(48,'babor@yandex.ru',NULL,NULL),(49,'rovnayaelena@mail.ru',NULL,NULL),(50,'altissimo@list.ru',NULL,NULL),(51,'zolotoylotos2012@mail.ru',NULL,NULL),(52,'info@w-street.ru',NULL,NULL),(53,'skviel@mail.ru',NULL,NULL),(54,'sk-modus@mail.ru',NULL,NULL),(55,'inbox@sheislucky.ru',NULL,NULL),(56,'vildfeona07@mail.ru',NULL,NULL),(57,'infosalon21@mail.ru',NULL,NULL),(58,'salon-uma@rambler.ru',NULL,NULL),(59,'vimacuk@yandex.ru',NULL,NULL),(60,'granat.fest@gmail.com',NULL,NULL),(61,'info@salon-arteast.ru',NULL,NULL),(62,'robiar2013@gmail.com',NULL,NULL),(63,'lsukhareva@yandex.ru',NULL,NULL),(64,'nata-shashina@yandex.ru',NULL,NULL),(65,'allaoganova@mail.ru',NULL,NULL),(66,'info@kazarma.ru',NULL,NULL),(67,'katemagic-studio@yandex.ru',NULL,NULL),(68,'andr.bis@yandex.ru',NULL,NULL),(69,'alisha.fesht@mail.ru',NULL,NULL),(70,'partners@real-quest.ru',NULL,NULL),(71,'prostokvest@gmail.com',NULL,NULL),(72,'podzemkakvest@mail.ru',NULL,NULL),(73,'special33@mail.ru',NULL,NULL),(74,'di-sport@mail.ru',NULL,NULL),(75,'pr@glent.ru',NULL,NULL),(76,'info@flipfly.ru',NULL,NULL),(77,'slavadybov@yandex.ru',NULL,NULL),(79,'clinikprofi21@mail.ru',NULL,NULL),(80,'info@briolin.me',NULL,NULL),(81,'beautyfixstudio@mail.ru',NULL,NULL),(82,'art-atelue.67@mail.ru',NULL,NULL),(83,'info@anna-key.ru',NULL,NULL),(84,'akelaclinic@yandex.ru',NULL,NULL),(85,'osobalab@yandex.ru',NULL,NULL),(86,'merelysalon@mail.ru',NULL,NULL),(87,'studiostyle2010@yandex.ru',NULL,NULL),(88,'katusha555@gmail.com',NULL,NULL),(89,'masterstrij@gmail.com',NULL,NULL),(90,'maleton77@mail.ru',NULL,NULL),(91,'diva_elis@mail.ru',NULL,NULL),(92,'beauty_corner@mail.ru',NULL,NULL),(93,'2211colorbar@gmail.ru',NULL,NULL),(94,'Tina.salon@mail.ru',NULL,NULL),(95,'nov.info@sensip.ru',NULL,NULL),(96,'pravda@studio-bonjour.ru',NULL,NULL),(97,'tatiana-lesstudio@yandex.ru',NULL,NULL),(99,'salonbella@yandex.ru',NULL,NULL),(100,'lazersport@mail.ru',NULL,NULL),(101,'piar@kimberlyland.ru',NULL,NULL),(102,'game@paintland.ru',NULL,NULL),(103,'mail@jumpfitness.ru',NULL,NULL),(104,'worldjump@yandex.ru',NULL,NULL),(105,'info@elseclub.ru',NULL,NULL),(106,'zversovet@yandex.ru',NULL,NULL),(107,'administration@zoovet.ru',NULL,NULL),(108,'rest@vizantiy.ru',NULL,NULL),(109,'viktoriaclub@yandex.ru',NULL,NULL),(110,'versal77@mail.ru',NULL,NULL),(111,'zsalon@yandex.ru',NULL,NULL),(112,'salon@vallexm.ru',NULL,NULL),(113,'salon@valenspa.ru',NULL,NULL),(114,'Salon@tot.net.ru',NULL,NULL),(115,'info@sunrain-salon.ru',NULL,NULL),(116,'sunicity@inbox.ru',NULL,NULL),(117,'ma-cherie@sun-tan.ru',NULL,NULL),(118,'info@studioempire.ru',NULL,NULL),(119,'salon@spatibet.ru',NULL,NULL),(120,'dakomaro@mail.ru',NULL,NULL),(121,'stydiya2012@yandex.ru',NULL,NULL),(122,'info@skparis.ru',NULL,NULL),(123,'info@sivilla-salon.ru',NULL,NULL),(124,'yakimanka50@mail.ru',NULL,NULL),(125,'INFO@SALONOSTROVA.RU',NULL,NULL),(126,'salon_fos@mail.ru',NULL,NULL),(127,'kristina-aurika@mail.ru',NULL,NULL),(128,'info@salonasretenka.ru',NULL,NULL),(129,'info@salon-krasota.ru',NULL,NULL),(130,'ms.preoritet@mail.ru',NULL,NULL),(131,'salon-avanti.ru@yandex.ru',NULL,NULL),(132,'rosaleeru@mail.ru',NULL,NULL),(133,'pr@real-motors.net',NULL,NULL),(134,'salon1@priyatnoesvidanie.ru',NULL,NULL),(135,'hr@persona.ru',NULL,NULL),(136,'hairnail2015@yandex.ru',NULL,NULL),(137,'info@paintballmos.ru',NULL,NULL),(138,'info@onailbar.ru',NULL,NULL),(139,'olirstudio@gmail.com',NULL,NULL),(140,'salon.vp@mail.ru',NULL,NULL),(141,'monicastyle@mail.ru',NULL,NULL),(142,'eelos@mail.ru',NULL,NULL),(143,'milfey2007@yandex.ru',NULL,NULL),(144,'maprovence@mail.ru',NULL,NULL),(145,'sales@magneto-fitness.ru',NULL,NULL),(146,'magia-buh@mail',NULL,NULL),(147,'leo-salon@yandex.ru',NULL,NULL),(148,'jadore@jadore.ru',NULL,NULL),(149,'salon1@ilovesalon.ru',NULL,NULL),(150,'salon2@ilovesalon.ru',NULL,NULL),(151,'ltdk-plus@mail.ru',NULL,NULL),(152,'info@headway-stom.ru',NULL,NULL),(153,'INFO@GRANJE.RUE-mail',NULL,NULL),(154,'info@fendrybar.ru',NULL,NULL),(155,'info@ekovet.ru',NULL,NULL),(156,'salon-ellen71@mail.ru',NULL,NULL),(157,'diaks@inbox.ru',NULL,NULL),(158,'info@devivant.ru',NULL,NULL),(159,'nfo@dakapo.ru',NULL,NULL),(160,'global@cosmik.ru',NULL,NULL),(161,'citodent@mail.ru',NULL,NULL),(162,'info@chuvstvo-stilya.ru',NULL,NULL),(163,'info@chopchop.me',NULL,NULL),(164,'info@capellisalon.ru',NULL,NULL),(165,'box@bdlv.ru',NULL,NULL),(166,'info@basketbowling.ru',NULL,NULL),(167,'info@baninapresne.ru',NULL,NULL),(168,'babor-studio@mail.ru',NULL,NULL),(169,'info@arbat-esthetic.ru',NULL,NULL),(170,'HELLO@ANNIEHALL.RU',NULL,NULL),(171,'info@ananas-club.ru',NULL,NULL),(172,'info@anahit.ru',NULL,NULL),(173,'povoda_net@mail.ru',NULL,NULL),(174,'client@salonalessandro.ru',NULL,NULL),(175,'info@absolutmed.ru',NULL,NULL),(176,'centre_abhyanga@mail.ru',NULL,NULL),(177,'info@салон-бриз.рф',NULL,NULL),(178,'contact@worldofquests.ru',NULL,NULL),(179,'REBUS2013@YANDEX.RU',NULL,NULL),(181,'info@tonigl.am',NULL,NULL),(182,'info@tochkafamily.ru',NULL,NULL),(183,'tayninskaya19@mail.ru',NULL,NULL),(184,'tamara-volkova-1978@mail.ru',NULL,NULL),(185,'studio-vodevil@yandex.ru',NULL,NULL),(186,'alvina23@mail.ru',NULL,NULL),(187,'info@salonprimavera.ru',NULL,NULL),(188,'salon.v@mail.ru',NULL,NULL),(189,'info@salonfeona.ru',NULL,NULL),(190,'info@salon-uma.ru',NULL,NULL),(191,'salon-sagra@mail.ru',NULL,NULL),(193,'info@salon-maritang.ru',NULL,NULL),(194,'nfo@salon-allegra.ru',NULL,NULL),(195,'Melnik-nadja@rambler.ru',NULL,NULL),(196,'belsalon@bk.ru',NULL,NULL),(197,'info@parikmaherskaja.com',NULL,NULL),(198,'nord.lor@yandex.ru',NULL,NULL),(199,'nola-beauty@mail.ru',NULL,NULL),(200,'info@nicolett.ru',NULL,NULL),(201,'salon@nezemnaya.ru',NULL,NULL),(202,'modernsalon1@yandex.ru',NULL,NULL),(203,'info@milana-salon.ru',NULL,NULL),(204,'info@megastylist.ru',NULL,NULL),(205,'ls-s@mail.ru',NULL,NULL),(206,'salon@ls-s.ru',NULL,NULL),(207,'pr-diamond@mail.ru',NULL,NULL),(208,'salon@ksenias.ru',NULL,NULL),(209,'nnabuchueva@kosmetologia-msk.ru',NULL,NULL),(210,'nfo@kazarma.club',NULL,NULL),(211,'gul-zei@mail.ru',NULL,NULL),(212,'infantastudio@mail.ru',NULL,NULL),(213,'salon@ilangspa.ru',NULL,NULL),(214,'sales@rwclub.ru',NULL,NULL),(215,'rd@paintium.ru',NULL,NULL),(216,'post3263@mail.ru',NULL,NULL),(217,'info@kwesti.ru',NULL,NULL),(218,'info@istar.su',NULL,NULL),(219,'info@veles-club.ru',NULL,NULL),(220,'cosmik2@cosmik.ru',NULL,NULL),(221,'info@spamango.ru',NULL,NULL),(222,'mail@real-quest.ru',NULL,NULL),(223,'createquest@gmail.com',NULL,NULL),(224,'info@nahusky.ru',NULL,NULL),(225,'info@imperi.com',NULL,NULL),(226,'info@gold-fitnes.ru',NULL,NULL),(227,'vesna.par@mail.ru',NULL,NULL),(228,'info@glent.ru',NULL,NULL),(229,'info@eyes-n-lips.ru',NULL,NULL),(230,'danilastudio@mail.ru',NULL,NULL),(231,'info@des-sole.ru',NULL,NULL),(232,'Demkor1@gmail.com',NULL,NULL),(233,'bmondo@yandex.ru',NULL,NULL),(234,'info@birdblu.ru',NULL,NULL),(235,'info@biosfera-club.ru',NULL,NULL),(237,'info@bettyvet.ru',NULL,NULL),(238,'be.top2013@yandex.ru',NULL,NULL),(239,'beauty-aura@ya.ru',NULL,NULL),(240,'art-atelye.67@mail.ru',NULL,NULL),(241,'marysabelsalonkrasoti@gmail.com',NULL,NULL),(242,'delafrance@mail.ru',NULL,NULL),(243,'nfo@studiostyle-msk.com',NULL,NULL),(244,'benko.mila@yandex.ru',NULL,NULL),(245,'info@studia-monik.ru',NULL,NULL),(246,'spaclub@rambler.ru',NULL,NULL),(247,'work@missmake.ru',NULL,NULL),(249,'info@milla-milla.ru',NULL,NULL),(250,'info@malina-msk.ru',NULL,NULL),(251,'salonlubawa@yandex.ru',NULL,NULL),(252,'info@linesalon.ru',NULL,NULL),(253,'limagesk@yandex.ru',NULL,NULL),(254,'zakaz@Ledi-Skarlett.ru',NULL,NULL),(255,'evaotr@inbox.ru',NULL,NULL),(256,'cestamoi@mail.ru',NULL,NULL),(257,'info@beautycorner.ru',NULL,NULL),(258,'dagio2013salon@gmail.com',NULL,NULL),(259,'2211colorbar@gmail.com',NULL,NULL),(260,'natella.61@mail.ru',NULL,NULL),(261,'salon@catherine.su',NULL,NULL),(262,'salonvita8@gmail.com',NULL,NULL),(263,'jessnail@list.ru',NULL,NULL),(264,'info@helenseward.ru',NULL,NULL),(265,'krasota@elegea.ru',NULL,NULL),(266,'beauty-tech@mail.ru',NULL,NULL),(267,'mail@astrasalon.ru.ru',NULL,NULL),(268,'lazersport@yandex.ru',NULL,NULL),(269,'clients@kimberlyland.ru',NULL,NULL),(270,'ims2500@mail.ru',NULL,NULL),(271,'irwf.team@gmail.com',NULL,NULL),(272,'info@bouncekitchen.ru',NULL,NULL),(273,'info@worldjump.ru',NULL,NULL),(274,'INFO@HAPPY-FROG.RU',NULL,NULL),(275,'Kkotelnikov@elseclub.ru',NULL,NULL),(276,'golden@spa-rasputin.ru',NULL,NULL),(277,'info@zoostatus.ru ',NULL,NULL),(278,'info@zeitnot.me',NULL,NULL),(279,'ZAKAZ@ZETABLAST.RU',NULL,NULL),(280,'zen-avto@yandex.ru',NULL,NULL),(281,'zer@zer.ru',NULL,NULL),(283,'info@just-space.ru',NULL,'2017-01-20 15:16:28'),(284,'delfin.parkour@ya.ru',NULL,NULL),(285,'akpoflash@gmail.com',NULL,NULL),(297,'tcn@nm.ru',NULL,NULL),(298,'sales@tonusmail.ru',NULL,NULL),(299,'salonlanet@mail.ru',NULL,NULL),(300,'nailsprofi.ru@gmail.com',NULL,NULL),(301,'thegeniusbeauty@inbox.ru',NULL,NULL),(302,'director@freshsalon.ru',NULL,NULL),(303,'admin@freshsalon.ru',NULL,NULL),(304,'zverevsalon@gmail.com',NULL,NULL),(305,'admin@zoovet.ru',NULL,NULL),(306,'info@zoostatus.ru',NULL,NULL),(307,'reklama@zoon.ru',NULL,NULL),(308,'info@zooac.ru',NULL,NULL),(309,'info@zonaq.ru',NULL,NULL),(310,'info@zolotoy-most.ru',NULL,NULL),(311,'zeusvet@mail.ru',NULL,NULL),(320,'office@emex71.ru','http://www.emex71.ru',NULL),(321,'zar@emex71.ru','http://www.emex71.ru',NULL),(322,'giper-spar@emex71.ru','http://www.emex71.ru',NULL),(323,'aleksin@emex71.ru','http://www.emex71.ru',NULL),(324,'emex-bogorodick@mail.ru','http://www.emex71.ru',NULL),(325,'efremov@emex71.ru','http://www.emex71.ru',NULL),(326,'emex-kireevsk@mail.ru','http://www.emex71.ru',NULL),(327,'nmsk@emex71.ru','http://www.emex71.ru',NULL),(328,'emex-uzlovaya@mail.ru','http://www.emex71.ru',NULL),(329,'89509146768@mail.ru','http://www.emex71.ru',NULL),(330,'emex-tula@mail.ru','http://www.emex71.ru',NULL),(333,'shoes.brands@mail.ru','http://style-step.ru',NULL),(343,'tclassica@mail.ru','http://www.tclassica.ru',NULL),(344,'tclas@mail.ru','http://www.tclassica.ru',NULL),(345,'subaru@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(346,'parts@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(347,'tuning@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(348,'body@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(349,'sos@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(350,'subaru_k@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(351,'subaru_x@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(352,'tradein@tc-pleyada.ru?subject','http://www.tc-pleyada.ru',NULL),(353,'tradein@tc-pleyada.ru','http://www.tc-pleyada.ru',NULL),(362,'info@gazel-traffic.ru','http://gazel-traffic.ru',NULL),(363,'info@lorryplus.ru','http://www.taxi-lorry.ru',NULL),(364,'tatu.gorod@yandex.ru','http://www.tatt1.ru',NULL),(365,'info@tata-613.ru','http://www.tata-613.ru',NULL),(366,'info@tari-st.ru','http://www.tari-st.ru',NULL),(367,'author@comments.com','http://www.tairai.ru',NULL),(368,'info@tairai.ru','http://www.tairai.ru',NULL),(369,'pr@tairai.ru','http://www.tairai.ru',NULL),(370,'franchise@tairai.ru','http://www.tairai.ru',NULL),(371,'t-very@mail.ru','http://www.t-very.ru',NULL),(381,'info@tcn-tula.ru','http://xn----8sbk2abp4ai9h.xn--p1ai',NULL),(382,'artdirector@irinatsvetkova.ru','http://irinatsvetkova.ru',NULL),(383,'Rating@Mail.ru','http://jessnail.com',NULL),(384,'michelex2@yandex.ru','http://michelex.ru',NULL),(385,'lzr05@mail.ru','http://www.misinstudio.ru',NULL),(386,'info@ornate-center.ru','http://www.ornate-center.ru',NULL),(387,'sonyaparijanka@gmail.com','http://www.parijanka-beauty.ru',NULL),(388,'INFO@POKROVSKIEBANI.RU','http://www.pokrovskiebani.ru',NULL),(389,'pok9175161242@yandex.ru','http://www.pokrovskiebani.ru',NULL),(390,'loftdesignbymoscow@gmail.com','http://www.profilpro.ru',NULL),(391,'contact@proobraz.su','http://www.proobraz.su',NULL),(392,'WH.Sitinskiy@ya.ru','http://www.workhall.ru',NULL),(393,'WH.Sitinskiy@yandex.ru','http://www.workhall.ru',NULL),(394,'assessment@yandex.ru','http://www.workhall.ru',NULL),(395,'mail@example.com','http://www.workhall.ru',NULL),(396,'om@salonmone.ru','http://www.salonmone.ru',NULL),(397,'pr@salonmone.ru','http://www.salonmone.ru',NULL),(398,'info@collegemoneco.ru','http://www.salonmone.ru',NULL),(399,'hr@salonmone.ru','http://www.salonmone.ru',NULL),(400,'marketolog@salonmone.ru','http://www.salonmone.ru',NULL),(401,'brand@salonmone.ru','http://www.salonmone.ru',NULL),(402,'as@salonmone.ru','http://www.salonmone.ru',NULL),(403,'infosauna@bk.ru','http://www.sauna-banya.com',NULL),(404,'web48@saunagold.ru','http://www.saunagold.ru',NULL),(405,'info@sokolinka33.ru','http://www.sokolinka33.ru',NULL),(406,'idejnyj@gmail.com','http://www.studio-mb.ru',NULL),(407,'mailbox@salonvosk.ru','http://www.vosksalon.ru',NULL),(408,'helpline@vosksalon.ru','http://www.vosksalon.ru',NULL),(409,'pm-tula@mail.ru',NULL,NULL),(410,'tulagro@mail.ru',NULL,NULL),(411,'texkomplus-alex@mail.ru',NULL,NULL),(412,'avtoray@avtoray-tula.ru',NULL,NULL);
/*!40000 ALTER TABLE `ls_emails` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `ls_loc`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_loc` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `localization` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_loc`
--

LOCK TABLES `ls_loc` WRITE;
/*!40000 ALTER TABLE `ls_loc` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ls_loc` VALUES (1,'ru'),(2,'en');
/*!40000 ALTER TABLE `ls_loc` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `ls_users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_users` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `login` char(14) NOT NULL,
  `password` char(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rights` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_users`
--

LOCK TABLES `ls_users` WRITE;
/*!40000 ALTER TABLE `ls_users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ls_users` VALUES (13,'akpoflash','$2y$10$nbfYFdG6CrrYnIK4tZxKkO2tRHk.I85nszbz4hl9JVl.uTcf.fcne','Анисимов Кирилл Андреевич','infinit.tula@gmail.com',7),(22,'akpoflashtest','$2y$10$EGeS3QvYiVVasO3A7G1K/eEKinmwtLRGNv/PrAMdqnHhiLhSu3Fp2','','',0);
/*!40000 ALTER TABLE `ls_users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 16 Jan 2017 20:54:21 +0300
