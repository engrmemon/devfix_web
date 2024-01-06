-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 09:25 PM
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
-- Database: `dev-fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_des`) VALUES
(1, 'software development', 'Our software development services for website offer end-to-end solutions that cover the entire software development life cycle, from ideation to deployment and maintenance. Our team of experienced developers uses cutting-edge technologies, best practices, and proven methodologies to deliver high-quality and reliable software solutions tailored to meet the unique needs of our clients.'),
(2, 'automation', 'We offer automating repetitive or manual tasks, such as data entry, scheduling, and reporting, as well as more complex processes, such as data analysis and machine learning.'),
(3, 'digital_agency', 'It provides a range of services related to digital marketing and online branding. These services may include website design and development, social media marketing, search engine optimization, pay-per-click advertising, email marketing, content creation, and analytics tracking.'),
(4, 'digital_marketing', 'Digital marketing services refer to the various strategies and techniques used by businesses to promote their products or services online. This can include activities such as website design and development, search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, email marketing, content creation, and analytics tracking.'),
(5, 'event_mgt', 'We specialize in delivering exceptional event experiences and creating visually stunning digital content that engages your audience and drives business growth.'),
(6, 'graphics', 'Graphic design services are used by businesses of all sizes and in various industries to create branding materials, marketing collateral, and other visual content. Our services are designing logos, websites, marketing materials, advertisements, and other types of visual content.'),
(7, 'mobile_dev', 'Mobile development services refer to the process of creating applications or software specifically designed to run on mobile devices, such as smartphones and tablets. These services can include everything from designing and developing the app itself to testing, launching, and maintaining it over time.'),
(8, 'tax_business', 'We provide tax and business consulting services to clients across various industries. Our team of experienced professionals has the knowledge and expertise to help businesses and individuals navigate complex tax and business issues. We offer personalized solutions tailored to meet the unique needs and goals of our clients. Contact us today to learn how we can help you achieve your tax and business objectives.'),
(9, 'training', 'Training and e-services provided on websites refer to the delivery of education, training, and other services through a website or online platform. This method of delivery allows users to access the resources and services they need from anywhere with an internet connection, at any time that is convenient for them.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
