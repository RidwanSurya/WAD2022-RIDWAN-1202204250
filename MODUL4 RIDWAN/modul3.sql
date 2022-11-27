/* Create Database and Table */
create database MODUL3;
 
use MODUL3;
 
CREATE TABLE `showroom_ridwan_table` (
  `id_mobil` int(255),
  `nama_mobil` varchar(255),
  `pemilik_mobil` varchar(255),
  `merk_mobil` varchar(255),
  `tanggal_beli` date,
  `deskripsi` text,
  `foto_mobil` varchar(255),
  `status_pembayaran` varchar(255),
  PRIMARY KEY  (`id_mobil`)
);