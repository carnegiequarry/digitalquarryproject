


DROP TABLE IF EXISTS `modernQuarryFossilData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modernQuarryFossilData` (
  `image` varchar(70) DEFAULT NULL,
  `catalogNumber` varchar(11) DEFAULT NULL,
  `cliffNumber` varchar(17) DEFAULT NULL,
  `taxon` varchar(24) DEFAULT NULL,
  `bone` varchar(55) DEFAULT NULL,
  `age` varchar(8) DEFAULT NULL,
  `relatedFossils` varchar(81) DEFAULT NULL,
  `visibleMeasurements` varchar(17) DEFAULT NULL,
  `currentLocation` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOAD DATA LOCAL INFILE './modernQuarryFossilData.csv'
  INTO TABLE modernQuarryFossilData
  FIELDS TERMINATED BY ','
    ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(image,catalogNumber,cliffNumber,taxon,bone,age,relatedFossils,visibleMeasurements,currentLocation);