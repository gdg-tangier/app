/*
Navicat MySQL Data Transfer

Source Server         : gdgtangier
Source Server Version : 50636
Source Host           : us-cdbr-iron-east-05.cleardb.net:3306
Source Database       : heroku_9315e072c4433ad

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2018-03-20 03:01:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for event_user
-- ----------------------------
DROP TABLE IF EXISTS `event_user`;
CREATE TABLE `event_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of event_user
-- ----------------------------
INSERT INTO `event_user` VALUES ('1', '1', '11', 'SzxNl', '2018-02-24 23:46:22', '2018-02-24 23:46:22');
INSERT INTO `event_user` VALUES ('11', '1', '21', 'yUPpF', '2018-02-24 23:50:02', '2018-02-24 23:50:02');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `assessment` varchar(255) DEFAULT NULL,
  `invitations_count` int(11) NOT NULL,
  `scheduled_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('1', 'Cloud Study Jam', 'https://www.meetup.com/gdgtangier/events/247094455', null, '20', '2018-02-24 16:00:00');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('61', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('71', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('81', '2018_02_24_220433_create_events_table', '1');
INSERT INTO `migrations` VALUES ('91', '2018_02_24_231612_create_table_event_user', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `phone_number` varchar(255) DEFAULT NULL,
  `bio` text,
  `skills` text,
  `current_position` text,
  `city` varchar(255) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'John Doe', 'john@email.com', '$2y$10$kTuo5IF.kmfgPgtA75lV/.ejdECoRbJZGqmLVsfl6f25bxzpDOQ.6', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-02-24 21:46:19', '2018-02-24 21:46:19');
INSERT INTO `users` VALUES ('11', 'Souhail M', 'souhail.merroun@hotmail.com', '$2y$10$xvdqPHOaAGu/JZJoG3eNKuRZc3p7bXaiw890iGUB6Ah4e0w4wZHx.', 'admin', '06 25 20 11 61', 'Hi there, I am born in Tangier. I\'ve been passionate about building apps since high school!', 'I am good with Laravel.', 'Working in Casablanca at OSP S.A and studying Computer Science at Uopeople', 'Tangier', '1996-05-23 00:00:00', 'https://github.com/souhailmerroun', 'https://www.linkedin.com/in/souhailmerroun/', null, 'https://twitter.com/SouhailMerroun', 'cBQwC6vz1JCbtinkJOsfPFq1bBHP6iPh2uHMeqp4FFc0GiYFduqUuDk3Vu0D', '2018-02-24 23:43:26', '2018-02-24 23:45:47');
INSERT INTO `users` VALUES ('21', 'Amrani', 'amrani@amrani.amrani', '$2y$10$2gXdiit5kr7UjEK5fuoL4Odd74mlApgD2rsEm31UuPO3E6QLSTFVq', 'admin', null, null, null, null, null, null, null, null, null, null, null, '2018-02-24 23:49:36', '2018-02-24 23:49:36');
INSERT INTO `users` VALUES ('31', 'Abdellah Chadidi', 'chadidi97@gmail.com', '$2y$10$0yey1w75WUqxoExmf4KR2.ai10epv0Tjq./Eo98h6V.agBoMjOpsG', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-02-26 20:05:41', '2018-02-26 20:05:41');
INSERT INTO `users` VALUES ('41', 'Nourelhouda', 'Nourelhouda.el@gmail.com', '$2y$10$gAOIUzs76MjVloE6Z2Hm3.DLtvXWlj.RBLU7D6QhODHtrDFSQfpGu', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-02-27 16:19:39', '2018-02-27 16:19:39');
