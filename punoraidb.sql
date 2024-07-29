-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `punoraidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_product_id` int(11) DEFAULT NULL,
  `cart_user_id` int(11) DEFAULT NULL,
  `cart_added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_show_home` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_show_home`) VALUES
(1, 'Evening Gowns', 1),
(2, 'Cocktail Dresses', 1),
(3, 'Casual Suits', 0),
(4, 'Designer Suits', 1),
(5, 'Handbags', 0),
(6, 'Messenger Bags', 0),
(7, 'Eco-Friendly & Sustainable Bags', 1),
(8, 'Workwear Dresses', 1),
(9, 'Business Suits', 1),
(10, 'Accessories', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_subcat_id` int(11) NOT NULL,
  `product_selling_price` decimal(10,2) DEFAULT NULL,
  `product_seller_id` int(11) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_main_img_id` int(11) DEFAULT NULL,
  `product_hidden` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_subcat_id`, `product_selling_price`, `product_seller_id`, `product_description`, `product_main_img_id`, `product_hidden`) VALUES
(1, 'Product 1', 5, '19.99', 2, 'Description of product 1.', 1, 1),
(2, 'Product 2', 12, '29.99', 3, 'Description of product 2.', 2, 1),
(3, 'Product 3', 7, '39.99', 2, 'Description of product 3.', 3, 1),
(4, 'Product 4', 22, '49.99', 3, 'Description of product 4.', 4, 1),
(5, 'Product 5', 3, '59.99', 2, 'Description of product 5.', 5, 1),
(6, 'Product 6', 18, '69.99', 3, 'Description of product 6.', 6, 1),
(7, 'Product 7', 11, '79.99', 2, 'Description of product 7.', 7, 1),
(8, 'Product 8', 24, '89.99', 3, 'Description of product 8.', 8, 1),
(9, 'Product 9', 16, '99.99', 2, 'Description of product 9.', 9, 1),
(10, 'Product 10', 9, '109.99', 3, 'Description of product 10.', 10, 1),
(11, 'Product 11', 9, '123.99', 3, 'Description of product 11.', 10, 1),
(12, 'Product 12', 9, '129.00', 3, 'Description of product 12.', 10, 1),
(13, 'Product 13', 9, '190.00', 3, 'Description of product 13.', 10, 1),
(14, 'Product 14', 9, '10.00', 3, 'Description of product 14.', 10, 1),
(15, 'Product 15', 9, '100.00', 3, 'Description of product 15.', 10, 1),
(16, 'Product 16', 9, '400.00', 3, 'Description of product 16.', 10, 1),
(17, 'Product 17', 9, '500.00', 3, 'Description of product 17.', 10, 1),
(18, 'Product 18', 9, '50.00', 3, 'Description of product 18.', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `pimg_id` int(11) NOT NULL,
  `pimg_product_id` int(11) DEFAULT NULL,
  `pimg_uploader_id` int(11) NOT NULL,
  `pimg_src` varchar(255) NOT NULL,
  `pimg_uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`pimg_id`, `pimg_product_id`, `pimg_uploader_id`, `pimg_src`, `pimg_uploaded_at`) VALUES
(1, 1, 2, 'p1.jpg', '2024-04-08 14:40:59'),
(2, 2, 3, 'p2.jpg', '2024-04-08 14:40:59'),
(3, 3, 2, 'p3.jpg', '2024-04-08 14:40:59'),
(4, 4, 3, 'p4.jpg', '2024-04-08 14:40:59'),
(5, 5, 2, 'p5.jpg', '2024-04-08 14:40:59'),
(6, 6, 3, 'p6.jpg', '2024-04-08 14:40:59'),
(7, 7, 2, 'p1.jpg', '2024-04-08 14:40:59'),
(8, 8, 3, 'p2.jpg', '2024-04-08 14:40:59'),
(9, 9, 2, 'p3.jpg', '2024-04-08 14:40:59'),
(10, 10, 3, 'p4.jpg', '2024-04-08 14:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `seller_user_id` int(11) NOT NULL,
  `seller_store_name` varchar(255) NOT NULL,
  `seller_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `seller_user_id`, `seller_store_name`, `seller_created_at`) VALUES
