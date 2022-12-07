-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2022 pada 00.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `c1` varchar(255) NOT NULL,
  `b1` int(10) NOT NULL,
  `c2` varchar(255) NOT NULL,
  `b2` int(10) NOT NULL,
  `c3` varchar(255) NOT NULL,
  `b3` int(10) NOT NULL,
  `c4` varchar(255) NOT NULL,
  `b4` int(10) NOT NULL,
  `c5` varchar(255) NOT NULL,
  `b5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id`, `name`, `type`, `c1`, `b1`, `c2`, `b2`, `c3`, `b3`, `c4`, `b4`, `c5`, `b5`) VALUES
(25, 'HP', 'Probook 4431S', 'Intel Core I7', 4, '4 GB', 3, 'SSD 120 GB', 3, 'INTEL HD', 2, '4500000', 1),
(26, 'DELL ', 'Latitude E6530', 'Intel Core I5-3340M', 3, '4 GB', 3, '500 GB', 3, 'INTEL HD', 2, '3600000', 1),
(27, 'ACER', 'Travelmate 8481T', 'Intel Core I5-2467M', 3, '4 GB', 2, 'SSD 120 GB', 3, 'INTEL HD', 2, '3500000', 1),
(28, ' TOSHIBA', 'l745', 'Intel Core I5-3310M', 3, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '3500000', 1),
(29, '  ASUS', 'Vivobook Ultra A412', 'Core i3', 3, '4 GB', 3, 'SSD 512 GB', 4, 'NVIDIA GeForce MX250', 4, '7600000', 4),
(30, 'ACER', 'Aspire 3', 'Intel Celeron', 2, '4 GB', 2, 'SSD 256GB', 2, 'INTEL HD', 2, '5600000', 3),
(31, 'LENOVO ', 'IDEALPAD', 'Intel Core I3', 2, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '5000000', 3),
(32, 'LENOVO', 'V15', 'CORE I3', 2, '4 GB', 2, '1 TB', 4, 'INTEL UHD', 2, '6915400', 2),
(33, 'ASUS', 'ZENBOOK 13', 'CORE I7', 4, '16 GB', 4, 'SSD 512', 4, 'INTEL FHD', 3, '14999000', 4),
(34, 'ASUS', 'A409FA', 'CORE I3', 2, '4 GB', 2, 'SSD 250 GB', 3, 'INTEL GRAPHIGH', 2, '7200000', 3),
(35, 'ASUS', 'VIVOBOOK F415EA', 'CORE I5 1135G7', 3, '8 GB', 3, 'SSD 512 GB', 4, 'INTEL HD', 2, '9000000', 4),
(36, 'ASUS', 'M513UA', 'AMD RYZEN 7 5700U', 4, '8 GB', 4, 'SSD 512 GB', 4, 'AMD RADEON', 4, '11750000', 4),
(37, ' ACER', 'ASPIRE 5 A515', 'Intel Core i5-8265U', 3, '4GB', 2, '1 TB HDD', 4, 'NVIDIA GeForce MX250', 4, '10100000', 4),
(38, ' ACER', 'Swift 1 Fresh (SF114-34)', 'INTEL PENTIUM Silver N6000', 1, '4 GB', 3, 'SSD 512 GB', 4, 'INTEL GRAPHIGH', 2, '6700000', 3),
(39, 'LENOVO', ' IdeaPad Slim3i', 'Intel Core i3-1115G4', 2, '4 GB', 2, 'SSD 512 GB', 4, 'Intel UHD Graphics', 3, '8500000', 3),
(40, ' LENOVO', ' IdeaPad Slim 5 15ARE05', 'AMD Ryzen 5 4500U', 3, '8 GB', 3, 'SSD 512 GB', 4, 'Integrated AMD graphics', 3, '1100000', 4),
(41, 'LENOVO', 'ThinkBook 14s', 'Intel Core i5-1135G7', 3, '8 GB', 4, 'SSD 250 GB', 3, 'INTEL GRAPHIGH', 2, '13000000', 4),
(42, 'LENOVO', 'ThinkBook 13s', 'Intel Core i7-1165G7', 4, '16 GB', 4, '512 GB SSD', 4, 'Intel Iris Xe Graphics', 3, '10700000', 4),
(43, 'HP', 'Victus 16 d0109tx', 'Intel Core I7-11800H', 4, '16 GB', 4, 'SSD 512 GB', 4, 'Nvidia GeForce RTX 3060', 5, '21000000', 4),
(44, 'HP', 'ENVY x360 13-BD0062TU', 'Intel Core i5-1135G7', 3, '8 GB', 3, 'SSD 512 GB', 4, 'Intel Iris Xe Graphics', 3, '14800000', 4),
(45, ' HP', 'ProBook 430 G8', 'Intel Core i5-1135G7', 3, '8 GB', 4, 'SSD 512 GB', 4, 'Intel Iris Xe Graphics', 3, '12000000', 3),
(46, 'HP', '14s-DQ2518TU', 'Intel Celeron 6305', 1, '4 GB', 2, 'SSD 512 GB', 4, 'Intel UHD Graphics', 3, '6000000', 3),
(47, 'ASUS', 'TUF Gaming FX505', 'AMD Ryzen 5-3550H', 3, '8 GB', 3, '1 TB', 4, 'AMD Radeon RX560X', 4, '11300000', 4),
(48, 'ACER', 'Chromebook 514', 'Intel Celeron', 2, '4 GB', 2, '320 GB', 2, 'INTEL HD', 2, '4800000', 2),
(49, 'ASUS', 'VivoBook 14 X420UA', 'CORE I5', 3, '4 GB', 2, '1 TB', 4, 'NVIDIA GeForce 930M', 4, '9000000', 4),
(50, 'Lenovo', ' V14-IIL i3 1005G1', 'Intel Core i3-1005G1', 2, '4 GB', 2, '1 TB', 4, 'INTEL GRAPHIGH', 2, '7200000', 3),
(51, 'ASUS', 'Vivobook 14 K413FA EK301T', 'Intel Core i3-10110U', 2, '8 GB', 3, 'SSD 512GB', 4, 'Intel UHD Graphics', 2, '9099000', 3),
(52, 'ASUS', 'Vivobook Ultra A412FL', 'Intel Core i3-8145U', 2, '4 GB', 2, 'SSD 512 GB', 4, 'Intel UHD Graphics', 2, '7750000', 3),
(53, 'HP', '14-DQ1037WM', 'Intel Core i3-1005G1', 2, '4 GB', 2, 'SSD 128 GB', 3, 'Intel UHD Graphics', 2, '7100000', 3),
(54, 'DELL', 'Inspiron 14-3493', 'Intel Core i3-1005G1 ', 2, '4 GB', 2, 'SSD 256GB', 3, 'Intel HD graphics', 2, '6700000', 3),
(55, 'LENOVO', 'IdeaPad 130-14IKB', 'Intel Core i3-7020U', 2, '4 GB', 2, '1 TB', 4, 'Intel HD Graphics 520', 2, '5150000', 2),
(56, 'ASUS', 'VivoBook A409UA', 'Intel Core i3-7020U', 2, '4 GB', 2, '1 TB', 4, 'Intel HD Graphics', 2, '6700000', 2),
(57, 'ACER', ' Aspire A514', 'Intel Core i3-7020U', 2, '4 GB', 2, '10 TB', 4, 'Intel HD Graphics 620', 2, '5500000', 2),
(58, 'HP', 'Pavilion 14S-cf0063TU', 'Intel Core i3-7020U', 2, '4 GB', 2, '1 TB', 4, 'Intel HD Graphics', 2, '5700000', 2),
(59, 'ASUS', 'VivoBook X441UA', 'Intel Core i3-7020U', 2, '4 GB', 2, '1 TB', 4, 'INTEL GRAPHIGH', 2, '6000000', 2),
(60, 'HP', 'Pavilion Gaming', 'INTEL CORE i5 10300', 3, '8 GB', 3, 'SSD 256 GB', 4, 'NVIDIA GEFORCE GTX1650', 4, '10700000', 3),
(61, 'ACER', 'Swift 3 SF314-43', 'AMD Ryzen 5 5500U', 4, '16 GB', 4, 'SSD 512 GB', 4, ' AMD Radeon Graphics', 4, '10500000', 3),
(62, 'DELL ', 'Vostro 3401', 'Intel Core i3-1005G1', 3, '4 GB', 2, '1 TB', 4, 'INTEL HD', 2, '6300000', 2),
(63, 'DELL ', 'Inspiron 3162', 'Intel Celeron N3050', 2, '2 GB', 1, '500 GB', 2, 'INTEL HD', 2, '3000000', 1),
(64, 'DELL ', 'Inspiron 14-3473', 'Intel Celeron N4000', 2, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '3900000', 2),
(65, 'ACER', 'Swift 1 Fresh SF114-34-P2VU', 'Intel Pentium Silver N6000', 2, '4 GB', 2, 'SSD 512 GB', 4, 'INTEL HD', 2, '6250000', 3),
(66, 'ACER', 'Swift 5 Ultrathin', 'Intel Core i7-1065G7', 4, '16 GB', 4, 'SSD 512 GB', 4, 'Nvidia GeForce MX350', 4, '13600000', 4),
(67, 'ACER', 'Chromebook 317', 'Intel Celeron N4500', 2, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '5400000', 2),
(68, 'ASUS', 'ExpertBook B1400CEAE', 'Intel Core i3-1115G4', 3, '8 GB', 3, 'SSD 512 GB', 4, 'INTEL HD', 2, '8200000', 3),
(69, 'ASUS', 'Vivobook Ultra A412FL', 'Intel Core i3-8145U', 2, '4 GB', 2, 'SSD 512 GB', 4, 'INTEL HD', 2, '7700000', 2),
(70, 'DELL ', 'Inspiron 14-3473', 'Intel Celeron N4000', 1, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '4000000', 1),
(71, 'LENOVO', 'IdeaPad Slim', 'Intel Core i3-1115G4', 2, '4 GB', 2, 'SSD 512 GB', 4, 'INTEL UHD', 2, '8500000', 3),
(72, 'ASUS', 'M513UA', 'AMD RYZEN 7 5700U', 4, '8 GB', 3, 'SSD 512 GB', 4, 'AMD RADEON', 4, '11700000', 4),
(73, 'ACER', 'Chromebook 317', 'Intel Celeron N4500', 1, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '5350000', 2),
(74, 'DELL ', 'Inspiron 3162', 'Intel Celeron N3050', 1, '2 GB', 1, '500 GB', 3, 'INTEL HD', 2, '3100000', 1),
(75, 'HP', '14s-DQ2518TU', 'Intel Celeron 6305', 1, '4 GB', 2, 'SSD 512 GB', 4, 'INTEL UHD', 2, '6100000', 3),
(76, 'LENOVO', 'IdeaPad 130-14IKB', 'Intel Core i3-7020U', 2, '4 GB', 2, '1 TB', 4, 'Intel HD Graphics 520', 2, '5100000', 2),
(77, 'ACER', 'Aspire 3', 'Intel Celeron', 1, '4 GB', 2, 'SSD 256 GB', 3, 'INTEL HD', 2, '3450000', 1),
(78, ' ASUS', 'Vivobook Ultra A412', 'Intel Core i3-1115G4', 3, '4 GB', 3, 'SSD 256 GB', 3, 'INTEL HD', 2, '5650000', 2),
(79, 'ASUS', 'VivoBook X441UA', 'Intel Core i3-7020U', 2, '4 GB ', 2, '1 TB', 4, 'INTEL HD', 2, '6100000', 2),
(80, 'HP', 'ProBook 430 G8', 'Intel Core i5-1135G7', 3, '8 GB', 3, 'SSD 512 GB', 4, 'Intel Iris Xe Graphics', 3, '12000000', 4),
(81, 'HP', '14s-DQ2518TU', ' Intel Celeron 6305 ', 1, '4 GB', 2, 'SSD 512 GB', 4, 'INTEL HD', 2, '5500000', 2),
(82, 'HP', '14s-CF2508TU', 'Intel Pentium Gold 6405U', 2, '8 GB', 3, 'SSD 512 GB', 4, 'INTEL UHD', 2, '6800000', 2),
(83, 'ASUS', 'VivoBook Ultra 15 OLED K513EA', 'Intel Core i5-1135G7', 3, '4 GB', 2, 'SSD 256 GB', 3, 'INTEL UHD', 2, '1300000', 4),
(84, 'HP', '245 G8', 'AMD Athlon Silver 3050U', 2, '4 GB', 2, 'SSD 512 GB', 4, 'AMD Radeon RX Vega 2', 2, '6490000', 2),
(85, 'HP', 'Victus 16 d0109tx', 'Intel Core I7-11800H', 4, '16 GB', 4, 'SSD 512 GB', 5, 'Nvidia GeForce RTX 3060', 5, '21000000', 5),
(86, 'HP', 'ProBook x360 435 G7', 'AMD Ryzen 5 4500U ', 3, '8 GB', 3, 'SSD 256 GB', 3, 'AMD Radeon Graphics', 4, '12100000', 3),
(87, 'ASUS', 'VivoBook 14 X420UA', 'Intel Core i5', 3, '4 GB', 2, '1 TB', 4, 'NVIDIA GeForce 930M', 4, '9000000', 4),
(88, 'HP', 'G40-45', 'AMD Athlon', 1, '4 GB', 2, '500 GB', 3, 'AMD Radeon ', 4, '4450000', 2),
(89, 'ASUS', 'X450C', 'Intel Pentium', 1, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '4200000', 3),
(90, 'ACER', 'Aspire 5 A514-52G', 'Intel Core i5', 3, '8 GB', 3, '1 TB', 4, 'NVIDIA GeForce MX250', 4, '9800000', 3),
(91, 'LENOVO', 'IdeaPad Flex 3', 'Intel Celeron', 2, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '6600000', 2),
(92, 'ACER', 'Aspire 3 A315-41', 'AMD Ryzen 5', 3, '8 GB', 3, 'SSD 256 GB', 3, ' AMD Radeon Graphics', 4, '9980000', 3),
(93, 'ASUS', ' VivoBook A409', 'Intel Core i5', 3, '4 GB', 2, '1 TB', 4, 'NVIDIA MX330', 4, '7980000', 3),
(94, 'HP', '14s-DQ2518TU', 'Intel Celeron ', 2, '4 GB', 2, 'SSD 512 GB', 4, 'INTEL HD', 2, '5900000', 2),
(95, 'LENOVO', ' IdeaPad C340', 'Intel Core I7', 4, '8 GB', 3, '2 TB', 5, 'NVIDIA GeForce MX230', 4, '17500000', 4),
(96, 'DELL ', 'Inspiron 14', 'Intel Celeron', 2, '4 GB', 2, '500 GB', 3, 'INTEL HD', 2, '4100000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `bobot_kriteria` int(100) NOT NULL,
  `atribut_kriteria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `bobot_kriteria`, `atribut_kriteria`) VALUES
(1, 'C1', 'Prosessor', 4, 1),
(2, 'C2', 'RAM', 4, 1),
(3, 'C3', 'Harddisk', 4, 1),
(4, 'C4', 'VGA', 3, 1),
(5, 'C5', 'Harga', 4, -1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `type_alternatif` varchar(100) NOT NULL,
  `nilai_v` int(124) NOT NULL,
  `c5` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_alternatif`, `type_alternatif`, `nilai_v`, `c5`) VALUES
(6, 'HP', 'Probook 4431S', 0, 4500000),
(7, 'DELL ', 'Inspiron 14', 0, 4100000),
(8, 'DELL ', 'Inspiron 14', 0, 4100000),
(9, 'HP', 'Probook 4431S', 0, 4500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
