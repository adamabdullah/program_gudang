-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2019 pada 09.01
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_borwita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `kode_pembelian` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `harga_satuan` double NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `kode_penjualan` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `harga_satuan` double NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_satuan` double NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_barang`
--

INSERT INTO `master_barang` (`kode_barang`, `nama_barang`, `deskripsi_barang`, `harga_satuan`, `stok`) VALUES
('k1', 'oreo', 'enak', 10000, 10),
('k12b', 'oreoab', 'enakab', 1000012, 1025);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pelanggan`
--

CREATE TABLE `master_pelanggan` (
  `kode_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `no_telp_pelanggan` varchar(15) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_pelanggan`
--

INSERT INTO `master_pelanggan` (`kode_pelanggan`, `nama_pelanggan`, `no_telp_pelanggan`, `alamat_pelanggan`) VALUES
('k1', 'aks', '099', 'jalan lio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_supplier`
--

CREATE TABLE `master_supplier` (
  `kode_supplier` varchar(50) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_telp_supplier` varchar(15) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user`
--

CREATE TABLE `master_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_user`
--

INSERT INTO `master_user` (`username`, `password`, `jabatan`) VALUES
('adam', 'abdullah', 'administrator'),
('amira', 'amir', 'logistik'),
('user', 'pass', 'fakturis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `kode_pembelian` varchar(50) NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `kode_supplier` varchar(50) NOT NULL,
  `total_biaya` double NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `dibuat_oleh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_penjualan` varchar(50) NOT NULL,
  `tanggal_penjualan` datetime NOT NULL,
  `kode_pelanggan` varchar(50) NOT NULL,
  `total_biaya` double NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `dibuat_oleh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`kode_pembelian`,`kode_barang`),
  ADD KEY `detail_pembelian_barang` (`kode_barang`);

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`kode_penjualan`,`kode_barang`),
  ADD KEY `detail_penjualan_barang` (`kode_barang`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `master_pelanggan`
--
ALTER TABLE `master_pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indeks untuk tabel `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indeks untuk tabel `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kode_pembelian`),
  ADD KEY `detail_pembelian` (`dibuat_oleh`),
  ADD KEY `pembelian_supplier` (`kode_supplier`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `penjualan_pelanggan` (`kode_pelanggan`),
  ADD KEY `penjualan_user` (`dibuat_oleh`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_barang` FOREIGN KEY (`kode_barang`) REFERENCES `master_barang` (`kode_barang`),
  ADD CONSTRAINT `detail_pembelian_pembelian` FOREIGN KEY (`kode_pembelian`) REFERENCES `pembelian` (`kode_pembelian`);

--
-- Ketidakleluasaan untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_barang` FOREIGN KEY (`kode_barang`) REFERENCES `master_barang` (`kode_barang`),
  ADD CONSTRAINT `detail_penjualan_penjualan` FOREIGN KEY (`kode_penjualan`) REFERENCES `penjualan` (`kode_penjualan`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `detail_pembelian` FOREIGN KEY (`dibuat_oleh`) REFERENCES `master_user` (`username`),
  ADD CONSTRAINT `pembelian_supplier` FOREIGN KEY (`kode_supplier`) REFERENCES `master_supplier` (`kode_supplier`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_pelanggan` FOREIGN KEY (`kode_pelanggan`) REFERENCES `master_pelanggan` (`kode_pelanggan`),
  ADD CONSTRAINT `penjualan_user` FOREIGN KEY (`dibuat_oleh`) REFERENCES `master_user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
