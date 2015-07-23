-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 06 日 10:58
-- 服务器版本: 5.1.69
-- PHP 版本: 5.2.17p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cs499`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'first name', 'last name', 'admin', '857b47cfadee1b62e6057c23d3cb880e7d5c5c19edcd95c71d3a0b4a0164c21445d3afa8acecc86099d54c9696db0e5a953634b44b1652fbdf5838bff97f3d4b');

-- --------------------------------------------------------

--
-- 表的结构 `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `history1` text NOT NULL,
  `history1_customer` text NOT NULL,
  `history2` text NOT NULL,
  `history2_customer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `business`
--

INSERT INTO `business` (`id`, `name`, `address`, `telephone`, `email`, `website`, `about`, `history1`, `history1_customer`, `history2`, `history2_customer`) VALUES
(1, 'Candy & Nut Shoppe', '39 E Main St, Ashland, OH 44805', '(419) 281-2766', 'business@businessemail.com', 'businessemail.com', 'The Candy and Nut Shoppe originally opened in downtown Ashland 80 years ago in 1934.  Originally opened by the Hainer family and previously owned by the Picking family, Ray Weaver purchased the business in 1979.  For the past 35 years, the Weaver family, including Ray and his wife Anita, have been making hand-made chocolates and roasted nuts everyday in the store.  Stop in for a wide variety of hand-dipped chocolates, candies and fresh nuts, including the fan favorite cashew turtles!', 'This is my absolute favorite candy shoppe. I shop here for all occasions and there is always service with a smile. There''s a nostalgic air to this quaint store. I recommend highly at least stopping by to browse.', 'Jessica W.', 'My grandparents had given us a box of these delightful chocolates as a Holiday Gift this year. The chocolate was very creamy and the fillings were an amazing texture full of flavor. I''m not a big candy eater but I was fully impressed!', 'Justin Gerwig Cory Simmons');

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'Chocolates'),
(5, 'Nuts'),
(6, 'Cream Chocolates'),
(7, 'Nut Chocolates'),
(8, 'Truffles'),
(9, 'Other');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `date` datetime NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `date`, `category`, `image`) VALUES
(29, 'Cashew Turtles', 'Cashews and caramels covered in chocolate', '9.95', '2014-01-25 18:53:52', 7, 'cashewturtles.jpg'),
(30, 'Pecan Turtles', 'Pecans and caramel covered in chocolate', '9.95', '2014-02-14 14:20:43', 7, 'pecanturtles.jpg'),
(31, 'Chocolate Cherries', 'Classic chocolate cherries', '9.95', '2014-02-14 14:20:43', 4, 'chocolatecherries.jpg'),
(32, 'Almond Toffee', 'The Classics', '9.95', '2014-02-14 14:20:43', 4, 'almondtoffee.jpg'),
(34, 'Homemade Mints', 'A Variety of Homemade Mints', '5.95', '2014-03-17 21:23:35', 9, 'homemademintes595.jpg'),
(35, 'Peanut Clusters', 'The Classics', '9.95', '2014-03-17 21:24:32', 7, 'peanutcluster.jpg'),
(36, 'Raisin Clusters', 'Clusters of raisins in chocolate', '9.95', '2014-03-17 21:25:19', 4, 'raisinclusters.jpg'),
(37, 'Almond Clusters', 'The Classics', '9.95', '2014-03-17 21:26:00', 7, 'almondclusters.jpg'),
(39, 'Chocolate Marshmallows', 'Chocolate covered marshmallows', '9.95', '2014-03-17 21:26:54', 4, 'chocolatemarshmallows.jpg'),
(40, 'Mini Pretzels', 'Chocolate covered pretzels', '9.95', '2014-03-17 21:27:13', 4, 'chocolatepretzels.jpg'),
(41, 'Pecan Bark', 'Pecan Bark', '9.95', '2014-03-17 21:27:30', 7, 'pecanbark.jpg'),
(42, 'Almond Bark', 'The Classics', '9.95', '2014-03-17 21:27:44', 7, 'almondbark.jpg'),
(43, 'Cashew Halves', 'Halves of cashews', '9.95', '2014-03-17 21:28:01', 5, 'cashewhalves.jpg'),
(44, 'Clark Log Bars', 'Chocolate covered clark bars', '9.95', '2014-03-17 21:28:22', 4, 'clarkbarlogs.jpg'),
(45, 'Honey Chips', 'Honey Chips', '9.96', '2014-03-17 21:28:35', 4, 'honeychips.jpg'),
(46, 'Caramel & Marshmallow', 'Chocolates filled with caramel and marshmallows', '9.95', '2014-03-17 21:29:03', 4, 'caramelandmarshmallow.jpg'),
(47, 'Orange Jellies', 'Orange Jelly covered in chocolate', '8.95', '2014-03-17 21:29:39', 4, 'orange-jellies.jpg'),
(48, 'Red Skins', 'Red Skin Nuts', '7.95', '2014-03-17 21:30:01', 5, 'redskins.jpg'),
(49, 'Candied Orange Peels', 'Chocolate covered candied orange peels', '9.95', '2014-03-17 21:30:15', 4, 'candiedorangepeels995.jpg'),
(50, 'Peanut Butter Meltaway', 'Peanut Butter covered in chocolate', '9.95', '2014-03-17 21:30:45', 4, 'peanut-butter-meltaways.jpg'),
(51, 'Caramel Truffles', 'Chocolate covered caramel truffle', '9.95', '2014-03-17 21:31:06', 8, 'caramel-truffle.jpg'),
(53, 'Chocolate Truffles', 'Classic chocolate truffle', '9.95', '2014-03-17 21:31:37', 8, 'chocolate-truffle.jpg'),
(54, 'Maple Creams', 'Maple flavored cream chocolate', '9.95', '2014-03-17 21:32:20', 6, 'maplecreams.jpg'),
(55, 'Coconut Clusters', 'Traditional coconut clusters', '9.95', '2014-03-17 21:32:35', 4, 'coconutclusters.jpg'),
(56, 'Peppermint Patties', 'Classic peppermint flavored patties', '9.95', '2014-03-17 21:32:47', 4, 'peppermintpatty.jpg'),
(57, 'Chocolate Creams', 'Classic chocolate cream', '9.95', '2014-03-17 21:33:03', 6, 'chocolatecreams.jpg'),
(58, 'Creme De Menthe', 'Creme De Menthe flavored chocolate', '9.95', '2014-03-17 21:33:21', 6, 'cremedementhe.jpg'),
(59, 'Peppermint Creams', 'Peppermint flavored cream', '9.95', '2014-03-17 21:33:34', 6, 'peppermintcreams.jpg'),
(60, 'Lemon Creams', 'Lemon flavored cream', '9.95', '2014-03-17 21:33:48', 6, 'lemoncreams.jpg'),
(61, 'Vanilla Cream', 'Vanilla flavored cream', '9.95', '2014-03-17 21:34:05', 6, 'vanillacreams.jpg'),
(62, 'Raspberry Truffle', 'Delicious raspberry flavored truffle', '9.95', '2014-03-17 21:34:20', 8, 'raspberrytruffle.jpg'),
(63, 'Butter Creams', 'Traditional butter creams', '9.95', '2014-03-17 21:34:32', 6, 'buttercreams.jpg'),
(64, 'Malt Balls', 'Chocolate covered malt balls', '5.95', '2014-03-17 21:35:02', 4, '20140413233618-maltballs.jpg'),
(66, 'Bridge Mix', 'Delicious mix of chocolates', '5.95', '2014-03-17 21:35:32', 7, 'bridgemix.jpg'),
(67, 'Raisins', 'Delicious chocolate covered raisins', '5.95', '2014-03-17 21:36:51', 4, 'chocolateraisins.jpg'),
(68, 'Peanuts', 'Chocolate covered peanuts', '5.95', '2014-03-17 21:36:51', 7, 'chocolatepeanuts.jpg'),
(69, 'Bulk Chocolate', 'The Others', '5.95', '2014-03-17 21:36:51', 4, 'bulkchocolate.jpg'),
(70, 'Deluxe Mix', 'Mix of nuts including peanuts, cashews, and almonds', '8.95', '2014-03-17 21:36:51', 5, 'deluxmix.jpg'),
(71, 'Regular Mix', 'Mix of nuts including peanuts, almonds and cashews', '7.95', '2014-03-17 21:36:51', 5, 'regularmix.jpg'),
(72, 'Cashew Wholes', 'Entire roasted cashews', '8.95', '2014-03-17 21:36:51', 5, '20140413233034-cashews.jpg'),
(78, 'Macadamias', 'Freshly roasted macadamia nuts', '9.95', '2014-03-17 21:36:51', 5, '20140330152838-hazelnuts.jpg'),
(80, 'Vanilla Clusters', 'Vanilla flavored chocolate clusters', '9.95', '2014-03-30 15:56:59', 7, 'vanillaclusters.jpg'),
(81, 'Raspberry Jellies', 'Raspberry Jelly covered in chocolate.', '8.95', '2014-04-14 00:02:57', 4, 'raspberry-jellies.jpg'),
(82, 'Jelly Beans', 'Choose from a wide variety of jelly beans', '4.95', '2014-04-14 00:05:31', 9, 'jellybeans495.jpg'),
(83, 'Wintergreen Creams', 'Wintergreen mint creams', '8.95', '2014-04-14 00:08:23', 6, 'wintergreencreams.jpg'),
(84, 'Snow Caps', 'Classic Snow Caps', '6.95', '2014-04-14 00:09:10', 4, 'snowcaps.jpg'),
(85, 'Spanish', 'Roasted Spanish nuts!', '8.95', '2014-04-14 00:09:38', 5, 'spanish.jpg');

--
-- 限制导出的表
--

--
-- 限制表 `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
