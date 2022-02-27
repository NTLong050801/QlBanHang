-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 27, 2022 lúc 08:23 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctygiaohang`
--

CREATE TABLE `ctygiaohang` (
  `IDCty` int(10) NOT NULL,
  `TenCongTy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IDDonHang` int(10) NOT NULL,
  `IDKhachHang` int(10) NOT NULL,
  `IDNhanVien` int(10) NOT NULL,
  `NgayDatHang` date NOT NULL,
  `NgayGiaoHang` date NOT NULL,
  `IDCtyGiaoHang` int(10) NOT NULL,
  `DiaChiGiaoHang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKhachHang` int(10) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `IDLoaiHang` int(10) NOT NULL,
  `TenLoaiHang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`IDLoaiHang`, `TenLoaiHang`, `MoTa`) VALUES
(7, 'quần', 'quần để mặc '),
(8, 'Giày', 'đi'),
(9, 'áo', 'mát ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `IDNhaCungCap` int(10) NOT NULL,
  `TenCongTy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`IDNhaCungCap`, `TenCongTy`, `DiaChi`, `SoDienThoai`, `Website`) VALUES
(1, 'Cồn ty MV', 'Hanoi', '0563438438', 'tlu.edu.vn'),
(3, 'Công ty HL', 'Thuongtin', '12123123', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNhanVien` int(10) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayBatDauLam` date NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSanPham` int(10) NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDNhaCungCap` int(10) NOT NULL,
  `IDLoaiHang` int(10) NOT NULL,
  `DonGiaNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGiaBan` int(11) NOT NULL,
  `SoLuongCon` int(20) NOT NULL,
  `MoTaSP` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IDSanPham`, `TenSP`, `IDNhaCungCap`, `IDLoaiHang`, `DonGiaNhap`, `DonGiaBan`, `SoLuongCon`, `MoTaSP`, `img`) VALUES
