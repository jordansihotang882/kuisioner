-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 03:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuisioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `p1` varchar(10) NOT NULL,
  `p2` varchar(10) NOT NULL,
  `p3` varchar(10) NOT NULL,
  `p4` varchar(10) NOT NULL,
  `p5` varchar(10) NOT NULL,
  `p6` varchar(10) NOT NULL,
  `p7` varchar(10) NOT NULL,
  `p8` varchar(10) NOT NULL,
  `p9` varchar(10) NOT NULL,
  `p10` varchar(10) NOT NULL,
  `p11` varchar(10) NOT NULL,
  `p12` varchar(10) NOT NULL,
  `p13` varchar(10) NOT NULL,
  `p14` varchar(10) NOT NULL,
  `p15` varchar(10) NOT NULL,
  `p16` varchar(10) NOT NULL,
  `p17` varchar(10) NOT NULL,
  `p18` varchar(10) NOT NULL,
  `p19` varchar(10) NOT NULL,
  `p20` varchar(10) NOT NULL,
  `p21` varchar(10) NOT NULL,
  `p22` varchar(10) NOT NULL,
  `p23` varchar(10) NOT NULL,
  `p24` varchar(10) NOT NULL,
  `p25` varchar(10) NOT NULL,
  `p26` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `nama`, `status`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`) VALUES
(1, 'Joko', 'mahasiswa', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuisioner`
--

CREATE TABLE `tb_kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `kuisioner` varchar(100) NOT NULL,
  `jumlah_responden` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemakaian`
--

CREATE TABLE `tb_pemakaian` (
  `id_pemakaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_kuisioner` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `id_kuisioner`, `pertanyaan`) VALUES
(1, 2, 'p7'),
(2, 2, 'hhh'),
(3, 2, 'dds'),
(6, 2, 'p2'),
(7, 2, 'p3'),
(8, 2, 'p4'),
(9, 2, 'p5'),
(10, 2, 'p6'),
(11, 2, 'p7'),
(12, 2, 'p8'),
(13, 2, 'p9'),
(14, 2, 'p10'),
(15, 2, 'p11'),
(16, 2, 'p12'),
(17, 2, 'p13'),
(18, 2, 'p14'),
(19, 2, 'p15'),
(20, 2, 'p16'),
(21, 2, 'p17'),
(22, 2, 'p18'),
(23, 2, 'p19'),
(24, 2, 'p20'),
(25, 2, 'p21'),
(26, 2, 'p22'),
(27, 2, 'p23'),
(28, 2, 'p24'),
(29, 2, 'p25'),
(30, 2, 'p26'),
(31, 1, 'p1'),
(32, 1, 'p2'),
(33, 1, 'p3'),
(34, 1, 'p4'),
(35, 1, 'p5'),
(36, 1, 'p7'),
(37, 1, 'p8'),
(38, 1, 'p6'),
(39, 1, 'P9'),
(40, 1, 'p10'),
(41, 1, 'p11'),
(42, 1, 'p12'),
(43, 1, 'p13'),
(44, 1, 'p14'),
(45, 1, 'p15'),
(46, 1, 'p16'),
(47, 1, 'p17'),
(48, 1, 'p18'),
(49, 1, 'p19'),
(50, 1, 'p20'),
(51, 1, 'p21'),
(52, 1, 'p22'),
(53, 1, 'p23'),
(54, 1, 'p24'),
(55, 1, 'p25'),
(56, 1, 'p26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilihan`
--

CREATE TABLE `tb_pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `pilihan1` varchar(50) NOT NULL,
  `pilihan2` varchar(50) NOT NULL,
  `nmr_pertanyaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pilihan`
--

INSERT INTO `tb_pilihan` (`id_pilihan`, `id_pertanyaan`, `pilihan1`, `pilihan2`, `nmr_pertanyaan`) VALUES
(29, 31, 'Menyusahkan', 'Menyenangkan', ''),
(30, 32, 'Tak Dapat Dipahami', ' Dapat Dipahami', ''),
(31, 33, 'Kreatif', 'Monoton', ''),
(32, 34, 'Mudah Dipelajari', 'Sulit Dipelajari', ''),
(33, 35, 'Bermanfaat', 'Kurang', ''),
(34, 38, 'Membosankan', 'Mengasyikkan', ''),
(35, 36, 'Tidak Menarik', 'Menarik', ''),
(36, 37, 'tidak dapat diprediksi', 'dapat diprediksi', ''),
(37, 39, 'Cepat', 'Lambat', ''),
(38, 40, 'Berdaya Cipta', 'Konvensional', ''),
(39, 15, 'Menghalangi', 'Mendukung', ''),
(40, 16, 'Baik', 'Buruk', ''),
(41, 43, 'Rumit', 'Sederhana', ''),
(42, 44, 'Tidak Disukai', 'Menggembirakan', ''),
(43, 45, 'Lazim', 'Terdepan', ''),
(44, 46, 'Tidak Nyaman', 'Nyaman', ''),
(45, 47, 'Aman', 'Tidak Aman', ''),
(46, 48, 'Memotivasi', 'Tidak Memotivasi', ''),
(47, 49, 'Memenuhi Ekspektasi', 'Tidak Memenuhi Ekspektasi', ''),
(48, 50, 'Tidak Efisien', 'Efisien', ''),
(49, 51, 'Jelas', 'Membingungkan', ''),
(50, 52, 'Tidak Praktis', 'Praktis', ''),
(51, 53, 'Terorganisasi', 'Berantakan', ''),
(52, 54, 'Atraktif', 'Tidak Atraktif', ''),
(53, 55, 'Ramah Pengguna', 'Tidak Ramah Pengguna', ''),
(54, 56, 'Konservatif', 'Inovatif', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_responden`
--

CREATE TABLE `tb_responden` (
  `id_responden` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_responden`
--

INSERT INTO `tb_responden` (`id_responden`, `nama`, `npm`, `alamat`, `email`, `password`) VALUES
(12, 'reflando', '123345', 'Parbubu I', 'reflando@gmail.com', 'reflando');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `tb_pemakaian`
--
ALTER TABLE `tb_pemakaian`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indexes for table `tb_responden`
--
ALTER TABLE `tb_responden`
  ADD PRIMARY KEY (`id_responden`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pemakaian`
--
ALTER TABLE `tb_pemakaian`
  MODIFY `id_pemakaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_responden`
--
ALTER TABLE `tb_responden`
  MODIFY `id_responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
