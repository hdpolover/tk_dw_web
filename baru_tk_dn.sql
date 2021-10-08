-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 04:28 AM
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
-- Database: `baru_tk_dn`
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
  `AGAMA` varchar(20) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN` varchar(20) NOT NULL,
  `NAMA_ORTU` varchar(20) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TGL_PENDAFTARAN` date NOT NULL,
  `STATUS_SISWA` varchar(20) NOT NULL,
  `ID_JENJANG` int(11) NOT NULL,
  `NOMOR_HP` varchar(20) NOT NULL,
  `FILE_KK` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`ID_PENDAFTARAN`, `NAMA_TERDAFTAR`, `ALAMAT_TERDAFTAR`, `TEMPAT_LAHIR`, `AGAMA`, `TGL_LAHIR`, `JENIS_KELAMIN`, `NAMA_ORTU`, `NIK`, `TGL_PENDAFTARAN`, `STATUS_SISWA`, `ID_JENJANG`, `NOMOR_HP`, `FILE_KK`) VALUES
(16, 'dessy aman', 'banyuwangi', 'aaa', 'Islam', '2016-09-20', 'Perempuan', 'BAPAK PARWI', '351', '2021-09-20', 'DITERIMA', 1, '088217062098', ''),
(17, 'dessy woro rizky', 'jalan tirtojoyo no 91', 'zimbabwe', 'Kristen', '2016-09-21', 'Perempuan', 'ANNAS FANANI', '45667', '2021-09-20', 'DITERIMA', 2, '0897998877', ''),
(18, 'Muhammad Aldi Subakti', 'Bestelsiz Mah. 105 sokak. no 2 D3 Zeytinburnu', '123121', 'Islam', '2016-07-06', 'Laki-Laki', 'HOJIA', '32423412', '2021-10-07', 'BELUM DIVALIDASI', 2, '081350204469', 'MUHAMMAD_ALDI_SUBAKTI_KK.pdf');

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
(2, 'Kelompok B');

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
(1, 'K13', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_bulanan`
--

CREATE TABLE `laporan_bulanan` (
  `ID_LAPOR_BULAN` int(11) NOT NULL,
  `BULAN` int(11) NOT NULL,
  `TP` int(11) NOT NULL,
  `FILE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_bulanan`
--

INSERT INTO `laporan_bulanan` (`ID_LAPOR_BULAN`, `BULAN`, `TP`, `FILE`) VALUES
(22, 9, 2021, 'Laporan_personalia_9-2021.pdf');

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
  `TGL_MULAI_KERJA` date NOT NULL,
  `STATUS_KEPEGAWAIAN` varchar(50) NOT NULL,
  `MENGAJAR_KELOMPOK` varchar(10) NOT NULL,
  `NOMOR_SK` varchar(20) NOT NULL,
  `TGL_SK` date DEFAULT NULL,
  `RUANG` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `NAMA`, `NIP_NUPTK`, `JK`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `IJAZAH_TERAKHIR`, `AGAMA`, `STATUS`, `JABATAN`, `GOLONGAN`, `TGL_MULAI_KERJA`, `STATUS_KEPEGAWAIAN`, `MENGAJAR_KELOMPOK`, `NOMOR_SK`, `TGL_SK`, `RUANG`) VALUES
(3, 'SUGIANTO', '8158747649200010', 'Laki-Laki', 'BANYUWANGI', '1969-08-26', 'S1 PAUD', 'islam', 'PNS dpk', 'KEPALA SEKOLAH', 'III', '2010-05-01', 'PNS Dpk', 'B', '813/164/429.305/2008', '2007-01-01', 'C'),
(4, 'SITI NURHALIMAH', '7641761662220002', 'Perempuan', 'BANYUWANGI', '1983-03-09', 'S1 PAUD', 'islam', 'GURU/PTY', 'GURU KELAS', '-', '2009-07-01', 'GTY', 'A', '018/DWP/PSG/VII/2009', '2009-07-01', '-'),
(5, 'SUKARMINI', '9042756657300053', 'Perempuan', 'BANYUWANGI', '1978-07-10', 'S1 PAUD', 'islam', 'GURU/PTY', 'GURU KELAS', '-', '2009-07-01', 'GTY', 'A', '005/TK.DW.3/VI/1997', '2009-07-01', '-');

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
(9, 1, 8, 4, 1),
(10, 1, 8, 4, 2),
(11, 1, 8, 3, 1);

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
(15, 16, '2021-09-20', 'untuk pendaftaran tk', 'IMG-20210512-WA0012.jpg', 'DITERIMA', 'annas fanani');

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
(4, 17, 9);

-- --------------------------------------------------------

--
-- Table structure for table `presensi_pegawai`
--

CREATE TABLE `presensi_pegawai` (
  `ID_PRESENSI_PEGAWAI` int(11) NOT NULL,
  `ID_PEGAWAI` int(11) NOT NULL,
  `STATUS` int(11) DEFAULT NULL COMMENT '1 = tidak hadir, 2 = hadir, 3 = sakit, 4 = ijin',
  `TGL_PRESENSI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi_pegawai`
--

INSERT INTO `presensi_pegawai` (`ID_PRESENSI_PEGAWAI`, `ID_PEGAWAI`, `STATUS`, `TGL_PRESENSI`) VALUES
(6, 3, 1, '2021-09-20'),
(7, 4, 1, '2021-09-20'),
(8, 5, 1, '2021-09-20'),
(9, 3, 2, '2021-09-24'),
(10, 5, 3, '2021-09-25'),
(11, 4, 2, '2021-09-25'),
(12, 3, 2, '2021-09-16'),
(13, 4, 2, '2021-09-16'),
(14, 5, 2, '2021-09-16'),
(15, 3, 2, '2021-09-14'),
(16, 4, 1, '2021-09-14'),
(17, 5, 2, '2021-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_siswa`
--

CREATE TABLE `presensi_siswa` (
  `ID_PRESENSI_SISWA` int(11) NOT NULL,
  `ID_SISWA` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL COMMENT '1 = tidak hadir, 2 = hadir, 3 = sakit, 4 = ijin',
  `TGL_PRESENSI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi_siswa`
--

INSERT INTO `presensi_siswa` (`ID_PRESENSI_SISWA`, `ID_SISWA`, `STATUS`, `TGL_PRESENSI`) VALUES
(11, 17, 1, '2021-09-20'),
(12, 17, 3, '2021-09-16'),
(13, 17, 3, '2021-09-11');

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
(8, 1, 'September', 1, 'Diri sendiri', 'DITERIMA');

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
  `AGAMA` varchar(20) NOT NULL,
  `ALAMAT_SISWA` varchar(30) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `JK_SISWA` varchar(20) NOT NULL,
  `NAMA_ORTU` varchar(30) NOT NULL,
  `NISN` varchar(30) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `ID_JENJANG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `NAMA_SISWA`, `ID_PENDAFTARAN`, `TEMPAT_LAHIR`, `AGAMA`, `ALAMAT_SISWA`, `TGL_LAHIR`, `JK_SISWA`, `NAMA_ORTU`, `NISN`, `STATUS`, `ID_JENJANG`) VALUES
(17, 'dessy aman', 16, 'aaa', 'Islam', 'banyuwangi', '2016-09-20', 'Perempuan', 'BAPAK PARWI', '840737', 'AKTIF', 1);

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
(14, 5, 'paijo_bejo', '20160720'),
(15, 5, 'bapak_parwi', '20160920'),
(16, 5, 'annas_fanani', '20160921'),
(17, 5, 'hojia_350', '20160706');

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
-- Indexes for table `laporan_bulanan`
--
ALTER TABLE `laporan_bulanan`
  ADD PRIMARY KEY (`ID_LAPOR_BULAN`);

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
  MODIFY `ID_PENDAFTARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `laporan_bulanan`
--
ALTER TABLE `laporan_bulanan`
  MODIFY `ID_LAPOR_BULAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelaksanaan_pembelajaran`
--
ALTER TABLE `pelaksanaan_pembelajaran`
  MODIFY `ID_PELAKSANAAN_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembelajaran`
--
ALTER TABLE `pembelajaran`
  MODIFY `ID_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  MODIFY `ID_PRESENSI_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  MODIFY `ID_PRESENSI_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  MODIFY `ID_RENCANA_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`ID_ROLE`) REFERENCES `roles` (`ID_ROLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
