-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2022 lúc 01:45 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_cnpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `noidung` varchar(100) NOT NULL,
  `postdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_date`
--

CREATE TABLE `cart_date` (
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `usename` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `usename`, `password`, `admin_status`) VALUES
(1, 'vietadmin', '1dc187f92fa9d62b43cdb4549ea0ebab', 1),
(2, 'viet', '123456', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(1, 'Alo bài viết mới ', '<p>Tin covid h&ocirc;m nay được cập nhật hằng ng&agrave;y với số ca nhiễm giảm dần tại tphcm v&agrave; c&aacute;c tỉnh th&agrave;nh l&acirc;n cận...</p>\r\n', '<p>dsadasdasdasdas</p>\r\n', 5, 1, '1633760717_dong-nguoi-bo-pho-ve-que-va-nhu-cau-quan-tri-cac-van-de-xa-hoi.gif'),
(2, 'Alo bài viết mới 123', '<p>dsad</p>\r\n', '<p>asdasd</p>\r\n', 4, 1, '1633760708_dong-nguoi-bo-pho-ve-que-va-nhu-cau-quan-tri-cac-van-de-xa-hoi.gif'),
(4, 'Alo bài viết mới bóng đá', '<p>fsdfsdf</p>\r\n', '<p>fdsfsdfsdf</p>\r\n', 2, 1, '1633760703_dong-nguoi-bo-pho-ve-que-va-nhu-cau-quan-tri-cac-van-de-xa-hoi.gif'),
(5, 'Tin covid hôm nay', '<p>Tin covid h&ocirc;m nay được cập nhật hằng ng&agrave;y với số ca nhiễm giảm dần tại tphcm v&agrave; c&aacute;c tỉnh th&agrave;nh l&acirc;n cận...</p>\r\n', '<p>T&iacute;nh từ đầu th&aacute;ng 7 đến nay, th&agrave;nh phố đ&atilde; th&agrave;nh lập 16 bệnh viện d&atilde; chiến với quy m&ocirc; khoảng 37.000 giường, nhiệm vụ ch&iacute;nh l&agrave; tiếp nhận, điều trị F0 kh&ocirc;ng c&oacute; triệu chứng hoặc c&oacute; biểu hiện nhẹ. T&iacute;nh đến ng&agrave;y 8/10, th&agrave;nh phố ghi nhận 9.443 F0 đang điều trị tại c&aacute;c cơ sở n&agrave;y.</p>\r\n\r\n<p>Sở Y tế TP.HCM cho biết c&aacute;c bệnh viện d&atilde; chiến được trưng dụng từ khu nh&agrave; t&aacute;i định cư, k&yacute; t&uacute;c x&aacute; của trường đại học, cao đẳng n&ecirc;n kh&ocirc;ng thể sử dụng l&acirc;u d&agrave;i. Nhất l&agrave; trong bối cảnh dịch bệnh cơ bản được kiểm so&aacute;t, học sinh, sinh vi&ecirc;n bắt đầu trở lại học tập.</p>\r\n\r\n<p>Bệnh viện d&atilde; chiến số 5 (đặt tại Thuận Kiều Plaza, quận 5) l&agrave; một trong 4 bệnh viện d&atilde; chiến ngừng hoạt động sau c&ugrave;ng. Ảnh: Phạm Ng&ocirc;n.</p>\r\n\r\n<p><img alt=\"Benh vien da chien o TP.HCM anh 1\" src=\"https://znews-photo.zadn.vn/w1920/Uploaded/yfsgs/2021_07_14/covid_zing.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><br />\r\nNguy&ecirc;n nh&acirc;n l&agrave; những bệnh viện n&agrave;y đ&atilde; được đầu tư hệ thống oxy lỏng, giường hồi sức để tiếp nhận F0 nặng.Dự kiến, c&aacute;c bệnh viện d&atilde; chiến th&agrave;nh phố lần lượt sẽ ngừng hoạt động v&agrave;o cuối th&aacute;ng 10, th&aacute;ng 11 v&agrave; th&aacute;ng 12 năm nay. Ri&ecirc;ng Bệnh viện d&atilde; chiến số 3, số 6, số 8 ở khu t&aacute;i định cư Thủ Thi&ecirc;m (An Kh&aacute;nh, TP Thủ Đức) sẽ l&agrave; những cơ sở ngừng hoạt động cuối c&ugrave;ng, dự kiến v&agrave;o cuối th&aacute;ng 12.</p>\r\n\r\n<p>Ngo&agrave;i ra, Bệnh viện d&atilde; chiến số 5 (đặt tại Thuận Kiều Plaza, quận 5) cũng trong danh s&aacute;ch cơ sở d&atilde; chiến ngừng hoạt động sau c&ugrave;ng. Bệnh viện n&agrave;y phụ tr&aacute;ch tiếp nhận c&aacute;c trường hợp F0 mức độ nhẹ v&agrave; trung b&igrave;nh từ c&aacute;c bệnh viện trong khu vực trung t&acirc;m th&agrave;nh phố (Bệnh viện Nguyễn Tr&atilde;i, Nguyễn Tri Phương, An B&igrave;nh).</p>\r\n', 5, 1, '1633760748_dong-nguoi-bo-pho-ve-que-va-nhu-cau-quan-tri-cac-van-de-xa-hoi.gif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`) VALUES
(1, 14, '4901', 1, ''),
(2, 14, '9101', 1, ''),
(3, 14, '5257', 1, ''),
(5, 15, '6320', 1, ''),
(6, 16, '6930', 1, ''),
(17, 17, '2756', 1, ''),
(18, 18, '479', 1, ''),
(19, 19, '6326', 1, ''),
(20, 22, '8580', 1, ''),
(21, 25, '882', 1, ''),
(22, 27, '4909', 1, ''),
(23, 27, '1395', 1, ''),
(24, 27, '9568', 1, ''),
(25, 27, '127', 1, ''),
(26, 27, '1341', 1, ''),
(27, 27, '7879', 1, ''),
(28, 27, '6722', 1, ''),
(29, 27, '5511', 1, ''),
(30, 27, '9947', 1, ''),
(31, 27, '9131', 1, ''),
(32, 28, '5996', 1, ''),
(33, 27, '3028', 1, ''),
(34, 27, '4939', 1, ''),
(35, 27, '7094', 1, ''),
(36, 27, '9985', 0, ''),
(37, 27, '2293', 1, ''),
(38, 29, '3738', 1, ''),
(39, 29, '9392', 1, ''),
(40, 29, '6139', 1, ''),
(41, 28, '2124', 1, ''),
(42, 28, '7239', 1, ''),
(43, 29, '6581', 1, ''),
(44, 29, '313', 1, ''),
(45, 29, '5302', 1, ''),
(46, 29, '7706', 1, ''),
(47, 29, '4611', 1, ''),
(48, 29, '5033', 1, ''),
(49, 29, '2423', 1, ''),
(50, 29, '5603', 1, ''),
(51, 29, '8600', 1, ''),
(52, 29, '531', 1, ''),
(53, 30, '7370', 1, ''),
(54, 30, '1200', 1, ''),
(55, 30, '1516', 1, ''),
(56, 30, '4209', 1, ''),
(57, 30, '7529', 1, ''),
(58, 30, '7426', 1, ''),
(59, 30, '1524', 1, ''),
(60, 30, '2672', 1, ''),
(61, 30, '3717', 1, ''),
(62, 30, '8173', 1, ''),
(63, 30, '9615', 1, ''),
(64, 30, '733', 1, ''),
(65, 30, '6309', 1, ''),
(66, 30, '8619', 1, ''),
(67, 30, '9739', 1, ''),
(68, 30, '4953', 1, ''),
(69, 30, '9145', 1, ''),
(70, 30, '5816', 1, ''),
(71, 30, '3588', 1, ''),
(72, 30, '859', 1, ''),
(73, 30, '5792', 1, ''),
(74, 30, '3758', 1, ''),
(75, 30, '6404', 1, ''),
(76, 30, '3463', 1, ''),
(77, 30, '7365', 1, ''),
(78, 30, '6057', 1, ''),
(79, 30, '71', 1, ''),
(80, 30, '8135', 1, ''),
(81, 30, '4791', 1, ''),
(82, 30, '7190', 1, ''),
(83, 30, '6787', 1, ''),
(84, 30, '255', 1, ''),
(85, 30, '4687', 1, ''),
(86, 30, '6716', 1, ''),
(87, 30, '1459', 1, ''),
(88, 30, '1403', 1, ''),
(89, 30, '8083', 1, ''),
(90, 30, '7727', 1, ''),
(91, 30, '368', 1, ''),
(92, 30, '3778', 1, ''),
(93, 30, '5870', 1, ''),
(94, 30, '1349', 1, ''),
(95, 30, '4495', 1, ''),
(96, 30, '1210', 1, ''),
(97, 30, '1794', 1, ''),
(98, 30, '4457', 1, ''),
(99, 30, '4806', 1, ''),
(100, 30, '3853', 1, ''),
(101, 30, '28', 1, ''),
(102, 30, '8151', 1, ''),
(103, 30, '1711', 1, ''),
(104, 30, '1337', 1, ''),
(105, 30, '2849', 1, ''),
(106, 30, '8721', 1, ''),
(107, 30, '9759', 1, ''),
(108, 30, '4209', 1, ''),
(109, 30, '1581', 1, ''),
(110, 30, '8814', 1, ''),
(111, 30, '6760', 1, ''),
(112, 30, '4976', 1, ''),
(113, 30, '3252', 1, ''),
(114, 30, '5806', 1, ''),
(115, 30, '767', 1, ''),
(116, 30, '7733', 1, ''),
(117, 30, '10', 1, ''),
(118, 30, '1197', 1, ''),
(119, 30, '6824', 1, ''),
(120, 30, '3587', 1, ''),
(121, 30, '1469', 1, ''),
(122, 31, '8059', 1, ''),
(123, 31, '5271', 1, ''),
(124, 31, '3313', 1, ''),
(125, 31, '1779', 1, ''),
(126, 32, '3770', 1, ''),
(127, 32, '3339', 1, ''),
(128, 32, '7090', 1, ''),
(129, 32, '4369', 1, ''),
(130, 32, '3465', 1, ''),
(131, 32, '2299', 1, ''),
(132, 33, '7416', 1, ''),
(133, 34, '7481', 1, ''),
(134, 34, '7309', 1, ''),
(135, 34, '6503', 0, ''),
(136, 34, '7911', 1, ''),
(137, 34, '2523', 1, ''),
(138, 35, '9527', 1, ''),
(139, 36, '8951', 1, ''),
(140, 36, '386', 1, ''),
(141, 37, '425', 1, ''),
(142, 37, '7215', 1, ''),
(143, 37, '5275', 1, ''),
(144, 36, '9782', 1, ''),
(145, 36, '4218', 1, ''),
(146, 37, '9810', 1, ''),
(147, 37, '3695', 1, ''),
(148, 36, '4174', 1, ''),
(149, 38, '1072', 1, ''),
(150, 38, '8378', 1, ''),
(151, 38, '3720', 1, ''),
(152, 38, '9509', 1, ''),
(153, 38, '769', 1, ''),
(154, 38, '2337', 1, ''),
(155, 38, '5181', 1, ''),
(156, 38, '5299', 1, ''),
(157, 38, '9615', 1, ''),
(158, 38, '6055', 1, ''),
(159, 38, '8442', 1, ''),
(160, 38, '1268', 1, ''),
(161, 38, '7638', 1, ''),
(162, 38, '3347', 1, ''),
(163, 38, '3553', 1, ''),
(164, 38, '1941', 1, ''),
(165, 38, '1473', 1, ''),
(166, 38, '6046', 1, ''),
(167, 38, '5935', 1, ''),
(168, 38, '9011', 1, ''),
(169, 38, '8644', 1, ''),
(170, 38, '3586', 1, ''),
(171, 38, '2012', 1, ''),
(172, 38, '2335', 1, ''),
(173, 38, '8671', 1, ''),
(174, 38, '6503', 0, ''),
(175, 38, '548', 1, ''),
(176, 38, '1034', 1, ''),
(177, 38, '4985', 1, ''),
(178, 38, '3030', 1, ''),
(179, 38, '578', 1, ''),
(180, 38, '3015', 1, ''),
(181, 38, '9214', 1, ''),
(182, 38, '7613', 1, ''),
(183, 38, '9175', 1, ''),
(184, 38, '4414', 1, ''),
(185, 38, '5045', 1, ''),
(186, 38, '9404', 1, ''),
(187, 38, '7207', 1, ''),
(188, 38, '4310', 1, ''),
(189, 0, '4519', 1, ''),
(190, 0, '5304', 1, ''),
(191, 0, '8593', 1, ''),
(192, 0, '3767', 1, ''),
(193, 0, '9015', 1, ''),
(194, 0, '8285', 1, ''),
(195, 0, '1680', 1, ''),
(196, 0, '3112', 1, ''),
(197, 0, '1697', 1, ''),
(198, 0, '6715', 1, ''),
(199, 0, '4486', 1, ''),
(200, 0, '1041', 1, ''),
(201, 0, '831', 1, ''),
(202, 39, '7167', 1, ''),
(203, 39, '9334', 1, ''),
(204, 39, '6246', 1, ''),
(205, 39, '9753', 1, ''),
(206, 39, '6334', 1, ''),
(207, 39, '1736', 1, ''),
(208, 39, '7279', 1, ''),
(209, 39, '7727', 1, ''),
(210, 39, '9782', 1, ''),
(211, 39, '3878', 1, ''),
(212, 39, '8943', 1, ''),
(213, 39, '280', 1, ''),
(214, 39, '3266', 1, ''),
(215, 39, '1421', 1, ''),
(216, 39, '8439', 1, ''),
(217, 39, '4983', 1, ''),
(218, 39, '5929', 1, ''),
(219, 39, '4875', 1, ''),
(220, 39, '2383', 1, ''),
(221, 39, '4156', 1, ''),
(222, 39, '7502', 0, ''),
(223, 39, '2786', 1, ''),
(224, 39, '648', 1, ''),
(225, 39, '7721', 1, ''),
(226, 39, '8973', 1, ''),
(227, 39, '8084', 1, ''),
(228, 39, '8027', 1, ''),
(229, 39, '5402', 1, ''),
(230, 40, '7498', 1, ''),
(231, 54, '478', 1, ''),
(232, 54, '8593', 1, ''),
(233, 54, '20', 1, ''),
(234, 54, '3061', 1, ''),
(235, 54, '227', 1, ''),
(236, 54, '9012', 1, ''),
(237, 54, '314', 1, ''),
(238, 54, '4841', 1, ''),
(239, 56, '9190', 1, ''),
(240, 56, '7385', 1, ''),
(241, 56, '7034', 1, ''),
(242, 56, '2057', 1, ''),
(243, 60, '9203', 1, ''),
(244, 60, '3816', 1, ''),
(245, 60, '4462', 1, ''),
(246, 60, '7565', 1, ''),
(247, 60, '9841', 1, ''),
(248, 60, '7659', 1, ''),
(249, 60, '5457', 1, ''),
(250, 60, '6154', 1, ''),
(251, 60, '1284', 1, ''),
(252, 60, '1299', 1, ''),
(253, 60, '6248', 1, ''),
(254, 60, '1220', 0, ''),
(255, 60, '8058', 1, ''),
(256, 62, '2296', 1, ''),
(257, 39, '5783', 1, ''),
(258, 66, '7593', 1, ''),
(259, 66, '3066', 1, ''),
(260, 66, '3469', 1, ''),
(261, 66, '3915', 1, ''),
(262, 66, '4731', 0, ''),
(263, 66, '2720', 1, ''),
(264, 66, '9494', 1, ''),
(265, 66, '391', 1, ''),
(266, 67, '6331', 0, ''),
(267, 67, '8346', 1, ''),
(268, 67, '6841', 1, ''),
(269, 67, '4995', 1, ''),
(270, 67, '2495', 1, ''),
(271, 67, '5759', 1, ''),
(272, 67, '7470', 1, ''),
(273, 67, '2464', 1, ''),
(274, 76, '22', 1, ''),
(275, 76, '8044', 1, ''),
(276, 80, '869', 1, ''),
(277, 80, '2637', 1, ''),
(278, 81, '2046', 1, ''),
(279, 81, '9204', 1, ''),
(280, 82, '4350', 1, ''),
(281, 82, '9047', 1, ''),
(282, 82, '8615', 1, ''),
(283, 82, '6740', 1, ''),
(284, 82, '2486', 1, ''),
(285, 83, '9025', 1, ''),
(286, 83, '1133', 1, ''),
(287, 83, '5417', 1, ''),
(288, 83, '7864', 0, ''),
(289, 83, '612', 1, ''),
(290, 83, '7825', 1, ''),
(291, 83, '7217', 0, ''),
(292, 84, '6976', 0, ''),
(293, 85, '2598', 0, ''),
(294, 86, '2726', 0, ''),
(295, 86, '655', 0, ''),
(296, 87, '5110', 0, ''),
(297, 87, '9985', 0, ''),
(298, 88, '8588', 0, ''),
(299, 89, '9807', 0, ''),
(300, 89, '1471', 0, ''),
(301, 90, '963', 0, ''),
(302, 91, '8075', 0, ''),
(303, 95, '6973', 1, ''),
(304, 95, '7857', 1, ''),
(305, 95, '6492', 0, ''),
(306, 97, '9310', 1, ''),
(307, 98, '7556', 1, ''),
(308, 98, '7609', 1, ''),
(309, 99, '1817', 1, ''),
(310, 99, '5817', 1, ''),
(311, 99, '460', 1, ''),
(312, 100, '2205', 1, ''),
(313, 100, '7880', 1, ''),
(314, 100, '498', 1, ''),
(315, 100, '3665', 1, ''),
(316, 100, '5901', 1, ''),
(317, 100, '6160', 1, ''),
(318, 101, '2740', 1, ''),
(319, 102, '7502', 0, ''),
(320, 103, '3070', 1, ''),
(321, 104, '572', 1, ''),
(322, 105, '116', 1, ''),
(323, 106, '289', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(30, '6740', 51, 1),
(31, '2486', 86, 1),
(32, '2486', 84, 1),
(33, '2486', 81, 1),
(34, '9025', 91, 0),
(35, '9025', 89, 0),
(36, '9025', 87, 0),
(37, '1133', 90, 0),
(38, '5417', 89, 0),
(39, '7864', 91, 0),
(40, '612', 86, 0),
(41, '612', 90, 0),
(42, '7825', 85, 0),
(43, '7825', 90, 0),
(44, '7217', 90, 0),
(45, '6976', 91, 0),
(46, '2598', 89, 0),
(47, '2726', 80, 0),
(48, '655', 90, 0),
(49, '5110', 90, 4),
(50, '9985', 84, 1),
(51, '8588', 95, 1),
(52, '8588', 96, 2),
(53, '9807', 92, 2),
(54, '1471', 96, 1),
(55, '963', 51, 1),
(56, '8075', 95, 1),
(57, '6973', 91, 1),
(58, '6973', 95, 1),
(59, '6492', 86, 1),
(60, '9310', 95, 1),
(61, '7556', 92, 1),
(62, '7609', 92, 1),
(63, '1817', 75, 1),
(64, '1817', 83, 1),
(65, '5817', 95, 1),
(66, '460', 78, 9),
(67, '2205', 91, 1),
(68, '7880', 95, 1),
(69, '498', 95, 10),
(70, '3665', 95, 1),
(71, '5901', 87, 1),
(72, '6160', 94, 1),
(73, '6160', 95, 1),
(74, '6160', 92, 1),
(75, '2740', 96, 1),
(76, '7502', 83, 1),
(77, '7502', 77, 1),
(78, '3070', 51, 1),
(79, '3070', 73, 1),
(80, '572', 73, 1),
(81, '116', 90, 1),
(82, '289', 87, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'Hiếu Trương', 'truongngoctanhieu2018@gmail.com', 'Dương Quãng Hàm 12 ', '25f9e794323b453885f5181f1b624d0b', '0932023992 '),
(6, 'xuân', '123@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '3165166'),
(8, 'Hiếu Trương', 'maxime80@example.net', 'Dương Quãng Hàm 12  giao hang', '25f9e794323b453885f5181f1b624d0b', '0932023992'),
(9, 'Hiếu Trương', 'truongngoctanhieu2018@gmail.com', 'Dương Quãng Hàm 12  giao hang', '25f9e794323b453885f5181f1b624d0b', '0932023992'),
(10, 'Hiếu Trương', 'truongngoctanhieu2018@gmail.com', 'Dương Quãng Hàm 12  giao hang', '25f9e794323b453885f5181f1b624d0b', '0932023992'),
(11, 'Hiếu Trương 123', 'truongngoctanhieu2018@gmail.com', 'Dương Quãng Hàm 12  giao hang', 'e10adc3949ba59abbe56e057f20f883e', '0932023992'),
(12, 'Hiếu Trương 123', 'truongngoctanhieu2018@gmail.com', 'Dương Quãng Hàm 12  giao hang', 'e10adc3949ba59abbe56e057f20f883e', '0932023992'),
(18, 'Nguyễn Quang Việt', '123@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(19, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '74ee69b477c3e93aa2d262b24dc72cd1', '0397636901'),
(20, 'Tú', 'abc@gmail.com', 'ádad', 'a45fdb1e4ac646c9e65a1769663e5704', '16566156'),
(21, 'Vân', 'vansu@gmail.com', 'Vĩnh Phúc', '1dc187f92fa9d62b43cdb4549ea0ebab', '0397636901'),
(23, 'hoàng', 'nguyenquangviet2k1@gmail.com', 'VT', '6c44e5cd17f0019c64b042e4a745412a', '0397636901'),
(24, 'Nguyễn Quang Việt', 'nguyenquang@gmail.com', 'Vĩnh Phúc', '1dc187f92fa9d62b43cdb4549ea0ebab', '0397636901'),
(25, 'Tú', 'nqv@gmail.com', 'Vĩnh Phúc', '1dc187f92fa9d62b43cdb4549ea0ebab', '0397636901'),
(26, 'Nguyễn Quang Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(27, 'Nguyễn Quang Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(28, 'hoàng', 'nguyenquangviet2k1@gmail.com', 'VT', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(29, 'sú', 'cde@gmail.com', 'ấdadfffff', '74ee69b477c3e93aa2d262b24dc72cd1', '1236416546'),
(30, 'Việt vân', 'nguyenquangviet2k1@gmail.com', 'VT', 'a45fdb1e4ac646c9e65a1769663e5704', '0397636901'),
(31, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(32, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(33, 'xuân', 'abc@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(34, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(35, 'xuân', 'cde@gmail.com', 'VT', '6c44e5cd17f0019c64b042e4a745412a', '0397636901'),
(36, 'Đoàn Văn Chiến', 'chiena1@gmail.com', 'Vĩnh Tường', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(37, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(38, 'Nguyễn Quang Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(39, 'hoàng', '123@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(40, 'aaa', 'nqv@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(41, 'Việt', 'nguyenquangviet2k1@gmail.com', 'ádad', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(42, 'Việt', 'nqv@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '132133'),
(43, 'Việt', 'nqv@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '132133'),
(44, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(45, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(46, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(47, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(48, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(49, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(50, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(51, 'ấdad', 'abc@gmail.com', 'adsdada', '1dc187f92fa9d62b43cdb4549ea0ebab', '665665'),
(52, 'add', 'abc@gmail.com', 'adadad', '2da8936eb60ea23ac55d9b6d31fdc71f', '0397636901'),
(53, 'add', 'abc@gmail.com', 'adadad', '2da8936eb60ea23ac55d9b6d31fdc71f', '0397636901'),
(54, 'add', 'abc@gmail.com', 'adadad', '2da8936eb60ea23ac55d9b6d31fdc71f', '0397636901'),
(55, 'Việt', '123@gmail.com', 'aa', '1ca6f85fb1574a8515cc07df72d3bfe0', '1233'),
(56, 'Việt', '123@gmail.com', 'aa', '1ca6f85fb1574a8515cc07df72d3bfe0', '1233'),
(57, 'Việt', 'abc@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(58, 'Việt', 'abc@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(59, 'hoàng', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(60, 'hoàng', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(61, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(62, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(63, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(64, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(65, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(66, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(67, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(68, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(69, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(70, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '1ca6f85fb1574a8515cc07df72d3bfe0', '0397636901'),
(71, 'Việt', 'nguyensâsas@gmail.com', 'Vĩnh Phúc', '1dc187f92fa9d62b43cdb4549ea0ebab', '0397636901'),
(72, 'hoàng', 'dangtuan@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(73, 'hoàng', 'dangtuan@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(74, 'hoàng', 'dangtuan@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(75, 'Việt', 'nguyensâsas@gmail.com', 'Vĩnh Phúc', '1dc187f92fa9d62b43cdb4549ea0ebab', '0397636901'),
(76, 'ádadasdad', 'nqv@gmail.com', 'ádadad', '1dc187f92fa9d62b43cdb4549ea0ebab', '6516323123'),
(77, 'Việt', 'abc@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(78, 'Việt', 'abc@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(79, 'Việt', 'abc@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(80, 'Việt', 'abc@gmail.com', 'Vĩnh Phúc', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(81, 'Nguyễn Quang Việt', 'abc@gmail.com', 'Vĩnh Tường', 'a45fdb1e4ac646c9e65a1769663e5704', '0397636901'),
(82, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', '74ee69b477c3e93aa2d262b24dc72cd1', '0397636901'),
(83, 'Hoàng Xuân', 'nguyenquanghuy@gmail.com', 'Tan Tu', 'e10adc3949ba59abbe56e057f20f883e', '1233456498'),
(84, 'Tú Nguyễn', 'abcTu@gmail.com', 'VT', '74ee69b477c3e93aa2d262b24dc72cd1', '44998965'),
(85, 'Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(86, 'Nguyễn Quang Việt', 'nguyenquangviet2k1@gmail.com', 'Vĩnh Phúc', '1dc187f92fa9d62b43cdb4549ea0ebab', '0397636901'),
(87, 'Tú', '123@gmail.com', 'ádad', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(88, 'Nguyễn Quang Việt', 'nguyenquangviet2k1@gmail.com', 'VT', 'e10adc3949ba59abbe56e057f20f883e', '0397636901'),
(89, 'Trang', 'vithihuyentrang789@gmail.com', 'jj', '4d361c2cee72356c7dcc1ef393557b9d', '08jhney4t'),
(90, 'Trang', 'hdtft@gmail.com', 'Hà Nội', '17cedeccc3a6555b9a5826e4d726eae3', '0364536468'),
(91, 'Trang', 'hdtft@gmail.com', 'Hà Nội', '038a8fdd42b782a0fdfb6dcda75da4b1', '0364536468'),
(92, 'ềdwddef', 'êf', 'ư3e', 'cb9984f75c6dcb2bb6f4e50d2ba18e9e', 'thy'),
(93, 'Trang', 'hdtft@gmail.com', 'Hà Nội', '2d917f5d1275e96fd75e6352e26b1387', '0364536468'),
(94, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'c786f96bb9eef05cd4c8641fc7cdeb24', '0364536468'),
(95, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'c786f96bb9eef05cd4c8641fc7cdeb24', '0364536468'),
(96, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468'),
(97, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468'),
(98, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468'),
(99, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468'),
(100, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468'),
(101, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468'),
(102, 'Trang', 'hehe@gmail.com', 'hdfhf', '202cb962ac59075b964b07152d234b70', '098746'),
(103, 'Trang', 'htrangtrang2001@gmail.com', 'Nghệ An', '038a8fdd42b782a0fdfb6dcda75da4b1', '0826686687'),
(104, 'Trang', 'htrangtrang2001@gmail.com', 'hahah', '1b15d4954364a128402597edcd3c48d4', '9587'),
(105, 'Trang', 'hdtft@gmail.com', 'Hà Nội', 'cb9984f75c6dcb2bb6f4e50d2ba18e9e', '0364536468'),
(106, 'ềdwddef', 'hdtft@gmail.com', 'Hà Nội ', 'd0fb963ff976f9c37fc81fe03c21ea7b', '0364536468');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(25, 'Hoa Sinh Nhật', 7),
(26, 'Hoa Khai Trương', 10),
(27, 'Hoa Cưới', 11),
(28, 'Hoa Tình Yêu', 12),
(29, 'Hoa Chia Buồn', 13),
(30, 'Hoa Lan', 14),
(31, 'Giỏ Trái Cây', 15),
(32, 'Lãng Hoa', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(2, 'tin bóng đá', 2),
(4, 'tin game', 2),
(5, 'tin kinh tế', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<ol>\r\n	<li>\r\n	<h3>Số điện thoại :<strong> </strong>0932023992 Anh hiếu</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Zalo : 0932023992 HieuTanTutorial</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Fb :<a href=\"http://facebook.com/hieutan94\"> facebook.com/hieutan94</a></h3>\r\n	</li>\r\n	<li>\r\n	<h3>Instagram : <a href=\"http://instagram.com/hieutan94\">/hieutan94</a></h3>\r\n	</li>\r\n	<li>\r\n	<h3>Youtube : <a href=\"https://www.youtube.com/channel/UCnfVQy051QFO-Ns8El1zL4w\" target=\"_blank\">youtube.com/HieuTutorialwithliveproject</a></h3>\r\n	</li>\r\n</ol>\r\n\r\n<h3><strong>Chuy&ecirc;n cung cấp c&aacute;c kh&oacute;a học online miễn ph&iacute; tr&ecirc;n youtube,nhằm gi&uacute;p cho c&aacute;c bạn hiểu 1 phần n&agrave;o đ&oacute; về lập tr&igrave;nh n&oacute;i chung v&agrave; lập tr&igrave;nh web n&oacute;i ri&ecirc;ng ,cảm ơn c&aacute;c bạn đ&atilde; ủng hộ v&agrave; donate momo cho m&igrave;nh. &lt;3 &lt;3 &lt;3 &lt;3 &lt;3&nbsp;😘 😗 😙 😚 😋 😛 😝 😜</strong>💁&zwj;♀️ 💁 💁&zwj;♂️ 🙅&zwj;♀️ 🙅 🙅&zwj;♂️ 🙆&zwj;♀️ 🙆</h3>\r\n\r\n<p><img alt=\"\" src=\"https://s3.amazonaws.com/websitebeaver/blog/php-pdo-vs-mysqli/main.jpg\" style=\"height:204px; width:400px\" /><img alt=\"Hình ảnh sinh hoạt công ty,hình ảnh đồ án khóa mấy,khoa nào\" src=\"https://i1.rgstatic.net/publication/333455314_PHP_MySQLI_PDO_x_MySQLi/links/5ceea072299bf1fb18492649/largepreview.png\" style=\"height:225px; width:400px\" /><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8ipuq-Ye7bK36QKeYFtKsNRVhAt4DYyZtLyu3GzUizyCjNHaTrlwrmBesTZVKYzo8Tmw&amp;usqp=CAU\" style=\"height:363px; width:400px\" /></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>&nbsp;</h3>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_login`
--

CREATE TABLE `tbl_login` (
  `ID` int(11) NOT NULL,
  `FULL_NAME` varchar(255) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_login`
--

INSERT INTO `tbl_login` (`ID`, `FULL_NAME`, `USER_NAME`, `PASSWORD`, `EMAIL`, `PHONE_NUMBER`) VALUES
(1, 'Nguyễn Quang Việt', 'Việt leo', '16022001', 'nguyenquangviet2k1@gmail.com', '0397636901'),
(2, 'Đặng Văn Tuấn', 'Tuấn Đặng', '12345678', 'dangtuan@gmail.com', '098763511'),
(3, 'Nguyễn Văn A', 'A Văn', '987654321', 'vanA@gmail.com', '1689456113'),
(4, 'Việt Nguyễn Quang', 'quangviet.xyz', '22102001', 'nguyenquangviet2k1@gmail.com', '0397636901'),
(5, 'Việt Nguyễn Quang', 'leosu', '16022001', 'nguyenquangviet2k1@gmail.com', '0397636901'),
(6, 'Nguyễn Văn B', 'quanghuy', '16022001', 'nguyenquangviet@gmail.com', '265459'),
(7, 'Việt Nguyễn Quang', 'leosu', '16022001', 'nguyenquangviet2k1@gmail.com', '0397636901'),
(8, 'Việt Nguyễn Quang', 'admin', '123456', 'nguyenquangviet2k1@gmail.com', '0397636901'),
(9, 'Việt Nguyễn Quang', 'leosu', '258963', 'nguyenquangviet@gmail.com', '0397636901'),
(10, 'trang', 't', '123', 'vithihuyentrang789@gmail.com', '0364536468');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `giasanpham`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(30, 'Nhà quán xá', '09', '1000000', 1, '1632045781_anh10.jpg', 'âgagg', 'agagaga', 1, 16),
(33, 'Chung cư Home', '01', '2300000', 1, '1632538236_anh9.png', 'rất chi là đẹp!!', 'rất đẹp', 1, 19),
(34, 'CHÍNH CHỦ CHO THUÊ VP NGUYỄN NGỌC NẠI, THANH XUÂN, NGÃ TƯ SỞ, TRƯỜNG CHINH - HỖ TRỢ THÁNG ĐẦU', 'KH01', '300000', 1, '1632538223_tuvan2.jpg', 'Đẹp', 'Vị trí: Nằm ngay gần các trục đường lớn gồm TRƯỜNG CHINH, NGUYỄN TRÃI, GIẢI PHÓNG... một trong những nút giao thông chiến lược của khu vực kinh tế phát triển sôi động của thành phố Hà Nội. Giao thông tiện lợi xuất phát từ Trung Tâm.\r\n- Diện tích cho thuê: 120m2\r\n- Giá: 13.500.000 (gửi 10 xe máy miễn phí)', 1, 20),
(35, 'KHÁCH SẠN CĂN HỘ SANG TRỌNG CHO THUÊ DÀI HẠN VNAHOMES MẶT PHỐ ĐÀO TẤN', 'KH02', '4500000', 1, '1632538209_anh2.jpg', 'đẹp', '', 1, 19),
(36, 'CĂN HỘ MELODY VIEW BIỂN TẠI TP. QUY NHƠN - CÒN 12 CĂN VIEW BIỂN CHỈ TỪ 1,9 TỶ, CHIẾT KHẤU CAO 18%', 'KH03', '200000', 1, '1632538191_anh8.jpg', 'Quy mô: 7.105,6m2.', '', 1, 20),
(37, 'Những mẫu phòng khách phong cách Scandinavia ấn tượng với gam màu pastel', 'NT01', '6000000', 6, '1632538172_noithat.jpg', 'Vẻ đẹp đơn giản, nhẹ nhàng của thiết kế phòng khách phong cách Scandinavia sẽ thêm phần ấn tượng khi kết hợp với những gam màu pastel đầy lịch lãm, tinh tế.\r\n\r\n', 'Vẻ đẹp đơn giản, nhẹ nhàng của thiết kế phòng khách phong cách Scandinavia sẽ thêm phần ấn tượng khi kết hợp với những gam màu pastel đầy lịch lãm, tinh tế.\r\n\r\n', 1, 21),
(38, 'Những gợi ý tuyệt vời giúp bạn thiết kế phòng khách đẹp như chuyên gia', 'NT02', '500000', 10, '1632538151_anh5.jpg', 'Phòng khách luôn là không gian đòi hỏi nhiều công sức đầu tư và thiết kế. Tuy nhiên, mọi chuyện sẽ đơn giản hơn nếu bạn tham khảo những gợi ý dưới đây.', 'Phòng khách luôn là không gian đòi hỏi nhiều công sức đầu tư và thiết kế. Tuy nhiên, mọi chuyện sẽ đơn giản hơn nếu bạn tham khảo những gợi ý dưới đây.', 1, 21),
(39, 'BÁN NHÀ Ô TÔ ĐỖ CỬA 3 TẦNG MỚI XÂY GIÁ 1,4 TỶ GẦN NGAY DƯƠNG NỘI, HÀ ĐÔNG, SỔ ĐỎ CHÍNH CHỦ TÊN TÔI', 'NR01', '1400000', 1, '1632538135_noibat1.png', 'Sổ đỏ chính chủ nhà đất tên tôi như ảnh sổ đỏ ở tin đăng: Phạm Thu Trang.\r\n', 'Sổ đỏ chính chủ nhà đất tên tôi như ảnh sổ đỏ ở tin đăng: Phạm Thu Trang.\r\n', 1, 22),
(40, 'CHÍNH CHỦ BÁN NHÀ 3 TẦNG TẠI BIÊN GIANG - HÀ ĐÔNG, GIÁ 1,7 TỶ Ô TÔ 7 CHỖ VÀO NHÀ', 'BN01', '1700000', 1, '1632538114_anh10.jpg', 'Chính chủ bán nhà tại Tổ dân phố Phượng Bãi, phường Biên Giang, quận Hà Đông.\r\nNhà nằm trong khu dân cư sầm uất, cách quốc lộ 6: 50m, ngõ rộng 4m: Ô tô 7 chỗ vào nhà\r\nDiện tích 30m2 x 3 tầng (có gác l', 'Chính chủ bán nhà tại Tổ dân phố Phượng Bãi, phường Biên Giang, quận Hà Đông.\r\nNhà nằm trong khu dân cư sầm uất, cách quốc lộ 6: 50m, ngõ rộng 4m: Ô tô 7 chỗ vào nhà\r\nDiện tích 30m2 x 3 tầng (có gác lửng).\r\nFull nội thất cơ bản.\r\n- Cách cầu Mai Lĩnh 500m.\r\n- Cách bến xe Yên Nghĩa 3km.\r\n- Cách đại học Thể Dục Thể Thao 1km.\r\n- Gần các điểm bus, di chuyển vào trung tâm thành phố cực kỳ thuận tiện.\r\n- Xung quanh đầy đủ chợ, trường học, bệnh viện...\r\n- Thuận tiện kinh doanh, mở cửa hàng nhỏ...\r\nGiá bán 1,7 tỷ (bao tên sổ đỏ).\r\nLiên hệ chính chủ 0934 535 030\r\nMiên trung gian.', 1, 22),
(41, 'CHỦ ĐẦU TƯ MỞ BÁN QUẦN THỂ 26 CĂN NHÀ Ô TÔ ĐỖ CỬA XÂY 3 TẦNG GẦN DƯƠNG NỘI - AEON MALL HÀ ĐÔNG', 'NR02', '999000', 26, '1632538099_anh1.jpg', 'Dự án 26 căn nhà chia lô ô tô đỗ cửa là khu quần thể liền kề có cổng và tường bao quanh riêng biệt với khu dân cư chung quanh.\r\n- Xe Morning đỗ trước cửa được, ô tô 7 chỗ cách 30m.', 'Dự án 26 căn nhà chia lô ô tô đỗ cửa là khu quần thể liền kề có cổng và tường bao quanh riêng biệt với khu dân cư chung quanh.\r\n- Xe Morning đỗ trước cửa được, ô tô 7 chỗ cách 30m.', 1, 22),
(42, 'Muốn có giấc ngủ ngon, đừng để 8 món đồ này trong phòng ngủ', 'NT03', '300000', 10, '1632974554_noithat3.jpg', 'Trên thực tế, không gian phòng ngủ ảnh hưởng trực tiếp đến chất lượng giấc ngủ của mỗi người. Giữ cho phòng ngủ gọn gàng, thông thoáng cũng là một cách để cơ thể và não bộ thư giãn, tạo ti?', 'Trên thực tế, không gian phòng ngủ ảnh hưởng trực tiếp đến chất lượng giấc ngủ của mỗi người. Giữ cho phòng ngủ gọn gàng, thông thoáng cũng là một cách để cơ thể và não bộ thư giãn, tạo tiền đề cho những giấc ngủ ngon. Theo các chuyên gia thiết kế nội thất, dưới đây là những món đồ, xu hướng thiết kế không phù hợp hoặc đã lỗi thời, không nên xuất hiện trong phòng ngủ của bạn.', 1, 21),
(43, '8 loại cây cảnh tốt cho phòng ngủ giúp bạn ngon giấc mỗi đêm', 'NT04', '800000', 8, '1632974649_noithat4.jpg', 'Nghiên cứu từ Cơ quan Hàng không và Vũ trụ Hoa Kỳ (NASA) cho thấy, với sự hiện diện của những loại cây cảnh tốt cho phòng ngủ dưới đây, giấc ngủ của chúng ta chắc chắn sẽ được cải thiện đán', 'Nghiên cứu từ Cơ quan Hàng không và Vũ trụ Hoa Kỳ (NASA) cho thấy, với sự hiện diện của những loại cây cảnh tốt cho phòng ngủ dưới đây, giấc ngủ của chúng ta chắc chắn sẽ được cải thiện đáng kể.', 1, 21),
(44, '(HOT)XEM LUÔN CĂN GÓC DUY NHẤT HOUSINCO NGUYỄN XIỂN 120M2,3N,BQL NIHON HOUSING NHẬT BẢN, CHỈ 2,98TỶ', 'CC01', '100000000', 5, '1632974760_chungcu1.jpg', 'Mức giá\r\n2.98 tỷ\r\n~24.8 triệu/m²\r\nDiện tích\r\n120 m²\r\nPhòng ngủ\r\n3 PN', 'Mức giá\r\n2.98 tỷ\r\n~24.8 triệu/m²\r\nDiện tích\r\n120 m²\r\nPhòng ngủ\r\n3 PN', 1, 20),
(45, 'SUẤT NGOẠI GIAO, TRỰC TIẾP CĐT ECO: NHẬN NHÀ Ở NGAY - NHẬN NGAY SỔ HỒNG - VAY 0% 24TH + CK TỚI 11%', 'CC02', '9000000000', 10, '1632974854_chungcu2.jpg', '- Nội thất bàn giao căn hộ Full liền tường & nhập khẩu cao cấp (Sàn gỗ, trần thạch cao, thiết bị vệ sinh đầy đủ, đèn điện đầy đủ, hệ thống cửa chống cháy, điều hòa Mitsubishi mỗi phòng 1c, t', '- Nội thất bàn giao căn hộ Full liền tường & nhập khẩu cao cấp (Sàn gỗ, trần thạch cao, thiết bị vệ sinh đầy đủ, đèn điện đầy đủ, hệ thống cửa chống cháy, điều hòa Mitsubishi mỗi phòng 1c, tủ bếp trên dưới, bếp từ + hút mùi Hafele, báo cháy mỗi phòng 1b).', 1, 20),
(46, 'BÁN NHÀ ĐẶNG VĂN NGỮ- NGÕ CÁN BỘ YÊN TĨNH- MẶT TIỀN RỘNG- Ô TÔ VÀO NHÀ', 'DT01', '23000000000', 1, '1632974958_dato1.jpg', 'Bán nhà 64.5 Đặng Văn Ngữ, trung tâm Hồ Đắc Di, Nam Đồng\r\nCách hồ Nam Đồng 250m2\r\nDiện tích 64,5\r\nRộng 4 tầng\r\nThiết kế đẹp\r\nHiện không có người ở có thể giao nhà ngay, sổ sẵn sàng\r\nthích hợp làm ', 'Bán nhà 64.5 Đặng Văn Ngữ, trung tâm Hồ Đắc Di, Nam Đồng\r\nCách hồ Nam Đồng 250m2\r\nDiện tích 64,5\r\nRộng 4 tầng\r\nThiết kế đẹp\r\nHiện không có người ở có thể giao nhà ngay, sổ sẵn sàng\r\nthích hợp làm nhà ở, nhà kinh doanh, văn phòng cho thuê.', 1, 22),
(47, 'BÁN NHÀ HÀ ĐÔNG Ô TÔ ĐỖ CỬA GIÁ TỪ 1 TỶ 350, CÁCH BẾN XE YÊN NGĨA 3KM', 'DO01', '230000000', 1, '1632975084_bandat01.jpg', 'Chính chủ bán nhà khu vực Hà Đông, sổ đỏ chính chủ không qua môi giới giá từ 1 tỷ 350.\r\nDiện tích từ 35m2 ngõ rộng ô tô đỗ cửa thoải mái, nằm ở khu vực đông dân với nhiều tiện ích xung quanh nh?', 'Chính chủ bán nhà khu vực Hà Đông, sổ đỏ chính chủ không qua môi giới giá từ 1 tỷ 350.\r\nDiện tích từ 35m2 ngõ rộng ô tô đỗ cửa thoải mái, nằm ở khu vực đông dân với nhiều tiện ích xung quanh như trường học các cấp, chợ, bệnh viện, công viên...\r\nNhà xây 3 tầng với kết cấu móng chịu lực 5 tầng, xây tường riêng, móng riêng, cột riêng.\r\nNội thất cơ bản gồm:\r\n1. Cửa chính gỗ Lim.\r\n2. Cầu thang gỗ Lim.\r\n3. Cửa phòng ngủ gỗ Lim.\r\n4. Tủ bếp và kệ bếp gỗ tự nhiên.\r\nChỉ với hơn 1 tỷ đồng bạn có thể mua nhà và được thừa hưởng rất nhiều tiện ích xung quanh. Chúng tôi có hỗ trợ vay vốn ngân hàng lên đến 70% giá trị căn nhà.', 1, 19),
(48, 'BÁN NHÀ CHÍNH CHỦ P. TÂN ĐỊNH NGAY TRUNG TÂM QUẬN 1. NHÀ HẺM XE HƠI, MỚI, ĐẸP, NỞ HẬU', 'DT02', '17000000000', 1, '1632975150_DT01.jpg', 'Chính chủ bán nhà hẻm xe hơi, đẹp phường Tân Định ngay trung tâm quận 1\r\n\r\n* Diện tích đất: 71,72 mét vuông (dài 12,3 m - ngang 5,1 m, nở hậu 6,5 m).\r\n* Hướng Đông - 4 PN, gồm: 01 trệt, 04 tấm BTCT đúc k', 'Chính chủ bán nhà hẻm xe hơi, đẹp phường Tân Định ngay trung tâm quận 1\r\n\r\n* Diện tích đất: 71,72 mét vuông (dài 12,3 m - ngang 5,1 m, nở hậu 6,5 m).\r\n* Hướng Đông - 4 PN, gồm: 01 trệt, 04 tấm BTCT đúc kiên cố.\r\n* Nhà vào ở ngay: Tiện kinh doanh văn phòng, Homestay khu lịch sự yên tĩnh, thu nhập cao...\r\n* Tiện ích trung tâm bậc nhất, ngay sát đường hai bà Trưng, siêu thị, chợ Tân Định, nhà thờ, bệnh viện, các trường học...\r\n* Sổ hồng chính chủ.\r\n* Giá 17 tỷ (thương lượng người thiện chí).', 1, 19),
(50, 'Hoa Sinh Nhật', 'SN01', '150000', 10, '1637401539_product_11.jpg', '<p>bắt mắt</p>\r\n', '<p>đẹp</p>\r\n', 1, 25),
(51, 'Hoa Sinh Nhật', 'SN02', '200000', 10, '1637401515_product_01.jpg', '<p>xinh xắn</p>\r\n', '<p>xinh xắn</p>\r\n', 1, 25),
(52, 'Bó Hoa Hồng Sáp 12 Bông Đỏ', 'SP01', '190.000', 20, '1636249849_product_07.jpg', 'Sáp thơm', 'Sáp thơm', 1, 24),
(53, 'Hoa Sinh Nhật', 'SN03', '175000', 10, '1637401501_product_03.jpg', '<p>đ&aacute;ng để mua</p>\r\n', '<p>đ&aacute;ng mua</p>\r\n', 1, 25),
(54, 'Hoa Sinh Nhật', 'SN04', '250000', 5, '1637401486_product_06.jpg', '<p>Xinh xắn</p>\r\n', '<p>Xinh xắn</p>\r\n', 1, 25),
(55, 'Hoa Sinh Nhật', 'SN05', '210000', 8, '1637401467_product_02.jpg', '<p>Xinh xắn</p>\r\n', '<p>Xinh xắn</p>\r\n', 1, 25),
(56, 'Hoa Sinh Nhật', 'SN06', '130000', 6, '1637401445_product_12.jpg', '<p>Xinh xắn</p>\r\n', '<p>Xinh xắn</p>\r\n', 1, 25),
(57, 'Hoa Sinh Nhật', 'SN07', '300000', 10, '1637401426_product_04.jpg', '<p>Tươi như hoa</p>\r\n', '<p>Tươi như hoa</p>\r\n', 1, 25),
(58, 'MẪU ĐƠN HỒNG', 'sn01', '1600000', 10, '1636787893_SN02.jpg', 'Tinh tế', 'Tinh tế', 1, 25),
(59, 'ÁNH HỒNG', 'sn02', '1140000', 5, '1636787875_SN03.jpg', 'Rất hoa mĩ', 'Rất hoa mĩ', 1, 25),
(60, 'YÊU THƯƠNG TÍM', 'sn03', '1120000', 8, '1636787854_SN04.jpg', 'đẹp mắt', 'đẹp mắt', 1, 25),
(61, 'ÁNH NGỌC', 'sn04', '1340000', 20, '1636787837_SN09.jpg', 'đáng yêu', 'đáng yêu', 1, 25),
(62, 'TRUE LOVE (100 BÔNG HỒNG)', 'sn05', '1980000', 2, '1636787802_SN06.jpg', 'hợp gu', 'hợp gu', 1, 25),
(63, 'MÙA THU (MẪU ĐƠN)', 'sn06', '2090000', 6, '1636787790_SN07.jpg', 'rất đẹp', 'rất đẹp', 1, 25),
(64, 'KHOẢNH KHẮC', 'sn07', '1820000', 6, '1636787774_SN08.png', 'dịu dàng', 'dịu dàng', 1, 25),
(65, 'PHÚT ĐẦU TIÊN', 'sn07', '860000', 13, '1636787763_SN09.jpg', 'thơm nức', 'thơm nức', 1, 25),
(66, 'SWEET HEART', 'sn08', '1860000', 1, '1636787753_SN10.jpg', 'Tình yêu vĩnh cửu', 'Tình yêu vĩnh cửu', 1, 25),
(67, 'THÀNH CÔNG HỒNG', 'sn08', '1200000', 5, '1636787742_SN11.jpg', 'hoa ngũ sắc thơm', 'hoa ngũ sắc thơm', 1, 25),
(68, 'KẾT NỐI YÊU THƯƠNG', 'sn09', '1050000', 3, '1636787726_SN12.jpg', 'kết nối tình bạn', 'kết nối tình bạn', 1, 25),
(69, 'TÌNH YÊU MÀU XANH', 'sn09', '1930000', 5, '1636787715_SN13.jpg', 'rất đẹp', 'rất đẹp', 1, 25),
(70, 'DIỆU KỲ', 'sn10', '1320000', 5, '1636787702_SN14.png', 'thơm tho', 'thơm tho', 1, 25),
(71, 'KHÚC CA MÊ LY', 'sn11', '1680000', 5, '1636787691_SN15.jpg', 'rất đẹp', 'rất đẹp', 1, 25),
(72, 'HÂN HOAN', 'sn12', '1500000', 1, '1636787646_SN16.jpg', 'sự kết hợp tinh tế', 'sự kết hợp tinh tế', 1, 25),
(73, 'THANH XUÂN TƯƠI ĐẸP', 'sn13', '1790000', 1, '1636787630_SN17.jpg', 'tình cảm trân quý', 'tình cảm trân quý', 1, 25),
(74, 'Giỏ Trái Cây Thơm Ngon', 'TC01', '1980000', 1, '1637142346_TC01.jpg', 'Giỏ trái cây thơm ngon được tạo nên từ những loại trái cây thơm ngon nhất sẽ là món quà vô cùng ý nghĩa cho những dịp quan trọng như: khai trương, chúc mừng, mừng thọ, sinh nhật, chia buồn', 'Giỏ trái cây thơm ngon được tạo nên từ những loại trái cây thơm ngon nhất sẽ là món quà vô cùng ý nghĩa cho những dịp quan trọng như: khai trương, chúc mừng, mừng thọ, sinh nhật, chia buồn', 1, 31),
(75, 'Mát Lành', 'TC02', '2280000', 1, '1637142426_TC02.jpg', 'Một chút ngọt ngào và thanh mát đến từ các loại trái cây thơm ngon nhất là món quà đầy ý nghĩa bạn có thể gửi tặng đến người thân, bạn bè, đồng nghiệp hay cấp trên đấy. Gồm các loại trái câ', 'Một chút ngọt ngào và thanh mát đến từ các loại trái cây thơm ngon nhất là món quà đầy ý nghĩa bạn có thể gửi tặng đến người thân, bạn bè, đồng nghiệp hay cấp trên đấy. Gồm các loại trái cây như táo, lê, kiwi, nho được tuyển chọn kỹ càng nhất, giỏ trái cây sẽ giúp bạn gửi đi những lời chúc đầy chân thành.\r\n\r\n', 1, 31),
(77, 'Niềm hạnh phúc', 'TC03', '2370000', 1, '1637142540_TC03.jpg', 'Đâu cần đến những dịp lễ lớn hay trọng đại trong năm, đôi khi bạn có thể gửi tặng những lời chúc tốt đẹp, những lời cảm ơn sâu sắc vào những ngày bình thường nhất sẽ mang đến thật nhiề', 'Đâu cần đến những dịp lễ lớn hay trọng đại trong năm, đôi khi bạn có thể gửi tặng những lời chúc tốt đẹp, những lời cảm ơn sâu sắc vào những ngày bình thường nhất sẽ mang đến thật nhiều niềm vui và hạnh phúc cho người nhận đấy. Hãy để giỏ quà được kết hợp giữa những loại trái cây thơm và tươi ngon nhất giúp bạn làm điều ấy nhé.\r\n\r\n', 1, 31),
(78, 'Sang Trọng ', 'TC04', '2390000', 5, '1637142591_TC04.jpg', 'Giỏ trái cây \"Sang Trọng\" là một món quà không chỉ đẹp mắt mà còn mang lại nhiều ý nghĩa. Sự phối hợp giữa nhiều loại trái cây cùng nhiều loại màu sắc, hương vị khác nhau tượng trưng cho những đ', 'Giỏ trái cây \"Sang Trọng\" là một món quà không chỉ đẹp mắt mà còn mang lại nhiều ý nghĩa. Sự phối hợp giữa nhiều loại trái cây cùng nhiều loại màu sắc, hương vị khác nhau tượng trưng cho những điều may mắn, hạnh phúc nhất. Giỏ trái cây thích hợp tặng cho những dịp như sinh nhật, chúc mừng, kỉ niệm...', 1, 31),
(79, 'Hoa khai trương KT179', 'LH01', '3336000', 5, '1637315672_LH01.jpg', 'Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa the', 'Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Điện hoa 24h sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế. Trường hợp không đủ thời gian hoặc không liên lạc được, Điện hoa 24h sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu.', 1, 32),
(80, 'Hoa khai trương KT19', 'LH02', '4500000', 2, '1637315791_LH02.jpg', ' Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa th', ' Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Điện hoa 24h sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế. Trường hợp không đủ thời gian hoặc không liên lạc được, Điện hoa 24h sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu.', 1, 32),
(81, 'Hoa khai trương đẹp KT171', 'LH03', '4200000', 1, '1637315842_LH03.jpg', ' Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa th', ' Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Điện hoa 24h sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế. Trường hợp không đủ thời gian hoặc không liên lạc được, Điện hoa 24h sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu.', 1, 32),
(82, 'Hoa khai trương KT177', 'LH04', '1140000', 6, '1637315911_LH04.jpg', 'Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa the', 'Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Điện hoa 24h sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế. Trường hợp không đủ thời gian hoặc không liên lạc được, Điện hoa 24h sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu.', 1, 32),
(83, 'Kệ hoa chúc mừng KT31', 'LH05', '1740000', 10, '1637315972_LH05.jpg', 'Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa the', 'Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận về màu sắc, hoa tươi phụ thuộc theo mùa, khí hậu và điều kiện từng địa phương nơi chuyển đến. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Điện hoa 24h sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế. Trường hợp không đủ thời gian hoặc không liên lạc được, Điện hoa 24h sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu.', 1, 32),
(84, 'Lời Chúc Tốt Đẹp', 'HL01', '1050000', 10, '1637316160_lan01.jpg', 'Một chậu Lan Hồ Điệp hồng rực rỡ kết hợp với trắng tinh tế ngay góc nhà giúp tô điểm ấn tượng hơn cho ngôi nhà nhỏ xinh của bất cứ ai. Chậu lan gồm 4 cành hồ điệp trắng kết hợp cùng 3 cành ', 'Một chậu Lan Hồ Điệp hồng rực rỡ kết hợp với trắng tinh tế ngay góc nhà giúp tô điểm ấn tượng hơn cho ngôi nhà nhỏ xinh của bất cứ ai. Chậu lan gồm 4 cành hồ điệp trắng kết hợp cùng 3 cành hồ điệp tím, thể sự kính trọng và ngưỡng mộ một cách chân thành, đồng thời cũng toát nên được vẻ trang trọng của món quà. Nếu như lan hồ điệp vàng thường được sử dụng để trưng trong dịp tết nguyên đán, làm quà tặng khai trương, thì hoa lan hồ điệp trắng lại phù hợp để làm quà tặng sinh nhật những người lớn tuổi hoặc quà tặng cấp trên trong những dịp đặc biệt.', 1, 30),
(85, 'Chậu Lan Hồ Điệp - 011', 'HL02', '3100000', 10, '1637316613_lan02.jpg', 'Giờ đây, ngoài hoa mai, hoa đào, hoa mào gà, ... luôn được nhắc đến mỗi khi xuân về, thì Lan vàng cũng nên được thêm vào sự lựa chọn của bạn vào mỗi dịp Tết. Màu vàng của Lan mang thông điệp của', 'Giờ đây, ngoài hoa mai, hoa đào, hoa mào gà, ... luôn được nhắc đến mỗi khi xuân về, thì Lan vàng cũng nên được thêm vào sự lựa chọn của bạn vào mỗi dịp Tết. Màu vàng của Lan mang thông điệp của sự phát tài phát lộc, an khang thịnh vượng, sung túc ấm no đến cho mọi nhà mọi gia đình trên đất nước. Tặng ngay một chậu lan hồ điệp 10 cành màu vàng vào mùa Tết Nguyên Đán này sẽ là một sự lựa chọn thật tuyệt vời và nhiều ý nghĩa.\r\n', 1, 30),
(86, 'Chậu Lan Hồ Điệp - 015', 'HL03', '1270000', 5, '1637316816_lan03.jpg', 'Bạn biết không, hoa lan tím còn được dành để tặng cho người những người mà bạn yêu mến với hàm ý trân trọng người đó như một điều quý giá trong cuộc sống đầy tất bật, người đến người ?', 'Bạn biết không, hoa lan tím còn được dành để tặng cho người những người mà bạn yêu mến với hàm ý trân trọng người đó như một điều quý giá trong cuộc sống đầy tất bật, người đến người đi này. Để thể hiện tấm ý chân thành và sự trân trọng của mình,  bạn có thể gửi tặng chậu hoa lan tím xinh đẹp này để họ biết được vị trí của mình trong lòng bạn đấy. Chậu 5 cành lan tím.\r\n', 1, 30),
(87, 'Hoa Cưới Baby Hồng', 'HC01', '910000', 10, '1637329771_cuoi02.jpg', 'Mẫu hoa cầm tay được Flowercorner.vn thiết kế từ hoa baby phun hồng phù hợp với các cô dâu mặc áo cưới màu trắng. Bó hoa cưới tiếng yêu là lựa chọn hoàn hảo cho các cô dâu yêu thích sự mới lạ và ', 'Mẫu hoa cầm tay được Flowercorner.vn thiết kế từ hoa baby phun hồng phù hợp với các cô dâu mặc áo cưới màu trắng. Bó hoa cưới tiếng yêu là lựa chọn hoàn hảo cho các cô dâu yêu thích sự mới lạ và hiện đại.\r\n\r\n', 1, 27),
(88, 'Hoa Cưới Cầm Tay Baby', 'HC02', '750000', 10, '1637329839_cuoi01.jpg', 'Hoa baby trắng tinh khôi tượng trưng cho tình yêu đầy chân thành, thuần khiết và trường tồn với thời gian. Dẫu có khó khăn, cách trở trong cuộc sống anh vẫn luôn bên cạnh em chính là lời nhắn dễ thươ', 'Hoa baby trắng tinh khôi tượng trưng cho tình yêu đầy chân thành, thuần khiết và trường tồn với thời gian. Dẫu có khó khăn, cách trở trong cuộc sống anh vẫn luôn bên cạnh em chính là lời nhắn dễ thương mà bó hoa cưới cầm tay baby trắng này gửi gắm trong ngày trọng đại của bạn đấy.', 1, 27),
(89, 'Hoa cầm tay cô dâu Môi Hồng', 'HC03', '950000', 10, '1637329898_cuoi03.jpg', 'Một chút sắc hồng lãng mạn, một chút sắc trắng tinh khôi hòa quyện lại tạo nên một bó hoa rất dễ thương. Bó hoa là điều tuyệt vời nhất cho các cô nàng yêu sắc hồng và theo đuổi phong cách sang tr?', 'Một chút sắc hồng lãng mạn, một chút sắc trắng tinh khôi hòa quyện lại tạo nên một bó hoa rất dễ thương. Bó hoa là điều tuyệt vời nhất cho các cô nàng yêu sắc hồng và theo đuổi phong cách sang trọng quí phái.', 1, 27),
(90, 'Hoa Cầm Tay Cô Dâu Kim Cương', 'HC04', '1250000', 10, '1637329963_cuoi04.jpg', 'Cô dâu nào lại không muốn ngày trọng đại của mình thật đặc biệt, từ đường may trên chiếc váy cưới đến bó hoa cầm tay xinh xắn. Mọi thứ nên hoàn hảo và lộng lẫy trong ngày đặc biệt này. Bó h', 'Cô dâu nào lại không muốn ngày trọng đại của mình thật đặc biệt, từ đường may trên chiếc váy cưới đến bó hoa cầm tay xinh xắn. Mọi thứ nên hoàn hảo và lộng lẫy trong ngày đặc biệt này. Bó hoa thủy tiên trắng kết hợp cùng hoa hồng trắng như một viên kim cương sáng lấp lánh quý giá trên tay nàng với nụ cười xinh tươi trên môi, trong một lễ cưới lộng lẫy ngập tràn bởi tông trắng tinh khôi khiến tất cẻ mọi người phải trầm trồ khen ngợi và đắm chìm vào một thiên đường hạnh phúc mãi chẳng muốn xa rời', 1, 27),
(91, 'Ngày Hạnh Phúc', 'HC05', '2280000', 5, '1637330040_cuoi05.jpg', 'Ngọt ngào, lãng mạn và dễ thương, bó hoa cầm tay được dựa trên cảm hứng từ những câu chuyện tình trẻ trung, đáng yêu và đầy nhiệt huyết. Tông màu pastel đáng yêu sẽ góp phần tô thêm màu sắc hạ', 'Ngọt ngào, lãng mạn và dễ thương, bó hoa cầm tay được dựa trên cảm hứng từ những câu chuyện tình trẻ trung, đáng yêu và đầy nhiệt huyết. Tông màu pastel đáng yêu sẽ góp phần tô thêm màu sắc hạnh phúc vào đám cưới của bạn đấy.\r\n\r\n', 1, 27),
(92, 'Kệ Hoa Khai Trương Trang Trọng', 'KT01', '1900000', 10, '1637392786_KT02.jpg', 'Kệ hoa mừng khai trương với thiết đầy sáng tạo và tinh tế, được phối hợp từ các loại hoa khác nhau như hoa hồng, hướng dương... mỗi loài hoa tượng trưng cho những ý nghĩa sâu sắc và phong phú khác ', 'Kệ hoa mừng khai trương với thiết đầy sáng tạo và tinh tế, được phối hợp từ các loại hoa khác nhau như hoa hồng, hướng dương... mỗi loài hoa tượng trưng cho những ý nghĩa sâu sắc và phong phú khác nhau. Cùng với tông màu vàng tươi sáng, kệ hoa là món quà mang thông điệp chúc chủ cửa hàng, công ty, chi nhánh mau gặt hái nhiều thành công và phát triển bền vững.', 1, 26),
(93, 'Kệ Hoa Khai Trương Phát Đạt', 'KT02', '1500000', 5, '1637392850_KT03.jpg', 'Mang một sắc màu đầy tinh tế, kệ hoa là sự kết hợp giữa những loại hoa thanh tao mà quí phái nhất. Kệ hoa gồm hoa ly, hồng đỏ, tú cầu và nhiều loại hoa khác tượng trưng cho sự may mắn, niềm vui chi', 'Mang một sắc màu đầy tinh tế, kệ hoa là sự kết hợp giữa những loại hoa thanh tao mà quí phái nhất. Kệ hoa gồm hoa ly, hồng đỏ, tú cầu và nhiều loại hoa khác tượng trưng cho sự may mắn, niềm vui chiến thắng đầy hân hoan. Kệ hoa khai trương phát đạt là một món quà tuyệt vời thay cho lời cảm ơn đến những người đã luôn sát cánh, giúp đỡ bạn trong con đường sự nghiệp.', 1, 26),
(94, 'Hoa Chúc Mừng Rực Rỡ', 'KT03', '980000', 5, '1637392912_KT04.png', 'Lẵng hoa khai trương để bàn Rực Rỡ với nhiều loại hoa khác nhau như hoa lan trắng, hồng đỏ, cúc ping pong cùng phối hợp tạo nên một lẵng hoa đẹp như một bản tình ca với những nốt thăng, nốt trầm,', 'Lẵng hoa khai trương để bàn Rực Rỡ với nhiều loại hoa khác nhau như hoa lan trắng, hồng đỏ, cúc ping pong cùng phối hợp tạo nên một lẵng hoa đẹp như một bản tình ca với những nốt thăng, nốt trầm, hộp hoa là lời gửi gắm cho thông điệp, tình yêu hay cuộc sống có lúc vui, lúc buồn nhưng chỉ cần có bạn kề bên, chúng ta sẽ luôn vượt qua và hướng đến tình yêu và tương lai tươi sáng nhất.', 1, 26),
(95, 'Hoa Chúc Mừng Hồng Phát', 'KT04', '1280000', 10, '1637392991_KT05.jpg', 'Lẵng hoa khai trương hồng phát gồm hồng vàng, cát tường trắng, lá pito, sao tím... Các loại hoa tươi đẹp và rực rỡ nhất được thiết kế xòe rộng ra các hướng sẽ giúp bạn gửi đến bạn bè, người', 'Lẵng hoa khai trương hồng phát gồm hồng vàng, cát tường trắng, lá pito, sao tím... Các loại hoa tươi đẹp và rực rỡ nhất được thiết kế xòe rộng ra các hướng sẽ giúp bạn gửi đến bạn bè, người thân ,đồng nghiệp lời nhắn nhủ, hy vọng vào những điều may mắn và tốt đẹp sẽ đến trên con đường chinh phục ước mơ và khát vọng của mỗi người.\r\n\r\n', 1, 26),
(96, 'Đơm Hoa Kết Trái', 'KT05', '1860000', 10, '1637399524_KT1.jpg', '<p>Mẫu hoa gồm c&oacute;:</p>\r\n\r\n<ul>\r\n	<li>Hoa hướng dương</li>\r\n	<li>Cẩm t&uacute; cầu xanh</li>\r\n	<li>Hoa hồng pastel</li>\r\n	<li>Hồng hột g&agrave;</li>\r\n	<li>C&aacute;t tường xanh</li>\r\n	<li>C&uacute;c calimero v&agrave;ng</li>\r\n', '<p>Mẫu kệ&nbsp;<a href=\"https://www.flowercorner.vn/hoa-khai-truong\" target=\"_blank\">hoa khai trương</a>&nbsp;đơm hoa kết tr&aacute;i được thiết kế với th&ocirc;ng điệp đặc biệt thể hiện niềm vui v&agrave; mong ước ch&acirc;n th&agrave;nh d&agrave;nh cho những th&agrave;nh c&ocirc;ng sắp tới v&agrave; sự khởi đầu mới đầy tốt đẹp của người nhận m&agrave; người gửi muốn nhắn nhủ v&agrave; trao gửi.</p>\r\n', 1, 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2021-10-23', 50, '15500000', 25),
(2, '2021-10-22', 55, '25500000', 25),
(3, '2021-10-21', 50, '15600000', 30),
(4, '2021-10-24', 10, '36500000', 30),
(5, '2021-10-25', 2, '5600000', 10),
(6, '2021-10-26', 8, '6500000', 9),
(7, '2021-10-28', 2, '600000', 10),
(8, '2021-10-29', 8, '500000', 9),
(9, '2021-10-31', 8, '500000', 9),
(10, '2021-10-01', 8, '500000', 9),
(11, '2021-08-01', 8, '700000', 9),
(12, '2021-10-03', 8, '700000', 9),
(14, '2021-10-30', 3, '1500000', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
