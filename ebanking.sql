-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 03:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Riya Jain', 'rjriyajain96@gmail.com', NULL, '$2y$10$sSNVzuoTaJ.aK5jLEo7YZeWsmdOWnd5SA1q83Wp3hExWzqK9zqRIm', NULL, '2019-07-17 08:59:17', '2019-07-17 08:59:17');

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_07_05_000000_create_users_table', 3),
(4, '2014_10_12_000000_create_admins_table', 4),
(5, '2019_10_12_000000_create_users_table', 5),
(6, '2019_11_12_000000_create_users_table', 6),
(7, '2019_10_12_010101_create_users_table', 7),
(8, '2019_10_12_09090909_create_admins_table', 8),
(9, '2019_7_9_000000_create_users_table', 9),
(10, '2018_7_9_000909_create_users_table', 10),
(11, '2019_10_12_0909090_create_users_table', 11),
(12, '2019_10_12_0009090_create_users_table', 12),
(13, '2019_10_12_0999999_create_users_table', 13),
(14, '2019_12_12_0090909_create_users_table', 14),
(15, '2019_07_05_9898778_create_users_table', 15),
(16, '2019_07_16_173234_create_transactions_table', 16),
(17, '2019_07_16_195125_create_transhistories_table', 17);

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
-- Table structure for table `transhistories`
--

CREATE TABLE `transhistories` (
  `tid` bigint(20) UNSIGNED NOT NULL,
  `to_acc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_acc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transhistories`
--

INSERT INTO `transhistories` (`tid`, `to_acc`, `from_acc`, `amount`, `created_at`, `updated_at`) VALUES
(1, '10000001', '10000002', 500, '2019-07-16 14:22:43', '2019-07-16 14:22:43'),
(2, '10000002', '10000001', 500, '2019-07-17 05:06:39', '2019-07-17 05:06:39'),
(3, '10000002', '10000001', 500, '2019-07-17 05:09:39', '2019-07-17 05:09:39'),
(4, '10000002', '10000001', 500, '2019-07-17 05:10:00', '2019-07-17 05:10:00');

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
  `mobile` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadhar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `cover_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `aadhar`, `account_no`, `balance`, `cover_image`, `flag`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Riya Jain', 'rjriyajain96@gmail.com', NULL, '$2y$10$.RxDnw6KAI0ddlE/MZl3ru0EtzYyXBmdyu4XuloVwoRmhTwZW9SXS', 2147483647, 'giridih', '123665876', 465684, 5000, 'public/image/riya passport_1563372832.jpg', 0, NULL, '2019-07-17 08:43:53', '2019-07-19 06:53:16'),
(3, 'Shubham Kumar', 'shubharmy69269@gmail.com', NULL, '$2y$10$hRnfx/xESRBWwGWaBO2GE.VeT/SwjGXAf/wHV6dR/devE1pU7xgRS', 2147483647, 'Dhanbad', '1234567890', 111982, 5000, 'public/image/scanner_20190625_014034_4_1563429230.jpg', 0, NULL, '2019-07-18 00:23:50', '2019-07-19 06:53:12'),
(4, 'Shivasish Dey', 'rajamunger@gmail.com', NULL, '$2y$10$EAdD93cFGULG3l2yAE1TMOycjjZxj09.F2hgevxAShS1HlgTH2g2i', 2147483647, 'Munger', '1234567890', 542219, 5000, 'public/image/scanner_20190718_111153_1563429442.jpg', 0, NULL, '2019-07-18 00:27:22', '2019-07-19 06:53:21');

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
-- Indexes for table `transhistories`
--
ALTER TABLE `transhistories`
  ADD PRIMARY KEY (`tid`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transhistories`
--
ALTER TABLE `transhistories`
  MODIFY `tid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
