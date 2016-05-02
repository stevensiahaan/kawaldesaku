/*
SQLyog Community v11.51 (32 bit)
MySQL - 5.6.21 : Database - db_kawaldesaku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kawaldesaku` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kawaldesaku`;

/*Table structure for table `bidang` */

DROP TABLE IF EXISTS `bidang`;

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bidang` char(50) NOT NULL,
  PRIMARY KEY (`id_bidang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `bidang` */

insert  into `bidang`(`id_bidang`,`nama_bidang`) values (1,'Penyelenggaraan Pemerintahan Desa'),(2,'Pembangunan Desa'),(3,'Pembinaan Kemasyarakatan'),(4,'Pemberdayaan Masyarakat');

/*Table structure for table `binamasyarakat` */

DROP TABLE IF EXISTS `binamasyarakat`;

CREATE TABLE `binamasyarakat` (
  `id_bina_masyarakat` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `volume` int(10) DEFAULT NULL,
  `satuan` int(5) DEFAULT NULL,
  `biaya` int(30) DEFAULT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id_bina_masyarakat`),
  KEY `fk-bina-desbid` (`id_desa`),
  CONSTRAINT `fk-bina-desbid` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `binamasyarakat` */

insert  into `binamasyarakat`(`id_bina_masyarakat`,`id_desa`,`jenis_kegiatan`,`lokasi`,`volume`,`satuan`,`biaya`,`start_date`,`due_date`) values (1,5,'pelayanan terpadu','Silimbat',500,0,2000000,'2013-10-30','2013-12-01');

/*Table structure for table `dayamasyarakat` */

DROP TABLE IF EXISTS `dayamasyarakat`;

CREATE TABLE `dayamasyarakat` (
  `id_daya_masyarakat` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `volume` int(10) DEFAULT NULL,
  `satuan` int(5) DEFAULT NULL,
  `biaya` int(20) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id_daya_masyarakat`),
  KEY `id_bidang` (`id_desa`),
  CONSTRAINT `fk-daya-desbid` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `dayamasyarakat` */

insert  into `dayamasyarakat`(`id_daya_masyarakat`,`id_desa`,`jenis_kegiatan`,`lokasi`,`volume`,`satuan`,`biaya`,`start_date`,`due_date`) values (2,5,'Pelepuhan Batu ','Parbatuan',200,0,3000000,'2013-02-11','2014-03-27');

/*Table structure for table `desa` */

DROP TABLE IF EXISTS `desa`;

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kecamatan` int(11) NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  `deskripsi_desa` tinytext,
  PRIMARY KEY (`id_desa`),
  KEY `kecamatan_id` (`id_kecamatan`),
  CONSTRAINT `fk-desa-kec` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `desa` */

insert  into `desa`(`id_desa`,`id_kecamatan`,`nama_desa`,`deskripsi_desa`) values (1,1,' Horsik',NULL),(2,1,'Motung',NULL),(3,2,' Aek Bolon Jae',NULL),(4,2,'Huta Dame',NULL),(5,2,'Matio',NULL),(6,3,'Lintong',NULL),(7,3,'Rianiate',NULL),(8,3,'Pangururan',NULL),(9,4,' Panamparan',NULL),(10,4,'Hitetano',NULL),(11,5,' Sibadihon',NULL),(12,5,'Sihiong',NULL),(13,2,'Balige',NULL);

/*Table structure for table `kabupaten` */

DROP TABLE IF EXISTS `kabupaten`;

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(11) NOT NULL,
  `nama_kabupaten` varchar(25) NOT NULL,
  PRIMARY KEY (`id_kabupaten`),
  KEY `prov_id` (`id_provinsi`),
  CONSTRAINT `fk-kab-prov` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `kabupaten` */

insert  into `kabupaten`(`id_kabupaten`,`id_provinsi`,`nama_kabupaten`) values (5,1,'Toba Samosir'),(6,1,'Asahan'),(7,1,'Batubara'),(8,1,'Dairi'),(9,1,'Deli Serdang'),(10,1,'Humbang Hasundutan'),(11,1,'Labuhanbatu'),(12,2,'Lima Puluh Kota'),(13,2,'Padang Pariaman'),(14,2,'Pasaman Barat'),(15,2,'Pesisir Selatan'),(16,3,'Banyuasin'),(17,3,'Empat Lawang'),(18,3,'Muara Enim'),(19,3,'Musi Rawas'),(20,4,' Aceh Singkil'),(21,4,'Bireuen'),(22,4,'Gayo Lues');

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kecamatan`),
  KEY `kabupaten_id` (`id_kabupaten`),
  CONSTRAINT `fk-kec-kab` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`id_kecamatan`,`id_kabupaten`,`nama_kecamatan`) values (1,5,'Ajibata'),(2,5,'Balige'),(3,5,'Bor-Bor'),(4,5,'Habinsaran'),(5,5,'LumbanJulu'),(6,6,'Aek Kuasan'),(7,6,'Aek Ledong'),(8,6,'Aek Songsongan'),(10,6,'Air Joman'),(11,6,'Bantu Pane'),(12,7,'Air Putih'),(13,7,'LimaPuluh'),(14,7,' Medang Deras'),(15,7,' Sei Balai'),(16,7,' Tanjung Tiram'),(17,8,' Berampu'),(18,8,' Gunung Sitember'),(19,8,'Lae Parira'),(20,8,' Parbuluan'),(21,8,' Sidikalang'),(22,9,' Deli Tua'),(23,9,' Hamparan Perak'),(24,9,'Kutalimbaru'),(25,9,' Biru-Biru'),(26,9,' Pagar Merbau'),(27,10,' Bakti Raja'),(28,10,' Dolok Sanggul'),(29,10,' Lintong Nihuta'),(30,10,'Onan Ganjang'),(31,11,' Rantau Prapat'),(32,11,'Pangkatan');

