-- Drop account table
DROP TABLE ACCOUNT;

-- Drop save table
DROP TABLE SAVE;

-- Drop comment table
DROP TABLE COMMENT;

-- Drop rate table
DROP TABLE RATE;

-- Drop type table
DROP TABLE TYPE;

-- Drop shop table
DROP TABLE SHOP;

-- Drop type_shop table
DROP TABLE TYPE_SHOP;

-- Drop feedback table
DROP TABLE FEEDBACK;
-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql10.freemysqlhosting.net
-- Generation Time: Oct 26, 2017 at 02:38 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql10201044`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACCOUNT`
--

CREATE TABLE `ACCOUNT` (
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FIRST_NAME` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LAST_NAME` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FULL_NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IMAGE` text COLLATE utf8_unicode_ci,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ADDRESS` text COLLATE utf8_unicode_ci,
  `ROLE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ACCOUNT`
--

INSERT INTO `ACCOUNT` (`USERNAME`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `FULL_NAME`, `IMAGE`, `EMAIL`, `PHONE`, `ADDRESS`, `ROLE`) VALUES
('HieuUser', '93279e3308bdbbeed946fc965017f67a', 'Hieu', 'Nhu', 'Nhu Hieu', 'image-1508985269.png', 'hieutran040495@gmail.com', '0905594382', '242 Nguyen Hoang street, DaNang City', 3),
('ThuongAdmin', '93279e3308bdbbeed946fc965017f67a', 'Thương', 'Huỳnh Thị Hoài', 'Huỳnh Thị Hoài Thương', 'image-1508981023.png', 'hoaithuong14cntt@gmail.com', '0905674086', 'Hoa vang - da nang', 1),
('QuangUser', '93279e3308bdbbeed946fc965017f67a', 'Quang', 'Ong', 'Ong Quang', 'default.png', 'hoaithuong14cntt@gmail.com', '0905594382', '104 Nguyễn Văn Linh, P. Nam Dương,  Quận Hải Châu, Đà Nẵng', 3),
('SonUser', '93279e3308bdbbeed946fc965017f67a', 'Son', 'Thanh', 'Thanh Son', 'default.png', 'tranvthanhson@gmail.com', '0905594382', '143 Điện Biên Phủ,  Quận Thanh Khê, Đà Nẵng', 3),
('SonAdmin', '93279e3308bdbbeed946fc965017f67a', 'Sơn', 'Trần Vũ Thanh Sơn', 'Trần Vũ Thanh Sơn Sơn', 'image-1508980998.png', 'tranvthanhson@gmail.com', '01269736096', '05/ Tân An 1', 1),
('HieuAdmin', '93279e3308bdbbeed946fc965017f67a', 'f', 'f', 'f f', 'default.png', 'fefer@ffe', '876543', 'mnbvc', 1),
('ThuongUser', '93279e3308bdbbeed946fc965017f67a', 'Thuong', 'Huynh Thi Hoai', 'Huynh Thi Hoai Thuong', 'image-1508981861.png', 'hoaithuong14cntt@gmail.com', '0905594382', '242 Nguyen Hoang street, DaNang City', 3),
('QuangAdmin', '93279e3308bdbbeed946fc965017f67a', 'Quang', 'Ong Van', 'Ong Van Quang', 'default.png', 'ongvquang177@gmail.com', '01283412220', 'đà nẵng', 1),
('PinkStaff', '93279e3308bdbbeed946fc965017f67a', 'Pink', 'Sky', 'Sky Pink', 'default.png', 'hoaithuong14cntt@gmail.com', '0905594382', '193 Nguyen Luong Bang, Da Nang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `COMMENT_ID` int(11) NOT NULL,
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHOP_ID` int(11) DEFAULT NULL,
  `CONTENT` text COLLATE utf8_unicode_ci,
  `DATE_CREATED` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `FEEDBACK`
--

CREATE TABLE `FEEDBACK` (
  `FEEDBACK_ID` int(11) NOT NULL,
  `NAME` text COLLATE utf8_unicode_ci,
  `CONTENT` text COLLATE utf8_unicode_ci,
  `PHONE` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `FEEDBACK`
--

INSERT INTO `FEEDBACK` (`FEEDBACK_ID`, `NAME`, `CONTENT`, `PHONE`, `EMAIL`) VALUES
(39, 'Hoaithuong', 'Chao SkyFood, website của bạn rất hữu ích\r\n', '0943622533', 'hoaithuong14cntt@gmail.com'),
(40, 'sonson', 'Xinh dep\r\n', '56457645765', 'tranvthanhson@gmail.com'),
(41, 'Doãn Huy', 'Web cùi', '01236583343', 'doanhuynguyenhong@gmail.com'),
(42, 'Sơn Zolomon', 'Về đi', '01269736096', 'tranvthanhson@gmail.com'),
(43, 'Loan', 'fail', '1234567890', 'loanvt.git@gmail.com'),
(44, 'Hoaithuong', 'hihi', '0943622533', 'tranvthanhson@gmail.com'),
(45, 'pham van han', 'hello', '0968011111', 'phamvanhan68@gmail.com'),
(46, 'dd', 'dd', '342', 'dd@gmail.com'),
(47, 'Nahn', '<html>\r\n<body>\r\n\r\n<p>Click the button to display a confirm box.</p>\r\n\r\n<button onclick=\"myFunction()\">Try it</button>\r\n\r\n<script>\r\nfunction myFunction() {\r\n    confirm(\"Press a button!\");\r\n}\r\n</script>\r\n\r\n</body>\r\n</html>\r\n', '34345345345', 'Uw@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `RATE`
--

CREATE TABLE `RATE` (
  `RATE_ID` int(11) NOT NULL,
  `SHOP_ID` int(11) DEFAULT NULL,
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SCORE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `RATE`
--

INSERT INTO `RATE` (`RATE_ID`, `SHOP_ID`, `USERNAME`, `SCORE`) VALUES
(40, 61, 'QuangAdmin', 5),
(41, 44, 'HieuUser', 5),
(42, 47, 'HieuUser', 5),
(43, 47, 'ThuongUser', 1),
(44, 49, 'ThuongUser', 4),
(45, 44, 'ThuongUser', 1);

-- --------------------------------------------------------

--
-- Table structure for table `SAVE`
--

CREATE TABLE `SAVE` (
  `SAVE_ID` int(11) NOT NULL,
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHOP_ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SAVE`
--

INSERT INTO `SAVE` (`SAVE_ID`, `USERNAME`, `SHOP_ID`) VALUES
(71, 'HieuUser', 44),
(72, 'ThuongUser', 47),
(73, 'QuangAdmin', 44);

-- --------------------------------------------------------

--
-- Table structure for table `SHOP`
--

CREATE TABLE `SHOP` (
  `SHOP_ID` int(11) NOT NULL,
  `SHOP_NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LAT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LNG` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DATE_CREATED` datetime DEFAULT NULL,
  `PHONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIME_OPEN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIME_CLOSE` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `DISCOUNT` double DEFAULT NULL,
  `ADDRESS` text COLLATE utf8_unicode_ci,
  `DETAIL` text COLLATE utf8_unicode_ci,
  `VIEW` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USERNAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SHOP`
--

INSERT INTO `SHOP` (`SHOP_ID`, `SHOP_NAME`, `LAT`, `LNG`, `DATE_CREATED`, `PHONE`, `TIME_OPEN`, `TIME_CLOSE`, `STATUS`, `DISCOUNT`, `ADDRESS`, `DETAIL`, `VIEW`, `USERNAME`) VALUES
(43, 'Faifo Grill & Buffet Restaurant', '16.067633', '108.20825200000002', '2017-10-26 08:23:08', '01283412220', '17:30', '22:00', 0, 10, '393 Lê Duẩn, Hải Châu District, Da Nang, Vietnam', 'Nằm ngay trung tâm thành phố, Faifo Buffet & Grill sẽ  là địa điểm lý tưởng đối với các tín đồ ẩm thực bởi nhiều ưu điểm: không gian sang trọng, món ăn đa dạng, phục vụ chuyên nghiệp và đặc biệt với mức giá khá hợp lí.', 'hinh-1508980988.jpg', 'ThuongAdmin'),
(44, 'Hun Khói - Buffet Nướng Tự Chọn', '16.0645634', '108.21454259999996', '2017-10-26 08:34:01', '01283412220', '11:00', '22:30', 1, 0, '11 Nguyễn Hoàng, Hải Châu District, Da Nang, Vietnam', 'Đọc trên mạng thấy ở đây có lẩu hải sản dành cho 4 người trở lên ăn , mình và đứa bạn vào đây gọi lẩu này , ấn tượng nồi rất to nhìn rất đã , nào là ghẹ tôm mực cá ... nước lẩu ngon . \r\nỞ đây rất nhiều người ăn nướng tự chọn chỉ có 119k thấy cũng ok , lần sau sẽ ghé tiếp', 'hinh-1508981641.jpg', 'ThuongAdmin'),
(46, 'Hantok Đà Nẵng - Món Hàn', '-33.7839208', '151.17369029999998', '2017-10-26 08:42:45', '01283412220', '10:30 ', '22:00', 0, 10, 'A1 Shirley Road, Roseville, New South Wales, Australia', 'Nghe foody giới thiệu ở đây có combo 500k gì đấy nên kéo bè lũ đến ăn.\r\nrút ra kinh nghiệm là đừng ham rẻ. cứ ăn những món mình thích thôi vì trong combo thì có món ngn, món dở xen lẫn nên sẽ ko chọn combo này đâu.\r\nLẩu ngon, nước cay. Cơm trộn bình thường. Tok hơi đặc sệt và trình bày ko được đẹp lắm.\r\nMón chân gà cay mình cũng cảm thấy ko thik lắm.\r\nKhông gian tuy nhỏ nhưng mát mẻ, phục vụ nhiêt tình', 'hinh-1508982165.jpg', 'ThuongAdmin'),
(47, 'SOHO Buffet & Alacarte', '-33.8564244', '151.20737299999996', '2017-10-26 08:45:23', '01283412220', '09:00', '22:00', 1, 0, 'Lower Fort Street, Dawes Point, New South Wales, Australia', 'Tính mình ít khi review quán ăn nhưng lần này vì khá thích nên mới review. Quán nhiều món, đồ ăn ra liên tục nên đi sớm đi trễ j vẫn thưởng thức đầy đủ các món. Đồ ăn nấu vừa miệng vì nhà mình khá khó ăn nhưng ai cũng khen. Đặc biệt rất thích nhân viên ở đây, các bạn rất nhiệt tình và chu đáo, mình vô tình nói là hết sasimi cá hồi, có bạn nge được thế là quay lại hỏi mình cần j sau đó đem ra riêng cho mình 1 đĩa. Mình rất hài lòng về quán và sẽ quay lại khi có dịp', 'hinh-1508982323.jpg', 'ThuongAdmin'),
(48, 'Sumo BBQ - Buffet Lẩu & Nướng', '16.07107449999999', '108.23018150000007', '2017-10-26 08:46:54', '01283412220', '11:00', '22:00', 0, 10, 'CGV Cinema Vincom Đà Nẵng, Ngô Quyền, An Hải Bắc, Da Nang, Vietnam', 'Lẩu nướng khá chất lượng. Các ngày trong tuần có thể chọn gói khuyến mãi là 239k hoặc 259k. Gói 259k thì nhiều món hơn và có sushi các loại, bánh xèo, há cảo và nhiều loại thịt hơn. Buffet kiểu gọi món, thích món nào gọi món đó. Thịt ướp thấm, ăn ngon. Các món rau củ, hải sản chiên giòn ăn cũng ngon. Tuy nhiên món kotsuke ( kiểu khoai tây nghiền chiên giòn thị bị ỉu, không ngon). Bánh xếp chiên nhìn hình đầy đặn ra 1 dĩa có chút xíu à, có 2 cái, mà cũng dở nốt. Bánh xèo nhật toàn bột chứ không thấy nhân đâu. Lẩu ngon, có 2 loại để chọn; nhân viên sẽ hỏi bạn khi nào muốn lên lẩu. Nhân viên nhiệt tình, set up món ăn nhanh. Nhân viên còn giúp trở thịt và cắt thịt. Quầy tráng miệng mình thấy khá ít món. Nói chung ăn thịt nướng thì ăn buffet vẫn lợi nhất.\r\nKhông gian thoáng. Giá kia chưa bao gồm VAT.', 'hinh-1508982414.jpg', 'ThuongAdmin'),
(49, 'Novotel Premier Han River Restaurant', '16.077312', '108.22360200000003', '2017-10-26 08:48:43', '01283412220', '06:30', '22:00', 1, 10, 'Novotel Danang Premier Han River, Danang, Da Nang, Vietnam', 'Cuối tuần dẫn ba mẹ đi ăn Buffet lẩu tầng 4 sang chảnh nè. Ngày trước có ăn buffet bbq chỗ này rồi, nên giờ thấy foody giới thiệu có lẩu nên đưa bố me đi ăn cho biế ấy.\r\nNovotel thì khỏi nói rồi, sang chảnh đẳng cấp phải biết, không gian đẹp lung linh, view đẹp, thoáng, lịch sự, nhân viên maxx chuyên nghiệp, phụ vụ chu đáo lắm nha.\r\nCó nhiều vị lẩu, nhà mình gọi lẩu bò ngọt thanh, thịt bò nhiều, đủ loại tươi lắm. Có gỏi nhẹ đi kèm ưng ăn loại nào gấp loại đó khai vị khá thích\r\n', 'hinh-1508982523.jpg', 'ThuongAdmin'),
(50, 'Faifo Grill & Buffet Restaurant', '-33.8615099', '151.21043499999996', '2017-10-26 08:51:27', '01283412220', '17:30', ' 22:00', 1, 20, 'Alfred Street, Sydney, New South Wales, Australia', 'Nằm ngay trung tâm thành phố, Faifo Buffet & Grill sẽ  là địa điểm lý tưởng đối với các tín đồ ẩm thực bởi nhiều ưu điểm: không gian sang trọng, món ăn đa dạng, phục vụ chuyên nghiệp và đặc biệt với mức giá khá hợp lí.', 'hinh-1508984778.jpg', 'SonAdmin'),
(51, 'PapaSteak - Beefsteak', '-33.89145000000001', '151.24969999999996', '2017-10-26 08:52:43', '01283412220', '06:00', '22:00', 1, 10, 'Bondi Junction, New South Wales, Australia', 'Đầu tiên là phải nói đến không gian rất tuyệt. Để mời khách hay hẹn hò đều ổn. Túm lại là ko gian lung linh. Thích hợp dẫn vợ đợ con đến ăn sáng vào cuối tuần.\r\nThịt bò phile mềm nhưng sốt hơi nhạt. Tuy nhiên chấp nhận được vì beefteak là món tây mà người tây ít ăn mặn. Spaghetty ăn tạm ổn. Đồ tráng miệng ngon, phục vụ nhiệt tình nhạc du dương trời ơi lãng mạn lắm quớ.', 'hinh-1508984785.jpg', 'SonAdmin'),
(52, 'The Salmon Restaurant', '-33.8840884', '151.20831650000002', '2017-10-26 08:54:11', '01283412220', '10:00', '22:00', 1, 0, 'Central Station, Elizabeth St, Stand E, Surry Hills, New South Wales, Australia', 'Viết rì viu này mình cũng muốn cảm ơn Foody Đà Nẵng đã tặng voucher 200k Salmon cho tụi mình\r\nVị trí: nằm ở trung tâm, khu vực này mình thường gọi đùa là quận 1 của Đà Nẵng ạ ^^\r\nGiá cả: hì hì, ổn với dân văn phòng ạ, còn nếu sinh viên thì để lớn lên xíu nhé\r\nChất lượng: ngon, cực ngon luôn. Từng món từng món mình đều thích lắm ạ\r\nPhục vụ: rất phong cách ạ, hoàn toàn thích các bạn phục vụ\r\nKhông gian: ấm cúng và mang nét Âu châu. \r\nChắc chắn sẽ quay lại nhà hàng', 'hinh-1508984518.jpg', 'SonAdmin'),
(53, 'Pizza Hut - Lê Duẩn', '-33.88010789999999', '151.20624850000002', '2017-10-26 08:56:26', '01283412220', '08:00', '22:00', 1, 2, 'Zilver Restaurant, Pitt Street, Haymarket, New South Wales, Australia', 'Lúc nào cũng ăn pizza ở đây hết do chương trình khuyến mãi cũng hấp dẫn và kéo dài nhiều ngày trong tuần, mình hay mua combo khuyến mãi cả đồ uống và salad được tặng thêm một pizza tuỳ chọn, pizza vị nào ăn cũng oki, salad thì tạm không có chi đặc biệt. Quán lúc nào cũng đông nên giờ cao điểm chờ cũng hơi lâu\r\n', 'hinh-1508984602.jpg', 'SonAdmin'),
(54, 'Zé Food - Thiên Đường Ăn Vặt Online', '-33.897', '151.1793', '2017-10-26 08:59:34', '01283412220', '09:00', '22:00', 1, 10, 'Newtown, New South Wales, Australia', 'Chiều chiều thèm ăn vặt nên order về ăn. Mình order tokbokki và bạch tuộc xào cay, đồ ăn ngon nhưng hơi ít. Phần ăn 35k nhưng không đc bao nhiêu, toàn hành tây và bắp cải không à. Deliverynow giao hàng nhanh và đúng giờ mặc dù mình order về 1 địa chỉ khá khó tìm, vote cho anh shipper. Nói chung thì vẫn thích tok ở đây mềm và cay đúng điệu của tok, đậm đà cay cay, ăn ngày mưa là phê thôi rồi. Sẽ ghé lại', 'hinh-1508984487.jpg', 'SonAdmin'),
(55, 'Royaltea', '-33.85582', '151.27120000000002', '2017-10-26 09:00:57', '01283412220', '16:00 ', '22:00', 1, 10, 'Vaucluse, New South Wales, Australia', 'Mình đi ăn ở đây lâu rồi mà giờ mới bình luận vì bị mất nick foody. Ăn bill 100k đc tặng 1 bình nước thuỷ tinh\r\nNói sơ về các món ăn ở quán. Pizza mình gọi size nhỏ, viền bánh bị cứng, nhân bị khô và ít phomai như kiểu nướng quá thgian. Có món mì ramen ko hiểu món này là gì, có phomai rất béo, có mì, tokboki, cá viên tôm viên, nồi thập cẩm vậy đó nhưng chả ăn nhập gì với nhau. Nói chung các món khá bt ko xuất sắc j lắm\r\nNhân viên cũng nhanh nhẹn, nhiệt tình tuy có 1 bạn nữ hơi chậm ko rõ là nv mới hay cũ mà ko có kinh nghiệm j nhiều\r\nQuán ngồi vỉa hè nên thoáng mát', 'hinh-1508984383.jpg', 'SonAdmin'),
(56, 'Bánh Tráng Kẹp Dì Hoa', '-33.8640059', '151.2127822', '2017-10-26 09:02:04', '01283412220', '14:30', '22:00', 1, 10, 'Macquarie Street, Sydney, New South Wales, Australia', 'Quán nhớp,mình đang ăn thì có con ruồi ở đâu chết trong đó,nói thiệt là bỏ nguyên 2 dĩa bánh nhợn ko muốn ăn luôn.Thái độ nvien rất tệ.Góp ý quán cần chấn chỉnh lại nếu muốn làm ăn lâu dài.Cạch mặt quán này', 'hinh-1508984358.jpg', 'SonAdmin'),
(57, 'Tàu Hủ Xe Lam - Trần Phú', '-33.89145000000001', '151.24969999999996', '2017-10-26 09:03:20', '01283412220', '09:00', '22:00', 1, 0, 'Bondi Junction, New South Wales, Australia', 'Mình đặt hàng Tàu hủ Xe lam nhân có được giảm 30% trên kênh DeliveryNow. Tàu hủ ship đi nhưng đựng trong cái ly khá đẹp, đá thì để riêng. Mình đặt món tàu hủ tả pí lù, về căn bản thì đậu hủ với nước đường gừng đã ngon rồi, thêm mít, thạch, sương sa... các kiểu nên ăn lạ và cũng khá vui miệng.\r\nBữa sau sẽ thử những món khác như Tàu hủ flan, Tàu hủ ngũ sắc, Tàu hủ phô mai đào, Tàu hủ mứt, Tàu hủ xôi dừa, Tàu hủ truyền thống, thêm Trà đào hương thảo để giải khát nữa.', 'hinh-1508984295.jpg', 'SonAdmin'),
(58, 'Vevy Milktea', '-33.8780176', '151.2204441', '2017-10-26 09:04:25', '01283412220', '09:00', '22:30', 1, 10, 'Darlinghurst, New South Wales, Australia', 'Vevy gắn liền với những năm c2 của mình. Trà đậm vị, ngon, thạch không nhiều vừa phải. Mình thích ở đây là do từ trà tươi, trà sữa, trà thái xanh mọi thứ chị chủ đều pha đậm. Với một con ghiền trà đậm thì đây là một quán phù hợp. Giá từ 25-30k, nhìn hình vậy chứ 50 lần tới quán thì 45 lần mình sẽ uống thái xanh, vì nó khác biệt các quán khác.', 'hinh-1508984288.jpg', 'SonAdmin'),
(59, 'Ăn Vặt - Trường Kim Đồng', '-33.8793348', '151.19722479999996', '2017-10-26 09:05:52', '01283412220', '14:00', '22:00', 1, 2, 'Jones Street, Ultimo, New South Wales, Australia', 'Lâu lâu lại thèm món này hình như là ăn gần hết menu rồi mà h ms có hình đăng. Có món 15k có món 20k tầm giá sinh viên, ngay trường tiểu học chắc bán đc cho mấy e học sinh lắm đây', 'hinh-1508984276.jpg', 'SonAdmin'),
(60, 'Alibaba - Buffet Tự Chọn 119K - Lê Thanh Nghị', '-33.8807035', '151.20296159999998', '2017-10-26 09:07:11', '01283412220', '10:00', '22:00', 1, 10, 'Ultimo Road, Haymarket, New South Wales, Australia', 'Chỗ này là địa bàn của gia đình mình rồi. Cả nhà đều có sở thích ăn đồ nướng nên cứ cuối tuần là dẫn ra chỗ này ăn nhậu\r\nVề hệ thống buffet nướng 119k ni thì cả nhà mình đã đi hết rồi: alibaba chỗ lê thanh nghị, alibaba này và cả chỗ hun khói nguyễn hoàng\r\nChừ thì review ưu và khuyết điểm chỗ này nè\r\nKo gian rộng rãi, thoáng hơn 2 chỗ kia. Lại siêu gần nhà mình nữa, chưa tới 5p đi xe máy\r\nNhân viên nhiệt tình nhất hơn 2 chỗ kia. Đến cả mấy chị quản lý c chủ cũng ra phục vụ khách luôn\r\nĐồ nướng ở đây ngon, ướp thấm, nước chấm ngon nốt nhưng buồn là thiếu nhiều món so vs 2 bên kia\r\nLẩu ở đây lại ngon hơn 2 bên kia ', 'hinh-1508984245.jpg', 'SonAdmin'),
(61, 'Võ Sĩ Đạo Restaurant - Ẩm Thực Nhật', '-33.86746960000001', '151.20189870000002', '2017-10-26 09:09:05', '01283412220', '16:00', ' 22:00', 0, 10, 'Lime Street, Sydney, New South Wales, Australia', 'Lâu lắm rồi mới được đãi sinh nhật ở nhà hàng này. May nhờ đứa bạn có đặt bàn bên tablenow của foody nên được giảm giá 10% và set luôn phòng riêng nên rất là riêng tư.\r\nMà quán này vốn cũng khá lịch sự rồi. Nhóm đi đông ngồi phòng riêng nó lại vui hơn.\r\nĐồ ăn tươi ngon. Có salat phô mai ăn lạ cực kỳ.\r\nSushi và sashimi thì đẳng cấp khỏi bàn. \r\nLẩu sabu ở đây mình gọi lẩu hải sản chứ ko phải thịt bò như mọi khi. Hải sản tươi. Rau nấm và mì udon ăn kèm tuyệt vời. Nước thì hơi nhạt nhưng đúng điệu vị Nhật.', 'hinh-1508984208.jpg', 'ThuongAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `TYPE`
--

CREATE TABLE `TYPE` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE_NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TYPE`
--

INSERT INTO `TYPE` (`TYPE_ID`, `TYPE_NAME`) VALUES
(19, 'Ăn vặt/Vỉa hè'),
(20, 'Buffet'),
(21, 'Nhà hàng');

-- --------------------------------------------------------

--
-- Table structure for table `TYPE_SHOP`
--

CREATE TABLE `TYPE_SHOP` (
  `TYPE_ID` int(11) DEFAULT NULL,
  `SHOP_ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TYPE_SHOP`
--

INSERT INTO `TYPE_SHOP` (`TYPE_ID`, `SHOP_ID`) VALUES
(20, 47),
(20, 44),
(20, 46),
(20, 48),
(20, 49),
(21, 50),
(21, 51),
(21, 52),
(21, 52),
(21, 53),
(19, 54),
(21, 55),
(19, 56),
(19, 57),
(19, 58),
(19, 59),
(20, 60),
(21, 61);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACCOUNT`
--
ALTER TABLE `ACCOUNT`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  ADD PRIMARY KEY (`FEEDBACK_ID`);

--
-- Indexes for table `RATE`
--
ALTER TABLE `RATE`
  ADD PRIMARY KEY (`RATE_ID`);

--
-- Indexes for table `SAVE`
--
ALTER TABLE `SAVE`
  ADD PRIMARY KEY (`SAVE_ID`);

--
-- Indexes for table `SHOP`
--
ALTER TABLE `SHOP`
  ADD PRIMARY KEY (`SHOP_ID`);

--
-- Indexes for table `TYPE`
--
ALTER TABLE `TYPE`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `COMMENT`
--
ALTER TABLE `COMMENT`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  MODIFY `FEEDBACK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `RATE`
--
ALTER TABLE `RATE`
  MODIFY `RATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `SAVE`
--
ALTER TABLE `SAVE`
  MODIFY `SAVE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `SHOP`
--
ALTER TABLE `SHOP`
  MODIFY `SHOP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `TYPE`
--
ALTER TABLE `TYPE`
  MODIFY `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
