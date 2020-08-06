CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `social` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `students` (`id`, `name`, `class`, `social`, `science`, `math`) VALUES
(2,	'Max Ruin',	'Three',	86,	57,	86),
(3,	'Arnold',	'Three',	56,	41,	76),
(4,	'Krish Star',	'Four',	62,	52,	72),
(5,	'John Mike',	'Four',	62,	82,	92),
(6,	'Gwen',	'Four',	58,	93,	83),
(7,	'My John Rob',	'Fifth',	79,	64,	74),
(8,	'Rupert',	'Five',	89,	84,	94),
(9,	'Tes Qry',	'Six',	77,	61,	71),
(10,	'Charlotte',	'Four',	56,	44,	56),
(11,	'New Name',	'Five',	75,	78,	52);
