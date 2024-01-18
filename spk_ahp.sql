-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 08:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahp_analisa_alternatif`
--

CREATE TABLE `ahp_analisa_alternatif` (
  `id_analisa_alternatif` int(11) NOT NULL,
  `id_responden` varchar(2) NOT NULL,
  `alternatif_pertama` int(2) NOT NULL,
  `nilai_analisa_alternatif` double NOT NULL,
  `hasil_analisa_alternatif` double NOT NULL,
  `alternatif_kedua` int(2) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_analisa_alternatif`
--

INSERT INTO `ahp_analisa_alternatif` (`id_analisa_alternatif`, `id_responden`, `alternatif_pertama`, `nilai_analisa_alternatif`, `hasil_analisa_alternatif`, `alternatif_kedua`, `id_kriteria`) VALUES
(2116, 'R1', 1, 1, 0.125, 1, 'C1'),
(2117, 'R1', 1, 1, 0.13279678068411, 2, 'C1'),
(2119, 'R1', 1, 0.5, 0.054585152838428, 8, 'C1'),
(2120, 'R1', 1, 1, 0.125, 6, 'C1'),
(2121, 'R1', 1, 1, 0.3, 3, 'C1'),
(2122, 'R1', 2, 0.33, 0.072052401746725, 8, 'C1'),
(2123, 'R1', 2, 2, 0.25, 6, 'C1'),
(2124, 'R1', 2, 0.5, 0.15, 3, 'C1'),
(2125, 'R1', 3, 2, 0.43668122270742, 8, 'C1'),
(2126, 'R1', 3, 3, 0.375, 6, 'C1'),
(2127, 'R1', 6, 1, 0.21834061135371, 8, 'C1'),
(2128, 'R1', 8, 2, 0.5, 1, 'C1'),
(2129, 'R1', 6, 1, 0.125, 1, 'C1'),
(2130, 'R1', 3, 1, 0.125, 1, 'C1'),
(2131, 'R1', 2, 1, 0.125, 1, 'C1'),
(2132, 'R1', 8, 3.030303030303, 0.40241448692153, 2, 'C1'),
(2133, 'R1', 6, 0.5, 0.066398390342053, 2, 'C1'),
(2134, 'R1', 3, 2, 0.26559356136821, 2, 'C1'),
(2135, 'R1', 8, 0.5, 0.15, 3, 'C1'),
(2136, 'R1', 6, 0.33333333333333, 0.099999999999999, 3, 'C1'),
(2137, 'R1', 8, 1, 0.125, 6, 'C1'),
(2138, 'R1', 2, 1, 0.13279678068411, 2, 'C1'),
(2139, 'R1', 3, 1, 0.3, 3, 'C1'),
(2140, 'R1', 6, 1, 0.125, 6, 'C1'),
(2141, 'R1', 8, 1, 0.21834061135371, 8, 'C1'),
(2142, 'R2', 1, 0.25, 0.054585152838428, 8, 'C1'),
(2143, 'R2', 1, 1, 0.125, 6, 'C1'),
(2144, 'R2', 1, 1, 0.3, 3, 'C1'),
(2145, 'R2', 1, 1, 0.13279678068411, 2, 'C1'),
(2146, 'R2', 2, 0.33, 0.072052401746725, 8, 'C1'),
(2147, 'R2', 2, 2, 0.25, 6, 'C1'),
(2148, 'R2', 2, 0.5, 0.15, 3, 'C1'),
(2149, 'R2', 3, 2, 0.43668122270742, 8, 'C1'),
(2150, 'R2', 3, 3, 0.375, 6, 'C1'),
(2151, 'R2', 6, 1, 0.21834061135371, 8, 'C1'),
(2152, 'R2', 8, 4, 0.5, 1, 'C1'),
(2153, 'R2', 6, 1, 0.125, 1, 'C1'),
(2154, 'R2', 3, 1, 0.125, 1, 'C1'),
(2155, 'R2', 2, 1, 0.125, 1, 'C1'),
(2156, 'R2', 8, 3.030303030303, 0.40241448692153, 2, 'C1'),
(2157, 'R2', 6, 0.5, 0.066398390342053, 2, 'C1'),
(2158, 'R2', 3, 2, 0.26559356136821, 2, 'C1'),
(2159, 'R2', 8, 0.5, 0.15, 3, 'C1'),
(2160, 'R2', 6, 0.33333333333333, 0.099999999999999, 3, 'C1'),
(2161, 'R2', 8, 1, 0.125, 6, 'C1'),
(2162, 'R2', 1, 1, 0.125, 1, 'C1'),
(2163, 'R2', 2, 1, 0.13279678068411, 2, 'C1'),
(2164, 'R2', 3, 1, 0.3, 3, 'C1'),
(2165, 'R2', 6, 1, 0.125, 6, 'C1'),
(2166, 'R2', 8, 1, 0.21834061135371, 8, 'C1');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_analisa_kriteria`
--

CREATE TABLE `ahp_analisa_kriteria` (
  `id` int(11) NOT NULL,
  `id_responden` varchar(2) NOT NULL,
  `kriteria_pertama` varchar(2) NOT NULL,
  `nilai_analisa_kriteria` double NOT NULL,
  `hasil_analisa_kriteria` double NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_analisa_kriteria`
