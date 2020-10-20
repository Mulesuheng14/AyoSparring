-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 01:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayosparring`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_lists`
--

CREATE TABLE `booking_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `venue_field_id` int(10) UNSIGNED DEFAULT NULL,
  `is_accepted` int(11) NOT NULL DEFAULT 0,
  `booking_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `hour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sparring_user` int(10) UNSIGNED DEFAULT NULL,
  `is_available` int(11) NOT NULL DEFAULT 1,
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_lists`
--

INSERT INTO `booking_lists` (`id`, `user_id`, `venue_field_id`, `is_accepted`, `booking_type`, `date`, `hour`, `duration`, `price`, `sparring_user`, `is_available`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, 1, 1, 'sparring', '2020-10-18 10:00:00', '17:00', 1, '20000', 4, 0, 1, '2020-10-20 09:55:22', '2', '2020-10-20 10:00:00', '2', NULL, NULL),
(2, 4, 1, 1, 'sparring', '2020-10-19 13:00:00', '20:00', 1, '20000', 2, 0, 1, '2020-10-20 10:50:41', '4', '2020-10-20 10:52:35', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_10_08_133731_create_user_teams_table', 1),
(4, '2020_10_08_133812_create_user_venues_table', 1),
(5, '2020_10_08_135312_create_venue_fields_table', 1),
(6, '2020_10_08_135356_create_booking_lists_table', 1),
(7, '2020_10_08_135504_create_sparring_requests_table', 1),
(8, '2020_10_08_135540_create_reviews_table', 1),
(9, '2020_10_09_132936_add_account_type_in_users', 1),
(10, '2020_10_15_084244_add_payment_status_in_user_venues', 1),
(11, '2020_10_15_150050_delete_is_paid_in_booking_lists', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_list_id` int(10) UNSIGNED DEFAULT NULL,
  `user_reporter_id` int(10) UNSIGNED DEFAULT NULL,
  `user_reported_id` int(10) UNSIGNED DEFAULT NULL,
  `object_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `booking_list_id`, `user_reporter_id`, `user_reported_id`, `object_type`, `review_type`, `comment`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 4, 2, 'team', 'review', 'timnya elek', 1, '2020-10-20 10:53:42', '4', '2020-10-20 10:53:42', '4', NULL, NULL),
(2, 2, 2, 3, 'venue', 'good', 'timnya elek', 1, '2020-10-20 10:54:39', '2', '2020-10-20 10:54:39', '2', NULL, NULL),
(3, 2, 4, 3, 'venue', 'good', 'timnya elek', 1, '2020-10-20 10:57:07', '4', '2020-10-20 10:57:07', '4', NULL, NULL),
(4, 1, 4, 3, 'venue', 'good', 'timnya elek', 1, '2020-10-20 10:57:41', '4', '2020-10-20 10:57:41', '4', NULL, NULL),
(5, 2, 2, 4, 'team', 'review', 'timnya elek', 1, '2020-10-20 11:00:50', '2', '2020-10-20 11:00:50', '2', NULL, NULL),
(6, 1, 2, 2, 'team', 'report', 'Fake request', 1, '2020-10-20 11:03:46', '2', '2020-10-20 11:03:46', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sparring_requests`
--

CREATE TABLE `sparring_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `booking_list_id` int(10) UNSIGNED DEFAULT NULL,
  `is_accepted` int(11) NOT NULL DEFAULT 0,
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sparring_requests`
--

