-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.31-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk dbgunung
CREATE DATABASE IF NOT EXISTS `dbgunung` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbgunung`;

-- membuang struktur untuk table dbgunung.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `harga` int(200) NOT NULL,
  `gambar` text NOT NULL,
  `merk_barang` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel dbgunung.barang: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id_barang`, `nama`, `harga`, `gambar`, `merk_barang`) VALUES
	(1, 'Tenda', 100000, 'https://eigerindostore.com/media/catalog/product/cache/small_image/640x700/beff4985b56e3afdbeabfc89641a4582/9/1/910004621001_1.jpg', 1),
	(2, 'Hammock', 75000, 'https://eigerindostore.com/media/catalog/product/cache/small_image/640x700/beff4985b56e3afdbeabfc89641a4582/9/1/910003322001_1_1.jpg', 1),
	(3, 'Tas gunung', 30000, 'https://eigerindostore.com/media/catalog/product/cache/small_image/640x700/beff4985b56e3afdbeabfc89641a4582/1/2/124501tn-1.jpg', 1),
	(4, 'Kompor', 250000, 'https://eigerindostore.com/media/catalog/product/cache/small_image/640x700/beff4985b56e3afdbeabfc89641a4582/9/1/910003952001_1.jpg', 1),
	(5, 'Jaket', 20000, 'https://eigerindostore.com/media/catalog/product/cache/small_image/640x700/beff4985b56e3afdbeabfc89641a4582/9/1/910004441004_1.jpg', 1);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- membuang struktur untuk table dbgunung.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int(20) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qty` int(20) NOT NULL,
  `lama_sewa` int(20) NOT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `FK_cart_barang` (`id_barang`),
  KEY `FK_cart_user` (`id_user`),
  CONSTRAINT `FK_cart_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON UPDATE CASCADE,
  CONSTRAINT `FK_cart_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel dbgunung.cart: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` (`id_cart`, `id_barang`, `id_user`, `qty`, `lama_sewa`) VALUES
	(16, 1, 2, 2, 2);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- membuang struktur untuk table dbgunung.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `total_harga` int(255) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `FK_transaksi_user` (`id_user`),
  CONSTRAINT `FK_transaksi_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel dbgunung.transaksi: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `metode_pembayaran`, `total_harga`) VALUES
	(1, 2, 'Kartu Kredit', 240000),
	(2, 2, 'Kartu Kredit', 240000);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- membuang struktur untuk table dbgunung.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel dbgunung.user: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `email`, `nama`, `alamat`, `username`, `password`) VALUES
	(1, 'varid@outlook.com', 'varid', 'vaya', 'varidvaya', 'mid'),
	(2, 'agistyaanugrah@gmail.com', 'agis', 'bandung', 'agis', 'agis'),
	(7, 'kj@gmail.com', 'Lius', 'L', 'kj', 'lius');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
