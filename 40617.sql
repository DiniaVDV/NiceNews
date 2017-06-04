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

-- Dumping structure for таблиця mod4.adverts
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.adverts: ~4 rows (приблизно)
/*!40000 ALTER TABLE `adverts` DISABLE KEYS */;
INSERT INTO `adverts` (`id`, `title`, `price`, `content`, `discount`, `name_company`, `site_company`, `position`, `rightsidebar`, `leftsidebar`, `created_at`, `updated_at`) VALUES
	(1, 'right', 123.00, 'Aloha', '', 'DDD', 'ukr.net', 1, 'Нет', 'Нет', NULL, '2017-06-03 20:16:27'),
	(2, 'right', 123.00, 'Aloha', '', 'DDD', 'php-academy.kiev.ua', 2, 'Да', 'Нет', NULL, NULL),
	(3, 'AAA', 123.00, 'SSS', '', 'ASDASDA', 'simens.com', 3, 'Нет', 'Да', NULL, NULL),
	(4, 'SomeRRR', 123.00, 'DDD', '', 'ADADAD', 'hotline.ua', 2, 'Нет', 'Да', NULL, NULL),
	(8, 'zvzxzv', 21.00, 'fa', '', 'asf', '', 1, 'Нет', 'Да', '2017-06-02 23:47:40', '2017-06-02 23:47:40');
