-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2022 lúc 09:17 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trawind`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idquyen` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `password`, `hoten`, `sdt`, `email`, `idquyen`) VALUES
('admin', 'admin', '', '', '', 1),
('dphong2204', 'Phong224', '', '', 'shikadai224@gmail.com', 0),
('phong224', 'Phong224', 'Ngô Đình Phong', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chu_de_tour`
--

CREATE TABLE `chu_de_tour` (
  `machude` varchar(5) NOT NULL,
  `tenchude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chu_de_tour`
--

INSERT INTO `chu_de_tour` (`machude`, `tenchude`) VALUES
('CD1', 'Lịch sử'),
('CD2', 'Mùa Xuân'),
('CD3', 'Mùa Hạ'),
('CD4', 'Mùa Thu'),
('CD5', 'Mùa Đôngg'),
('CD6', 'Giới trẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `madh` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rate` int(2) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`madh`, `comment`, `rate`, `time`) VALUES
(1, 'Tuyệt vời', 10, '2022-12-16'),
(56, 'Tuyệt vời', 10, '2022-12-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `t_id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(500) DEFAULT NULL,
  `ngaydattour` date NOT NULL DEFAULT current_timestamp(),
  `sokhachhang` int(2) NOT NULL,
  `nguoilon` int(2) NOT NULL,
  `trenho` int(2) NOT NULL,
  `treem` int(2) NOT NULL,
  `embe` int(2) NOT NULL,
  `tongtien` varchar(20) NOT NULL,
  `thanhtoan` varchar(50) NOT NULL DEFAULT 'Chưa thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madonhang`, `t_id`, `username`, `hoten`, `sdt`, `email`, `diachi`, `ngaydattour`, `sokhachhang`, `nguoilon`, `trenho`, `treem`, `embe`, `tongtien`, `thanhtoan`) VALUES
(1, 'T01', 'phong224', 'Ngô Đình Phong', '0868711015', 'phongnd@gmail.com', '440 Trần Đại Nghĩa, Hòa Hải, Ngũ Hành Sơn, Đà Nẵng', '2022-10-15', 1, 1, 0, 0, 0, '5000000', 'Đã thanh toán'),
(53, 'T05', 'phong224', 'Ngô Đình Phong', '0868711015', 'ngophong@gmail.com', '', '2022-12-14', 1, 1, 0, 0, 0, '7000000', 'Đã thanh toán'),
(54, 'T02', '', 'Ngô Đình Phong', '0868711015', 'ngophong@gmail.com', '', '2022-12-17', 1, 1, 0, 0, 0, '3500000', 'Đã thanh toán'),
(55, 'T06', 'phong224', 'Ngô Đình Phong', '0868711015', 'ngophong@gmail.com', '', '2022-12-17', 1, 1, 0, 0, 0, '7000000', 'Đã thanh toán'),
(56, 'T04', 'dphong2204', 'Ngô Đình Phong', '0868711015', 'shikadai224@gmail.com', '', '2022-12-18', 2, 1, 0, 1, 0, '7500000', 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_details`
--

CREATE TABLE `info_details` (
  `id` varchar(20) NOT NULL,
  `anh1` varchar(100) NOT NULL,
  `anh2` varchar(100) NOT NULL,
  `anh3` varchar(100) NOT NULL,
  `anh4` varchar(100) NOT NULL,
  `thoigian` varchar(50) NOT NULL,
  `phuongtien` varchar(50) NOT NULL,
  `diemthamquan` varchar(50) NOT NULL,
  `amthuc` varchar(50) NOT NULL,
  `khachsan` varchar(50) NOT NULL,
  `tgianlytuong` varchar(50) NOT NULL,
  `doituong` varchar(100) NOT NULL,
  `uudai` varchar(50) NOT NULL,
  `lichtrinh` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `info_details`
--

INSERT INTO `info_details` (`id`, `anh1`, `anh2`, `anh3`, `anh4`, `thoigian`, `phuongtien`, `diemthamquan`, `amthuc`, `khachsan`, `tgianlytuong`, `doituong`, `uudai`, `lichtrinh`) VALUES
('T01', 'Others/images/T01/danang1.jpg', 'Others/images/T01/danang2.jpg', 'Others/images/T01/hoianvna.jpg', 'Others/images/T01/hoian2.jpg', '4 Ngày - 3 Đêm', 'Máy bay & ô tô', '1 địa điểm trong nhà, 4 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, trẻ em', '', '<h4>NGÀY 01: NỘI BÀI – ĐÀ NẴNG ( Ăn: Trưa/ Tối)</h4><p>Sáng: Xe và HDV của Văn Hóa &amp; DL Hà Nội đón quý khách tại điểm hẹn, khởi hành ra sân bay nội bài, làm thủ tục trên chuyến bay của hang hàng không VN Airlines / VJ… đi Đà Nẵng. Tới Đà Nẵng xe đón quý khách khởi hành về khách sạn nhận phòng nghỉ ngơi.&nbsp;<br>Trưa 12h00: Quý khách dùng cơm trưa tại nhà hàng. Sau bữa trưa đoàn nghỉ ngơi tại khách sạn.&nbsp;<br>Chiều: Quý khách tự do tham quan tắm biển, tham gia các hoạt động vui chơi tại bãi biển như: cano lướt sóng, bóng đá bãi biển, bóng chuyền bãi biển…&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng. Sau bữa tối đoàn tự do tham quan khám phá thành phố Đà Nẵng về đêm.</p><h4>NGÀY 02: BÁN ĐẢO SƠN TRÀ – NGŨ HÀNH SƠN – HỘI AN ( Ăn: Sáng/ Trưa/ Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, hòa bình vào làn nước biển trong xanh của bãi biển Mỹ Khê, một trong 6 bãi biển đẹp nhất hành tinh do tạp chí Fobes bình chọn.&nbsp;<br>07h00 – 08h00: Quý khách dùng điểm tâm Buffet tại khách sạn.&nbsp;<br>08h05 – 08h30: Xe và HDV đón quý khách khởi hành tham quan Bán Đảo Sơn Trà thưởng ngoạn toàn cảnh phố biển Đà Nẵng trên cao. Xe đưa quý khách dọc theo triền núi Đông Nam để chiêm ngưỡng vẻ đẹp tuyệt mỹ của biển Đà Nẵng, viếng chùa Linh Ứng Tự - nơi có tượng Phật Bà 67m cao nhất Việt Nam.&nbsp;<br>09h00: Tiếp tục hành trình, xe đưa quý khách thăm quan danh thắng Ngũ Hành Sơn (khám phá các hang động, vãn cảnh đẹp non nước trời mây, viếng những ngôi chùa thiêng), Làng Nghề Điêu Khắc Đá Non Nước, tận mắt chiêm ngưỡng những tác phẩm độc đáo bằng đá được tạc bởi bàn tay của những người thợ tài hoa.&nbsp;<br>Trưa 11h30: Kết thúc chương trình tham quan, xe đón quý khách về nhà hàng dùng cơm trưa, sau bữa cơm trưa đoàn nghỉ ngơi tại khách sạn.&nbsp;<br>Chiều: Quý khách tự do tham quan tăm biển Đà Nẵng.&nbsp;<br>18h00: Xe đón quý khách khởi hành đi Hội An.&nbsp;<br>Tối 19h30: Qúy khách ăn tối tại nhà hàng, thưởng thức đặc sản Hội An. Sau bữa tối Qúy khách bách bộ tham quan mua sắm tại Phố Cổ Hội An – Nơi được UNESCO công nhận là Di sản văn hóa thế giới, với các điểm tham quan: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến &amp; Xưởng thủ công mỹ nghệ…Tự do mua sắm các mặt hàng lưu niệm phong phú nơi đây..&nbsp;<br>Tối 21h00: Xe đưa quý khách về lại Đà Nẵng dọc đường biển để ngắm thành phố Đà Nẵng tuyệt đẹp về đêm với hàng loạt khu nghỉ dưỡng và Resort cao cấp. Ngủ đêm tại khách sạn tại Đà Nẵng.</p><h4>NGÀY 03: BÀ NÀ HILLS – CHỐN BỒNG LAI TIÊN CẢNH ( Ăn: Sáng/ Trưa/ Tối)</h4><p>Sáng 05h00: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi trên biển như: bóng đá bãi biển, bóng chuyền bãi biển…&nbsp;<br>07h00 – 08h00: Quý khách dùng điểm tâm Buffet sáng tại khách sạn.&nbsp;<br>08h05: Xe đưa quý khách khởi hành đi khu du lịch Bà Nà – Núi Chúa, nơi mà quý khách khám phá những khoảnh khắc giao mùa bất ngờ Xuân – Hạ - Thu – Đông trong 1 ngày.&nbsp;<br>09h00: Đến ga Đến ga cáp treo Suối Mơ, lên tuyến cáp treo đạt 2 kỷ lục thế giới, (dài gần 6.000m), quý khách tham quan Khu Le Jardin, tham quan Hầm Rượu Debay của Pháp (chi phí tự túc). Viếng Chùa Linh Ứng Bà Nà, chiêm ngưỡng tượng Phật Thích Ca cao 27m, Vườn Lộc Uyển, Quan Âm Các. Tiếp tục đến Gare Debay đi tuyến cáp thứ 2 lên đỉnh Bà Nà.&nbsp;<br>Trưa 11h30: Quý khách dùng bữa trưa Buffet tại nhà hàng. Tự do nghỉ ngơi, ngắm cảnh Bà Nà Hill.&nbsp;<br>Chiều: Qúy khách tiếp tục phục đỉnh Núi Chúa ở độ cao 1.487m so với mực nước biển để thưởng thức quang cảnh núi rừng Bà Nà và toàn cảnh Đà Nẵng và Quảng Nam trên cao.&nbsp;<br>Tiếp đó HDV đưa quý khách tham quan khu vui chơi Fantasy Park, quý khách tự do tham gia các trò chơi phiêu lưu mới lạ, hấp dẫn, hiện đại như vòng quay tình yêu, phi công Skiver, đường đua lửa, xe điện đụng, ngôi nhà ma…&nbsp;<br>Chiều 15h00: Qúy khách xuống cáp treo về lại Đà Nẵng. Xe đưa quý khách về khách sạn, quý khách tự do nghỉ ngơi, tắm biển.&nbsp;<br>Tối 18h30: Đoàn ăn tối tại nhà hàng, sau đó là thời gian tự do khám phá thành phố Đà Nẵng về đêm, tản bộ dọc 2 bờ sông Hàn thơ mộng ngắm Cầu Quay sông Hàn, thưởng thức café, nét văn hóa người dân Đà Nẵng. Ngủ đêm tại Khách sạn ở Đà Nẵng.&nbsp;<br>&nbsp;</p><h4>NGÀY 04: ĐÀ NẴNG – BẢO TÀNG CHĂM – CHỢ HÀN – HÀ NỘI – YÊN BÁI ( Ăn: Sáng/ Trưa)</h4><p>Sáng: Qúy khách dậy sớm ngắm cảnh bình minh trên biển, tham gia các hoạt động vui chơi tại bãi biển Mỹ Khê xinh đẹp. Dùng điểm tâm sáng tại khách sạn.&nbsp;<br>08h30: Xe đón quý khách khởi hành tham quan bảo tàng Champa, một trong những bảo tàng Chăm lớn nhất cả nước với hơn 400 tác phẩm hiện đang trưng bày tại các phòng và gần 2000 hiện vật đang lưu giữ trong kho, Bảo tàng Điêu khắc Chăm giới thiệu đến du khách bộ sưu tập đầy đủ và đặc sắc các hiện vật đại diện cho hầu hết các phong cách nghệ thuật điêu khắc đã hình thành trong lịch sử phát triển rực rỡ của vương quốc Champa. Các hiện vật bằng nhiều chất liệu khác nhau gồm sa thạch, đồng, đất nung được sắp xếp theo các phòng trưng bày và các bộ sưu tập mang tên địa điểm phát hiện hoặc khai quật như Trà Kiệu, Mỹ Sơn, Đồng Dương, Tháp Mẫm..&nbsp;<br>09h30: Kết thúc chương trình tham quan xe đón quý khách tới chợ Hàn – Đà Nẵng, nằm ở vị trí trung tâm thành phố, chợ Hàn là một trong những khu chợ lớn nhất ở Đà Nẵng. Nơi đây tập trung đầy đủ tất cả những mặt hàng phục vụ cho người dân lẫn khách du lịch. Hàng hóa ở đây luôn tươi ngon và hấp dẫn. Chợ Hàn bày bán khá đa dạng và phong phú với các chủng loại hàng hóa, giày dép, quần áo, vải vóc, túi xách, các đồ lưu niệm… đặc biệt chợ Hàn nổi tiếng với các thực phẩm hải sản tươi sống, trái cây và các đặc sản của Đà Nẵng như những gian hàng mắm, hàng khô du khách thường thích mua về làm quà.&nbsp;<br>Trưa 11h30: Quý khách làm thủ tục trả phòng khách sạn. Ăn trưa tại nhà hàng.&nbsp;<br>12h30: Xe và HDV đón quý khách khởi hành ra sân bay Đà Nẵng. Làm thủ tục trên chuyến bay của hãng hàng không VN Airline / VJ … khởi hành về Hà Nội. Tới sân bay Nội Bài xe đón quý khách khởi hành về điểm đón ban đầu. HDV chia tay đoàn và hẹn gặp lại đoàn trong những chuyến đi sau.</p>'),
('T02', 'Others/images/T02/coto1.jpg', 'Others/images/T02/coto2.jpg', 'Others/images/T02/coto3.jpg', 'Others/images/T02/coto4.jpg', '3 Ngày - 2 Đêm', 'Ô tô', '1 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Mùa hè', 'Cặp đôi, Gia đình nhiều thế hệ, Thanh niên', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T03', 'Others/images/T03/nhatrang1.jpg', 'Others/images/T03/nhatrang2.jpg', 'Others/images/T03/nhatrang3.jpg', 'Others/images/T03/nhatrang4.jpg', '4 Ngày - 3 Đêm', 'Máy bay & ô tô', '2 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, trẻ em', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T04', 'Others/images/T04/phuquoc1.jpg', 'Others/images/T04/phuquoc2.jpg', 'Others/images/T04/phuquoc3.jpg', 'Others/images/T04/phuquoc4.jpg', '2 Ngày - 2 Đêm', 'Ô tô', '1 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Mùa hè', 'Cặp đôi, Gia đình nhiều thế hệ, Thanh niên', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T05', 'Others/images/T05/dalat1.jpg', 'Others/images/T05/dalat2.jpg', 'Others/images/T05/dalat3.jpg', 'Others/images/T05/dalat4.jpg', '4 Ngày - 3 Đêm', 'Máy bay & ô tô', '1 địa điểm trong nhà, 4 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T06', 'Others/images/T06/quangbinh1.jpg', 'Others/images/T06/quangbinh2.jpg', 'Others/images/T06/quangbinh3.jpg', 'Others/images/T06/quangbinh4.jpg', '3 Ngày - 2 Đêm', 'Máy bay & Ô tô', '1 địa điểm trong nhà, 3 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T07', 'Others/images/T07/hue1.jpg', 'Others/images/T07/hue2.jpg', 'Others/images/T07/hue3.jpg', 'Others/images/T07/hue4.jpg', '2 Ngày - 2 Đêm', 'Máy bay & ô tô', '1 địa điểm trong nhà, 3 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T08', 'Others/images/T08/caobang1.jpg', 'Others/images/T08/caobang2.jpg', 'Others/images/T08/caobang3.jpeg', 'Others/images/T08/caobang4.jpg', '3 Ngày - 3 Đêm', 'Ô tô', '1 địa điểm trong nhà, 3 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Resort 5 sao', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', '', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T09', 'Others/images/T09/mocchau.jpg', 'Others/images/T09/dalat.jpg', 'Others/images/T09/caobang.jpg', 'Others/images/T09/khanhhoa.jpg', '3 Ngày - 3 Đêm', 'Máy bay & Ô tô', '1 địa điểm trong nhà, 3 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Villa', 'Mua Xuân', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', 'Không', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T10', 'Others/images/T10/phuquoc1.jpg', 'Others/images/T10/phuquoc2.jpg', 'Others/images/T10/phuquoc3.jpg', 'Others/images/T10/phuquoc4.jpg', '2 Ngày - 2 Đêm', 'Máy bay & Ô tô', '1 địa điểm trong nhà, 3 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Villa', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', 'Không', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>'),
('T11', 'Others/images/T11/caobang1.jpg', 'Others/images/T11/caobang2.jpg', 'Others/images/T11/caobang3.jpeg', 'Others/images/T11/caobang4.jpg', '2 Ngày - 2 Đêm', 'Máy bay ', '1 địa điểm trong nhà, 3 địa điểm ngoài trời', 'Buffet sáng, Theo thực đơn, Ăn tự do', 'Villa', 'Quanh năm', 'Người lớn tuổi, Cặp đôi, Gia đình nhiều thế hệ, Thanh niên, Trẻ em', 'Không', '<h4>NGÀY 01: HÀ NỘI – CẢNG CÁI RỒNG – ĐẢO CÔ TÔ ( Ăn: Trưa / Tối)</h4><p>Sáng 07h00: Xe ôtô và HDV của Công ty đón đoàn tại điểm hẹn, đưa Quý khách khởi hành đi Cái Rồng. Quý khách ăn sáng tại Hải Dương (Chi phí tự túc).&nbsp;<br>Trưa 11h00: Đoàn ăn trưa tại nhà hàng tại Hạ Long – Vịnh biển 02 lần được công nhận là di sản thế giới. Sau bữa trưa đoàn tiếp tục khởi hành đi Vân Đồn. Trên đường quý khách ngắm các nhà máy đang sàng tuyển vàng đen của Tổ quốc.&nbsp;<br>Chiều 14h00: đoàn đi tàu cao tốc ra đảo Cô Tô.&nbsp;<br>15h40: đến Cô Tô, Quý khách về nhận phòng khách sạn nghỉ ngơi. Chiều tự do tắm biển tại Bãi tắm Bác Hồ và mặc áo cờ đỏ sao vàng(do Văn Hóa &amp; Du Lịch Hà Nội tặng) tham gia chương trình “Cô Tô chuyện tình đảo nhỏ”, chụp ảnh với con đường tình yêu thơ mộng lãng mạn bên biển. Đoàn dùng bữa tối tại nhà hàng. Nghỉ đêm tại khách sạn.</p><h4>NGÀY 02: THAM QUAN CÔ TÔ ( Ăn: Sáng / Trưa / Tối)</h4><p>Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi tại bãi biển như: Bóng đá bãi biển, bóng chuyền bãi biển, cano lướt sóng…&nbsp;<br>07h00 – 08h00: Ăn sáng tại khách sạn. HDV đưa đoàn đi thăm Khu tượng đài và đền thờ Bác Hồ - Điểm duy nhất cả nước được dựng tượng khi người còn sống. Đoàn tiếp tục tham quan bãi đá Cầu Mỵ - Nơi có phong cảnh ngoạn mục, tự do tắm biển ở Vàn Chảy – bãi tắm đẹp nhất Cô Tô. Trên đường về dùng bữa trưa tại nhà hàng, Quý khách có cơ hội được chụp những khoảnh khắc ấn tượng tại khu rừng chõi hàng trăm năm tuổi.&nbsp;<br>Chiều 15h00: Quý khách tự do nghỉ ngơi tắm biển Hồng Vàn với biển xanh cát vàng óng, chụp ảnh ngọn Hải đăng Cô Tô, xa xa là đảo Cô Tô con, đảo Thanh Lân, Hòn Dê&nbsp;<br>Tối 19h00: Quý khách dùng cơm tối tại nhà hàng, sau bữa tối đoàn tự do tham quan khám phá Cô Tô về đêm.</p><h4>NGÀY 03: CÔ TÔ – CẢNG CÁI RỒNG – HÀ NỘI ( Ăn: Sáng / Trưa )</h4><p>Sáng 07h00: Quý khách ăn sáng tại khách sạn. Quý khách tự do đi mua sắm các đặc sản địa phương như mực một nắng, tu hài, sò, ốc móng tay, sá sùng... Hoặc tự do đi thăm quan đảo Cô Tô con – được mệnh danh là bãi biển đẹp và hoang sơ (chi phí tự túc).&nbsp;<br>Trưa 11h30: Đoàn trả phòng khách sạn. Ăn trưa tại nhà hàng. Quý khách đi tàu cao tốc lúc 13h30 về Cái Rồng.&nbsp;<br>Chiều 14h45: đến Cái Rồng, xe đón đoàn trở về Hà Nội. Đoàn dừng chân nghỉ ngơi và mua sắm đặc sản Hải Dương. Xe tiếp tục đưa đoàn về điểm hẹn ban đầu trong thành phố. Chia tay đoàn kết thúc chương trình và hẹn gặp lại quý khách trong những chương trình sau.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like_tours`
--

CREATE TABLE `like_tours` (
  `username` varchar(50) NOT NULL,
  `tour_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `like_tours`
--

INSERT INTO `like_tours` (`username`, `tour_id`) VALUES
('phong224', 'T01'),
('phong224', 'T04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`img`) VALUES
('Others/images/caurong.jpg'),
('Others/images/dalat.jpg'),
('Others/images/phongnha.jpg'),
('Others/images/vinhhalong.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindonhang`
--

CREATE TABLE `thongtindonhang` (
  `madonhang` int(11) NOT NULL,
  `hoten_hk` varchar(50) NOT NULL,
  `gioitinh_hk` varchar(50) NOT NULL,
  `ngaysinh_hk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtindonhang`
--

INSERT INTO `thongtindonhang` (`madonhang`, `hoten_hk`, `gioitinh_hk`, `ngaysinh_hk`) VALUES
(1, 'Ngô Đình Phong', 'Nam', '22/04/2000'),
(53, 'Ngô Đình Phong', 'Nam', '22 Tháng 4, 2003'),
(54, 'Ngô Đình Phong', 'Nam', '22 Tháng 4, 2003'),
(55, 'Ngô Đình Phong', 'Nam', '22 Tháng 4, 2003'),
(56, 'Ngô Đình Phong', 'Nam', '22 Tháng 4, 2003'),
(56, 'Ngô Đình Phongg', 'Nam', '18 Tháng 11, 2012');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `matinh` int(10) NOT NULL,
  `tentinh` varchar(50) NOT NULL,
  `gttinh` varchar(5000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img_bg` varchar(100) NOT NULL,
  `mien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`matinh`, `tentinh`, `gttinh`, `img`, `img_bg`, `mien`) VALUES
(11, 'Cao Bằng', 'Cao Bằng nằm trên vùng rộng lớn có địa hình đa dạng với hệ thống sông suối, núi đá dày đặc. Thiên nhiên ưu đãi cho nơi đây một bầu khí hậu mát mẻ và những cảnh quan vừa hùng vỹ, vừa thơ mộng. Dọc theo con đường dài 280km từ thủ đô Hà Nội, bức tranh non nước Cao Bằng hiện lên trước mắt du khách với cung đường uốn lượn theo triền núi, thấp thoáng hai bên là những nếp nhà sàn đặc trưng của đồng bào các dân tộc Tày, Nùng.\r\n\r\nĐăng ký tour Cao Bằng cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Thác Bản Giốc, động Ngườm Ngao, Khu di tích quốc gia đặc biệt Pác Bó,...\r\n', 'Others/images/caobang.jpg', 'Others/images/caobang_bg.jpg', 'Bắc'),
(14, 'Quảng Ninh', 'Quảng Ninh là tỉnh ven biển thuộc vùng Đông Bắc Bộ Việt Nam. Theo quy hoạch phát triển kinh tế, Quảng Ninh vừa thuộc vùng kinh tế trọng điểm phía bắc vừa thuộc Vùng duyên hải Bắc Bộ. Đây là tỉnh khai thác than đá chính của Việt Nam, có vịnh Hạ Long là di sản, kỳ quan thiên nhiên thế giới\r\n\r\nĐăng ký tour Quảng Ninh cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Vịnh Hạ Long, Đảo Tuần Châu,..', 'Others/images/vinhhalong.jpg', 'Others/images/quangninh_bg.jpg', 'Bắc'),
(15, 'Hải Phòng', 'Thành phố biển Hải Phòng, một trong những trung tâm du lịch lớn của Việt Nam. Hải Phòng còn giữ được nhiều di tích lịch sử, danh lam thắng cảnh và đặc biệt là lễ hội chọi trâu ở Đồ Sơn. Hải Phòng nằm trong tuyến du lịch đặc sắc Hà Nội - Hải Phòng - vịnh Hạ Long. Từ biển Đồ Sơn, du khách có thể tới thăm đảo và vườn quốc gia Cát Bà, thăm vịnh Bái Tử Long và vịnh Hạ Long.\r\n\r\nĐăng ký tour Hải Phòng cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Đảo Cát Bà, Vịnh Lan Hạ,...', 'Others/images/haiphong.jpg', 'Others/images/haiphong_bg.jpg', 'Bắc'),
(24, 'Lào Cai', 'Lào Cai là một tỉnh miền núi Tây Bắc của nước ta. Là một tỉnh vùng cao nên sương mù thường xuất hiện phổ biến trên toàn tỉnh, có nơi ở mức độ rất dày. Bởi vậy khách du lịch thường đến Sapa, Y Tý,… để săn mây. \r\n\r\nMùa xuân khí hậu ở đây trong lành và thoáng đãng, hoa đào nở tươi thắm. Mùa hè những tiếng thác chảy rì rào. Mùa thu mát mẻ với những cánh đồng lúa chín vàng. Mùa đông tuyết rơi lãng mạn. \r\n\r\nĐăng ký tour Lào Cai cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: SaPa, Núi Hàm Rồng, Bản Cát Cát, Thác Bạc,...', 'Others/images/sapa.jpg', 'Others/images/laocai_bg.jpg', 'Bắc'),
(29, 'Hà Nội', 'Hà Nội là thủ đô ngàn năm văn hiến, còn lưu dấu nhiều di tích như Hồ Gươm, Cầu Thê Húc, Chùa Quán Sứ, Hồ Tây, 36 phố phường. Hà Nội có bốn mùa, luôn mang đến nhiều hoài niệm khó phai, mỗi mùa một vẻ, xuân lễ hội, hạ tươi thắm, thu quyến rũ và đông ấn tượng. Món ngon có Phở, Chả cá Lã Vọng, bánh tôm Hồ Tây.\r\n\r\nĐăng ký tour Hà Nội cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Hồ Hoàn Kiếm, Đền Ngọc Sơn, Văn Miếu, Chùa Trấn Quốc, Lăng Hồ Chủ Tịch, Bảo tàng Hồ Chí Minh, Nhà Sàn Bác Hồ, Chùa Một Cột, Hoàng Thành Thăng Long, Cầu Thê Húc, Vườn Quốc Gia Ba Vì, Làng Cổ Đường Lâm, Chùa Hương,...', 'Others/images/hanoi.jpg', 'Others/images/hanoi_bg.jpg', 'Bắc'),
(35, 'Ninh Bình', 'Ninh Bình là thành phố nằm ở cực Nam của đồng bằng sông Hồng với nhiều danh lam thắng cảnh nổi tiếng như cố đô Hoa Lư cùng bề dày lịch sử hào hùng, quần thể Tam Cốc - Bích Động đẹp say lòng, Tràng An với khung cảnh thiên nhiên hùng vĩ và nhiều địa điểm du lịch tâm linh như chùa Bái Đính, nhà thờ Phát Diệm,...', 'Others/images/ninhbinh.jpg', 'Others/images/ninhbinh_bg.jpg', 'Bắc'),
(37, 'Nghệ An', 'Nghệ An sở hữu địa hình đa dạng từ núi cao, đồng bằng, trung du đến đường bờ biển dài 82 km với nhiều bãi tắm đẹp, khu bảo tồn thiên nhiên... Vẻ đẹp của vùng đất này được lưu truyền trong câu ca dao: \"Non xanh nước biếc như tranh họa đồ\".\r\n\r\nĐăng ký tour Nghệ An cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Khu lưu niệm Chủ tịch Hồ Chí Minh,\r\n Đền Chung Sơn, Đảo Chè Thanh Chương, Vườn quốc gia Pù Mát,...', 'Others/images/nghean.jpg', 'Others/images/nghean_bg.jpg', 'Trung'),
(41, 'TP. Hồ Chí Minh', 'Du lịch đến với thành phố Hồ Chí Minh bạn có thể gặp những tòa nhà cao tầng nằm san sát, những khu vui chơi giải trí, trung tâm mua sắm sầm uất, nhưng cũng không thiếu những biệt thự cổ kính, những ngôi chợ truyền thống. Sài Gòn rộng lớn và không thiếu những “đặc sản” du lịch như du ngoạn ven sông Sài Gòn bằng tàu, thăm phố Tây Phạm Ngũ Lão, mua sắm ở chợ Bến Thành hay về với biển Cần Giờ.\r\n\r\nĐăng ký tour TP. Hồ Chí Minh cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Củ Chi, Địa đạo Củ Chi, KDL Nông Trang Xanh, Cần Giờ, Bưu điện Trung tâm TP. Hồ Chí Minh, Nhà thờ Đức Bà, Hội trường Thống Nhất (Dinh Độc Lập), Bảo tàng TP. Hồ Chí Minh, Bảo tàng Mỹ thuật TP. Hồ chí Minh, Chùa Bà Thiên Hậu, Đài quan sát Bitexco, Đài quan sát Landmark 81 Skyview, Xe buýt đỏ mui trần Hop On - Hop Off, Tàu cao tốc Greenlines-DP, Ca nô Les Rives, Chiến khu Rừng Sác, KDL sinh thái Vàm Sát, KDL sinh thái Dần Xây, Cầu Nam Hải - Cần Giờ, Bến du thuyền - Kênh Nhiêu Lộc, Thả đèn Hoa đăng trên dòng Kênh Nhiêu Lộc, Du thuyền Thị Nghè, CHÈO SUP, CHÈO SUP XUYÊN RỪNG NGẬP MẶN, TREKKING RỪNG PHÒNG HỘ CẦN GIỜ, ĐỀN HÙNG, QUÁN CÀ PHÊ ĐỖ PHỦ (ĐẶNG DUNG), CÀ PHÊ ĐỖ PHỦ - CÀ PHÊ BƠ, CHỢ BÌNH TÂY, SAIGON CASA CAFE, BẢO TÀNG ÁO DÀI, CHÙA BỬU LONG, SAIGON WATERBUS , TRẢI NGHIỆM TRỰC THĂNG NGẮM TPHCM, TRẢI NGHIỆM TRỰC THĂNG NGẮM TPHCM (1), HOÀNG HÔN TRÊN SÔNG SÀI GÒN, DU THUYỀN LES RIVES,...', 'Others/images/tphcm.jpg', 'Others/images/tphcm_bg.jpg', 'Nam'),
(43, 'Đà Nẵng', 'Đà Nẵng nằm giữa ba di sản thế giới: cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Đà Nẵng còn có nhiều danh thắng tuyệt đẹp say lòng du khách như Ngũ Hành Sơn, Bà Nà, bán đảo Sơn Trà, đèo Hải Vân, sông Hàn thơ mộng và cầu quay Sông Hàn – niềm tự hào của thành phố, và biển Mỹ Khê đẹp nhất hành tinh.\r\n\r\nĐăng ký tour Đà Nẵng cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Bà Nà Hills, Cầu Quay Sông Hàn, Ngũ Hành Sơn, Bán đảo Sơn Trà , Suối khoáng nóng Thần Tài, Công viên Châu Á - Asian Park, Biển Mỹ Khê, Bảo tàng Điêu Khắc Chăm,...', 'Others/images/banahill.jpg', 'Others/images/danang.jpg', 'Trung'),
(49, 'Lâm Đồng', 'Lâm Đồng là một trong 5 tỉnh phát triển mạnh mẽ về văn hóa, kinh tế, chính trị ở Tây Nguyên. Với khí hậu mát mẻ quanh năm, các địa điểm du lịch Lâm Đồng đều sở hữu không khí trong lành, yên bình với đủ loại hình du lịch. Đặc biệt, từ Lâm Đồng, bạn có thể kết hợp du lịch đến các địa điểm lân cận như Đà Lạt, Bảo Lộc, Di Linh hay Cát Tiên.\r\n\r\nHãy dành thời gian để ngắm bình minh và săn mây ở đồi chè Cầu Đất, chùa Linh Quy PHáp Ẩn. Hay khung cảnh thiên nhiên hoang sơ ở Tuyệt Tình Cốc, đồi Thông Đà Lạt hay khu du lịch Nam Cát Tiên. Ngoài ra, bạn đừng quên thưởng thức những món ăn ngon tuyệt khi đến Lâm Đồng nhé!', 'Others/images/lamdong.jpg', 'Others/images/dalat_bg.jpg', 'Trung'),
(66, 'Đồng Tháp', 'Với diện tích trải rộng ở cả hai bờ sông Tiền, Đồng Tháp nổi tiếng với các cánh đồng lúa trù phú chạy dọc theo những con kênh hiền hòa cùng những cánh rừng nguyên sinh và hồ sen thơm ngát. Không chỉ có thiên nhiên rực rỡ, vùng đất miền Tây Nam Bộ này còn có rất nhiều tọa độ du hí thú vị dành cho hội mê xê dịch.\r\n\r\nĐăng ký tour Đồng Tháo cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Làng hoa Sa Đéc, Khu du lịch Xẻo Quýt, Khu du lịch Đồng Sen Tháp Mười,...', 'Others/images/dongthap.jpg', 'Others/images/dongthap_bg.jpg', 'Nam'),
(68, 'Kiên Giang', 'Kiên Giang được mọi người biết đến là một tỉnh ven biển, thuộc đồng bằng sông Cửu Long, có diện tích lớn nhất nhì ở miền Tây Nam Bộ và cũng là mảnh đất tận cùng phía Tây Nam Tổ quốc với đường bờ biển dài cùng rất nhiều hòn đảo lớn nhỏ khác nhau. \r\n\r\nNơi đây được ví như Việt Nam thu nhỏ bởi sự hội tụ của núi, sông, đồng bằng, rừng nguyên sinh, biển đảo… Và là vùng đất văn hoá, du lịch nổi tiếng. Kiên Giang còn là nơi hấp dẫn du khách bởi cảnh quan tươi đẹp, những món ăn đậm chất vùng miền cùng các lễ hội văn hoá đặc sắc hiếm có, là điểm đến thích hợp để du lịch, nghỉ dưỡng.\r\n\r\nĐăng ký tour Kiên Giang cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Bãi Dài, Bãi Sao, Grand World Phú Quốc, VinWonders Phú Quốc, Khu du lịch Hà Tiên,...', 'Others/images/phuquoc.jpg', 'Others/images/phuquoc_bg.jpg', 'Nam'),
(69, 'Cà Mau', 'Cà Mau được biết đến là vùng đất tận cùng của Tổ quốc và luôn là điểm du lịch Miền Tây nhất định phải đến một lần trong đời của mọi người dân Việt Nam. Tỉnh thành cuối cùng của Tổ quốc Việt với ba mặt chủ yếu giáp biển, tới đây du khách sẽ được thăm cột mốc tọa độ quốc gia, ngắm rừng, biển, chiêm ngưỡng ráng chiều trên vùng trời biển bao la. Cà Mau toát lên một vẻ đẹp nên thơ và trữ tình, bình yên và mộc mạc làm say đắm bao trái tim của du khách. \r\n\r\nĐăng ký tour Cà Mau cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Rừng U Minh Hạ, Khu Du lịch Sinh Thái Sông Trẹm, Hòn Đá Bạc, Hòn Khoai,...', 'Others/images/camau.jpg', 'Others/images/camau_bg.jpg', 'Nam'),
(72, 'Bà Rịa - Vũng Tàu', 'Du lich Vũng Tàu: Những cung đường biển đẹp như mơ, ngọn Hải đăng cổ nổi tiếng, tượng Chúa giang tay bình yên, những góc phố thơ mộng, cùng những món ăn hấp dẫn là những gì du khách không thể bỏ qua khi đến với Vũng Tàu. Vũng Tàu trở thành đô thị loại I năm 2013, là một thành phố đáng tới, đáng sống và hạnh phúc.\r\n\r\nĐăng ký tour Bà Rịa - Vũng Tàu cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Suối nước nóng Bình Châu, Bình Châu - Hồ Cốc, Vạn Phật Quang Đại Tòng Lâm Tự, Công viên rừng Minera Forest, CHÙA VẠN THÔNG, CHÙA VẠN THÔNG 1, THÀNH PHỐ VŨNG TÀU, BẢO TÀNG TỈNH BÀ RỊA - VŨNG TÀU,...', 'Others/images/bariavungtau.jpg', 'Others/images/bariavungtau_bg.jpg', 'Nam'),
(73, 'Quảng Bình', 'Quảng Bình giao thoa nhiều luồng văn hoá, lưu giữ được nhiều di tích khác nhau, và được thiên nhiên ưu đãi với đường bờ biển dài 116,04km, những phong cảnh kỳ thú như Vườn quốc gia Phong Nha - Kẻ Bàng đã được UNESCO công nhận là di sản thiên nhiên thế giới. Văn hoá Bàu Tró, trống đồng Phù Lưu là di chỉ quý của Quảng Bình.\r\n\r\nĐăng ký tour Quảng Bình cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Động Phong Nha, Động Thiên Đường, Khu du lịch Ozo,...', 'Others/images/quangbinh.jpg', 'Others/images/quangbinh_bg.jpg', 'Trung'),
(75, 'Huế', 'Huế thương sơn thủy hữu tình, nơi tọa lạc Đại Nội, Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Lăng Tự Đức, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh xưa của 13 vị vua triều Nguyễn. Chùa Thiên Mụ lưu giữ cổ vật lịch sử, nghệ thuật quý giá. Chiều buông, ta ngồi thuyền rồng xuôi dòng sông Hương thưởng thức ca hò Huế, thả hoa đăng cầu phúc lộc.\r\n\r\nĐăng ký tour Huế cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Đại Nội, Chùa Thiên Mụ, Nhà vườn An Hiên, Lăng Tự Đức, Lăng Khải Định, Đầm Lập An,...', 'Others/images/hue1.jpg', 'Others/images/hue_bg.jpg', 'Trung'),
(77, 'Bình Định', 'Bình Định một địa điểm tham quan đầy hấp dẫn đối với khách du lịch trong và ngoài nước. Du lịch Bình Định mang trong mình một vẻ đẹp đầy lãng mạn với vẻ đẹp hài hòa giữa rừng, biển và những công trình kiến trúc mang dấu ấn đặc trưng của khu vực miển Trung khiến bất kì du khách nào cũng phải ấn tượng, say mê ngay từ lần đầu gặp gỡ. \r\n\r\nĐăng ký tour Bình Định cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Bãi tắm Quy Nhơn, Ghềnh Ráng Tiên Sa, Eo Gió, Biển Kỳ Co,...', 'Others/images/binhdinh.jpg', 'Others/images/binhdin_bg.jpg', 'Trung'),
(79, 'Khánh Hòa', 'Khánh Hòa là một tỉnh duyên hải Nam Trung Bộ, giáp với tỉnh Phú Yên về hướng Bắc, tỉnh Đắk Lắk về hướng Tây Bắc, tỉnh Lâm Đồng về hướng Tây Nam, tỉnh Ninh Thuận về hướng Nam và Biển Đông về hướng Đông; có mũi Hòn Ðôi trên bán đảo Hòn Gốm huyện Vạn Ninh, là điểm cực Ðông trên đất liền cũng là nơi đón đón ánh nắng mặt trời đầu tiên trên đất nước ta.\r\n\r\nKhông chỉ là miền đất có khí hậu ôn hòa với hơn 300 ngày nắng một năm, Khánh Hòa còn được biết đến như một thiên đường biển đảo khi sở hữu những bãi biển hiền hòa ngày đêm sóng vỗ vào bờ cát trắng mịn cùng gần 200 hòn đảo lớn nhỏ. Hệ sinh thái biển nơi đây cũng rất đa dạng và phong phú.\r\n\r\nĐăng ký tour Khánh Hòa cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Đảo Hòn Tre, Đảo Robinson, Đảo Yến, Suối Tiên,...', 'Others/images/khanhhoa.jpg', 'Others/images/khanhhoa_bg.jpg', 'Trung'),
(86, 'Bình Thuận', 'Là một tỉnh ven biển thuộc vùng Duyên hải Nam trung bộ, Bình Thuận tập hợp cả điều kiện cần và đủ để trở thành “thiên đường” du lịch cho hội mê vitamin sea. Đặt chân đến đây, bạn sẽ được hòa mình vào biển xanh - cát trắng - nắng vàng đúng nghĩa và thưởng thức ẩm thực ngon không nơi nào bằng.\r\n\r\nĐăng ký tour Bình Thuận cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Bãi biển Cổ Thạch, Cánh đồng quạt gió, Bãi đá Ông Địa, Mũi Kê Gà,...', 'Others/images/binhthuan.jpg', 'Others/images/binhthuan_bg.jpg', 'Trung'),
(92, 'Quảng Nam', 'Quảng Nam còn được biết đến là vùng đất Địa Linh Nhân Kiệt, Ngũ Phụng Tề Phi, với di tích lịch sử lâu đời và nhiều lễ hội văn hóa đặc sắc. Những điểm đến thú vị tại Quảng Nam: Cù lao Chàm biển xanh sóng lặng, biển Cửa Đại nước trong vắt, Hội An hoài cổ, đền tháp Mỹ Sơn rực rỡ, và thiên nhiên núi Thành kỳ vĩ.\r\n\r\nĐăng ký tour Quảng Nam cùng Trawind, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Phố cổ Hội An, Thánh Địa Mỹ Sơn, Rừng Dừa Bảy Mẫu, Impression Show, Vinwonder Nam Hội An, Làng rau Trà Quế,...', 'Others/images/quangnam.jpg', 'Others/images/quangnam_bg.jpg', 'Trung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_sale`
--

CREATE TABLE `tour_sale` (
  `t_id` varchar(20) NOT NULL,
  `price_sale` varchar(20) NOT NULL,
  `percent_sale` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_sale`
--

INSERT INTO `tour_sale` (`t_id`, `price_sale`, `percent_sale`) VALUES
('T01', '4500000', 10),
('T02', '3500000', 12),
('T03', '5000000', 30),
('T05', '7000000', 30),
('T08', '4500000', 10),
('T11', '3200000', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_some_info`
--

CREATE TABLE `tour_some_info` (
  `id` varchar(20) NOT NULL,
  `id_chude` varchar(5) NOT NULL,
  `mien` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rate` decimal(10,1) NOT NULL,
  `time` varchar(30) NOT NULL,
  `locate` varchar(100) NOT NULL,
  `start_locate` int(5) NOT NULL,
  `end_locate` int(5) NOT NULL,
  `price` int(30) NOT NULL,
  `sale` int(1) NOT NULL DEFAULT 0,
  `sldanhgia` int(5) NOT NULL DEFAULT 0,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_some_info`
--

INSERT INTO `tour_some_info` (`id`, `id_chude`, `mien`, `image`, `rate`, `time`, `locate`, `start_locate`, `end_locate`, `price`, `sale`, `sldanhgia`, `trangthai`) VALUES
('T01', 'CD1', 'Trung', 'Others/images/hoian1.jpg', '10.0', '4 Ngày - 3 Đêm', 'Hà Nội - Đà Nẵng - Phố cổ Hội An', 29, 92, 5000000, 1, 4, 1),
('T02', 'CD2', 'Bắc', 'Others/images/coto.jpg', '9.1', '3 Ngày - 2 Đêm', 'Hà Nội - Cô Tô', 29, 14, 4000000, 1, 1, 1),
('T03', 'CD1', 'Trung', 'Others/images/nhatrang.jpg', '9.3', '4 Ngày - 3 Đêm', 'Hà Nội - Nha Trang', 29, 79, 7000000, 1, 1, 1),
('T04', 'CD1', 'Nam', 'Others/images/phuquoc.jpg', '9.3', '2 Ngày - 2 Đêm', 'Đà Nẵng - Phú Quốc', 43, 68, 5000000, 0, 3, 1),
('T05', 'CD2', 'Trung', 'Others//images/dalat1.jpg', '9.0', '4 Ngày - 3 Đêm', 'Hà Nội - Đà Lạt', 29, 49, 10000000, 1, 1, 1),
('T06', 'CD3', 'Trung', 'Others/images/dongthienduong.jpg', '9.9', '3 Ngày - 2 Đêm', 'TP. Hồ Chí Minh - Quảng Bình', 41, 73, 7000000, 0, 1, 1),
('T07', 'CD4', 'Trung', 'Others/images/hue.jpg', '9.5', '2 Ngày - 2 Đêm', 'TP. Hồ Chí Minh - Huế', 41, 75, 5000000, 0, 1, 1),
('T08', 'CD5', 'Bắc', 'Others/images/caobang.jpg', '9.0', '3 Ngày - 3 Đêm', 'Hà Nội - Cao Bằng', 29, 11, 5000000, 1, 1, 1),
('T09', 'CD2', 'Bắc', 'Others/images/caobang.jpg', '9.0', '3 Ngày - 3 Đêm', 'Hà Nội - Cao Bằng', 29, 11, 5000000, 0, 1, 1),
('T10', 'CD1', 'Bắc', 'Others/images/binhthuan.jpg', '0.0', '2 Ngày - 2 Đêm', 'Quảng Ninh - Bình Thuận', 14, 86, 3000000, 0, 0, 1),
('T11', 'CD1', 'Bắc', 'Others/images/Phanthiet-1.jpg', '0.0', '2 Ngày - 2 Đêm', 'Quảng Bình - Bình Thuận', 73, 86, 4000000, 1, 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `chu_de_tour`
--
ALTER TABLE `chu_de_tour`
  ADD PRIMARY KEY (`machude`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`madh`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `fk_id_tour_dh` (`t_id`);

--
-- Chỉ mục cho bảng `info_details`
--
ALTER TABLE `info_details`
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `like_tours`
--
ALTER TABLE `like_tours`
  ADD PRIMARY KEY (`username`,`tour_id`),
  ADD KEY `fk_id_tour_like_tours` (`tour_id`);

--
-- Chỉ mục cho bảng `thongtindonhang`
--
ALTER TABLE `thongtindonhang`
  ADD KEY `fk_madonhang` (`madonhang`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`matinh`);

--
-- Chỉ mục cho bảng `tour_sale`
--
ALTER TABLE `tour_sale`
  ADD UNIQUE KEY `u_tid` (`t_id`);

--
-- Chỉ mục cho bảng `tour_some_info`
--
ALTER TABLE `tour_some_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ma_tinh_diemdi` (`start_locate`),
  ADD KEY `fk_ma_tinh_diemden` (`end_locate`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fk_dh_danhgia` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madonhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_id_tour_dh` FOREIGN KEY (`t_id`) REFERENCES `tour_some_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `like_tours`
--
ALTER TABLE `like_tours`
  ADD CONSTRAINT `fk_id_tour_like_tours` FOREIGN KEY (`tour_id`) REFERENCES `tour_some_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_username_like_tours` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thongtindonhang`
--
ALTER TABLE `thongtindonhang`
  ADD CONSTRAINT `fk_madonhang` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tour_sale`
--
ALTER TABLE `tour_sale`
  ADD CONSTRAINT `fk_id_tour_sale` FOREIGN KEY (`t_id`) REFERENCES `tour_some_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tour_some_info`
--
ALTER TABLE `tour_some_info`
  ADD CONSTRAINT `fk_ma_tinh_diemden` FOREIGN KEY (`end_locate`) REFERENCES `tinh` (`matinh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ma_tinh_diemdi` FOREIGN KEY (`start_locate`) REFERENCES `tinh` (`matinh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
