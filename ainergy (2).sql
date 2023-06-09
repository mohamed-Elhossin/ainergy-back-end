-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 03:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ainergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'mohamed elhossiny', 'm.m.m.elhossin@gmail.com', NULL, '$2y$10$je5gfPNHFFF2dglDNvEL2.p/.sc8rlAst6RhCPWfyHAbI6KT9FLt.', NULL, '2023-05-24 19:52:47', '2023-05-24 19:52:47'),
(3, 'rana', 'ahmed_tofiq@yahoo.com', NULL, '$2y$10$2IpcVvnHNt0KRCoLGq9v.ufWRCbwt/JJ5L17kgu71w0o5QE1TzCVW', NULL, '2023-05-24 19:54:00', '2023-05-24 19:54:00'),
(4, 'Eng: Taha', 'taha@gmail.com', NULL, '$2y$10$ThfLdwYgo1AZj1s9XjGZd.OOX/6V0d2I4KTxXD6BLXwGywQG8nCIi', NULL, '2023-05-25 12:57:40', '2023-05-25 12:57:40'),
(5, 'toma', 'm.m.cm.elhossin@gmail.com', NULL, '$2y$10$BPp.m2Wt3atj/5ZI3.G1s.v1Xw9YQFA5YXkG3MAkZu8OVYUTc3P4m', NULL, '2023-06-04 17:42:10', '2023-06-04 17:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `caregories`
--

CREATE TABLE `caregories` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icon` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caregories`
--

INSERT INTO `caregories` (`id`, `title`, `image`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Male clothis', '1685914665Screenshot_8.png', 'you can print all clotheis here', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 320 512\"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M148.7 4.7c6.2-6.2 16.4-6.2 22.6 0l64 64c4.6 4.6 5.9 11.5 3.5 17.4s-8.3 9.9-14.8 9.9H184v24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H184v24c0 .6 0 1.2-.1 1.8c77 11.6 136.1 78 136.1 158.2c0 88.4-71.6 160-160 160S0 440.4 0 352c0-80.2 59.1-146.7 136.1-158.2c0-.6-.1-1.2-.1-1.8V168H104c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V96H96c-6.5 0-12.3-3.9-14.8-9.9s-1.1-12.9 3.5-17.4l64-64zM256 352A96 96 0 1 0 64 352a96 96 0 1 0 192 0z\"/></svg>', '2023-06-04 18:13:16', '2023-06-04 18:37:45'),
(7, 'Females', '1686562596mohamedElhossiny.jpg', 'hello from first derive', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 384 512\"><path d=\"M80 176a112 112 0 1 1 224 0A112 112 0 1 1 80 176zM224 349.1c81.9-15 144-86.8 144-173.1C368 78.8 289.2 0 192 0S16 78.8 16 176c0 86.3 62.1 158.1 144 173.1V384H128c-17.7 0-32 14.3-32 32s14.3 32 32 32h32v32c0 17.7 14.3 32 32 32s32-14.3 32-32V448h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H224V349.1z\"/></svg>', '2023-06-12 06:36:36', '2023-06-12 06:36:36'),
(8, 'Child', '1686562607impact-of-artificial-intelligence-in-software-development.png', 'fdsaf', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 320 512\"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M96 64a64 64 0 1 1 128 0A64 64 0 1 1 96 64zm48 320v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V287.8L59.1 321c-9.4 15-29.2 19.4-44.1 10S-4.5 301.9 4.9 287l39.9-63.3C69.7 184 113.2 160 160 160s90.3 24 115.2 63.6L315.1 287c9.4 15 4.9 34.7-10 44.1s-34.7 4', '2023-06-12 06:36:47', '2023-06-12 06:36:47'),
(12, 'child', '1689256482Screenshot_2.png', 'hello', 'Warning: #1265 Data truncated for column &#039;icon&#039; at row 1', '2023-07-13 10:54:42', '2023-07-13 10:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `commints`
--

CREATE TABLE `commints` (
  `id` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `servicesId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commints`
--

INSERT INTO `commints` (`id`, `description`, `userId`, `servicesId`, `created_at`, `updated_at`) VALUES
(1, 'any commint', 10, 24, '2023-06-26 12:49:27', '2023-06-26 12:49:27'),
(2, 'helllo', 1, 24, '2023-06-26 12:50:05', '2023-06-26 12:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `favoritecategories`
-- (See below for the actual view)
--
CREATE TABLE `favoritecategories` (
`id` bigint(20) unsigned
,`userId` int(11)
,`category1` int(11)
,`category2` int(11)
,`category3` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`category1_name` varchar(255)
,`category2_name` varchar(255)
,`category3_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `category1` int(11) NOT NULL,
  `category2` int(11) NOT NULL,
  `category3` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `joincommints`
-- (See below for the actual view)
--
CREATE TABLE `joincommints` (
`id` int(20)
,`description` varchar(255)
,`userId` int(11)
,`servicesId` int(11)
,`userName` varchar(255)
,`serviceTitle` varchar(255)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `joinserviceswithcategory`
-- (See below for the actual view)
--
CREATE TABLE `joinserviceswithcategory` (
`servId` int(20)
,`servTitle` varchar(255)
,`servImage` varchar(255)
,`servDescription` varchar(255)
,`vendorId` int(255)
,`categoryId` int(255)
,`categoryTitle` varchar(255)
,`vendorName` varchar(255)
,`Servcreated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT 0,
  `userId` int(11) NOT NULL,
  `servicesId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `status`, `userId`, `servicesId`, `created_at`, `updated_at`) VALUES
(11, 0, 1, 24, '2023-06-26 12:50:11', '2023-07-12 08:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_5_24_000000_create_admins_table', 2),
(6, '2023_06_04_202127_create_services_table', 3),
(7, '2023_06_04_202544_create_caregories_table', 3),
(8, '2023_06_04_202639_create_commints_table', 3),
(9, '2023_06_12_080458_create_likes_table', 4),
(10, '2023_06_12_091313_create_favorites_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('m.m.m.elhossin@gmail.com', '$2y$10$JTxTNV6mhz/ttBuj9LB6vOoVyvSnt5lGDty72xiPEERA/5H89RCbW', '2023-06-04 23:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `expires_at`, `last_used_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 4, 'myToken', '68f1e5947734d4110d1449c98d4875c129f956a8e3e310d60df0fc50c8680928', '[\"*\"]', NULL, NULL, '2023-06-08 21:13:15', '2023-06-08 21:13:15'),
(5, 'App\\Models\\User', 3, 'myToken', 'c43b60768e36a662472f038e3a82f7f50d1d58393ece1da46ada34c67b7a4591', '[\"*\"]', NULL, '2023-06-12 07:05:22', '2023-06-12 04:52:36', '2023-06-12 07:05:22'),
(6, 'App\\Models\\User', 3, 'myToken', '3aaf5d7fba4742568a0928df706cb90842f345bb4ab7182cd27e2b1ffe1e1d9a', '[\"*\"]', NULL, '2023-07-12 08:57:02', '2023-07-12 08:46:27', '2023-07-12 08:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `vendor` int(255) NOT NULL,
  `category` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `description`, `vendor`, `category`, `created_at`, `updated_at`) VALUES
(24, 'for mohamed', '1687794469mohamedElhossiny.jpg', 'test tes', 10, 1, '2023-06-26 12:47:49', '2023-06-26 12:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'user',
  `status` varchar(50) NOT NULL DEFAULT 'noActive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'toma', 'm.m.m.elhossin@gmail.com', NULL, '$2y$10$VQesjZGY8/9Qk2kd7FX8tuR4THwc6bKGFg7oDJ.SXPrq7fLN0kLY2', 'vendor', 'noActive', NULL, '2023-05-23 16:06:24', '2023-06-27 15:38:00'),
(3, 'update mohamed', 'm.m.elhossin@gmail.com', NULL, '$2y$10$WvfNF1opKCOOaFNqJKUgPOZAhXHBt61gHUhgMvVj4gg0UlcnyWN5i', 'user', 'noActive', NULL, '2023-06-08 21:06:58', '2023-06-12 04:55:05'),
(4, 'mohamed from Post Man', 'm.slhossin@gmail.com', NULL, '$2y$10$p53VIxKpXK7UyRX4PO/eXu/NeJLlYImmOWmYMfQUvMR.PsbG/ZXkK', 'user', 'noActive', NULL, '2023-06-08 21:13:15', '2023-06-08 21:13:15'),
(9, 'dsa', 'dsa@gmail.com', NULL, '$2y$10$JMTOb/vueV2V7wmsYY13u.zCNmQkP0taINHBwNe3HAFxcPgQzMERe', 'vendor', 'noActive', NULL, '2023-06-13 04:13:36', '2023-06-26 12:48:27'),
(10, 'mohamed elhossiny', 'admin@gmail.com', NULL, '$2y$10$wTCCnvvSTnNhxN9E.IKVwe3vt5BBZAn.JbHAdCopraTQLvwSpKyue', 'vendor', 'noActive', NULL, '2023-06-26 12:45:53', '2023-06-26 12:45:53');

-- --------------------------------------------------------

--
-- Structure for view `favoritecategories`
--
DROP TABLE IF EXISTS `favoritecategories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `favoritecategories`  AS SELECT `favorites`.`id` AS `id`, `favorites`.`userId` AS `userId`, `favorites`.`category1` AS `category1`, `favorites`.`category2` AS `category2`, `favorites`.`category3` AS `category3`, `favorites`.`created_at` AS `created_at`, `favorites`.`updated_at` AS `updated_at`, (select `caregories`.`title` from `caregories` where `caregories`.`id` = `favorites`.`category1`) AS `category1_name`, (select `caregories`.`title` from `caregories` where `caregories`.`id` = `favorites`.`category2`) AS `category2_name`, (select `caregories`.`title` from `caregories` where `caregories`.`id` = `favorites`.`category3`) AS `category3_name` FROM `favorites` ;

-- --------------------------------------------------------

--
-- Structure for view `joincommints`
--
DROP TABLE IF EXISTS `joincommints`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `joincommints`  AS SELECT `commints`.`id` AS `id`, `commints`.`description` AS `description`, `commints`.`userId` AS `userId`, `commints`.`servicesId` AS `servicesId`, `users`.`name` AS `userName`, `services`.`title` AS `serviceTitle`, `commints`.`created_at` AS `created_at` FROM ((`commints` join `services` on(`commints`.`servicesId` = `services`.`id`)) join `users` on(`commints`.`userId` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `joinserviceswithcategory`
--
DROP TABLE IF EXISTS `joinserviceswithcategory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `joinserviceswithcategory`  AS SELECT `services`.`id` AS `servId`, `services`.`title` AS `servTitle`, `services`.`image` AS `servImage`, `services`.`description` AS `servDescription`, `services`.`vendor` AS `vendorId`, `services`.`category` AS `categoryId`, `caregories`.`title` AS `categoryTitle`, `users`.`name` AS `vendorName`, `services`.`created_at` AS `Servcreated_at` FROM ((`services` join `caregories` on(`services`.`category` = `caregories`.`id`)) join `users` on(`services`.`vendor` = `users`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `caregories`
--
ALTER TABLE `caregories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commints`
--
ALTER TABLE `commints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `servicesId` (`servicesId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `category1` (`category1`),
  ADD KEY `category2` (`category2`),
  ADD KEY `category3` (`category3`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `servicesId` (`servicesId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `vendor` (`vendor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `caregories`
--
ALTER TABLE `caregories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `commints`
--
ALTER TABLE `commints`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commints`
--
ALTER TABLE `commints`
  ADD CONSTRAINT `commints_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commints_ibfk_3` FOREIGN KEY (`servicesId`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`category1`) REFERENCES `caregories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_3` FOREIGN KEY (`category2`) REFERENCES `caregories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_4` FOREIGN KEY (`category3`) REFERENCES `caregories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`servicesId`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`category`) REFERENCES `caregories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`vendor`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
