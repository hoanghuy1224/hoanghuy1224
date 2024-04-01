-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2024 lúc 09:47 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ht_quanli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddh` int(20) NOT NULL,
  `ma_dh` int(50) NOT NULL,
  `ngay` int(40) NOT NULL,
  `sp_dathang` varchar(50) NOT NULL,
  `tong` varchar(40) NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `idkh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddh`, `ma_dh`, `ngay`, `sp_dathang`, `tong`, `trangthai`, `idkh`) VALUES
(62, 121, 29, 'cà phê phin', '50.000', 'đã mua ', 32),
(63, 212, 29, 'cà phê sữa đá ', '45.000', 'đã mua ', 35),
(64, 132, 30, 'cà phê phin', '50.000', 'đã thanh toán', 35),
(70, 123, 30, 'cà phê sữa đá ', '45.000', 'đã mua ', 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `thongtin` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `name`, `address`, `phone`, `email`, `thongtin`, `history`) VALUES
(32, 'triệu thị hương', 'bắc giang', 123435678, 'huong@gmail.com', 'đã mua ngày mùng 29 tháng 3 năm 2024', 'chưa mua hàng'),
(35, 'hoàng quang huy', 'tuyên quang ', 339250091, 'hqhuy.12c3kx2004@gmail.com', 'đã mua ngày mùng 2 tháng 7 năm 2024', 'không có lịch sử mua hàng'),
(36, 'hoàng văn long ', 'tuyên quang ', 966765567, 'long@gmail.com', 'đã mua ngày 29 tháng 3 năm  2024', 'đã mua hàng 3 lần ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_km` int(20) NOT NULL,
  `ma_km` int(50) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `thoigian` datetime NOT NULL,
  `dk_km` varchar(50) NOT NULL,
  `lichsu` varchar(40) NOT NULL,
  `idkh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_km`, `ma_km`, `mota`, `thoigian`, `dk_km`, `lichsu`, `idkh`) VALUES
(2, 123, 'khách hàng mua nhiều nên khuyến mãi ', '2024-03-29 17:03:37', 'khách hàng mua nhiều nên khuyến mãi ', 'sadfgsgdsfg', 36),
(3, 122, 'khách hàng mua nhiều nên khuyến mãi ', '2024-03-29 17:03:37', 'khách hàng mua nhiều nên khuyến mãi ', 'sadfgsgdsfg', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `lichsu` varchar(255) NOT NULL,
  `iddh` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `name`, `mota`, `gia`, `lichsu`, `iddh`) VALUES
(1, 'cà phê sữa đá ', 'sản phẩm tốt', '45.000', 'chưa mua hàng', 63),
(2, 'cà phê phin', 'sản phẩm bán chạy ', '30.000', 'chưa mua hàng', 62),
(5, 'cà phê sữa đá', 'sản phẩm tốt', '45.000', 'chưa mua hàng', 64),
(6, 'cà phê sữa đá ', 'sản phẩm tốt', '30.000', 'không có lịch sử mua hàng ', 70);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'hoangquanghuy', 'amin@gmail.com', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddh`),
  ADD KEY `FK_khachhang` (`idkh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_km`),
  ADD KEY `FK_khuyenmai` (`idkh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `fk_donhang` (`iddh`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_km` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_khachhang` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`idkh`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `FK_khuyenmai` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`idkh`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_donhang` FOREIGN KEY (`iddh`) REFERENCES `donhang` (`iddh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
