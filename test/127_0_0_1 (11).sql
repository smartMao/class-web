-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015-04-22 22:46:16
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `webclass`
--
CREATE DATABASE IF NOT EXISTS `webclass` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webclass`;

-- --------------------------------------------------------

--
-- 表的结构 `album_cover`
--

CREATE TABLE IF NOT EXISTS `album_cover` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '相册id',
  `uid` tinyint(4) NOT NULL COMMENT '作者id',
  `username` varchar(18) NOT NULL COMMENT '作者用户名',
  `title` varchar(30) NOT NULL COMMENT '相册标题',
  `time` date NOT NULL COMMENT '相册时间',
  `power` tinyint(4) NOT NULL COMMENT '相册权限',
  `description` varchar(200) NOT NULL COMMENT '相册描述',
  `browseNum` int(11) NOT NULL COMMENT '浏览数',
  `commentNum` int(11) NOT NULL COMMENT '评论数',
  `path` varchar(200) NOT NULL COMMENT '相册封面路径',
  `folderPath` varchar(200) NOT NULL COMMENT '相册文件路径(存放照片)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `path` (`path`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='相册表' AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `album_cover`
--

INSERT INTO `album_cover` (`id`, `uid`, `username`, `title`, `time`, `power`, `description`, `browseNum`, `commentNum`, `path`, `folderPath`) VALUES
(40, 89, '徐志乔', 'a', '2015-04-22', 1, 'sdas', 0, 0, 'albumCover/15537b3e00fece.jpeg', './albumFolderTest/40_2015-04-22/');

-- --------------------------------------------------------

--
-- 表的结构 `article_info`
--

CREATE TABLE IF NOT EXISTS `article_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '用户表ID',
  `title` varchar(25) DEFAULT NULL COMMENT '标题',
  `author` varchar(25) DEFAULT NULL COMMENT '作者',
  `time` datetime NOT NULL COMMENT '发布时间',
  `content` text COMMENT '文章内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章信息表' AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `article_info`
--

INSERT INTO `article_info` (`id`, `uid`, `title`, `author`, `time`, `content`) VALUES
(15, 86, 'asdsa', '徐志乔', '2015-02-26 12:08:15', '<p>asdasdassd</p>'),
(16, 86, '11111111111111111111', '徐志乔', '2015-02-26 12:08:47', '<p>&nbsp; &nbsp; &nbsp; \r\n11111111111111111111 &nbsp; &nbsp; &nbsp; asdas</p>'),
(18, 86, 'asd', '徐志乔', '2015-02-26 12:20:49', '<p>&nbsp; &nbsp; &nbsp; \r\nsadad &nbsp; &nbsp; &nbsp; asdasasdas</p>'),
(19, 86, 'asd', '徐志乔', '2015-02-26 12:29:52', '<p>99999999999999asdasdasdasdasasdas</p>'),
(20, 86, 'fgg', '徐志乔', '2015-02-26 12:42:28', '<p>asd</p>'),
(21, 86, 'as', '徐志乔', '2015-02-26 12:42:38', '<p>asscasac</p>'),
(22, 86, '我终于完', '徐志乔', '2015-02-26 15:47:51', '<p>55555555555555sddsd</p>');

-- --------------------------------------------------------

--
-- 表的结构 `photo_content`
--

CREATE TABLE IF NOT EXISTS `photo_content` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT COMMENT '照片id',
  `cid` int(11) NOT NULL COMMENT '所属相册id',
  `size` varchar(10) NOT NULL COMMENT '照片大小(KB)',
  `path` text NOT NULL COMMENT '照片路径',
  `date` date NOT NULL COMMENT '上传日期',
  `description` varchar(200) NOT NULL COMMENT '照片描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='照片表' AUTO_INCREMENT=127 ;

--
-- 转存表中的数据 `photo_content`
--

INSERT INTO `photo_content` (`id`, `cid`, `size`, `path`, `date`, `description`) VALUES
(127, 40, '3.24 KB', './albumFolderTest/40_2015-04-22/40_058e311d1134ab86fee4324683e3ca19.png', '2015-04-22', '');

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `userName` varchar(25) DEFAULT NULL COMMENT '用户名',
  `password` varchar(20) DEFAULT NULL COMMENT '密码',
  `trueName` varchar(12) DEFAULT NULL COMMENT '真实姓名',
  `birthday` char(10) NOT NULL COMMENT '生日',
  `phone` char(11) NOT NULL COMMENT '手机号码',
  `sex` int(11) NOT NULL DEFAULT '1' COMMENT '性别',
  `address` varchar(150) NOT NULL COMMENT '地址',
  `height` int(11) NOT NULL COMMENT '身高',
  `introduction` text NOT NULL COMMENT '个人简介',
  `school` varchar(50) NOT NULL COMMENT '学校',
  `photo` varchar(200) NOT NULL COMMENT '头像地址',
  `power` int(11) NOT NULL DEFAULT '3' COMMENT '权限',
  `registerTime` date NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=91 ;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`id`, `userName`, `password`, `trueName`, `birthday`, `phone`, `sex`, `address`, `height`, `introduction`, `school`, `photo`, `power`, `registerTime`) VALUES
(89, '徐志乔', 'morning', '信息', '2009-12-13', '1234567489', 1, '信息', 333, '	      	      	      \r\n					\r\n					\r\n					', '广州工贸技师学院', '', 2, '2015-03-01'),
(90, '问问', 'morning', '娃娃', '', '', 1, '', 0, '', '', '', 3, '2015-04-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