/*!40000 ALTER TABLE `adverts` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special_section` int(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  KEY `articles_caregory_id_foreign` (`category_id`),
  CONSTRAINT `articles_caregory_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.articles: ~36 rows (приблизно)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `user_id`, `published_at`, `title`, `body`, `img`, `category_id`, `created_at`, `updated_at`, `special_section`) VALUES
	(22, 8, '2017-03-30 22:44:59', 'Что такое Lorem Ipsum?', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', '4361592-picture.jpg', 3, '2016-05-30 00:00:00', '2017-06-02 21:08:31', 1),
	(23, 8, '2017-04-30 22:56:04', 'Что такое Lorem Ipsum?', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'DSC07019.JPG', 1, '2017-03-30 00:00:00', NULL, NULL),
	(24, 9, '2017-05-30 22:56:04', 'Откуда он появился?', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.', '4361592-picture.jpg', 2, '2017-05-31 06:50:00', '2017-06-02 21:02:23', 1),
	(25, 9, '2017-05-30 22:56:04', 'Почему он используется?', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'An158.JPG', 3, '2017-05-29 00:00:00', NULL, 1),
	(26, 10, '2017-05-30 22:56:04', 'Где его взять?', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.', 'P1140714.jpg', 4, '2017-05-29 00:00:00', NULL, NULL),
	(27, 10, '2017-05-30 22:56:04', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.\n\nAenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.\n\nAliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.\n\nMaecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.\n\nPraesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'P1140696.jpg', 6, '2017-05-29 00:00:00', NULL, NULL),
	(28, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.\n\nMaecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.\n\nSed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.\n\nNam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.\n\nMorbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.\n\nAenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.\n\nNulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.', 'P1150555.JPG', 5, '2017-05-29 00:00:00', NULL, NULL),
	(29, 8, '2017-05-30 22:56:05', 'Что такое Lorem Ipsum?', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'DSC07019.JPG', 1, '2017-05-29 00:00:00', NULL, NULL),
	(30, 9, '2017-05-30 22:56:05', 'Откуда он появился?', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.', 'DSC01508.JPG', 6, '2017-05-29 00:00:00', NULL, NULL),
	(31, 9, '2017-05-30 22:56:05', 'Почему он используется?', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'An158.JPG', 5, '2017-05-29 00:00:00', NULL, NULL),
	(32, 10, '2017-05-30 22:56:05', 'Где его взять?', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.', 'P1140714.jpg', 4, '2017-05-29 00:00:00', NULL, NULL),
	(33, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.\n\nAenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.\n\nAliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.\n\nMaecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.\n\nPraesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'P1140696.jpg', 3, '2017-05-29 00:00:00', NULL, NULL),
	(34, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.\n\nMaecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.\n\nSed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.\n\nNam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.\n\nMorbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.\n\nAenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.\n\nNulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.', 'P1150555.JPG', 2, '2017-05-29 00:00:00', NULL, NULL),
	(35, 8, '2017-05-30 22:56:05', 'Что такое Lorem Ipsum?', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'DSC07019.JPG', 2, '2017-05-29 00:00:00', NULL, NULL),
	(36, 7, '2017-05-30 22:56:05', 'Откуда он появился? от туда)', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.', 'DSC01508.JPG', 1, '2017-05-29 00:00:00', '2017-05-31 16:38:27', NULL),
	(37, 9, '2017-05-30 22:56:05', 'Почему он используется?', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'An158.JPG', 4, '2017-05-29 00:00:00', NULL, NULL),
	(38, 10, '2017-05-30 22:56:05', 'Где его взять?', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.', 'P1140714.jpg', 3, '2017-05-29 00:00:00', NULL, NULL),
	(39, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.\n\nAenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.\n\nAliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.\n\nMaecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.\n\nPraesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'P1140696.jpg', 3, '2017-05-29 00:00:00', NULL, NULL),
	(40, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.\n\nMaecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.\n\nSed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.\n\nNam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.\n\nMorbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.\n\nAenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.\n\nNulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.', 'P1150555.JPG', 3, '2017-05-29 00:00:00', NULL, NULL),
	(42, 9, '2017-05-30 22:56:05', 'Откуда он появился?', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.', 'DSC01508.JPG', 5, '2017-05-29 00:00:00', NULL, 1),
	(43, 9, '2017-05-30 22:56:05', 'Почему он используется?', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'An158.JPG', 6, '2017-05-29 00:00:00', NULL, 1),
	(44, 10, '2017-05-30 22:56:05', 'Где его взять?', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.', 'P1140714.jpg', 4, '2017-05-29 00:00:00', NULL, NULL),
	(45, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.\n\nAenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.\n\nAliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.\n\nMaecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.\n\nPraesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'P1140696.jpg', 5, '2017-05-29 00:00:00', NULL, NULL),
	(46, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.\n\nMaecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.\n\nSed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.\n\nNam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.\n\nMorbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.\n\nAenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.\n\nNulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.', 'P1150555.JPG', 6, '2017-05-29 00:00:00', NULL, NULL),
	(47, 8, '2017-05-30 22:56:05', 'Что такое Lorem Ipsum?', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'DSC07019.JPG', 6, '2017-05-29 00:00:00', NULL, NULL),
	(48, 9, '2017-05-30 22:56:05', 'Откуда он появился?', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.', 'DSC01508.JPG', 5, '2017-05-29 00:00:00', NULL, NULL),
	(49, 9, '2017-05-30 22:56:05', 'Почему он используется?', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'An158.JPG', 5, '2017-05-29 00:00:00', NULL, NULL),
	(50, 10, '2017-05-30 22:56:05', 'Где его взять?', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.', 'P1140714.jpg', 6, '2017-05-29 00:00:00', NULL, NULL),
	(51, 10, '2017-05-30 22:56:05', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.\n\nAenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.\n\nAliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.\n\nMaecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.\n\nPraesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'P1140696.jpg', 4, '2017-05-29 00:00:00', NULL, NULL),
	(52, 7, '2017-05-30 22:56:06', 'Lorem Ipsum', 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.\r\n\r\nMaecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.\r\n\r\nSed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.\r\n\r\nNam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.\r\n\r\nMorbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.\r\n\r\nAenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.\r\n\r\nNulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.', 'P1150555.JPG', 2, '2017-05-29 00:00:00', '2017-06-02 19:43:36', NULL),
	(53, 8, '2017-05-30 22:56:06', 'Что такое Lorem Ipsum?', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'DSC07019.JPG', 6, '2017-05-29 00:00:00', NULL, 1),
	(54, 9, '2017-05-30 22:56:06', 'Откуда он появился?', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.', 'DSC01508.JPG', 4, '2017-05-29 00:00:00', NULL, NULL),
	(55, 9, '2017-05-30 22:56:06', 'Почему он используется?', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'An158.JPG', 5, '2017-05-29 00:00:00', NULL, 1),
	(56, 10, '2017-05-30 22:56:06', 'Где его взять?', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.', 'P1140714.jpg', 3, '2017-05-29 00:00:00', NULL, NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.article_comment
CREATE TABLE IF NOT EXISTS `article_comment` (
  `article_id` int(10) unsigned DEFAULT NULL,
  `comment_id` int(10) unsigned DEFAULT NULL,
  KEY `article_comment_article_id_index` (`article_id`),
  KEY `article_comment_comment_id_index` (`comment_id`),
  CONSTRAINT `article_comment_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  CONSTRAINT `article_comment_comment_id_index` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mod4.article_comment: ~17 rows (приблизно)
/*!40000 ALTER TABLE `article_comment` DISABLE KEYS */;
INSERT INTO `article_comment` (`article_id`, `comment_id`) VALUES
	(22, 100001),
	(22, 100002),
	(22, 100003),
	(22, 100004),
	(22, 100005),
	(22, 100006),
	(22, 100007),
	(22, 100008),
	(22, 100009),
	(22, 100010),
	(22, 100011),
	(23, 100012),
	(23, 100013),
	(23, 100014),
	(23, 100015),
	(23, 100016),
	(23, 100017),
	(23, 100018),
	(23, 100019),
	(35, 100020);
