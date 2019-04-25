-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 07:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogpost_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `contents` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `contents`) VALUES
(3, 'How to become expert in Codeigniter', '<p><img src="http://localhost/blog-post/assets/images/_first,_solve_the_problem_Then,_write_the_code__.png" xss=removed></p><p>In this article I will share with you how to become expert in Codeigniter.</p><p>(Step-by-Step).</p><h3>Step #1. Sub Heading</h3><p>This is contents <span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents.</span></p><h3>Step #2. Sub Heading 2</h3><p>This is contents <span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents.</span></p><p><img src="http://localhost/blog-post/assets/images/240_F_164068808_ko5bt2lTpdqrZZqNXqpqixFBkUoIIn5s.jpg" xss=removed><span xss=removed><br></span>This is contents <span xss=removed>This is contents </span><span xss=removed>This is contents </span><span xss=removed>This is contents.</span><br></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
