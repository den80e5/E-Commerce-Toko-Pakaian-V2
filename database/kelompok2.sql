-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 10:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'stmik', '1234', 'Kelompok8'),
(2, 'deni', '1234', 'Deni Anggara'),
(3, 'admin', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Sumedang', 10000),
(2, 'Bandung', 12000),
(3, 'Jakarta', 18000),
(4, 'Surabaya', 24000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamt_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamt_pelanggan`) VALUES
(8, 'angga@gmail.com', '1234', 'angga', '0800968565224', 'Bandung'),
(9, 'denya4146@gmail.com', '1234', 'Deni ANggara', '073454536346', 'Sumedang'),
(10, 'sd@gmail.cm', '43553', 'Leather Holder', '085', 'Sumedang');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamt_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamt_pengiriman`) VALUES
(48, 9, 2, '2021-06-13', 1012000, 'Bandung', 12000, '442233'),
(49, 9, 1, '2021-06-14', 210000, 'Sumedang', 10000, 'ddf'),
(50, 9, 1, '2021-06-14', 310000, 'Sumedang', 10000, 'fgfg'),
(51, 9, 1, '2021-06-14', 310000, 'Sumedang', 10000, 'dfdf'),
(52, 9, 1, '2021-06-14', 1760000, 'Sumedang', 10000, 'fdffgdf'),
(53, 9, 1, '2021-06-14', 260000, 'Sumedang', 10000, 'vcv'),
(54, 9, 2, '2021-06-14', 42000, 'Bandung', 12000, 'sddsf'),
(55, 9, 2, '2021-06-14', 312000, 'Bandung', 12000, 'dfd'),
(56, 9, 2, '2021-06-14', 1762000, 'Bandung', 12000, 'rer');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(14, 0, 26, 1, 'Leather Belt', 1750000, 100, 100, 1750000),
(15, 48, 23, 1, 'Jaket Canvas', 300000, 700, 700, 300000),
(16, 48, 24, 1, 'Sepatu Balenciaga', 700000, 200, 200, 700000),
(17, 49, 30, 1, 'Jaket Oversize', 200000, 200, 200, 200000),
(18, 0, 28, 1, 'Dompet', 30000, 300, 300, 30000),
(19, 50, 25, 1, 'Polo Shirt', 300000, 700, 700, 300000),
(20, 0, 27, 1, 'topi', 100000, 100, 100, 100000),
(21, 0, 22, 1, 'Aspere Denim', 250000, 700, 700, 250000),
(22, 51, 25, 1, 'Polo Shirt', 300000, 700, 700, 300000),
(23, 52, 26, 1, 'Leather Belt', 1750000, 100, 100, 1750000),
(24, 53, 22, 1, 'Aspere Denim', 250000, 700, 700, 250000),
(25, 54, 28, 1, 'Dompet', 30000, 300, 300, 30000),
(26, 0, 26, 1, 'Leather Belt', 1750000, 100, 100, 1750000),
(27, 0, 30, 1, 'Jaket Oversize', 200000, 200, 200, 200000),
(28, 55, 25, 1, 'Polo Shirt', 300000, 700, 700, 300000),
(29, 56, 26, 1, 'Leather Belt', 1750000, 100, 100, 1750000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `kategori`) VALUES
(22, 'Aspere Denim', 250000, 700, 'Arpese denim jacket.PNG', 'Jaket denim', 'jaket'),
(23, 'Jaket Canvas', 300000, 700, 'Back-slit printed canvas hooded jacket.PNG', 'Bahan tahan Lama', 'jaket'),
(24, 'Sepatu Balenciaga', 700000, 200, 'Balenciaga pirfire.PNG', '', 'shoes'),
(25, 'Polo Shirt', 300000, 700, 'GG-embroidered cotton-piqué polo shirt.PNG', '', ''),
(26, 'Leather Belt', 1750000, 100, 'FF-Vertigo reversible leather belt.PNG', '		  ', ''),
(27, 'topi', 100000, 100, '4G-logo cotton-canvas cap.PNG', 'fdhjghk', ''),
(28, 'Dompet', 30000, 300, 'FF-Vertigo grained-leather cardholder.PNG', 'bagus', ''),
(30, 'Jaket Oversize', 200000, 200, 'Oversized wool jacket.PNG', 'bahan hangat', ''),
(31, 'Cincin', 504000, 200, 'FF-logo metal ring.PNG', 'Cincin emas', 'aksesoris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
