-- Adminer 4.8.1 MySQL 8.0.26 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `apels`;
CREATE TABLE `apels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_skadron` varchar(255) NOT NULL,
  `jumlah` int NOT NULL,
  `kurang` int DEFAULT NULL,
  `hadir` int DEFAULT NULL,
  `dd` int DEFAULT NULL,
  `dl` int DEFAULT NULL,
  `rsau` int DEFAULT NULL,
  `rspau` int DEFAULT NULL,
  `dll` int DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `apels` (`id`, `nama_skadron`, `jumlah`, `kurang`, `hadir`, `dd`, `dl`, `rsau`, `rspau`, `dll`, `keterangan`, `waktu`, `updated_at`, `created_at`) VALUES
(1,	'skadroni',	100,	9,	81,	2,	2,	2,	2,	1,	'RS Harjolukito',	'pagi',	'2022-02-12 18:07:41',	'2022-02-12 18:07:41'),
(3,	'skadronii',	200,	100,	100,	50,	50,	0,	0,	0,	'Baik',	'pagi',	'2022-02-12 18:27:29',	'2022-02-12 18:27:29'),
(6,	'wingkorps',	100,	100,	100,	2,	50,	0,	0,	0,	'Segara dan enak',	'pagi',	'2022-02-12 19:55:40',	'2022-02-12 19:55:40'),
(7,	'wingkorps',	100,	100,	100,	2,	30,	0,	0,	0,	'RS Pakem',	'siang',	'2022-02-12 20:00:11',	'2022-02-12 20:00:11'),
(8,	'skadroniii',	200,	100,	100,	2,	50,	40,	0,	1,	'RS Harjolukito',	'malam',	'2022-02-12 20:07:59',	'2022-02-12 20:07:59');

DROP TABLE IF EXISTS `dinas`;
CREATE TABLE `dinas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `no_ak` varchar(255) DEFAULT NULL,
  `dinas` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `skadron` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `dinas` (`id`, `nama`, `pangkat`, `no_ak`, `dinas`, `kelas`, `skadron`, `updated_at`, `created_at`) VALUES
(3,	'',	NULL,	NULL,	'Dinas Dalam',	NULL,	'skadroni',	'2022-02-13 16:06:28',	'2022-02-13 16:06:28'),
(4,	'',	NULL,	NULL,	'DInas Luar',	NULL,	'skadronii',	'2022-02-13 16:18:11',	'2022-02-13 16:18:11'),
(5,	'',	NULL,	NULL,	'Dinas Dalam',	NULL,	'skadronii',	'2022-02-13 16:18:25',	'2022-02-13 16:18:25'),
(6,	'',	NULL,	NULL,	'DInas Luar',	NULL,	'skadroniv',	'2022-02-13 16:24:05',	'2022-02-13 16:24:05'),
(7,	'',	NULL,	NULL,	'Dinas Dalam',	NULL,	'skadroniii',	'2022-02-13 16:24:15',	'2022-02-13 16:24:15'),
(8,	'Katamso',	'Brigjend',	'AKP991',	'Dinas Dalam',	'12',	'skadronii',	'2022-02-16 14:17:00',	'2022-02-16 14:17:00');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `inventaris`;
CREATE TABLE `inventaris` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `inventaris` (`id`, `nama`, `lokasi`, `keterangan`, `updated_at`, `created_at`) VALUES
(2,	'Tank Amfibi',	'Lapangan Tank',	'Siap tempur',	'2022-02-12 15:25:32',	'2022-02-12 15:25:32'),
(3,	'Granat Nanas',	'Gudang senjata',	'Siap ledak',	'2022-02-12 15:36:47',	'2022-02-12 15:36:47');

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_perolehan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nup` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk/type` text COLLATE utf8mb4_unicode_ci,
  `kondisi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `makanans`;
CREATE TABLE `makanans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `makanans` (`id`, `nama`, `keterangan`, `waktu`, `updated_at`, `created_at`) VALUES
(2,	'Ayam Bakar Mas Telo Muntul',	'Baik',	'malam',	'2022-02-12 17:25:09',	'2022-02-12 17:25:09'),
(3,	'Bubur ayam mas meggy z',	'Segara dan enak',	'pagi',	'2022-02-12 17:34:26',	'2022-02-12 17:34:26'),
(4,	'Tempe Orek Pagi',	NULL,	'pagi',	'2022-02-12 17:39:53',	'2022-02-12 17:39:53'),
(5,	'Mie Ayama Mas Subur Makmur',	'semangkok 14.000',	'siang',	'2022-02-12 17:48:12',	'2022-02-12 17:48:12');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2020_05_21_100000_create_teams_table',	1),
(7,	'2020_05_21_200000_create_team_user_table',	1),
(8,	'2020_05_21_300000_create_team_invitations_table',	1),
(9,	'2021_03_04_064622_create_sessions_table',	1),
(10,	'2021_03_04_083406_create_books_table',	1),
(12,	'2021_04_28_053435_create_borrows_table',	2),
(13,	'2021_05_25_132104_create_items_table',	3);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mylaptopgame@gmail.com',	'$2y$10$wCwNMy/pWHCsXTIlQT0EOOgqS2Jd8oY6qAHdPPHMAc2seM78Hadgq',	'2021-05-21 12:05:11');

DROP TABLE IF EXISTS `pdlts`;
CREATE TABLE `pdlts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `no_ak` varchar(255) DEFAULT NULL,
  `keterangan` date NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `pdlts` (`id`, `nama`, `pangkat`, `no_ak`, `keterangan`, `updated_at`, `created_at`) VALUES
