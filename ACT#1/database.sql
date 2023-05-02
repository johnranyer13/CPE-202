/* Create Database and Table */
create database ACT_1;

use ACT_1;

CREATE TABLE `STUDENT` (
  `id_num` int(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `age` int(30) NOT NULL,
  `program` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `year` int(30) NOT NULL,
  PRIMARY KEY  (`id_num`)
);