/*!40000 ALTER TABLE `article_comment` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.article_tag
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

-- Dumping data for table mod4.article_tag: ~78 rows (приблизно)
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
INSERT INTO `article_tag` (`article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
	(22, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(22, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(23, 2, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(23, 6, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(23, 19, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(23, 18, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(24, 3, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(24, 7, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(25, 18, '2017-05-29 00:00:00', '2017-05-30 23:34:39'),
	(26, 17, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(27, 4, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(27, 8, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(28, 17, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(28, 10, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(29, 9, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(29, 15, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(30, 16, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(31, 11, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(31, 13, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(32, 14, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(32, 8, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(33, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(34, 20, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(34, 19, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(35, 12, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(36, 11, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(37, 7, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(37, 18, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(37, 17, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(38, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(38, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(39, 19, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(39, 17, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(39, 8, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(40, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(40, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:40'),
	(40, 7, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(42, 18, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(42, 4, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(42, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(43, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(43, 19, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(44, 7, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(44, 16, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(44, 11, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(45, 7, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(45, 18, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(46, 4, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(46, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(47, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(47, 19, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(48, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(48, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(49, 19, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(49, 8, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(50, 16, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(50, 11, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(51, 6, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(51, 18, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(55, 3, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(55, 1, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(56, 5, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(56, 13, '2017-05-29 00:00:00', '2017-05-30 23:34:41'),
	(36, 12, '2017-05-31 16:37:40', '2017-05-31 16:37:40'),
	(36, 16, '2017-05-31 16:37:40', '2017-05-31 16:37:40'),
	(52, 2, '2017-06-02 19:43:53', '2017-06-02 19:43:53'),
	(52, 6, '2017-06-02 19:43:53', '2017-06-02 19:43:53'),
	(52, 10, '2017-06-02 19:43:53', '2017-06-02 19:43:53'),
	(24, 5, '2017-06-02 21:02:23', '2017-06-02 21:02:23'),
	(22, 3, '2017-06-02 21:04:13', '2017-06-02 21:04:13'),
	(22, 4, '2017-06-02 21:04:13', '2017-06-02 21:04:13'),
	(56, 4, '2017-06-02 21:47:06', '2017-06-02 21:47:06');
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.article_user
CREATE TABLE IF NOT EXISTS `article_user` (
  `article_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  KEY `article_user_article_id_foreign` (`article_id`),
  KEY `article_user_user_id_foreign` (`user_id`),
  CONSTRAINT `article_user_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  CONSTRAINT `article_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mod4.article_user: ~0 rows (приблизно)
/*!40000 ALTER TABLE `article_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_user` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.article_visited
CREATE TABLE IF NOT EXISTS `article_visited` (
  `article_id` int(10) unsigned NOT NULL,
  `today_visited` int(11) NOT NULL,
  `total_visited` int(11) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `article_visited_article_id_index` (`article_id`),
  CONSTRAINT `article_visited_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.article_visited: ~0 rows (приблизно)
/*!40000 ALTER TABLE `article_visited` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_visited` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.backgrounds
CREATE TABLE IF NOT EXISTS `backgrounds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `header_color` varchar(50) DEFAULT NULL,
  `header_color_apply` varchar(50) DEFAULT 'Нет',
  `header_img` varchar(50) DEFAULT NULL,
  `body_color` varchar(50) DEFAULT NULL,
  `body_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table mod4.backgrounds: ~2 rows (приблизно)
/*!40000 ALTER TABLE `backgrounds` DISABLE KEYS */;
INSERT INTO `backgrounds` (`id`, `header_color`, `header_color_apply`, `header_img`, `body_color`, `body_img`) VALUES
	(1, '#222', NULL, NULL, '#fff', NULL),
	(2, '#222', NULL, NULL, '#fff', NULL);