(2, 12, 'Dokan', '2024-03-29 11:56:57'),
(3, 4, 'Fashion House', '2024-03-29 13:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `subcat_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `subcat_category_id`) VALUES
(1, 'SubcategoryName1', 2),
(2, 'SubcategoryName2', 9),
(3, 'SubcategoryName3', 4),
(4, 'SubcategoryName4', 8),
(5, 'SubcategoryName5', 7),
(6, 'SubcategoryName6', 3),
(7, 'SubcategoryName7', 8),
(8, 'SubcategoryName8', 10),
(9, 'SubcategoryName9', 2),
(10, 'SubcategoryName10', 6),
(11, 'SubcategoryName11', 10),
(12, 'SubcategoryName12', 5),
(13, 'SubcategoryName13', 10),
(14, 'SubcategoryName14', 1),
(15, 'SubcategoryName15', 10),
(16, 'SubcategoryName16', 3),
(17, 'SubcategoryName17', 1),
(18, 'SubcategoryName18', 1),
(19, 'SubcategoryName19', 5),
(20, 'SubcategoryName20', 3),
(21, 'SubcategoryName21', 2),
(22, 'SubcategoryName22', 4),
(23, 'SubcategoryName23', 10),
(24, 'SubcategoryName24', 9),
(25, 'SubcategoryName25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_full_name` text DEFAULT NULL,
  `user_mobile` int(11) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `seller_or_buyer` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_dob` date NOT NULL,
  `user_gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_full_name`, `user_mobile`, `google_id`, `facebook_id`, `seller_or_buyer`, `created_at`, `user_dob`, `user_gender`) VALUES
(4, 'j@j.com', '$2y$10$V35/q0WfsmmBWK7rC8yniOQPJc8h0F2/srWOlSSyejVXzrLaAjJoK', NULL, 0, NULL, NULL, 1, '2024-03-18 20:52:34', '0000-00-00', 0),
(5, 'ds@g.com', '$2y$10$qbMYCwdB2DWF6aqVjJeZRuTAiOxAWS90M1J3l4ZgDj7XGsSzl5rru', NULL, 0, NULL, NULL, 0, '2024-03-18 20:55:44', '0000-00-00', 0),
(6, 'ds1@g.com', '$2y$10$N/zk.jMcpmnJl9IiCPnDUO08sqhsFmwV0IMMcDM9VBzPwpPuyorzW', NULL, 0, NULL, NULL, 0, '2024-03-18 20:56:29', '0000-00-00', 0),
(7, 'jh@f.com', '$2y$10$z8lueqyXvLBV8HASM5lt5ezKcmyLGhwuTHyo4YfHBSF9IeyQjc.Xy', NULL, 0, NULL, NULL, 0, '2024-03-18 20:58:01', '0000-00-00', 0),
(8, 'klkk@g.com', '$2y$10$pAvjKaWk1dP3Idw9tQPcxOWCqf3Qr1rRskkx1OVe/Orc.CIXRr56C', NULL, 0, NULL, NULL, 0, '2024-03-18 21:05:57', '0000-00-00', 0),
(9, 'ffgfdg@g.com', '$2y$10$TxWXxrGW/gm0wW.KyrEZJuqoP/W4HVsIltvNT99r.VTmcQmuhiPVO', NULL, 0, NULL, NULL, 0, '2024-03-18 21:08:26', '0000-00-00', 0),
(10, 'iuiui@g.com', '$2y$10$wv1nkGdCUJAbUB7FKLhDV.EZg5ce9SmA7XBJ084YLl8MKnjjL7GGe', NULL, 0, NULL, NULL, 0, '2024-03-18 21:10:19', '0000-00-00', 0),
(11, 'jklh@gfd.com', '$2y$10$4n8VocPzmgji/KYYpw06j./ldm/ym3nu6DFXyeLhAWkK/qYg3e/2e', NULL, 0, NULL, NULL, 0, '2024-03-19 15:26:59', '0000-00-00', 0),
(12, 'j@l.com', '$2y$10$OEQ93.eEdzOSjpN7bnB9hulimcXSfxcNRN6Tn1YusY9s8NM4ICJCy', NULL, 0, NULL, NULL, 1, '2024-03-25 05:57:17', '1994-08-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`pimg_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `subcat_category_id` (`subcat_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`subcat_category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
