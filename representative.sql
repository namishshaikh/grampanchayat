-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 01:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grampanchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `representative`
--

CREATE TABLE `representative` (
  `panch_name` varchar(300) NOT NULL,
  `sarpanch_name` varchar(30) NOT NULL,
  `dist_mname` varchar(30) NOT NULL,
  `distp_mname` varchar(30) NOT NULL,
  `wname` varchar(100) NOT NULL,
  `sansad_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representative`
--

INSERT INTO `representative` (`panch_name`, `sarpanch_name`, `dist_mname`, `distp_mname`, `wname`, `sansad_name`) VALUES
('geawge', '', '', '', 'rerger', 'grege'),
('grae', '', '', '', 'grasw', 'hgae'),
('grae', '', '', '', 'grasw', 'hgae'),
('grae', '', '', '', 'grasw', 'hgae'),
('fjjvjvs', '', '', '', 'bfscsjdzmn', 'sDZvzkjxds,m'),
('fjjvjvs', 'bfkjvj', 'brsdjvds', '', 'bfscsjdzmn', 'sDZvzkjxds,m'),
('bfildxkzd', 'ndzgbx ', 'bfxc ', '', 'bdfnnnvvn', 'bfxcjkkjdf'),
('bfildxkzd', 'ndzgbx ', 'bfxc ', ',fkfffkkfmcv', 'bdfnnnvvn', 'bfxcjkkjdf'),
('grjklrg', 'greijgrjjrg', 'grsdkjkefwk', 'genjjefwjn', 'grmmggmng', 'rgirirriiirigr'),
('', '', '', '', '', ''),
('namish', 'namiswh', 'me', 'mai', 'mywork', 'bfxcjkkjdf'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