/*!40000 ALTER TABLE `backgrounds` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `special_category` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.categories: ~7 rows (приблизно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `title`, `position`, `special_category`) VALUES
	(1, 'economics', 'Економика', 1, 0),
	(2, 'politics', 'Политика', 2, 0),
	(3, 'sobytiya', 'События', 3, 0),
	(4, 'science', 'Наука', 4, 0),
	(5, 'auto', 'Авто', 5, 0),
	(6, 'sport', 'Спорт', 6, 0),
	(7, 'analitics', 'Аналитика', 7, 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `like` int(10) NOT NULL DEFAULT '0',
  `message` text,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100021 DEFAULT CHARSET=utf8;

-- Dumping data for table mod4.comments: ~17 rows (приблизно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `like`, `message`, `user_id`, `created_at`, `updated_at`, `published_at`) VALUES
	(100001, 1, 'Hello, people!', 6, '2017-06-01 16:47:34', '2017-06-01 16:49:55', NULL),
	(100002, 1, 'hello', 9, '2017-06-01 16:48:03', '2017-06-01 16:49:55', NULL),
	(100003, 1, 'What?', 9, '2017-06-01 16:49:07', '2017-06-01 16:49:54', NULL),
	(100004, 2, 'YO!', 6, '2017-06-01 16:49:30', '2017-06-01 16:54:39', NULL),
	(100005, 2, 'YOOOO!!!', 6, '2017-06-01 16:49:44', '2017-06-01 16:54:37', NULL),
	(100006, 0, 'asdasd', 6, '2017-06-01 16:54:03', '2017-06-01 16:54:03', NULL),
	(100007, 4, 'YAAAHOOOOO!!!', 6, '2017-06-01 16:56:41', '2017-06-01 16:56:43', NULL),
	(100008, 0, 'safaf', 6, '2017-06-01 16:58:53', '2017-06-01 16:58:53', NULL),
	(100009, 1, 'asda', 6, '2017-06-01 16:59:18', '2017-06-01 17:00:42', NULL),
	(100010, 1, 'afssaf', 6, '2017-06-01 17:00:13', '2017-06-01 17:00:42', NULL),
	(100011, 1, 'asdasdasdas', 6, '2017-06-01 17:00:37', '2017-06-01 17:00:41', NULL),
	(100012, 0, 'Fhdgjfhdf', 6, '2017-06-03 21:24:21', '2017-06-03 21:24:21', NULL),
	(100013, 0, 'sdsdsd', 6, '2017-06-03 21:28:31', '2017-06-03 21:28:31', NULL),
	(100014, 0, 'affasfafs', 6, '2017-06-03 21:46:18', '2017-06-03 21:46:18', NULL),
	(100015, 0, 'fdfdfdsf', 6, '2017-06-03 21:46:53', '2017-06-03 21:46:53', NULL),
	(100016, 0, 'acC', 6, '2017-06-03 21:50:03', '2017-06-03 21:50:03', NULL),
	(100017, 0, 'sfsdsd', 6, '2017-06-03 21:54:30', '2017-06-03 21:54:30', NULL),
	(100018, 0, 'gawdgadsgadsg', 6, '2017-06-03 22:01:46', '2017-06-03 22:01:46', NULL),
	(100019, 0, 'sdgdagadsgad', 6, '2017-06-03 22:02:03', '2017-06-03 22:02:03', NULL),
	(100020, 4, 'vxvzz', 6, '2017-06-03 22:14:07', '2017-06-03 22:25:20', NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.dropdowns
CREATE TABLE IF NOT EXISTS `dropdowns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `for_moderator` varchar(10) NOT NULL DEFAULT 'false',
  `for_reg_users` varchar(10) NOT NULL DEFAULT 'false',
  `dropdown_menu` varchar(10) NOT NULL DEFAULT 'false',
  `for_unreg_users` varchar(10) NOT NULL DEFAULT 'false',
  `for_admin` varchar(10) NOT NULL DEFAULT 'false',
  `position` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table mod4.dropdowns: ~5 rows (приблизно)
/*!40000 ALTER TABLE `dropdowns` DISABLE KEYS */;
INSERT INTO `dropdowns` (`id`, `alias`, `title`, `for_moderator`, `for_reg_users`, `dropdown_menu`, `for_unreg_users`, `for_admin`, `position`) VALUES
	(2, 'profile', 'Профиль', 'false', 'true', 'true', 'false', 'false', 2),
	(3, 'admin_panel', 'Админ панель', 'false', 'false', 'false', 'false', 'true', 1),
	(4, 'register', 'Регистрация', 'false', 'false', 'true', 'true', 'false', 1),
	(6, 'login', 'Войти', 'false', 'false', 'true', 'true', 'false', 2),
	(9, 'aloha', 'Aloha', 'false', 'false', 'false', 'true', 'false', 1);
