-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 04:10 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caregories`
--

INSERT INTO `caregories` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Male clothis', '1685914665Screenshot_8.png', 'you can print all clotheis here', '2023-06-04 18:13:16', '2023-06-04 18:37:45'),
(6, 'assss', '1685917366mohamedElhossiny.jpg', 'ssssss', '2023-06-04 19:22:46', '2023-06-04 19:22:46');

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
(1, 'First cmmmints', 1, 9, '2023-06-08 20:43:25', '2023-06-08 20:43:25'),
(2, 'First cmmmints', 1, 9, '2023-06-08 20:48:28', '2023-06-08 20:48:28'),
(3, 'First cmmmints', 1, 9, '2023-06-08 20:48:29', '2023-06-08 20:48:29'),
(4, 'First cmmmints', 1, 9, '2023-06-08 20:48:30', '2023-06-08 20:48:30');

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
(8, '2023_06_04_202639_create_commints_table', 3);

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
(2, 'App\\Models\\User', 3, 'myToken', '7612e368f9c359689ed0aa64adb534ae33e7a273fd1e76c1da4e03f1e3f69a6e', '[\"*\"]', NULL, '2023-06-08 21:09:52', '2023-06-08 21:08:34', '2023-06-08 21:09:52'),
(3, 'App\\Models\\User', 4, 'myToken', '68f1e5947734d4110d1449c98d4875c129f956a8e3e310d60df0fc50c8680928', '[\"*\"]', NULL, NULL, '2023-06-08 21:13:15', '2023-06-08 21:13:15');

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
(9, 'dasdsa', '1685949315mohamedElhossiny.jpg', 'dsadsadsa', 1, 1, '2023-06-05 04:15:15', '2023-06-05 04:15:15'),
(11, 'ASSDAD', '1686034311mohamedElhossiny.jpg', 'hello from first derive', 1, 1, '2023-06-06 03:51:51', '2023-06-06 03:51:51'),
(13, 'dsafd', '1686263270mohamedElhossiny.jpg', 'fdsafdwsa', 1, 1, '2023-06-08 19:27:50', '2023-06-08 19:27:50'),
(14, 'dsafd', '1686263271mohamedElhossiny.jpg', 'fdsafdwsa', 1, 1, '2023-06-08 19:27:51', '2023-06-08 19:27:51'),
(15, 'fdsaf', '1686263277mohamedElhossiny.jpg', 'sdaf', 1, 1, '2023-06-08 19:27:57', '2023-06-08 19:27:57'),
(16, 'fdsafdsaf', '1686263285mohamedElhossiny.jpg', 'dsafdsa', 1, 1, '2023-06-08 19:28:05', '2023-06-08 19:28:05'),
(17, 'DFS', '1686263439mohamedElhossiny.jpg', 'DSAFD', 1, 1, '2023-06-08 19:30:39', '2023-06-08 19:30:39'),
(18, 'AFDS', '1686263456mohamedElhossiny.jpg', 'AFDSAF', 1, 6, '2023-06-08 19:30:56', '2023-06-08 19:30:56');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'toma', 'm.m.m.elhossin@gmail.com', NULL, '$2y$10$VQesjZGY8/9Qk2kd7FX8tuR4THwc6bKGFg7oDJ.SXPrq7fLN0kLY2', 'user', NULL, '2023-05-23 16:06:24', '2023-05-23 16:06:24'),
(3, 'mohamed from Post Man', 'm.Elhossin@gmail.com', NULL, '$2y$10$MvbSb1bp69r3YiVKOwkrPOZ0WGUENkaeKF4bTCPYpDC9pOR7bNWAW', 'vendor', NULL, '2023-06-08 21:06:58', '2023-06-08 21:06:58'),
(4, 'mohamed from Post Man', 'm.slhossin@gmail.com', NULL, '$2y$10$p53VIxKpXK7UyRX4PO/eXu/NeJLlYImmOWmYMfQUvMR.PsbG/ZXkK', 'user', NULL, '2023-06-08 21:13:15', '2023-06-08 21:13:15');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commints`
--
ALTER TABLE `commints`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commints`
--
ALTER TABLE `commints`
  ADD CONSTRAINT `commints_ibfk_1` FOREIGN KEY (`servicesId`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commints_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
