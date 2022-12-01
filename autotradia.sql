-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2021 at 10:42 PM
-- Server version: 5.6.49-cll-lve
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
-- Database: `autotradia`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(250) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `name`, `slug`, `category_id`, `price`, `price_label`, `phone`, `secondary_phone`, `available_city`, `description`, `featured_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 'Toyota Corolla New Shape 2020', 'toyota-corolla-new-shape-2020', 1, '3200000', NULL, '03489523659', NULL, 'ISB', 'Hello Dear Pakistani, as we all are aware of todays cars market prices. so thats why i just want to sell my car in a very high price.. you dont how lovely this car is .. let me know if you are interested in buying my car. ', 'car_feature.png', '1', '2021-02-16 20:21:53', '2021-02-16 09:51:17', NULL),
(1, 1, 'Hond Civic Bej Raha Ho Bahi', 'hond-civic-bej-raha-ho-bahi', 1, '1200000', NULL, '03254695', NULL, 'KPK', 'Hello Dear Pakistani, as we all are aware of todays cars market prices. so thats why i just want to sell my car in a very high price.. you dont how lovely this car is .. let me know if you are interested in buying my car. ', 'car_feature.png', '1', '2021-02-16 20:22:05', '2021-02-16 09:51:17', NULL),
(3, 14, 'Honda Civic 2020', 'honda-civic-2020', 1, '900000', NULL, '46456456546', NULL, 'Nawabshah', 'Inside out fully original Just like a Zero Meter car Original book of this car is also available Price is slightly negotiable', 'auto-959057_1920.jpg', '1', '2021-02-16 14:18:10', '2021-02-16 14:18:10', NULL),
(4, 16, 'Honda City 2017', 'honda-city-2017', 1, '500000', NULL, '00923060570134', NULL, 'KPK', 'Inside out fully original', 'honda-city-aspire-2-2017-45962733.jpg', '1', '2021-02-17 08:40:25', '2021-02-17 08:49:13', NULL),
(5, 18, 'Honda Civic 2017', 'honda-civic-2017', 1, '100000', NULL, '676767reee5eesddwsssfdff', NULL, 'Islamabad', 'hhjjkgfdtr Inside out fully original Original book of this car is also available Price is slightly negotiable Just like a Zero Meter car', 'images.jpeg', '1', '2021-02-17 09:03:50', '2021-02-17 09:03:50', NULL),
(6, 17, 'Mecerdes Mercedes E-Class 2021', 'mecerdes-mercedes-e-class-2021', 1, '555555555', NULL, '03045191362', NULL, 'KPK', 'Awesome', 'carbon-fiber-shelby-mustang-1600685276.jpg', '1', '2021-02-17 09:07:41', '2021-02-17 10:00:28', '2021-02-17 10:00:28'),
(7, 19, 'Toyota Corolla 2017', 'toyota-corolla-2017', 1, '8,00,000', NULL, '+923339327191', NULL, 'Larkana', 'uyuyuyuyuuiuutfytdctxrsewwsa\\zweqqafghjgjkhjkljljkjiouioujhnnm,nvbxvcvfh', '2020-Corolla-XLE-Red.jpg', '1', '2021-02-17 09:54:42', '2021-02-17 09:54:42', NULL),
(8, 20, 'Toyota Reborn 2017', 'toyota-reborn-2017', 1, '570000', NULL, '03007571919', NULL, 'undefined', 'Inside out fully original', 'WhatsApp Image 2021-01-20 at 4.03.29 PM.jpeg', '1', '2021-02-17 10:35:59', '2021-02-17 10:37:10', NULL),
(10, 1, 'Toyota GLI 2020', 'toyota-gli-2020', 1, 'czsdgd', NULL, '3453453', NULL, 'Khairpur Mir’s', 'sdfsdfsdfsdfcasassa Original book of this car is also available Price is slightly negotiable', '2015_audi_e_tron_quattro_concept-1920x1080@2x.jpg', '0', '2021-02-17 13:02:46', '2021-02-18 12:12:48', '2021-02-18 12:12:48'),
(11, 1, 'Toyota GLI 2021', 'toyota-gli-2021', 1, '231312312', NULL, '46456456546', NULL, 'Larkana', 'asdfasdfsafasdfasd fzxcv', 'auto-959057_1920@2x.jpg', '1', '2021-02-17 13:25:15', '2021-02-17 13:25:15', NULL),
(13, 1, 'Honda Reborn 2019', 'honda-reborn-2019', 1, '2342342', NULL, '23423423', NULL, 'Nawabshah', 'Inside out fully original Original book of this car is also available Price is slightly negotiable', '2015_audi_e_tron_quattro_concept-1920x1080@2x.jpg', '1', '2021-02-17 13:41:44', '2021-02-17 13:41:44', NULL),
(15, 1, 'Honda Reborn re2019', 'honda-reborn-re2019', 1, '2342342', NULL, '23423423', NULL, 'Nawabshah', 'Inside out fully original Original book of this car is also available Price is slightly negotiable', '2015_audi_e_tron_quattro_concept-1920x1080@2x.jpg', '1', '2021-02-17 13:43:58', '2021-02-17 13:43:58', NULL),
(16, 1, 'Mecerdes Mercedes S-Class 2021', 'mecerdes-mercedes-s-class-2021', 1, '3536778', NULL, '2113123', NULL, 'Badin', 'Original book of this car is also available Price is slightly negotiable', 'audi_tt_sportback_concept_2014-1920x1080@3x.jpg', '1', '2021-02-17 13:49:52', '2021-02-17 13:49:52', NULL),
(17, 1, 'Honda Reborn 2017', 'honda-reborn-2017', 1, '3536778', NULL, '46456456546', NULL, 'Nawabshah', 'Inside out fully original Original book of this car is also available', 'audi_tt_sportback_concept_2014-1920x1080@3x.jpg', '1', '2021-02-17 13:51:48', '2021-02-17 13:51:48', NULL),
(18, 17, 'Honda Civic 2019', 'honda-civic-2019-857944', 1, '3500000', NULL, '0514474742', NULL, 'Rawalpindi', 'Inside out fully original Original book of this car is also available Just like a Zero Meter car Price is slightly negotiable', 'dda4f8cf0bb0d49e144860c53f9d1d36.jpg', '1', '2021-02-23 17:25:55', '2021-03-01 14:42:50', NULL),
(19, 20, 'Mecerdes Mercedes S-Class 2019', 'mecerdes-mercedes-s-class-2019-893594', 1, '50000000', NULL, '3007571919', NULL, 'Islamabad', 'bla bla Inside out fully original Original book of this car is also available Just like a Zero Meter car', 'gap-removebg.png', '1', '2021-02-23 17:28:14', '2021-03-01 14:44:15', NULL),
(20, 20, 'Mecerdes Mercedes S-Class 2019', 'mecerdes-mercedes-s-class-2019-24037', 1, '50000000', NULL, '3007571919', NULL, 'Islamabad', 'bla bla Inside out fully original Original book of this car is also available Just like a Zero Meter car', 'gap-removebg.png', '0', '2021-02-23 17:29:10', '2021-02-23 17:29:10', NULL),
(21, 17, 'Honda Civic 2019', 'honda-civic-2019-432989', 1, '3500000', NULL, '0514474742', NULL, 'Rawalpindi', 'Inside out fully original Original book of this car is also available Just like a Zero Meter car Price is slightly negotiable', 'dda4f8cf0bb0d49e144860c53f9d1d36.jpg', '1', '2021-02-23 17:34:23', '2021-03-01 14:44:53', NULL),
(22, 17, 'Honda Civic 2019', 'honda-civic-2019-505813', 1, '3500000', NULL, '0514474742', NULL, 'Rawalpindi', 'Inside out fully original Original book of this car is also available Just like a Zero Meter car Price is slightly negotiable', 'dda4f8cf0bb0d49e144860c53f9d1d36.jpg', '0', '2021-02-23 17:35:15', '2021-02-23 17:35:15', NULL),
(23, 1, 'FAW HS7 2018', 'faw-hs7-2018-920465', 1, '3536778', NULL, '4645645699', NULL, 'Sukkur', 'Inside out fully original Just like a Zero Meter car Original book of this car is also available', '2015_audi_e_tron_quattro_concept-1920x1080@3x.jpg', '0', '2021-02-23 19:21:27', '2021-02-23 19:21:27', NULL),
(24, 3, 'Honda Civic 2019', 'honda-civic-2019-522384', 1, '120000', NULL, '0325759005', NULL, 'Karachi', 'Original book of this car is also available Price is slightly negotiable', 'asad.jpg', '1', '2021-02-23 19:27:48', '2021-02-23 19:36:31', NULL),
(25, 27, 'Mecerdes Mercedes E-Class 2019', 'mecerdes-mercedes-e-class-2019', 1, '9000000', NULL, '3007571919', NULL, 'Islamabad', 'Mercedes E250 2012\nmint condition\nfirst owner', 'merc1.jpg', '1', '2021-02-23 20:29:16', '2021-02-23 21:15:15', NULL),
(26, 30, 'Mecerdes Mercedes S-Class 2021 M1', 'mecerdes-mercedes-s-class-2021-m1-733204', 2, '250000', 'Good Price', '0325749005', NULL, 'Karachi', 'Inside out fully original Original book of this car is also available Price is slightly negotiable Just like a Zero Meter car', 'asad.jpg', '1', '2021-02-24 20:06:56', '2021-03-02 11:37:32', NULL),
(27, 30, '  ', '744415', 1, '1200000', NULL, '03025749005', NULL, 'Sukkur', 'Inside out fully original Original book of this car is also available Just like a Zero Meter car Price is slightly negotiable', 'asad.jpg', '0', '2021-03-01 19:36:33', '2021-03-01 19:36:33', NULL),
(28, 30, '  ', '743018', 1, '1200000', 'fair price', '03025749005', NULL, 'Sukkur', 'Inside out fully original Original book of this car is also available Just like a Zero Meter car Price is slightly negotiable', 'asad.jpg', '0', '2021-03-01 19:37:25', '2021-03-01 19:37:25', NULL),
(29, 30, '  ', '471745', 2, '1200000', NULL, '03025749005', NULL, 'Karachi', 'Inside out fully original Original book of this car is also available Price is slightly negotiable Just like a Zero Meter car', 'asad.jpg', '0', '2021-03-01 19:39:09', '2021-03-01 19:39:09', NULL),
(30, 30, 'Mecerdes Mercedes S-Class 2021 M2M', 'mecerdes-mercedes-s-class-2021-m2m-417315', 1, '1200000', 'Fair Price', '03025749005', NULL, 'Nawabshah', 'Inside out fully original Original book of this car is also available Price is slightly negotiable Just like a Zero Meter car', 'asad.jpg', '1', '2021-03-01 19:46:17', '2021-03-02 11:38:19', NULL),
(31, 17, '  ', '453592', 2, '12300000', NULL, '03337915883', NULL, 'Karachi', 'Inside out fully original Original book of this car is also available Price is slightly negotiable', '2014_audi_s1_quattro-1920x1080@2x.jpg', '0', '2021-03-02 00:30:47', '2021-03-02 00:30:47', NULL),
(32, 30, 'Honda Civic 2017', 'honda-civic-2017-78870', 1, '2000000', 'Fair Price', '03025749005', NULL, 'Islamabad', 'Inside out fully original Price is slightly negotiable Original book of this car is also available Just like a Zero Meter car', 'unnamed.png', '1', '2021-03-02 11:39:53', '2021-03-02 11:39:53', NULL),
(33, 16, 'Honda City 2020', 'honda-city-2020-478156', 3, '2580000', 'Fair Price', '03060570134', NULL, 'Rawalpindi', 'Inside out fully original', '1920px-2019_Honda_City_SV-e1594988378749-2.jpg', '1', '2021-03-02 12:18:14', '2021-03-02 12:18:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_car_features`
--

