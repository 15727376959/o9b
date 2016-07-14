/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : 127.0.0.1:3306
Source Database       : lea

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-07-11 19:52:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wg_admin
-- ----------------------------
DROP TABLE IF EXISTS `wg_admin`;
CREATE TABLE `wg_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(60) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of wg_admin
-- ----------------------------
INSERT INTO `wg_admin` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f88', '2016-07-11 18:40:58');

-- ----------------------------
-- Table structure for wg_ip
-- ----------------------------
DROP TABLE IF EXISTS `wg_ip`;
CREATE TABLE `wg_ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) DEFAULT NULL,
  `statu` varchar(255) DEFAULT '0',
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of wg_ip
-- ----------------------------
INSERT INTO `wg_ip` VALUES ('1', '::1', '0', '1468236805');
