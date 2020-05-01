create database anggota;

use anggota;

CREATE TABLE `datapekerja` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `alamat` varchar(100),
  `noktp` varchar(30),
  `jabatan` varchar(30),
  PRIMARY KEY  (`id`)
); 