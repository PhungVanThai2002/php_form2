-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2023 lúc 09:29 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `form2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `xacnhanmk` varchar(255) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `hovatendem` varchar(100) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `tentruong` varchar(225) NOT NULL,
  `chuyennganh` varchar(20) NOT NULL,
  `namtotnghiep` varchar(20) NOT NULL,
  `diemtb` varchar(20) NOT NULL,
  `nganhhoc` varchar(50) NOT NULL,
  `quocgia` varchar(50) NOT NULL,
  `tinh_tp` varchar(20) NOT NULL,
  `vitri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `form2`
--

INSERT INTO `form2` (`id`, `email`, `matkhau`, `xacnhanmk`, `ten`, `hovatendem`, `gioitinh`, `tentruong`, `chuyennganh`, `namtotnghiep`, `diemtb`, `nganhhoc`, `quocgia`, `tinh_tp`, `vitri`) VALUES
(1, '', '', '', '', '', '', 'CongNghe', 'CNPM', '1/2005', '<5', 'CNPM', 'VietNam', 'HaNoi', ''),
(2, 'godlolamumu@gmail.com', '123', '123', 'Thái', 'Phùng Văn', 'nam', 'BachKhoa', 'CNPM', '12/2016', '8.0-8.9', 'CNPM', 'VietNam', 'HaNoi', 'FullStack');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
