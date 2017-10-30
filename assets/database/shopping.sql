-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 09:26 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_brands_tbl`
--

CREATE TABLE `products_brands_tbl` (
  `product_brands_id` int(11) NOT NULL,
  `product_brand` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_brands_tbl`
--

INSERT INTO `products_brands_tbl` (`product_brands_id`, `product_brand`) VALUES
(1, 'Samsung'),
(2, 'LG'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Vivo'),
(6, 'Cherry Mobile'),
(7, 'Asus'),
(8, 'Acer'),
(9, 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `products_carousel_tbl`
--

CREATE TABLE `products_carousel_tbl` (
  `product_carousel_id` int(11) NOT NULL,
  `product_images` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_carousel_tbl`
--

INSERT INTO `products_carousel_tbl` (`product_carousel_id`, `product_images`, `product_id`) VALUES
(1, 'Flare XL2 1.png', 11),
(2, 'Flare XL2 2.png', 11),
(3, 'Flare S5 Plus 1.png', 8),
(4, 'Flare S5 Plus 2.png', 8),
(5, 'Flare S5 Plus 3.png', 8),
(6, 'Omegal Lite 2 1.png', 7),
(7, 'Omegal Lite 2 2.png', 7),
(15, 'Redmi Note 4X 1.jpg', 12),
(16, 'Redmi Note 4X 2.jpg', 12),
(17, 'Redmi Note 4X 3.jpg', 12),
(18, 'Redmi Note 4X 4.jpg', 12),
(19, 'Samsung Galaxy J7 PRO 1.png', 13),
(20, 'Samsung Galaxy J7 PRO 2.png', 13),
(21, 'Samsung Galaxy J7 PRO 3.png', 13),
(22, 'Xiaomi Redmi 3X 1.png', 14),
(23, 'OPPO A37.png', 15),
(24, 'VIVO Y53.png', 16),
(25, 'adminpicture1.png', 17),
(26, 'logo12111.png', 17);

-- --------------------------------------------------------

--
-- Table structure for table `products_category_tbl`
--

CREATE TABLE `products_category_tbl` (
  `product_category_id` int(11) NOT NULL,
  `product_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_category_tbl`
--

INSERT INTO `products_category_tbl` (`product_category_id`, `product_category`) VALUES
(1, 'Smart Phones');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_description` varchar(5000) NOT NULL,
  `product_stocks` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`product_id`, `product_name`, `product_brand`, `product_category`, `product_price`, `product_discount`, `product_description`, `product_stocks`, `created_at`) VALUES
(7, 'Omega Lite 2', 'Cherry Mobile', 'Smart Phones', '6500', 10, '<h3>Omega Lite 2 specs</h3>\n\n<ul>\n	<li>Android Lollipop 5.1</li>\n	<li>1GHz Quad Core</li>\n	<li>5&quot; HD IPS Screen</li>\n	<li>13MP&nbsp;&amp; 8MP</li>\n	<li>8GB ROM / 1GB RAM</li>\n	<li>Micro SD&nbsp;up to 64GB (Expansion Slot)</li>\n</ul>\n', 98, '2017-10-30 08:21:11'),
(8, 'Flare S5 Plus', 'Cherry Mobile', 'Smart Phones', '9000', 0, '<h3>Flare S5 Plus specs</h3>\n\n<ul>\n	<li>Android Marshmallow 6.0</li>\n	<li>5.5&quot;&nbsp;IPS LCD Screen</li>\n	<li>32 GB ROM | 3GB RAM</li>\n	<li>16 MP PDAF REAR &amp; 8MP FRONT</li>\n	<li>WIFI | LTE Ready</li>\n	<li>Dual Sim</li>\n	<li>3000 mAh</li>\n</ul>\n', 87, '2017-10-30 08:21:11'),
(11, 'Flare XL2', 'Cherry Mobile', 'Smart Phones', '5500', 0, '<h3>Flare XL2 specs</h3>\n\n<ul>\n	<li>Marshmallow 6.0</li>\n	<li>1.3GHz Octa-Core</li>\n	<li>6&quot; HD&nbsp;Screen</li>\n	<li>16MP Rear &amp; 8MP Front&nbsp;</li>\n	<li>16GB ROM / 2GB RAM</li>\n	<li>Micro SD up to 32GB</li>\n	<li>LTE Ready</li>\n</ul>\n', 88, '2017-10-30 08:21:12'),
(12, 'Redmi Note 4X ', 'Xiaomi', 'Smart Phones', '7500', 0, '<h3>Redmi Note 4X specs</h3>\n\n<ul>\n	<li>16GB Internal Storage / 3GB RAM Memory, External Storage Micro SD Up to 256GB (Uses SIM 2 Slot)</li>\n	<li>Dual SIM (Micro-SIM/Nano-SIM, Dual stand-by), Micro USB v2.0 (Quick Charge / OTG capable)</li>\n	<li>5.5 inches 1080 x 1920 Pixels 401 PPI, IPS LCD capacitive touchscreen, 16M colors</li>\n	<li>Android OS, v6.0.1 Marshmallow, MIUI Global 8.2 stable 8.2.5.0 (MCFMIDL)</li>\n	<li>Processor: Octa-core 2.0 GHz Qualcomm Snapdragon 625 2.02GHz</li>\n	<li>13MP Rear Camera / 5MP Front Camera</li>\n	<li>Fingerprint (rear-mounted), accelerometer, gyro, proximity</li>\n	<li>4000 mAh Battery (Not-removable)</li>\n</ul>\n', 94, '2017-10-30 08:21:12'),
(13, 'Samsung Galaxy J7 PRO', 'Samsung', 'Smart Phones', '16000', 0, '<h3>Samsung Galaxy J7 PRO specs</h3>\n\n<ul>\n	<li>Display: 5.5&rdquo; FHD Super AMOLED</li>\n	<li>Processor: Octa-Core 1.6GHz</li>\n	<li>Memory: 3GB (RAM) + 32GB (ROM)</li>\n	<li>Expandable up to 256GB</li>\n	<li>Camera: Rear 13MP (F1.7) &nbsp;+ Front 13MP (F1.9)</li>\n	<li>OS: Android Nougat</li>\n	<li>Battery: 3,600 mAh</li>\n	<li>SIM Type: Dual SIM Dual Socket (dedicated microSD slot)</li>\n	<li>Full Metal Unibody</li>\n	<li>Flash Camera Rear</li>\n	<li>Always on Display</li>\n</ul>\n', 93, '2017-10-30 08:06:09'),
(14, 'Xiaomi Redmi 3X', 'Xiaomi', 'Smart Phones', '9723', 20, '<h3>Xiaomi Redmi 3X specs</h3>\n\n<ul>\n	<li>RAM: 2GB</li>\n	<li>ROM: 32GB</li>\n	<li>Band Details: Unicom 4G TDD / FDD-LTE / Unicom 3G WCDMA / Unicom 2G GSM / &middot; Mobile 4G TDD-LTE / &middot; Mobile 3G TD-SCDMA / &middot; Mobile 2G GSM / &middot; Telecommunications 4G TDD / FDD-LTE / &middot; Telecom 3G EVDO / Telecom 2G CDMA 1X</li>\n	<li>CPU Processor: snapdragon 430 4x1.4GHz + 4x1.1GHz</li>\n	<li>Screen Size ( inches): 5.0</li>\n	<li>Camera Pixel: 13.0MP</li>\n	<li>Front Camera Pixels: 5 MP</li>\n	<li>Battery Capacity: 4100 mAh</li>\n</ul>\n', 94, '2017-10-30 08:06:08'),
(15, 'OPPO A37', 'Oppo', 'Smart Phones', '7990', 13, '<h3>OPPO A37 specs</h3>\n\n<ul>\n	<li>OS:&nbsp;ColorOS 3.0, based on Android 5.1 Lollipop</li>\n	<li>PROCESSOR: QQualcomm MSM8916 Snapdragon 410&nbsp;Quad-core 1.2 GHz Cortex-A53</li>\n	<li>GPU:&nbsp;Adreno 306</li>\n	<li>DISPLAY:&nbsp;5.0&quot; Inches IPS LCD</li>\n	<li>CAMERA:&nbsp;8 MP, f/2.0, autofocus, LED flash Rear&nbsp;+ 5 MP, f/2.4, 1/4&quot; sensor size</li>\n	<li>Network: 4G LTE</li>\n	<li>INTERNAL STORAGE: 16GB ROM + 2GB RAM</li>\n	<li>BATTERY:&nbsp;Non-removable Li-Ion 2630 mAh battery</li>\n</ul>\n', 98, '2017-10-24 20:28:00'),
(16, 'VIVO Y53', 'Vivo', 'Smart Phones', '5990', 0, '<h3>VIVO Y53 specs</h3>\n\n<ul>\n	<li>5.0-inch IPS LCD @ 960 x 540 pixels, 220ppi</li>\n	<li>1.4GHz Qualcomm Snapdragon 425 quad-core CPU</li>\n	<li>Adreno 308</li>\n	<li>2GB RAM + 16GB internal storage</li>\n	<li>Expandable via microSD, up to 256GB (dedicated slot)</li>\n	<li>8MP rear autofocus camera w/ LED flash</li>\n	<li>5MP front-facing camera w/ screen flash</li>\n	<li>Dual-SIM (Nano)</li>\n	<li>4G LTE</li>\n	<li>USB OTG</li>\n	<li>FunTouch OS 3.0 (Android 6.0 Marshmallow)</li>\n	<li>2500mAh non-removable battery</li>\n</ul>\n', 90, '2017-10-30 08:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `products_transactions_tbl`
--

CREATE TABLE `products_transactions_tbl` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_brands_tbl`
--
ALTER TABLE `products_brands_tbl`
  ADD PRIMARY KEY (`product_brands_id`);

--
-- Indexes for table `products_carousel_tbl`
--
ALTER TABLE `products_carousel_tbl`
  ADD PRIMARY KEY (`product_carousel_id`);

--
-- Indexes for table `products_category_tbl`
--
ALTER TABLE `products_category_tbl`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_transactions_tbl`
--
ALTER TABLE `products_transactions_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_brands_tbl`
--
ALTER TABLE `products_brands_tbl`
  MODIFY `product_brands_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products_carousel_tbl`
--
ALTER TABLE `products_carousel_tbl`
  MODIFY `product_carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products_category_tbl`
--
ALTER TABLE `products_category_tbl`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products_transactions_tbl`
--
ALTER TABLE `products_transactions_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
