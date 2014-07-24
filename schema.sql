CREATE TABLE `authors` (
  `id_author` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_author`),
  KEY `full_name` (`first_name`,`last_name`),
  KEY `last_name` (`last_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `books` (
  `isbn` varchar(32) NOT NULL DEFAULT '',
  `title` varchar(1024) NOT NULL DEFAULT '',
  `id_author` int(10) unsigned NOT NULL,
  `published` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rating` float(5,2) DEFAULT '0.00',
  PRIMARY KEY (`isbn`),
  KEY `title` (`title`(255)),
  KEY `published` (`published`),
  KEY `authors_id_author` (`id_author`),
  CONSTRAINT `authors_id_author` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id_author`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
