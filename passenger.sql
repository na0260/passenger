-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2023 at 12:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `our_story` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `services` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `technology` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `our_story`, `services`, `technology`, `created_at`, `updated_at`) VALUES
(1, 'nur', 'nur', 'asdasd', NULL, '2023-05-30 12:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `agent__requests`
--

CREATE TABLE `agent__requests` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent__requests`
--

INSERT INTO `agent__requests` (`id`, `name`, `mail`, `organization`, `phone`, `city`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'test@mail.com', 'Test Transport', '01234567897', 'Dhaka', 'Test Message', '2023-05-31 11:08:14', '2023-05-31 11:08:14'),
(3, 'my full name', 'me@mydomain.com', 'test', '12312312312', 'city name', '30', '2023-06-04 11:20:20', '2023-06-04 11:20:20'),
(5, 'my full name', 'me@mydomain.com', 'test', '12312312312', 'city name', '30', '2023-06-04 11:26:15', '2023-06-04 11:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint UNSIGNED NOT NULL,
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_point` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_point` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `organization`, `name`, `number`, `start_point`, `end_point`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'Organization1', 'Organization1-Bus1', 'Dhaka Metro D-XXXX', 'XXX', 'YYY', '06:00', '23:00', '2023-06-18 09:35:20', '2023-06-18 09:35:20'),
(2, 'Alif Paribahan', 'Alif1', 'Dhaka Metro D-XXXXYY', 'Mirpur 14', 'Nandan Park', '06:00', '23:00', '2023-06-18 10:25:09', '2023-06-18 10:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `bus_routes`
--

CREATE TABLE `bus_routes` (
  `id` bigint UNSIGNED NOT NULL,
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_01` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_02` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_03` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_04` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_05` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_06` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_07` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_08` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_09` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `station_10` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_routes`
--

INSERT INTO `bus_routes` (`id`, `organization`, `bus_name`, `station_01`, `station_02`, `station_03`, `station_04`, `station_05`, `station_06`, `station_07`, `station_08`, `station_09`, `station_10`, `created_at`, `updated_at`) VALUES
(1, 'Organization1', 'Organization1-Bus1', 'XXX', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'YYY', '2023-06-18 10:02:49', '2023-06-18 10:02:49'),
(2, 'Alif Paribahan', 'Alif1', 'Mirpur 14', 'Sony Cinema Hall', 'Mazar Road', 'Rupnagar', 'Beribadh', 'Birulia', 'Ashulia', 'Zirabo', 'Fantasy Kingdom', 'Nandan Park', '2023-06-18 10:38:42', '2023-06-18 10:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `bus_trackings`
--

CREATE TABLE `bus_trackings` (
  `id` bigint UNSIGNED NOT NULL,
  `bus_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_stoppage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `next_stoppage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_trackings`
--

INSERT INTO `bus_trackings` (`id`, `bus_name`, `organization`, `last_stoppage`, `next_stoppage`, `created_at`, `updated_at`) VALUES
(1, 'Organization1-Bus1', 'Organization1', 'XXX', 'A', '2023-06-18 09:35:20', '2023-06-18 10:12:15'),
(2, 'Alif1', 'Alif Paribahan', 'Rupnagar', 'Beribadh', '2023-06-18 10:25:09', '2023-06-18 10:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mail`, `phone`, `subject`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@mail.com', '01234567897', 'Test', 'Test', '2023-05-31 10:46:22', '2023-05-31 10:46:22'),
(3, 'my full name', 'me@mydomain.com', '12312312312', 'Subject', 'Write Description', '2023-06-04 11:27:36', '2023-06-04 11:27:36'),
(5, 'my full name', 'me@mydomain.com', '12312312312', 'Subject', 'this is a comment', '2023-06-04 11:30:30', '2023-06-04 11:30:30'),
(6, 'my full name', 'me@mydomain.com', '12312312312', 'Subject', 'this is a comment', '2023-06-04 11:30:44', '2023-06-04 11:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint UNSIGNED NOT NULL,
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `driving_license` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `organization`, `bus_name`, `name`, `number`, `nid`, `driving_license`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Organization1', 'Organization1-Bus1', 'Driver-1', '01111111112', '111111111111', 'DK-123456DS123', NULL, '2023-06-18 10:00:58', '2023-06-18 10:00:58'),
(2, 'Alif Paribahan', 'Alif1', 'Driver-1', '01010101011', '121212121212', 'DK-1212DS021', NULL, '2023-06-18 10:37:19', '2023-06-18 10:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_29_182449_create_abouts_table', 1),
(6, '2023_05_30_103443_create_privacies_table', 1),
(7, '2023_05_30_103455_create_terms_table', 1),
(8, '2023_05_30_214706_create_agent__requests_table', 2),
(10, '2023_05_31_163124_create_contacts_table', 3),
(11, '2023_05_31_170459_alter_table', 4),
(12, '2023_06_01_171251_create_views_table', 5),
(20, '2023_06_01_194038_create_buses_table', 6),
(21, '2023_06_04_184425_create_drivers_table', 6),
(22, '2023_06_04_184441_create_bus_routes_table', 6),
(25, '2023_06_12_224505_create_bus_trackings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('samjr.008@gmail.com', '$2y$10$10dDt15XrfTLB79tPnCe9eM80Tvw1sk2Zc/MX2je.yNXH8sug2jd.', '2023-06-18 09:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint UNSIGNED NOT NULL,
  `privacy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `personally` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `check_out` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `security` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sharing` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy`, `personally`, `check_out`, `security`, `consent`, `sharing`, `created_at`, `updated_at`) VALUES
(1, 'Nur', 'Nur', 'Nur', 'Nur', 'Nur', 'Nur', NULL, '2023-05-30 06:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint UNSIGNED NOT NULL,
  `important` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `policy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `scope` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `disclaimer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `important`, `policy`, `scope`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 'Nur', 'AHmedb', 'Samc', 'Himeld', NULL, '2023-05-30 13:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `type`, `organization`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nur Ahmed', 'samjr.008@gmail.com', NULL, 'admin', NULL, NULL, '$2y$10$7.aVn2AJdcWrIFpE7hhoc.Z77Hec4Do6L7G8G08W94wcgRljsIU9q', 'active', NULL, '2023-06-18 09:23:46', '2023-06-18 09:23:46'),
(2, 'Admin', 'agent@mail.com', NULL, 'admin', NULL, NULL, '$2y$10$hHdVFKa9RN2jUcBJ4K276.Omu6j9MBnZ8PbwM9ny.2uoQS4XMzRm2', 'active', NULL, '2023-06-18 09:25:17', '2023-06-18 09:25:17'),
(3, 'Agent1', 'agent1@mail.com', '01111111111', 'agent', 'Organization1', NULL, '$2y$10$QRDLEXJ6Xltd33AvH4pxfOEWu/yPJ.P9BF/Vmyo.MM6/VKUrFihaO', 'active', NULL, '2023-06-18 09:28:16', '2023-06-18 09:28:16'),
(4, 'Alif1', 'alif1@mail.com', '01234567890', 'agent', 'Alif Paribahan', NULL, '$2y$10$tP4CdLjgFguL2D8xngYyxuJDqZnPxzT6LsKoXRmMmdWyTuuRsuO3e', 'active', NULL, '2023-06-18 10:24:03', '2023-06-18 10:24:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent__requests`
--
ALTER TABLE `agent__requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_trackings`
--
ALTER TABLE `bus_trackings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent__requests`
--
ALTER TABLE `agent__requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_routes`
--
ALTER TABLE `bus_routes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_trackings`
--
ALTER TABLE `bus_trackings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
