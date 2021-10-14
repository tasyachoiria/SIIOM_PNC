-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 03:47 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsipemiom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `nip` char(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` char(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `level` char(2) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nip`, `username`, `password`, `nama`, `alamat`, `no_hp`, `jabatan`, `level`) VALUES
('197911192021212009', 'Novia', 'Novi123', 'Dwi Novia Prasetyanti', 'Graha Rinjani Esatate', '08127747187', 'Dosen', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `nim` char(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` char(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `level` char(2) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `username`, `password`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `jurusan`, `prodi`, `level`) VALUES
('190202066', 'Febian', 'Febian123', 'Muh Febian Eko Cahyo Saputro', 'Laki-Laki', 'Taman Setia Budi', '082378453036', 'Teknik Elektronika', 'D3 - Teknik Listrik', '3'),
('190202067', 'Tasya', 'Tasya1702', 'Tasya Choiria', 'Perempuan', 'Perumahan Bayur Permai', '08124545873', 'Teknik Informatika', 'D3-Teknik Informatika', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `semester` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tahun_ajaran` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nominal` int(50) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nim`, `semester`, `tahun_ajaran`, `nominal`, `tanggal_bayar`, `status`) VALUES
(1, '190202045', '2', '2019', 2500000, '2021-09-23', 'sukses'),
(2, '190202034', '8', '2019', 175000, '2021-09-24', 'gagal'),
(3, '190202036', '6', '2019', 900000, '2021-10-11', 'sukses');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
