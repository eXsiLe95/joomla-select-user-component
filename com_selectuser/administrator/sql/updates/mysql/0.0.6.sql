DROP TABLE IF EXISTS `#__selectuser`;

CREATE TABLE `#__selectuser` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`userId`   INT(11)     NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;