/*!40000 ALTER TABLE `dropdowns` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.migrations: ~11 rows (приблизно)
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

-- Dumping structure for таблиця mod4.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.password_resets: ~0 rows (приблизно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.roles: ~3 rows (приблизно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `title`) VALUES
	(1, 'admin', 'Андминистратор'),
	(2, 'moderator', 'Модератор'),
	(3, 'user', 'Пользователь');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.rosinger
CREATE TABLE IF NOT EXISTS `rosinger` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rosinger_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.rosinger: ~0 rows (приблизно)
/*!40000 ALTER TABLE `rosinger` DISABLE KEYS */;
/*!40000 ALTER TABLE `rosinger` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.tags: ~20 rows (приблизно)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `title`) VALUES
	(1, 'personal', '2017-05-04 15:47:01', '2017-05-04 15:47:01', 'личное'),
	(2, 'work', '2017-05-04 16:49:40', '2017-05-04 16:49:40', 'работа'),
	(3, 'food', '2017-05-04 16:49:58', '2017-05-04 16:49:58', 'еда'),
	(4, 'coding', '2017-05-04 16:50:07', '2017-05-04 16:50:07', 'кодинг'),
	(5, 'политика', '2017-05-29 00:00:00', '2017-05-30 23:22:36', NULL),
	(6, 'машина', '2017-05-29 00:00:00', '2017-05-30 23:22:36', NULL),
	(7, 'спорт', '2017-05-29 00:00:00', '2017-05-30 23:22:36', NULL),
	(8, 'мина', '2017-05-29 00:00:00', '2017-05-30 23:22:36', NULL),
	(9, 'малина', '2017-05-29 00:00:00', '2017-05-30 23:22:36', NULL),
	(10, 'авто', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(11, 'футбол', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(12, 'хокей', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(13, 'телефон', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(14, 'телевизор', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(15, 'карта', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(16, 'кефир', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(17, 'марс', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(18, 'люди', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(19, 'марка', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL),
	(20, 'миф', '2017-05-29 00:00:00', '2017-05-30 23:22:37', NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.users
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.users: ~5 rows (приблизно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(6, 'Dinia', 'dinia@i.ua', '$2y$10$HAWNH2UgJGWDw1vcrE9sz.sVBeN0TplCsTJYdvKIfBCKemNmMWiqO', 'GWdqAFM60yaSzSIIPxStbdaf4aXZ6cgKOXqOozY2jR1vUwrwTjIlmPfO502d', '2017-05-30 11:22:42', '2017-05-30 11:22:42'),
	(7, 'Jhon', 'jhon@i.ua', '$2y$10$FDygdMKmBmvniiNvlh7nX.7nuuHotQmEbt.onFghAvLTzKgGuPRhC', NULL, '2017-05-30 13:11:11', '2017-05-30 13:11:11'),
	(8, 'Max', 'max@i.ua', '$2y$10$DZJyVZTT/smxLYVmp5w1d.CxVuwmVf2Oa35z1TiXq1y11D9ETvpQS', 'EZL387QsRwckIDOuZu11kEcQ8Tf1QUMuCnVsEeylhWqjEx7CQmoLqg57Adtm', '2017-05-30 22:26:45', '2017-05-30 22:26:45'),
	(9, 'Merry', 'merry@i.ua', '$2y$10$ACMsj5MiscZiUBjCCQawP.Zm.3H/DfN0v9/P5GamF/Qz/X3a7PwD.', NULL, '2017-05-30 22:27:33', '2017-05-30 22:27:33'),
	(10, 'Andre', 'andre@i.ua', '$2y$10$uDoYWL0BojYmYUjuvpE8nuvJWwgX2ZemzEZmFeH3iqsDrK3TLA1/2', 'X9TtsIan4SXWKkWDMK7Ya5tBtnAhl0dilo31rixFPSXOskseAiRjhhbIH5Fz', '2017-05-30 22:31:10', '2017-05-30 22:31:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for таблиця mod4.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `user_role_user_id_index` (`user_id`),
  KEY `user_role_role_id_index` (`role_id`),
  CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table mod4.user_role: ~6 rows (приблизно)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
	(6, 1),
	(6, 2),
	(10, 2),
	(7, 3),
	(8, 3),
	(9, 3);
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
