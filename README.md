<Database Information>

!! notes !!

CREATE TABLE `notes` (
 `id` int(255) NOT NULL AUTO_INCREMENT,
 `body` text NOT NULL,
 `user_id` int(255) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `users_id` (`user_id`),
 CONSTRAINT `users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci


!! users !!

CREATE TABLE `users` (
 `id` int(255) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
 `email` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `user_email_idx` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
