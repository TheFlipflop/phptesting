DROP DATABASE IF EXISTS `mytodo`;
CREATE DATABASE `mytodo`;

USE `mytodo`;

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for todos
-- ----------------------------
DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of todos
-- ----------------------------
INSERT INTO `todos` VALUES ('1', 'Got to Store', '0');
INSERT INTO `todos` VALUES ('2', 'Make the dish', '0');
INSERT INTO `todos` VALUES ('3', 'Take a nap', '1');
INSERT INTO `todos` VALUES ('4', 'Code PHP', '0');
SET FOREIGN_KEY_CHECKS=1;