--

INSERT INTO `ahp_analisa_kriteria` (`id`, `id_responden`, `kriteria_pertama`, `nilai_analisa_kriteria`, `hasil_analisa_kriteria`, `kriteria_kedua`) VALUES
(811, 'R1', 'C1', 1, 0.92656255587357, 'C4'),
(812, 'R1', 'C1', 0.5, 0.091310062333496, 'C3'),
(813, 'R1', 'C1', 0.33, 0.11631363116468, 'C2'),
(814, 'R1', 'C2', 1, 0.18531251117471, 'C4'),
(815, 'R1', 'C2', 2, 0.36524024933398, 'C3'),
(816, 'R1', 'C3', 0.5, 0.092656255587357, 'C4'),
(817, 'R1', 'C4', 1, 0.031601756471679, 'C1'),
(818, 'R1', 'C3', 2, 0.31601756471679, 'C1'),
(819, 'R1', 'C2', 3.030303030303, 0.47881449199513, 'C1'),
(820, 'R1', 'C4', 1, 0.35246554898388, 'C2'),
(821, 'R1', 'C3', 0.5, 0.17623277449194, 'C2'),
(822, 'R1', 'C4', 2, 0.36524024933398, 'C3'),
(823, 'R1', 'C1', 1, 0.15800878235839, 'C1'),
(824, 'R1', 'C2', 1, 0.35246554898388, 'C2'),
(825, 'R1', 'C3', 1, 0.18262012466699, 'C3'),
(826, 'R1', 'C4', 1, 0.18531251117471, 'C4'),
(827, 'R2', 'C1', 5, 0.92656255587357, 'C4'),
(828, 'R2', 'C1', 0.5, 0.091310062333496, 'C3'),
(829, 'R2', 'C1', 0.33, 0.11631363116468, 'C2'),
(830, 'R2', 'C2', 1, 0.18531251117471, 'C4'),
(831, 'R2', 'C2', 2, 0.36524024933398, 'C3'),
(832, 'R2', 'C3', 0.5, 0.092656255587357, 'C4'),
(833, 'R2', 'C4', 0.2, 0.031601756471679, 'C1'),
(834, 'R2', 'C3', 2, 0.31601756471679, 'C1'),
(835, 'R2', 'C2', 3.030303030303, 0.47881449199513, 'C1'),
(836, 'R2', 'C4', 1, 0.35246554898388, 'C2'),
(837, 'R2', 'C3', 0.5, 0.17623277449194, 'C2'),
(838, 'R2', 'C4', 2, 0.36524024933398, 'C3'),
(839, 'R2', 'C1', 1, 0.15800878235839, 'C1'),
(840, 'R2', 'C2', 1, 0.35246554898388, 'C2'),
(841, 'R2', 'C3', 1, 0.18262012466699, 'C3'),
(842, 'R2', 'C4', 1, 0.18531251117471, 'C4'),
(843, 'R3', 'C1', 5, 0.92656255587357, 'C4'),
(844, 'R3', 'C1', 0.5, 0.091310062333496, 'C3'),
(845, 'R3', 'C1', 0.33, 0.11631363116468, 'C2'),
(846, 'R3', 'C2', 1, 0.18531251117471, 'C4'),
(847, 'R3', 'C2', 2, 0.36524024933398, 'C3'),
(848, 'R3', 'C3', 0.5, 0.092656255587357, 'C4'),
(849, 'R3', 'C4', 0.2, 0.031601756471679, 'C1'),
(850, 'R3', 'C3', 2, 0.31601756471679, 'C1'),
(851, 'R3', 'C2', 3.030303030303, 0.47881449199513, 'C1'),
(852, 'R3', 'C4', 1, 0.35246554898388, 'C2'),
(853, 'R3', 'C3', 0.5, 0.17623277449194, 'C2'),
(854, 'R3', 'C4', 2, 0.36524024933398, 'C3'),
(855, 'R3', 'C1', 1, 0.15800878235839, 'C1'),
(856, 'R3', 'C2', 1, 0.35246554898388, 'C2'),
(857, 'R3', 'C3', 1, 0.18262012466699, 'C3'),
(858, 'R3', 'C4', 1, 0.18531251117471, 'C4');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_data_alternatif`
--

CREATE TABLE `ahp_data_alternatif` (
  `id_alternatif` int(2) NOT NULL,
  `nama_alternatif` varchar(45) NOT NULL,
  `hasil_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_data_alternatif`
--

INSERT INTO `ahp_data_alternatif` (`id_alternatif`, `nama_alternatif`, `hasil_akhir`) VALUES
(1, 'Ahmadul Khalid', 0.726189564159986),
(2, 'M. Syahrul Ridha', 0.481961152182656),
(3, 'Amelia Putri', 0.426281045174002),
(6, 'asdzxczxc', 0.3682266135402276),
(8, 'm,mm,m', 0.38358031133453563),
(9, 'asd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_data_kriteria`
--

