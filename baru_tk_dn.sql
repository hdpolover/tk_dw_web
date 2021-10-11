-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 08:07 AM
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
  `FILE_KK` varchar(200) NOT NULL,
  `USERNAME_ORTU` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`ID_PENDAFTARAN`, `NAMA_TERDAFTAR`, `ALAMAT_TERDAFTAR`, `TEMPAT_LAHIR`, `AGAMA`, `TGL_LAHIR`, `JENIS_KELAMIN`, `NAMA_ORTU`, `NIK`, `TGL_PENDAFTARAN`, `STATUS_SISWA`, `ID_JENJANG`, `NOMOR_HP`, `FILE_KK`, `USERNAME_ORTU`) VALUES
(16, 'dessy aman', 'banyuwangi', 'aaa', 'Islam', '2016-09-20', 'Perempuan', 'BAPAK PARWI', '351', '2021-09-20', 'DITERIMA', 1, '088217062098', '', ''),
(17, 'dessy woro rizky', 'jalan tirtojoyo no 91', 'zimbabwe', 'Kristen', '2016-09-21', 'Perempuan', 'ANNAS FANANI', '45667', '2021-09-20', 'DITERIMA', 2, '0897998877', '', ''),
(18, 'Muhammad Aldi Subakti', 'Bestelsiz Mah. 105 sokak. no 2 D3 Zeytinburnu', '123121', 'Islam', '2016-07-06', 'Laki-Laki', 'HOJIA', '32423412', '2021-10-07', 'BELUM DIVALIDASI', 2, '081350204469', 'MUHAMMAD_ALDI_SUBAKTI_KK.pdf', ''),
(19, 'AHMAD FATIR BAIHAQI', 'Lampon RT/RW. 03/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-11-03', 'Laki-Laki', 'NURYANTO', '3510016306890004', '2021-10-08', 'DITERIMA', 1, '088217062098', 'AHMAD_FATIR_BAIHAQI_KK.JPG', ''),
(20, 'AHMAD ZANWAR HERMAN CRESPO', 'Lampon RT/RW. 04/03 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-06-28', 'Laki-Laki', 'ERWANSYAH', '3510014507830003', '2021-10-08', 'DITERIMA', 2, '088217062098', 'AHMAD_ZANWAR_HERMAN_CRESPO_KK.JPG', ''),
(21, 'ALDY FARIS M', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-11-01', 'Laki-Laki', 'SRIYADI', '35111112829', '2021-10-08', 'DITERIMA', 2, '088217062098', 'ALDY_FARIS_M_KK.JPG', ''),
(22, 'ALFIRA ADWA NUGROHO', 'Lampon RT/RW. 01/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-06-14', 'Perempuan', 'RIMBO NUGROHO', '3510016507870002', '2021-10-08', 'DITERIMA', 2, '088217062098', 'ALFIRA_ADWA_NUGROHO_KK.JPG', ''),
(23, 'ALIF QESA ALFARO', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-06-12', 'Laki-Laki', 'SAMSUL HADI', '3510014109850006', '2021-10-08', 'DITERIMA', 2, '088217062098', 'ALIF_QESA_ALFARO_KK.jpg', ''),
(24, 'ALKA ALLEGRA PRASTYA', 'Lampon RT/RW. 01/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-10-14', 'Laki-Laki', 'RONI PRASTYO', '3523445566', '2021-10-08', 'DITERIMA', 2, '088217062098', 'ALKA_ALLEGRA_PRASTYA_KK.jpg', ''),
(25, 'ALVARO IMANUEL GEOVANI', 'Lampon RT/RW. 04/01 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2016-06-14', 'Laki-Laki', 'MANUWEL TRIMO SABAT', '3510225006980000', '2021-10-08', 'DITERIMA', 1, '088217062098', 'ALVARO_IMANUEL_GEOVANI_KK.jpg', ''),
(26, 'APRILIA SALMA TALITA', 'Lampon RT/RW. 03/01 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-09-15', 'Perempuan', 'SUPARMONO', '3510015805780000', '2021-10-08', 'DITERIMA', 1, '088217062098', 'APRILIA_SALMA_TALITA_KK.JPG', ''),
(27, 'AQIL HAFIS ALKALIFI', 'Lampon RT/RW. 03/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-09-25', 'Laki-Laki', 'AGUA SUPRIYADI', '3510015206890001', '2021-10-08', 'DITERIMA', 1, '088217062098', 'AQIL_HAFIS_ALKALIFI_KK.JPG', ''),
(28, 'ARSI FANISHA PUTRI', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2016-08-17', 'Perempuan', 'JONI ARIPIN', '3510016212790001', '2021-10-08', 'DITERIMA', 1, '088217062098', 'ARSI_FANISHA_PUTRI_KK.JPG', ''),
(29, 'BUNGA DIVA SLAVINA', 'Lampon RT/RW. 01/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-08-23', 'Perempuan', 'SUSIANTO', '3510016903890001', '2021-10-08', 'DITERIMA', 1, '088217062098', 'BUNGA_DIVA_SLAVINA_KK.jpg', ''),
(31, 'CAHAYA ADEOLA KAROLIN', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-11-17', 'Perempuan', 'MUHAMAD ROHMAN', '3567789900', '2021-10-08', 'DITERIMA', 2, '088217062098', 'CAHAYA_ADEOLA_KAROLIN_KK.jpg', ''),
(32, 'DIVA ANGGELINA STEFANI', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', '', 'Islam', '2016-01-04', 'Perempuan', 'ADI TRIAWAN', '34556677889900', '2021-10-08', 'DITERIMA', 1, '88217062097', 'DIVA_ANGGELINA_STEFANI_KK.JPG', ''),
(33, 'ELSA FREDYSTA SUTRA', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-11-12', 'Perempuan', 'EKO FREDYANTO', '3510015101910003', '2021-10-08', 'DITERIMA', 2, '088217062098', 'ELSA_FREDYSTA_SUTRA_KK.JPG', ''),
(34, 'EXXEL ALZIO PUTRA', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-11-18', 'Laki-Laki', 'MUSIK ERVIKA EFENDI', '3510016308940001', '2021-10-08', 'DITERIMA', 1, '088217062098', 'EXXEL_ALZIO_PUTRA_KK.JPG', ''),
(35, 'FATKHA GIBRAN', 'Lampon RT/RW. 03/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-09-12', 'Laki-Laki', 'NDARI', '123456789', '2021-10-08', 'DITERIMA', 1, '088217062098', 'FATKHA_GIBRAN_KK.jpg', ''),
(36, 'GANSTA DWI P', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2015-10-23', 'Laki-Laki', 'SUPIRNO', '123455689900', '2021-10-08', 'DITERIMA', 1, '088217062098', 'GANSTA_DWI_P_KK.JPG', ''),
(37, 'GEA PATRISIARIANATA', 'Lampon RT/RW. 02/05 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-10-12', 'Perempuan', 'ABDUL MUNIR', '3510016509870001', '2021-10-08', 'DITERIMA', 1, '088217062098', 'GEA_PATRISIARIANATA_KK.JPG', ''),
(38, 'GRISCA SALSABILA', 'Lampon RT/RW. 03/04 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-10-19', 'Perempuan', 'MISLANI', '3510015205940003', '2021-10-08', 'DITERIMA', 1, '088217062098', 'GRISCA_SALSABILA_KK.JPG', ''),
(39, 'IQBAL FABBYAN SYAHPUTRA', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', '', 'Islam', '2016-09-20', 'Laki-Laki', 'WAGIR', '3510015610850002', '2021-10-08', 'DITERIMA', 2, '088217062098', 'IQBAL_FABBYAN_SYAHPUTRA_KK.JPG', ''),
(40, 'JOKO KHIAMORE FEREL ALGAJALI', 'Lampon RT/RW. 02/08 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-04-13', 'Laki-Laki', 'SUPARLAN', '3510014405760006', '2021-10-08', 'DITERIMA', 1, '088217062098', 'JOKO_KHIAMORE_FEREL_ALGAJALI_KK.JPG', ''),
(41, 'JORDI MANDALA YOKEY', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2016-05-17', 'Laki-Laki', 'DARSONO', '3510015506870006', '2021-10-08', 'DITERIMA', 2, '088217062098', 'JORDI_MANDALA_YOKEY_KK.JPG', ''),
(42, 'KERREL AGESVAVIVALDO', 'Lampon RT/RW. 03/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-06-29', 'Laki-Laki', 'WAKIDI', '1234567789000', '2021-10-08', 'DITERIMA', 1, '088217062098', 'KERREL_AGESVAVIVALDO_KK.jpg', ''),
(43, 'KEYNO ALVIN ARDIANSYAH', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2015-11-09', 'Laki-Laki', 'HARIYONO', '3510016604900001', '2021-10-08', 'DITERIMA', 2, '088217062098', 'KEYNO_ALVIN_ARDIANSYAH_KK.JPG', ''),
(44, 'MARCELLA SYIFANA PUTRI NURISTI', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-05-01', 'Perempuan', 'SULISTIONO', '3510015007900003', '2021-10-08', 'DITERIMA', 2, '088217062098', 'MARCELLA_SYIFANA_PUTRI_NURISTION_KK.jpg', ''),
(45, 'MARSHA MAULYDA PUTRI', 'Lampon RT/RW. 03/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-01-14', 'Perempuan', 'SUGENG SOGIONO', '34556677892', '2021-10-08', 'DITERIMA', 2, '088217062098', 'MARSHA_MAULYDA_PUTRI_KK.JPG', ''),
(46, 'MIZZA AZCA FERDIANSYAH', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-03-01', 'Laki-Laki', 'AYANG FERDIANSYAH', '358299109889', '2021-10-08', 'DITERIMA', 1, '088217062098', 'MIZZA_AZCA_FERDIANSYAH_KK.JPG', ''),
(47, 'MOKO BINTANG ALOFIAN', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-05-05', 'Laki-Laki', 'RIWANSAH', '3510015404720010', '2021-10-08', 'DITERIMA', 1, '088217062098', 'MOKO_BINTANG_ALOFIAN_KK.JPG', ''),
(48, 'NELSA FEBRIANA', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-02-07', 'Perempuan', 'EDI SUSIANTO', '3510015605840002', '2021-10-08', 'DITERIMA', 1, '088217062098', 'NELSA_FEBRIANA_KK.JPG', ''),
(49, 'PUTRA FHADIL ARDIANSYAH', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2016-04-18', 'Laki-Laki', 'PURYANTO', '3510015006810007', '2021-10-08', 'DITERIMA', 1, '088217062098', 'PUTRA_FHADIL_ARDIANSYAH_KK.JPG', ''),
(50, 'PUTRI ANGELIA MAHARANI', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'SITUBONDO', 'Islam', '2015-10-29', 'Perempuan', 'YUDIONO', '354668900877', '2021-10-08', 'DITERIMA', 2, '088217062098', 'PUTRI_ANGELIA_MAHARANI_KK.jpg', ''),
(51, 'RACHEL AYULIA PUTRI', 'Lampon RT/RW. 04/03 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-04-09', 'Perempuan', 'DWI ISWAHYUDI', '3510014606950001', '2021-10-08', 'DITERIMA', 2, '088217062098', 'RACHEL_AYULIA_PUTRI_KK.JPG', ''),
(52, 'RAFI ANZILO', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-04-06', 'Laki-Laki', 'PATEMAN', '3510014902790001', '2021-10-08', 'DITERIMA', 2, '088217062098', 'RAFI_ANZILO_KK.JPG', ''),
(53, 'RAMADHA CALLISTA RIZQI AZLIA', 'Lampon RT/RW. 04/03 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2016-07-03', 'Perempuan', 'HARIYONO', '3510014507830003', '2021-10-08', 'DITERIMA', 1, '088217062098', 'RAMADHA_CALLISTA_RIZQI_AZLIA_KK.JPG', ''),
(54, 'RASI FANISHA PUTRI', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2017-01-24', 'Perempuan', 'JONI ARIPIN', '3510016212790003', '2021-10-08', 'DITERIMA', 1, '088217062098', 'RASI_FANISHA_PUTRI_KK.JPG', ''),
(55, 'RASYA ADILA PUTRI', 'Lampon RT/RW. 02/05 Ringinsari Pesanggaran', 'TENGGARONG', 'Islam', '2016-01-03', 'Perempuan', 'HANDI GUNARSO', '6402024802860001', '2021-10-08', 'DITERIMA', 2, '088217062098', 'RASYA_ADILA_PUTRI_KK.JPG', ''),
(56, 'REVANO FERDIANSYAH', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-10-30', 'Laki-Laki', 'SUGIONO', '3510017006780007', '2021-10-08', 'DITERIMA', 2, '088217062098', 'REVANO_FERDIANSYAH_KK.JPG', ''),
(57, 'RISKY JANUAREZA KILIKULAT', 'Lampon RT/RW. 05/09 Ringinsari Pesanggaran', 'WAIHATU', 'Islam', '2016-01-28', 'Laki-Laki', 'MUHAMAD KILIKULAT', '8106014808820006', '2021-10-08', 'DITERIMA', 1, '088217062098', 'RISKY_JANUAREZA_KILIKULAT_KK.JPG', ''),
(58, 'TRISTAN PRAYOGA WIDHIYATNA', 'Lampon RT/RW. 02/02 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-05-08', 'Laki-Laki', 'PRAMANA BAKTI KARMA ', '3510224109950002', '2021-10-08', 'DITERIMA', 1, '088217062098', 'TRISTAN_PRAYOGA_WIDHIYATNA_KK.JPG', ''),
(59, 'VAREL NICHOLA ADELIO', 'Lampon RT/RW. 02/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2015-11-06', 'Laki-Laki', 'SUSIONO', '3510015003790011', '2021-10-08', 'DITERIMA', 1, '088217062098', 'VAREL_NICHOLA_ADELIO_KK.JPG', ''),
(60, 'VIRGOUN ALVAREZI', 'Lampon RT/RW. 04/10 Krajan Pesanggaran', 'BANYUWANGI', 'Islam', '2016-08-18', 'Laki-Laki', 'ANANG ROKHIM', '3510014503960003', '2021-10-08', 'DITERIMA', 2, '088217062098', 'VIRGOUN_ALVAREZI_KK.JPG', ''),
(61, 'ZAENKA ADARA D', 'Lampon RT/RW. 02/09 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-03-01', 'Perempuan', 'ANDIK', '34556633221', '2021-10-08', 'DITERIMA', 1, '088217062098', 'ZAENKA_ADARA_D_KK.JPG', ''),
(62, 'ZURDZI YAZDZA ALAIKA FI LUBNAL', 'Lampon RT/RW. 03/10 Ringinsari Pesanggaran', 'BANYUWANGI', 'Islam', '2016-04-16', 'Laki-Laki', 'AHMAD BASUKI SEPTI', '3510014308700002', '2021-10-08', 'DITERIMA', 2, '088217062098', 'ZURDZI_YAZDZA_ALAIKA_FI_LUBNAL_HAYA_KK.JPG', ''),
(63, 'Suhendra', 'Jln. Candi 3E No. 142 Karang Besuki', 'Candi', 'Katolik', '2016-07-07', 'Laki-Laki', 'ADAM ADBILAJ', '21323213', '2021-10-10', 'DITOLAK', 1, '08135020446', 'SUHENDRA_KK.png', 'user_ada738');

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
(22, 9, 2021, 'Laporan_personalia_9-2021.pdf'),
(23, 9, 2021, 'Laporan_bulanan_9-2021.pdf');

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
(11, 1, 8, 3, 1),
(12, 1, 9, 3, 2),
(13, 1, 9, 3, 2),
(15, 1, 8, 4, 2),
(16, 1, 9, 5, 1);

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
  `NAMA_PENGIRIM` varchar(30) NOT NULL,
  `NOMOR_PENGIRIM` varchar(20) NOT NULL,
  `NOMINAL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_PENDAFTARAN`, `TGL_PEMBAYARAN`, `TUJUAN_PEMBAYARAN`, `BUKTI_PEMBAYARAN`, `STATUS_PEMBAYARAN`, `NAMA_PENGIRIM`, `NOMOR_PENGIRIM`, `NOMINAL`) VALUES
(15, 16, '2021-09-20', 'untuk pendaftaran tk', 'IMG-20210512-WA0012.jpg', 'DITERIMA', 'annas fanani', '', ''),
(16, 20, '2021-10-09', '1223456677', 'AAAA.jpg', 'DITERIMA', 'Irwanto', '', ''),
(17, 19, '2021-10-09', '1234567', '6209aa6152b1584efb8174ed4f55de731e87c4b4.jpg', 'DITERIMA', '23445667888', '', ''),
(18, 21, '2021-10-09', '1234567', 'AAAA.jpg', 'DITERIMA', '123345566', '', '');

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
(4, 17, 9),
(5, 18, 10),
(6, 19, 9),
(7, 20, 10),
(8, 18, 15),
(9, 20, 15),
(10, 17, 16),
(11, 19, 16);

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
(13, 17, 3, '2021-09-11'),
(14, 17, 2, '0000-00-00'),
(15, 19, 2, '0000-00-00'),
(16, 17, 2, '2021-10-09'),
(17, 19, 2, '2021-10-09');

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
(8, 1, 'September', 1, 'Diri sendiri', 'DITERIMA'),
(9, 1, 'Oktober', 1, 'lingkungan', 'DITERIMA');

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
(17, 'dessy aman', 16, 'aaa', 'Islam', 'banyuwangi', '2016-09-20', 'Perempuan', 'BAPAK PARWI', '840737', 'AKTIF', 1),
(18, 'AHMAD ZANWAR HERMAN CRESPO', 20, 'BANYUWANGI', 'Islam', 'Lampon RT/RW. 04/03 Ringinsari', '2016-06-28', 'Laki-Laki', 'ERWANSYAH', '172021', 'AKTIF', 2),
(19, 'AHMAD FATIR BAIHAQI', 19, 'BANYUWANGI', 'Islam', 'Lampon RT/RW. 03/10 Ringinsari', '2016-11-03', 'Laki-Laki', 'NURYANTO', '345057', 'AKTIF', 1),
(20, 'ALDY FARIS M', 21, 'BANYUWANGI', 'Islam', 'Lampon RT/RW. 02/09 Ringinsari', '2015-11-01', 'Laki-Laki', 'SRIYADI', '647662', 'AKTIF', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_ROLE` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
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
(17, 5, 'hojia_350', '20160706'),
(18, 5, 'nuryanto_968', '20161103'),
(19, 5, 'erwansyah_984', '20160628'),
(20, 5, 'sriyadi_803', '20151101'),
(21, 5, 'rimbo_nugroho_801', '20160614'),
(22, 5, 'samsul_hadi_367', '20160612'),
(23, 5, 'roni_prastyo_770', '20151014'),
(24, 5, 'manuwel_trimo_sabat_', '20160614'),
(25, 5, 'suparmono_228', '20160915'),
(26, 5, 'agua_supriyadi_60', '20160925'),
(27, 5, 'joni_aripin_215', '20160817'),
(28, 5, 'susianto_168', '20160823'),
(29, 5, 'susian_tonori_25', '20161110'),
(30, 5, 'muhamad_rohman_721', '20151117'),
(31, 5, 'adi_triawan_515', '20160104'),
(32, 5, 'eko_fredyanto_315', '20151112'),
(33, 5, 'musik_ervika_efendi_', '20151118'),
(34, 5, 'ndari_756', '20160912'),
(35, 5, 'supirno_375', '20151023'),
(36, 5, 'abdul_munir_230', '20161012'),
(37, 5, 'mislani_847', '20161019'),
(38, 5, 'wagir_472', '20160920'),
(39, 5, 'suparlan_664', '20160413'),
(40, 5, 'darsono_290', '20160517'),
(41, 5, 'wakidi_125', '20160629'),
(42, 5, 'hariyono_280', '20151109'),
(43, 5, 'sulistiono_982', '20160501'),
(44, 5, 'sugeng_sogiono_577', '20160114'),
(45, 5, 'ayang_ferdiansyah_39', '20160301'),
(46, 5, 'riwansah_380', '20160505'),
(47, 5, 'edi_susianto_293', '20160207'),
(48, 5, 'puryanto_842', '20160418'),
(49, 5, 'yudiono_326', '20151029'),
(50, 5, 'dwi_iswahyudi_165', '20160409'),
(51, 5, 'pateman_228', '20160406'),
(52, 5, 'hariyono_983', '20160703'),
(53, 5, 'joni_aripin_11', '20170124'),
(54, 5, 'handi_gunarso_181', '20160103'),
(55, 5, 'sugiono_654', '20151030'),
(56, 5, 'muhamad_kilikulat_36', '20160128'),
(57, 5, 'pramana_bakti_karma_', '20160508'),
(58, 5, 'susiono_919', '20151106'),
(59, 5, 'anang_rokhim_419', '20160818'),
(60, 5, 'andik_393', '20160301'),
(61, 5, 'ahmad_basuki_septi_9', '20160416'),
(62, 5, 'user_ada738', '20160707');

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
  MODIFY `ID_PENDAFTARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
  MODIFY `ID_LAPOR_BULAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelaksanaan_pembelajaran`
--
ALTER TABLE `pelaksanaan_pembelajaran`
  MODIFY `ID_PELAKSANAAN_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pembelajaran`
--
ALTER TABLE `pembelajaran`
  MODIFY `ID_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  MODIFY `ID_PRESENSI_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  MODIFY `ID_PRESENSI_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  MODIFY `ID_RENCANA_PEMBELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