(3,	'',	NULL,	NULL,	'2022-02-26',	'2022-02-12 11:32:48',	'2022-02-12 11:32:48'),
(4,	'',	NULL,	NULL,	'2022-02-22',	'2022-02-12 11:32:57',	'2022-02-12 11:32:57'),
(5,	'Sumejo',	'Pratu',	'20220211',	'2022-02-16',	'2022-02-16 14:21:46',	'2022-02-16 14:21:46');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `puasas`;
CREATE TABLE `puasas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `no_ak` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `puasas` (`id`, `nama`, `pangkat`, `no_ak`, `kelas`, `updated_at`, `created_at`) VALUES
(2,	'',	NULL,	NULL,	NULL,	'2022-02-12 12:12:36',	'2022-02-12 12:12:36'),
(4,	'',	NULL,	NULL,	NULL,	'2022-02-12 15:30:33',	'2022-02-12 15:30:33'),
(5,	'Kyai Bejo',	'Laksamana',	'AKP992',	NULL,	'2022-02-16 14:24:45',	'2022-02-16 14:24:45'),
(6,	'Sunan Kalijaga',	'Kapten',	'AKP993',	'12',	'2022-02-16 14:27:09',	'2022-02-16 14:27:09');

DROP TABLE IF EXISTS `sakits`;
CREATE TABLE `sakits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `no_ak` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `sakits` (`id`, `nama`, `pangkat`, `no_ak`, `status`, `keterangan`, `updated_at`, `created_at`) VALUES
(5,	'Sudirman',	'Jenderal Besar',	'20220216',	'Rawat inap',	NULL,	'2022-02-16 14:04:36',	'2022-02-16 14:04:36');

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `time_start` time NOT NULL,
  `date_end` date DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `agenda` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organizer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `participant` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `schedules` (`id`, `date_start`, `time_start`, `date_end`, `time_end`, `agenda`, `location`, `lat`, `lng`, `link`, `organizer`, `participant`, `phone`, `attachment`, `note`, `created_at`, `updated_at`) VALUES
