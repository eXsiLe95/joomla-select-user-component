DROP TABLE IF EXISTS `#__exampleuser`;

CREATE TABLE `#__exampleuser` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__exampleuser` (`greeting`) VALUES
('Example User: Welcome!'),
('Example User: Goodbye!');
