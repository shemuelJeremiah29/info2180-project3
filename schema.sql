DROP DATABASE IF EXISTS cheapoMail;
CREATE DATABASE cheapoMail;
USE cheapoMail;

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
    `id` int(11) NOT NULL auto_increment,
    `firstname` char(20) NOT NULL default '',
    `lastname` char(20) NOT NULL default '',
    `username` char(35) NOT NULL default '',
    `password` char(64) NOT NULL default '',
    PRIMARY KEY  (`id`)
);

DROP TABLE IF EXISTS `Messages`;
CREATE TABLE `Messages` (
    `id` int(11) NOT NULL,
    `recipient_id` int(11) NOT NULL,
    `sender_id` int(11) NOT NULL,
    `subject` char(100) NOT NULL default '',
    `body` TEXT(4500) NOT NULL default '',
    `date_sent` DATE,
    PRIMARY KEY  (`id`)
);
DROP TABLE IF EXISTS `Messages_read`;
CREATE TABLE `Messages_read` (
    `id` int(11) NOT NULL,
    `message_id` int(11) NOT NULL,
    `reader_id` int(11) NOT NULL,
    `date_read` DATE,
    PRIMARY KEY  (`id`)
);

INSERT INTO `Users` VALUES (1, 'John', 'Doe', 'admin',SHA2('password123',256)
);