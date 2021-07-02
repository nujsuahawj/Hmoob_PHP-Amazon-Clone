-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 04:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaclone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Biba'),
(7, 'Flying Machine'),
(8, 'Nike'),
(9, 'Adidas'),
(10, 'Kidzee'),
(11, 'Ikea'),
(12, 'Philips'),
(15, 'vivek');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wear'),
(3, 'Mens Wear'),
(4, 'Kids Wear'),
(5, 'Home Appliances'),
(6, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `email`, `phone`, `message`) VALUES
(1, 'vivek', 'pandey', 'vivek65k@gmail.com', '8210991424', 'hii vivek'),
(2, 'office', 'techno india', 'vivek65k@gmail.com', '8210991424', 'hii ');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `tr_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `uid`, `pid`, `p_name`, `p_price`, `p_qty`, `p_status`, `tr_id`) VALUES
(23, 1, 2, 'iPhone 5s', 75000, 3, 'CONFIRMED', '642272811'),
(24, 1, 2, 'iPhone 5s', 25000, 1, 'CONFIRMED', '1149882300'),
(25, 1, 3, 'iPad', 30000, 1, 'CONFIRMED', '1149882300'),
(26, 1, 1, '            Samsung Duos 2', 65000, 1, 'CONFIRMED', '2046345827'),
(27, 1, 2, 'iPhone 5s', 25000, 1, 'CONFIRMED', '2046345827'),
(28, 1, 3, 'iPad', 30000, 1, 'CONFIRMED', '2046345827'),
(29, 1, 1, '            Samsung Duos 2', 65000, 1, 'CONFIRMED', '1786138565'),
(30, 1, 2, 'iPhone 5s', 25000, 1, 'CONFIRMED', '1786138565'),
(31, 1, 11, 'Baby Shirt', 500, 1, 'CONFIRMED', '124299469'),
(32, 1, 12, 'Kids Jeans', 800, 1, 'CONFIRMED', '124299469'),
(33, 1, 48, 'kid ware', 500, 1, 'CONFIRMED', '1193545458'),
(34, 1, 8, 'SIlk Saree', 1000, 1, 'CONFIRMED', '1193545458'),
(35, 2, 1, '            Samsung Duos 2', 65000, 1, 'CONFIRMED', '83808687'),
(36, 1, 1, '            Samsung Duos 2', 65000, 1, 'CONFIRMED', '127551157');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, '1', '1', '            Samsung Duos 2', 65000, 'Samsung Duos 2 mobile phone', 'images (2).jpg', '            samsung mobile electronics'),
(2, '1', '3', 'iPhone 5s', 25000, 'iPhone mobile ', 'iphonemobile.JPG', 'apple iphone mobile electronics'),
(3, '1', '3', 'iPad', 30000, 'iPad tablet for use', 'iPad.jpg', 'apple ipad tablet'),
(4, '1', '2', 'Samsung Tab', 10000, 'samsung tablet for home use', 'samsungtab.JPG', 'samsung tablet electronics'),
(5, '1', '4', 'Sony Vaio Laptop', 25000, 'Vaio Laptop', 'vaio.JPG', 'sony laptop vaio'),
(6, '1', '5', 'LG Aqua 2', 15000, 'LG aqua mobile phone all featured', 'lgaqua.JPG', 'lg mobile phone aqua'),
(7, '2', '6', 'Draped Lehenga', 1500, 'Matching Lehenga', 'lehenga.JPG', 'lehenga biba'),
(8, '2', '6', 'SIlk Saree', 1000, 'Pure Silk Saree', 'saree.JPG', 'biba saree'),
(9, '3', '7', 'T-Shirt', 700, 'T-Shirt for summer', 'tshirt.JPG', 'flying machine tshirt'),
(10, '3', '7', 'FM Jeans', 1800, 'Jeans for the ones who do', 'jeans.JPG', 'flying machine jeans'),
(11, '4', '10', 'Baby Shirt', 500, 'Shirt for the babies', 'babyshirt.JPG', 'kids shirt kidzee'),
(12, '4', '10', 'Kids Jeans', 800, 'Jeans for kids', 'kidsjeans.JPG', 'kids jeans kidzee'),
(13, '5', '11', 'Computer Table', 2000, 'Table for computer', 'computertable.JPG', 'computer table ikea '),
(14, '5', '12', 'Trimmer', 1500, 'Trimmer by Philips', 'philipstrimmer.JPG', 'philips trimmer'),
(15, '6', '8', 'Football Shoes', 2500, 'Shoes to play football by Nike', 'nikeshoes.JPG', 'nike shoes football'),
(16, '6', '9', 'Football', 600, 'Football by Adidas', 'adidasfootball.JPG', 'football adidas'),
(33, '1', '1', 'HP 14q Core i3 7th Gen - (4 GB/1 TB HDD/DOS) 14q-c', 26990, 'Stylish & Portable Thin and Light Laptop\r\n\r\n14 inch HD LED Backlit BrightView Display\r\n\r\nLight Laptop without Optical Disk Drive', '6090905cv1d.jpg', 'hp'),
(34, '1', '1', 'HP 15 Core i3 7th Gen - (8 GB/1 TB HDD/DOS) 15-da0', 31890, 'Get upto â‚¹7500 off on exchangeBuy with Exchange\r\n\r\nBank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C\r\n\r\nBank Offer10% off* with Axis Bank Buzz Credit CardT&C', 'Core-i5-HP-Laptop---14500-ak_WBP493492578-1493888068.jpeg', 'hp'),
(35, '1', '1', 'HP 15 Core i3 7th Gen - (8 GB/1 TB HDD/DOS) 15-da0', 31990, 'Get upto â‚¹7500 off on exchangeBuy with Exchange\r\n\r\nBank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C\r\n\r\nBank Offer10% off* with Axis Bank Buzz Credit CardT&C', 'download.jpg', 'HP 15 '),
(36, '1', '1', 'HP 15 Core i3 7th Gen - (4 GB/1 TB HDD/Windows 10 ', 31456, 'Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C\r\n\r\nBank Offer10% off* with Axis Bank Buzz Credit CardT&C\r\n\r\nEMI starting from â‚¹1,060/monthView Plans', 'HP-Pavilion-17t-2015-Red.jpg', ''),
(37, '1', '1', 'HP 15 Ryzen 3 Dual Core - (4 GB/1 TB HDD/Windows 1', 34440, 'HP 15 Ryzen 3 Dual Core - (4 GB/1 TB HDD/Windows 10 Home) 15-db0186AU Laptop  (15.6 inch, Natural Silver, 1.77 kg, With MS Office)', 'download.jpg', ''),
(39, '1', '2', 'Samsung R523 R528 R530 P580 R540 R620 NP-R530 NP-R', 234, 'Size: Laptop-size\r\nInterface: Internal', 'images (3).jpg', 'Samsung R523'),
(41, '1', '3', 'Apple iPad Pro (2018) 64 GB 11 inch with Wi-Fi Onl', 65990, '64 GB ROM\r\n27.94 cm (11 inch) Full HD Display\r\n12 MP Primary Camera | 7 MP Front\r\niOS 12 | Battery: Lithium Polymer\r\nIdeal Usage: Entertainment, High Processing Tasks\r\nProcessor: A12x Bionic Chip, 64-bit Architecture with Neural Engine and Embedded M12 Co-processor', 'download (2).jpg', ''),
(42, '1', '3', 'Apple iPad Pro (2018) 256 GB 11 inch with Wi-Fi On', 76590, '\r\n256 GB ROM\r\n27.94 cm (11 inch) Full HD Display\r\n12 MP Primary Camera | 7 MP Front\r\niOS 12 | Battery: Lithium Polymer\r\nIdeal Usage: Entertainment, High Processing Tasks\r\nProcessor: A12x Bionic Chip, 64-bit Architecture with Neural Engine and Embedded M12 Co-processor', 'download (5).jpg', 'mobile'),
(43, '1', '3', 'Apple iPad Pro (2018) 256 GB 11 inch with Wi-Fi+4G', 4567, '12 MP Primary Camera | 7 MP Front\r\niOS 12 | Battery: Lithium Polymer\r\nProcessor: A12x Bionic Chip, 64-bit Architecture with Neural Engine and Embedded M12 Co-processor', 'images.jpg', 'apple'),
(44, '1', '4', 'Sony Xperia XA Ultra Dual (Graphite Black, 16 GB) ', 24, '3 GB RAM | 16 GB ROM | Expandable Upto 200 GB\r\n15.24 cm (6 inch) Full HD Display\r\n21.5MP Rear Camera | 16MP Front Camera\r\n2700 mAh Li-Ion Battery\r\nMediatek MT6755 64-bit Octa Core 2GHz Processor', 'download (1).jpg', 'sony '),
(45, '1', '4', 'y Xperia L2 Dual (Black, 32 GB)  (3 GB RAM)', 45690, '3 GB RAM | 32 GB ROM | Expandable Upto 256 GB\r\n13.97 cm (5.5 inch) HD Display\r\n13MP Rear Camera | 8MP Front Camera\r\n3300 mAh Battery\r\nMT6737T Processor', 'download (2).jpg', 'sony '),
(46, '1', '4', 'Sony Xperia XA1 (Gold, 32 GB)  (3 GB RAM)', 12990, '3 GB RAM | 32 GB ROM | Expandable Upto 256 GB\r\n12.7 cm (5 inch) HD Display\r\n23MP Rear Camera | 8MP Front Camera\r\n2300 mAh Battery\r\nMediaTek Helio P20 64-bit Processor', 'download (3).jpg', 'sony '),
(47, '1', '1', 'Sony Xperia XZ2 (Liquid Black, 64 GB)  (6 GB RAM)', 72990, '6 GB RAM | 64 GB ROM | Expandable Upto 400 GB\r\n14.48 cm (5.7 inch) Display\r\n19MP Rear Camera\r\n3180 mAh Battery\r\nQualcomm Snapdragon 845 Processor', 'download.jpg', 'sony '),
(48, '4', '10', 'kid ware', 500, 'baba shuit', 'download (2).jpg', 'kid101');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pic`
--

