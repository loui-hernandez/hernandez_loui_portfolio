-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2024 at 04:41 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(125) NOT NULL,
  `email` varchar(260) NOT NULL,
  `comments` varchar(2500) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `image_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `project_id`, `image_filename`) VALUES
(1, 1, 'image1a.webp'),
(2, 1, 'image1b.webp'),
(3, 1, 'image1c.webp'),
(4, 1, 'image1d.webp'),
(5, 1, 'image1e.webp'),
(6, 1, 'image1f.webp'),
(7, 1, 'image1g.webp'),
(8, 1, 'image1h.webp'),
(9, 1, 'image1i.webp'),
(10, 1, 'image1a.webp'),
(11, 1, 'image1b.webp'),
(12, 1, 'image1c.webp'),
(13, 2, 'image1a.webp'),
(14, 2, 'image1b.webp'),
(15, 2, 'image1c.webp'),
(16, 3, 'image3a.webp'),
(17, 3, 'image3b.webp'),
(18, 3, 'image3c.webp');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'Ceci Cosmetics', 'Born from creativity and sophistication, CeCi Cosmetics is a celebration of elegance and joy. The animated logo dances, inviting discovery. The skincare collection tells a story of care and empowerment. In each detail, CeCi paints a picture of timeless beauty and confidence. Explore our website and discover the essence of CeCi Cosmetics.', 'project1_thumb.webp'),
(2, 'Beans Pro Earbuds', 'Discover the essence of Beans Pro Earbuds – a harmonious blend of innovation and design. Our brand identity, from the sleek logo to the vibrant color palette, embodies cutting-edge technology. The website, a digital symphony of user-centric design, provides an immersive experience, showcasing the product seamlessly. Collaboration with the Beans Pro team ensured every step resonated with their vision. Explore our website and dive into a world where style meets superior sound. Beans Pro – Elevate your audio experience.', 'project2_thumb.webp'),
(3, 'Billy Beer Rebrand', 'Crafting Billy Beer and its website was a journey inspired by a passion for exceptional brewing. From selecting the finest ingredients to designing a website that reflects our commitment to quality, our goal is to offer a unique and memorable experience. Explore the story behind every bottle and navigate our user-friendly site to discover the essence of Billy Beer.', 'project3_thumb.webp'),
(5, 'Burton Live Events', 'Burton Live Events\' branding was crafted to embody the spirit of dynamic and unforgettable live experiences. The process involved selecting vibrant colors, bold typography, and a versatile logo to capture the energy of events. Consistency across digital and print materials ensures a cohesive and memorable brand presence. ', 'project5_thumb.webp'),
(6, 'Strong Media Corp', 'Strong Media Corp\'s branding exudes strength and innovation. The design process focused on a robust color palette and dynamic visuals, complemented by impactful typography. The logo symbolizes strength, and consistency across digital and print materials ensures a unified and memorable brand presence.', 'project6_thumb.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'lhernandez', 'myportfolio321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
