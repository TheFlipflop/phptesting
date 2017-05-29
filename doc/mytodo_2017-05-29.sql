USE `mytodo`;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET latin1 NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;

INSERT INTO `todos` (`id`, `description`, `completed`)
VALUES
	(1,'Got to Store',0),
	(2,'Make the dish',0),
	(3,'Take a nap',1),
	(4,'Code PHP',0);

/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`)
VALUES
	(1,'Philip'),
	(2,'Tom'),
	(3,'Tanja'),
	(4,'Lara');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
