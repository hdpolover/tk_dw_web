-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 07:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_dw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `ID_PENDAFTARAN` int(11) NOT NULL,
  `NAMA_TERDAFTAR` varchar(30) NOT NULL,
  `ALAMAT_TERDAFTAR` varchar(50) NOT NULL,
  `TEMPAT_LAHIR` varchar(50) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN` varchar(20) NOT NULL,
  `NAMA_ORTU` varchar(20) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TGL_PENDAFTARAN` date NOT NULL,
  `STATUS_SISWA` varchar(20) NOT NULL,
  `ID_JENJANG` int(11) NOT NULL,
  `NOMOR_HP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`ID_PENDAFTARAN`, `NAMA_TERDAFTAR`, `ALAMAT_TERDAFTAR`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `JENIS_KELAMIN`, `NAMA_ORTU`, `NIK`, `TGL_PENDAFTARAN`, `STATUS_SISWA`, `ID_JENJANG`, `NOMOR_HP`) VALUES
(5, 'Hendra', 'Candi', 'Candi', '2021-07-29', 'Perempuan', 'Paijo', '122323242424', '2021-07-20', 'DITERIMA', 2, '34214342134'),
(6, 'coba', 'Candi', 'Candi', '2021-07-13', 'Perempuan', 'parnojo', '123142414', '2021-07-21', 'DITOLAK', 2, '081350204469'),
(7, 'dvdvd', 'fdve', 'vveveve', '2021-06-27', 'Laki-Laki', 'Sudiano Paiko', '2132312', '2021-07-21', 'DITERIMA', 2, '89823981293'),
(8, 'vdvdv', 'fbb', 'vdvdvd', '2021-07-14', 'Laki-Laki', 'POLO ANJAR', '32313', '2021-07-21', 'DITERIMA', 1, '324324'),
(9, 'ouou', ',i,i', ',iu7uj', '2021-07-07', 'Laki-Laki', 'NUY', '345454', '2021-07-22', 'DITERIMA', 1, '454545'),
(10, 'coba', 'vvv', 'dfd', '2021-07-01', 'Laki-Laki', 'POW', '24223', '2021-07-23', 'DITERIMA', 1, '213123'),
(11, 'Suhendra', 'Jln. Candi 3E No. 142 Karang Besuki', 'Candi', '2016-06-07', 'Laki-Laki', 'LOPE', '4645454', '2021-07-24', 'BELUM DIVALIDASI', 1, '08135020446'),
(12, 'momo', 'dfvdfd', 'grgrgr', '2016-06-16', 'Perempuan', 'FRIA', '3453543', '2021-07-25', 'DITERIMA', 1, '446464'),
(13, 'Muhammad Subakti', 'Bestelsiz Mah. 105 sokak. no 2 D3 Z', 'polokll', '2016-07-25', 'Laki-Laki', 'HENDRA', '123232424', '2021-07-25', 'DITERIMA', 2, '081350204469'),
(15, 'Suhendra', 'Jln. Candi 3E No. 142 Karang Besuki', 'Candi', '2016-07-20', 'Perempuan', 'PAIJO BEJO', '43535', '2021-07-25', 'DITERIMA', 1, '081350204469');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `ID_JENJANG` int(11) NOT NULL,
  `KATEGORI_JENJANG` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`ID_JENJANG`, `KATEGORI_JENJANG`) VALUES
(1, 'Kelompok A'),
(2, 'Kelompok B'),
(3, 'traveling');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `ID_KURIKULUM` int(11) NOT NULL,
  `NAMA_KURIKULUM` varchar(20) NOT NULL,
  `PERIODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`ID_KURIKULUM`, `NAMA_KURIKULUM`, `PERIODE`) VALUES
(1, 'K13', 2019),
(2, 'K20', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` int(11) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `NIP_NUPTK` varchar(30) NOT NULL,
  `JK` varchar(20) NOT NULL,
  `TEMPAT_LAHIR` varchar(20) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `IJAZAH_TERAKHIR` varchar(20) NOT NULL,
  `AGAMA` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `JABATAN` varchar(20) NOT NULL,
  `GOLONGAN` varchar(20) NOT NULL,
  `MASA_KERJA` varchar(20) NOT NULL,
  `TGL_MULAI_KERJA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `NAMA`, `NIP_NUPTK`, `JK`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `IJAZAH_TERAKHIR`, `AGAMA`, `STATUS`, `JABATAN`, `GOLONGAN`, `MASA_KERJA`, `TGL_MULAI_KERJA`) VALUES
