CREATE TABLE `comment` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `Text` text NOT NULL,
  `user_id` int NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO comment (`comment_id`, `product_id`, `Text`, `user_id`, `date`) VALUES ('1','1','Помойное ведро','3','2021-10-25 07:46:51'), ('2','2','Помойное ведро','1','2021-10-25 07:46:51'), ('3','1','Помойное ведро','1','2021-10-25 07:46:51'), ('4','1','Помойное ведро','1','2021-10-25 07:46:51'), ('5','2','Помойное ведро','1','2021-10-25 07:46:51'), ('6','2',' Фу','2','2022-03-25 01:16:25'), ('7','2',' Фу','2','2022-03-25 01:16:28'), ('8','2',' Фу','2','2022-03-25 01:17:44');
