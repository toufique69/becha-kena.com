-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2015 at 09:39 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bechakena`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE IF NOT EXISTS `admin_information` (
`AdminId` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `admin_information` (`AdminId`, `UserName`, `Password`) VALUES
(1, 'Toufique', '492bbf2083a54fa859a10611511b345d'),
(2, 'Turjo', '492bbf2083a54fa859a10611511b345d');

-- --------------------------------------------------------

--
-- Table structure for table `order_bag`
--

CREATE TABLE IF NOT EXISTS `order_bag` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_bag`
--

INSERT INTO `order_bag` (`PId`, `ProductId`, `Brand`, `Model`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(3, 'BG05', 'Felix', 'Felix-12', '2', 'Rifat Shikder', '01658445544', 'Dhaka'),
(4, 'BG03', 'Felix', 'Felix-07 A', '5', 'Ayoun Khan', '01765443322', 'Dhaka'),
(5, 'BG05 ', 'Felix ', 'Felix-12 ', '1', 'Sabbir Khaleque', '01745669955', 'Kushtia');

-- --------------------------------------------------------

--
-- Table structure for table `order_clothing`
--

CREATE TABLE IF NOT EXISTS `order_clothing` (
`ClothingOrderId` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Type` varchar(1000) NOT NULL,
  `Brand` varchar(1000) NOT NULL,
  `Size` varchar(1000) NOT NULL,
  `Quantity` varchar(1000) NOT NULL,
  `UserName` varchar(1000) NOT NULL,
  `ContactNumber` varchar(1000) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `order_clothing`
--

INSERT INTO `order_clothing` (`ClothingOrderId`, `Name`, `Type`, `Brand`, `Size`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(2, 'Polo T-shirt (Green Stripe)', 'T-shirt', 'Polo', 'Medium', '2', 'Masud Parvez', '01712335182', 'Dhaka'),
(3, 'Chelsea Thai Premium Full Jersey', 'Jersey', 'Football merchandises', 'Medium', '2', 'Munim Turzo', '01745665599', 'Dhaka'),
(6, 'Pink Colour Full Sleeve Shirts', 'Shirt', 'Mark Taylor', 'Small', '1', 'Sabbir Khaleque', '01745669955', 'Kushtia');

-- --------------------------------------------------------

--
-- Table structure for table `order_electronics`
--

CREATE TABLE IF NOT EXISTS `order_electronics` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_electronics`
--

INSERT INTO `order_electronics` (`PId`, `ProductId`, `Brand`, `Model`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(1, 'E01', 'Acer', 'Acer Aspire ES1-111 Intel Celeron Dual Core N2840 , Black', '2', 'Olive Amin', '01815662244', 'Sylhet'),
(3, 'E14', 'Genius', 'Genius HS-920BT Bluetooth Headphone (Black/Pink/Blue/White/Yellow)', '1', 'Sabbir Khaleque', '01744556699', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `order_eye`
--

CREATE TABLE IF NOT EXISTS `order_eye` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(1000) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_eye`
--

INSERT INTO `order_eye` (`PId`, `ProductId`, `Brand`, `Model`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(1, 'CL01', 'Vision Direct', 'Freshlook contact lenses (Black)', '1', 'Razib Malik', '01685445599', 'Khulna'),
(4, 'CL01', 'Vision Direct', 'Freshlook contact lenses (Black)', '1', 'Sabbir Khaleque', '01744556699', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `order_kid`
--

CREATE TABLE IF NOT EXISTS `order_kid` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_kid`
--

INSERT INTO `order_kid` (`PId`, `ProductId`, `Brand`, `Model`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(1, 'K01', 'Pixie Rattles', 'Pixie Rattles (Birch)', '1', 'Olive Amin', '01834556677', 'Kushtia'),
(3, 'K02', 'Pepple', 'Crochet Train', '1', 'Sabbir Khaleque', '01744556699', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `order_shoes`
--

CREATE TABLE IF NOT EXISTS `order_shoes` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_shoes`
--

INSERT INTO `order_shoes` (`PId`, `ProductId`, `Model`, `Size`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(3, 'SH11', 'Lotto Lifestyle Shoe - Sand', '41', '2', 'Raihan Rafi', '01743221133', 'Dhaka'),
(6, 'SH39', 'Voice Cloth Sneaker Shoes - Mixed', '41', '1', 'Sabbir Khaleque', '01744556699', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `order_sports`
--

CREATE TABLE IF NOT EXISTS `order_sports` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_sports`
--

INSERT INTO `order_sports` (`PId`, `ProductId`, `Brand`, `Model`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(2, 'S05', 'Wish', 'Wish 970 Badminton Racket ', '4', 'Raihan Rafi', '01743221133', 'Dhaka'),
(4, 'S12', 'Adventure shop ', 'Adventure shop Weighting Scales for Travel Luggage', '1', 'Sabbir Khaleque', '01744556699', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `order_watch`
--

CREATE TABLE IF NOT EXISTS `order_watch` (
`PId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `DeliveryAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_watch`
--

INSERT INTO `order_watch` (`PId`, `ProductId`, `Brand`, `Model`, `Quantity`, `UserName`, `ContactNumber`, `DeliveryAddress`) VALUES
(1, 'W04', 'Curren', 'Curren 1250', '1', 'Olive Amin', '01685554499', 'Sylhet'),
(2, 'W04', 'Curren', 'Curren 1250', '1', 'Sabbir Khaleque', '01745669955', 'Kushtia');

-- --------------------------------------------------------

--
-- Table structure for table `product_bag`
--

CREATE TABLE IF NOT EXISTS `product_bag` (
`BagId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product_bag`
--

INSERT INTO `product_bag` (`BagId`, `ProductId`, `Brand`, `Model`, `Image`, `Description`, `Price`) VALUES
(4, 'BG01', 'Felix', 'Felix-10', 'uploads/bg1.jpg', ' - Front pockets.\r\n- Adjustable shoulder straps.\r\n- Laptop chamber\r\n- TC fabric lining.\r\n- Metallic zipper.', 'Tk 1,200'),
(5, 'BG02', 'Backpack', 'Backpack-03', 'uploads/bg2.jpg', 'Upper Material: Textile, Lining: Textile, Width: 17.5 inch, Height: 10.5 Inch', 'Tk 1190'),
(6, 'BG03', 'Felix', 'Felix-07 A', 'uploads/bg3.jpg', '- Front pockets.\r\n- Adjustable shoulder straps.\r\n- TC fabric lining.\r\n- Metallic zipper.', 'Tk 600'),
(7, 'BG04', 'Backpack', 'Backpack-01', 'uploads/bg4.jpg', 'Upper Material: Textile, Lining: Textile', 'Tk 800'),
(8, 'BG05 ', 'Felix ', 'Felix-12 ', 'uploads/bg5.jpg', '  - Front pockets.\r\n- Adjustable shoulder straps.\r\n- TC fabric lining.\r\n- Metallic zipper.\r\n- Width: 15.2 in.', 'Tk 1,500 ');

-- --------------------------------------------------------

--
-- Table structure for table `product_clothing`
--

CREATE TABLE IF NOT EXISTS `product_clothing` (
`ClothingId` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `AvailableSize` varchar(500) NOT NULL,
  `Price` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product_clothing`
--

INSERT INTO `product_clothing` (`ClothingId`, `Type`, `Name`, `Brand`, `Description`, `Image`, `AvailableSize`, `Price`) VALUES
(16, 'Shirt', 'Pink Colour Full Sleeve Shirts', 'Mark Taylor', '  *Made in India from the original factory  *Cotton blend  *Slim fit  *Has a spread collar  *Machine wash warm', 'uploads/1.jpg', 'Medium, Large', 'Tk 600'),
(17, 'Coat', 'Waist Coat', 'Freeland', '*Fabrics: Cotton  *Pockets on top & bottom  *Fit type: Regular fit  *Color: Black  *Dry clean recommended', 'uploads/2.jpg', 'Medium, Large', 'Tk 1100'),
(18, 'T-shirt', 'Puma T-shirt', 'Puma', '*Material: Cotton  *Made of quality material  *Colour: Blue  *Available in medium, large & XL sizes  *Dry inside out', 'uploads/3.jpg', 'Medium, Large', 'Tk 200'),
(19, 'T-shirt', 'Polo T-shirt (Green Stripe)', 'Polo', '*Colour: Green  *Fabric GSM: 180  *Slim Fit  *Fabric Care: Machine wash/dry wash  *Half sleeves\r\n', 'uploads/4.jpg', 'Small, Medium, Large', 'Tk 350'),
(20, 'Cozy & trendy t-shirts', 'Zoo Zoo T-shirt', 'Artisian', '*Material: Cotton  *Made of quality material  *Colour: Green   *Dry inside out', 'uploads/5.jpg', 'Medium, Large', 'Tk 650'),
(21, 'T-Shirt', 'US Polo ASSN Full Sleeve T-Shirt', 'Polo', '*Style: Full sleeve  *Color: Navy blue  *Fabrics: Cotton  *Wash: Normal wash at 300C', 'uploads/6.jpg', 'Medium, Large', 'Tk 370'),
(22, 'Jersey', 'Barcelona Original Replica Half Jersey', 'Football merchandises', '*Style: Home  *Season: 2014-15  *Sleeve: Half  *Color: Red/Navy   *Fabrics: Polyester', 'uploads/7.jpg', 'Small, Medium, Large', 'Tk 2000'),
(23, 'Jersey', 'Chelsea Thai Premium Full Jersey', 'Football merchandises', '*Style: 3rd  *Season: 2014-15  *Sleeve: Full  *Fabrics: Polyester  *Thai premium', 'uploads/8.jpg', 'Small, Medium', 'Tk 1500'),
(24, 'T-shirt', 'Full Sleeve Polo T-shirt', 'Polo', '  *Full Sleeve Polo Shirt  *Fabrics: 100% cotton  *Comfortable winter wear  *Color: Black with yellow collar', 'uploads/9.jpg', 'Small, Medium, Large ', 'Tk 790');

-- --------------------------------------------------------

--
-- Table structure for table `product_electronics`
--

CREATE TABLE IF NOT EXISTS `product_electronics` (
`ElectronicsId` int(11) NOT NULL,
  `ProductId` varchar(1000) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product_electronics`
--

INSERT INTO `product_electronics` (`ElectronicsId`, `ProductId`, `Brand`, `Model`, `Image`, `Description`, `Price`) VALUES
(3, 'E01', 'Acer', 'Acer Aspire ES1-111 Intel Celeron Dual Core N2840 , Black', 'uploads/e1.jpg', ' RAM 2 GB, HDD 500 GB, Display Size 11.6 Inch, Warranty 1 year', 'Tk 24,200'),
(4, 'E02', 'Asus', 'Asus X200MA Intel CDC N2830 Black', 'uploads/e2.jpg', 'RAM 2 GB, HDD 500 GB, Display Size 11.6 Inch, Warranty 2 year', 'Tk 27,000'),
(5, 'E03', 'Dell', 'Dell Inspiron N3442 Intel CDC C2957', 'uploads/e3.jpg', '  RAM 4 GB, HDD 500 GB, Display Size 14 Inch, Warranty 1 year', 'Tk 28,000'),
(6, 'E04', 'Lenovo', 'Lenovo G4030 Pentium Quad Core N3540 Win-8.1 ', 'uploads/e4.jpg', '                         RAM 4 GB, HDD 1 TB, Display Size 14 Inch, Warranty 1 year', 'Tk 32,000'),
(7, 'E05', 'HP', 'HP 250 G3 Core i3 4th Gen. 4005U', 'uploads/e5.jpg', 'RAM 4 GB, HDD 500 GB, Display Size 15.6 Inch, Warranty 1 year', 'Tk 35,000'),
(8, 'E06', 'Samsung', 'Samsung Galaxy Star pro S-7262', 'uploads/e6.jpeg', 'Model Galaxy Star pro S-7262, Type Smart Phone, Warranty 1 year ', 'Tk 8,000'),
(9, 'E07', 'Samsung', 'Samsung Galaxy I-9192 S4 Mini', 'uploads/e7.jpg', 'Model Galaxy I-9192 S4 Mini, Type Smart Phone, Warranty 1 year', 'Tk 37,000'),
(10, 'E08', 'Havit', 'Havit MS691 Gamming Mouse', 'uploads/e8.jpg', '  Model Havit MS691, Type Gamming Accessories, Warranty No warranty', 'Tk 500'),
(11, 'E09', 'Havit', 'Havit G83 Vibration Gamming Pad', 'uploads/e9.jpg', '  Model G83 Vibration, Type Gamming Pad, Warranty No warranty ', 'Tk 800'),
(12, 'E10', 'Thermaltake', 'Thermaltake KB-MEK007US Meka USB Black Retailer Box', 'uploads/e10.jpg', 'Model KB-MEK007US, Type Gamming Meka Black, Retailer Box Keyboard, Warranty 1 year', 'Tk 8500'),
(13, 'E11', 'Creative', 'Creative WP-350 Wireless Head Phone', 'uploads/e11.jpg', 'Model Creative WP-350, Type Wireless Head Phone, Warranty No warranty', 'Tk 9000'),
(14, 'E12', 'Twinmos', 'Twinmos P2 8GB', 'uploads/e12.jpg', 'Interface USB 2.0, Capacity 8GB, Warranty 1 year ', 'Tk 500'),
(15, 'E13', 'Norton', 'Norton 2012 Antivirus Product ', 'uploads/e13.jpg', 'Protection Type Anti-virus, Supporting OS Windows 7, XP, Vista, User Limit 1 User', 'Tk 700'),
(16, 'E14', 'Genius', 'Genius HS-920BT Bluetooth Headphone (Black/Pink/Blue/White/Yellow)', 'uploads/e14.jpg', 'Bluetooth 4.0, Bluetooth Profile Supported: HSP, HFP, A2DP and AVRCP, Compatible with iPad, iPhone, Smart Phone, Tablet PC, Built-in rechargeable Lithium Ion battery, Built-in Microphone', 'Tk 2,700');

-- --------------------------------------------------------

--
-- Table structure for table `product_eye`
--

CREATE TABLE IF NOT EXISTS `product_eye` (
`EyeId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_eye`
--

INSERT INTO `product_eye` (`EyeId`, `ProductId`, `Brand`, `Model`, `Image`, `Description`, `Price`) VALUES
(2, 'Ey01', 'Ray Ban', 'Male Sunglasses MN 42', 'uploads/ey1.jpg', 'First true copy, Great look alike eyewear from world renowned brands, Wide range of eyewearâ€™s for every age, Quality guaranteed, Reasonable Price', 'Tk 800'),
(3, 'Ey02', 'Ray Ban', 'Replica Sunglass BTI S002A', 'uploads/ey2.jpg', 'First true copy, Colour: Golden, Great look alike eyewear from world renowned brands, Quality guaranteed, Latest Designs', 'Tk 830'),
(4, 'Ey03', 'Ray Ban', 'Replica Sunglass (Blue)', 'uploads/ey3.jpg', 'First true copy, Great look alike eye wear from world renowned brands, Wide range of eye wearâ€™s for every age, Quality guaranteed', 'Tk 900'),
(5, 'Ey04', 'Ray Ban', 'BS-GL Replica Sunglass', 'uploads/ey4.jpg', 'First true copy, Great look alike eye wear, Wide range of eye wearâ€™s for every age, Quality guaranteed, Latest Designs', 'Tk 950'),
(6, 'CL01', 'Vision Direct', 'Freshlook contact lenses (Black)', 'uploads/cl1.jpg', 'Eye friendly and safe, Made of the best quality material, High fluid content, Very easy to clean and maintain', 'Tk 1100');

-- --------------------------------------------------------

--
-- Table structure for table `product_kid`
--

CREATE TABLE IF NOT EXISTS `product_kid` (
`KidId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_kid`
--

INSERT INTO `product_kid` (`KidId`, `ProductId`, `Brand`, `Model`, `Image`, `Description`, `Price`) VALUES
(2, 'K01', 'Pixie Rattles', 'Pixie Rattles (Birch)', 'uploads/k1.jpg', 'Birch is a cute little pixie rattle in blue, A hand crochet toy made in 100% cotton by the very, talented artisans at Hathay Bunano, Contemporary hand made products, Colorful and great to look at, Soft and smooth to touch', 'Tk 580 '),
(3, 'K03', 'Pepple', 'Rattles Owl (Pink Stripey)', 'uploads/k3.jpg', 'Our irresistible owl rattle will give your baby hours of fun', 'Tk 580'),
(4, 'K02', 'Pepple', 'Crochet Train', 'uploads/k2.jpg', 'Choo choo! One of the greatest joys of small children is when they start to learn sounds and choo choo is always one of the first', 'Tk 580'),
(5, 'K04', 'Pepple', 'Caterpillar rattles are the latest addition to the Pebble rattles family', 'uploads/k4.jpg', 'Caterpillar rattles are the latest addition to the Pebble rattles family', 'Tk 580');

-- --------------------------------------------------------

--
-- Table structure for table `product_shoes`
--

CREATE TABLE IF NOT EXISTS `product_shoes` (
`ShoesId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Model` varchar(1000) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product_shoes`
--

INSERT INTO `product_shoes` (`ShoesId`, `ProductId`, `Model`, `Size`, `Image`, `Description`, `Price`) VALUES
(3, 'SH02', 'Height Increasing Pure Leather Shoe (Soluntum)', '42, 43', 'uploads/s.jpg', 'Pure leather shoes for men, Color: Black. ', 'Tk 1,550'),
(8, 'SH09', 'Voice Leather Casual Shoe - Black', '41, 42', 'uploads/sh1.jpg', 'Product Type: Shoe, Color: Black, Main Material: Leather, Gender: Men', 'Tk 1750'),
(9, 'SH11', 'Lotto Lifestyle Shoe - Sand', '41, 42', 'uploads/lotto-5730-2513-1-zoom.jpg', 'Color: Sand, Gender: Male, Main Material: Mixed Cotton Canvas / Genuine Suede Leather', 'Tk 4500'),
(10, 'SH89', 'Voice Suede Casual Shoes - Black', '41, 42, 43', 'uploads/voice-sh-7616-14101-1-zoom.jpg', 'Product Type: Shoe, Color: Black, Main Material: Suede', 'Tk 1750'),
(11, 'SH39', 'Voice Cloth Sneaker Shoes - Mixed', '41, 42, 43', 'uploads/voice-sh-8994-16801-1-zoom.jpg', 'Product Type: Shoe, Color: Mixed, Main Material: Cloth, Gender: Men', 'Tk 1750');

-- --------------------------------------------------------

--
-- Table structure for table `product_sports`
--

CREATE TABLE IF NOT EXISTS `product_sports` (
`SportsId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_sports`
--

INSERT INTO `product_sports` (`SportsId`, `ProductId`, `Brand`, `Model`, `Image`, `Description`, `Price`) VALUES
(2, 'S01', 'Adidas', 'Adidas Brazuca Football - Orange', 'uploads/s1.jpg', 'Product type: Football, Model: Brazuca, Brand: Adidas', 'Tk 1490'),
(3, 'S02', 'Ninja', 'Ninja Bike Helmet - White & Yellow', 'uploads/s2.jpg', 'Product type: Bike helmet, Brand: Ninja', 'Tk 1290'),
(4, 'S03', 'Malik', 'Malik Rambo - Tape Tennis Cricket Bat', 'uploads/s3.jpg', 'Product type: Cricket bat, Brand: Malik ', 'Tk 390'),
(5, 'S04', 'Nile', 'Nike Football gloves By Nike ', 'uploads/s4.jpg', 'Product type: Football gloves, Brand: Nike', 'Tk 1190'),
(6, 'S05', 'Wish', 'Wish 970 Badminton Racket ', 'uploads/s5.jpg', 'Product type: Badminton Racket, Model: 970, Brand: Wish', 'Tk 990'),
(7, 'S06', 'CA', 'CA Sports Super test Cricket ball - Red', 'uploads/s6.jpg', 'Product type: Cricket ball, Model: Super test, Brand: CA Sports', 'Tk 990'),
(8, 'S12', 'Adventure shop ', 'Adventure shop Weighting Scales for Travel Luggage', 'uploads/s7.jpg', '  Weighting Scales for Travel Luggage, Weighs up to 75lbs (34kg), Includes 1m tape measure', 'Tk 1190');

-- --------------------------------------------------------

--
-- Table structure for table `product_watch`
--

CREATE TABLE IF NOT EXISTS `product_watch` (
`WatchId` int(11) NOT NULL,
  `ProductId` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_watch`
--

INSERT INTO `product_watch` (`WatchId`, `ProductId`, `Brand`, `Model`, `Image`, `Description`, `Price`) VALUES
(7, 'W01', 'Q&Q', 'M040J001Y', 'uploads/w1.jpg', 'Type: Digital watch, Color: Black, Gender: Male, Warranty: 1 Year Service Warranty (*Conditions apply)\r\n', 'Tk 2,475'),
(9, 'W02', 'Curren', 'Curren 8104', 'uploads/w2.jpg', 'Item Type: Wrist watches, Case Material: Stainless Steel, Dial Material Type: Stainless Steel, Dial Display: Analog, Case Shape: Round', 'Tk 1,500'),
(11, 'W03', 'Curren', 'Curren 8250', 'uploads/w3.jpg', 'Item Type: Wrist watches, Color: Black, Dial Window Material Type: Glass, Case Material: Stainless Steel, Dial Material Type: Stainless Steel, Movement: Quartz', 'Tk 1,600'),
(12, 'W04', 'Curren', 'Curren 1250', 'uploads/w4.jpg', 'Item Type: Wrist watches, Color: Black, Dial Window Material Type: Glass, Case Material:, Stainless Steel, Dial Material Type: Stainless Steel, Movement: Quartz', 'Tk 650'),
(13, 'W05', 'Fastrack', 'Original Fastrack Casual Jeans Watch ', 'uploads/w5.jpg', 'Collection : Casual, Color: Golden/blue, Function : Analogue, For men, Water resistance: 50M', 'Tk 4,750');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `comment`) VALUES
(4, 'Fahim Arman', 'fahim79@gmail.com', 'Good works.\r\n'),
(7, 'Masuk Sarker', 'masuk83@gmail.com', 'Keep it up.'),
(14, 'Raihan Rafi', 'rafi@gmail.com', 'Good works :)');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE IF NOT EXISTS `user_information` (
`UserId` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`UserId`, `UserName`, `Email`, `ContactNumber`, `Address`, `Password`) VALUES
(19, 'Toufique Hasan', 'toufique.007@live.com', '01747211377', 'Dhaka', 'sduser'),
(22, 'Munim Turzo', 'munim60@gmail.com', '01745988564', 'Kushtia', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_information`
--
ALTER TABLE `admin_information`
 ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `order_bag`
--
ALTER TABLE `order_bag`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `order_clothing`
--
ALTER TABLE `order_clothing`
 ADD PRIMARY KEY (`ClothingOrderId`);

--
-- Indexes for table `order_electronics`
--
ALTER TABLE `order_electronics`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `order_eye`
--
ALTER TABLE `order_eye`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `order_kid`
--
ALTER TABLE `order_kid`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `order_shoes`
--
ALTER TABLE `order_shoes`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `order_sports`
--
ALTER TABLE `order_sports`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `order_watch`
--
ALTER TABLE `order_watch`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `product_bag`
--
ALTER TABLE `product_bag`
 ADD PRIMARY KEY (`BagId`);

--
-- Indexes for table `product_clothing`
--
ALTER TABLE `product_clothing`
 ADD PRIMARY KEY (`ClothingId`);

--
-- Indexes for table `product_electronics`
--
ALTER TABLE `product_electronics`
 ADD PRIMARY KEY (`ElectronicsId`);

--
-- Indexes for table `product_eye`
--
ALTER TABLE `product_eye`
 ADD PRIMARY KEY (`EyeId`);

--
-- Indexes for table `product_kid`
--
ALTER TABLE `product_kid`
 ADD PRIMARY KEY (`KidId`);

--
-- Indexes for table `product_shoes`
--
ALTER TABLE `product_shoes`
 ADD PRIMARY KEY (`ShoesId`);

--
-- Indexes for table `product_sports`
--
ALTER TABLE `product_sports`
 ADD PRIMARY KEY (`SportsId`);

--
-- Indexes for table `product_watch`
--
ALTER TABLE `product_watch`
 ADD PRIMARY KEY (`WatchId`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
 ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_information`
--
ALTER TABLE `admin_information`
MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_bag`
--
ALTER TABLE `order_bag`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_clothing`
--
ALTER TABLE `order_clothing`
MODIFY `ClothingOrderId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order_electronics`
--
ALTER TABLE `order_electronics`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_eye`
--
ALTER TABLE `order_eye`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_kid`
--
ALTER TABLE `order_kid`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_shoes`
--
ALTER TABLE `order_shoes`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_sports`
--
ALTER TABLE `order_sports`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_watch`
--
ALTER TABLE `order_watch`
MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_bag`
--
ALTER TABLE `product_bag`
MODIFY `BagId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_clothing`
--
ALTER TABLE `product_clothing`
MODIFY `ClothingId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `product_electronics`
--
ALTER TABLE `product_electronics`
MODIFY `ElectronicsId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product_eye`
--
ALTER TABLE `product_eye`
MODIFY `EyeId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_kid`
--
ALTER TABLE `product_kid`
MODIFY `KidId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_shoes`
--
ALTER TABLE `product_shoes`
MODIFY `ShoesId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product_sports`
--
ALTER TABLE `product_sports`
MODIFY `SportsId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_watch`
--
ALTER TABLE `product_watch`
MODIFY `WatchId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
