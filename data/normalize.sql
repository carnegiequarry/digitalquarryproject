DROP TABLE IF EXISTS  `dino`.`age`;

CREATE TABLE IF NOT EXISTS `dino`.`age` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB

INSERT INTO age (name) SELECT DISTINCT(age) FROM modernQuarryFossilData;


DROP TABLE IF EXISTS `dino`.`taxon`;

CREATE TABLE IF NOT EXISTS `dino`.`taxon` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `phylopic` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

INSERT INTO taxon (name) SELECT DISTINCT(taxon) FROM modernQuarryFossilData;

DROP TABLE IF EXISTS `dino`.`bone`;

CREATE TABLE IF NOT EXISTS `dino`.`bone` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `taxon_id` VARCHAR(45) NULL COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `image` VARCHAR(45) NULL COMMENT '',
  `x` INT NULL COMMENT '',
  `y` INT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

INSERT INTO bone (taxon_id, name) SELECT b.id,a.bone FROM modernQuarryFossilData a left join taxon b on b.name = a.taxon;

DROP TABLE IF EXISTS `dino`.`currentLocation` ;

CREATE TABLE IF NOT EXISTS `dino`.`currentLocation` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `displayed` INT NULL COMMENT '',
  `contact` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

INSERT INTO currentLocation (name) SELECT DISTINCT (currentLocation) FROM modernQuarryFossilData;

DROP TABLE IF EXISTS `dino`.`sourceLocation`;

CREATE TABLE IF NOT EXISTS `dino`.`sourceLocation` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `lat` VARCHAR(45) NULL COMMENT '',
  `long` VARCHAR(45) NULL COMMENT '',
  `slope` VARCHAR(45) NULL COMMENT '',
  `aspect` VARCHAR(45) NULL COMMENT '',
  `formation_id` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT ''  )
  ENGINE = InnoDB;

INSERT INTO sourceLocation SELECT DISTINCT(cliffNumber) FROM modernQuarryFossilData;

DROP TABLE IF EXISTS `dino`.`formation`;

CREATE TABLE IF NOT EXISTS `dino`.`formation` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `age` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB

DROP TABLE IF EXISTS `dino`.`fossil`;

CREATE TABLE IF NOT EXISTS `dino`.`fossil` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `image` VARCHAR(70) NULL COMMENT '',
  `description` VARCHAR(45) NULL COMMENT '',
  `taxon_id` INT NOT NULL COMMENT '',
  `bone_id` INT NOT NULL COMMENT '',
  `sourceLocation_id` INT NOT NULL COMMENT '',
  `age_id` INT NOT NULL COMMENT '',
  `currentLocation_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_fossil_taxon1_idx` (`taxon_id` ASC)  COMMENT '',
  INDEX `fk_fossil_bone1_idx` (`bone_id` ASC)  COMMENT '',
  INDEX `fk_fossil_sourceLocation1_idx` (`sourceLocation_id` ASC)  COMMENT '',
  INDEX `fk_fossil_age1_idx` (`age_id` ASC)  COMMENT '',
  INDEX `fk_fossil_currentLocation1_idx` (`currentLocation_id` ASC)  COMMENT '')
ENGINE = InnoDB;


INSERT INTO fossil ( image, description, taxon_id, bone_id, sourceLocation_id, age_id, currentLocation_id)
SELECT
  a.image,
  a.catalogNumber,
  taxon.id,
  0,
  sourceLocation.id,
  age.id,
  currentLocation.id
FROM
  modernQuarryFossilData a
INNER JOIN
  taxon ON taxon.name = a.taxon
INNER JOIN
  sourceLocation ON sourceLocation.name = a.cliffNumber
INNER JOIN
  age ON age.name = a.age
INNER JOIN
  currentLocation ON currentLocation.name = a.currentLocation;


UPDATE
  fossil f
INNER JOIN
  modernQuarryFossilData a ON f.description = a.catalogNumber
INNER JOIN
  bone b ON a.bone = b.name
SET
  f.bone_id = b.id;

