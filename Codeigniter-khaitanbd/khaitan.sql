-- phpMyAdmin SQL Dump
-- version 3.0.0-rc2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2010 at 06:50 AM
-- Server version: 5.1.28
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `khaitanbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`) VALUES
(1, 'fgfdgfdgtrretret', '<p>fgdgfeeewrewr</p>');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idmenu` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(30) NOT NULL,
  `lock` tinyint(4) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `idmenu`, `name`, `code`, `lock`, `create_date`) VALUES
(1, 142, 'aaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbb', 1, '2010-12-12'),
(2, 149, 'argerg', 'were', 1, '2010-12-12'),
(3, 149, 'sfdsgfdtfg', 'ertret', 1, '2010-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `homephone` varchar(50) NOT NULL,
  `mobilephone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(142, 'fef'),
(144, 'retert'),
(145, 'retert'),
(146, 'ertret'),
(147, 'ertretre'),
(148, 'trret'),
(149, 'aaaaaaaaaaa'),
(150, 'sfsf'),
(151, 'retret'),
(152, 'ertret'),
(153, 'wret'),
(154, 'retretret'),
(155, 'nnnn'),
(157, ',mmkmm'),
(158, 'mkmkm'),
(159, 'knjnjn'),
(160, 'mlkmmlkm'),
(161, 'jkjnkjkjn'),
(162, 'vvvvvvvvvvvv'),
(163, 'ttttttttttt'),
(164, 'tttttttttttt'),
(165, 'yyyyyyyyyyyy'),
(166, 'uuuuuuuuu'),
(167, 'ergtret'),
(168, 'ety'),
(169, 'dddddddddeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `lock` tinyint(4) NOT NULL,
  `idsort` int(20) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `lock`, `idsort`, `create_date`) VALUES
