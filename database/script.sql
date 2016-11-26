-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for car_rental
DROP DATABASE IF EXISTS `car_rental`;
CREATE DATABASE IF NOT EXISTS `car_rental` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `car_rental`;


-- Dumping structure for table car_rental.cars
DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(200) NOT NULL,
  `manf_id` int(11) NOT NULL,
  `image` varchar(555) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`car_id`),
  KEY `FK_cars_manufacturer` (`manf_id`),
  CONSTRAINT `FK_cars_manufacturer` FOREIGN KEY (`manf_id`) REFERENCES `manufacturer` (`manf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COMMENT='Car info';

-- Dumping data for table car_rental.cars: ~31 rows (approximately)
DELETE FROM `cars`;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` (`car_id`, `car_name`, `manf_id`, `image`, `date_added`) VALUES
	(1, 'FX', 1, NULL, '2016-10-15 14:15:17'),
	(2, 'Mehran', 1, 'assets/site/img/product-img/car_icons/mehran.jpg', '2016-10-15 15:41:37'),
	(3, 'Mehran', 1, NULL, '2016-10-15 14:16:46'),
	(4, 'Suzuki Alto', 1, NULL, '2016-10-15 14:16:50'),
	(5, 'Baleno', 1, NULL, '2016-10-15 14:17:03'),
	(6, 'Cultus', 1, NULL, '2016-10-15 14:17:07'),
	(7, 'Liana', 1, NULL, '2016-10-15 14:17:12'),
	(8, 'Suzuki Swift', 1, NULL, '2016-10-15 14:17:17'),
	(9, 'Suzuki Wagon R', 1, NULL, '2016-10-15 14:17:22'),
	(10, 'Suzuki Carry', 1, NULL, '2016-10-15 14:17:28'),
	(11, 'Suzuki Kizashi', 1, NULL, '2016-10-15 14:17:32'),
	(12, 'Suzuki APV', 1, NULL, '2016-10-15 14:17:36'),
	(13, 'Honda Accord', 2, NULL, '2016-10-15 14:18:48'),
	(14, 'Honda City', 2, NULL, '2016-10-15 14:18:56'),
	(15, 'Honda Civic', 2, NULL, '2016-10-15 14:19:04'),
	(16, 'Honda CR-V', 2, NULL, '2016-10-15 14:19:10'),
	(17, 'Honda CR-Z', 2, NULL, '2016-10-15 14:19:16'),
	(18, 'Honda HR-V', 2, NULL, '2016-10-15 14:19:21'),
	(19, 'Corolla', 3, NULL, '2016-10-15 14:19:51'),
	(20, 'Hilux', 3, NULL, '2016-10-15 14:19:57'),
	(21, 'Vigo Champ', 3, NULL, '2016-10-15 14:20:03'),
	(22, 'Fortuner', 3, NULL, '2016-10-15 14:20:10'),
	(23, 'Camry', 3, NULL, '2016-10-15 14:20:14'),
	(24, 'Land Cruiser', 3, NULL, '2016-10-15 14:20:19'),
	(25, 'Prado', 3, NULL, '2016-10-15 14:20:24'),
	(26, 'RAV4', 3, NULL, '2016-10-15 14:20:29'),
	(27, 'Avanza', 3, NULL, '2016-10-15 14:20:33'),
	(28, 'Hiace', 3, NULL, '2016-10-15 14:20:38'),
	(29, 'Coaster', 3, NULL, '2016-10-15 14:20:43'),
	(30, 'Terios', 3, NULL, '2016-10-15 14:20:48'),
	(31, 'Prius', 3, NULL, '2016-10-15 14:20:53');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;


-- Dumping structure for table car_rental.cities
DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(150) DEFAULT NULL,
  `province_id` int(10) DEFAULT NULL,
  `data_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- Dumping data for table car_rental.cities: ~68 rows (approximately)
DELETE FROM `cities`;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`city_id`, `city_name`, `province_id`, `data_added`) VALUES
	(1, 'Karachi', 2, '2016-10-15 16:08:42'),
	(2, 'Lahore', 1, '2016-10-15 16:08:42'),
	(3, 'Faisalabad', 1, '2016-10-15 16:08:42'),
	(4, 'Rawalpindi', 1, '2016-10-15 16:08:42'),
	(5, 'Multan', 1, '2016-10-15 16:08:42'),
	(6, 'Hyderabad', 2, '2016-10-15 16:08:42'),
	(7, 'Gujranwala', 1, '2016-10-15 16:08:42'),
	(8, 'Peshawar', 3, '2016-10-15 16:08:42'),
	(9, 'Quetta', 1, '2016-10-15 16:08:42'),
	(10, 'Islamabad', 1, '2016-10-15 16:08:56'),
	(11, 'Sargodha', 1, '2016-10-15 16:08:42'),
	(12, 'Sialkot', 1, '2016-10-15 16:08:42'),
	(13, 'Bahawalpur', 4, '2016-10-15 16:08:42'),
	(14, 'Sukkur', 2, '2016-10-15 16:08:42'),
	(15, 'Jhang', 1, '2016-10-15 16:08:42'),
	(16, 'Shekhupura', 1, '2016-10-15 16:08:42'),
	(17, 'Mardan', 3, '2016-10-15 16:08:42'),
	(18, 'Gujrat', 1, '2016-10-15 16:08:42'),
	(19, 'Larkana', 2, '2016-10-15 16:08:42'),
	(20, 'Kasur', 1, '2016-10-15 16:08:42'),
	(21, 'Rahim Yar Khan', 1, '2016-10-15 16:08:42'),
	(22, 'Sahiwal', 1, '2016-10-15 16:08:42'),
	(23, 'Okara', 1, '2016-10-15 16:08:42'),
	(24, 'Wah Cantonment', 1, '2016-10-15 16:08:42'),
	(25, 'Dera Ghazi Khan', 1, '2016-10-15 16:08:42'),
	(26, 'Mingora', 3, '2016-10-15 16:08:42'),
	(27, 'Mirpur Khas', 2, '2016-10-15 16:08:42'),
	(28, 'Chiniot', 1, '2016-10-15 16:08:42'),
	(29, 'Nawabshah', 2, '2016-10-15 16:08:42'),
	(30, 'KÄmoke', 1, '2016-10-15 16:08:42'),
	(31, 'Burewala', 1, '2016-10-15 16:08:42'),
	(32, 'Jhelum', 1, '2016-10-15 16:08:42'),
	(33, 'Sadiqabad', 1, '2016-10-15 16:08:42'),
	(34, 'Khanewal', 1, '2016-10-15 16:08:42'),
	(35, 'Hafizabad', 1, '2016-10-15 16:08:42'),
	(36, 'Kohat', 3, '2016-10-15 16:08:42'),
	(37, 'Jacobabad', 2, '2016-10-15 16:08:42'),
	(38, 'Shikarpur', 2, '2016-10-15 16:08:42'),
	(39, 'Muzaffargarh', 1, '2016-10-15 16:08:42'),
	(40, 'Khanpur', 1, '2016-10-15 16:08:42'),
	(41, 'Gojra', 1, '2016-10-15 16:08:42'),
	(42, 'Bahawalnagar', 1, '2016-10-15 16:08:42'),
	(43, 'Abbottabad', 3, '2016-10-15 16:08:42'),
	(44, 'Muridke', 1, '2016-10-15 16:08:42'),
	(45, 'Pakpattan', 1, '2016-10-15 16:08:42'),
	(46, 'Khuzdar', 4, '2016-10-15 16:08:42'),
	(47, 'Jaranwala', 1, '2016-10-15 16:08:42'),
	(48, 'Chishtian', 1, '2016-10-15 16:08:42'),
	(49, 'Daska', 1, '2016-10-15 16:08:42'),
	(50, 'Bhalwal', 1, '2016-10-15 16:08:42'),
	(51, 'Mandi Bahauddin', 1, '2016-10-15 16:08:42'),
	(52, 'Ahmadpur East', 1, '2016-10-15 16:08:42'),
	(53, 'Kamalia', 1, '2016-10-15 16:08:42'),
	(54, 'Tando Adam', 2, '2016-10-15 16:08:42'),
	(55, 'Khairpur', 2, '2016-10-15 16:08:42'),
	(56, 'Dera Ismail Khan', 3, '2016-10-15 16:08:42'),
	(57, 'Vehari', 1, '2016-10-15 16:08:42'),
	(58, 'Nowshera', 3, '2016-10-15 16:08:42'),
	(59, 'Dadu', 2, '2016-10-15 16:08:42'),
	(60, 'Wazirabad', 1, '2016-10-15 16:08:42'),
	(61, 'Khushab', 1, '2016-10-15 16:08:42'),
	(62, 'Charsada', 3, '2016-10-15 16:08:42'),
	(63, 'Swabi', 3, '2016-10-15 16:08:42'),
	(64, 'Chakwal', 1, '2016-10-15 16:08:42'),
	(65, 'Mianwali', 1, '2016-10-15 16:08:42'),
	(66, 'Tando Allahyar', 2, '2016-10-15 16:08:42'),
	(67, 'Kot Adu', 1, '2016-10-15 16:08:42'),
	(68, 'Turbat', 4, '2016-10-15 16:08:42');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;


-- Dumping structure for table car_rental.manufacturer
DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `manf_id` int(11) NOT NULL AUTO_INCREMENT,
  `manf_name` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`manf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Manfacturers info';

-- Dumping data for table car_rental.manufacturer: ~7 rows (approximately)
DELETE FROM `manufacturer`;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` (`manf_id`, `manf_name`, `date_added`) VALUES
	(1, 'Pak Suzuki Motors', '2016-10-15 14:10:21'),
	(2, 'Honda Atlas', '2016-10-15 14:10:28'),
	(3, 'Indus Motor', '2016-10-15 14:10:38'),
	(4, 'Ghandhara Nissan', '2016-10-15 14:10:45'),
	(5, 'Hino Pak Motors', '2016-10-15 14:10:47'),
	(6, 'Al Ghazi Tractors', '2016-10-15 14:10:56'),
	(7, 'Master Motors', '2016-10-15 14:11:01');
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;


-- Dumping structure for table car_rental.models
DROP TABLE IF EXISTS `models`;
CREATE TABLE IF NOT EXISTS `models` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model` int(4) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table car_rental.models: ~37 rows (approximately)
DELETE FROM `models`;
/*!40000 ALTER TABLE `models` DISABLE KEYS */;
INSERT INTO `models` (`model_id`, `model`) VALUES
	(1, 2016),
	(2, 2015),
	(3, 2014),
	(4, 2013),
	(5, 2012),
	(6, 2011),
	(7, 2010),
	(8, 2009),
	(9, 2008),
	(10, 2007),
	(11, 2006),
	(12, 2005),
	(13, 2004),
	(14, 2003),
	(15, 2002),
	(16, 2001),
	(17, 2000),
	(18, 1999),
	(19, 1998),
	(20, 1997),
	(21, 1996),
	(22, 1995),
	(23, 1994),
	(24, 1993),
	(25, 1992),
	(26, 1991),
	(27, 1990),
	(28, 1989),
	(29, 1988),
	(30, 1987),
	(31, 1986),
	(32, 1985),
	(33, 1984),
	(34, 1983),
	(35, 1982),
	(36, 1981),
	(37, 1980);
/*!40000 ALTER TABLE `models` ENABLE KEYS */;


-- Dumping structure for table car_rental.provinces
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `provinces_id` int(10) NOT NULL AUTO_INCREMENT,
  `provinces_name` varchar(30) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`provinces_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table car_rental.provinces: ~4 rows (approximately)
DELETE FROM `provinces`;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` (`provinces_id`, `provinces_name`, `date_added`) VALUES
	(1, 'Punjab', '2016-10-15 15:57:04'),
	(2, 'Sindh', '2016-10-15 15:57:10'),
	(3, 'Khyber Pakhtunkhwa', '2016-10-15 15:58:00'),
	(4, 'Balochistan', '2016-10-15 15:57:30');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;


-- Dumping structure for table car_rental.rental_cars
DROP TABLE IF EXISTS `rental_cars`;
CREATE TABLE IF NOT EXISTS `rental_cars` (
  `rent_id` int(11) NOT NULL AUTO_INCREMENT,
  `showroom_id` int(11) NOT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `car_model` int(11) DEFAULT NULL,
  `car_description` varchar(500) DEFAULT NULL,
  `price_per_day` decimal(18,2) DEFAULT NULL,
  `fuel` varchar(15) DEFAULT NULL,
  `availability` bit(1) DEFAULT b'1',
  `available_date_from` datetime DEFAULT NULL,
  `available_date_to` datetime DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `car_image` varchar(200) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `door` varchar(50) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rent_id`),
  KEY `FK_showroom_id` (`showroom_id`),
  CONSTRAINT `FK_showroom_id` FOREIGN KEY (`showroom_id`) REFERENCES `showroom` (`showroom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table car_rental.rental_cars: ~0 rows (approximately)
DELETE FROM `rental_cars`;
/*!40000 ALTER TABLE `rental_cars` DISABLE KEYS */;
INSERT INTO `rental_cars` (`rent_id`, `showroom_id`, `manufacturer_id`, `car_id`, `car_model`, `car_description`, `price_per_day`, `fuel`, `availability`, `available_date_from`, `available_date_to`, `status`, `car_image`, `color`, `door`, `date_added`) VALUES
	(1, 3, 2, 13, 2015, 'new ', 8000.00, NULL, b'10000000', '2016-10-04 00:00:00', '2016-12-15 00:00:00', b'10000000', '/assets/customer/img/uploads/cars/honda-accord.jpg', 'black', '4', '2016-11-08 13:08:21');
/*!40000 ALTER TABLE `rental_cars` ENABLE KEYS */;


-- Dumping structure for table car_rental.showroom
DROP TABLE IF EXISTS `showroom`;
CREATE TABLE IF NOT EXISTS `showroom` (
  `showroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `showroom_name` varchar(150) DEFAULT NULL,
  `owner_name` varchar(150) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `status` bit(1) DEFAULT b'0',
  `showroom_image` varchar(200) DEFAULT NULL,
  `showroom_cover_image` varchar(200) DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`showroom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table car_rental.showroom: ~1 rows (approximately)
DELETE FROM `showroom`;
/*!40000 ALTER TABLE `showroom` DISABLE KEYS */;
INSERT INTO `showroom` (`showroom_id`, `user_id`, `showroom_name`, `owner_name`, `description`, `address`, `province`, `city`, `status`, `showroom_image`, `showroom_cover_image`, `date_added`) VALUES
	(3, 1, 'My Showroom', 'abc showroom owner', 'this car rental showroom', '123 street abc city', 2, 1, b'10000000', '/assets/customer/img/uploads/showroom/showroom.jpg', NULL, '2016-11-08 13:07:11'),
	(10, 1, 'other showroom name', 'other owner name', 'description desc', 'address add', 1, 3, b'10000000', '/assets/customer/img/uploads/showroom/624A1D61-300A-4BE7-8E52-8739307B2DBF-Z2.jpg', '/assets/customer/img/uploads/showroom/BE6EB3B8-B24F-4A44-AE0C-21C33FA66756-showroom.jpg', '2016-11-26 21:57:31');
/*!40000 ALTER TABLE `showroom` ENABLE KEYS */;


-- Dumping structure for table car_rental.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(200) NOT NULL,
  `remember_token` int(6) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `user_image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `FK_USER_ROLE` (`role_id`),
  CONSTRAINT `FK_USER_ROLE` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='stores user authentication info';

-- Dumping data for table car_rental.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `date_added`, `status`, `remember_token`, `role_id`, `user_image`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hassanfarooq09@gmail.com', '2016-10-23 16:55:28', '', NULL, 1, NULL),
	(12, 'hassan', 'e10adc3949ba59abbe56e057f20f883e', 'test@test.com', '2016-10-23 15:01:09', '', NULL, 2, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table car_rental.user_profile
DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `profile_id` int(20) NOT NULL AUTO_INCREMENT,
  `CNIC` varchar(15) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(13) NOT NULL,
  `city_id` int(13) NOT NULL,
  `provinces_id` int(13) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `Status` bit(1) NOT NULL DEFAULT b'1',
  `cover_image` varchar(255) NOT NULL DEFAULT '1',
  `about` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`profile_id`),
  KEY `FK_user_id_profile_id` (`user_id`),
  KEY `FK_city_id_profile_id` (`city_id`),
  KEY `FK_province_id_profile_id` (`provinces_id`),
  CONSTRAINT `FK_city_id_profile_id` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`),
  CONSTRAINT `FK_province_id_profile_id` FOREIGN KEY (`provinces_id`) REFERENCES `provinces` (`provinces_id`),
  CONSTRAINT `FK_user_id_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Users personal data will be stored in this table';

-- Dumping data for table car_rental.user_profile: ~0 rows (approximately)
DELETE FROM `user_profile`;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` (`profile_id`, `CNIC`, `contact_no`, `image`, `user_id`, `city_id`, `provinces_id`, `postal_code`, `DOB`, `address`, `Status`, `cover_image`, `about`, `date_added`) VALUES
	(1, '123456789', '0123456789', '/uploads/photo.png', 1, 1, 2, 750750, '2016-11-24', '123 abc road ', b'10000000', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-11-03 13:19:19');
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;


-- Dumping structure for table car_rental.user_roles
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_desc` varchar(50) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table car_rental.user_roles: ~2 rows (approximately)
DELETE FROM `user_roles`;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` (`role_id`, `role_desc`, `date_added`) VALUES
	(1, 'Admin', '2016-10-23 15:00:21'),
	(2, 'Customer', '2016-10-23 15:00:39');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