(18,	'2021-07-31',	'17:46:00',	NULL,	NULL,	'Rapat Pembuatan Jalan Tol',	NULL,	NULL,	NULL,	NULL,	'Kades',	NULL,	NULL,	NULL,	NULL,	'2021-07-31 15:46:42',	'2021-07-31 15:46:42'),
(19,	'2021-08-04',	'05:46:00',	NULL,	NULL,	'Perencanaan Anggaran Pengeluaran',	NULL,	NULL,	NULL,	NULL,	'Bappeda',	NULL,	NULL,	NULL,	NULL,	'2021-07-31 15:47:11',	'2021-07-31 15:47:11'),
(20,	'2021-09-03',	'10:00:00',	NULL,	NULL,	'Penerbangan baling baling bambu',	'lapangan setempat',	NULL,	NULL,	NULL,	'Pemuda desa',	'anggota',	NULL,	NULL,	'wajib perorang memiliki 1 baling baling bambu',	'2021-08-26 12:34:37',	'2021-08-26 12:34:37'),
(21,	'1974-07-06',	'01:57:00',	NULL,	NULL,	'Soluta ea eligendi d',	'Rerum ut sed deserun',	NULL,	NULL,	NULL,	'Aliquid earum sequi',	'Qui elit ab accusan',	NULL,	NULL,	'Voluptas non ut mole',	'2021-12-23 12:34:32',	'2021-12-23 12:34:32'),
(22,	'2022-02-04',	'09:00:00',	NULL,	NULL,	'Makan Makan',	'makan',	NULL,	NULL,	NULL,	'Makan',	'makan',	NULL,	NULL,	'makan',	'2022-02-02 08:34:29',	'2022-02-02 08:34:29'),
(23,	'2022-02-11',	'18:18:00',	NULL,	NULL,	'Apel Gabungan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-02-11 11:19:31',	'2022-02-11 11:19:31'),
(24,	'2022-02-11',	'20:00:00',	NULL,	NULL,	'Makan bersama kapten tsubasa',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-02-11 11:27:03',	'2022-02-11 11:27:03'),
(25,	'2022-02-11',	'05:00:00',	NULL,	NULL,	'Sholat subut',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-02-11 11:27:24',	'2022-02-11 11:27:24'),
(26,	'2022-02-11',	'03:00:00',	NULL,	NULL,	'Sahur bersama istri tercinta kemudian mengerjakan project freelance besar dengan nilai 100 juta dollar',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-02-11 11:31:59',	'2022-02-11 11:31:59'),
(27,	'2022-02-12',	'15:00:00',	NULL,	NULL,	'Lari keliling lapangan 20 kali dengan membawa beban',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-02-12 05:47:47',	'2022-02-12 05:47:47'),
(28,	'2022-02-16',	'13:00:00',	NULL,	NULL,	'Pelatihan KLB KP',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-02-16 06:09:52',	'2022-02-16 06:09:52');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8iNnT85HvIsEu7X0uxVrdw7rGeDG07Nk30nv8Ajy',	1,	'127.0.0.1',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36',	'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQ3hUbzUxR3ZFeUtSaW13SjNxcFJLVm1INFZYZmluSWx1c0h4eGNyZiI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIzOiJodHRwOi8vamFnYS50ZXN0L3Nha2l0cyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRMbEVqV01PZjdBeWFSQjhSNW4xOXlPdVk0VUEub0c0ekVNNjVwZk83aEptV0NWeFI2YTRkVyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkTGxFaldNT2Y3QXlhUkI4UjVuMTl5T3VZNFVBLm9HNHpFTTY1cGZPN2hKbVdDVnhSNmE0ZFciO30=',	1645230569);

DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE `team_invitations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `team_user`;
CREATE TABLE `team_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1,	1,	'Hilman\'s Team',	1,	'2021-03-04 09:48:50',	'2021-03-04 09:48:50');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ak` int DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `houseNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `pangkat`, `no_ak`, `kelas`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `address`, `houseNumber`, `phoneNumber`, `city`, `roles`, `created_at`, `updated_at`) VALUES
(1,	'Hilman',	'Brigadir Jenderal',	0,	'XIIA2',	'kaploks@gmail.com',	NULL,	'$2y$10$LlEjWMOf7AyaRB8R5n19yOuY4UA.oG4zEM65pfO7hJmWCVxR6a4dW',	NULL,	NULL,	NULL,	1,	NULL,	'Jln. Pahlawan',	'55',	'021',	'Bekasi',	'USER',	'2021-03-04 09:48:50',	'2022-02-09 15:15:43'),
(2,	'Komandan',	'Kopral',	1,	'XIIA2',	'mylaptopgame@gmail.com',	NULL,	'$2y$10$X7QPXTWtO3tv401YsJzN3uVtLzGnlL/bl9eUfEyLiwyQzaSS8sdPe',	NULL,	NULL,	NULL,	NULL,	'assets/user/Fjxb9iqzkzgGmZLquauBumorANLcKeQ7jay3EM3f.jpg',	'Jalan',	'09',	'12',	'Bekasi',	'ADMIN',	'2021-03-18 16:16:33',	'2022-02-09 14:33:15'),
(3,	'Yustisi',	'',	0,	'',	'dapur.logam@gmail.com',	NULL,	'$2y$10$JTdGO6L5zs47Obi8qven0OJnRtdUaLjNsPShNyGAhCtPXiH9Wr8Qi',	NULL,	NULL,	NULL,	NULL,	'assets/user/KKGWQIQFBaGtz3QUqlwn6n1x1QC5ViKFvnNZql2u.jpg',	'Jakarta',	'55',	'081804158096',	'Jakarta',	'ADMIN',	'2021-03-18 16:17:54',	'2021-03-18 16:17:54'),
(6,	'Hilman Harsoni',	'Prada',	9,	'XIIA2',	'hilman.harsoni@pom.go.id',	NULL,	'$2y$10$EAMHSUj7ibW/DM4R1XI/6.av5QMZFa..IWVjJu25aWUmXSVbz2Ori',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'ADMIN',	'2021-05-21 13:39:34',	'2022-02-09 14:22:33'),
(26,	'inven',	'Pratu',	857129,	'Skadron 2',	'hharsoni@gmail.com',	NULL,	'$2y$10$/M3QOmCa9olXxFcQ9A2XWuih050KUGbpBvU/8jpo2Q5vIwziT91em',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'ADMIN',	'2022-02-09 14:12:06',	'2022-02-12 04:33:36'),
(27,	'Hotplate Ayam XX',	'Brigadir Jenderal',	90,	'XIIA2',	'199108222015021002@bpom.com',	NULL,	'$2y$10$gzrCBs0F1bqt2cWhIFavVedpKcYKj6yLuhbvksr2XdxiMJTL99jHG',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'ADMIN',	'2022-02-09 14:14:18',	'2022-02-11 15:31:56'),
(28,	'Digital Marketing Strategist',	'Prada',	9,	'XIIA2',	'299108222015021002@bpom.com',	NULL,	'$2y$10$MpIp18Z/N1/.1LRza.h5k.59zRwzgo.M3H9XgqrPB/bSQEuKPHsNm',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'ADMIN',	'2022-02-09 14:18:27',	'2022-02-09 14:22:12');

-- 2022-02-19 00:30:31
