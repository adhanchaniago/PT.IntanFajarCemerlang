-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2015 at 01:44 AM
-- Server version: 5.6.26
-- PHP Version: 7.0.0RC3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptintanfajarcemerlang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE IF NOT EXISTS `tb_harga` (
  `id_harga` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_harga`, `harga`, `uang_muka`, `jangka_waktu`, `angsuran`, `status`) VALUES
('A11', 600000000, 200000000, 36, 8500000, 'Subsidi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE IF NOT EXISTS `tb_konsumen` (
  `no_ktp` varchar(17) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(10) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `stat_nikah` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `filepath` varchar(100) NOT NULL,
  `no_ktp_p` varchar(17) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `tempat_lahir_p` varchar(50) NOT NULL,
  `tgl_lahir_p` date NOT NULL,
  `pekerjaan_p` varchar(100) NOT NULL,
  `alamat_p` varchar(100) NOT NULL,
  `telp_p` varchar(15) NOT NULL,
  `filepath_p` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(100) NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `lama_menjabat` int(11) NOT NULL,
  `stat_perusahaan` varchar(20) NOT NULL,
  `telp_perusahaan` varchar(15) NOT NULL,
  `id_rumah` varchar(15) NOT NULL,
  `id_harga` varchar(15) NOT NULL,
  `stat_uang_muka` varchar(20) NOT NULL,
  `sisa_uang_muka` int(11) NOT NULL,
  `stat_akad` varchar(20) NOT NULL,
  `tgl_akad` date NOT NULL,
  `stat_jual_beli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`no_ktp`, `nama`, `tempat_lahir`, `tgl_lahir`, `jekel`, `pekerjaan`, `agama`, `stat_nikah`, `alamat`, `telp`, `filepath`, `no_ktp_p`, `nama_p`, `tempat_lahir_p`, `tgl_lahir_p`, `pekerjaan_p`, `alamat_p`, `telp_p`, `filepath_p`, `nama_perusahaan`, `alamat_perusahaan`, `bidang_usaha`, `jabatan`, `lama_menjabat`, `stat_perusahaan`, `telp_perusahaan`, `id_rumah`, `id_harga`, `stat_uang_muka`, `sisa_uang_muka`, `stat_akad`, `tgl_akad`, `stat_jual_beli`) VALUES
('123456789', 'Adi Raka Siwi', 'Padang', '1994-04-29', 'Laki-Laki', 'Swasta', 'Islam', 'Menikah', 'asdasd', '081268280648', 'photo/Koala.jpg', '987654321', 'Jeane Hearthcliff', 'Washington', '1994-02-03', 'Swasta', 'asdasd', '081345678765', 'photo/Penguins.jpg', 'PT. Andalas Medika Infotama', 'asdasd', 'asdas', 'asdad', 0, 'Swasta', '123123', 'R111', 'A11', 'Lunas', 0, 'Sudah Akad', '2015-12-20', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumah`
--

CREATE TABLE IF NOT EXISTS `tb_rumah` (
  `id_rumah` varchar(15) NOT NULL,
  `block` varchar(10) NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `luas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rumah`
--

INSERT INTO `tb_rumah` (`id_rumah`, `block`, `panjang`, `lebar`, `luas`) VALUES
('R111', 'A', 20, 15, 300);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'zeddevil', '0858dcffabb19cf27bcae1865f8530c5', 'Adi Raka Siwi'),
(2, 'scrypto', '0858dcffabb19cf27bcae1865f8530c5', 'Budi handuk'),
(3, 'jancok', '71a4d4cd2f30b185d707718273b17d05', 'Gan Gantaeng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `id_rumah` (`id_rumah`),
  ADD KEY `id_harga` (`id_harga`);

--
-- Indexes for table `tb_rumah`
--
ALTER TABLE `tb_rumah`
  ADD PRIMARY KEY (`id_rumah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD CONSTRAINT `tb_konsumen_ibfk_1` FOREIGN KEY (`id_rumah`) REFERENCES `tb_rumah` (`id_rumah`),
  ADD CONSTRAINT `tb_konsumen_ibfk_2` FOREIGN KEY (`id_harga`) REFERENCES `tb_harga` (`id_harga`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
