-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 12:40 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
/*! ORACLE *//
SET NAMES utf8;
START TRANSACTION;
SET time_zone = "+05:30";

--
-- Database: `saas`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_plans`
--
drop table if  exists `business_plans`;  
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
drop table if     exists`calendars`;
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
drop table if     exists`contact_pages`;
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

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--
drop table if     exists`credit_cards`;
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
drop table if     exists `documents`;
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
drop table if  exists `failed_jobs`;
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
drop table if     exists `five_minute_journals` ;
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
drop table if     exists `goals` ;
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
drop table if  exists `goal_plans` ;
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
drop table  if exists `images`;
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
drop table if exists   `landing_pages` ;
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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
drop table if exists `migrations`;
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
                                                          (4, '2021_06_13_173242_create_documents_table', 1),
                                                          (5, '2021_06_15_091441_create_settings_table', 1),
                                                          (6, '2021_07_03_221331_create_goal_plans_table', 1),
                                                          (7, '2021_07_03_233802_create_weekly_plans_table', 1),
                                                          (8, '2021_07_06_190721_create_to_learns_table', 1),
                                                          (9, '2021_07_06_212302_create_notes_table', 1),
                                                          (10, '2021_07_07_102711_create_projects_table', 1),
                                                          (11, '2021_07_07_162828_create_five_minute_journals_table', 1),
                                                          (12, '2021_07_07_194524_create_images_table', 1),
                                                          (13, '2021_07_08_175558_create_calendars_table', 1),
                                                          (14, '2021_07_11_135255_create_todos_table', 1),
                                                          (15, '2021_07_12_154443_create_goals_table', 1),
                                                          (16, '2021_07_27_190149_create_workspaces_table', 1),
                                                          (17, '2021_07_31_204942_create_subscription_plans_table', 1),
                                                          (18, '2021_08_02_202546_create_payment_gateways_table', 1),
                                                          (19, '2021_08_03_161432_create_credit_cards_table', 1),
                                                          (20, '2021_08_04_120944_create_business_plans_table', 1),
                                                          (21, '2021_10_06_113130_create_newsletters_table', 1),
                                                          (22, '2022_03_06_200650_create_quotes_table', 1),
                                                          (23, '2022_04_08_092940_create_landing_pages_table', 1),
                                                          (24, '2022_04_09_142058_create_pricing_pages_table', 1),
                                                          (25, '2022_04_10_200218_create_privacy_policies_table', 1),
                                                          (26, '2022_04_11_090145_create_contact_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--
drop table if  exists `newsletters`;
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
drop table if  exists `notes`;
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
drop table if   exists `password_resets`;
CREATE TABLE `password_resets` (
                                   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--
drop table if   exists `payment_gateways`;
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
-- Table structure for table `pricing_pages`
--
drop table if   exists `pricing_pages`;
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

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--
drop table if   exists `privacy_policies`;
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
drop table if   exists `projects`;
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
drop table if   exists `quotes`;
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
drop table if   exists`settings`;
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
    (1, 1, 'company_name', 'CloudOnex', '2022-04-18 10:39:24', '2022-04-18 10:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--
drop table if   exists `subscription_plans`;
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
drop table if   exists `todos`;
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
drop table if   exists `to_learns`;
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
drop table if   exists `users`;
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
                         `timezone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `super_admin` tinyint(1) NOT NULL DEFAULT '0',
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `workspace_id`, `first_name`, `last_name`, `email`, `phone_number`, `password_reset_key`, `mobile_number`, `twitter`, `facebook`, `linkedin`, `address_1`, `address_2`, `zip`, `city`, `state`, `country`, `email_verified_at`, `password`, `language`, `timezone`, `photo`, `super_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
    (1, 1, 'Jason', 'M', 'demo@cloudonex.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$a5L5z5GogN3xet0VijCS5eKEmHGucu8peJN6qjm9pwpO5nhc2JwoK', NULL, NULL, NULL, 1, NULL, '2022-04-18 10:39:24', '2022-04-18 10:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_plans`
--
drop table if   exists `weekly_plans`;
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
drop table if   exists `workspaces`;
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
    (1, 'CloudOnex', 0, 1, 0, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-04-18 10:39:24', '2022-04-18 10:39:24');

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
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
-- AUTO_INCREMENT for table `pricing_pages`
--
ALTER TABLE `pricing_pages`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
