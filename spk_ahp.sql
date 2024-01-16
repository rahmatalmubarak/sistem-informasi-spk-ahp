-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 05:18 PM
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
(256, 'R1', 1, 9, 0.47368421052632, 3, 'C1'),
(257, 'R1', 1, 9, 0.89010989010989, 2, 'C1'),
(258, 'R1', 2, 9, 0.47368421052632, 3, 'C1'),
(259, 'R1', 3, 0.11111111111111, 0.09090909090909, 1, 'C1'),
(260, 'R1', 2, 0.11111111111111, 0.09090909090909, 1, 'C1'),
(261, 'R1', 3, 0.11111111111111, 0.010989010989011, 2, 'C1'),
(262, 'R1', 1, 1, 0.81818181818182, 1, 'C1'),
(263, 'R1', 2, 1, 0.098901098901099, 2, 'C1'),
(264, 'R1', 3, 1, 0.052631578947368, 3, 'C1'),
(265, 'R2', 1, 9, 0.47368421052632, 3, 'C1'),
(266, 'R2', 1, 9, 0.89010989010989, 2, 'C1'),
(267, 'R2', 2, 9, 0.47368421052632, 3, 'C1'),
(268, 'R2', 3, 0.11111111111111, 0.09090909090909, 1, 'C1'),
(269, 'R2', 2, 0.11111111111111, 0.09090909090909, 1, 'C1'),
(270, 'R2', 3, 0.11111111111111, 0.010989010989011, 2, 'C1'),
(271, 'R2', 1, 1, 0.81818181818182, 1, 'C1'),
(272, 'R2', 2, 1, 0.098901098901099, 2, 'C1'),
(273, 'R2', 3, 1, 0.052631578947368, 3, 'C1'),
(274, 'R3', 1, 9, 0, 3, 'C1'),
(275, 'R3', 1, 9, 0, 2, 'C1'),
(276, 'R3', 2, 9, 0, 3, 'C1'),
(277, 'R3', 3, 0.11111111111111, 0, 1, 'C1'),
(278, 'R3', 2, 0.11111111111111, 0, 1, 'C1'),
(279, 'R3', 3, 0.11111111111111, 0, 2, 'C1'),
(280, 'R3', 1, 1, 0, 1, 'C1'),
(281, 'R3', 2, 1, 0, 2, 'C1'),
(282, 'R3', 3, 1, 0, 3, 'C1'),
(283, 'R3', 1, 9, 0, 3, 'C2'),
(284, 'R3', 1, 9, 0, 2, 'C2'),
(285, 'R3', 2, 9, 0, 3, 'C2'),
(286, 'R3', 3, 0.11111111111111, 0, 1, 'C2'),
(287, 'R3', 2, 0.11111111111111, 0, 1, 'C2'),
(288, 'R3', 3, 0.11111111111111, 0, 2, 'C2'),
(289, 'R3', 1, 1, 0, 1, 'C2'),
(290, 'R3', 2, 1, 0, 2, 'C2'),
(291, 'R3', 3, 1, 0, 3, 'C2'),
(292, 'R2', 1, 9, 0, 3, 'C2'),
(293, 'R2', 1, 9, 0, 2, 'C2'),
(294, 'R2', 2, 9, 0, 3, 'C2'),
(295, 'R2', 3, 0.11111111111111, 0, 1, 'C2'),
(296, 'R2', 2, 0.11111111111111, 0, 1, 'C2'),
(297, 'R2', 3, 0.11111111111111, 0, 2, 'C2'),
(298, 'R2', 1, 1, 0, 1, 'C2'),
(299, 'R2', 2, 1, 0, 2, 'C2'),
(300, 'R2', 3, 1, 0, 3, 'C2'),
(301, 'R1', 1, 9, 0, 3, 'C2'),
(302, 'R1', 1, 9, 0, 2, 'C2'),
(303, 'R1', 2, 9, 0, 3, 'C2'),
(304, 'R1', 3, 0.11111111111111, 0, 1, 'C2'),
(305, 'R1', 2, 0.11111111111111, 0, 1, 'C2'),
(306, 'R1', 3, 0.11111111111111, 0, 2, 'C2'),
(307, 'R1', 1, 1, 0, 1, 'C2'),
(308, 'R1', 2, 1, 0, 2, 'C2'),
(309, 'R1', 3, 1, 0, 3, 'C2'),
(310, 'R1', 1, 9, 0, 3, 'C3'),
(311, 'R1', 1, 9, 0, 2, 'C3'),
(312, 'R1', 2, 9, 0, 3, 'C3'),
(313, 'R1', 3, 0.11111111111111, 0, 1, 'C3'),
(314, 'R1', 2, 0.11111111111111, 0, 1, 'C3'),
(315, 'R1', 3, 0.11111111111111, 0, 2, 'C3'),
(316, 'R1', 1, 1, 0, 1, 'C3'),
(317, 'R1', 2, 1, 0, 2, 'C3'),
(318, 'R1', 3, 1, 0, 3, 'C3'),
(319, 'R2', 1, 9, 0, 3, 'C3'),
(320, 'R2', 1, 9, 0, 2, 'C3'),
(321, 'R2', 2, 9, 0, 3, 'C3'),
(322, 'R2', 3, 0.11111111111111, 0, 1, 'C3'),
(323, 'R2', 2, 0.11111111111111, 0, 1, 'C3'),
(324, 'R2', 3, 0.11111111111111, 0, 2, 'C3'),
(325, 'R2', 1, 1, 0, 1, 'C3'),
(326, 'R2', 2, 1, 0, 2, 'C3'),
(327, 'R2', 3, 1, 0, 3, 'C3'),
(328, 'R3', 1, 9, 0, 3, 'C3'),
(329, 'R3', 1, 9, 0, 2, 'C3'),
(330, 'R3', 2, 9, 0, 3, 'C3'),
(331, 'R3', 3, 0.11111111111111, 0, 1, 'C3'),
(332, 'R3', 2, 0.11111111111111, 0, 1, 'C3'),
(333, 'R3', 3, 0.11111111111111, 0, 2, 'C3'),
(334, 'R3', 1, 1, 0, 1, 'C3'),
(335, 'R3', 2, 1, 0, 2, 'C3'),
(336, 'R3', 3, 1, 0, 3, 'C3'),
(337, 'R3', 1, 9, 0.47368421052632, 3, 'C4'),
(338, 'R3', 1, 9, 0.89010989010989, 2, 'C4'),
(339, 'R3', 2, 9, 0.47368421052632, 3, 'C4'),
(340, 'R3', 3, 0.11111111111111, 0.09090909090909, 1, 'C4'),
(341, 'R3', 2, 0.11111111111111, 0.09090909090909, 1, 'C4'),
(342, 'R3', 3, 0.11111111111111, 0.010989010989011, 2, 'C4'),
(343, 'R3', 1, 1, 0.81818181818182, 1, 'C4'),
(344, 'R3', 2, 1, 0.098901098901099, 2, 'C4'),
(345, 'R3', 3, 1, 0.052631578947368, 3, 'C4'),
(346, 'R2', 1, 9, 0.47368421052632, 3, 'C4'),
(347, 'R2', 1, 9, 0.89010989010989, 2, 'C4'),
(348, 'R2', 2, 9, 0.47368421052632, 3, 'C4'),
(349, 'R2', 3, 0.11111111111111, 0.09090909090909, 1, 'C4'),
(350, 'R2', 2, 0.11111111111111, 0.09090909090909, 1, 'C4'),
(351, 'R2', 3, 0.11111111111111, 0.010989010989011, 2, 'C4'),
(352, 'R2', 1, 1, 0.81818181818182, 1, 'C4'),
(353, 'R2', 2, 1, 0.098901098901099, 2, 'C4'),
(354, 'R2', 3, 1, 0.052631578947368, 3, 'C4'),
(355, 'R1', 1, 9, 0.47368421052632, 3, 'C4'),
(356, 'R1', 1, 9, 0.89010989010989, 2, 'C4'),
(357, 'R1', 2, 9, 0.47368421052632, 3, 'C4'),
(358, 'R1', 3, 0.11111111111111, 0.09090909090909, 1, 'C4'),
(359, 'R1', 2, 0.11111111111111, 0.09090909090909, 1, 'C4'),
(360, 'R1', 3, 0.11111111111111, 0.010989010989011, 2, 'C4'),
(361, 'R1', 1, 1, 0.81818181818182, 1, 'C4'),
(362, 'R1', 2, 1, 0.098901098901099, 2, 'C4'),
(363, 'R1', 3, 1, 0.052631578947368, 3, 'C4');

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
(163, 'R1', 'C1', 9, 0.32830875731356, 'C4'),
(164, 'R1', 'C1', 9, 0.48070779586382, 'C3'),
(165, 'R1', 'C1', 9, 0.89716804847688, 'C2'),
(166, 'R1', 'C2', 9, 0.32830875731356, 'C4'),
(167, 'R1', 'C2', 9, 0.48070779586382, 'C3'),
(168, 'R1', 'C3', 9, 0.32830875731356, 'C4'),
(169, 'R1', 'C4', 0.11111111111111, 0.082873068466921, 'C1'),
(170, 'R1', 'C3', 0.11111111111111, 0.082873068466921, 'C1'),
(171, 'R1', 'C2', 0.11111111111111, 0.082873068466921, 'C1'),
(172, 'R1', 'C4', 0.11111111111111, 0.011076148746628, 'C2'),
(173, 'R1', 'C3', 0.11111111111111, 0.011076148746628, 'C2'),
(174, 'R1', 'C4', 0.11111111111111, 0.0059346641464668, 'C3'),
(175, 'R1', 'C1', 1, 0.7458576162023, 'C1'),
(176, 'R1', 'C2', 1, 0.099685338719653, 'C2'),
(177, 'R1', 'C3', 1, 0.053411977318202, 'C3'),
(178, 'R1', 'C4', 1, 0.036478750812618, 'C4'),
(179, '', 'C1', 1, 0.7458576162023, 'C1'),
(180, '', 'C2', 1, 0.099685338719653, 'C2'),
(181, '', 'C3', 1, 0.053411977318202, 'C3'),
(182, '', 'C4', 1, 0.036478750812618, 'C4'),
(183, 'R3', 'C1', 9, 0.32830875731356, 'C4'),
(184, 'R3', 'C1', 9, 0.48070779586382, 'C3'),
(185, 'R3', 'C1', 9, 0.89716804847688, 'C2'),
(186, 'R3', 'C2', 9, 0.32830875731356, 'C4'),
(187, 'R3', 'C2', 9, 0.48070779586382, 'C3'),
(188, 'R3', 'C3', 9, 0.32830875731356, 'C4'),
(189, 'R3', 'C4', 0.11111111111111, 0.082873068466921, 'C1'),
(190, 'R3', 'C3', 0.11111111111111, 0.082873068466921, 'C1'),
(191, 'R3', 'C2', 0.11111111111111, 0.082873068466921, 'C1'),
(192, 'R3', 'C4', 0.11111111111111, 0.011076148746628, 'C2'),
(193, 'R3', 'C3', 0.11111111111111, 0.011076148746628, 'C2'),
(194, 'R3', 'C4', 0.11111111111111, 0.0059346641464668, 'C3'),
(195, 'R3', 'C1', 1, 0.7458576162023, 'C1'),
(196, 'R3', 'C2', 1, 0.099685338719653, 'C2'),
(197, 'R3', 'C3', 1, 0.053411977318202, 'C3'),
(198, 'R3', 'C4', 1, 0.036478750812618, 'C4'),
(199, 'R2', 'C1', 9, 0.32830875731356, 'C4'),
(200, 'R2', 'C1', 9, 0.48070779586382, 'C3'),
(201, 'R2', 'C1', 9, 0.89716804847688, 'C2'),
(202, 'R2', 'C2', 9, 0.32830875731356, 'C4'),
(203, 'R2', 'C2', 9, 0.48070779586382, 'C3'),
(204, 'R2', 'C3', 9, 0.32830875731356, 'C4'),
(205, 'R2', 'C4', 0.11111111111111, 0.082873068466921, 'C1'),
(206, 'R2', 'C3', 0.11111111111111, 0.082873068466921, 'C1'),
(207, 'R2', 'C2', 0.11111111111111, 0.082873068466921, 'C1'),
(208, 'R2', 'C4', 0.11111111111111, 0.011076148746628, 'C2'),
(209, 'R2', 'C3', 0.11111111111111, 0.011076148746628, 'C2'),
(210, 'R2', 'C4', 0.11111111111111, 0.0059346641464668, 'C3'),
(211, 'R2', 'C1', 1, 0.7458576162023, 'C1'),
(212, 'R2', 'C2', 1, 0.099685338719653, 'C2'),
(213, 'R2', 'C3', 1, 0.053411977318202, 'C3'),
(214, 'R2', 'C4', 1, 0.036478750812618, 'C4');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_data_alternatif`
--

CREATE TABLE `ahp_data_alternatif` (
  `id_alternatif` int(2) NOT NULL,
  `nama_alternatif` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `hasil_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ahp_data_alternatif`
--

INSERT INTO `ahp_data_alternatif` (`id_alternatif`, `nama_alternatif`, `jenis_kelamin`, `jabatan`, `hasil_akhir`) VALUES
(1, 'Ahmadul Khalid', '', '', 0.733053438952965),
(2, 'M. Syahrul Ridha', '', '', 0.22290660850014518),
(3, 'Amelia Putri', '', '', 0.0519155656059842);

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
('C1', 'Indeks Prestasi Akademik', 1.3407384710928099, 0.6232295592132293),
('C2', 'Prestasi Akademik', 10.031565452291039, 0.23649309383165498),
('C3', 'Prestasi Non Akademik', 18.72239243348927, 0.11387860252724115),
('C4', 'Berkelakuan Baik', 27.413219414687497, 0.03427435748696303);

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
(13, 1, 'C1', 1.22222222222222, 0.7273253062726767, 0.45329063003295),
(14, 2, 'C1', 10.11111111111111, 0.22116480011216966, 0.13783644088739),
(15, 3, 'C1', 19, 0.05150989361515634, 0.032102488292894),
(16, 1, 'C2', 1.22222222222222, 0.7273253062726767, 0.17200741190248),
(17, 2, 'C2', 10.11111111111111, 0.22116480011216966, 0.052303947825187),
(18, 3, 'C2', 19, 0.05150989361515634, 0.012181734103988),
(19, 1, 'C3', 1.22222222222222, 0.7273253062726767, 0.08282678946103),
(20, 2, 'C3', 10.11111111111111, 0.22116480011216966, 0.025185938364991),
(21, 3, 'C3', 19, 0.05150989361515634, 0.0058658747012209),
(22, 1, 'C4', 1.22222222222222, 0.7273253062726767, 0.024928607556505),
(23, 2, 'C4', 10.11111111111111, 0.22116480011216966, 0.0075802814225772),
(24, 3, 'C4', 19, 0.05150989361515634, 0.0017654685078813);

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
(19, 1, 1, 1, 'C1'),
(20, 1, 2, 9, 'C1'),
(21, 1, 3, 9, 'C1'),
(22, 2, 1, 2, 'C1'),
(23, 2, 2, 1, 'C1'),
(24, 2, 3, 9, 'C1'),
(25, 3, 1, 3, 'C1'),
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
(36, 3, 3, 1, 'C3');

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
(228, 'C1', 'C2', 8.8044064715625),
(229, 'C1', 'C3', 8.8044064715625),
(230, 'C1', 'C4', 8.8044064715625),
(231, 'C2', 'C1', 0.11357949036427),
(232, 'C2', 'C2', 1),
(233, 'C2', 'C3', 8.8044064715625),
(234, 'C2', 'C4', 8.8044064715625),
(235, 'C3', 'C1', 0.11357949036427),
(236, 'C3', 'C2', 0.11357949036427),
(237, 'C3', 'C3', 1),
(238, 'C3', 'C4', 8.8044064715625),
(239, 'C4', 'C1', 0.11357949036427),
(240, 'C4', 'C2', 0.11357949036427),
(241, 'C4', 'C3', 0.11357949036427),
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
(33, 'C1', 'C1', 0.7458576162023),
(34, 'C1', 'C2', 0.87767024134321),
(35, 'C1', 'C3', 0.47026075875932),
(36, 'C1', 'C4', 0.32117374972913),
(37, 'C2', 'C1', 0.084714127932567),
(38, 'C2', 'C2', 0.099685338719653),
(39, 'C2', 'C3', 0.47026075875932),
(40, 'C2', 'C4', 0.32117374972913),
(41, 'C3', 'C1', 0.084714127932567),
(42, 'C3', 'C2', 0.011322209968568),
(43, 'C3', 'C3', 0.053411977318202),
(44, 'C3', 'C4', 0.32117374972913),
(45, 'C4', 'C1', 0.084714127932567),
(46, 'C4', 'C2', 0.011322209968568),
(47, 'C4', 'C3', 0.0060665051631493),
(48, 'C4', 'C4', 0.036478750812618),
(49, 'C1', 'C1', 0.7458576162023),
(50, 'C1', 'C2', 0.87767024134321),
(51, 'C1', 'C3', 0.47026075875932),
(52, 'C1', 'C4', 0.32117374972913),
(53, 'C2', 'C1', 0.084714127932567),
(54, 'C2', 'C2', 0.099685338719653),
(55, 'C2', 'C3', 0.47026075875932),
(56, 'C2', 'C4', 0.32117374972913),
(57, 'C3', 'C1', 0.084714127932567),
(58, 'C3', 'C2', 0.011322209968568),
(59, 'C3', 'C3', 0.053411977318202),
(60, 'C3', 'C4', 0.32117374972913),
(61, 'C4', 'C1', 0.084714127932567),
(62, 'C4', 'C2', 0.011322209968568),
(63, 'C4', 'C3', 0.0060665051631493),
(64, 'C4', 'C4', 0.036478750812618),
(65, 'C1', 'C1', 0.7458576162023),
(66, 'C1', 'C2', 0.87767024134321),
(67, 'C1', 'C3', 0.47026075875932),
(68, 'C1', 'C4', 0.32117374972913),
(69, 'C2', 'C1', 0.084714127932567),
(70, 'C2', 'C2', 0.099685338719653),
(71, 'C2', 'C3', 0.47026075875932),
(72, 'C2', 'C4', 0.32117374972913),
(73, 'C3', 'C1', 0.084714127932567),
(74, 'C3', 'C2', 0.011322209968568),
(75, 'C3', 'C3', 0.053411977318202),
(76, 'C3', 'C4', 0.32117374972913),
(77, 'C4', 'C1', 0.084714127932567),
(78, 'C4', 'C2', 0.011322209968568),
(79, 'C4', 'C3', 0.0060665051631493),
(80, 'C4', 'C4', 0.036478750812618),
(81, 'C1', 'C1', 0.7458576162023),
(82, 'C1', 'C2', 0.87767024134321),
(83, 'C1', 'C3', 0.47026075875932),
(84, 'C1', 'C4', 0.32117374972913),
(85, 'C2', 'C1', 0.084714127932567),
(86, 'C2', 'C2', 0.099685338719653),
(87, 'C2', 'C3', 0.47026075875932),
(88, 'C2', 'C4', 0.32117374972913),
(89, 'C3', 'C1', 0.084714127932567),
(90, 'C3', 'C2', 0.011322209968568),
(91, 'C3', 'C3', 0.053411977318202),
(92, 'C3', 'C4', 0.32117374972913),
(93, 'C4', 'C1', 0.084714127932567),
(94, 'C4', 'C2', 0.011322209968568),
(95, 'C4', 'C3', 0.0060665051631493),
(96, 'C4', 'C4', 0.036478750812618),
(97, 'C1', 'C1', 0.7458576162023),
(98, 'C1', 'C2', 0.87767024134321),
(99, 'C1', 'C3', 0.47026075875932),
(100, 'C1', 'C4', 0.32117374972913),
(101, 'C2', 'C1', 0.084714127932567),
(102, 'C2', 'C2', 0.099685338719653),
(103, 'C2', 'C3', 0.47026075875932),
(104, 'C2', 'C4', 0.32117374972913),
(105, 'C3', 'C1', 0.084714127932567),
(106, 'C3', 'C2', 0.011322209968568),
(107, 'C3', 'C3', 0.053411977318202),
(108, 'C3', 'C4', 0.32117374972913),
(109, 'C4', 'C1', 0.084714127932567),
(110, 'C4', 'C2', 0.011322209968568),
(111, 'C4', 'C3', 0.0060665051631493),
(112, 'C4', 'C4', 0.036478750812618),
(113, 'C1', 'C1', 0.7458576162023),
(114, 'C1', 'C2', 0.87767024134321),
(115, 'C1', 'C3', 0.47026075875932),
(116, 'C1', 'C4', 0.32117374972913),
(117, 'C2', 'C1', 0.084714127932567),
(118, 'C2', 'C2', 0.099685338719653),
(119, 'C2', 'C3', 0.47026075875932),
(120, 'C2', 'C4', 0.32117374972913),
(121, 'C3', 'C1', 0.084714127932567),
(122, 'C3', 'C2', 0.011322209968568),
(123, 'C3', 'C3', 0.053411977318202),
(124, 'C3', 'C4', 0.32117374972913),
(125, 'C4', 'C1', 0.084714127932567),
(126, 'C4', 'C2', 0.011322209968568),
(127, 'C4', 'C3', 0.0060665051631493),
(128, 'C4', 'C4', 0.036478750812618),
(129, 'C1', 'C1', 0.7458576162023),
(130, 'C1', 'C2', 0.87767024134321),
(131, 'C1', 'C3', 0.47026075875932),
(132, 'C1', 'C4', 0.32117374972913),
(133, 'C2', 'C1', 0.084714127932567),
(134, 'C2', 'C2', 0.099685338719653),
(135, 'C2', 'C3', 0.47026075875932),
(136, 'C2', 'C4', 0.32117374972913),
(137, 'C3', 'C1', 0.084714127932567),
(138, 'C3', 'C2', 0.011322209968568),
(139, 'C3', 'C3', 0.053411977318202),
(140, 'C3', 'C4', 0.32117374972913),
(141, 'C4', 'C1', 0.084714127932567),
(142, 'C4', 'C2', 0.011322209968568),
(143, 'C4', 'C3', 0.0060665051631493),
(144, 'C4', 'C4', 0.036478750812618),
(145, 'C1', 'C1', 0.7458576162023),
(146, 'C1', 'C2', 0.87767024134321),
(147, 'C1', 'C3', 0.47026075875932),
(148, 'C1', 'C4', 0.32117374972913),
(149, 'C2', 'C1', 0.084714127932567),
(150, 'C2', 'C2', 0.099685338719653),
(151, 'C2', 'C3', 0.47026075875932),
(152, 'C2', 'C4', 0.32117374972913),
(153, 'C3', 'C1', 0.084714127932567),
(154, 'C3', 'C2', 0.011322209968568),
(155, 'C3', 'C3', 0.053411977318202),
(156, 'C3', 'C4', 0.32117374972913),
(157, 'C4', 'C1', 0.084714127932567),
(158, 'C4', 'C2', 0.011322209968568),
(159, 'C4', 'C3', 0.0060665051631493),
(160, 'C4', 'C4', 0.036478750812618),
(161, 'C1', 'C1', 0.7458576162023),
(162, 'C1', 'C2', 0.87767024134321),
(163, 'C1', 'C3', 0.47026075875932),
(164, 'C1', 'C4', 0.32117374972913),
(165, 'C2', 'C1', 0.084714127932567),
(166, 'C2', 'C2', 0.099685338719653),
(167, 'C2', 'C3', 0.47026075875932),
(168, 'C2', 'C4', 0.32117374972913),
(169, 'C3', 'C1', 0.084714127932567),
(170, 'C3', 'C2', 0.011322209968568),
(171, 'C3', 'C3', 0.053411977318202),
(172, 'C3', 'C4', 0.32117374972913),
(173, 'C4', 'C1', 0.084714127932567),
(174, 'C4', 'C2', 0.011322209968568),
(175, 'C4', 'C3', 0.0060665051631493),
(176, 'C4', 'C4', 0.036478750812618);

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
  ADD KEY `ahp_analisa_alternatif_ibfk_1` (`alternatif_pertama`),
  ADD KEY `ahp_analisa_alternatif_ibfk_2` (`alternatif_kedua`),
  ADD KEY `ahp_analisa_alternatif_ibfk_3` (`id_kriteria`);

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
  MODIFY `id_analisa_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `ahp_analisa_kriteria`
--
ALTER TABLE `ahp_analisa_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `ahp_data_alternatif`
--
ALTER TABLE `ahp_data_alternatif`
  MODIFY `id_alternatif` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ahp_jum_alt_kri`
--
ALTER TABLE `ahp_jum_alt_kri`
  MODIFY `id_jum_alt_kri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ahp_matriks_perbandingan_alternatif`
--
ALTER TABLE `ahp_matriks_perbandingan_alternatif`
  MODIFY `id_matriks_perbandingan_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
