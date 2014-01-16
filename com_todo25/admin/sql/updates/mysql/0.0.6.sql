DROP TABLE IF EXISTS `#__todo25`;

CREATE TABLE `#__todo25` (
  `id` int(11) NOT NULL auto_increment,
  `greeting` varchar(25) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__todo25` (`greeting`) VALUES
	('todo25!'),
	('Good bye World!');