/*Table structure for table `komentarbinmas` */

DROP TABLE IF EXISTS `komentarbinmas`;

CREATE TABLE `komentarbinmas` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_terminbinmas` int(11) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `komentar` tinytext NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `fk-komen-termin` (`id_terminbinmas`),
  CONSTRAINT `komentarbinmas_ibfk_2` FOREIGN KEY (`id_terminbinmas`) REFERENCES `terminbinmas` (`id_terminbinmas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `komentarbinmas` */

insert  into `komentarbinmas`(`id_komentar`,`id_terminbinmas`,`nama_tamu`,`tanggal`,`komentar`) values (1,1,'Rina','2014-04-09 21:41:09','kok belum nampak efeknya ya????');

/*Table structure for table `komentardaymas` */

DROP TABLE IF EXISTS `komentardaymas`;

CREATE TABLE `komentardaymas` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_termindayamas` int(11) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `komentar` tinytext NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `fk-komen-termin` (`id_termindayamas`),
  CONSTRAINT `komentardayamas_ibfk_2` FOREIGN KEY (`id_termindayamas`) REFERENCES `termindayamas` (`id_termindayamas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `komentardaymas` */

insert  into `komentardaymas`(`id_komentar`,`id_termindayamas`,`nama_tamu`,`tanggal`,`komentar`) values (1,1,'Gon','2015-02-02 21:41:51','mana wujudnya???? tak nampak\r\n');

/*Table structure for table `komentarpembdes` */

DROP TABLE IF EXISTS `komentarpembdes`;

CREATE TABLE `komentarpembdes` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_terminpembdes` int(11) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `komentar` tinytext NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `fk-komen-termin` (`id_terminpembdes`),
  CONSTRAINT `komentarpembdes_ibfk_2` FOREIGN KEY (`id_terminpembdes`) REFERENCES `terminpembdes` (`id_terminpembdes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `komentarpembdes` */

insert  into `komentarpembdes`(`id_komentar`,`id_terminpembdes`,`nama_tamu`,`tanggal`,`komentar`) values (1,1,'DIan','2015-02-12 07:24:02','pembangunannya kok masih sesimple ini???');

/*Table structure for table `komentarpenydes` */

DROP TABLE IF EXISTS `komentarpenydes`;

CREATE TABLE `komentarpenydes` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_terminpenydes` int(11) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `komentar` tinytext NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `fk-komen-termin` (`id_terminpenydes`),
  CONSTRAINT `komentarpenydes_ibfk_2` FOREIGN KEY (`id_terminpenydes`) REFERENCES `terminpenydes` (`id_terminpenydes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `komentarpenydes` */

insert  into `komentarpenydes`(`id_komentar`,`id_terminpenydes`,`nama_tamu`,`tanggal`,`komentar`) values (1,1,'Dastan','2013-02-27 21:42:53','Hasil pelaksanaannya mana?');

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values ('m000000_000000_base',1460710514),('m130524_201442_init',1460710518);

