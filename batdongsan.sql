-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 26, 2022 lúc 02:30 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `batdongsan`
--
CREATE DATABASE IF NOT EXISTS `batdongsan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `batdongsan`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_baiviet`
--

DROP TABLE IF EXISTS `cms_baiviet`;
CREATE TABLE IF NOT EXISTS `cms_baiviet` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MaChuDe` bigint(20) UNSIGNED NOT NULL,
  `MaNguoiDung` bigint(20) UNSIGNED NOT NULL,
  `TieuDe` text COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` text COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `LuotXem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `QuanTrong` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `KiemDuyet` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `KichHoat` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `cms_baiviet_machude_foreign` (`MaChuDe`),
  KEY `cms_baiviet_manguoidung_foreign` (`MaNguoiDung`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cms_baiviet`
--

INSERT INTO `cms_baiviet` (`ID`, `MaChuDe`, `MaNguoiDung`, `TieuDe`, `TieuDeKhongDau`, `TomTat`, `NoiDung`, `LuotXem`, `QuanTrong`, `KiemDuyet`, `KichHoat`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Khu phức hợp Cù Lao Tân Vạn', 'khu-phuc-hop-cu-lao-tan-van', NULL, '<h3>GIỚI THIỆU DỰ &Aacute;N</h3>\r\n\r\n<p><img alt=\"Toàn cảnh dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6648/toan-canh-du-an-centria-island.jpg\" title=\"Toàn cảnh dự án Centria Island\" /></p>\r\n\r\n<p><em>To&agrave;n cảnh dự &aacute;n&nbsp;Centria Island</em></p>\r\n\r\n<p><strong>T&ecirc;n thương mại</strong>:<a href=\"https://nhadat24h.net/ban-nha-dat-tai-centria-island\">&nbsp;Centria Island</a><br />\r\n<strong>T&ecirc;n dự &aacute;n</strong>: Khu phức hợp C&ugrave; Lao T&acirc;n Vạn<br />\r\n<strong>Vị tr&iacute;:</strong>&nbsp;C&ugrave; lao T&acirc;n Vạn, phường T&acirc;n Vạn, th&agrave;nh phố Bi&ecirc;n Ho&agrave;, Đồng Nai<br />\r\n<strong>Chủ đầu tư</strong>: TTC Land &ndash; T&iacute;n Nghĩa &Aacute; Ch&acirc;u<br />\r\n<strong>Đơn vị tư vấn thiết kế:</strong>&nbsp;Ekistics (Canada)<br />\r\n<strong>Quy m&ocirc;</strong>: 48ha, gồm 571 đất nền nh&agrave; phố, biệt thự<br />\r\n<strong>Mật độ x&acirc;y dựng:</strong>&nbsp;55%<br />\r\n<strong>Mật độ c&acirc;y xanh chiềm</strong>: 11 ha<br />\r\n<strong>Loại h&igrave;nh sản phẩm</strong>: Nh&agrave; phố s&acirc;n vườn, biệt thự song lập/đơn lập<br />\r\n<strong>Nh&agrave; phố liền kề:</strong>&nbsp;206 Căn c&oacute; diện t&iacute;ch 120m2 đến 276m2 v&agrave; diện t&iacute;ch s&agrave;n x&acirc;y dựng tương ứng l&agrave; 225.6m2 đến 252m2<br />\r\n<strong>Nh&agrave; biệt thự song lập</strong>: 200 căn diện t&iacute;ch 250m2 đến 465.65m2 v&agrave; diện t&iacute;ch s&agrave;n x&acirc;y dựng tương ứng l&agrave; 362.4m2 đến 404.1m2&nbsp;<br />\r\n<strong>Biệt thự đơn lập</strong>: 165 căn c&oacute; diện t&iacute;ch 350 m2 đến 903.63m2 v&agrave; diện t&iacute;ch s&agrave;n x&acirc;y dựng tương ứng l&agrave; 349m2 đến 485.5m2<br />\r\n<strong>Chi tiết</strong>: 206 căn nh&agrave; phố liền kề diện t&iacute;ch 120 m2, 200 căn nh&agrave; biệt thự song lập diện t&iacute;ch 250 m2<br />\r\n<strong>Tiện &iacute;ch</strong>: Bến du thuyền, s&acirc;n golf, kh&aacute;ch sạn, khu giải tr&iacute; cao cấp, clubhouse, hồ bơi,&hellip;<br />\r\n<strong>Khởi c&ocirc;ng</strong>: 2022<br />\r\n<strong>Năm ho&agrave;n th&agrave;nh</strong>: 2024<br />\r\n<strong>Gi&aacute; b&aacute;n dự kiến</strong>: 55 triệu/m2<br />\r\n<strong>Ph&aacute;p l&yacute;</strong>: Sổ đỏ sở hữu l&acirc;u d&agrave;i cấp từng l&ocirc; từ 25/12/2020<br />\r\n<strong>Thời gian sở hữu</strong>: 50 năm với kh&aacute;ch nước ngo&agrave;i &amp; sở hữu l&acirc;u d&agrave;i với kh&aacute;ch Việt Nam</p>\r\n\r\n<p><img alt=\"Những lý do nên mua dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6648/nhung-ly-do-nen-mua-centria-island.jpg\" title=\"Những lý do nên mua dự án Centria Island\" /></p>\r\n\r\n<p><em>Những l&yacute; do n&ecirc;n mua dự &aacute;n&nbsp;Centria Island</em></p>\r\n\r\n<p>Dự &aacute;n Centria Island T&acirc;n Vạn được chia th&agrave;nh 2 khu gồm: khu s&acirc;n golf 18 lỗ v&agrave; khu thương mại &ndash; dịch vụ v&agrave; nghỉ dưỡng<br />\r\nKhu thương mại &ndash; dịch vụ v&agrave; nghỉ dưỡng C&ugrave; Lao T&acirc;n Vạn c&oacute; mật độ x&acirc;y dựng to&agrave;n khu l&agrave; 38,58%, bao gồm nhiều ph&acirc;n khu chức năng như:<br />\r\nKhu c&acirc;u lạc bộ golf 8.406 m2<br />\r\nKhu biệt thự golf nghỉ dưỡng 30.663 m2<br />\r\nKhu biệt thự ven s&ocirc;ng 7.309 m2<br />\r\nKhu chung cư cao cấp v&agrave; văn ph&ograve;ng thương mại 12.222 m2<br />\r\nMột số khu chức năng c&ugrave;ng c&aacute;c hạng mục c&ocirc;ng tr&igrave;nh kh&aacute;c.</p>\r\n\r\n<h3>PH&Aacute;P L&Yacute;</h3>\r\n\r\n<p>Ph&aacute;p l&yacute; đầy đủ, sổ ri&ecirc;ng từng căn. Hiện tại dự &aacute;n đ&atilde; c&oacute; quyết định ph&ecirc; duyệt quy hoạch chi tiết 1/500, quyết định chấp thuận Chủ trương đầu tư, quyết định ph&ecirc; duyệt ĐTM (B&aacute;o C&aacute;o Đ&aacute;nh Gi&aacute; T&aacute;c Động M&ocirc;i Trường), quyết định giao đất v&agrave; được cấp giấy CN QSDĐ, đ&atilde; ho&agrave;n th&agrave;nh thẩm định Thiết kế Cơ Sở, thiết kế Kỹ Thuật Thi C&ocirc;ng, được cấp ph&eacute;p x&acirc;y dựng số 42/GPXD ng&agrave;y 18/06/2020.<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h3>TIỆN &Iacute;CH</h3>\r\n\r\n<p><strong>Tiện &iacute;ch ngay tại KĐT Centria Island Bi&ecirc;n H&ograve;a</strong><br />\r\n- Cổng ch&agrave;o dự &aacute;n tuyệt đẹp<br />\r\n- Bến du thuyền tuyệt đẹp<br />\r\n- Quảng trường vi&ecirc;n ngọc<br />\r\n- Pool Bar<br />\r\n- C&ocirc;ng vi&ecirc;n c&acirc;y xanh<br />\r\n- Khu vui chơi giải tr&iacute;<br />\r\n- Bể bơi&nbsp;<br />\r\n- S&acirc;n b&oacute;ng rổ<br />\r\n- S&acirc;n tennis<br />\r\n- Trung t&acirc;m thương mại<br />\r\n- Khu vui chơi cho trẻ<br />\r\n- Khu tập gym, yoga, spa<br />\r\n- Club house<br />\r\n- Trường mẫu gi&aacute;o<br />\r\n- Ph&ograve;ng kh&aacute;m y tế<br />\r\n- Khu dịch vụ du lịch kết hợp ở cao tầng<br />\r\n- B&atilde;i đỗ xe rộng lớn<br />\r\n- S&acirc;n golf ch&iacute;n lỗ...&nbsp;</p>\r\n\r\n<p><img alt=\"Bể bơi tại dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6654/be-boi-tai-du-an-centria-island.jpg\" title=\"Bể bơi tại dự án Centria Island\" /></p>\r\n\r\n<p><em>Bể bơi tại dự &aacute;n&nbsp;Centria Island</em></p>\r\n\r\n<p><em><img alt=\"Bến du thuyền tại dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6654/ben-du-thuyen-tai-du-an-centria-island.jpg\" title=\"Bến du thuyền tại dự án Centria Island\" /></em></p>\r\n\r\n<p><em><em>Bến du thuyền tại dự &aacute;n&nbsp;Centria Island</em></em></p>\r\n\r\n<p><em><img alt=\"Clubhouse tại dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6654/clubhouse-centria-island.jpg\" title=\"Clubhouse tại dự án Centria Island\" /></em></p>\r\n\r\n<p><em><em>Clubhouse tại dự &aacute;n&nbsp;Centria Island</em></em></p>\r\n\r\n<p><em><em><img alt=\"Không gian sống tại dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6654/khong-gian-song-tai-du-an-centria-island.jpg\" title=\"Không gian sống tại dự án Centria Island\" /></em></em></p>\r\n\r\n<p><em><em><em>Kh&ocirc;ng gian sống tại dự &aacute;n&nbsp;Centria Island</em></em></em></p>\r\n\r\n<p><em><em><img alt=\"Khu vui chơi tại dự án Centria Island\" src=\"https://nhadat24h.net/duan/images/11524/6654/khu-vui-choi-tai-du-an-centria-island.jpg\" title=\"Khu vui chơi tại dự án Centria Island\" /></em></em></p>\r\n\r\n<p><em><em><em>Khu vui chơi tại dự &aacute;n&nbsp;Centria Island</em></em></em></p>', 12, 0, 0, 1, '2022-04-17 14:57:33', '2022-06-20 00:47:35'),
(2, 1, 1, 'Giới thiệu website', 'gioi-thieu-website', NULL, '<h1>Vinhomes Grand Park quận 9 &ndash; th&ocirc;ng tin tổng thể</h1>\r\n\r\n<p><a href=\"https://tmtland.com.vn/du-an-vinhomes-grand-park-quan-9/\"><strong>Vi</strong><strong>nhomes Grand Park quận 9</strong>&nbsp;</a>l&agrave; dự &aacute;n<strong>&nbsp;khu đ&ocirc; thị sinh th&aacute;i th&ocirc;ng minh lớn nhất&nbsp;</strong>của<strong>&nbsp;tập đo&agrave;n Vingroup</strong>&nbsp;tại th&agrave;nh phố Hồ Ch&iacute; Minh t&iacute;nh đến nay với quy m&ocirc; l&ecirc;n tới&nbsp;<strong>271 ha.&nbsp;</strong>Dự &aacute;n ra đời đ&atilde; tạo n&ecirc;n một l&agrave;n s&oacute;ng mới ngay tại trung t&acirc;m quận 9 ( nay thuộc th&agrave;nh phố Thủ Đức) khi thu h&uacute;t c&aacute;c nh&agrave; đầu tư, c&aacute;c &ldquo;c&aacute; mập&rdquo; lẫn người d&acirc;n tham gia v&agrave; chỉ trong v&ograve;ng&nbsp;<strong>17 ng&agrave;y,</strong>&nbsp;<strong>10.000 căn hộ</strong>&nbsp;trong đợt mở b&aacute;n đầu ti&ecirc;n đ&atilde; được b&aacute;n hết.&nbsp;</p>\r\n\r\n<p>Vậy tại sao dự &aacute;n lại&nbsp;<strong>&ldquo;hot&rdquo;</strong>&nbsp;đến vậy?<strong>&nbsp;Vinhomes Grand Park quận 9 địa chỉ</strong>&nbsp;ở đ&acirc;u?&nbsp; Chi tiết<strong>&nbsp;th&ocirc;ng tin Vinhomes Grand Park?</strong>&nbsp;Bảng&nbsp;<strong>gi&aacute; b&aacute;n căn hộ Vinhomes Grand Park?,&hellip;&nbsp;</strong>tất cả sẽ được ch&uacute;ng t&ocirc;i gải đ&aacute;p trong b&agrave;i viết n&agrave;y!</p>', 10, 0, 0, 1, '2022-04-17 15:03:37', '2022-04-25 12:10:40'),
(3, 4, 1, 'CHO THUÊ CĂN HỘ 1PN - 2PN CHUNG CƯ D\'.EL DORADO, FULL ĐỒ GIÁ RẺ NHẤT 4TR/TH', 'cho-thue-can-ho-1pn-2pn-chung-cu-del-dorado-full-do-gia-re-nhat-4trth', NULL, '<p>Mức gi&aacute; 4 triệu/th&aacute;ng</p>\r\n\r\n<p>Diện t&iacute;ch45 m&sup2;</p>\r\n\r\n<p>Ph&ograve;ng ngủ1 PN</p>\r\n\r\n<p>Th&ocirc;ng tin m&ocirc; tả</p>\r\n\r\n<p>+ Căn hộ studio 1 ph&ograve;ng ngủ, diện t&iacute;ch 33 - 40m2, đầy đủ nội thất: Điều h&ograve;a, n&oacute;ng lạnh, tủ bếp, bếp, tivi, r&egrave;m cửa, sofa, b&agrave;n ghế... Gi&aacute; thu&ecirc; 4 - 8 tr/th&aacute;ng.<br />\r\n<br />\r\n+ Căn hộ 1 ph&ograve;ng ngủ ri&ecirc;ng biệt, diện t&iacute;ch 45 - 50m2, đầy đủ nội thất: Điều h&ograve;a, n&oacute;ng lạnh, tủ bếp, bếp, tivi, r&egrave;m cửa, sofa, b&agrave;n ghế... Gi&aacute; thu&ecirc; 4 - 10 tr/th&aacute;ng.<br />\r\n<br />\r\n+ Căn hộ 2 ph&ograve;ng ngủ ri&ecirc;ng biệt, diện t&iacute;ch 70 - 86m2, đầy đủ nội thất: Điều h&ograve;a, n&oacute;ng lạnh, tủ bếp, bếp, tivi, r&egrave;m cửa, sofa, b&agrave;n ghế... Gi&aacute; thu&ecirc; 13 - 15 tr/th&aacute;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://file4.batdongsan.com.vn/resize/745x510/2021/09/27/20210927092020-a00d_wm.jpg\" /><br />\r\n&nbsp;</p>', 5, 0, 0, 1, '2022-04-17 16:53:14', '2022-04-22 15:46:11'),
(4, 3, 1, 'Sunshine City Sài Gòn', 'sunshine-city-sai-gon', 'Sunshine City Sài Gòn mang dấu ấn của một tổ hợp căn hộ hạng sang được quy hoạch bài bản theo mô hình smart compound\r\nbên sông Sài Gòn', '<h2>Tổng quan</h2>\r\n\r\n<p>Diện t&iacute;ch41 ha</p>\r\n\r\n<p>Đơn vị ph&aacute;t triểnC&ocirc;ng ty Cổ phần X&acirc;y dựng S&agrave;i G&ograve;n</p>\r\n\r\n<p>Ph&aacute;p l&yacute;Sổ hồng sở hữu l&acirc;u d&agrave;i</p>\r\n\r\n<p>Với tổng diện t&iacute;ch tr&ecirc;n 41 ha, nhưng mật độ x&acirc;y dựng chỉ 24.09%, bi&ecirc;̣t thự TPHCM Phố Đ&ocirc;ng Village được mệnh danh l&agrave; một khu đ&ocirc; thị hiện đại với hệ thống hạ tầng kĩ thuật được x&acirc;y dựng đồng bộ, hệ thống dịch vụ tiện t&iacute;ch ho&agrave;n hảo, đem tới cho cư d&acirc;n một kh&ocirc;ng gian sống sang trọng, trong l&agrave;nh v&agrave; h&agrave;i h&ograve;a với thi&ecirc;n nhi&ecirc;n.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/22/20220422163521-e184.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh tổng thể dự &aacute;n Phố Đ&ocirc;ng Village</em></p>\r\n\r\n<h3>Vị tr&iacute;&nbsp;</h3>\r\n\r\n<p>Dự &aacute;n Phố Đ&ocirc;ng Village tọa lạc ngay mặt tiền đường Nguyễn Thị Định, phường C&aacute;t L&aacute;i, TP. Thủ Đức, TP.HCM. Dự &aacute;n c&oacute; vị tr&iacute; v&ocirc; c&ugrave;ng chiến lược tại Khu Đ&ocirc;ng S&agrave;i G&ograve;n. Từ bi&ecirc;̣t thự Qu&acirc;̣n 2 Phố Đ&ocirc;ng Village, cư d&acirc;n dễ d&agrave;ng di chuyển tới c&aacute;c Khu đ&ocirc; thị:</p>\r\n\r\n<ul>\r\n	<li>7,5 km tới Khu đ&ocirc; thị mới Thủ Thi&ecirc;m, th&ocirc;ng qua đường Đồng Văn Cống &ndash; Mai Ch&iacute; Thọ</li>\r\n	<li>8,3 km tới KĐT Ph&uacute; Mỹ Hưng qua đường V&otilde; Ch&iacute; C&ocirc;ng &ndash; Cầu Ph&uacute; Mỹ &ndash; Nguyễn Văn Linh</li>\r\n	<li>3,7 km về v&ograve;ng xoay Ph&uacute; Hữu, hướng l&ecirc;n cao tốc Long Th&agrave;nh Dầu Gi&acirc;y để về miền Đ&ocirc;ng.</li>\r\n	<li>Nếu Cầu C&aacute;t L&aacute;i được x&acirc;y dựng xong, chỉ &nbsp;2.87 km về Khu th&agrave;nh phố mới Nhơn Trạch. Nơi đ&acirc;y rất nhiều dự &aacute;n Quy m&ocirc; lớn, đặc biệt như Swan Bay c&oacute; s&acirc;n gold ti&ecirc;u chuẩn quốc tế.</li>\r\n</ul>\r\n\r\n<p>Ngo&agrave;i ra, cư d&acirc;n c&oacute; dễ d&agrave;ng di chuyển tới trung t&acirc;m h&agrave;nh ch&iacute;nh quận 2 tại Thạnh Mỹ Lợi, c&aacute;c trường học, bệnh viện quốc tế, trung t&acirc;m thương mại tại Quận 2, v&agrave; Quận 7.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/22/20220422160134-599c.jpg\" /></p>\r\n\r\n<p><em>Vị tr&iacute; dự &aacute;n Phố Đ&ocirc;ng Village</em></p>\r\n\r\n<h3>Quy hoạch&nbsp;</h3>\r\n\r\n<p>C&aacute;c sản phẩm được quy hoạch trong dự &aacute;n</p>\r\n\r\n<ul>\r\n	<li>Nh&agrave; phố thương mại: gồm 98 l&ocirc;, cao 03 tầng</li>\r\n	<li>Biệt thự phố vườn: 228 l&ocirc;</li>\r\n	<li>Nh&agrave; biệt thự song lập gồm: 100 l&ocirc;, cao 03 tầng</li>\r\n	<li>Nh&agrave; biệt thự đơn lập gồm: 120 l&ocirc;, cao 03 tầng</li>\r\n</ul>\r\n\r\n<p>C&aacute;c ph&acirc;n khu chức năng trong dự &aacute;n Phố Đ&ocirc;ng Village: 7 ph&acirc;n khu chức năng</p>\r\n\r\n<ul>\r\n	<li>Khu ở: Nh&agrave; phố kinh doanh, biệt thự song lập, biệt thự đơn lập, biệt thự phố vườn.</li>\r\n	<li>C&ocirc;ng vi&ecirc;n: 03 c&ocirc;ng vi&ecirc;n trung t&acirc;m v&agrave; 06 c&ocirc;ng vi&ecirc;n vệ tinh</li>\r\n	<li>Trường học: Trường mẫu gi&aacute;o quốc tế v&agrave; trường tiểu học</li>\r\n	<li>Tiện &iacute;ch văn ho&aacute; giải tr&iacute;: c&acirc;u lạc bộ phố Đ&ocirc;ng v&agrave; c&acirc;u lạc bộ Ho&agrave;ng Gia</li>\r\n	<li>Khu thương mại phức hợp</li>\r\n	<li>Viện điều dưỡng Quốc tế</li>\r\n	<li>Khu căn hộ</li>\r\n</ul>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/22/20220422160213-5b62.jpg\" /></p>\r\n\r\n<p><em>Mặt bằng tổng thể dự &aacute;n Phố Đ&ocirc;ng Village giai đoạn 1</em></p>\r\n\r\n<h3>Gi&aacute; b&aacute;n&nbsp;</h3>\r\n\r\n<p>Gi&aacute; b&aacute;n giai đoạn 2 Phố Đ&ocirc;ng Village khoảng 70 tr/m2 tương đướng với 7 tỷ/căn. Ch&ecirc;nh khoảng 1.5 tỷ so với thời điểm ch&iacute;nh thức mở b&aacute;n giai đoạn &ldquo;đầu ti&ecirc;n&rdquo;.</p>\r\n\r\n<p>Dự kiến giai đoạn 3 của dự &aacute;n Phố Đ&ocirc;ng Village đang được triển khai x&acirc;y dựng v&agrave;o qu&yacute; 1/2020 với quy m&ocirc; 100 căn biệt thự cuối c&ugrave;ng của dự &aacute;n, đ&acirc;y được xem l&agrave; khu sang nhất, đăng cấp, VIP d&agrave;nh cho giới thượng lưu tại dự &aacute;n Phố Đ&ocirc;ng Vilage Quận 2.</p>\r\n\r\n<p>Ngo&agrave;i ra bạn c&oacute; thể tham khảo th&ecirc;m một gi&aacute; dự &aacute;n kh&aacute;c như:</p>\r\n\r\n<p>Sol Villas: từ 10 tỷ/căn.<br />\r\nCiti Bella: từ 5 tỷ/căn.<br />\r\nSaigon Mystery Villas: gi&aacute; từ 12 tỷ/căn<br />\r\nLakeview City: từ 8.5 tỷ/căn.<br />\r\nSenturia An Ph&uacute;: từ 10 tỷ/căn.</p>\r\n\r\n<p>Phương thức thanh to&aacute;n dự &aacute;n kh&aacute; linh hoạt, kh&aacute;ch h&agrave;ng c&oacute; thể thanh to&aacute;n theo phương thức chuẩn hoặc thanh to&aacute;n nhanh để hưởng mức chiết khấu cao, từ 7% &ndash; 15%. Với ch&iacute;nh s&aacute;ch hỗ trợ l&atilde;i suất trong v&ograve;ng 15 th&aacute;ng (l&ecirc;n tới 100% &ndash; nếu vay khoảng 50% gi&aacute; b&aacute;n), kh&aacute;ch h&agrave;ng li&ecirc;n hệ đặt mua&nbsp;<a href=\"https://homedy.com/\">bất động sản</a>&nbsp;tại Phố Đ&ocirc;ng Village sẽ trở n&ecirc;n dễ d&agrave;ng hơn.</p>\r\n\r\n<h3>Thời gian b&agrave;n giao</h3>\r\n\r\n<p>T&iacute;nh đến đầu th&aacute;ng 01/2020, dự &aacute;n&nbsp;<strong>Phố Đ&ocirc;ng Village</strong>&nbsp;đ&atilde; ho&agrave;n tất giai đoạn 1 với 4 ph&acirc;n khu chức năng. Bao gồm:</p>\r\n\r\n<ul>\r\n	<li>Khu biệt thự Ho&agrave;ng Kim &ndash; Splendid Village.</li>\r\n	<li>Khu phố Ho&agrave;ng Ng&acirc;n &ndash; Provilege Town.</li>\r\n	<li>Biệt thự Ho&agrave;ng Ph&uacute; &ndash; Lavish Village.</li>\r\n	<li>Biệt thự Ho&agrave;ng Qu&yacute; &ndash; Majestic Village.</li>\r\n</ul>\r\n\r\n<p>Trong đ&oacute;, 100% sản phẩm đ&atilde; được cư d&acirc;n đưa v&agrave;o khai th&aacute;c, an cư lạc nghiệp từ năm 2016 &ndash; 2017.</p>\r\n\r\n<p>Tiếp đến trong th&aacute;ng 12/2019, giai đoạn 2 của dự &aacute;n l&agrave; Sol Village cũng đ&atilde; b&agrave;n giao đến tay gia chủ. Với kết cấu gồm 52 biệt thự vườn, 16 biệt thự song lập &amp; 33 biệt thự đơn. V&agrave; c&oacute; phần đẹp hơn rất nhiều so với c&aacute;c sản phẩm đ&atilde; b&agrave;n giao ở giai đoạn đầu ti&ecirc;n.</p>\r\n\r\n<p>Rumor, gi&aacute; b&aacute;n c&aacute;c căn biệt thự Quận 2 n&agrave;y đang chuyển nhượng với khoảng 70 triệu/m2. Tương đương với khoảng 7tỷ/căn &ndash; 100m2. Ch&ecirc;nh khoảng 1.5 tỷ so với thời điểm mở b&aacute;n giai đoạn &ldquo;đầu ti&ecirc;n&rdquo;.</p>\r\n\r\n<p>Theo th&ocirc;ng tin mới nhất v&agrave;o Qu&yacute; I/2022. PhoDong Village c&ocirc;ng bố Ph&acirc;n khu căn hộ Cao Cấp Salto Residence nằm tr&ecirc;n trục đường Phượng Vĩ, tuyến đường ch&iacute;nh v&agrave; đẹp nhất của PhoDong Village.</p>\r\n\r\n<p>Với quy m&ocirc; 100 căn biệt thự cuối c&ugrave;ng, đ&acirc;y sẽ l&agrave; ph&acirc;n khu sang trọng nhất khu đ&ocirc; thị Phố Đ&ocirc;ng Village, Quận 2. C&oacute; sự ưu &aacute;i hơn cả về kiến tr&uacute;c lẫn tầm view đa dạng. Được mệnh danh l&agrave; &ldquo;Ng&ocirc;i l&agrave;ng tỷ ph&uacute;&rdquo; xứng tầm đẳng cấp VIP d&agrave;nh cho giới thượng lưu.</p>\r\n\r\n<h3>Ph&aacute;p l&yacute;</h3>\r\n\r\n<p>Sở hữu l&acirc;u d&agrave;i d&agrave;nh cho người Việt.</p>\r\n\r\n<h3>Mặt bằng - thiết kế&nbsp;</h3>\r\n\r\n<p>Khu đ&ocirc; thị kiểu mẫu Phố Đ&ocirc;ng Village c&oacute; tổng diện t&iacute;ch hơn 41ha, được trang bị đầy đủ tiện &iacute;ch v&agrave; kh&ocirc;ng gian sống đẳng cấp cho c&aacute;c cư d&acirc;n. Nếu so s&aacute;nh với quy chuẩn x&acirc;y dựng theo quy định hiện h&agrave;nh th&igrave; Phố Đ&ocirc;ng Village đ&atilde; &ldquo;vượt chuẩn&rdquo; rất xa ở nhiều ti&ecirc;u ch&iacute;. Theo quy định của Bộ X&acirc;y dựng th&igrave; mật độ x&acirc;y dựng l&agrave; ở mức 40%, trong khi đ&oacute;, mật độ x&acirc;y dựng tại Phố Đ&ocirc;ng Village chỉ c&oacute; 24,09%.&nbsp;</p>\r\n\r\n<p>SCC đ&atilde; kh&eacute;o l&eacute;o chọn h&igrave;nh ảnh hoa Phượng Vỹ &ndash; nữ ho&agrave;ng c&aacute;c lo&agrave;i hoa Nhiệt Đới để l&agrave;m &yacute; tưởng thiết kế chủ đạo tại Phố Đ&ocirc;ng Village. Sắc xanh r&igrave; của l&aacute; v&agrave; m&agrave;u đỏ tươi nồng ch&aacute;y của hoa Phượng Vỹ sẽ biến Phố Đ&ocirc;ng Village th&agrave;nh một Th&agrave;nh phố l&atilde;ng mạn duy&ecirc;n d&aacute;ng ẩn m&igrave;nh giữa l&ograve;ng S&agrave;i Th&agrave;nh, kh&aacute;c hẳn so với những Khu đ&ocirc; thị l&acirc;n cận</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/22/20220422123455-4271.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/22/20220422123606-2ec2.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 2, 1, 0, 1, '2022-04-22 15:10:38', '2022-04-25 13:27:25'),
(5, 3, 1, 'The Charm An Hưng', 'the-charm-an-hung', 'The Charm An Hưng là tổ hợp văn phòng, thương mại, nhà ở và trường mầm non do Công ty CP Đầu tư Đô thị An Hưng đầu tư xây dựng tại phường La Khê, Hà Đông, Hà Nội', '<h2>Tổng quan</h2>\r\n\r\n<p>Chủ đầu tư&nbsp;<a href=\"https://batdongsan.com.vn/dau-tu-du-an/cong-ty-cp-dau-tu-do-thi-an-hung-ep446\">C&ocirc;ng ty CP Đầu tư Đ&ocirc; thị An Hưng</a></p>\r\n\r\n<p><strong>The Charm An Hưng</strong>&nbsp;l&agrave; tổ hợp văn ph&ograve;ng, thương mại, nh&agrave; ở v&agrave; trường mầm non do C&ocirc;ng ty CP Đầu tư Đ&ocirc; thị An Hưng đầu tư x&acirc;y dựng tại phường La Kh&ecirc;, H&agrave; Đ&ocirc;ng, H&agrave; Nội. Dự &aacute;n The Charm An Hưng gồm 4 block liền kề v&agrave; 2 t&ograve;a chung cư cao 33 tầng, tọa lạc tr&ecirc;n mặt đường Tố Hữu, thừa hưởng lợi thế hạ tầng, tiện &iacute;ch của c&aacute;c khu đ&ocirc; thị xung quanh như KĐT An Hưng, KĐT Dương Nội, KĐT Văn Kh&ecirc;,&hellip;</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/19/20220419120035-3322.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh tổng thể dự &aacute;n The Charm An Hưng</em></p>\r\n\r\n<h3>Vị tr&iacute;&nbsp;</h3>\r\n\r\n<p>Dự &aacute;n The Charm An Hưng được quy hoạch tại l&ocirc; đất tr&ecirc;n mặt đường Tố Hữu, giữa 2 t&ograve;a chung cư The Pride v&agrave; Usilk, gần kề c&aacute;c khu đ&ocirc; thị lớn của quận H&agrave; Đ&ocirc;ng như KĐT An Hưng, KĐT Dương Nội, KĐT Văn Kh&ecirc;, KĐT Park City. Đ&acirc;y l&agrave; khu vực tập trung nhiều dự &aacute;n chung cư, biệt thự, liền kề với hạ tầng đồng bộ, nhiều tiện &iacute;ch nổi bật h&agrave;ng đầu H&agrave; Đ&ocirc;ng như C&ocirc;ng vi&ecirc;n thi&ecirc;n văn học, Aeon Mall, hệ thống c&aacute;c trường học, bệnh viện lớn,&hellip;</p>\r\n\r\n<ul>\r\n	<li>Đối diện t&ograve;a nh&agrave; Nam Cường Building</li>\r\n	<li>1,3km đến C&ocirc;ng vi&ecirc;n Thi&ecirc;n văn học</li>\r\n	<li>1,5km đến Ng&atilde; tư Vạn Ph&uacute;c</li>\r\n	<li>2,5km đến Aeon Mall H&agrave; Đ&ocirc;ng</li>\r\n</ul>\r\n\r\n<h3>Hạ tầng - Quy hoạch</h3>\r\n\r\n<p>The Charm An Hưng H&agrave; Đ&ocirc;ng nằm ngay tr&ecirc;n mặt đường Tố Hữu với 6 l&agrave;n xe (bao gồm l&agrave;n xe bu&yacute;t BRT) l&agrave; trục đường ch&iacute;nh hướng trung t&acirc;m TP. H&agrave; Nội. Hạ tầng giao th&ocirc;ng tại khu vực n&agrave;y ph&aacute;t triển kh&aacute; đồng bộ. Tuy nhi&ecirc;n, do tập trung nhiều dự &aacute;n chung cư cao tầng n&ecirc;n đường Tố Hữu thường xuy&ecirc;n xảy ra t&igrave;nh trạng tắc đường, đặc biệt l&agrave; v&agrave;o giờ cao điểm. Trong tương lai gần, tuyến đường L&ecirc; Quang Đạo được triển khai v&agrave; th&ocirc;ng xe sẽ giảm tải cho đường Tố Hữu, kết nối khu vực H&agrave; Đ&ocirc;ng với Mỹ Đ&igrave;nh, Cầu Giấy nhanh ch&oacute;ng, thuận tiện.</p>\r\n\r\n<h3>Tiện &iacute;ch</h3>\r\n\r\n<p>Với 3 tầng khối đế 2 t&ograve;a chung cư c&ugrave;ng nhiều l&ocirc; shophouse liền kề ph&iacute;a dưới, dự &aacute;n The Charm An Hưng hứa hẹn sẽ cung cấp hệ thống tiện &iacute;ch, dịch vụ đa dạng phục vụ cư d&acirc;n. &nbsp;</p>\r\n\r\n<p>C&aacute;c tiện &iacute;ch nội khu The Charm An Hưng đ&aacute;ng ch&uacute; &yacute; c&oacute; thể kể tới như:</p>\r\n\r\n<ul>\r\n	<li>Trường mầm non</li>\r\n	<li>S&acirc;n chơi trẻ em</li>\r\n	<li>Nh&agrave; sinh hoạt cộng đồng</li>\r\n	<li>Khu thương mại</li>\r\n	<li>Ph&ograve;ng tập gym</li>\r\n</ul>\r\n\r\n<p>Ngo&agrave;i ra, cư d&acirc;n The Charm An Hưng c&ograve;n được thừa hưởng nhiều tiện &iacute;ch ngoại khu nổi bật từ c&aacute;c khu đ&ocirc; thị l&acirc;n cận như:</p>\r\n\r\n<ul>\r\n	<li>C&ocirc;ng vi&ecirc;n Thi&ecirc;n văn học&nbsp;</li>\r\n	<li>Đại si&ecirc;u thị Aeon Mall H&agrave; Đ&ocirc;ng</li>\r\n	<li>Trường học quốc tế Nhật Bản.</li>\r\n</ul>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/19/20220419142804-501b.jpg\" /></p>\r\n\r\n<p><em>The Charm An Hưng rất gần C&ocirc;ng vi&ecirc;n Thi&ecirc;n văn học - tiện &iacute;ch nổi bật của KĐT Dương Nội&nbsp;</em></p>\r\n\r\n<h3>Thiết kế - Mặt bằng</h3>\r\n\r\n<p>Mặt bằng tổng thể dự &aacute;n The Charm An Hưng: đang cập nhật</p>\r\n\r\n<p>Theo th&ocirc;ng tin tham khảo tr&ecirc;n thị trường, The Charm An Hưng sẽ c&oacute; 2 t&ograve;a chung cư cao 33 tầng nằm ch&iacute;nh giữa khu đất dự &aacute;n, bao quanh l&agrave; khu nh&agrave; thấp tầng. Batdongsan.com.vn sẽ tiếp t&uacute;c cập nhật thiết kế căn hộ The Charm An Hưng khi c&oacute; th&ocirc;ng tin ch&iacute;nh thức.</p>\r\n\r\n<h3>Gi&aacute; b&aacute;n</h3>\r\n\r\n<p>Chủ đầu tư dự &aacute;n The Charm An Hưng hiện chưa c&ocirc;ng bố th&ocirc;ng tin gi&aacute; b&aacute;n dự &aacute;n n&agrave;y. Hiện chỉ c&oacute; th&ocirc;ng tin dự kiến mở b&aacute;n dự &aacute;n The Charm An Hưng v&agrave;o Qu&yacute; III/2022. Batdongsan.com.vn sẽ tiếp tục cập nhật th&ocirc;ng tin dự &aacute;n The Charm An Hưng trong thời gian tới.</p>\r\n\r\n<h3>Tiến độ</h3>\r\n\r\n<p>Dự &aacute;n The Charm An Hưng đ&atilde; được khởi c&ocirc;ng từ Qu&yacute; I/2022. Khu đất dự &aacute;n đ&atilde; được qu&acirc;y t&ocirc;n, xuất hiện nhiều m&aacute;y m&oacute;c v&agrave; c&ocirc;ng nh&acirc;n đang l&agrave;m việc. Theo bảng th&ocirc;ng tin dự &aacute;n tại c&ocirc;ng trường, dự &aacute;n The Charm An Hưng do Nh&agrave; thầu FECON x&acirc;y dựng, gi&aacute;m s&aacute;t bởi CONINCO- PML. Dự &aacute;n The Charm An Hưng dự kiến b&agrave;n giao Qu&yacute; III/2024.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/19/20220419141627-b16a.jpg\" /></p>\r\n\r\n<p><em>Tiến độ thực tế dự &aacute;n The Charm An Hưng th&aacute;ng 4/2022.&nbsp;</em></p>', 1, 0, 0, 1, '2022-04-22 15:36:41', '2022-04-22 15:36:49'),
(6, 3, 1, '5F Stella Bình Dương', '5f-stella-binh-duong', '5F Stella Bình Dương là tên thương mại của dự án Khu dân cư FC Trường An, được quy hoạch tại thị trấn Phước Vĩnh, huyện Phú Giáo, tỉnh Bình Dương. Dự án 5F Stella Bình Dương do Công ty TNHH Huy FC Trường An làm chủ đầu tư, với tổng diện tích gần 6ha, gồm 389 lô đất nền nhà phố.', '<h2>Tổng quan</h2>\r\n\r\n<p>Diện t&iacute;ch5.9 ha</p>\r\n\r\n<p>Ph&aacute;p l&yacute;Sổ hồng l&acirc;u d&agrave;i</p>\r\n\r\n<p><strong>5F Stella B&igrave;nh Dương</strong>&nbsp;l&agrave; t&ecirc;n thương mại của dự &aacute;n&nbsp;<strong>Khu d&acirc;n cư FC Trường An</strong>, được quy hoạch tại thị trấn Phước Vĩnh, huyện Ph&uacute; Gi&aacute;o, tỉnh B&igrave;nh Dương. Dự &aacute;n 5F Stella B&igrave;nh Dương do C&ocirc;ng ty TNHH Huy FC Trường An l&agrave;m chủ đầu tư, với tổng diện t&iacute;ch gần 6ha, gồm 389 l&ocirc; đất nền nh&agrave; phố.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414111710-450a.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh tổng thể dự &aacute;n 5F Stella B&igrave;nh Dương</em></p>\r\n\r\n<h3>Vị tr&iacute;</h3>\r\n\r\n<p>5F Stella c&oacute; vị tr&iacute; nằm tại mặt ti&ecirc;̀n ĐT 741, thị trấn Phước Vĩnh, huyện Ph&uacute; Gi&aacute;o, tỉnh B&igrave;nh Dương. Dự &aacute;n sở hữu nhiều tuyến đường huyết mạch như tạo lực Bắc T&acirc;n Uy&ecirc;n - Ph&uacute; Gi&aacute;o - B&agrave;u B&agrave;ng, cao tốc Hồ Ch&iacute; Minh Hoa Lư (đoạn qua Ph&uacute; Gi&aacute;o- Chơn Th&agrave;nh), tuyến đường V&agrave;nh đai 6 (DT746B).</p>\r\n\r\n<p>Dự &aacute;n 5F Stella l&agrave; t&acirc;m điểm đầu mối giao th&ocirc;ng của khu vực, trong tương lai từ đ&acirc;y cư d&acirc;n thuận lợi di chuyển về TPHCM, tỉnh Đồng Nai, B&igrave;nh Phước th&ocirc;ng qua c&aacute;c trục dường huyết mạch như Đường cao tốc Hồ Ch&iacute; Minh (đoạn Chơn Th&agrave;nh, Ph&uacute; Gi&aacute;o), Đường ĐT 745B (V&agrave;nh đai 6 &ndash; Lộ giới 60m), Đường ĐT 741 (đi T&acirc;y Nguy&ecirc;n) hiện hữu, Đường tạo lực B&agrave;u B&agrave;ng &ndash; Ph&uacute; Gi&aacute;o &ndash; Bắc T&acirc;n Uy&ecirc;n (Đang thi c&ocirc;ng), khi h&agrave;ng loạt c&aacute;c tuyến đường giao th&ocirc;ng huyết mạch n&agrave;y ho&agrave;n thiện, r&uacute;t ngắn thời gian di chuyển.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414111611-d217.jpg\" /></p>\r\n\r\n<p><em>Vị tr&iacute; dự &aacute;n 5F Stella B&igrave;nh Dương</em></p>\r\n\r\n<h3>Tiện &iacute;ch</h3>\r\n\r\n<p>Khu d&acirc;n cư 5F Stella B&igrave;nh Dương được quy hoạch th&agrave;nh kh&ocirc;ng gian sống xanh cho cư d&acirc;n với diện t&iacute;ch lớn d&agrave;nh cho c&ocirc;ng vi&ecirc;n, b&ecirc;n cạnh đ&oacute; c&ograve;n c&oacute; nhiều dịch vụ như hồ cảnh quan, khu thể thao, trung t&acirc;m y tế, trường mầm non&hellip;</p>\r\n\r\n<p>Từ dự &aacute;n cư d&acirc;n thuận tiện di chuyển đến c&aacute;c tiện &iacute;ch trong vung như: trung t&acirc;m h&agrave;nh ch&iacute;nh Ph&uacute; Gi&aacute;o, trường THPT Phước Vĩnh, c&ugrave;ng nhiều khu c&ocirc;ng nghiệp lớn như T&acirc;n B&igrave;nh, Vĩnh Lập 1,2, cụm c&ocirc;ng nghiệp Tam Lập v&agrave; khu c&ocirc;ng nghiệp VSIP 4.</p>\r\n\r\n<h3>Mặt bằng - Thiết kế</h3>\r\n\r\n<p>Dự &aacute;n 5F Stella cung ứng 389 nền đất nh&agrave; phố với diện t&iacute;ch đa dạng từ 70 &ndash; 168,2 m2, với đường nội khu được x&acirc;y dựng rộng từ 13-18m.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414111408-6078.jpg\" /></p>\r\n\r\n<p><em>Mặt bằng tổng thể dự &aacute;n 5F Stellar</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414111746-eddf.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh nh&agrave; phố 5F Stellar B&igrave;nh Dương</em></p>\r\n\r\n<h3>Gi&aacute; b&aacute;n</h3>\r\n\r\n<p>Gi&aacute; b&aacute;n đất nền 5F Stella B&igrave;nh Dương: Từ 875 triệu/nền</p>\r\n\r\n<h3>Tiến độ</h3>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414112141-3739.jpg\" /></p>\r\n\r\n<p><em>Ảnh thực tế khu đất dự &aacute;n 5F Stella B&igrave;nh Dương</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414112150-94b2.jpg\" /></p>', 0, 0, 0, 1, '2022-04-22 15:38:50', '2022-04-22 15:38:50'),
(7, 3, 1, 'Grand Mercure Hoi An', 'grand-mercure-hoi-an', 'Dự án Grand Mercure Hoi An là quần thể khu du lịch, nghỉ dưỡng khách sạn và dịch vụ du lịch được xây dựng theo tiêu chuẩn 5 sao quốc tế, nằm tại xã Điện Dương, huyện Điện Bàn, tỉnh Quảng Nam', '<h2>Tổng quan</h2>\r\n\r\n<p>Diện t&iacute;ch7 ha</p>\r\n\r\n<p>Đơn vị ph&aacute;t triểnC&ocirc;ng ty CP Đầu tư v&agrave; Ph&aacute;t triển Nh&agrave; v&agrave; Đ&ocirc; thị VINAHUD</p>\r\n\r\n<p>Ph&aacute;p l&yacute;Sổ hồng đến 2065</p>\r\n\r\n<p><strong>Dự &aacute;n Grand Mercure Hoi An&nbsp;</strong>l&agrave; quần thể khu du lịch, nghỉ dưỡng kh&aacute;ch sạn v&agrave; dịch vụ du lịch được x&acirc;y dựng theo ti&ecirc;u chuẩn 5 sao quốc tế, nằm tại x&atilde; Điện Dương, huyện Điện B&agrave;n, tỉnh Quảng Nam. Grand Mercure Hoi An cũng l&agrave; một trong những dự &aacute;n tọa lạc tại quỹ đất v&agrave;ng ven biển đẹp nhất c&ograve;n s&oacute;t lại của phố Hội. Dự &aacute;n do C&ocirc;ng ty C&ocirc;ng ty CP Đầu tư &amp; X&acirc;y dựng Xu&acirc;n Ph&uacute; Hải l&agrave;m chủ đầu tư, ph&aacute;t triển dự &aacute;n bởi C&ocirc;ng ty CP Đầu tư v&agrave; Ph&aacute;t triển Nh&agrave; v&agrave; Đ&ocirc; thị VINAHUD. Đơn vị vận h&agrave;nh l&agrave; Tập đo&agrave;n Accor - thương hiệu quản l&yacute; kh&aacute;ch sạn h&agrave;ng đầu thế giới.</p>\r\n\r\n<p>Với tổng diện t&iacute;ch quy hoạch 7ha, dự &aacute;n Grand Mercure Hoi An l&agrave; sự kết hợp đa sắc m&agrave;u giữa n&eacute;t đẹp truyền thống v&ugrave;ng đất di sản Hội An v&agrave; phong c&aacute;ch kiến tr&uacute;c &Yacute;. Dự &aacute;n gồm 118 căn villa sang trọng, 333 condotel v&agrave; 452 ph&ograve;ng kh&aacute;ch sạn, c&ugrave;ng h&agrave;ng loạt tiện &iacute;ch 5 sao.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413113816-6365.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh tổng thể dự &aacute;n Grand Mercure Hoi An</em></p>\r\n\r\n<h3>Vị tr&iacute;</h3>\r\n\r\n<p>Dự &aacute;n Grand Mercure Hội An sở hữu vị tr&iacute; đắc địa tại b&atilde;i biển An B&agrave;ng - nằm trong top 50 b&atilde;i biển đẹp nhất thế giới năm 2011, tr&ecirc;n quỹ đất &ldquo;v&agrave;ng&rdquo; ven biển tuyệt đẹp, c&aacute;ch TP. Hội An khoảng 5km; vừa đủ gần để di chuyển đến c&aacute;c địa điểm du lịch nổi tiếng trong khoảng 20 ph&uacute;t; vừa đủ xa phố thị ồn &agrave;o.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>5km đến Hội An</li>\r\n	<li>6km đến l&agrave;ng gốm Thanh H&agrave;</li>\r\n	<li>13,8km đến Ngũ H&agrave;nh Sơn</li>\r\n	<li>23km đến c&ugrave; lao Ch&agrave;m</li>\r\n	<li>37km đến Th&aacute;nh địa Mỹ Sơn</li>\r\n</ul>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413115029-c4ec.jpg\" /></p>\r\n\r\n<p><em>Vị tr&iacute; dự &aacute;n Grand Mercure Hoi An</em></p>\r\n\r\n<h3>Quy hoạch&nbsp;</h3>\r\n\r\n<p>Dự &aacute;n Grand Mercure Hội An tọa lạc tr&ecirc;n tuyến đường nằm ven biển được đ&aacute;nh gi&aacute; l&agrave; đẹp nhất của khu vực miền Trung l&agrave; đường Lạc Long Qu&acirc;n - x&atilde; Điện Dương - huyện Điện B&agrave;n - tỉnh Quảng Nam. Đ&acirc;y l&agrave; vị tr&iacute; đắt gi&aacute; của của ng&otilde; Hội An khi c&oacute; khả năng kết nối giao th&ocirc;ng tiện lợi, lại liền kề biển s&oacute;t lại của b&atilde;i biển An B&agrave;ng &ndash; b&atilde;i biển đ&atilde; được TripAdvisor (trang web du lịch lớn nhất thế giới b&igrave;nh chọn) đứng vị tr&iacute; thứ 16 trong top 25 b&atilde;i biển đẹp nhất ch&acirc;u &Aacute;. Đồng thời b&atilde;i biển n&agrave;y cũng đ&atilde; từng được CNNGO b&igrave;nh chọn l&agrave; một trong 50 b&atilde;i biển đẹp nhất thế giới.</p>\r\n\r\n<p>Ngo&agrave;i lợi thế tr&ecirc;n th&igrave; dự &aacute;n c&ograve;n tọa lạc tại địa điểm hội tụ 5 kỳ quan: Th&aacute;nh địa Mỹ Sơn; Phố cổ Hội An; Biển An B&agrave;ng; Ngũ H&agrave;nh Sơn; Cố đ&ocirc; Huế. N&ecirc;n du kh&aacute;ch dễ d&agrave;ng kết nối, trải nghiệm n&eacute;t đẹp văn h&oacute;a của th&agrave;nh phố di sản. Đồng thời cũng đủ xa để tr&aacute;nh xa sự ồn &agrave;o, x&ocirc; bồ của phố thị</p>\r\n\r\n<p>Grand Mercure Hoi An được triển khai x&acirc;y dựng với vị tr&iacute; tại ngay mặt tiền của tuyến đường Lạc Long Qu&acirc;n thuộc x&atilde; Điện Dương - huyện Điện B&agrave;n - tỉnh Quảng Nam.Vị tr&iacute; tọa lạc của dự &aacute;n nằm ngay giữa hai khu nghỉ dưỡng Shantira Beach Resort &amp; Spa v&agrave; Citadines Pearl Hội An. Địa điểm n&agrave;y được đ&aacute;nh gi&aacute; cao tại khu vực khi nằm ngay tại nơi c&oacute; quỹ đất v&agrave;ng nằm ven biển đẹp nhất v&agrave; c&ograve;n s&oacute;t lại của Hội An.</p>\r\n\r\n<p>Ngo&agrave;i ra, nhờ tọa lạc tại Khối H&agrave; My Đ&ocirc;ng A được biết tới l&agrave; vị tr&iacute; biển đẹp nhất biển An B&agrave;ng n&ecirc;n từ dự &aacute;n sẽ nhanh ch&oacute;ng tới với c&aacute;c địa điểm du lịch nổi tiếng của khu vực như: 37.9 km tới th&aacute;nh địa Mỹ Sơn; 13.8 km để tới Ngũ H&agrave;nh Sơn; 23 km với với C&ugrave; Lao Ch&agrave;m.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/14/20220414153822-36ca.jpg\" /></p>\r\n\r\n<h3>Gi&aacute; b&aacute;n</h3>\r\n\r\n<p>Hiện nay, CĐT chưa đưa ra mức gi&aacute; b&aacute;n ch&iacute;nh thức cho c&aacute;c sản phẩm của dự &aacute;n Grand Mercure Hội An. Tuy nhi&ecirc;n, theo như khảo s&aacute;t th&igrave; gi&aacute; b&aacute;n của một số dự &aacute;n nằm l&acirc;n cận như:</p>\r\n\r\n<ul>\r\n	<li>Shantira Hội An: Sản phẩm của CĐT l&agrave; tập đo&agrave;n Ho&agrave;ng Gia Hội An c&oacute; mức gi&aacute; b&aacute;n trong khoảng từ 1.7 tỷ đồng/ căn condotel, v&agrave; từ 20 tỷ đồng/ căn biệt thự biển.</li>\r\n	<li>Malibu Hội An: chủ đầu tư Bamboo Cappital đưa ra mức gi&aacute; từ 1.9 tỷ đồng/ căn condotel v&agrave; từ 15 tỷ đồng/ căn biệt thự biển.</li>\r\n	<li>Fusion Đ&agrave; Nẵng: C&aacute;c sản phẩm mang thương hiệu Fusion của Vinacapital c&oacute; gi&aacute; b&aacute;n biệt thự biển từ 9 tỷ đồng/ căn.</li>\r\n</ul>\r\n\r\n<p>Từ gi&aacute; b&aacute;n của c&aacute;c sản phẩm c&ugrave;ng ph&acirc;n kh&uacute;c v&agrave; c&ugrave;ng khu vực như tr&ecirc;n c&oacute; thể chắc chắn rằng gi&aacute; b&aacute;n của sản phẩm dự &aacute;n Grand Mercure Hoi An cũng sẽ nằm trong khoảng tương tự như tr&ecirc;n.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413115544-6828.jpg\" /></p>\r\n\r\n<p><em>Skybar&nbsp;</em></p>\r\n\r\n<h3>&nbsp;Thiết kế</h3>\r\n\r\n<p>Lấy cảm hứng từ h&igrave;nh ảnh L&agrave;ng &ndash; S&ocirc;ng &ndash; Phố quen thuộc của phố cổ Hội An, đậm văn h&oacute;a bản địa Việt Nam, dự &aacute;n Grand Mercure Hoi An được định hướng trở th&agrave;nh một quần thể du lịch nghỉ dưỡng bao gồm kh&aacute;ch sạn v&agrave; c&aacute;c dịch vụ du lịch theo ti&ecirc;u chuẩn 5 sao. Với quy m&ocirc; 7ha, mật độ x&acirc;y dựng chỉ chiếm 28,13% diện t&iacute;ch to&agrave;n khu, dự &aacute;n Grand Mercure Hoi An bao gồm 3 ph&acirc;n khu như sau:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Khu &ldquo;L&agrave;ng&rdquo; (Villas): 118 căn Villa, trong đ&oacute; 8 căn hướng biển.</li>\r\n	<li>Khu &ldquo;Phố&rdquo; (Serviced Apartment &amp; Shophouse): 333 condotel v&agrave; 452 ph&ograve;ng kh&aacute;ch sạn</li>\r\n	<li>Khu &ldquo;S&ocirc;ng&rdquo;: gồm 3 kh&ocirc;ng gian mặt nước với sự ch&ecirc;nh lệch độ cao từ 1 &ndash; 2,5m.</li>\r\n</ul>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413115500-5857.jpg\" /></p>\r\n\r\n<p><em>Mặt bằng tổng thể dự &aacute;n Grand Mercure Hoi An</em></p>\r\n\r\n<p>Ph&acirc;n khu Villas với 118 căn biệt thự được thiết kế như sau:</p>\r\n\r\n<ul>\r\n	<li>Diện t&iacute;ch đất x&acirc;y dựng: 24.786m2</li>\r\n	<li>Mật độ x&acirc;y dựng: 17,74%</li>\r\n	<li>Số mẫu nh&agrave; điển h&igrave;nh: 7 mẫu (Villa AG-King Villa, Villa A, Villa BG, Villa B1, Villa B2, Villa C, Villa CG)</li>\r\n</ul>\r\n\r\n<p>Với mong muốn kiến tạo n&ecirc;n một dự &aacute;n xứng tầm, đội ngũ thiết kế dự &aacute;n đ&atilde; nỗ lực kiến tạo kh&ocirc;ng gian nghỉ dưỡng sang trọng với 100% căn biệt thự c&oacute; tầm nh&igrave;n hướng biển k&egrave;m theo chuỗi tiện &iacute;ch đẳng cấp. Từng hạng mục của khu nghỉ dưỡng Grand Mercure Hoi An đều được nghi&ecirc;n cứu kỹ lưỡng, vừa đ&aacute;p ứng chuẩn kh&ocirc;ng gian nghỉ dưỡng 5 sao, vừa giữ trọn tinh hoa văn ho&aacute; xứ Quảng.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413135459-568b.jpg\" /></p>\r\n\r\n<p><em>Ph&acirc;n khu biệt thự với 118, trong đ&oacute; c&oacute; 8 căn hướng biển</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413135540-7f97.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh biệt thự Grand Mercure Hoi An</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413140717-bb0c.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh nội thất biệt thự Grand Mercure Hoi An</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413140743-093e.jpg\" /></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413140749-aa9f.jpg\" /></p>\r\n\r\n<h3>Ch&iacute;nh s&aacute;ch b&aacute;n h&agrave;ng dự &aacute;n Grand Mercure Hoi An:</h3>\r\n\r\n<ul>\r\n	<li>Thanh to&aacute;n linh hoạt trong 9 đợt</li>\r\n	<li>CĐT cam kết mua lại căn biệt thự sau 03 năm với lợi nhuận l&ecirc;n đến 124% cho 30 căn giao dịch đầu ti&ecirc;n</li>\r\n	<li>Chia sẻ lợi nhuận 50% từ doanh thu cho thu&ecirc; biệt thự r&ograve;ng.</li>\r\n	<li>Ng&acirc;n h&agrave;ng Ti&ecirc;n Phong (TPBank) hỗ trợ cho vay l&ecirc;n đến 65% gi&aacute; trị HĐMB. C&oacute; 2 phương &aacute;n vay như sau:<br />\r\n	+ Phương &aacute;n 1: KH v&agrave;o tiền 10%, ng&acirc;n h&agrave;ng giải ng&acirc;n tối đa 80% (CĐT hỗ trợ l&atilde;i suất 36 th&aacute;ng cho 80%)<br />\r\n	+ Phương &aacute;n 2: KH thanh to&aacute;n 65%, trong đ&oacute; ng&acirc;n h&agrave;ng giải ng&acirc;n tối đa 50% v&agrave; 35% c&ograve;n lại được CĐT hỗ trợ trả g&oacute;p trong v&ograve;ng 5 năm (c&oacute; thể cấn trừ v&agrave;o chi ph&iacute; chủ đầu tư cho thu&ecirc; trong v&ograve;ng 5 năm).</li>\r\n</ul>\r\n\r\n<h3>Tiến độ</h3>\r\n\r\n<p>Tiến độ dự &aacute;n Grand Mercure Hoi An mới nhất - cập nhật th&aacute;ng 2/2022: Dự &aacute;n đang trong qu&aacute; tr&igrave;nh thi c&ocirc;ng ho&agrave;n thiện, dự kiến vận h&agrave;nh từ Qu&yacute; III/2023.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413115831-007a.jpg\" /></p>\r\n\r\n<p><em>Tiến độ dự &aacute;n Grand Mercure Hoi An th&aacute;ng 2/2022</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/13/20220413115900-3397.jpg\" /></p>\r\n\r\n<p><em>Dự &aacute;n đang được thi c&ocirc;ng kh&aacute; nhanh ch&oacute;ng, dự kiến đi v&agrave;o vận h&agrave;nh từ Qu&yacute; III/2023</em></p>', 1, 0, 0, 1, '2022-04-22 15:40:17', '2022-04-22 15:40:27'),
(8, 3, 1, 'The Sapphire Mansions', 'the-sapphire-mansions', 'The Sapphire Mansions là khu biệt thự nằm trong tổng thể dự án The Sapphire Residence tại TP. Hạ Long, tỉnh Quảng Ninh, do Dojiland – thành viên trực thuộc Tập đoàn Vàng bác đá quý DOJI làm chủ đầu tư.', '<h2>Tổng quan</h2>\r\n\r\n<p>Gi&aacute;180 triệu/m&sup2;</p>\r\n\r\n<p>Diện t&iacute;ch2.08 ha</p>\r\n\r\n<p>Chủ đầu tư<a href=\"https://batdongsan.com.vn/dau-tu-du-an/tap-doan-vang-bac-da-quy-doji-ep159\">Tập đo&agrave;n V&agrave;ng bạc Đ&aacute; qu&yacute; DOJI</a></p>\r\n\r\n<p>Ph&aacute;p l&yacute;Sở hữu l&acirc;u d&agrave;i</p>\r\n\r\n<p><strong>The Sapphire Mansions</strong>&nbsp;l&agrave; khu biệt thự nằm trong tổng thể dự &aacute;n The Sapphire Residence tại TP. Hạ Long, tỉnh Quảng Ninh, do Dojiland &ndash; th&agrave;nh vi&ecirc;n trực thuộc Tập đo&agrave;n V&agrave;ng b&aacute;c đ&aacute; qu&yacute; DOJI l&agrave;m chủ đầu tư. Dự &aacute;n The Sapphire Mansions bao gồm 47 căn biệt thự biển với tầm view trực tiếp ra vịnh Hạ Long. Biệt thự The Sapphire Mansions được coi l&agrave; một trong những dự &aacute;n cao cấp, nổi bật nhất thị trường bất động sản Hạ Long giai đoạn 2021-2022.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408141845-6c3d.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh tổng thể dự &aacute;n The Sapphire Residence Hạ Long, ph&iacute;a trước l&agrave; biệt thự The Sapphire Mansions hướng ra mặt vịnh</em></p>\r\n\r\n<h3>Vị tr&iacute;</h3>\r\n\r\n<p>Khu biệt thự The Sapphire Mansions Hạ Long tọa lạc tại l&ocirc; đất HH01 v&agrave; HH04 thuộc dự &aacute;n The Sapphire Residence tr&ecirc;n mặt đường Bến Đoan, phường Hồng Gai, TP. Hạ Long. C&aacute;c d&atilde;y biệt thự sở hữu địa thế hiếm c&oacute;, lưng tựa 2 t&ograve;a căn hộ cao cấp, căn hộ nghỉ dưỡng S1 v&agrave; S2 của The Sapphire Residence, hướng ra vịnh Hạ Long.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408114522-1b53.jpg\" /></p>\r\n\r\n<p><em>Vị tr&iacute; dự &aacute;n The Sapphire Mansions</em></p>\r\n\r\n<h3>Hạ tầng - Quy hoạch</h3>\r\n\r\n<p>Dự &aacute;n The Sapphire Mansions Bến Đoan tọa lạc tr&ecirc;n một trong những con đường bao biển đẹp nhất Việt Nam. Với vị tr&iacute; n&agrave;y, cư d&acirc;n sống tại The Sapphire Mansions&nbsp;sẽ được thừa hưởng hệ thống hạ tầng giao th&ocirc;ng đ&atilde; ph&aacute;t triển đồng bộ, dễ d&agrave;ng kết nối với nhiều tuyến giao th&ocirc;ng huyết mạch cũng như c&aacute;c trung t&acirc;m h&agrave;nh ch&iacute;nh &ndash; kinh tế - vui chơi - giải tr&iacute; nổi bật của khu vực như:</p>\r\n\r\n<ul>\r\n	<li>S&acirc;n bay V&acirc;n Đồn</li>\r\n	<li>Cầu B&atilde;i Ch&aacute;y</li>\r\n	<li>Bến t&agrave;u H&ograve;n Gai</li>\r\n	<li>Cao tốc H&agrave; Nội &ndash; Hải Ph&ograve;ng &ndash; Hạ Long &ndash; M&oacute;ng C&aacute;i</li>\r\n	<li>Hệ thống c&aacute;p treo Nữ ho&agrave;ng</li>\r\n	<li>Khu vui chơi giải tr&iacute; Sunworld</li>\r\n	<li>Trung t&acirc;m thương mại Vincom&hellip;</li>\r\n</ul>\r\n\r\n<h3>Tiện &iacute;ch</h3>\r\n\r\n<p>Biệt thự The Sapphire Mansions l&agrave; một phần của khu đ&ocirc; thị đẳng cấp quốc tế &nbsp;The Sapphire Hạ Long n&ecirc;n sẽ được thừa hưởng đẩy đủ c&aacute;c &nbsp;tiện &iacute;ch 5 sao như:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Bể bơi 4 m&ugrave;a, bể bơi ngo&agrave;i trời</li>\r\n	<li>Cigar lounge</li>\r\n	<li>Trung t&acirc;m thương mại</li>\r\n	<li>Ph&ograve;ng tập gym&nbsp;</li>\r\n	<li>C&ocirc;ng vi&ecirc;n</li>\r\n	<li>khu vui chơi d&agrave;nh cho trẻ em&hellip;</li>\r\n</ul>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408144304-bf2e.jpg\" /></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408144308-abd0.jpg\" /></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408144315-4b67.jpg\" /></p>\r\n\r\n<h3>Mặt bằng - Thiết kế</h3>\r\n\r\n<p>Dự &aacute;n The Sapphire Mansions Bến Đoan Hạ Long c&oacute; tổng cộng 47 căn biệt thự, diện t&iacute;ch đất từ 242,7 - 333,1m2, được quy hoạch th&agrave;nh 5 d&atilde;y:</p>\r\n\r\n<ul>\r\n	<li>3 d&atilde;y biệt thự đơn lập: Biệt thự Sydney, biệt thự Monaco, biệt thự Manhattan</li>\r\n	<li>D&atilde;y biệt thự song lập Venice</li>\r\n	<li>D&atilde;y Shopvilla Milan Arcade</li>\r\n</ul>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408115421-96cb.jpg\" /></p>\r\n\r\n<p><em>Mặt bằng tổng thể dự &aacute;n biệt thự The Sapphire Mansions Hạ Long</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408115758-ffa1.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh biệt thự đơn lập The Sapphire Mansions</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408115828-b088.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh biệt thự song lập The Sapphire Mansions</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408143155-a31f.jpg\" /></p>\r\n\r\n<p><em>Mỗi căn biệt thự đều c&oacute; bể bơi ri&ecirc;ng</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408143221-9d7f.jpg\" /></p>\r\n\r\n<p><em>Phối cảnh nội thất biệt thự The Sapphire Mansions</em></p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408143227-bb39.jpg\" /></p>\r\n\r\n<h3>Gi&aacute; b&aacute;n</h3>\r\n\r\n<p>Gi&aacute; b&aacute;n biệt thự The Sapphire Mansions Hạ Long cập nhật th&aacute;ng 4/2022: từ 180-365 triệu/m2, tương đương với khoảng từ 45-95 tỷ/căn t&ugrave;y vị tr&iacute;, diện t&iacute;ch.</p>\r\n\r\n<p>Ch&iacute;nh s&aacute;ch b&aacute;n h&agrave;ng biệt thự The Sapphire Mansions Hạ Long:</p>\r\n\r\n<ul>\r\n	<li>Tặng g&oacute;i dịch vụ quản l&yacute; trong 1 năm (kh&ocirc;ng bao gồm c&aacute;c chi ph&iacute; li&ecirc;n quan đến dịch vụ phải trả cho b&ecirc;n thứ 3 như: tr&ocirc;ng xe, điện, nước, th&ocirc;ng tin li&ecirc;n lạc, truyền h&igrave;nh c&aacute;p&hellip;) kể từ ng&agrave;y nhận b&agrave;n giao nh&agrave;. Từ năm thứ 02 trở đi mức ph&iacute; theo th&ocirc;ng b&aacute;o của BQL.</li>\r\n	<li>Chiết khấu 3,5% cho KH kh&ocirc;ng vay HTLS, thanh to&aacute;n theo tiến độ th&ocirc;ng thường.</li>\r\n	<li>KH thanh to&aacute;n sớm 95% tổng gi&aacute; trị HĐ bao gồm thuế VAT bằng vốn tự c&oacute; trong v&ograve;ng 10 ng&agrave;y kể từ ng&agrave;y k&yacute; HĐMB được hưởng l&atilde;i suất chiết khấu 9%/năm tr&ecirc;n khoản tiền (kh&ocirc;ng bao gồm VAT) v&agrave; số ng&agrave;y thanh to&aacute;n trước hạn. Khoản tiền n&agrave;y sẽ được giảm trừ v&agrave;o gi&aacute; trị thanh to&aacute;n.&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Tiến độ</h3>\r\n\r\n<p>Tiến độ thi c&ocirc;ng dự &aacute;n biệt thự The Sapphire Mansions Hạ Long được đ&aacute;nh gi&aacute; l&agrave; kh&aacute; nhanh ch&oacute;ng. C&aacute;c căn biệt thự dự kiến sẽ được ho&agrave;n th&agrave;nh v&agrave; b&agrave;n giao cho người mua trong năm 2022.</p>\r\n\r\n<p><img src=\"https://file4.batdongsan.com.vn/2022/04/08/20220408144556-a2f2.jpg\" /></p>\r\n\r\n<p><em>Ảnh tiến độ dự &aacute;n The Sapphire Mansions cuối năm 2021</em></p>', 1, 0, 0, 1, '2022-04-22 15:41:42', '2022-04-22 15:41:45'),
(9, 4, 1, 'Cho thuê căn hộ chung cư tại D\'. EL Dorado, Tây Hồ.', 'cho-thue-can-ho-chung-cu-tai-d-el-dorado-tay-ho', NULL, '<p>Th&ocirc;ng tin m&ocirc; tả</p>\r\n\r\n<p>Mức gi&aacute; 6 triệu/th&aacute;ng</p>\r\n\r\n<p>Diện t&iacute;ch46 m&sup2;</p>\r\n\r\n<p>Cho thu&ecirc; căn hộ chung cư tại D&#39;. EL Dorado, T&acirc;y Hồ.<br />\r\n<br />\r\nCăn hộ (1) diện t&iacute;ch: 50m2, 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch, 1 WC, view rất đẹp, Hồ T&acirc;y. Nội thất từ nguy&ecirc;n bản chủ đầu tư đến cơ bản, full đẹp như kh&aacute;ch sạn...<br />\r\n<br />\r\nCăn hộ (2) diện t&iacute;ch: 76m2, 2 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch, 2 WC, view rất đẹp, Hồ T&acirc;y v&agrave; th&agrave;nh phố. Nội thất từ nguy&ecirc;n bản chủ đầu tư đến cơ bản, full đẹp như kh&aacute;ch sạn...<br />\r\n<br />\r\nCăn hộ (3) diện t&iacute;ch: 110m2, 3 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch, 2 WC, view rất đẹp, hồ điều h&ograve;a v&agrave; s&acirc;n b&oacute;ng. Nội thất từ nguy&ecirc;n bản chủ đầu tư đến cơ bản, full đẹp như kh&aacute;ch sạn...<br />\r\n<br />\r\nTiện &iacute;ch b&ecirc;n trong dự &aacute;n bao gồm si&ecirc;u thị Vinmart, bể bơi, hệ thống cửa h&agrave;ng, nh&agrave; h&agrave;ng ăn uống, khu vui chơi cho trẻ em ngay dưới t&ograve;a nh&agrave;.<br />\r\n<br />\r\nTiện &iacute;ch b&ecirc;n ngo&agrave;i dự bao gồm: C&oacute; s&acirc;n vui chơi cho trẻ em rất rộng v&agrave; đẹp, c&oacute; c&ocirc;ng vi&ecirc;n hồ điều h&ograve;a rộng, đẹp, c&aacute;c trường mẫu gi&aacute;o, c&aacute;c trung t&acirc;m ngoại ngữ, trung t&acirc;m năng khiếu ngay trong khu chung cư.<br />\r\nGi&aacute;: Chỉ từ 4 tr/th&aacute;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://file4.batdongsan.com.vn/resize/745x510/2022/04/06/20220406103201-5ec2_wm.jpg\" /></p>', 1, 0, 0, 1, '2022-04-22 15:44:24', '2022-04-22 15:45:41'),
(10, 13, 1, 'BIỆT THỰ 200M2, LIỀN KỀ 75M2 - NHẬN NHÀ Ở NGAY T9/2022 - HỖ TRỢ NGÂN HÀNG 65%, CHIẾT KHẤU 4% TT SỚM', 'biet-thu-200m2-lien-ke-75m2-nhan-nha-o-ngay-t92022-ho-tro-ngan-hang-65-chiet-khau-4-tt-som', 'Dự án Eurowindow Twin Parks, Huyện Gia Lâm, Hà Nội', '<p>Mức gi&aacute;: Thỏa thuận</p>\r\n\r\n<p>Diện t&iacute;ch200 m&sup2;</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Th&ocirc;ng tin m&ocirc; tả</strong></span></p>\r\n\r\n<p>EUROWINDOW TWIN PARKS GIA L&Acirc;M - NGAY B&Ecirc;N CẠNH VINHOMES OCEAN PARK - B&Agrave;N GIAO TH&Aacute;NG 9/2022<br />\r\n--------- +++---------<br />\r\nTỔNG QUAN DỰ &Aacute;N:<br />\r\n- T&ecirc;n thương mại: Eurowindow Twin Parks<br />\r\n- Chủ đầu tư: Eurowindow Holding<br />\r\n- Nh&agrave; thầu thi c&ocirc;ng: Coteccons Group<br />\r\n- Tổng diện t&iacute;ch đất dự &aacute;n: 9.6 ha<br />\r\n- Quy m&ocirc; ph&aacute;t triển: 275 căn liền kề, 96 căn Biệt thự song lập, 3 C&ocirc;ng vi&ecirc;n, 1 nh&agrave; gửi xe 3 tầng.<br />\r\n- Loại h&igrave;nh ph&aacute;t triển:<br />\r\n+ Diện t&iacute;ch liền kề: 75 - 85m2, x&acirc;y dựng 77%<br />\r\n+ Diện t&iacute;ch biệt thự: 192.5 - 350m2, x&acirc;y dựng 56%<br />\r\n- Thời điểm khởi c&ocirc;ng: Qu&yacute; I/2021<br />\r\n- B&agrave;n giao: Qu&yacute; 3/2022<br />\r\n<br />\r\nTIỆN &Iacute;CH NỘI NGOẠI KHU ĐẲNG CẤP<br />\r\n- Bao quanh dự &aacute;n l&agrave; c&ocirc;ng vi&ecirc;n, hồ điều h&ograve;a rộng 29ha<br />\r\n- Bể bơi ngo&agrave;i trời, S&acirc;n chơi ngo&agrave;i trời<br />\r\n- Khu&acirc;n vi&ecirc;n c&acirc;y xanh v&agrave; thể thao n&ocirc;i khu l&ecirc;n tới gần 5.000m2<br />\r\n- 3 tầng đỗ xe th&ocirc;ng minh, dt l&ecirc;n tới hơn 9.200m2<br />\r\n- Tiện &iacute;ch ngoại khu: Sử dụng c&aacute;c tiện &iacute;ch Vin Ocen Park, Vinperl Land, Aone Mega Mall, Bệnh viện đa khoa Gia L&acirc;m, Vinmec, Học viện N&ocirc;ng Nghiệp, VinUni...<br />\r\nCơ hội đầu tư c&oacute; 1-0-2 tại Eurowindow Twin Park NĐT Th&ocirc;ng th&aacute;i kh&ocirc;ng thể bỏ qua</p>\r\n\r\n<p><img alt=\"\" src=\"https://file4.batdongsan.com.vn/resize/745x510/2022/04/22/20220422143916-cc8c_wm.jpg\" /></p>', 1, 0, 0, 1, '2022-04-22 15:49:17', '2022-04-22 15:49:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_bangdientu`
--

DROP TABLE IF EXISTS `cms_bangdientu`;
CREATE TABLE IF NOT EXISTS `cms_bangdientu` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LienKet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThuTuHienThi` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `KichHoat` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cms_bangdientu`
--

INSERT INTO `cms_bangdientu` (`ID`, `NoiDung`, `LienKet`, `ThuTuHienThi`, `KichHoat`, `created_at`, `updated_at`) VALUES
(3, 'Khu công nghiệp Hòa Bình 2 (KCN Hòa Bình Mở Rộng)', 'https://kland.vn/IndustrialPark/khu-cong-nghiep-hoa-binh-2-kon-tum.html', 1, 1, '2022-04-22 15:25:11', '2022-04-22 15:26:07'),
(4, 'Khan hiếm nguồn cung, giá căn hộ cao cấp leo thang', 'https://batdongsan.com.vn/tin-thi-truong/khan-hiem-nguon-cung-gia-can-ho-cao-cap-leo-thang-ar108777', 2, 1, '2022-04-22 16:03:33', '2022-04-22 16:03:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_chude`
--

DROP TABLE IF EXISTS `cms_chude`;
CREATE TABLE IF NOT EXISTS `cms_chude` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenChuDeKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ThuTuHienThi` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `cms_chude_tenchude_unique` (`TenChuDe`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cms_chude`
--

INSERT INTO `cms_chude` (`ID`, `TenChuDe`, `TenChuDeKhongDau`, `ThuTuHienThi`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'gioi-thieu', 0, '2022-04-17 14:46:32', '2022-04-17 14:46:32'),
(3, 'Dự án', 'du-an', 2, '2022-04-17 14:46:32', '2022-04-17 14:56:59'),
(4, 'Nhà đất cho thuê', 'nha-dat-cho-thue', 3, '2022-04-17 14:46:32', '2022-04-17 16:50:34'),
(11, 'Tin khác - Chưa phân loại', 'tin-khac-chua-phan-loai', 10, '2022-04-17 14:46:32', '2022-04-17 14:46:32'),
(13, 'Nhà đất bán', 'nha-dat-ban', 4, '2022-04-22 15:47:29', '2022-04-22 15:47:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_hinhanh`
--

DROP TABLE IF EXISTS `cms_hinhanh`;
CREATE TABLE IF NOT EXISTS `cms_hinhanh` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MaChuDe` bigint(20) UNSIGNED NOT NULL,
  `MaNguoiDung` bigint(20) UNSIGNED NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `MoTaKhongDau` text COLLATE utf8_unicode_ci NOT NULL,
  `ThuMuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LuotXem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `KiemDuyet` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `KichHoat` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `cms_hinhanh_machude_foreign` (`MaChuDe`),
  KEY `cms_hinhanh_manguoidung_foreign` (`MaNguoiDung`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cms_hinhanh`
--

INSERT INTO `cms_hinhanh` (`ID`, `MaChuDe`, `MaNguoiDung`, `MoTa`, `MoTaKhongDau`, `ThuMuc`, `LuotXem`, `KiemDuyet`, `KichHoat`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Dự án Grand Mercure Hoi An là quần thể khu du lịch, nghỉ dưỡng khách sạn và dịch vụ du lịch được xây dựng theo tiêu chuẩn 5 sao quốc tế, nằm tại xã Điện Dương, huyện Điện Bàn, tỉnh Quảng Nam', 'du-an-grand-mercure-hoi-an-la-quan-the-khu-du-lich-nghi-duong-khach-san-va-dich-vu-du-lich-duoc-xay-dung-theo-tieu-chuan-5-sao-quoc-te-nam-tai-xa-dien-duong-huyen-dien-ban-tinh-quang-nam', 'images/0000001', 5, 0, 1, '2022-04-17 16:20:01', '2022-04-25 14:07:41'),
(2, 4, 1, 'CHO THUÊ NHÀ NGUYÊN CĂN 451/24/19 XÔ VIẾT NGHỆ TĨNH, GIÁ 12TR/TH, LIÊN HỆ MS THÙY 090972441', 'cho-thue-nha-nguyen-can-4512419-xo-viet-nghe-tinh-gia-12trth-lien-he-ms-thuy-090972441', 'images/0000002', 3, 0, 1, '2022-04-22 16:15:09', '2022-04-25 13:47:45'),
(3, 4, 1, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'images/0000003', 0, 0, 1, '2022-04-25 14:07:23', '2022-04-25 14:07:23'),
(4, 3, 1, 'sqsqsq', 'sqsqsq', 'images/0000004', 0, 0, 1, '2022-04-25 14:07:53', '2022-04-25 14:07:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_lienketngoai`
--

DROP TABLE IF EXISTS `cms_lienketngoai`;
CREATE TABLE IF NOT EXISTS `cms_lienketngoai` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenLienKet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LienKet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ThuTuHienThi` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `KichHoat` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cms_lienketngoai`
--

INSERT INTO `cms_lienketngoai` (`ID`, `TenLienKet`, `LienKet`, `ThuTuHienThi`, `KichHoat`, `created_at`, `updated_at`) VALUES
(1, 'Thị trường bất động sản', 'https://kland.vn/post/market-news', 1, 1, '2022-04-22 15:28:08', '2022-04-22 15:28:08'),
(2, 'M&A là gì?', 'https://kland.vn/post/m_a-la-gi-va-m_a-tai-viet-nam-nhu-the-nao--p75.html', 2, 1, '2022-04-22 15:29:27', '2022-04-22 15:29:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_trinhchieu`
--

DROP TABLE IF EXISTS `cms_trinhchieu`;
CREATE TABLE IF NOT EXISTS `cms_trinhchieu` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TieuDeNho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenLienKet1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LienKet1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThuTuHienThi` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `KichHoat` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cms_trinhchieu`
--

INSERT INTO `cms_trinhchieu` (`ID`, `TieuDe`, `TieuDeNho`, `HinhAnh`, `TenLienKet1`, `LienKet1`, `ThuTuHienThi`, `KichHoat`, `created_at`, `updated_at`) VALUES
(1, 'Bất động sản Thiên Phúc', NULL, 'bat-dong-san-viet-nam.jpg', NULL, 'https://batdongsan.com.vn/?gclid=CjwKCAjwjZmTBhB4EiwAynRmD-LEVfx0put7yiK3Lm7mo6XPdWkYgDm4Ili2votXLss-vHU3ICZcDBoCGkwQAvD_BwE', 1, 1, '2022-04-17 15:17:47', '2022-04-25 12:18:55'),
(2, NULL, NULL, '1kinh-doanh-bat-dong-san.jpg', NULL, NULL, 1, 1, '2022-04-18 04:57:02', '2022-04-22 16:34:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hrm_chucvu`
--

DROP TABLE IF EXISTS `hrm_chucvu`;
CREATE TABLE IF NOT EXISTS `hrm_chucvu` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenChucVu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hrm_chucvu`
--

INSERT INTO `hrm_chucvu` (`ID`, `TenChucVu`, `created_at`, `updated_at`) VALUES
(1, 'Trưởng phòng', '2022-04-18 08:05:23', '2022-04-18 08:05:23'),
(2, 'Nhân viên', '2022-04-18 08:18:31', '2022-04-18 08:18:31'),
(3, 'Giám đốc', '2022-04-18 14:43:10', '2022-04-18 14:43:10'),
(4, 'Thư ký giám đốc', '2022-04-18 14:43:20', '2022-04-18 14:43:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hrm_nhanvien`
--

DROP TABLE IF EXISTS `hrm_nhanvien`;
CREATE TABLE IF NOT EXISTS `hrm_nhanvien` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MaNhanVien` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaChucVu` bigint(20) UNSIGNED DEFAULT NULL,
  `HoVaTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HoVaTenKhongDau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NamSinh` year(4) DEFAULT NULL,
  `NgayVaoLam` date DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `hrm_nhanvien_machucvu_foreign` (`MaChucVu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hrm_nhanvien`
--

INSERT INTO `hrm_nhanvien` (`ID`, `MaNhanVien`, `MaChucVu`, `HoVaTen`, `HoVaTenKhongDau`, `NamSinh`, `NgayVaoLam`, `Email`, `DienThoai`, `HinhAnh`, `created_at`, `updated_at`) VALUES
(1, 'NV01', 2, 'Nguyễn Thị Lệ Hằng', 'nguyen-thi-le-hang', 2000, '2025-11-28', 'tnhuy2000@gmail.com', '0368672641', 'hinh-nen-meo-3d-de-thuong.jpg', '2022-04-18 05:05:51', '2022-04-22 15:30:35'),
(4, 'NV05', 2, 'Nguyễn Hoàng Chương', 'nguyen-hoang-chuong', 2000, '2020-03-19', 'nhchuong12@gmail.com', '0368672643', 'digital-art-fantasy-art-cityscape-artwork-deviantart-fantasy-city-237-wallherecom.jpg', '2022-04-18 15:15:19', '2022-04-18 16:14:56'),
(5, 'NV04', 2, 'Trân Lê Minh Cường', 'tran-le-minh-cuong', 2000, '2028-06-16', 'tlmcuong@gmail.com', '096836872', 'tai-anh-nen-cong-nghe-cho-pc.jpg', '2022-04-18 16:15:55', '2022-04-22 15:30:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000001_create_sys_nguoidung_table', 1),
(2, '2014_10_12_000002_create_sys_khoiphucmatkhau_table', 1),
(3, '2020_05_15_000001_create_cms_chude_table', 1),
(4, '2020_05_15_000003_create_cms_baiviet_table', 1),
(5, '2020_05_15_000004_create_cms_bangdientu_table', 1),
(6, '2020_05_15_000005_create_cms_hinhanh_table', 1),
(7, '2020_05_15_000006_create_cms_trinhchieu_table', 1),
(8, '2020_05_15_000007_create_cms_trinhchieu_mini_table', 1),
(9, '2020_05_15_000009_create_cms_lienketngoai_table', 1),
(10, '2020_09_28_000001_create_hrm_chucvu_table', 1),
(11, '2020_09_28_000003_create_hrm_nhanvien_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sys_nguoidung`
--

DROP TABLE IF EXISTS `sys_nguoidung`;
CREATE TABLE IF NOT EXISTS `sys_nguoidung` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `privilege` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'qlbaiviet',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sys_nguoidung_username_unique` (`username`),
  UNIQUE KEY `sys_nguoidung_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sys_nguoidung`
--

INSERT INTO `sys_nguoidung` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `privilege`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'tlmcuong_19th1@student.agu.edu.vn', NULL, '$2y$10$TtBKrbad6iPTGy1TzQKZlOHtq/UyYGbElohja3x8VGHSutf68UX5m', 'poutO4dnWdj751gAFzes5aJySlKhJHRxYm38p6bFSlUfWI9nc3yQEkDpl2P6', 'superadmin', '2022-04-17 14:46:32', '2022-04-25 13:53:31'),
(2, 'Nhân Viên 2', 'nhanvien2', 'nhanvien2@gmail.com', NULL, '$2y$10$dlz7y309umuBFBGcxW3TA.W9LgGnZUVpVvOp9NFBdUKfFArSNfTJ2', 'GKDgZTRReDDB8h3QGR8DtmHvph3XltjuCPlH9gK8UWERimCMKjJHfRvXQREi', 'qldanhmuc', '2022-04-18 05:07:14', '2022-04-20 03:42:47'),
(3, 'Nhân Viên 1', 'nhanvien1', 'nhanvien1@gmail.com', NULL, '$2y$10$EPr23JcqS9URxPE4KGL3S.8Mo2j/1qSA85z9tEEeAOjqGZGHYEziC', 'kreQI94kxJthOW09gsZ2iwaTKZe3g17uRWW2HTe0zZcdQbltBePEG8iEryGI', 'qlbaiviet', '2022-04-18 05:25:35', '2022-04-22 16:20:05');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cms_baiviet`
--
ALTER TABLE `cms_baiviet`
  ADD CONSTRAINT `cms_baiviet_machude_foreign` FOREIGN KEY (`MaChuDe`) REFERENCES `cms_chude` (`ID`),
  ADD CONSTRAINT `cms_baiviet_manguoidung_foreign` FOREIGN KEY (`MaNguoiDung`) REFERENCES `sys_nguoidung` (`id`);

--
-- Các ràng buộc cho bảng `cms_hinhanh`
--
ALTER TABLE `cms_hinhanh`
  ADD CONSTRAINT `cms_hinhanh_machude_foreign` FOREIGN KEY (`MaChuDe`) REFERENCES `cms_chude` (`ID`),
  ADD CONSTRAINT `cms_hinhanh_manguoidung_foreign` FOREIGN KEY (`MaNguoiDung`) REFERENCES `sys_nguoidung` (`id`);

--
-- Các ràng buộc cho bảng `hrm_nhanvien`
--
ALTER TABLE `hrm_nhanvien`
  ADD CONSTRAINT `hrm_nhanvien_machucvu_foreign` FOREIGN KEY (`MaChucVu`) REFERENCES `hrm_chucvu` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
