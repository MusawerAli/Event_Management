-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2013 at 11:47 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: "event_management"
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_designation` varchar(255) NOT NULL,
  `admin_details` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_pass`, `admin_name`, `admin_designation`, `admin_details`) VALUES
(1, 'admin_head', 'abc', 'Samia Akhtar', 'Admin', 'You are preveliged to access this page');

-- --------------------------------------------------------

--
-- Table structure for table `arrangement_package`
--

CREATE TABLE IF NOT EXISTS `arrangement_package` (
  `arr_packg_id` int(11) NOT NULL AUTO_INCREMENT,
  `arr_packg_name` varchar(255) NOT NULL,
  `arr_packg_price` varchar(255) NOT NULL,
  `arr_packg_items` int(11) NOT NULL,
  `arr_packg_descrpt` varchar(255) NOT NULL,
  `main_event_id` int(11) NOT NULL,
  PRIMARY KEY (`arr_packg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `arrangement_package`
--

INSERT INTO `arrangement_package` (`arr_packg_id`, `arr_packg_name`, `arr_packg_price`, `arr_packg_items`, `arr_packg_descrpt`, `main_event_id`) VALUES
(1, 'Party Fever', '80000', 3, '', 3),
(2, 'Street Fire', '78000', 4, '', 3),
(3, 'Jazzy Party', '75000', 3, '', 3),
(4, 'Grab Up', '87000', 7, '', 2),
(5, 'Simply Sparkled', '70000', 4, '', 2),
(6, 'Atlanta', '68000', 6, '', 2),
(7, 'Show UP', '150000', 4, 'Media Related Event', 4),
(8, 'Indoor Lights', '100000', 4, 'Wedding Event', 1),
(9, 'Shining Stars', '95000', 5, 'Wedding Event', 1),
(10, 'Dew Drops', '96000', 4, 'Wedding Event', 1),
(11, 'Out Glow', '400000', 5, 'Media Related', 4),
(12, 'Simply Great', '370000', 5, '', 4),
(13, 'Silver Bells', '90000', 5, 'Party Event', 3),
(14, 'Dazzling Diamond', '109000', 5, 'Wedding Event', 1),
(18, 'Added Package', '123000', 4, '', 1),
(20, 'Test Package', '86500', 5, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arrangement_packg_details`
--

CREATE TABLE IF NOT EXISTS `arrangement_packg_details` (
  `arr_packg_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `arr_packg_id` int(11) NOT NULL,
  `arrangement_id` int(11) NOT NULL,
  PRIMARY KEY (`arr_packg_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `arrangement_packg_details`
--

INSERT INTO `arrangement_packg_details` (`arr_packg_detail_id`, `arr_packg_id`, `arrangement_id`) VALUES
(5, 1, 7),
(6, 1, 3),
(7, 1, 2),
(8, 2, 8),
(9, 2, 2),
(10, 2, 3),
(11, 2, 1),
(12, 3, 9),
(13, 3, 3),
(14, 3, 2),
(15, 4, 6),
(16, 4, 3),
(17, 4, 2),
(18, 4, 1),
(19, 4, 6),
(20, 4, 4),
(21, 4, 5),
(22, 5, 8),
(23, 5, 2),
(24, 5, 3),
(25, 5, 5),
(26, 6, 10),
(27, 6, 2),
(28, 6, 3),
(29, 6, 1),
(30, 6, 4),
(31, 6, 6),
(32, 7, 11),
(33, 7, 3),
(34, 7, 1),
(35, 7, 2),
(36, 8, 7),
(37, 8, 3),
(38, 8, 15),
(39, 8, 12),
(40, 9, 8),
(41, 9, 2),
(42, 9, 3),
(43, 9, 12),
(44, 9, 15),
(45, 10, 9),
(46, 10, 3),
(47, 10, 12),
(48, 10, 15),
(49, 11, 11),
(50, 11, 1),
(51, 11, 2),
(52, 11, 3),
(53, 11, 14),
(54, 12, 16),
(55, 12, 14),
(56, 12, 1),
(57, 12, 2),
(58, 12, 3),
(59, 14, 13),
(60, 14, 12),
(61, 14, 3),
(62, 14, 15),
(63, 13, 13),
(64, 13, 12),
(65, 13, 3),
(66, 13, 2),
(67, 13, 1),
(78, 18, 1),
(79, 18, 2),
(80, 18, 8),
(81, 18, 15),
(82, 20, 1),
(83, 20, 2),
(84, 20, 3),
(85, 20, 4),
(86, 20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `beverages_table`
--

CREATE TABLE IF NOT EXISTS `beverages_table` (
  `beverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `beverage_name` varchar(255) NOT NULL,
  `beverage_price` varchar(255) NOT NULL,
  `beverage_details` varchar(255) NOT NULL,
  PRIMARY KEY (`beverage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `beverages_table`
--

INSERT INTO `beverages_table` (`beverage_id`, `beverage_name`, `beverage_price`, `beverage_details`) VALUES
(1, 'Tea', '350', 'Tea with two Sancks'),
(2, 'Coffee', '350', 'Coffee with two Snacks'),
(3, 'Mineral Water ', '150', 'Mineral Water (Large) Bottle'),
(4, 'Assorted Soft Drinks', '85', 'Assorted Soft Drinks'),
(5, 'Kashmiri Tea', '150', 'Kashmiri Tea'),
(6, 'Lemonade', '150', 'Lemonade'),
(7, 'Pina Colada', '300', 'Pina Colada'),
(8, 'Espresso Shake (Vanilla, Chocolate)', '300', 'Espresso Shake (Vanilla, Chocolate)'),
(9, 'Fresh Juice', '150', 'Fresh Juice'),
(10, 'Royal Drinks for Bride and Groom', '500', 'Royal Drinks for Bride and Groom'),
(11, 'Strawberry Shake', '180', 'Strawberry Shake'),
(12, 'Berry Smoothy', '200', 'Berry Smoothy'),
(13, 'Pink Lady Combination of Strawberry & Coconut Cream', '350', ''),
(14, 'Purple 8 Combination of Blue berry, Raspberry & Fresh Lime', '350', ''),
(15, 'Golden Dream Combination of Orange & Peach', '350', ''),
(16, 'Sun Shine Combination of Pineapple, Fresh Banana & Cream', '400', '');

-- --------------------------------------------------------

--
-- Table structure for table `beverage_packages`
--

CREATE TABLE IF NOT EXISTS `beverage_packages` (
  `bev_packg_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_event_id` int(11) NOT NULL,
  `bev_packg_name` varchar(255) NOT NULL,
  `bev_packg_price` int(11) NOT NULL,
  `bev_packg_items` int(11) NOT NULL,
  PRIMARY KEY (`bev_packg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `beverage_packages`
--

INSERT INTO `beverage_packages` (`bev_packg_id`, `main_event_id`, `bev_packg_name`, `bev_packg_price`, `bev_packg_items`) VALUES
(1, 1, 'Platinum', 1000, 5),
(2, 1, 'Premium', 885, 4),
(3, 1, 'Delux', 735, 4),
(4, 1, 'Classic', 735, 4),
(5, 1, 'Economy', 630, 4),
(6, 3, 'Platinum', 850, 4),
(7, 3, 'Premium', 850, 4),
(8, 3, 'Delux', 850, 4),
(9, 3, 'Classic', 850, 4),
(10, 2, 'Platinum', 950, 4),
(11, 2, 'Premium', 950, 4),
(12, 2, 'Delux', 950, 4),
(13, 2, 'Classic', 950, 4),
(14, 4, 'Platinum', 1000, 3),
(15, 4, 'Premium', 1000, 3),
(16, 4, 'Delux', 1000, 3),
(17, 1, 'Edited Beverage', 1300, 4),
(19, 1, 'Last  Edited', 735, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bev_packg_details`
--

CREATE TABLE IF NOT EXISTS `bev_packg_details` (
  `bev_packg_dtl_id` int(11) NOT NULL AUTO_INCREMENT,
  `bev_packg_id` int(11) NOT NULL,
  `beverage_id` int(11) NOT NULL,
  PRIMARY KEY (`bev_packg_dtl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `bev_packg_details`
--

INSERT INTO `bev_packg_details` (`bev_packg_dtl_id`, `bev_packg_id`, `beverage_id`) VALUES
(1, 1, 9),
(2, 1, 4),
(3, 1, 1),
(4, 1, 3),
(5, 1, 10),
(6, 2, 4),
(7, 2, 9),
(8, 2, 2),
(9, 2, 3),
(10, 3, 11),
(11, 3, 6),
(12, 3, 5),
(13, 3, 3),
(14, 4, 12),
(15, 4, 4),
(16, 4, 8),
(17, 4, 3),
(18, 5, 7),
(19, 5, 4),
(20, 5, 1),
(21, 5, 3),
(22, 6, 13),
(23, 6, 9),
(24, 6, 1),
(25, 6, 3),
(26, 7, 14),
(27, 7, 6),
(28, 7, 4),
(29, 7, 3),
(30, 8, 16),
(31, 8, 11),
(32, 8, 7),
(33, 8, 3),
(34, 9, 4),
(35, 9, 2),
(36, 9, 7),
(37, 9, 3),
(38, 10, 4),
(39, 10, 13),
(40, 10, 12),
(41, 10, 3),
(42, 11, 4),
(43, 11, 14),
(44, 11, 1),
(45, 11, 3),
(46, 12, 4),
(47, 12, 15),
(48, 12, 8),
(49, 12, 3),
(50, 13, 4),
(51, 13, 16),
(52, 13, 9),
(53, 13, 3),
(54, 14, 13),
(55, 14, 1),
(56, 14, 3),
(57, 15, 14),
(58, 15, 2),
(59, 15, 3),
(60, 16, 15),
(61, 16, 4),
(62, 16, 3),
(70, 17, 2),
(71, 17, 3),
(72, 17, 7),
(73, 17, 10),
(77, 19, 2),
(78, 19, 3),
(79, 19, 4),
(80, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `decoration_details`
--

CREATE TABLE IF NOT EXISTS `decoration_details` (
  `dec_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_dec_id` int(11) NOT NULL,
  `dec_type_name` varchar(255) NOT NULL,
  `dec_price` varchar(255) NOT NULL,
  PRIMARY KEY (`dec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `decoration_details`
--

INSERT INTO `decoration_details` (`dec_id`, `event_dec_id`, `dec_type_name`, `dec_price`) VALUES
(1, 1, 'Disco Lights', '3500'),
(2, 1, 'Pinky Lights', '3800'),
(3, 1, 'Bright Lights', '4500'),
(4, 1, 'Club Lights', '5500'),
(5, 2, 'Net Curtains', '5000'),
(6, 2, 'Velvety Curtains', '6000'),
(7, 2, 'Shimmery Curtains', '5500'),
(8, 2, 'MultiColored Curtains', '6500'),
(9, 3, 'Floor Cushions', '7000'),
(10, 3, 'Royal Chairs', '8500'),
(11, 3, 'Group Chairs', '10000'),
(12, 3, 'Fancy Chairs', '9000'),
(13, 3, 'Comfy Chairs', '9000'),
(14, 1, 'Soft Lights', '4000'),
(15, 2, 'Subtle Curtains', '5000'),
(16, 3, 'Office Chairs', '8000'),
(17, 1, 'Sober Lights', '4500'),
(18, 3, 'Conference Chairs', '9000'),
(19, 4, 'Fresh Flowers', '7000'),
(20, 4, 'Dry Flowers', '6500'),
(21, 4, 'Yellow Flowers with some Whites', '7000'),
(22, 4, 'MultiColored Flowers', '8500'),
(26, 1, 'Last Edited', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `decoration_packages`
--

CREATE TABLE IF NOT EXISTS `decoration_packages` (
  `dec_packg_id` int(11) NOT NULL AUTO_INCREMENT,
  `dec_packg_name` varchar(255) NOT NULL,
  `dec_packg_price` varchar(255) NOT NULL,
  `dec_packg_items` int(11) NOT NULL,
  PRIMARY KEY (`dec_packg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `decoration_packages`
--

INSERT INTO `decoration_packages` (`dec_packg_id`, `dec_packg_name`, `dec_packg_price`, `dec_packg_items`) VALUES
(1, 'Package 1', '25000', 4),
(2, 'Package 2', '24000', 4),
(3, 'Package 3', '29000', 4),
(4, 'Package 4', '26000', 4),
(5, 'Package 5', '23000', 4),
(6, 'Package 6', '25000', 4),
(7, 'Package 7', '25500', 4),
(36, 'Last Added', '26000', 4),
(38, 'Last Edited2', '26300', 4);

-- --------------------------------------------------------

--
-- Table structure for table `decoration_pckg_details`
--

CREATE TABLE IF NOT EXISTS `decoration_pckg_details` (
  `dec_packg_dtl_id` int(11) NOT NULL AUTO_INCREMENT,
  `dec_packg_id` int(11) NOT NULL,
  `dec_id` int(11) NOT NULL,
  PRIMARY KEY (`dec_packg_dtl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `decoration_pckg_details`
--

INSERT INTO `decoration_pckg_details` (`dec_packg_dtl_id`, `dec_packg_id`, `dec_id`) VALUES
(1, 1, 1),
(2, 1, 7),
(3, 1, 12),
(4, 1, 19),
(5, 2, 2),
(6, 2, 5),
(7, 2, 13),
(8, 2, 19),
(9, 3, 4),
(10, 3, 8),
(11, 3, 11),
(12, 3, 22),
(13, 4, 3),
(14, 4, 7),
(15, 4, 10),
(16, 4, 19),
(17, 5, 14),
(18, 5, 15),
(19, 5, 16),
(20, 5, 20),
(21, 6, 3),
(22, 6, 7),
(23, 6, 9),
(24, 6, 21),
(25, 7, 17),
(26, 7, 15),
(27, 7, 18),
(28, 7, 19),
(43, 36, 1),
(44, 36, 7),
(45, 36, 12),
(46, 36, 19),
(54, 38, 2),
(55, 38, 7),
(56, 38, 13),
(57, 38, 21);

-- --------------------------------------------------------

--
-- Table structure for table `events_table`
--

CREATE TABLE IF NOT EXISTS `events_table` (
  `main_event_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_event_name` varchar(255) NOT NULL,
  `main_event_descrpt` varchar(255) NOT NULL,
  PRIMARY KEY (`main_event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events_table`
--

INSERT INTO `events_table` (`main_event_id`, `main_event_name`, `main_event_descrpt`) VALUES
(1, 'Wedding Event', ''),
(2, 'Corporate Event', ''),
(3, 'Party Event', ''),
(4, 'Media Related Event', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_arrangements`
--

CREATE TABLE IF NOT EXISTS `event_arrangements` (
  `arrangement_id` int(11) NOT NULL AUTO_INCREMENT,
  `material_name` varchar(255) NOT NULL,
  `material_price` varchar(255) NOT NULL,
  `material_detail` varchar(255) NOT NULL,
  PRIMARY KEY (`arrangement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `event_arrangements`
--

INSERT INTO `event_arrangements` (`arrangement_id`, `material_name`, `material_price`, `material_detail`) VALUES
(1, 'MultiMedia', '6500', 'MultiMedia'),
(2, 'MIC', '1500', 'More than MICs can be provided on demand!'),
(3, 'Sound System ', '8000', 'Sound System'),
(4, 'Stationary', '500', 'Stationary'),
(5, 'Head Table and Podium on Stage', '2000', 'Head Table and Podium on Stage'),
(6, 'Internet Connection', '1000', 'Internet Connection costs each connection demended'),
(7, 'Banquet Hall', '70000', 'Hall Booking '),
(8, 'Event Lawn', '65000', 'OutDoor Lawn Booking'),
(9, 'Lake View Side Lawn ', '69000', 'Lake View Side Booking'),
(10, 'Conference Hall', '50000', 'Confrence Hall'),
(11, 'Fashion Show Ramp + Stage in Hall ', '80000', 'Fashion Show Ramp + Hall'),
(12, 'Stage + Dancing Place', '20000', ''),
(13, 'Event Garden', '50000', ''),
(14, 'Media & Video Coverage', '300000', ''),
(15, 'Wedding Car', '50000', ''),
(16, 'Stage + Modeling Ramp in Event Garden', '90000', ''),
(18, 'Edit Check ', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_decorations`
--

CREATE TABLE IF NOT EXISTS `event_decorations` (
  `event_dec_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_dec_name` varchar(255) NOT NULL,
  `dec_dscrpt` varchar(255) NOT NULL,
  PRIMARY KEY (`event_dec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event_decorations`
--

INSERT INTO `event_decorations` (`event_dec_id`, `event_dec_name`, `dec_dscrpt`) VALUES
(1, 'Lights', 'What kind of lights you want?'),
(2, 'Curtains', 'What color and type of curtains you want?'),
(3, 'Seating', 'What type of seats you want to be arranged?'),
(4, 'Flowers', 'Color of flower to be choosen');

-- --------------------------------------------------------

--
-- Table structure for table `event_order`
--

CREATE TABLE IF NOT EXISTS `event_order` (
  `event_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_timings` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `date_of_event` date NOT NULL,
  `event_id` int(11) NOT NULL,
  `no_of_guests` int(11) NOT NULL,
  PRIMARY KEY (`event_order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `event_order`
--

INSERT INTO `event_order` (`event_order_id`, `event_timings`, `order_id`, `event_location`, `date_of_event`, `event_id`, `no_of_guests`) VALUES
(1, 'Night Event', 2, 'Peshawar', '2013-04-04', 6, 367),
(2, 'Night Event', 3, 'Karachi', '2013-11-11', 1, 500),
(4, 'Day Event', 5, 'Bahawalpur', '2013-12-19', 10, 100),
(5, 'Night Event', 6, 'Rawalpindi', '2013-01-01', 4, 50),
(6, 'Day Event', 8, '', '0000-00-00', 5, 0),
(7, 'Day Event', 9, '', '0000-00-00', 1, 0),
(8, 'Day Event', 10, 'Peshawar', '2013-04-04', 1, 250),
(9, 'Day Event', 11, 'Peshawar', '2013-12-19', 5, 250),
(10, 'Day Event', 12, '', '2013-04-04', 1, 0),
(11, 'Day Event', 12, '', '2013-04-04', 1, 0),
(12, 'Day Event', 12, '', '2013-04-04', 1, 0),
(13, 'Day Event', 12, '', '2013-04-04', 1, 0),
(14, 'Day Event', 12, '', '2013-04-04', 1, 0),
(15, 'Day Event', 12, '', '2013-04-04', 1, 0),
(32, 'Day Event', 12, '', '2013-04-04', 1, 0),
(33, 'Day Event', 12, '', '2013-04-04', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_themes`
--

CREATE TABLE IF NOT EXISTS `event_themes` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(255) NOT NULL,
  `theme_dscrpt` varchar(255) NOT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event_themes`
--

INSERT INTO `event_themes` (`theme_id`, `theme_name`, `theme_dscrpt`) VALUES
(1, 'Golden Showers', 'Wedding Event'),
(2, 'Royal Garden', 'Wedding Event'),
(3, 'MultiLight Sky ', 'Party Event'),
(4, 'Red Wine', 'Party Event');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_dscrpt` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `event_name` (`event_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`event_id`, `main_event_id`, `event_name`, `event_dscrpt`) VALUES
(1, 1, 'Mehndi', 'Wedding Function'),
(2, 1, 'Barat', 'Wedding Function'),
(3, 1, 'Waleema', 'Wedding Function'),
(4, 3, 'Birthday Party', 'Party Event'),
(5, 2, 'Business Meeting / Lunch / Dinner', 'Corporate Event'),
(6, 4, 'Fashion Show', 'Media Realted Event'),
(7, 2, 'School / College Reunion', 'Corporate Event'),
(8, 4, 'Concert Show', 'Media Realted Event'),
(9, 2, 'Educational Conference', 'Corporate Event'),
(10, 2, 'Award Ceremony', 'Corporate Event'),
(11, 2, 'Product Launch', 'Corporate Event'),
(12, 2, 'Workshops / Seminars', 'Corporate Event'),
(13, 3, 'Anniversery', 'Party Event'),
(14, 3, 'Naming Ceremony', 'Party Event'),
(15, 3, 'Private Lunch / Dinner Party', 'Party Event'),
(16, 3, 'BonFire ', 'Party Event');

-- --------------------------------------------------------

--
-- Table structure for table `hr_detail_table`
--

CREATE TABLE IF NOT EXISTS `hr_detail_table` (
  `hr_detl_id` int(11) NOT NULL AUTO_INCREMENT,
  `hr_packg_id` int(11) NOT NULL,
  `main_event_id` int(11) NOT NULL,
  `hr_id` int(11) NOT NULL,
  PRIMARY KEY (`hr_detl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `hr_detail_table`
--

INSERT INTO `hr_detail_table` (`hr_detl_id`, `hr_packg_id`, `main_event_id`, `hr_id`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 1, 3),
(4, 2, 2, 6),
(5, 2, 2, 5),
(6, 2, 2, 1),
(7, 2, 2, 2),
(8, 3, 3, 8),
(9, 3, 3, 3),
(10, 3, 3, 5),
(11, 3, 3, 1),
(12, 3, 3, 2),
(13, 4, 4, 4),
(14, 4, 4, 3),
(15, 4, 4, 5),
(16, 4, 4, 6),
(17, 4, 4, 7),
(18, 4, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `hr_packages`
--

CREATE TABLE IF NOT EXISTS `hr_packages` (
  `hr_packg_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_event_id` int(11) NOT NULL,
  `hr_packg_name` varchar(255) NOT NULL,
  PRIMARY KEY (`hr_packg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hr_packages`
--

INSERT INTO `hr_packages` (`hr_packg_id`, `main_event_id`, `hr_packg_name`) VALUES
(1, 1, 'Wedding HR'),
(2, 2, 'Corporate HR'),
(3, 3, 'Party HR'),
(4, 4, 'Media Related HR');

-- --------------------------------------------------------

--
-- Table structure for table `hr_table`
--

CREATE TABLE IF NOT EXISTS `hr_table` (
  `hr_id` int(11) NOT NULL AUTO_INCREMENT,
  `hr_name` varchar(255) NOT NULL,
  `hr_price` int(11) NOT NULL,
  PRIMARY KEY (`hr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hr_table`
--

INSERT INTO `hr_table` (`hr_id`, `hr_name`, `hr_price`) VALUES
(1, 'Photographer', 30000),
(2, 'Video Coverage', 50000),
(3, 'Makeup and Hair Artist', 25000),
(4, 'Stylist/Wardrobe Manager', 25000),
(5, 'Prizes, Program and Guest List Manager', 20000),
(6, 'Promotional Manager', 30000),
(7, 'Model Hiring', 130000),
(8, 'DJ', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE IF NOT EXISTS `menu_details` (
  `menu_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_item` varchar(255) NOT NULL,
  `menu_dtl_price` int(11) NOT NULL,
  `package_dscrpt` varchar(255) NOT NULL,
  PRIMARY KEY (`menu_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1058 ;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`menu_detail_id`, `package_item`, `menu_dtl_price`, `package_dscrpt`) VALUES
(1001, 'Assorted Salad (3Types)', 100, 'Assorted Salad (3Types)'),
(1002, 'Mutton Badami Qorma', 250, 'Mutton Badami Qorma'),
(1003, 'Chicken Boti Tikka', 150, 'Chicken Boti Tikka'),
(1004, 'Peas Pullao', 100, 'Peas Pullao'),
(1005, 'Roughni Naan/Raita/Curds', 50, 'Roughni Naan/Raita/Curds'),
(1006, 'Fruit Triffle', 75, 'Fruit Triffle'),
(1007, 'Kheer Khas', 60, 'Kheer Khas'),
(1008, 'Green Tea', 35, 'Green Tea'),
(1010, 'Chicken with Qorma', 100, 'Chicken with Qorma'),
(1011, 'Seekh Kababs', 150, 'Seekh Kababs'),
(1012, 'Mixed Vegetables', 120, 'Mixed Vegetables'),
(1013, 'Yakhni Pullao', 180, 'Yakhni Pullao'),
(1015, 'Chocolate Mousse', 150, 'Chocolate Mousse'),
(1016, 'Lemon Souffle', 130, 'Lemon Souffle'),
(1020, 'Chicken Dahi Wala', 200, 'Chicken Dahi Wala'),
(1021, 'Roast Beef in Garlic Sauce', 180, 'Roast Beef in Garlic Sauce'),
(1023, 'Stir Fried Vegetables', 150, 'Stir Fried Vegetables'),
(1024, 'Vegetable Biryani', 190, 'Vegetable Biryani'),
(1028, 'Russ Malai', 150, 'Russ Malai'),
(1031, 'Fried Fish with Tarter Sauce', 200, 'Fried Beef with Tarter Sauce'),
(1032, 'Afghani Beef Boti', 190, 'Afghani Beef Boti'),
(1033, 'Chicken Mughlai Qorma', 200, 'Chicken Mughlai Qorma'),
(1034, 'Mixed Sauteed Vegetable', 150, 'Mixed Sauteed Vegetable'),
(1035, 'Vegetable Sindhi Biryani', 180, 'Vegetable Sindhi Biryani'),
(1036, 'Hot Ghulaab Jaman', 150, 'Hot Ghulaab Jaman'),
(1037, 'Caramel Custurd', 190, 'Caramel Custurd'),
(1039, 'Vegetable Bhujia', 140, 'Vegetable Bhujia'),
(1040, 'Cheese Melt', 190, ''),
(1041, 'Tuna Salad', 200, ''),
(1042, 'Fajita Pizza', 260, ''),
(1043, 'The House Salad', 100, ''),
(1044, 'Russian Salad', 130, ''),
(1045, 'Moose Cake', 200, ''),
(1046, 'Italian Egg Roll', 130, ''),
(1047, 'Chicken Basilico', 180, ''),
(1048, 'Chicken and Vegetable Spring Rolls', 160, ''),
(1049, 'Roasted Chicken with Chestnuts', 190, ''),
(1050, 'Applie Pie with Vanilla Ice Cream', 190, ''),
(1051, 'Fruit Salad', 150, ''),
(1052, 'Chocolate Brownies', 180, ''),
(1053, 'Applie Pie with Vanilla Ice Cream', 160, ''),
(1054, 'Chicken Manchurian', 170, ''),
(1055, 'Crumbed Fried Fish', 160, ''),
(1057, 'Add Check Edit', 350, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_packg_details`
--

CREATE TABLE IF NOT EXISTS `menu_packg_details` (
  `menu_packg_dtl_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_packg_id` int(11) NOT NULL,
  `menu_detail_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_packg_dtl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=156 ;

--
-- Dumping data for table `menu_packg_details`
--

INSERT INTO `menu_packg_details` (`menu_packg_dtl_id`, `menu_packg_id`, `menu_detail_id`) VALUES
(1, 1, 1001),
(2, 1, 1002),
(3, 1, 1003),
(4, 1, 1039),
(5, 1, 1004),
(6, 1, 1005),
(7, 1, 1006),
(8, 1, 1007),
(9, 1, 1008),
(10, 2, 1001),
(11, 2, 1010),
(12, 2, 1011),
(13, 2, 1012),
(14, 2, 1013),
(15, 2, 1005),
(16, 2, 1015),
(17, 2, 1016),
(18, 2, 1008),
(19, 3, 1001),
(20, 3, 1020),
(21, 3, 1021),
(22, 3, 1003),
(23, 3, 1023),
(24, 3, 1024),
(25, 3, 1005),
(26, 3, 1006),
(27, 3, 1028),
(28, 3, 1008),
(29, 4, 1001),
(30, 4, 1031),
(31, 4, 1032),
(32, 4, 1033),
(33, 4, 1034),
(34, 4, 1035),
(35, 4, 1036),
(36, 4, 1037),
(37, 4, 1008),
(38, 4, 1005),
(39, 5, 1040),
(40, 5, 1041),
(41, 5, 1052),
(42, 6, 1042),
(43, 6, 1043),
(44, 6, 1045),
(45, 7, 1047),
(46, 7, 1044),
(47, 7, 1051),
(84, 8, 1002),
(85, 8, 1005),
(86, 8, 1006),
(87, 8, 1048),
(88, 8, 1054),
(89, 8, 1003),
(90, 8, 1039),
(91, 8, 1051),
(92, 8, 1004),
(93, 8, 1008),
(94, 9, 1016),
(95, 9, 1013),
(96, 9, 1001),
(97, 9, 1010),
(98, 9, 1055),
(99, 9, 1046),
(100, 9, 1059),
(101, 9, 1050),
(102, 9, 1008),
(103, 10, 1054),
(104, 10, 1013),
(105, 10, 1005),
(106, 10, 1035),
(107, 11, 1001),
(108, 11, 1005),
(109, 11, 1003),
(110, 11, 1020),
(111, 11, 1051),
(112, 12, 1001),
(113, 12, 1003),
(114, 12, 1005),
(115, 12, 1031),
(116, 12, 1032),
(117, 12, 1052),
(118, 10, 1053),
(141, 17, 1001),
(142, 17, 1002),
(143, 17, 1003),
(144, 17, 1004),
(145, 17, 1005),
(146, 17, 1006),
(147, 17, 1007),
(148, 17, 1008),
(149, 17, 1010),
(150, 18, 1001),
(151, 18, 1002),
(152, 18, 1003),
(153, 18, 1005),
(154, 18, 1007),
(155, 18, 1008);

-- --------------------------------------------------------

--
-- Table structure for table `menu_table`
--

CREATE TABLE IF NOT EXISTS `menu_table` (
  `menu_packg_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_event_id` int(11) NOT NULL,
  `menu_package` varchar(255) NOT NULL,
  `menu_price` varchar(255) NOT NULL,
  `menu_package_items` int(11) NOT NULL,
  PRIMARY KEY (`menu_packg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `menu_table`
--

INSERT INTO `menu_table` (`menu_packg_id`, `main_event_id`, `menu_package`, `menu_price`, `menu_package_items`) VALUES
(1, 1, 'Package 1', '900', 9),
(2, 1, 'Package 2', '1000', 9),
(3, 1, 'Package 3', '1100', 10),
(4, 2, 'Package 1', '2450', 10),
(5, 4, 'Refreshment 1', '2500', 3),
(6, 4, 'Refreshment 2', '2200', 3),
(7, 4, 'Refreshment 3', '2000', 3),
(8, 2, 'Package 2', '2100', 10),
(9, 2, 'Package 3', '2050', 9),
(10, 3, 'Package 1', '600', 5),
(11, 3, 'Package 2', '800', 5),
(12, 3, 'Package 3', '1000', 6),
(17, 1, 'Edited Package', '920', 9),
(18, 1, 'My menu', '645', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_arrangements`
--

CREATE TABLE IF NOT EXISTS `ordered_arrangements` (
  `arr_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `hr_packg_id` int(11) NOT NULL,
  `arr_packg_id` int(11) NOT NULL,
  `dec_packg_id` int(11) NOT NULL,
  PRIMARY KEY (`arr_order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `ordered_arrangements`
--

INSERT INTO `ordered_arrangements` (`arr_order_id`, `order_id`, `theme_id`, `hr_packg_id`, `arr_packg_id`, `dec_packg_id`) VALUES
(1, 2, 1, 4, 12, 5),
(2, 3, 3, 1, 10, 4),
(4, 5, 2, 2, 5, 2),
(5, 6, 3, 3, 1, 1),
(6, 8, 1, 2, 4, 1),
(7, 9, 1, 1, 8, 1),
(8, 10, 1, 1, 8, 1),
(9, 11, 1, 2, 5, 1),
(10, 12, 1, 1, 8, 1),
(11, 12, 1, 1, 8, 1),
(12, 12, 1, 1, 8, 1),
(13, 12, 1, 1, 8, 1),
(14, 12, 1, 1, 8, 1),
(15, 12, 1, 1, 8, 1),
(16, 12, 1, 1, 8, 1),
(17, 12, 1, 1, 8, 1),
(18, 12, 1, 1, 8, 1),
(19, 12, 1, 1, 8, 1),
(20, 12, 1, 1, 8, 1),
(21, 12, 1, 1, 8, 1),
(22, 12, 1, 1, 8, 1),
(23, 12, 1, 1, 8, 1),
(24, 12, 1, 1, 8, 1),
(25, 12, 1, 1, 8, 1),
(26, 12, 1, 1, 8, 1),
(27, 12, 1, 1, 8, 1),
(28, 12, 1, 1, 8, 1),
(29, 12, 1, 1, 8, 1),
(30, 12, 1, 1, 8, 1),
(31, 12, 1, 1, 8, 1),
(32, 12, 1, 1, 8, 1),
(33, 12, 1, 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_hr`
--

CREATE TABLE IF NOT EXISTS `ordered_hr` (
  `ordered_hr_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `hr_id` int(11) NOT NULL,
  PRIMARY KEY (`ordered_hr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ordered_hr`
--

INSERT INTO `ordered_hr` (`ordered_hr_id`, `order_id`, `hr_id`) VALUES
(1, 2, 4),
(2, 2, 6),
(3, 2, 7),
(4, 3, 1),
(5, 3, 2),
(8, 5, 5),
(9, 5, 1),
(10, 6, 8),
(11, 6, 1),
(12, 10, 1),
(13, 10, 2),
(14, 11, 6),
(15, 11, 5),
(16, 12, 1),
(17, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_menu`
--

CREATE TABLE IF NOT EXISTS `ordered_menu` (
  `ordered_menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `menu_packg_id` int(11) NOT NULL,
  `bev_packg_id` int(11) NOT NULL,
  PRIMARY KEY (`ordered_menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ordered_menu`
--

INSERT INTO `ordered_menu` (`ordered_menu_id`, `order_id`, `menu_packg_id`, `bev_packg_id`) VALUES
(1, 2, 7, 16),
(2, 3, 3, 2),
(4, 5, 9, 11),
(5, 6, 11, 9),
(6, 8, 4, 10),
(7, 10, 1, 1),
(8, 11, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `date_of_order` date NOT NULL,
  `time_of_order` time NOT NULL,
  `main_event_id` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `u_id`, `date_of_order`, `time_of_order`, `main_event_id`, `total_bill`) VALUES
(2, 1, '2013-08-06', '11:47:00', 4, 4056000),
(3, 5, '2013-08-11', '05:37:00', 1, 1194500),
(5, 2, '2013-08-11', '12:43:00', 2, 444000),
(6, 1, '2013-08-11', '12:57:00', 3, 227500),
(7, 1, '2013-08-12', '06:51:00', 3, 0),
(8, 1, '2013-08-12', '12:26:00', 2, 112000),
(9, 1, '2013-08-12', '12:30:00', 1, 0),
(10, 1, '2013-08-12', '09:20:00', 1, 680000),
(11, 2, '2013-08-13', '08:52:00', 2, 995000),
(12, 2, '2013-08-13', '09:10:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_table`
--

CREATE TABLE IF NOT EXISTS `user_registration_table` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) NOT NULL,
  `u_cnic` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_country` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_contact` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_cnic` (`u_cnic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_registration_table`
--

INSERT INTO `user_registration_table` (`u_id`, `u_name`, `u_cnic`, `u_email`, `u_pass`, `u_country`, `u_address`, `u_contact`) VALUES
(1, 'Samia Akhtar', '31205_1724965_4', 'samia.akhtar2011@yahoo.com', 'abc', 'Pakistan', 'Abc', '1234567890'),
(2, 'Imran Bajwa', '31203-41234567-8', 'imransbajwa@gnail.com', '123456', 'Pakistan', 'BWP', ''),
(5, 'Hassan Saeed', '31205-1729465-3', 'hassan.saeed@gmail.com', '123', 'Pakistan', 'Faisal Cantt. Karachi Pakistan', '5432123'),
(6, 'faiha zakir', '31202-9876543-1', 'faiha_zakir@hotmail.com', 'pakistan', 'Pakistan', 'xyz', '03458709101');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
