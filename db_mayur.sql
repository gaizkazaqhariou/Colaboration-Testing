-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 05:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mayur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(3) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` varchar(6) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `foto_barang` text DEFAULT NULL,
  `pemilik_barang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `satuan`, `foto_barang`, `pemilik_barang`) VALUES
(3, 'kangkung', '1000', 'ikat', 'background.png', 1),
(4, 'selada', '6000', 'kg', 'fact.png', 1),
(6, 'seledri', '500', 'ikat', 'hp_recycle_bin_1_empty.ico', 8),
(7, 'kangkung', '1000', 'ikat', 'kangkung.jpg', 9),
(8, 'sawi', '1000', 'ikat', 'sawi.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `detail_grup`
--

CREATE TABLE `detail_grup` (
  `id_detail` int(3) NOT NULL,
  `id_grup` int(3) NOT NULL,
  `id_pembeli` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_grup`
--

INSERT INTO `detail_grup` (`id_detail`, `id_grup`, `id_pembeli`) VALUES
(1, 1, 1),
(2, 1, 2),
(16, 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `grup_jual`
--

CREATE TABLE `grup_jual` (
  `id_grup` int(3) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `kode_grup` varchar(5) NOT NULL,
  `foto_grup` text DEFAULT NULL,
  `pemilik_grup` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup_jual`
--

INSERT INTO `grup_jual` (`id_grup`, `nama_grup`, `kode_grup`, `foto_grup`, `pemilik_grup`) VALUES
(1, 'sayur blok A-G permata', 'CCCCC', 'onboard2.png', 1),
(3, 'ceriwis blok A-B perumahan', 'EFGHI', 'onboard21.png', 3),
(14, 'sayur blok A-Q', 'wawaw', 'cart.png', 1),
(15, 'Grup bu min kece', 'BUMIN', 'cart3.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(3) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat_pembeli` varchar(50) NOT NULL,
  `no_hp_pembeli` varchar(14) NOT NULL,
  `pass_pembeli` varchar(20) NOT NULL,
  `foto_pembeli` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat_pembeli`, `no_hp_pembeli`, `pass_pembeli`, `foto_pembeli`) VALUES
(1, 'gaizka', 'permata residence b17', '089509496983', 'gaizka123', 'penjual1.png'),
(2, 'tizka', 'pakis', '0812345678', 'mangcoba', 'pembeli.png'),
(3, 'vivi', 'permata residence f3', '0812345678', 'pembeli', 'checklist.png');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(3) NOT NULL,
  `nama_penjual` varchar(50) NOT NULL,
  `alamat_penjual` varchar(50) NOT NULL,
  `no_hp_penjual` varchar(14) NOT NULL,
  `pass_penjual` varchar(20) NOT NULL,
  `foto_penjual` text NOT NULL,
  `kategori` enum('sayur','daging','umum') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `alamat_penjual`, `no_hp_penjual`, `pass_penjual`, `foto_penjual`, `kategori`, `deskripsi`) VALUES
(1, 'marimas', 'pakis jajar', '089509496983', 'cocacola', 'penjual.png', 'sayur', 'saya usahakan lengkap sesuai kebutuhan.'),
(2, 'bu par', 'pakis jajar', '08987654321', 'sayurjos', 'onboard3.png', 'umum', 'kepuasan pelanggan itu nomor 2.yang utama, saya jualan dulu deh.'),
(3, 'kacong', 'bugis', '0812345678', 'bisayok', 'cart1.png', 'daging', 'daging ayam? kambing? sapi? sikaatt..'),
(8, 'mamamia', 'pakis', '099', 'mama', 'penjual.png', 'umum', 'yy'),
(9, 'bu min', 'pakisjajar', '089509496983', 'penjual', 'pembeli2.png', 'umum', 'pokok e jualan dulu lah');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(3) NOT NULL,
  `id_grup` int(3) NOT NULL,
  `id_pembeli` int(3) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_grup`, `id_pembeli`, `id_barang`, `jumlah_barang`, `tanggal_pesan`) VALUES
(1, 15, 3, 7, 3, '2020-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `pemilik_barang` (`pemilik_barang`);

--
-- Indexes for table `detail_grup`
--
ALTER TABLE `detail_grup`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_grup` (`id_grup`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `grup_jual`
--
ALTER TABLE `grup_jual`
  ADD PRIMARY KEY (`id_grup`),
  ADD KEY `pemilik_grup` (`pemilik_grup`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_grup` (`id_grup`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_grup`
--
ALTER TABLE `detail_grup`
  MODIFY `id_detail` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `grup_jual`
--
ALTER TABLE `grup_jual`
  MODIFY `id_grup` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`pemilik_barang`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `detail_grup`
--
ALTER TABLE `detail_grup`
  ADD CONSTRAINT `detail_grup_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_grup_ibfk_3` FOREIGN KEY (`id_grup`) REFERENCES `grup_jual` (`id_grup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grup_jual`
--
ALTER TABLE `grup_jual`
  ADD CONSTRAINT `grup_jual_ibfk_1` FOREIGN KEY (`pemilik_grup`) REFERENCES `penjual` (`id_penjual`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_grup`) REFERENCES `grup_jual` (`id_grup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
