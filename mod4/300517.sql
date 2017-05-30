-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.19-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных homestead
CREATE DATABASE IF NOT EXISTS `homestead` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `homestead`;

-- Дамп структуры для таблица homestead.adverts
CREATE TABLE IF NOT EXISTS `adverts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(100,2) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(10) unsigned NOT NULL,
  `rightsidebar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `leftsidebar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.adverts: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `adverts` DISABLE KEYS */;
INSERT INTO `adverts` (`id`, `title`, `price`, `content`, `discount`, `name_company`, `site_company`, `position`, `rightsidebar`, `leftsidebar`) VALUES
	(1, 'right', 123.00, 'Aloha', '', 'DDD', '', 1, 'true', 'false'),
	(2, 'right', 123.00, 'Aloha', '', 'DDD', '', 2, 'true', 'false'),
	(3, 'AAA', 123.00, 'SSS', '', 'ASDASDA', '', 3, 'false', 'true'),
	(4, 'SomeRRR', 123.00, 'DDD', '', 'ADADAD', '', 2, 'false', 'true');
/*!40000 ALTER TABLE `adverts` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.analitics_article
CREATE TABLE IF NOT EXISTS `analitics_article` (
  `category_id` int(10) unsigned NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  KEY `analitics_article_category_id_index` (`category_id`),
  KEY `analitics_article_article_id_index` (`article_id`),
  CONSTRAINT `analitics_article_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `analitics_article_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.analitics_article: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `analitics_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `analitics_article` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  KEY `articles_caregory_id_foreign` (`category_id`),
  CONSTRAINT `articles_caregory_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.articles: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `user_id`, `title`, `body`, `img`, `category_id`, `published_at`, `created_at`, `updated_at`) VALUES
	(4, NULL, 'ADSa', 'asdasd', 'An158.JPG', 1, '2017-01-30 22:11:43', '2017-03-30 22:56:56', '2017-03-30 22:56:56'),
	(7, NULL, 'sdfsdf', 'DDDDD', 'DSC01508.JPG', 1, '2016-04-09 19:11:28', '2017-04-09 19:08:21', '2017-04-19 20:51:58'),
	(9, NULL, 'New Test', 'somenwjflwwef', 'P1140714.jpg', 1, '2015-05-29 22:11:43', '2017-05-04 14:00:28', '2017-05-04 14:00:28'),
	(11, NULL, 'sgdg', 'sdgsdgsdvsv sfsdgdsg', 'DSC01508.JPG', 1, '2017-03-29 22:11:43', '2017-05-04 14:01:25', '2017-05-04 14:01:25'),
	(12, NULL, 'sdsdf', 'sdfsdfsdf', 'P1140714.jpg', 6, '2017-03-29 22:11:43', '2017-05-04 14:05:15', '2017-05-04 14:05:15');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.article_tag
CREATE TABLE IF NOT EXISTS `article_tag` (
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `article_tag_article_id_index` (`article_id`),
  KEY `article_tag_tag_id_index` (`tag_id`),
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.article_tag: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
INSERT INTO `article_tag` (`article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
	(9, 3, NULL, NULL),
	(9, 1, NULL, NULL),
	(4, 1, NULL, NULL),
	(11, 1, NULL, NULL);
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.article_visited
CREATE TABLE IF NOT EXISTS `article_visited` (
  `article_id` int(10) unsigned NOT NULL,
  `today_visited` int(11) NOT NULL,
  `total_visited` int(11) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `article_visited_article_id_index` (`article_id`),
  CONSTRAINT `article_visited_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.article_visited: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `article_visited` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_visited` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.categories: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `title`, `position`) VALUES
	(1, 'economics', 'Економика', 1),
	(2, 'politics', 'Политика', 2),
	(3, 'sobytiya', 'События', 3),
	(4, 'kyiv news', 'Киевские новости', 4),
	(5, 'technology', 'Технологии', 5),
	(6, 'science', 'Наука', 6),
	(7, 'auto', 'Авто', 7),
	(8, 'sport', 'Спорт', 8),
	(9, 'analitics', 'Аналитика', 9);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.migrations: ~11 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_resets_table', 1),
	(18, '2017_03_05_183620_create_articales_table', 1),
	(19, '2017_05_04_152903_create_tags_table', 2),
	(22, '2017_05_29_202722_create_comments_table', 3),
	(25, '2017_05_29_202943_create_adverts_table', 5),
	(26, '2017_05_29_203016_create_roles_table', 5),
	(27, '2017_05_29_203138_create_article_visited_table', 5),
	(28, '2017_05_29_202658_create_categories_table', 6),
	(29, '2017_05_29_204007_create_analitics_article_table', 6),
	(30, '2017_05_29_212149_create_rosinger_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.navbars
CREATE TABLE IF NOT EXISTS `navbars` (
  `id` int(10) unsigned NOT NULL,
  `alias` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `for_moderator` varchar(50) NOT NULL,
  `for_reg_users` int(10) unsigned NOT NULL DEFAULT '0',
  `for_unreg_users` int(10) unsigned NOT NULL DEFAULT '0',
  `for_admin` int(10) unsigned NOT NULL DEFAULT '0',
  `position` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы homestead.navbars: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `navbars` DISABLE KEYS */;
INSERT INTO `navbars` (`id`, `alias`, `title`, `for_moderator`, `for_reg_users`, `for_unreg_users`, `for_admin`, `position`) VALUES
	(0, 'profile', 'Профиль', '1', 1, 0, 1, 2),
	(1, 'login', 'Войти', '0', 0, 1, 0, 2),
	(3, 'register', 'Регистрация', '0', 0, 1, 0, 1),
	(4, 'admin_panel', 'Админ панель', '0', 0, 0, 1, 1);
/*!40000 ALTER TABLE `navbars` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.roles: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `title`) VALUES
	(1, 'admin', 'Андминистратор'),
	(2, 'moderator', 'Модератор');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.rosinger
CREATE TABLE IF NOT EXISTS `rosinger` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rosinger_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.rosinger: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `rosinger` DISABLE KEYS */;
/*!40000 ALTER TABLE `rosinger` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.tags: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `title`) VALUES
	(1, 'personal', '2017-05-04 15:47:01', '2017-05-04 15:47:01', 'личное'),
	(2, 'work', '2017-05-04 16:49:40', '2017-05-04 16:49:40', 'работа'),
	(3, 'food', '2017-05-04 16:49:58', '2017-05-04 16:49:58', 'еда'),
	(4, 'coding', '2017-05-04 16:50:07', '2017-05-04 16:50:07', 'кодинг');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.users: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(6, 'Dinia', 'dinia@i.ua', '$2y$10$HAWNH2UgJGWDw1vcrE9sz.sVBeN0TplCsTJYdvKIfBCKemNmMWiqO', 'ivESZvA91mR4hpmmsXLh6uUDLF2oBe6sgIUGgnHpURbttZjAICgnAbkZGPad', '2017-05-30 11:22:42', '2017-05-30 11:22:42'),
	(7, 'Jhon', 'jhon@i.ua', '$2y$10$FDygdMKmBmvniiNvlh7nX.7nuuHotQmEbt.onFghAvLTzKgGuPRhC', NULL, '2017-05-30 13:11:11', '2017-05-30 13:11:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица homestead.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `user_role_user_id_index` (`user_id`),
  KEY `user_role_role_id_index` (`role_id`),
  CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы homestead.user_role: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
	(6, 1),
	(6, 2);
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
