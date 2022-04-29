-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 07:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midnightinkwriters`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `sub_description` text NOT NULL,
  `receive_description` text NOT NULL,
  `use_description` text NOT NULL,
  `price` int(10) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `display_name`, `description`, `sub_description`, `receive_description`, `use_description`, `price`, `created_at`) VALUES
(1, 'Fanbase Boost', 'Fanbase_Boost', 'Use Fanbase boost to skyrocket your exposure and revenue by driving hundreds or even thousands of ebook and softcover sales.', 'Use Fanbase boost to skyrocket your exposure and revenue by driving hundreds or even thousands of ebook and softcover sales. Our daily Fanbase boost emails alert readers to free and discounted books and ebooks matching their genre interests. These limited-time deals are submitted and curated by our expert editorial team specifically for our highly-engaged audience of book-buyers.', 'What you\'ll get\r\n✔️ Find new readers\r\n\r\n✔️ Increase sales to boost rankings or even hit bestseller lists\r\n\r\n✔️ Drive anywhere from thousands of downloads to increase exposure, reviews, or followers\r\n\r\n✔️ Generate revenue from increased sales and full-priced follow on sales\r\n\r\n✔️ Create awareness for an author brand in the lead-up to a new book launch', 'How it works\r\n\r\n1. Submit a book\r\n\r\nFill out a simple form to share the details of your ebook/book deal with our editorial team.\r\n\r\n\r\n2. Create ad creative\r\n\r\nWe will upload a custom ad creative to create your ad image.\r\n\r\n\r\n3. Set your discount\r\n\r\nOnce your feature is confirmed, you are responsible for arranging the discount for your readers. We encourage you to go for a 70% discount to ensure your book will be very viable.\r\n\r\n\r\n4. We send the deal\r\n\r\nOnce we confirm your book is discounted and you approve the date you wanted it to launch, we will email our fanbase and a custom blurb to millions of readers in your category.', 99, '2022-04-29 17:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
