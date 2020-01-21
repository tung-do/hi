-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 07:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Citizen', 1, '2019-11-01 00:00:25', '2019-11-07 23:54:57'),
(11, 'Casio', 1, '2019-11-01 00:20:52', '2019-11-01 03:13:24'),
(48, 'Seiko', 1, '2019-11-05 01:43:04', '2019-11-05 01:43:04'),
(51, 'Mido', 1, '2019-11-05 01:44:16', '2019-11-08 00:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_05_18_145809_create_categories_table', 1),
(4, '2019_05_18_145857_create_product_types_table', 1),
(5, '2019_05_18_145917_create_products_table', 1),
(6, '2019_05_18_145941_create_orders_table', 1),
(7, '2019_05_18_150001_create_order_details_table', 1),
(8, '2019_05_18_150027_create_contacts_table', 1),
(9, '2019_05_18_150213_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `namekh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachikh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonekh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monney` double NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `code_order`, `idUser`, `namekh`, `diachikh`, `emailkh`, `phonekh`, `monney`, `message`, `status`, `created_at`, `updated_at`) VALUES
(21, 'code1655586658', NULL, 'don 1 hang', '1', '1@', '1', 300000, NULL, 2, '2019-11-13 01:24:39', '2019-11-13 01:40:23'),
(22, 'code1801703516', NULL, 'don 2 hang', '2', '2@', '2', 700000, NULL, 2, '2019-11-13 01:25:18', '2019-11-13 01:28:28'),
(23, 'code1697975851', NULL, '4', '4', '4', '4', 300000, NULL, 2, '2019-11-13 01:30:39', '2019-11-13 01:31:28'),
(24, 'code1741732652', NULL, 'tung', 'dc', 'tungshop6789@gmail.com', '1', 300000, NULL, 3, '2019-11-13 03:02:53', '2019-11-13 04:16:25'),
(25, 'code2040094788', NULL, 'tùng', 'dong ket', 'thanhtung.contact@gmail.com', '0827438683', 500000, NULL, 3, '2019-11-13 03:34:05', '2019-11-13 04:16:26'),
(26, 'code921600294', NULL, 'tung 2', 'dong ket', 'thanhtung.contact@gmail.com', '08888888', 500000, NULL, 3, '2019-11-13 03:37:58', '2019-11-13 04:16:27'),
(27, 'code194722478', NULL, 'a', 'a', 'dottung6789@gmail.com', '2098', 500000, NULL, 3, '2019-11-13 03:45:56', '2019-11-13 04:16:29'),
(28, 'code1725589560', NULL, 'tung', 'dc', 'dottung6789@gmail.com', '355348083813422', 25000000, NULL, 3, '2019-11-13 03:47:20', '2019-11-13 04:16:31'),
(29, 'code962746010', NULL, 'tung', '3', 'dottung6789@gmail.com', '3', 500000, NULL, 3, '2019-11-13 03:47:48', '2019-11-13 04:16:34'),
(30, 'code2140094648', NULL, 'tung', '4', 'dottung6789@gmail.com', '4', 500000, NULL, 3, '2019-11-13 04:09:02', '2019-11-13 04:16:36'),
(31, 'code1204558153', NULL, 'tung', '0', 'thanhtung.contact@gmail.com', '0', 200000, NULL, 3, '2019-11-13 04:10:01', '2019-11-13 04:16:37'),
(32, 'code747944955', NULL, '1', '1', 'dothanhtung12111998@gmail.com', '1', 25000000, NULL, 1, '2019-11-13 04:17:04', '2019-11-13 04:27:58'),
(33, 'code423795640', NULL, 'tung', 'dong ket', 'dothanhtung12111998@gmail.com', '0827438683', 25000000, NULL, 0, '2019-11-13 04:22:57', '2019-11-13 04:22:57'),
(34, 'code549802810', NULL, 'tung', '0', 'dothanhtung12111998@gmail.com', '355348083813422', 250000, NULL, 3, '2019-11-13 04:32:12', '2019-11-13 04:33:03'),
(35, 'code1324130953', NULL, 'tung', '1', 'tungshop6789@gmail.com', '355348083813422', 25000000, NULL, 0, '2019-11-13 04:32:58', '2019-11-13 04:32:58'),
(36, 'code365736920', NULL, 'moi', 'moi', 'dothanhtung12111998@gmail.com', 'moi', 500000, NULL, 0, '2019-11-13 04:33:57', '2019-11-13 04:33:57'),
(37, 'code540664131', NULL, 'tung', 'lopuihubjb', 'dothanhtung12111998@gmail.com', '0827438683', 91000000, NULL, 0, '2019-11-16 01:46:06', '2019-11-16 01:46:06'),
(38, 'code408718961', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:27', '2020-01-20 22:59:27'),
(39, 'code355391936', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:34', '2020-01-20 22:59:34'),
(40, 'code1922964990', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:37', '2020-01-20 22:59:37'),
(41, 'code1718792965', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:40', '2020-01-20 22:59:40'),
(42, 'code1308658659', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:43', '2020-01-20 22:59:43'),
(43, 'code356936695', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:46', '2020-01-20 22:59:46'),
(44, 'code1374209294', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:50', '2020-01-20 22:59:50'),
(45, 'code625747968', NULL, 'tung', 'dong ket', 'thanhtung.contact@gmail.com', '6940568305987094567', 33000000, NULL, 0, '2020-01-20 22:59:53', '2020-01-20 22:59:53'),
(46, 'code184048383', NULL, 'ytrew', 'dong ket', 'thanhtung.contact@gmail.com', '85678568', 33000000, NULL, 0, '2020-01-20 23:00:55', '2020-01-20 23:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(10) UNSIGNED NOT NULL,
  `idOrder` int(255) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `code_oder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameProduct` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `idOrder`, `idProduct`, `code_oder`, `nameProduct`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(20, 21, 20, 'code1655586658', 'Đồng hồ trẻ em Q&Q Citizen VQ13J-009Y', 1, 300000, '2019-11-13 01:24:39', '2019-11-13 01:24:39'),
(21, 22, 18, 'code1801703516', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 01:25:18', '2019-11-13 01:25:18'),
(22, 22, 14, 'code1801703516', 'Đồng hồ Casio F201WA-9', 1, 200000, '2019-11-13 01:25:18', '2019-11-13 01:25:18'),
(23, 23, 20, 'code1697975851', 'Đồng hồ trẻ em Q&Q Citizen VQ13J-009Y', 1, 300000, '2019-11-13 01:30:39', '2019-11-13 01:30:39'),
(24, 24, 20, 'code1741732652', 'Đồng hồ trẻ em Q&Q Citizen VQ13J-009Y', 1, 300000, '2019-11-13 03:02:53', '2019-11-13 03:02:53'),
(25, 25, 18, 'code2040094788', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 03:34:05', '2019-11-13 03:34:05'),
(26, 26, 18, 'code921600294', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 03:37:58', '2019-11-13 03:37:58'),
(27, 27, 18, 'code194722478', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 03:45:56', '2019-11-13 03:45:56'),
(28, 28, 39, 'code1725589560', 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', 1, 25000000, '2019-11-13 03:47:21', '2019-11-13 03:47:21'),
(29, 29, 18, 'code962746010', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 03:47:48', '2019-11-13 03:47:48'),
(30, 30, 18, 'code2140094648', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 04:09:02', '2019-11-13 04:09:02'),
(31, 31, 14, 'code1204558153', 'Đồng hồ Casio F201WA-9', 1, 200000, '2019-11-13 04:10:01', '2019-11-13 04:10:01'),
(32, 32, 40, 'code747944955', 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', 1, 25000000, '2019-11-13 04:17:04', '2019-11-13 04:17:04'),
(33, 33, 39, 'code423795640', 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', 1, 25000000, '2019-11-13 04:22:58', '2019-11-13 04:22:58'),
(34, 34, 40, 'code549802810', 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', 1, 25000000, '2019-11-13 04:32:12', '2019-11-13 04:32:12'),
(35, 35, 40, 'code1324130953', 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', 1, 25000000, '2019-11-13 04:32:58', '2019-11-13 04:32:58'),
(36, 36, 18, 'code365736920', 'Đồng hồ Q&Q Citizen VQ13J-004Y', 1, 500000, '2019-11-13 04:33:57', '2019-11-13 04:33:57'),
(37, 37, 37, 'code540664131', 'Đồng hồ Mido Commander M021.626.36.051.00', 1, 33000000, '2019-11-16 01:46:06', '2019-11-16 01:46:06'),
(38, 37, 34, 'code540664131', 'Đồng hồ Mido Commander M027.408.11.041.00', 1, 33000000, '2019-11-16 01:46:06', '2019-11-16 01:46:06'),
(39, 37, 40, 'code540664131', 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', 1, 25000000, '2019-11-16 01:46:06', '2019-11-16 01:46:06'),
(40, 38, 34, 'code408718961', 'Đồng hồ Mido Commander M027.408.11.041.00', 1, 33000000, '2020-01-20 22:59:27', '2020-01-20 22:59:27'),
(41, 46, 34, 'code184048383', 'Đồng hồ Mido Commander M027.408.11.041.00', 1, 33000000, '2020-01-20 23:00:55', '2020-01-20 23:00:55');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idProductStyle` int(11) NOT NULL,
  `idSex` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `price`, `image`, `idCategory`, `idProductStyle`, `idSex`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Đồng hồ Casio MQ38-9A', '<p>Đồng hồ&nbsp;<strong>Casio mq38-9a</strong>&nbsp;với thiết kế mặt chữ nhật trẻ trung , c&aacute; t&iacute;nh, năng động sẽ gi&uacute;p bạn tự tin thể hiện c&aacute; t&iacute;nh v&agrave; phong c&aacute;ch ri&ecirc;ng của bản th&acirc;n.</p>\r\n\r\n<p><strong>Đặc điểm kỹ thuật:</strong></p>\r\n\r\n<p><strong>-&nbsp;</strong>Vỏ: Nhựa mềm.</p>\r\n\r\n<p>- D&acirc;y: Nhựa.</p>\r\n\r\n<p>- Mặt nhựa pha kho&aacute;ng chất tăng độ cứng.</p>\r\n\r\n<p>- K&iacute;ch thước (cm):&nbsp;3,4 x 2,7 x 0,7.</p>\r\n\r\n<p>- Khối lượng: 19g.</p>\r\n\r\n<p>- Khả năng chống nước cơ bản: 30 m&eacute;t( rửa tay, đi mưa).</p>\r\n\r\n<p>- Pin: 2 năm.</p>', 10, 390000, '1.jpg', 11, 66, 5, 1, '2019-11-07 23:01:48', '2019-11-08 04:04:49'),
(9, 'Đồng hồ Casio MQ27-1B', '<p>Đồng hồ&nbsp;<strong>Casio mq27-1b</strong>&nbsp;với thiết kế mặt chữ nhật trẻ trung , c&aacute; t&iacute;nh, năng động sẽ gi&uacute;p bạn tự tin thể hiện c&aacute; t&iacute;nh v&agrave; phong c&aacute;ch ri&ecirc;ng của bản th&acirc;n.</p>\r\n\r\n<p><strong>Đặc điểm kỹ thuật:</strong></p>\r\n\r\n<p><strong>-&nbsp;</strong>Vỏ: Nhựa mềm.</p>\r\n\r\n<p>- D&acirc;y: Nhựa.</p>\r\n\r\n<p>- Mặt nhựa pha kho&aacute;ng chất tăng độ cứng.</p>\r\n\r\n<p>- K&iacute;ch thước (cm):&nbsp;3,4 x 2,7 x 0,7.</p>\r\n\r\n<p>- Khối lượng: 19g.</p>\r\n\r\n<p>- Khả năng chống nước cơ bản: 30 m&eacute;t( rửa tay, đi mưa).</p>\r\n\r\n<p>- Pin: 2 năm.</p>', 12, 370000, 'MQ-27-1B-9.jpg', 11, 66, 3, 1, '2019-11-07 23:24:57', '2019-11-08 08:28:43'),
(10, 'Đồng hồ Casio MQ27-7B', '<p>Đồng hồ&nbsp;<strong>Casio MQ27-7B</strong>&nbsp;với thiết kế mặt chữ nhật trẻ trung , c&aacute; t&iacute;nh, năng động sẽ gi&uacute;p bạn tự tin thể hiện c&aacute; t&iacute;nh v&agrave; phong c&aacute;ch ri&ecirc;ng của bản th&acirc;n.</p>\r\n\r\n<p><strong>Đặc điểm kỹ thuật:</strong></p>\r\n\r\n<p><strong>-&nbsp;</strong>Vỏ: Nhựa mềm.</p>\r\n\r\n<p>- D&acirc;y: Nhựa.</p>\r\n\r\n<p>- Mặt nhựa pha kho&aacute;ng chất tăng độ cứng.</p>\r\n\r\n<p>- K&iacute;ch thước (cm):&nbsp;3,4 x 2,7 x 0,7.</p>\r\n\r\n<p>- Khối lượng: 19g.</p>\r\n\r\n<p>- Khả năng chống nước cơ bản: 30 m&eacute;t( rửa tay, đi mưa).</p>\r\n\r\n<p>- Pin: 2 năm.</p>', 9, 350000, 'MQ-27-7EDF-W300.png', 11, 66, 4, 1, '2019-11-07 23:26:39', '2019-11-08 04:05:11'),
(11, 'Đồng hồ Casio MQ27-7E', '<p>Đồng hồ&nbsp;<strong>Casio MQ27-7E</strong>&nbsp;với thiết kế mặt chữ nhật trẻ trung , c&aacute; t&iacute;nh, năng động sẽ gi&uacute;p bạn tự tin thể hiện c&aacute; t&iacute;nh v&agrave; phong c&aacute;ch ri&ecirc;ng của bản th&acirc;n.</p>\r\n\r\n<p><strong>Đặc điểm kỹ thuật:</strong></p>\r\n\r\n<p><strong>-&nbsp;</strong>Vỏ: Nhựa mềm.</p>\r\n\r\n<p>- D&acirc;y: Nhựa.</p>\r\n\r\n<p>- Mặt nhựa pha kho&aacute;ng chất tăng độ cứng.</p>\r\n\r\n<p>- K&iacute;ch thước (cm):&nbsp;3,4 x 2,7 x 0,7.</p>\r\n\r\n<p>- Khối lượng: 19g.</p>\r\n\r\n<p>- Khả năng chống nước cơ bản: 30 m&eacute;t( rửa tay, đi mưa).</p>\r\n\r\n<p>- Pin: 2 năm.</p>', 14, 350000, 'MQ-27-7E.jpg', 11, 66, 5, 1, '2019-11-07 23:28:03', '2019-11-08 04:05:23'),
(12, 'Đồng hồ Casio MQ24-1B3', '<p>Đồng hồ Casio MQ24-1B3 mặt đen cổ điển với c&aacute;c con số trắng v&agrave; d&acirc;y đeo nhựa dẻo. Đồng hồ c&oacute; k&iacute;ch thước mặt nhỏ chỉ 35mm ph&ugrave; hợp với c&aacute;c bạn học sinh hoặc người c&oacute; cổ tay nhỏ, thiết kế đơn giản đẹp v&agrave; gi&aacute; rẻ l&agrave; những yếu tố khiến chiếc đồng hồ n&agrave;y trở th&agrave;nh một sản phẩm được nhiều người mua tr&ecirc;n c&aacute;c trang b&aacute;n lẻ.</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>- Mặt nhựa pha kho&aacute;ng chất tăng độ cứng.<br />\r\n- Vỏ, gờ viền v&agrave; d&acirc;y đeo nhựa dẻo<br />\r\n- Cỡ mặt 35mm, d&agrave;y 8mm.<br />\r\n- Khả năng chống nước cơ bản: đi mưa, rửa tay<br />\r\n- Độ sai lệch của đồng hồ: 20 gi&acirc;y tr&ecirc;n một th&aacute;ng.<br />\r\n- Pin: 2 năm<br />\r\n- Khối lượng: 19g&nbsp;</p>', 13, 370000, 'mq-24-1bl-0.png', 11, 66, 3, 1, '2019-11-07 23:29:50', '2019-11-08 04:05:29'),
(13, 'Đồng hồ Casio MQ24-7B2', '<p>Đồng hồ Casio MQ24-7B2 mặt trắng cổ điển với c&aacute;c con số đen v&agrave; d&acirc;y đeo nhựa dẻo. Điểm nhấn của đồng hồ l&agrave; c&aacute;c chữ số to v&agrave; đậm hơn mẫu MQ24-7B. Đồng hồ c&oacute; k&iacute;ch thước mặt nhỏ chỉ 35mm ph&ugrave; hợp với c&aacute;c bạn học sinh hoặc người c&oacute; cổ tay nhỏ, thiết kế đơn giản đẹp v&agrave; gi&aacute; rẻ l&agrave; những yếu tố khiến chiếc đồng hồ n&agrave;y trở th&agrave;nh một sản phẩm được nhiều người mua tr&ecirc;n c&aacute;c trang b&aacute;n lẻ.</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>- Mặt nhựa pha kho&aacute;ng chất tăng độ cứng.<br />\r\n- Vỏ, gờ viền v&agrave; d&acirc;y đeo nhựa dẻo<br />\r\n- Cỡ mặt 35mm, d&agrave;y 8mm.<br />\r\n- Khả năng chống nước cơ bản: đi mưa, rửa tay<br />\r\n- Độ sai lệch của đồng hồ: 20 gi&acirc;y tr&ecirc;n một th&aacute;ng.<br />\r\n- Pin: 2 năm<br />\r\n- Khối lượng: 19g&nbsp;</p>', 13, 370000, 'MQ-24-7BLDF-0.jpg', 11, 66, 4, 1, '2019-11-07 23:30:35', '2019-11-08 04:05:35'),
(14, 'Đồng hồ Casio F201WA-9', '<p>Đồng hồ Casio F201WA-9 l&agrave; một mẫu đồng hồ điện tử rẻ tiền nhưng được trang bị đầy đủ c&aacute;c t&iacute;nh năng cơ bản như chu&ocirc;ng, bấm giờ, đếm ngược, thời gian k&eacute;p...Đồng hồ ph&ugrave; hợp với c&aacute;c hoạt động thể thao nhẹ hoặc c&aacute;c hoạt động ngo&agrave;i trời. Đồng hồ nhẹ rất ph&ugrave; hợp với trẻ con v&agrave; người gi&agrave;. Đặc biệt đồng hồ c&oacute; tuổi thọ tới 10 năm.</p>', 13, 200000, 'F-201WA-1ASDF-W300.png', 11, 66, 5, 1, '2019-11-07 23:31:51', '2019-11-08 04:05:47'),
(15, 'Đồng hồ Casio F200W-1A', '<p>Đồng hồ Casio F200W-1A l&agrave; mẫu đồng hồ điện tử cơ bản gi&aacute; rẻ của casio. Đồng hồ chống nước tốt c&oacute; đầy đủ t&iacute;nh năng cơ bản như b&aacute;o thức, bấm giờ thể thao, đ&egrave;n. Đồng hồ được nhiều người y&ecirc;u th&iacute;ch v&igrave; kiểu d&agrave;ng nhỏ, pin bền bỉ (10 năm). Đồng hồ được sử dụng như l&agrave; một chiếc đồng hồ trẻ em hoặc một chiếc đồng hồ thể thao hoặc d&ugrave;ng khi đi du lịch.<br />\r\n<br />\r\n<strong>Th&ocirc;ng số:</strong><br />\r\nTh&acirc;n vỏ: nhựa<br />\r\nD&acirc;y đeo: nhựa mềm<br />\r\nK&iacute;nh: nhựa chống xước cơ bản<br />\r\nChống nước: Cơ bản c&oacute; thể bơi lội nhưng n&ecirc;n hạn chế.<br />\r\nĐ&egrave;n: LED Giờ k&eacute;p ( xem m&uacute;i giờ thứ hai th&iacute;ch hợp khi đi du lịch)<br />\r\nBấm giờ thể thao độ ch&iacute;nh x&aacute;c 1/100 gi&acirc;y<br />\r\nChu&ocirc;ng, lịch tự động đến 2099.<br />\r\nHiển thị giờ kiểu 12 hoặc 24 giờ<br />\r\nĐộ ch&iacute;nh x&aacute;c 30s/th&aacute;ng.<br />\r\nPin 10 năm, sử dụng pin CR2025<br />\r\nKhối lượng 28g.<br />\r\nCỡ mặt 40mm.</p>', 15, 350000, 'F-200W-1A-W300.png', 11, 66, 3, 1, '2019-11-07 23:32:40', '2019-11-08 04:05:53'),
(16, 'Đồng Hồ Casio A168WEGC-3DF Dây Kim Loại Mạ Vàng', '<p><strong>TH&Ocirc;NG SỐ KỸ THUẬT</strong></p>\r\n\r\n<p>Vật liệu vỏ / gờ: Nhựa / Mạ cr&ocirc;m mạ v&agrave;ng<br />\r\nChốt c&oacute; thể điều chỉnh<br />\r\nD&acirc;y đeo bằng th&eacute;p kh&ocirc;ng gỉ<br />\r\nMặt k&iacute;nh kho&aacute;ng<br />\r\nChống nước<br />\r\nĐ&egrave;n cực t&iacute;m ph&aacute;t quang điện tử<br />\r\nĐồng hồ bấm giờ 1/100 gi&acirc;y<br />\r\nKhả năng đo: 59&#39;59,99&quot;<br />\r\nCh&ecirc;́ đ&ocirc;̣ đo: Thời gian đã tr&ocirc;i qua, ngắt giờ, thời gian v&ecirc;̀ đích thứ nh&acirc;́t - thứ hai<br />\r\nB&aacute;o giờ h&agrave;ng ng&agrave;y<br />\r\nT&iacute;n hiệu thời gian h&agrave;ng giờ<br />\r\nLịch tự động (28 ng&agrave;y cho Th&aacute;ng 2)<br />\r\nĐịnh dạng giờ 12/24<br />\r\nGiờ hiện h&agrave;nh th&ocirc;ng thường:<br />\r\nĐồng hồ số: Giờ, ph&uacute;t, gi&acirc;y, s&aacute;ng/chiều, th&aacute;ng, ng&agrave;y, thứ<br />\r\nĐộ ch&iacute;nh x&aacute;c: &plusmn;30 gi&acirc;y một th&aacute;ng<br />\r\nTuổi thọ pin xấp xỉ: 7 năm với pin CR2016<br />\r\nK&iacute;ch thước vỏ : 38,6&times;36,3&times;9,6mm<br />\r\nTổng trọng lượng : 49g</p>', 2, 35000000, 'A168WEGC-3DF-5.jpg', 11, 66, 4, 1, '2019-11-07 23:37:59', '2019-11-08 04:06:00'),
(17, 'Đồng hồ Q&Q Citizen VP81J-013Y', '<p>Đồng hồ Q&amp;Q Citizen VP81J-013Y l&agrave; một mẫu đồng hồ đầy m&agrave;u sắc d&agrave;nh cho trẻ em học xem giờ. Đồng hồ nhẹ với d&acirc;y nhựa mềm gi&uacute;p thoải m&aacute;i hơn khi đeo. Đồng hồ chống nước tốt c&oacute; thể sử dụng khi đi bơi.&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>- Mặt k&iacute;nh nhựa<br />\r\n- Vỏ, gờ viền v&agrave; d&acirc;y đeo nhựa.<br />\r\n- Cỡ mặt 24mm.<br />\r\n- Khả năng chống nước tốt c&oacute; thể bơi lội.<br />\r\n- Độ sai lệch của đồng hồ: 20 gi&acirc;y tr&ecirc;n một th&aacute;ng.<br />\r\n- Pin 2 năm</p>', 5, 150000, 'VP81J013Y.jpg', 10, 68, 5, 1, '2019-11-07 23:43:39', '2019-11-08 04:06:06'),
(18, 'Đồng hồ Q&Q Citizen VQ13J-004Y', '<p>Đồng hồ Q&amp;Q Citizen VQ13J-004Y l&agrave; một mẫu đồng hồ đầy m&agrave;u sắc d&agrave;nh cho trẻ em. Đồng hồ nhẹ với d&acirc;y nhựa mềm gi&uacute;p thoải m&aacute;i hơn khi đeo. Đồng hồ chống nước tốt c&oacute; thể sử dụng khi đi bơi.&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>- Mặt k&iacute;nh nhựa<br />\r\n- Vỏ, gờ viền v&agrave; d&acirc;y đeo nhựa.<br />\r\n- Cỡ mặt 24mm.<br />\r\n- Khả năng chống nước tốt c&oacute; thể bơi lội.<br />\r\n- Độ sai lệch của đồng hồ: 20 gi&acirc;y tr&ecirc;n một th&aacute;ng.<br />\r\n- Pin 2 năm</p>', 6, 500000, 'VQ13J004Y.jpg', 10, 68, 5, 1, '2019-11-07 23:45:02', '2019-11-08 04:06:15'),
(19, 'Đồng hồ trẻ em Q&Q Citizen VQ13J-014Y', '<p>Đồng hồ Q&amp;Q Citizen VQ13J-014Y l&agrave; một mẫu đồng hồ đầy m&agrave;u sắc d&agrave;nh cho trẻ em. Đồng hồ nhẹ với d&acirc;y nhựa mềm gi&uacute;p thoải m&aacute;i hơn khi đeo. Đồng hồ chống nước tốt c&oacute; thể sử dụng khi đi bơi.&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>- Mặt k&iacute;nh nhựa<br />\r\n- Vỏ, gờ viền v&agrave; d&acirc;y đeo nhựa.<br />\r\n- Cỡ mặt 24mm.<br />\r\n- Khả năng chống nước tốt c&oacute; thể bơi lội.<br />\r\n- Độ sai lệch của đồng hồ: 20 gi&acirc;y tr&ecirc;n một th&aacute;ng.<br />\r\n- Pin 2 năm</p>', 8, 450000, 'VQ13J014Y.jpg', 10, 68, 5, 1, '2019-11-07 23:46:10', '2019-11-08 04:06:22'),
(20, 'Đồng hồ trẻ em Q&Q Citizen VQ13J-009Y', '<p>Đồng hồ Q&amp;Q Citizen VQ13J-009Y l&agrave; một mẫu đồng hồ đầy m&agrave;u sắc d&agrave;nh cho trẻ em. Đồng hồ nhẹ với d&acirc;y nhựa mềm gi&uacute;p thoải m&aacute;i hơn khi đeo. Đồng hồ chống nước tốt c&oacute; thể sử dụng khi đi bơi.&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>- Mặt k&iacute;nh nhựa<br />\r\n- Vỏ, gờ viền v&agrave; d&acirc;y đeo nhựa.<br />\r\n- Cỡ mặt 24mm.<br />\r\n- Khả năng chống nước tốt c&oacute; thể bơi lội.<br />\r\n- Độ sai lệch của đồng hồ: 20 gi&acirc;y tr&ecirc;n một th&aacute;ng.<br />\r\n- Pin 2 năm</p>', 6, 300000, 'VQ13J009Y.jpg', 10, 68, 5, 1, '2019-11-07 23:46:56', '2019-11-08 04:06:30'),
(21, 'CITIZEN BF2009-29X', '<p>Đồng hồ Citizen BF2009-29X mẫu nam xuất xứ từ Nhật Bản, sử dụng bộ m&aacute;y pin hoạt động ch&iacute;nh x&aacute;c v&agrave; bền bỉ. Được thiết kế chất liệu d&acirc;y bằng da cao cấp, c&oacute; độ thẩm mỹ cao. Mặt k&iacute;nh kho&aacute;ng cứng chịu va đập tốt; khả năng chống nước 5 bar đủ để chịu nước khi đi tắm, đi bơi. C&oacute; lịch thứ, ng&agrave;y ở vị tr&iacute; 3h truyền thống. Ph&ugrave; hợp với anh ch&agrave;ng th&iacute;ch sự đơn giản, lịch l&atilde;m.</p>\r\n\r\n<p>Thương hiệu: CITIZEN</p>\r\n\r\n<p>Xuất xứ: Nhật Bản</p>\r\n\r\n<p>D&ograve;ng sản phẩm: Nam - Pin</p>\r\n\r\n<p>Chất liệu vỏ: Th&eacute;p kh&ocirc;ng gỉ</p>\r\n\r\n<p>Chất liệu d&acirc;y: D&acirc;y da - N&acirc;u</p>\r\n\r\n<p>Chất liệu k&iacute;nh: K&iacute;nh cường lực</p>\r\n\r\n<p>K&iacute;ch thước mặt: 41 mm</p>\r\n\r\n<p>M&agrave;u mặt: M&agrave;u v&agrave;ng hồng</p>\r\n\r\n<p>Độ chịu nước: 5 bar</p>', 4, 2200000, '3_BF2009-29X-699x699.jpg', 10, 67, 3, 1, '2019-11-08 00:00:46', '2019-11-08 04:06:38'),
(22, 'ĐỒNG HỒ CITIZEN CA4420-81E', '<p><strong>Đồng hồ Citizen CA4420-81E</strong>&nbsp;sở hữu c&ocirc;ng nghệ Eco-Drive độc quyền, hoạt động kh&ocirc;ng d&ugrave;ng pin, thiết kế 6 kim, c&oacute; chức năng đo giờ thể thao, mặt số m&agrave;u đen&nbsp;nổi bật tr&ecirc;n nền&nbsp;d&acirc;y th&eacute;p kh&ocirc;ng gỉ&nbsp;bạc&nbsp;mang lại sự năng động, khỏe khoắn cho người đeo.</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;CITIZEN</p>\r\n\r\n<p><strong>Xuất xứ:</strong>&nbsp;Nhật Bản</p>\r\n\r\n<p><strong>D&ograve;ng sản phẩm:&nbsp;</strong>Thể Thao Nam - Eco-Drive</p>\r\n\r\n<p><strong>Chất liệu vỏ:</strong>&nbsp;Th&eacute;p kh&ocirc;ng gỉ&nbsp;</p>\r\n\r\n<p><strong>Chất liệu d&acirc;y</strong>: Th&eacute;p kh&ocirc;ng gỉ - Bạc</p>\r\n\r\n<p><strong>Chất liệu k&iacute;nh:&nbsp;</strong>K&iacute;nh cường lực</p>\r\n\r\n<p><strong>K&iacute;ch thước mặt:</strong>&nbsp;43&nbsp;mm</p>\r\n\r\n<p><strong>M&agrave;u mặt</strong>: M&agrave;u đen</p>\r\n\r\n<p><strong>Chức năng:</strong>&nbsp;Đ&ocirc;̀ng h&ocirc;̀ 24 giờ, đ&ocirc;̀ng h&ocirc;̀ th&ecirc;̉ thao Chronograph, lịch ngày</p>\r\n\r\n<p><strong>Độ chịu nước:&nbsp;</strong>10&nbsp;Bar</p>', 3, 9000000, 'dong-ho-citizen-ca4420-81e-1-a9da07ab-15a2-4fb7-8584-b3a5c563bb83-3d4035d3-1d47-4c3c-80f2-858e3f7322de-b83586ac-d9f6-40ee-b8a9-f3b72534a741.jpg', 10, 67, 4, 1, '2019-11-08 00:02:25', '2019-11-08 04:06:46'),
(23, 'ĐỒNG HỒ CITIZEN AN3600-59E', '<p><strong>Đồng hồ Citizen AN3600-59E&nbsp;</strong>c&oacute; thiết kế nam t&iacute;nh, mạnh mẽ với mặt m&agrave;u đen v&agrave; d&acirc;y được l&agrave;m từ th&eacute;p kh&ocirc;ng gỉ cao cấp. Đồng hồ c&oacute; đầy đủ chức năng thể thao, ph&ugrave; hợp với những ai thường xuy&ecirc;n vận động.&nbsp;</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;CITIZEN</p>\r\n\r\n<p><strong>Xuất xứ:&nbsp;</strong>Nhật Bản</p>\r\n\r\n<p><strong>D&ograve;ng sản phẩm:</strong>&nbsp;Thể Thao Nam - Pin</p>\r\n\r\n<p><strong>Chất liệu vỏ:&nbsp;</strong>Th&eacute;p kh&ocirc;ng gỉ</p>\r\n\r\n<p><strong>Chất liệu d&acirc;y:&nbsp;</strong>Th&eacute;p kh&ocirc;ng gỉ - Bạc</p>\r\n\r\n<p><strong>Chất liệu k&iacute;nh:&nbsp;</strong>K&iacute;nh cường lực</p>\r\n\r\n<p><strong>K&iacute;ch thước mặt:&nbsp;</strong>42&nbsp;mm</p>\r\n\r\n<p><strong>M&agrave;u mặt:&nbsp;</strong>M&agrave;u đen</p>\r\n\r\n<p><strong>Chức năng:</strong>&nbsp;Đ&ocirc;̀ng h&ocirc;̀ th&ecirc;̉ thao Chronograph, lịch ngày</p>\r\n\r\n<p><strong>Độ chịu nước:</strong>&nbsp;10 bar</p>', 13, 7000000, 'dong-ho-citizen-an3600-59e-1.jpg', 10, 67, 3, 1, '2019-11-08 00:18:05', '2019-11-08 04:06:52'),
(24, 'ĐỒNG HỒ CITIZEN AN3604-58A', '<p><strong>Đồng hồ Citizen AN3604-58A</strong><strong>&nbsp;</strong>c&oacute; thiết kế nam t&iacute;nh, mạnh mẽ với mặt m&agrave;u v&agrave;ng&nbsp;v&agrave; d&acirc;y được l&agrave;m từ th&eacute;p kh&ocirc;ng gỉ cao cấp. Đồng hồ c&oacute; đầy đủ chức năng thể thao, ph&ugrave; hợp với những ai thường xuy&ecirc;n vận động.&nbsp;</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;CITIZEN</p>\r\n\r\n<p><strong>Xuất xứ:&nbsp;</strong>Nhật Bản</p>\r\n\r\n<p><strong>D&ograve;ng sản phẩm:</strong>&nbsp;Thể Thao Nam - Pin</p>\r\n\r\n<p><strong>Chất liệu vỏ:&nbsp;</strong>Th&eacute;p kh&ocirc;ng gỉ</p>\r\n\r\n<p><strong>Chất liệu d&acirc;y:&nbsp;</strong>Th&eacute;p kh&ocirc;ng gỉ - Bạc xen kẽ v&agrave;ng cổ điển</p>\r\n\r\n<p><strong>Chất liệu k&iacute;nh:&nbsp;</strong>K&iacute;nh cường lực</p>\r\n\r\n<p><strong>K&iacute;ch thước mặt:&nbsp;</strong>42&nbsp;mm</p>\r\n\r\n<p><strong>M&agrave;u mặt:&nbsp;</strong>M&agrave;u v&agrave;ng</p>\r\n\r\n<p><strong>Chức năng:</strong>&nbsp;Đ&ocirc;̀ng h&ocirc;̀ th&ecirc;̉ thao Chronograph, lịch ngày</p>\r\n\r\n<p><strong>Độ chịu nước:</strong>&nbsp;10 bar</p>', 8, 4950000, 'dong-ho-citizen-an3604-58a-1.jpg', 10, 67, 4, 1, '2019-11-08 00:22:47', '2019-11-08 04:06:59'),
(25, 'ĐỒNG HỒ CITIZEN AN3612-09X', '<p><strong>Đồng hồ Citizen AN3612-09X</strong>&nbsp;c&oacute; thiết kế cổ điển kết hợp với hiện đại, d&acirc;y da n&acirc;u, mặt số 6 kim, mang đến vẻ đẹp sang trọng nhưng vẫn nam t&iacute;nh cho người sử dụng.&nbsp;</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;CITIZEN</p>\r\n\r\n<p><strong>Xuất xứ:</strong>&nbsp;Nhật Bản</p>\r\n\r\n<p><strong>D&ograve;ng sản phẩm:</strong>&nbsp;Thể Thao Nam - Pin</p>\r\n\r\n<p><strong>Chất liệu vỏ:</strong>&nbsp;Th&eacute;p kh&ocirc;ng gỉ</p>\r\n\r\n<p><strong>Chất liệu d&acirc;y:</strong>&nbsp;D&acirc;y da - N&acirc;u</p>\r\n\r\n<p><strong>Chất liệu k&iacute;nh:</strong>&nbsp;K&iacute;nh cường lực</p>\r\n\r\n<p><strong>K&iacute;ch thước mặt:</strong>&nbsp;41 mm</p>\r\n\r\n<p><strong>M&agrave;u mặt:</strong>&nbsp;M&agrave;u n&acirc;u</p>\r\n\r\n<p><strong>Độ chịu nước:</strong>&nbsp;5 bar</p>', 6, 4700000, 'dong-ho-citizen-an3612-09x-1.jpg', 10, 67, 4, 1, '2019-11-08 00:26:52', '2019-11-08 04:07:08'),
(26, 'ĐỒNG HỒ CITIZEN AN3614-54A', '<p><strong>Đồng hồ Citizen AN3614-54A</strong>&nbsp;c&oacute; thiết kế mặt đồng hồ&nbsp;trẻ trung nhưng vẫn rất sang trọng, d&acirc;y th&eacute;p kh&ocirc;ng gỉ, m&agrave;u bạc xen kẽ v&agrave;ng, tạo n&eacute;t&nbsp;nam t&iacute;nh cho người sử dụng.&nbsp;</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;CITIZEN</p>\r\n\r\n<p><strong>Xuất xứ:</strong>&nbsp;Nhật Bản</p>\r\n\r\n<p><strong>D&ograve;ng sản phẩm:</strong>&nbsp;Thể Thao Nam - Pin</p>\r\n\r\n<p><strong>Chất liệu vỏ:</strong>&nbsp;Th&eacute;p kh&ocirc;ng gỉ</p>\r\n\r\n<p><strong>Chất liệu d&acirc;y:</strong>&nbsp;Th&eacute;p kh&ocirc;ng gỉ - Bạc xen kẽ v&agrave;ng cổ điển</p>\r\n\r\n<p><strong>Chất liệu k&iacute;nh:</strong>&nbsp;K&iacute;nh cường lực</p>\r\n\r\n<p><strong>K&iacute;ch thước mặt:</strong>&nbsp;41 mm</p>\r\n\r\n<p><strong>M&agrave;u mặt:</strong>&nbsp;M&agrave;u trắng</p>\r\n\r\n<p><strong>Độ chịu nước:</strong>&nbsp;5 bar</p>', 1, 9900000, 'dong-ho-citizen-an3614-54a-1-3ea0f239-84ad-4050-8952-3289349c499e.jpg', 10, 67, 3, 1, '2019-11-08 00:30:47', '2019-11-08 04:07:16'),
(27, 'Đồng Hồ Seiko Presage SSA397J1', '<p>M&atilde; sản phẩm: SSA397J1</p>\r\n\r\n<p>Thương hiệu: SEIKO</p>\r\n\r\n<p>Xuất xứ thương hiệu: Nhật Bản</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire</p>\r\n\r\n<p>Vỏ: &nbsp;Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>D&acirc;y: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>Đường k&iacute;nh: 42mm</p>\r\n\r\n<p>Độ d&agrave;y: 14.1mm</p>\r\n\r\n<p>Độ chịu nước: 30m</p>', 5, 8800000, 'Đồng Hồ Seiko Presage SSA397J1.jpg', 48, 72, 3, 1, '2019-11-08 00:47:55', '2019-11-08 08:44:54'),
(28, 'Đồng Hồ Seiko Presage SPB045J1', '<p>M&atilde; sản phẩm:SPB045J1<br />\r\nThương hiệu: SEIKO&nbsp;<br />\r\nXuất xứ: Nhật Bản<br />\r\nLoại m&aacute;y: Automatic (M&aacute;y cơ tự động)<br />\r\nK&iacute;nh: Sapphire chống l&oacute;a<br />\r\nVỏ: Th&eacute;p kh&ocirc;ng gỉ 316L<br />\r\nD&acirc;y: D&acirc;y damm<br />\r\nĐộ d&agrave;y: 12.8mm<br />\r\nĐộ chịu nước: 100m</p>', 6, 12000000, 'Đồng Hồ Seiko Presage SPB045J1.jpg', 48, 72, 3, 1, '2019-11-08 00:49:39', '2019-11-08 08:47:49'),
(29, 'Đồng Hồ Seiko Presage SRPD05J1', '<p>M&atilde; sản phẩm: SRPD05J1</p>\r\n\r\n<p>Thương hiệu: SEIKO</p>\r\n\r\n<p>Xuất xứ:Nhật Bản</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 37mm</p>\r\n\r\n<p>Độ d&agrave;y: 11.8mm</p>\r\n\r\n<p>Độ chịu nước: 30m</p>', 1, 59000000, 'Đồng Hồ Seiko Presage SRPD05J1.jpg', 48, 72, 3, 1, '2019-11-08 00:50:47', '2019-11-08 08:50:31'),
(30, 'Đồng Hồ Seiko Presage Cocktail SRPC03J1', '<p>M&atilde; sản phẩm: SRPC03J1</p>\r\n\r\n<p>Thương hiệu: SEIKO</p>\r\n\r\n<p>Xuất xứ: Nhật Bản</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Hardlex Crystal</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 40.5mm</p>\r\n\r\n<p>Độ d&agrave;y: 11.8mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 15, 12000000, 'Đồng Hồ Seiko Presage SRPC03J1.jpg', 48, 72, 3, 1, '2019-11-08 00:51:27', '2019-11-08 08:52:25'),
(31, 'ĐỒNG HỒ SEIKO PRESAGE COCKTAIL SRPB44J1', '<p>M&atilde; sản phẩm: SRPB44J1</p>\r\n\r\n<p>Thương hiệu: SEIKO</p>\r\n\r\n<p>Xuất xứ: Nhật Bản</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Hardlex Crystal</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 40.5mm</p>\r\n\r\n<p>Độ d&agrave;y: 11.8mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 2, 23000000, 'ĐỒNG HỒ SRPB44J1.4.26.1.jpg', 48, 72, 3, 1, '2019-11-08 00:52:09', '2019-11-08 08:53:35'),
(32, 'Đồng hồ Mido M021.626.36.051.00', '<p>M&atilde; sản phẩm: M021.626.36.051.00</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ: Thụy Sĩ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 42mm</p>\r\n\r\n<p>Độ d&agrave;y: 11.97mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 3, 35000000, 'BARONCELLI POWER RESERVE M027.428.11.013.00..jpg', 51, 83, 5, 1, '2019-11-08 00:55:19', '2019-11-08 09:09:44'),
(33, 'Đồng hồ Mido Commander M027.408.11.041.00', '<p>M&atilde; sản phẩm: M027.408.11.041.00</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ thương hiệu: Thụy Sỹ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic Chronometer (M&aacute;y cơ tự động chuẩn COSC)</p>\r\n\r\n<p>K&iacute;nh: Sapphire chống l&oacute;a</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>D&acirc;y: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>Đường k&iacute;nh: 40mm</p>\r\n\r\n<p>Độ d&agrave;y: 9.43mm</p>\r\n\r\n<p>Độ chịu nước: 30m<br />\r\n&nbsp;</p>', 3, 33000000, 'MIDO BARONCELLI POWER RESERVE M027.jpg', 51, 83, 4, 1, '2019-11-08 00:57:57', '2019-11-08 09:09:58'),
(34, 'Đồng hồ Mido Commander M027.408.11.041.00', '<p>M&atilde; sản phẩm: M027.408.11.041.00</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ thương hiệu: Thụy Sỹ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic Chronometer (M&aacute;y cơ tự động chuẩn COSC)</p>\r\n\r\n<p>K&iacute;nh: Sapphire chống l&oacute;a</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>D&acirc;y: Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>Đường k&iacute;nh: 40mm</p>\r\n\r\n<p>Độ d&agrave;y: 9.43mm</p>\r\n\r\n<p>Độ chịu nước: 30m<br />\r\n&nbsp;</p>', 3, 33000000, 'BARONCELLI POWER RESERVE M027.428.36.053.00..jpg', 51, 83, 4, 1, '2019-11-08 00:58:48', '2019-11-08 09:09:58'),
(35, 'Đồng hồ Mido M021.626.36.051.00', '<p>M&atilde; sản phẩm: M021.626.36.051.00</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ: Thụy Sĩ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 42mm</p>\r\n\r\n<p>Độ d&agrave;y: 11.97mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 3, 35000000, 'MIDO BARONCELLI CHRONOMETER SILICON M027.408.11.041.00..jpg', 51, 83, 5, 1, '2019-11-08 00:59:26', '2019-11-08 09:09:44'),
(36, 'Đồng hồ Mido Commander M021.626.22.061.00', '<p>M&atilde; sản phẩm: M021.626.22.061.00</p>\r\n\r\n<p>Thương hiệu: MIDO&nbsp;</p>\r\n\r\n<p>Xuất xứ: Thụy Sỹ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: Th&eacute;p kh&ocirc;ng gỉ 316L mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>Đường k&iacute;nh: 42mm</p>\r\n\r\n<p>Độ d&agrave;i: 11.97mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 3, 33000000, 'MIDO COMMANDER BIG DATE M021.626.22.061.00..jpg', 51, 83, 5, 1, '2019-11-08 01:00:16', '2019-11-08 09:09:32'),
(37, 'Đồng hồ Mido Commander M021.626.36.051.00', '<p>M&atilde; sản phẩm: M021.626.36.051.00</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ: Thụy Sĩ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 42mm</p>\r\n\r\n<p>Độ d&agrave;y: 11.97mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 2, 33000000, 'Đồng hồ Mido Commander II Big Date M021.626.36.051.00.jpg', 51, 83, 4, 1, '2019-11-08 01:00:53', '2019-11-08 09:09:23'),
(38, 'MIDO BARONCELLI MIDNIGHT BLUE GENT M8600.3.15.8', '<p>M&atilde; sản phẩm: M8600.3.15.8</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ:&nbsp;thương hiệuThụy Sỹ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Mặt k&iacute;nh cứng chống l&oacute;a</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y:&nbsp;D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 38mm</p>\r\n\r\n<p>Độ d&agrave;y: 9.1mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 6, 34000000, 'MIDO BARONCELLI MIDNIGHT BLUE GENT M8600.3.15.jpg', 51, 83, 3, 1, '2019-11-08 01:01:35', '2019-11-08 09:13:49'),
(39, 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.88', '<p>M&atilde; sản phẩm: M7600.3.65.8</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ:&nbsp; thương hiệuThụy Sỹ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire chống l&oacute;a</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 29mm</p>\r\n\r\n<p>Độ d&agrave;y: 8.65mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 4, 25000000, 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8..jpg', 51, 83, 3, 1, '2019-11-08 01:02:10', '2019-11-18 04:06:19'),
(40, 'MIDO BARONCELLI MIDNIGHT BLUE LADY M7600.3.65.8', '<p>M&atilde; sản phẩm: M7600.3.65.8</p>\r\n\r\n<p>Thương hiệu: MIDO</p>\r\n\r\n<p>Xuất xứ:&nbsp; thương hiệuThụy Sỹ</p>\r\n\r\n<p>Loại m&aacute;y: Automatic (M&aacute;y cơ tự động)</p>\r\n\r\n<p>K&iacute;nh: Sapphire chống l&oacute;a</p>\r\n\r\n<p>Vỏ: Th&eacute;p kh&ocirc;ng gỉ mạ v&agrave;ng c&ocirc;ng nghệ PVD</p>\r\n\r\n<p>D&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Đường k&iacute;nh: 29mm</p>\r\n\r\n<p>Độ d&agrave;y: 8.65mm</p>\r\n\r\n<p>Độ chịu nước: 50m</p>', 4, 25000000, 'MIDO BARONCELLI DONNA QUARTZ M022.210.33.046.00..jpg', 51, 83, 3, 1, '2019-11-08 01:03:19', '2019-11-08 09:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `productstyle`
--

CREATE TABLE `productstyle` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productstyle`
--

INSERT INTO `productstyle` (`id`, `idCategory`, `name`, `status`, `created_at`, `updated_at`) VALUES
(66, 11, 'Thể thao', 1, '2019-11-05 01:46:06', '2019-11-05 01:46:06'),
(67, 10, 'Thời trang', 1, '2019-11-05 01:47:31', '2019-11-05 01:47:31'),
(68, 10, 'Tinh nghịch', 1, '2019-11-05 01:49:48', '2019-11-08 05:37:31'),
(72, 48, 'Quân đội', 1, '2019-11-05 01:52:29', '2019-11-05 01:52:29'),
(83, 51, 'Cổ điển', 1, '2019-11-05 02:00:38', '2019-11-08 04:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruler` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `social_id`, `avatar`, `ruler`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Đỗ Thanh Tùng', 'thanhtung.contact@gmail.com', '$2y$12$0GqqNzWvcHenc8SP9FkZDOzi64D7GQtlmkb7mOjmKZwKQ2Ssd4WSK', NULL, NULL, 0, 0, NULL, '6JWrcg1eG2bPWzMlr48SWEPneINx9yboXDHHG6bjQ4JgXIUuvV2TpXAvHXOu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idOrder` (`idOrder`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idProductStyle` (`idProductStyle`);

--
-- Indexes for table `productstyle`
--
ALTER TABLE `productstyle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `productstyle`
--
ALTER TABLE `productstyle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
