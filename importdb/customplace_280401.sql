-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Apr 2019 pada 14.35
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customplace`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemcustom`
--

CREATE TABLE `itemcustom` (
  `idCustomItem` int(11) NOT NULL,
  `idItemImage` tinyint(1) NOT NULL,
  `colorhex` varchar(6) DEFAULT NULL,
  `filetexturename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemimages`
--

CREATE TABLE `itemimages` (
  `idItemImage` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `filename` varchar(50) NOT NULL,
  `asTemplate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `itempembelian`
--

CREATE TABLE `itempembelian` (
  `idPembelian` varchar(10) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `jumlahBarang` int(3) NOT NULL,
  `hargaTotalBarang` int(9) NOT NULL,
  `custom` tinyint(1) NOT NULL,
  `idItemImage` int(11) DEFAULT NULL,
  `idCustomItem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `idBarang` int(11) NOT NULL,
  `vendorID` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `customable` tinyint(1) NOT NULL,
  `hargaSatuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `idPembelian` varchar(10) NOT NULL,
  `userID` int(11) NOT NULL,
  `timestamp_create` int(11) NOT NULL,
  `timestamp_confirm` int(11) DEFAULT NULL,
  `timestamp_deliv` int(11) DEFAULT NULL,
  `timestamp_done` int(11) DEFAULT NULL,
  `idStatus` int(1) NOT NULL,
  `jumlahBarangTotal` int(3) NOT NULL,
  `hargaTotalAkhir` int(9) NOT NULL,
  `alamatAntar` text NOT NULL,
  `idPengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `idPengiriman` int(11) NOT NULL,
  `idJasaPengiriman` int(11) NOT NULL,
  `hargaPengiriman` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idStatus` int(1) NOT NULL,
  `namaStatus` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idStatus`, `namaStatus`, `deskripsi`) VALUES
(1, 'Tagihan Belum Dibayar', 'Checkout sudah dilakukan. Silahkan konfirmasi pembayaran anda di ... jika anda sudah membayar.'),
(2, 'Pembayaran Belum di Konfirmasi', 'Menunggu Penjual mengkonfirmasi pesanan anda.'),
(3, 'Pesanan Dalam Perjalanan', ''),
(4, 'Pesanan Sudah Sampai Tujuan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namaLengkap` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vendorID` int(11) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `profPic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userID`, `email`, `namaLengkap`, `username`, `password`, `vendorID`, `alamat`, `nohp`, `profPic`) VALUES
(1, 'eurekalabdawara@gmail.com', 'Eureka Labdawara', 'eurekalabdawara', '20a9e7befab24981ef838df7ffab7bd3cb0b9d4f', NULL, 'Jl. CMIIW', '081234567890', NULL),
(2, 'tono@gmail.com', 'Tono Subagsih', 'TonoSub', '5604872e3bfef4a986013cfddb3d04ebcbbc2f03', NULL, 'Jl. Ashiaap', '081987654321', NULL),
(3, 'mirnindabrahmana@gmail.com', 'Mirninda', 'ninddaaa', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', NULL, 'Adhyaksa', '082366332852', NULL),
(4, 'henokhvita@gmail.com', 'Henokhvita', 'henokhvita', 'ccd5d6a8fefecac1da32157d1c81c7c3274b8529', NULL, 'Cilame Indah C1', '08984124646', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendors`
--

CREATE TABLE `vendors` (
  `vendorID` int(11) NOT NULL,
  `namaToko` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `profPicToko` varchar(50) NOT NULL,
  `homePicToko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemcustom`
--
ALTER TABLE `itemcustom`
  ADD PRIMARY KEY (`idCustomItem`);

--
-- Indexes for table `itemimages`
--
ALTER TABLE `itemimages`
  ADD PRIMARY KEY (`idItemImage`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idPembelian`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`idPengiriman`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemcustom`
--
ALTER TABLE `itemcustom`
  MODIFY `idCustomItem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `itemimages`
--
ALTER TABLE `itemimages`
  MODIFY `idItemImage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `idPengiriman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendorID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
