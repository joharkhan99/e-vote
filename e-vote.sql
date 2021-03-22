-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2021 at 06:04 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

DROP TABLE IF EXISTS `parties`;
CREATE TABLE IF NOT EXISTS `parties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `name`, `leader`, `symbol`, `flag`) VALUES
(1, 'Aam Aadmi', 'Arslan Ul Mulk', 'aamsymbol.png', 'aamadmi.jpg'),
(2, 'Awami National Party', 'Asfandyar Wali Khan', 'anpsymbol.jpg', 'anp.png'),
(3, 'Pakistan Awami Tehreek', 'Muhammad Tahir-ul-Qadri', 'awamitehreeksymbol.png', 'awamitehreek.png'),
(4, 'Awami Workers\' Party', 'Yousuf Mastikhan', 'awamiworkersymbol.png', 'awamiworker.png'),
(5, 'Jamaat-e-Islami', 'Siraj ul Haq', 'jamateislamisymbol.png', 'jamateislami.png'),
(6, 'Jamiat Ulema-e Islam', 'Maulana Fazl-ur-Rehman', 'juisymbol.png', 'jui.png'),
(7, 'Milli Awami Party', 'Mahmood Khan Achakzai', 'milliawamisymbol.png', 'milliawami.png'),
(8, 'Muttahida Qaumi Movement', 'Khalid Maqbool Siddiqui', 'mqmsymbol.png', 'mqm.png'),
(9, 'Pasban Pakistan', 'Altaf Shakoor', 'pasbansymbol.png', 'pasban.jpg'),
(10, 'Pakistan Muslim League (N)', 'Shehbaz Sharif', 'pmlnsymbol.png', 'pmln.png'),
(11, 'Pakistan Muslim League (Q)', 'Shujaat Hussain', 'pmlqsymbol.png', 'pmlq.png'),
(12, 'Pakistan Peoples Party', 'Asif Ali Zardari', 'pppsymbol.png', 'ppp.png'),
(13, 'Pakistan Tehreek-e-Insaf', 'Imran Khan', 'ptisymbol.png', 'pti.png');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `party` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `name`, `cnic`, `city`, `party`, `ip`) VALUES
(1, 'test', '1234567891231', 'islamabad', 12, '::1'),
(2, 'test', '1234567891232', 'islamabad', 12, '::1'),
(3, 'sad', '1232123212344', 'asds', 4, '::1'),
(4, 'kjhkj', '6765667667676', '565', 4, '::1'),
(5, 'klklj', '7678', 'iuu', 1, '::1'),
(6, 'da', 'j', 'jk', 13, '::1'),
(7, 'io', '09', '90', 13, '::1'),
(8, 'kl', '9898998', 'kjkj', 6, '::1'),
(9, 'jhar khan', '7656567878787', 'peshawar', 8, '::1'),
(10, 'qeqw', '1234567897643', 'wwerwer', 8, '::1'),
(11, 'qwqwqw', '121212211221212', 'wqwqw', 4, '::1'),
(12, 'asasas', '121221212w233', 'wewewe', 7, '::1'),
(13, 'wewe', '4544554545454', 'ererer', 7, '::1'),
(14, 'dssddsd', '4344355434332', 'fddfdffd', 8, '::1'),
(15, 'dssddsd', '4344355434312', 'fddfdffd', 3, '::1'),
(16, 'dssddsd', '4344355436512', 'fddfdffd', 10, '::1'),
(17, 'dssddsd', '4344355456512', 'fddfdffd', 11, '::1'),
(18, 'dssddsd', '4344355456516', 'fddfdffd', 12, '::1'),
(19, 'dssddsd', '4344355456517', 'fddfdffd', 13, '::1'),
(20, 'dssddsd', '4344355412517', 'fddfdffd', 9, '::1'),
(21, 'ewewe', '4543432323343', 'rlkerjler', 9, '::1'),
(22, 'kjskjsdhkjds', '343434343434342', 'sdssdsd', 9, '::1'),
(23, 'ererer', '4343434343434', 'ererer', 13, '::1'),
(24, 'ererer', '34344343434343', 'eererer', 2, '::1'),
(25, 'ererer', '34344345434343', 'eererer', 5, '::1'),
(26, 'wwewe', '1212121212121', 'qwqwq', 2, '::1'),
(27, 'wewewe', '32323232323232', 'dsdsdds', 13, '::1'),
(28, 'jkhefkjh', '647364736437826', 'fsdfdsf', 13, '::1'),
(29, 'jkhefkjh', '647364726437826', 'fsdfdsf', 13, '::1'),
(30, 'johar han', '1212123342322', 'kaksskak', 10, '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
