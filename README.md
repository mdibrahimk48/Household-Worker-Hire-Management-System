-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 11:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hwh_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(9, 9, 1, 1),
(10, 16, 9, 1),
(11, 13, 2, 2),
(12, 13, 1, 1),
(13, 13, 5, 1),
(14, 18, 10, 1),
(15, 18, 5, 1),
(16, 20, 7, 1),
(17, 20, 17, 1),
(19, 21, 13, 2),
(20, 23, 4, 1),
(21, 45, 35, 3),
(26, 45, 37, 5),
(27, 48, 37, 2),
(28, 41, 35, 1),
(29, 48, 34, 1),
(31, 48, 44, 3),
(32, 45, 47, 1),
(33, 45, 46, 4),
(34, 56, 17, 2),
(35, 56, 36, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(2, 'HOME CLEANING SERVICE', 'home-cleaner'),
(4, 'PLUMBING & SANITARY', 'plumber-sanitary'),
(5, 'WALL PAINTING', 'painter'),
(7, 'FARNITURE REPAIR', 'furniture-repair'),
(8, 'HOUSE SHIFTING', 'house-shifting'),
(9, 'ELECTRIC REPAIR', 'electric-repair'),
(11, 'GAS STOVE/BURNER', 'gas-stove-repair'),
(14, 'New Test Category', '');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `ID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `transaction` varchar(100) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`ID`, `userID`, `amount`, `transaction`, `role`) VALUES
(9, 41, 100, 'PAY-1RT494832H294925RLLZ7TZA', 1),
(10, 41, 100, 'PAY-1RT494832H294925RLLZ7TZA', 1),
(14, 41, 400, 'cash on delivery', 1),
(15, 45, 900, 'PAY-1RT494832H294925RLLZ7TZA', 1),
(16, 48, 600, 'PAY - 1589XYZBS', 1),
(17, 48, 3690, 'PAY - PHSG8905435JKF', 1),
(18, 45, 6500, 'PAY-ZLXTYH', 1),
(19, 56, 1700, 'PAY-ZLXTYHU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `subject`, `comment`) VALUES
(7, 'Test Data', 'Dhaka@fdsfs.xcvc', 'Test', 'Test'),
(8, 'Test Data', 'Dhaka@fdsfs.xcvc', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(17, 9, 1, 3),
(18, 10, 13, 3),
(21, 12, 13, 3),
(22, 16, 35, 3),
(23, 13, 37, 5),
(24, 11, 11, 5),
(25, 13, 35, 1),
(26, 14, 31, 15),
(27, 15, 34, 8),
(28, 16, 37, 5),
(29, 16, 46, 4),
(30, 16, 47, 1),
(31, 17, 17, 2),
(32, 17, 36, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `c_photo` varchar(300) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `c_photo`, `date_view`, `counter`) VALUES
(1, 4, 'Sariul Hasan', '<p>Interprets blueprints and building specifications to map layout for pipes, drainage systems, and other plumbing materials. Installs pipes and fixtures, such as sinks and toilets, for water, gas, steam, air, or other liquids. Installs supports for pipes, equipment, and fixtures prior to installation.</p>\r\n', 'sariul-hasan', 300, 'sariul-hasan_1576600886.jpg', '', '2019-12-28', 2),
(8, 9, 'Ashek Mahmud', '<p>Being a leader in the industry, we are engaged in offering aservices Electric Repair&nbsp;to our clients.<br />\r\n<strong>Features</strong>:</p>\r\n\r\n<ul>\r\n	<li><strong>Qualityful Work</strong></li>\r\n	<li><strong>Finish on Time</strong></li>\r\n	<li><strong>Experienced Worker</strong></li>\r\n</ul>\r\n', 'ashek-mahmud', 300, 'ashek-mahmud_1577567956.jpg', '', '0000-00-00', 0),
(11, 2, 'Akxara Roy', '<p>A&nbsp;<em>cleaner</em>&nbsp;or a&nbsp;<em>cleaning</em>&nbsp;operative is a type of industrial or domestic&nbsp;<em>worker</em>&nbsp;who cleans&nbsp;<em>homes</em>&nbsp;or commercial premises for payment. <em>Cleaning</em>operatives often&nbsp;<em>work</em>&nbsp;when the people who otherwise occupy the space are not around. They may&nbsp;<em>clean</em>&nbsp;offices at night or houses during the workday.</p>\r\n', 'akxara-roy', 150, 'akxara-roy_1576609545.png', '', '2019-12-27', 1),
(12, 2, 'Ayesha Begum', '<p><strong>Housekeeping refers to the management of duties and chores involved in the running of a&nbsp;<em>household</em>, such as&nbsp;<em>cleaning</em>, cooking,&nbsp;<em>home</em>&nbsp;maintenance, shopping, and bill payment. These tasks may be performed by members of the&nbsp;<em>household</em>, or by other.</strong></p>\r\n', 'ayesha-begum', 120, 'ayesha-begum_1576609687.jpg', '', '2019-12-19', 3),
(13, 2, 'Daliya Begum', '<p><strong>Cleaners</strong>&nbsp;perform a range of duties to keep your business&nbsp;<strong>clean</strong>, such as dusting, mopping, sweeping, waxing floors and vacuuming. They&#39;re also responsible for performing routine inspections to check that spaces like restrooms are always sanitary.</p>\r\n', 'daliya-begum', 100, 'daliya-begum_1576609429.jpg', '', '2019-09-14', 4),
(17, 4, 'Sobuj Sarkar', '<p><strong>Interprets blueprints and building specifications to map layout for pipes, drainage systems, and other plumbing materials. Installs pipes and fixtures, such as sinks and toilets, for water, gas, steam, air, or other liquids. Installs supports for pipes, equipment, and fixtures prior to installation.</strong></p>\r\n', 'sobuj-sarkar', 100, 'sobuj-sarkar_1576600942.jpg', '', '2019-12-28', 3),
(27, 9, 'Nahid Islam', '<p>Very much experienced and valuable worker of our company<strong>.</strong><br />\r\n<strong>Expertise Area</strong>:</p>\r\n\r\n<ul>\r\n	<li>Electrical Line Connection</li>\r\n	<li>Electrical Component Repair</li>\r\n	<li>Ability to Work Within Time.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'nahid-islam', 200, 'cng-indicator-switch_1575920671.jpg', '', '2019-12-19', 4),
(31, 9, 'Test Data', '<p>Test</p>\r\n', 'test-data', 200, 'test-data.jpg', '', '2019-12-19', 1),
(32, 5, 'Shakil Ahmed', '<p>A wide range of services including-&nbsp;Wall plaster work, Power washing, Drywall repair, Waterproofing, Wall Painting, Custom Design Color, Floor coating, Weather coat, Distemper and more.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Verified Painters with 10+ Years of Experience.</strong></li>\r\n	<li><strong>Custom Design at Affordable Pricing.</strong></li>\r\n	<li><strong>Daily Basis or Project Contract Basis Pricing.</strong></li>\r\n	<li><strong>FREE Painting and Design Consultancy</strong></li>\r\n</ul>\r\n', 'shakil-ahmed', 500, 'shakil-ahmed_1576606102.jpg', '', '2019-12-24', 3),
(33, 5, 'Vijay Devankor', '<p>A wide range of services including-&nbsp;Wall plaster work, Power washing, Drywall repair, Waterproofing, Wall Painting, Custom Design Color, Floor coating, Weather coat, Distemper and more.</p>\r\n\r\n<ul>\r\n	<li><strong>Verified Painters with 10+ Years of Experience.</strong></li>\r\n	<li><strong>Custom Design at Affordable Pricing.</strong></li>\r\n	<li><strong>Daily Basis or Project Contract Basis Pricing.</strong></li>\r\n	<li><strong>FREE Painting and Design Consultancy.</strong></li>\r\n</ul>\r\n', 'vijay-devankor', 220, 'vijay-devankor.jpg', '', '2019-12-28', 1),
(34, 5, 'Naseer Uddin', '<ul>\r\n	<li><strong>Type of Property Covered</strong>: Residential, Commercial</li>\r\n	<li><strong>Material Sourcing</strong>: At Supplier End.</li>\r\n	<li><strong>Mode of Service</strong>: Offline</li>\r\n	<li>With the support of our professionals, we are engaged.</li>\r\n</ul>\r\n', 'naseer-uddin', 180, 'naseer-uddin.jpg', '', '2019-12-27', 6),
(35, 4, 'Rahim Islam', '<ul>\r\n	<li><strong>Interprets blueprints and building specifications to map layout for pipes, drainage systems, and other plumbing materials.</strong></li>\r\n	<li><strong>Installs pipes and fixtures, such as sinks and toilets, for water, gas, steam, air, or other liquids.</strong></li>\r\n	<li><strong>Installs supports for pipes, equipment, and fixtures prior to installation.</strong></li>\r\n</ul>\r\n', 'rahim-islam', 300, 'rahim-islam.jpg', '', '2019-12-24', 2),
(36, 7, 'Moyez Uddin', '<ul>\r\n	<li>PVA Glue. PVA glue, also known as &ldquo;aliphatic resins&rdquo;, is great for wood-to-wood bonding, but it is not very effective in attaching nonporous materials. ...</li>\r\n	<li>Polyurethane Glue. Some would argue that polyurethane glue is the best wood glue since it is waterproof, accepts wood stains, and sands well in thin coatings.&nbsp;</li>\r\n</ul>\r\n', 'moyez-uddin', 500, 'moyez-uddin.jpg', '', '2019-12-28', 1),
(37, 7, 'Firoz Kabir', '<ul>\r\n	<li>Cut a square piece of heavy-duty fabric to use as a patch. ...</li>\r\n	<li>Peel back the torn upholstery, then place the patch below it. ...</li>\r\n	<li>Hold back the upholstery flap, then use an upholstery pin or poultry skewer to pin it in place.</li>\r\n	<li>Brush the patch with a thin, even layer of latex fabric glue.</li>\r\n</ul>\r\n', 'firoz-kabir', 700, 'firoz-kabir.jpg', '', '2019-12-28', 3),
(38, 7, 'Manik Ahmed', '<p>A skilled worker who is employed to&nbsp;<strong>restore</strong>&nbsp;or refinish buildings or antique&nbsp;<strong>furniture</strong>. preserver, refinisher, renovator. skilled worker, skilled workman, trained worker - a worker who has acquired special skills.</p>\r\n', 'manik-ahmed', 450, 'manik-ahmed.jpeg', '', '2019-12-19', 1),
(39, 7, 'Abdul Bari', '<ul>\r\n	<li>Apply a small amount of the fray check around the tear.</li>\r\n	<li>Examine the tear to determine the best needle to use for your repair.</li>\r\n	<li>Use a strong, thicker thread designed for use with upholstery.</li>\r\n	<li>Push the needle through the fabric about &frac12; inch from one side of the end of the tear.</li>\r\n</ul>\r\n', 'abdul-bari', 550, 'abdul-bari.jpg', '', '0000-00-00', 0),
(40, 9, 'Sahadat Hossain', '<ul>\r\n	<li>Read blueprints or technical diagrams.</li>\r\n	<li>Install and maintain wiring, control, and lighting systems.</li>\r\n	<li>Inspect electrical components, such as transformers and circuit breakers.</li>\r\n	<li>Identify electrical problems with a variety of testing devices.</li>\r\n</ul>\r\n', 'sahadat-hossain', 500, 'sahadat-hossain.jpg', '', '0000-00-00', 0),
(41, 9, 'Ragib Mahmood', '<ul>\r\n	<li>Read blueprints or technical diagrams.</li>\r\n	<li>Install and maintain wiring, control, and lighting systems.</li>\r\n	<li>Inspect electrical components, such as transformers and circuit breakers.</li>\r\n	<li>Identify electrical problems with a variety of testing devices.</li>\r\n</ul>\r\n', 'ragib-mahmood', 330, 'ragib-mahmood.jpg', '', '2019-12-19', 1),
(42, 11, 'Jahid Hasan', '<p><strong>The most common household gas appliances that technicians repair are water heaters, washers, dryers, stoves, and fireplaces. Central heating and cooling units are repaired by a separate sub-specialist. Technicians specializing in gas appliances pay particular attention to the heating device and its supporting mechanisms, including thermocouples (heat sensors), thermostats, safety valves, and the continuously running pilot light, which is a frequent source of problems. Gas appliance service technicians must keep abreast of manufacturer service bulletins and also be knowledgeable in the diagnosis, service, and repair.</strong></p>\r\n', 'jahid-hasan', 200, 'jahid-hasan.jpg', '', '0000-00-00', 0),
(43, 11, 'Harun Sarkar', '<p>The most common household gas appliances that technicians repair are water heaters, washers, dryers, stoves, and fireplaces. Central heating and cooling units are repaired by a separate sub-specialist. Technicians specializing in gas appliances pay particular attention to the heating device and its supporting mechanisms, including thermocouples (heat sensors), thermostats, safety valves, and the continuously running pilot light, which is a frequent source of problems. Gas appliance service technicians must keep abreast of manufacturer service bulletins and also be knowledgeable in the diagnosis, service, and repair.</p>\r\n', 'harun-sarkar', 250, 'harun-sarkar.jpg', '', '2019-12-28', 1),
(44, 11, 'Baten Ali', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"vertical-align:top\"><img src=\"https://www.myplan.com/images/bullet_orange.gif\" /></td>\r\n						<td>\r\n						<p>Disassemble appliances so that problems can be diagnosed and repairs can be made.</p>\r\n\r\n						<ul>\r\n							<li>Disassemble equipment for maintenance or repair.</li>\r\n						</ul>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td colspan=\"2\" style=\"vertical-align:top\"><img src=\"https://www.myplan.com/images/spacer_1x1.gif\" style=\"height:1px; width:1px\" /></td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"vertical-align:top\"><img src=\"https://www.myplan.com/images/bullet_orange.gif\" /></td>\r\n						<td>\r\n						<p>Bill customers for repair work, and collect payment.</p>\r\n\r\n						<ul>\r\n							<li>Collect payments for good or services.</li>\r\n						</ul>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td colspan=\"2\" style=\"vertical-align:top\"><img src=\"https://www.myplan.com/images/spacer_1x1.gif\" style=\"height:1px; width:1px\" /></td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"vertical-align:top\"><img src=\"https://www.myplan.com/images/bullet_orange.gif\" /></td>\r\n						<td>\r\n						<p>Trace electrical circuits, following diagrams, and conduct tests with circuit testers and other equipment to locate shorts and grounds.</p>\r\n\r\n						<ul>\r\n							<li>Test electrical circuits or components for proper functioning.</li>\r\n						</ul>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'baten-ali', 150, 'baten-ali.jpg', '', '2019-12-27', 26),
(46, 10, 'Test Worker 2', '<p>Test system (Worker details with price).</p>\r\n', 'test-worker-2', 400, 'test-worker-2.jpg', '', '2019-12-28', 1),
(47, 10, 'Icon Worker (Test)', '<p>Icon worker for test the system.</p>\r\n', 'icon-worker-test', 500, 'icon-worker-test.png', '', '2019-12-28', 1),
(49, 8, 'Pranto Sarkar', '<p>PACK &amp;&nbsp;<em>SHIFT</em>&nbsp;is one of the most experienced and specialized&nbsp;<em>Household</em>&nbsp;&amp; Office hold item domestic and ... We provide A to Z Service of&nbsp;<em>Shifting</em>&nbsp;related&nbsp;<em>work</em>.</p>\r\n', 'pranto-sarkar', 500, 'pranto-sarkar.jpg', '', '2019-12-24', 3),
(50, 13, 'New Worker', '<ul>\r\n	<li>dgdfg</li>\r\n</ul>\r\n', 'new-worker', 150, 'new-worker.png', '', '0000-00-00', 0),
(51, 14, 'New', '<ul>\r\n	<li>vxcbc</li>\r\n</ul>\r\n', 'new', 120, 'new.png', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 41, 'PAY-1RT494832H294925RLLZ7TZA', '2019-12-17'),
(10, 46, 'PAY-21700797GV667562HLLZ7ZVY', '2019-11-11'),
(11, 45, 'PAY-21700797GV667562HLLZ7ZVY', '2019-10-15'),
(12, 48, 'PAY-XYZ150452HFKDKD', '2019-11-12'),
(13, 48, 'PAY - PHSG8905435JKF', '2019-12-19'),
(14, 41, 'PAY-1RT494832H294925RLLZ', '2019-09-17'),
(15, 41, 'PAY-1RT494832H294925RLLZ7TZA', '2019-10-17'),
(16, 45, 'PAY-ZLXTYH', '2019-12-28'),
(17, 56, 'PAY-ZLXTYHU', '2019-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@gmail.com', '$2y$10$bl.jNWr.37x261mvv/G38.w5knja.TAllU2MaLmCGk7e/e6fcWw3u', 1, 'Admin', 'User', '', '', 'ibrahim.jpg', 1, '6cE9PMeIkt4K', '', '2019-11-01'),
(2, 'mdibrahimk48@yahoo.com', '$2y$10$xDG9IWyDNL5kbYRW/UiFUeGVwtfmGk3/ONU/P6Gx9dk3a1Ise/Cqi', 0, 'Ibrahim', 'Khalil', '', '', '1.PNG', 1, 'WhDJBdUPIzo4', '', '2019-12-01'),
(3, '1000100@daffodil.ac', '$2y$10$1LS71Jly57uEkTyihC5x7.qb5GDVEs6.wEAPpJz.dsXn/YW26dmPC', 0, 'Md. Ibrahim', 'Khalil', '', '', '', 1, 'c43rmyS2sBXD', '', '2019-12-01'),
(41, 'mdibrahimk48@gmail.com', '$2y$10$z/g752UDHtZI/dYH1I3wG.ajMKL1eDK0J5FFr5LxCvxY0mBMVbdJq', 0, 'Md. Ibrahim', 'Khalil', '', '', '', 1, 'Qr3AWZaBzVUl', '', '2019-12-08'),
(42, 'zenuwoyag@xperiae5.com', '$2y$10$E7tLycau8o8ppFiQAWQmoeiETAOb9RqL0MLdV/D/f.zJ/4qUKfTES', 0, 'Test User', '11', '', '', '', 0, 'jh4wpymL1MxH', '', '2019-12-11'),
(43, 'test2@yahoo.com', '$2y$10$gp5aXf160MB49vhaArKsseyH8pDWkpaJoWxBuJVQF86yw1o1vCT3u', 0, 'Test', 'User 1', 'Dhaka, Bangladesh.', '01737328916', '2.PNG', 1, '', '', '2019-12-11'),
(44, 'test3@diu.edu.bd', '$2y$10$si84le7V2MCkaFbd2ubopuWY2I3.TvZanyS7dk7u2E1jm7EyAmMZy', 0, 'Test ', 'User 2', 'Panthapath, Dhaka', '01737328919', 'Capture.PNG', 1, '', '', '2019-12-11'),
(45, 'test3@gmail.com', '$2y$10$IxnC8HkKhq.AwLbylOucee5ij9nEbmq70q3fkyDyvCyteLuObaiXa', 0, 'Test ', 'User 3', 'Tejgoan, Dhaka', '01737328654', '3.PNG', 1, '', '', '2019-12-11'),
(46, 'alkawsar@gmail.com', '$2y$10$HnyfHSxZ7oKXarGOjsy.juf74MtUFZ8Gzbr3R5kgW50oP053I20nu', 0, 'Al Kawsar', 'Majumder', '', '', '', 0, 'B8pPvAjf3Kyi', '', '2019-12-11'),
(47, 'alauddin@gmail.com', '$2y$10$wALhdPAj9zL4koxIMa004eAVm0ul2Zz4NQyMA3gWy2HpS9J16MAAS', 0, 'Alauddin', 'Ahmed', '', '', '', 1, 'Dg9Kxw67krY3', '', '2019-12-11'),
(48, 'sajib@gmail.com', '$2y$10$mm1fUgs6gcJW.LDHoKUySeYBJEm9JAIBe57tzeYiunU/EgoTE81f.', 0, 'Saifuddin ', 'Sajib', '', '', '', 1, '1X5h79KanS8i', '', '2019-12-11'),
(49, 'nusrat@gmail.com', '$2y$10$b2TpbzigsV/QoVN4ppBJdeEGS64y4rRP1TXBNeQN4wZiXIqmWivMa', 0, 'Nusrat', 'Jahan', '', '', '', 0, 'tSL5rR7DjXW4', '', '2019-12-11'),
(50, 'nasrin@gmail.com', '$2y$10$MRXGH9QEvfaR4RwF/6oDjOpP1LuzdgoA7.bYXc./Ioztl3K5IiP6q', 0, 'Nasrin', 'Akter', '', '', '', 1, 'k1qBi8WolDFM', '', '2019-12-11'),
(51, 'aminul@gmail.com', '$2y$10$FK3fMF44RB7b38GNFRQG6uJAC7C0hkIKnumXZddJTiRoChtzBQVSi', 0, 'Aminul', 'Islam', '', '', '', 1, 'Yqg3BC9Ol2bN', '', '2019-12-11'),
(53, 'abdul@gmail.com', '$2y$10$TzqX2wbG5sH2UicsKtH/7.4LCY4Qf67vDY7nzeeHrTgSuvFSdIcZu', 0, 'Abdul', 'Aziz', '', '', '', 1, 'W8zo5FUb4ukv', '', '2019-12-11'),
(56, 'ibrahim.khalil39@diit.info', '$2y$10$pQrAQhHAMXYEAKsRHEcCtOwwoWHVc1tepHpSYblp7U1Azj.qveupO', 0, 'Suvro', 'Sarkar', '', '', '', 1, 'sbyz1m5QuE98', '', '2019-12-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
