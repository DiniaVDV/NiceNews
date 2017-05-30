-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Версія сервера:               10.1.19-MariaDB - mariadb.org binary distribution
-- ОС сервера:                   Win32
-- HeidiSQL Версія:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for homestead
CREATE DATABASE IF NOT EXISTS `homestead` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `homestead`;

-- Dumping structure for таблиця homestead.adverbs
CREATE TABLE IF NOT EXISTS `adverbs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(100,2) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.adverbs: ~0 rows (приблизно)
/*!40000 ALTER TABLE `adverbs` DISABLE KEYS */;
/*!40000 ALTER TABLE `adverbs` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.adverb_at_view
CREATE TABLE IF NOT EXISTS `adverb_at_view` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `leftsidebar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `righttsidebar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.adverb_at_view: ~0 rows (приблизно)
/*!40000 ALTER TABLE `adverb_at_view` DISABLE KEYS */;
/*!40000 ALTER TABLE `adverb_at_view` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.analitics_article
CREATE TABLE IF NOT EXISTS `analitics_article` (
  `category_id` int(10) unsigned NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  KEY `analitics_article_category_id_index` (`category_id`),
  KEY `analitics_article_article_id_index` (`article_id`),
  CONSTRAINT `analitics_article_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `analitics_article_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.analitics_article: ~0 rows (приблизно)
/*!40000 ALTER TABLE `analitics_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `analitics_article` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.articles: ~21 rows (приблизно)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`, `published_at`, `category_id`) VALUES
	(1, 1, 'Myirth', 'Some Text', '2017-03-29 22:10:51', NULL, '2017-03-29 22:11:43', 0),
	(2, 5, 'ADSa', 'asdasd', '2017-03-30 22:55:59', '2017-03-30 22:55:59', NULL, 0),
	(3, 5, 'ADSa', 'asdasd', '2017-03-30 22:56:56', '2017-03-30 22:56:56', NULL, 0),
	(4, NULL, 'ADSa', 'asdasd', '2017-03-30 22:56:56', '2017-03-30 22:56:56', NULL, 0),
	(5, 5, 'sdfsdf', 'sdfsdfsdfsdf', '2017-04-09 19:08:06', '2017-04-09 19:08:06', NULL, 0),
	(6, 5, 'sdfsdf', 'sdfsdfsdfsdf', '2017-04-09 19:08:21', '2017-04-09 19:08:21', NULL, 0),
	(7, NULL, 'sdfsdf', 'DDDDD', '2017-04-09 19:08:21', '2017-04-19 20:51:58', '2017-04-09 19:11:28', 0),
	(8, 5, 'New Test', 'somenwjflwwef', '2017-05-04 14:00:28', '2017-05-04 14:00:28', NULL, 0),
	(9, NULL, 'New Test', 'somenwjflwwef', '2017-05-04 14:00:28', '2017-05-04 14:00:28', NULL, 0),
	(10, 5, 'sgdg', 'sdgsdgsdvsv sfsdgdsg', '2017-05-04 14:01:10', '2017-05-04 14:01:10', NULL, 0),
	(11, NULL, 'sgdg', 'sdgsdgsdvsv sfsdgdsg', '2017-05-04 14:01:25', '2017-05-04 14:01:25', NULL, 0),
	(12, NULL, 'sdsdf', 'sdfsdfsdf', '2017-05-04 14:05:15', '2017-05-04 14:05:15', NULL, 0),
	(13, 5, 'New one', 'Boti', '2017-05-04 14:09:08', '2017-05-04 14:09:08', NULL, 0),
	(14, 5, 'Create new', 'some test what do you do?', '2017-05-04 14:16:45', '2017-05-04 14:16:45', NULL, 0),
	(15, 5, 'test 2', 'sffasfsaf as d asd sdsa', '2017-05-04 14:20:45', '2017-05-04 14:20:45', NULL, 0),
	(16, 5, 'ersfasfas', 'fasfasfas  asf sdd', '2017-05-04 14:25:32', '2017-05-04 14:25:32', NULL, 0),
	(17, 5, 'vdvsdvsd', 'sddv vsttssr seefef s', '2017-05-04 14:39:14', '2017-05-04 14:39:14', NULL, 0),
	(18, 5, 'qeqweqw', 'eqweqweqwe', '2017-05-04 14:41:52', '2017-05-04 14:41:52', NULL, 0),
	(19, 5, 'sdsdf', 'fsdfsdf', '2017-05-04 14:43:25', '2017-05-04 14:43:25', NULL, 0),
	(20, 5, 'wweweq', 'qwrqfdwvr rg rg', '2017-05-04 16:59:58', '2017-05-04 16:59:58', '2017-05-04 17:00:54', 0),
	(21, 5, 'sdfsd', 'sd fsdf f sdf sdfsd df df sdfds', '2017-05-04 21:38:02', '2017-05-04 21:38:02', NULL, 0);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.article_tag
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

-- Dumping data for table homestead.article_tag: ~5 rows (приблизно)
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
INSERT INTO `article_tag` (`article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2017-05-04 16:20:44', '2017-05-04 16:20:44'),
	(20, 1, '2017-05-04 17:39:48', '2017-05-04 17:39:48'),
	(20, 3, '2017-05-04 17:39:48', '2017-05-04 17:39:48'),
	(21, 2, '2017-05-04 21:38:03', '2017-05-04 21:38:03'),
	(21, 3, '2017-05-04 21:38:03', '2017-05-04 21:38:03');
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.article_visited
CREATE TABLE IF NOT EXISTS `article_visited` (
  `article_id` int(10) unsigned NOT NULL,
  `today_visited` int(11) NOT NULL,
  `total_visited` int(11) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `article_visited_article_id_index` (`article_id`),
  CONSTRAINT `article_visited_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.article_visited: ~0 rows (приблизно)
/*!40000 ALTER TABLE `article_visited` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_visited` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.categories: ~0 rows (приблизно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `title`, `position`) VALUES
	(1, 'economics', 'Економика', 1),
	(2, 'politics', 'Политика', 2),
	(3, 'sobytiya', 'События', 3),
	(4, 'kyiv news', 'Киевские новости', 4),
	(5, 'technology', 'Технологии', 5),
	(6, 'science', 'Наука', 6),
	(7, 'auto', 'Авто', 7),
	(8, 'sport', 'Спорт', 8);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.migrations: ~12 rows (приблизно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_resets_table', 1),
	(18, '2017_03_05_183620_create_articales_table', 1),
	(19, '2017_05_04_152903_create_tags_table', 2),
	(22, '2017_05_29_202722_create_comments_table', 3),
	(24, '2017_05_29_202839_create_navbar_menu_table', 4),
	(25, '2017_05_29_202943_create_adverts_table', 5),
	(26, '2017_05_29_203016_create_roles_table', 5),
	(27, '2017_05_29_203138_create_article_visited_table', 5),
	(28, '2017_05_29_202658_create_categories_table', 6),
	(29, '2017_05_29_204007_create_analitics_article_table', 6),
	(30, '2017_05_29_212149_create_rosinger_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.password_resets: ~0 rows (приблизно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.roles: ~0 rows (приблизно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.rosinger
CREATE TABLE IF NOT EXISTS `rosinger` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rosinger_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.rosinger: ~0 rows (приблизно)
/*!40000 ALTER TABLE `rosinger` DISABLE KEYS */;
/*!40000 ALTER TABLE `rosinger` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.tags: ~4 rows (приблизно)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'personal', '2017-05-04 15:47:01', '2017-05-04 15:47:01'),
	(2, 'work', '2017-05-04 16:49:40', '2017-05-04 16:49:40'),
	(3, 'food', '2017-05-04 16:49:58', '2017-05-04 16:49:58'),
	(4, 'coding', '2017-05-04 16:50:07', '2017-05-04 16:50:07');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.users
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.users: ~5 rows (приблизно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'John Doe', 'john@email.com', '$2y$10$8tUeFYH2jNvy1KMrkiIjquy9ovzON9bvGMc1giVXjjPpz5GVBRd/i', NULL, '2017-03-23 23:07:03', '2017-03-23 23:07:03'),
	(2, 'Den', 'dinia_vdv@ukr.net', '$2y$10$R/HpO7wt4VOiWwWBPZRpqO31MW89y01ESG/fW9z10du3Zmmp5h8OO', 'ktrAROkGcEvxmVEjDGS2mryRLurU8JGMPbwOstNY0kbELI8GHu3lVU5CtHbO', '2017-03-30 22:21:03', '2017-03-30 22:21:03'),
	(3, 'Di', 'dinia@ukr.net', '$2y$10$KVrXSdRAz1bsilg4mnntPOofQUftZPWfk8oTg8sdTTzr3L0OPaflu', 'JIIWtFgtktAh79GCcnkWWxYhcpsgfvsyyY6DBndeCB6jUZ5iPgR4SKj1E7yU', '2017-03-30 22:36:41', '2017-03-30 22:36:41'),
	(4, 'Dinia', 'dinia@ukr.ne', '$2y$10$KdDvHCenAVAzu.NETdtXm.vwYXmxBy1cjekb.dbCR3gHSUIVS43aS', 'aFN0BTE8xEvht5CdVIbasQZrmMxUWL50dXuBBHze4LltI2yzw3pCWOmadUVX', '2017-03-30 22:37:15', '2017-03-30 22:37:15'),
	(5, 'De', 'dinia@ukr.n', '$2y$10$X35HpUvqY5hhLf2uTtScW.4DFxHBJB9NmFK.lSI5oKs4ok/lMR0.O', '8PrLMn3znickbHPhebnPeZ15uhqRX6mTc8p0zY2Hjriki7tjwxZCZU4KfoPN', '2017-03-30 22:38:30', '2017-03-30 22:38:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for таблиця homestead.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `user_role_user_id_index` (`user_id`),
  KEY `user_role_role_id_index` (`role_id`),
  CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table homestead.user_role: ~0 rows (приблизно)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
