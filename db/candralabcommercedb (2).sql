-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2015 pada 19.37
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `candralabcommercedb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`idberita` bigint(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `tanggal`, `judul`, `isi`, `aktif`, `gambar`) VALUES
(3, '2013-10-15 23:23:51', 'Promo Akhir Tahun', '', 1, 'promo.jpg'),
(4, '2013-10-15 23:24:05', 'Promo Lebaran', '', 1, 'promo_lebaran12_1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `noinvoice` varchar(6) NOT NULL,
  `tanggal` datetime NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `totalbayar` float NOT NULL,
  `transfer` tinyint(1) NOT NULL,
  `tglkirim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`noinvoice`, `tanggal`, `idpelanggan`, `totalbayar`, `transfer`, `tglkirim`) VALUES
('T00001', '2013-10-15 22:52:17', 1, 209916, 1, '2013-10-15 22:56:52'),
('T00002', '2013-10-16 06:15:51', 3, 419832, 1, '2013-10-16 06:18:24'),
('T00003', '2015-12-13 00:23:21', 4, 209916, 1, NULL),
('T00004', '2015-12-13 00:36:18', 4, 629748, 1, NULL),
('T00007', '2015-12-14 21:14:28', 4, 209916, 1, '2015-12-14 21:57:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama_kategori`) VALUES
(1, 'Baju'),
(2, 'Buku'),
(4, 'Elektronik'),
(5, 'baju muslim'),
(6, 'tas'),
(7, 'baju batik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`idpelanggan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelamin` set('L','P') NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `kelamin`, `email`, `alamat`, `kodepos`, `kota`, `telp`, `tanggal_daftar`, `password`, `status`) VALUES
(1, 'Candra', 'L', 'candra@gmail.com', '', '55198', 'Yogyakarta', '081328533115', '2013-10-15', '2614ae3c375c3095dc536283672548bd', 0),
(2, 'indah', 'P', 'indah@gmail.com', 'jalan janti 									', '1234', 'Jogja', '1234356', '2013-10-16', 'f3385c508ce54d577fd205a1b2ecdfb7', 0),
(3, 'ratno', 'L', 'ratno@gmail.com', 'jalan janti 									', '1234', 'Cilacap', '98734342', '2013-10-16', '2e17a959f69c6cb9541333362b497b69', 0),
(4, 'slamet', 'L', 'slamet@gmail.com', 'bandung', '52365', 'bandung', '085786620236', '2015-12-12', 'c5a42d9667c760e1b7c064e25536e570', 1),
(5, 'slamet', 'L', 'slamet@gmail.com', 'batang', '52365', 'batang', '085748574', '2015-12-15', 'c5a42d9667c760e1b7c064e25536e570', 0),
(6, 'indri', 'P', 'indri@gmail.com', 'd', 'd', 'a', '04837847', '2015-12-15', '71f7be7b8496f7ece8454b1bcdcd2162', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `kd_Pembelian` varchar(7) NOT NULL,
  `Tgl_Pembelian` char(20) NOT NULL,
  `Kd_Suplier` varchar(7) NOT NULL,
  `Total` decimal(18,0) NOT NULL,
  `Potongan` decimal(18,0) NOT NULL,
  `Grand_Total` decimal(18,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_detail`
--

CREATE TABLE IF NOT EXISTS `pembelian_detail` (
  `Kd_Pembelian` varchar(7) NOT NULL,
  `Kd_Barang` varchar(7) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Harga_Beli` decimal(18,0) NOT NULL,
  `Sub_Total` decimal(18,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola`
--

CREATE TABLE IF NOT EXISTS `pengelola` (
`idpengelola` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pengelola`
--

INSERT INTO `pengelola` (`idpengelola`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'candralab', 'candralab', '22fb32eae82ff0855bff018433e4723c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`idproduk` int(10) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `idkategori` int(255) NOT NULL,
  `deskripsi` text,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `nama_produk`, `supplier_id`, `idkategori`, `deskripsi`, `foto`) VALUES
(1, 'Model 1', 0, 1, '					Pakain modis yang bis dipakai saat santai atau acara pesta	1				', '1.jpg'),
(2, 'model 2', 0, 1, '					Pakain corak putih hitam dikombinasikan dengan rok hijau sangat cocok dipakai dsaat santai				', '2.jpg'),
(3, 'model 3', 0, 1, '					Pakain kantor dan resmi yang bisa dipakai saat bertemu client atau meeting atau untuk bersantai ria saat belanja				', '3.jpg'),
(12, 'PHP and MySQL From Novice to Professional', 0, 2, 'Up-to-date coverage of PHP 5.3 and MySQL from one of the most trusted names in PHP development, W. Jason Gilmore									', 'buku1.png'),
(13, 'Beginning Arduino', 0, 2, 'In Beginning Arduino, Second Edition, you will learn all about the popular Arduino microcontroller by working your way through an amazing set of 50 cool projects.									', 'buku2.png'),
(14, 'Makers at Work', 0, 2, 'Makers at Work profiles 21 of the most creative, inquisitive, and influential "makers"--people creating new products, art, and methods using computer controls, recycled items, open-source code and plans, 3D printers, and anything else that can help them turn both whacky and incredibly insightful ideas into reality. Foreword by Brad Feld									', 'buku3.png'),
(15, 'Nokia Lumia 1020', 0, 4, 'Smartphone dari Microsoft dengan Resolusi kamera 41MP.cocok bagi fotographer Profesional									', 'lumia.jpg'),
(16, 'Samsung Galaxy S4', 0, 4, 'Flagship smartphone dari samsung, menggunakan Android jellybean terbaru, terbaik di kelasnya 									', 's4.jpg'),
(17, 'iPhone 5s', 0, 4, 'Produk terbaru dari Apple, dibekali dengan iOS7 menjadikan iphone produk terbaik dari apple									', 'iphone.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_pembelian`
--

CREATE TABLE IF NOT EXISTS `retur_pembelian` (
`id` int(10) NOT NULL,
  `no_retur` varchar(12) NOT NULL,
  `tanggal_retur` date NOT NULL,
  `produk_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `jumlah_produk` int(10) NOT NULL,
  `distributor` varchar(100) NOT NULL,
  `pengguna_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE IF NOT EXISTS `stok` (
`idstok` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`idstok`, `idproduk`, `harga_beli`, `harga_jual`, `jumlah`) VALUES
(1, 1, 150000, 209916, 19),
(2, 2, 100000, 209916, 20),
(3, 3, 50000, 78718.5, 11),
(10, 12, 30000, 50000, 1),
(11, 13, 25000, 55000, 20),
(12, 14, 100000, 200000, 20),
(13, 15, 5000000, 6000000, 10),
(14, 16, 5000000, 7000000, 5),
(15, 17, 1000000, 50000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
`supplier_id` int(7) NOT NULL,
  `Nm_Suplier` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telp` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`idtransaksi` int(11) NOT NULL,
  `noinvoice` varchar(6) NOT NULL,
  `idproduk` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `noinvoice`, `idproduk`, `jumlah`) VALUES
(1, 'T00001', 9, 1),
(2, 'T00002', 2, 2),
(3, 'T00003', 1, 1),
(4, 'T00004', 12, 3),
(7, 'T00007', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`noinvoice`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
 ADD PRIMARY KEY (`kd_Pembelian`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
 ADD PRIMARY KEY (`idpengelola`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `retur_pembelian`
--
ALTER TABLE `retur_pembelian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
 ADD PRIMARY KEY (`idstok`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
 ADD PRIMARY KEY (`supplier_id`) COMMENT 'primary';

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `idberita` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
MODIFY `idpengelola` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `idproduk` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `retur_pembelian`
--
ALTER TABLE `retur_pembelian`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
MODIFY `idstok` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
MODIFY `supplier_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
