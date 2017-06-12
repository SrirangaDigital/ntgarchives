<?php

define('DB_SCHEMA', 'CREATE DATABASE IF NOT EXISTS :db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci');

define('METADATA_TABLE_L1_SCHEMA', 'CREATE TABLE `' . METADATA_TABLE_L1 . '` (
  `albumID` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `imageAvailable` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`albumID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4');

define('METADATA_TABLE_L2_SCHEMA', 'CREATE TABLE `' . METADATA_TABLE_L2 . '` (
  `id` varchar(50) NOT NULL,
  `albumID` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4');

define('METADATA_TABLE_L3_SCHEMA', 'CREATE TABLE IF NOT EXISTS `' . METADATA_TABLE_L3 . '` (
`name` varchar(1000), 
`email` varchar(100), 
`profession` varchar(500), 
`password` varchar(100), 
`affiliation` varchar(2000), 
`misc` varchar(1000), 
`isverified` varchar(1), 
`visitcount` int(5), 
`hash` varchar(64), 
`timestamp` varchar(20), 
`userid` int(6) AUTO_INCREMENT, PRIMARY KEY(userid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4');

define('METADATA_TABLE_L4_SCHEMA', 'CREATE TABLE IF NOT EXISTS `' . METADATA_TABLE_L4 . '` (
`hash` varchar(100), 
`email` varchar(100), 
`name` varchar(1000), 
`password` varchar(100), 
`timestamp` varchar(100), 
`resetid` int(6) AUTO_INCREMENT, PRIMARY KEY (resetid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4');

define('CHAR_ENCODING_SCHEMA', 'SET NAMES utf8mb4');

?>