CREATE TABLE `ahp_data_kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `jumlah_kriteria` double NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_data_kriteria`
--

INSERT INTO `ahp_data_kriteria` (`id_kriteria`, `nama_kriteria`, `jumlah_kriteria`, `bobot_kriteria`) VALUES
('C1', 'Indeks Prestasi Akademik', 6.32876214267519, 0.323048757932534),
('C2', 'Prestasi Akademik', 2.83715671753707, 0.34545820037192493),
('C3', 'Prestasi Non Akademik', 5.47584775677656, 0.19188167986576923),
('C4', 'Berkelakuan Baik', 5.39628972518316, 0.23365501649106227);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_data_responden`
--

CREATE TABLE `ahp_data_responden` (
  `id_responden` int(11) NOT NULL,
  `nama` varchar(3) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahp_data_responden`
--

INSERT INTO `ahp_data_responden` (`id_responden`, `nama`, `jenis_kelamin`, `jabatan`) VALUES
(3, 'asd', 'laki-laki', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_jum_alt_kri`
--

CREATE TABLE `ahp_jum_alt_kri` (
  `id_jum_alt_kri` int(11) NOT NULL,
  `id_alternatif` int(2) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `jumlah_alt_kri` double NOT NULL,
  `skor_alt_kri` double NOT NULL,
  `hasil_alt_kri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_jum_alt_kri`
--

INSERT INTO `ahp_jum_alt_kri` (`id_jum_alt_kri`, `id_alternatif`, `id_kriteria`, `jumlah_alt_kri`, `skor_alt_kri`, `hasil_alt_kri`) VALUES
(13, 1, 'C1', 8, 1, 0.32304875793253),
(14, 2, 'C1', 7.530303030303, 1, 0.32304875793253),
(15, 3, 'C1', 3.33333333333333, 1, 0.32304875793253),
(16, 1, 'C2', 3.58333333333333, 0.588108180056682, 0.20316679350639),
(17, 2, 'C2', 10.060606060606, 0.1150754835812402, 0.039753769464904),
(18, 3, 'C2', 5.83333333333333, 0.0890518812814582, 0.030763702647227),
(19, 1, 'C3', 3.58333333333333, 0.46993364951393596, 0.090171658094186),
(20, 2, 'C3', 10.060606060606, 0.2800196218219982, 0.053730635430582),
(21, 3, 'C3', 5.83333333333333, 0.17029926023930217, 0.032677308134615),
(22, 1, 'C4', 3.58333333333333, 0.46993364951393596, 0.10980235462688),
(23, 2, 'C4', 10.060606060606, 0.2800196218219982, 0.06542798935464),
(24, 3, 'C4', 5.83333333333333, 0.17029926023930217, 0.03979127645963),
(25, 6, 'C1', 8, 1, 0.32304875793253),
(27, 6, 'C3', 8.530000000000001, 0.03987373421238474, 0.0076510391031936),
(29, 6, 'C2', 8.530000000000001, 0.0816600053180896, 0.028210118479549),
(31, 6, 'C4', 8.530000000000001, 0.03987373421238474, 0.009316698024955),
(33, 8, 'C1', 4.58, 1, 0.32304875793253),
(34, 8, 'C2', 8.33, 0.12610444976253482, 0.043563816273857),
(35, 8, 'C3', 8.33, 0.039873734212384736, 0.0076510391031936),
(36, 8, 'C4', 8.33, 0.039873734212384736, 0.009316698024955);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_matriks_perbandingan_alternatif`
--

CREATE TABLE `ahp_matriks_perbandingan_alternatif` (
  `id_matriks_perbandingan_alternatif` int(11) NOT NULL,
  `id_alternatif_pertama` int(11) NOT NULL,
  `id_alternatif_kedua` int(11) NOT NULL,
  `nilai_perbandingan` double NOT NULL,
  `id_kriteria` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahp_matriks_perbandingan_alternatif`
--

INSERT INTO `ahp_matriks_perbandingan_alternatif` (`id_matriks_perbandingan_alternatif`, `id_alternatif_pertama`, `id_alternatif_kedua`, `nilai_perbandingan`, `id_kriteria`) VALUES
(1, 1, 1, 1, 'C4'),
(2, 1, 2, 9, 'C4'),
(3, 1, 3, 9, 'C4'),
(4, 2, 1, 2, 'C4'),
(5, 2, 2, 1, 'C4'),
(6, 2, 3, 9, 'C4'),
(7, 3, 1, 3, 'C4'),
(8, 3, 2, 0.11111111111111, 'C4'),
(9, 3, 3, 1, 'C4'),
(10, 1, 1, 1, 'C2'),
(11, 1, 2, 9, 'C2'),
(12, 1, 3, 9, 'C2'),
(13, 2, 1, 2, 'C2'),
(14, 2, 2, 1, 'C2'),
(15, 2, 3, 9, 'C2'),
(16, 3, 1, 3, 'C2'),
(17, 3, 2, 0.11111111111111, 'C2'),
(18, 3, 3, 1, 'C2'),
(19, 1, 1, 8, 'C1'),
(20, 1, 2, 9, 'C1'),
(21, 1, 3, 9, 'C1'),
(22, 2, 1, 2, 'C1'),
(23, 2, 2, 1, 'C1'),
(24, 2, 3, 9, 'C1'),
(25, 3, 1, 8, 'C1'),
(26, 3, 2, 0.11111111111111, 'C1'),
(27, 3, 3, 1, 'C1'),
(28, 1, 1, 1, 'C3'),
(29, 1, 2, 0.125, 'C3'),
(30, 1, 3, 0.1, 'C3'),
(31, 2, 1, 2, 'C3'),
(32, 2, 2, 1, 'C3'),
(33, 2, 3, 9, 'C3'),
(34, 3, 1, 3, 'C3'),
(35, 3, 2, 0.11111111111111, 'C3'),
(36, 3, 3, 1, 'C3'),
(38, 1, 6, 0, 'C1'),
(39, 2, 6, 0, 'C1'),
(40, 3, 6, 0, 'C1'),
(41, 6, 1, 6, 'C1'),
(42, 6, 2, 0, 'C1'),
(43, 6, 3, 0, 'C1'),
(44, 6, 6, 1, 'C1'),
(54, 6, 6, 1, 'C3'),
(56, 1, 6, 1, 'C4'),
(58, 2, 6, 1, 'C4'),
(60, 3, 6, 1, 'C4'),
(62, 6, 1, 8, 'C4'),
(63, 6, 2, 1, 'C4'),
(64, 6, 3, 1, 'C4'),
(65, 6, 6, 1, 'C4'),
(72, 1, 8, 5.8934518258515, 'C1'),
(73, 2, 8, 8.8044064715625, 'C1'),
(74, 3, 8, 8.8044064715625, 'C1'),
(75, 6, 8, 1, 'C1'),
(76, 8, 1, 8, 'C1'),
(77, 8, 2, 0.11357949036427, 'C1'),
(78, 8, 3, 0.11357949036427, 'C1'),
(79, 8, 6, 1, 'C1'),
(80, 8, 8, 1, 'C1'),
(81, 1, 6, 5.8934518258515, 'C2'),
(82, 1, 8, 5.8934518258515, 'C2'),
(83, 2, 6, 5.3596935000793, 'C2'),
(84, 2, 8, 5.3596935000793, 'C2'),
(85, 3, 6, 4.2638317210572, 'C2'),
(86, 3, 8, 2.6984865582539, 'C2'),
(87, 6, 1, 0.16967984630222, 'C2'),
(88, 6, 2, 0.18657783322595, 'C2'),
(89, 6, 3, 0.23453083175432, 'C2'),
(90, 6, 6, 1, 'C2'),
(91, 6, 8, 1, 'C2'),
(92, 8, 1, 0.16967984630222, 'C2'),
(93, 8, 2, 0.18657783322595, 'C2'),
(94, 8, 3, 0.37057809198318, 'C2'),
(95, 8, 6, 1, 'C2'),
(96, 8, 8, 1, 'C2'),
(97, 1, 8, 5.8934518258515, 'C4'),
(98, 2, 8, 8.8044064715625, 'C4'),
(99, 3, 8, 8.8044064715625, 'C4'),
(100, 6, 8, 1, 'C4'),
(101, 8, 1, 8, 'C4'),
(102, 8, 2, 0.11357949036427, 'C4'),
(103, 8, 3, 0.11357949036427, 'C4'),
(104, 8, 6, 1, 'C4'),
(105, 8, 8, 1, 'C4'),
(106, 1, 6, 5.8934518258515, 'C3'),
(107, 1, 8, 5.8934518258515, 'C3'),
(108, 2, 6, 8.8044064715625, 'C3'),
(109, 2, 8, 8.8044064715625, 'C3'),
(110, 3, 6, 2.3620902757121, 'C3'),
(111, 3, 8, 4.2638317210572, 'C3'),
(112, 6, 1, 8, 'C3'),
(113, 6, 2, 0.11357949036427, 'C3'),
(114, 6, 3, 0.42335384480533, 'C3'),
(115, 6, 8, 1, 'C3'),
(116, 8, 1, 8, 'C3'),
(117, 8, 2, 0.11357949036427, 'C3'),
(118, 8, 3, 0.23453083175432, 'C3'),
(119, 8, 6, 1, 'C3'),
(120, 8, 8, 1, 'C3');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_matriks_perbandingan_kriteria`
--

CREATE TABLE `ahp_matriks_perbandingan_kriteria` (
  `id_matriks_perbandingan_kriteria` int(11) NOT NULL,
  `id_kriteria_pertama` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kriteria_kedua` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_perbandingan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahp_matriks_perbandingan_kriteria`
--

INSERT INTO `ahp_matriks_perbandingan_kriteria` (`id_matriks_perbandingan_kriteria`, `id_kriteria_pertama`, `id_kriteria_kedua`, `nilai_perbandingan`) VALUES
(227, 'C1', 'C1', 1),
(228, 'C1', 'C2', 0.33367894250871),
(229, 'C1', 'C3', 0.50347777502836),
(230, 'C1', 'C4', 2.8928119501548),
(231, 'C2', 'C1', 2.9968927391152),
(232, 'C2', 'C2', 1),
(233, 'C2', 'C3', 1.9861849908741),
(234, 'C2', 'C4', 1),
(235, 'C3', 'C1', 1.9861849908741),
(236, 'C3', 'C2', 0.50347777502836),
(237, 'C3', 'C3', 1),
(238, 'C3', 'C4', 0.50347777502836),
(239, 'C4', 'C1', 0.34568441268589),
(240, 'C4', 'C2', 1),
(241, 'C4', 'C3', 1.9861849908741),
(242, 'C4', 'C4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_nilai`
--

CREATE TABLE `ahp_nilai` (
  `id_nilai` int(11) NOT NULL,
  `jum_nilai` double NOT NULL,
  `label` int(11) NOT NULL,
  `ket_nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_nilai`
--

INSERT INTO `ahp_nilai` (`id_nilai`, `jum_nilai`, `label`, `ket_nilai`) VALUES
(2, 9, 9, 'Mutlak sangat penting dari'),
(3, 8, 8, 'Mendekati mutlak dari'),
(8, 7, 7, 'Sangat penting dari'),
(9, 6, 6, 'Mendekati sangat penting dari'),
(10, 5, 5, 'Lebih penting dari'),
(11, 4, 4, 'Mendekati lebih penting dari'),
(12, 3, 3, 'Sedikit lebih penting dari'),
(13, 2, 2, 'Mendekati sedikit lebih penting dari'),
(14, 1, 1, 'Sama penting dengan'),
(15, 0.5, 2, '1 bagi mendekati sedikit lebih penting dari'),
(16, 0.33, 3, '1 bagi sedikit lebih penting dari'),
(17, 0.25, 4, '1 bagi mendekati lebih penting dari'),
(18, 0.2, 5, '1 bagi lebih penting dari'),
(19, 0.167, 6, '1 bagi mendekati sangat penting dari'),
(20, 0.143, 7, '1 bagi sangat penting dari'),
(21, 0.125, 8, '1 bagi mendekati mutlak dari'),
(22, 0.1, 9, '1 bagi mutlak sangat penting dari');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_normalisasi_alternatif`
--

CREATE TABLE `ahp_normalisasi_alternatif` (
  `id_normalisasi_alternatif` int(11) NOT NULL,
  `id_alternatif_pertama` int(11) NOT NULL,
  `id_alternatif_kedua` int(11) NOT NULL,
  `id_kriteria` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ahp_normalisasi_kriteria`
--

CREATE TABLE `ahp_normalisasi_kriteria` (
  `id_normalisasi_kriteria` int(11) NOT NULL,
  `id_kriteria_pertama` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kriteria_kedua` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahp_normalisasi_kriteria`
--

INSERT INTO `ahp_normalisasi_kriteria` (`id_normalisasi_kriteria`, `id_kriteria_pertama`, `id_kriteria_kedua`, `nilai_normalisasi`) VALUES
(33, 'C1', 'C1', 0.15800878235839),
(34, 'C1', 'C2', 0.11761033165569),
(35, 'C1', 'C3', 0.091945174042738),
(36, 'C1', 'C4', 0.53607424683941),
(37, 'C2', 'C1', 0.4735353725663),
(38, 'C2', 'C2', 0.35246554898388),
(39, 'C2', 'C3', 0.36271735064514),
(40, 'C2', 'C4', 0.18531251117471),
(41, 'C3', 'C1', 0.31383467194653),
(42, 'C3', 'C2', 0.17745857037655),
(43, 'C3', 'C3', 0.18262012466699),
(44, 'C3', 'C4', 0.093300730811163),
(45, 'C4', 'C1', 0.054621173128774),
(46, 'C4', 'C2', 0.35246554898388),
(47, 'C4', 'C3', 0.36271735064514),
(48, 'C4', 'C4', 0.18531251117471),
(49, 'C1', 'C1', 0.15800878235839),
(50, 'C1', 'C2', 0.11761033165569),
(51, 'C1', 'C3', 0.091945174042738),
(52, 'C1', 'C4', 0.53607424683941),
(53, 'C2', 'C1', 0.4735353725663),
(54, 'C2', 'C2', 0.35246554898388),
(55, 'C2', 'C3', 0.36271735064514),
(56, 'C2', 'C4', 0.18531251117471),
(57, 'C3', 'C1', 0.31383467194653),
(58, 'C3', 'C2', 0.17745857037655),
(59, 'C3', 'C3', 0.18262012466699),
(60, 'C3', 'C4', 0.093300730811163),
(61, 'C4', 'C1', 0.054621173128774),
(62, 'C4', 'C2', 0.35246554898388),
(63, 'C4', 'C3', 0.36271735064514),
(64, 'C4', 'C4', 0.18531251117471),
(65, 'C1', 'C1', 0.15800878235839),
(66, 'C1', 'C2', 0.11761033165569),
(67, 'C1', 'C3', 0.091945174042738),
(68, 'C1', 'C4', 0.53607424683941),
(69, 'C2', 'C1', 0.4735353725663),
(70, 'C2', 'C2', 0.35246554898388),
(71, 'C2', 'C3', 0.36271735064514),
(72, 'C2', 'C4', 0.18531251117471),
(73, 'C3', 'C1', 0.31383467194653),
(74, 'C3', 'C2', 0.17745857037655),
(75, 'C3', 'C3', 0.18262012466699),
(76, 'C3', 'C4', 0.093300730811163),
(77, 'C4', 'C1', 0.054621173128774),
(78, 'C4', 'C2', 0.35246554898388),
(79, 'C4', 'C3', 0.36271735064514),
(80, 'C4', 'C4', 0.18531251117471),
(81, 'C1', 'C1', 0.15800878235839),
(82, 'C1', 'C2', 0.11761033165569),
(83, 'C1', 'C3', 0.091945174042738),
(84, 'C1', 'C4', 0.53607424683941),
(85, 'C2', 'C1', 0.4735353725663),
(86, 'C2', 'C2', 0.35246554898388),
(87, 'C2', 'C3', 0.36271735064514),
(88, 'C2', 'C4', 0.18531251117471),
(89, 'C3', 'C1', 0.31383467194653),
(90, 'C3', 'C2', 0.17745857037655),
(91, 'C3', 'C3', 0.18262012466699),
(92, 'C3', 'C4', 0.093300730811163),
(93, 'C4', 'C1', 0.054621173128774),
(94, 'C4', 'C2', 0.35246554898388),
(95, 'C4', 'C3', 0.36271735064514),
(96, 'C4', 'C4', 0.18531251117471),
(97, 'C1', 'C1', 0.15800878235839),
(98, 'C1', 'C2', 0.11761033165569),
(99, 'C1', 'C3', 0.091945174042738),
(100, 'C1', 'C4', 0.53607424683941),
(101, 'C2', 'C1', 0.4735353725663),
(102, 'C2', 'C2', 0.35246554898388),
(103, 'C2', 'C3', 0.36271735064514),
(104, 'C2', 'C4', 0.18531251117471),
(105, 'C3', 'C1', 0.31383467194653),
(106, 'C3', 'C2', 0.17745857037655),
(107, 'C3', 'C3', 0.18262012466699),
(108, 'C3', 'C4', 0.093300730811163),
(109, 'C4', 'C1', 0.054621173128774),
(110, 'C4', 'C2', 0.35246554898388),
(111, 'C4', 'C3', 0.36271735064514),
(112, 'C4', 'C4', 0.18531251117471),
(113, 'C1', 'C1', 0.15800878235839),
(114, 'C1', 'C2', 0.11761033165569),
(115, 'C1', 'C3', 0.091945174042738),
(116, 'C1', 'C4', 0.53607424683941),
(117, 'C2', 'C1', 0.4735353725663),
(118, 'C2', 'C2', 0.35246554898388),
(119, 'C2', 'C3', 0.36271735064514),
(120, 'C2', 'C4', 0.18531251117471),
(121, 'C3', 'C1', 0.31383467194653),
(122, 'C3', 'C2', 0.17745857037655),
(123, 'C3', 'C3', 0.18262012466699),
(124, 'C3', 'C4', 0.093300730811163),
(125, 'C4', 'C1', 0.054621173128774),
(126, 'C4', 'C2', 0.35246554898388),
(127, 'C4', 'C3', 0.36271735064514),
(128, 'C4', 'C4', 0.18531251117471),
(129, 'C1', 'C1', 0.15800878235839),
(130, 'C1', 'C2', 0.11761033165569),
(131, 'C1', 'C3', 0.091945174042738),
(132, 'C1', 'C4', 0.53607424683941),
(133, 'C2', 'C1', 0.4735353725663),
(134, 'C2', 'C2', 0.35246554898388),
(135, 'C2', 'C3', 0.36271735064514),
(136, 'C2', 'C4', 0.18531251117471),
(137, 'C3', 'C1', 0.31383467194653),
(138, 'C3', 'C2', 0.17745857037655),
(139, 'C3', 'C3', 0.18262012466699),
(140, 'C3', 'C4', 0.093300730811163),
(141, 'C4', 'C1', 0.054621173128774),
(142, 'C4', 'C2', 0.35246554898388),
(143, 'C4', 'C3', 0.36271735064514),
(144, 'C4', 'C4', 0.18531251117471),
(145, 'C1', 'C1', 0.15800878235839),
(146, 'C1', 'C2', 0.11761033165569),
(147, 'C1', 'C3', 0.091945174042738),
(148, 'C1', 'C4', 0.53607424683941),
(149, 'C2', 'C1', 0.4735353725663),
(150, 'C2', 'C2', 0.35246554898388),
(151, 'C2', 'C3', 0.36271735064514),
(152, 'C2', 'C4', 0.18531251117471),
(153, 'C3', 'C1', 0.31383467194653),
(154, 'C3', 'C2', 0.17745857037655),
(155, 'C3', 'C3', 0.18262012466699),
(156, 'C3', 'C4', 0.093300730811163),
(157, 'C4', 'C1', 0.054621173128774),
(158, 'C4', 'C2', 0.35246554898388),
(159, 'C4', 'C3', 0.36271735064514),
(160, 'C4', 'C4', 0.18531251117471),
(161, 'C1', 'C1', 0.15800878235839),
(162, 'C1', 'C2', 0.11761033165569),
(163, 'C1', 'C3', 0.091945174042738),
(164, 'C1', 'C4', 0.53607424683941),
(165, 'C2', 'C1', 0.4735353725663),
(166, 'C2', 'C2', 0.35246554898388),
(167, 'C2', 'C3', 0.36271735064514),
(168, 'C2', 'C4', 0.18531251117471),
(169, 'C3', 'C1', 0.31383467194653),
(170, 'C3', 'C2', 0.17745857037655),
(171, 'C3', 'C3', 0.18262012466699),
(172, 'C3', 'C4', 0.093300730811163),
(173, 'C4', 'C1', 0.054621173128774),
(174, 'C4', 'C2', 0.35246554898388),
(175, 'C4', 'C3', 0.36271735064514),
(176, 'C4', 'C4', 0.18531251117471);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_pengguna`
--

CREATE TABLE `ahp_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_pengguna`
--

INSERT INTO `ahp_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_rangking`
--

CREATE TABLE `ahp_rangking` (
  `kriteria` varchar(2) NOT NULL,
  `skor_bobot` double NOT NULL,
  `alternatif` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahp_analisa_alternatif`
--
ALTER TABLE `ahp_analisa_alternatif`
  ADD PRIMARY KEY (`id_analisa_alternatif`),
  ADD KEY `ahp_analisa_alternatif_ibfk_3` (`id_kriteria`),
  ADD KEY `ahp_analisa_alternatif_ibfk_1` (`alternatif_pertama`),
  ADD KEY `ahp_analisa_alternatif_ibfk_2` (`alternatif_kedua`);

--
-- Indexes for table `ahp_analisa_kriteria`
--
ALTER TABLE `ahp_analisa_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ahp_analisa_kriteria_ibfk_1` (`kriteria_pertama`),
  ADD KEY `ahp_analisa_kriteria_ibfk_2` (`kriteria_kedua`);

--
-- Indexes for table `ahp_data_alternatif`
--
ALTER TABLE `ahp_data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `ahp_data_kriteria`
--
ALTER TABLE `ahp_data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ahp_data_responden`
--
ALTER TABLE `ahp_data_responden`
  ADD PRIMARY KEY (`id_responden`);

--
-- Indexes for table `ahp_jum_alt_kri`
--
ALTER TABLE `ahp_jum_alt_kri`
  ADD PRIMARY KEY (`id_jum_alt_kri`),
  ADD KEY `ahp_jum_alt_kri_ibfk_1` (`id_alternatif`),
  ADD KEY `ahp_jum_alt_kri_ibfk_2` (`id_kriteria`);

--
-- Indexes for table `ahp_matriks_perbandingan_alternatif`
--
ALTER TABLE `ahp_matriks_perbandingan_alternatif`
  ADD PRIMARY KEY (`id_matriks_perbandingan_alternatif`),
  ADD KEY `id_alternatif_kedua` (`id_alternatif_kedua`),
  ADD KEY `id_alternatif_pertama` (`id_alternatif_pertama`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `ahp_matriks_perbandingan_kriteria`
--
ALTER TABLE `ahp_matriks_perbandingan_kriteria`
  ADD PRIMARY KEY (`id_matriks_perbandingan_kriteria`),
  ADD KEY `id_kriteria_pertama` (`id_kriteria_pertama`),
  ADD KEY `id_kriteria_kedua` (`id_kriteria_kedua`);

--
-- Indexes for table `ahp_nilai`
--
ALTER TABLE `ahp_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `ahp_normalisasi_alternatif`
--
ALTER TABLE `ahp_normalisasi_alternatif`
  ADD PRIMARY KEY (`id_normalisasi_alternatif`),
  ADD KEY `id_alternatif_pertama` (`id_alternatif_pertama`),
  ADD KEY `id_alternatif_kedua` (`id_alternatif_kedua`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `ahp_normalisasi_kriteria`
--
ALTER TABLE `ahp_normalisasi_kriteria`
  ADD PRIMARY KEY (`id_normalisasi_kriteria`),
  ADD KEY `id_kriteria_pertama` (`id_kriteria_pertama`),
  ADD KEY `id_kriteria_kedua` (`id_kriteria_kedua`);

--
-- Indexes for table `ahp_pengguna`
--
ALTER TABLE `ahp_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `ahp_rangking`
--
ALTER TABLE `ahp_rangking`
  ADD PRIMARY KEY (`kriteria`,`alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahp_analisa_alternatif`
--
ALTER TABLE `ahp_analisa_alternatif`
  MODIFY `id_analisa_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2167;

--
-- AUTO_INCREMENT for table `ahp_analisa_kriteria`
--
ALTER TABLE `ahp_analisa_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=859;

--
-- AUTO_INCREMENT for table `ahp_data_alternatif`
--
ALTER TABLE `ahp_data_alternatif`
  MODIFY `id_alternatif` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ahp_data_responden`
--
ALTER TABLE `ahp_data_responden`
  MODIFY `id_responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ahp_jum_alt_kri`
--
ALTER TABLE `ahp_jum_alt_kri`
  MODIFY `id_jum_alt_kri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ahp_matriks_perbandingan_alternatif`
--
ALTER TABLE `ahp_matriks_perbandingan_alternatif`
  MODIFY `id_matriks_perbandingan_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `ahp_matriks_perbandingan_kriteria`
--
ALTER TABLE `ahp_matriks_perbandingan_kriteria`
  MODIFY `id_matriks_perbandingan_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `ahp_nilai`
--
ALTER TABLE `ahp_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ahp_normalisasi_alternatif`
--
ALTER TABLE `ahp_normalisasi_alternatif`
  MODIFY `id_normalisasi_alternatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ahp_normalisasi_kriteria`
--
ALTER TABLE `ahp_normalisasi_kriteria`
  MODIFY `id_normalisasi_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `ahp_pengguna`
--
ALTER TABLE `ahp_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ahp_analisa_alternatif`
--
ALTER TABLE `ahp_analisa_alternatif`
  ADD CONSTRAINT `ahp_analisa_alternatif_ibfk_1` FOREIGN KEY (`alternatif_pertama`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_analisa_alternatif_ibfk_2` FOREIGN KEY (`alternatif_kedua`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_analisa_alternatif_ibfk_3` FOREIGN KEY (`id_kriteria`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ahp_analisa_kriteria`
--
ALTER TABLE `ahp_analisa_kriteria`
  ADD CONSTRAINT `ahp_analisa_kriteria_ibfk_1` FOREIGN KEY (`kriteria_pertama`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_analisa_kriteria_ibfk_2` FOREIGN KEY (`kriteria_kedua`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ahp_jum_alt_kri`
--
ALTER TABLE `ahp_jum_alt_kri`
  ADD CONSTRAINT `ahp_jum_alt_kri_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_jum_alt_kri_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ahp_matriks_perbandingan_alternatif`
--
ALTER TABLE `ahp_matriks_perbandingan_alternatif`
  ADD CONSTRAINT `ahp_matriks_perbandingan_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif_kedua`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_matriks_perbandingan_alternatif_ibfk_2` FOREIGN KEY (`id_alternatif_pertama`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_matriks_perbandingan_alternatif_ibfk_3` FOREIGN KEY (`id_kriteria`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ahp_matriks_perbandingan_kriteria`
--
ALTER TABLE `ahp_matriks_perbandingan_kriteria`
  ADD CONSTRAINT `ahp_matriks_perbandingan_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria_pertama`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_matriks_perbandingan_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria_kedua`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ahp_normalisasi_alternatif`
--
ALTER TABLE `ahp_normalisasi_alternatif`
  ADD CONSTRAINT `ahp_normalisasi_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif_pertama`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_normalisasi_alternatif_ibfk_2` FOREIGN KEY (`id_alternatif_kedua`) REFERENCES `ahp_data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_normalisasi_alternatif_ibfk_3` FOREIGN KEY (`id_kriteria`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ahp_normalisasi_kriteria`
--
ALTER TABLE `ahp_normalisasi_kriteria`
  ADD CONSTRAINT `ahp_normalisasi_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria_pertama`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_normalisasi_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria_kedua`) REFERENCES `ahp_data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
