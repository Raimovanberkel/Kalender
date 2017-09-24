DROP DATABASE IF EXISTS `calendar`;
CREATE DATABASE IF NOT EXISTS `calendar`;
USE `calendar`;

CREATE TABLE `birthdays` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`person` VARCHAR(255) NOT NULL,
	`dag` TINYINT(4) NOT NULL,
	`maand` TINYINT(4) NOT NULL,
	`jaar` SMALLINT(6) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
);