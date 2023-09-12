-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 02:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vestido`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(300) NOT NULL,
  `a_date` date NOT NULL DEFAULT current_timestamp(),
  `a_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_date`, `a_status`) VALUES
(1, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2023-08-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_desc` longtext NOT NULL,
  `c_image` varchar(300) NOT NULL,
  `c_status` varchar(50) NOT NULL,
  `c_adate` date NOT NULL DEFAULT current_timestamp(),
  `c_udate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_desc`, `c_image`, `c_status`, `c_adate`, `c_udate`) VALUES
(1, 'Clothing ', 'Explore our curated collection of clothing that encompasses timeless classics and the latest trends. From versatile tops to comfortable bottoms, elegant dresses, and cozy outerwear, our selection caters to every occasion and style. Find your perfect pieces that not only elevate your wardrobe but also express your individuality.', 'uploads/WhatsApp Image 2023-08-26 at 3.04.26 PM.jpeg', 'Active', '2023-08-26', '0000-00-00'),
(2, 'Shoes ', 'Step into a world of comfort and style with our diverse range of footwear. From navigating city streets to embracing the great outdoors, our collection has something for every journey. Discover sneakers for active days, chic sandals for warmer weather, and a variety of boots and formal shoes that elevate your look with every step. Find the perfect pair that not only fits your feet but also complements your unique style, making every stride a confident statement.', 'uploads/WhatsApp Image 2023-08-26 at 3.54.03 PM.jpeg', 'Active', '2023-08-26', '0000-00-00'),
(4, 'Bags', 'Discover the perfect companion for your everyday adventures with our curated collection of bags. From functional to fashionable, our assortment caters to your needs. Explore spacious totes, versatile backpacks, and elegant clutches that add sophistication to your ensemble. Find the bag that suits your lifestyle and expresses your personal flair, ensuring you are always prepared and on-trend wherever you go.', 'uploads/Bags_WhatsAppImage2023-08-26at3.53.38PM.jpeg', 'Active', '2023-08-26', '0000-00-00'),
(5, 'Wallets ', 'Stay organized and stylish with our collection of wallets designed to suit your needs. From compact cardholders to spacious bi-folds, our options keep your essentials secure. Explore designs that combine functionality with fashion, ensuring your cards, cash, and IDs are always accessible. Elevate your everyday carry with a wallet that complements your style', 'uploads/Wallets_WhatsAppImage2023-08-26at3.53.42PM1.jpeg', 'Active', '2023-08-26', '0000-00-00'),
(6, 'Perfumes', 'Indulge your senses with our captivating collection of perfumes. From enchanting florals to bold woody notes, our fragrances are crafted to evoke emotions and memories. Explore a symphony of scents that enhance your presence and leave a lasting impression. Whether you prefer a subtle aura or a signature statement, find the perfect perfume that becomes a part of your unique identity.', 'uploads/Perfumes_WhatsAppImage2023-08-26at3.46.08PM.jpeg', 'Active', '2023-08-26', '0000-00-00'),
(7, 'Glasses ', 'See the world through a stylish lens with our curated collection of glasses. From classic frames to contemporary designs, our assortment caters to your vision and fashion needs. Explore a variety of shapes, materials, and colors that enhance your look and express your personality. Find the perfect pair that not only complements your face but also reflects your individuality, making every moment a clear and fashionable one.', 'uploads/Glasses_WhatsAppImage2023-08-26at3.46.58PM1.jpeg', 'Active', '2023-08-26', '0000-00-00'),
(8, 'Caps & Hats', 'asa', 'uploads/Caps & Hats_WhatsAppImage2023-08-26at3.45.45PM1.jpeg', 'Active', '2023-08-26', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` longtext NOT NULL,
  `p_image1` varchar(300) DEFAULT NULL,
  `p_image2` varchar(300) DEFAULT NULL,
  `p_image3` varchar(300) DEFAULT NULL,
  `p_image4` varchar(300) DEFAULT NULL,
  `p_image5` varchar(300) DEFAULT NULL,
  `p_color` varchar(300) DEFAULT NULL,
  `p_gender` varchar(100) NOT NULL,
  `p_status` varchar(50) NOT NULL,
  `p_adate` date NOT NULL DEFAULT current_timestamp(),
  `p_udate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_id`, `p_name`, `p_desc`, `p_image1`, `p_image2`, `p_image3`, `p_image4`, `p_image5`, `p_color`, `p_gender`, `p_status`, `p_adate`, `p_udate`) VALUES
(1, 1, 'Gray Tshirt', 'asasasa', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.07 PM (1).jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.07 PM.jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.08 PM (1).jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.09 PM.jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.10 PM.jpeg', '#919ea6', 'Male', 'Active', '2023-08-26', '0000-00-00'),
(2, 2, 'D & G Shoes', 'D & G Shoes', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.04 PM.jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.03 PM (1).jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.04 PM (1).jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.02 PM.jpeg', 'uploads/products/WhatsApp Image 2023-08-26 at 3.54.05 PM.jpeg', '#6a6867', 'Male', 'Active', '2023-08-26', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
