/*
Navicat MySQL Data Transfer

Source Server         : gdgtangier
Source Server Version : 50636
Source Host           : us-cdbr-iron-east-05.cleardb.net:3306
Source Database       : heroku_9315e072c4433ad

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2018-03-23 13:25:30
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
  `state` enum('cancelled','attended','missed') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of event_user
-- ----------------------------
INSERT INTO `event_user` VALUES ('1', '1', '11', 'xrZU4', null, '2018-03-20 04:05:50', '2018-03-20 04:05:50');
INSERT INTO `event_user` VALUES ('11', '1', '51', 'oe0Kb', null, '2018-03-20 12:06:35', '2018-03-20 12:06:35');
INSERT INTO `event_user` VALUES ('21', '1', '61', 'pzq6q', null, '2018-03-20 12:06:59', '2018-03-20 12:06:59');
INSERT INTO `event_user` VALUES ('31', '1', '81', 'JmVfq', null, '2018-03-20 13:07:26', '2018-03-20 13:07:26');
INSERT INTO `event_user` VALUES ('41', '1', '91', 'jjoOc', null, '2018-03-20 13:39:10', '2018-03-20 13:39:10');
INSERT INTO `event_user` VALUES ('51', '1', '101', '68ZnJ', null, '2018-03-20 14:37:51', '2018-03-20 14:37:51');
INSERT INTO `event_user` VALUES ('61', '1', '111', 'FWM2D', null, '2018-03-20 14:57:31', '2018-03-20 14:57:31');
INSERT INTO `event_user` VALUES ('71', '1', '121', 'HxAg5', null, '2018-03-20 15:29:44', '2018-03-20 15:29:44');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `assessment` varchar(255) DEFAULT NULL,
  `invitations_available` int(11) NOT NULL,
  `scheduled_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('1', 'Kotlin 101: We\'ll be building our first Hello World app', '<p>\nWe\'ll be building our first Hello World app using Kotlin. <br><br>\n\nRequirements:\n<ul>\n<li>Android Studio installed</li>\n</ul>\n</p>', 'https://www.meetup.com/gdgtangier/events/248911718/', null, '8', '2018-03-24 05:00:00');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('11', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('21', '2018_02_24_220433_create_events_table', '1');
INSERT INTO `migrations` VALUES ('31', '2018_02_24_231612_create_table_event_user', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'John Doe', 'john@email.com', '$2y$10$kTuo5IF.kmfgPgtA75lV/.ejdECoRbJZGqmLVsfl6f25bxzpDOQ.6', 'user', null, 'hello this john duo hhh', null, null, null, null, null, null, null, null, null, '2018-02-24 21:46:19', '2018-03-20 15:36:51');
INSERT INTO `users` VALUES ('11', 'Souhail M', 'souhail.merroun@hotmail.com', '$2y$10$xvdqPHOaAGu/JZJoG3eNKuRZc3p7bXaiw890iGUB6Ah4e0w4wZHx.', 'admin', '06 25 20 11 61', 'Hi there, I am born in Tangier. I\'ve been passionate about building apps since high school!', 'Laravel, Vue', 'Working in Casablanca at OSP S.A and studying Computer Science at Uopeople', 'Tangier', '1996-05-23 00:00:00', 'https://github.com/souhailmerroun', 'https://www.linkedin.com/in/souhailmerroun/', null, 'https://twitter.com/SouhailMerroun', 'dvtzvX2Zb1nkldUnTeebYyWypGlIAC8AjqWOvGwcAK8GNqTkuRmheTrqbg70', '2018-02-24 23:43:26', '2018-03-21 11:20:03');
INSERT INTO `users` VALUES ('31', 'Abdellah Chadidi', 'chadidi97@gmail.com', '$2y$10$0yey1w75WUqxoExmf4KR2.ai10epv0Tjq./Eo98h6V.agBoMjOpsG', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-02-26 20:05:41', '2018-02-26 20:05:41');
INSERT INTO `users` VALUES ('41', 'Nourelhouda', 'Nourelhouda.el@gmail.com', '$2y$10$gAOIUzs76MjVloE6Z2Hm3.DLtvXWlj.RBLU7D6QhODHtrDFSQfpGu', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-02-27 16:19:39', '2018-02-27 16:19:39');
INSERT INTO `users` VALUES ('51', 'Houda', 'houda.mouttalib@gmail.com', '$2y$10$2qS7qyj1vt71k0RV6FthCOGjUSQiGO9yEbkdTh7AoVDV6tbkFcMzK', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 12:06:25', '2018-03-20 12:06:25');
INSERT INTO `users` VALUES ('61', 'Houssain Amrani', 'amranidev@gmail.com', '$2y$10$v3FNum6JaK7DlKEnOG/J5ODABO7bvQ/YNq.SQn8jThB5bE9VAU032', 'admin', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 12:06:41', '2018-03-20 12:06:41');
INSERT INTO `users` VALUES ('71', 'Imtiyaz CHOUJAI', 'choujai.imtiyaz@gmail.com', '$2y$10$WUlHSDusMU8eaQMZz4MDqeHCMrc7RCmj6Iq3pqV/sLXXVWK5b5nh2', 'user', null, null, null, null, null, null, null, null, null, null, 'Coe1306WsLdUKNtmr8DN3rwXHArChgKMpxz5vZhWDdTo4jri4zVVdZY93NbO', '2018-03-20 12:37:36', '2018-03-20 12:37:36');
INSERT INTO `users` VALUES ('81', 'Chrifi Alaoui Mehdi', 'tonextgeneration@gmail.com', '$2y$10$0gO8Pdr9N56aA1uWA9M3VOQFK2ObbaP50PrKQSMXJoIePR2bQ03M2', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 13:07:16', '2018-03-20 13:07:16');
INSERT INTO `users` VALUES ('91', 'alexandre', 'kone.alexandr@gmail.com', '$2y$10$XcX.RBoe2iJdHkUrZl5f5.LG2tB37SnmA5IDrs7KUT8hGf3RM8dXm', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 13:38:52', '2018-03-20 13:38:52');
INSERT INTO `users` VALUES ('101', 'Jihane', 'Benkhadra.jihane@gmail.com', '$2y$10$9teIwMw2triwpN3rEcfCX.7z5M17u6dvt5oUcV7dWlSjLYjpPMuJu', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 14:35:25', '2018-03-20 14:35:25');
INSERT INTO `users` VALUES ('111', 'Mouad Fahsi Ben Sellam', 'mouad.fahsi@outlook.com', '$2y$10$kST0cRUnV.TyQeP7hsEVD.MJg0p31z.r8V0IvbS8GXV07KnQfxcQK', 'user', null, null, null, null, null, null, null, null, null, null, 'F40fx6RIQx95RLidYx7LZaaMea8loRqS0eDrQdNZOpEGuJmxRrpDJOjhCbz4', '2018-03-20 14:57:01', '2018-03-20 14:57:01');
INSERT INTO `users` VALUES ('121', 'almokhtar bekkour', 'moktarb911@gmail.com', '$2y$10$v7bdI2nWAMijISohah.BNOU11dl1FD7Nq.T7nLDwQc.TRODQIJiZO', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 15:29:36', '2018-03-20 15:29:36');
INSERT INTO `users` VALUES ('131', 'Nawfal', 'nawfalhaddi@gmail.com', '$2y$10$fZ2m5/6sg.0REtpja2pY.uhy0cgLcU4MEnpO8eIxo1oA8Ntgyv1pa', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 16:23:43', '2018-03-20 16:23:43');
INSERT INTO `users` VALUES ('141', 'Saber El Harti', 'saberelharti@gmail.com', '$2y$10$2RguKuaOTsHr1PG0.dm57.T8jpgR0WK1VZ3Yd05gx1noaOEggaxc.', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 16:32:10', '2018-03-20 16:32:10');
INSERT INTO `users` VALUES ('151', 'mohcineabkhar', 'mohcineabkhar.officail@gmail.com', '$2y$10$O6Pi9wfxMSTxB/4FIyEnvOmNlRwaUAKbSYCBhSac7xdX7FxEy5QYC', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 17:36:30', '2018-03-20 17:36:30');
INSERT INTO `users` VALUES ('161', 'Metanas', 'com.com404@gmail.com', '$2y$10$UVd4GhtR6X.3.jN1CdwUv.Vn7JMFQ8oGEK5nAlqm7ynuNk7vHBJ6a', 'user', null, null, null, null, null, null, null, null, null, null, null, '2018-03-20 21:48:50', '2018-03-20 21:48:50');
