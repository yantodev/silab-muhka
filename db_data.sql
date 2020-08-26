-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2020 pada 10.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_labkom`
--

CREATE TABLE `alat_labkom` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(128) NOT NULL,
  `jenis_alat` varchar(128) NOT NULL,
  `jumlah_alat` varchar(128) NOT NULL,
  `alat_rusak` varchar(128) NOT NULL,
  `satuan_alat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat_labkom`
--

INSERT INTO `alat_labkom` (`id`, `nama_alat`, `jenis_alat`, `jumlah_alat`, `alat_rusak`, `satuan_alat`) VALUES
(1, 'Monitor LG', 'Monitor', '72', '8', 'Pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_labkom`
--

CREATE TABLE `bahan_labkom` (
  `id` int(11) NOT NULL,
  `nama_bahan` varchar(128) NOT NULL,
  `jenis_bahan` varchar(128) NOT NULL,
  `jumlah_bahan` varchar(128) NOT NULL,
  `bahan_rusak` varchar(128) NOT NULL,
  `satuan_bahan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_labkom`
--

INSERT INTO `bahan_labkom` (`id`, `nama_bahan`, `jenis_bahan`, `jumlah_bahan`, `bahan_rusak`, `satuan_bahan`) VALUES
(1, 'Kabel Belden', 'RJ45', '200', '10', 'Meter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_komputer`
--

CREATE TABLE `data_komputer` (
  `no_id` int(5) NOT NULL,
  `in_date` date NOT NULL,
  `room` varchar(50) NOT NULL,
  `no_komputer` varchar(50) NOT NULL,
  `sys_name` varchar(50) NOT NULL,
  `sys_manufacture` varchar(50) NOT NULL,
  `sys_model` varchar(50) NOT NULL,
  `sys_type` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `jenis` enum('Personal Computer','Laptop') NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_komputer`
--

INSERT INTO `data_komputer` (`no_id`, `in_date`, `room`, `no_komputer`, `sys_name`, `sys_manufacture`, `sys_model`, `sys_type`, `processor`, `cpu`, `jenis`, `status`) VALUES
(1, '2020-03-14', 'LAB BARAT', 'SERVER', 'Server_Barat', 'Gigabyte Technologi Co., Ltd.', 'B85M-HD3-A', 'X64-based PC', 'Intel® Core™ i5-4460', '3.20 GHz', 'Personal Computer', 'AKTIF'),
(2, '2020-03-14', 'LAB BARAT', '1', 'BARAT_01', 'ECS', 'H61H2', 'X64-based PC', 'Intel® Core™ i3-2020', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(3, '2020-03-14', 'LAB BARAT', '2', 'BARAT_02', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Pentium® Dual-Core E 5400', '2.70 GHz', 'Personal Computer', 'AKTIF'),
(4, '2020-03-14', 'LAB BARAT', '3', 'BARAT_03', 'ECS', 'H61H2', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(5, '2020-03-14', 'LAB BARAT', '4', 'BARAT_04', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(6, '2020-03-14', 'LAB BARAT', '5', 'BARAT_05', 'Gigabyte Technologi Co., Ltd.', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Pentium® G2030', '3.00 GHz', 'Personal Computer', 'AKTIF'),
(7, '2020-03-14', 'LAB BARAT', '6', 'BARAT_06', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(8, '2020-03-14', 'LAB BARAT', '7', 'BARAT_07', 'Hewlett-Packard', 'HP Compaq dc7700 Small Form Factor', 'X64-based PC', 'Intel® Pentium® Dual E2160', '1.80 GHz', 'Personal Computer', 'AKTIF'),
(9, '2020-03-14', 'LAB BARAT', '8', 'BARAT_08', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(10, '2020-03-14', 'LAB BARAT', '9', 'BARAT_09', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(11, '2020-03-14', 'LAB BARAT', '10', 'BARAT_10', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(12, '2020-03-14', 'LAB BARAT', '11', 'BARAT_11', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(13, '2020-03-14', 'LAB BARAT', '12', 'BARAT_12', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(14, '2020-03-14', 'LAB BARAT', '13', 'BARAT_13', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(15, '2020-03-14', 'LAB BARAT', '14', 'BARAT_14', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(16, '2020-03-14', 'LAB BARAT', '15', 'BARAT_15', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(17, '2020-03-14', 'LAB BARAT', '16', 'BARAT_16', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(18, '2020-03-14', 'LAB BARAT', '17', 'BARAT_17', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(19, '2020-03-14', 'LAB BARAT', '18', 'BARAT_18', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(20, '2020-03-14', 'LAB BARAT', '19', 'BARAT_19', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(21, '2020-03-14', 'LAB BARAT', '20', 'BARAT_20', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(22, '2020-03-14', 'LAB BARAT', '21', 'BARAT_21', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(23, '2020-03-14', 'LAB BARAT', '22', 'BARAT_22', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(24, '2020-03-14', 'LAB BARAT', '23', 'BARAT-23', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(25, '2020-03-14', 'LAB BARAT', '24', 'BARAT-24', 'a', 's', 'X64-based PC', 'i', 'c', 'Personal Computer', 'NON AKTIF'),
(26, '2020-03-14', 'LAB BARAT', '25', 'BARAT-25', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(27, '2020-03-14', 'LAB BARAT', '26', 'BARAT-26', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(28, '2020-03-14', 'LAB BARAT', '27', 'BARAT_27', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(29, '2020-03-14', 'LAB BARAT', '28', 'BARAT_28', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(30, '2020-03-14', 'LAB BARAT', '29', 'BARAT_29', 'Hewlett-Packard', 'HP Compaq dc7700 Small Form Factor', 'X64-based PC', 'Intel® Pentium® Duo E2160', '1.80 GHz', 'Personal Computer', 'AKTIF'),
(31, '2020-03-14', 'LAB BARAT', '30', 'BARAT_30', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(32, '2020-03-14', 'LAB BARAT', '31', 'BARAT_31', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(33, '2020-03-14', 'LAB BARAT', '32', 'BARAT_32', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(34, '2020-03-14', 'LAB BARAT', '33', 'BARAT_33', 'Hewlett-Packard', 'HP Compaq dc7700 Small Form Factor', 'X64-based PC', 'Genuine Intel® 2160', '1.80 GHz', 'Personal Computer', 'AKTIF'),
(35, '2020-03-14', 'LAB BARAT', '34', 'BARAT-34', 'Hewlett-Packard', 'HP Compaq dc7700 Small Form Factor', 'X64-based PC', 'Genuine Intel® 2160', '1.80 GHz', 'Personal Computer', 'AKTIF'),
(36, '2020-03-14', 'LAB TIMUR', 'SERVER', 'SERVER_TIMUR', 'Gigabyte Technologi Co., Ltd.', 'H81M-DS2', 'X64-based PC', 'Intel® Core™ i5-4460', '3.20 GHz', 'Personal Computer', 'AKTIF'),
(37, '2020-03-14', 'LAB TIMUR', '1', 'LABTIMUR-01-PC', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(38, '2020-03-14', 'LAB TIMUR', '2', 'TIMUR_02', 'ECS', 'H81H3-M4', 'X64-based PC', 'Intel® Pentium® G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(39, '2020-03-14', 'LAB TIMUR', '3', 'TIMUR_03', 'Gigabyte Technologi Co., Ltd.', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Pentium® G2030', '3.00 GHz', 'Personal Computer', 'AKTIF'),
(40, '2020-03-14', 'LAB TIMUR', '4', 'TIMUR_04', 'Gigabyte Technologi Co., Ltd.', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Pentium® G2030', '3.00 GHz', 'Personal Computer', 'AKTIF'),
(41, '2020-03-14', 'LAB TIMUR', '5', 'TIMUR_8-PC', 'NEXT GROUP', '631-M7TE', 'X64-based PC', 'Intel® Core™ 2 4400', '2.00 GHz', 'Personal Computer', 'AKTIF'),
(42, '2020-03-14', 'LAB TIMUR', '6', 'TIMUR_06', 'NEXT GROUP', '631-M7TE', 'X64-based PC', 'Intel® Core™ 2 4400', '2.00 GHz', 'Personal Computer', 'AKTIF'),
(43, '2020-03-14', 'LAB TIMUR', '7', 'TIMUR_07', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(44, '2020-03-14', 'LAB TIMUR', '8', 'TIMUR_08', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(45, '2020-03-14', 'LAB TIMUR', '9', 'a', 'a', 'a', 'X64-based PC', 'a', 'a', 'Personal Computer', 'NON AKTIF'),
(46, '2020-03-14', 'LAB TIMUR', '10', 'TIMUR_09', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(47, '2020-03-14', 'LAB TIMUR', '11', 'TIMUR_11', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(48, '2020-03-14', 'LAB TIMUR', '12', 'LABTIMUR-PC', 'ECS', 'H61H2-MW', 'X64-based PC', 'Intel® Core™ i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(49, '2020-03-14', 'LAB TIMUR', '13', 'TIMUR_13', 'To Be Fiiled by O.E.M', 'To Be Fiiled by O.E.M', 'X64-based PC', 'Intel(R) Core(TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(50, '2020-03-14', 'LAB TIMUR', '14', 'TIMUR_14', 'EC', 'H61H2-MV', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(51, '2020-03-14', 'LAB TIMUR', '15', 'TIMUR_15', 'Gigabyte Technology Co., Ltd.', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Pentium(R)', '3.00 GHz', 'Personal Computer', 'AKTIF'),
(52, '2020-03-14', 'LAB TIMUR', '16', 'TIMUR-16', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(53, '2020-03-14', 'LAB TIMUR', '17', 'TIMUR-17', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel(R) Celeron(R) N3050', '1.60 GHz', 'Personal Computer', 'AKTIF'),
(54, '2020-03-14', 'LAB TIMUR', '18', 'TIMUR-18', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(55, '2020-03-14', 'LAB TIMUR', '19', 'TIMUr-19', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(56, '2020-03-14', 'LAB TIMUR', '20', 'TIMUR_20', 'ECS', 'H81H3-MV', 'X64-based PC', 'Intel(R) Pentium(R) G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(57, '2020-03-14', 'LAB TIMUR', '21', 'TIMUR_21', 'ECS', 'H81H3-MV', 'X64-based PC', 'Intel(R) Pentium(R) G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(58, '2020-03-14', 'LAB TIMUR', '22', 'TIMUR-22-PC', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(59, '2020-03-14', 'LAB TIMUR', '23', 'TIMUR_23', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(60, '2020-03-14', 'LAB TIMUR', '24', 'TIMUR_24', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(61, '2020-03-14', 'LAB TIMUR', '25', 'TIMUR-25', 'ECS', 'H81H3-MV', 'X64-based PC', 'Intel(R) Pentium(R) G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(62, '2020-03-14', 'LAB TIMUR', '26', 'TIMUR_26', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(63, '2020-03-14', 'LAB TIMUR', '27', 'TIMUR_27', 'ECS', 'H81H3-MV', 'X64-based PC', 'Intel(R) Pentium(R) G3260', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(64, '2020-03-14', 'LAB TIMUR', '28', 'TIMUR_28', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(65, '2020-03-14', 'LAB TIMUR', '29', 'TIMUR_29', 'ECS', 'H81H3-MV', 'X64-based PC', 'Intel(R) Pentium(R) G3240', '3.10 GHz', 'Personal Computer', 'AKTIF'),
(66, '2020-03-14', 'LAB TIMUR', '30', 'TIMUR_30', 'ECS', 'H81H3-MV', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(67, '2020-03-14', 'LAB TIMUR', '31', 'TIMUR_31', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(68, '2020-03-14', 'LAB TIMUR', '32', 'TIMUR_32', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(69, '2020-03-14', 'LAB TIMUR', '33', 'TIMUR_33', 'To be filled by O.E.M', 'To be filled by O.E.M', 'X64-based PC', 'Intel(R) Core (TM) i3-2120', '3.30 GHz', 'Personal Computer', 'AKTIF'),
(70, '2020-03-14', 'LAB TIMUR', '34', 'Dekstop-2KNNNTM', 'HP', 'HP24065 NOTEBOOK PC', 'X64-based PC', 'Intel(R) Core (TM) i3-60064', '2.00 GHz', 'Personal Computer', 'AKTIF'),
(72, '2020-03-14', 'LAB BAHASA', 'SERVER', 'SERVER_BAHASA', 'Gigabyte Technologi Co., Ltd.', 'H81M-DS2', 'X64-based PC', 'Intel® Core® i5-4460', '3.20 GHz', 'Personal Computer', 'AKTIF'),
(73, '2020-03-14', 'LAB BAHASA', '1', 'BAHASA_16', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(74, '2020-03-14', 'LAB BAHASA', '2', 'LAPTOP-KGPTRMB8', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(75, '2020-03-14', 'LAB BAHASA', '3', 'LAPTOP-IPCKK5DB', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(76, '2020-03-14', 'LAB BAHASA', '4', 'LAPTOP-H02JESDL', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(77, '2020-03-14', 'LAB BAHASA', '5', 'DEKSTOP-FBDOS0O', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(78, '2020-03-14', 'LAB BAHASA', '6', 'LAPTOP-5BHSTCU7', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(79, '2020-03-14', 'LAB BAHASA', '7', 'LAPTOP-CLEFS0PV', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(80, '2020-03-14', 'LAB BAHASA', '8', 'LAPTOP-IDKHVD6E', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(81, '2020-03-14', 'LAB BAHASA', '9', 'KOMP BARAT 24', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(82, '2020-03-14', 'LAB BAHASA', '10', 'BAHASA_4-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(83, '2020-03-14', 'LAB BAHASA', '11', 'DEKSTOP-OBFBA51', 'HP', 'HP240G6 Notebook PC', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(84, '2020-03-14', 'LAB BAHASA', '12', 'DEKSTOP-9H5LVM8', 'Asustek Computer Inc.', 'X455LA', 'X64-based PC', 'Intel® Core™ i3-4030V', '1.90 Ghz', 'Laptop', 'AKTIF'),
(85, '2020-03-14', 'LAB BAHASA', '13', 'BAHASA_7-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(86, '2020-03-14', 'LAB BAHASA', '14', 'BAHASA_12-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(87, '2020-03-14', 'LAB BAHASA', '15', 'BAHASA_3-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(88, '2020-03-14', 'LAB BAHASA', '16', 'BAHASA_13-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(89, '2020-03-14', 'LAB BAHASA', '17', 'BAHASA_11-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(90, '2020-03-14', 'LAB BAHASA', '18', 'DEKSTOP-37UNGCA', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(91, '2020-03-14', 'LAB BAHASA', '19', 'DEKSTOP-0BFBA5I', 'HP', 'HP240G6 Notebook PC', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(92, '2020-03-14', 'LAB BAHASA', '20', 'BAHASA_20-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(93, '2020-03-14', 'LAB BAHASA', '21', 'BAHASA_14-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(94, '2020-03-14', 'LAB BAHASA', '22', 'i', 's', 's', 'X64-based PC', 'i', 'c', 'Laptop', 'NON AKTIF'),
(95, '2020-03-14', 'LAB BAHASA', '23', 'BAHASA_9-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(96, '2020-03-14', 'LAB BAHASA', '24', 'DEKSTOP-OBFBA51', 'HP', 'HP240G6 Notebook PC', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(97, '2020-03-14', 'LAB BAHASA', '25', 'DEKSTOP-E95GC26', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(98, '2020-03-14', 'LAB BAHASA', '26', 'BAHASA_6-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(99, '2020-03-14', 'LAB BAHASA', '27', 'BAHASA_2-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(100, '2020-03-14', 'LAB BAHASA', '28', 'DEKSTOP-L5N65QK', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(101, '2020-03-14', 'LAB BAHASA', '29', 'BAHASA_15', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(102, '2020-03-14', 'LAB BAHASA', '30', 'BAHASA_5-PC', 'Acer', 'Aspire ES1-531', 'X64-based PC', 'Intel® Celeron® N3050', '1.60 GHz', 'Laptop', 'AKTIF'),
(103, '2020-03-14', 'LAB BAHASA', '31', 'LAPTOP-503PECOO', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF'),
(104, '2020-03-14', 'LAB BAHASA', '32', 'LAPTOP-HVMKDHMM', 'Lenovo', '80XG', 'X64-based PC', 'Intel® Core™ i3-6006V', '2.00 GHz', 'Laptop', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisperangkat_labkom`
--

CREATE TABLE `jenisperangkat_labkom` (
  `id` int(11) NOT NULL,
  `nama_jenisperangkat` varchar(128) NOT NULL,
  `type_jenisperangkat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenisperangkat_labkom`
--

INSERT INTO `jenisperangkat_labkom` (`id`, `nama_jenisperangkat`, `type_jenisperangkat`) VALUES
(1, 'Personal Computer', 'Alat'),
(2, 'Kabel Belden', 'Bahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `nama_pinjam` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_inv` varchar(50) NOT NULL,
  `keperluan` text NOT NULL,
  `catatan_pinjam` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `catatan_kembali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_pinjam`, `nama_pinjam`, `nama_barang`, `no_inv`, `keperluan`, `catatan_pinjam`, `status`, `tgl_kembali`, `catatan_kembali`) VALUES
(1, '2018-09-24', 'Eko Cahyanto', 'Laptop', '906/INV/SMK.MUH/2016', 'Ops. Dapodik', ' ', 'Kembali', '2018-09-26', 'Barang Sudah kembali'),
(2, '2019-10-22', 'Tri Handoko, A.Ma.Pust', 'Laptop', '907/INV/SMK.MUH/2016', 'Admin Sarpras', 'barang di Ambil sendiri', 'Kembali', '2018-10-28', 'Barang Sudah kembali'),
(3, '2018-12-11', 'Munawar, S.Pd.I', 'Laptop', '906/INV/SMK.MUH/2016', 'Kepala Sekolah', 'barang di Ambil sendiri', 'Kembali', '2019-01-21', 'Barang Sudah kembali'),
(4, '2018-12-13', 'Eko Cahyanto', 'Laptop', '879/INV/SMK.MUH/2016', 'Teknisi IT Laboratorium', 'Barang di ambil sendiri', 'Permanen', '0000-00-00', ''),
(5, '2018-12-15', 'Muhas Rahamanta, S.Pd', 'Laptop', '686/INV/SMK.MUH/2016', 'Kepala Lab TKRO', 'Barang di ambil sendiri', 'Permanen', '0000-00-00', ''),
(6, '2018-12-15', 'Muharam Nur Achsany, S.Pd', 'Laptop', '687/INV/SMK.MUH/2016', 'Kepala Jurusan TBSM', 'Laptop Lenovo ideapad 320', 'Permanen', '0000-00-00', ''),
(7, '2018-12-17', 'Tri Handoko, A.Ma.Pust', 'Laptop', '907/INV/SMK.MUH/2016', 'Sarpras', 'Laptop Lenovo ideapad 320', 'Kembali', '2019-04-01', 'Barang Sudah kembali'),
(8, '2018-12-18', 'Yarudin, S.Pd.I', 'Laptop', '665/INV/SMK.MUH/2016', 'Ismuba', 'Laptop HP', 'Kembali', '2019-01-28', 'Barang Sudah kembali'),
(9, '2014-12-12', 'Edi Prabowo, ST', 'Laptop', '1470/INV/SMK.MUH/2009', 'Humas', 'Laptop Acer', 'Kembali', '2019-06-12', 'Barang Sudah kembali, (rusak ssd)'),
(10, '2009-12-14', 'Aris Dewi Ekarisma, S.Pd', 'Laptop', ' ', ' ', ' Laptop Asus', 'Permanen', '0000-00-00', ''),
(11, '2019-01-28', 'Yarudin, S.Pd.I', 'Laptop', '886/INV/SMK.MUH/2016', 'WAKA ISMUBA', 'Laptop HP', 'Permanen', '0000-00-00', ''),
(12, '2019-01-31', 'Sari Saputri, S.I.Pust', 'Laptop', '561/INV/SMK.MUH/2016', 'Akreidtasi Perpustakaan', 'Laptop Acer', 'Sementara', '0000-00-00', ''),
(13, '2019-02-06', 'Nur Cahyanti', 'Laptop', '245/INV/SMK.MUH/2016', 'Latihan LKS AKL', 'Laptop HP', 'Kembali', '2019-04-01', 'Barang Sudah kembali'),
(14, '2019-02-05', 'Eka Muryatiningsih, S.Pd', 'Laptop', ' ', 'WAKA KURIKULUM', ' ', 'Permanen', '0000-00-00', ''),
(15, '0001-01-01', 'Saiman, S.Pd.Jas', 'Laptop', ' ', ' ', ' ', 'Permanen', '0000-00-00', ''),
(16, '0001-01-01', 'Bambang Sumpono, S.E', 'Laptop', ' ', ' ', ' ', 'Sementara', '0000-00-00', ''),
(17, '0001-01-01', 'Devi Vetriyanta, S.Pd.jas', 'Laptop', ' ', 'WAKA KESISWAAN', ' ', 'Permanen', '0000-00-00', ''),
(18, '0001-01-01', 'Munawar, S.Pd.I', 'Laptop', ' ', ' ', 'Laptop HP', 'Sementara', '0000-00-00', ''),
(19, '2019-02-04', 'Ratna Esa Kuswati, S.Pd', 'Laptop', '875/INV/SMK.MUH/2016', 'Kepala Jurusan OTKP', 'Laptop Lenovo ideapad 320', 'Permanen', '0000-00-00', ''),
(20, '2019-04-22', 'Munawar, S.Pd.I', 'Laptop', '862/INV/SMK.MUH/2009', 'Kepala Sekolah', 'Laptop Lenovo', 'Permanen', '0000-00-00', ''),
(21, '2019-07-16', 'Kanifathoni Bagaskara, S.Pd', 'Laptop', '187/INV/SMK.MUH/2009', 'Kepala Jurusan TKRO', 'Laptop Lenovo ideapad 320', 'Permanen', '0000-00-00', ''),
(22, '2019-08-01', 'Insanita Qonaah, Amd.Kom', 'Laptop', '871/INV/SMK.MUH/2016', 'Ops. Dapodik', 'Laptop Lenovo ideapad 320', 'Permanen', '0000-00-00', ''),
(23, '2020-04-08', 'Saiman, S.Pd.Jas', 'Laptop', '822/INV/SMKM/VII/17', 'Tugas Daring', 'Barang di ambil sendiri', 'Sementara', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker_kepala_laboratorium`
--

CREATE TABLE `proker_kepala_laboratorium` (
  `id` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `target` text NOT NULL,
  `waktu` varchar(500) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proker_kepala_laboratorium`
--

INSERT INTO `proker_kepala_laboratorium` (`id`, `kegiatan`, `target`, `waktu`, `status`) VALUES
(1, 'Penataan administrasi laboratorium komputer', 'Penataan administrasi laboratorium komputer', 'Setiap saat', 'Belum'),
(2, 'Pendataan /inventaris laboratorium komputer', 'Pendataan /inventaris laboratorium komputer', 'Perbulan / setiap saat bila diperlukan', 'Belum'),
(3, 'Perawatan komputer', 'Semua peralatan dapat berfungsi dengan baik', 'Sesuai kebutuhan', 'Belum'),
(4, 'Praktikum', 'Praktikum', 'Sesuai jadwal', 'Belum'),
(5, 'Pembuatan Jadwal pemakaian Lab. Komputer', 'Memaksimalkan Penggunaan Lab Kom, agar tidak berbenturan dengan kelas yang lain', 'Pemakaian Lab sesuai jadwal yang ada/', 'Belum'),
(6, 'Pembuatan Jurnal Pinjaman Perlengkapan dan Peralatan Lab. Kom', 'Pengawasan / kontrol aset Laboratorium', 'Setiap saat', 'Belum'),
(7, 'Fasilitas Laboratorium Komputer', 'Pelayanan dan kenyamanan pengguna Lab Komputer. <br> Menyediakan sarana dan prasarana Lab. Pengadaan :</br>\r\n- AC di Laboratorium Akuntansi</br>\r\n- Pemadam Kebakaran/Hidran</br>\r\n- Penangkal Petir</br>\r\n- Daya Listrik  yang memadai</br>\r\n-Kecepatan akses internet yang memadai</br>', 'Sesuai kebutuhan', 'Belum'),
(8, 'Memfasilitasi dengan Internet', 'Untuk menunjang Proses pembelajaran grossing dari internet', 'Setiap saat', 'Belum'),
(9, 'Pembuat Sistem Informasi Laboratorium (Silab Muhka)', '1. Laboratorium Komputer<br>\r\n2. Laboratorium AKL<br>\r\n3. Laboratorium OTKP<br>\r\n4. Laboratorium TKRO<br>\r\n5. Laboratorium TBSM<br>', 'Minggu ke-2 bulan Juli 2020 sampai dengan Desember 2020', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nbm` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `nbm`, `jabatan`, `email`, `image`, `password`, `level_id`, `is_active`, `date_created`) VALUES
(1, 'Eko Cahyanto', '1288585', 'Kepala Laboratorium Komputer', 'ekocahyanto007@gmail.com', 'default.jpg', '$2y$10$WIl97lbOjlIaYZIo7dNBqeY6KM2vlWXY2Pob1ONb0zR8uwUCsSrgO', 1, 1, 1593092569),
(2, 'Eko Cahyanto', '1288585', 'Teknisi Lab. Komputer', 'cahya93@smkmuhkarangmojo.sch.id', 'default.jpg', '$2y$10$cXamDsxXvuewhqmI62apGOjj7geyPjYE8qvHKHbXDpdGeAdyzdNpC', 2, 1, 1593093156),
(4, 'Alfyan Wahyu Utomo', '1300885', 'Toolman Bengkel TKRO', 'alfyan@smkmuhkarangmojo.sch.id', 'default.jpg', '$2y$10$LMkOKd3oNp0IIntRe5vUXuMWoCgg9NP6T5N/.PqhtRNYfCJ9NqfJ2', 3, 0, 1593427078);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `level_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 3),
(7, 3, 4),
(11, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `level`) VALUES
(1, 'Administrator'),
(2, 'Admin Labkom'),
(3, 'Admin TKRO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Management Menu'),
(3, 'Admin Lab. Komputer'),
(4, 'Admin Lab. TKRO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'administrator', 'nav-icon fas fa-tachometer-alt', 1),
(2, 3, 'Dashboard', 'labkomputer', 'nav-icon fas fa-tachometer-alt', 1),
(3, 3, 'Data Komputer', 'labkomputer/datakomputer', 'nav-icon fa fa-desktop', 1),
(4, 2, 'Menu Management', 'menu', 'nav-icon fa fa-folder', 1),
(5, 2, 'Submenu Management', 'menu/submenu', 'nav-icon fa fa-folder-open', 1),
(6, 3, 'Data Peminjaman', 'labkomputer/peminjam', 'nav-icon fa fa-user', 1),
(7, 1, 'Level Acces', 'administrator/adminlevel', 'nav-icon fa fa-user-circle', 1),
(8, 4, 'Dashboard', 'labTKRO', 'nav-icon fas fa-tachometer-alt', 1),
(9, 1, 'My Profile', 'administrator/profile', 'nav-icon fa fa-user', 1),
(10, 1, 'Aktivasi Akun', 'administrator/akun', 'nav-icon fa fa-universal-access', 1),
(11, 3, 'Alat & Bahan', 'labkomputer/AlatBahan', 'nav-icon fa fa-list-alt', 1),
(12, 3, 'Alat Laboratorium', 'labkomputer/alat', 'nav-icon fa fa-briefcase', 1),
(13, 3, 'Bahan Laboratorium', 'labkomputer/bahan', 'nav-icon fa fa-th-list', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_labkom`
--
ALTER TABLE `alat_labkom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bahan_labkom`
--
ALTER TABLE `bahan_labkom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_komputer`
--
ALTER TABLE `data_komputer`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `jenisperangkat_labkom`
--
ALTER TABLE `jenisperangkat_labkom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proker_kepala_laboratorium`
--
ALTER TABLE `proker_kepala_laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_labkom`
--
ALTER TABLE `alat_labkom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahan_labkom`
--
ALTER TABLE `bahan_labkom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_komputer`
--
ALTER TABLE `data_komputer`
  MODIFY `no_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `jenisperangkat_labkom`
--
ALTER TABLE `jenisperangkat_labkom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `proker_kepala_laboratorium`
--
ALTER TABLE `proker_kepala_laboratorium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