CREATE TABLE `ad_car_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `car_feature_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_car_features`
--

INSERT INTO `ad_car_features` (`id`, `ad_id`, `car_feature_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 2, 5, '1', NULL, NULL),
(5, 2, 4, '1', NULL, NULL),
(4, 2, 2, '1', NULL, NULL),
(3, 1, 5, '1', NULL, NULL),
(2, 1, 4, '1', NULL, NULL),
(1, 1, 2, '1', NULL, NULL),
(7, 3, 1, '1', NULL, NULL),
(8, 3, 6, '1', NULL, NULL),
(9, 3, 10, '1', NULL, NULL),
(10, 3, 14, '1', NULL, NULL),
(11, 3, 19, '1', NULL, NULL),
(12, 3, 21, '1', NULL, NULL),
(51, 5, 1, '1', NULL, NULL),
(52, 5, 4, '1', NULL, NULL),
(53, 5, 8, '1', NULL, NULL),
(54, 5, 9, '1', NULL, NULL),
(55, 5, 12, '1', NULL, NULL),
(56, 5, 17, '1', NULL, NULL),
(57, 5, 18, '1', NULL, NULL),
(58, 5, 20, '1', NULL, NULL),
(59, 5, 21, '1', NULL, NULL),
(62, 6, 18, '1', NULL, NULL),
(63, 6, 24, '1', NULL, NULL),
(64, 4, 1, '1', NULL, NULL),
(65, 4, 2, '1', NULL, NULL),
(66, 4, 3, '1', NULL, NULL),
(67, 4, 4, '1', NULL, NULL),
(68, 4, 5, '1', NULL, NULL),
(69, 4, 6, '1', NULL, NULL),
(70, 4, 9, '1', NULL, NULL),
(71, 4, 10, '1', NULL, NULL),
(72, 4, 11, '1', NULL, NULL),
(73, 4, 12, '1', NULL, NULL),
(74, 4, 17, '1', NULL, NULL),
(75, 4, 18, '1', NULL, NULL),
(76, 4, 19, '1', NULL, NULL),
(77, 4, 20, '1', NULL, NULL),
(78, 4, 21, '1', NULL, NULL),
(79, 4, 24, '1', NULL, NULL),
(80, 4, 25, '1', NULL, NULL),
(81, 4, 27, '1', NULL, NULL),
(82, 4, 28, '1', NULL, NULL),
(83, 7, 1, '1', NULL, NULL),
(84, 7, 2, '1', NULL, NULL),
(85, 7, 3, '1', NULL, NULL),
(86, 7, 5, '1', NULL, NULL),
(87, 7, 6, '1', NULL, NULL),
(88, 7, 7, '1', NULL, NULL),
(89, 7, 8, '1', NULL, NULL),
(90, 7, 9, '1', NULL, NULL),
(91, 7, 10, '1', NULL, NULL),
(92, 7, 11, '1', NULL, NULL),
(93, 7, 12, '1', NULL, NULL),
(94, 7, 13, '1', NULL, NULL),
(95, 7, 14, '1', NULL, NULL),
(96, 7, 15, '1', NULL, NULL),
(97, 7, 16, '1', NULL, NULL),
(98, 7, 17, '1', NULL, NULL),
(99, 7, 18, '1', NULL, NULL),
(100, 7, 19, '1', NULL, NULL),
(101, 7, 21, '1', NULL, NULL),
(102, 7, 22, '1', NULL, NULL),
(103, 7, 23, '1', NULL, NULL),
(104, 7, 24, '1', NULL, NULL),
(105, 7, 25, '1', NULL, NULL),
(106, 7, 26, '1', NULL, NULL),
(107, 7, 27, '1', NULL, NULL),
(114, 8, 4, '1', NULL, NULL),
(115, 8, 5, '1', NULL, NULL),
(116, 8, 6, '1', NULL, NULL),
(117, 8, 7, '1', NULL, NULL),
(118, 8, 12, '1', NULL, NULL),
(119, 8, 28, '1', NULL, NULL),
(120, 10, 4, '1', NULL, NULL),
(121, 10, 11, '1', NULL, NULL),
(122, 10, 16, '1', NULL, NULL),
(123, 10, 18, '1', NULL, NULL),
(124, 10, 26, '1', NULL, NULL),
(125, 13, 7, '1', NULL, NULL),
(126, 13, 9, '1', NULL, NULL),
(127, 13, 14, '1', NULL, NULL),
(128, 13, 16, '1', NULL, NULL),
(129, 15, 7, '1', NULL, NULL),
(130, 15, 9, '1', NULL, NULL),
(131, 15, 14, '1', NULL, NULL),
(132, 15, 16, '1', NULL, NULL),
(133, 16, 8, '1', NULL, NULL),
(134, 16, 10, '1', NULL, NULL),
(135, 16, 15, '1', NULL, NULL),
(136, 16, 16, '1', NULL, NULL),
(137, 16, 20, '1', NULL, NULL),
(138, 16, 25, '1', NULL, NULL),
(139, 17, 11, '1', NULL, NULL),
(140, 17, 12, '1', NULL, NULL),
(141, 17, 13, '1', NULL, NULL),
(142, 17, 17, '1', NULL, NULL),
(143, 17, 25, '1', NULL, NULL),
(144, 18, 3, '1', NULL, NULL),
(145, 18, 6, '1', NULL, NULL),
(146, 18, 8, '1', NULL, NULL),
(147, 18, 19, '1', NULL, NULL),
(148, 18, 20, '1', NULL, NULL),
(149, 18, 24, '1', NULL, NULL),
(150, 19, 1, '1', NULL, NULL),
(151, 19, 2, '1', NULL, NULL),
(152, 19, 4, '1', NULL, NULL),
(153, 19, 10, '1', NULL, NULL),
(154, 19, 13, '1', NULL, NULL),
(155, 19, 14, '1', NULL, NULL),
(156, 19, 16, '1', NULL, NULL),
(157, 19, 17, '1', NULL, NULL),
(158, 19, 19, '1', NULL, NULL),
(159, 19, 22, '1', NULL, NULL),
(160, 19, 23, '1', NULL, NULL),
(161, 19, 25, '1', NULL, NULL),
(162, 19, 28, '1', NULL, NULL),
(163, 20, 1, '1', NULL, NULL),
(164, 20, 2, '1', NULL, NULL),
(165, 20, 4, '1', NULL, NULL),
(166, 20, 10, '1', NULL, NULL),
(167, 20, 13, '1', NULL, NULL),
(168, 20, 14, '1', NULL, NULL),
(169, 20, 16, '1', NULL, NULL),
(170, 20, 17, '1', NULL, NULL),
(171, 20, 19, '1', NULL, NULL),
(172, 20, 22, '1', NULL, NULL),
(173, 20, 23, '1', NULL, NULL),
(174, 20, 25, '1', NULL, NULL),
(175, 20, 28, '1', NULL, NULL),
(176, 21, 3, '1', NULL, NULL),
(177, 21, 6, '1', NULL, NULL),
(178, 21, 8, '1', NULL, NULL),
(179, 21, 19, '1', NULL, NULL),
(180, 21, 20, '1', NULL, NULL),
(181, 21, 24, '1', NULL, NULL),
(182, 22, 3, '1', NULL, NULL),
(183, 22, 6, '1', NULL, NULL),
(184, 22, 8, '1', NULL, NULL),
(185, 22, 19, '1', NULL, NULL),
(186, 22, 20, '1', NULL, NULL),
(187, 22, 24, '1', NULL, NULL),
(188, 23, 5, '1', NULL, NULL),
(189, 23, 9, '1', NULL, NULL),
(190, 23, 13, '1', NULL, NULL),
(191, 23, 14, '1', NULL, NULL),
(192, 23, 24, '1', NULL, NULL),
(193, 24, 1, '1', NULL, NULL),
(194, 24, 2, '1', NULL, NULL),
(195, 24, 3, '1', NULL, NULL),
(196, 24, 6, '1', NULL, NULL),
(197, 24, 7, '1', NULL, NULL),
(198, 24, 8, '1', NULL, NULL),
(199, 24, 9, '1', NULL, NULL),
(200, 24, 12, '1', NULL, NULL),
(201, 24, 13, '1', NULL, NULL),
(276, 25, 1, '1', NULL, NULL),
(275, 25, 2, '1', NULL, NULL),
(274, 25, 3, '1', NULL, NULL),
(273, 25, 4, '1', NULL, NULL),
(272, 25, 5, '1', NULL, NULL),
(271, 25, 9, '1', NULL, NULL),
(270, 25, 10, '1', NULL, NULL),
(269, 25, 11, '1', NULL, NULL),
(268, 25, 12, '1', NULL, NULL),
(267, 25, 13, '1', NULL, NULL),
(266, 25, 14, '1', NULL, NULL),
(265, 25, 15, '1', NULL, NULL),
(264, 25, 16, '1', NULL, NULL),
(263, 25, 17, '1', NULL, NULL),
(262, 25, 18, '1', NULL, NULL),
(261, 25, 19, '1', NULL, NULL),
(260, 25, 20, '1', NULL, NULL),
(259, 25, 21, '1', NULL, NULL),
(258, 25, 22, '1', NULL, NULL),
(257, 25, 23, '1', NULL, NULL),
(256, 25, 24, '1', NULL, NULL),
(255, 25, 25, '1', NULL, NULL),
(254, 25, 26, '1', NULL, NULL),
(253, 25, 27, '1', NULL, NULL),
(252, 25, 28, '1', NULL, NULL),
(308, 28, 2, '1', NULL, NULL),
(307, 28, 1, '1', NULL, NULL),
(306, 27, 14, '1', NULL, NULL),
(305, 27, 13, '1', NULL, NULL),
(304, 27, 12, '1', NULL, NULL),
(303, 27, 11, '1', NULL, NULL),
(302, 27, 10, '1', NULL, NULL),
(301, 27, 9, '1', NULL, NULL),
(300, 27, 8, '1', NULL, NULL),
(299, 27, 7, '1', NULL, NULL),
(298, 27, 6, '1', NULL, NULL),
(297, 27, 5, '1', NULL, NULL),
(296, 27, 4, '1', NULL, NULL),
(295, 27, 3, '1', NULL, NULL),
(294, 27, 2, '1', NULL, NULL),
(293, 27, 1, '1', NULL, NULL),
(309, 28, 3, '1', NULL, NULL),
(310, 28, 4, '1', NULL, NULL),
(311, 28, 5, '1', NULL, NULL),
(312, 28, 6, '1', NULL, NULL),
(313, 28, 7, '1', NULL, NULL),
(314, 28, 8, '1', NULL, NULL),
(315, 28, 9, '1', NULL, NULL),
(316, 28, 10, '1', NULL, NULL),
(317, 28, 11, '1', NULL, NULL),
(318, 28, 12, '1', NULL, NULL),
(319, 28, 13, '1', NULL, NULL),
(320, 28, 14, '1', NULL, NULL),
(321, 29, 1, '1', NULL, NULL),
(322, 29, 2, '1', NULL, NULL),
(323, 29, 3, '1', NULL, NULL),
(324, 29, 4, '1', NULL, NULL),
(325, 29, 5, '1', NULL, NULL),
(326, 29, 6, '1', NULL, NULL),
(327, 29, 7, '1', NULL, NULL),
(328, 29, 8, '1', NULL, NULL),
(329, 29, 9, '1', NULL, NULL),
(330, 29, 10, '1', NULL, NULL),
(331, 29, 11, '1', NULL, NULL),
(332, 29, 12, '1', NULL, NULL),
(366, 30, 12, '1', NULL, NULL),
(365, 30, 11, '1', NULL, NULL),
(364, 30, 10, '1', NULL, NULL),
(363, 30, 9, '1', NULL, NULL),
(362, 30, 8, '1', NULL, NULL),
(361, 30, 7, '1', NULL, NULL),
(360, 30, 6, '1', NULL, NULL),
(359, 30, 5, '1', NULL, NULL),
(358, 30, 4, '1', NULL, NULL),
(357, 30, 3, '1', NULL, NULL),
(356, 30, 2, '1', NULL, NULL),
(355, 30, 1, '1', NULL, NULL),
(345, 31, 8, '1', NULL, NULL),
(346, 31, 15, '1', NULL, NULL),
(347, 31, 16, '1', NULL, NULL),
(348, 26, 1, '1', NULL, NULL),
(349, 26, 4, '1', NULL, NULL),
(350, 26, 7, '1', NULL, NULL),
(351, 26, 10, '1', NULL, NULL),
(352, 26, 13, '1', NULL, NULL),
(353, 26, 16, '1', NULL, NULL),
(354, 26, 19, '1', NULL, NULL),
(367, 32, 1, '1', NULL, NULL),
(368, 32, 4, '1', NULL, NULL),
(369, 32, 7, '1', NULL, NULL),
(370, 32, 10, '1', NULL, NULL),
(371, 32, 13, '1', NULL, NULL),
(372, 32, 16, '1', NULL, NULL),
(373, 32, 19, '1', NULL, NULL),
(374, 32, 22, '1', NULL, NULL),
(375, 33, 1, '1', NULL, NULL),
(376, 33, 2, '1', NULL, NULL),
(377, 33, 3, '1', NULL, NULL),
(378, 33, 4, '1', NULL, NULL),
(379, 33, 8, '1', NULL, NULL),
(380, 33, 9, '1', NULL, NULL),
(381, 33, 11, '1', NULL, NULL),
(382, 33, 13, '1', NULL, NULL),
(383, 33, 15, '1', NULL, NULL),
(384, 33, 16, '1', NULL, NULL),
(385, 33, 17, '1', NULL, NULL),
(386, 33, 18, '1', NULL, NULL),
(387, 33, 19, '1', NULL, NULL),
(388, 33, 20, '1', NULL, NULL),
(389, 33, 21, '1', NULL, NULL),
(390, 33, 24, '1', NULL, NULL),
(391, 33, 25, '1', NULL, NULL),
(392, 33, 28, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_categories`
--

CREATE TABLE `ad_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_categories`
--

INSERT INTO `ad_categories` (`id`, `ad_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL),
(1, 1, 2, NULL, NULL),
(3, 3, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(8, 6, 1, NULL, NULL),
(9, 4, 1, NULL, NULL),
(10, 7, 1, NULL, NULL),
(12, 8, 1, NULL, NULL),
(13, 10, 1, NULL, NULL),
(14, 13, 1, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 1, NULL, NULL),
(17, 17, 1, NULL, NULL),
(18, 18, 2, NULL, NULL),
(19, 19, 3, NULL, NULL),
(20, 20, 3, NULL, NULL),
(21, 21, 2, NULL, NULL),
(22, 22, 2, NULL, NULL),
(23, 23, 2, NULL, NULL),
(24, 24, 1, NULL, NULL),
(27, 25, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_galleries`
--

CREATE TABLE `ad_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_galleries`
--

INSERT INTO `ad_galleries` (`id`, `ad_id`, `image`, `created_at`, `updated_at`) VALUES
(6, 2, 'car_rest.jpg', NULL, NULL),
(5, 2, 'car_rest.jpg', NULL, NULL),
(4, 2, 'car_rest.jpg', NULL, NULL),
(3, 1, 'car_rest.jpg', NULL, NULL),
(2, 1, 'car_rest.jpg', NULL, NULL),
(1, 1, 'car_rest.jpg', NULL, NULL),
(7, 3, 'auto-1291491_1920@2x.jpg', '2021-02-16 14:18:10', '2021-02-16 14:18:10'),
(10, 5, 'Slide_honda-city-aspire-prosmatec-2017-46917329.jpg', '2021-02-17 09:03:50', '2021-02-17 09:03:50'),
(11, 6, 'carbon-fiber-shelby-mustang-1600685276.jpg', '2021-02-17 09:10:22', '2021-02-17 09:10:22'),
(12, 7, '2020-Corolla-XLE-Red.jpg', '2021-02-17 09:54:42', '2021-02-17 09:54:42'),
(14, 8, 'WhatsApp Image 2021-01-20 at 4.03.34 PM.jpeg', '2021-02-17 10:37:10', '2021-02-17 10:37:11'),
(15, 10, 'auto-1291491_1920@2x.jpg', '2021-02-17 13:02:46', '2021-02-17 13:02:46'),
(16, 15, 'auto-1291491_1920.jpg', '2021-02-17 13:43:58', '2021-02-17 13:43:58'),
(17, 16, 'black-2178681_1920@3x.png', '2021-02-17 13:49:52', '2021-02-17 13:49:52'),
(18, 17, '2014_audi_s1_quattro-1920x1080@2x.jpg', '2021-02-17 13:51:48', '2021-02-17 13:51:48'),
(19, 17, 'auto-1291491_1920@3x.jpg', '2021-02-17 13:51:48', '2021-02-17 13:51:48'),
(20, 17, 'black-2178681_1920@3x.png', '2021-02-17 13:51:48', '2021-02-17 13:51:48'),
(21, 17, 'car-show-581066_1920@3x.jpg', '2021-02-17 13:51:48', '2021-02-17 13:51:48'),
(22, 18, 'eb44aaefb9ff859c8540df0b927fe892.jpg', '2021-02-23 17:25:55', '2021-02-23 17:25:55'),
(23, 18, 'honda-civic-2016-19xfc1f79ge027131-img1.jpg', '2021-02-23 17:25:55', '2021-02-23 17:25:55'),
(24, 18, 'images.jfif', '2021-02-23 17:25:55', '2021-02-23 17:25:55'),
(25, 21, 'eb44aaefb9ff859c8540df0b927fe892.jpg', '2021-02-23 17:34:23', '2021-02-23 17:34:23'),
(26, 21, 'honda-civic-2016-19xfc1f79ge027131-img1.jpg', '2021-02-23 17:34:23', '2021-02-23 17:34:23'),
(27, 21, 'images.jfif', '2021-02-23 17:34:23', '2021-02-23 17:34:23'),
(28, 22, 'eb44aaefb9ff859c8540df0b927fe892.jpg', '2021-02-23 17:35:16', '2021-02-23 17:35:16'),
(29, 22, 'honda-civic-2016-19xfc1f79ge027131-img1.jpg', '2021-02-23 17:35:16', '2021-02-23 17:35:16'),
(30, 22, 'images.jfif', '2021-02-23 17:35:16', '2021-02-23 17:35:16'),
(31, 23, 'audi_tt_sportback_concept_2014-1920x1080@2x.jpg', '2021-02-23 19:21:28', '2021-02-23 19:21:28'),
(32, 24, 'toyota-allion.jpg', '2021-02-23 19:27:48', '2021-02-23 19:27:48'),
(35, 25, 'merc2.jpg', '2021-02-23 21:34:11', '2021-02-23 21:34:11'),
(49, 26, 'featured-India-Pakistan-1.jpg', '2021-03-02 11:37:32', '2021-03-02 11:37:32'),
(48, 26, 'unnamed.png', '2021-03-02 11:37:32', '2021-03-02 11:37:32'),
(47, 26, 'toyota-allion.jpg', '2021-03-02 11:37:32', '2021-03-02 11:37:32'),
(39, 27, 'toyota-allion.jpg', '2021-03-01 19:36:33', '2021-03-01 19:36:33'),
(40, 27, 'unnamed.png', '2021-03-01 19:36:33', '2021-03-01 19:36:33'),
(41, 28, 'toyota-allion.jpg', '2021-03-01 19:37:25', '2021-03-01 19:37:25'),
(42, 28, 'unnamed.png', '2021-03-01 19:37:25', '2021-03-01 19:37:25'),
(43, 29, 'toyota-allion.jpg', '2021-03-01 19:39:09', '2021-03-01 19:39:09'),
(44, 29, 'unnamed.png', '2021-03-01 19:39:11', '2021-03-01 19:39:11'),
(50, 30, 'toyota-allion.jpg', '2021-03-02 11:38:19', '2021-03-02 11:38:19'),
(51, 30, 'unnamed.png', '2021-03-02 11:38:19', '2021-03-02 11:38:19'),
(52, 33, '1920px-2019_Honda_City_SV-e1594988378749.jpg', '2021-03-02 12:18:14', '2021-03-02 12:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `assign_news_categories`
--

CREATE TABLE `assign_news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_news_categories`
--

INSERT INTO `assign_news_categories` (`id`, `news_id`, `news_category_id`, `created_at`, `updated_at`) VALUES
(10, 3, 3, NULL, NULL),
(9, 4, 5, NULL, NULL),
(8, 5, 3, NULL, NULL),
(7, 6, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(1, 1, 1, NULL, NULL),
(11, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `car_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `milage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registeration_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registeration_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `ad_id`, `car_model`, `company`, `year`, `car_color`, `fuel_type`, `milage`, `condition`, `transmission`, `engine`, `registeration_no`, `registeration_city`, `created_at`, `updated_at`) VALUES
(2, 2, '2020', 'Toyota', '2020', 'White', 'Petrol', '1800', 'Used', 'Manual', '1600cc', '1235', 'ISB', NULL, NULL),
(1, 1, '2006', 'Honda', '2020', 'White', 'Petrol', '1500', 'Used', 'Automatic', '1600cc', '9099', 'ISB', NULL, NULL),
(3, 3, 'Civic', 'Honda', '2020', 'Brown', 'Hybrid', '410414', 'Used', 'Manual', '2342', 'LAW 23', 'Larkana', '2021-02-16 14:18:10', '2021-02-16 14:18:10'),
(4, 4, 'City', 'Honda', '2021-02-18', 'White', 'Petrol', '65000', 'Used', 'auto', '1500', NULL, 'Islamabad', '2021-02-17 08:40:25', '2021-02-17 09:32:59'),
(5, 4, 'City', 'Honda', '2017', 'White', 'Petrol', '65000', 'Used', 'Automatic', '1500', 'null', 'Islamabad', '2021-02-17 08:49:13', '2021-02-17 08:49:13'),
(6, 5, 'Civic', 'Honda', '2017', 'white', 'Petrol', '60,000', 'Used', 'Manual', '1300cc', '7fgvfuyy7348348756348', NULL, '2021-02-17 09:03:50', '2021-02-17 09:03:50'),
(7, 6, 'Mercedes E-Class', 'Mecerdes', '2021', 'Black', 'LPG', '222222', 'Used', 'Manual', '1000', NULL, 'Islamabad', '2021-02-17 09:07:41', '2021-02-17 09:07:41'),
(8, 6, 'Mercedes E-Class', 'Mecerdes', '2021', 'Black', 'LPG', '222222', 'Used', 'Manual', '1000', 'null', 'Islamabad', '2021-02-17 09:10:22', '2021-02-17 09:10:22'),
(9, 7, 'Corolla', 'Toyota', '2017', 'black', 'Petrol', '75000', 'Used', 'Manual', '400', NULL, 'Islamabad', '2021-02-17 09:54:42', '2021-02-17 09:54:42'),
(10, 8, 'Reborn', 'Toyota', '2017', 'Silver', 'Petrol', '176000,jhkhkjhjkhkjhfgjhfhfhfhfghfd', 'Used', 'Manual', '1000hkjhjkhkhkhkhkh', NULL, 'Rawalpindi', '2021-02-17 10:35:59', '2021-02-17 10:35:59'),
(11, 8, 'Reborn', 'Toyota', '2017', 'Silver', 'Petrol', '176000,jhkhkjhjkhkjhfgjhfhfhfhfghfd', 'Used', 'Manual', '1000hkjhjkhkhkhkhkh', 'null', 'Rawalpindi', '2021-02-17 10:37:11', '2021-02-17 10:37:11'),
(12, 10, 'GLI', 'Toyota', '2020', 'Grey', 'Diesel', '231312', 'Used', 'Automatic', '234324234', 'LAW 12', NULL, '2021-02-17 13:02:46', '2021-02-17 13:02:46'),
(13, 15, 'Reborn', 'Honda', '2019', 'Brown', 'LPG', '234324', 'Used', 'Manual', '2342', 'LAW 23', 'Badin', '2021-02-17 13:43:58', '2021-02-17 13:43:58'),
(14, 16, 'Mercedes S-Class', 'Mecerdes', '2021', 'Brown', 'Petrol', '410414', 'New', 'Automatic', '2342', 'LAW 23', 'Ghotki', '2021-02-17 13:49:52', '2021-02-17 13:49:52'),
(15, 17, 'Reborn', 'Honda', '2017', 'Brown', 'LPG', '410414', 'New', 'Automatic', '2342', '23423', 'Matiari', '2021-02-17 13:51:48', '2021-02-17 13:51:48'),
(16, 18, 'Civic', 'Honda', '2019', 'blue', 'LPG', '22000', 'Used', 'Automatic', '1000', NULL, 'Rawalpindi', '2021-02-23 17:25:55', '2021-02-23 17:25:55'),
(17, 19, 'Mercedes S-Class', 'Mecerdes', '2019', 'black', 'Petrol', '20000', 'Used', 'Automatic', '3500', NULL, 'Mardan', '2021-02-23 17:28:14', '2021-02-23 17:28:14'),
(18, 20, 'Mercedes S-Class', 'Mecerdes', '2019', 'black', 'Petrol', '20000', 'Used', 'Automatic', '3500', NULL, 'Mardan', '2021-02-23 17:29:10', '2021-02-23 17:29:10'),
(19, 21, 'Civic', 'Honda', '2019', 'blue', 'LPG', '22000', 'Used', 'Automatic', '1000', NULL, 'Rawalpindi', '2021-02-23 17:34:23', '2021-02-23 17:34:23'),
(20, 22, 'Civic', 'Honda', '2019', 'blue', 'LPG', '22000', 'Used', 'Automatic', '1000', NULL, 'Rawalpindi', '2021-02-23 17:35:16', '2021-02-23 17:35:16'),
(21, 23, 'HS7', 'FAW', '2018', 'brown', 'LPG', '123', 'New', 'Automatic', '1300', NULL, 'Larkana', '2021-02-23 19:21:28', '2021-02-23 19:21:28'),
(22, 24, 'Civic', 'Honda', '2019', 'grey', 'LPG', '123', 'Used', 'Manual', '17890', NULL, 'Karachi', '2021-02-23 19:27:48', '2021-02-23 19:27:48'),
(23, 25, 'Mercedes E-Class', 'Mecerdes', '2019', 'black', 'Petrol', '60000', 'Used', 'Automatic', '2500', NULL, 'Islamabad', '2021-02-23 20:29:16', '2021-02-23 20:29:16'),
(24, 25, 'Mercedes E-Class', 'Mecerdes', '2019', 'black', 'Petrol', '60000', 'Used', 'Automatic', '2500', 'null', 'Islamabad', '2021-02-23 21:15:15', '2021-02-23 21:15:15'),
(25, 25, 'Mercedes E-Class', 'Mecerdes', '2019', 'black', 'Petrol', '60000', 'Used', 'Automatic', '2500', 'null', 'Islamabad', '2021-02-23 21:34:11', '2021-02-23 21:34:11'),
(26, 26, 'Mercedes', 'Mecerdes', 'S-Class', 'black', 'Petrol', '234', 'Used', 'Manual', '290', 'null', 'Karachi', '2021-02-24 20:06:56', '2021-03-02 11:37:32'),
(27, 30, 'Mercedes', 'Mecerdes', 'S-Class', 'white', 'Petrol', '12000', 'Used', 'Manual', '1000c', 'null', 'Karachi', '2021-03-01 19:46:17', '2021-03-02 11:38:19'),
(28, 31, 'GLI', 'Toyota', '2020', 'grey', 'Petrol', '1001', 'New', 'Manual', '13000', NULL, 'Karachi', '2021-03-02 00:30:47', '2021-03-02 00:30:47'),
(29, 32, 'Civic', 'Honda', '2017', 'black', 'Petrol', '12000', 'Used', 'Automatic', '1000c', NULL, 'Karachi', '2021-03-02 11:39:53', '2021-03-02 11:39:53'),
(30, 33, 'City', 'Honda', '2020', 'white', 'Petrol', '21042', 'Used', 'Automatic', '1500', NULL, 'Islamabad', '2021-03-02 12:18:14', '2021-03-02 12:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `car_detail_dropdowns`
--

CREATE TABLE `car_detail_dropdowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `variations` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_detail_dropdowns`
--

INSERT INTO `car_detail_dropdowns` (`id`, `make`, `model`, `year`, `variations`, `created_at`, `updated_at`) VALUES
(3, 'Mecerdes', 'Mercedes S-Class,Mercedes E-Class', '2021,2019', 'M1,M2M,Z89', NULL, NULL),
(2, 'Toyota', 'Corolla,GLI,XLI', '2021,2020,2019,2017', 'T20,TH099', NULL, NULL),
(1, 'Honda', 'Civic,Reborn,City', '2020,2019,2018,2017', NULL, NULL, NULL),
(4, 'FAW', '3 SUVs – Hongqi HS5 ,HS7,E-HS3', '2019,2018,2015', NULL, '2021-02-18 11:42:15', '2021-02-18 11:42:15'),
(5, 'Changan', 'Alsvin,Karvan,M8,M9', '2021', NULL, '2021-02-18 11:47:05', '2021-02-18 11:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `car_features`
--

CREATE TABLE `car_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_features`
--

INSERT INTO `car_features` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABS', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(2, 'Air Bags', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(3, 'Air Conditioning', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(4, 'Alloy Rims', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(5, 'AM/FM Radio', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(6, 'CD Player', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(7, 'Cassette Player', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(8, 'Cool Box', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(9, 'Cruise Control', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(10, 'Climate Control', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(11, 'DVD Player', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(12, 'Front Speakers', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(13, 'Front Camera', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(14, 'Heated Seats', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(15, 'Immobilizer Key', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(16, 'Keyless Entry', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(17, 'Navigation System', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(18, 'Power Locks', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(19, 'Power Mirrors', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(20, 'Power Steering', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(21, 'Power Windows', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(22, 'Rear Seat Entertainment', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(23, 'Rear AC Vents', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(24, 'Rear speakers', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(25, 'Rear Camera', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(26, 'Sun Roof', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(27, 'Steering Switches', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(28, 'USB and Auxillary Cable', '1', '2021-02-19 22:53:05', '2021-02-19 22:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'luxury car', 'luxury-car', 'Inside out fully original', 'car_rest.jpg', '1', NULL, '2021-02-22 14:55:50', NULL),
(2, 'Small Cars', 'small-cars', 'Inside out fully original', 'car_rest.jpg', '1', NULL, NULL, NULL),
(3, 'Big Cars', 'big-cars', 'Inside out fully original', 'car_rest.jpg', '1', NULL, NULL, NULL),
(4, 'Jeeps', 'jeeps ', 'Inside out fully original', 'car_rest.jpg', '1', NULL, NULL, NULL),
(5, 'Sports Cars', 'sports-cars ', 'Inside out fully original', 'car_rest.jpg', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `description_helpers`
--

CREATE TABLE `description_helpers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `description_helpers`
--

INSERT INTO `description_helpers` (`id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bumper to Bumper', 1, 'Inside out fully original', NULL, NULL),
(2, 'Like New', 1, 'Just like a Zero Meter car', NULL, NULL),
(3, 'Original Book', 1, 'Original book of this car is also available', NULL, NULL),
(4, 'Price Negotiable', 1, 'Price is slightly negotiable', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventcat_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `slug`, `eventcat_id`, `image`, `location`, `event_date`, `event_time`, `description`, `status`, `featured`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'New shape sports cars gala 2021', 'new-shape-sports-gala-2021', 3, 'car_rest.jpg', 'Peshawar', '2021-02-16', '07:51:17', 'This is totally dummy content for testing purposes', '0', '0', NULL, '2021-02-18 09:18:52', '2021-02-18 09:18:52'),
(4, 'Only Honda Cars Gathering 2021', 'only-honda-cars-gathering-2021', 3, 'car_rest.jpg', 'Islamabad', '2021-02-16', '07:51:17', 'This is totally dummy content for testing purposes', '1', '0', NULL, NULL, NULL),
(3, 'Old Model Cars Gathering at Raja Bazar', 'old-model-cars-gathering-at-raja-bazar', 3, 'car_rest.jpg', 'Islamabad', '2021-02-16', '07:51:17', 'This is totally dummy content for testing purposes', '1', '0', NULL, NULL, NULL),
(2, 'Night Racers at Kashmir Highway', 'night-racers-at-kashmir-highway', 2, 'car_rest.jpg', 'Peshawar', '2021-02-16', '07:51:17', 'This is totally dummy content for testing purposes', '1', '0', NULL, NULL, NULL),
(1, 'Sports Cars At Monal 2021', 'sports-cars-at-monal-2021', 1, 'news_bg.jpg', 'Islamabad', '2021-02-16', '07:51:17', 'This is totally dummy content for testing purposes', '1', '0', NULL, '2021-02-17 08:26:38', NULL),
(6, 'Auto Show', 'auto-show', 2, 'z_maserati_shanghai.jpg', 'Islamabad', '2021-03-01', '15:20:00', 'Event is for new year celebration', '1', '0', '2021-02-18 09:18:15', '2021-02-18 09:18:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cars Night', 'cars-night', 'This is just a dummy description', '1', NULL, '2021-02-22 14:58:37', NULL),
(2, 'New Year Celebration', 'new-year-celebration', 'This is just a dummy description', '1', NULL, NULL, NULL),
(3, 'Eid Days Sports Gala', 'eid-days-sports-gala', 'This is just a dummy description', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_comments`
--

CREATE TABLE `event_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_comments`
--

INSERT INTO `event_comments` (`id`, `user_id`, `event_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 4, 'Informative!', '1', '2021-02-23 17:36:19', '2021-02-23 17:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_ad`
--

CREATE TABLE `featured_ad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_ad`
--

INSERT INTO `featured_ad` (`id`, `purchase_id`, `ad_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 85265, 4, '1', '2021-02-23 17:26:17', NULL),
(2, 900083, 26, '1', '2021-02-24 20:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hire_cars`
--

CREATE TABLE `hire_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_passengers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_adults` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_childs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropoff_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_budget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_requested` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `import_a_cars`
--

CREATE TABLE `import_a_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_reports`
--

CREATE TABLE `inspection_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `top` double(8,2) NOT NULL,
  `left` double(8,2) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inspection_reports`
--

INSERT INTO `inspection_reports` (`id`, `ad_id`, `top`, `left`, `type`, `img`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 162.00, 399.00, 'scratch', 'black-2178681_1920@2x.png', '', NULL, NULL),
(2, 3, 166.00, 214.00, 'dent', '', 'sdfasfasdfasdfasdfasdf', NULL, NULL),
(3, 3, 298.00, 342.00, 'paint', '', '', NULL, NULL),
(4, 5, 201.00, 408.00, 'dent', 'Slide_honda-city-aspire-prosmatec-2017-46917329.jpg', '', NULL, NULL),
(7, 7, 60.00, 295.00, 'dent', '2020-Corolla-XLE-Red.jpg', '', NULL, NULL),
(8, 7, 322.00, 270.00, 'paint', '2020-Corolla-XLE-Red.jpg', '', NULL, NULL),
(12, 8, 206.00, 420.00, 'scratch', '', '', NULL, NULL),
(13, 8, 209.00, 77.00, 'paint', '', '', NULL, NULL),
(14, 8, 59.00, 184.00, 'dent', '', '', NULL, NULL),
(15, 10, 132.00, 354.00, 'scratch', '', '', NULL, NULL),
(16, 15, 154.00, 365.00, 'scratch', '', '', NULL, NULL),
(17, 15, 169.00, 79.00, 'scratch', '', '', NULL, NULL),
(18, 15, 295.00, 218.00, 'scratch', '', '', NULL, NULL),
(19, 17, 130.00, 177.00, 'scratch', '', '', NULL, NULL),
(20, 18, 265.00, 673.00, 'scratch', 'images.jfif', '', NULL, NULL),
(21, 19, 272.00, 368.00, 'scratch', '', '', NULL, NULL),
(22, 20, 272.00, 368.00, 'scratch', '', '', NULL, NULL),
(23, 21, 265.00, 673.00, 'scratch', 'images.jfif', '', NULL, NULL),
(24, 22, 265.00, 673.00, 'scratch', 'images.jfif', '', NULL, NULL),
(25, 23, 85.00, 523.00, 'scratch', '', '', NULL, NULL),
(26, 23, 426.00, 259.00, 'scratch', '', '', NULL, NULL),
(27, 24, 250.00, 564.00, 'paint', '', '', NULL, NULL),
(28, 24, 36.00, 529.00, 'scratch', '', '', NULL, NULL),
(29, 24, 36.00, 183.00, 'dent', '', '', NULL, NULL),
(37, 25, 420.00, 385.00, 'scratch', '', '', NULL, NULL),
(36, 25, 274.00, 579.00, 'paint', 'images.png', '', NULL, NULL),
(38, 25, 257.00, 313.00, 'dent', '', '', NULL, NULL),
(43, 26, 255.00, 578.00, 'scratch', '', 'this is testing', NULL, NULL),
(42, 26, 47.00, 182.00, 'dent', '', '', NULL, NULL),
(41, 31, 275.00, 467.00, 'scratch', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instant_car_feature`
--

CREATE TABLE `instant_car_feature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instant_sell_car_id` bigint(20) UNSIGNED NOT NULL,
  `car_feature_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instant_sell_cars`
--

CREATE TABLE `instant_sell_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptions` longtext COLLATE utf8mb4_unicode_ci,
  `registeration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registeration_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `legal_pages`
--

CREATE TABLE `legal_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legal_pages`
--

INSERT INTO `legal_pages` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Terms And Conditions', 'terms-and-conditions', '<h2><strong>Terms and Conditions</strong></h2>\n\n                <p>Welcome to Auto Tradia!</p>\n                \n                <p>These terms and conditions outline the rules and regulations for the use of Auto Tradia Website, located at https://autotradia.com.</p>\n                \n                <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Auto Tradia if you do not agree to take all of the terms and conditions stated on this page.</p>\n                \n                <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\n                \n                <h3><strong>Cookies</strong></h3>\n                \n                <p>We employ the use of cookies. By accessing Auto Tradia, you agreed to use cookies in agreement with the Auto Tradia Privacy Policy. </p>\n                \n                <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\n                \n                <h3><strong>License</strong></h3>\n                \n                <p>Unless otherwise stated, Auto Tradia and/or its licensors own the intellectual property rights for all material on Auto Tradia. All intellectual property rights are reserved. You may access this from Auto Tradia for your own personal use subjected to restrictions set in these terms and conditions.</p>\n                \n                <p>You must not:</p>\n                <ul>\n                    <li>Republish material from Auto Tradia</li>\n                    <li>Sell, rent or sub-license material from Auto Tradia</li>\n                    <li>Reproduce, duplicate or copy material from Auto Tradia</li>\n                    <li>Redistribute content from Auto Tradia</li>\n                </ul>\n                \n                <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href=\"https://www.termsandconditionsgenerator.com\">Terms And Conditions Generator</a> and the <a href=\"https://www.generateprivacypolicy.com\">Privacy Policy Generator</a>.</p>\n                \n                <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Auto Tradia does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Auto Tradia,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Auto Tradia shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\n                \n                <p>Auto Tradia reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\n                \n                <p>You warrant and represent that:</p>\n                \n                <ul>\n                    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\n                    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\n                    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\n                    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\n                </ul>\n                \n                <p>You hereby grant Auto Tradia a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\n                \n                <h3><strong>Hyperlinking to our Content</strong></h3>\n                \n                <p>The following organizations may link to our Website without prior written approval:</p>\n                \n                <ul>\n                    <li>Government agencies;</li>\n                    <li>Search engines;</li>\n                    <li>News organizations;</li>\n                    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\n                    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\n                </ul>\n                \n                <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>\n                \n                <p>We may consider and approve other link requests from the following types of organizations:</p>\n                \n                <ul>\n                    <li>commonly-known consumer and/or business information sources;</li>\n                    <li>dot.com community sites;</li>\n                    <li>associations or other groups representing charities;</li>\n                    <li>online directory distributors;</li>\n                    <li>internet portals;</li>\n                    <li>accounting, law and consulting firms; and</li>\n                    <li>educational institutions and trade associations.</li>\n                </ul>\n                \n                <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Auto Tradia; and (d) the link is in the context of general resource information.</p>\n                \n                <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>\n                \n                <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Auto Tradia. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\n                \n                <p>Approved organizations may hyperlink to our Website as follows:</p>\n                \n                <ul>\n                    <li>By use of our corporate name; or</li>\n                    <li>By use of the uniform resource locator being linked to; or</li>\n                    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>\n                </ul>\n                \n                <p>No use of Auto Tradia logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\n                \n                <h3><strong>iFrames</strong></h3>\n                \n                <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\n                \n                <h3><strong>Content Liability</strong></h3>\n                \n                <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\n                \n                <h3><strong>Your Privacy</strong></h3>\n                \n                <p>Please read Privacy Policy</p>\n                \n                <h3><strong>Reservation of Rights</strong></h3>\n                \n                <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\n                \n                <h3><strong>Removal of links from our website</strong></h3>\n                \n                <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\n                \n                <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\n                \n                <h3><strong>Disclaimer</strong></h3>\n                \n                <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\n                \n                <ul>\n                    <li>limit or exclude our or your liability for death or personal injury;</li>\n                    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\n                    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\n                    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\n                </ul>\n                \n                <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\n                \n                <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>', '1', NULL, NULL),
(2, 'Privacy Policy', 'privacy-policy', '<h1>Privacy Policy for Auto Tradia</h1>\n\n                <p>At Auto Tradia, accessible from https://autotradia.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Auto Tradia and how we use it.</p>\n                \n                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\n                \n                <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Auto Tradia. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicyonline.com/privacy-policy-generator/\">Free Privacy Policy Generator</a>.</p>\n                \n                <h2>Consent</h2>\n                \n                <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\n                \n                <h2>Information we collect</h2>\n                \n                <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\n                <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\n                <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\n                \n                <h2>How we use your information</h2>\n                \n                <p>We use the information we collect in various ways, including to:</p>\n                \n                <ul>\n                <li>Provide, operate, and maintain our webste</li>\n                <li>Improve, personalize, and expand our webste</li>\n                <li>Understand and analyze how you use our webste</li>\n                <li>Develop new products, services, features, and functionality</li>\n                <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>\n                <li>Send you emails</li>\n                <li>Find and prevent fraud</li>\n                </ul>\n                \n                <h2>Log Files</h2>\n                \n                <p>Auto Tradia follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users movement on the website, and gathering demographic information.</p>\n                \n                <h2>Cookies and Web Beacons</h2>\n                \n                <p>Like any other website, Auto Tradia uses cookies. These cookies are used to store information including visitors preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users experience by customizing our web page content based on visitors browser type and/or other information.</p>\n                \n                <p>For more general information on cookies, please read <a href=\"https://www.cookieconsent.com/what-are-cookies/\">\"What Are Cookies\" from Cookie Consent</a>.</p>\n                \n                \n                \n                <h2>Advertising Partners Privacy Policies</h2>\n                \n                <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Auto Tradia.</p>\n                \n                <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Auto Tradia, which are sent directly to users browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\n                \n                <p>Note that Auto Tradia has no access to or control over these cookies that are used by third-party advertisers.</p>\n                \n                <h2>Third Party Privacy Policies</h2>\n                \n                <p>Auto Tradia Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>\n                \n                <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers respective websites.</p>\n                \n                <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\n                \n                <p>Under the CCPA, among other rights, California consumers have the right to:</p>\n                <p>Request that a business that collects a consumers personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\n                <p>Request that a business delete any personal data about the consumer that a business has collected.</p>\n                <p>Request that a business that sells a consumers personal data, not sell the consumers personal data.</p>\n                <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\n                \n                <h2>GDPR Data Protection Rights</h2>\n                \n                <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\n                <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\n                <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\n                <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>\n                <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\n                <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>\n                <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\n                <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\n                \n                <h2>Children Information</h2>\n                \n                <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\n                \n                <p>Auto Tradia does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>', '1', NULL, NULL),
(3, 'Refund Policy', 'refund-policy', '<h1>Return and Refund Policy</h1>\n                <p>Last updated: February 15, 2021</p>\n                <p>Thank you for shopping at Auto Tradia.</p>\n                <p>If, for any reason, You are not completely satisfied with a purchase We invite You to review our policy on refunds and returns. This Return and Refund Policy has been created with the help of the <a href=\"https://www.privacypolicies.com/return-refund-policy-generator/\" target=\"_blank\">Return and Refund Policy Generator</a>.</p>\n                <p>The following terms are applicable for any products that You purchased with Us.</p>\n                <h1>Interpretation and Definitions</h1>\n                <h2>Interpretation</h2>\n                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\n                <h2>Definitions</h2>\n                <p>For the purposes of this Return and Refund Policy:</p>\n                <ul>\n                <li>\n                <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Auto Tradia.</p>\n                </li>\n                <li>\n                <p><strong>Goods</strong> refer to the items offered for sale on the Service.</p>\n                </li>\n                <li>\n                <p><strong>Orders</strong> mean a request by You to purchase Goods from Us.</p>\n                </li>\n                <li>\n                <p><strong>Service</strong> refers to the Website.</p>\n                </li>\n                <li>\n                <p><strong>Website</strong> refers to Auto Tradia, accessible from <a href=\"https://autotradia.com\" rel=\"external nofollow noopener\" target=\"_blank\">https://autotradia.com</a></p>\n                </li>\n                <li>\n                <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>\n                </li>\n                </ul>\n                <h1>Your Order Cancellation Rights</h1>\n                <p>You are entitled to cancel Your Order within 7 days without giving any reason for doing so.</p>\n                <p>The deadline for cancelling an Order is 7 days from the date on which You received the Goods or on which a third party you have appointed, who is not the carrier, takes possession of the product delivered.</p>\n                <p>In order to exercise Your right of cancellation, You must inform Us of your decision by means of a clear statement. You can inform us of your decision by:</p>\n                <ul>\n                <li>By email: support@autotradia.com</li>\n                </ul>\n                <p>We will reimburse You no later than 14 days from the day on which We receive the returned Goods. We will use the same means of payment as You used for the Order, and You will not incur any fees for such reimbursement.</p>\n                <h1>Conditions for Returns</h1>\n                <p>In order for the Goods to be eligible for a return, please make sure that:</p>\n                <ul>\n                <li>The Goods were purchased in the last 7 days</li>\n                </ul>\n                <p>The following Goods cannot be returned:</p>\n                <ul>\n                <li>The supply of Goods made to Your specifications or clearly personalized.</li>\n                <li>The supply of Goods which according to their nature are not suitable to be returned, deteriorate rapidly or where the date of expiry is over.</li>\n                <li>The supply of Goods which are not suitable for return due to health protection or hygiene reasons and were unsealed after delivery.</li>\n                <li>The supply of Goods which are, after delivery, according to their nature, inseparably mixed with other items.</li>\n                </ul>\n                <p>We reserve the right to refuse returns of any merchandise that does not meet the above return conditions in our sole discretion.</p>\n                <p>Only regular priced Goods may be refunded. Unfortunately, Goods on sale cannot be refunded. This exclusion may not apply to You if it is not permitted by applicable law.</p>\n                <h1>Returning Goods</h1>\n                <p>You are responsible for the cost and risk of returning the Goods to Us. You should send the Goods at the following address:</p>\n                <p>support@autotradia.com</p>\n                <p>We cannot be held responsible for Goods damaged or lost in return shipment. Therefore, We recommend an insured and trackable mail service. We are unable to issue a refund without actual receipt of the Goods or proof of received return delivery.</p>\n                <h1>Gifts</h1>\n                <p>If the Goods were marked as a gift when purchased and then shipped directly to you, You will receive a gift credit for the value of your return. Once the returned product is received, a gift certificate will be mailed to You.</p>\n                <p>If the Goods werent marked as a gift when purchased, or the gift giver had the Order shipped to themselves to give it to You later, We will send the refund to the gift giver.</p>\n                <h2>Contact Us</h2>\n                <p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>\n                <ul>\n                <li>By email: support@autotradia.com</li>\n                </ul>', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_01_27_092858_create_user_details_table', 1),
(10, '2021_01_27_093252_create_reviews_table', 1),
(11, '2021_01_27_093713_create_import_a_cars_table', 1),
(12, '2021_01_27_094631_create_hire_cars_table', 1),
(13, '2021_01_27_095654_create_instant_sell_cars_table', 1),
(14, '2021_01_27_100212_create_wash_services_table', 1),
(15, '2021_01_27_102556_create_categories_table', 1),
(16, '2021_01_27_102935_create_event_categories_table', 1),
(17, '2021_01_27_102947_create_news_categories_table', 1),
(18, '2021_01_27_103046_create_events_table', 1),
(19, '2021_01_27_103057_create_news_table', 1),
(20, '2021_01_27_104504_create_legal_pages_table', 1),
(21, '2021_01_27_104613_create_social_links_table', 1),
(22, '2021_01_27_111809_create_packages_table', 1),
(23, '2021_01_27_112204_create_ads_table', 1),
(24, '2021_01_27_112236_create_purchases_table', 1),
(25, '2021_01_27_113426_create_featured_ad_table', 1),
(26, '2021_01_27_114218_create_wish_lists_table', 1),
(27, '2021_01_27_115116_create_assign_news_categories_table', 1),
(28, '2021_01_27_115346_create_ad_categories_table', 1),
(29, '2021_01_27_120300_create_car_details_table', 1),
(30, '2021_01_27_130126_create_permission_tables', 1),
(31, '2021_01_28_061326_create_ad_galleries_table', 1),
(32, '2021_01_28_061656_create_car_features_table', 1),
(33, '2021_01_28_061924_create_ad_car_features_table', 1),
(34, '2021_02_01_061855_create_instant_car_feature_table', 1),
(35, '2021_02_07_112729_create_inspection_reports_table', 1),
(36, '2021_02_09_065706_create_description_helpers_table', 1),
(37, '2021_02_09_065953_create_car_detail_dropdowns_table', 1),
(38, '2021_02_09_071245_create_news_comments_table', 1),
(39, '2021_02_09_071710_create_event_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 26),
(2, 'App\\Models\\User', 27),
(2, 'App\\Models\\User', 31),
(2, 'App\\Models\\User', 32),
(2, 'App\\Models\\User', 33),
(2, 'App\\Models\\User', 34),
(2, 'App\\Models\\User', 35),
(2, 'App\\Models\\User', 36),
(2, 'App\\Models\\User', 37);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `image`, `description`, `status`, `featured`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Porsche Pakistan denies car fraud allegations by customers', 'porsche-pakistan-denies-car-fraud-allegations-by-customers', '334535_4108931_updates.jpg', 'Porsche Pakistan, a franchise of the German automobile manufacturer, has denied fraud allegations made by a customer in Lahore, saying the claims were \"misleading and irresponsible\".\r\n\r\nIn a statement issued this week, Porsche Pakistan said the allegations of fraudulent car bookings were untrue and that its chief executive officer (CEO) \"does not owe any sum of money as claimed\" in the news reports.\r\n\r\n\"All payments were received by Performance Automotive Pvt Ltd. (Porsche Pakistan) against vehicle bookings under legal contracts on behalf of Porsche AG as their appointed representative,\" the statement read.\r\n\r\nThe car dealer, in its explanatory statement, also accused Porsche AG, the parent company, of illegally refusing to supply vehicles to its Pakistani consumers for two years, alleging that it was \"an attempt to bankrupt and discredit Porsche Pakistan\".\r\n\r\n\"The eventual aim [was] to transfer the business to an influential and controversial business group with which a prearrangement was concluded by the regional office of Porsche AG (Porsche Middle East and Africa FZE),\" it claimed.\r\n\r\nPorsche Pakistan further maintained that it had legally challenged its parent company at all forums available in Pakistan and \"since mid-2020 filed an arbitration against Porsche AG at London Court of International Arbitration\". It was expecting conclusion \"in the coming weeks\", it added.\r\n\r\nOn the other hand, police said Performance Automotive Pvt Ltd\'s owner, Syed Abuzar Bokhari, has been accused of setting up a centre under the name \"Performance Limited\", receiving tens of millions of rupees for booking Porsche vehicles for its customers, and closing down the business.\r\n\r\nAt least seven different cases have been registered against Bokhari, Lahore police added.\r\n\r\nPorsche cars are among the most expensive ones in the world, with prices ranging from Rs35 million to Rs90 million. The luxury vehicles are equipped with the latest technology, with smart and elegant interior and exterior, automatically adjustable headlights, and ceramic brakes, among other features.\r\n\r\nOne of the complainants against Bokhari, Mian Mohammad Ali Moeen, has approached the National Accountability Bureau (NAB) for help in recovering the Rs5 million he had paid in advance for a Porsche Taycan to Performance Automotive Pvt Ltd in January 2020, Dawn reported.\r\n\r\nThe publication quoted a senior police official as saying the suspect may have left the country. Lahore police have sought the assistance of the Federal Investigation Agency (FIA) for Bokhari\'s arrest, the official, who spoke on the condition of anonymity, added.\r\n\r\nInterestingly, however, people have started to question the existence of Porsche Pakistan, noting that the clarification it had issued \"raises more questions than it answers\" and that the parent company had removed its page on Pakistan with details of Bokhari.\r\n\r\nNo statement was available on the social media accounts — including Instagram, LinkedIn, and Facebook — of Performance Automotive Pvt Ltd (Porsche Pakistan).', '1', '1', '2021-02-20 04:21:19', '2021-02-18 09:38:56', NULL),
(2, 'Why are Chinese car makers setting up shop in Pakistan?', 'why-are-chinese-car-makers-setting-up-shop-in-pakistan', '0d50e718-5b05-11eb-a99a-beae699a1a1d_image_hires_181911.webp', 'A Pakistan-Chinese automotive joint venture recently sold out six months’ production of its first compact sedan car within five days of market launch, a success that investors and analysts believe could pave the way for Pakistan to become an export base for Chinese right-hand-drive vehicles.\r\nThe stock-clearing sale of 15,000 Chang’an Alsvin passenger vehicles is the latest in a series of headlines about joint ventures between privately held Pakistani conglomerates and Chinese state-owned automotive enterprises.', '1', '1', '2021-02-20 04:21:22', '2021-02-18 09:40:42', NULL),
(1, 'Honda Company Bankrupting Soon 2023', 'honda-company-bankrupt-2023', 'car_rest.jpg', 'This is totally dummy content for the news because we are testing the whole website. and its not easy to write in details', '0', '1', '2021-02-20 04:21:28', '2021-02-18 09:40:49', '2021-02-18 09:40:49'),
(4, 'Javed Afridi points finger at automobile industry as FBR probes import of MG Motors vehicles', 'javed-afridi-points-finger-at-automobile-industry-as-fbr-probes-import-of-mg-motors-vehicles', '335181_8866623_updates.jpg', 'ISLAMABAD: Businessman Javed Afridi has indirectly accused the movers and shakers of the country’s automobile industry of launching a smear campaign after it was reported that the Federal Board of Revenue (FBR) was investigating the declared import value of completely built-up (CBU) units of Morris Garages (MG) vehicles imported in the country by his new venture.\r\n\r\n“For decades, Pakistani automobile consumers have been exploited by cartels that cornered them with low quality, boring models at exorbitant prices. Plus, buyers had to pay billions of rupees to get delivery of the very vehicles the price of which they had already paid,” said Afridi, who recently brought the MG brand to the country, on Twitter.', '1', '1', '2021-02-20 04:21:33', '2021-02-18 09:37:02', NULL),
(5, '× HOME PAKISTAN BUSINESS SCI-TECH MULTIMEDIA WORLD OPINION LIFE & STYLE SPORTS CRICKET T.EDIT BLOGS NEWSLAB FOOD ARCHIVE OTHER New cars set to enter auto sector of Pakistan', 'home-pakistan-business-sci-tech-multimedia-world-opinion-life-style-sports-cricket-tedit-blogs-newslab-food-archive-other-new-cars-set-to-enter-auto-sector-of-pakistan', '11613417116-0.jpg', 'Karachi: Lucky Motors is planning to launch Kia Sorento model to give competition to Toyota’s Fortuner variant.\r\n\r\nAccording to a report released by Arif Habib Limited (AHL) on Monday, the company will launch the variant on February 19, 2021. The market also expects the car company to introduce another model called Cerato by June 2021.\r\n\r\nPakistan introduced an automobile policy in 2016 to attract new players to the country in a bid to deepen competition among automobile firms and to offer latest technology to customers.\r\n\r\n“The newer models have higher fuel efficiency, better safety standards and improved comfort and performance level,” said Topline Securities analyst Fawad Basir in comments to The Express Tribune. “New players have forced the older original equipment manufacturers to introduce updated car models with better features.”\r\n\r\nHe detailed that in this regard, Pak Suzuki launched newer variants of Wagon R, Cultus and Alto.\r\n\r\nOn the other hand, Indus Motor Company updated its Corolla model and introduced Yaris.\r\n\r\nHonda Atlas is also expected to follow suit and introduce a fresh City variant later during the year after it launched 10th generation Civic.\r\n\r\nHe said that the automobile sector of Pakistan was on a growing trajectory and car sales during 2021 were projected at 200,000 units.\r\n\r\nThe current market situation is in favour of all players in the automobile sector as companies are reaping benefits of a lower policy rate, said AHL analyst Arsalan Hanif.\r\n\r\n“Similarly, new players are receiving overwhelming response from customers because they have introduced diverse options in the market with better specifications and a good value for money,” he said.\r\n\r\nDuring 2018, the country imported 78,000 vehicles, however, the number dropped to 10,000 in 2020 following a change in the automobile policy, he said.\r\n\r\nThe analyst pointed out that new players were bridging this import gap while existing player maintained sales growth.\r\n\r\n“As the pressure on existing players is increasing, they are launching new vehicles with better facilities to keep their market share intact,” he said. The Sorento model by KIA is a seven-seater SUV that will be available in three variants and seven colours.\r\n\r\nOther major features of the model include LED head and tail lights, auto boot, Hankook 18” tyres, 8” multimedia system, wireless car charger, panoramic sunroof, rear air conditioning and two options for interior colour.\r\n\r\n“We expect the price to be around Rs7-8.5 million,” said AHL report.\r\n\r\nThe company’s plant has been operating on a double shift capacity since January 2021.\r\n\r\nPakistan Electric Vehicles Manufacturers Association (PEVMA) Chairman Sabir Shaikh said arrival of new players in the market is encouraging for consumers as new technology and better variety of models are available to them.', '1', '1', '2021-02-20 04:21:37', '2021-02-18 09:35:06', NULL),
(6, 'Can Pakistan become a hub of auto exports?', 'can-pakistan-become-a-hub-of-auto-exports', '602996018e7a5.jpg', 'A Pakistan-Chinese automotive joint venture, Master Changan Motors (MCM), plans to turn its $136 million complete knock-down (CKD) assembly plant in Karachi into a hub of export for the Chinese right-hand-drive cars to the regional countries. MCM is the only joint venture where a Chinese automotive manufacturer has actually invested capital in the project whereas most Chinese Original Equipment Manufacturers (OEM) interested in exploring their chances in Pakistani market are preferring ‘technical cooperation’ with their local partners.\r\n\r\nEstablished back in 2017 as a 70:30 joint-venture between Pakistan’s Master Group and China’s Changan Motors, MCM has the capacity to assemble 30,000 units a year. The company plans to enhance this capacity to 50,000 units. The company, which started by producing two pick-up trucks and a multi-purpose vehicle in 2018, has so far sold a staggering 17,000 units of Changan’s compact sedan Alsvin it had launched in December last year. “Ours is the first green-field project launched under the 2016/21 Auto Industry Development Policy under the umbrella of China-Pakistan Economic Corridor 2.0,” Danial Malik, MCM CEO, told this correspondent in an interview.', '1', '1', '2021-02-18 09:33:15', '2021-02-18 09:33:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'luxury car', 'luxury-car', 'This is totally dummy content for the demo purposes', '1', NULL, NULL, NULL),
(2, 'Small Cars', 'small-cars', 'This is totally dummy content for the demo purposes', '1', NULL, NULL, NULL),
(3, 'Big Cars', 'big-cars', 'This is totally dummy content for the demo purposes', '1', NULL, NULL, NULL),
(4, 'Jeeps', 'jeeps ', 'This is totally dummy content for the demo purposes', '1', NULL, NULL, NULL),
(5, 'Sports Cars', 'sports-cars ', 'This is totally dummy content for the demo purposes', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE `news_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_comments`
--

INSERT INTO `news_comments` (`id`, `user_id`, `news_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 3, 'Informative', '1', '2021-02-23 17:42:24', '2021-02-23 17:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `user_id`, `read_at`, `created_at`, `updated_at`) VALUES
('cd6ad19f-fbde-4eed-a22e-a1f03c815061', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 11, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"ia4473488@gmail.com\",\"created_at\":\"23-02-2121 10:11:51\",\"message\":\"Congrats!! A Package : Enterprise  has been Purchased\"}}', NULL, NULL, '2021-02-23 17:11:52', '2021-02-23 17:11:52'),
('df5e032d-e71c-4e36-afe0-d887355dbb32', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 16, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"ia4473488@gmail.com\",\"created_at\":\"23-02-2121 10:11:51\",\"message\":\"Hi Imad Ali, you have successfully purchased the package : Enterprise\"}}', NULL, NULL, '2021-02-23 17:11:52', '2021-02-23 17:11:52'),
('7eda11f9-fdde-4e7e-be86-f06c53fd388d', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 11, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"ia4473488@gmail.com\",\"created_at\":\"23-02-2121 10:11:51\",\"message\":\"Congrats!! An Ad : Honda City 2017 has now Featured\"}}', NULL, NULL, '2021-02-23 17:26:17', '2021-02-23 17:26:17'),
('b58c94ea-8bd0-4dc6-ba08-596c18b4484c', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 16, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"ia4473488@gmail.com\",\"created_at\":\"23-02-2121 10:11:51\",\"message\":\"Hi Imad Ali, you have successfully featured your ad named : Honda City 2017\"}}', NULL, NULL, '2021-02-23 17:26:17', '2021-02-23 17:26:17'),
('1138754f-ab5e-4bff-a2f5-8361350f1edb', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 11, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"23-02-2121 10:36:19\",\"message\":\"Hi Admin!! New Comment Posted On Event\"}}', NULL, NULL, '2021-02-23 17:36:20', '2021-02-23 17:36:20'),
('e265a1d9-34be-4560-8c65-55b0d5903f00', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"23-02-2121 10:36:19\",\"message\":\"Hi Ayza, your recent comment on an event is posted successfully & is in pending\"}}', NULL, NULL, '2021-02-23 17:36:20', '2021-02-23 17:36:20'),
('4e17e810-f5c9-4f8f-b7e3-59f5a60cae89', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 11, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"23-02-2121 10:42:24\",\"message\":\"Hi Admin!! New Comment Posted On News\"}}', NULL, NULL, '2021-02-23 17:42:24', '2021-02-23 17:42:24'),
('42430754-fdf1-446d-bf82-cd5245e5e2d7', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"23-02-2121 10:42:24\",\"message\":\"Hi Ayza, your recent comment on news is posted successfully & is in pending\"}}', NULL, NULL, '2021-02-23 17:42:24', '2021-02-23 17:42:24'),
('31db4dab-cd6f-4485-8f20-bbd985833da9', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"2021-02-23T10:44:18.000000Z\",\"message\":\"Hi Ayza, your recent comment on events is now approved\"}}', NULL, NULL, '2021-02-23 17:44:18', '2021-02-23 17:44:18'),
('b7005e84-2ca2-4dd8-926d-b68286fbf552', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"2021-02-23T10:44:41.000000Z\",\"message\":\"Hi Ayza, your recent comment on news is now approved\"}}', NULL, NULL, '2021-02-23 17:44:41', '2021-02-23 17:44:41'),
('5ebd4124-2bca-4028-b2ac-e896c2570138', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 27, '{\"data\":{\"user_name\":\"Dad\",\"user_email\":\"abdulazizibrahim94@gmail.com\",\"created_at\":\"2021-02-23T13:33:28.000000Z\",\"message\":\"Hi Dad, Congrats! Your Ad .Mecerdes Mercedes E-Class 2019. has now Approved!\"}}', NULL, NULL, '2021-02-23 20:33:28', '2021-02-23 20:33:28'),
('ebfddc50-4bf2-4f46-b5f2-e981df79b997', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 20, '{\"data\":{\"user_name\":\"Hassan Bokhari\",\"user_email\":\"hbokhari18@gmail.com\",\"created_at\":\"2021-03-01T07:44:15.000000Z\",\"message\":\"Hi Hassan Bokhari, Congrats! Your Ad .Mecerdes Mercedes S-Class 2019. has now Approved!\"}}', NULL, NULL, '2021-03-01 14:44:15', '2021-03-01 14:44:15'),
('3216a401-9525-4bed-9ee8-ca2e93e627ed', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 30, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"24-02-2121 13:23:29\",\"message\":\"Hi Asad ullah, you have successfully featured your ad named : Mecerdes Mercedes S-Class 2021\"}}', NULL, NULL, '2021-02-24 20:24:03', '2021-02-24 20:24:03'),
('acd0d549-207a-4c56-954b-043cd63e852f', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 27, '{\"data\":{\"user_name\":\"Dad\",\"user_email\":\"abdulazizibrahim94@gmail.com\",\"created_at\":\"23-02-2121 13:29:16\",\"message\":\"Hi Dad, Your Ad : Mecerdes Mercedes E-Class 2019 is successfully created & is in pending\"}}', NULL, NULL, '2021-02-23 20:29:17', '2021-02-23 20:29:17'),
('305713a6-752b-4659-927a-9ff2b136eae1', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"2021-03-01T07:42:50.000000Z\",\"message\":\"Hi Ayza, Congrats! Your Ad .Honda Civic 2019. has now Approved!\"}}', NULL, NULL, '2021-03-01 14:42:51', '2021-03-01 14:42:51'),
('f57a53fb-4b03-44d5-9b54-d522fbf4787d', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 30, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"24-02-2121 13:23:29\",\"message\":\"Hi Asad ullah, you have successfully purchased the package : Basic\"}}', NULL, NULL, '2021-02-24 20:23:29', '2021-02-24 20:23:29'),
('291c44e3-9588-41db-a0ab-e42f66295828', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"2021-03-01T07:44:53.000000Z\",\"message\":\"Hi Ayza, Congrats! Your Ad .Honda Civic 2019. has now Approved!\"}}', NULL, NULL, '2021-03-01 14:44:53', '2021-03-01 14:44:53'),
('c5638b84-4587-4c9a-9f38-6d125a16ae88', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 30, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"2021-03-01T12:48:03.000000Z\",\"message\":\"Hi Asad ullah, Congrats! Your Ad .  . has now Approved!\"}}', NULL, NULL, '2021-03-01 19:48:04', '2021-03-01 19:48:04'),
('852fddc7-02f2-4ac3-b586-ad5269d783ff', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"01-03-2121 17:30:47\",\"message\":\"Hi Admin!! New Ad Has Been Posted!\"}}', NULL, NULL, '2021-03-02 00:30:48', '2021-03-02 00:30:48'),
('91135b61-88eb-4566-8432-39abba63fd95', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 30, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"01-03-2121 12:46:17\",\"message\":\"Hi Asad ullah, Your Ad :    is successfully created & is in pending\"}}', NULL, NULL, '2021-03-01 19:46:19', '2021-03-01 19:46:19'),
('aae45a94-d4b9-417b-b095-c960554a4376', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 17, '{\"data\":{\"user_name\":\"Ayza\",\"user_email\":\"ayizamalik52@gmail.com\",\"created_at\":\"01-03-2121 17:30:47\",\"message\":\"Hi Ayza, Your Ad :    is successfully created & is in pending\"}}', NULL, NULL, '2021-03-02 00:30:48', '2021-03-02 00:30:48'),
('fec32bc4-29cf-42d2-af50-a78dd72b359d', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"imadalley1@gmail.com\",\"created_at\":\"02-03-2121 04:32:01\",\"user_id\":33,\"message\":\"Congrats!! New User Register\"}}', NULL, NULL, '2021-03-02 11:32:02', '2021-03-02 11:32:02'),
('fe220398-c355-4a21-a6d4-af67264b1b94', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"02-03-2121 04:37:32\",\"message\":\"Hi Admin!! An Ad has been Updated By Seller!\"}}', NULL, NULL, '2021-03-02 11:37:32', '2021-03-02 11:37:32'),
('8b763202-282c-44f2-87f8-92e84599342c', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"02-03-2121 04:39:53\",\"message\":\"Hi Admin!! New Ad Has Been Posted!\"}}', NULL, NULL, '2021-03-02 11:39:53', '2021-03-02 11:39:53'),
('b35ad5d4-0c93-47af-88a3-2777ac77033d', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 30, '{\"data\":{\"user_name\":\"Asad ullah\",\"user_email\":\"asaddir5566@gmail.com\",\"created_at\":\"02-03-2121 04:39:53\",\"message\":\"Hi Asad ullah, Your Ad : Honda Civic 2017 is successfully created & is in pending\"}}', NULL, NULL, '2021-03-02 11:39:53', '2021-03-02 11:39:53'),
('7cdc7210-7fd6-4b54-822d-5ea6c73a27b8', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"asad\",\"user_email\":\"asadu047@gmail.com\",\"created_at\":\"02-03-2121 04:46:46\",\"user_id\":34,\"message\":\"Congrats!! New User Register\"}}', NULL, NULL, '2021-03-02 11:46:47', '2021-03-02 11:46:47'),
('7709bbbc-10ef-4afe-b492-25dd45fc63f7', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"asad\",\"user_email\":\"asad456@gmail.com\",\"created_at\":\"02-03-2121 05:11:07\",\"user_id\":35,\"message\":\"Congrats!! New User Register\"}}', NULL, NULL, '2021-03-02 12:11:07', '2021-03-02 12:11:07'),
('db5c61d8-1c3f-4f13-b1e6-9b23ad57b7e2', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"asad\",\"user_email\":\"asadu047@gmail.com\",\"created_at\":\"02-03-2121 05:14:24\",\"user_id\":36,\"message\":\"Congrats!! New User Register\"}}', NULL, NULL, '2021-03-02 12:14:24', '2021-03-02 12:14:24'),
('920109e3-14bd-4f87-99f9-de874ba407c9', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 36, '{\"data\":{\"user_name\":\"asad\",\"user_email\":\"asadu047@gmail.com\",\"created_at\":\"02-03-2121 05:14:24\",\"message\":\"Hi asad, Welcome to Auto Tradia. Thank you for showing your interest in our platform\"}}', NULL, NULL, '2021-03-02 12:14:24', '2021-03-02 12:14:24'),
('61615a0c-8089-4462-b4ff-9213f5c925f7', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"Adnan Ashraf\",\"user_email\":\"Adnan@gmail.com\",\"created_at\":\"02-03-2121 05:15:47\",\"user_id\":37,\"message\":\"Congrats!! New User Register\"}}', NULL, NULL, '2021-03-02 12:15:47', '2021-03-02 12:15:47'),
('746bdae7-5bee-4bd6-9369-f4c060f3fb27', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 37, '{\"data\":{\"user_name\":\"Adnan Ashraf\",\"user_email\":\"Adnan@gmail.com\",\"created_at\":\"02-03-2121 05:15:47\",\"message\":\"Hi Adnan Ashraf, Welcome to Auto Tradia. Thank you for showing your interest in our platform\"}}', NULL, NULL, '2021-03-02 12:15:47', '2021-03-02 12:15:47'),
('86dc9f30-8286-4bfc-bfc7-fb0abe20bb26', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"ia4473488@gmail.com\",\"created_at\":\"02-03-2121 05:18:14\",\"message\":\"Hi Admin!! New Ad Has Been Posted!\"}}', NULL, NULL, '2021-03-02 12:18:14', '2021-03-02 12:18:14'),
('2bf4e976-88f8-4486-801a-616a37855877', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 16, '{\"data\":{\"user_name\":\"Imad Ali\",\"user_email\":\"ia4473488@gmail.com\",\"created_at\":\"02-03-2121 05:18:14\",\"message\":\"Hi Imad Ali, Your Ad : Honda City 2020 is successfully created & is in pending\"}}', NULL, NULL, '2021-03-02 12:18:14', '2021-03-02 12:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('1bb7b91a50d9d6cc9670ac061dcc4f42cae707c50c6d50194f8c16662971d179ec45946e2acaba7a', 1, 1, 'Personal Access Token', '[]', 1, '2021-02-19 23:15:13', '2021-02-19 23:15:13', '2022-02-19 16:15:13'),
('0e52dad86e7f2a2a9d072cb3bdffa5f32e977d2712c18bf2f17c13880189f98207e1399c093a00b5', 25, 1, 'Personal Access Token', '[]', 0, '2021-02-19 23:15:41', '2021-02-19 23:15:41', '2022-02-19 16:15:41'),
('20cd41e21cf9053f4b0499eef56ad1f38a6cf6ec5e9d6acb88197b64c463b8ec7ce8ad0bd0a490d2', 26, 1, 'Personal Access Token', '[]', 0, '2021-02-19 23:17:07', '2021-02-19 23:17:07', '2022-02-19 16:17:07'),
('a2d9354e45fc35f376e9d9d1bad3542c9f7e8977e3f3e05eebcb84afab2c4d571253e25ca51d9e12', 16, 1, 'Personal Access Token', '[]', 1, '2021-02-21 12:59:56', '2021-02-21 12:59:56', '2022-02-21 05:59:56'),
('e4f4ac49f351fa60c152e2814f823c9426d794184d78a5bca98bc116f547f0dd091ff784bbbe54b6', 16, 1, 'Personal Access Token', '[]', 0, '2021-02-21 13:00:15', '2021-02-21 13:00:15', '2022-02-21 06:00:15'),
('2d912c3c5a2c751b09f97a86c5e4a5c76152b669fea88b7b5cd239dd9e5af0a44f586913166a7c12', 27, 1, 'Personal Access Token', '[]', 0, '2021-02-21 15:26:09', '2021-02-21 15:26:09', '2022-02-21 08:26:09'),
('ac6e2652ee5f247bb92bad416acd1a9bae94e46c89dd57c6f80fffc1f805e06303e8afcd7e5c3dca', 27, 1, 'Personal Access Token', '[]', 1, '2021-02-21 15:26:44', '2021-02-21 15:26:44', '2022-02-21 08:26:44'),
('84566813e65d31ecf01722e9d97b77d53c189cc517f827117113d1bd0cb19d8eed6aaa24f32b42c2', 27, 1, 'Personal Access Token', '[]', 0, '2021-02-21 15:27:33', '2021-02-21 15:27:33', '2022-02-21 08:27:33'),
('ee9728287ce6a8f67beb61cbac1141e78442ef8d9c12a5b751eb71336edb3a5009c348632f9ff994', 16, 1, 'Personal Access Token', '[]', 0, '2021-02-22 20:01:21', '2021-02-22 20:01:21', '2022-02-22 13:01:21'),
('54be812bb22730e90e35f494d27ea3e2770153f42ab2427c683af6f0efcbda43b6b2fcca88ab49b3', 27, 1, 'Personal Access Token', '[]', 0, '2021-02-22 23:22:16', '2021-02-22 23:22:16', '2022-02-22 16:22:16'),
('988eab0742891688bdd0a32e3a92da5a2a3817f612d85ce5a8979c4fe9b3c241e33ff314af245382', 27, 1, 'Personal Access Token', '[]', 0, '2021-02-22 23:22:27', '2021-02-22 23:22:27', '2022-02-22 16:22:27'),
('aaaa9c60f3315691673710fe6532d6c7d3385396668e78fa757eb6a908c243cb439e2bc64548eeff', 16, 1, 'Personal Access Token', '[]', 0, '2021-02-22 23:41:21', '2021-02-22 23:41:21', '2022-02-22 16:41:21'),
('9c9a500a7902d5ea85522d1accf21f335c1d74416e99d96d267a27b537082ba47169447847041a9d', 16, 1, 'Personal Access Token', '[]', 0, '2021-02-22 23:41:30', '2021-02-22 23:41:30', '2022-02-22 16:41:30'),
('fa216ce1855fcd34e5396deeee5d8160a160073751bcf339b03ccb43eff7ac13f24a10c37dfcaee4', 1, 3, 'Personal Access Token', '[]', 0, '2021-02-23 15:33:42', '2021-02-23 15:33:42', '2022-02-23 08:33:42'),
('7742712f9911b8614aba748866d4851fca4d2c5dda55c1c85ff08f8dc5b4a2c2d30e45c2bbf23af9', 27, 3, 'Personal Access Token', '[]', 1, '2021-02-23 16:04:42', '2021-02-23 16:04:42', '2022-02-23 09:04:42'),
('9ac93b28e64c8c01db300dfb090f4b30665af4740cf7402527d5a11cbe08d35ab10498c9485a5fe5', 27, 3, 'Personal Access Token', '[]', 0, '2021-02-23 16:04:48', '2021-02-23 16:04:48', '2022-02-23 09:04:48'),
('8bc916048d2e7f12a6baacc39e42d1905439d6d9e1d7aa22194041b0d31a9aae63103246017a0b27', 16, 3, 'Personal Access Token', '[]', 1, '2021-02-23 16:35:13', '2021-02-23 16:35:13', '2022-02-23 09:35:13'),
('bd466aa0c894c0c1491ccbaa965a91e6eb06a8659750d2a915131b28f78233c96fe843822239d106', 16, 3, 'Personal Access Token', '[]', 0, '2021-02-23 16:35:22', '2021-02-23 16:35:22', '2022-02-23 09:35:22'),
('b051b40d85f4bd2fe67ee94ba82dd5767f1c48223c5e1a83ba1bd1a010897155530ab95e6b7eec46', 16, 3, 'Personal Access Token', '[]', 0, '2021-02-23 16:36:21', '2021-02-23 16:36:21', '2022-02-23 09:36:21'),
('083334b39e8968413675d45a87b873b4a63077599350aa8e79adb116dd8b656bb96503a25b3a1cf5', 27, 3, 'Personal Access Token', '[]', 1, '2021-02-23 16:46:11', '2021-02-23 16:46:11', '2022-02-23 09:46:11'),
('ab81d8f6ad565c0ae185fc3c13cb74bbd1988614ee3a040c0a76512b223aac017a0444ed5af2a214', 27, 3, 'Personal Access Token', '[]', 0, '2021-02-23 17:03:21', '2021-02-23 17:03:21', '2022-02-23 10:03:21'),
('8dab090f91f2d3c1dfb356c82986ce4d80cc93b54bcea8c1a2f154ec5b26293f8d3ac22f44c6af08', 16, 3, 'Personal Access Token', '[]', 0, '2021-02-23 17:04:07', '2021-02-23 17:04:07', '2022-02-23 10:04:07'),
('0a671a1ddd5b93da4c09fdb1f159c6bb71075c1fa5eecc6afc0e312c1662f2b64522a0c85fa40511', 17, 3, 'Personal Access Token', '[]', 0, '2021-02-23 17:10:56', '2021-02-23 17:10:56', '2022-02-23 10:10:56'),
('c8bb4a19eac84a604088fee1898fcb5d036c483521272a4db88ad0e2ca885dcf625383917a05fc72', 16, 3, 'Personal Access Token', '[]', 1, '2021-02-23 17:14:55', '2021-02-23 17:14:55', '2022-02-23 10:14:55'),
('3b2e84a48bbdf835c515ee6f29e21d1c9ca62025bffe3f76245d1fba40de6dac5fce423ce79eabc1', 20, 3, 'Personal Access Token', '[]', 1, '2021-02-23 17:16:59', '2021-02-23 17:16:59', '2022-02-23 10:16:59'),
('2ba49c55c1f003236de9ae420440e51085a69b469f94324fdc5bf80385765a1ab9a6fa49c677bf97', 20, 3, 'Personal Access Token', '[]', 0, '2021-02-23 17:17:19', '2021-02-23 17:17:19', '2022-02-23 10:17:19'),
('dabed54637c3de79b93b36f7e497cbe7770b67f6a80f268821cac665aca3b0f725061e73273fb73e', 20, 3, 'Personal Access Token', '[]', 0, '2021-02-23 17:25:00', '2021-02-23 17:25:00', '2022-02-23 10:25:00'),
('bb5a98d961106bfa86641e887399eebdaccd9d6a8c39473095c95ff783488071770bd0f0a18a6c33', 1, 3, 'Personal Access Token', '[]', 0, '2021-02-23 19:20:11', '2021-02-23 19:20:11', '2022-02-23 12:20:11'),
('f9378a368d4d04017946438b72af79ffc1834f1de940f11124fa38e837f0cdb22007e3af81c1304b', 3, 3, 'Personal Access Token', '[]', 1, '2021-02-23 19:20:15', '2021-02-23 19:20:15', '2022-02-23 12:20:15'),
('b12d681ec7eb8a540ef1d7582e40b55a2d8546b56a6672dbf7c246cddddcce28233b97c10956c0d6', 1, 3, 'Personal Access Token', '[]', 0, '2021-02-23 19:31:22', '2021-02-23 19:31:22', '2022-02-23 12:31:22'),
('1d2620fb05a7f5e76c66937055e960532f71e6713ce98ebae30bd1658e781bb604070bb1bc927968', 16, 3, 'Personal Access Token', '[]', 1, '2021-02-23 20:38:05', '2021-02-23 20:38:05', '2022-02-23 13:38:05'),
('58c814e38a2d5c4477e27d524cca2dcce2bf275500bd9f17c1bf90f942f9850c5ffb0de1234e47f9', 16, 3, 'Personal Access Token', '[]', 0, '2021-02-23 20:42:21', '2021-02-23 20:42:21', '2022-02-23 13:42:21'),
('5b8405c5147ae5254d482fbfd16841701920b3192f761c6d93fd01727944bf0db15c24476283ca57', 16, 3, 'Personal Access Token', '[]', 1, '2021-02-24 16:51:17', '2021-02-24 16:51:17', '2022-02-24 09:51:17'),
('a3379b3f8b08eb7c4b4f9e0cb13d87096d96310dc9627f63c6aa7c88274d2218fe11440d1d73dea2', 28, 3, 'Personal Access Token', '[]', 1, '2021-02-24 19:44:58', '2021-02-24 19:44:58', '2022-02-24 12:44:58'),
('a9df5d2db53fc65b37f98ba72fec414c0d8bdda0c6ed6b0cc9e861cd343fe6420cbbb747726a53a7', 28, 3, 'Personal Access Token', '[]', 0, '2021-02-24 19:46:10', '2021-02-24 19:46:10', '2022-02-24 12:46:10'),
('3fa76c768df38ba6110a3f469e9647a32e778a1d091b312b32763c01a181d77c139171dd9573b035', 29, 3, 'Personal Access Token', '[]', 1, '2021-02-24 19:48:44', '2021-02-24 19:48:44', '2022-02-24 12:48:44'),
('540afe0b2421469e3d22952db3d9ef9d9cba72074f5ed95fa050f4a8a1f6aa17075cba942fcb463c', 28, 3, 'Personal Access Token', '[]', 1, '2021-02-24 19:50:06', '2021-02-24 19:50:06', '2022-02-24 12:50:06'),
('60f29f8ec3785dd9c809c795537f5901f05a28cc127b1bf27d47941bb85e4782e6a2126bbaf3a1bc', 30, 3, 'Personal Access Token', '[]', 1, '2021-02-24 19:56:41', '2021-02-24 19:56:41', '2022-02-24 12:56:41'),
('d9f7be1b1d39c6c426ea48fc434af532e892349b2832217b13229ce0cda191adf28a7444a246d305', 30, 3, 'Personal Access Token', '[]', 1, '2021-02-24 20:02:29', '2021-02-24 20:02:29', '2022-02-24 13:02:29'),
('b24198b5660a9f0260c2645392e8fc4fb3698cc1135732677607ffd2bec7de765342dfaf88b609ed', 30, 3, 'Personal Access Token', '[]', 1, '2021-02-24 20:16:12', '2021-02-24 20:16:12', '2022-02-24 13:16:12'),
('d127630929dfa9c6f9f49366dfc39e2dc99f2fb747ef11527d93afcf4127b486c83d0dd76240836a', 30, 3, 'Personal Access Token', '[]', 1, '2021-02-25 12:05:29', '2021-02-25 12:05:29', '2022-02-25 05:05:29'),
('d0f6365926bd290524388dcd108db1071270461cb7f4d8ef69713e54908e53d6d16b982f297c9b54', 29, 3, 'Personal Access Token', '[]', 1, '2021-02-25 12:06:27', '2021-02-25 12:06:27', '2022-02-25 05:06:27'),
('562f2139e118e93b57bdf083cd9710e13213fad736213c154078a54a54b9dd722c66655234cd9355', 30, 3, 'Personal Access Token', '[]', 0, '2021-02-25 12:30:31', '2021-02-25 12:30:31', '2022-02-25 05:30:31'),
('536f666c1fe690efef7429cf1c84608df524fe642565274d1f006ddf1f2ff89ea35a838b2f9274e9', 16, 3, 'Personal Access Token', '[]', 0, '2021-02-25 13:20:06', '2021-02-25 13:20:06', '2022-02-25 06:20:06'),
('096b6e7c89b90a80e8e3dde90b10fc1fa8176286777045ca7d349d7ea0e1d25799bb197f3a5b5311', 1, 3, 'Personal Access Token', '[]', 0, '2021-02-25 14:16:58', '2021-02-25 14:16:58', '2022-02-25 07:16:58'),
('424def0570bbdb1df3524200e15670b5211ff864b61077370f451d6b8227398fd71c9ac5f73fb917', 30, 3, 'Personal Access Token', '[]', 1, '2021-02-26 11:45:34', '2021-02-26 11:45:34', '2022-02-26 04:45:34'),
('8b7a304bdb3c9f921a1b5c2a431d392b0c170eaf96b2de0d71db8e4618851d697113c51f54a05d47', 30, 3, 'Personal Access Token', '[]', 1, '2021-02-26 17:18:07', '2021-02-26 17:18:07', '2022-02-26 10:18:07'),
('ac03a2d1b63071014bbd89d06c9ce9d9964f9fe8430f175e10ee5b230571ed52118411b17e5898ef', 31, 3, 'Personal Access Token', '[]', 0, '2021-02-28 17:24:32', '2021-02-28 17:24:32', '2022-02-28 10:24:32'),
('74cd8d3c22c22368b0f3c5f8430148632b49aae5795efd1e9d678c8f4c8cef42d19052deef760488', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-01 18:26:48', '2021-03-01 18:26:48', '2022-03-01 11:26:48'),
('e804eea5b873abe825b8e504e44eb4b87fe2e73f589b7a609d10ee76e4ef5b41605ed68f8a8ad84f', 32, 3, 'Personal Access Token', '[]', 0, '2021-03-01 18:27:53', '2021-03-01 18:27:53', '2022-03-01 11:27:53'),
('21d1315268ba8d5f1ad62dda32ddac6ebb4a116c7f6c76b09bca465e9a8297a019a50fe07912458a', 10, 3, 'Personal Access Token', '[]', 0, '2021-03-01 18:45:16', '2021-03-01 18:45:16', '2022-03-01 11:45:16'),
('a42ff1a5e1a0a4befccb636930356bc385375f313167598aa3e4a35024068fb22534e0d2140c14ef', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-01 18:46:10', '2021-03-01 18:46:10', '2022-03-01 11:46:10'),
('6254bbd178f93ebd1ddb4a958efa294f95fa800c25b70cb8e00b9397234d94c4a6838a4e4cc111f4', 16, 3, 'Personal Access Token', '[]', 1, '2021-03-01 22:20:28', '2021-03-01 22:20:28', '2022-03-01 15:20:28'),
('549b458afdc08840b9e64aa1b26ef9ba2cc50d44388e697caac4902990ddd0f5d8b8c5d70b918400', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-01 22:21:31', '2021-03-01 22:21:31', '2022-03-01 15:21:31'),
('e00e7b149843e2b4f5319a13a192e5d7c4260cc5c71d8e7c5f33f142fd681331e9c76c86a4a3b0a2', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-01 22:33:57', '2021-03-01 22:33:57', '2022-03-01 15:33:57'),
('327644eb66a133a4c46b6db7d73bcd83295f480558d03e69120db85ae535f4dc77c2fd206d80ae3c', 17, 3, 'Personal Access Token', '[]', 0, '2021-03-02 00:28:18', '2021-03-02 00:28:18', '2022-03-01 17:28:18'),
('d22e40b3918ed9cba1a61cc55de0742c0eb6ca2f7f3d6d38a14640bced343e967bf2ea20e2856e2d', 33, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:32:02', '2021-03-02 11:32:02', '2022-03-02 04:32:02'),
('072933b0199b6dad4a72f2deba7771e1840d7faac9dba6a64c8beabceaad43a8f6eeabec945db81c', 34, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:46:46', '2021-03-02 11:46:46', '2022-03-02 04:46:46'),
('c1bb57208ad37b6f04f2cf1191030c5e4a7b5da9a7f5573e463e83e57a95ee09fa00842af9121d79', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:57:04', '2021-03-02 11:57:04', '2022-03-02 04:57:04'),
('df9af9bec39f973c8db1659639103ba8c5460e58d1c79fd740d12fec2451963f3c377525140bb398', 30, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:57:47', '2021-03-02 11:57:47', '2022-03-02 04:57:47'),
('2c2f8fa621fda763a5851e0dd4c2a7f65169bce7baefbd0be9fb6dcc1eecc913ed6b25fdb4af8464', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:10:12', '2021-03-02 12:10:12', '2022-03-02 05:10:12'),
('439bbb38689e6daf1f613679a6b3831d420270a63fe870aa97e4ba85c0d50c7a4471593de817f422', 35, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:11:07', '2021-03-02 12:11:07', '2022-03-02 05:11:07'),
('11444944bb9255aa4304e394857d35f0b599f9206093ffeb59ebbfb4f7b50192f03dff4aab369f57', 36, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:14:24', '2021-03-02 12:14:24', '2022-03-02 05:14:24'),
('ddeb3d8854cb1a8425ea58b5f6d20d4d42027665ff903403f70d6410f947034870461098f5414e48', 36, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:14:46', '2021-03-02 12:14:46', '2022-03-02 05:14:46'),
('70ab1fec1e1620a657d3bb75c054262d423f0995ef242146296aa65c220640e850cfd537c4ea2572', 36, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:15:32', '2021-03-02 12:15:32', '2022-03-02 05:15:32'),
('a685b4ae1d6b1f258eae2dcd4a0dea0557ec7528fa69131e051a63e3cf4a7a74c290033f411fa0c5', 37, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:15:47', '2021-03-02 12:15:47', '2022-03-02 05:15:47'),
('78d342e870a212a6fd1815f18d2379bf8c335f34fac2e1bc62b8343992cf53a7a33a1a42b4e76a55', 10, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:26:11', '2021-03-02 12:26:11', '2022-03-02 05:26:11'),
('3ea77a235f333d0f75167dd1c1eff2ec10eff7a5523ac6361fc8ea338b93a93d5eb261fed58fa28d', 10, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:27:29', '2021-03-02 12:27:29', '2022-03-02 05:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'exoOFSOzkhBLGdYONWogK19HtEg0fJZNmc2YWNbh', NULL, 'http://localhost', 1, 0, 0, '2021-02-19 22:52:49', '2021-02-19 22:52:49'),
(2, NULL, 'Laravel Password Grant Client', '0EyJJfOVB1MeUgXF8fSfW3ylSOjYl7WVnLpPZnLF', 'users', 'http://localhost', 0, 1, 0, '2021-02-19 22:52:49', '2021-02-19 22:52:49'),
(3, NULL, 'autotradia Personal Access Client', 'CGseICBFP8DqFMONsDNrLMqrapf0dAx8ltwjFyHX', NULL, 'http://localhost', 1, 0, 0, '2021-02-23 15:31:17', '2021-02-23 15:31:17'),
(4, NULL, 'autotradia Password Grant Client', 'ufUUcXSQSy7Av42C4oXTEJpSPbfOvdZ1eHp0AL2b', 'users', 'http://localhost', 0, 1, 0, '2021-02-23 15:31:17', '2021-02-23 15:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-19 22:52:49', '2021-02-19 22:52:49'),
(2, 3, '2021-02-23 15:31:17', '2021-02-23 15:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durations` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_ads` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `slug`, `durations`, `price`, `max_ads`, `picture`, `sale_price`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basic', 'basic', '3', '500', '5', 'Pot2.svg', NULL, 'A simple start for everyone', '1', NULL, '2021-02-24 20:36:20', NULL),
(2, 'Standard', 'standard', '3', '800', '8', 'Pot2.svg', NULL, 'For small to medium dealers', '1', NULL, '2021-02-24 20:34:05', NULL),
(3, 'Enterprise', 'enterprise', '5', '1000', '10', 'Pot2.svg', NULL, 'Solution for big organizations', '1', NULL, '2021-02-24 20:34:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'anastacio14@example.com', '$2y$10$uEIWgJbW2OhcClw96MZg0unwFI/buVBPCkpCWoMteZtXxf9X.jJ2y', '2021-02-23 15:22:48', NULL),
(2, 'ia4473488@gmail.com', 'q5ZJN70HOMz9KUSBtxPli2MU5YKHUUTmW0D6AMttEVDQGlvB6jqkSiH0UYJ5', '2021-02-23 20:37:31', '2021-02-23 20:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'list', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(2, 'create', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(3, 'edit', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(4, 'delete', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(5, 'view', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(6, 'pages', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(7, 'sittings', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(8, 'dashboard', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(9, 'roles', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(10, 'permissions', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(11, 'users', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(12, 'orders', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(13, 'product_review_report', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(14, 'buy', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(15, 'status_update', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(16, 'finance', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05'),
(17, 'marketing', 'web', '2021-02-19 22:53:05', '2021-02-19 22:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_used` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `package_id`, `transaction_id`, `ad_used`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(85265, 16, 3, NULL, 1, '2021-02-23 10:26:17', '1', '2021-02-23 17:11:51', '2021-02-23 17:26:17'),
(900083, 30, 1, NULL, 1, '2021-02-24 13:24:03', '1', '2021-02-24 20:23:29', '2021-02-24 20:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dealer_id` bigint(20) UNSIGNED NOT NULL,
  `stars` int(11) NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'customer', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `slug`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'facebook', 'facebook', '1', NULL, NULL),
(2, 'instagram', 'instagram', 'instagram', '1', NULL, NULL),
(3, 'twitter', 'twitter', 'twitter', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cs',
  `is_dealer` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `provider`, `provider_id`, `password`, `role_id`, `is_dealer`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(30, 'Asad ullah', 'asaddir5566@gmail.com', '2021-02-24 00:59:20', 'google', '104921464395101859325', NULL, 'cs', 0, 1, NULL, '2021-02-24 19:56:40', '2021-02-24 19:56:40'),
(29, 'Muhammad Abdullah', 'autotradia@gmail.com', NULL, 'google', '105832561071851988751', NULL, 'cs', 0, 1, NULL, '2021-02-24 19:48:44', '2021-02-24 19:48:44'),
(10, 'Kiera Bradtke', 'jaskolski.gilbert@example.org', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'BNo2zEyFWB', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(9, 'Florian Marquardt', 'beer.cade@example.org', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'XeONVCIX3P', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(8, 'Ceasar Kuhlman', 'rowan02@example.net', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'jYqpSuBqO0', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(7, 'Kathryn Aufderhar', 'reilly.dayton@example.org', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'k5ZhCpaWqw', '2021-02-16 09:51:16', '2021-02-23 16:50:06'),
(6, 'Dr. Lenny Kemmer III', 'al.lowe@example.com', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'RVJmho9GC5', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(5, 'Lucio Kautzer', 'antonetta.keeling@example.org', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, '3nCjF4WfD4', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(4, 'Kellie Jenkins V', 'cremin.wilfred@example.net', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'NSgNDThuxU', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(3, 'Ruby Koch', 'rogahn.alyce@example.net', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'nL3qmAD033', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(1, 'Auto tradia', 'anastacio14@example.com', '2021-02-19 14:42:21', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a', 0, 1, 'eIkpeDx9qIF796pBDu6SXV6GQaFxwZQZc0BD2pNc6ELOsebPUHQWgmtp3u19', '2021-02-16 09:51:16', '2021-02-23 19:06:32'),
(2, 'Mr. Tod Cummerata III', 'hahn.jonathon@example.com', '2021-02-16 09:51:16', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'gQq9Mv6osq', '2021-02-16 09:51:16', '2021-02-16 09:51:16'),
(12, 'Asad Khan', 'asad@gmail.com', '2021-02-16 09:51:17', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, 'dUx8jA0pAa', NULL, NULL),
(13, 'asad4', 'as3ad@gmail.com', NULL, NULL, NULL, '$2y$10$b..c66nL/XoDLsDVViDI3uIPA29LFkYfv5CBn.lB7uKQG8/4COpGK', 'cs', 0, 1, NULL, '2021-02-16 14:13:15', '2021-02-16 14:13:15'),
(14, 'test', 'test@test.com', NULL, NULL, NULL, '$2y$10$0t6fnnGEALnTLS83bs09iOVPr9f3EeVK611d/FrVRHW61NAgG9ybq', 'cs', 0, 1, NULL, '2021-02-16 14:16:42', '2021-02-16 14:16:42'),
(15, 'test', 'test@test213.com', NULL, NULL, NULL, '$2y$10$EOhOsBGMoOM1MnZIXdVqu.vePIAYOzih9HsGnd/91TR6xsGVIRYSa', 'cs', 0, 1, NULL, '2021-02-17 07:36:28', '2021-02-17 07:36:28'),
(16, 'Imad Ali', 'ia4473488@gmail.com', '2021-02-23 21:56:21', NULL, NULL, '$2y$10$JL.Q.34Mh/lKd9zdLuqjdOPGZ5rTHgkl6LQFtIhLYqt8L2lFCjHf6', 'cs', 0, 1, NULL, '2021-02-17 08:20:06', '2021-02-23 16:50:43'),
(17, 'Ayza', 'ayizamalik52@gmail.com', '2021-02-23 21:57:08', NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs', 0, 1, NULL, '2021-02-17 08:51:01', '2021-02-17 08:51:01'),
(18, 'bbb', 'bb@gmail.com', NULL, NULL, NULL, '$2y$10$EALvAeudkdWIMR1IkkfdAe/4glw7vTLbRw0IFfs5oYghUicPulTPe', 'cs', 0, 1, NULL, '2021-02-17 08:58:27', '2021-02-17 08:58:27'),
(19, 'Abdul basit', 'abasitgapdynamics@gmail.com', NULL, NULL, NULL, '$2y$10$zdHA.Jji6WxRh10BoLBm0eNF15z4xPWi.5kZPPVEOo/vck.SHqcOS', 'cs', 0, 1, NULL, '2021-02-17 09:45:30', '2021-02-17 09:45:30'),
(20, 'Hassan Bokhari', 'hbokhari18@gmail.com', '2021-02-23 22:24:20', NULL, NULL, '$2y$10$XC9.t6OjBxTFl2EBtZ6lI.UHQn/aFQYf1LSywDdDfriwxrvr.3mKq', 'cs', 0, 1, NULL, '2021-02-17 10:12:06', '2021-02-17 10:12:06'),
(21, 'ljlajsljsladjljsdal', 'aaaaasassa@klol.com', NULL, NULL, NULL, '$2y$10$ht.8OJFVV10Oo2.ZeuqHJ.4ISHytBS8WpFQdOctWWLpWRQXKmPqv.', 'cs', 0, 1, NULL, '2021-02-17 11:03:41', '2021-02-17 11:03:41'),
(22, 'Areej Hashmi', 'areejhashmi@gap-dynamics', NULL, NULL, NULL, '$2y$10$fGRRVQtglUm539lzdeUGq.jH84mpqdGiynLfUIW0mTv0D.s.PdJiK', 'cs', 0, 1, NULL, '2021-02-17 11:31:23', '2021-02-17 11:31:23'),
(24, 'Abdullah Rohail', 'abdullahrohail@gap-dynamics.com', NULL, 'google', '102635227640723704234', NULL, 'cs', 0, 1, NULL, '2021-02-19 15:20:16', '2021-02-19 15:20:16'),
(25, 'NIL', 'niL@gmail.com', NULL, NULL, NULL, '$2y$10$2W3NSbiIt61ygn8minTcM.EPd0hSZ9KExiPI1jcAqz0B19C9EcF7e', 'cs', 0, 1, NULL, '2021-02-19 23:15:40', '2021-02-19 23:15:40'),
(26, 'B khan', 'ac12@gmail.com', NULL, NULL, NULL, '$2y$10$ffSDrPqB3TYDsJSBtxr0z.saMrukdx9zMlQ0iJ92iAgga7V4ujRLq', 'cs', 0, 1, NULL, '2021-02-19 23:17:07', '2021-02-19 23:17:07'),
(27, 'Dad', 'abdulazizibrahim94@gmail.com', '2021-02-23 21:56:43', NULL, NULL, '$2y$10$9QA8dq7hOx6sE0pWUAS1meBIpb1OP0TcaAdpQb61ZFtcHI1TjFxAK', 'cs', 0, 1, NULL, '2021-02-21 15:26:09', '2021-02-21 15:26:09'),
(31, 'hassan', 'hassan@gmail.om', NULL, NULL, NULL, '$2y$10$zI1o5xhVFWmSRECBnxIsxuUvJKRmGbtyalNyf1GjXkKS5yz5p.8vm', 'cs', 0, 1, NULL, '2021-02-28 17:24:31', '2021-02-28 17:24:31'),
(32, 'Areej', 'areej123@gmail.com', NULL, NULL, NULL, '$2y$10$ud0LyNNdn91IdYytZVj0leDWN0MIxeCs9Ly0uEj4VSSHeZt9tA91y', 'cs', 0, 1, NULL, '2021-03-01 18:27:53', '2021-03-01 18:27:53'),
(33, 'Imad Ali', 'imadalley1@gmail.com', NULL, NULL, NULL, '$2y$10$M8z63r37ndtAd/lwfCdiYeVoJmMCP0YTYEAEX3BJ/.rzFwMws6gm.', 'cs', 0, 1, NULL, '2021-03-02 11:32:01', '2021-03-02 11:32:01'),
(36, 'asad', 'asadu047@gmail.com', NULL, NULL, NULL, '$2y$10$Pf8miybKIjrJ5bBaWv6PMulp2drEWsbc64aS7ZC8skDZEtgxXwKZ2', 'cs', 0, 1, NULL, '2021-03-02 12:14:24', '2021-03-02 12:14:24'),
(37, 'Adnan Ashraf', 'Adnan@gmail.com', NULL, NULL, NULL, '$2y$10$q7BIAine7mSk7c3LIRIuX.6sA4zHuee35vLkw04M1IsjvHxo5U9Kq', 'cs', 0, 1, NULL, '2021-03-02 12:15:47', '2021-03-02 12:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dealing_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `avatar`, `user_id`, `dealing_name`, `address`, `description`, `city`, `state`, `gender`, `dob`, `country`, `phone`, `zip`, `created_at`, `updated_at`) VALUES
(1, '186037.png', 17, 'Malik', NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, '2021-02-17 09:30:56', '2021-02-17 10:08:51'),
(2, 'logo golden.png', 1, 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-18 06:55:23', '2021-02-25 18:51:15'),
(3, '', 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-23 21:22:30', '2021-02-23 21:22:30'),
(4, 'asad.jpg', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-24 20:03:26', '2021-02-24 20:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `wash_services`
--

CREATE TABLE `wash_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wash_services`
--

INSERT INTO `wash_services` (`id`, `fullname`, `email`, `phone`, `state`, `city`, `full_address`, `car_name`, `car_model`, `type`, `booking_date`, `booking_time`, `additional_notes`, `created_at`, `updated_at`) VALUES
(1, 'Imad Ali', 'ia4473488@gmail.com', '0306-0570134', 'Punjab', 'Rawalpindi', 'Bahria Town Phase 4, civic center', 'City', '2020', 'exterior', '24-02-21', '12:00 PM', 'Full car detailing', '2021-02-23 21:18:10', '2021-02-23 21:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `user_id`, `ad_id`, `created_at`, `updated_at`) VALUES
(7, 16, 2, '2021-02-25 13:20:23', '2021-02-25 13:20:23'),
(2, 17, 2, '2021-02-23 19:28:04', '2021-02-23 19:28:04'),
(3, 17, 1, '2021-02-23 19:28:06', '2021-02-23 19:28:06'),
(4, 17, 4, '2021-02-23 19:28:27', '2021-02-23 19:28:27'),
(5, 3, 7, '2021-02-23 20:26:26', '2021-02-23 20:26:26'),
(8, 16, 3, '2021-02-25 13:20:30', '2021-02-25 13:20:30'),
(9, 16, 4, '2021-02-25 13:20:36', '2021-02-25 13:20:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ads_slug_unique` (`slug`),
  ADD KEY `ads_user_id_foreign` (`user_id`);

--
-- Indexes for table `ad_car_features`
--
ALTER TABLE `ad_car_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_car_features_ad_id_foreign` (`ad_id`),
  ADD KEY `ad_car_features_car_feature_id_foreign` (`car_feature_id`);

--
-- Indexes for table `ad_categories`
--
ALTER TABLE `ad_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_categories_ad_id_foreign` (`ad_id`),
  ADD KEY `ad_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `ad_galleries`
--
ALTER TABLE `ad_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_galleries_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `assign_news_categories`
--
ALTER TABLE `assign_news_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_news_categories_news_id_foreign` (`news_id`),
  ADD KEY `assign_news_categories_news_category_id_foreign` (`news_category_id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_details_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `car_detail_dropdowns`
--
ALTER TABLE `car_detail_dropdowns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_detail_dropdowns_make_unique` (`make`);

--
-- Indexes for table `car_features`
--
ALTER TABLE `car_features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_features_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description_helpers`
--
ALTER TABLE `description_helpers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_eventcat_id_foreign` (`eventcat_id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_comments`
--
ALTER TABLE `event_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_comments_user_id_foreign` (`user_id`),
  ADD KEY `event_comments_event_id_foreign` (`event_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_ad`
--
ALTER TABLE `featured_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_cars`
--
ALTER TABLE `hire_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `import_a_cars`
--
ALTER TABLE `import_a_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection_reports`
--
ALTER TABLE `inspection_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instant_car_feature`
--
ALTER TABLE `instant_car_feature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instant_car_feature_instant_sell_car_id_foreign` (`instant_sell_car_id`),
  ADD KEY `instant_car_feature_car_feature_id_foreign` (`car_feature_id`);

--
-- Indexes for table `instant_sell_cars`
--
ALTER TABLE `instant_sell_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_pages`
--
ALTER TABLE `legal_pages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_comments`
--
ALTER TABLE `news_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_comments_user_id_foreign` (`user_id`),
  ADD KEY `news_comments_news_id_foreign` (`news_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purchases_transaction_id_unique` (`transaction_id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_package_id_foreign` (`package_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_dealer_id_foreign` (`dealer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `wash_services`
--
ALTER TABLE `wash_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wish_lists_user_id_foreign` (`user_id`),
  ADD KEY `wish_lists_ad_id_foreign` (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ad_car_features`
--
ALTER TABLE `ad_car_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

--
-- AUTO_INCREMENT for table `ad_categories`
--
ALTER TABLE `ad_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ad_galleries`
--
ALTER TABLE `ad_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `assign_news_categories`
--
ALTER TABLE `assign_news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `car_detail_dropdowns`
--
ALTER TABLE `car_detail_dropdowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car_features`
--
ALTER TABLE `car_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `description_helpers`
--
ALTER TABLE `description_helpers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_comments`
--
ALTER TABLE `event_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_ad`
--
ALTER TABLE `featured_ad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hire_cars`
--
ALTER TABLE `hire_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_a_cars`
--
ALTER TABLE `import_a_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_reports`
--
ALTER TABLE `inspection_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `instant_car_feature`
--
ALTER TABLE `instant_car_feature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instant_sell_cars`
--
ALTER TABLE `instant_sell_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `legal_pages`
--
ALTER TABLE `legal_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_comments`
--
ALTER TABLE `news_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=900084;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wash_services`
--
ALTER TABLE `wash_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
