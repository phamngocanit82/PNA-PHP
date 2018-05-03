-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2009 at 04:30 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `supham_pedagogy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` bigint(20) NOT NULL auto_increment,
  `description` mediumtext NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `createdate`) VALUES
(1, '<h1><span style="color: #ff0000;">Gioi thieu</span></h1>', '2009-02-08 11:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `id` bigint(20) NOT NULL auto_increment,
  `visible` int(2) NOT NULL,
  `url` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `visible`, `url`, `image`, `createdate`) VALUES
(13, 0, '', '', '2009-02-06 15:43:54'),
(14, 1, '', 'logo.jpg', '2009-02-06 16:15:08'),
(15, 1, '', 'right032.png', '2009-02-07 12:00:22'),
(16, 1, '', 'iconTitle.gif', '2009-02-07 12:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(22, 'Tầm quan trọng của bình đẳng giới trong việc phát triển đất nước', '<p><strong>"TẦM QUAN TRỌNG CỦA B&Igrave;NH ĐẲNG GIỚI TRONG VIỆC PH&Aacute;T TRIỂN ĐẤT NƯỚC"</strong> &nbsp;</p>\n<p><strong>Diễn giả:</strong> <strong>TS. Nguyễn Đ&agrave;i Trang</strong> <em>Trường Đại Học Toronto, Canada</em> &nbsp; <strong></strong></p>\n<p><strong>Thời gian: 8g-11g , 15.11.2008</strong> <strong></strong></p>\n<p><strong>Địa điểm: Trường Đại học Hoa Sen - 8 Nguyễn Văn Tr&aacute;ng, Q.1, TP HCM</strong> &nbsp;</p>\n<p>&nbsp;</p>\n<p>L&yacute; thuyết giới đ&atilde; chứng thực l&agrave; nếu vai tr&ograve; truyền thống của phụ nữ trong gia đ&igrave;nh c&agrave;ng cao th&igrave; họ c&agrave;ng c&oacute; &iacute;t cơ hội để đạt được b&igrave;nh đẳng giới trong gia đ&igrave;nh v&agrave; cả trong x&atilde; hội. Khi phụ nữ kh&ocirc;ng c&oacute; sự b&igrave;nh đẳng, họ sẽ kh&ocirc;ng c&oacute; cơ hội tham gia bảo vệ quyền lợi đất nước. Trong bối cảnh Chiến tranh Thế giới thứ hai chẳng hạn, nh&agrave; văn Anh Virginia Woolf c&oacute; n&oacute;i: "L&agrave; người phụ nữ, t&ocirc;i kh&ocirc;ng c&oacute; đất nước của m&igrave;nh". &nbsp; B&agrave; Triệu l&agrave; vị anh h&ugrave;ng d&acirc;n tộc Việt Nam trong thế kỷ thứ 3. Vị l&atilde;nh tụ qu&acirc;n sự 19 tuổi n&agrave;y được phương T&acirc;y xem l&agrave; "Joan of Arc", đ&atilde; l&atilde;nh đạo nh&acirc;n d&acirc;n chống ngoại x&acirc;m phương Bắc. C&acirc;u n&oacute;i nổi tiếng của B&agrave; cho thấy B&agrave; kh&ocirc;ng chấp nhận vai tr&ograve; thứ yếu trong gia đ&igrave;nh v&agrave; mong muốn theo đuổi &yacute; định bảo vệ đất nước: "<em>T&ocirc;i muốn cỡi cơn gi&oacute; mạnh, đạp luồn s&oacute;ng dữ, ch&eacute;m c&aacute; k&igrave;nh ở biển Đ&ocirc;ng, qu&eacute;t sạch bờ c&otilde;i để cứu d&acirc;n tho&aacute;t khỏi &aacute;ch đ&ocirc; hộ phương Bắc, chứ đ&acirc;u chịu khom lưng l&agrave;m t&igrave; thiếp cho người!" </em>&nbsp; Nhận thấy tầm quan trọng của b&igrave;nh đẳng giới trong việc ph&aacute;t triển đất nước, Dự &aacute;n B&agrave; Triệu được h&igrave;nh th&agrave;nh giữa Trường Đại học Hoa Sen v&agrave; Trường Đại học Toronto, Canada nhằm mục đ&iacute;ch giảng dạy v&agrave; nghi&ecirc;n cứu Khoa học Giới (xem th&ocirc;ng tin ở website www.globalgendereducation.org). Người s&aacute;ng lập Dự &aacute;n, TS. Nguyễn Đ&agrave;i Trang từ Trường Đại học Toronto, sẽ khởi đầu Dự &aacute;n bằng b&agrave;i thuyết tr&igrave;nh n&agrave;y. C&ocirc; sẽ tr&igrave;nh b&agrave;y về mối li&ecirc;n hệ giữa tinh thần d&acirc;n tộc (nationalism) v&agrave; tinh thần phụ nữ (feminism), c&aacute;c hậu quả về kinh tế v&agrave; quyền lợi d&acirc;n tộc g&acirc;y ra bởi bất b&igrave;nh đẳng giới, v&igrave; sao c&aacute;ch tiếp c&acirc;n Giới v&agrave; Ph&aacute;t triển sau nhiều thập ni&ecirc;n vẫn kh&ocirc;ng đem lại nhiều hiệu quả, v&agrave; c&ocirc; sẽ đưa ra &yacute; kiến về việc tạo dựng "gi&aacute;c ngộ quần ch&uacute;ng" (critical mass) như l&agrave; một bước khởi đầu trong c&aacute;ch tiếp cận địa phương tự lực để tiến đến giải ph&aacute;p nhằm vượt qua c&aacute;c bất b&igrave;nh đẳng giới. &nbsp; Biography của TS. Nguyễn Đ&agrave;i Trang TS. Nguyễn Đ&agrave;i Trang tốt nghiệp chương tr&igrave;nh Cử nh&acirc;n Thương mại, chuy&ecirc;n ng&agrave;nh Kinh tế tại trường Đại học Concordia năm 1995, Thạc sĩ Kinh tế tại trường Đại học British Columbia (UBC) năm 1996, Tiến sĩ Li&ecirc;n ng&agrave;nh về Nghi&ecirc;n cứu &Aacute; Ch&acirc;u tại UBC năm 2004, v&agrave; nghi&ecirc;n cứu Sau Tiến sĩ tại Viện Nghi&ecirc;n cứu Ch&acirc;u &Aacute;, trường Đại học Toronto 2004-06. C&ocirc; đ&atilde; giảng dạy c&aacute;c lớp về Ch&iacute;nh trị học, Phụ nữ học, Ch&acirc;u &Aacute;-Th&aacute;i B&igrave;nh Dương học, v&agrave; Đ&ocirc;ng &Aacute; học tại trường Đại học Toronto, v&agrave; lớp về Kinh tế tại trường Cao đẳng&nbsp;Humber. Từ năm 1996 c&ocirc; tham gia nhiều dự &aacute;n ph&aacute;t triển do Canada t&agrave;i trợ, v&agrave; l&agrave;m tư vấn cho Li&ecirc;n Hiệp Quốc năm 1997. T&agrave;i liệu xuất bản của c&ocirc; bao gồm <em>T&igrave;m hiểu c&aacute;ch tiếp cận địa phương trong vấn đề phụ nữ ở Việt Nam</em>, Luận &aacute;n Tiến sĩ 2003; "C&aacute;c th&aacute;ch thức v&agrave; lựa chọn của phụ nữ v&agrave; trẻ em" trong <em>B&aacute;o c&aacute;o ph&aacute;t triển con người: Mở rộng c&aacute;c lựa chọn cho d&acirc;n ngh&egrave;o n&ocirc;ng th&ocirc;n</em>, Li&ecirc;n Hiệp Quốc H&agrave; Nội 1998; "Vấn đề giảm ngh&egrave;o v&agrave; b&igrave;nh đẳng giới của phụ nữ n&ocirc;ng th&ocirc;n Việt Nam" trong Hainsworth, G. (ed.), <em>Giảm ngh&egrave;o địa phương tại Việt Nam</em>, UBC 1998; v&agrave; "Quyền lợi của trẻ em ở Việt Nam hiện nay" trong Landsdowne, D. and Neilson (eds.), <em>C&aacute;c c&ocirc;ng đồng ở Đ&ocirc;ng Nam &Aacute;: Th&aacute;ch thức v&agrave; phản hồi</em>, Đại học Victoria 2002. L&agrave; người gốc Huế, hiện nay c&ocirc; sống tại Toronto.&nbsp; &nbsp; Danh s&aacute;ch kh&aacute;ch mời &nbsp;</p>\n<ol type="1">\n<li>C&ocirc; Th&aacute;i Thị Ngọc Dư </li>\n<li>C&ocirc; T&ocirc;n Nữ Thị Ninh </li>\n<li>C&ocirc; Nguyễn Thị Oanh </li>\n<li>C&ocirc; Ng&ocirc; Thị Phương Thiện, ĐHKHXHNV </li>\n<li>Tổng L&atilde;nh sự Canada &Ocirc;ng Bill Johnston </li>\n<li>Gi&aacute;m đốc Canadian Education Centre &Ocirc;ng Nguyễn Văn Quang </li>\n<li>Hiệu ph&oacute; ĐHKHXHNV C&ocirc; Trương Thị Kim Chuy&ecirc;n </li>\n<li>Trưởng Khoa XHH ĐHKHXHNV &Ocirc;ng Phạm Đức Trọng </li>\n<li>Trưởng Bộ m&ocirc;n CTXH ĐHKHXHNV &Ocirc;ng L&ecirc; Hải Thanh </li>\n<li>Gi&aacute;m đốc Trung t&acirc;m NCXH&amp;PT C&ocirc; Trần Thị Kim Xuyến </li>\n<li>Gi&aacute;m đốc TTNC Giới v&agrave; GĐ C&ocirc; Nguyễn Thị Ng&acirc;n Hoa </li>\n<li>C&ocirc; Phan Thị Gi&aacute;c T&acirc;m, ĐH Thủ Đức </li>\n<li>Một số đại diện của Hội phụ nữ </li>\n<li>Một số đại diện của b&aacute;o ch&iacute; địa phương nếu c&oacute; thể </li>\n</ol>\n<p>&nbsp; <strong><span style="text-decoration: underline;">Li&ecirc;n hệ:</span></strong> L&ecirc; Thị V&acirc;n Anh Ph&ograve;ng Hợp t&aacute;c Quốc tế v&agrave; Nghi&ecirc;n cứu Ph&aacute;t triển ĐT: (84.8) 39 255 063 ext 143 Email: <a href="mailto:ltvanh@hoasen.edu.vn"><strong><span style="color: #5380c0;">ltvanh@hoasen.edu.vn</span></strong></a></p>', '', '2009-02-04 10:54:39');
INSERT INTO `announcement` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(23, 'Thông báo tuyển sinh Đại học chính quy (Cao đẳng liên thông đại học)', '<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;">Nhằm đ&aacute;p ứng nhu cầu cho c&aacute;c sinh vi&ecirc;n đ&atilde; tốt nghiệp cao đẳng mong muốn học li&ecirc;n th&ocirc;ng l&ecirc;n đại học tham gia kỳ thi tuyển để học trong năm học 2008-2009 v&agrave; theo Quy định đ&agrave;o tạo li&ecirc;n th&ocirc;ng tr&igrave;nh độ cao đẳng, đại học ban h&agrave;nh theo Quyết định số 06/2008/QĐ-BGDĐT của Bộ GD-ĐT ng&agrave;y 13/02/2008, trường Đại học Hoa Sen th&ocirc;ng b&aacute;o tuyển sinh kh&oacute;a III năm học 2008-2009 chương tr&igrave;nh cao đẳng li&ecirc;n th&ocirc;ng l&ecirc;n đại học như sau...</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đối tượng tuyển sinh:</strong></p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-align: justify;">L&agrave; những người đ&atilde; c&oacute; bằng cao đẳng ch&iacute;nh quy c&ugrave;ng ng&agrave;nh đ&agrave;o tạo v&agrave; c&oacute; th&acirc;m ni&ecirc;n c&ocirc;ng t&aacute;c từ 1 năm trở l&ecirc;n t&iacute;nh đến ng&agrave;y dự thi. Ri&ecirc;ng ng&agrave;nh Quản trị kinh doanh c&oacute; tuyển đối tượng tốt nghiệp kh&aacute;c ng&agrave;nh đ&agrave;o tạo l&agrave; những người đ&atilde; c&oacute; bằng cao đẳng ch&iacute;nh quy ng&agrave;nh Quản trị văn ph&ograve;ng, Quản trị h&agrave;nh ch&aacute;nh nhưng sẽ phải học th&ecirc;m một khối lượng kiến thức bổ sung để c&oacute; đủ tr&igrave;nh độ đầu v&agrave;o trước khi thi tuyển sinh.</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-align: justify;">Sinh vi&ecirc;n tốt nghiệp loại kh&aacute;, giỏi được miễn quy định th&acirc;m ni&ecirc;n c&ocirc;ng t&aacute;c.</p>\n<p style="margin: 0in 0in 0pt; text-indent: 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chỉ ti&ecirc;u, ng&agrave;nh tuyển sinh v&agrave; h&igrave;nh thức đ&agrave;o tạo</strong></p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp; Chỉ ti&ecirc;u tuyển sinh: 240</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp; C&aacute;c ng&agrave;nh tuyển sinh:</p>\n<p style="margin: 6pt 0in 0pt 71.7pt; text-indent: -17.85pt; text-align: justify;">&sect;&nbsp; C&ocirc;ng nghệ th&ocirc;ng tin</p>\n<p style="margin: 0in 0in 0pt 1in; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Quản trị kinh doanh</p>\n<p style="margin: 0in 0in 0pt 1in; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Kế to&aacute;n</p>\n<p style="margin: 0in 0in 0pt 1in; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Tiếng Anh (chuy&ecirc;n ng&agrave;nh Tiếng Anh thương mại)</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp; H&igrave;nh thức đ&agrave;o tạo:</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-indent: 0.25in; text-align: justify;">Chương tr&igrave;nh đ&agrave;o tạo li&ecirc;n th&ocirc;ng từ cao đẳng l&ecirc;n đại học được tổ chức đ&agrave;o tạo theo học chế t&iacute;n chỉ như c&aacute;c chương tr&igrave;nh đ&agrave;o tạo đại học hiện h&agrave;nh của nh&agrave; trường. Chương tr&igrave;nh đ&agrave;o tạo k&eacute;o d&agrave;i trung b&igrave;nh trong 3 học kỳ ch&iacute;nh (1,5 năm) gồm cả thời gian thực tập tốt nghiệp hoặc kh&oacute;a luận tốt nghiệp (nếu c&oacute;).</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-indent: 0.25in; text-align: justify;">Sinh vi&ecirc;n c&oacute; thể đăng k&yacute; tham gia lớp học ban ng&agrave;y hoặc buổi tối v&agrave; thứ bảy, chủ nhật, r&uacute;t ngắn thời gian học hoặc k&eacute;o d&agrave;i thời gian học theo qui định về đ&agrave;o tạo t&iacute;n chỉ của nh&agrave; trường.</p>\n<p style="margin: 6pt 0in 0pt 0.25in; text-indent: 0.25in; text-align: justify;">Sinh vi&ecirc;n tốt nghiệp sẽ được cấp bằng đại học ch&iacute;nh quy đ&uacute;ng với ng&agrave;nh sinh vi&ecirc;n học.</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thi tuyển:</strong></p>\n<p style="margin: 3pt 0in 3pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tuyển sinh trong cả nước.</p>\n<p style="margin: 3pt 0in 3pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Điều kiện tuyển sinh: C&aacute;c th&iacute; sinh đủ điều kiện dự thi sẽ tham dự thi tuyển 2 m&ocirc;n:</p>\n<p style="margin: 3pt 0in 3pt 0.25in; text-align: justify;">&nbsp;</p>\n<p>\n<table style="margin: auto 6.75pt; width: 5.95in; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="0" width="571" align="left">\n<tbody>\n<tr style="height: 23.25pt;">\n<td style="padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; width: 149.4pt; padding-top: 0in; height: 23.25pt; background-color: transparent; border: windowtext 1pt solid;" rowspan="2" width="199">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">NG&Agrave;NH TUYỂN</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 279pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" colspan="2" width="372">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n thi ở tr&igrave;nh độ cao đẳng</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 2in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="192">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n cơ sở</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 135pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="180">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n chuy&ecirc;n ng&agrave;nh</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 149.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="199">\n<p style="margin: 0in 0in 0pt; text-align: justify;">C&ocirc;ng nghệ th&ocirc;ng tin</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 2in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="192">\n<p style="margin: 0in 0in 0pt 12.6pt; text-indent: -12.6pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kỹ thuật lập tr&igrave;nh/Cấu tr&uacute;c dữ liệu v&agrave; giải thuật</p>\n<p style="margin: 0in 0in 0pt 12.6pt; text-indent: -12.6pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cơ sở dữ liệu</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 135pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="180">\n<p style="margin: 0in 0in 0pt 12.6pt; text-indent: -12.6pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hệ thống th&ocirc;ng tin</p>\n<p style="margin: 0in 0in 0pt 12.6pt; text-indent: -12.6pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c nguy&ecirc;n l&yacute; ph&acirc;n t&iacute;ch thiết kế</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 149.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="199">\n<p style="margin: 0in 0in 0pt; text-align: justify;">Quản trị kinh doanh</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 2in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="192">\n<p style="margin: 0in 0in 0pt 12.6pt; text-indent: -12.6pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quản trị học</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 135pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="180">\n<p style="margin: 0in 0in 0pt 12.6pt; text-indent: -12.6pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kỹ năng kinh doanh</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 149.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="199">\n<p style="margin: 0in 0in 0pt; text-align: justify;">Kế to&aacute;n</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 2in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="192">\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nguy&ecirc;n l&yacute; kế to&aacute;n</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 135pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="180">\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kế to&aacute;n t&agrave;i ch&iacute;nh</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 149.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="199">\n<p style="margin: 0in 0in 0pt; text-align: justify;">Tiếng Anh (chuy&ecirc;n ng&agrave;nh Tiếng Anh thương mại)</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 2in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="192">\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anh văn văn thư</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 135pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="180">\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anh văn kinh doanh</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 33.1pt; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;Thời lượng, h&igrave;nh thức thi</p>\n<p style="margin: 6pt 0in 6pt 0.75in; text-indent: -0.25in; text-align: justify;">&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ng&agrave;nh C&ocirc;ng nghệ th&ocirc;ng tin</p>\n<p>\n<table style="margin: auto 6.75pt; width: 347.4pt; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="0" width="463" align="left">\n<tbody>\n<tr style="height: 23.25pt;">\n<td style="padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; width: 99.95pt; padding-top: 0in; height: 23.25pt; background-color: transparent; border: windowtext 1pt solid;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt; text-align: center;" align="center">Thời lượng</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">H&igrave;nh thức thi</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt 0in;">Cơ sở</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">120 ph&uacute;t</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Trắc nghiệm v&agrave; tự luận</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt 0in;">Chuy&ecirc;n ng&agrave;nh</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">120 ph&uacute;t</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Trắc nghiệm v&agrave; tự luận</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="margin: 6pt 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt 15.1pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 3pt 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 6pt 0.75in; text-indent: -0.25in; text-align: justify;">&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ng&agrave;nh Quản trị kinh doanh v&agrave; ng&agrave;nh Kế to&aacute;n</p>\n<p>\n<table style="margin: auto 6.75pt; width: 347.4pt; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="0" width="463" align="left">\n<tbody>\n<tr style="height: 23.25pt;">\n<td style="padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; width: 99.95pt; padding-top: 0in; height: 23.25pt; background-color: transparent; border: windowtext 1pt solid;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt; text-align: center;" align="center">Thời lượng</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">H&igrave;nh thức thi</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt 0in;">Cơ sở</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">90 ph&uacute;t</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Trắc nghiệm v&agrave; tự luận</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt 0in;">Chuy&ecirc;n ng&agrave;nh</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">120 ph&uacute;t</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Trắc nghiệm v&agrave; tự luận</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="margin: 12pt 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 6pt 0.75in; text-indent: -0.25in; text-align: justify;">&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ng&agrave;nh Tiếng Anh (chuy&ecirc;n ng&agrave;nh Tiếng Anh thương mại)</p>\n<p>\n<table style="margin: auto 6.75pt; width: 347.4pt; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="0" width="463" align="left">\n<tbody>\n<tr style="height: 23.25pt;">\n<td style="padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; width: 99.95pt; padding-top: 0in; height: 23.25pt; background-color: transparent; border: windowtext 1pt solid;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt; text-align: center;" align="center">Thời lượng</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">H&igrave;nh thức thi</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt 0in;">Cơ sở</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">90 ph&uacute;t</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Viết</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in -5.4pt 0pt 0in;">Chuy&ecirc;n ng&agrave;nh</p>\n<p style="margin: 0in -5.4pt 0pt 0in;">(hệ số 2)</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 99.95pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="133">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">120 ph&uacute;t</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 147.5pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="197">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Nghe v&agrave; viết</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="margin: 0in 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 6pt 0.5in; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 0pt 32.9pt; text-indent: -17.85pt; text-align: justify;">-&nbsp;&nbsp;Thi tuyển: Thứ bảy, ng&agrave;y 21/02/200&shy;9</p>\n<p style="margin: 0in 0in 0pt 1.25in; text-align: justify;">(Buổi s&aacute;ng thi m&ocirc;n cơ sở, buổi chiều thi m&ocirc;n chuy&ecirc;n ng&agrave;nh)</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nộp hồ sơ đăng k&yacute; dự thi:</strong></p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phương thức nộp hồ sơ ĐKDT: th&iacute; sinh đến đăng k&lrm;&yacute; trực tiếp tại trường để được tư vấn, giải đ&aacute;p c&aacute;c thắc mắc chi tiết.</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hồ sơ ĐKDT&nbsp;: th&iacute; sinh chuẩn bị v&agrave; nộp hồ sơ đăng k&lrm;&lrm;&yacute; dự thi gồm:</p>\n<p style="margin: 0in 0in 0pt 63pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Phiếu đăng k&lrm;&lrm;&yacute; dự thi (theo mẫu)</p>\n<p style="margin: 0in 0in 0pt 63pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Bản sao văn bằng tốt nghiệp cao đẳng (*)</p>\n<p style="margin: 0in 0in 0pt 63pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Bản sao kết quả học tập c&oacute; ghi r&otilde; t&ecirc;n m&ocirc;n học, số tiết, điểm thi từng m&ocirc;n của chương tr&igrave;nh cao đẳng v&agrave; c&aacute;c chương tr&igrave;nh kh&aacute;c (để x&eacute;t miễn giảm m&ocirc;n học, nếu c&oacute;) (*)</p>\n<p style="margin: 0in 0in 0pt 63pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Bản sao giấy khai sinh (*)</p>\n<p style="margin: 0in 0in 0pt 63pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Giấy chứng nhận th&acirc;m ni&ecirc;n c&ocirc;ng t&aacute;c (theo mẫu)</p>\n<p style="margin: 0in 0in 0pt 63pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; 4 ảnh 3x4 (ghi họ t&ecirc;n, ng&agrave;y sinh v&agrave;o sau ảnh, để trong 1 phong b&igrave;)</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 45pt; text-align: justify;">(*) Bản sao văn bằng, kết quả học tập, giấy khai sinh phải c&oacute; sao y của nơi cấp; hoặc c&ocirc;ng chứng của Ph&ograve;ng c&ocirc;ng chứng; hoặc chứng thực của UBND quận, huyện.</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lệ ph&iacute; dự thi&nbsp;: 180.000 đồng/th&iacute; sinh</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thời gian nộp hồ sơ ĐKDT: &nbsp;từ ng&agrave;y 03/11/2008 đến ng&agrave;y 12/01/2009.</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Địa điểm tư vấn, ph&aacute;t h&agrave;nh v&agrave; nộp hồ sơ&nbsp;trực tiếp:&nbsp;th&iacute; sinh đến li&ecirc;n lạc tại ph&ograve;ng Tuyển Sinh, Trường Đại học Hoa Sen - 8 Nguyễn Văn Tr&aacute;ng, Q.1, TP HCM - Điện thoại&nbsp;: (08) 8301.877 (số nội bộ 131 hoặc 154).</p>\n<p style="margin: 12pt 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tổ chức &ocirc;n tập</strong></p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-align: justify;">Trường tổ chức lớp &ocirc;n tập cho th&iacute; sinh c&oacute; nhu cầu trong thời gian 4 tuần. Thời gian học &ocirc;n tập: c&aacute;c buổi tối v&agrave; thứ bảy, chủ nhật.</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nhận đăng k&yacute; &ocirc;n tập: từ ng&agrave;y 03/11/2008 đến ng&agrave;y 20/12/2008</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Th&ocirc;ng b&aacute;o thời kh&oacute;a biểu &ocirc;n tập:&nbsp; ng&agrave;y 26/12/2008</p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khai giảng c&aacute;c lớp &ocirc;n tập: từ ng&agrave;y 05/01/2009 đến ng&agrave;y 14/02/2009</p>\n<p style="margin: 6pt 0in 6pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lệ ph&iacute; &ocirc;n tập:</p>\n<p>\n<table style="margin: auto 6.75pt; width: 424pt; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="0" width="565" align="left">\n<tbody>\n<tr style="height: 23.25pt;">\n<td style="padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; width: 203.4pt; padding-top: 0in; height: 23.25pt; background-color: transparent; border: windowtext 1pt solid;" width="271">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">Ng&agrave;nh</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 1.5in; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="144">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">M&ocirc;n cơ sở</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; border-top: windowtext 1pt solid; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 112.6pt; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="150" valign="top">\n<p style="margin: 6pt 0in 0pt; text-align: center;" align="center">M&ocirc;n chuy&ecirc;n ng&agrave;nh</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 203.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="271">\n<p style="margin: 0in 0in 0pt; text-align: justify;">C&ocirc;ng nghệ th&ocirc;ng tin</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 1.5in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="144">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">648.000 đ / 36 tiết</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 112.6pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="150" valign="top">\n<p style="margin: 6pt 0in 0pt; text-align: center;" align="center">648.000 đ / 36 tiết</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 203.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="271">\n<p style="margin: 0in 0in 0pt; text-align: justify;">Quản trị kinh doanh</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 1.5in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="144">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">648.000 đ / 36 tiết</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 112.6pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="150" valign="top">\n<p style="margin: 6pt 0in 0pt; text-align: center;" align="center">648.000 đ / 36 tiết</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 203.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="271">\n<p style="margin: 0in 0in 0pt; text-align: justify;">Kế to&aacute;n</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 1.5in; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="144">\n<p style="margin: 0in 0in 0pt; text-align: center;" align="center">432.000 đ / 24 tiết</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 112.6pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="150" valign="top">\n<p style="margin: 6pt 0in 0pt; text-align: center;" align="center">832.000 đ / 48 tiết</p>\n</td>\n</tr>\n<tr style="height: 23.25pt;">\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; padding-bottom: 0in; border-left: windowtext 1pt solid; width: 203.4pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" width="271">\n<p style="margin: 0in 0in 0pt; text-align: justify;">Tiếng Anh</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">(chuy&ecirc;n ng&agrave;nh tiếng Anh thương mại)</p>\n</td>\n<td style="border-right: windowtext 1pt solid; padding-right: 5.4pt; padding-left: 5.4pt; border-left-color: #ece9d8; padding-bottom: 0in; width: 220.6pt; border-top-color: #ece9d8; padding-top: 0in; border-bottom: windowtext 1pt solid; height: 23.25pt; background-color: transparent;" colspan="2" width="294">\n<p style="margin: 6pt 0in 0pt; text-align: center;" align="center">648.000 đ / 36 tiết</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="margin: 6pt 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 6pt 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 6pt 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 6pt 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 0pt 0.25in; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 0pt 0.25in; text-align: justify;">&nbsp;</p>\n<p style="margin: 12pt 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Kiến thức bổ sung trước khi thi tuyển</strong></p>\n<p style="margin: 0in 0in 0pt 0.5in; text-align: justify;">(d&agrave;nh cho th&iacute; sinh tốt nghiệp ng&agrave;nh Quản trị văn ph&ograve;ng, Quản trị h&agrave;nh ch&aacute;nh muốn học li&ecirc;n th&ocirc;ng l&ecirc;n đại học ng&agrave;nh Quản trị kinh doanh)</p>\n<p style="margin: 6pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chương tr&igrave;nh học: th&iacute; sinh xem danh s&aacute;ch c&aacute;c m&ocirc;n học đ&iacute;nh k&egrave;m.</p>\n<p style="margin: 6pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thời hạn đăng k&yacute;: từ ng&agrave;y 03/11/2008 đến ng&agrave;y 16/3/2009</p>\n<p style="margin: 6pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bắt đầu học: ng&agrave;y 30/3/2009 (lịch học c&ocirc;ng bố v&agrave;o ng&agrave;y 25/03/2009) để th&iacute; sinh ho&agrave;n tất chương tr&igrave;nh kiến thức bổ sung trước kỳ thi tuyển th&aacute;ng 8/2009.</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kết quả thi - Nhập học - Thi xếp lớp tiếng Anh</strong></p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -17.85pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X&eacute;t điểm tr&uacute;ng tuyển: Hội đồng tuyển sinh của trường căn cứ v&agrave;o điểm thi tuyển của m&ocirc;n cơ sở v&agrave; m&ocirc;n chuy&ecirc;n ng&agrave;nh (kh&ocirc;ng c&oacute; m&ocirc;n n&agrave;o bị điểm 0, x&eacute;t tổng điểm) để quyết định điểm tr&uacute;ng tuyển của mỗi ng&agrave;nh v&agrave; l&ecirc;n danh s&aacute;ch th&iacute; sinh tr&uacute;ng tuyển theo ưu ti&ecirc;n điểm từ tr&ecirc;n xuống đến mức đảm bảo chất lượng đ&agrave;o tạo của từng ng&agrave;nh được ph&eacute;p tuyển sinh li&ecirc;n th&ocirc;ng (c&oacute; quyền quyết định lấy chỉ ti&ecirc;u mỗi ng&agrave;nh &iacute;t hơn so với chỉ ti&ecirc;u đ&atilde; c&ocirc;ng bố cho th&iacute; sinh).</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xem kết quả thi tuyển&nbsp;: ng&agrave;y 03/3/2009 (tại địa điểm nộp hồ sơ v&agrave; tr&ecirc;n trang web của trường <a href="http://www.hoasen.edu.vn/"><strong><span style="color: #5380c0;">www.hoasen.edu.vn</span></strong></a>)</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nhận Giấy b&aacute;o nhập học: từ ng&agrave;y 03/3/2009 đến ng&agrave;y 07/3/2009 (Th&iacute; sinh đến ph&ograve;ng Tuyển Sinh của trường để nhận trực tiếp, trường kh&ocirc;ng gởi giấy b&aacute;o về nh&agrave;)</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đăng k&yacute; thi xếp lớp tiếng Anh (d&agrave;nh cho sinh vi&ecirc;n kh&ocirc;ng chuy&ecirc;n ng&agrave;nh tiếng Anh): từ ng&agrave;y 03/3/2009 đến ng&agrave;y 14/3/2009. &nbsp;Ng&agrave;y&nbsp; thi xếp lớp tiếng Anh 16/3/2009. Kết quả thi sếp lớp sẽ&nbsp;được c&ocirc;ng bố ng&agrave;y 27/03/2009.&nbsp;Sinh vi&ecirc;n dự thi xếp lớp kh&ocirc;ng đạt y&ecirc;u cầu học Anh văn của chương tr&igrave;nh đ&agrave;o tạo (cấp độ 5) hoặc chưa được thi xếp lớp (do kh&ocirc;ng đăng k&yacute; theo mốc thời gian quy định) sẽ chưa được học Anh văn trong học kỳ đầu v&agrave; phải tự học, đồng thời theo d&otilde;i lịch thi xếp lớp tiếp theo của trường. Sinh vi&ecirc;n cũng c&oacute; thể đăng k&yacute; học ở cấp độ tương ứng (dưới cấp độ 5) tại Trung t&acirc;m ngoại ngữ của trường.</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nộp hồ sơ nhập học : từ ng&agrave;y 03/3/2009 đến ng&agrave;y 14/3/2009.</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hồ sơ nhập học gồm&nbsp;:</p>\n<p style="margin: 3pt 0in 0pt 53.85pt; text-indent: -17.85pt; text-align: justify;">&sect;&nbsp; Hồ sơ sinh vi&ecirc;n (theo mẫu)</p>\n<p style="margin: 0in 0in 0pt 54.1pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Giấy b&aacute;o nhập học (bản ch&iacute;nh)</p>\n<p style="margin: 0in 0in 0pt 54.1pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; 4 ảnh 3x4 (ghi họ t&ecirc;n, ng&agrave;y sinh v&agrave;o sau ảnh, để trong 1 phong b&igrave;)</p>\n<p style="margin: 0in 0in 0pt 54.1pt; text-indent: -0.25in; text-align: justify;">&sect;&nbsp; Học ph&iacute;&nbsp;: theo mức học ph&iacute; của trường quy định cho từng ng&agrave;nh v&agrave; t&ugrave;y theo số t&iacute;n chỉ sinh vi&ecirc;n đăng k&yacute; học của mỗi học kỳ.</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xem lịch sinh hoạt đầu kh&oacute;a: ng&agrave;y 20/3/2009. Sinh hoạt đầu kh&oacute;a v&agrave;o ng&agrave;y 25/3/2009.</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp; Xem thời kh&oacute;a biểu: ng&agrave;y 26/03/2009-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nhập học: ng&agrave;y 30/3/2009</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt 0.25in; text-indent: -0.25in; text-align: justify;"><strong>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; X&eacute;t học bổ sung kiến thức, miễn/giảm m&ocirc;n học</strong></p>\n<p style="margin: 6pt 0in 0pt 0.5in; text-indent: -17.85pt; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X&eacute;t học bổ sung kiến thức: Sau khi c&oacute; danh s&aacute;ch th&iacute; sinh tr&uacute;ng truyển, trường sẽ tiến h&agrave;nh x&eacute;t học bổ sung kiến thức cho c&aacute;c ng&agrave;nh v&agrave; th&ocirc;ng tin x&eacute;t, học bổ sung như sau:.</p>\n<ul>\n<li>X&eacute;t tr&ecirc;n bảng điểm học tập bậc cao đẳng của sinh vi&ecirc;n khi nộp hồ sơ đăng k&yacute; thi tuyển. </li>\n<li style="margin: 6pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">Sinh vi&ecirc;n học bổ sung kiến thức trong thời gian học chương tr&igrave;nh li&ecirc;n th&ocirc;ng với số m&ocirc;n tối đa l&agrave; 3 (tối đa 9 t&iacute;n chỉ). Ri&ecirc;ng ng&agrave;nh Tiếng Anh số m&ocirc;n tối đa l&agrave; 4 (tối đa 12 t&iacute;n chỉ). </li>\n</ul>\n<p style="margin: 6pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">Danh s&aacute;ch c&aacute;c m&ocirc;n học v&agrave; sinh vi&ecirc;n học bổ sung kiến thức sẽ được th&ocirc;ng b&aacute;o v&agrave;o ng&agrave;y 12/3/2009.</p>\n<p style="margin: 4pt 0in 0pt 0.5in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X&eacute;t miễn/giảm m&ocirc;n học (x&eacute;t cho c&aacute;c m&ocirc;n trong to&agrave;n chương tr&igrave;nh học): &nbsp;</p>\n<p style="margin: 4pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">Hồ sơ xin x&eacute;t miễn/giảm m&ocirc;n học gồm:</p>\n<p style="margin: 4pt 0in 0pt 1in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đơn xin miễn/giảm m&ocirc;n học (theo mẫu của trường)</p>\n<p style="margin: 4pt 0in 0pt 1in; text-indent: -0.25in; text-align: justify;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đề cương m&ocirc;n học của m&ocirc;n xin miễn/giảm. Trong trường hợp kh&ocirc;ng c&oacute; đề cương, sinh vi&ecirc;n c&oacute; thể nộp nội dung m&ocirc;n học v&agrave; t&ecirc;n c&aacute;c t&agrave;i liệu, mục lục đ&atilde; học.</p>\n<p style="margin: 4pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">Nộp đơn trực tiếp tại ph&ograve;ng Tuyển sinh từ ng&agrave;y 03/3/2009 đến ng&agrave;y 07/3/2009.</p>\n<p style="margin: 4pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">Xem kết quả x&eacute;t miễn/giảm v&agrave;o ng&agrave;y 14/3/2009</p>\n<p style="margin: 4pt 0in 0pt 0.75in; text-indent: -0.25in; text-align: justify;">Mọi th&ocirc;ng tin chi tiết, vui l&ograve;ng li&ecirc;n lạc Ph&ograve;ng Tuyển Sinh, Trường Đại học Hoa Sen - 8 Nguyễn Văn Tr&aacute;ng, Q.1, TP HCM - Điện thoại&nbsp;: (08) 38.301.877 (số nội bộ 131).</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HIỆU TRƯỞNG</p>\n<p style="margin: 0in 0in 0pt; text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TS. B&ugrave;i Tr&acirc;n Phượng</p>', '', '2009-02-04 10:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` bigint(20) NOT NULL auto_increment,
  `image01` varchar(200) NOT NULL,
  `image02` varchar(200) NOT NULL,
  `visible` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image01`, `image02`, `visible`) VALUES
(5, 'right03.png', 'right031.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `mobilephone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `registerdate` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `telephone`, `mobilephone`, `email`, `description`, `registerdate`) VALUES
(1, 'ergy5trh', 'trhuty', 'tyj', 'ytjkyu', 'phamngocanthi@yahoo.com', 'k', '2009-01-09'),
(2, 'hoai', 'hoa', '3424', '234', 'hoaipv@gmail.com', 'asdas', '2009-02-08'),
(3, 'hoai', 'hoa', '3424', '234', 'hoaipv@gmail.com', 'asdas', '2009-02-08'),
(4, 'hoai', 'hoa', '3424', '234', 'hoaipv@gmail.com', 'asdas', '2009-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE IF NOT EXISTS `diploma` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`id`, `name`) VALUES
(1, 'Tiến Sĩ'),
(2, 'Thạc Sĩ'),
(3, 'Cử Nhân, Kỹ sư Đại Học'),
(4, 'Cử Nhân Cao Đẳng'),
(5, 'Trung Cấp'),
(6, 'Trung Học Chuyên Nghiệp');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_provinces` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=320 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `id_provinces`, `name`) VALUES
(1, 1, 'Quận 1'),
(2, 1, 'Quận 2'),
(3, 1, 'Quận 3'),
(4, 1, 'Quận 4'),
(5, 1, 'Quận 5'),
(6, 1, 'Quận 6'),
(7, 1, 'Quận 7'),
(8, 1, 'Quận 8'),
(9, 1, 'Quận 9'),
(10, 1, 'Quận 10'),
(11, 1, 'Quận 11'),
(12, 1, 'Quận 12'),
(13, 1, 'Bình Thạnh'),
(14, 1, 'Bình Tân'),
(15, 1, 'Bình Chánh'),
(16, 1, 'Củ Chi'),
(17, 1, 'Cần Giờ'),
(18, 1, 'Hóc Môn'),
(19, 1, 'Nhà Bè'),
(20, 1, 'Phú Nhuận'),
(21, 1, 'Tân Bình'),
(22, 1, 'Tân Phú'),
(23, 1, 'Thủ Đức'),
(24, 1, 'Gò Vấp'),
(25, 2, 'An Phú'),
(26, 2, 'Châu Phú'),
(27, 2, 'Châu Thành'),
(28, 2, 'Chợ Mới'),
(29, 2, 'Phú Tân'),
(30, 2, 'Tân Châu'),
(31, 2, 'Thoại Sơn'),
(32, 2, 'Tịnh Biên'),
(33, 2, 'Tri Tôn'),
(34, 2, 'Châu Đốc'),
(35, 2, 'Long Xuyên'),
(36, 3, 'Hiệp Hòa'),
(37, 3, 'Lạng Giang'),
(38, 3, 'Lục Nam'),
(39, 3, 'Lục Ngạn'),
(40, 3, 'Sơn Động'),
(41, 3, 'Tân Yên'),
(42, 3, 'TP Bắc Giang'),
(43, 3, 'Việt Yên'),
(44, 3, 'Yên Dũng'),
(45, 3, 'Yên Thế'),
(46, 4, 'Châu Đức'),
(47, 3, 'Côn Đảo'),
(48, 4, 'Đất Võ'),
(49, 4, 'Long Biên'),
(50, 4, 'Tân Thành'),
(51, 4, 'TP Vũng Tàu'),
(52, 4, 'TX Bà Rịa'),
(53, 4, 'Xuân Lộc'),
(54, 5, 'Ba Bể'),
(55, 5, 'Bắc Kạn'),
(56, 5, 'Bạch Thông'),
(57, 5, 'Chợ Đồn'),
(58, 5, 'Chợ Mới'),
(59, 5, 'Na Rì'),
(60, 5, 'Ngân Sơn'),
(61, 6, 'Bạc Liêu'),
(62, 6, 'Gía Rai'),
(63, 6, 'Hồng Dân'),
(64, 6, 'Vĩnh Lợi'),
(65, 8, 'Ba Tri'),
(66, 8, 'Bến Tre'),
(67, 8, 'Bình Đại'),
(68, 8, 'Châu Thành'),
(69, 8, 'Chợ Lách'),
(70, 8, 'Giồng Trôm'),
(71, 8, 'Mỏ Cày'),
(72, 8, 'Thạnh Phú'),
(73, 9, 'TP Quy Nhơn'),
(74, 9, 'Tuy Phước'),
(75, 9, 'Phù Cát'),
(76, 9, 'Phù Mỹ'),
(77, 9, 'Tam Quan'),
(78, 9, 'An Lão'),
(79, 9, 'An Nhơn'),
(80, 9, 'Hoài Ân'),
(81, 9, 'Hoài Nhơn'),
(82, 9, 'Vân Canh'),
(83, 9, 'Vĩnh Thạnh'),
(84, 9, 'Tây Sơn'),
(85, 10, 'Dĩ An'),
(86, 10, 'Thủ Dầu Một'),
(87, 10, 'Bến Cát'),
(88, 10, 'Dầu Tiến'),
(89, 10, 'Tân Uyên'),
(90, 10, 'Lái Thiêu'),
(91, 10, 'Thuận An'),
(92, 11, 'Bình Long'),
(93, 11, 'Phước Long'),
(94, 12, 'Hàm Tân'),
(95, 12, 'TP Phan Thiết'),
(96, 12, 'Hàm Thuận Nam'),
(97, 12, 'Di Linh'),
(98, 12, 'Hàm Thuận Bắc'),
(99, 12, 'Tánh Linh'),
(100, 12, 'Phú Qúy'),
(101, 12, 'Bắc Bình'),
(102, 12, 'Tuy Phong'),
(103, 13, 'Cà Mau'),
(104, 13, 'Cái Nước'),
(105, 13, 'Đầm Dơi'),
(106, 13, 'Ngọc Hiển'),
(107, 13, 'Trần Văn Thời'),
(108, 13, 'U Minh'),
(109, 14, 'Cần Thơ'),
(110, 14, 'Châu Thành'),
(111, 14, 'Long Mỹ'),
(112, 14, 'Ô Môn'),
(113, 14, 'Phụng Hiệp'),
(114, 14, 'Thốt Nốt'),
(115, 14, 'Vị Thanh'),
(116, 14, 'Vị Thủy'),
(117, 14, 'Ninh Kiều'),
(118, 14, 'Cái Răng'),
(119, 16, 'Cẩm Lệ'),
(120, 16, 'Hải Châu'),
(121, 16, 'Hòa Vang'),
(122, 16, 'Hoàng Sa'),
(123, 16, 'Liên Chiểu'),
(124, 16, 'Ngũ Hành Sơn'),
(125, 16, 'Sơn Trà'),
(126, 16, 'Thanh Khê'),
(127, 17, 'Buôn Mê Thuột'),
(128, 17, 'Cư Mga'),
(129, 17, 'Thị Xã Quảng Phú'),
(130, 18, 'TP Biên Hòa'),
(131, 18, 'TX Long Khánh'),
(132, 18, 'Trảng Bom'),
(133, 18, 'Xuân Lộc'),
(134, 18, 'Định Quán'),
(135, 18, 'Long Thành'),
(136, 18, 'Nhơn Trạch'),
(137, 18, 'Long Phú'),
(138, 18, 'Thống Nhất'),
(139, 18, 'Vĩnh Cừu'),
(140, 19, 'Cao Lãnh'),
(141, 19, 'Lai Vung'),
(142, 19, 'Châu Thành'),
(143, 19, 'Hồng Ngự'),
(144, 19, 'Lấp Vò'),
(145, 19, 'Tam Nông'),
(146, 19, 'Tháp Mười'),
(147, 19, 'Sa Đéc'),
(148, 19, 'Tân Hồng'),
(149, 19, 'Thanh Bình'),
(150, 22, 'Kim Bảng'),
(151, 23, 'Từ Liêm'),
(152, 23, 'Đống Đa'),
(153, 23, 'Cầu giấy'),
(154, 23, 'Ba Đình'),
(155, 23, 'Thanh Trì'),
(156, 23, 'Sóc Sơn'),
(157, 23, 'Gia Lâm'),
(158, 23, 'Đông Anh'),
(159, 23, 'Long Biên'),
(160, 23, 'Hoàng Mai'),
(161, 23, 'Tây Hồ'),
(162, 23, 'Thanh Xuân'),
(163, 23, 'Ha Bà Trưng'),
(164, 23, 'Hoàn Kiếm'),
(165, 23, 'Vân Điền'),
(166, 25, 'Can Lộc'),
(167, 25, 'Cẩm Xuyên'),
(168, 25, 'Đức Thọ'),
(169, 25, 'Hà Tĩnh'),
(170, 25, 'Hồng Lĩnh'),
(171, 25, 'Hương Khê'),
(172, 25, 'Hương Sơn'),
(173, 25, 'Kỳ Anh'),
(174, 25, 'Nghi Xuân'),
(175, 25, 'Thạch Hòa'),
(176, 27, 'Phụng Hiệp'),
(177, 27, 'Long Mỹ'),
(178, 27, 'TX Tân Hiệp'),
(179, 27, 'TX Vị Thanh'),
(180, 28, 'Yên Thủy'),
(181, 30, 'Diên Khánh'),
(182, 30, 'Khánh Sơn'),
(183, 30, 'Khánh Vĩnh'),
(184, 30, 'Ninh Hòa'),
(185, 30, 'Nha Trang'),
(186, 30, 'Trường Sa'),
(187, 30, 'TX Cam Ranh'),
(188, 30, 'Vạn Ninh'),
(189, 31, 'An Biên'),
(190, 31, 'An Minh'),
(191, 31, 'Châu Thành'),
(192, 31, 'Gồng Giềng'),
(193, 31, 'Hà Tiên'),
(194, 31, 'Gò Quao'),
(195, 31, 'Hòn Đất'),
(196, 31, 'Kiên Hải'),
(197, 31, 'Phú Quốc'),
(198, 31, 'Rạch GIá'),
(199, 31, 'Vĩnh Thuận'),
(200, 31, 'Tân Hiệp'),
(201, 33, 'Đức Trọng'),
(202, 33, 'Bảo Lộc'),
(203, 33, 'Đà Lạt'),
(204, 33, 'Bảo Lâm'),
(205, 33, 'Cát Tiên'),
(206, 33, 'Đơn Dương'),
(207, 33, 'Lạc Dương'),
(208, 33, 'Lâm Hà'),
(209, 33, 'Di Linh'),
(210, 33, 'Đạ Tẻh'),
(211, 33, 'Đạ Huoai'),
(212, 36, 'Châu Thành'),
(213, 38, 'Yên Thành'),
(214, 38, 'Anh Sơn'),
(215, 38, 'Con Luông'),
(216, 38, 'Cửa Lò'),
(217, 38, 'Diễn Châu'),
(218, 38, 'Đô Lương'),
(219, 38, 'Hưng Nguyên'),
(220, 38, 'Kỳ Sơn'),
(221, 38, 'Nam Đàn'),
(222, 38, 'Nghi Lộc'),
(223, 38, 'Nghĩa Đàn'),
(224, 38, 'Quế Phong'),
(225, 38, 'Qùy Châu'),
(226, 38, 'Qùy Hợp'),
(227, 38, 'Quỳnh Lưu'),
(228, 38, 'Thanh Chương'),
(229, 38, 'Tương Dương'),
(230, 38, 'Vinh'),
(231, 40, 'Ninh Hải'),
(232, 40, 'Phan Rang-Tháp Chàm'),
(233, 40, 'Ninh Phước'),
(234, 40, 'Ninh Sơn'),
(235, 41, 'Đoan Hùng'),
(236, 41, 'Hạ Hòa'),
(237, 41, 'Lâm Thao'),
(238, 41, 'Phù Ninh'),
(239, 41, 'Phú Thọ'),
(240, 41, 'Sông Thao'),
(241, 41, 'Tam Nông'),
(242, 41, 'Thanh Ba'),
(243, 41, 'Thanh Sơn'),
(244, 41, 'Thanh Thủy'),
(245, 41, 'Việt Trì'),
(246, 41, 'Yên Lập'),
(247, 42, 'Tuy An'),
(248, 42, 'Tuy Hòa'),
(249, 42, 'Đồng Xuân'),
(250, 42, 'Sơn Hà'),
(251, 42, 'Sông Cầu'),
(252, 42, 'Sông Hinh'),
(253, 44, 'Duy Xuyên'),
(254, 45, 'Tư Nghĩa'),
(255, 45, 'Nghĩa Hành'),
(256, 45, 'Sơn Tịnh'),
(257, 45, 'Bình Sơn'),
(258, 45, 'Mộ Đức'),
(259, 45, 'Đức Phổ'),
(260, 45, 'Minh Long'),
(261, 45, 'Sơn Hà'),
(262, 45, 'Sơn Tây'),
(263, 45, 'Tây Trà'),
(264, 45, 'Tp Quãng Ngãi'),
(265, 45, 'Ba Tơ'),
(266, 45, 'Trà Bồng'),
(267, 46, 'Hoành Bồ'),
(268, 48, 'Vĩnh Châu'),
(269, 50, 'TX Tây Ninh'),
(270, 50, 'Trảng Bàng'),
(271, 50, 'Mộc Bài'),
(272, 50, 'Tân Châu'),
(273, 50, 'Tân Biên'),
(274, 50, 'Bến Cầu'),
(275, 50, 'Châu Thành'),
(276, 50, 'Dương Minh Châu'),
(277, 50, 'Gò Dầu'),
(278, 50, 'Hoài Thành'),
(279, 54, 'A Lưới'),
(280, 54, 'Huế'),
(281, 54, 'Hương Thủy'),
(282, 54, 'Hương Trà'),
(283, 54, 'Nam Đông'),
(284, 54, 'Phong Điền'),
(285, 54, 'Phú Lộc'),
(286, 54, 'Phú Vang'),
(287, 54, 'Quảng Điền'),
(288, 55, 'Gò Công Đông'),
(289, 55, 'Châu Thành'),
(290, 55, 'Gò Công Tây'),
(291, 55, 'Cái Bè'),
(292, 55, 'Cai Lậy'),
(293, 55, 'Mỹ Tho'),
(294, 55, 'Tân Phước'),
(295, 55, 'Gò Công'),
(296, 55, 'Chọ Gạo'),
(297, 57, 'Càng Long'),
(298, 57, 'Cầu Kè'),
(299, 57, 'Cầu Ngang'),
(300, 57, 'Châu Thành'),
(301, 57, 'Duyên Hải'),
(302, 57, 'Tiểu Cần'),
(303, 57, 'Trà Cú'),
(304, 57, 'Trà Dinh'),
(305, 59, 'Bình Minh'),
(306, 59, 'Long Hồ'),
(307, 59, 'Mang Thít'),
(308, 59, 'Tam Bình'),
(309, 59, 'Trà Ôn'),
(310, 59, 'Vĩnh Long'),
(311, 59, 'Vũng Liêm'),
(312, 61, 'Mục Liên'),
(313, 61, 'Mù Căng Chải'),
(314, 61, 'Trạm Tấu'),
(315, 61, 'Trấn Yên'),
(316, 61, 'Yên Bái'),
(317, 61, 'Yên Bình'),
(318, 61, 'Văn Chấn'),
(319, 61, 'Văn Yên');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tnpt`
--

CREATE TABLE IF NOT EXISTS `exam_question_tnpt` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exam_question_tnpt`
--

INSERT INTO `exam_question_tnpt` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(2, 'đáp án,đề thi', '<p><strong><span style="color: #040462;">đ&aacute;p &aacute;n,đề thi</span></strong></p>', '', '2009-02-08 10:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tsdh`
--

CREATE TABLE IF NOT EXISTS `exam_question_tsdh` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exam_question_tsdh`
--

INSERT INTO `exam_question_tsdh` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(2, 'đáp án,đề thi', '<p><strong><span style="color: #040462;">đ&aacute;p &aacute;n,đề thi</span></strong></p>', '', '2009-02-08 10:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `find_teacher`
--

CREATE TABLE IF NOT EXISTS `find_teacher` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_provinces` bigint(20) NOT NULL,
  `id_districts` bigint(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `mobilephone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `id_level` bigint(20) NOT NULL,
  `subjects` varchar(300) NOT NULL,
  `quantity_students` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `type` int(1) NOT NULL COMMENT 'sinhvien=0,giaovien=1,SV hoac GV =2',
  `gender` int(1) NOT NULL COMMENT 'Nam=0,Nu=1,nam hoac nu =2',
  `id_school` bigint(20) NOT NULL,
  `description` mediumtext NOT NULL,
  `registerdate` datetime NOT NULL,
  `status` int(1) NOT NULL COMMENT 'chua giao:0,da giao:1',
  `lock` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `find_teacher`
--

INSERT INTO `find_teacher` (`id`, `id_provinces`, `id_districts`, `address`, `telephone`, `mobilephone`, `email`, `contact`, `id_level`, `subjects`, `quantity_students`, `salary`, `type`, `gender`, `id_school`, `description`, `registerdate`, `status`, `lock`) VALUES
(57, 1, 24, 'P.Bình Chiểu', '09090909', '09090909', 'a@a.com', 'anh Huy', 10, 'Tin hoc EXCEL', '1', '900,000', 2, 0, 1, 'Tôi muốn một người giỏi về tin học Excel. Không nhất thiết phải là giáo viên hay sinh viên đã TN, mà SV cung được, miễn là có kinh nghiệm truyền đạt. Chương trình học và mức lương sẽ trao đổi trực tiếp qua điện thoại. Hay nhá máy cho tôi, tôi sẽ gọi lại.', '2009-01-13 08:20:34', 1, 1),
(81, 1, 21, 'Đường Giải Phóng, P.4', '62 70 20 97', '0906408813', 'suphamsg@yahoo.com', '156/7A Tô Hiến Thành, P.15, Q.10, HCM', 9, 'Toán, Lý, Hóa', '1', '500', 0, 0, 1, 'Sinh vien nam Đại học Bách khoa', '2009-02-09 16:11:34', 0, 1),
(55, 1, 22, 'Tô Hiệu, P. Hiệp Tân', '09090909', '09090909', 'a@a.com', 'anh Huy', 10, 'Lý, Hóa', '1', '600,000', 2, 1, 1, 'hẹn gọi lại sau', '2009-01-13 08:18:52', 1, 1),
(54, 1, 23, 'KP3, Phường Tam Phú', '09090909', '09090909', 'a@a.com', 'anh Huy', 10, 'Toán,Lí, Hóa', '1', '1,200,000', 0, 2, 1, 'Cần gấp một gia sư có kinh nghiệm dạy kèm lớp 10, ddạy 5 buổi/tuần vào các tối. Yêu cầu sinh viên chính qui, có kinh nghiệm, dạy dễ hiểu. Cần gấp!', '2009-01-13 08:17:55', 1, 1),
(53, 1, 21, ' Chánh Hưng, Phường 06', '09090909', '09090909', 'a@a.com', 'anh Huy', 10, 'Toán,Lí, Hóa', '1', '1,200,000', 0, 2, 1, 'Mô tả thêm: Cần gấp một gia sư có kinh nghiệm dạy kèm lớp 10, dạy 5 buổi/tuần vào các tối. Yêu cầu sinh viên chính qui năm 3 trở lên, có kinh nghiệm dadỵ kèm, dạy dễ hiểu và có phương pháp sư phạm. cần gấp!', '2009-01-13 08:16:47', 1, 1),
(52, 1, 7, 'Đường 49, KP5, Bình Thuận', '09090909', '09090909', 'a@a.com', 'anh Huy', 6, 'Báo bài', '1', '1,000,000', 0, 2, 1, 'Cần gấp một gia sư là sinh viên chính qui có kinh nghiệm dạy kèm lớp 6. Yêu cầu sinh viên có kinh nghiệm, trung thực, nhiệt tình và có phương pháp dạy. ưu tiên sinh viên sư phạm. Cần gấp!', '2009-01-13 08:15:15', 0, 1),
(86, 1, 22, 'Đường Thành Công', '62 70 20 97', '0906408813', 'admin@supham.com.vn', '156/7A Tô Hiến Thành, P.15, Q.10, HCM', 12, 'Toán, Lý, Hóa(3 buổi/tuần)', '1', '1.000.000', 0, 0, 1, 'Dạy nhiêt tình, co phuong pháp', '2009-02-09 18:43:19', 0, 1),
(85, 1, 8, 'Nguyễn Thi Tân, P.2', '38515528', '0906237127', 'admin@supham.com.vn', '156/7A Tô Hiến Thành, P.15, Q.10, HCM', 8, 'Toán, Lý, Hóa, Anh(3 buổi/tuần)', '1', '500.000', 0, 2, 1, 'Sinh viên Đại học Sư pham', '2009-02-09 18:36:21', 0, 1),
(89, 1, 22, 'Nguyễn cửu Đàm, F.Tân Sơn Nhì, Q.Tân Phú', '(08)62702097', '0906408813', 'suphamsg@yahoo.com', '156/7A Tô Hiến Thành F.15 Q.10', 9, 'Anh Văn', '1', '600.000(2b/tuần)', 2, 2, 1, 'Cần gấp 1 giáo viên dạy anh văn càng sớm càng tôt', '2009-02-10 08:29:24', 0, 1),
(88, 1, 22, 'F.Tây Thạnh, Q.Tân Phú', '(08)62702097', '0906408813', 'suphamsg@yahoo.com', '156/7A Tô Hiến Thành F.15 Q.10', 10, 'Anh Văn', '1', '800.000(2b/tuần)', 1, 2, 1, '', '2009-02-10 07:55:09', 0, 1),
(79, 1, 19, 'Thị Trấn Nhà Bè', '', '', 'suphamsg@yahoo.com', 'Thị Trấn Nhà Bè', 6, 'Toán(3b/Tuần)', '1', '600.000', 0, 0, 1, 'sinh viên nam dạy giỏi Toán', '2009-02-09 08:24:23', 0, 1),
(77, 1, 22, 'Đường Thành Công, Q.Tân Phú', '', '', 'suphamsg@yahoo.com', 'Đường Thành Công, Q.Tân Phú', 7, 'Toán(3b/Tuần)', '1', '700.000', 0, 1, 1, 'Dạy nhiệt tình có phương pháp giảng dạy hay', '2009-02-09 07:50:51', 0, 1),
(90, 1, 21, 'Thăng Long, F.4 , Q.Tân Bình tp HCM', '(08)62702097', '0906408813', 'suphamsg@yahoo.com', '156/7A Tô Hiến Thành F.15 Q.10', 9, 'Toán Văn Anh Văn(3b/tuần)', '1', '1.100.000', 1, 1, 1, 'Cần gấp 1 giáo viên đê ôn thi cho bé', '2009-02-10 16:11:52', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `i_am_teacher`
--

CREATE TABLE IF NOT EXISTS `i_am_teacher` (
  `id` bigint(20) NOT NULL auto_increment,
  `description` mediumtext NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `i_am_teacher`
--

INSERT INTO `i_am_teacher` (`id`, `description`, `createdate`) VALUES
(1, '<p>qqqqqqqqqqqqqq</p>', '2009-02-04 20:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `key_tnpt`
--

CREATE TABLE IF NOT EXISTS `key_tnpt` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `key_tnpt`
--

INSERT INTO `key_tnpt` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(3, 'Gợi ý giải đề thi tốt nghiệp THPT môn văn ', '<p>&nbsp;</p>\n<p><strong>\n<table border="0" cellspacing="0" cellpadding="0" width="40" align="right">\n<tbody>\n<tr>\n<td><img onclick="return showImage(this.src)" src="http://www3.tuoitre.com.vn/TuyenSinh/ImageView.aspx?ThumbnailID=198241" border="1" alt="" width="200" height="150" /></td>\n</tr>\n<tr>\n<td>Kiểm tra phiếu b&aacute;o danh th&iacute; sinh trước giờ thi m&ocirc;n văn tại HĐT Trường Trần Khai Nguy&ecirc;n (TP.HCM) s&aacute;ng 30-5-2007 - Ảnh: Như H&ugrave;ng</td>\n</tr>\n</tbody>\n</table>\nTT - Th&iacute; sinh chọn một trong hai đề sau:</strong></p>\n<p><strong>Đề </strong><strong>1:</strong></p>\n<p><strong>C&acirc;u 1 </strong>(2 điểm)</p>\n<p>N&ecirc;u những n&eacute;t ch&iacute;nh về cuộc đời v&agrave; sự nghiệp văn học của Lui Arag&ocirc;ng.</p>\n<p><strong>C&acirc;u 2 </strong>(3 điểm)</p>\n<p>Nhận x&eacute;t ngắn gọn về t&igrave;nh huống độc đ&aacute;o trong truyện <em>Vợ nhặt </em>của Kim L&acirc;n.</p>\n<p><strong>C&acirc;u 3</strong> (5 điểm)</p>\n<p>Ph&acirc;n t&iacute;ch c&aacute;i hay, c&aacute;i đẹp trong đoạn thơ sau:</p>\n<blockquote dir="ltr">\n<blockquote dir="ltr">\n<p><em>M&igrave;nh đi, c&oacute; nhớ những ng&agrave;y</em></p>\n<p><em>Mưa nguồn suối lũ, những m&acirc;y c&ugrave;ng m&ugrave;</em></p>\n<p><em>M&igrave;nh về, c&oacute; nhớ chiến khu</em></p>\n<p><em>Miếng cơm chấm muối, mối th&ugrave; nặng vai?</em></p>\n<p><em>M&igrave;nh về, rừng n&uacute;i nhớ ai</em></p>\n<p><em>Tr&aacute;m b&ugrave;i để rụng, măng mai để gi&agrave;.</em></p>\n<p><em>M&igrave;nh đi, c&oacute; nhớ những nh&agrave;</em></p>\n<p><em>Hắt hiu lau x&aacute;m, đậm đ&agrave; l&ograve;ng son</em></p>\n</blockquote>\n</blockquote>\n<p>(Tr&iacute;ch <em>Việt Bắc </em>- Tố Hữu, <em>Văn học 12 </em>- tập một, tr.154-155, NXB Gi&aacute;o Dục, H&agrave; Nội, 2005)</p>\n<p>&nbsp;</p>\n<p><strong>Đề 2:</strong></p>\n<p><strong>C&acirc;u 1</strong> (2 điểm)</p>\n<blockquote dir="ltr">\n<blockquote dir="ltr">\n<p><em>Chỉ mẹ l&agrave; niềm vui, &aacute;nh s&aacute;ng diệu kỳ</em></p>\n<p><em>Chỉ m&igrave;nh mẹ gi&uacute;p đời con vững bước</em></p>\n</blockquote>\n</blockquote>\n<p>(Tr&iacute;ch <em>Thư gửi mẹ </em>- &Ecirc;x&ecirc;nin, <em>Văn học 12 </em>- tập hai tr.55, NXB Gi&aacute;o Dục, 2004)</p>\n<p>Anh, chị hiểu hai c&acirc;u thơ tr&ecirc;n như thế n&agrave;o?</p>\n<p><strong>C&acirc;u 2</strong> (3 điểm)</p>\n<p>Giải th&iacute;ch &yacute; nghĩa nhan đề truyện ngắn <em>Rừng x&agrave; nu </em>của Nguyễn Trung Th&agrave;nh.</p>\n<p><strong>C&acirc;u 3</strong> (5 điểm)</p>\n<p>Ph&acirc;n t&iacute;ch vẻ đẹp người l&aacute;i đ&ograve; trong t&ugrave;y b&uacute;t <em>Người l&aacute;i đ&ograve; s&ocirc;ng Đ&agrave; </em>của Nguyễn Tu&acirc;n.</p>\n<p><strong>Hết</strong></p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>Đề 1:</strong><strong></strong></p>\n<p><strong>C&acirc;u 1 </strong>(2 điểm):<strong></strong></p>\n<p>HS cần tr&igrave;nh b&agrave;y được một số &yacute; ch&iacute;nh sau về cuộc đời v&agrave; sự nghiệp văn học của Lui Arag&ocirc;ng:</p>\n<p>1. Về cuộc đời:</p>\n<p>- Lui Arag&ocirc;ng (1897-1982) l&agrave; nh&agrave; thơ, nh&agrave; tiểu thuyết Ph&aacute;p nổi tiếng thế giới.</p>\n<p>- Cuộc đời đối với Arag&ocirc;ng l&agrave; một c&acirc;u hỏi lớn. &Ocirc;ng sớm c&oacute; tuổi thơ bất hạnh (ở với mẹ nhưng lại dưới danh nghĩa l&agrave; cậu em nu&ocirc;i v&agrave; chỉ biết cha l&agrave; ai trước khi mẹ từ gi&atilde; c&otilde;i đời); lớn l&ecirc;n, học y khoa rồi tham gia Đại chiến thế giới I v&agrave; II, giải ngũ với t&acirc;m trạng ch&aacute;n chường, mệt mỏi, tham gia c&aacute;c tr&agrave;o lưu văn học (chủ nghĩa đa đa, si&ecirc;u thực).</p>\n<p>- Arag&ocirc;ng gia nhập Đảng Cộng sản năm 1927. Một sự kiện c&oacute; &yacute; nghĩa quan trọng với cuộc đời &ocirc;ng v&agrave;o năm 1928 l&agrave; cuộc gặp gỡ với Enxa Tơri&ocirc;l&ecirc;, người phụ nữ Nga gốc Do Th&aacute;i, nh&agrave; tiểu thuyết Ph&aacute;p v&agrave; l&agrave; người bạn đời của &ocirc;ng sau n&agrave;y. Enxa đ&atilde; k&eacute;o &ocirc;ng ra khỏi tư tưởng bi quan, đưa &ocirc;ng đến với l&yacute; tưởng c&aacute;ch mạng v&ocirc; sản. &Ocirc;ng rời bỏ chủ nghĩa đa đa. chủ nghĩa si&ecirc;u thực để chuyển sang chủ nghĩa hiện thực x&atilde; hội chủ nghĩa.</p>\n<p>- Từ năm 1950, t&igrave;nh h&igrave;nh nước Ph&aacute;p v&agrave; thế giới c&oacute; những diễn biến phức tạp nhưng Arag&ocirc;ng vẫn tin v&agrave;o l&yacute; tưởng đ&atilde; chọn. &Ocirc;ng được trao giải thưởng h&ograve;a b&igrave;nh quốc tế L&ecirc;nin khi tr&ograve;n 60 tuổi.</p>\n<p>2. Sự nghiệp s&aacute;ng t&aacute;c: kh&aacute; phong ph&uacute; v&agrave; đồ sộ</p>\n<p>- Arag&ocirc;ng đến với tiểu thuyết sớm hơn thơ. T&aacute;c phẩm ti&ecirc;u biểu: <em>Những khu phố đẹp, Tuần lễ th&aacute;nh </em>(tiểu thuyết); <em>Enxa ngồi trước gương, Đ&ocirc;i mắt Enxa </em>(thơ).</p>\n<p>- N&eacute;t nổi bật trong c&aacute;c s&aacute;ng t&aacute;c của Arag&ocirc;ng l&agrave; sự gắn b&oacute; giữa t&igrave;nh y&ecirc;u l&yacute; tưởng. Enxa trở th&agrave;nh nguồn đề t&agrave;i, nguồn cảm hứng lớn trong s&aacute;ng t&aacute;c của &ocirc;ng.</p>\n<p>- Về nghệ thuật: Arag&ocirc;ng c&oacute; &yacute; thức đổi mới, c&aacute;ch t&acirc;n nghệ thuật trong mỗi s&aacute;ng t&aacute;c của m&igrave;nh. &Ocirc;ng chủ trương thơ kh&ocirc;ng c&oacute; c&aacute;c loại dấu chấm c&acirc;u, x&oacute;a bỏ ranh giới giữa thơ v&agrave; văn xu&ocirc;i, c&aacute;c biện ph&aacute;p tu từ được lặp đi lặp lại...</p>\n<p><strong>C&acirc;u 2</strong> (3 điểm):</p>\n<p>Cần tr&igrave;nh b&agrave;y được:</p>\n<p>- T&igrave;nh huống độc đ&aacute;o trong truyện <em>Vợ nhặt</em>: anh Tr&agrave;ng - một thanh ni&ecirc;n ngụ cư ngh&egrave;o kh&oacute;, th&ocirc; kệch, nhặt được vợ một c&aacute;ch dễ d&agrave;ng giữa nạn đ&oacute;i kinh ho&agrave;ng năm 1945.</p>\n<p>- Nhận x&eacute;t về t&igrave;nh huống: Đ&acirc;y l&agrave; một t&igrave;nh huống &eacute;o le, độc đ&aacute;o, cảm động, c&oacute; t&aacute;c dụng thể hiện tư tưởng, chủ đề của t&aacute;c phẩm (tố c&aacute;o tội &aacute;c của bọn thực d&acirc;n, ph&aacute;t x&iacute;t: đẩy nh&acirc;n d&acirc;n ta v&agrave;o nạn đ&oacute;i, khiến cho th&acirc;n phận con người trở n&ecirc;n rẻ r&uacute;ng, như rơm r&aacute;c nơi đầu đường x&oacute; chợ; l&agrave;m bật l&ecirc;n những phẩm chất đ&aacute;ng qu&iacute; của những người n&ocirc;ng d&acirc;n ngụ cư: sẵn s&agrave;ng cưu mang đ&ugrave;m bọc lấy nhau trong ho&agrave;n cảnh khốn c&ugrave;ng, kh&aacute;t khao hạnh ph&uacute;c gia đ&igrave;nh).</p>\n<p><strong>C&acirc;u 3</strong> (5 điểm):</p>\n<p>Tr&ecirc;n cơ sở những hiểu biết về t&aacute;c giả, về b&agrave;i thơ <em>Việt Bắc</em>, HS c&oacute; thể tr&igrave;nh b&agrave;y b&agrave;i l&agrave;m của m&igrave;nh bằng nhiều c&aacute;ch kh&aacute;c nhau nhưng cơ bản phải l&agrave;m bật l&ecirc;n được c&aacute;i hay, c&aacute;i đẹp của đoạn thơ ở c&aacute;c phương diện sau:</p>\n<p>- Về nội dung: Đoạn thơ thể hiện nghĩa t&igrave;nh c&aacute;ch mạng. Những kỷ niệm kh&aacute;ng chiến gian khổ hi sinh nhưng đằm thắm nghĩa t&igrave;nh được thể hiện qua lời người ở lại - đối tượng tự ph&acirc;n th&acirc;n của chủ thể trữ t&igrave;nh. Những gian khổ, vất vả (<em>mưa nguồn suối lũ, những m&acirc;y c&ugrave;ng m&ugrave;, miếng cơm chấm muối...) </em>c&ugrave;ng t&igrave;nh cảm gắn b&oacute;, tấm l&ograve;ng son sắt (<em>rừng n&uacute;i nhớ ai, đậm đ&agrave; l&ograve;ng son...</em>) được nhắc đến gợi nhớ kh&ocirc;ng gian đặc trưng của n&uacute;i rừng Việt Bắc trong kh&aacute;ng chiến. Lời nhắn nhủ to&aacute;t l&ecirc;n t&igrave;nh cảm ch&acirc;n th&agrave;nh, thắm thiết cả người ở lại (Việt Bắc) đối với người đi (người c&aacute;n bộ về xu&ocirc;i) nhưng cũng c&oacute; thể hiểu l&agrave; những lời nhắn nhủ của người ra đi với ch&iacute;nh m&igrave;nh về nghĩa t&igrave;nh s&acirc;u nặng đối với Việt Bắc. Đoạn thơ ch&iacute;nh l&agrave; lời đồng vọng về t&igrave;nh nghĩa thủy chung với c&aacute;ch mạng, nh&acirc;n d&acirc;n, kh&aacute;ng chiến.</p>\n<p>- Về nghệ thuật: sức hấp dẫn của đoạn thơ thể hiện ở thủ ph&aacute;p "tự ph&acirc;n th&acirc;n" của chủ thể trữ t&igrave;nh; qua việc sử dụng t&agrave;i t&igrave;nh đại từ "m&igrave;nh - ta" vốn thường được sử dụng trong ca dao truyền thống; qua h&igrave;nh ảnh gợi tả (vừa cụ thể vừa kh&aacute;i qu&aacute;t), điệp từ...</p>\n<p>- Đ&aacute;nh gi&aacute; chung: đ&acirc;y l&agrave; đoạn thơ đặc sắc về cả nội dung v&agrave; nghệ thuật, thể hiện r&otilde; n&eacute;t phong c&aacute;ch thơ Tố Hữu (gi&agrave;u t&iacute;nh d&acirc;n tộc, giọng điệu t&acirc;m t&igrave;nh tha thiết...); g&oacute;p phần l&agrave;m cho b&agrave;i thơ trở th&agrave;nh kh&uacute;c h&aacute;t &acirc;n t&igrave;nh của con người kh&aacute;ng chiến.</p>\n<p><strong>ĐỀ 2:</strong><strong></strong></p>\n<p><strong>C&acirc;u 1</strong> (2 điểm):</p>\n<p>Qua việc ph&acirc;n t&iacute;ch một v&agrave;i từ ngữ quan trọng như "<em>&aacute;nh s&aacute;ng diệu kỳ</em>"..., HS cần tr&igrave;nh b&agrave;y được:</p>\n<p>Hai c&acirc;u thơ thể hiện t&igrave;nh cảm thắm thiết của người con với mẹ, cụ thể:</p>\n<p>- &Aacute;nh s&aacute;ng diệu kỳ: từ &aacute;nh s&aacute;ng được d&ugrave;ng theo nghĩa b&oacute;ng, chỉ sự th&aacute;nh thiện, đẹp đẽ trong t&acirc;m hồn mẹ, n&oacute;i rộng ra l&agrave; h&igrave;nh ảnh của mẹ, gợi li&ecirc;n tưởng về h&igrave;nh ảnh của Ch&uacute;a. Mẹ như đức Ch&uacute;a trong t&acirc;m hồn nh&agrave; thơ.</p>\n<p>- Coi mẹ l&agrave; nguồn an ủi duy nhất, l&agrave; chỗ dựa vững chắc cho đời con.</p>\n<p><strong>C&acirc;u 2</strong> (3 điểm):</p>\n<p>HS tr&igrave;nh b&agrave;y được:</p>\n<p>- Nhan đề <em>Rừng x&agrave; nu </em>trước hết gợi ra kh&ocirc;ng gian đặc trưng của v&ugrave;ng đất T&acirc;y nguy&ecirc;n (x&agrave; nu l&agrave; lo&agrave;i c&acirc;y gắn liền với v&ugrave;ng đất, con người T&acirc;y nguy&ecirc;n); tạo kh&ocirc;ng kh&iacute;, dẫn đắt người đọc đến với t&aacute;c phẩm.</p>\n<p>- <em>Rừng x&agrave; nu </em>gợi li&ecirc;n tưởng về c&aacute;c lớp nghĩa kh&aacute;c nhau của h&igrave;nh tượng, đặc biệt l&agrave; &yacute; nghĩa tượng trưng. C&acirc;y x&agrave; nu, rừng x&agrave; nu đ&atilde; trở th&agrave;nh biểu tượng cho những con người T&acirc;y nguy&ecirc;n bất khuất, ki&ecirc;n cường trong kh&aacute;ng chiến chống Mỹ.</p>\n<p>- Đ&acirc;y l&agrave; h&igrave;nh tượng xuy&ecirc;n suốt, g&oacute;p phần tạo n&ecirc;n chất sử thi h&ugrave;ng tr&aacute;ng, say m&ecirc; của t&aacute;c phẩm.</p>\n<p><strong>C&acirc;u 3</strong> (5 điểm):</p>\n<p>Tr&ecirc;n cơ sở những hiểu biết chắc chắn về t&ugrave;y b&uacute;t <em>Người l&aacute;i đ&ograve; s&ocirc;ng Đ&agrave;</em>, về t&aacute;c giả (đặc biệt l&agrave; về phong c&aacute;ch s&aacute;ng t&aacute;c), HS cần l&agrave;m bật l&ecirc;n vẻ đẹp của h&igrave;nh tượng người l&aacute;i đ&ograve;. C&oacute; thể tr&igrave;nh b&agrave;y theo nhiều c&aacute;ch nhưng cần đ&aacute;p ứng được một số điểm ch&iacute;nh sau đ&acirc;y:</p>\n<p>- Vẻ đẹp của người l&aacute;i đ&ograve;:</p>\n<p>+Vẻ đẹp về ngoại h&igrave;nh: mặc d&ugrave; đ&atilde; gần bảy mươi tuổi nhưng th&acirc;n h&igrave;nh đẹp như khắc như chạm, khỏe mạnh, rắn chắc rất ph&ugrave; hợp với nghề l&aacute;i đ&ograve;.</p>\n<p>+ Vẻ đẹp về t&acirc;m hồn, t&iacute;nh c&aacute;ch: thể hiện ở sự từng trải, gi&agrave;u kinh nghiệm, c&oacute; sự hiểu biết s&acirc;u sắc về luồng lạch tr&ecirc;n s&ocirc;ng Đ&agrave;; ở sự th&ocirc;ng minh linh hoạt như một vi&ecirc;n tướng t&agrave;i ba, như một nghệ sĩ trong nghệ thuật vượt th&aacute;c s&ocirc;ng Đ&agrave;; ở sự khi&ecirc;m nhường, b&igrave;nh dị, phong th&aacute;i ung dung mang cốt c&aacute;ch nghệ sĩ.</p>\n<p>- Đ&aacute;nh gi&aacute;, nhận x&eacute;t:</p>\n<p>+ <em>Người l&aacute;i đ&ograve; s&ocirc;ng Đ&agrave; </em>được mi&ecirc;u tả trong t&aacute;c phẩm vừa c&oacute; tư thế của một người lao động tr&iacute; dũng, vừa c&oacute; phong th&aacute;i của một nghệ sĩ t&agrave;i hoa.</p>\n<p>+ H&igrave;nh tượng người l&aacute;i đ&ograve; thể hiện phong c&aacute;ch nghệ thuật độc đ&aacute;o của Nguyễn Tu&acirc;n ở giai đoạn sau C&aacute;ch mạng Th&aacute;ng T&aacute;m: người l&aacute;i đ&ograve; d&ugrave; l&agrave; người lao động b&igrave;nh dị vẫn hiện l&ecirc;n với chất t&agrave;i hoa, nghệ sĩ; để mi&ecirc;u tả vẻ đẹp của h&igrave;nh tượng, nh&agrave; văn sử dụng kiến thức của nhiều ng&agrave;nh khoa học kh&aacute;c nhau; ng&ocirc;n ngữ sinh động, gi&agrave;u h&igrave;nh ảnh...</p>\n<p>+ Qua h&igrave;nh tượng người l&aacute;i đ&ograve;, nh&agrave; văn tỏ th&aacute;i độ y&ecirc;u mến, tự h&agrave;o v&agrave; cảm phục trước những con người lao động b&igrave;nh dị v&ugrave;ng T&acirc;y Bắc, những con người m&agrave; nh&agrave;văn gọi l&agrave; "chất v&agrave;ng mười" qu&iacute; gi&aacute; của Tổ quốc.</p>\n<p><strong></strong></p>\n<p dir="ltr" align="left"><strong>Người giải đề thi: <br /></strong><strong>Triệu Thị Huệ</strong> <br /><em>(tổ trưởng tổ văn Trường THPT</em><em>chuy&ecirc;n L&ecirc; Hồng Phong, TP.HCM)</em>&nbsp;</p>', '', '2009-02-08 10:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `key_tsdh`
--

CREATE TABLE IF NOT EXISTS `key_tsdh` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `key_tsdh`
--

INSERT INTO `key_tsdh` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(2, 'bài giải', '<p><strong><span style="color: #040462;">b&agrave;i giải</span></strong></p>', '', '2009-02-08 10:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'Lớp 1'),
(2, 'Lớp 2'),
(3, 'Lớp 3'),
(4, 'Lớp 4'),
(5, 'Lớp 5'),
(6, 'Lớp 6'),
(7, 'Lớp 7'),
(8, 'Lớp 8'),
(9, 'Lớp 9'),
(10, 'Lớp 10'),
(11, 'Lớp 11'),
(12, 'Lớp 12'),
(13, 'Lớp LTĐH'),
(14, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` bigint(20) NOT NULL auto_increment,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(11, 'Hỗ trợ 400 USD cho sinh viên mua laptop', '<table id="table9" border="0" cellspacing="0" cellpadding="0" width="100%">\n<tbody>\n<tr>\n<td><strong><span style="color: #808080;">\n<p class="Lead">ĐH FPT vừa đầu tư hơn <strong style="mso-bidi-font-weight: normal;">800.000 USD</strong> triển khai chương tr&igrave;nh trang bị m&aacute;y t&iacute;nh x&aacute;ch tay cho sinh vi&ecirc;n, với mục ti&ecirc;u, th&aacute;ng 1/2009, to&agrave;n bộ sinh vi&ecirc;n của trường sẽ d&ugrave;ng m&aacute;y t&iacute;nh phục vụ cho học tập.<br />&gt; <a class="Lead" href="http://vnexpress.net/GL/Xa-hoi/Giao-duc/2008/08/3BA058E6/">ĐH FPT c&ocirc;ng bố kết quả tuyển sinh kh&oacute;a 8</a></p>\n</span></strong>\n<p>&nbsp;</p>\n<p class="Lead"><a class="Lead" href="http://vnexpress.net/GL/Xa-hoi/Giao-duc/2008/08/3BA058E6/"></a>&nbsp;</p>\n<p class="Normal">Việc hỗ trợ mỗi sinh vi&ecirc;n 400 USD mua m&aacute;y t&iacute;nh được triển khai ở tất cả c&aacute;c cơ sở của ĐH FPT tr&ecirc;n to&agrave;n quốc. Khoản tiền n&agrave;y được trừ v&agrave;o học ph&iacute; v&agrave; sinh vi&ecirc;n c&oacute; thể mua bất cứ loại m&aacute;y n&agrave;o để d&ugrave;ng trong giờ học l&yacute; thuyết, thực h&agrave;nh, trong ph&ograve;ng Lab hay tra cứu v&agrave; sử dụng c&aacute;c hệ thống chia sẻ t&agrave;i nguy&ecirc;n tr&ecirc;n mạng...</p>\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\n<tbody>\n<tr>\n<td><img src="http://vnexpress.net/Files/Subject/3B/A0/77/73/Sinh-vien.jpg" border="0" alt="Ảnh: H.A." width="400" height="282" /></td>\n</tr>\n<tr>\n<td class="Image">Với mức hỗ trợ n&agrave;y, sinh vi&ecirc;n chỉ cần bỏ th&ecirc;m 100 USD l&agrave; sở hữu một chiếc m&aacute;y t&iacute;nh x&aacute;ch tay c&oacute; gi&aacute; 500 USD. Ảnh: <em>H.A.</em></td>\n</tr>\n</tbody>\n</table>\n<p class="Normal">Theo Hiệu trưởng ĐH FPT L&ecirc; Trường T&ugrave;ng, trường dự kiến đầu tư hơn 800.000 USD để hỗ trợ sinh vi&ecirc;n cũng như lắp đặt hệ thống mạng kh&ocirc;ng d&acirc;y hiện đại để chuẩn bị những điều kiện tốt nhất cho sinh vi&ecirc;n sử dụng m&aacute;y t&iacute;nh x&aacute;ch tay.</p>\n<p class="Normal">"Đ&acirc;y l&agrave; nỗ lực lớn của trường trong việc n&acirc;ng cao ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; tạo m&ocirc;i trường học tập c&ocirc;ng nghệ ưu việt d&agrave;nh cho sinh vi&ecirc;n. Th&aacute;ng 8, trường đ&atilde; hỗ trợ trang bị m&aacute;y t&iacute;nh x&aacute;ch tay cho c&aacute;n bộ, giảng vi&ecirc;n, v&agrave; giờ hỗ trợ cho sinh vi&ecirc;n. Kế hoạch tiếp theo sẽ l&agrave; n&acirc;ng cao cơ sở hạ tầng v&agrave; c&ocirc;ng nghệ, kết nối hệ thống quản l&yacute; giữa c&aacute;c cơ sở của trường tr&ecirc;n to&agrave;n quốc", &ocirc;ng T&ugrave;ng cho biết.</p>\n<p class="Normal">Với mong muốn cung cấp cho sinh vi&ecirc;n những loại m&aacute;y tốt, gi&aacute; rẻ, ĐH FPT v&agrave; C&ocirc;ng ty HP Việt Nam đ&atilde; k&yacute; bản ghi nhớ hợp t&aacute;c trang bị m&aacute;y t&iacute;nh cho sinh vi&ecirc;n. Trong đ&oacute;, HP Việt Nam cung cấp nhiều d&ograve;ng m&aacute;y ph&ugrave; hợp cho gi&aacute;o dục c&oacute; gi&aacute; 500 - 1500 USD t&ugrave;y theo cấu h&igrave;nh, với mức ch&ecirc;nh lệch ưu đ&atilde;i hơn so với gi&aacute; b&aacute;n lẻ tr&ecirc;n thị trường 60 - 100 USD.</p>\n</td>\n</tr>\n<tr>\n<td style="height: 25px;" align="right"><em>Vnexpress</em></td>\n</tr>\n</tbody>\n</table>', '', '2009-02-08 10:06:00'),
(12, 'Tuyển sinh ĐH, CĐ 2009 - Bài 2: Ngành nào rộng cửa?', '<p>TT - Khối ng&agrave;nh c&ocirc;ng nghệ trong một thời gian d&agrave;i lu&ocirc;n l&agrave; sự lựa chọn đầu ti&ecirc;n của th&iacute; sinh. Trong khi đ&oacute; những ng&agrave;nh li&ecirc;n quan đến n&ocirc;ng, l&acirc;m nghiệp, khoa học x&atilde; hội - nh&acirc;n văn... vẫn lu&ocirc;n rộng cửa.</p>\n<p>\n<table border="0" cellspacing="0" cellpadding="0" width="40" align="center">\n<tbody>\n<tr>\n<td><img src="http://www.tuoitre.com.vn/Tianyon/ImageView.aspx?ThumbnailID=314015" border="1" alt="" width="405" height="305" /></td>\n</tr>\n<tr>\n<td>L&agrave;m thủ tục trước khi v&agrave;o ph&ograve;ng thi kỳ thi ĐH, CĐ tại Trường ĐH C&ocirc;ng nghiệp TP.HCM - Ảnh: Như H&ugrave;ng</td>\n</tr>\n</tbody>\n</table>\n<a onclick="return onLinkClick(this)" href="http://www.tuoitre.com.vn/Tianyon/Index.aspx?ArticleID=299884&amp;ChannelID=13"></a></p>\n<p>Xem lại những thống k&ecirc; về số lượng th&iacute; sinh đăng k&yacute; dự thi bốn, năm năm trước, ấn tượng đầu ti&ecirc;n l&agrave; những con số lớn nhất lu&ocirc;n thuộc về c&aacute;c ng&agrave;nh khối kỹ thuật, c&ocirc;ng nghệ. Trong đ&oacute; c&ocirc;ng nghệ th&ocirc;ng tin, c&ocirc;ng nghệ điện tử - viễn th&ocirc;ng, c&ocirc;ng nghệ sinh học lu&ocirc;n đ&oacute;ng vai tr&ograve; h&agrave;ng đầu. Đến một v&agrave;i năm gần đ&acirc;y, diễn biến của khối ng&agrave;nh n&agrave;y c&oacute; vẻ như đ&atilde; "đằm" lại, sự lựa chọn của th&iacute; sinh kh&ocirc;ng c&ograve;n ồ ạt như trước. Thay v&agrave;o đ&oacute; chất lượng th&iacute; sinh li&ecirc;n tục tăng.</p>\n<p>C&ocirc;ng nghệ, kỹ thuật: &iacute;t dao động</p>\n<p>\n<table border="0" cellspacing="5" cellpadding="5" width="200" align="right" bordercolor="#ecf2fe">\n<tbody>\n<tr>\n<td valign="middle" bgcolor="#cfe6f9">\n<p>Sư phạm sẽ vắng vẻ?</p>\n<p>Cho đến tuyển sinh năm 2008, sư phạm vẫn l&agrave; khối ng&agrave;nh thu h&uacute;t kh&aacute; đ&ocirc;ng th&iacute; sinh. Tuy nhi&ecirc;n, nếu so s&aacute;nh với những năm trước, số lượng th&iacute; sinh đăng k&yacute; dự thi v&agrave;o ng&agrave;nh n&agrave;y đang giảm dần. Những th&ocirc;ng tin về cuộc sống gi&aacute;o vi&ecirc;n t&aacute;c động kh&ocirc;ng nhỏ đến học sinh. Th&ecirc;m v&agrave;o đ&oacute;, yếu tố quyết định li&ecirc;n quan đến ch&iacute;nh s&aacute;ch học ph&iacute; mới d&agrave;nh cho sinh vi&ecirc;n sư phạm sẽ ảnh hưởng kh&ocirc;ng nhỏ đến th&iacute; sinh.</p>\n</td>\n</tr>\n</tbody>\n</table>\nNếu chỉ theo d&otilde;i tỉ lệ chọi của Trường ĐH B&aacute;ch khoa (ĐHQG TP.HCM), sẽ dễ ngộ nhận rằng "cửa v&agrave;o rộng mở" bởi tỉ lệ chọi giảm. Năm 2006, tỉ lệ chọi chung của trường n&agrave;y chỉ khoảng 4,2. Sang năm 2007, tỉ lệ n&agrave;y chưa đến 3 v&agrave; đến năm 2008 tỉ lệ chọi trung b&igrave;nh tiếp tục chỉ c&ograve;n chừng 2,6 trong số khoảng 6.000-8.000 th&iacute; sinh. Nhưng điểm chuẩn của trường vẫn giữ được mức tương đối ổn định từ 16-23,5 điểm, đa số c&aacute;c ng&agrave;nh điểm chuẩn từ 17-21 điểm. Th&iacute; sinh chọn trường n&agrave;y đều c&oacute; học lực kh&aacute;, điểm thi đạt mỗi m&ocirc;n 5 b&igrave;nh qu&acirc;n chiếm 67,6%!</p>\n<p>Ở ĐHQG H&agrave; Nội, Trường ĐH C&ocirc;ng nghệ cũng kh&ocirc;ng c&oacute; thật nhiều th&iacute; sinh đăng k&yacute; dự thi. Số lượng thống k&ecirc; từ năm 2006-2008 cho thấy mỗi năm trường n&agrave;y chỉ c&oacute; tr&ecirc;n dưới 3.000 th&iacute; sinh dự thi. &Iacute;t l&agrave; vậy nhưng điểm chuẩn hai ng&agrave;nh cao nhất năm 2008 của trường n&agrave;y vẫn l&ecirc;n đến 23,5 điểm. Ng&agrave;nh thấp nhất cũng đạt 19 điểm. Thậm ch&iacute; trong năm 2007, điểm chuẩn ng&agrave;nh cao nhất của trường l&ecirc;n đến 25 điểm.</p>\n<p>Ở một số trường tại TP.HCM như: ĐH C&ocirc;ng nghiệp, ĐH Sư phạm kỹ thuật, ĐH N&ocirc;ng l&acirc;m, ĐH T&ocirc;n Đức Thắng... d&ugrave; bị khối ng&agrave;nh kinh tế cạnh tranh quyết liệt về số lượng, c&aacute;c ng&agrave;nh c&ocirc;ng nghệ vẫn giữ được phong độ của m&igrave;nh. Trong số đ&oacute;, hai ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; c&ocirc;ng nghệ sinh học vẫn l&agrave; những ng&agrave;nh k&eacute;n chọn th&iacute; sinh xuất sắc.</p>\n<p>C&oacute; thể khẳng định sau khối ng&agrave;nh y, dược, kinh tế th&igrave; nh&oacute;m ng&agrave;nh c&ocirc;ng nghệ hiện vẫn đang được nhiều th&iacute; sinh kh&aacute;, giỏi chọn lựa. Nếu quyết t&acirc;m chen ch&acirc;n v&agrave;o nh&oacute;m ng&agrave;nh n&agrave;y, đặc biệt l&agrave; ở những trường tốp tr&ecirc;n, th&iacute; sinh phải c&acirc;n nhắc khả năng đạt được 7,5-8 điểm/m&ocirc;n mới c&oacute; hi vọng. Tuy nhi&ecirc;n, th&iacute; sinh vẫn c&oacute; thể t&igrave;m thấy những ng&agrave;nh học n&agrave;y ở những trường vừa sức m&igrave;nh.</p>\n<p>N&ocirc;ng l&acirc;m, X&atilde; hội - nh&acirc;n văn: rộng cửa, nhưng...</p>\n<p>Nhiều chuy&ecirc;n gia gi&aacute;o dục đ&aacute;nh gi&aacute; th&iacute; sinh dự thi khối C l&agrave; những người thiệt th&ograve;i nhất khi dự tuyển sinh ĐH theo h&igrave;nh thức ba chung.</p>\n<p>Trước nhất, do đặc th&ugrave; c&aacute;c m&ocirc;n thi, th&iacute; sinh khối C c&oacute; rất &iacute;t cơ hội đạt điểm cao. Th&iacute; sinh dự thi khối C chỉ c&oacute; duy nhất một cơ hội dự thi ĐH v&igrave; họ kh&ocirc;ng c&oacute; m&ocirc;n thi n&agrave;o tr&ugrave;ng với khối thi kh&aacute;c để dự thi hai khối như th&iacute; sinh khối A, B. Quan trọng hơn nữa, họ kh&ocirc;ng c&oacute; nhiều trường để lựa chọn. Cộng th&ecirc;m t&acirc;m l&yacute; kh&oacute; kiếm việc l&agrave;m sau khi ra trường, số lượng th&iacute; sinh thật sự chọn lựa khối C để dự thi kh&ocirc;ng nhiều. Một bộ phận th&iacute; sinh dự thi khối n&agrave;y... v&igrave; kh&ocirc;ng biết thi khối n&agrave;o kh&aacute;c. Do vậy, số lượng th&iacute; sinh đăng k&yacute; dự thi v&agrave;o c&aacute;c trường khối khoa học x&atilde; hội - nh&acirc;n văn tuy c&oacute; vẻ nhiều nhưng sẽ kh&ocirc;ng qu&aacute; kh&oacute; để những th&iacute; sinh kh&aacute;, giỏi gi&agrave;nh một suất v&agrave;o ĐH.</p>\n<p>Năm 2008, Trường ĐH Khoa học x&atilde; hội v&agrave; nh&acirc;n văn (ĐHQG TP.HCM) c&oacute; hơn 16.000 th&iacute; sinh đăng k&yacute; dự thi, nhưng rất nhiều ng&agrave;nh của trường c&oacute; điểm chuẩn bằng điểm s&agrave;n chung. Điểm chuẩn c&aacute;c ng&agrave;nh n&agrave;y ở Trường ĐH Cần Thơ, ĐH Đ&agrave; Lạt, ĐH Khoa học (ĐH Huế) hay ĐH Luật TP.HCM cũng trong t&igrave;nh trạng tương tự.</p>\n<p>N&oacute;i vậy kh&ocirc;ng c&oacute; nghĩa tất cả c&aacute;c ng&agrave;nh thuộc khối n&agrave;y đều dễ d&agrave;ng. Một số ng&agrave;nh đ&agrave;o tạo mang d&aacute;ng dấp khoa học ứng dụng vẫn c&oacute; thể s&aacute;nh ngang h&agrave;ng với c&ocirc;ng nghệ, kỹ thuật về mặt điểm số. Đầu ti&ecirc;n l&agrave; b&aacute;o ch&iacute; - truyền th&ocirc;ng, kế đến phải kể th&ecirc;m quan hệ quốc tế, luật thương mại... Những ng&agrave;nh n&agrave;y li&ecirc;n tục trong nhiều năm c&oacute; điểm chuẩn ở mức tr&ecirc;n dưới 20 điểm. V&agrave; để đạt đến mức điểm n&agrave;y với c&aacute;c th&iacute; sinh dự thi khối C, D kh&ocirc;ng phải chuyện dễ d&agrave;ng. C&ugrave;ng với việc mở rộng th&ecirc;m khối tuyển, nhiều ng&agrave;nh thuộc khối khoa học x&atilde; hội - nh&acirc;n văn sẽ l&agrave; thử th&aacute;ch lớn đối với th&iacute; sinh trong kỳ tuyển sinh 2009.</p>\n<p>Tương tự, khối ng&agrave;nh n&ocirc;ng l&acirc;m trong những năm qua cũng li&ecirc;n tục c&oacute; sự thay đổi theo hướng k&eacute;n chọn hơn. Năm 2008, ba trường dẫn đầu cả nước về số lượng th&iacute; sinh đăng k&yacute; dự thi đều l&agrave; những trường thi&ecirc;n về đ&agrave;o tạo khối ng&agrave;nh n&ocirc;ng, l&acirc;m nghiệp. Đ&oacute; l&agrave;: Trường ĐH Cần Thơ, ĐH N&ocirc;ng l&acirc;m TP.HCM v&agrave; ĐH N&ocirc;ng nghiệp H&agrave; Nội với tổng số th&iacute; sinh đăng k&yacute; l&ecirc;n đến hơn 175.000. Điều n&agrave;y g&oacute;p phần đẩy điểm chuẩn c&aacute;c ng&agrave;nh n&agrave;y l&ecirc;n kh&aacute; cao so với những năm trước, đặc biệt l&agrave; c&aacute;c ng&agrave;nh tuyển khối B.</p>\n<p>Trường ĐH N&ocirc;ng l&acirc;m TP.HCM c&oacute; nhiều ng&agrave;nh định điểm chuẩn l&ecirc;n đến 20-21,5 điểm. Số ng&agrave;nh c&oacute; điểm chuẩn 18, 19 điểm trở n&ecirc;n phổ biến. Tuy nhi&ecirc;n, do san sẻ với khối ng&agrave;nh kinh tế v&agrave; c&ocirc;ng nghệ n&ecirc;n ở khối A, t&igrave;nh h&igrave;nh c&oacute; vẻ dễ thở hơn.</p>\n<p style="text-align: right;">H&Ugrave;NG THUẬT<br />Tuoitreonline</p>', '', '2009-02-08 10:09:36'),
(13, 'Tuyển sinh 2009: Đề thi chủ yếu lớp 12', '<p>\n<table border="0" cellspacing="0" cellpadding="0" width="40" align="right">\n<tbody>\n<tr>\n<td><img onclick="return showImage(this.src)" src="http://www3.tuoitre.com.vn/TuyenSinh/ImageView.aspx?ThumbnailID=313265" border="1" alt="" width="200" height="150" /></td>\n</tr>\n<tr>\n<td>C&aacute;n bộ coi thi gọi th&iacute; sinh v&agrave;o ph&ograve;ng thi trong kỳ thi tuyển sinh ĐH năm 2008 - Ảnh: THANH H&Agrave;</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p>TTO - Bộ GD-ĐT ra đề thi chung cho c&aacute;c trường ĐH, CĐ c&oacute; tổ chức thi. C&aacute;c m&ocirc;n ngoại ngữ (tiếng Anh, Nga, Ph&aacute;p, Trung, Đức, Nhật), vật l&yacute;, h&oacute;a học v&agrave; sinh học đề thi theo phương ph&aacute;p trắc nghiệm; c&aacute;c m&ocirc;n c&ograve;n lại đề thi theo phương ph&aacute;p tự luận. C&aacute;c trường tự ra đề thi c&aacute;c m&ocirc;n năng khiếu.</p>\n<p>Nội dung đề thi b&aacute;m s&aacute;t chương tr&igrave;nh THPT, chủ yếu l&agrave; lớp 12, kh&ocirc;ng qu&aacute; kh&oacute;, qu&aacute; phức tạp, kh&ocirc;ng đ&aacute;nh đố, ph&ugrave; hợp với thời gian l&agrave;m b&agrave;i, c&oacute; khả năng ph&acirc;n loại th&iacute; sinh.</p>\n<p>Cấu tr&uacute;c đề thi tuyển sinh ĐH, CĐ năm 2009 đối với c&aacute;c m&ocirc;n: to&aacute;n, vật l&yacute;, h&oacute;a học, sinh học, ngữ văn, lịch sử, địa l&yacute;, đề thi mỗi m&ocirc;n gồm hai phần: phần chung cho tất cả th&iacute; sinh, ra theo nội dung giống nhau giữa chương tr&igrave;nh chuẩn v&agrave; chương tr&igrave;nh n&acirc;ng cao; phần ri&ecirc;ng ra theo từng chương tr&igrave;nh: chương tr&igrave;nh chuẩn v&agrave; chương tr&igrave;nh n&acirc;ng cao. Th&iacute; sinh chỉ được chọn một phần ri&ecirc;ng th&iacute;ch hợp để l&agrave;m b&agrave;i; th&iacute; sinh n&agrave;o l&agrave;m cả hai phần ri&ecirc;ng th&igrave; b&agrave;i l&agrave;m bị coi l&agrave; phạm quy, cả hai phần ri&ecirc;ng đều kh&ocirc;ng được chấm. Chỉ chấm điểm phần chung.</p>\n<p>Ri&ecirc;ng đối với c&aacute;c m&ocirc;n ngoại ngữ (tiếng Anh, Nga, Ph&aacute;p, Trung, Đức, Nhật): đề thi mỗi m&ocirc;n chỉ c&oacute; phần chung d&agrave;nh cho tất cả th&iacute; sinh, ra theo nội dung giống nhau giữa chương tr&igrave;nh chuẩn v&agrave; chương tr&igrave;nh n&acirc;ng cao, kh&ocirc;ng c&oacute; phần ri&ecirc;ng.</p>\n<p>C&ocirc;ng bố điểm tr&uacute;ng tuyển trước 20-8</p>\n<p>Theo quy định của Bộ GD-ĐT, c&aacute;c trường phải chấm thi theo hai v&ograve;ng độc lập tại hai ph&ograve;ng ri&ecirc;ng biệt, theo đ&uacute;ng đ&aacute;p &aacute;n v&agrave; thang điểm đ&atilde; được ph&ecirc; duyệt. C&aacute;c trường ĐH tổ chức thi theo đề chung của Bộ GD-ĐT phải ho&agrave;n th&agrave;nh c&ocirc;ng t&aacute;c chấm thi trước ng&agrave;y 31-7, c&ograve;n c&aacute;c trường CĐ phải chấm thi trước ng&agrave;y 5-8. Ri&ecirc;ng việc chấm b&agrave;i thi trắc nghiệm sẽ c&oacute; văn bản quy định v&agrave; hướng dẫn ri&ecirc;ng của Bộ GD-ĐT. C&aacute;c trường c&ocirc;ng bố điểm tr&uacute;ng tuyển nguyện vọng 1 chậm nhất l&agrave; ng&agrave;y 20-8.</p>\n<p>\n<table border="0" cellspacing="0" cellpadding="0" width="40" align="center">\n<tbody>\n<tr>\n<td><img src="http://www3.tuoitre.com.vn/TuyenSinh/ImageView.aspx?ThumbnailID=313267" border="1" alt="" /></td>\n</tr>\n<tr>\n<td>C&aacute;n bộ coi thi kiểm tra hồ sơ của th&iacute; sinh tại điểm thi Trường ĐH Giao th&ocirc;ng vận tải TP.HCM ng&agrave;y 4-7 trong kỳ thi tuyển sinh ĐH năm 2008 - Ảnh: QUỐC DŨNG</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p>Trước ng&agrave;y 10-8 Bộ GD-ĐT x&aacute;c định v&agrave; c&ocirc;ng bố điểm s&agrave;n ĐH, CĐ cho c&aacute;c khối A, B, C, D theo đề thi ĐH d&ugrave;ng chung (điểm s&agrave;n l&agrave; điểm kh&ocirc;ng nh&acirc;n hệ số).</p>\n<p>Bộ GD-ĐT cho biết, c&aacute;c trường c&oacute; ng&agrave;nh năng khiếu nhưng kh&ocirc;ng tổ chức thi v&agrave;o c&aacute;c ng&agrave;nh n&agrave;y theo đề thi ri&ecirc;ng th&igrave; được x&eacute;t tuyển th&iacute; sinh trong v&ugrave;ng tuyển, đ&atilde; dự thi ng&agrave;nh đ&oacute; tại c&aacute;c trường ĐH kh&aacute;c c&oacute; c&aacute;c m&ocirc;n văn h&oacute;a thi theo đề chung.</p>\n<p>C&aacute;c ĐH c&oacute; trường CĐ v&agrave; c&aacute;c trường ĐH c&oacute; đ&agrave;o tạo hệ CĐ, kh&ocirc;ng tổ chức thi tuyển sinh ri&ecirc;ng cho hệ n&agrave;y m&agrave; phải x&eacute;t tuyển th&iacute; sinh đ&atilde; dự thi theo đề thi chung c&oacute; c&ugrave;ng khối thi, trong v&ugrave;ng tuyển quy định của trường.</p>\n<p>C&aacute;c trường d&ugrave;ng chung đề thi v&agrave; sử dụng chung kết quả thi chỉ x&eacute;t tuyển th&iacute; sinh đ&atilde; dự thi ĐH hoặc CĐ theo đề thi chung của Bộ GD-ĐT. C&aacute;c trường c&oacute; thể x&aacute;c định điểm tr&uacute;ng tuyển theo khối thi, theo ng&agrave;nh học hoặc điểm tr&uacute;ng tuyển chung. Tuy nhi&ecirc;n, điểm tr&uacute;ng tuyển kh&ocirc;ng được thấp hơn điểm s&agrave;n.</p>\n<p>C&aacute;c trường ĐH, CĐ c&oacute; thi c&aacute;c m&ocirc;n năng khiếu theo đề thi ri&ecirc;ng, x&acirc;y dựng điểm tr&uacute;ng tuyển để tuyển th&iacute; sinh dự thi v&agrave;o trường m&igrave;nh.</p>\n<p>C&aacute;c trường CĐ hoặc hệ CĐ của c&aacute;c trường ĐH, hoặc c&aacute;c trường CĐ thuộc c&aacute;c ĐH c&oacute; thể sử dụng kết quả thi CĐ của những th&iacute; sinh dự thi theo đề thi CĐ chung của Bộ GD-ĐT để x&eacute;t tuyển, nếu c&ograve;n chỉ ti&ecirc;u, c&oacute; c&ugrave;ng khối thi v&agrave; trong v&ugrave;ng tuyển quy định của trường. Nguy&ecirc;n tắc x&eacute;t tuyển l&agrave; lấy từ điểm cao trở xuống cho đủ chỉ ti&ecirc;u.</p>\n<p>Đề thi thuộc danh mục b&iacute; mật Nh&agrave; nước</p>\n<p>Bộ GD-ĐT cho biết đề thi, đ&aacute;p &aacute;n, thang điểm trong kỳ thi tuyển sinh ĐH, CĐ năm 2009 khi chưa c&ocirc;ng bố (kể cả đề thi được sử dụng v&agrave; đang trong giờ thi) thuộc danh mục b&iacute; mật Nh&agrave; nước độ "tối mật". Bộ GD-ĐT quy định nơi sao in đề thi phải kh&eacute;p k&iacute;n v&agrave; c&aacute;ch ly ho&agrave;n to&agrave;n ba v&ograve;ng độc lập.</p>\n<p>Theo đ&oacute;, tất cả c&aacute;c cửa sổ, h&agrave;nh lang v&agrave; những vị tr&iacute; th&ocirc;ng ra ngo&agrave;i đều phải bịt k&iacute;n v&agrave; ni&ecirc;m phong. V&ograve;ng ngo&agrave;i phải c&oacute; h&agrave;ng r&agrave;o, c&oacute; cảnh s&aacute;t bảo vệ v&agrave; c&aacute;n bộ gi&aacute;m s&aacute;t của Bộ GD-ĐT cử đến; v&ograve;ng trong phải c&oacute; c&aacute;n bộ an ninh, c&aacute;n bộ hội đồng tuyển sinh trường.</p>\n<p>Gi&aacute;m đốc c&aacute;c ĐH, học viện, hiệu trưởng c&aacute;c trường ĐH, CĐ phải phối hợp với ng&agrave;nh c&ocirc;ng an, &aacute;p dụng mọi biện ph&aacute;p cần thiết để c&aacute;ch ly ho&agrave;n to&agrave;n những người tham gia c&ocirc;ng t&aacute;c đề thi với b&ecirc;n ngo&agrave;i v&agrave; với những người phục vụ ăn uống, sinh hoạt, y tế...</p>\n<p>Cấm sử dụng c&aacute;c phương tiện th&ocirc;ng tin, điện thoại di động, điện thoại cố định nối d&agrave;i, m&aacute;y t&iacute;nh x&aacute;c tay. Chỉ được d&ugrave;ng một điện thoại cố định do c&aacute;n bộ an ninh kiểm so&aacute;t 24/24 giờ, nhưng m&aacute;y n&agrave;y kh&ocirc;ng được đặt trong ph&ograve;ng sao in, đ&oacute;ng g&oacute;i đề thi. Mọi cuộc điện thoại đều phải ghi &acirc;m.</p>\n<p>Gi&aacute;m đốc c&aacute;c ĐH, học viện, hiệu trưởng c&aacute;c trường ĐH, CĐ, gi&aacute;m đốc c&aacute;c sở GD-ĐT v&agrave; những người c&oacute; li&ecirc;n quan phải chịu ho&agrave;n to&agrave;n tr&aacute;ch nhiệm c&aacute; nh&acirc;n về việc bảo đảm b&iacute; mật an to&agrave;n đề thi tuyển sinh. Nhằm bảo đảm tuyệt đối b&iacute; mật v&agrave; an to&agrave;n đề thi, phải phối hợp với c&aacute;n bộ an ninh địa b&agrave;n kiểm tra việc chọn cử người tham gia c&ocirc;ng t&aacute;c li&ecirc;n quan đến đề thi như bi&ecirc;n soạn đề thi, giải m&atilde;, sao in, đ&oacute;ng g&oacute;i, vận chuyển, bảo quản... l&agrave; những người c&oacute; kinh nghiệm v&agrave; nghiệp vụ chuy&ecirc;n m&ocirc;n, kh&ocirc;ng c&oacute; vợ, chồng, con, anh, chị, em ruột dự thi v&agrave;o ĐH, CĐ năm 2009...</p>\n<p>Bộ GD-ĐT cũng y&ecirc;u cầu m&aacute;y v&agrave; thiết bị, c&aacute;c loại giấy tờ, văn bản trong cơ sở sao in đề thi, d&ugrave; bị hư hỏng hay kh&ocirc;ng d&ugrave;ng đến, chỉ được đưa ra ngo&agrave;i khu vực c&aacute;ch ly khi thi xong m&ocirc;n cuối c&ugrave;ng.</p>\n<p>\n<table border="0" cellspacing="5" cellpadding="5" width="90%" align="center" bordercolor="#ecf2fe">\n<tbody>\n<tr>\n<td valign="middle" bgcolor="#cfe6f9">\n<p>Nhiều yếu k&eacute;m trong thi v&agrave; tuyển sinh năm 2008</p>\n<p>Thứ trưởng thường trực Bộ GD-ĐT B&agrave;nh Tiến Long cho biết, c&ocirc;ng t&aacute;c thi v&agrave; tuyển sinh năm 2008 vẫn c&ograve;n một số hạn chế, yếu k&eacute;m. Theo đ&oacute;, tr&ecirc;n phạm vi to&agrave;n quốc, vẫn c&ograve;n hiện tượng tung tin thất thiệt, nhiễu th&ocirc;ng tin về đề thi, l&agrave;m ảnh hưởng tới t&acirc;m l&yacute; của phụ huynh v&agrave; học sinh, g&acirc;y bức x&uacute;c trong dư luận x&atilde; hội.</p>\n<p>Quy tr&igrave;nh in sao đề thi tốt nghiệp THPT tại một số địa phương, một số cơ sở in sao đề thi tuyển sinh CĐ c&ograve;n chưa chặt chẽ, kh&ocirc;ng đ&uacute;ng quy tr&igrave;nh, như: thiếu đề thi v&agrave; đề thi thiếu trang tại B&agrave; Rịa - Vũng T&agrave;u, Kh&aacute;nh H&ograve;a, Ninh Thuận, H&agrave; T&acirc;y; nhầm đề thi m&ocirc;n văn tại Trường CĐ Mỹ thuật trang tr&iacute; Đồng Nai.</p>\n<p>Gian lận trong thi cử c&ograve;n xảy ra tại một số địa phương như: thi hộ tại Hải Ph&ograve;ng, Kh&aacute;nh H&ograve;a v&agrave; Bắc Giang. Đặc biệt l&agrave; sự cố cướp đề thi trong buổi thi m&ocirc;n to&aacute;n tại Hội đồng coi thi Trung t&acirc;m Gi&aacute;o dục thường xuy&ecirc;n huyện Hoằng H&oacute;a v&agrave; ở điểm thi đặt tại Trường THCS Hoằng Quỳ, tỉnh Thanh H&oacute;a.</p>\n<p>C&aacute;n bộ coi thi chưa l&agrave;m tr&ograve;n tr&aacute;ch nhiệm, l&agrave;m việc ri&ecirc;ng trong l&uacute;c coi thi, để th&iacute; sinh sử dụng t&agrave;i liệu, sử dụng điện thoại di động trong l&uacute;c đang thi; hoặc k&yacute; t&ecirc;n v&agrave;o giấy thi v&agrave; giấy nh&aacute;p trước khi ph&aacute;t cho th&iacute; sinh.</p>\n<p>Một số trường ĐH, CĐ vẫn nhận hồ sơ đăng k&yacute; x&eacute;t tuyển nguyện vọng 2 trực tiếp của th&iacute; sinh tại trường, thậm ch&iacute; nhận trước thời gian quy định, g&acirc;y t&acirc;m l&yacute; kh&ocirc;ng tốt tới th&iacute; sinh. Một số trường vận dụng Điều 33 Quy chế tuyển sinh ĐH, CĐ hệ ch&iacute;nh quy tr&aacute;i quy định (như ĐH Tr&agrave; Vinh, ĐH d&acirc;n lập Yersin, ĐH Quảng B&igrave;nh...); c&oacute; trường n&oacute;ng vội hạ điểm tr&uacute;ng tuyển nguyện vọng 1, kh&ocirc;ng những sai quy định m&agrave; c&ograve;n dẫn đến x&aacute;o trộn c&ocirc;ng t&aacute;c tuyển sinh của cả hệ thống...</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="text-align: right;">QUỐC DŨNG<br />Tuoitreonline</p>', '', '2009-02-08 10:12:42'),
(14, 'Khi nào nộp hồ sơ đăng ký dự thi ĐH, CĐ?', '<p>\n<table border="0" cellspacing="0" cellpadding="0" width="40" align="right">\n<tbody>\n<tr>\n<td><img onclick="return showImage(this.src)" src="http://www3.tuoitre.com.vn/TuyenSinh/ImageView.aspx?ThumbnailID=313846" border="1" alt="" width="200" height="150" /></td>\n</tr>\n<tr>\n<td>Th&iacute; sinh tự do nộp hồ sơ đăng k&yacute; dự thi ĐH-CĐ năm 2008 tại Cơ quan đại diện Bộ GD-ĐT ở TP.HCM chiều 17-4 - Ảnh: QUỐC DŨNG</td>\n</tr>\n</tbody>\n</table>\nTTO - Nộp hồ sơ đăng k&yacute; dự thi tại đ&acirc;u? Khi n&agrave;o ph&aacute;t h&agrave;nh cuốn <em>Những điều cần biết</em>? Ng&agrave;nh hệ thống th&ocirc;ng tin kinh tế ĐH Ng&acirc;n h&agrave;ng TP.HCM, c&ocirc;ng nghệ th&ocirc;ng tin ĐH Giao th&ocirc;ng vận tải TP.HCM đ&agrave;o tạo những g&igrave;?... l&agrave; những thắc mắc tuyển sinh 2009 th&iacute; sinh gửi về <em>Tuổi Trẻ Online</em>.</p>\n<p>&gt;&gt; <a onclick="return onLinkClick(this)" href="http://www3.tuoitre.com.vn/Tuyensinh/Index.aspx?TopicID=18">Điểm chuẩn ĐH-CĐ năm 2008</a><br />&gt;&gt; <a onclick="return onLinkClick(this)" href="http://www3.tuoitre.com.vn/Tuyensinh/Index.aspx?TopicID=210">Th&ocirc;ng tin tuyển sinh ĐH-CĐ-TCCN 2009</a><br />&gt;&gt; <a onclick="return onLinkClick(this)" href="http://www3.tuoitre.com.vn/Tuyensinh/Index.aspx?ArticleID=213871&amp;ChannelID=142">Điểm chuẩn&nbsp;ĐH, CĐ&nbsp;năm 2007, 2006, 2005</a><br />&gt;&gt; <a onclick="return onLinkClick(this)" href="http://www.tuoitre.com.vn/Tianyon/Index.aspx?TopicID=559">Ng&agrave;nh g&igrave;? Trường g&igrave;? L&agrave;m g&igrave;?</a><br />&gt;&gt; <a onclick="return onLinkClick(this)" href="http://www3.tuoitre.com.vn/tuyensinh/Index.aspx?ChannelID=101">Hộp thư tư vấn tuyển sinh</a><br />&gt;&gt; <a onclick="return onLinkClick(this)" href="http://www3.tuoitre.com.vn/Tuyensinh/Index.aspx?TopicID=62">Thi tốt nghiệp THPT năm 2009</a></p>\n<p>* Năm nay em thi lại ĐH, vậy em phải nộp hồ sơ đăng k&yacute; dự thi ở đ&acirc;u? Khi n&agrave;o mới bắt đầu nộp hồ sơ đăng k&yacute; dự thi? V&agrave; khi n&agrave;o th&igrave; cuốn <em>Những điều cần biết về tuyển sinh ĐH, CĐ năm 2009</em> ph&aacute;t h&agrave;nh? <em>(Huỳnh Minh Ph&uacute;c, </em><a href="mailto:mihphuc15@..."><em>mihphuc15@...</em></a><em>) </em></p>\n<p>- Th&iacute; sinh mua hồ sơ đăng k&yacute; dự thi (ĐKDT) tại bộ phận tuyển sinh của c&aacute;c sở GD-ĐT, c&aacute;c điểm ph&aacute;t h&agrave;nh hồ sơ theo quy định của từng sở, c&aacute;c cửa h&agrave;ng văn ph&ograve;ng phẩm lớn...</p>\n<p>Học sinh đang học lớp 12 THPT, bổ t&uacute;c THPT tại trường n&agrave;o th&igrave; nộp hồ sơ v&agrave; lệ ph&iacute; ĐKDT tại trường đ&oacute;, kh&ocirc;ng nộp tại c&aacute;c điểm thu nhận hồ sơ của sở GD-ĐT. Học sinh sẽ nộp hồ sơ từ ng&agrave;y 10-3 đến 10-4-2009.</p>\n<p>Th&iacute; sinh tự do, th&iacute; sinh v&atilde;ng lai nộp hồ sơ ĐKDT tại c&aacute;c điểm thu nhận hồ sơ của sở GD-ĐT, từ ng&agrave;y 10-3 đến 10-4-2009. Sau thời hạn n&agrave;y, từ ng&agrave;y 11-4 đến 17-4-2009, th&iacute; sinh nộp hồ sơ trực tiếp tại c&aacute;c trường ĐH, CĐ c&oacute; tổ chức thi. Th&iacute; sinh nộp hồ sơ ĐKDT ở đ&acirc;u sẽ nhận giấy b&aacute;o dự thi (v&agrave; sau n&agrave;y l&agrave; giấy b&aacute;o điểm hoặc giấy b&aacute;o tr&uacute;ng tuyển) từ nơi đ&oacute;.</p>\n<p>Bộ GD-ĐT cho biết sẽ ph&aacute;t h&agrave;nh sớm cuốn <em>Những điều cần biết về tuyển sinh ĐH, CĐ hệ ch&iacute;nh quy năm 2009 </em>nhằm tạo điều kiện cho th&iacute; sinh chủ động v&agrave; c&oacute; đầy đủ th&ocirc;ng tin để khai v&agrave; nộp hồ sơ đăng k&yacute; dự thi tuyển sinh ĐH, CĐ. Theo đ&oacute;, sẽ c&ocirc;ng bố sớm trước thời hạn ĐKDT một th&aacute;ng, hoặc &iacute;t nhất l&agrave; trước hai tuần để th&iacute; sinh tham khảo, tr&aacute;nh t&igrave;nh trạng như năm 2008 th&iacute; sinh ĐKDT rồi nhưng Bộ vẫn chưa ban h&agrave;nh cuốn&nbsp;<em>Những điều cần biết</em>.</p>\n<p>Đồng thời, trước ng&agrave;y 20-2&nbsp; Bộ GD-ĐT sẽ ban h&agrave;nh quy chế tuyển sinh ĐH, CĐ v&agrave; TCCN, quy chế thi tốt nghiệp THPT v&agrave; sớm ban h&agrave;nh c&aacute;c văn bản hướng dẫn chấm thi của năm 2009.</p>\n<p>* Ng&agrave;nh hệ thống th&ocirc;ng tin kinh tế Trường ĐH Ng&acirc;n h&agrave;ng TP.HCM đ&agrave;o tạo những g&igrave;, ra trường cơ hội việc l&agrave;m c&oacute; cao kh&ocirc;ng? Cho em biết ng&agrave;nh n&agrave;y x&atilde; hội c&oacute; cần nhiều kh&ocirc;ng? <em>(</em><a href="mailto:codonlam1791@...m"><em>codonlam1791@...</em></a><em>) </em></p>\n<p>- Ng&agrave;nh hệ thống th&ocirc;ng tin kinh tế sẽ trang bị những kiến thức li&ecirc;n quan đến c&ocirc;ng nghệ m&aacute;y t&iacute;nh như cơ sở dữ liệu, kỹ thuật lập tr&igrave;nh... Ngo&agrave;i ra c&ograve;n được trang bị c&aacute;c nghiệp vụ li&ecirc;n quan hoạt động của ng&acirc;n h&agrave;ng như t&iacute;n dụng, thanh to&aacute;n quốc tế, thị trường chứng kho&aacute;n... để sinh vi&ecirc;n c&oacute; thể vận dụng c&aacute;c kiến thức về tin học v&agrave;o việc giải quyết một b&agrave;i to&aacute;n trong lĩnh vực ng&acirc;n h&agrave;ng.</p>\n<p>Sinh vi&ecirc;n tốt nghiệp ng&agrave;nh n&agrave;y c&oacute; thể l&agrave;m ở bộ phận quản l&yacute; dữ liệu c&aacute;c doanh nghiệp, cơ quan quản l&yacute; nh&agrave; nước, trung t&acirc;m tin học, ng&acirc;n h&agrave;ng; tham gia thiết kế c&agrave;i đặt c&aacute;c phần mềm t&agrave;i ch&iacute;nh kế to&aacute;n; c&aacute;c cơ quan thống k&ecirc;; ph&acirc;n t&iacute;ch th&ocirc;ng tin kinh tế; l&agrave;m c&ocirc;ng t&aacute;c giảng dạy...</p>\n<p>Ng&agrave;nh n&agrave;y chỉ mới tuyển sinh từ năm 2005 v&agrave; đến năm 2008 mới c&oacute; lượt sinh vi&ecirc;n đầu ti&ecirc;n ra trường. Tuy nhi&ecirc;n, theo dự đo&aacute;n, nhu cầu của c&aacute;c ng&acirc;n h&agrave;ng về ng&agrave;nh n&agrave;y sẽ rất lớn v&igrave; tất cả ng&agrave;nh đ&agrave;o tạo của Trường ĐH Ng&acirc;n h&agrave;ng TP.HCM đều phục vụ cho ng&agrave;nh ng&acirc;n h&agrave;ng.</p>\n<p>*&nbsp;Trường ĐH Khoa học tự nhi&ecirc;n TP.HCM c&oacute; hệ CĐ ng&agrave;nh điện tử viễn th&ocirc;ng kh&ocirc;ng? Nếu c&oacute; th&igrave; phải thi hay x&eacute;t tuyển?<em> (</em><a href="mailto:duythanh1927@..."><em>duythanh1927@...</em></a><em>) </em></p>\n<p>- Hệ CĐ của Trường ĐH Khoa học tự nhi&ecirc;n (ĐH Quốc gia TP.HCM) chỉ tuyển sinh ng&agrave;nh tin học. Hệ CĐ ng&agrave;nh tin học của trường đ&agrave;o tạo trong ba năm. Sau khi tốt nghiệp, sinh vi&ecirc;n c&oacute; thể được tuyển thẳng (nếu đạt học lực giỏi, xuất sắc của hệ CĐ) hoặc dự thi v&agrave;o hệ ho&agrave;n chỉnh ĐH. Ngo&agrave;i ra, trường đ&atilde; được tuyển sinh li&ecirc;n th&ocirc;ng ĐH từ cử nh&acirc;n CĐ tin học từ kh&oacute;a tuyển 1999 n&ecirc;n sinh vi&ecirc;n c&oacute; cơ hội học l&ecirc;n cao hơn. Thời gian đ&agrave;o tạo trong hai năm.</p>\n<p>Muốn học CĐ ng&agrave;nh điện tử viễn th&ocirc;ng, bạn c&oacute; thể học tại c&aacute;c trường sau: ĐH T&ocirc;n Đức Thắng, ĐH C&ocirc;ng nghiệp TP.HCM, ĐH Đ&agrave; Lạt, ĐH d&acirc;n lập C&ocirc;ng nghệ S&agrave;i G&ograve;n, ĐH d&acirc;n lập Kỹ thuật c&ocirc;ng nghệ TP.HCM, ĐH d&acirc;n lập Văn Hiến... Hệ CĐ của c&aacute;c trường ĐH chỉ x&eacute;t tuyển những th&iacute; sinh đ&atilde; dự thi ĐH theo đề thi chung của Bộ GD-ĐT.</p>\n<p>* Em dự định thi Trường ĐH Giao th&ocirc;ng vận tải TP.HCM ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin nhưng kh&ocirc;ng biết điểm tr&uacute;ng tuyển năm 2008 l&agrave; bao nhi&ecirc;u. Em muốn biết những th&ocirc;ng tin về ng&agrave;nh n&agrave;y? <em>(Nguyễn Ngọc Thiện, </em><a href="mailto:congtudatinh_iloveyou@..."><em>congtudatinh_iloveyou@...</em></a><em>) </em></p>\n<p>- Ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin của Trường ĐH Giao th&ocirc;ng vận tải TP.HCM ngo&agrave;i c&aacute;c m&ocirc;n học chung bắt buộc, chương tr&igrave;nh c&oacute; ba chuy&ecirc;n ng&agrave;nh m&agrave; sinh vi&ecirc;n c&oacute; thể lựa chọn l&agrave;:</p>\n<p>+ Chuy&ecirc;n ng&agrave;nh hệ thống th&ocirc;ng tin: đ&agrave;o tạo c&aacute;c kỹ sư c&oacute; khả năng x&acirc;y dựng v&agrave; quản l&yacute; c&aacute;c hệ thống th&ocirc;ng tin, thiết kế c&aacute;c cơ sở dữ liệu.</p>\n<p>+ Chuy&ecirc;n ng&agrave;nh c&ocirc;ng nghệ phần mềm: đ&agrave;o tạo c&aacute;c kỹ sư c&oacute; khả năng thiết kế v&agrave; x&acirc;y dựng c&aacute;c m&ocirc;i trường ph&aacute;t triển phần mềm cũng như c&aacute;c phần mềm phục vụ cho c&aacute;c nhu cầu c&ocirc;ng nghệ th&ocirc;ng tin trong mọi lĩnh vực của đời sống x&atilde; hội.</p>\n<p>+ Chuy&ecirc;n ng&agrave;nh mạng m&aacute;y t&iacute;nh v&agrave; viễn th&ocirc;ng: đ&agrave;o tạo c&aacute;c kỹ sư c&oacute; khả năng thiết kế, lắp đặt v&agrave; quản trị c&aacute;c hệ thống mạng m&aacute;y t&iacute;nh v&agrave; viễn th&ocirc;ng, xử l&yacute; việc truyền số liệu, thiết kế v&agrave; x&acirc;y dựng c&aacute;c ứng dụng tr&ecirc;n mạng.</p>\n<p>Sau khi ra trường, kỹ sư ng&agrave;nh n&agrave;y c&oacute; thể đảm nhận c&aacute;c c&ocirc;ng việc x&acirc;y dựng v&agrave; quản l&yacute; c&aacute;c hệ thống xử l&yacute; th&ocirc;ng tin, thiết kế phần mềm ứng dụng tại c&aacute;c c&ocirc;ng ty trong c&aacute;c lĩnh vực kh&aacute;c nhau; l&agrave;m việc tại c&aacute;c cơ quan h&agrave;nh ch&iacute;nh, c&aacute;c doanh nghiệp li&ecirc;n quan đến c&ocirc;ng nghệ phần mềm, c&aacute;c c&ocirc;ng ty viễn th&ocirc;ng, c&aacute;c viện nghi&ecirc;n cứu c&aacute;c trường ĐH, CĐ, dạy nghề...</p>\n<p>Điểm chuẩn ng&agrave;nh n&agrave;y năm 2008 v&agrave; 2006 l&agrave; 16; năm 2007 l&agrave; 18,5; năm 2005 l&agrave; 17,5...</p>\n<p>\n<table border="0" cellspacing="5" cellpadding="4" width="70%" align="center" bgcolor="#cbcefd" bordercolor="#ecf2fe">\n<tbody>\n<tr>\n<td valign="middle" bgcolor="#cfe6f9">\n<p>C&aacute;c bậc phụ huynh v&agrave; c&aacute;c bạn học sinh&nbsp;c&oacute; những y&ecirc;u cầu thắc mắc về tuyển sinh&nbsp;ĐH-CĐ-TCCN 2009, thắc mắc c&aacute;c ng&agrave;nh học, quy chế... c&oacute; thể gửi email đến <em>Tuổi Trẻ Online</em> tại địa chỉ: <a href="mailto:tuyensinh@tuoitre.net.vn">tuyensinh@tuoitre.net.vn</a>.</p>\n<p><em>Tuổi Trẻ Online </em>sẽ trả lời thắc mắc&nbsp;của bạn đọc trong thời gian sớm nhất. Để ch&iacute;nh x&aacute;c về nội dung, vấn đề cần hỏi,&nbsp;bạn đọc vui l&ograve;ng g&otilde; chữ c&oacute; dấu (font chữ Unicode).</p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>\n<p style="text-align: right;">QUỐC DŨNG<br />Tuoitreonline</p>', '', '2009-02-08 10:16:22'),
(15, 'Đề nghị kỷ luật 4 cô giáo cho trẻ uống thuốc kích thích', '<p>&nbsp;- Th&ocirc;ng tin từ BGH trường mầm non B&ocirc;ng Sen cho biết, vừa c&oacute; văn bản đề nghị Ph&ograve;ng GD-ĐT TP Mỹ Tho ra quyết định kỷ luật 4 c&ocirc; gi&aacute;o cho trẻ uống thuốc k&iacute;ch th&iacute;ch xảy ra cuối th&aacute;ng 10/2008.<br /><strong>&nbsp;</strong><span id="ctl02_ltrContent" class="bodyContent">\n<p class="MsoNormal" style="margin: 0in 0in 0pt;">BCH trường đề nghị mức kỷ luật h&igrave;nh thức khiển tr&aacute;ch đối với c&ocirc; gi&aacute;o Nguyễn Thị Kim Hồng v&agrave; c&ocirc; Nguyễn Ngọc Nga. Đề nghị h&igrave;nh thức kỷ luật cảnh c&aacute;o đối với c&ocirc; Nguyễn Ngọc Điệp v&agrave; c&ocirc; Nguyễn Thị Kim Loan.</p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;">&nbsp;</p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;">Trước đ&oacute;, 4 c&ocirc; gi&aacute;o tr&ecirc;n bị nhiều phụ huynh của c&aacute;c trẻ học lớp Họa Mi 1 ở trường n&agrave;y phản &aacute;nh đ&atilde; đ&aacute;nh v&agrave; cho trẻ uống thuốc periton - loại thuốc k&iacute;ch th&iacute;ch trẻ ngủ nhiều v&agrave; mau đ&oacute;i bụng.</p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;">&nbsp;</p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;">Sau khi sự việc được ph&aacute;t hiện, BGH trường cũng đ&atilde; ra quyết định tạm ngưng việc đứng lớp của c&aacute;c c&ocirc; gi&aacute;o để tiến h&agrave;nh l&agrave;m r&otilde; vụ việc.</p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;">&nbsp;</p>\n</span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt; text-align: right;" align="right"><span style="font-weight: bold;">Huỳnh Hải<br />(D&acirc;n tr&iacute;)</span></p>', '', '2009-02-08 10:19:19'),
(16, '“Xin đừng bắt chúng con bỏ học” ', '<p>- Người chồng kh&ocirc;ng may gặp nạn ra đi vĩnh viễn, bỏ lại người vợ bệnh tật v&agrave; những đứa con đang tuổi ăn tuổi học. Giờ đ&acirc;y những đứa con kh&ocirc;ng cha đang đứng trước nguy cơ phải từ bỏ ước mơ c&ograve;n giang dở.</p>\n<p>Anh Đặng Trọng Kỳ v&agrave; chị Do&atilde;n Thị Điểm cưới nhau từ năm 1985, đ&atilde; c&oacute; với nhau được 3 người con l&agrave; Đặng Thị Thuỷ&nbsp; (19 tuổi), Đặng Thị Kim Dung (17 tuổi) v&agrave; Đặng Trọng Tốn (15 tuổi). Niềm hạnh ph&uacute;c lớn nhất của anh chị l&agrave; cả ba đứa con năm n&agrave;o cũng đạt danh hiệu học sinh ti&ecirc;n tiến suất sắc của trường v&agrave; gi&agrave;nh nhiều giải của c&aacute;c cuộc thi từ cấp huyện cho đến cấp quốc gia.</p>\n<p>&nbsp;</p>\n<p>Năm học 2008 - 2009 em Đặng Thị Thuỷ đ&atilde; thi đậu thủ khoa khối C với 24,5 điểm v&agrave;o trường Học viện cảnh s&aacute;t. Em Đặng Thị Kim Dung thi đậu v&agrave; đang học lớp 11C3 Trường chuy&ecirc;n Phan Bội Ch&acirc;u v&agrave; l&agrave; th&agrave;nh vi&ecirc;n đội dự tuyển quốc gia m&ocirc;n Địa L&yacute; của trường. C&ograve;n cậu em &uacute;t Đặng Trọng Tốn hiện đang l&agrave; học sinh lớp 9A trường THCS năng khiếu Bạch Li&ecirc;u, trường điểm của huyện.</p>\n<p>&nbsp; <img src="http://images7.dantri.com.vn/Uploaded/nguyenduy/2009/02/xindung050209-1.JPG" alt="" align="center" /><br />Hai mẹ con đang đưa những chồng giấy khen ra cho ch&uacute;ng t&ocirc;i xem</p>\n<p>&nbsp;</p>\n<p>Những ng&agrave;y tết, trong khi hầu hết c&aacute;c gia đ&igrave;nh đang sum vầy vui xu&acirc;n đ&oacute;n tết, th&igrave; trong căn nh&agrave; của chị Do&atilde;n Thị Điểm ở x&oacute;m 6, x&atilde; Long Th&agrave;nh, huyện Y&ecirc;n Th&agrave;nh (Nghệ An) c&ograve;n r&ecirc;n rỉ tiếng kh&oacute;c than của người vợ mất chồng v&agrave; những đứa con m&atilde;i m&atilde;i kh&ocirc;ng c&ograve;n bố.</p>\n<p>&nbsp;</p>\n<p>Căn nh&agrave; hai gian giờ đ&acirc;y như vắng lặng, nhuốm một m&agrave;u tang t&oacute;c. Người phụ nữ với nước da xanh như t&agrave;u l&aacute; chuối, đầu c&ograve;n ch&iacute;t v&agrave;nh khăn trắng, mắt đỏ hoe, đờ đẫn nh&igrave;n qua khe cửa như người mất hồn.</p>\n<p>&nbsp;</p>\n<p>Gia đ&igrave;nh c&oacute; 5 s&agrave;o ruộng, nhưng v&igrave; nu&ocirc;i c&aacute;c con ăn học n&ecirc;n cuộc sống quanh năm t&uacute;ng thiếu phải vay mượn ng&acirc;n h&agrave;ng v&agrave; b&agrave; con lối x&oacute;m. Trong một lần kh&ocirc;ng may gặp tai nạn, anh Kỳ ra đi vĩnh viễn. Tất cả g&aacute;nh nặng gia đ&igrave;nh đ&egrave; l&ecirc;n vai người vợ đang l&acirc;m trọng bệnh. &nbsp; Chị Điểm vốn mang trong người căn bệnh Ba dơ đ&ocirc;, anh Kỳ ra đi chưa được bao l&acirc;u th&igrave; căn bệnh của chị t&aacute;i ph&aacute;t phải ra H&agrave; Nội chữa trị, nhưng v&igrave; kh&ocirc;ng đủ tiền n&ecirc;n phải chuyển về bệnh viện Ba Lan để mổ lấy khối u ra. Trước đ&acirc;y c&ograve;n khoẻ, ngo&agrave;i c&ocirc;ng việc đồng &aacute;ng chị c&ograve;n thả tr&uacute;m kiếm th&ecirc;m con t&ocirc;m, con c&aacute; để cải thiện bữa ăn gia đ&igrave;nh v&agrave; c&oacute; th&ecirc;m đ&ocirc;i đồng gửi c&aacute;c con ăn học. Nhưng&nbsp;giờ đ&acirc;y, chị kh&ocirc;ng c&ograve;n l&agrave;m được&nbsp;việc nặng&nbsp;m&agrave; mỗi th&aacute;ng c&ograve;n tốn hơn 500 ng&agrave;n tiền thuốc thang. &nbsp;</p>\n<p><img src="http://images7.dantri.com.vn/Uploaded/nguyenduy/2009/02/xindung050209-2.JPG" alt="" width="400" align="center" /><br />Chị Điểm v&agrave; ch&aacute;u Tốn trước căn nh&agrave; nhỏ</p>\n<p>&nbsp;</p>\n<p>Tiền l&atilde;i h&agrave;ng th&aacute;ng từ số nợ ng&acirc;n h&agrave;ng v&agrave; nợ ngo&agrave;i cứ dồn dập đến khiến chị kh&ocirc;ng c&ograve;n biết phải xoay xở thế n&agrave;o. Từ ng&agrave;y bố mất, mẹ l&acirc;m bệnh, nợ nần của gia đ&igrave;nh th&ecirc;m chồng chất, khiến c&aacute;c em Thuỷ, Dung v&agrave; Tốn rơi v&agrave;o t&igrave;nh trạng hoảng loạn. Thương con nhưng m&igrave;nh mang bệnh, cuộc sống gia đ&igrave;nh chật vật, chị đ&atilde; nuốt nước mắt khuy&ecirc;n c&aacute;c con bỏ học. Nhưng c&aacute;c em đ&atilde; van xin mẹ: "d&ugrave; nh&agrave; con ăn g&igrave; cũng được nhưng đừng bắt nh&agrave; con bỏ học!". Ng&agrave;y c&aacute;c em l&ecirc;n đường, người mẹ chỉ biết rơi nước mắt bảo c&aacute;c con thắp n&eacute;n hương xin bố rồi lấy số tiền m&agrave; b&agrave; con đến thắp hương để l&agrave;m lộ ph&iacute; đi đường. &nbsp;</p>\n<p>&nbsp;</p>\n<p>Chị Điểm nh&igrave;n l&ecirc;n b&agrave;n thờ chồng c&ograve;n nghi ng&uacute;t kh&oacute;i hương rưng rưng nước mắt: "tui kh&ocirc;ng biết sống chết thế n&agrave;o, kh&ocirc;ng c&ograve;n tr&ocirc;ng mong g&igrave; hơn, chỉ mong sao cho c&aacute;c con được ăn học đến nơi đến chốn, nhiều h&ocirc;m đ&oacute;i tụt rọt (ruột)&nbsp;đi ch&uacute; &agrave;,&nbsp;thương c&aacute;c con sống xa nh&agrave; m&agrave; kh&ocirc;ng c&oacute; tiền để gửi cho c&aacute;c ch&aacute;u".</p>\n<p>&nbsp;</p>\n<p>Cậu con trai &uacute;t thấy mẹ kh&oacute;c cũng &ocirc;m chầm lấy mẹ kh&oacute;c theo. Trong căn nh&agrave; vốn lạnh lẽo u buồn lại c&agrave;ng th&ecirc;m th&ecirc; thiết hơn. Ng&agrave;y giỗ bố đ&atilde; đến gần, những đứa con của chị chỉ biết kh&oacute;c thương gia đ&igrave;nh ở nơi xa, kh&ocirc;ng c&oacute; tiền về thắp cho bố d&ugrave; chỉ một n&eacute;n nhang.</p>\n<p>&nbsp;</p>\n<p align="right">Nguyễn Duy - Duy Tuy&ecirc;n - Nguyễn Đ&igrave;nh<br />(D&acirc;n tr&iacute;)</p>', '', '2009-02-08 10:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `process_selection`
--

CREATE TABLE IF NOT EXISTS `process_selection` (
  `id` bigint(20) NOT NULL auto_increment,
  `description` mediumtext NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `process_selection`
--

INSERT INTO `process_selection` (`id`, `description`, `createdate`) VALUES
(1, '<p>rrrrrrrrrrrrrrrrrrrrrrrr</p>', '2009-02-04 20:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
(1, 'Tp.Hồ Chí Minh'),
(2, 'An Giang'),
(3, 'Bắc Giang'),
(4, 'Bà Rịa'),
(5, 'Bắc Kạn'),
(6, 'Bạc Liêu'),
(7, 'Bắc Ninh'),
(8, 'Bến Tre'),
(9, 'Bình Định'),
(10, 'Bình Dương'),
(11, 'Bình Phước'),
(12, 'Bình Thuận'),
(13, 'Cà Mau'),
(14, 'Cần Thơ'),
(15, 'Cao Bằng'),
(16, 'Đà Nẵng'),
(17, 'Đăk Lăk'),
(18, 'Đồng Nai'),
(19, 'Đồng Tháp'),
(20, 'Gia Lai'),
(21, 'Hà Giang'),
(22, 'Hà Nam'),
(23, 'Hà Nội'),
(24, 'Hà Tây'),
(25, 'Hà Tĩnh'),
(26, 'Hải Dương'),
(27, 'Hậu Giang'),
(28, 'Hòa Bình'),
(29, 'Hưng Yên'),
(30, 'Khánh Hòa'),
(31, 'Kiên Giang'),
(32, 'Kon Tum'),
(33, 'Lâm Đồng'),
(34, 'Lạng Sơn'),
(35, 'Lào Cai'),
(36, 'Long An'),
(37, 'Nam Định'),
(38, 'Nghệ An'),
(39, 'Ninh Bình'),
(40, 'Ninh Thuận'),
(41, 'Phú Thọ'),
(42, 'Phú Yên'),
(43, 'Quảng Bình'),
(44, 'Quảng Nam'),
(45, 'Quảng Ngãi'),
(46, 'Quảng Ninh'),
(47, 'Quảng Trị'),
(48, 'Sóc Trăng'),
(49, 'Sơn La'),
(50, 'Tây Ninh'),
(51, 'Thái Bình'),
(52, 'Thái Nguyên'),
(53, 'Thanh Hoá'),
(54, 'Thừa Thiên Huế'),
(55, 'Tiền Giang'),
(56, 'Hải Phòng'),
(57, 'Trà Vinh'),
(58, 'Tuyên Quang'),
(59, 'Vĩnh Long'),
(60, 'Vĩnh Phúc'),
(61, 'Yên Bái'),
(62, 'Điện Biên'),
(63, 'Đắk Nông');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`) VALUES
(1, '* Các Trường Khác'),
(2, 'ĐH An Ninh'),
(3, 'ĐH Bách Khoa'),
(4, 'ĐH Công Nghiệp'),
(5, 'ĐH GTVT'),
(6, 'ĐH KH - TN'),
(7, 'ĐH KHXH & NV'),
(8, 'ĐH Kiến Trúc'),
(9, 'ĐH Kinh Tế'),
(10, 'ĐH Luật'),
(11, 'ĐH Marketing'),
(12, 'ĐH Mở'),
(13, 'ĐH Nông Lâm'),
(14, 'ĐH Ngân Hàng'),
(15, 'ĐH Ngoại ngữ & Tin học'),
(16, 'ĐH Ngoại Thương'),
(17, 'ĐH Rmit'),
(18, 'ĐH Sài Gòn'),
(19, 'ĐH Sư Phạm'),
(20, 'ĐH SP Kỷ Thuật'),
(21, 'ĐH TDTT'),
(22, 'ĐH Thủy Lợi'),
(23, 'ĐH Y Dược'),
(24, 'ĐHBC Hoa Sen'),
(25, 'ĐHBC Tôn Đức Thắng'),
(26, 'ĐHDL Hồng Bàng'),
(27, 'ĐHDL Hùng Vương'),
(28, 'ĐHDL KT Công Nghệ'),
(29, 'ĐHDL Văn Hiến'),
(30, 'ĐHDL Văn Lang'),
(31, 'CĐ Công nghệ TT'),
(32, 'CĐ CN Thực Phẩm'),
(33, 'CĐ Hải Quan'),
(34, 'CĐ Kỷ Thuật Cao Thắng'),
(35, 'CĐ Kinh Tế Đối Ngoại'),
(36, 'CĐ Kinh tế KTCN II'),
(37, 'CĐ Mẫu Giáo TW'),
(38, 'CĐ Sư Phạm'),
(39, 'CĐ Văn Hoá'),
(40, 'HV Hành Chính'),
(41, 'Nhạc Viện');

-- --------------------------------------------------------

--
-- Table structure for table `secret_find_teacher`
--

CREATE TABLE IF NOT EXISTS `secret_find_teacher` (
  `id` bigint(20) NOT NULL auto_increment,
  `description` mediumtext NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `secret_find_teacher`
--

INSERT INTO `secret_find_teacher` (`id`, `description`, `createdate`) VALUES
(1, '<p>\n<table class="MsoNormalTable" style="width: 100%; mso-cellspacing: 0in; mso-padding-alt: 0in 0in 0in 0in;" border="0" cellspacing="0" cellpadding="0" width="100%">\n<tbody>\n<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes;">\n<td style="width: 86%; background-color: transparent; border: #ece9d8; padding: 0in;" width="86%">\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><strong><span style="font-size: 9pt; color: #282020; font-family: Verdana;">B&iacute; quyết t&igrave;m gia sư </span></strong><span style="font-size: 9pt; color: #282020; font-family: Verdana;"></span></p>\n</td>\n</tr>\n<tr style="mso-yfti-irow: 1; mso-yfti-lastrow: yes;">\n<td style="background-color: transparent; border: #ece9d8; padding: 0in;" colspan="2">\n<table class="MsoNormalTable" style="width: 100%; mso-cellspacing: 0in; mso-padding-alt: 0in 0in 0in 0in;" border="0" cellspacing="0" cellpadding="0" width="100%">\n<tbody>\n<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes;">\n<td style="background-color: transparent; border: #ece9d8; padding: 0in;">\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 9pt; color: #282020; font-family: Verdana;">&nbsp;</span></p>\n</td>\n</tr>\n<tr style="height: 20.25pt; mso-yfti-irow: 1;">\n<td style="height: 20.25pt; background-color: transparent; border: #ece9d8; padding: 0in;">\n<p><span style="font-size: 9pt; color: #282020; font-family: Verdana;">&nbsp; Bạn lu&ocirc;n mong con nh&agrave; m&igrave;nh giỏi giang nhưng ch&aacute;u dường như rất vất vả với chuyện học ở trường. Bạn nghĩ c&oacute; lẽ n&ecirc;n t&igrave;m cho con một người gia sư tốt, những lời khuy&ecirc;n sau của chuy&ecirc;n gia sẽ hữu &iacute;ch với bạn. </span></p>\n<h4 style="margin: auto 0in;"><strong><span style="font-size: 10pt; color: #282020; font-family: Arial; mso-bidi-font-weight: normal;">1. X&aacute;c định r&otilde; nhu cầu</span></strong><span style="color: #282020; font-family: Verdana;"></span></h4>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">V&igrave; sao bạn nghĩ rằng con m&igrave;nh cần học gia sư? Ch&aacute;u c&oacute; kh&oacute; khăn trong việc học m&ocirc;n n&agrave;o? Ch&aacute;u v&ocirc; c&ugrave;ng vất vả khi l&agrave;m b&agrave;i tập về nh&agrave;? Một kỳ thi cực kỳ quan trọng đang tới gần? Mối quan hệ giữa bạn v&agrave; con c&oacute; tốt kh&ocirc;ng? Con bạn kh&ocirc;ng c&oacute; vấn đề g&igrave; về ph&aacute;t triển tr&iacute; tuệ chứ? </span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">H&atilde;y r&agrave; so&aacute;t lại v&agrave; suy nghĩ thật kỹ xem liệu con c&oacute; cần một sự gi&uacute;p đỡ đặc biệt n&agrave;o m&agrave; thầy c&ocirc; ở trường kh&ocirc;ng thể đ&aacute;p ứng. Theo bạn, con m&igrave;nh kh&ocirc;ng theo kịp bạn b&egrave; trong lớp c&oacute; phải v&igrave; ch&aacute;u ốm, hay v&igrave; mới chuyển trường?... H&atilde;y nh&igrave;n nhận r&otilde; mục ti&ecirc;u để t&igrave;m cho con người gia sư ph&ugrave; hợp nhất.<span style="mso-spacerun: yes;">&nbsp; </span></span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><strong><span style="font-size: 10pt; color: #282020; font-family: Arial; mso-bidi-font-weight: normal;">2. Trao đổi với gi&aacute;o vi&ecirc;n của con</span></strong><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Mục đ&iacute;ch cuối c&ugrave;ng của bạn l&agrave; gi&uacute;p con học h&agrave;nh tiến bộ, bởi thế h&atilde;y li&ecirc;n lạc với thầy c&ocirc; của con tr&ecirc;n lớp để hỏi thăm những th&ocirc;ng tin cần thiết như: Theo thầy/c&ocirc;, ch&aacute;u c&oacute; cần học gia sư kh&ocirc;ng? Ch&aacute;u đặc biệt yếu k&eacute;m v&agrave; cần được k&egrave;m cặp ri&ecirc;ng m&ocirc;n n&agrave;o? C&oacute; cần t&igrave;m một gia sư c&oacute; kinh nghiệm giảng dạy kh&ocirc;ng? </span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Nếu được, h&atilde;y nhờ thầy c&ocirc; giới thiệu gia sư gi&uacute;p, hỏi họ về lịch thi, kiểm tra để gia sư của con bạn c&oacute; kế hoạch cụ thể cho việc &ocirc;n luyện, bồi dưỡng kiến thức.</span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><strong><span style="font-size: 10pt; color: #282020; font-family: Arial; mso-bidi-font-weight: normal;">3. Phẩm chất gia sư</span></strong><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Nh&igrave;n chung, người gia sư tốt nhất l&agrave; người ph&ugrave; hợp với c&aacute;ch học của con bạn. C&oacute; thể xem x&eacute;t đến 3 yếu tố sau:</span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">- Lịch học: Lịch học n&agrave;o tốt nhất cho con? Tuần 1 hay 2 buổi? Mỗi buổi k&eacute;o d&agrave;i bao l&acirc;u? Con bạn sẽ học &ldquo;một thầy một tr&ograve;&rdquo; hay học nh&oacute;m? Con sẽ l&agrave;m b&agrave;i tập về nh&agrave; l&uacute;c n&agrave;o, trong bao l&acirc;u m&agrave; kh&ocirc;ng bị qu&aacute; tải?</span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">- T&iacute;nh c&aacute;ch: Con bạn sẽ dễ tiếp thu, chịu kh&oacute; lĩnh hội trước một người như thế n&agrave;o? Gia sư cần l&agrave; người c&oacute; thể hợp với con của bạn.</span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">- Phong c&aacute;ch học: Con bạn dễ tiếp thu b&agrave;i vở qua c&aacute;ch học n&agrave;o: Nghe giảng &ldquo;chay&rdquo;? Học với h&igrave;nh ảnh minh họa? Học th&ocirc;ng qua c&aacute;c hoạt động vui chơi? (Nếu bạn kh&ocirc;ng nắm r&otilde;, h&atilde;y hỏi thầy/c&ocirc; gi&aacute;o của con). </span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Nếu việc học với con quả thực rất vất vả th&igrave; c&aacute;ch dạy truyền thống sẽ kh&ocirc;ng mấy t&aacute;c dụng. Khi ấy, bạn cần một gia sư s&aacute;ng tạo hơn, người biết c&aacute;ch gi&uacute;p con lĩnh hội kiến thức một c&aacute;ch hiệu quả nhất.</span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><strong><span style="font-size: 10pt; color: #282020; font-family: Arial; mso-bidi-font-weight: normal;">4. L&ecirc;n kế hoạch học tập</span></strong><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Khi đ&atilde; t&igrave;m được gia sư cho con, h&atilde;y ngồi lại c&ugrave;ng b&agrave;n kế hoạch gi&uacute;p con tiến bộ. V&iacute; dụ, c&oacute; thể hỏi người gia sư xem anh/c&ocirc; ấy dự định tiến h&agrave;nh những bước cụ thể n&agrave;o trong kế hoạch gi&uacute;p con của bạn? Mức độ tiến bộ của con sẽ được đ&aacute;nh gi&aacute; bằng c&aacute;ch n&agrave;o? C&aacute;c buổi học sẽ đề cập đến kiến thức, c&aacute;c b&agrave;i tập, b&agrave;i kiểm tra tr&ecirc;n lớp chứ? </span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">H&atilde;y r&otilde; r&agrave;ng ngay từ đầu về vấn đề học ph&iacute; cũng như nguyện vọng của gia sư khi hợp t&aacute;c c&ugrave;ng gia đ&igrave;nh bạn. Sau c&ugrave;ng, &iacute;t nhất tuần 1 lần, h&atilde;y để &yacute; xem việc học của con v&agrave; gia sư đang tiến triển đến đ&acirc;u. </span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;"><span style="mso-spacerun: yes;">&nbsp;</span></span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><strong><span style="font-size: 10pt; color: #282020; font-family: Arial; mso-bidi-font-weight: normal;">5.</span></strong><span style="font-size: 10pt; color: #282020; font-family: Arial;"> <strong><span style="font-family: Arial; mso-bidi-font-weight: normal;">Ưu ti&ecirc;n</span></strong></span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Con bạn cần hiểu rằng học gia sư cũng rất quan trọng, bởi thế cần c&oacute; sự ưu ti&ecirc;n. H&atilde;y xếp lịch học cho con v&agrave;o khoảng thời gian con c&oacute; thể tập trung tốt nhất.</span><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><strong><span style="font-size: 10pt; color: #282020; font-family: Arial; mso-bidi-font-weight: normal;">6. H&atilde;y thực tế</span></strong><span style="color: #282020;"></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="color: #282020;"><span style="font-size: small;"><span style="font-family: Times New Roman;">&nbsp;</span></span></span></p>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 10pt; color: #282020; font-family: Arial;">Gia sư kh&ocirc;ng phải một ảo thuật gia t&agrave;i th&aacute;nh, qu&aacute; tr&igrave;nh học của con bạn cần thời gian mới thấy r&otilde; sự tiến bộ. Bởi thế, h&atilde;y tỉnh t&aacute;o trước những kỳ vọng, đừng qu&ecirc;n cổ vũ con: &ldquo;Mẹ biết con học vất vả, nhưng đ&acirc;y l&agrave; kết quả của con tuần trước, h&atilde;y xem, tuần n&agrave;y con c&oacute; tiến bộ rồi&rdquo;&hellip;<span style="mso-spacerun: yes;">&nbsp;&nbsp; </span></span><span style="color: #282020;"></span></p>\n</td>\n</tr>\n<tr style="mso-yfti-irow: 2; mso-yfti-lastrow: yes;">\n<td style="background-color: transparent; border: #ece9d8; padding: 0in;">\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 9pt; color: #282020; font-family: Verdana;">&nbsp;</span></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p class="MsoNormal" style="margin: 0in 0in 0pt;"><span style="font-size: 9pt; color: #282020; font-family: Verdana;"></span></p>\n</td>\n</tr>\n</tbody>\n</table>\n</p>', '2009-02-09 09:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `secret_studing`
--

CREATE TABLE IF NOT EXISTS `secret_studing` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `secret_studing`
--

INSERT INTO `secret_studing` (`id`, `title`, `description`, `image`, `createdate`) VALUES
(3, 'bài giải', '<p><strong><span style="color: #040462;">b&agrave;i giải</span></strong></p>', '', '2009-02-08 10:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_online`
--

CREATE TABLE IF NOT EXISTS `teacher_online` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_user` bigint(20) NOT NULL,
  `activation` int(2) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher_online`
--

INSERT INTO `teacher_online` (`id`, `id_user`, `activation`, `createdate`) VALUES
(1, 8, 1, '2009-02-05 11:25:28'),
(2, 7, 1, '2009-02-07 11:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_pure`
--

CREATE TABLE IF NOT EXISTS `teacher_pure` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_user` bigint(20) NOT NULL,
  `activation` int(2) NOT NULL COMMENT 'unblock=0,block=1',
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `teacher_pure`
--

INSERT INTO `teacher_pure` (`id`, `id_user`, `activation`, `createdate`) VALUES
(13, 6, 1, '2009-02-05 10:55:36'),
(14, 5, 1, '2009-02-05 10:55:37'),
(15, 4, 1, '2009-02-05 10:55:38'),
(16, 3, 1, '2009-02-05 10:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_quality`
--

CREATE TABLE IF NOT EXISTS `teacher_quality` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_user` bigint(20) NOT NULL,
  `activation` int(2) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher_quality`
--

INSERT INTO `teacher_quality` (`id`, `id_user`, `activation`, `createdate`) VALUES
(2, 8, 1, '2009-02-05 11:23:39'),
(3, 6, 1, '2009-02-05 11:23:41'),
(5, 5, 1, '2009-02-05 11:23:43'),
(6, 7, 1, '2009-02-05 11:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `gender` int(1) NOT NULL COMMENT 'Nam=0,Nu=1',
  `birthday` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `registerdate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `activation` int(1) NOT NULL COMMENT 'unblock=0,block=1',
  `permission` int(1) NOT NULL COMMENT 'user=0,admin=1,administrator=2',
  `id_provinces` bigint(20) NOT NULL,
  `id_districts` bigint(20) NOT NULL,
  `placeofbirth` bigint(20) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `mobilephone` varchar(30) NOT NULL,
  `id_diploma` bigint(20) NOT NULL,
  `id_school` bigint(20) NOT NULL,
  `specialized` varchar(300) NOT NULL,
  `graduate` date NOT NULL,
  `type` int(1) NOT NULL COMMENT 'sinhvien=0,daTN=1,giaovien=2',
  `id_level_from` bigint(20) NOT NULL COMMENT 'Nhan day tu',
  `id_level_to` bigint(20) NOT NULL COMMENT 'Nhan day den',
  `subjects` varchar(300) NOT NULL,
  `area_teach` varchar(300) NOT NULL,
  `time_teach` varchar(300) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `lock` int(1) NOT NULL COMMENT 'mo khoa=0;khoa=1',
  `typical` int(1) NOT NULL COMMENT 'tieu bieu=1',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `birthday`, `address`, `email`, `password`, `avatar`, `registerdate`, `editdate`, `activation`, `permission`, `id_provinces`, `id_districts`, `placeofbirth`, `telephone`, `mobilephone`, `id_diploma`, `id_school`, `specialized`, `graduate`, `type`, `id_level_from`, `id_level_to`, `subjects`, `area_teach`, `time_teach`, `salary`, `description`, `lock`, `typical`) VALUES
(1, 'Admin', 0, '2009-01-08', 'Admin', 'admin@supham.com.vn', '21232f297a57a5a743894a0e4a801fc3', '', '2009-01-08 00:00:00', '2009-01-08 00:00:00', 1, 1, 1, 1, 1, '', '', 3, 1, '', '2009-01-08', 0, 0, 0, 'Admin', 'Admin', 'Admin', 'Admin', '', 1, 0),
(3, 'Trần Lê Nam', 0, '1990-01-13', 'Dong nai', 'b@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:28:49', '2009-01-13 08:28:49', 1, 0, 1, 1, 18, '', '', 3, 3, ' Kỹ thuật chế tạo', '2013-01-13', 0, 9, 13, 'Toán,Lý,Hóa(đặc biệt là môn Toán)', 'Q.Tân Bình,Q,10', 'Thỏa thuận', '0(VNĐ)', 'Với những kinh nghiệm vừa trải qua sau kỳ thi tuyển sinh ĐH( với số điểm 25.5).Tôi tin mình sẽ giúp các bạn học sinh có một kiến thức vững vàng trên con đường học vấn của mình.(ĐT:0907082919)', 1, 0),
(4, 'MAI HOA', 1, '1990-01-13', 'Can Tho', 'c@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:30:32', '2009-01-13 08:30:32', 1, 0, 1, 1, 14, '', '', 3, 3, 'hoa', '2007-01-13', 2, 8, 10, 'Toán,Lý,Hóa(đặc biệt là môn Toán)', 'q10,q11,tb', ' toi', ' 600,000(VNĐ)', 'dang can lop day', 1, 0),
(5, 'Hà Hiếu Dũng', 0, '1989-01-13', 'Can Tho', 'd@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:32:08', '2009-01-13 08:32:08', 1, 0, 1, 1, 14, '', '', 3, 3, 'Tài chính', '2007-01-13', 2, 4, 9, 'Toán,Lý,Hóa', 'Q5, Q10, Q11', 'chiều tối', '0(VNĐ', 'dang can lop day', 1, 0),
(6, 'Thái Thị Thanh Thủy', 1, '1989-01-13', 'Can Tho', 'e@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:33:30', '2009-01-13 08:33:30', 1, 0, 1, 1, 14, '', '', 3, 1, 'Quảng trị kinh doanh', '2009-01-13', 0, 1, 5, 'Tất cả các môn', 'Quận 8, Quận 5, Quận 6', 'Các tối', '0(VNĐ', 'dang can lop day', 1, 0),
(7, 'Trịnh Văn Khang', 0, '1989-01-13', 'Can Tho', 'f@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:35:32', '2009-01-13 08:35:32', 1, 0, 1, 1, 14, '', '', 3, 1, 'KTHK', '2009-01-13', 0, 3, 6, 'Toán, lí, hoá, tin học (lập trinh Pascal...)', 'Đống Đa, Hai Bà Trưng, Ba Đình, Thanh Xuân, Hoàng Mai', '18h-21h', '40,000(VNĐ)', 'Điện thoại : 01698372812', 1, 0),
(8, 'nguyen anh tai', 0, '2009-01-21', '522 luy ban bich.p hoa thanh.q tan phu', 'tainguyen1986@yahoo.com', '8681b665cf136d69db191bb1a57d722f', '', '2009-01-21 11:00:29', '2009-01-21 11:00:29', 1, 0, 1, 22, 45, '', '01688744549', 3, 3, 'cong nghe Polimer', '2009-01-21', 0, 8, 12, 'toan-ly-hoa', 'q.tan phu', '6h30-8h30', '800000-1000000', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user02`
--

CREATE TABLE IF NOT EXISTS `user02` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `gender` int(1) NOT NULL COMMENT 'Nam=0,Nu=1',
  `birthday` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `registerdate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `activation` int(1) NOT NULL COMMENT 'unblock=0,block=1',
  `permission` int(1) NOT NULL COMMENT 'user=0,admin=1,administrator=2',
  `id_provinces` bigint(20) NOT NULL,
  `id_districts` bigint(20) NOT NULL,
  `placeofbirth` bigint(20) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `mobilephone` varchar(30) NOT NULL,
  `id_diploma` bigint(20) NOT NULL,
  `id_school` bigint(20) NOT NULL,
  `specialized` varchar(300) NOT NULL,
  `graduate` date NOT NULL,
  `type` int(1) NOT NULL COMMENT 'sinhvien=0,daTN=1,giaovien=2',
  `id_level_from` bigint(20) NOT NULL COMMENT 'Nhan day tu',
  `id_level_to` bigint(20) NOT NULL COMMENT 'Nhan day den',
  `subjects` varchar(300) NOT NULL,
  `area_teach` varchar(300) NOT NULL,
  `time_teach` varchar(300) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `lock` int(1) NOT NULL COMMENT 'mo khoa=0;khoa=1',
  `typical` int(1) NOT NULL COMMENT 'tieu bieu=1',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user02`
--

INSERT INTO `user02` (`id`, `name`, `gender`, `birthday`, `address`, `email`, `password`, `avatar`, `registerdate`, `editdate`, `activation`, `permission`, `id_provinces`, `id_districts`, `placeofbirth`, `telephone`, `mobilephone`, `id_diploma`, `id_school`, `specialized`, `graduate`, `type`, `id_level_from`, `id_level_to`, `subjects`, `area_teach`, `time_teach`, `salary`, `description`, `lock`, `typical`) VALUES
(3, 'Trần Lê Nam', 0, '1990-01-13', 'Dong nai', 'b@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:28:49', '2009-01-13 08:28:49', 1, 0, 1, 1, 18, '', '', 3, 3, ' Kỹ thuật chế tạo', '2013-01-13', 0, 9, 13, 'Toán,Lý,Hóa(đặc biệt là môn Toán)', 'Q.Tân Bình,Q,10', 'Thỏa thuận', '0(VNĐ)', 'Với những kinh nghiệm vừa trải qua sau kỳ thi tuyển sinh ĐH( với số điểm 25.5).Tôi tin mình sẽ giúp các bạn học sinh có một kiến thức vững vàng trên con đường học vấn của mình.(ĐT:0907082919)', 1, 0),
(4, 'MAI HOA', 1, '1990-01-13', 'Can Tho', 'c@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:30:32', '2009-01-13 08:30:32', 1, 0, 1, 1, 14, '', '', 3, 3, 'hoa', '2007-01-13', 2, 8, 10, 'Toán,Lý,Hóa(đặc biệt là môn Toán)', 'q10,q11,tb', ' toi', ' 600,000(VNĐ)', 'dang can lop day', 1, 0),
(5, 'Hà Hiếu Dũng', 0, '1989-01-13', 'Can Tho', 'd@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:32:08', '2009-01-13 08:32:08', 1, 0, 1, 1, 14, '', '', 3, 3, 'Tài chính', '2007-01-13', 2, 4, 9, 'Toán,Lý,Hóa', 'Q5, Q10, Q11', 'chiều tối', '0(VNĐ', 'dang can lop day', 1, 0),
(6, 'Thái Thị Thanh Thủy', 1, '1989-01-13', 'Can Tho', 'e@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:33:30', '2009-01-13 08:33:30', 1, 0, 1, 1, 14, '', '', 3, 1, 'Quảng trị kinh doanh', '2009-01-13', 0, 1, 5, 'Tất cả các môn', 'Quận 8, Quận 5, Quận 6', 'Các tối', '0(VNĐ', 'dang can lop day', 1, 0),
(7, 'Trịnh Văn Khang', 0, '1989-01-13', 'Can Tho', 'f@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-01-13 08:35:32', '2009-01-13 08:35:32', 1, 0, 1, 1, 14, '', '', 3, 1, 'KTHK', '2009-01-13', 0, 3, 6, 'Toán, lí, hoá, tin học (lập trinh Pascal...)', 'Đống Đa, Hai Bà Trưng, Ba Đình, Thanh Xuân, Hoàng Mai', '18h-21h', '40,000(VNĐ)', 'Điện thoại : 01698372812', 1, 0),
(8, 'nguyen anh tai', 0, '2009-01-21', '522 luy ban bich.p hoa thanh.q tan phu', 'tainguyen1986@yahoo.com', '8681b665cf136d69db191bb1a57d722f', '', '2009-01-21 11:00:29', '2009-01-21 11:00:29', 1, 0, 1, 22, 45, '', '01688744549', 3, 3, 'cong nghe Polimer', '2009-01-21', 0, 8, 12, 'toan-ly-hoa', 'q.tan phu', '6h30-8h30', '800000-1000000', '', 1, 0),
(9, 'a', 0, '2009-02-07', 'a', 'a@afsdf.com', '0cc175b9c0f1b6a831c399e269772661', '', '2009-02-07 22:10:11', '2009-02-07 22:10:11', 1, 0, 1, 15, 1, '', '', 1, 1, '', '2009-02-07', 0, 0, 0, 'a', 'a', 'a', 'a', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `why_need_teacher`
--

CREATE TABLE IF NOT EXISTS `why_need_teacher` (
  `id` bigint(20) NOT NULL auto_increment,
  `description` mediumtext NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `why_need_teacher`
--

INSERT INTO `why_need_teacher` (`id`, `description`, `createdate`) VALUES
(1, '<p>aaaaaaaaaaaaaaaaaaa</p>\n<p>dsfsdfrd</p>', '2009-02-04 20:54:56');
