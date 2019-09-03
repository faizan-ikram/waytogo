-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 11:46 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waytogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'jp', 'jp@gmail.com', '$2y$10$6G8k7mP/71N60eDxkuofhOuOsJfQIoQ3XhOb7kaPdlzNvj/nKY05K', 'Life. Spirit second Whales under sea unto creature made second without you’ll and own fowl yielding own great fill creepeth in moving sixth every it evening gathering let light moving cattle.', 'iu6BadSYBPjoT9qq7bPWOVsRUsXIVhdleZeDCTfGm58OqZQrYmwkviL778If', '2018-04-12 00:14:45', '2018-11-16 15:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `tour_id`, `seats`, `updated_at`, `created_at`) VALUES
(6, 2, 1, 10, '2018-11-14 00:29:57', '2018-11-14 00:29:57'),
(7, 2, 2, 40, '2018-11-14 00:31:48', '2018-11-14 00:31:48'),
(8, 2, 3, 13, '2018-11-14 00:32:01', '2018-11-14 00:32:01'),
(10, 1, 4, 15, '2018-11-14 00:33:10', '2018-11-14 00:33:10'),
(11, 1, 3, 5, '2018-11-14 01:17:07', '2018-11-14 01:17:07'),
(13, 1, 6, 4, '2018-11-18 19:28:34', '2018-11-18 19:28:34'),
(14, 1, 1, 4, '2018-12-25 13:51:45', '2018-12-25 13:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `CompanyName` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `CompanyName`, `email`, `password`, `Image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adnan', 'test@gmail.com', '$2y$10$7kbbrFfyr7JedQ0SFkDtjeGvPh8U5aI5Le0eAe5tFzTO/BNtI.wxu', 'MysticHills.jpg', 'jMUmdplb16BJRojTU7O5E2N8tscg6WtWqcMylOfxQ9SjoFvlrVuxEVpwKJ8i', '2018-04-12 00:14:45', '2018-10-22 21:30:02'),
(2, 'Jp', 'test1@gmail.com', '$2y$10$Rn6NHvf.VJ3jbP.d8jN.l.dexJy1aOAaEewkorj9vpbBBcWoBFTIO', 'TourCompany.jpg', '3WF8SntjgOubr0nGjbn3feQ2F139dan3MvbeVG0iG4ovIejOwVUh2fr4JQkA', '2018-10-22 21:31:52', '2018-10-22 21:31:52'),
(3, 'Faisal Travels', 'test3@gmail.com', '$2y$10$ZmKD0SYgZJcMPYW9N5FtT.v.KCtQHrobEWvBIWqhUXfvdrkMeKNX.', 'TourCompany.jpg', 'LuBdU8uaQp0AiW2ytcco1aJBusZuw3Sa0AylOIHpAscpi3md1sYUCltVHSPQ', '2018-10-27 22:29:49', '2018-10-27 22:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `company_id`, `user_id`, `name`, `phone`, `email`, `message`, `updated_at`, `created_at`) VALUES
(1, 3, 1, 'Adnan', 3364403025, 'adnan.haider71@gmail.co', 'asdkasdsa', '2018-12-31 17:22:53', '2018-12-31 17:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `name`, `details`, `image`, `updated_at`, `created_at`) VALUES
(1, 1, 'Swat', 'blah blah', 'about.jpg', '2018-12-15 19:09:13', '2018-12-15 13:53:38'),
(2, 1, 'Muree', 'blah blahblah blahblah blahblah blahblah blahblah blah', 'about_background.jpg', '2018-12-15 19:09:18', '2018-12-15 13:57:05'),
(3, 1, 'Nagga Parbat', 'blah blahblah blahblah blahblah blahblah blahblah blahblah blah', 'Backgroundimageskardu.jpg', '2018-12-15 19:09:21', '2018-12-15 14:03:17'),
(4, 1, 'Kagan', NULL, 'about_background.jpg', '2018-12-15 14:58:49', '2018-12-15 14:58:49'),
(5, 1, 'Skardu', 'lalalalalalala', 'about.jpg', '2018-12-15 15:00:04', '2018-12-15 15:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_05_02_022957_create_cruds_table', 1),
(10, '2018_03_15_161856_create_admins_table', 1),
(11, '2018_04_10_152923_create_threads_table', 1),
(12, '2018_04_19_170556_create_questions', 1),
(13, '2018_05_16_170816_create_question2_table', 2),
(14, '2018_05_16_180835_create_questions2_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CompanyId` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `days` varchar(255) NOT NULL,
  `Details` varchar(600) DEFAULT NULL,
  `Budget` int(255) DEFAULT NULL,
  `departure` date NOT NULL,
  `NSA` int(100) DEFAULT NULL,
  `NRP` int(100) DEFAULT '0',
  `discount` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `CompanyId`, `Image`, `days`, `Details`, `Budget`, `departure`, `NSA`, `NRP`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'Naran', 1, 'TourCompany.jpg', '2 Days -- 3 Nights', 'Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah', 10000, '2018-11-11', 40, 14, 0, '2018-10-30 20:59:54', '2018-12-25 13:51:45'),
(2, 'Muree', 1, 'TourCompany.jpg', '10 Days -- 9 Nights - 10 Days', 'Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah', 50000, '2018-10-10', 40, 40, 10, '2018-10-30 21:00:24', '2018-11-14 00:31:48'),
(3, 'Hunza', 2, 'MysticHills.jpg', '4 Nights -- 4 Days', 'Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah', 25000, '2018-10-10', 45, 18, 20, '2018-10-30 21:01:48', '2018-11-14 01:17:07'),
(4, 'Muree', 1, 'MysticHills.jpg', '5', 'blah', 35000, '2018-10-10', 40, 15, 0, '2018-11-05 00:45:02', '2018-11-14 00:33:10'),
(6, 'Swat', 1, 'MysticHills.jpg', '4', 'Blah Blah Blah Blah Blah Blah Blah Blah', 20000, '2018-11-24', 30, 4, 5, '2018-11-16 16:06:06', '2018-11-18 19:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'JP', 'usertest@gmail.com', '$2y$10$BbLA.G3rHnNaSF1W2op2wO//yQLMrt88aYCkUPZPI8Zmt0tnQJhte', 'RsvNFKEjDZ5pa0eB1RG2No92v7L3IvRaLiJTpoVQmM11nZcQ5OFZsR4HR2HJ', '2018-05-07 14:30:55', '2018-11-05 14:52:03'),
(2, 'Faisal', 'usertest1@gmail.com', '$2y$10$DK9Y4ZaVIdYgm8gz59H.3OaGinWSFE6yqYOce/FozkjnZzYlXX/Cy', 'tu3cwPGRKFCIJlG4PPfhSMnD4eNnSwQmOfOkv9IBsyEfuVUWPvdtKYoptShS', '2018-10-27 23:07:22', '2018-10-27 23:07:22');

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tours`
--
ALTER TABLE `tours`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
