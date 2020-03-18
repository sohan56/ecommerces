-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommmerce`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mens_category`
--

CREATE TABLE `mens_category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mens_category`
--

INSERT INTO `mens_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'T-shirts', '....', 1, '2019-11-28 23:35:26', NULL),
(2, 'Jeans', '.....', 1, '2019-11-28 23:36:00', NULL),
(3, 'Pant', '.....', 1, '2019-11-28 23:36:35', NULL),
(4, 'Men\'s Bags', '...', 1, '2019-11-28 23:37:30', NULL),
(5, 'Shoes', '.....', 1, '2019-11-28 23:38:28', NULL),
(6, 'Jackets and Coats', '....', 1, '2019-11-28 23:40:20', NULL),
(7, 'Clothing', '....', 1, '2019-11-28 23:40:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mens_product`
--

CREATE TABLE `mens_product` (
  `mproduct_id` bigint(20) UNSIGNED NOT NULL,
  `mproduct_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mproduct_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mproduct_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mproduct_qty` int(11) NOT NULL,
  `mproduct_price` int(11) NOT NULL,
  `mproduct_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mens_product`
--

INSERT INTO `mens_product` (`mproduct_id`, `mproduct_name`, `category_id`, `mproduct_short_description`, `mproduct_long_description`, `mproduct_qty`, `mproduct_price`, `mproduct_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Full sleeve T-shirt for men', '1', 'This classic and comfy Next Level crewneck tee is one of our best sellers. The ringspun cotton is so soft you may never want to take it off!', 'This classic and comfy Next Level crewneck tee is one of our best sellers. The ringspun cotton is so soft you may never want to take it off!', 50, 250, 'public/mens_product_image/0551413600_00_fr.jpg', 1, '2019-11-28 23:51:41', NULL),
(2, 'Mens Slim Jeans In Light Wash', '2', 'Our men\'s slim jeans in light wash feature a relaxed fit from thigh with a light tapering from knee to ankle for a considered approach to a tailored jean. Woven with stretch for softness and flexibility, our men\'s light wash denim has exceptional recovery and a broken-in feel. Nuanced whiskering and fading add a well-worn look to appear as if these have been yours for years. Worn here with our Crew Neck Tee and Button Down Shirt.', 'Our men\'s slim jeans in light wash feature a relaxed fit from thigh with a light tapering from knee to ankle for a considered approach to a tailored jean. Woven with stretch for softness and flexibility, our men\'s light wash denim has exceptional recovery and a broken-in feel. Nuanced whiskering and fading add a well-worn look to appear as if these have been yours for years. Worn here with our Crew Neck Tee and Button Down Shirt.', 100, 750, 'public/mens_product_image/060147mens-slim-jeans-in-light-wash-product.png', 1, '2019-11-29 00:01:47', NULL),
(3, 'COLLEGE BACKPACK FOR MEN BY ROCAMP SCHOOL LAPTOP BAGS 15.6 WATERPROOF', '4', 'The Backpack is ideal use for college, School, travel, and Gym', 'The ROCAMP Backpack has Storage space & POCKETS: one separate laptop compartment hold 15. 6 inch Laptop as well as 15 inch, 14 inch and 13 inch MacBook/laptop\r\nUSB Charging Port Access: With built in USB charger outside and built in charging cable inside,this usb backpack offers you a more convenient way to charge your phone while walking. Please noted that this backpack doesn\'t power itself, usb charging port only offers an easy access to charge .\r\nThe Backpack is designed with comfortable airflow back design with thick but soft multi-panel ventilated padding, gives you maximum back support.\r\n This Bag has an adjustable shoulder strap that adjusts the length of your shoulder strap to suit your height.\r\nDurable material solid: made of water resistant and durable Nylon fabric with zippers. Ensure a secure & long-lasting usage everyday & weekend. Serve you well as professional office work bag.\r\nDIMENSIONS - 6\"L x 13\"W x 18\"H,', 100, 180, 'public/mens_product_image/060436College_Backpack_for_Men__77126.1565230178.jpg', 1, '2019-11-29 00:04:36', NULL),
(4, 'LAORENTOU Men\'s Genuine Leather Shoulder Bag, Business Crossbody Bag for Men', '4', 'We guarantee that LAORENTOU leather shoulder bag is made of full-grain cowhide. Full-grain cowhide is a kind of genuine cow leather, so our bag has a shiny surface, comfortable tactile impression and good breathability. Polyester lining is silky and it will not scratch your personal belongings. Alloy magnetic snap button and smooth zipper make it easier to use our bags. Alloy fittings and nylon shoulder straps are very durable. we only make bags with high quality materials！', 'We guarantee that LAORENTOU leather shoulder bag is made of full-grain cowhide. Full-grain cowhide is a kind of genuine cow leather, so our bag has a shiny surface, comfortable tactile impression and good breathability. Polyester lining is silky and it will not scratch your personal belongings. Alloy magnetic snap button and smooth zipper make it easier to use our bags. Alloy fittings and nylon shoulder straps are very durable. we only make bags with high quality materials！', 100, 256, 'public/mens_product_image/061107download.jpg', 1, '2019-11-29 00:11:07', NULL),
(5, 'Power Black Sports Shoes For Men', '5', 'Power Black Sports Shoes For Men', 'Power Black Sports Shoes For Men', 500, 350, 'public/mens_product_image/061321power-black-sports-shoes-for-men-500x500.jpg', 1, '2019-11-29 00:13:21', NULL),
(6, 'Maspro Badminton Non-Marking Shoe', '5', 'Maspro Badminton Non-Marking Shoe 012, Model No: 0012, Size: UK 4', 'Maspro Badminton Non-Marking Shoe 012, Model No: 0012, Size: UK 4', 100, 750, 'public/mens_product_image/061543badminton-rackets-500x500.jpg', 1, '2019-11-29 00:15:43', NULL),
(7, 'Black Gothic Punk Men\'s Long Sleeve T Shirt', '7', 'This black punk men\'s long sleeve t-shirt has a raglan design, wearing more prominent body, the front neckline has with D button decoration and made with stitching solid color knitting fabric.\r\nAdditional information:\r\n- Actual fabric colors may vary slightly from online colors due to variations in screen color settings.\r\n- Measurements size on size table above for your reference. All size about subject to +/-0.5-1 inches tolerance.', 'This black punk men\'s long sleeve t-shirt has a raglan design, wearing more prominent body, the front neckline has with D button decoration and made with stitching solid color knitting fabric.\r\nAdditional information:\r\n- Actual fabric colors may vary slightly from online colors due to variations in screen color settings.\r\n- Measurements size on size table above for your reference. All size about subject to +/-0.5-1 inches tolerance.', 500, 400, 'public/mens_product_image/062314mens-clothing.png', 1, '2019-11-29 00:23:14', NULL),
(8, 'Blingsoul Brown Leather Jacket for Men - Distressed Motorcycle Real Leather Jackets', '6', 'Zipper closure\r\nMade from 100% High Quality Real Leather with inner viscose lining\r\nThis Mens Brown Leather jacket is crafted by experts to ensure firm stitching and fantastic durability\r\nMultiple pockets, for you to carry your belongings as well as zipper closure that enables you to take this jacket on and off quickly.\r\nThis biker style leather jacket men offers a US modern fit style. You can choose your normal size or refer our size chart.\r\nEasy to carry, Classic design, Suitable for every occasion: For casual gatherings, hangouts, party wear, working, sporting and so on.', 'Zipper closure\r\nMade from 100% High Quality Real Leather with inner viscose lining\r\nThis Mens Brown Leather jacket is crafted by experts to ensure firm stitching and fantastic durability\r\nMultiple pockets, for you to carry your belongings as well as zipper closure that enables you to take this jacket on and off quickly.\r\nThis biker style leather jacket men offers a US modern fit style. You can choose your normal size or refer our size chart.\r\nEasy to carry, Classic design, Suitable for every occasion: For casual gatherings, hangouts, party wear, working, sporting and so on.', 50, 500, 'public/mens_product_image/06280081u7S8M6tPL._UX569_.jpg', 1, '2019-11-29 00:28:00', NULL);

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
(4, '2019_11_11_080812_create_admin_table', 1),
(5, '2019_11_11_175526_create_category_table', 2),
(6, '2019_11_11_191018_create_manufacturer_table', 3),
(10, '2019_11_11_191434_create_product_table', 4),
(11, '2019_11_16_171610_create_customer_table', 5),
(12, '2019_11_21_195239_create_shipping_table', 6),
(14, '2019_11_22_174559_create_mens_category_table', 7),
(15, '2019_11_22_190502_create_mens_product_table', 8),
(16, '2019_11_23_040738_create_women_category_table', 9),
(17, '2019_11_23_051119_create_womens_product_table', 10),
(18, '2019_11_23_061515_create_tbl_electronics_table', 11),
(20, '2019_11_25_073725_create_settings_table', 12),
(21, '2019_11_24_163842_create_orders_table', 13),
(23, '2019_11_25_182856_create_order_items_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `sub_total`, `tax`, `total_amount`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '0.00', '0.00', '0.00', 'Cash', 0, '2019-11-29 11:22:04', '2019-11-29 11:22:04'),
(2, 1, '0.00', '0.00', '0.00', 'Cash', 0, '2019-11-29 11:49:02', '2019-11-29 11:49:02'),
(3, 2, '0.00', '0.00', '0.00', 'Cash', 0, '2019-12-01 12:41:46', '2019-12-01 12:41:46'),
(4, 5, '400.00', '40.00', '440.00', 'Cash', 0, '2019-12-02 10:47:50', '2019-12-02 10:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `product_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '1', 'Black Gothic Punk Men\'s Long Sleeve T Shirt', '400', '2019-12-02 10:47:51', '2019-12-02 10:47:51');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'stripe_active', 'Yes', '2019-11-25 12:05:41', '2019-11-25 12:08:49'),
(2, 'stripe_currency', 'USD', '2019-11-25 12:05:41', '2019-11-25 12:08:49'),
(3, 'stripe_secret_key', 'sk_test_yuo7PdYG1rJ4T9kgMgzJLr1X00HEWrxxGz', '2019-11-25 12:07:05', '2019-11-25 12:08:49'),
(4, 'stripe_publishable_key', 'pk_test_tYfygldZCSoUAKopTveeW5hf007alxSFMP', '2019-11-25 12:07:05', '2019-11-25 12:08:49'),
(5, 'language', 'English', '2019-11-26 00:52:33', '2019-12-02 12:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_label` tinyint(4) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `Admin_password`, `Admin_img`, `access_label`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Sohan', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Ware', 'Men\'s Ware Descriptionss', 1, '2019-11-11 12:28:49', '2019-11-22 12:32:09'),
(2, 'Women\'s Ware', 'Women\'s Ware description here...', 1, '2019-11-11 12:30:48', NULL),
(7, 'Electronic', 'electronic description', 1, '2019-11-28 23:33:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `coustomer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`coustomer_id`, `customer_name`, `email_address`, `password`, `mobile_number`, `address`, `city`, `country`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'shohanur rahman sohan', 'sohan@gmail.com', '123456', '01768284056', 'murkon,tongi,gazipur,', 'tongi', 'Bangladesh', '1710', NULL, NULL),
(3, 'rakibul islam', 'rakib@gmail.com', '123456', '01879783037', 'saver,dhaka', 'saver', 'Bangladesh', '1750', NULL, NULL),
(4, 'Nadim Hasin', 'nadim@gmail.com', '789456', '0168545895', 'mymensingh', 'gaffargaon', 'bangladeh', '2330', NULL, NULL),
(5, 'nadim ert5ty', 'masum@gmail.com', '123456', '0156578945', 'tongi,gazipur,', 'tongi', 'Bangladesh', '1720', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_electronics`
--

CREATE TABLE `tbl_electronics` (
  `eproduct_id` bigint(20) UNSIGNED NOT NULL,
  `eproduct_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eproduct_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eproduct_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eproduct_qty` int(11) NOT NULL,
  `eproduct_price` int(11) NOT NULL,
  `eproduct_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_electronics`
--

INSERT INTO `tbl_electronics` (`eproduct_id`, `eproduct_name`, `eproduct_short_description`, `eproduct_long_description`, `eproduct_qty`, `eproduct_price`, `eproduct_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Electric UPS/ HOME UPS', 'Digital Back-Up UPS incorporate state-of-the-art technology producing the AC wave power output similar to that you would get from your house power point. These UPS\'s will support all the expensive and sensitive household equipments which will fail to run from the power output of a modified wave UPS. The high quality power output from the pure sine wave UPS will maintain the unit\'s power supply throughout, thus supporting these appliances like your household power unit will. This being the case it is always better to invest in a pure sine wave UPS and get a quality power supply that will support all your equipments without any trouble.An innovative power back-up device, Airkom Digital UPS, designed and developed by Airkom with the latest technology and unique features to handle power failure efficiently. Specially designed for contemporary living, Airkom Digital UPS, compared to ordinary generator is stylish in looks, Ultra-compact, light-', 'Digital Back-Up UPS incorporate state-of-the-art technology producing the AC wave power output similar to that you would get from your house power point. These UPS\'s will support all the expensive and sensitive household equipments which will fail to run from the power output of a modified wave UPS. The high quality power output from the pure sine wave UPS will maintain the unit\'s power supply throughout, thus supporting these appliances like your household power unit will. This being the case it is always better to invest in a pure sine wave UPS and get a quality power supply that will support all your equipments without any trouble.An innovative power back-up device, Airkom Digital UPS, designed and developed by Airkom with the latest technology and unique features to handle power failure efficiently. Specially designed for contemporary living, Airkom Digital UPS, compared to ordinary generator is stylish in looks, Ultra-compact, light-', 50, 750, 'public/electronics_product_image/200046home-ups-500x500.jpg', 1, '2019-11-30 14:00:46', NULL),
(2, 'Lift UPS (3 Phase)', 'State-Of-Art Technology DSC based system\r\nHighly Reliable, Rugged Construction & Compact Design\r\nWide input voltage and frequency range against harsh utility environment\r\nHigh efficiency performances: lower cost of ownership\r\nPower output protected against overload & short circuit enhancing system safety under extreme conditions\r\nHigh over load handling capacity Built in high capacity battery charger\r\nIntelligent charger design to prolong battery lifetime\r\nStarts automatically, no user action required\r\nSynchronized changeover\r\nUser-friendly LCD Screen', 'State-Of-Art Technology DSC based system\r\nHighly Reliable, Rugged Construction & Compact Design\r\nWide input voltage and frequency range against harsh utility environment\r\nHigh efficiency performances: lower cost of ownership\r\nPower output protected against overload & short circuit enhancing system safety under extreme conditions\r\nHigh over load handling capacity Built in high capacity battery charger\r\nIntelligent charger design to prolong battery lifetime\r\nStarts automatically, no user action required\r\nSynchronized changeover\r\nUser-friendly LCD Screen', 50, 630, 'public/electronics_product_image/201452true-online-dsc-based-ups-250x250.jpg', 1, '2019-11-30 14:14:52', NULL),
(3, 'Electric Kettle', 'Large spout, easy to clean Auto switch off upon boiling, boil-dry Strix thermo control, three-action protection.', 'Large spout, easy to clean Auto switch off upon boiling, boil-dry Strix thermo control, three-action protection.', 50, 320, 'public/electronics_product_image/201836Electric-Kettle.jpg', 1, '2019-11-30 14:18:36', NULL),
(4, 'ELECTRONIC PRODUCTS', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', 50, 200, 'public/electronics_product_image/202202tpen_2.jpg', 1, '2019-11-30 14:22:02', NULL),
(5, 'Nokia phones', 'Nokia smartphones get 2 years of software upgrades and 3 years of monthly security updates. Delivering on this promise means that we rank highest for software updates and security, putting us ahead of other smartphone brands. Check out the study from Counterpoint to find out more.', 'Nokia smartphones get 2 years of software upgrades and 3 years of monthly security updates. Delivering on this promise means that we rank highest for software updates and security, putting us ahead of other smartphone brands. Check out the study from Counterpoint to find out more.', 50, 3600, 'public/electronics_product_image/204809nokia_7_2-front_cyangreen.png', 1, '2019-11-30 14:48:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` bigint(20) UNSIGNED NOT NULL,
  `manufacturer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'A', '..................', 1, '2019-11-29 00:16:34', NULL),
(2, 'B', '.................', 1, '2019-11-29 00:16:45', NULL),
(3, 'C', '.............', 1, '2019-11-29 00:16:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_short_description`, `product_long_description`, `product_qty`, `product_price`, `product_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Maspro Badminton Non-Marking Shoe', '1', '1', 'Maspro Badminton Non-Marking Shoe 012, Model No: 0012, Size: UK 4', 'Maspro Badminton Non-Marking Shoe 012, Model No: 0012, Size: UK 4', 555, 750, 'public/product_image/061806badminton-rackets-500x500.jpg', 1, '2019-11-29 00:18:06', NULL),
(2, 'Black Gothic Punk Men\'s Long Sleeve T Shirt', '1', '2', 'This black punk men\'s long sleeve t-shirt has a raglan design, wearing more prominent body, the front neckline has with D button decoration and made with stitching solid color knitting fabric.\r\nAdditional information:\r\n- Actual fabric colors may vary slightly from online colors due to variations in screen color settings.\r\n- Measurements size on size table above for your reference. All size about subject to +/-0.5-1 inches tolerance.', 'This black punk men\'s long sleeve t-shirt has a raglan design, wearing more prominent body, the front neckline has with D button decoration and made with stitching solid color knitting fabric.\r\nAdditional information:\r\n- Actual fabric colors may vary slightly from online colors due to variations in screen color settings.\r\n- Measurements size on size table above for your reference. All size about subject to +/-0.5-1 inches tolerance.', 555, 400, 'public/product_image/062143mens-clothing.png', 1, '2019-11-29 00:21:43', NULL),
(3, 'Blingsoul Brown Leather Jacket for Men - Distressed Motorcycle Real Leather Jackets', '1', '3', 'Zipper closure\r\nMade from 100% High Quality Real Leather with inner viscose lining\r\nThis Mens Brown Leather jacket is crafted by experts to ensure firm stitching and fantastic durability\r\nMultiple pockets, for you to carry your belongings as well as zipper closure that enables you to take this jacket on and off quickly.\r\nThis biker style leather jacket men offers a US modern fit style. You can choose your normal size or refer our size chart.\r\nEasy to carry, Classic design, Suitable for every occasion: For casual gatherings, hangouts, party wear, working, sporting and so on.', 'Zipper closure\r\nMade from 100% High Quality Real Leather with inner viscose lining\r\nThis Mens Brown Leather jacket is crafted by experts to ensure firm stitching and fantastic durability\r\nMultiple pockets, for you to carry your belongings as well as zipper closure that enables you to take this jacket on and off quickly.\r\nThis biker style leather jacket men offers a US modern fit style. You can choose your normal size or refer our size chart.\r\nEasy to carry, Classic design, Suitable for every occasion: For casual gatherings, hangouts, party wear, working, sporting and so on.', 50, 500, 'public/product_image/06272781u7S8M6tPL._UX569_.jpg', 1, '2019-11-29 00:27:27', NULL),
(4, 'Green & Pink Printed Saree', '2', '1', 'Green, pink and blue printed saree and has a woven design border\r\nBlouse Piece\r\nThe model is wearing a stitched version of the blouse. The saree comes with an unstitched blouse piece.', 'Green, pink and blue printed saree and has a woven design border\r\nBlouse Piece\r\nThe model is wearing a stitched version of the blouse. The saree comes with an unstitched blouse piece.', 50, 650, 'public/product_image/050331sahaj-shoppers-women-27s-saree-500x500.jpg', 1, '2019-11-29 23:03:31', NULL),
(5, 'Women Shoes Korean Style Gladiator', '2', '2', 'metal String Bead Summer Women Sandals Open Toe shoes Women’s Sandles Square heel Women Shoes Korean Style Gladiator Shoes m668', 'metal String Bead Summer Women Sandals Open Toe shoes Women’s Sandles Square heel Women Shoes Korean Style Gladiator Shoes m668', 50, 530, 'public/product_image/050951metal-String-Bead-Summer-Women-Sandals-Open-Toe-shoes-Women-s-Sandles-Square-heel-Women-Shoes.jpg', 1, '2019-11-29 23:09:51', NULL),
(6, 'Lzzf Women Shoes', '2', '2', 'Lzzf Women Shoes Designer PU Leather Spring Casual Shoes Outdoor Walking Sneakers Shoes Woman Flats Lace Up Women Tenis Feminino', 'Lzzf Women Shoes Designer PU Leather Spring Casual Shoes Outdoor Walking Sneakers Shoes Woman Flats Lace Up Women Tenis Feminino', 50, 465, 'public/product_image/051314winter-boots-women-ankle-boots-warm-winter-woman-shoes-sneakers-flats-lace-up-ladies-shoes-women.jpg', 1, '2019-11-29 23:13:14', NULL),
(7, 'GoodPro Women Bags', '2', '2', 'Product Feature: Elegant PU leather women bags. Please kindly note that this item is small size bag Handbag inside:All stuff can be well organized ...', 'Product Feature: Elegant PU leather women bags. Please kindly note that this item is small size bag Handbag inside:All stuff can be well organized ...', 50, 250, 'public/product_image/05234771vlQ4BUaJL._UY395_.jpg', 1, '2019-11-29 23:23:47', NULL),
(8, 'Ladies Shoulder Bag', '2', '2', '2018 New Women Bags Set 3 Pcs Leather Handbag Women Large Tote Bags Ladies Shoulder Bag Handbag+Messenger Bag+Purse Sac a Main', '2018 New Women Bags Set 3 Pcs Leather Handbag Women Large Tote Bags Ladies Shoulder Bag Handbag+Messenger Bag+Purse Sac a Main', 50, 250, 'public/product_image/052843Amazon-Ebay-Designer-Handbags-Fashion-Women-Bags-Lady-Tote-Crossbody-Bag-Handbag.jpg', 1, '2019-11-29 23:28:43', NULL),
(9, 'Electric UPS/ HOME UPS', '7', '1', 'Digital Back-Up UPS incorporate state-of-the-art technology producing the AC wave power output similar to that you would get from your house power point. These UPS\'s will support all the expensive and sensitive household equipments which will fail to run from the power output of a modified wave UPS. The high quality power output from the pure sine wave UPS will maintain the unit\'s power supply throughout, thus supporting these appliances like your household power unit will. This being the case it is always better to invest in a pure sine wave UPS and get a quality power supply that will support all your equipments without any trouble.An innovative power back-up device, Airkom Digital UPS, designed and developed by Airkom with the latest technology and unique features to handle power failure efficiently. Specially designed for contemporary living, Airkom Digital UPS, compared to ordinary generator is stylish in looks, Ultra-compact, light-', 'Digital Back-Up UPS incorporate state-of-the-art technology producing the AC wave power output similar to that you would get from your house power point. These UPS\'s will support all the expensive and sensitive household equipments which will fail to run from the power output of a modified wave UPS. The high quality power output from the pure sine wave UPS will maintain the unit\'s power supply throughout, thus supporting these appliances like your household power unit will. This being the case it is always better to invest in a pure sine wave UPS and get a quality power supply that will support all your equipments without any trouble.An innovative power back-up device, Airkom Digital UPS, designed and developed by Airkom with the latest technology and unique features to handle power failure efficiently. Specially designed for contemporary living, Airkom Digital UPS, compared to ordinary generator is stylish in looks, Ultra-compact, light-', 50, 750, 'public/product_image/200022home-ups-500x500.jpg', 1, '2019-11-30 14:00:22', NULL),
(10, 'Lift UPS (3 Phase)', '7', '2', 'State-Of-Art Technology DSC based system\r\nHighly Reliable, Rugged Construction & Compact Design\r\nWide input voltage and frequency range against harsh utility environment\r\nHigh efficiency performances: lower cost of ownership\r\nPower output protected against overload & short circuit enhancing system safety under extreme conditions\r\nHigh over load handling capacity Built in high capacity battery charger\r\nIntelligent charger design to prolong battery lifetime\r\nStarts automatically, no user action required\r\nSynchronized changeover\r\nUser-friendly LCD Screen', 'State-Of-Art Technology DSC based system\r\nHighly Reliable, Rugged Construction & Compact Design\r\nWide input voltage and frequency range against harsh utility environment\r\nHigh efficiency performances: lower cost of ownership\r\nPower output protected against overload & short circuit enhancing system safety under extreme conditions\r\nHigh over load handling capacity Built in high capacity battery charger\r\nIntelligent charger design to prolong battery lifetime\r\nStarts automatically, no user action required\r\nSynchronized changeover\r\nUser-friendly LCD Screen', 50, 630, 'public/product_image/201502true-online-dsc-based-ups-250x250.jpg', 1, '2019-11-30 14:15:02', NULL),
(11, 'Electric Kettle', '7', '3', 'Large spout, easy to clean Auto switch off upon boiling, boil-dry Strix thermo control, three-action protection.', 'Large spout, easy to clean Auto switch off upon boiling, boil-dry Strix thermo control, three-action protection.', 50, 320, 'public/product_image/201756Electric-Kettle.jpg', 1, '2019-11-30 14:17:56', NULL),
(12, 'ELECTRONIC PRODUCTS', '7', '1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', 50, 250, 'public/product_image/202226tpen_2.jpg', 1, '2019-11-30 14:22:26', NULL),
(13, 'Nokia phones', '7', '1', 'Nokia smartphones get 2 years of software upgrades and 3 years of monthly security updates. Delivering on this promise means that we rank highest for software updates and security, putting us ahead of other smartphone brands. Check out the study from Counterpoint to find out more.', 'Nokia smartphones get 2 years of software upgrades and 3 years of monthly security updates. Delivering on this promise means that we rank highest for software updates and security, putting us ahead of other smartphone brands. Check out the study from Counterpoint to find out more.', 50, 36000, 'public/product_image/204745nokia_7_2-front_cyangreen.png', 1, '2019-11-30 14:47:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `womens_category`
--

CREATE TABLE `womens_category` (
  `wcategory_id` bigint(20) UNSIGNED NOT NULL,
  `wcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wcategory_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `womens_category`
--

INSERT INTO `womens_category` (`wcategory_id`, `wcategory_name`, `wcategory_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'sari', '......', 1, '2019-11-29 22:51:07', NULL),
(2, 'Shoe', '......', 1, '2019-11-29 22:51:36', NULL),
(3, 'Women\'s Bag', '.....', 1, '2019-11-29 22:52:21', NULL),
(4, 'Clothing', '........', 1, '2019-11-29 22:53:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `womens_product`
--

CREATE TABLE `womens_product` (
  `wproduct_id` bigint(20) UNSIGNED NOT NULL,
  `wproduct_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wproduct_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wproduct_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wproduct_qty` int(11) NOT NULL,
  `wproduct_price` int(11) NOT NULL,
  `wproduct_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `womens_product`
--

INSERT INTO `womens_product` (`wproduct_id`, `wproduct_name`, `wcategory_id`, `wproduct_short_description`, `wproduct_long_description`, `wproduct_qty`, `wproduct_price`, `wproduct_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Maroon & Gold-Toned Silk Blend Woven Design Kanjeevaram Saree', '1', 'Maroon and Gold-toned kanjeevaram woven design saree and has a woven design border\r\nBlouse Piece\r\nThe model is wearing a blouse from our stylist\'s collection, see the image for a mock-up of what the actual blouse would look like', 'Maroon and Gold-toned kanjeevaram woven design saree and has a woven design border\r\nBlouse Piece\r\nThe model is wearing a blouse from our stylist\'s collection, see the image for a mock-up of what the actual blouse would look like', 50, 650, 'public/womens_product_image/050004download.jpg', 1, '2019-11-29 23:00:04', NULL),
(2, 'Green & Pink Printed Saree', '1', 'Green, pink and blue printed saree and has a woven design border\r\nBlouse Piece\r\nThe model is wearing a stitched version of the blouse. The saree comes with an unstitched blouse piece.', 'Green, pink and blue printed saree and has a woven design border\r\nBlouse Piece\r\nThe model is wearing a stitched version of the blouse. The saree comes with an unstitched blouse piece.', 50, 650, 'public/womens_product_image/050345sahaj-shoppers-women-27s-saree-500x500.jpg', 1, '2019-11-29 23:03:45', NULL),
(3, 'Women Shoes Korean Style Gladiator', '2', 'metal String Bead Summer Women Sandals Open Toe shoes Women’s Sandles Square heel Women Shoes Korean Style Gladiator Shoes m668', 'metal String Bead Summer Women Sandals Open Toe shoes Women’s Sandles Square heel Women Shoes Korean Style Gladiator Shoes m668', 50, 530, 'public/womens_product_image/050920metal-String-Bead-Summer-Women-Sandals-Open-Toe-shoes-Women-s-Sandles-Square-heel-Women-Shoes.jpg', 1, '2019-11-29 23:09:20', NULL),
(4, 'Lzzf Women Shoes', '2', 'Lzzf Women Shoes Designer PU Leather Spring Casual Shoes Outdoor Walking Sneakers Shoes Woman Flats Lace Up Women Tenis Feminino', 'Lzzf Women Shoes Designer PU Leather Spring Casual Shoes Outdoor Walking Sneakers Shoes Woman Flats Lace Up Women Tenis Feminino', 50, 465, 'public/womens_product_image/051245winter-boots-women-ankle-boots-warm-winter-woman-shoes-sneakers-flats-lace-up-ladies-shoes-women.jpg', 1, '2019-11-29 23:12:45', NULL),
(5, 'GoodPro Women Bags', '3', 'Product Feature: Elegant PU leather women bags. Please kindly note that this item is small size bag Handbag inside:All stuff can be well organized ...', 'Product Feature: Elegant PU leather women bags. Please kindly note that this item is small size bag Handbag inside:All stuff can be well organized ...', 50, 100, 'public/womens_product_image/05244071vlQ4BUaJL._UY395_.jpg', 1, '2019-11-29 23:24:40', NULL),
(6, 'Ladies Shoulder Bag', '3', '2018 New Women Bags Set 3 Pcs Leather Handbag Women Large Tote Bags Ladies Shoulder Bag Handbag+Messenger Bag+Purse Sac a Main', '2018 New Women Bags Set 3 Pcs Leather Handbag Women Large Tote Bags Ladies Shoulder Bag Handbag+Messenger Bag+Purse Sac a Main', 50, 465, 'public/womens_product_image/052815Amazon-Ebay-Designer-Handbags-Fashion-Women-Bags-Lady-Tote-Crossbody-Bag-Handbag.jpg', 1, '2019-11-29 23:28:15', NULL),
(7, 'Summer Beach Wear Women Clothing With Tie Dye Casual Dress', '4', '...................', 'Silhouette: Loose fit\r\nNeckline: O-neck\r\nWaistline: High-waisted\r\nSleeve Type: Short Slevees\r\nClosure type: Back concealed zipper\r\nLength: Knee length\r\nStyle: Casual,Fashion, Elegant,Office\r\nTheme: Summer, Spring, Fall\r\nMaterial: 100% Polyester\r\nElasticity: Mid-stretchy\r\nThickness: Middle\r\nOccasion: Casual, Work, Daily etc.', 50, 650, 'public/womens_product_image/0538316526863eab383ca8d27fe3caa27cd848.jpg', 1, '2019-11-29 23:38:31', NULL),
(8, 'Navy Blue Georgette Embroidery salwar kameez nitya', '4', 'Product Details of Navy Blue Georgette Embroidery salwar kameez nitya d-no-2401', 'Product Details of Navy Blue Georgette Embroidery salwar kameez nitya d-no-2401', 50, 465, 'public/womens_product_image/055535product_3510_1.jpg', 1, '2019-11-29 23:55:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mens_category`
--
ALTER TABLE `mens_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `mens_product`
--
ALTER TABLE `mens_product`
  ADD PRIMARY KEY (`mproduct_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`coustomer_id`);

--
-- Indexes for table `tbl_electronics`
--
ALTER TABLE `tbl_electronics`
  ADD PRIMARY KEY (`eproduct_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `womens_category`
--
ALTER TABLE `womens_category`
  ADD PRIMARY KEY (`wcategory_id`);

--
-- Indexes for table `womens_product`
--
ALTER TABLE `womens_product`
  ADD PRIMARY KEY (`wproduct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mens_category`
--
ALTER TABLE `mens_category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mens_product`
--
ALTER TABLE `mens_product`
  MODIFY `mproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `coustomer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_electronics`
--
ALTER TABLE `tbl_electronics`
  MODIFY `eproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `womens_category`
--
ALTER TABLE `womens_category`
  MODIFY `wcategory_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `womens_product`
--
ALTER TABLE `womens_product`
  MODIFY `wproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
