-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.21 - MySQL Community Server - GPL
-- Server OS:                    Linux
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for table_operations
CREATE DATABASE IF NOT EXISTS `table_operations` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `table_operations`;

-- Dumping structure for table table_operations.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gtin` varchar(255) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_desc` text,
  `price` float DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `style` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `url` text,
  `image` varchar(200) DEFAULT NULL,
  `image_additional` varchar(200) DEFAULT NULL,
  `additional` text,
  `source_video` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3001 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