(17, 'air force 1 ', 3, 8, '50000', 6000000, 6, 'giày dép ', 'a978d46c458c1b6f7ed312cbbc6d0854.jpg.webp'),
(20, 'giày lười nam', 3, 8, '90000', 950000, 9, 'giày không tất ', '833f5a79fd9564a204728a1a172b419c.jpg.webp'),
(21, 'áo cộc đen trắng', 1, 9, '60000', 7000000, 5, 'áo côc', '779a3298f1f2db40f16f3b444cfce337.jpg.webp'),
(23, 'quần sọc adidas', 3, 7, '510000', 6100000, 1111, 'quần thể thao', 'quannam.jpg'),
(25, 'áo cộc trơn', 1, 9, '5000000', 2147483647, 55555, 'áo trơn dễ mặc', '568aa8f29b02ac59581db0a26deac8ab.jpg.webp'),
(26, 'quần ống loe ', 1, 7, '600000', 700000, 8888, 'nữ mặc', 'a8099ad26eca93c895825cc0c9587259.jpg.webp'),
(27, 'jordan', 3, 8, '600000', 700000, 6, 'màu xanh', '5294714c2c0944c8c654c55dcade3792.jpg.webp'),
(28, 'giày tây nam', 3, 8, '5000000', 60000000, 6, 'siêu hấp dẫn', '76e7b39a500ce1315e60347e92ffff66.png.webp'),
(29, 'Giày SNEAKER Tăng Chiều Cao Dòng BLCG Cao Cấp', 1, 8, '60000', 8000000, 6, 'đẹp', 'd1fa7e0dcd75a31027560aea49b710c8.jpg.webp'),
(30, 'giày cổ điển ', 3, 8, '5000000', 1000000000, 9, '60000', 'e1a417f39e6b7c4378d7b3280c9d2efa.jpg.webp'),
(31, 'giày đen tuyền', 3, 8, '500000', 600000, 600, 'đpẹ', 'f4e56a444279786daf15f782edf0db52.jpg.webp'),
(32, 'giày đen phối trắng ', 3, 8, '600000', 6500000, 9000, 'đẹp', '097c1c609b553639b66bced91482bb39.jpg.webp'),
(33, 'áo dài tay body', 3, 9, '600000', 7000000, 60000, 'áo dài tayy body', '1154cfb75760cd6800358521e46550cf.jpg.webp'),
(34, 'áo cộc có cổ', 3, 9, '900', 6000, 8000, 'áo cộc có sẵn', '5faf9c1b1764fa87a0197e3407109c9b.png.webp'),
(35, 'áo alanwalker', 3, 9, '500000', 600000, 6666, 'áo chất đẹp', 'c2b8b5b18823753b2747137be02c951b.jpg.webp'),
(36, 'áo hình đại bàng ', 3, 9, '600000', 700000, 6, 'hàn đpẹ ', 'c52322b61a3b137a6a753f26cd21ecec.jpg.webp'),
(37, 'áo dài sọc ngang', 3, 9, '3200000', 85000000, 600000, 'áo ấm ', 'f1f553782f3c80d9e2ee27828a79b4ce.jpg.webp'),
(38, 'hoodie nâu sữa', 3, 9, '600000', 7000000, 6000, 'ấm áp hơn hẳn ', '933fbfa0d4a9f8713bb630f42b411128.jpg.webp'),
(39, 'quần 2 sọc ', 3, 7, '50000', 70000, 999, 'adidas', 'd83a304c71bc43b06cbb37e49cef45cd.jpg.webp'),
(40, 'quần xanh lá chuối', 1, 7, '500000', 600000, 99000, 'quần dáng nam ', '37b8de19702975a23c72afcff7fe724f.jpg.webp'),
(42, 'quần tây nam', 1, 7, '50000', 600000, 9000, 'đẹp', '2554c1a1e7cc5c94f3b2088080221a95.jpg.webp'),
(43, 'quần bó giữ nhiệt', 1, 7, '60000', 700000, 5000, 'ấm', '037e8b3620270a93aee45f94ce7a737c.jpg.webp'),
(44, 'quần thể thao ống  giộng', 1, 7, '5000000', 70000000, 6, 'đẹp', '64e987e483158ec737580c99061171c6.jpg.webp'),
(45, 'quần lông', 1, 7, '600000', 700000, 666, 'siêu ấm ', '46c6ee37611336e5f9da9524278c4276.jpg.webp'),
(47, 'dây giày', 3, 8, '60000000', 70000000, 666666, 'dây giày màu sắc ', '4112962f604da98e09fc1aa7d57900bb.jpg.webp'),
(48, 'hoodie nữ rộng', 1, 9, '500000', 600000, 666, 'áo đẹp', 'fa2dea28411a98a2e937bfc19a68690c.jpg.webp'),
(49, 'jogger nam túi hộp', 3, 7, '50000', 60000, 666, '9', '97faa63376d30b55d20c39300b65567c.jpg.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_donhang`
--

CREATE TABLE `sp_donhang` (
  `IDDonHang` int(10) NOT NULL,
  `IDSanPham` int(10) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGiaBan` int(11) NOT NULL,
  `TyLeGiamGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctygiaohang`
--
ALTER TABLE `ctygiaohang`
  ADD PRIMARY KEY (`IDCty`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDonHang`),
  ADD KEY `IDNhanVien` (`IDNhanVien`),
  ADD KEY `IDCtyGiaoHang` (`IDCtyGiaoHang`),
  ADD KEY `IDKhachHang` (`IDKhachHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKhachHang`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`IDLoaiHang`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`IDNhaCungCap`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNhanVien`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSanPham`),
  ADD KEY `IDNhaCungCap` (`IDNhaCungCap`),
  ADD KEY `IDLoaiHang` (`IDLoaiHang`);

--
-- Chỉ mục cho bảng `sp_donhang`
--
ALTER TABLE `sp_donhang`
  ADD PRIMARY KEY (`IDDonHang`,`IDSanPham`),
  ADD KEY `IDSanPham` (`IDSanPham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ctygiaohang`
--
ALTER TABLE `ctygiaohang`
  MODIFY `IDCty` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDonHang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKhachHang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `IDLoaiHang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `IDNhaCungCap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `IDNhanVien` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`IDNhanVien`) REFERENCES `nhanvien` (`IDNhanVien`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`IDCtyGiaoHang`) REFERENCES `ctygiaohang` (`IDCty`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`IDKhachHang`) REFERENCES `khachhang` (`IDKhachHang`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IDNhaCungCap`) REFERENCES `nhacungcap` (`IDNhaCungCap`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`IDLoaiHang`) REFERENCES `loaihang` (`IDLoaiHang`);

--
-- Các ràng buộc cho bảng `sp_donhang`
--
ALTER TABLE `sp_donhang`
  ADD CONSTRAINT `sp_donhang_ibfk_1` FOREIGN KEY (`IDDonHang`) REFERENCES `donhang` (`IDDonHang`),
  ADD CONSTRAINT `sp_donhang_ibfk_2` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
