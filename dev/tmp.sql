-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 10:36 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `saas`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_plans`
--

CREATE TABLE `business_plans` (
                                  `id` bigint(20) UNSIGNED NOT NULL,
                                  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `workspace_id` int(10) UNSIGNED NOT NULL,
                                  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `date` date DEFAULT NULL,
                                  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `description` text COLLATE utf8mb4_unicode_ci,
                                  `ex_summary` text COLLATE utf8mb4_unicode_ci,
                                  `m_analysis` text COLLATE utf8mb4_unicode_ci,
                                  `management` text COLLATE utf8mb4_unicode_ci,
                                  `product` text COLLATE utf8mb4_unicode_ci,
                                  `marketing` text COLLATE utf8mb4_unicode_ci,
                                  `budget` text COLLATE utf8mb4_unicode_ci,
                                  `investment` text COLLATE utf8mb4_unicode_ci,
                                  `finance` text COLLATE utf8mb4_unicode_ci,
                                  `appendix` text COLLATE utf8mb4_unicode_ci,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
                             `id` bigint(20) UNSIGNED NOT NULL,
                             `workspace_id` int(10) UNSIGNED NOT NULL,
                             `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                             `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                             `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                             `start_date` datetime DEFAULT NULL,
                             `end_date` datetime DEFAULT NULL,
                             `description` text COLLATE utf8mb4_unicode_ci,
                             `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                             `created_at` timestamp NULL DEFAULT NULL,
                             `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
                                 `id` bigint(20) UNSIGNED NOT NULL,
                                 `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                 `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `admin_id`, `title`, `subtitle`, `email`, `phone_number`, `twitter`, `facebook`, `linkedin`, `youtube`, `address_1`, `address_2`, `zip`, `city`, `state`, `country`, `created_at`, `updated_at`) VALUES
    (1, 0, 'Contact Us', 'Contact Us', 'demo@example.com', '9887667', 'https://twitter.com/', 'https://www.facebook.com/', NULL, 'https://youtube.com/', '9888, Los angels, California, United States', NULL, NULL, NULL, NULL, NULL, '2022-04-11 07:57:11', '2022-04-11 08:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
                                `id` bigint(20) UNSIGNED NOT NULL,
                                `user_id` int(10) UNSIGNED NOT NULL,
                                `gateway_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                `gateway_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
                             `id` bigint(20) UNSIGNED NOT NULL,
                             `workspace_id` int(10) UNSIGNED NOT NULL,
                             `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                             `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                             `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                             `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                             `created_at` timestamp NULL DEFAULT NULL,
                             `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `workspace_id` int(10) UNSIGNED NOT NULL,
                               `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
                               `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
                               `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `five_minute_journals`
--

CREATE TABLE `five_minute_journals` (
                                        `id` bigint(20) UNSIGNED NOT NULL,
                                        `workspace_id` int(10) UNSIGNED NOT NULL,
                                        `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                                        `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                        `date` date DEFAULT NULL,
                                        `day` date DEFAULT NULL,
                                        `grateful` text COLLATE utf8mb4_unicode_ci,
                                        `habit` text COLLATE utf8mb4_unicode_ci,
                                        `dream` text COLLATE utf8mb4_unicode_ci,
                                        `tasks` text COLLATE utf8mb4_unicode_ci,
                                        `affirmations` text COLLATE utf8mb4_unicode_ci,
                                        `feeling` text COLLATE utf8mb4_unicode_ci,
                                        `dont_waste` text COLLATE utf8mb4_unicode_ci,
                                        `fav_things` text COLLATE utf8mb4_unicode_ci,
                                        `must_accomplish` text COLLATE utf8mb4_unicode_ci,
                                        `created_at` timestamp NULL DEFAULT NULL,
                                        `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `workspace_id` int(10) UNSIGNED NOT NULL,
                         `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `date` date DEFAULT NULL,
                         `description` text COLLATE utf8mb4_unicode_ci,
                         `completed` tinyint(1) NOT NULL DEFAULT '0',
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goal_plans`
--

CREATE TABLE `goal_plans` (
                              `id` bigint(20) UNSIGNED NOT NULL,
                              `workspace_id` int(10) UNSIGNED NOT NULL,
                              `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                              `goal_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                              `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                              `date` date DEFAULT NULL,
                              `description` text COLLATE utf8mb4_unicode_ci,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
                          `id` bigint(20) UNSIGNED NOT NULL,
                          `workspace_id` int(10) UNSIGNED NOT NULL,
                          `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                          `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                          `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_pages`
--

CREATE TABLE `landing_pages` (
                                 `id` bigint(20) UNSIGNED NOT NULL,
                                 `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                 `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `hero_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `hero_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_one_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature1_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_two_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature1_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_three_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature1_image_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature2_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature2_one_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature2_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature2_two_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature2_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature2_three_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `feature2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature2_image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `feature2_image_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `partners_avatar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `partners_avatar8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `story1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `story1_paragrapgh` text COLLATE utf8mb4_unicode_ci,
                                 `story1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `story2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `story2_paragrapgh` text COLLATE utf8mb4_unicode_ci,
                                 `story2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number1_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `number2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number2_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `number3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number3_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `number3_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `newsletter_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `newsletter_paragraph` text COLLATE utf8mb4_unicode_ci,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_pages`
--

INSERT INTO `landing_pages` (`id`, `admin_id`, `hero_title`, `hero_subtitle`, `background_image`, `hero_paragraph`, `feature1_title`, `feature1_subtitle`, `feature1_one`, `feature1_one_paragraph`, `feature1_two`, `feature1_two_paragraph`, `feature1_three`, `feature1_three_paragraph`, `feature1_image`, `feature1_image_title`, `feature1_image_subtitle`, `feature2_one`, `feature2_one_paragraph`, `feature2_two`, `feature2_two_paragraph`, `feature2_three`, `feature2_three_paragraph`, `feature2_image`, `feature2_image_title`, `feature2_image_subtitle`, `partners_title`, `partners_subtitle`, `partners_paragraph`, `partners_avatar1`, `partners_avatar2`, `partners_avatar3`, `partners_avatar4`, `partners_avatar5`, `partners_avatar6`, `partners_avatar7`, `partners_avatar8`, `story1_title`, `story1_paragrapgh`, `story1_image`, `story2_title`, `story2_paragrapgh`, `story2_image`, `number1`, `number1_title`, `number1_paragraph`, `number2`, `number2_title`, `number2_paragraph`, `number3`, `number3_title`, `number3_paragraph`, `newsletter_title`, `newsletter_paragraph`, `created_at`, `updated_at`) VALUES
    (1, 0, 'Focus at what you can achieve.', 'Life is what you make of it.', 'media/zPv53qMy7itT0Mb38jIKtzoi4c1ioTgiski0P3qc.jpg', 'Live to do things that you enjoy because you have given a life to live not to please.', 'Take Actions, Now is the perfect time.', 'Take messy uncomfortable actions now to live a better life tomorrow.', 'Take Notes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Learn New Things', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Write Journal', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'media/YdlN1kHGrtDSO4KvUGGJ7f8mhHdDEUQMcyqEby1k.jpg', 'Set Goals', 'achieve more', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-11 09:51:28', '2022-04-11 16:38:59');

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
                                                          (209, '2014_10_12_000000_create_users_table', 1),
                                                          (210, '2014_10_12_100000_create_password_resets_table', 1),
                                                          (211, '2019_08_19_000000_create_failed_jobs_table', 1),
                                                          (212, '2021_06_13_173242_create_documents_table', 1),
                                                          (213, '2021_06_15_091441_create_settings_table', 1),
                                                          (214, '2021_07_03_221331_create_goal_plans_table', 1),
                                                          (215, '2021_07_03_233802_create_weekly_plans_table', 1),
                                                          (216, '2021_07_06_190721_create_to_learns_table', 1),
                                                          (217, '2021_07_06_212302_create_notes_table', 1),
                                                          (218, '2021_07_07_102711_create_projects_table', 1),
                                                          (219, '2021_07_07_162828_create_five_minute_journals_table', 1),
                                                          (220, '2021_07_07_194524_create_images_table', 1),
                                                          (221, '2021_07_08_175558_create_calendars_table', 1),
                                                          (222, '2021_07_11_135255_create_todos_table', 1),
                                                          (223, '2021_07_12_154443_create_goals_table', 1),
                                                          (224, '2021_07_27_190149_create_workspaces_table', 1),
                                                          (225, '2021_07_31_204942_create_subscription_plans_table', 1),
                                                          (226, '2021_08_02_202546_create_payment_gateways_table', 1),
                                                          (227, '2021_08_03_161432_create_credit_cards_table', 1),
                                                          (228, '2021_08_04_120944_create_business_plans_table', 1),
                                                          (229, '2021_10_06_113130_create_newsletters_table', 1),
                                                          (230, '2022_03_06_200650_create_quotes_table', 1),
                                                          (231, '2022_04_08_092940_create_landing_pages_table', 1),
                                                          (232, '2022_04_09_142058_create_pricing_pages_table', 1),
                                                          (233, '2022_04_10_200218_create_privacy_policies_table', 1),
                                                          (234, '2022_04_11_090145_create_contact_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `created_at` timestamp NULL DEFAULT NULL,
                               `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `workspace_id` int(10) UNSIGNED NOT NULL,
                         `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `notes` text COLLATE utf8mb4_unicode_ci,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
                                    `id` bigint(20) UNSIGNED NOT NULL,
                                    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `api_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `api_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `api_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `api_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `public_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `private_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `description` text COLLATE utf8mb4_unicode_ci,
                                    `instruction` text COLLATE utf8mb4_unicode_ci,
                                    `active` tinyint(1) NOT NULL DEFAULT '1',
                                    `live` tinyint(1) NOT NULL DEFAULT '1',
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `category_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `api_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `heading` text COLLATE utf8mb4_unicode_ci,
                         `sub_heading` text COLLATE utf8mb4_unicode_ci,
                         `lead_text` text COLLATE utf8mb4_unicode_ci,
                         `content` longtext COLLATE utf8mb4_unicode_ci,
                         `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `settings` longtext COLLATE utf8mb4_unicode_ci,
                         `sort_order` int(10) UNSIGNED NOT NULL DEFAULT '1',
                         `published` tinyint(1) NOT NULL DEFAULT '1',
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `parent_id`, `user_id`, `category_id`, `api_name`, `slug`, `menu_name`, `title`, `heading`, `sub_heading`, `lead_text`, `content`, `featured_image`, `youtube`, `vimeo`, `settings`, `sort_order`, `published`, `created_at`, `updated_at`) VALUES
    (1, 0, 0, 0, NULL, 'home', 'Home', 'Home dd', NULL, NULL, NULL, '<!DOCTYPE html>\n<head>\n    <meta charset=\"utf-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n\n    <title>\n        Home-CloudOnex\n    </title>\n\n\n    <link id=\"pagestyle\" href=\"/public/css/app.css?v=2\" rel=\"stylesheet\">\n<style id=\"vvvebjs-styles\"></style></head>\n\n<body class=\"about-us\" data-new-gr-c-s-check-loaded=\"14.1056.0\" data-gr-ext-installed=\"\" data-new-gr-c-s-loaded=\"14.1056.0\">\n\n<!-- Navbar Transparent -->\n<nav class=\"navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent \">\n    <div class=\"container\">\n        <a class=\"navbar-brand bg-transparent text-white fw-bolder \" href=\"/home\" rel=\"tooltip\" title=\"Designed and Coded by Creative Tim\" data-placement=\"bottom\" target=\"_blank\">\n\n                                    <img src=\"/public/uploads/media/md92KevN3gWPzoBwGRVYcPRicIKJ3tCjaBKoRmbi.png\" class=\"navbar-brand-img h-100\" style=\"max-height: 30px;\" alt=\"...\">\n                        </a>\n\n        <div class=\"collapse  navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5\" id=\"navigation\">\n            <ul class=\"navbar-nav  bg-transparent navbar-nav-hover w-100\">\n\n\n\n                <li class=\"nav-item float-end ms-5 ms-lg-auto\">\n                    <a href=\"/home\" class=\"nav-link text-white ps-2 d-flex justify-content-between cursor-pointer align-items-center\" id=\"dropdownMenuPages8\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">\n                        Home\n\n                    </a>\n\n                </li>\n\n                <li class=\"nav-item float-end ms-5 ms-lg-auto\">\n                    <a class=\"nav-link nav-link-icon \" href=\"/pricing\" target=\"_blank\">\n\n                        <p class=\"d-inline text-sm z-index-1 font-bold text-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Star us on Github\">Pricing</p>\n                    </a>\n                </li>\n                <li class=\"nav-item ms-lg-auto\">\n                    <a class=\"nav-link nav-link-icon me-5\" href=\"/login\" target=\"_blank\">\n\n                        <p class=\"d-inline text-sm z-index-1 text-white font-bold\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Star us on Github\">Login</p>\n                    </a>\n                </li>\n\n                <li class=\"nav-item my-auto ms-3 ms-lg-0\">\n                    <a href=\"/signup\" class=\"btn btn-info btn-round mb-0 me-1 mt-2 mt-md-0\">Sign Up for free</a>\n                </li>\n            </ul>\n        </div>\n    </div>\n</nav>\n\n\n\n\n <header class=\"bg-gradient-dark\">\n        <div class=\"page-header min-vh-100\" style=\"background-image: url(\'/public/img/cover2.jpg\');\">\n\n<span class=\"mask bg-dark opacity-8\"></span>\n            <div class=\"container\">\n                <div class=\"row\">\n                    <div class=\"col-lg-6 col-md-7 d-flex justify-content-center flex-column\">\n                        <h1 class=\"text-warning  display-1  fw-bolder mt-4\">Focus on Yourd Dreams</h1>\n                        <h1 class=\"mb-4 display-6 text-white\">Unleash your super power</h1>\n                        <p class=\"text-white-50 pe-5 me-5\">The time is to focus in yourself. Selfcare is not Selfish. </p>\n                        <div class=\"buttons\">\n                            <a href=\"/signup\" class=\"btn btn-info mt-4\">Get Started</a>\n                            <a href=\"/pricing\" class=\"btn btn-md  btn-outline-light  text-white shadow-none mt-4\">Plans &amp; Pricng</a>\n                        </div>\n                    </div>\n                </div>\n\n\n            </div>\n\n        </div>\n        <div class=\"position-absolute w-100 bottom-0\">\n            <svg width=\"100%\" viewBox=\"0 -1 1920 166\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n                <title>wave-up</title>\n                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                    <g transform=\"translate(0.000000, 5.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">\n                        <g id=\"wave-up\" transform=\"translate(0.000000, -5.000000)\">\n                            <path d=\"M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z\"></path>\n                        </g>\n                    </g>\n                </g>\n            </svg>\n        </div>\n\n    </header>\n\n\n\n\n \n\n    <section class=\"\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-md-12 ms-auto me-auto text-center\">\n\n                    <h3 class=\" display-3 fw-bolder  text-dark mb-3 mt-2\">Take control of your life</h3>\n                    <h3 class=\"text-warning mb-3 \">Explore the features and benefits</h3>\n\n                </div>\n            </div>\n            <div class=\"row mt-5\">\n                <div class=\"col-md-4 ms-auto my-auto\">\n                    <div class=\"cursor-pointer\">\n                        <div class=\"card card-background tilt\" data-tilt=\"\">\n                            <div class=\"full-background\" style=\"background-image: url(\'/public/img/feature2.jpg\')\"></div>\n                            <div class=\"card-body pt-7 text-center\">\n                                <div class=\"icon icon-lg up mb-3\">\n                                    <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n                                        <title>chart-pie-35</title>\n                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                                            <g transform=\"translate(-1720.000000, -742.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">\n                                                <g transform=\"translate(1716.000000, 291.000000)\">\n                                                    <g transform=\"translate(4.000000, 451.000000)\">\n                                                        <path d=\"M21.6666667,18.3333333 L39.915,18.3333333 C39.11,8.635 31.365,0.89 21.6666667,0.085 L21.6666667,18.3333333 Z\" opacity=\"0.602864583\"></path>\n                                                        <path d=\"M20.69,21.6666667 L7.09833333,35.2583333 C10.585,38.21 15.085,40 20,40 C30.465,40 39.0633333,31.915 39.915,21.6666667 L20.69,21.6666667 Z\"></path>\n                                                        <path d=\"M18.3333333,19.31 L18.3333333,0.085 C8.085,0.936666667 0,9.535 0,20 C0,24.915 1.79,29.415 4.74166667,32.9016667 L18.3333333,19.31 Z\"></path>\n                                                    </g>\n                                                </g>\n                                            </g>\n                                        </g>\n                                    </svg>\n                                </div>\n                                <h1 class=\"text-white up mb-0\">Set Goals!</h1>\n                                <p class=\"lead up\">Achieve Goals</p>\n                                <a href=\"/signup\" class=\"btn btn-white btn-lg mt-3 up\">Get Started</a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n                <div class=\"col-md-5 me-auto my-auto ms-md-5\">\n                    <div class=\"p-3 info-horizontal d-flex\">\n                        <div>\n                            <h5>1. Set Concise Goals</h5>\n                            <p>\n                                Lorem ipsum dolor sit amet. Aut libero sint est repudiandae maxime aut vitae dolorem nam similique perferendis et illum quos eos quidem esse aut omnis dolor.\n\n                            </p>\n                        </div>\n                    </div>\n                    <div class=\"p-3 info-horizontal d-flex\">\n                        <div>\n                            <h5>2. Plan for your Goals</h5>\n                            <p>\n                                Est distinctio voluptatibus qui alias error est ipsum blanditiis eos facere voluptas est officia voluptatem et veritatis ipsa aut cumque maxime.\n                            </p>\n                        </div>\n                    </div>\n                    <div class=\"p-3 info-horizontal d-flex\">\n                        <div>\n                            <h5>3. Achive Goals</h5>\n                            <p>\n                                Qui ullam dolorum ut cupiditate soluta eos illum corporis eum quas numquam et maiores libero vel velit modi.\n                            </p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n            <hr class=\"dark my-md-6 mt-2 mx-7\">\n            <div class=\"row\">\n                <div class=\"col-md-5 ms-auto my-auto\">\n                    <div class=\"p-3 info-horizontal d-flex\">\n                        <div>\n                            <h5>1. Write Morning Pages</h5>\n                            <p>\n                                Aut facere excepturi ex quis dicta cum perferendis quae et omnis dolorem et dolores fugiat sit cumque recusandae. Sit velit nostrum vel vero consequatur ea culpa veritatis.\n\n                            </p>\n                        </div>\n                    </div>\n                    <div class=\"p-3 info-horizontal d-flex\">\n                        <div>\n                            <h5>2. Take Notes</h5>\n                            <p>\n                                Sit culpa quasi eum beatae odio sit velit debitis et consequatur magnam et impedit nesciunt ab libero deleniti.\n\n                            </p>\n                        </div>\n                    </div>\n                    <div class=\"p-3 info-horizontal d-flex\">\n                        <div>\n                            <h5>3. Learn New Things</h5>\n                            <p>\n                                Aut libero sint est repudiandae maxime aut vitae dolorem nam similique perferendis et illum quos eos quidem esse aut omnis dolor.\n                            </p>\n                        </div>\n                    </div>\n                </div>\n                <div class=\"col-md-4 me-auto my-auto ms-md-5\">\n                    <div class=\"cursor-pointer\">\n                        <div class=\"card card-background tilt\" data-tilt=\"\">\n                            <div class=\"full-background\" style=\"background-image: url(\'/public/img/feature3.jpg\')\"></div>\n                            <div class=\"card-body pt-7 text-center\">\n                                <div class=\"icon icon-lg up mb-3\">\n                                    <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 46 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n                                        <title>customer-support</title>\n                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                                            <g transform=\"translate(-1717.000000, -291.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">\n                                                <g transform=\"translate(1716.000000, 291.000000)\">\n                                                    <g transform=\"translate(1.000000, 0.000000)\">\n                                                        <path d=\"M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z\" opacity=\"0.59858631\"></path>\n                                                        <path d=\"M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z\"></path>\n                                                        <path d=\"M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z\"></path>\n                                                    </g>\n                                                </g>\n                                            </g>\n                                        </g>\n                                    </svg>\n                                </div>\n                                <h1 class=\"text-white up mb-0\">Take Notes</h1>\n                                <p class=\"lead up\">Learn Better</p>\n                                <a href=\"/signup\" class=\"btn btn-white btn-lg mt-3 up\">Get Started</a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section>\n\n\n    <section class=\"bg-purple-light position-relative overflow-hidden\">\n\n        <div class=\"position-absolute w-100 z-inde-1 top-0 mt-n3\">\n            <svg width=\"100%\" viewBox=\"0 -2 1920 157\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n                <title>wave-down</title>\n                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                    <g fill=\"#FFFFFF\" fill-rule=\"nonzero\">\n                        <g id=\"wave-down\">\n                            <path d=\"M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z\" id=\"Path-Copy-2\" transform=\"translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) \"></path>\n                        </g>\n                    </g>\n                </g>\n            </svg>\n        </div>\n        <div class=\"container py-lg-10 py-7\">\n            <div class=\"row\">\n                <div class=\"col-lg-6 d-flex justify-content-center flex-column\">\n                    <div id=\"carouselExampleIndicator\" class=\"carousel slide py-7\" data-bs-ride=\"carousel\">\n\n                        <div class=\"carousel-inner\">\n                            <h2 class=\"text-black-50 fw-bolder display-1 mb-1\">Partners</h2>\n                            <p class=\"text-purple opacity-8 mb-1\">Lorem ipsum dolor sit amet.!</p>\n                            <hr class=\"text-white horizontal opacity-6 mb-4 mt-2 w-25 text-start\">\n                            <div class=\"carousel-item active\">\n                                <h6 class=\"text-muted opacity-8 pe-5\">\"Aut libero sint est repudiandae maxime aut vitae dolorem nam similique perferendis et illum quos eos quidem esse aut omnis dolor. Qui ullam dolorum ut cupiditate soluta eos illum corporis eum quas numquam et maiores libero vel velit modi.Est distinctio voluptatibus qui alias error est ipsum blanditiis eos facere voluptas est officia voluptatem et veritatis ipsa aut cumque maxime.\n                                    \"</h6>\n\n                            </div>\n\n\n                        </div>\n                    </div>\n                </div>\n                <div class=\"col-md-6 justify-content-center flex-column d-sm-none d-md-none d-lg-flex d-xl-flex\">\n                    <div class=\"row justify-content-center d-none d-md-flex\">\n                        <div class=\"col-3 mb-4\">\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 mt-n4 ms-8 fadeIn2 fadeInBottom\">\n                                <img src=\"/public/img/av8.jpg\" alt=\"Logo Image\">\n                            </div>\n                        </div>\n                        <div class=\"col-4 mb-4\">\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 ms-8 mt-n6 fadeIn1 fadeInBottom\">\n                                <img src=\"/public/img/av5.jpg\" alt=\"Logo Image\">\n                            </div>\n                        </div>\n                        <div class=\"col-4 mb-4\">\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 ms-6 mt-2 fadeIn3 fadeInBottom\">\n                                <img src=\"/public/img/av7.jpg\" alt=\"Logo Image\">\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"row justify-content-end d-none d-md-flex\">\n                        <div class=\"col-4 my-4\">\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 ms-4 fadeIn1 fadeInBottom\">\n                                <img class=\"avatar-img\" src=\"/public/img/av2.jpg\" alt=\"Image\">\n                            </div>\n                        </div>\n                        <div class=\"col-3 my-4\">\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 me-auto fadeIn1 fadeInBottom\">\n                                <img class=\"avatar-img\" src=\"/public/img/av5.jpg\" alt=\"Image\">\n                            </div>\n                        </div>\n                        <div class=\"col-3 my-4\">\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 fadeIn3 fadeInBottom ms-3 mt-3\">\n                                <img class=\"avatar-img\" src=\"/public/img/av3.jpg\" alt=\"Image\">\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"row d-none d-md-flex\">\n                        <div class=\"col-6\">\n                            <!-- Logo -->\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 ms-auto mt-5 fadeIn2 fadeInBottom\">\n                                <img class=\"avatar-img\" src=\"/public/img/av1.jpg\" alt=\"Image\">\n                            </div>\n                            <!-- End Logo -->\n                        </div>\n                        <div class=\"col-6 mt-6\">\n                            <!-- Logo -->\n                            <div class=\"d-block bg-white avatar avatar-lg rounded-circle p-3 mx-auto mt-n3 fadeIn3 fadeInBottom\">\n                                <img class=\"avatar-img\" src=\"/public/img/av2.jpg\" alt=\"Image\">\n                            </div>\n                            <!-- End Logo -->\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n        <div class=\"position-absolute w-100 bottom-0\">\n            <svg width=\"100%\" viewBox=\"0 -1 1920 166\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n                <title>wave-up</title>\n                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                    <g transform=\"translate(0.000000, 5.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">\n                        <g id=\"wave-up\" transform=\"translate(0.000000, -5.000000)\">\n                            <path d=\"M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z\"></path>\n                        </g>\n                    </g>\n                </g>\n            </svg>\n        </div>\n    </section>\n\n\n\n    <section class=\"my-5 pt-5\">\n        <div class=\"container bg-gradient-white\">\n            <div class=\"row\">\n\n                <div class=\" col-md-5\">\n                    <div class=\" p-0 mx-3 mt-3 position-relative z-index-1\">\n                        <div class=\"d-block blur-shadow-image\">\n                            <img src=\"/public/img/suc1.jpg\" alt=\"img-blur-shadow\" class=\"img-fluid shadow rounded-3\">\n                        </div>\n                        <div class=\"colored-shadow\" style=\"background-image: url(\'/public/img/feature.jpg\');\"></div>\n                    </div>\n\n                </div>\n\n\n                <div class=\"col-md-6 m-auto\">\n                    <h2 class=\"display-1 text-warning fw-bolder\">Success Story of Emma</h2>\n                    <p class=\"mb-5 mt-4\">\n                        Est distinctio voluptatibus qui alias error est ipsum blanditiis eos facere voluptas est officia voluptatem et veritatis ipsa aut cumque maxime. Sit culpa quasi eum beatae odio sit velit debitis et consequatur magnam et impedit nesciunt ab libero deleniti.\n                        Aut facere excepturi ex quis dicta cum perferendis quae et omnis dolorem et dolores fugiat sit cumque recusandae. Sit velit nostrum vel vero consequatur ea culpa veritatis.\n\n                    </p>\n\n\n\n\n                </div>\n            </div>\n        </div>\n\n\n\n        <div class=\"container mt-5 bg-white\">\n\n            <div class=\"row justify-content-center text-center mt-5\">\n                <div class=\"col-md-3 mt-4\">\n                    <h1 class=\"text-purple\" id=\"state1\" countto=\"5234\">38000</h1>\n                    <h5 class=\"text-dark\">Users</h5>\n                    <p>Sit velit nostrum vel vero consequatur ea culpa veritatis.</p>\n                </div>\n                <div class=\"col-md-3 mt-4\">\n                    <h1 class=\"text-success\"><span id=\"state2\" countto=\"3400\">20</span>+</h1>\n                    <h5 class=\"text-dark\">Countries</h5>\n                    <p>Aut facere excepturi ex quis dicta cum perferendis.</p>\n                </div>\n                <div class=\"col-md-3 mt-4\">\n                    <h1 class=\"text-warning\"><span id=\"state3\" countto=\"24\">0</span>/7</h1>\n                    <h5 class=\"text-dark\">Support</h5>\n                    <p>Velit nostrum vel vero consequatur ea culpa veritatis.</p>\n                </div>\n            </div>\n        </div>\n        <div class=\"position-absolute w-100 z-inde-1 \">\n            <svg width=\"100%\" viewBox=\"0 -2 1920 157\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n                <title>wave-down</title>\n                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                    <g fill=\"#FFFFFF\" fill-rule=\"nonzero\">\n                        <g id=\"wave-down\">\n                            <path d=\"M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z\" id=\"Path-Copy-2\" transform=\"translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) \"></path>\n                        </g>\n                    </g>\n                </g>\n            </svg>\n        </div>\n\n        <section class=\"py-7 bg-pink-light mt-5 overflow-hidden\">\n\n            <div class=\"container\">\n                <div class=\"row align-items-center\">\n                    <div class=\"col-lg-6\">\n                        <div class=\"row justify-content-start\">\n\n                            <div class=\"info\">\n\n                                <h1 class=\"display-1  text-black-50 fw-bolder\">Lisa\'s Morning Routine</h1>\n                                <p class=\"mb-4\">\n                                    Aut facere excepturi ex quis dicta cum perferendis quae et omnis dolorem et dolores fugiat sit cumque recusandae. Sit velit nostrum vel vero consequatur ea culpa veritatis.Est distinctio voluptatibus qui alias error est ipsum blanditiis eos facere voluptas est officia voluptatem et veritatis ipsa aut cumque maxime. Sit culpa quasi eum beatae odio sit velit debitis et consequatur magnam et impedit nesciunt ab libero deleniti.\n                                </p>\n                            </div>\n\n                            <span class=\"mb-3\">\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-circle-fill\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"></path>\n                                </svg>\n                            <span>\n                                 Practice Five minute journal\n                            </span>\n\n                        </span>\n                            <span class=\"mb-3\">\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-circle-fill\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"></path>\n                                </svg>\n                            <span>\n                                 Create Goals\n                            </span>\n\n                        </span>\n                            <span class=\"mb-3\">\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-circle-fill\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"></path>\n                                </svg>\n                            <span>\n                                 Plan for your goals\n                            </span>\n\n                        </span>\n                            <span class=\"\">\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-circle-fill\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"></path>\n                                </svg>\n                            <span>\n                                 To-dos for goals\n                            </span>\n\n                        </span>\n\n\n\n\n                        </div>\n                        <div class=\"col-4 ps-0 mt-5\">\n                            <a href=\"/signup\" class=\"btn btn-info fw-bolder mb-0 h-100 \">Sign Up Today</a>\n                        </div>\n\n                    </div>\n                    <div class=\"col-lg-5 ms-auto mt-lg-0 mt-4\">\n                        <div class=\"\">\n                            <div class=\" p-0 mx-3 mt-3 position-relative z-index-1\">\n                                <div class=\"d-block blur-shadow-image\">\n                                    <img src=\"/public/img/feature.jpg\" alt=\"img-blur-shadow\" class=\"img-fluid shadow rounded-3\">\n                                </div>\n                                <div class=\"colored-shadow\" style=\"background-image: url(\'/public/img/feature.jpg\');\"></div>\n                            </div>\n\n                        </div>\n                    </div>\n\n\n                </div>\n\n\n            </div>\n\n\n\n        </section>\n\n\n\n    <section class=\"my-5 pt-5\">\n\n        <div class=\"container bg-gradient-white\">\n            <div class=\"row\">\n                <div class=\"col-md-6 m-auto\">\n                    <h2 class=\"display-6 fw-bolder\">Awesome Productivity Tips right on your Inbox</h2>\n                    <p class=\"mb-4\">\n                        Aut facere excepturi ex quis dicta cum perferendis quae et omnis dolorem et dolores fugiat sit cumque recusandae. Sit velit nostrum vel vero consequatur ea culpa veritatis.\n                    </p>\n                    <form action=\"/save-email\" method=\"post\">\n                                                <div class=\"row\">\n                            <div class=\"col-8\">\n                                <div class=\"input-group\">\n                                    <input type=\"email\" name=\"email\" class=\"form-control mb-sm-0\" placeholder=\"Email Here...\">\n                                </div>\n                            </div>\n\n                            <input type=\"hidden\" name=\"_token\" value=\"KesDRDB2mIt5a3hVWWbwQ1xzFxS3Uh0N6qiiU9BN\">                            <div class=\"col-4 ps-0\">\n                                <button type=\"submit\" class=\"btn btn-success fw-bolder mb-0 h-100 position-relative z-index-2\">Subscribe</button>\n                            </div>\n                        </div>\n\n                    </form>\n\n\n                </div>\n                <div class=\"col-md-5 ms-auto\">\n                    <div class=\"position-relative\">\n\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section>\n\n\n\n\n<footer class=\"footer pt-5 mt-5\">\n    <hr class=\"horizontal dark mb-5\">\n    <div class=\"container\">\n        <div class=\" row\">\n            <div class=\"col-md-5 mb-4 ms-auto\">\n                <div>\n                    <h6 class=\"text-gradient text-dark font-weight-bolder\"> CloudOnex</h6>\n                </div>\n                <div class=\"text-dark\">\n                    <h6 class=\"mt-3 mb-2 opacity-8\">Social</h6>\n                    <ul class=\"d-flex flex-row ms-n3 nav\">\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link pe-1\" href=\"#\" target=\"_blank\">\n                                <i class=\"fab fa-facebook text-lg opacity-8\"></i>\n                            </a>\n                        </li>\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link pe-1\" href=\"#\" target=\"_blank\">\n                                <i class=\"fab fa-twitter text-lg opacity-8\"></i>\n                            </a>\n                        </li>\n\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link pe-1\" href=\"#\" target=\"_blank\">\n                                <i class=\"fab fa-youtube text-lg opacity-8\"></i>\n                            </a>\n                        </li>\n                    </ul>\n                </div>\n            </div>\n            <div class=\"col-md-2 col-sm-6 col-6 mb-4\">\n                <div>\n                    <h6 class=\"text-gradient text-dark text-sm\">Company</h6>\n                    <ul class=\"flex-column ms-n3 nav\">\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link\" href=\"#\" target=\"_blank\">\n                                About Us\n                            </a>\n                        </li>\n\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link\" href=\"#\" target=\"_blank\">\n                                Blog\n                            </a>\n                        </li>\n                    </ul>\n                </div>\n            </div>\n\n            <div class=\"col-md-2 col-sm-6 col-6 mb-4\">\n                <div>\n                    <h6 class=\"text-gradient text-dark text-sm\">Help &amp; Support</h6>\n                    <ul class=\"flex-column ms-n3 nav\">\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link\" href=\"#\" target=\"_blank\">\n                                Contact Us\n                            </a>\n                        </li>\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link\" href=\"#\" target=\"_blank\">\n                                Knowledge Center\n                            </a>\n                        </li>\n\n\n                    </ul>\n                </div>\n            </div>\n            <div class=\"col-md-2 col-sm-6 col-6 mb-4 me-auto\">\n                <div>\n                    <h6 class=\"text-gradient text-dark text-sm\">Legal</h6>\n                    <ul class=\"flex-column ms-n3 nav\">\n\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link\" href=\"#\" target=\"_blank\">\n                                Privacy Policy\n                            </a>\n                        </li>\n                        <li class=\"nav-item\">\n                            <a class=\"nav-link\" href=\"#\" target=\"_blank\">\n                                Licenses (EULA)\n                            </a>\n                        </li>\n                    </ul>\n                </div>\n            </div>\n            <div class=\"col-12\">\n                <div class=\"text-center\">\n                    <p class=\"my-4 text-sm\">\n                        All rights reserved. Copyright © <script>\n                            document.write(new Date().getFullYear())\n                        </script>202220222022202220222022  by CloudOnex\n                    </p>\n                </div>\n            </div>\n        </div>\n    </div>\n</footer>\n\n\n\n<!--   Core JS Files   -->\n\n\n\n\n\n\n\n\n\n</section><grammarly-desktop-integration data-grammarly-shadow-root=\"true\"></grammarly-desktop-integration>\n\n\n\n\n</body>\n</html>', NULL, NULL, NULL, NULL, 1, 1, '2022-04-07 06:08:06', '2022-04-07 07:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_pages`
--

CREATE TABLE `pricing_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_paragraph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_pages`
--

INSERT INTO `pricing_pages` (`id`, `admin_id`, `hero_title`, `hero_subtitle`, `testimonial_image`, `testimonial_title`, `testimonial_subtitle`, `testimonial_author`, `testimonial_paragraph`, `created_at`, `updated_at`) VALUES
    (1, 0, 'Lorem Ipsuum', 'hj', 'media/KmiAsbneKW8Vknd7IBjWFMaFBZozrYdztECRcBwl.jpg', 'lorem ipsum', 'lorem ipsum', 'sara', 'lorem ipsum lorem ipsum', '2022-04-11 09:36:57', '2022-04-11 10:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
                                    `id` bigint(20) UNSIGNED NOT NULL,
                                    `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                    `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `date` date DEFAULT NULL,
                                    `description` text COLLATE utf8mb4_unicode_ci,
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `workspace_id` int(10) UNSIGNED NOT NULL,
                            `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                            `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                            `start_date` date DEFAULT NULL,
                            `end_date` date DEFAULT NULL,
                            `status` enum('Pending','Started','Finished') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
                            `description` text COLLATE utf8mb4_unicode_ci,
                            `summary` text COLLATE utf8mb4_unicode_ci,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
                          `id` bigint(20) UNSIGNED NOT NULL,
                          `workspace_id` int(10) UNSIGNED NOT NULL,
                          `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                          `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                          `topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                          `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                          `quotes` text COLLATE utf8mb4_unicode_ci,
                          `cover_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `workspace_id` int(10) UNSIGNED NOT NULL,
                            `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                            `value` text COLLATE utf8mb4_unicode_ci,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `workspace_id`, `key`, `value`, `created_at`, `updated_at`) VALUES
                                                                                              (1, 1, 'company_name', 'CloudOnex', '2022-04-11 07:57:07', '2022-04-11 07:57:07'),
                                                                                              (2, 1, 'installed_build_id', '1', '2022-04-11 08:14:58', '2022-04-11 08:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
                                      `id` bigint(20) UNSIGNED NOT NULL,
                                      `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                      `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                      `price_monthly` decimal(8,2) UNSIGNED DEFAULT NULL,
                                      `price_yearly` decimal(8,2) UNSIGNED DEFAULT NULL,
                                      `price_two_years` decimal(8,2) UNSIGNED DEFAULT NULL,
                                      `price_three_years` decimal(8,2) UNSIGNED DEFAULT NULL,
                                      `description` text COLLATE utf8mb4_unicode_ci,
                                      `features` text COLLATE utf8mb4_unicode_ci,
                                      `modules` text COLLATE utf8mb4_unicode_ci,
                                      `has_modules` tinyint(1) NOT NULL DEFAULT '0',
                                      `free` tinyint(1) NOT NULL DEFAULT '0',
                                      `active` tinyint(1) NOT NULL DEFAULT '1',
                                      `featured` tinyint(1) NOT NULL DEFAULT '0',
                                      `per_user_pricing` tinyint(1) NOT NULL DEFAULT '0',
                                      `users_limit` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                      `created_at` timestamp NULL DEFAULT NULL,
                                      `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `workspace_id` int(10) UNSIGNED NOT NULL,
                         `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `description` text COLLATE utf8mb4_unicode_ci,
                         `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `date` date DEFAULT NULL,
                         `related_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `related_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                         `completed` tinyint(1) NOT NULL DEFAULT '0',
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `to_learns`
--

CREATE TABLE `to_learns` (
                             `id` bigint(20) UNSIGNED NOT NULL,
                             `workspace_id` int(10) UNSIGNED NOT NULL,
                             `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                             `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                             `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                             `start_date` date DEFAULT NULL,
                             `end_date` date DEFAULT NULL,
                             `description` text COLLATE utf8mb4_unicode_ci,
                             `created_at` timestamp NULL DEFAULT NULL,
                             `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `workspace_id` int(10) UNSIGNED NOT NULL,
                         `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `password_reset_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `email_verified_at` timestamp NULL DEFAULT NULL,
                         `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `super_admin` tinyint(1) NOT NULL DEFAULT '0',
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL,
                         `timezone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `workspace_id`, `first_name`, `last_name`, `email`, `phone_number`, `password_reset_key`, `mobile_number`, `twitter`, `facebook`, `linkedin`, `address_1`, `address_2`, `zip`, `city`, `state`, `country`, `email_verified_at`, `password`, `language`, `photo`, `super_admin`, `remember_token`, `created_at`, `updated_at`, `timezone`) VALUES
    (1, 1, 'Jason', 'M', 'demo@cloudonex.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$jXlXEW.lLjHWXAv3x2YVYuO4GU.Q8fK22NsIAVasHtw0NYJ5knAwa', 'en', NULL, 1, 'YUa3X6ENX4tanCXVCs0f3WyVJ0W89H6UHpGpYiI7i7omYdkf6Dlag9JPSbgx', '2022-04-11 07:57:07', '2022-04-13 08:09:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weekly_plans`
--

CREATE TABLE `weekly_plans` (
                                `id` bigint(20) UNSIGNED NOT NULL,
                                `workspace_id` int(10) UNSIGNED NOT NULL,
                                `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                                `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `from_date` date DEFAULT NULL,
                                `to_date` date DEFAULT NULL,
                                `notes` text COLLATE utf8mb4_unicode_ci,
                                `saturday` text COLLATE utf8mb4_unicode_ci,
                                `sunday` text COLLATE utf8mb4_unicode_ci,
                                `monday` text COLLATE utf8mb4_unicode_ci,
                                `tuesday` text COLLATE utf8mb4_unicode_ci,
                                `wednesday` text COLLATE utf8mb4_unicode_ci,
                                `thursday` text COLLATE utf8mb4_unicode_ci,
                                `friday` text COLLATE utf8mb4_unicode_ci,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
                              `id` bigint(20) UNSIGNED NOT NULL,
                              `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `plan_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
                              `active` tinyint(1) NOT NULL DEFAULT '1',
                              `subscribed` tinyint(1) NOT NULL DEFAULT '0',
                              `term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                              `subscription_start_date` date DEFAULT NULL,
                              `next_renewal_date` date DEFAULT NULL,
                              `price` decimal(8,2) UNSIGNED DEFAULT NULL,
                              `trial` tinyint(1) NOT NULL DEFAULT '1',
                              `trial_start_date` date DEFAULT NULL,
                              `trial_end_date` date DEFAULT NULL,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workspaces`
--

INSERT INTO `workspaces` (`id`, `name`, `plan_id`, `active`, `subscribed`, `term`, `subscription_start_date`, `next_renewal_date`, `price`, `trial`, `trial_start_date`, `trial_end_date`, `created_at`, `updated_at`) VALUES
    (1, 'CloudOnex', 0, 1, 0, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-04-11 07:57:07', '2022-04-11 07:57:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_plans`
--
ALTER TABLE `business_plans`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_pages_email_unique` (`email`),
  ADD UNIQUE KEY `contact_pages_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `contact_pages_twitter_unique` (`twitter`),
  ADD UNIQUE KEY `contact_pages_facebook_unique` (`facebook`),
  ADD UNIQUE KEY `contact_pages_linkedin_unique` (`linkedin`),
  ADD UNIQUE KEY `contact_pages_youtube_unique` (`youtube`),
  ADD UNIQUE KEY `contact_pages_address_1_unique` (`address_1`),
  ADD UNIQUE KEY `contact_pages_address_2_unique` (`address_2`),
  ADD UNIQUE KEY `contact_pages_zip_unique` (`zip`),
  ADD UNIQUE KEY `contact_pages_city_unique` (`city`),
  ADD UNIQUE KEY `contact_pages_state_unique` (`state`),
  ADD UNIQUE KEY `contact_pages_country_unique` (`country`);

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `five_minute_journals`
--
ALTER TABLE `five_minute_journals`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_plans`
--
ALTER TABLE `goal_plans`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_pages`
--
ALTER TABLE `landing_pages`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
    ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_pages`
--
ALTER TABLE `pricing_pages`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_learns`
--
ALTER TABLE `to_learns`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_password_reset_key_unique` (`password_reset_key`),
  ADD UNIQUE KEY `users_mobile_number_unique` (`mobile_number`),
  ADD UNIQUE KEY `users_twitter_unique` (`twitter`),
  ADD UNIQUE KEY `users_facebook_unique` (`facebook`),
  ADD UNIQUE KEY `users_linkedin_unique` (`linkedin`),
  ADD UNIQUE KEY `users_address_1_unique` (`address_1`),
  ADD UNIQUE KEY `users_address_2_unique` (`address_2`),
  ADD UNIQUE KEY `users_zip_unique` (`zip`),
  ADD UNIQUE KEY `users_city_unique` (`city`),
  ADD UNIQUE KEY `users_state_unique` (`state`),
  ADD UNIQUE KEY `users_country_unique` (`country`);

--
-- Indexes for table `weekly_plans`
--
ALTER TABLE `weekly_plans`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workspaces`
--
ALTER TABLE `workspaces`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_plans`
--
ALTER TABLE `business_plans`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `five_minute_journals`
--
ALTER TABLE `five_minute_journals`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_plans`
--
ALTER TABLE `goal_plans`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing_pages`
--
ALTER TABLE `landing_pages`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_pages`
--
ALTER TABLE `pricing_pages`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `to_learns`
--
ALTER TABLE `to_learns`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weekly_plans`
--
ALTER TABLE `weekly_plans`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
