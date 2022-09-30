USE test;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
`firstname` varchar(255) NOT NULL COLLATE 'utf8_general_ci',
`lastname` varchar(255) NOT NULL COLLATE 'utf8_general_ci',
`password` varchar(255) NOT NULL COLLATE 'utf8_general_ci',
`email` varchar(255) NOT NULL COLLATE 'utf8_general_ci',
`created_at` DATETIME NOT NULL DEFAULT NOW(),
PRIMARY KEY (`id`),
UNIQUE KEY `email` (`email`)
) COLLATE = 'utf8_general_ci' ENGINE = INNODB AUTO_INCREMENT=1;

INSERT INTO `test`.`users` (`firstname`, `lastname`, `password`, `email`) VALUES
('johnny', 'charcosset', '123123', 'jcharcoset@codeur.online'),
('solange', 'harmonie', '123123', 'solange@codeur.online'),
('lionel', 'cote', '123123', 'l.cote@codeur.online');

CREATE TABLE `comments` (
`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
`content` TEXT NOT NULL COLLATE 'utf8_general_ci',
`created_at` DATETIME NOT NULL DEFAULT current_timestamp(),
PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


CREATE TABLE `roles` (
`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
`role` ENUM('Lecteur','Éditeur') NOT NULL DEFAULT 'Lecteur' COLLATE 'utf8_general_ci',
PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;