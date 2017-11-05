USE `calendar`;

CREATE TABLE `tblmaand` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
`maand` TINYINT(4) NOT NULL,
	`maandoms` VARCHAR(10) NOT NULL,
	PRIMARY KEY (`maand`)
);

Insert Into tblmaand (maand, maandoms)
Values (1,"Januari") , (2,"Februari") ,(3,"Maart") , (4,"April") , (5,"Mei") , (6,"Juni") ,(7,"Juli") ,(8,"Augustus") , (9,"September") , (10,"Oktober") , (11,"November") ,(12,"December");
