-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-12 15:02:43
-- 服务器版本： 10.1.8-MariaDB
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_organiser`
--

CREATE TABLE IF NOT EXISTS `tp_organiser` (
  `key` varchar(20) NOT NULL COMMENT 'key 届数加姓名拼音',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `grade` int(11) NOT NULL COMMENT '年级',
  `sex` int(11) NOT NULL COMMENT '性别',
  `class` int(11) NOT NULL COMMENT '班级',
  `major` varchar(30) NOT NULL COMMENT '专业',
  `summary` varchar(400) NOT NULL COMMENT '个人介绍',
  `motto` varchar(50) NOT NULL COMMENT '座右铭',
  `position` varchar(50) NOT NULL COMMENT '现任职位'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_organiser`
--
ALTER TABLE `tp_organiser`
  ADD PRIMARY KEY (`key`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
