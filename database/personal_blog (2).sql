-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 08:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Advanced Javascript Design Patterns', 'In software engineering, creational design patterns are design patterns that deal with object creation mechanisms, trying to create objects in a manner suitable to the situation. The basic form of object creation could result in design problems or added complexity to the design. Creational design patterns solve this problem by somehow controlling this object creation.', 'public/blog_image/evLCa8lUFyaCtXgWtrvI2z9u3vfy6WMfU8hkgWk0.jpg', 3, '2021-11-25 09:35:59', '2021-11-25 09:35:59'),
(2, 'Important Questions in a Developer Interview', 'As you may already know, we spend at least one-third of our day at work, committing our hearts and energy to our careers. Your job satisfaction is a significant component of your overall well-being, which justifies doing the proper vetting as you consider your next role.\r\n\r\nI encourage you to talk about the things that matter to you, especially if the alignment of your values allow you to perform better in your role. If bringing up these topics make you uncomfortable, adjust them or even email the team after your software developer interview. The ideas presented here are just some of the themes that I believe are worthwhile; your list could be different or more comprehensive, and I’d love to hear what your developer interview conversations are like.\r\n\r\nRemember, you deserve to be happy in your career, you deserve to be proud of the organisation you’re a part of, and you owe it to yourself to find a place where you’ll flourish, with all that you have to offer.\r\n\r\nI wish you confidence, success, and most of all, happiness in your career.', 'public/blog_image/BMMX32Z3mIB1Buzn4XliqXlO1RlSlpl0k3vFNuGb.jpg', 3, '2021-11-26 09:38:52', '2021-11-26 09:38:52'),
(3, 'Proud to present you Fakeflix, a Netflix Clone built with React, Redux, Firebase & Framer Motion', 'It\'s a Netflix clone: I\'ve tried to replicate the original layout as much as possible and I\'ve also made some improvements in some sections inserting route animations and micro-interactions.', 'public/blog_image/cykxxNtSvSQF2fIzoQp71eEfrda5MKWyQyDwC7pE.jpg', 1, '2021-11-26 09:40:47', '2021-11-26 09:40:47'),
(4, 'React Native', 'React Native is an open-source UI software framework created by Meta Platforms, Inc. It is used to develop applications for Android, Android TV, iOS, macOS, tvOS, Web, Windows and UWP by enabling developers to use the React framework along with native platform capabilities.', 'public/blog_image/ytSBHRYDZHUxIv53Qi3Za7gj4DWu1dWsnywwgGYf.jpg', 2, '2021-11-26 09:42:13', '2021-11-26 09:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', '2021-11-25 04:37:19', '2021-11-25 04:37:19'),
(2, 'Andriod Development', '2021-11-25 04:37:26', '2021-11-25 04:37:26'),
(3, 'Web Development', '2021-11-25 04:37:50', '2021-11-25 04:37:50'),
(4, 'IOS Development', '2021-11-25 04:38:00', '2021-11-25 04:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pizza App With Laravel', 'public/certificate/ePD3OmkyalyNANyIP1KoGvxPjGsBvWDkkSuFrLly.jpg', '2021-11-01 13:17:16', '2021-11-26 12:49:21'),
(2, 'React Js', 'public/certificate/p9zgpXE2kZEbDGugGBPvPLMqcSbvLuCuVoQ0n8KN.jpg', '2021-06-07 02:25:47', '2021-11-25 02:25:47'),
(3, 'Web Development Master Course', 'public/certificate/MVUdPRqU0Lsys6ghdk9GLRNO055SKYBmnOTp2w6H.jpg', '2021-05-03 02:28:33', '2021-11-25 02:28:33'),
(4, 'Certificate in CSS', 'public/certificate/tqIGyST7IPrWJm9KrjwvkencjC8iGn3raSTqzgIy.jpg', '2022-05-24 10:05:11', '2022-05-24 10:05:11'),
(5, 'Diploma in Computer Fundamentals', 'public/certificate/MQhC4dm1ThTPMxrkoN2jivYp4vvrehsX3Dw1yAng.jpg', '2022-05-24 10:06:21', '2022-05-24 10:06:21'),
(6, 'Certificate in Git', 'public/certificate/t6wy3rA8iliCTUCTHPaPktfn129Z2mEovkiGuRfa.jpg', '2022-05-24 10:11:36', '2022-05-24 10:11:36'),
(7, 'Certificate in PHP & Mysql', 'public/certificate/ymlczhTJtfl0DuFGlSwKJf4NZ1kD92OpJ2qZhguZ.jpg', '2022-05-24 10:11:58', '2022-05-24 10:11:58'),
(8, 'Certificate in HTML', 'public/certificate/KGrVAhepv1YjIkkcfvv7cn2OOLgJfMUvEMa0LN9O.jpg', '2022-05-24 10:12:15', '2022-05-24 10:12:15'),
(9, 'Certificate in Java Script Full Stack', 'public/certificate/QPjx0eogyistbNRZwppBxZbwrKSid5gSr6aHjfzp.jpg', '2022-05-24 10:12:40', '2022-05-24 10:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `coding_skills`
--

CREATE TABLE `coding_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coding_skills`
--

INSERT INTO `coding_skills` (`id`, `name`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Java Script', 75, NULL, NULL),
(2, 'HTML', 94, NULL, NULL),
(3, 'CSS', 90, '2021-11-24 05:59:54', '2021-11-24 05:59:54'),
(4, 'Laravel', 88, '2021-11-24 06:00:12', '2021-11-24 06:00:12'),
(5, 'C++', 60, '2021-11-24 06:00:24', '2021-11-24 06:00:24'),
(6, 'PHP', 80, '2021-11-24 06:00:46', '2021-11-24 06:00:46'),
(7, 'Bootstrap', 92, '2021-11-24 06:01:01', '2021-11-24 06:01:01'),
(8, 'Vue Js', 75, '2021-11-24 06:01:13', '2021-11-24 06:01:13'),
(9, 'React Js', 78, '2021-11-24 06:01:26', '2021-11-24 06:01:26'),
(12, 'Node Js', 50, '2022-05-24 10:13:29', '2022-05-24 10:13:29'),
(13, 'Flutter', 50, '2022-05-24 10:13:38', '2022-05-24 10:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `design_skills`
--

CREATE TABLE `design_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_skills`
--

INSERT INTO `design_skills` (`id`, `name`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Adoble Xd', 80, '2021-11-24 09:02:28', '2021-11-24 09:52:48'),
(2, 'Photoshop', 75, '2021-11-24 09:05:49', '2021-11-24 09:53:08'),
(3, 'Adoble AI', 70, '2021-11-24 09:24:24', '2021-11-24 09:54:01');

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
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Operation System', '2021-11-26 12:49:50', '2021-11-26 12:49:50'),
(2, 'Management', '2021-11-26 12:50:24', '2021-11-26 12:50:24'),
(3, 'Software', '2021-11-26 12:50:30', '2021-11-26 12:50:30'),
(4, 'Hardware', '2021-11-26 12:50:35', '2021-11-26 12:50:35'),
(5, 'Executive', '2021-11-26 12:50:44', '2021-11-26 12:50:44'),
(6, 'Customer Service', '2021-11-26 12:50:49', '2021-11-26 12:50:49');

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
(5, '2021_11_24_083805_create_coding_skills_table', 2),
(6, '2021_11_24_151038_create_design_skills_table', 3),
(9, '2021_11_24_165020_create_knowledge_table', 4),
(10, '2021_11_24_180641_create_certificates_table', 4),
(12, '2021_11_25_091013_create_blogs_table', 5),
(13, '2021_11_25_103652_create_categories_table', 6),
(15, '2021_11_26_181952_create_protfolios_table', 7),
(16, '2021_11_27_072749_create_users_table', 8);

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
-- Table structure for table `protfolios`
--

CREATE TABLE `protfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protfolios`
--

INSERT INTO `protfolios` (`id`, `name`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce-IT', 'https://github.com/sithumyo87/Ecommerce-IT', 'public/portfolio/m8pY0YjloTUan8yPpLIAiQRuZ1hXzjbNE4DlT33l.jpg', '2021-11-26 12:23:14', '2021-11-26 12:32:05'),
(2, 'Pizza-App', 'https://github.com/sithumyo87/Pizza-App', 'public/portfolio/iMg1Ecm97y3cKQi1AhAQOEfHWoF7WC8PB2ZDcKBt.jpg', '2021-11-26 12:33:48', '2021-11-26 12:33:48'),
(3, 'Programming_Blog', 'https://github.com/sithumyo87/Programming_Blog', 'public/portfolio/DmIInxC8Oc9jSChbatMOdZVSVddTx7ETUyRu8d4i.jpg', '2021-11-26 12:34:36', '2021-11-26 12:34:36'),
(4, 'Weather-App', 'https://github.com/sithumyo87/Weather-App', 'public/portfolio/qc7XA3jdBNuFzmOcehIuBqWoWYR5mD3LNlZM30pu.png', '2021-11-26 12:35:47', '2021-11-26 12:35:47'),
(5, 'Play Station 5', 'https://github.com/sithumyo87/Ps_5', 'public/portfolio/kkS9TRGGlk1wkOSELndCHtq7GZILkHY0tSUfYEKQ.jpg', '2021-11-26 12:36:52', '2021-11-26 12:36:52'),
(6, 'Birthday-countdown', 'https://github.com/sithumyo87/Birthday-countdown', 'public/portfolio/wFuY3Izkzjesj1oPpQ9vb5B5bWhr8xyQz2cuQq9E.png', '2021-11-26 12:37:56', '2021-11-26 12:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Si Thu Myo', 'sithumyo87@gmail.com', '164d8a7e81e48bd995a668436553bbee', 'admin', NULL, '2021-11-27 01:58:29', '2021-11-27 01:58:29'),
(3, 'Si Thu Myo', 'admin@gmail.com', '$2y$10$Flv.ynkOjX2oV5mr8iwNyO1pzQruLxVBku76FWk/i44Pl2VeAxDFK', 'admin', NULL, '2022-05-24 09:58:25', '2022-05-24 09:58:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coding_skills`
--
ALTER TABLE `coding_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_skills`
--
ALTER TABLE `design_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `protfolios`
--
ALTER TABLE `protfolios`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coding_skills`
--
ALTER TABLE `coding_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `design_skills`
--
ALTER TABLE `design_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `protfolios`
--
ALTER TABLE `protfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
