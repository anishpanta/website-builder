-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2016 at 12:27 AM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_06_100856_user_table', 1),
('2016_05_08_130026_templates', 1),
('2016_05_24_173527_template_data', 1),
('2016_08_20_064021_create_superuser', 1);

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE IF NOT EXISTS `superusers` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `superusers`
--

INSERT INTO `superusers` (`id`, `username`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$3fBeo77kXpW.Uc9Uuiv81ePnix5twXfUQcpQWLLnXna5oVEpJ6clK', NULL, NULL, '2016-08-21 03:07:47', '2016-08-21 03:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(10) unsigned NOT NULL,
  `template_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template_image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `template_name`, `template_image`, `created_at`, `updated_at`) VALUES
(1, 'template1', 'bptW3X9fxshlT60VZvRue52Aa7u82xmTtMUcvjQsyu2nKCjw5ycoUUlUiajIG44mqeoEDazX2o2EfDXO.jpg', '2016-08-21 03:21:22', '2016-08-21 23:55:43'),
(2, 'template2', 'xK0wz22cBNt2kvtfPVCwF4psdor5pmCccgODxiN3JAFEz8AN0sspRbRvI9EJXm8ozEP3ygUfOZ6YdYC6.jpg', '2016-08-21 22:28:29', '2016-08-21 23:55:57'),
(3, 'template3', '6iM3NuKkNo95dFJnzHJVR2IcLHPAG7xptpIJ6VwGyyzUmH3rTYM5yrTnhXYx00wIFrwv5HgjsBUXl0rh.jpg', '2016-08-21 22:29:16', '2016-08-21 22:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `template_data`
--

CREATE TABLE IF NOT EXISTS `template_data` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `short_info` text COLLATE utf8_unicode_ci NOT NULL,
  `long_info` text COLLATE utf8_unicode_ci NOT NULL,
  `skills_list1` text COLLATE utf8_unicode_ci NOT NULL,
  `skills_list2` text COLLATE utf8_unicode_ci NOT NULL,
  `skills_list3` text COLLATE utf8_unicode_ci NOT NULL,
  `skills_list4` text COLLATE utf8_unicode_ci NOT NULL,
  `service_name1` text COLLATE utf8_unicode_ci NOT NULL,
  `service_name2` text COLLATE utf8_unicode_ci NOT NULL,
  `service_name3` text COLLATE utf8_unicode_ci NOT NULL,
  `service_info1` text COLLATE utf8_unicode_ci NOT NULL,
  `service_info2` text COLLATE utf8_unicode_ci NOT NULL,
  `service_info3` text COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `portfolio_images1` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolio_images2` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolio_images3` text COLLATE utf8_unicode_ci NOT NULL,
  `template_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `template_data`
--

INSERT INTO `template_data` (`id`, `first_name`, `middle_name`, `last_name`, `image`, `short_info`, `long_info`, `skills_list1`, `skills_list2`, `skills_list3`, `skills_list4`, `service_name1`, `service_name2`, `service_name3`, `service_info1`, `service_info2`, `service_info3`, `phone_no`, `email`, `address`, `facebook_link`, `twitter_link`, `google_link`, `portfolio_images1`, `portfolio_images2`, `portfolio_images3`, `template_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'kamali', 'kumar', 'khanal', 'nJUu1cbk1boA3HFgoRNjrob45iPKtvkuJmAU60ND9zZswV52IFH4BC8zj64a61lnyeuGvQ9w5yuMfOii.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years', 'Php', 'Javascript', 'NodeJS', 'Python', 'Cloud computing', 'Web services', 'Android application development ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered', '9900001000', 'dummy_man@cms.com', 'kalimati, kathmandu', 'fb.com', 'twitter.com', 'google/com', '8k7HGFiOYiB32RGstRIZDaUHEnyDxtPaZU51nw4Q4hpOrlui4AgdxN6q62AWYh5qiy7OEjTzLMXODetA.jpg', '1FO91o6sq1IsGkeSh49RsPx6Rrj6iAObyR55N4WZoDCEbwlASfUdDCxtHf359yUelhQzmE3qu2Yd2UgK.jpg', 'N04GqaPo8rcywSjqdrRYuhEMNDhrzRzMJhkVQzQDCqi9AJp5FkhYFr593aXhwDnUbkeb4sCtY1cNWP82.jpg', 1, 1, '2016-08-21 03:22:38', '2016-08-22 02:11:32'),
(2, 'Dhauli', 'Maya', 'Ghimire', 'w6LtIeduVoobjqHT5BeJLVOco1iLUKKEYAdqskh0W6wQoLwVVZdGrE5BiX9uHCGjMtZ8XbjE3tqO4Fwd.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College', 'Php', 'Java', 'NodeJS', 'Javascript', 'Web services', 'Software development', 'iOS development', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there', 'suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there Richard McClintock, a Latin professor at Hampden-Sydney College', '9800001000', 'he_me@gmail.com', 'kalimati, kathmandu', 'fb.com', 'twitter.com', 'google.com', 'UAlznQJ9mS3ci9CXK8LPjE5SrTG63XEJ5ZUCceiAJsrbD3A8RtDepAuWLOXVIjEGrWqgO3vvlND1hvP8.jpg', '7SIBzDmF85TQdV3tWyNTEKOY2aGtel0Bgqs8WwtgOgP3eBmtQKMWrUmdQPm4hVL6Ddz2HDjxVY1XJ68K.jpg', '6DiAWP7rSzbLuMDaEcJnvtm7WOfOcUVxXTfbrLbBFgdDGQVql1NBKHZyswjxP9GuRQd5sWuXy6I8CX67.jpg', 2, 1, '2016-08-21 23:13:50', '2016-08-26 12:41:18'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '2016-08-22 21:31:06', '2016-08-22 21:31:06'),
(4, 'binod', '', 'ghimire', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 3, '2016-08-22 22:47:53', '2016-08-22 22:47:53'),
(5, 'jhgfjh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 5, '2016-08-30 09:19:18', '2016-08-30 09:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'user', '$2y$10$p6koDHCQGZkzLiuubOgHj.8l6.HmcLv1LC6cu6wlO.PwORuWCWMQK', 'M4NBqja8jiW4TEVav45sgvuFjIX903tUw9eqF1Yx6xer6CQseD4uUpnj13jq', NULL, '2016-08-21 03:08:00', '2016-11-27 21:47:09'),
(2, 'admin', '$2y$10$ddxaBFktE8E5CXJkafKUWOUvn7B4iqVDKpb9ozM0VeR7laxdZxV6C', '9HDwRjsgY84Om5GfEYL1rZY6TLzvxaZwLxvfjaxXiOwIput1GuridQGErTY0', NULL, '2016-08-22 21:23:23', '2016-08-22 21:32:27'),
(3, 'abc', '$2y$10$0x7xYGb/ilhha3HKKa/yUOnIOwkc5aAMc8ARRJ621ObTspLsLNZO6', 'PP9VKEPohtoLbSsaS4hgeLRTROhgIuQinFAhElvS7VJY2c9wN1nK97DLkcjG', NULL, '2016-08-22 22:46:52', '2016-08-22 22:48:32'),
(4, 'a', '$2y$10$H2xX7hGYbRBY00LSJV/SLeL2w/FfWid1r0ENvFD5zV/tEKqO2z2ky', NULL, NULL, '2016-08-25 22:28:34', '2016-08-25 22:28:34'),
(5, 'aa', '$2y$10$s6sZy0sS8ZZxEA.JndIXF.gcSo4GsKjmDLzb4T0o0aJTew1KlObU.', 'YtFHBQ3XJO2YOgOn1zkC9fB5lQdnZUykDvtvot5wsDDG7eZEK5Qy7D6ia27E', NULL, '2016-08-30 09:18:47', '2016-08-30 09:19:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superusers`
--
ALTER TABLE `superusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `superusers_username_unique` (`username`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `templates_template_name_unique` (`template_name`);

--
-- Indexes for table `template_data`
--
ALTER TABLE `template_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_data_template_id_foreign` (`template_id`),
  ADD KEY `template_data_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `superusers`
--
ALTER TABLE `superusers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `template_data`
--
ALTER TABLE `template_data`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `template_data`
--
ALTER TABLE `template_data`
  ADD CONSTRAINT `template_data_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `template_data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
