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
  `published` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rating` float(5,2) DEFAULT '0.00',
  PRIMARY KEY (`isbn`),
  KEY `title` (`title`(255)),
  KEY `published` (`published`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `books_authors` (
  `isbn` VARCHAR(32) NOT NULL,
  `id_author` int(10) unsigned NOT NULL,
  PRIMARY KEY (`isbn`, `id_author`),
   CONSTRAINT `books_isbn` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authors_id_author` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id_author`) ON DELETE CASCADE ON UPDATE CASCADE
) engine=InnoDb;