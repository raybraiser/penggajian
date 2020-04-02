-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 11:38 AM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.3.14-6+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aturan_gaji`
--

CREATE TABLE `tbl_aturan_gaji` (
  `id_aturan_gaji` int(50) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `masa_kerja` varchar(200) NOT NULL,
  `insentif` varchar(200) NOT NULL,
  `bonus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aturan_gaji`
--

INSERT INTO `tbl_aturan_gaji` (`id_aturan_gaji`, `jabatan`, `masa_kerja`, `insentif`, `bonus`) VALUES
(5, '10', '1', '200000', '200000'),
(6, '11', '1', '100000', '100000'),
(7, '12', '1', '100000', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id_gaji` int(50) NOT NULL,
  `kode_penggajian` varchar(200) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `nominal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_gaji`, `kode_penggajian`, `nip`, `nama_karyawan`, `tanggal_penerimaan`, `nominal`) VALUES
(1, 'G001', '12312312', 'Braiser Pangemanan', '2020-04-02', '2200000'),
(2, 'G001', '12312312', 'Braiser Pangemanan', '2020-04-02', '3400000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(20) NOT NULL,
  `kode_jabatan` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `standar_gaji` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `kode_jabatan`, `jabatan`, `standar_gaji`, `keterangan`) VALUES
(10, 'J001', 'Manager', '3000000', 'qweqwe'),
(11, 'J002', 'Frontend Developer', '2000000', 'qwqwqw'),
(12, 'J003', 'Backend Developer', '2000000', 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(10) NOT NULL,
  `nip_karyawan` varchar(200) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `masa_kerja` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nip_karyawan`, `nama_karyawan`, `jenis_kelamin`, `tanggal_lahir`, `no_telepon`, `email`, `alamat`, `jabatan`, `tanggal_masuk`, `masa_kerja`) VALUES
(3, '12312312', 'Braiser Pangemanan', 'L', '1993-06-26', '1212121', 'me@mail', 'me@mail', '10', '2019-01-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aturan_gaji`
--
ALTER TABLE `tbl_aturan_gaji`
  ADD PRIMARY KEY (`id_aturan_gaji`);

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aturan_gaji`
--
ALTER TABLE `tbl_aturan_gaji`
  MODIFY `id_aturan_gaji` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id_gaji` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
