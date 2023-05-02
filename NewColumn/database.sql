/* Create Database and Table */
create database New_Col;

use New_Col;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `age` int(3),
  `email` varchar(100),
  `mobile` varchar(15),
  PRIMARY KEY  (`id`)
);