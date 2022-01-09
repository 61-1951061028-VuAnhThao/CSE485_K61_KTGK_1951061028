-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 07:02 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlithuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongia`
--

CREATE TABLE `dongia` (
  `madg` int(10) NOT NULL,
  `hovaten` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsinh` int(10) DEFAULT NULL,
  `nghenghiep` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dongia`
--

INSERT INTO `dongia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Job', 'Nữ', 2005, 'Sales Representative', '2021-07-20', '2022-05-12', '59692 Kenwood Trail'),
(2, 'Bytecard', 'Nam', 1998, 'Statistician II', '2021-05-09', '2022-02-16', '00784 Sage Lane'),
(3, 'Solarbreeze', 'Nữ', 1990, 'Food Chemist', '2021-09-13', '2022-09-28', '67548 Boyd Crossing'),
(4, 'Opela', 'Nam', 1995, 'Help Desk Operator', '2021-02-17', '2022-05-24', '44 Artisan Center'),
(5, 'Domainer', 'Nũ', 1998, 'Civil Engineer', '2021-05-05', '2022-10-31', '33107 Derek Pass'),
(6, 'Sonsing', 'Nam', 2008, 'Environmental Tech', '2021-01-15', '2022-05-03', '185 Forest Dale Lane'),
(7, 'Fintone', 'Nam', 1998, 'Community Outreach Specialist', '2021-08-13', '2022-10-18', '9776 Fulton Terrace'),
(8, 'Zontrax', 'Nữ', 1997, 'Operator', '2021-04-19', '2022-04-25', '80 Loftsgordon Road'),
(9, 'Rank', 'Nam', 1990, 'Quality Engineer', '2021-03-10', '2022-12-29', '99 Brentwood Hill'),
(10, 'Andalax', 'Nữ', 2000, 'VP Accounting', '2021-05-25', '2022-07-25', '0 Cambridge Park');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dongia`
--
ALTER TABLE `dongia`
  ADD PRIMARY KEY (`madg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
