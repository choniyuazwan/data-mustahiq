-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 04:10 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` int(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `jenisprogram` varchar(99) DEFAULT NULL,
  `jeniskelamin` varchar(9) NOT NULL,
  `tempatlahir` varchar(99) NOT NULL,
  `tanggallahir` varchar(10) NOT NULL,
  `kecamatan` varchar(99) NOT NULL,
  `kelurahan` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  `fotowajah` varchar(99) NOT NULL,
  `fotorumah` varchar(99) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `nik`, `nama`, `jenisprogram`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `kecamatan`, `kelurahan`, `alamat`, `fotowajah`, `fotorumah`, `keterangan`) VALUES
(2, '1111111111111111', 'ada ada', 'Bogor Cerdas', 'Perempuan', 'Depok', '04/12/2018', 'Bogor-Tengah', 'Babakan', '', '', '', ''),
(3, '2222222222222222', 'dsa yang di edit', NULL, 'Laki-laki', 'Depok', '04/16/2018', 'Bogor-Tengah', 'Babakan Pasar', '', '', '', ''),
(4, '2222223333333333', '', NULL, 'Laki-laki', '', '', 'Bogor-Timur', 'Sindangrasa', '', '', '', ''),
(6, '2121212121122112', '', NULL, 'Laki-laki', '', '', 'Bogor-Tengah', 'Babakan', '', 'Screenshot_(36).png', 'Screenshot_(39).png', ''),
(8, '7744772288557733', 'tes 2', NULL, 'Laki-laki', '', '', 'Bogor-Tengah', 'Babakan', '', '', '', ''),
(9, '8877667788998877', 'test 3', NULL, 'Laki-laki', '', '', 'Bogor-Tengah', 'Babakan', '', 'kacang_almond.jpg', 'kurma_ajwa.jpg', ''),
(10, '7777777777777777', '', NULL, 'Laki-laki', '', '', 'Bogor-Selatan', 'Mulyaharja', '', '', '', ''),
(11, '3333333333333333', '33', 'Bogor Sehat, Bogor Cerdas, Bogor Peduli, Bogor Berdakwah, Bogor Berkah', 'Laki-laki', '', '', 'Bogor-Tengah', 'Babakan', '', '', '', ''),
(12, '2223333333333333', 'bogor utara', 'Bogor Sehat, Bogor Cerdas, Bogor Peduli, Bogor Berdakwah, Bogor Berkah', 'Laki-laki', '', '', 'Bogor-Utara', 'Bantarjati', '', '', '', ''),
(13, '5555555555555554', 'tes terakhir berhasil', 'Bogor Sehat, Bogor Cerdas, Bogor Peduli, Bogor Berdakwah, Bogor Berkah', 'Perempuan', 'Depok', '08/30/2018', 'Bogor-Barat', 'Sindang Barang', 'selasa ', 'kurma_ajwa.jpg', 'kacang_pistachio.jpg', 'tes terakhir'),
(14, '1222222222222222', 'tes bogor tengah', NULL, 'Laki-laki', '', '', 'Bogor-Tengah', 'Kebon Kelapa', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(4, 'petugas', 'petugas', 'user'),
(6, 'das', 'ew ssdfsas3', 'user'),
(9, 'bukanadmin', 'admin', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
