-- Adminer 4.8.1 MySQL 11.0.2-MariaDB-1:11.0.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Buku`;
CREATE TABLE `Buku` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BookTypeID` int(11) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Publisher` varchar(255) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Buku` (`ID`, `BookTypeID`, `BookName`, `Description`, `Publisher`, `Year`, `Stock`) VALUES
(1,	5,	'Voluptas rerum reiciendis ab.',	'Odio eius consequuntur hic. Ab eius earum eaque facilis possimus distinctio ut. Neque quia magnam qui.',	'Perum Kusmawati (Persero) Tbk',	1999,	98),
(2,	10,	'Pariatur ullam voluptas.',	'Commodi porro consequatur officiis assumenda amet possimus deleniti voluptatum. Neque excepturi illum repellendus minus quia maxime ex. Consequatur id unde sed quo ea. Officia omnis nam ea corrupti.',	'PJ Rahmawati Tbk',	1990,	100),
(3,	10,	'Aut ut esse et necessitatibus.',	'Deserunt consequatur veritatis ea itaque neque hic et illum. Reprehenderit voluptatem quod iure aut culpa. Est quis odit laudantium est et. Doloribus qui doloremque voluptatum iusto voluptates ipsam. Quia maiores eos quo rerum quam quis qui.',	'PJ Wulandari',	2017,	100),
(4,	8,	'Est repudiandae ea ut ducimus cumque.',	'Incidunt deserunt aut cupiditate nulla enim ea. Aut dolor voluptate doloremque mollitia quia. Nam fugit dolores similique cumque. Beatae tempora eos tenetur cum soluta modi iusto. Sed rerum quae dolorum recusandae. Ratione blanditiis tempora sunt vitae saepe. Odio eos expedita saepe blanditiis recusandae dolore. Necessitatibus at at quos porro numquam et cum et.',	'PJ Handayani Waluyo',	1999,	100),
(5,	9,	'Amet in sit.',	'Qui voluptatem excepturi ut expedita neque sint nobis. Exercitationem explicabo tempore dolor ullam totam. Sapiente sed at quam non autem quam ut. Excepturi quos tempora voluptatum. Reiciendis voluptatem est dolores qui sit quas. Inventore vel cum et iusto. Totam eum atque odit et quam libero natus.',	'Yayasan Suartini (Persero) Tbk',	1996,	100),
(6,	5,	'Consequatur aut.',	'Quod dolorum et in. Est occaecati quo possimus modi voluptates voluptatibus consequatur voluptatibus. Atque praesentium debitis ullam aut quaerat commodi ducimus recusandae. Vero quam eum molestiae id qui fugit. Non aut aliquid hic quisquam possimus perspiciatis. Reiciendis doloribus quaerat est autem ut. Atque earum non tempora eum. Fugit exercitationem provident ea qui.',	'Perum Wasita',	2011,	100),
(7,	2,	'Autem cumque et tempora.',	'Impedit reiciendis cum fugiat sed. Magnam laborum quasi consequatur nihil et provident. Quaerat nam facere et iure iste. Praesentium id corporis impedit quasi. Tempora dolorum tempora enim blanditiis ullam. Esse esse sed voluptatem hic nulla sequi ut.',	'Perum Wijaya',	1983,	100),
(8,	4,	'Ipsa cupiditate officia assumenda quis distinctio.',	'Asperiores qui quidem placeat rerum sit. Pariatur exercitationem ipsum voluptas. Est quia iusto quo distinctio inventore. Non quos mollitia ad earum aut. Vitae et et ut rerum est blanditiis.',	'PD Nababan Agustina Tbk',	1982,	100),
(9,	3,	'Ut consequatur rerum earum itaque.',	'Provident est mollitia ad numquam. Id distinctio quae perspiciatis molestiae. Corporis possimus nisi quidem harum. Nihil non nemo asperiores voluptatem ut sunt. Beatae dolor omnis iusto consequatur sunt repudiandae. Excepturi aut et suscipit inventore ipsum cum.',	'CV Pangestu',	2012,	100),
(10,	9,	'Non quia odio aspernatur.',	'Illo tempore labore ducimus et temporibus ut ducimus architecto. Qui aut est at. Velit ex natus quis unde tenetur. Occaecati autem veniam incidunt.',	'CV Uwais Wacana Tbk',	2000,	100),
(11,	8,	'Ad adipisci ut est qui earum quo.',	'Quaerat voluptatem dignissimos assumenda omnis impedit. Deserunt minima labore a quas at enim voluptatem. Reprehenderit similique non in consequuntur veritatis. Porro maiores error expedita consequuntur vero rerum perferendis. Laudantium laboriosam voluptatem error modi qui dolorem alias.',	'PD Hutasoit Dabukke',	2013,	100),
(12,	1,	'Illo cupiditate praesentium culpa quos rerum qui quae.',	'In nam quas nostrum repudiandae ut earum. Non error laboriosam sequi rerum minima. Consequatur sed perspiciatis modi officia itaque in. Facilis veniam commodi quia esse nihil. Quia cumque sit maxime aut in.',	'PD Fujiati',	1999,	100),
(13,	10,	'Impedit explicabo quo et culpa.',	'Eligendi voluptatibus totam omnis a. Atque et praesentium aut iure. Perferendis repellendus perferendis modi quisquam. Expedita itaque quos veniam corporis minus. Totam sequi commodi assumenda et. Voluptas ut temporibus aut velit molestias.',	'CV Astuti Hutasoit',	1981,	100),
(14,	7,	'Atque nisi in temporibus in deleniti.',	'Molestiae corrupti quia mollitia quod occaecati ex quod quia. Fugiat repudiandae et aut incidunt omnis recusandae at. Numquam minima dolores enim autem culpa facilis. Et animi perferendis perspiciatis ipsum ut. Blanditiis voluptatem non quia iusto.',	'UD Hartati Suartini',	2011,	100),
(15,	2,	'Et ut aut aperiam consequatur.',	'Aliquam recusandae et veritatis saepe voluptatem sunt officia et. Sint dolor sit officiis dolorem corrupti eum. Laborum repellendus cupiditate autem minus fugiat quam ratione. Beatae tempora voluptatem quis vero qui temporibus rerum mollitia. Animi quae adipisci unde aut voluptate repellendus non. A illo voluptas incidunt accusantium qui minima natus. Adipisci illum culpa qui adipisci veniam.',	'PD Puspasari Damanik Tbk',	2001,	100),
(16,	7,	'Fugit amet sit.',	'Quia et eligendi quia laborum corporis non error. Non eius quasi commodi voluptates facere earum unde explicabo. Dicta aut cum est accusantium molestias sunt soluta. Odit magnam occaecati molestias ut autem est dolores. Sit praesentium eius repudiandae. Omnis eum minima totam eveniet tempora exercitationem. Ut voluptatibus laborum sint et error atque.',	'PJ Yolanda',	1980,	100),
(17,	4,	'Porro est cum accusamus.',	'Atque delectus quia illo est vel nihil non. Cumque blanditiis earum incidunt at ullam. Debitis voluptatem numquam in cum. Quia praesentium maxime quod. Soluta sunt dolor ullam et laudantium ipsa. Iusto alias vero corrupti quisquam labore quis et. A occaecati enim optio id. Dolores totam sed recusandae autem soluta.',	'PJ Kurniawan Zulaika',	1975,	100),
(18,	4,	'Quam autem tenetur ipsa molestias explicabo.',	'Sit dolores alias ipsum. Est architecto atque corporis. Dolores molestiae soluta perferendis harum. Iusto nobis accusamus tenetur nulla vel quo saepe.',	'PD Nugroho (Persero) Tbk',	2020,	100),
(19,	1,	'Minus eius libero.',	'Sed et eum asperiores quasi est id. Rerum qui perferendis in minima sit unde consequuntur. Qui voluptate nesciunt fugiat cum tempore sit. Provident nobis optio dolorum quam fugiat.',	'Fa Marpaung Saragih',	2009,	100),
(20,	1,	'Adipisci omnis porro magnam.',	'Aut laboriosam consequatur praesentium sed quod modi suscipit. Ipsam itaque at amet. Autem et qui incidunt qui. Placeat in saepe repudiandae ratione ratione. Accusantium magni atque quia laboriosam aut amet. Velit quasi corporis impedit ut est. Eveniet velit fugit qui omnis ipsum ut. Occaecati alias laborum aliquam.',	'PD Nuraini Tbk',	1979,	100),
(21,	5,	'Nulla impedit omnis qui.',	'Ipsam est pariatur esse distinctio fugiat illum consequuntur. Atque accusamus totam sed rerum tempora illum sit. Quo ut quis eos corporis suscipit. Saepe ut officia saepe ea voluptatum nam eaque. Dolorum modi repellat repellat voluptas sed reprehenderit rem. Dolorum rerum minus earum cupiditate. Voluptas quia repudiandae est perferendis.',	'Perum Mardhiyah',	2006,	100),
(22,	7,	'Ipsum aspernatur mollitia consequuntur aspernatur.',	'Voluptatem sed ipsa architecto repudiandae accusamus. Nulla sint commodi facere maiores corrupti et earum. Illum optio non fugit voluptatibus labore eligendi porro. Suscipit officia voluptatem cumque incidunt aspernatur ratione delectus. Tempore cum voluptatem assumenda doloremque.',	'Perum Yuniar Saputra Tbk',	2020,	100),
(23,	10,	'Asperiores eum voluptatem quisquam nam qui.',	'Velit ea tempore non officia iste. Ut quaerat aut ad expedita vero. Ea maxime delectus totam totam rerum autem et. Error minima rem optio omnis dolor. Qui recusandae fuga dolorum accusamus et. Numquam fugit ea est consequatur cum quidem minima. Velit quia cum perspiciatis rerum dolore sed corporis.',	'PJ Manullang Saragih (Persero) Tbk',	1984,	100),
(24,	4,	'Facere debitis debitis ex et et minus.',	'Corrupti consectetur rerum voluptatem aut minima. Facilis eligendi quia aliquam beatae est quae. Voluptas quod harum corrupti eveniet. Eaque id totam quasi voluptas quia. Est et iste aut. Quis dolore nostrum sunt quis occaecati accusantium.',	'PD Wijaya Hastuti Tbk',	2018,	100),
(25,	10,	'Saepe sed voluptas facilis quaerat aut.',	'Laborum sunt sit non numquam molestiae corrupti hic. Eos et fuga minima sit maiores. Veniam aut iure et enim. Explicabo voluptas maiores eius odit accusantium inventore tenetur.',	'Yayasan Prabowo Irawan (Persero) Tbk',	2022,	100),
(26,	1,	'Modi dolores optio et qui.',	'Nesciunt voluptas quis reiciendis hic. Aut provident facilis blanditiis ex sit neque aut. Et est velit quae est provident non.',	'Fa Hartati (Persero) Tbk',	2011,	100),
(27,	9,	'Molestias maiores a.',	'Doloribus aut praesentium reprehenderit iste rerum nulla vel veniam. Beatae aperiam rerum nesciunt et atque. Labore ea illo exercitationem id voluptatem. Tempore non rerum aspernatur velit. Quasi voluptates sunt minima molestias impedit.',	'PT Rahimah',	1997,	100),
(28,	4,	'Facere reprehenderit aut eius quia voluptatum assumenda.',	'Autem magni praesentium aut quia qui rerum. Mollitia quidem illum id ut. Iste repellendus unde natus a incidunt. Qui deleniti aut et adipisci aut autem voluptate ipsum. Qui ea necessitatibus omnis occaecati ut aperiam ullam. Est animi neque quidem incidunt unde qui voluptas.',	'CV Wibisono Tbk',	2020,	100),
(29,	5,	'Vel aut voluptatem exercitationem cupiditate aut tempore.',	'Minus et nam magnam libero. Repellendus sunt ut quis at earum ut voluptas soluta. Quos velit exercitationem aut temporibus. Dolores minima voluptatum rerum quas dolores. Voluptatem quis debitis at qui qui sunt rem quis.',	'Fa Oktaviani Winarno Tbk',	1974,	100),
(30,	9,	'In facere aut maxime.',	'Non occaecati quaerat qui porro dolorum magni illum. Id ut minus adipisci aut dolorem enim. Accusamus quo et est ut autem dignissimos dolores. Deleniti nemo sit culpa et amet rerum beatae.',	'Perum Siregar Handayani Tbk',	1998,	100);

