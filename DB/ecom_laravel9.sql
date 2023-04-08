-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 05:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasan_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', NULL, '$2y$10$SkktQ8Wa9I0T6fmWqEJFW..jIuI8DzCtiFSi85FvF6vDQrLcJZh2a', 'upload/admin_profile_images/1755167587814712.png', NULL, '2023-01-15 08:42:38', '2023-01-16 02:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `bloger_name` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `blog_slug`, `bloger_name`, `blog_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'lorem-ipsum-dolor,-sit-amet-consectetur-elit-saepe!', 'Hasan', 'upload/blogs/1756734706886155.jpg', '<p>dfa;bhzkxcv vdfoahb n;aodf s;o ghsadl; ghsd;kg gs;ogsh go;lsdhg osldgo gogsid hglsd gso gsdlgh sdl</p>', 1, '2023-02-01 18:00:00', '2023-02-02 09:46:17'),
(2, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'lorem-ipsum-dolor,-sit-amet-consectetur-elit-saepe!', 'Hasan', 'upload/blogs/1756734686006427.PNG', '<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus non sint saepe rem eveniet sit ea esse praesentium!</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><s>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita in recusandae sit officia ipsa, natus ad voluptatem doloribus dolorum placeat, rem deleniti est accusamus ipsum corporis voluptates soluta totam maiores nostrum reprehenderit quasi? Laboriosam itaque ab odit harum sed aut voluptates, illum unde. Saepe enim ad ut pariatur doloremque quas harum sequi, excepturi tempore exercitationem suscipit quam recusandae corrupti quibusdam. Laboriosam sapiente provident repellat blanditiis ratione nostrum illum asperiores quo cumque in quisquam, non iste aut illo vel, alias debitis!</s></p>\r\n\r\n<p><span class=\"marker\">Vel ipsa officiis nobis eveniet omnis consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea, dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><em>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</em></p>\r\n</blockquote>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos nostrum odio, cumque impedit.</p>', 1, '2023-02-02 02:53:05', '2023-02-04 12:40:53'),
(3, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'lorem-ipsum-dolor,-sit-amet-consectetur-elit-saepe!', 'Hasan', 'upload/blogs/1756734663761049.jpg', '<p>dfa;bhzkxcv vdfoahb n;aodf s;o ghsadl; ghsd;kg gs;ogsh go;lsdhg osldgo gogsid hglsd gso gsdlgh sdl</p>', 1, '2023-02-02 02:53:05', '2023-02-02 09:45:37'),
(4, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'lorem-ipsum-dolor,-sit-amet-consectetur-elit-saepe!', 'Hasan', 'upload/blogs/1756734642625834.jpg', '<p>dfa;bhzkxcv vdfoahb n;aodf s;o ghsadl; ghsd;kg gs;ogsh go;lsdhg osldgo gogsid hglsd gso gsdlgh sdl</p>', 1, '2023-02-02 02:53:05', '2023-02-02 09:45:15'),
(5, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'lorem-ipsum-dolor,-sit-amet-consectetur-elit-saepe!', 'Hasan', 'upload/blogs/1756708846281698.jpg', '<p>dfa;bhzkxcv vdfoahb n;aodf s;o ghsadl; ghsd;kg gs;ogsh go;lsdhg osldgo gogsid hglsd gso gsdlgh sdl</p>', 1, '2023-02-02 02:53:05', '2023-02-02 09:44:56'),
(6, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'lorem-ipsum-dolor,-sit-amet-consectetur-elit-saepe!', 'Hasan', 'upload/blogs/1756734619766992.PNG', '<p>dfa;bhzkxcv vdfoahb n;aodf s;o ghsadl; ghsd;kg gs;ogsh go;lsdhg osldgo gogsid hglsd gso gsdlgh sdl</p>', 1, '2023-02-02 02:53:05', '2023-02-02 09:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_slug` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Nokia', 'nokia', 'upload/brands/1755263830394456.png', NULL, NULL),
(2, 'Nike', 'nike', 'upload/brands/1755292922965855.png', NULL, NULL),
(6, 'Gucchi', 'gucchi', 'upload/brands/1756698688898101.PNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `category_slug`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'men', 'fa fa-male', '2023-01-16 02:49:40', '2023-01-16 03:56:27'),
(2, 'Women', 'women', 'fa fa-female', '2023-01-16 03:53:25', NULL),
(3, 'Electronics', 'electronics', 'fa fa-laptop', '2023-01-16 08:58:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_01_13_175801_create_admins_table', 1),
(6, '2022_10_30_115215_create_categories_table', 2),
(7, '2022_10_30_195032_create_sub_categories_table', 2),
(8, '2022_11_04_174531_products_table', 2),
(9, '2022_11_04_175136_create_sub_sub_categories_table', 2),
(10, '2022_11_04_175231_create_multi_imgs_table', 2),
(11, '2022_11_04_181239_create_brands_table', 2),
(12, '2022_11_11_210543_create_sliders_table', 2),
(14, '2023_01_19_062458_create_user_profiles_table', 3),
(15, '2023_02_01_123409_create_blogs_table', 4),
(16, '2023_03_12_170629_create_policies_table', 5),
(17, '2023_04_06_101704_create_wishlists_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(2, 1, 'upload/products/multi-images/1749215201189268.jpeg', '2022-11-11 03:46:51', NULL),
(3, 1, 'upload/products/multi-images/1749215201257313.jpeg', '2022-11-11 03:46:51', NULL),
(4, 1, 'upload/products/multi-images/1749215201327398.jpeg', '2022-11-11 03:46:51', NULL),
(5, 2, 'upload/products/multi-images/1749215201100198.jpeg', '2022-11-11 03:46:51', NULL),
(6, 2, 'upload/products/multi-images/1749215201189267.jpeg', '2022-11-11 03:46:51', NULL),
(7, 2, 'upload/products/multi-images/1749215201257312.jpeg', '2022-11-11 03:46:51', NULL),
(8, 2, 'upload/products/multi-images/1749215201327397.jpeg', '2022-11-11 03:46:51', NULL),
(13, 4, 'upload/products/multi-images/1749232634338064.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:23:56'),
(14, 4, 'upload/products/multi-images/1749232634471892.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:23:57'),
(15, 4, 'upload/products/multi-images/1749232634635071.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:23:57'),
(16, 4, 'upload/products/multi-images/1749232634742382.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:23:57'),
(17, 4, 'upload/products/multi-images/1749232634858287.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:23:57'),
(18, 5, 'upload/products/multi-images/1749233011387062.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:29:56'),
(19, 5, 'upload/products/multi-images/1749233011512385.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:29:56'),
(20, 5, 'upload/products/multi-images/1749233011607293.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:29:56'),
(22, 5, 'upload/products/multi-images/1749233011825735.jpeg', '2022-11-11 03:46:51', '2022-11-11 08:29:56'),
(28, 7, 'upload/products/multi-images/1749501840481017.jpg', '2022-11-11 03:46:51', '2022-11-14 07:42:51'),
(29, 7, 'upload/products/multi-images/1749501840564425.jpg', '2022-11-11 03:46:51', '2022-11-14 07:42:51'),
(30, 7, 'upload/products/multi-images/1749501856844570.jpg', '2022-11-11 03:46:51', '2022-11-14 07:43:07'),
(31, 7, 'upload/products/multi-images/1749501840754051.jpg', '2022-11-11 03:46:51', '2022-11-14 07:42:52'),
(32, 7, 'upload/products/multi-images/1749501840827236.jpeg', '2022-11-11 03:46:51', '2022-11-14 07:42:52'),
(33, 8, 'upload/products/multi-images/1749500968967754.jpeg', '2022-11-11 03:46:51', '2022-11-14 07:29:00'),
(35, 8, 'upload/products/multi-images/1749500969291318.jpeg', '2022-11-11 03:46:51', '2022-11-14 07:29:01'),
(36, 8, 'upload/products/multi-images/1749500969408945.jpeg', '2022-11-11 03:46:51', '2022-11-14 07:29:01'),
(37, 8, 'upload/products/multi-images/1749500969474515.jpeg', '2022-11-11 03:46:51', '2022-11-14 07:29:01'),
(38, 9, 'upload/products/multi-images/1749501600309808.jpg', '2022-11-11 03:46:51', '2022-11-14 07:39:02'),
(39, 9, 'upload/products/multi-images/1749501600501767.jpg', '2022-11-11 03:46:51', '2022-11-14 07:39:03'),
(40, 9, 'upload/products/multi-images/1749501600657620.webp', '2022-11-11 03:46:51', '2022-11-14 07:39:03'),
(41, 9, 'upload/products/multi-images/1749501620608655.webp', '2022-11-11 03:46:51', '2022-11-14 07:39:22'),
(42, 9, 'upload/products/multi-images/1749501601073232.jpg', '2022-11-11 03:46:51', '2022-11-14 07:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Product Damage/not working:', '<ul style=\"list-style-type:square;\">\r\n	<li>\r\n	<p>Please do not accept delivery of any item whose outer packaging is damaged or tampered (or seal open condition) within any manner. Please contact customer care if you open the packaging and discover that the item is damaged.</p>\r\n	</li>\r\n	<li>\r\n	<p>Products damaged while being used do not qualify for a refund or replacement. Product warranty to be taken up with the respective brand service center. Click here for a complete list of Brand Service Centre Contact numbers</p>\r\n	</li>\r\n	<li>\r\n	<p>If the product was not received in good condition we may replace the product, however, in case we are unable to replace the damaged/ defective product we may initiate a refund. Replacement of the product may depend upon the availability of the product.</p>\r\n	</li>\r\n</ul>', 1, '2023-03-12 11:34:13', '2023-03-12 11:52:39'),
(2, 'Wrong Product delivered:', '<ul style=\"list-style-type:square;\">\r\n	<li>case you find that the product delivered to you was not the product ordered by you as evidenced by the confirmation of order received by you, you may contact customer care on 666 58626 (666 JUMBO) and we will make arrangements to pick up the wrong product and deliver the correct one at the earliest.</li>\r\n</ul>', 1, '2023-03-12 11:58:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_qty` varchar(255) DEFAULT NULL,
  `product_tags` varchar(255) DEFAULT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) DEFAULT NULL,
  `buying_price` varchar(11) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `long_desc` longtext NOT NULL,
  `product_thumbnail` varchar(255) NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_tags`, `product_size`, `product_color`, `buying_price`, `selling_price`, `discount_price`, `short_desc`, `long_desc`, `product_thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 7, 10, 'Gaming 4K Monitor', 'gaming-4k-monitor', '002332', '150', 'Samsung,Gaming,Monitor,Curved', '40,42,43,48,55', 'Black', '1000', '1200', '999', 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/1749223729245021.jpeg', NULL, 1, 1, 1, 1, '2022-11-11 03:46:21', '2023-01-16 09:51:09'),
(2, 1, 3, 5, 7, 'Smart Android Tv', 'smart-android-tv', '002342', '200', 'Android Tv,Smart TV,Samsung', '40,42,43,48,55', 'Black', '800', '1000', NULL, 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/1749215201016077.jpeg', 1, NULL, 1, NULL, 1, '2022-11-11 03:46:51', '2023-01-16 09:50:43'),
(4, 2, 1, 3, 2, 'Men T-shirt', 'men-t-shirt', '0023123', '500', 'Android Tv,Smart TV,Samsung', '40,42,43,48,55', 'Black', '80', '100', '79', 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/1749232595312213.jpeg', 1, NULL, 1, NULL, 1, '2022-11-11 03:46:51', '2023-01-16 08:26:57'),
(5, 2, 2, 2, 4, 'Women Casual Shoe', 'women-casual-shoe', '0023153', '500', 'Android Tv,Smart TV,Samsung', '40,42,43,48,55', 'Black', '80', '100', NULL, 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/1749232970792551.jpeg', 1, NULL, 1, NULL, 1, '2022-11-11 03:46:51', '2023-01-16 09:50:23'),
(7, 1, 3, 5, 7, 'Smart Tv Stand', 'smart-tv-stand', '002356254', '200', 'Android Tv,Smart TV,Samsung', '40,42,43,48,55', 'Black,white,blue', '900', '1000', '788', 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/1749501797259340.jpg', 1, 1, 1, NULL, 1, '2022-11-11 03:46:51', '2023-02-08 01:34:05'),
(8, 1, 3, 7, 9, 'Printer', 'printer', '002311231', '500', 'Samsung,Printer', '40,42,43,48,55', 'Black', '600', '700', '550', 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/3.jpeg', 1, NULL, 1, NULL, 1, '2022-11-11 03:46:51', '2023-01-16 09:49:18'),
(9, 6, 1, 3, 5, 'Shampoo', 'shampoo', '0023243', '300', 'Android Tv,Smart TV,Samsung', '40,42,43,48,55', 'Black', '1050', '1200', NULL, 'Bass and Stereo Sound.\r\nDisplay with 3840 x 2160 pixels resolution.\r\nQLED 4K Panel.\r\nAndroid v10.0 Operating system.', '<p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen &amp; Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.<br />\r\nThe standard passage, used since the 1500s.</p>\r\n\r\n<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\nGet 30% Daily Cash<br />\r\nBack with Membership Card.</p>\r\n\r\n<p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber &amp; Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>', 'upload/products/thumbnail/1749501566707602.png', NULL, 1, 1, NULL, 1, '2022-11-11 03:46:51', '2023-02-08 01:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `slider_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/slider/1755179854785556.png', 'Men\'s T-shirt', 'Get 30% off to Buy 1 and get from 2nd', 1, '2023-01-16 05:52:29', '2023-01-16 05:53:58'),
(2, 'upload/slider/1755179994432418.png', 'Women\'s shoe', 'Get flat 25% discount', 1, '2023-01-16 05:54:42', '2023-02-02 00:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_title` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_title`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fashion', 'fashion', '2023-01-16 04:01:42', NULL),
(2, 2, 'Fashion', 'fashion', '2023-01-16 04:01:53', NULL),
(3, 1, 'Care', 'care', '2023-01-16 08:13:38', NULL),
(4, 2, 'Care', 'care', '2023-01-16 08:13:49', NULL),
(5, 3, 'Television', 'television', '2023-01-16 08:59:04', NULL),
(6, 3, 'Refrigerator', 'refrigerator', '2023-01-16 08:59:29', NULL),
(7, 3, 'Computer', 'computer', '2023-01-16 09:43:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsub_title` varchar(255) NOT NULL,
  `subsub_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsub_title`, `subsub_slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tshirt', 'tshirt', '2023-01-16 05:42:17', NULL),
(2, 1, 1, 'Pants', 'pants', '2023-01-16 05:42:28', NULL),
(3, 2, 2, 'Skirt', 'skirt', '2023-01-16 05:45:01', NULL),
(4, 2, 2, 'Tshirt', '', '2023-01-16 05:45:27', '2023-01-16 05:48:18'),
(5, 1, 3, 'Shampoo', 'shampoo', '2023-01-16 09:00:03', NULL),
(6, 2, 4, 'Shampoo', 'shampoo', '2023-01-16 09:00:18', NULL),
(7, 3, 5, 'Android Tv', 'android-tv', '2023-01-16 09:42:43', NULL),
(8, 3, 6, 'Dual Door', 'dual-door', '2023-01-16 09:43:05', NULL),
(9, 3, 7, 'Printer', 'printer', '2023-01-16 09:44:07', NULL),
(10, 3, 7, 'Monitor', 'monitor', '2023-01-16 09:44:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(20) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sultanul', 'Kaisar', 'skaisar', 'kaisar@email.com', NULL, '$2y$10$f.Ad1XffCG.OIfNNH324zu3dpnEVftNK.pitQQRIgKDc8/F47crdO', 123456797, 'upload/user_profile_images/1756461131517302.jpg', NULL, '2023-01-30 09:13:42', '2023-01-30 09:46:33'),
(2, 'Hasan', 'Choudhury', 'hasan', 'hasan@email.com', NULL, '$2y$10$gqcPfnUsYMYa9b2.mZe2MeAHo75MpT6a19H9T1VbDBsjltIiqY2Bm', 1234567890, 'upload/user_profile_images/1756698618172479.PNG', NULL, '2023-02-02 00:11:25', '2023-02-02 00:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `first_name`, `last_name`, `profile_image`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 1, 8, '2023-04-08 08:58:44', NULL);

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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_profiles_phone_unique` (`phone`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
