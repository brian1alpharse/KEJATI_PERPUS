/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - db_perpus_kejati
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_perpus_kejati` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_perpus_kejati`;

/*Table structure for table `jumlahall` */

DROP TABLE IF EXISTS `jumlahall`;

CREATE TABLE `jumlahall` (
  `dat_agt` bigint(21) NOT NULL DEFAULT 0,
  `dat_tbk` decimal(32,0) DEFAULT NULL,
  `dat_pjm` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jumlahall` */

/*Table structure for table `tbl_anggota` */

DROP TABLE IF EXISTS `tbl_anggota`;

CREATE TABLE `tbl_anggota` (
  `id_anggota` char(15) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `jabatan` char(35) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nomorhp` char(15) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_anggota` */

insert  into `tbl_anggota`(`id_anggota`,`nama`,`jabatan`,`alamat`,`nomorhp`) values 
('18313001','Ahmad','KAUR','Jl. Ir. Soekarno. By Pass','089544751244'),
('18313013','Muhammad Roihan','UMUM','Jl. P. Antasari','089695961496'),
('18313014','Dodit',' STAFF','Natar','08132233'),
('18313015','Endah',' UMUM','Kalianda','08234453'),
('18313016','Frank',' UMUM','Labuhan Ratu','08976666'),
('18313065','Mohamad Ari','STAFF','Kedaton','089797853643');

/*Table structure for table `tbl_buku` */

DROP TABLE IF EXISTS `tbl_buku`;

CREATE TABLE `tbl_buku` (
  `kodebuku` char(10) NOT NULL,
  `namabuku` varchar(75) NOT NULL,
  `pengarang` varchar(150) NOT NULL,
  `penerbit` varchar(13) NOT NULL,
  `statussedia` varchar(20) NOT NULL,
  `jumlahbuku` int(11) NOT NULL,
  `bukutersedia` int(11) NOT NULL,
  PRIMARY KEY (`kodebuku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_buku` */

insert  into `tbl_buku`(`kodebuku`,`namabuku`,`pengarang`,`penerbit`,`statussedia`,`jumlahbuku`,`bukutersedia`) values 
('11221','Kiat Hidup Sukses','Zulkifli','Media Penerbi','Tidak Tersedia',1,0),
('17034','Limit Nature','Noname','Jaya','Tersedia',2,0),
('24311','Panorama Kehidupan','Ernaya','Graha','Tidak Tersedia',5,0),
('35422','Tatang Sutarma','Sutisna','MJS','Tersedia',1,0),
('55643','Testing Informatika','Mahfud JK.','Erlangga','Tersedia',20,0);

/*Table structure for table `tbl_laporan` */

DROP TABLE IF EXISTS `tbl_laporan`;

CREATE TABLE `tbl_laporan` (
  `kdpinjam` char(15) NOT NULL DEFAULT current_timestamp(),
  `nmpinjam` varchar(45) NOT NULL,
  `kdbuku` char(10) NOT NULL,
  `nmbuku` varchar(35) NOT NULL,
  `lamapinjam` int(11) NOT NULL,
  PRIMARY KEY (`kdpinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_laporan` */

insert  into `tbl_laporan`(`kdpinjam`,`nmpinjam`,`kdbuku`,`nmbuku`,`lamapinjam`) values 
('2021-07-15 14:3','12','13','11',2);

/*Table structure for table `tbl_peminjaman` */

DROP TABLE IF EXISTS `tbl_peminjaman`;

CREATE TABLE `tbl_peminjaman` (
  `idpinjaman` char(12) NOT NULL,
  `idpeminjam` char(15) NOT NULL,
  `namapeminjam` varchar(90) NOT NULL,
  `lamapinjaman` int(11) NOT NULL,
  `kdbkpjm` char(10) NOT NULL,
  PRIMARY KEY (`idpinjaman`),
  KEY `idpeminjam` (`idpeminjam`),
  KEY `hh` (`kdbkpjm`),
  CONSTRAINT `fk_kdbk` FOREIGN KEY (`kdbkpjm`) REFERENCES `tbl_buku` (`kodebuku`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_pinjam` FOREIGN KEY (`idpeminjam`) REFERENCES `tbl_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_peminjaman` */

insert  into `tbl_peminjaman`(`idpinjaman`,`idpeminjam`,`namapeminjam`,`lamapinjaman`,`kdbkpjm`) values 
('01102021001','18313001','Ahmad',5,'11221'),
('15072021002','18313014','Dodit',7,'24311'),
('29092021001','18313013','Muhammad Roihan',4,'17034');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `nama` varchar(30) NOT NULL,
  `pass` char(12) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`nama`,`pass`) values 
('admin','admin'),
('ande','123');

/*Table structure for table `jumlahanggota` */

DROP TABLE IF EXISTS `jumlahanggota`;

/*!50001 DROP VIEW IF EXISTS `jumlahanggota` */;
/*!50001 DROP TABLE IF EXISTS `jumlahanggota` */;

/*!50001 CREATE TABLE  `jumlahanggota`(
 `dat` bigint(21) 
)*/;

/*Table structure for table `jumlahsemua` */

DROP TABLE IF EXISTS `jumlahsemua`;

/*!50001 DROP VIEW IF EXISTS `jumlahsemua` */;
/*!50001 DROP TABLE IF EXISTS `jumlahsemua` */;

/*!50001 CREATE TABLE  `jumlahsemua`(
 `dat_agt` bigint(21) ,
 `dat_tbk` decimal(32,0) ,
 `dat_pjm` bigint(21) 
)*/;

/*View structure for view jumlahanggota */

/*!50001 DROP TABLE IF EXISTS `jumlahanggota` */;
/*!50001 DROP VIEW IF EXISTS `jumlahanggota` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlahanggota` AS (select count(0) AS `dat` from `tbl_anggota`) */;

/*View structure for view jumlahsemua */

/*!50001 DROP TABLE IF EXISTS `jumlahsemua` */;
/*!50001 DROP VIEW IF EXISTS `jumlahsemua` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlahsemua` AS (select count(0) AS `dat_agt`,(select sum(`tbl_buku`.`jumlahbuku`) from `tbl_buku`) AS `dat_tbk`,(select count(0) from `tbl_peminjaman`) AS `dat_pjm` from `tbl_anggota`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
