-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 05:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_release_year` int(11) NOT NULL,
  `b_image` text CHARACTER SET utf8 NOT NULL,
  `b_price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_catagory` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_language` varchar(255) CHARACTER SET utf8 NOT NULL,
  `book_number` varchar(255) CHARACTER SET utf8 NOT NULL,
  `download` int(11) NOT NULL,
  `b_link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_description`, `b_release_year`, `b_image`, `b_price`, `b_catagory`, `b_author`, `b_language`, `book_number`, `download`, `b_link`, `b_pdf`) VALUES
(1, 'Myanmar the stae community and environment', 'Despite deteriorathing', 2007, '0001.jpg', '3000', 'History', 'monoque skidmore', 'english', '3', 0, '', ''),
(2, 'Ya Naung Mg Mg Tote', 'á€™á€¼á€­á€¯á€·á€â—Œá€”á€ºá€™á€„á€ºá€¸á€Ÿá€¬ á€¡á€œá€½á€”á€º á€žá€á€¹á€á€­á€›á€¾á€­á€á€šá€ºá€œá€­á€¯á€· á€€á€¼á€¬á€¸á€›á€•á€«á€á€šá€ºá‹ á€’á€®á€á€±á€¬á€· á€€á€»á€¯á€•á€ºá€€ á€™á€¼á€­á€¯á€·á€â—Œá€”á€ºá€™á€„á€ºá€¸á€€á€­á€¯ á€œá€°á€¡á€°á€žá€¯á€•á€ºá€', 2004, '0002.jpg', '2000', 'History', 'Mg Phay Ngal', 'Myanmar', '3', 0, '', ''),
(3, 'State Biography of Burmese Indepedence Leaders', '\r\ná€—á€™á€¹á€™á€¬á€·á€œá€½á€á€ºá€œá€•á€ºá€›á€±á€¸ á€—á€­á€™á€¹á€™á€¬á€”á€ºá€€á€¼á€®á€¸ á€•á€¼á€®á€¸á€á€«á€”á€®á€¸á€¡á€á€»á€­á€”á€º á€œá€½á€á€ºá€œá€•á€ºá€žá€±á€¬ á€—á€™á€¬á€”á€­á€¯á€„á€ºá€„á€¶ á€á€Šá€ºá€‘á€±á€¬á€„á€ºá€›á€±á€¸ á€¡á€¬á€¸á€žá€½á€”á€ºá€€á', 2009, '0003.jpg', '1000', 'History', 'Myanmar Cupic Foreum', 'Myanmar', '3', 0, '', ''),
(4, 'Who Killed the general', '\r\ná€›á€­á€¯á€„á€ºá€¸á€…á€­á€¯á€„á€ºá€¸á€œá€­á€¯á€€á€ºá€œá€± á€™á€»á€­á€¯á€¸á€™á€…á€…á€ºá€á€²á€· á€¡á€á€„á€ºá€¸á€•á€±á€‘á€„á€·á€º \r\ná€‚á€­á€¯á€á€ºá€¸á€™á€­á€¯á€€á€ºá€á€½á€± á€†á€­á€¯á€¸á€Šá€…á€ºá€á€²á€· á€¡á€á€»á€„á€ºá€¸á€›á€šá€ºá€”á€²á€· \r\ná€™á€»á€­', 2004, '0004.jpg', '2000', 'History', 'U Khin Aung', 'Myanmar', '3', 0, '', ''),
(5, 'Bogyoke Aung San The flower of Myanmar', 'The version is published with the introducing our his historic national hero to new generation of our society because his icon has been permitted to publicity after two decade censorship. Cartoon is in Myanmar very familiar with children and we choose it ', 2012, '0005.jpg', '2000', 'History', 'Aung Ni Oo', 'Myanmar', '3', 0, '', '3.20.pdf'),
(6, 'General Aung San by U Aung Than', 'á€¡á€±á€¬á€„á€ºá€†á€”á€ºá€¸á€žá€Šá€º á€á€€á€¹á€€á€žá€žá€­á€¯á€œá€ºá€™á€¾ á€‘á€½á€€á€ºá€á€«á€… á€”á€­á€¯á€„á€ºá€„á€¶â€Œá€±á€›á€±á€¸á€¡á€›á€Šá€ºá€™á€œá€Šá€ºá€žá€±á€¸á€žá€Šá€·á€ºá€˜á€á€™á€¾á€¬á€•á€„á€º á€™á€¼á€”á€ºá€™á€¬á€”á€­á€¯á€„á€ºá€„á€¶á€œá€½á€á€ºá€', 2019, '0006.jpg', '2000', 'History', 'Aung Than', 'Myanmar', '3', 0, '', ''),
(7, 'Auto biography of General Aung San', 'á€±á€–á€–á€±á€¬á€ºá€á€«á€›á€® á€†á€šá€·á€ºá€žá€¯á€¶á€¸á€Ÿá€¬\r\ná€—á€­á€¯á€œá€ºá€á€»á€¯á€•á€ºá€™á€½á€±á€¸á€”á€±á€·á€•á€«áŠ\r\ná€á€…á€ºá€‘á€±á€¬á€„á€·á€ºá€€á€­á€¯á€¸á€›á€¬á€á€…á€ºá€†á€šá€·á€ºá€„á€«á€¸\r\ná€›á€¾á€±á€·á€”á€±á€¥â—Œá€®á€¸á€–á€¬á€žá€¬á€¸áŠ\r\ná€‡', 1936, '0007.jpg', '2000', 'History', 'Bo Gyoute Aung San', 'Myanmar', 'áƒ', 0, '', ''),
(8, 'Union Architect, General Aung San', '\r\n\r\ná€—á€™á€¬á€·á€œá€½á€á€ºá€œá€œá€•á€ºâ€Œá€±á€›á€±á€¸ á€€á€¼á€­á€¯á€¸á€•á€™á€ºá€¸á€™á€¾á€¯á€· á€žá€™á€­á€¯á€„á€ºá€¸á€á€½á€„á€ºá€œá€Šá€ºá€¸á€€á€±á€¬á€„á€ºá€¸ á€šá€°á€”á€®á€šá€¶ á€á€±á€«á€º á€•á€¼á€Šá€ºá€ºá€‘á€±á€¬á€„á€ºá€…á€¯ á€•á€¯á€¶á€…á€¶á€–á€¼á€„á€', 2008, '0008.jpg', '2000', 'History', 'Nay Win', 'Myanmar', '3', 0, '', ''),
(9, 'A Naw Ya Htar', 'á€™á€¼á€”á€ºá€™á€¬á€”á€­á€¯á€„á€ºá€„á€¶ á€žá€™á€­á€¯á€„á€ºá€¸á€á€½á€„á€º á€á€­á€¯á€„á€ºá€¸á€›á€„á€ºá€¸á€žá€¬á€¸ á€žá€½á€±á€¸á€…á€Šá€ºá€¸á€á€»á€…á€ºá€€á€¼á€Šá€ºá€›á€±á€¸á€€á€­á€¯ á€•á€‘á€™á€†á€¯á€¶á€¸á€€á€¼á€­á€¯á€¸á€•á€™á€ºá€¸á€žá€° á€”á€­á€¯á€„á€ºá€„á', 2007, '0009.jpg', '2000', 'History', 'Sein Tin', 'Myanmar', '3', 0, '', ''),
(10, 'What is Myanmar', '\r\ná€žá€™á€­á€¯á€„á€ºá€¸á€†á€­á€¯á€á€¬ á€™á€¡ á€¡á€±á€¬á€„á€ºá€œá€­á€¯á€· á€žá€„á€ºá€á€¬á€–á€¼á€…á€ºá€á€šá€ºá‹ á€™á€¼á€”á€ºá€™á€¬á€žá€™á€­á€¯á€„á€ºá€¸á€Ÿá€¬ á€•á€¯á€¶á€•á€¼á€„á€ºá€”á€²á€· á€žá€™á€­á€¯á€„á€ºá€¸á€á€½á€²á€™á€›á€¡á€±á€¬á€„á€ºá€á€½á€²á€”á', 2004, '0010.jpg', '2000', 'History', 'Dr Than Tun', 'Myanmar', '3', 0, '', ''),
(11, 'Heart Broken Certificate', 'á€™á€±á€¬á€„á€·á€ºá€›á€²á€·á€¡á€á€»á€…á€ºá€•á€„á€ºá€œá€šá€ºá€€á€¼á€®á€¸á€™á€¾á€¬ á€‘á€­á€™á€ºá€¸á€™á€°á€¸á€á€•á€ºá€™á€á€ºá€…á€±á€žá€±á€¬ á€¡á€”á€™á€ºá€¸á€œá€­á€¾á€¯á€„á€ºá€¸á€€á€¼á€™á€ºá€¸á€€á€¼á€™á€ºá€¸á€á€½á€±á€€á€­á€¯ á€á€žá€­á€™á€·á€ºá€žá€­á€™á€·', 2011, 'love1.png', '2000', 'Love', 'Lon Ma', 'Myanmar', '3', 0, '', ''),
(12, 'Miss on Eyes and Hubris on lips', '\r\ná€”á€¾á€„á€ºá€¸á€”á€½á€±áá€•á€„á€ºá€€á€­á€¯á€šá€ºá€…á€­á€á€ºá€€á€œá€Šá€ºá€¸ á€œá€½á€á€ºá€œá€•á€ºá€™á€¾á€¯á€·á€€á€­á€¯á€€á€¼á€­á€¯á€€á€ºá€žá€Šá€ºá‹ á€á€€á€ºá€á€€á€ºá€€á€¼á€½á€€á€¼á€½ á€€á€¼á€­á€¯á€¸á€…á€¬á€¸á€á€»á€„á€ºá€žá€Šá€ºá‹ á€žá€°á€á€…á€º', 1997, 'love2.png', '2000', 'Love', 'Lal Twin Thar Saw Chit', 'Myanmar', '3', 0, '', ''),
(13, 'Dual Tomorrow', '\r\ná€‘á€­á€¯á€”á€±á€·á€€ á€™á€™á€»á€¾á€±á€¬á€ºá€œá€„á€·á€ºá€•á€² á€™á€­á€¯á€¸á€›á€½á€¬á€žá€Šá€ºá‹ \r\ná€•á€²á€á€°á€¸á€™á€¾á€¬ á€›á€±á€¬á€€á€ºá€”á€±á€žá€±á€¬ á€™á€­á€¯á€¸á€€á€†á€¯á€”á€ºá€Ÿá€¬ á€›á€½á€¾á€±á€žá€¬á€œá€»á€±á€¬á€„á€ºá€¸á€˜á€¯á€›á€¬á€¸á€€á€­á€¯ á', 2000, 'love3.png', '2000', 'Love', 'Hsu Lay Nwe', 'Myanmar', '3', 0, '', ''),
(14, 'Anargat Myat Lone Shin', 'á€¡á€”á€¬á€‚á€á€ºá€€á€¬á€œá€á€½á€„á€º á€–á€¼á€…á€ºá€•á€»á€€á€ºá€€á€€á€¼á€¯á€¶á€á€½á€±á€·á€›á€žá€±á€¬ á€¡á€€á€€á€¼á€¬á€„á€ºá€¸á€á€»á€„á€ºá€¸á€á€­á€¯á€·á€€á€­á€¯ á€€á€¼á€­á€¯á€á€„á€ºá€žá€­á€™á€¼á€„á€ºá€…á€½á€™á€ºá€¸á€žá€°á€€á€­á€¯ á€€á€»á€½á€”á€ºá€™á€', 2003, 'trans1.png', '2000', 'Translate', 'Aung Khant', 'Myanmar', '3', 0, '', ''),
(15, 'Richard', 'á€œá€¯á€•á€ºá€„á€”á€ºá€¸á€¡á€žá€…á€ºá€á€½á€± á€‘á€°á€‘á€±á€¬á€„á€ºá€•á€¼á€®á€¸á€›á€„á€º á€€á€»á€½á€”á€ºá€á€±á€¬á€·á€º á€¡á€”á€±á€”á€²á€· á€¡á€€á€¼á€¶á€‰á€¬á€á€ºá€•á€±á€¸á€á€¬á€œá€½á€²á€œá€­á€¯á€· á€€á€¯á€™á€¹á€•á€á€®á€á€½á€±á€›á€²á€· á€…á€®á€™á€¶á€', 1963, 'trans 2.png', '2000', 'Translate', 'Ba Maw Thein Phay', 'Myanmar', '3', 0, '', ''),
(16, 'Albert Einstine', '\r\ná€¤á€™á€¾á€¡á€•á€¼á€¼á€„á€ºá€˜á€€á€ºáŒ á€€á€»á€½á€”á€ºá€¯á€•á€ºá€á€­á€¯á€· á€œá€°á€žá€¬á€¬á€¸á€¡á€–á€¼á€…á€ºá€™á€¾ á€žá€žá€®á€á€¼á€¬á€¸á€œá€½á€á€ºá€œá€•á€º á€”á€±á€žá€±á€¬ á€§á€›á€¬á€™á€€á€¼á€®á€¸á€™á€¬á€¸á€žá€Šá€·á€º á€€á€™á€¹á€˜á€€á€¼á€®á€¸á€›á€¾á', 2015, 'trans4.png', '2000', 'Translate', 'Kaung Thar', 'Myanmar', '3', 0, '', ''),
(17, 'A crown Princess and Kitten', 'á€™á€¼á€±á€”á€­á€™á€·á€ºá€›á€¬ á€œá€¾á€¶á€…á€­á€¯á€„á€ºá€á€¶á€›á€•á€¼á€®á€¸ á€¡á€¬á€¸á€€á€­á€¯á€¸á€›á€¬á€™á€²á€·á€žá€±á€¬ á€œá€¯á€•á€ºá€žá€¬á€¸á€•á€¼á€Šá€ºá€žá€°á€™á€»á€¬á€¸ á€˜á€€á€ºá€™á€¾ á€™á€¬á€¸á€™á€¬á€¸á€™á€á€ºá€™á€á€º á€›á€•á€ºá€á€Šá€º á€á€²á€', 2000, '', '2000', 'Translate', 'Phone Kywal', 'Myanmar', '3', 0, '', ''),
(18, 'Beginning Programming With Python', 'Beginning	Programming	with	Python	For	Dummies,	2nd	Edition	is	all	about	getting	up	and	running with	Python	quickly.	You	want	to	learn	the	language	fast	so	that	you	can	become	productive	in	using	it to	perform	your	real	job,	which	could	be	anything.	Unlike', 2014, 'technology1.png', '3000', 'Technology', 'John Paul Muller', 'English', '3', 0, '', ''),
(19, 'Exploring Advanced Features in C#', 'This book is primarily aimed at C# developers with some prior knowledge of writing applications in C# with Visual Studio. It is focused on C# 7 but also takes a look at the new features in C# 8 and .NET Core 3.0. In this book, we will\r\nâ€¢ Look at feature', 2019, 'technology2.png', '3000', 'Technology', 'Dirk Strauss', 'English', '3', 0, '', ''),
(20, 'Functional Programming for dummies', 'The functional programming paradigm is a framework that expresses a particular set of assumptions, relies on particular ways of thinking through problems, and uses particular methodologies to solve those problems. Some people view this paradigm as being a', 2019, 'technology3.png', '3000', 'Technology', 'John Paul Muller', 'English', '3', 3, '', ''),
(21, 'Learn Kotlin For Android Development', 'Computer programs are for executing operations using input data to produce output data, sometimes by manipulating data taken from a database during that operation. The word database here is used in the most general sense: It could be a file, some memory s', 2019, 'technology4.png', '3000', 'Technology', 'Peter Spath', 'English', '3', 0, '', ''),
(22, 'Brain and Heart', 'á€œá€°á€á€…á€ºá€šá€±á€¬á€€á€ºá€‘á€¶á€™á€¾  á€¡á€…á€…á€¡á€›á€¬á€›á€¬ á€žá€­á€™á€ºá€¸á€•á€­á€¯á€€á€ºá€žá€½á€¬á€¸á€”á€­á€¯á€„á€ºá€žá€±á€¬á€ºá€œá€Šá€ºá€¸ á€á€…á€ºá€á€¯á€€á€­á€¯á€™á€° á€šáá€™á€›á‹ á€šá€„á€ºá€¸á€€á€¬á€¸á€œá€°á€·á€œá€½á€á€ºá€œá€•á€ºá€á€½', 2005, '1.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(23, 'Building Perfect Life', 'á€¡á€›á€„á€¸á€·á€¡á‚á€¼á€®á€·á€Ÿá€°á€žá€Šá€¸ á€•á€­á€¯á€„á€¸á€†á€¯á€­á€„á€¸á€™á‚ˆá€ºá€–á€…á€¸á€žá€Šá€¸á‹ á‚‚á€€á€»á€šá€¸á€á€™á‚ˆá€ºá€–á€…á€¸á€žá€Šá€¸á‹ á€“á€”á€ºá€–á€…á€¸á€žá€Šá€¸á‹ á€›á€„á€¸á€·á‚á€¼á€®á€·á€ºá€™á‚‡á€³á€•á€¸á‚á€¼á€µá€ºá€á€„á€¸á€·á€', 1996, '2.jpeg', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(24, 'Chone kyar mha Bone Phyar thoe', 'á€žá€„á€ºá€žá€Šá€ºá€€á€»á€±á€¬á€„á€ºá€¸á€•á€Šá€¬á€•á€¼á€Šá€·á€ºá€…á€¯á€¶á€žá€°á€–á€¼á€…á€ºá€•á€«á€žá€œá€¬á€¸á‹ á€€á€±á€¬á€„á€ºá€¸á€•á€«á€žá€Šá€ºá‹ á€žá€­á€¯á€·á€žá€±á€¬á€º á€•á€¼á€„á€ºá€¸á€•á€¼á€žá€±á€¬ á€†á€”á€¹á€’á€™á€»á€­á€¯á€¸á€™á€›á€¾á€­á€˜á€² á€žá', 1999, '3.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(25, 'Diamond Land', 'á€¡á€á€½á€„á€·á€ºá€¡á€›á€±á€¸á€™á€»á€­á€¯á€¸á€…á€±á€·á€™á€»á€¬á€¸á€€á€­á€¯ á€¡á€™á€­á€¡á€› á€–á€™á€ºá€¸á€šá€°á€á€á€ºá€žá€±á€¬á€‰á€¬á€á€º á€¡ á€™á€¼á€„á€ºá€á€­á€¯á€· á€•á€±á€«á€„á€ºá€¸á€…á€•á€ºá€œá€­á€¯á€€á€ºá€á€¼á€„á€ºá€¸á á€¡á€€á€»á€­á€¯á€¸á€›á€œ', 1999, '4.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(26, 'Life Philosophy', 'á€™á€­á€á€ºá€†á€½á€±á€™á€»á€¬á€¸á€”á€¾á€„á€·á€º á€•á€±á€«á€„á€ºá€¸á€žá€„á€ºá€¸á€†á€€á€ºá€†á€¶á€á€¼á€„á€ºá€¸á€€á€¼á€±á€¬á€„á€·á€º á€€á€»á€½á€”á€ºá€á€±á€¬á€ºá€á€­á€¯á€· á€™á€­á€¯á€¸á€€á€¯á€á€ºá€…á€€á€ºá€â—Œá€­á€¯á€„á€ºá€¸á€á€½á€±á€€á€»á€šá€ºá€œá€¬á€€', 2008, '5.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(27, 'Like your think', 'á€œá€° á€ á€…á€¹ á€± á€š á€¬ á€€á€¹ á á€˜ á€ á€€á€­á€¯ á€žá€° á á€¡ á€€á€ºá€„á€¹á€· á€… á‚ á€­á€¯ á€€á€¹ á€€ á€± á€–ášá€± á€† á€¬ á€„á€¹ á€– á€”á€¹ á€á€®á€¸á á‹ á€‘á€­á€¯ á€¡ á€€á€ºá€„á€¹á€· á€… á‚ á€­á€¯ á€€á€¹ á€Ÿá€° á€ž á€Šá€¹ á€œ á€Šá€¹á€', 1999, '6.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(28, 'Mind and Way', 'á€œá€±á€¬á€€áŒ á€‘á€°á€¸á€¼á€á€¬á€¸á€á€­á€¯á€„á€ºá€¸ á€¡á€±á€¬á€„á€º á€¼á€™á€„á€ºá€žá€Šá€º á€™á€Ÿá€¯á€á€ºá‹ á€‘á€°á€¸á€œá€­á€¯á€žâ—Œá€¼á€–á€„á€·á€º á€›á€°á€¸á€žá€½á€¬á€¸á€¼á€€á€žá€°á€á€½á€±á€›á€¾á€­á€žá€Šá€ºá‹', 2004, '7.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(29, 'Sure that is imposssible', 'á€–á€¼á€…á€ºá€›  á€™á€šá€ºá€œá€­á€¯á€· á€…á€½á€²á€…á€½á€²á€™á€¼á€²á€™á€¼á€² á€šá€¯á€¶á€€á€¼á€Šá€ºá€™á€šá€ºá‹ á€€á€­á€¯á€šá€ºâ€Œá€± á€›á€½á€¸á€á€»á€šá€ºá€‘á€¬á€¸á€á€²á€·á€á€­á€¯á€€á€ºá€•á€½á€²á€€á€­á€¯  á€€á€­á€¯á€šá€ºá€â—Œá€„á€º á€•á€¼á€­á€¯á€„á€ºá€–', 2004, '8.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(30, 'tan phoe htar thaw ayar myar', 'á€¡á€²á€žá€Šá€º á€‰á€¬á€á€ºá€¡á€™á€¼á€„á€º á€–á€¼á€„á€·á€º á€˜á€á€€á€­á€¯ á€¡á€“á€­á€•á€šá€ºá€–á€½á€„á€·á€ºá€žá€Šá€ºá‹ á€•á€á€ºá€â—Œá€”á€ºá€¸á€€á€»á€„á€ºá€€á€­á€¯á€›á€¾á€¯ á€™á€¼á€„á€ºá€žá€Šá€ºá‹á€œá€±á€¬á€€á€€á€­á€¯á€žá€¯á€¶á€¸á€žá€•á€ºá€žá€Šá€ºá‹', 2004, '9.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(31, 'why poor', 'á€•á€±á€«á€‚á€‚á€á€¹á€á€®á€Ÿá€¬ á€¡á€žá€€á€º á‚áƒ á€™á€¾á€¬ á€žá€™á€á€ºá€¸á€€á€¼á€½á€šá€ºá€žá€°á€Œá€±á€¸á€–á€¼á€…á€ºá€á€šá€º á‹ á€¡á€žá€€á€ºá„á€ á€™á€¾á€¬ á€’á€±á€«á€ºá€ºá€œá€¬ á€žá€”á€ºá€¸â€Œá€±á€«á€„á€ºá€¸ á‚á€á€á€á€ á€á€»á€™á€ºá€¸á€žá€¬á', 1997, '10.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(32, 'Ward Six Edition', 'á€™á€­á€á€ºá€†á€½á€±á€™á€»á€¬á€¸á€”á€¾á€„á€·á€º á€•á€±á€«á€„á€ºá€¸á€žá€„á€ºá€¸á€†á€€á€ºá€†á€¶á€á€¼á€„á€ºá€¸á€€á€¼á€±á€¬á€„á€·á€º á€€á€»á€½á€”á€ºá€á€±á€¬á€ºá€á€­á€¯á€· á€™á€­á€¯á€¸á€€á€¯á€á€ºá€…á€€á€ºá€â—Œá€­á€¯á€„á€ºá€¸á€á€½á€±á€€á€»á€šá€ºá€œá€¬á€€', 1998, '11.png', '2000', 'Phay Myint', 'Phay Myint', 'Myanmar', '3', 0, '', ''),
(33, 'Magic Village', 'á€á€•á€ºâ€Œá€±á€â—Œá€¸â€Œá€±á€â—Œá€¸á€†á€®á€™á€¾ á€™á€¾á€­á€¯á€„á€ºá€¸á€•á€»á€•á€»á€›á€½á€¬á€œá€±á€¸á€€á€­á€¯á€€á€¼á€Šá€·á€ºá€›á€„á€ºá€¸ á€žá€€á€ºá€•á€»á€„á€ºá€¸á€á€…á€ºá€á€»á€€á€ºá€›á€¾á€­á€¯á€€á€ºá€™á€­á€žá€Šá€ºá‹ á€€á€»á€±á€¸á€›á€½á€¬á€á€…á€ºá€›', 2014, 'thoesaung1.png', '2000', 'thoesaung', 'Thoe Saung', 'Myanmar', '3', 0, '', ''),
(34, 'Althrough it is not Green Island', 'á€€á€»á€±á€¬á€„á€ºá€¸á€–á€½á€„á€·á€ºá€… á€•á€‘á€™á€”á€±á€·á€™á€¾á€¬á€œá€”á€ºá€¸á€†á€”á€ºá€¸á€á€€á€ºá€€á€¼á€½á€”á€±á€žá€±á€¬ á€€á€»á€±á€¬á€„á€ºá€¸á€žá€¬á€¸á€€á€»á€±á€¬á€„á€ºá€¸á€žá€°á€á€­á€¯á€·á€¡á€œá€šá€ºá€™á€¾á€¬...á‹ á€¡á€™á€­á€á€€á€¹á€€á€žá€­á€¯á€œ', 2014, 'thoesaung2.png', '2000', 'thoesaung', 'Thoe Saung', 'Myanmar', '3', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `download_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `author` text NOT NULL,
  `book_name` text NOT NULL,
  `book_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`download_id`, `book_id`, `user_id`, `catagory`, `author`, `book_name`, `book_image`) VALUES
(1, 20, 4, 'Technology', 'John Paul Muller', '', ''),
(2, 20, 4, 'Technology', 'John Paul Muller', '', ''),
(3, 20, 4, 'Technology', 'John Paul Muller', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `first_name`, `last_name`, `email`, `phone`, `msg`, `date`) VALUES
(1, 'kjhhhh', 'hhhh', 'nan@gmail.com', 97563345, 'bjhhkjhggg', '0000-00-00'),
(2, 'kjhhhh', 'hhhh', 'nan@gmail.com', 97563345, 'bjhhkjhggg', '0000-00-00'),
(3, 'may', 'myat', 'maymyat@gmail.com', 95778, 'you should know everything', '2019-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'suscriber'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `status`, `email`, `role`) VALUES
(4, 'hein htet', '$2y$10$ZT2heZ5n6uFRa6jPGsm9QuzXfGJCMHuoJ6gR0vlMzsQlZ.Ujkl7HK', 0, 'hein@gmail.com', 'admin'),
(5, 'hnin wai mon', '$2y$10$DX2IZaMIrr7sc3NwoA0kyugoVFRHJmvFelsEUTwLhycBFC/WMYsBe', 0, 'hnin@gmail.com', 'suscriber'),
(10, 'Than swe Linn', '$2y$10$fGmpYao7iJxpPIGGjcAEtegRD4RrDdoZ8vl.R6iz5P3dFp/lNhLE.', 0, 'than@gmail.com', 'suscriber'),
(11, '', '$2y$10$JYaG2GVLC8b7zna6g.jKseXwQqBMOAFA3K6xx7AuK903mfAuEYR7O', 0, 'kk@gmail.com', 'suscriber'),
(12, '111', '$2y$10$.FQzD6VYL2MXz87f8GlAN.1UcPTn8uDK9Q2NPQwfFUWGobsI2DiMe', 0, 'thin@gmail.com', 'suscriber'),
(13, '111', '$2y$10$EekNJACbet7.EOAVVAc0rOxFps65Kr0NFdACv3L6F4n1GiGlSTD8K', 0, 'kyaw@gmail.com', 'suscriber'),
(15, 'Hein Htet', '$2y$10$hS7MKMh71F/UkEs6qcT24uvKThSq9.0oPpPc81pQaWYPkSCM9NhnK', 0, 'htet@gmail.com', 'suscriber'),
(16, 'Hein Htet', '$2y$10$0q11tNHbTPxra0jOeaeSb.ivcbpMjULR6Pn84tsV/tpqoFXceXJV.', 0, 'htet1@gmail.com', 'suscriber'),
(17, 'mee', '$2y$10$YnY/ssE8aj5Mgak2uj.aBexcl9fke5ASGq7LbPVYlQC7Q2G78wwqi', 0, 'mee@gmail.com', 'suscriber'),
(18, 'Hein Htet Aung', '$2y$10$vPWjd34RWBj1uNX3qEN59u6ISxeaaDAZ.a3QCDFpWcFwMQ9Nho1iG', 0, 'hein2@gmail.com', 'suscriber'),
(19, '', '$2y$10$Ma2umUynI0o0Caxxdzr0Zuk8m.qanuRSoyGABmoO3/7PSsdPXoh7W', 0, 'hein3@gmail.com', 'suscriber'),
(20, '', '$2y$10$fdI0lWMEaafnK2.DNQGyX.N332U2WVRJjkxbKMATJKE32DtF2uHpe', 0, 'hein4@gmail.com', 'suscriber'),
(21, 'Hein Htet Aung', '$2y$10$e5gOBOloZcdGA2S89rI3fu5wBBiylYNzcHHV5clZrXieL8DaK8VyK', 0, 'hein5@gmail.com', 'suscriber'),
(22, 'Hein Htet Aung', '$2y$10$Kt3/Pk2mdG0jlbzXMcJMUOprDpIlo2Q2JNCT3PeD8hXGEtw59gqZK', 0, 'aung@gmail.com', 'suscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