CREATE TABLE `profile_pic` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_pic`
--

INSERT INTO `profile_pic` (`id`, `name`, `image`) VALUES
(12, 'Vivek', '1.jpg'),
(13, 'Vivek', '1.jpg'),
(14, 'Vivek', '394bb308d6712b530f341f546eb19b6c.jpg'),
(15, 'Vivek', 'images (1).png'),
(16, 'Vivek', '1.jpg'),
(17, 'Abc', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `amt` int(100) NOT NULL,
  `tr_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2015-11-12', '2015-11-12'),
(10, 'Amit', 'tomar', 'dfhfd@gm.com', 'f925916e2754e5e03f75dd58a5733251', '82888888888', '2017-12-16'),
(11, 'vivek', 'pandey', 'vivek65k@gmail.com', '061a01a98f80f415b1431236b62bb10b', '8210091424', '2019-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `uid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`uid`, `name`, `email`, `phone`, `address`, `country`, `state`, `city`) VALUES
(1, 'vivekpandey', 'vivek65k@gmail.com', '821001424', 'hi', 'Angola', 'Kwanza Sul', 'Quibala');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Vivek', 'Pandey', 'vivek65k@gmail.com', '061a01a98f80f415b1431236b62bb10b', '8210991424', 'dam dam', 'kolkata'),
(2, 'Abc', 'Roy', 'susmitasen410@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8210991424', 'techno india hoogly', 'chinsurah 712101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile_pic`
--
ALTER TABLE `profile_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `profile_pic`
--
ALTER TABLE `profile_pic`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