DROP TABLE IF EXISTS `DetailTransaksi`;
CREATE TABLE `DetailTransaksi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TransID` varchar(255) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `ReturnDate` date DEFAULT NULL,
  `FineDays` int(11) DEFAULT NULL,
  `Fine` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `TransID` (`TransID`),
  KEY `BookID` (`BookID`),
  CONSTRAINT `DetailTransaksi_ibfk_1` FOREIGN KEY (`TransID`) REFERENCES `Transaksi` (`TransCode`),
  CONSTRAINT `DetailTransaksi_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `Buku` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `DetailTransaksi` (`ID`, `TransID`, `BookID`, `Qty`, `ReturnDate`, `FineDays`, `Fine`) VALUES
(1,	'64dba7ae51837',	1,	2,	'2023-08-11',	4,	40000);

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `JenisBuku`;
CREATE TABLE `JenisBuku` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BookType` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `JenisBuku` (`ID`, `BookType`) VALUES
(1,	'Novel'),
(2,	'Komik'),
(3,	'Biografi'),
(4,	'Ensiklopedia'),
(5,	'Fiksi'),
(6,	'Non-Fiksi'),
(7,	'Cerpen'),
(8,	'Puisi'),
(9,	'Dongeng'),
(10,	'Kamus'),
(12,	'Manga Can');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2023_08_13_155438_add_role_column_to_users_table',	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `Transaksi`;
CREATE TABLE `Transaksi` (
  `TransCode` varchar(255) NOT NULL,
  `TransDate` date NOT NULL,
  `UserID` bigint(20) unsigned NOT NULL,
  `FineTotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`TransCode`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `Transaksi_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Transaksi` (`TransCode`, `TransDate`, `UserID`, `FineTotal`) VALUES
('64dba7ae51837',	'2023-08-10',	16,	40000);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1,	'Jessica Tina Mandasari S.Sos',	'asmuni.waskita@example.org',	'2023-08-13 16:06:12',	'$2y$10$IYcRE0R.2zExlcDQUg9jsOkv8DfkefT3cbLfaibRmed2KTPwG7M5.',	'xOpooibiya9VBmW77eFcaK71Y1QABjZOrIrMm7SjFzm6vwPp7FXJPpCplu05',	'2023-08-13 16:06:12',	NULL,	'user'),
(2,	'Hamima Dewi Hassanah',	'rahayu.elvina@example.com',	'2023-08-13 16:06:12',	'$2y$10$rsuU9RX/lrlSdUmFLQeNh.VlQtGZ3eH9XMQS4rCGN4Q1x0bnoYVLa',	'LFWHBymUlf',	'2023-08-13 16:06:12',	NULL,	'user'),
(3,	'Ayu Susanti',	'uwais.jane@example.org',	'2023-08-13 16:06:12',	'$2y$10$ys24r9in5L9PSsjboJrC4uQPaUzRHQRAQClenPRZUYQ4cIZpGITNG',	'mzhrGvZJoa',	'2023-08-13 16:06:12',	NULL,	'user'),
(4,	'Puji Laksmiwati',	'dagel44@example.org',	'2023-08-13 16:06:12',	'$2y$10$.5wmhFFO1sT8K43gdfj85utdEEKi9bJ2WIiHK3z.d3dJBvh/ZBa4C',	'QFD6LdAU6Q',	'2023-08-13 16:06:12',	NULL,	'user'),
(5,	'Gantar Santoso',	'imegantara@example.org',	'2023-08-13 16:06:12',	'$2y$10$SXMlcHh.CtrgumDiWCRrYuOv/ucE/68CEZLTovUnzDbKWO5I//u4O',	's3Kv4B1iCx9mD3S32Fh3ggux4XqG8EdN4Vh0iqeOJEK81vT7LVbDOY6k120E',	'2023-08-13 16:06:12',	NULL,	'admin'),
(6,	'Fitria Uyainah S.Ked',	'capa.andriani@example.org',	'2023-08-13 16:06:12',	'$2y$10$VRu59u5bbG9SdVY1Nm.U0Op6ksjpQ0hmlBCzbb9Rr996OZ5QV7kpG',	'i4XhmZtXyf',	'2023-08-13 16:06:13',	NULL,	'admin'),
(7,	'Cakrabuana Nashiruddin',	'rsitorus@example.org',	'2023-08-13 16:06:13',	'$2y$10$OS5SEw19T2NG0uSy642Bj.Fhfn6pcOC2QucPwVePNGVIqZRdvQ0Sy',	'e22etZbmxS',	'2023-08-13 16:06:13',	NULL,	'admin'),
(8,	'Zizi Agustina',	'vprayoga@example.net',	'2023-08-13 16:06:13',	'$2y$10$NwqAD40RbUE6xKy/slOgeuiX8WO824cx9OLxTGR8V.888nU2SrZhC',	'hopLNvtrsB',	'2023-08-13 16:06:13',	NULL,	'admin'),
(9,	'Qori Puspasari',	'prakasa.nrima@example.com',	'2023-08-13 16:06:13',	'$2y$10$GXps4w3YKULT9MSglcDrmO/9CcFzp3ET5fmj/jJIqDDrIZyVQZl..',	'kxT0VW4FgK',	'2023-08-13 16:06:13',	NULL,	'admin'),
(10,	'Halima Andriani',	'cinta00@example.net',	'2023-08-13 16:06:13',	'$2y$10$jMD2yXqwr7Jdg6uP79Ms2uQitwoX.aRA7PQCFz3vmIm4GIFiQSp2u',	'tHi4NQEJBH',	'2023-08-13 16:06:13',	NULL,	'user'),
(11,	'Mustika Siregar',	'zulkarnain.ami@example.com',	'2023-08-13 16:06:13',	'$2y$10$ygKVkQQpoETwDD5lRK9v9.OTOeRe4IzTlrXdjH9GSCfThvDeZO2fu',	'RO7ZGpaBgd',	'2023-08-13 16:06:13',	NULL,	'admin'),
(12,	'Vanesa Suryatmi M.Farm',	'ratna.halimah@example.com',	'2023-08-13 16:06:13',	'$2y$10$ZgEXYs58sCCwTE99YsZHjOTsaOkebsrEb7ju9Nkm.KdnZhYspBtay',	'0neNhRSfj5',	'2023-08-13 16:06:13',	NULL,	'user'),
(13,	'Ozy Dipa Siregar S.Pd',	'rahmi.kuswoyo@example.org',	'2023-08-13 16:06:13',	'$2y$10$AO7L2ftMy.nrT8KxtNqpvuvd3lgKhLFQQSvRiVGdD6DGL/B4taKWy',	'MYkVlKmFPA',	'2023-08-13 16:06:13',	NULL,	'user'),
(14,	'Ajeng Hastuti S.Ked',	'nilam13@example.org',	'2023-08-13 16:06:13',	'$2y$10$FRdrdWZj.L5MgVAeYAjV5.McdGjIDV4Qyh0Gucqb/3GA4g9cExlT2',	'Qbiodzx7lt',	'2023-08-13 16:06:13',	NULL,	'admin'),
(15,	'Jaeman Jayadi Situmorang S.Gz',	'lili.suryatmi@example.org',	'2023-08-13 16:06:13',	'$2y$10$EmAT.WfS4uvSVfr9HjfovOxqvG7JMKppQANCHRcdxbhgdz65/titO',	'a2ZB2gc720',	'2023-08-13 16:06:13',	NULL,	'admin'),
(16,	'user 1',	'user1@mail.com',	NULL,	'$2y$10$JSEfrvDD6FApaIVerWlmseh.TFhMjBVryuITQ64FQE8LGngda761u',	NULL,	'2023-08-13 17:02:25',	'2023-08-13 17:02:25',	'user'),
(17,	'admin',	'admin@mail.com',	NULL,	'$2y$10$oDu/s3vD.kKmXjP53cJNeehn//u39tI4qgVJH72aIZY64UDNUqniG',	NULL,	'2023-08-13 17:02:45',	'2023-08-13 17:02:45',	'admin');

-- 2023-08-16 04:34:31
