-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2022 at 05:08 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_retrival`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

DROP TABLE IF EXISTS `tbl_content`;
CREATE TABLE IF NOT EXISTS `tbl_content` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `skeys` varchar(255) DEFAULT NULL,
  `content` longtext,
  `filepath` varchar(200) DEFAULT NULL,
  `uploader` varchar(255) DEFAULT NULL,
  `upload_date` varchar(100) DEFAULT NULL,
  `report` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `search` (`title`,`skeys`),
  KEY `title` (`title`),
  KEY `skeys` (`skeys`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`id`, `title`, `skeys`, `content`, `filepath`, `uploader`, `upload_date`, `report`, `status`) VALUES
(459184, 'q', 'q', '<p>qqqqqqqqqqqqqqqqqqqqqqqq</p>\r\n', '459184.html', 'dhumal', '21/04/2021', '0', '1'),
(5726242, 'oracle', 'oracle, database, sql, java', '<p>oracle language</p>\r\n', '5726242.html', 'naresh', '22/04/2021', '0', '1'),
(9889833, 'php clas', 'php , php_class, phpOOP', '<p>php class</p>\r\n', '9889833.html', 'naresh', '22/04/2021', '0', '1'),
(2554103, 'php loop', 'php Loops', '<p>loops</p>\r\n', '2554103.html', 'naresh', '22/04/2021', '0', '1'),
(1692100, 'location', 'php_header, header, php', '<p>header(location)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1692100.html', 'naresh', '22/04/2021', '0', '1'),
(5427324, 'control statement', 'php_control_statement, php,if ', '<p>if else</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '5427324.html', 'naresh', '22/04/2021', '0', '1'),
(5275998, 'switch', 'php_switch, Switch_case_php', '<p>php switch case</p>\r\n', '5275998.html', 'naresh', '22/04/2021', '0', '1'),
(6426338, 'php functions', 'php_functions', '<p>php functions</p>\r\n', '6426338.html', 'naresh', '22/04/2021', '0', '1'),
(9216811, 'loops in php', 'loops_php', '<p>this is second loop page</p>\r\n', '9216811.html', 'naresh', '22/04/2021', '0', '1'),
(3088430, 'constructor in php', 'php_constructor', '<p>php constructor</p>\r\n', '3088430.html', 'naresh', '22/04/2021', '0', '1'),
(723893, 'destructor in php', 'php_destructor', '<p>php destructor</p>\r\n', '723893.html', 'naresh', '22/04/2021', '0', '1'),
(2924898, 'php while loop', 'php_while_loop', '<p>php while loops</p>\r\n', '2924898.html', 'naresh', '22/04/2021', '0', '1'),
(3187015, 'static function php', 'php_static_function, php', '<p>static function</p>\r\n', '3187015.html', 'naresh', '22/04/2021', '0', '1'),
(9034990, 'php get', 'php get', '<p>php get method</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '9034990.html', 'naresh', '24/04/2021', '0', '1'),
(7480455, 'php post', 'php_post', '<p>php post</p>\r\n', '7480455.html', 'naresh', '24/04/2021', '0', '1'),
(2735054, 'software testing', 'softwaretesting, testing,', '<p>this is software testing</p>\r\n', '2735054.html', 'naresh', '28/04/2021', '0', '1'),
(2466800, 'lenovo laptop', 'Lenovo, laptop, lenovolaptop, idapad, thinkpad', '<p>LENOVO</p>\r\n', '2466800.html', 'naresh', '28/04/2021', '1', '1'),
(6904142, 'MSI laptop', 'laptop, MSI', '<h1>ACER&nbsp; Laptop</h1>\r\n\r\n<p>&nbsp;</p>\r\n', '6904142.html', 'naresh', '28/04/2021', '0', '1'),
(8731037, 'test', 'test', '<h1>this is&nbsp;<strong> test page nice to meet </strong>you how are you</h1>\r\n', '8731037.html', 'naresh', '28/04/2021', '0', '1'),
(755533, 'nareshTest', 'test', '<h1>hello nice to meet you</h1>\r\n', '755533.html', 'naresh', '28/04/2021', '0', '1'),
(557825, 'test deoxys', 'deoxys', '<h1>&nbsp;</h1>\r\n\r\n<p>this is my test page</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>nice to meet you</p>\r\n', '557825.html', 'naresh', '28/04/2021', '0', '1'),
(5039548, 'dbms', 'dbms, sql, sqlserver, mysql', '<h1>welcome to dbms</h1>\r\n\r\n<h3>this is my page of dbms</h3>\r\n\r\n<p>this is common database structure</p>\r\n\r\n<p><img alt=\"db\" src=\"https://www.researchgate.net/publication/318370855/figure/fig1/AS:515333536444416@1499876497385/Data-flow-for-Opal-Firebase-is-a-real-time-cloud-database-by-Google-Results-The-design.png\" style=\"height:415px; width:629px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '5039548.html', 'naresh', '28/04/2021', '0', '1'),
(3539688, 'php basics', 'php, php_flow', '<h1><span class=\"marker\">PHP BASICS</span></h1>\r\n\r\n<p>php is hypertext preprocessor</p>\r\n', '3539688.html', 'naresh', '29/04/2021', '0', '1'),
(8519599, 'k', 'k', '<p>hh</p>\r\n', '8519599.html', 'naresh', '29/04/2021', '0', '1'),
(9889754, 'aa', 'aa', '<p><span class=\"marker\">00000</span></p>\r\n', '9889754.html', 'naresh', '29/04/2021', '0', '1'),
(9639546, 'css', 'csss', 'http://localhost/projects/testing%20Project/sql_retrival/public/css/contents.css<p><span class=\"marker\">css</span></p>\r\n', '9639546.html', 'naresh', '29/04/2021', '0', '1'),
(4509850, 't', 't', '<link rel=stylesheet href=D:phpmyadminwwwprojectsTesting Projectsql_retrival/public/css/contents.css><p><span class=\"marker\">0000000000</span></p>\r\n', '4509850.html', 'naresh', '29/04/2021', '0', '1'),
(5047681, '00', '00', '<p><span class=\"marker\">acsdft</span></p>\r\n', '5047681.html', 'naresh', '29/04/2021', '0', '1'),
(8020350, '00', '00', '<link rel=stylesheet  href=../../public/css/contents.css><p><span class=\"marker\">acsdft</span></p>\r\n', '8020350.html', 'naresh', '29/04/2021', '0', '1'),
(676817, '00', '00', '<link rel=stylesheet  href=../../public/css/contents.css><p><span class=\"marker\">acsdft</span></p>\r\n', '676817.html', 'naresh', '29/04/2021', '0', '1'),
(6750958, 'laptop2 lenovo', 'Lenovo, laptop, lenovolaptop, idapad, thinkpad', '<link rel=stylesheet  href=../../public/css/contents.css><h1><span class=\"marker\">LAPTOP</span></h1>\r\n\r\n<p><span style=\"background-color:#ffff00\">LENOVO</span></p>\r\n\r\n<p><span style=\"background-color:#ffff00\"><img alt=\"\" src=\"https://static.bhphoto.com/images/images1000x1000/1590505606_1561720.jpg\" style=\"height:500px; width:500px\" /></span></p>\r\n', '6750958.html', 'naresh', '31/05/2021', '0', '1'),
(2408217, 'resham', 'model, heroin, celebrity', '<link rel=stylesheet  href=../../public/css/contents.css><h1>RESHAM KHANDAGALE</h1>\r\n\r\n<p>https://www.google.com/search?q=Candice+Swanepoel&amp;rlz=1C1SQJL_enIN928IN928&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3SDEqL1fiArGMU8wq01O0RLKTrfST83Nz8_OsUvLL88oTi1KKVzEKAcVyclKTSzLz8_Rz81NSc4oXsQo6J-alZCanKgSXJ-alFuSn5uxgZZzAxggA1mtFbV0AAAA&amp;sxsrf=ALeKk00KaBNKendkeIX_dObcIs7OvRWnxw:1628841923950&amp;tbm=isch&amp;source=iu&amp;ictx=1&amp;fir=cxr2qZf27Sj-bM%252CzIQcd5Z3aN0vWM%252C%252Fm%252F03d6ygd&amp;vet=1&amp;usg=AI4_-kTFUu-oFUM4b--DsI-uwsEvuNZYSg&amp;sa=X&amp;ved=2ahUKEwi_upGCxa3yAhW4yosBHb9nDOwQ_B16BAgREAE#imgrc=cxr2qZf27Sj-bM</p>\r\n', '2408217.html', 'naresh', '13/08/2021', '0', '1'),
(4697160, 'TANU', 'tanu, celebrity, model, heroine', '<link rel=stylesheet  href=../../public/css/contents.css><h1>LUMBINI&nbsp;</h1>\r\n\r\n<p><img alt=\"\" src=\"http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQhpOZcynggVdHWdrIj0ypqQiH2iOgjFQR4lEacSxwgwEH4tKnYrNK41S-T4w7m\" style=\"height:149px; width:100px\" /></p>\r\n', '4697160.html', 'naresh', '13/08/2021', '0', '1'),
(6719717, 'pragati', 'pragati, heroin, super model', '<link rel=stylesheet  href=../../public/css/contents.css><h1><span class=\"marker\">PAGU</span></h1>\r\n\r\n<p>&nbsp;</p>\r\n', '6719717.html', 'naresh', '01/09/2021', '0', '1'),
(9030450, 'test ', 'suyog ware python ', '<link rel=stylesheet  href=../../public/css/contents.css><h2 style=\"font-style:italic;\"><s><strong>python</strong></s></h2>\r\n\r\n<p>this is python</p>\r\n\r\n<p>by suyog</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '9030450.html', 'dhumal@test.com', '11/12/2021', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE IF NOT EXISTS `tbl_image` (
  `image` int(11) NOT NULL,
  `tipic` int(11) NOT NULL,
  `uploader` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue`
--

DROP TABLE IF EXISTS `tbl_issue`;
CREATE TABLE IF NOT EXISTS `tbl_issue` (
  `email` varchar(200) DEFAULT NULL,
  `issue_from` varchar(200) DEFAULT NULL,
  `issue` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `role`, `status`) VALUES
('1', 'naresh admin', 'admin@test.com', '123', 'admin', 1),
('70551012', 'user1', 'user1@gmail.com', '123', 'user', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
