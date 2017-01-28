-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: litespace
-- ------------------------------------------------------
-- Server version 	5.7.17
-- Date: Tue, 24 Jan 2017 15:17:25 +0300

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
-- Table structure for table `ls_articles`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cut` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_articles`
--

LOCK TABLES `ls_articles` WRITE;
/*!40000 ALTER TABLE `ls_articles` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `ls_articles` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `ls_emails`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `site` varchar(50) DEFAULT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `departure_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_emails`
--

LOCK TABLES `ls_emails` WRITE;
/*!40000 ALTER TABLE `ls_emails` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ls_emails` VALUES (1,'versal77@inbox.ru',NULL,1,NULL),(2,'info@vashstile.ru',NULL,1,NULL),(3,'kalina@vallexm.ru',NULL,1,NULL),(4,'anikinairina@mail.ru',NULL,1,NULL),(5,'trishkin-salon@mail.ru',NULL,1,NULL),(6,'info@topnailsstudio.ru',NULL,1,NULL),(7,'salonspice.ru@gmail.com',NULL,1,NULL),(9,'sivilla-info@yandex.ru',NULL,1,NULL),(10,'info@salonsona.ru',NULL,1,NULL),(11,'info@salonparis.ru',NULL,1,NULL),(12,'info@laesto.ru',NULL,1,NULL),(13,'salonolga1@yandex.ru',NULL,1,NULL),(14,'poluakovakarina@bk.ru',NULL,1,NULL),(16,'info@relax-thai.ru',NULL,1,NULL),(17,'priyatnoesvidanie@gmail.com',NULL,1,NULL),(18,'andrewkot@mail.ru',NULL,1,NULL),(19,'aishatik555@mail.ru',NULL,1,NULL),(20,'modnycontrol@yandex.ru',NULL,1,NULL),(22,'info@massimotinelli.ru',NULL,1,NULL),(23,'masterskayaMG@gmail.ru',NULL,1,NULL),(24,'magiakrasoty@mail.ru',NULL,1,NULL),(25,'info@lukss.ru',NULL,1,NULL),(26,'support@beget.ru',NULL,1,NULL),(27,'info@levita-med.ru',NULL,1,NULL),(28,'laviolette2012@mail.ru',NULL,1,NULL),(29,'info@laser-tag.su',NULL,1,NULL),(30,'info@lasalute.ru',NULL,1,NULL),(31,'info@la-digue.ru',NULL,1,NULL),(32,'kamial@mail.ru',NULL,1,NULL),(33,'ivan-art@inbox.ru',NULL,1,NULL),(34,'salon.elegant@gmail.com',NULL,1,NULL),(36,'kolesnik.angelina@mail.ru',NULL,1,NULL),(37,'figarocenter@mail.ru',NULL,1,NULL),(38,'admfendrybar2@mail.ru',NULL,1,NULL),(39,'salon@empire-of-beauty.ru',NULL,1,NULL),(40,'salonelenaevald@mail.ru',NULL,1,NULL),(41,'egoist_ka08@mail.ru',NULL,1,NULL),(42,'info@eelos.ru',NULL,1,NULL),(43,'info@edelveispro-salon.ru',NULL,1,NULL),(44,'info@chuvstvo-stilyamail.ru',NULL,1,NULL),(45,'bkprince@mail.ru',NULL,1,NULL),(47,'salon@beautick.ru',NULL,1,NULL),(48,'babor@yandex.ru',NULL,1,NULL),(49,'rovnayaelena@mail.ru',NULL,1,NULL),(50,'altissimo@list.ru',NULL,1,NULL),(51,'zolotoylotos2012@mail.ru',NULL,1,NULL),(52,'info@w-street.ru',NULL,1,NULL),(53,'skviel@mail.ru',NULL,1,NULL),(54,'sk-modus@mail.ru',NULL,1,NULL),(55,'inbox@sheislucky.ru',NULL,1,NULL),(56,'vildfeona07@mail.ru',NULL,1,NULL),(57,'infosalon21@mail.ru',NULL,1,NULL),(58,'salon-uma@rambler.ru',NULL,1,NULL),(59,'vimacuk@yandex.ru',NULL,1,NULL),(60,'granat.fest@gmail.com',NULL,1,NULL),(61,'info@salon-arteast.ru',NULL,1,NULL),(62,'robiar2013@gmail.com',NULL,1,NULL),(63,'lsukhareva@yandex.ru',NULL,1,NULL),(64,'nata-shashina@yandex.ru',NULL,1,NULL),(65,'allaoganova@mail.ru',NULL,1,NULL),(66,'info@kazarma.ru',NULL,1,NULL),(67,'katemagic-studio@yandex.ru',NULL,1,NULL),(68,'andr.bis@yandex.ru',NULL,1,NULL),(69,'alisha.fesht@mail.ru',NULL,1,NULL),(70,'partners@real-quest.ru',NULL,1,NULL),(71,'prostokvest@gmail.com',NULL,1,NULL),(72,'podzemkakvest@mail.ru',NULL,1,NULL),(73,'special33@mail.ru',NULL,1,NULL),(74,'di-sport@mail.ru',NULL,1,NULL),(75,'pr@glent.ru',NULL,1,NULL),(76,'info@flipfly.ru',NULL,1,NULL),(77,'slavadybov@yandex.ru',NULL,1,NULL),(79,'clinikprofi21@mail.ru',NULL,1,NULL),(80,'info@briolin.me',NULL,1,NULL),(81,'beautyfixstudio@mail.ru',NULL,1,NULL),(82,'art-atelue.67@mail.ru',NULL,1,NULL),(83,'info@anna-key.ru',NULL,1,NULL),(84,'akelaclinic@yandex.ru',NULL,1,NULL),(85,'osobalab@yandex.ru',NULL,1,NULL),(86,'merelysalon@mail.ru',NULL,1,NULL),(87,'studiostyle2010@yandex.ru',NULL,1,NULL),(88,'katusha555@gmail.com',NULL,1,NULL),(89,'masterstrij@gmail.com',NULL,1,NULL),(90,'maleton77@mail.ru',NULL,1,NULL),(91,'diva_elis@mail.ru',NULL,1,NULL),(92,'beauty_corner@mail.ru',NULL,1,NULL),(93,'2211colorbar@gmail.ru',NULL,1,NULL),(94,'Tina.salon@mail.ru',NULL,1,NULL),(95,'nov.info@sensip.ru',NULL,1,NULL),(96,'pravda@studio-bonjour.ru',NULL,1,NULL),(97,'tatiana-lesstudio@yandex.ru',NULL,1,NULL),(99,'salonbella@yandex.ru',NULL,1,NULL),(100,'lazersport@mail.ru',NULL,1,NULL),(101,'piar@kimberlyland.ru',NULL,1,NULL),(102,'game@paintland.ru',NULL,1,NULL),(103,'mail@jumpfitness.ru',NULL,1,NULL),(104,'worldjump@yandex.ru',NULL,1,NULL),(105,'info@elseclub.ru',NULL,1,NULL),(106,'zversovet@yandex.ru',NULL,1,NULL),(107,'administration@zoovet.ru',NULL,1,NULL),(108,'rest@vizantiy.ru',NULL,1,NULL),(109,'viktoriaclub@yandex.ru',NULL,1,NULL),(110,'versal77@mail.ru',NULL,1,NULL),(111,'zsalon@yandex.ru',NULL,1,NULL),(112,'salon@vallexm.ru',NULL,1,NULL),(113,'salon@valenspa.ru',NULL,1,NULL),(114,'Salon@tot.net.ru',NULL,1,NULL),(115,'info@sunrain-salon.ru',NULL,1,NULL),(116,'sunicity@inbox.ru',NULL,1,NULL),(117,'ma-cherie@sun-tan.ru',NULL,1,NULL),(118,'info@studioempire.ru',NULL,1,NULL),(119,'salon@spatibet.ru',NULL,1,NULL),(120,'dakomaro@mail.ru',NULL,1,NULL),(121,'stydiya2012@yandex.ru',NULL,1,NULL),(122,'info@skparis.ru',NULL,1,NULL),(123,'info@sivilla-salon.ru',NULL,1,NULL),(124,'yakimanka50@mail.ru',NULL,1,NULL),(125,'INFO@SALONOSTROVA.RU',NULL,1,NULL),(126,'salon_fos@mail.ru',NULL,1,NULL),(127,'kristina-aurika@mail.ru',NULL,1,NULL),(128,'info@salonasretenka.ru',NULL,1,NULL),(129,'info@salon-krasota.ru',NULL,1,NULL),(130,'ms.preoritet@mail.ru',NULL,1,NULL),(131,'salon-avanti.ru@yandex.ru',NULL,1,NULL),(132,'rosaleeru@mail.ru',NULL,1,NULL),(133,'pr@real-motors.net',NULL,1,NULL),(134,'salon1@priyatnoesvidanie.ru',NULL,1,NULL),(135,'hr@persona.ru',NULL,1,NULL),(136,'hairnail2015@yandex.ru',NULL,1,NULL),(137,'info@paintballmos.ru',NULL,1,NULL),(138,'info@onailbar.ru',NULL,1,NULL),(139,'olirstudio@gmail.com',NULL,1,NULL),(140,'salon.vp@mail.ru',NULL,1,NULL),(141,'monicastyle@mail.ru',NULL,1,NULL),(142,'eelos@mail.ru',NULL,1,NULL),(143,'milfey2007@yandex.ru',NULL,1,NULL),(144,'maprovence@mail.ru',NULL,1,NULL),(145,'sales@magneto-fitness.ru',NULL,1,NULL),(146,'magia-buh@mail',NULL,1,NULL),(147,'leo-salon@yandex.ru',NULL,1,NULL),(148,'jadore@jadore.ru',NULL,1,NULL),(149,'salon1@ilovesalon.ru',NULL,1,NULL),(150,'salon2@ilovesalon.ru',NULL,1,NULL),(151,'ltdk-plus@mail.ru',NULL,1,NULL),(152,'info@headway-stom.ru',NULL,1,NULL),(153,'INFO@GRANJE.RUE-mail',NULL,1,NULL),(154,'info@fendrybar.ru',NULL,1,NULL),(155,'info@ekovet.ru',NULL,1,NULL),(156,'salon-ellen71@mail.ru',NULL,1,NULL),(157,'diaks@inbox.ru',NULL,1,NULL),(158,'info@devivant.ru',NULL,1,NULL),(159,'nfo@dakapo.ru',NULL,1,NULL),(160,'global@cosmik.ru',NULL,1,NULL),(161,'citodent@mail.ru',NULL,1,NULL),(162,'info@chuvstvo-stilya.ru',NULL,1,NULL),(163,'info@chopchop.me',NULL,1,NULL),(164,'info@capellisalon.ru',NULL,1,NULL),(165,'box@bdlv.ru',NULL,1,NULL),(166,'info@basketbowling.ru',NULL,1,NULL),(167,'info@baninapresne.ru',NULL,1,NULL),(168,'babor-studio@mail.ru',NULL,1,NULL),(169,'info@arbat-esthetic.ru',NULL,1,NULL),(170,'HELLO@ANNIEHALL.RU',NULL,1,NULL),(171,'info@ananas-club.ru',NULL,1,NULL),(172,'info@anahit.ru',NULL,1,NULL),(173,'povoda_net@mail.ru',NULL,1,NULL),(174,'client@salonalessandro.ru',NULL,1,NULL),(175,'info@absolutmed.ru',NULL,1,NULL),(176,'centre_abhyanga@mail.ru',NULL,1,NULL),(177,'info@салон-бриз.рф',NULL,1,NULL),(178,'contact@worldofquests.ru',NULL,1,NULL),(179,'REBUS2013@YANDEX.RU',NULL,1,NULL),(181,'info@tonigl.am',NULL,1,NULL),(182,'info@tochkafamily.ru',NULL,1,NULL),(183,'tayninskaya19@mail.ru',NULL,1,NULL),(184,'tamara-volkova-1978@mail.ru',NULL,1,NULL),(185,'studio-vodevil@yandex.ru',NULL,1,NULL),(186,'alvina23@mail.ru',NULL,1,NULL),(187,'info@salonprimavera.ru',NULL,1,NULL),(188,'salon.v@mail.ru',NULL,1,NULL),(189,'info@salonfeona.ru',NULL,1,NULL),(190,'info@salon-uma.ru',NULL,1,NULL),(191,'salon-sagra@mail.ru',NULL,1,NULL),(193,'info@salon-maritang.ru',NULL,1,NULL),(194,'nfo@salon-allegra.ru',NULL,1,NULL),(195,'Melnik-nadja@rambler.ru',NULL,1,NULL),(196,'belsalon@bk.ru',NULL,1,NULL),(197,'info@parikmaherskaja.com',NULL,1,NULL),(198,'nord.lor@yandex.ru',NULL,1,NULL),(199,'nola-beauty@mail.ru',NULL,1,NULL),(200,'info@nicolett.ru',NULL,1,NULL),(201,'salon@nezemnaya.ru',NULL,1,NULL),(202,'modernsalon1@yandex.ru',NULL,1,NULL),(203,'info@milana-salon.ru',NULL,1,NULL),(204,'info@megastylist.ru',NULL,1,NULL),(205,'ls-s@mail.ru',NULL,1,NULL),(206,'salon@ls-s.ru',NULL,1,NULL),(207,'pr-diamond@mail.ru',NULL,1,NULL),(208,'salon@ksenias.ru',NULL,1,NULL),(209,'nnabuchueva@kosmetologia-msk.ru',NULL,1,NULL),(210,'nfo@kazarma.club',NULL,1,NULL),(211,'gul-zei@mail.ru',NULL,1,NULL),(212,'infantastudio@mail.ru',NULL,1,NULL),(213,'salon@ilangspa.ru',NULL,1,NULL),(214,'sales@rwclub.ru',NULL,1,NULL),(215,'rd@paintium.ru',NULL,1,NULL),(216,'post3263@mail.ru',NULL,1,NULL),(217,'info@kwesti.ru',NULL,1,NULL),(218,'info@istar.su',NULL,1,NULL),(219,'info@veles-club.ru',NULL,1,NULL),(220,'cosmik2@cosmik.ru',NULL,1,NULL),(221,'info@spamango.ru',NULL,1,NULL),(222,'mail@real-quest.ru',NULL,1,NULL),(223,'createquest@gmail.com',NULL,1,NULL),(224,'info@nahusky.ru',NULL,1,NULL),(225,'info@imperi.com',NULL,1,NULL),(226,'info@gold-fitnes.ru',NULL,1,NULL),(227,'vesna.par@mail.ru',NULL,1,NULL),(228,'info@glent.ru',NULL,1,NULL),(229,'info@eyes-n-lips.ru',NULL,1,NULL),(230,'danilastudio@mail.ru',NULL,1,NULL),(231,'info@des-sole.ru',NULL,1,NULL),(232,'Demkor1@gmail.com',NULL,1,NULL),(233,'bmondo@yandex.ru',NULL,1,NULL),(234,'info@birdblu.ru',NULL,1,NULL),(235,'info@biosfera-club.ru',NULL,1,NULL),(237,'info@bettyvet.ru',NULL,1,NULL),(238,'be.top2013@yandex.ru',NULL,1,NULL),(239,'beauty-aura@ya.ru',NULL,1,NULL),(240,'art-atelye.67@mail.ru',NULL,1,NULL),(241,'marysabelsalonkrasoti@gmail.com',NULL,1,NULL),(242,'delafrance@mail.ru',NULL,1,NULL),(243,'nfo@studiostyle-msk.com',NULL,1,NULL),(244,'benko.mila@yandex.ru',NULL,1,NULL),(245,'info@studia-monik.ru',NULL,1,NULL),(246,'spaclub@rambler.ru',NULL,1,NULL),(247,'work@missmake.ru',NULL,1,NULL),(249,'info@milla-milla.ru',NULL,1,NULL),(250,'info@malina-msk.ru',NULL,1,NULL),(251,'salonlubawa@yandex.ru',NULL,1,NULL),(252,'info@linesalon.ru',NULL,1,NULL),(253,'limagesk@yandex.ru',NULL,1,NULL),(254,'zakaz@Ledi-Skarlett.ru',NULL,1,NULL),(255,'evaotr@inbox.ru',NULL,1,NULL),(256,'cestamoi@mail.ru',NULL,1,NULL),(257,'info@beautycorner.ru',NULL,1,NULL),(258,'dagio2013salon@gmail.com',NULL,1,NULL),(259,'2211colorbar@gmail.com',NULL,1,NULL),(260,'natella.61@mail.ru',NULL,1,NULL),(261,'salon@catherine.su',NULL,1,NULL),(262,'salonvita8@gmail.com',NULL,1,NULL),(263,'jessnail@list.ru',NULL,1,NULL),(264,'info@helenseward.ru',NULL,1,NULL),(265,'krasota@elegea.ru',NULL,1,NULL),(266,'beauty-tech@mail.ru',NULL,1,NULL),(267,'mail@astrasalon.ru.ru',NULL,1,NULL),(268,'lazersport@yandex.ru',NULL,1,NULL),(269,'clients@kimberlyland.ru',NULL,1,NULL),(270,'ims2500@mail.ru',NULL,1,NULL),(271,'irwf.team@gmail.com',NULL,1,NULL),(272,'info@bouncekitchen.ru',NULL,1,NULL),(273,'info@worldjump.ru',NULL,1,NULL),(274,'INFO@HAPPY-FROG.RU',NULL,1,NULL),(275,'Kkotelnikov@elseclub.ru',NULL,1,NULL),(276,'golden@spa-rasputin.ru',NULL,1,NULL),(277,'info@zoostatus.ru ',NULL,1,NULL),(278,'info@zeitnot.me',NULL,1,NULL),(279,'ZAKAZ@ZETABLAST.RU',NULL,1,NULL),(280,'zen-avto@yandex.ru',NULL,1,NULL),(281,'zer@zer.ru',NULL,1,NULL),(283,'info@just-space.ru',NULL,1,'2017-01-23 23:21:16'),(284,'delfin.parkour@ya.ru',NULL,1,NULL),(285,'akpoflash@gmail.com',NULL,1,'2017-01-23 23:17:18'),(297,'tcn@nm.ru',NULL,1,NULL),(298,'sales@tonusmail.ru',NULL,1,NULL),(299,'salonlanet@mail.ru',NULL,1,NULL),(300,'nailsprofi.ru@gmail.com',NULL,1,NULL),(301,'thegeniusbeauty@inbox.ru',NULL,1,NULL),(302,'director@freshsalon.ru',NULL,1,NULL),(303,'admin@freshsalon.ru',NULL,1,NULL),(304,'zverevsalon@gmail.com',NULL,1,NULL),(305,'admin@zoovet.ru',NULL,1,NULL),(306,'info@zoostatus.ru',NULL,1,NULL),(307,'reklama@zoon.ru',NULL,1,NULL),(308,'info@zooac.ru',NULL,1,NULL),(309,'info@zonaq.ru',NULL,1,NULL),(310,'info@zolotoy-most.ru',NULL,1,NULL),(311,'zeusvet@mail.ru',NULL,1,NULL),(320,'office@emex71.ru','http://www.emex71.ru',1,NULL),(321,'zar@emex71.ru','http://www.emex71.ru',1,NULL),(322,'giper-spar@emex71.ru','http://www.emex71.ru',1,NULL),(323,'aleksin@emex71.ru','http://www.emex71.ru',1,NULL),(324,'emex-bogorodick@mail.ru','http://www.emex71.ru',1,NULL),(325,'efremov@emex71.ru','http://www.emex71.ru',1,NULL),(326,'emex-kireevsk@mail.ru','http://www.emex71.ru',1,NULL),(327,'nmsk@emex71.ru','http://www.emex71.ru',1,NULL),(328,'emex-uzlovaya@mail.ru','http://www.emex71.ru',1,NULL),(329,'89509146768@mail.ru','http://www.emex71.ru',1,NULL),(330,'emex-tula@mail.ru','http://www.emex71.ru',1,NULL),(333,'shoes.brands@mail.ru','http://style-step.ru',1,NULL),(343,'tclassica@mail.ru','http://www.tclassica.ru',1,NULL),(344,'tclas@mail.ru','http://www.tclassica.ru',1,NULL),(345,'subaru@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(346,'parts@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(347,'tuning@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(348,'body@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(349,'sos@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(350,'subaru_k@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(351,'subaru_x@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(352,'tradein@tc-pleyada.ru?subject','http://www.tc-pleyada.ru',1,NULL),(353,'tradein@tc-pleyada.ru','http://www.tc-pleyada.ru',1,NULL),(362,'info@gazel-traffic.ru','http://gazel-traffic.ru',1,NULL),(363,'info@lorryplus.ru','http://www.taxi-lorry.ru',1,NULL),(364,'tatu.gorod@yandex.ru','http://www.tatt1.ru',1,NULL),(365,'info@tata-613.ru','http://www.tata-613.ru',1,NULL),(366,'info@tari-st.ru','http://www.tari-st.ru',1,NULL),(367,'author@comments.com','http://www.tairai.ru',1,NULL),(368,'info@tairai.ru','http://www.tairai.ru',1,NULL),(369,'pr@tairai.ru','http://www.tairai.ru',1,NULL),(370,'franchise@tairai.ru','http://www.tairai.ru',1,NULL),(371,'t-very@mail.ru','http://www.t-very.ru',1,NULL),(381,'info@tcn-tula.ru','http://xn----8sbk2abp4ai9h.xn--p1ai',1,NULL),(382,'artdirector@irinatsvetkova.ru','http://irinatsvetkova.ru',1,NULL),(383,'Rating@Mail.ru','http://jessnail.com',1,NULL),(384,'michelex2@yandex.ru','http://michelex.ru',1,NULL),(385,'lzr05@mail.ru','http://www.misinstudio.ru',1,NULL),(386,'info@ornate-center.ru','http://www.ornate-center.ru',1,NULL),(387,'sonyaparijanka@gmail.com','http://www.parijanka-beauty.ru',1,NULL),(388,'INFO@POKROVSKIEBANI.RU','http://www.pokrovskiebani.ru',1,NULL),(389,'pok9175161242@yandex.ru','http://www.pokrovskiebani.ru',1,NULL),(390,'loftdesignbymoscow@gmail.com','http://www.profilpro.ru',1,NULL),(391,'contact@proobraz.su','http://www.proobraz.su',1,NULL),(392,'WH.Sitinskiy@ya.ru','http://www.workhall.ru',1,NULL),(393,'WH.Sitinskiy@yandex.ru','http://www.workhall.ru',1,NULL),(394,'assessment@yandex.ru','http://www.workhall.ru',1,NULL),(395,'mail@example.com','http://www.workhall.ru',1,NULL),(396,'om@salonmone.ru','http://www.salonmone.ru',1,NULL),(397,'pr@salonmone.ru','http://www.salonmone.ru',1,NULL),(398,'info@collegemoneco.ru','http://www.salonmone.ru',1,NULL),(399,'hr@salonmone.ru','http://www.salonmone.ru',1,NULL),(400,'marketolog@salonmone.ru','http://www.salonmone.ru',1,NULL),(401,'brand@salonmone.ru','http://www.salonmone.ru',1,NULL),(402,'as@salonmone.ru','http://www.salonmone.ru',1,NULL),(403,'infosauna@bk.ru','http://www.sauna-banya.com',1,NULL),(404,'web48@saunagold.ru','http://www.saunagold.ru',1,NULL),(405,'info@sokolinka33.ru','http://www.sokolinka33.ru',1,NULL),(406,'idejnyj@gmail.com','http://www.studio-mb.ru',1,NULL),(407,'mailbox@salonvosk.ru','http://www.vosksalon.ru',1,NULL),(408,'helpline@vosksalon.ru','http://www.vosksalon.ru',1,NULL),(409,'pm-tula@mail.ru',NULL,1,NULL),(410,'tulagro@mail.ru',NULL,1,NULL),(411,'texkomplus-alex@mail.ru',NULL,1,NULL),(412,'avtoray@avtoray-tula.ru',NULL,1,NULL),(416,'rc-aida@mail.ru',NULL,1,NULL),(417,'info@trattoria-tula.ru',NULL,1,NULL),(418,'tula@bluesky.ru',NULL,1,NULL),(419,'aquakomf@mail.ru',NULL,1,NULL),(420,'paradiz-tur@yandex.ru',NULL,1,NULL),(421,'info@siren71.ru',NULL,1,NULL),(422,'kengurutur@mail.ru',NULL,1,NULL),(423,'positiv@tula.net',NULL,1,NULL),(424,'advokat.arsa@yandex.ru',NULL,1,NULL),(425,'volkovv.s@yandex.ru',NULL,1,NULL),(426,'akvarel.tula@mail.ru',NULL,1,NULL),(427,'vershina71@mail.ru',NULL,1,NULL),(428,'djkorry@mail.ru',NULL,1,NULL),(429,'avalontula@mail.ru',NULL,1,NULL),(430,'shanstula@yandex.ru',NULL,1,NULL),(431,'rybka1@yandex.ru',NULL,1,NULL),(432,'imp71@bk.ru',NULL,1,NULL),(433,'delicatur@gmail.com',NULL,1,NULL),(434,'716354@mail.ru',NULL,1,NULL),(435,'studiohouse@inbox.ru',NULL,1,NULL),(436,'rwh@rambler.ru',NULL,1,NULL),(437,'pr@invitro.ru',NULL,1,NULL),(438,'info@new-people-tula.ru',NULL,1,NULL),(439,'indbad@sovintel.ru',NULL,1,NULL),(440,'zvezda_alfa@tula.net',NULL,1,NULL),(441,'giraf-tour@yandex.ru',NULL,1,NULL),(442,'info@4whale.ru',NULL,1,NULL),(443,'ssv@mediatula.ru',NULL,1,NULL),(444,'apelsintula08@rambler.ru',NULL,1,NULL),(445,'spa-ona@mail.ru',NULL,1,NULL),(446,'tulcpm@mail.ru',NULL,1,NULL),(447,'avtoklasstula@mail.ru',NULL,1,NULL),(448,'373764@mail.ru',NULL,1,NULL),(449,'mail@grumanty.ru',NULL,1,NULL),(450,'info@imperator-hotel.ru',NULL,1,NULL),(451,'neapoli-pizza@mail.ru',NULL,1,NULL),(452,'info.tuladent71@gmail.com','http://tuladent.ru/',1,NULL),(453,'sale@kino-city.ru','http://kino-city.ru/tula',1,NULL),(454,'info@kino-city.ru','http://kino-city.ru/tula',1,NULL),(455,'service@kino-city.ru','http://kino-city.ru/tula',1,NULL),(456,'tvm196811@yandex.ru','http://roden-tula.ru/',1,NULL),(457,'krasn_lmed@mail.ru','http://l-med.ru/',1,NULL),(458,'dms_lmed@mail.ru','http://l-med.ru/',1,NULL),(459,'!--Rating@Mail.ru','http://l-med.ru/',1,NULL),(460,'akademia-rr@yandex.ru','http://akademia-rr.ru',1,NULL),(461,'immunolazermed@yandex.ru','http://l-med.ru',1,NULL),(462,'delivery@tomato-pizza.ru','http://www.tomato-pizza.ru/contacts/',1,NULL),(463,'hotline@tomato-pizza.ru','http://www.tomato-pizza.ru/contacts/',1,NULL),(464,'arenda@tomato-pizza.ru','http://www.tomato-pizza.ru/contacts/',1,NULL),(465,'zakupki@tomato-pizza.ru','http://www.tomato-pizza.ru/contacts/',1,NULL),(466,'reklama@tomato-pizza.ru','http://www.tomato-pizza.ru/contacts/',1,NULL),(469,'hr@tomato-pizza.ru','http://www.tomato-pizza.ru',1,NULL),(470,'estetik2015v@mail.ru','http://www.spa-center71.ru',1,NULL),(471,'support@diera.ru','http://www.spa-center71.ru',1,NULL),(472,'starlabor@yandex.ru','http://tuladent.ru',1,NULL),(473,'info@digident.ru','http://tuladent.ru',1,NULL),(474,'info@101media.ru','http://kino-city.ru/tula',1,NULL),(475,'info@alexfill-design.ru','http://l-med.ru',1,NULL),(476,'job@alexfill-design.ru','http://l-med.ru',1,NULL),(477,'konsultantmed@mail.ru','http://medcentr-tula.ru',1,NULL),(478,'mammo@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(479,'labfs28@mail.ru','http://medcentr-tula.ru',1,NULL),(480,'labor@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(481,'x-ray@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(482,'ct_mri@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(483,'konsultantmed_ns@mail.ru','http://medcentr-tula.ru',1,NULL),(484,'malykh_ne@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(485,'docmail@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(486,'operblok@medcentr-tula.ru','http://medcentr-tula.ru',1,NULL),(487,'nika-nagel@tula.net','http://nika-nagel.ru',1,NULL),(488,'tlstls@rambler.ru','http://nika-nagel.ru',1,NULL),(489,'mk@cblab.ru','http://nika-nagel.ru',1,NULL),(490,'tulamart@martt.ru','http://martt.ru',1,NULL),(491,'kabanova@martt.ru','http://martt.ru',1,NULL),(492,'depart@gsen.ru','http://martt.ru',1,NULL),(493,'email@email.ru','http://martt.ru',1,NULL),(494,'info@pac.ru','http://martt.ru',1,NULL),(495,'tour@dvm-tour.ru','http://martt.ru',1,NULL),(496,'multitour.to@gmail.com','http://martt.ru',1,NULL),(497,'info@mal3.ru','http://martt.ru',1,NULL),(498,'111@mail.ru','http://spektr-tur.ru',1,NULL),(499,'111@qq.ru','http://spektr-tur.ru',1,NULL),(500,'larisa.runko@yandex.ru','http://spektr-tur.ru',1,NULL),(501,'ureva@list.ru','http://spektr-tur.ru',1,NULL),(502,'manjascha.morozova@yandex.ru','http://spektr-tur.ru',1,NULL),(503,'111@111.ru','http://spektr-tur.ru',1,NULL),(504,'123@rar.ru','http://spektr-tur.ru',1,NULL),(505,'123@mail.ru','http://spektr-tur.ru',1,NULL),(506,'spektr-tur@mail.ru','http://spektr-tur.ru',1,NULL),(507,'35imperia@mail.ru','http://imperia71.ru',1,NULL),(508,'kesaonov@mail.ru','http://mary.ds71.ru',1,NULL),(509,'counter@liveinternet.ru','http://mary.ds71.ru',1,NULL),(510,'nikitinainnav@mail.ru','http://urist-tula.ru',1,NULL),(511,'tihonovag@bk.ru','http://urist-tula.ru',1,NULL),(512,'ya.vild-olga@ya.ru','http://urist-tula.ru',1,NULL),(513,'otdel_svyazi@mail.ru','http://urist-tula.ru',1,NULL),(514,'akpoflash666@yandex.ru',NULL,1,'2017-01-23 23:31:09');
/*!40000 ALTER TABLE `ls_emails` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `ls_settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ls_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` char(14) CHARACTER SET utf8 NOT NULL,
  `email_delay` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_settings`
--

LOCK TABLES `ls_settings` WRITE;
/*!40000 ALTER TABLE `ls_settings` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `ls_settings` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ls_users`
--

LOCK TABLES `ls_users` WRITE;
/*!40000 ALTER TABLE `ls_users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ls_users` VALUES (13,'akpoflash','$2y$10$nbfYFdG6CrrYnIK4tZxKkO2tRHk.I85nszbz4hl9JVl.uTcf.fcne','Анисимов Кирилл Андреевич','infinit.tula@gmail.com',7);
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

-- Dump completed on: Tue, 24 Jan 2017 15:17:25 +0300
