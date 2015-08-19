/*
Navicat MySQL Data Transfer

Source Server         : Dhuta Pratama
Source Server Version : 50542
Source Host           : dhutapratama.com:3306
Source Database       : dhutapra_stocknbar

Target Server Type    : MYSQL
Target Server Version : 50542
File Encoding         : 65001

Date: 2015-08-20 00:17:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for investments
-- ----------------------------
DROP TABLE IF EXISTS `investments`;
CREATE TABLE `investments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_investor_company` int(11) DEFAULT NULL,
  `id_startup` int(11) DEFAULT NULL,
  `invest_value` decimal(10,0) DEFAULT NULL,
  `publishment_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for investor_companys
-- ----------------------------
DROP TABLE IF EXISTS `investor_companys`;
CREATE TABLE `investor_companys` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `description` text,
  `legal_name` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `found_date` datetime DEFAULT NULL,
  `is_verified` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for investor_members
-- ----------------------------
DROP TABLE IF EXISTS `investor_members`;
CREATE TABLE `investor_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_investor_user` int(11) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `id_investor_position` int(11) DEFAULT NULL,
  `is_admin` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for investor_users
-- ----------------------------
DROP TABLE IF EXISTS `investor_users`;
CREATE TABLE `investor_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` text,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `backup_email` varchar(255) DEFAULT NULL,
  `user_picture_path` varchar(255) DEFAULT NULL,
  `confirmation_code` varchar(255) DEFAULT NULL,
  `is_verified` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for login_session
-- ----------------------------
DROP TABLE IF EXISTS `login_session`;
CREATE TABLE `login_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_exchange
-- ----------------------------
DROP TABLE IF EXISTS `startup_exchange`;
CREATE TABLE `startup_exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_startup` int(11) DEFAULT NULL,
  `sell_price` decimal(10,0) DEFAULT NULL,
  `buy_price` decimal(10,0) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_growth
-- ----------------------------
DROP TABLE IF EXISTS `startup_growth`;
CREATE TABLE `startup_growth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_startup` varchar(255) DEFAULT NULL,
  `provit` decimal(10,0) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_members
-- ----------------------------
DROP TABLE IF EXISTS `startup_members`;
CREATE TABLE `startup_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_startup` int(11) DEFAULT NULL,
  `id_startup_user` int(11) DEFAULT NULL,
  `is_admin` varchar(255) DEFAULT NULL,
  `id_startup_position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_positions
-- ----------------------------
DROP TABLE IF EXISTS `startup_positions`;
CREATE TABLE `startup_positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_stocks
-- ----------------------------
DROP TABLE IF EXISTS `startup_stocks`;
CREATE TABLE `startup_stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_startup` int(11) DEFAULT NULL,
  `stocks` varchar(255) DEFAULT NULL,
  `min_invest` decimal(10,0) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_users
-- ----------------------------
DROP TABLE IF EXISTS `startup_users`;
CREATE TABLE `startup_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` text,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `backup_email` varchar(255) DEFAULT NULL,
  `user_picture_path` varchar(255) DEFAULT NULL,
  `confirmation_code` varchar(255) DEFAULT NULL,
  `is_verified` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startup_value
-- ----------------------------
DROP TABLE IF EXISTS `startup_value`;
CREATE TABLE `startup_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_startup` int(11) DEFAULT NULL,
  `id_investment` int(11) DEFAULT NULL,
  `fund_value` varchar(255) DEFAULT NULL,
  `debt_value` varchar(255) DEFAULT NULL,
  `assets_value` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for startups
-- ----------------------------
DROP TABLE IF EXISTS `startups`;
CREATE TABLE `startups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startup_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `legal_name` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `npwp_number` varchar(255) DEFAULT NULL,
  `siup_number` varchar(255) DEFAULT NULL,
  `startup_logo_path` varchar(255) DEFAULT NULL,
  `startup_url` varchar(255) DEFAULT NULL,
  `found_date` datetime DEFAULT NULL,
  `is_verified` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for subscriber_investors
-- ----------------------------
DROP TABLE IF EXISTS `subscriber_investors`;
CREATE TABLE `subscriber_investors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `invitation_code` varchar(255) DEFAULT NULL,
  `id_invitor_subs` int(11) DEFAULT NULL,
  `invitor_table` varchar(255) DEFAULT NULL,
  `subscribe_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for subscriber_startups
-- ----------------------------
DROP TABLE IF EXISTS `subscriber_startups`;
CREATE TABLE `subscriber_startups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `startup_name` varchar(255) DEFAULT NULL,
  `invitation_code` varchar(255) DEFAULT NULL,
  `id_invitor_subs` int(11) DEFAULT NULL,
  `subscribe_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
