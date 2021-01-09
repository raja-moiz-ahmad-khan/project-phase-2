create database `pp2`;

use `pp2`;

CREATE TABLE `user` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `products` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `login_id` int(11) NOT NULL,
   code varchar(100) NOT NULL,
  instock boolean NOT NULL,
  discount float NOT NULL,
  size varchar(100) NOT NULL,
  details text(200) NOT NULL,
  image varchar(200) NOT NULL,


  PRIMARY KEY  (`id`),
  CONSTRAINT FK_products_1
  FOREIGN KEY (login_id) REFERENCES user(id)
  ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;

