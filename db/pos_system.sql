-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 02:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `alternate_number` int(11) DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upzila` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `landarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `user_id`, `start_date`, `currency`, `website`, `mobile`, `alternate_number`, `division`, `district`, `upzila`, `zip_code`, `landarea`, `surname`, `first_name`, `last_name`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 22, '2022-07-13 18:00:00', 'Taka', 'www.bdbasavara.com', 1710528972, 1710528972, 'Dhaka', 'Panchagarh', 'Pancahgarh Sador', 5000, 'Fulltola Bazar', 'Md', 'Rabbi', 'Hasan', '1659002577.jpg', 1, '2022-07-28 04:02:58', '2022-07-28 04:02:58'),
(2, 23, '2022-07-13 18:00:00', 'Taka', 'www.bdbasavara.com', 1710528972, 1710528972, 'Dhaka', 'Panchagarh', 'Pancahgarh Sador', 5000, 'Fulltola Bazar', 'Md', 'Rabbi', 'Hasan', '1659002925.jpg', 1, '2022-07-28 04:08:46', '2022-07-28 04:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_07_18_173108_create_permission_tables', 2),
(9, '2022_07_27_045848_create_businesses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'All Product', 'web', '2022-07-18 11:42:43', '2022-07-18 11:42:43'),
(2, 'Add Product', 'web', '2022-07-18 11:43:20', '2022-07-18 11:43:20'),
(3, 'Edit Product', 'web', '2022-07-18 11:43:32', '2022-07-18 11:43:32'),
(4, 'Delete Product', 'web', '2022-07-18 11:43:49', '2022-07-18 11:43:49'),
(5, 'View Product', 'web', '2022-07-18 11:44:01', '2022-07-18 11:44:01'),
(6, 'Add User', 'web', '2022-07-18 11:44:34', '2022-07-18 11:44:34'),
(7, 'Delete User', 'web', '2022-07-18 11:44:48', '2022-07-18 11:44:48'),
(8, 'View User', 'web', '2022-07-18 11:44:56', '2022-07-18 11:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-07-18 11:40:06', '2022-07-18 11:40:06'),
(2, 'Admin', 'web', '2022-07-18 11:41:07', '2022-07-18 11:41:07'),
(3, 'Writer', 'web', '2022-07-18 11:41:29', '2022-07-18 11:41:29'),
(4, 'User', 'web', '2022-07-18 11:41:39', '2022-07-18 11:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 2),
(2, 4),
(3, 2),
(3, 4),
(4, 2),
(4, 4),
(5, 2),
(5, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin@gmail.com', NULL, '$2y$10$P9gL/Cruy5rfn2l3sjG.yO1Z06oRrVyIdR42RxyfW06VT4L32MMKu', NULL, '2022-07-18 11:21:10', '2022-07-18 11:21:10'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$t3ewqBAJOgE3Hs2rp1pum.BrNa/LS77KIbwlF/dDipGz.FjUeGl3O', NULL, '2022-07-18 11:58:19', '2022-07-18 11:58:19'),
(3, 'Writer', 'writer@gmail.com', NULL, '$2y$10$iSux.hygU9vSQ40sf890O.hNz1z7T5Ykj.KtNpsVxw4pRmt3FUn0.', NULL, '2022-07-18 11:59:02', '2022-07-18 11:59:02'),
(4, 'User', 'user@gmail.com', NULL, '$2y$10$a2/SyO64.AH3azvGwAzaWu/o.94D3ImcYIvB4v3hC5/uwGNqKVgdi', NULL, '2022-07-18 11:59:36', '2022-07-18 11:59:36'),
(5, 'user 2', 'user2@gmail.com', NULL, '$2y$10$EnbMzJ.KFMLQpVumNd45Mubga4sjUhgjl47FLCedVqmy4oXlDaAM6', NULL, '2022-07-18 22:38:31', '2022-07-18 22:38:31'),
(6, 'computer77', 'vai@gmail.com', NULL, '$2y$10$kbD3hagFLsFxQnx8BAWHWeeh7fasveUJMtwfL79eTllTkRcXRffna', NULL, '2022-07-28 03:17:53', '2022-07-28 03:17:53'),
(8, 'computer77', 'computer77@gmail.com', NULL, '$2y$10$1XkQIAbJVm8y.atfo87OkOl5WvnwRVDKW38xisu4.Xt1POHsq3xX6', NULL, '2022-07-28 03:19:15', '2022-07-28 03:19:15'),
(9, 'computer78', 'computer78@gmail.com', NULL, '$2y$10$wXqobK5T.eSpgUXcL5xtX.VSD6MaNZSGkUBpJBBCFjL7ysAO.JacK', NULL, '2022-07-28 03:24:54', '2022-07-28 03:24:54'),
(12, 'computer79', 'computer79@gmail.com', NULL, '$2y$10$Xlki9ynRYQxJ.hdmDQqW.OecP/7WeJFRZaSPFt3zSzAG9OsUDlqH2', NULL, '2022-07-28 03:26:45', '2022-07-28 03:26:45'),
(14, 'computer80', 'computer80@gmail.com', NULL, '$2y$10$H8NjSBJj42YroEvBhK6egOZYNQvdDfUm6pFLT4paltrPsClH0ry8i', NULL, '2022-07-28 03:32:33', '2022-07-28 03:32:33'),
(16, 'computer81', 'computer81@gmail.com', NULL, '$2y$10$MOmXBrXBDnwhgswy54aTIuzWY1BFS33fho/HsijEacdF3SXQoDNxq', NULL, '2022-07-28 03:33:51', '2022-07-28 03:33:51'),
(17, 'computer82', 'computer82@gmail.com', NULL, '$2y$10$59H7cTq3Ds116u63g4PBx.O0oj9X8WnHEBw.JlrXRgq3fE2Pf45mO', NULL, '2022-07-28 03:35:57', '2022-07-28 03:35:57'),
(18, 'computer83', 'computer83@gmail.com', NULL, '$2y$10$IdjdjEJq0KDmukD.yFek5OeutUxheddN36WQDmOsLr/1.JjTvP6PS', NULL, '2022-07-28 03:59:43', '2022-07-28 03:59:43'),
(20, 'computer84', 'computer84@gmail.com', NULL, '$2y$10$9epp1RXQnJvzNw40VFrxOelImbAooMXOKxTXl.7byKzwzXILQad6q', NULL, '2022-07-28 04:01:59', '2022-07-28 04:01:59'),
(22, 'computer85', 'computer85@gmail.com', NULL, '$2y$10$EwFZ8nZFj/FX2UpXmvXtlOBld19.WnMNU36ZK.I8SgJNhrf/YjTje', NULL, '2022-07-28 04:02:58', '2022-07-28 04:02:58'),
(23, 'computer86', 'computer86@gmail.com', NULL, '$2y$10$keALD1YJDO6u4BFSecRF5OnRXvlPQnssoDiiIHvSYZ.9gHR49Yrfi', NULL, '2022-07-28 04:08:45', '2022-07-28 04:08:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
