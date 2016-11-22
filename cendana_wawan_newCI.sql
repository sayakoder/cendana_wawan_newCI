-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cpc_training
CREATE DATABASE IF NOT EXISTS `cpc_training` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cpc_training`;


-- Dumping structure for table cpc_training.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.guru: ~3 rows (approximately)
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
REPLACE INTO `guru` (`id_guru`, `nama_guru`, `alamat`) VALUES
	(1, 'joko', 'malang'),
	(2, 'hariadi', 'ngajuk'),
	(3, 'susi', 'semarang');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;


-- Dumping structure for table cpc_training.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.kelas: ~3 rows (approximately)
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
REPLACE INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'kelas A'),
	(2, 'kelas B'),
	(3, 'kelas C');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;


-- Dumping structure for table cpc_training.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.mapel: ~3 rows (approximately)
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
REPLACE INTO `mapel` (`id_mapel`, `nama_mapel`, `id_guru`) VALUES
	(1, 'matematika', 1),
	(2, 'bhs indonesia', 2),
	(3, 'ipa', 3);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;


-- Dumping structure for table cpc_training.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `total_nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.nilai: ~5 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
REPLACE INTO `nilai` (`id_nilai`, `id_mapel`, `id_siswa`, `total_nilai`) VALUES
	(1, 1, 1, 100),
	(2, 1, 2, 80),
	(3, 2, 2, 100),
	(4, 2, 3, 90),
	(6, 1, 2, 122);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;


-- Dumping structure for table cpc_training.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `alamat` text,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.siswa: ~12 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
REPLACE INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `id_kelas`) VALUES
	(1, 'indraa', 'malangg', 3),
	(2, 'hani', 'malang', 2),
	(3, 'endro', 'malang', 1),
	(4, 'jono', 'nganjuk', 1),
	(5, 'irfan', 'malang', 2),
	(6, 'ilham', 'makasar', 3),
	(7, 'munawar', 'sulawesi', 1),
	(8, 'roni', 'kalimantan', 2),
	(9, 'anwar', 'sumatra', 3),
	(10, 'boy', 'papua', 1),
	(11, 'krilin', 'pasuruan', 2),
	(12, 'aini', 'malangg', 2);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;


-- Dumping structure for table cpc_training.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `password`, `nama_user`) VALUES
	(1, 'admin', 'admin', 'wawan triadmoko'),
	(2, 'user', 'user', 'Tuan');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
