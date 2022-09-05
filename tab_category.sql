CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;
INSERT INTO category (`id`, `name`, `sort_order`, `status`) VALUES ('13','Ноутбуки','1','1'), ('14','Планшеты','2','1'), ('15','Мониторы','3','1'), ('16','Игровые компьютеры','4','1');