(1, 'polon', '453534', 'Laki-Laki', 'thtrb', '2021-07-13', 's4', 'islam', 'grgr', 'bfbf', 'vcv', 'bcv', '0000-00-00'),
(2, 'bgtg', '56565', 'Laki-Laki', 'nbnbn', '2021-07-06', 'fgr', 'kristen', 'bvbv', 'bvbvb', 'btbtt', 'btbtb', '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanaan_pembelajaran`
--

CREATE TABLE `pelaksanaan_pembelajaran` (
  `ID_PELAKSANAAN_PEMBELAJARAN` int(11) NOT NULL,
  `ID_SARPRAS` int(11) NOT NULL,
  `ID_RENCANA_PEMBELAJARAN` int(11) NOT NULL,
  `ID_PEGAWAI` int(11) NOT NULL,
  `ID_JENJANG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelaksanaan_pembelajaran`
--

INSERT INTO `pelaksanaan_pembelajaran` (`ID_PELAKSANAAN_PEMBELAJARAN`, `ID_SARPRAS`, `ID_RENCANA_PEMBELAJARAN`, `ID_PEGAWAI`, `ID_JENJANG`) VALUES
(1, 1, 5, 1, 1),
(2, 1, 4, 2, 2),
(7, 1, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `ID_PENDAFTARAN` int(11) NOT NULL,
  `TGL_PEMBAYARAN` date NOT NULL,
  `TUJUAN_PEMBAYARAN` varchar(20) NOT NULL,
  `BUKTI_PEMBAYARAN` varchar(50) NOT NULL,
  `STATUS_PEMBAYARAN` varchar(20) NOT NULL,
  `NAMA_PENGIRIM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_PENDAFTARAN`, `TGL_PEMBAYARAN`, `TUJUAN_PEMBAYARAN`, `BUKTI_PEMBAYARAN`, `STATUS_PEMBAYARAN`, `NAMA_PENGIRIM`) VALUES
(1, 5, '2021-07-06', 'BCA', 'file.jpg', 'BELUM DIVALIDASI', 'paijo'),
(7, 9, '2021-07-13', 'yuyu', 'logotk.png', 'DITERIMA', 'ngjght'),
(8, 8, '2021-07-14', 'tytyt', 'download_(3).png', 'BELUM DIVALIDASI', 'bcb'),
(9, 10, '2021-07-07', 'vxvx', 'download_(2).png', 'DITERIMA', 'cxcx'),
(10, 11, '2021-07-07', 'BNI', 'download_(2).png', 'BELUM DIVALIDASI', 'lopeeee'),
(12, 12, '2021-07-15', 'sfsfsf', '1_LD4cLqvDpT0NG5lp9AUL2A.png', 'DITERIMA', 'vevev'),
(13, 13, '2021-07-06', 'BRI', 'WhatsApp_Image_2021-07-25_at_12.06.15_AM.jpeg', 'DITERIMA', 'hendra'),
(14, 15, '2021-07-13', 'yuyu', 'download_(3).png', 'DITERIMA', 'feefv');

-- --------------------------------------------------------

--
-- Table structure for table `pembelajaran`
--

CREATE TABLE `pembelajaran` (
  `ID_PEMBELAJARAN` int(11) NOT NULL,
  `ID_SISWA` int(11) NOT NULL,
  `ID_PELAKSANAAN_PEMBELAJARAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelajaran`
--

INSERT INTO `pembelajaran` (`ID_PEMBELAJARAN`, `ID_SISWA`, `ID_PELAKSANAAN_PEMBELAJARAN`) VALUES
(1, 14, 1),
(2, 15, 2),
(3, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `presensi_pegawai`
--

CREATE TABLE `presensi_pegawai` (
  `ID_PRESENSI_PEGAWAI` int(11) NOT NULL,
  `ID_PEGAWAI` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `TGL_PRESENSI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi_pegawai`
--

INSERT INTO `presensi_pegawai` (`ID_PRESENSI_PEGAWAI`, `ID_PEGAWAI`, `STATUS`, `TGL_PRESENSI`) VALUES
(1, 1, 1, '2021-07-26'),
(2, 2, 0, '2021-07-13'),
(3, 1, 2, '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_siswa`
--

CREATE TABLE `presensi_siswa` (
  `ID_PRESENSI_SISWA` int(11) NOT NULL,
  `ID_SISWA` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `TGL_PRESENSI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi_siswa`
--

INSERT INTO `presensi_siswa` (`ID_PRESENSI_SISWA`, `ID_SISWA`, `STATUS`, `TGL_PRESENSI`) VALUES
(1, 1, 2, '2021-07-13'),
(2, 16, 1, '2021-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_pembelajaran`
--

CREATE TABLE `rencana_pembelajaran` (
  `ID_RENCANA_PEMBELAJARAN` int(11) NOT NULL,
  `ID_KURIKULUM` int(11) NOT NULL,
  `PERIODE` varchar(20) NOT NULL,
  `MINGGU` int(11) NOT NULL,
  `TEMA` varchar(50) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rencana_pembelajaran`
--

INSERT INTO `rencana_pembelajaran` (`ID_RENCANA_PEMBELAJARAN`, `ID_KURIKULUM`, `PERIODE`, `MINGGU`, `TEMA`, `KETERANGAN`) VALUES
(4, 2, 'april', 2, 'Pendidikan', 'DITERIMA'),
(5, 1, 'Juni', 2, 'Lingkungan', 'DITERIMA'),
(6, 1, 'Mei', 1, 'Diri sendiri', 'DITERIMA');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID_ROLE` int(11) NOT NULL,
  `KETERANGAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_ROLE`, `KETERANGAN`) VALUES
(1, 'Tata Usaha'),
(2, 'Kepala Kurikulum'),
(3, 'Guru'),
(4, 'Kepala Sekolah'),
(5, 'Orang Tua');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras`
--

CREATE TABLE `sarpras` (
  `ID_SARPRAS` int(11) NOT NULL,
  `NAMA_SARPRAS` varchar(30) NOT NULL,
  `JENIS_SARPRAS` varchar(30) NOT NULL,
  `JUMLAH_SARPRAS` int(11) NOT NULL,
  `KEADAAN` varchar(30) NOT NULL,
  `STATUS_SARPRAS` varchar(30) NOT NULL,
  `HAK_MILIK` varchar(30) NOT NULL,
  `ASAL_SARPRAS` varchar(30) NOT NULL,
  `KETERANGAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarpras`
--

INSERT INTO `sarpras` (`ID_SARPRAS`, `NAMA_SARPRAS`, `JENIS_SARPRAS`, `JUMLAH_SARPRAS`, `KEADAAN`, `STATUS_SARPRAS`, `HAK_MILIK`, `ASAL_SARPRAS`, `KETERANGAN`) VALUES
(1, 'Ruang Mawar', 'Ruangan', 1, 'Baik', 'Milik Sendiri', 'Hak', 'Ruangan', '-');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` int(11) NOT NULL,
  `NAMA_SISWA` varchar(30) NOT NULL,
  `ID_PENDAFTARAN` int(11) NOT NULL,
  `TEMPAT_LAHIR` varchar(30) NOT NULL,
  `ALAMAT_SISWA` varchar(30) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `JK_SISWA` varchar(20) NOT NULL,
  `NAMA_ORTU` varchar(30) NOT NULL,
  `NISN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `NAMA_SISWA`, `ID_PENDAFTARAN`, `TEMPAT_LAHIR`, `ALAMAT_SISWA`, `TGL_LAHIR`, `JK_SISWA`, `NAMA_ORTU`, `NISN`) VALUES
(1, 'ouou', 9, ',iu7uj', ',i,i', '2021-07-07', 'Laki-Laki', 'NUY', '937704'),
(2, 'vdvdv', 8, 'vdvdvd', 'fbb', '2021-07-14', 'Laki-Laki', 'POLO ANJAR', '393671'),
(3, 'coba', 10, 'dfd', 'vvv', '2021-07-01', 'Laki-Laki', 'POW', '388863'),
(14, 'momo', 12, 'grgrgr', 'dfvdfd', '2016-06-16', 'Perempuan', 'FRIA', '623478'),
(15, 'Muhammad Subakti', 13, 'polokll', 'Bestelsiz Mah. 105 sokak. no 2', '2016-07-25', 'Laki-Laki', 'HENDRA', '153402'),
(16, 'Suhendra', 15, 'Candi', 'Jln. Candi 3E No. 142 Karang B', '2016-07-20', 'Perempuan', 'PAIJO BEJO', '716613');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_ROLE` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `ID_ROLE`, `USERNAME`, `PASSWORD`) VALUES
(1, 2, 'paijo', 'paijo'),
(2, 1, 'admin', 'admin'),
(3, 4, 'sugianto', 'sugianto'),
(4, 3, 'guru', 'guru'),
(5, 5, 'ortu', 'ortu'),
(6, 5, 'sudiano_paiko', '20210627'),
(7, 5, 'polo_anjar', '20210714'),
(8, 5, 'nuy', '20210707'),
(9, 5, 'pow', '20210701'),
(10, 5, 'lope', '20160607'),
(11, 5, 'fria', '20160616'),
(12, 5, 'hendra', '20160725'),
(14, 5, 'paijo_bejo', '20160720');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`ID_PENDAFTARAN`),
  ADD KEY `fk_id_jenjang` (`ID_JENJANG`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`ID_JENJANG`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`ID_KURIKULUM`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`);

--
-- Indexes for table `pelaksanaan_pembelajaran`
--
ALTER TABLE `pelaksanaan_pembelajaran`
  ADD PRIMARY KEY (`ID_PELAKSANAAN_PEMBELAJARAN`),
  ADD KEY `fk_id_jenjang_pp` (`ID_JENJANG`),
  ADD KEY `fk_id_pegawa_pp` (`ID_PEGAWAI`),
  ADD KEY `fk_id_sarpras_pp` (`ID_SARPRAS`),
  ADD KEY `fk_id_rp_pp` (`ID_RENCANA_PEMBELAJARAN`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `fk_id_pendaftaran` (`ID_PENDAFTARAN`);

--
-- Indexes for table `pembelajaran`
--
ALTER TABLE `pembelajaran`
  ADD PRIMARY KEY (`ID_PEMBELAJARAN`),
  ADD KEY `fk_id_siswa_p` (`ID_SISWA`),
  ADD KEY `fk_id_spp_p` (`ID_PELAKSANAAN_PEMBELAJARAN`);

--
-- Indexes for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  ADD PRIMARY KEY (`ID_PRESENSI_PEGAWAI`),
  ADD KEY `fk_prese_id_p` (`ID_PEGAWAI`);

--
-- Indexes for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  ADD PRIMARY KEY (`ID_PRESENSI_SISWA`),
  ADD KEY `fk_id_siswa_ppp` (`ID_SISWA`);

--
-- Indexes for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD PRIMARY KEY (`ID_RENCANA_PEMBELAJARAN`),
  ADD KEY `fk_kuriku` (`ID_KURIKULUM`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Indexes for table `sarpras`
--
ALTER TABLE `sarpras`
  ADD PRIMARY KEY (`ID_SARPRAS`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_SISWA`),
  ADD KEY `fk_id_pend` (`ID_PENDAFTARAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `fk_id_role` (`ID_ROLE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `ID_PENDAFTARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `ID_JENJANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `ID_KURIKULUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelaksanaan_pembelajaran`
--
ALTER TABLE `pelaksanaan_pembelajaran`
  MODIFY `ID_PELAKSANAAN_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pembelajaran`
--
ALTER TABLE `pembelajaran`
  MODIFY `ID_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  MODIFY `ID_PRESENSI_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  MODIFY `ID_PRESENSI_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  MODIFY `ID_RENCANA_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sarpras`
--
ALTER TABLE `sarpras`
  MODIFY `ID_SARPRAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD CONSTRAINT `fk_id_jenjang` FOREIGN KEY (`ID_JENJANG`) REFERENCES `jenjang` (`ID_JENJANG`);

--
-- Constraints for table `pelaksanaan_pembelajaran`
--
ALTER TABLE `pelaksanaan_pembelajaran`
  ADD CONSTRAINT `fk_id_rp_pp` FOREIGN KEY (`ID_RENCANA_PEMBELAJARAN`) REFERENCES `rencana_pembelajaran` (`ID_RENCANA_PEMBELAJARAN`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_id_pendaftaran` FOREIGN KEY (`ID_PENDAFTARAN`) REFERENCES `daftar_siswa` (`ID_PENDAFTARAN`);

--
-- Constraints for table `pembelajaran`
--
ALTER TABLE `pembelajaran`
  ADD CONSTRAINT `fk_id_spp_p` FOREIGN KEY (`ID_PELAKSANAAN_PEMBELAJARAN`) REFERENCES `pelaksanaan_pembelajaran` (`ID_PELAKSANAAN_PEMBELAJARAN`);

--
-- Constraints for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  ADD CONSTRAINT `fk_prese_id_p` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Constraints for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  ADD CONSTRAINT `fk_id_siswa_ppp` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD CONSTRAINT `fk_kuriku` FOREIGN KEY (`ID_KURIKULUM`) REFERENCES `kurikulum` (`ID_KURIKULUM`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_id_pend` FOREIGN KEY (`ID_PENDAFTARAN`) REFERENCES `daftar_siswa` (`ID_PENDAFTARAN`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`ID_ROLE`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