/*Table structure for table `pembangunandesa` */

DROP TABLE IF EXISTS `pembangunandesa`;

CREATE TABLE `pembangunandesa` (
  `id_pemb_desa` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL,
  `jenis_pembangunan_desa` int(11) NOT NULL,
  `jenis_kegiatan` varchar(50) NOT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `volume` int(10) DEFAULT NULL,
  `satuan` int(5) DEFAULT NULL,
  `biaya` int(20) DEFAULT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id_pemb_desa`),
  KEY `id_bidang` (`jenis_pembangunan_desa`),
  KEY `pembangunandesa_ibfk_2` (`id_desa`),
  CONSTRAINT `fk-peng-desbid` FOREIGN KEY (`jenis_pembangunan_desa`) REFERENCES `subpembdesa` (`id_subpembdesa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pembangunandesa_ibfk_2` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pembangunandesa` */

insert  into `pembangunandesa`(`id_pemb_desa`,`id_desa`,`jenis_pembangunan_desa`,`jenis_kegiatan`,`lokasi`,`volume`,`satuan`,`biaya`,`start_date`,`due_date`) values (3,13,4,'Kebersihan lingkungan','Jl. Uttaran',1,0,1000000,'2016-04-05','2016-04-19'),(4,6,3,'Pembangunan Polindes','Jl Parhitean',5,0,7800000,'2015-06-16','2016-02-01');

/*Table structure for table `penyelenggaraanpemdes` */

DROP TABLE IF EXISTS `penyelenggaraanpemdes`;

CREATE TABLE `penyelenggaraanpemdes` (
  `id_peny_pemdesa` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `volume` int(10) DEFAULT NULL,
  `satuan` int(5) DEFAULT NULL,
  `biaya` int(20) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id_peny_pemdesa`),
  KEY `id_bidang` (`id_desa`),
  CONSTRAINT `fk-pemdes-desbid` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `penyelenggaraanpemdes` */

insert  into `penyelenggaraanpemdes`(`id_peny_pemdesa`,`id_desa`,`jenis_kegiatan`,`lokasi`,`volume`,`satuan`,`biaya`,`start_date`,`due_date`) values (2,4,'pemberdayaan masyarakat','Pardede Onan',20,0,20000000,'2006-10-24','2007-02-01'),(3,5,'Pembangunan Jalan','Jl. Perikanan',500,0,12000000,'2012-06-13','2013-09-05');

/*Table structure for table `profilaparat` */

DROP TABLE IF EXISTS `profilaparat`;

CREATE TABLE `profilaparat` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `fk-aparat-desa` (`id_desa`),
  CONSTRAINT `fk-aparat-desa` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `profilaparat` */

insert  into `profilaparat`(`id_profil`,`id_desa`,`nama`,`tgl_lahir`,`jabatan`,`alamat`,`status`,`foto`) values (1,13,'ROBERTO','1997-02-01','Aparat','Jl Patuan Anggi 232','Kepala Desa','');

/*Table structure for table `provinsi` */

DROP TABLE IF EXISTS `provinsi`;

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `provinsi` */

insert  into `provinsi`(`id_provinsi`,`nama_provinsi`) values (1,'Sumatera Utara'),(2,'Sumatera Barat'),(3,'Sumatera Selatan'),(4,'Aceh');

/*Table structure for table `subpembdesa` */

DROP TABLE IF EXISTS `subpembdesa`;

CREATE TABLE `subpembdesa` (
  `id_subpembdesa` int(11) NOT NULL AUTO_INCREMENT,
  `subbidang` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_subpembdesa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `subpembdesa` */

insert  into `subpembdesa`(`id_subpembdesa`,`subbidang`) values (1,'Ekonomi'),(2,'Infrastruktur'),(3,'Kesehatan'),(4,'Lingkungan_hidup'),(5,'Pendidikan_budaya');

/*Table structure for table `terminbinmas` */

DROP TABLE IF EXISTS `terminbinmas`;

CREATE TABLE `terminbinmas` (
  `id_terminbinmas` int(11) NOT NULL AUTO_INCREMENT,
  `id_binmas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto_1` varchar(20) NOT NULL,
  `foto_2` varchar(20) NOT NULL,
  `foto_3` varchar(20) DEFAULT NULL,
  `foto_4` varchar(20) DEFAULT NULL,
  `foto_5` varchar(20) DEFAULT NULL,
  `deskripsi` tinytext NOT NULL,
  PRIMARY KEY (`id_terminbinmas`),
  KEY `id_binmas` (`id_binmas`),
  CONSTRAINT `terminbinmas_ibfk_1` FOREIGN KEY (`id_binmas`) REFERENCES `binamasyarakat` (`id_bina_masyarakat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `terminbinmas` */

insert  into `terminbinmas`(`id_terminbinmas`,`id_binmas`,`keterangan`,`foto_1`,`foto_2`,`foto_3`,`foto_4`,`foto_5`,`deskripsi`) values (1,1,'pelayanan ','','',NULL,NULL,NULL,'terlaksana dengan baik\r\n');

/*Table structure for table `termindayamas` */

DROP TABLE IF EXISTS `termindayamas`;

CREATE TABLE `termindayamas` (
  `id_termindayamas` int(11) NOT NULL AUTO_INCREMENT,
  `id_daymas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto_1` varchar(20) NOT NULL,
  `foto_2` varchar(20) NOT NULL,
  `foto_3` varchar(20) DEFAULT NULL,
  `foto_4` varchar(20) DEFAULT NULL,
  `foto_5` varchar(20) DEFAULT NULL,
  `deskripsi` tinytext NOT NULL,
  PRIMARY KEY (`id_termindayamas`),
  KEY `id_daymas` (`id_daymas`),
  CONSTRAINT `termindayamas_ibfk_1` FOREIGN KEY (`id_daymas`) REFERENCES `dayamasyarakat` (`id_daya_masyarakat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `termindayamas` */

insert  into `termindayamas`(`id_termindayamas`,`id_daymas`,`keterangan`,`foto_1`,`foto_2`,`foto_3`,`foto_4`,`foto_5`,`deskripsi`) values (1,2,'sudah melewati tahap ','','',NULL,NULL,NULL,'batu sudah ditransfer, dan diterima dengan baik');

/*Table structure for table `terminpembdes` */

DROP TABLE IF EXISTS `terminpembdes`;

CREATE TABLE `terminpembdes` (
  `id_terminpembdes` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembdes` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto_1` varchar(20) NOT NULL,
  `foto_2` varchar(20) NOT NULL,
  `foto_3` varchar(20) DEFAULT NULL,
  `foto_4` varchar(20) DEFAULT NULL,
  `foto_5` varchar(20) DEFAULT NULL,
  `deskripsi` tinytext NOT NULL,
  PRIMARY KEY (`id_terminpembdes`),
  KEY `id_pembdes` (`id_pembdes`),
  CONSTRAINT `terminpembdes_ibfk_1` FOREIGN KEY (`id_pembdes`) REFERENCES `pembangunandesa` (`id_pemb_desa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `terminpembdes` */

insert  into `terminpembdes`(`id_terminpembdes`,`id_pembdes`,`keterangan`,`foto_1`,`foto_2`,`foto_3`,`foto_4`,`foto_5`,`deskripsi`) values (1,4,'Sudah puny','','',NULL,NULL,NULL,'sudah dicat ');

/*Table structure for table `terminpenydes` */

DROP TABLE IF EXISTS `terminpenydes`;

CREATE TABLE `terminpenydes` (
  `id_terminpenydes` int(11) NOT NULL AUTO_INCREMENT,
  `id_penydes` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto_1` varchar(20) NOT NULL,
  `foto_2` varchar(20) NOT NULL,
  `foto_3` varchar(20) DEFAULT NULL,
  `foto_4` varchar(20) DEFAULT NULL,
  `foto_5` varchar(20) DEFAULT NULL,
  `deskripsi` tinytext NOT NULL,
  PRIMARY KEY (`id_terminpenydes`),
  KEY `id_penydes` (`id_penydes`),
  CONSTRAINT `terminpenydes_ibfk_1` FOREIGN KEY (`id_penydes`) REFERENCES `penyelenggaraanpemdes` (`id_peny_pemdesa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `terminpenydes` */

insert  into `terminpenydes`(`id_terminpenydes`,`id_penydes`,`keterangan`,`foto_1`,`foto_2`,`foto_3`,`foto_4`,`foto_5`,`deskripsi`) values (1,3,'Sudah dila','','',NULL,NULL,NULL,'sudah diaspali dan diberi pasir jalan');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
