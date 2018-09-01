-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `refer` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `refer`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `name`, `email`, `phone`) VALUES
(5,	'Dhaneesh Kumar1',	'ragu3610@gmail.com',	'8012861101'),
(6,	'test',	'test@gmail.com',	'1234567890'),
(7,	'sdfsdfsdfee',	'sdfsdfsdf',	'sdfsdfsdf');

-- 2018-09-01 10:02:44