(1, 'werwer', '<p>werewrewrewer</p>', 0, 1, '2010-12-12'),
(4, '5t45', '<p>ertret</p>', 1, 4, '2010-12-12'),
(5, 'ertret', '<p>eret</p>', 1, 5, '2010-12-12'),
(6, 'aaaaaaaaaaaaabbbbbbbbbb', '<p style="padding-top: 3px"><span class="news_title"><strong><font color="#0070d2" size="3">Th&ocirc;ng b&aacute;o tuyển sinh Đại học ch&iacute;nh quy (Cao đẳng li&ecirc;n th&ocirc;ng đại học)</font></strong></span></p>\n<p class="news_content">&nbsp;aaaaaaaaaa</p>\n<p><small>17-11-2008 | 10:56 </small></p>\n<p style="padding-top: 3px">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify">Nhằm đ&aacute;p ứng nhu cầu cho c&aacute;c sinh vi&ecirc;n đ&atilde; tốt nghiệp cao đẳng mong muốn học li&ecirc;n th&ocirc;ng l&ecirc;n đại học tham gia kỳ thi tuyển để học trong năm học 2008-2009 v&agrave; theo Quy định đ&agrave;o tạo li&ecirc;n th&ocirc;ng tr&igrave;nh độ cao đẳng, đại học ban h&agrave;nh theo Quyết định số 06/2008/QĐ-BGDĐT của Bộ GD-ĐT ng&agrave;y 13/02/2008, trường Đại học Hoa Sen th&ocirc;ng b&aacute;o tuyển sinh kh&oacute;a III năm học 2008-2009 chương tr&igrave;nh cao đẳng li&ecirc;n th&ocirc;ng l&ecirc;n đại học như sau...</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify"><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đối tượng tuyển sinh:</strong></p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-align: justify">L&agrave; những người đ&atilde; c&oacute; bằng cao đẳng ch&iacute;nh quy c&ugrave;ng ng&agrave;nh đ&agrave;o tạo v&agrave; c&oacute; th&acirc;m ni&ecirc;n c&ocirc;ng t&aacute;c từ 1 năm trở l&ecirc;n t&iacute;nh đến ng&agrave;y dự thi. Ri&ecirc;ng ng&agrave;nh Quản trị kinh doanh c&oacute; tuyển đối tượng tốt nghiệp kh&aacute;c ng&agrave;nh đ&agrave;o tạo l&agrave; những người đ&atilde; c&oacute; bằng cao đẳng ch&iacute;nh quy ng&agrave;nh Quản trị văn ph&ograve;ng, Quản trị h&agrave;nh ch&aacute;nh nhưng sẽ phải học th&ecirc;m một khối lượng kiến thức bổ sung để c&oacute; đủ tr&igrave;nh độ đầu v&agrave;o trước khi thi tuyển sinh.</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-align: justify">Sinh vi&ecirc;n tốt nghiệp loại kh&aacute;, giỏi được miễn quy định th&acirc;m ni&ecirc;n c&ocirc;ng t&aacute;c.</p>\n<p style="margin: 0in 0in 0pt; text-indent: 0.5in; text-align: justify">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify"><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chỉ ti&ecirc;u, ng&agrave;nh tuyển sinh v&agrave; h&igrave;nh thức đ&agrave;o tạo</strong></p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify">-&nbsp;&nbsp; Chỉ ti&ecirc;u tuyển sinh: 240</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify">-&nbsp;&nbsp; C&aacute;c ng&agrave;nh tuyển sinh:</p>\n<p style="margin: 6pt 0in 0pt 71.7pt; text-indent: -17.85pt; text-align: justify">&sect;&nbsp; C&ocirc;ng nghệ th&ocirc;ng tin</p>\n<p style="margin: 0in 0in 0pt 1in; text-indent: -0.25in; text-align: justify">&sect;&nbsp; Quản trị kinh doanh</p>\n<p style="margin: 0in 0in 0pt 1in; text-indent: -0.25in; text-align: justify">&sect;&nbsp; Kế to&aacute;n</p>\n<p style="margin: 0in 0in 0pt 1in; text-indent: -0.25in; text-align: justify">&sect;&nbsp; Tiếng Anh (chuy&ecirc;n ng&agrave;nh Tiếng Anh thương mại)</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify">-&nbsp;&nbsp; H&igrave;nh thức đ&agrave;o tạo:</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-indent: 0.25in; text-align: justify">Chương tr&igrave;nh đ&agrave;o tạo li&ecirc;n th&ocirc;ng từ cao đẳng l&ecirc;n đại học được tổ chức đ&agrave;o tạo theo học chế t&iacute;n chỉ như c&aacute;c chương tr&igrave;nh đ&agrave;o tạo đại học hiện h&agrave;nh của nh&agrave; trường. Chương tr&igrave;nh đ&agrave;o tạo k&eacute;o d&agrave;i trung b&igrave;nh trong 3 học kỳ ch&iacute;nh (1,5 năm) gồm cả thời gian thực tập tốt nghiệp hoặc kh&oacute;a luận tốt nghiệp (nếu c&oacute;).</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-indent: 0.25in; text-align: justify">Sinh vi&ecirc;n c&oacute; thể đăng k&yacute; tham gia lớp học ban ng&agrave;y hoặc buổi tối v&agrave; thứ bảy, chủ nhật, r&uacute;t ngắn thời gian học hoặc k&eacute;o d&agrave;i thời gian học theo qui định về đ&agrave;o tạo t&iacute;n chỉ của nh&agrave; trường.</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-indent: 0.25in; text-align: justify">Sinh vi&ecirc;n tốt nghiệp sẽ được cấp bằng đại học ch&iacute;nh quy đ&uacute;ng với ng&agrave;nh sinh vi&ecirc;n học.</p>\n<p style="margin: 0in 0in 0pt; text-align: justify">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify"><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thi tuyển:</strong></p>', 1, 6, '2010-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idcategory` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `quality` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `flag_discounts` tinyint(1) NOT NULL,
  `flag_promotions` tinyint(1) NOT NULL,
  `flag_new` tinyint(1) NOT NULL,
  `lock` tinyint(4) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `idcategory`, `image`, `name`, `code`, `quality`, `description`, `price`, `flag_discounts`, `flag_promotions`, `flag_new`, `lock`, `create_date`) VALUES
(10, 0, 'http://localhost/khaitanbd/images/product/', 'fffffffff', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(11, 0, 'http://localhost/khaitanbd/images/product/', 'aaaaaaaaaaaaa', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(12, 0, 'http://localhost/khaitanbd/images/product/', 'ffffffffffff', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(15, 0, '', 'sdfsdf', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(16, 0, '', 'kmmom', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(17, 0, '', 'szdfsdf', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(18, 0, 'http://localhost/khaitanbd/images/202292482010.jpg', 'rrrrrrrrr', '', '', '', 0, 0, 0, 0, 1, '2010-12-12'),
(19, 0, 'http://localhost/khaitanbd/images/342492482010.jpg', 'bbbbbbbb', '', '', '', 0, 0, 0, 0, 1, '2010-12-12');