INSERT INTO `sparring_requests` (`id`, `user_id`, `booking_list_id`, `is_accepted`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 4, 1, 1, 0, '2020-10-20 10:30:55', '4', '2020-10-20 10:34:02', '2', NULL, NULL),
(2, 2, 2, 1, 0, '2020-10-20 10:51:50', '2', '2020-10-20 10:52:35', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` int(11) NOT NULL DEFAULT 0,
  `verified_at` timestamp NULL DEFAULT NULL,
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`, `role`, `account_type`, `verified`, `verified_at`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Administrator', 'admin@ayosparring.com', '0987654321', '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y', 1, 'admin', 1, '2020-10-20 09:44:04', 1, '2020-10-20 09:44:04', 'Seeder', '2020-10-20 09:44:04', 'Seeder', NULL, NULL),
(2, 'qweqweqwe', 'babonbabon@gmail.com', '1234567890', '$2y$10$dZmv/45eYd9luFj5hkEB8.n.cFxtHo/efrP8fhDAz3BzRjfA15t8q', 3, 'user', 1, '2020-10-20 09:46:28', 1, '2020-10-20 09:46:04', 'Self', '2020-10-20 09:46:28', '1', NULL, NULL),
(3, 'qweqweqew', 'jakalfutsal@gmail.com', '12345678', '$2y$10$haj8.v.a8zYD2BlvJVVlP./5Obrn4Tr7FRaEci9AylPP/npXGYMUy', 2, 'venue', 1, '2020-10-20 09:48:52', 1, '2020-10-20 09:48:36', 'Self', '2020-10-20 09:48:52', '1', NULL, NULL),
(4, 'qweqweqweqwe', 'hexadecima@gmail.com', '213456745', '$2y$10$R4RmxAFEBGExX5oyh7eCqesXachEUXVse.rIY6y7rTXGdeRanNTLa', 3, 'user', 1, '2020-10-20 10:30:19', 1, '2020-10-20 10:29:48', 'Self', '2020-10-20 10:30:19', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_teams`
--

CREATE TABLE `user_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `team_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_established` timestamp NULL DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_teams`
--

INSERT INTO `user_teams` (`id`, `user_id`, `team_name`, `category`, `date_established`, `address`, `photo`, `postal_code`, `bio`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, 'babon fc', 'profesional', '2020-10-06 17:00:00', 'jakal', 'babon fc_1603187164.jpg', '12312312', 'qweqweqweqweqwe', 1, '2020-10-20 09:46:04', 'Self', '2020-10-20 09:46:04', 'Self', NULL, NULL),
(2, 4, 'hexadecima', 'profesional', '2020-10-27 17:00:00', 'jakal', 'hexadecima_1603189788.jpg', '1231232', 'qweqweqweqweqwe', 1, '2020-10-20 10:29:48', 'Self', '2020-10-20 10:29:48', 'Self', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_venues`
--

CREATE TABLE `user_venues` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_venues`
--

INSERT INTO `user_venues` (`id`, `user_id`, `nik`, `venue_name`, `address`, `phone_number`, `photo`, `postal_code`, `payment_status`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 3, '12345678', 'jakal futsal', 'jakal', '12212121', 'jakal futsal_1603187316.jpg', '12122', '0', 1, '2020-10-20 09:48:36', 'Self', '2020-10-20 09:48:36', 'Self', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venue_fields`
--

CREATE TABLE `venue_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_venue_id` int(10) UNSIGNED DEFAULT NULL,
  `field_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venue_fields`
--

INSERT INTO `venue_fields` (`id`, `user_venue_id`, `field_name`, `field_type`, `price`, `photo`, `flag_active`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, '1', 'Vinyl', '20000', '1_1603187316.jpg', 1, '2020-10-20 09:48:36', 'Self', '2020-10-20 09:48:36', 'Self', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_lists`
--
ALTER TABLE `booking_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_lists_user_id_foreign` (`user_id`),
  ADD KEY `booking_lists_venue_field_id_foreign` (`venue_field_id`),
  ADD KEY `booking_lists_sparring_user_foreign` (`sparring_user`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_booking_list_id_foreign` (`booking_list_id`),
  ADD KEY `reviews_user_reporter_id_foreign` (`user_reporter_id`),
  ADD KEY `reviews_user_reported_id_foreign` (`user_reported_id`);

--
-- Indexes for table `sparring_requests`
--
ALTER TABLE `sparring_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sparring_requests_user_id_foreign` (`user_id`),
  ADD KEY `sparring_requests_booking_list_id_foreign` (`booking_list_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_teams`
--
ALTER TABLE `user_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_teams_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_venues`
--
ALTER TABLE `user_venues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_venues_user_id_foreign` (`user_id`);

--
-- Indexes for table `venue_fields`
--
ALTER TABLE `venue_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venue_fields_user_venue_id_foreign` (`user_venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_lists`
--
ALTER TABLE `booking_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sparring_requests`
--
ALTER TABLE `sparring_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_teams`
--
ALTER TABLE `user_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_venues`
--
ALTER TABLE `user_venues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venue_fields`
--
ALTER TABLE `venue_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_lists`
--
ALTER TABLE `booking_lists`
  ADD CONSTRAINT `booking_lists_sparring_user_foreign` FOREIGN KEY (`sparring_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_lists_venue_field_id_foreign` FOREIGN KEY (`venue_field_id`) REFERENCES `venue_fields` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_booking_list_id_foreign` FOREIGN KEY (`booking_list_id`) REFERENCES `booking_lists` (`id`),
  ADD CONSTRAINT `reviews_user_reported_id_foreign` FOREIGN KEY (`user_reported_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_user_reporter_id_foreign` FOREIGN KEY (`user_reporter_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sparring_requests`
--
ALTER TABLE `sparring_requests`
  ADD CONSTRAINT `sparring_requests_booking_list_id_foreign` FOREIGN KEY (`booking_list_id`) REFERENCES `booking_lists` (`id`),
  ADD CONSTRAINT `sparring_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_teams`
--
ALTER TABLE `user_teams`
  ADD CONSTRAINT `user_teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_venues`
--
ALTER TABLE `user_venues`
  ADD CONSTRAINT `user_venues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `venue_fields`
--
ALTER TABLE `venue_fields`
  ADD CONSTRAINT `venue_fields_user_venue_id_foreign` FOREIGN KEY (`user_venue_id`) REFERENCES `user_venues` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
