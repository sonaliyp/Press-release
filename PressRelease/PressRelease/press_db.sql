
create database press;

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `admin` int(11) NOT NULL
) 
