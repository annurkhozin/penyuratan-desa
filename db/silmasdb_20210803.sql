-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2021 at 11:10 AM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silmasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kontakID` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noTlpn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kontakID`, `nama`, `alamat`, `noTlpn`) VALUES
(1, 'Bambang Tri Handika', 'Dusun Karanganyar Desa Kasiman RT.001 RW.005 Kecamatan Kasiman Bojonegoro', '085782883970'),
(2, 'Ndika', 'Karanganyar Kasiman', '087833061261');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `ktpID` int(11) NOT NULL,
  `tglKtp` date DEFAULT NULL,
  `nama` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepKeluarga` varchar(60) NOT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `pendID` int(11) NOT NULL,
  `noKK` varchar(20) DEFAULT NULL,
  `namaLengkap` varchar(80) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempatLahir` varchar(30) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma','Sarjana') DEFAULT NULL,
  `jenPekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') DEFAULT NULL,
  `statusNikah` enum('Belum Kawin','Kawin') DEFAULT NULL,
  `statHubKel` enum('Kepala Keluarga','Isteri','Anak','Cucu','Menantu') DEFAULT NULL,
  `wargaNeg` varchar(20) DEFAULT NULL,
  `noPaspor` varchar(30) DEFAULT NULL,
  `kitasKitap` varchar(30) DEFAULT NULL,
  `namaAyah` varchar(60) DEFAULT NULL,
  `namaIbu` varchar(60) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `rt` varchar(4) DEFAULT NULL,
  `rw` varchar(4) DEFAULT NULL,
  `desaKel` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kabKota` varchar(20) DEFAULT NULL,
  `kodePos` varchar(8) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`pendID`, `noKK`, `namaLengkap`, `nik`, `jenKelamin`, `tempatLahir`, `tglLahir`, `agama`, `pendidikan`, `jenPekerjaan`, `statusNikah`, `statHubKel`, `wargaNeg`, `noPaspor`, `kitasKitap`, `namaAyah`, `namaIbu`, `alamat`, `rt`, `rw`, `desaKel`, `kecamatan`, `kabKota`, `kodePos`, `provinsi`) VALUES
(1, '3522201901077680', 'WARSITO', '3522201502720003', 'Laki-Laki', 'BOJONEGORO', '1972-02-15', 'Islam', 'Tamat SD/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'WAKMINI', 'NGARTIK', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(2, '3522201901077680', 'TAMSINAH', '3522206102740001', 'Perempuan', 'BOJONEGORO', '1974-02-21', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'KASDI', 'LASTI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(3, '3522201901077680', 'HENY KURNIAWATI', '3522206801980001', 'Perempuan', 'BOJONEGORO', '1998-01-18', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WARSITO', 'TAMSINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(4, '3522201901077680', 'LINDYA PUSPITASARI', '3522206811050001', 'Perempuan', 'BOJONEGORO', '2005-11-18', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WARSITO', 'TAMSINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(5, '3522201901077876', 'SUNOTO', '3522201606680004', 'Laki-Laki', 'BOJONEGORO', '1968-06-16', 'Islam', 'SLTA/Sederajat', 'Pegawai Negeri Sipil', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'RADIN', 'RUSMIJAH', 'KARANG ANYAR', '03', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(6, '3522201901077876', 'SUNDARI', '3522206510780007', 'Perempuan', 'BOJONEGORO', '1978-10-25', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Isteri', 'WNI', '--', '--', 'RATI', 'WIJI', 'KARANG ANYAR', '03', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(7, '3522201901077876', 'WARDI', '3522202501930004', 'Laki-Laki', 'BOJONEGORO', '1993-01-25', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(8, '3522201901077876', 'DIKLAT SAPUTRO OKTAFIANI', '3522202410000001', 'Laki-Laki', 'BOJONEGORO', '2000-10-24', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(9, '3522201901077876', 'JAYA PUTRI KARUNIA ANI', '3522204907100001', 'Perempuan', 'BOJONEGORO', '2010-07-09', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(10, '3522201504120001', 'TEGUH SANTOSO', '3522201402810001', 'Laki-Laki', 'BOJONEGORO', '1981-02-14', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SLAMET', 'LASMINI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(11, '3522201504120001', 'PRIYANTINI', '3522204504910004', 'Perempuan', 'BOJONEGORO', '1991-04-05', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'PARNO', 'PARMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(12, '3522201504120001', 'ARSILA LEDI PERMATA', '3522206312100001', 'Perempuan', 'BOJONEGORO', '2010-12-23', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'TEGUH SANTOSO', 'PRIYANTINI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(13, '3522201504120001', 'WILDAN ATMA WIJAYA', '3522201710130002', 'Laki-Laki', 'BOJONEGORO', '2013-10-17', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'TEGUH SANTOSO', 'PRIYANTINI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(14, '3522202407070038', 'WAGIMIN', '3522203009820001', 'Laki-Laki', 'BOJONEGORO', '1982-09-30', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'PAIMAN', 'DALINEM', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(15, '3522202407070038', 'HARTATIK', '3522204709770004', 'Perempuan', 'BLORA', '1977-09-07', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'MURDI', 'RASMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(16, '3522202407070038', 'RENDI PRASETIYO', '3522202607030001', 'Laki-Laki', 'BLORA', '2003-07-26', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WAGIMIN', 'HARTATIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(17, '3522202407070038', 'PUTRI AMELIA', '3522206708080001', 'Perempuan', 'BOJONEGORO', '2008-08-27', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WAGIMIN', 'HARTATIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(18, '3522201901077674', 'SIRIN', '3522200702570002', 'Laki-Laki', 'BOJONEGORO', '1957-02-07', 'Islam', 'Belum Tamat SD/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(19, '3522201901077674', 'KASRI', '3522204702570003', 'Perempuan', 'BOJONEGORO', '1957-02-07', 'Islam', 'Belum Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(20, '3522201901077674', 'DIANTINI', '3522205310900003', 'Perempuan', 'BOJONEGORO', '1990-10-13', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Anak', 'WNI', '--', '--', 'SIRIN', 'KASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(21, '3522201901077674', 'MARDELLINA LUIS LUKITA SARI', '3522204804990001', 'Perempuan', 'BOJONEGORO', '1999-04-08', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'SUKARDI', 'WATI WARINATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(22, '3522201901077674', 'ARSI AKSEN SAMUDRA', '3522203994150002', 'Laki-Laki', 'BOJONEGORO', '2015-04-30', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'SUKARDI', 'WATI WARINATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(23, '3522201311090003', 'LUKMAN TAROM', '3522201312780005', 'Laki-Laki', 'BOJONEGORO', '1978-12-13', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'LAMIN', 'RASIYAH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(24, '3522201311090003', 'SUPRIHATI', '3522205802860005', 'Perempuan', 'BOJONEGORO', '1986-02-18', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'PARNO', 'PARMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(25, '3522201311090003', 'CAHYA PRITA HARUM ANINDYA', '3522204306070001', 'Perempuan', 'BOJONEGORO', '2007-06-03', 'Islam', 'Belum Tamat SD/Sederajat', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'LUKMAN TAROM', 'SUPRIHATI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(26, '3522201311090003', 'RAKHA BAGASKARA', '3522200706140001', 'Laki-Laki', 'BOJONEGORO', '2014-06-07', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'LUKMAN TAROM', 'SUPRIHATI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(27, '3522201901077889', 'KISNANDAR', '3522200807780004', 'Laki-Laki', 'BOJONEGORO', '1978-07-08', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'RAMSUK', 'YASTI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(28, '3522201901077889', 'YUSMININGSIH', '3522206303810004', 'Perempuan', 'BOJONEGORO', '1981-03-23', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SUHARTO', 'CICIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(29, '3522201901077889', 'MICO YOANSYAH RAMADHAN', '3522201911040001', 'Laki-Laki', 'BOJONEGORO', '2004-11-19', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'KISNANDAR', 'YUSMININGSIH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(30, '3522201901077889', 'KEYZA YUSNIAR FEBRIASA', '3522204702130001', 'Perempuan', 'BOJONEGORO', '2013-02-07', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'KISNANDAR', 'YUSMININGSIH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(31, '3522201901077740', 'MOHAMMAD SODIK', '3522202204680002', 'Laki-Laki', 'BOJONEGORO', '1968-04-22', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '--', '--', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(32, '3522201901077740', 'RAKIMAH', '3522207007730001', 'Perempuan', 'BOJONEGORO', '1973-07-30', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'WASIRAH', 'SANEM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(33, '3522201901077740', 'DIAH FEBRIYANTI', '3522206402960002', 'Perempuan', 'BLORA', '1996-02-24', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MOHAMMAD SODIK', 'RAKIMAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(34, '3522201901077740', 'FEBRIANA DWI LESTARI', '3522204202050001', 'Perempuan', 'BLORA', '2005-02-02', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MOHAMMAD SODIK', 'RAKIMAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(35, '3522201901077730', 'PARLAN', '3522201201590002', 'Laki-Laki', 'BOJONEGORO', '1959-01-12', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(36, '3522201901077730', 'NGASRI', '3522204110610022', 'Perempuan', 'BOJONEGORO', '1961-10-01', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(37, '3522201901077730', 'MINAR', '3522201705840003', 'Laki-Laki', 'BOJONEGORO', '1984-05-17', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(38, '3522201901077730', 'PUPUT RIYANTO', '3522202103890003', 'Laki-Laki', 'BOJONEGORO', '1989-03-21', 'Islam', 'Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(39, '3522201901077730', 'PUJI LESTARI', '3522206305930001', 'Perempuan', 'BOJONEGORO', '1993-05-23', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(40, '3522201901077730', 'KUSTANTO', '3522200306990002', 'Laki-Laki', 'BOJONEGORO', '1999-06-03', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(41, '3522201901077742', 'KARJIAN', '3522201406540001', 'Laki-Laki', 'BOJONEGORO', '1954-06-14', 'Islam', 'Tidak/Belum Sekolah', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'UNTUNG', 'MASREM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(42, '3522201901077742', 'RAKINAH', '3522205511700001', 'Perempuan', 'BOJONEGORO', '1970-10-15', 'Islam', 'Tidak/Belum Sekolah', 'Petani/Pekebun', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(43, '3522201901077742', 'ANIK ANGGRAENI', '3522206304930002', 'Perempuan', 'BOJONEGORO', '1993-04-23', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(44, '3522201901077742', 'AGUSTIN MELANI PERTIWI', '3522205408040002', 'Perempuan', 'BOJONEGORO', '2004-08-14', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(45, '3522201901077742', 'ASRI RITA MAHARANI', '3522206203080003', 'Perempuan', 'BOJONEGORO', '2008-03-22', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(46, '3522201901077742', 'AFIPAH LESTARI', '3522206607100001', 'Perempuan', 'BOJONEGORO', '2010-07-26', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(47, '3522201901077745', 'MUK ALI', '3522203112740013', 'Laki-Laki', 'BLORA', '1974-12-31', 'Islam', 'Tamat SD/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'PANDU', 'KASTINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(48, '3522201901077745', 'TUMIATI', '3522204110700012', 'Perempuan', 'BOJONEGORO', '1970-10-01', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SAKUR', 'RUSTAM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(49, '3522201901077745', 'YUSUF', 'success', 'Laki-Laki', 'BOJONEGORO', '1985-05-16', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(50, '3522201901077745', 'ADITIA NUGROHO', '3522200210940001', 'Laki-Laki', 'BOJONEGORO', '1994-10-02', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(51, '3522201901077745', 'IMRON NUR WICAKSONO', '3522202904020004', 'Laki-Laki', 'BOJONEGORO', '2002-04-29', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(52, '3522201901077701', 'JATMIKO', '3522200809740003', 'Laki-Laki', 'BOJONEGORO', '1974-09-08', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SUKIRYO', 'SRIPAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(53, '3522201901077701', 'WATINI', '3522206305820004', 'Perempuan', 'BOJONEGORO', '1982-05-23', 'Islam', 'Tamat SD/Sederajat', 'Pedagang', 'Kawin', 'Isteri', 'WNI', '--', '--', 'JAMARI', 'DASIYEM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(54, '3522201901077701', 'SUTEDY MARTNA', '3522201503030003', 'Laki-Laki', 'BOJONEGORO', '2003-03-15', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JATMIKO', 'WATINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(55, '3522201901077701', 'BAMBANG MURDANI', '3522201506110002', 'Laki-Laki', 'BOJONEGORO', '2011-06-15', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JATMIKO', 'WATINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(56, '3522201901077715', 'MASHURI', '3522200403590002', 'Laki-Laki', 'BOJONEGORO', '1959-03-04', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SAMINGUN', 'KASMONAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(57, '3522201901077715', 'PARSI', '3522205002620002', 'Perempuan', 'BOJONEGORO', '1962-02-10', 'Islam', 'SLTP/Sederajat', 'Pedagang', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SOMO RASIYO', 'SARINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(58, '3522201901077715', 'PRIYO JATI SAMPURNO', '3522201910840003', 'Laki-Laki', 'BOJONEGORO', '1984-10-19', 'Islam', 'SLTA/Sederajat', 'Pedagang', 'Kawin', 'Anak', 'WNI', '--', '--', 'MASHURI', 'PARSI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(59, '3522201901077715', 'SITI MUTMAINAH', '3522205004900003', 'Perempuan', 'BOJONEGORO', '1990-04-10', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Anak', 'WNI', '--', '--', 'MASHURI', 'PARSI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(60, '3522201901077715', 'WADAK', '3522200510880001', 'Laki-Laki', 'BOJONEGORO', '1988-10-05', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', 'Kawin', 'Menantu', 'WNI', '--', '--', 'SARJO', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(61, '3522201901077715', 'OCTAVIA NUR AINI', '3522206610100001', 'Perempuan', 'BOJONEGORO', '2010-10-26', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'WADAK', 'SITI MUTMAINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');

-- --------------------------------------------------------

--
-- Table structure for table `penyuratan`
--

CREATE TABLE `penyuratan` (
  `id` int(11) NOT NULL,
  `device_id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `id_keperluan` int(2) NOT NULL,
  `ktp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `tanggal_buat` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyuratan`
--

INSERT INTO `penyuratan` (`id`, `device_id`, `nik`, `id_keperluan`, `ktp`, `no_hp`, `catatan`, `tanggal_buat`) VALUES
(1, '1624014658225', '3522202410000001', 2, '1627964638034_man.png', '08561234567', 'Selesai', '2021-08-03 04:24:10'),
(3, '1624014658225', '3522204504910004', 3, '1627966164580_image_theme3.png', '08561234567', 'Selesai', '2021-08-03 04:50:27'),
(4, '1624014658225', '3522202410000001', 4, '1627966924921_theme_four.png', '08561234567', 'Selesai', '2021-08-03 05:02:07'),
(5, '1624014658225', '3522201710130002', 5, '1627969518470_theme_two.png', '085612474747', 'Selesai', '2021-08-03 05:45:42'),
(6, '1624014658225', '3522204504910004', 6, '1627973866688_theme_two.png', '08561234567', 'Selesai', '2021-08-03 06:58:05'),
(7, '1624014658225', '3522204907100001', 7, '1627979268510_image_theme3.png', '08561234567', 'Selesai', '2021-08-03 08:27:51'),
(8, '1624014658225', '3522206801980001', 5, '1627983383455_theme_one.png', '085607107963', 'Diproses', '2021-08-03 09:36:25'),
(9, '1624014658225', '3522206510780007', 5, '1627983485301_theme_five.png', '085607107963', 'Selesai', '2021-08-03 09:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `skck`
--

CREATE TABLE `skck` (
  `skckID` int(11) NOT NULL,
  `noSkck` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglSkck` date DEFAULT NULL,
  `nama` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma','Sarjana') NOT NULL,
  `noKtp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `mulai_berlaku` date DEFAULT NULL,
  `selesai_berlaku` date DEFAULT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck`
--

INSERT INTO `skck` (`skckID`, `noSkck`, `tglSkck`, `nama`, `lahirDi`, `tglLahir`, `pekerjaan`, `agama`, `status`, `pendidikan`, `noKtp`, `alamat`, `keperluan`, `mulai_berlaku`, `selesai_berlaku`, `id_penyuratan`) VALUES
(1, NULL, '2021-08-03', 'PRIYANTINI', 'BOJONEGORO', '1991-04-05', 'Mengurus Rumah Tangga', 'Islam', 'Kawin', 'SLTP/Sederajat', '3522204504910004', 'Dsn. KARANG ANYAR RT 01 RW 06 KEC. KASIMAN KAB. BOJONEGORO', 'Melamar kerja', NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `sktmID` int(11) NOT NULL,
  `noSktm` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglSktm` date DEFAULT NULL,
  `namaOrtu` varchar(60) NOT NULL,
  `umurOrtu` varchar(10) NOT NULL,
  `pekerjaanOrtu` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `alamatOrtu` varchar(100) NOT NULL,
  `namaAnak` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `pekerjaanAnak` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `alamatAnak` varchar(100) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sktm`
--

INSERT INTO `sktm` (`sktmID`, `noSktm`, `tglSktm`, `namaOrtu`, `umurOrtu`, `pekerjaanOrtu`, `alamatOrtu`, `namaAnak`, `lahirDi`, `tglLahir`, `pekerjaanAnak`, `alamatAnak`, `ket`, `id_penyuratan`) VALUES
(1, NULL, '2021-08-03', 'TEGUH SANTOSO', '40 Tahun', 'Karyawan Swasta', 'KARANG ANYAR RT 01 RW 06 KASIMAN, BOJONEGORO', 'WILDAN ATMA WIJAYA', 'BOJONEGORO', '2013-10-17', 'Belum/Tidak Bekerja', 'KARANG ANYAR RT 01 RW 06 KASIMAN, BOJONEGORO', 'Bansos', 5),
(2, NULL, NULL, 'WARSITO', '49 Tahun', 'Petani/Pekebun', 'KARANG ANYAR RT 02 RW 05 KASIMAN, BOJONEGORO', 'Doni', 'BOJONEGORO', '1998-01-18', 'Pelajar/Mahasiswa', 'KARANG ANYAR RT 02 RW 05 KASIMAN, BOJONEGORO', NULL, 8),
(3, NULL, '2021-08-03', 'RATI', '53 Tahun', 'Pegawai Negeri Sipil', 'KARANG ANYAR RT 03 RW 05 KASIMAN, BOJONEGORO', 'SUNDARI', 'BOJONEGORO', '1978-10-25', 'Wiraswasta', 'KARANG ANYAR RT 03 RW 05 KASIMAN, BOJONEGORO', 'Sekolah', 9);

-- --------------------------------------------------------

--
-- Table structure for table `sukeh`
--

CREATE TABLE `sukeh` (
  `sukehID` int(11) NOT NULL,
  `noSukeh` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglSukeh` date DEFAULT NULL,
  `nama` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kehilangan` varchar(100) NOT NULL,
  `atasNama` varchar(60) NOT NULL,
  `alamatKeh` varchar(100) NOT NULL,
  `lokKehilangan` varchar(40) NOT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukeh`
--

INSERT INTO `sukeh` (`sukehID`, `noSukeh`, `tglSukeh`, `nama`, `lahirDi`, `tglLahir`, `pekerjaan`, `agama`, `status`, `alamat`, `kehilangan`, `atasNama`, `alamatKeh`, `lokKehilangan`, `id_penyuratan`) VALUES
(1, NULL, '2021-08-03', 'JAYA PUTRI KARUNIA ANI', 'BOJONEGORO', '2010-07-09', 'Belum/Tidak Bekerja', 'Islam', 'Belum Kawin', 'KARANG ANYAR RT 03 RW 06 KASIMAN, BOJONEGORO', 'HP', 'Doni', 'KARANG ANYAR RT 03 RW 06 KASIMAN, BOJONEGORO', 'Jl Cepu - Bojonegoro', 7);

-- --------------------------------------------------------

--
-- Table structure for table `sukel`
--

CREATE TABLE `sukel` (
  `sukelID` int(11) NOT NULL,
  `noSukel` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglSukel` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `namaAnak` varchar(60) NOT NULL,
  `anakKe` varchar(20) NOT NULL,
  `lahirDi` varchar(11) NOT NULL,
  `hariLahir` varchar(30) NOT NULL,
  `tglLahir` varchar(20) NOT NULL,
  `jenKelamin` enum('Perempuan','Laki-Laki') NOT NULL DEFAULT 'Laki-Laki',
  `namaIbu` varchar(20) NOT NULL,
  `umurIbu` varchar(20) NOT NULL,
  `alamatIbu` varchar(100) NOT NULL,
  `namaBapak` varchar(100) NOT NULL,
  `umurBapak` varchar(30) NOT NULL,
  `alamatBapak` varchar(100) NOT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukel`
--

INSERT INTO `sukel` (`sukelID`, `noSukel`, `tglSukel`, `namaAnak`, `anakKe`, `lahirDi`, `hariLahir`, `tglLahir`, `jenKelamin`, `namaIbu`, `umurIbu`, `alamatIbu`, `namaBapak`, `umurBapak`, `alamatBapak`, `id_penyuratan`) VALUES
(1, NULL, '2021-08-03', 'Abdul', '2 (Kedua)', 'BOJONEGORO', 'Senin', '2010-07-09', 'Laki-Laki', 'PRIYANTINI', '23', 'KARANG ANYAR RT 01 RW 06 KASIMAN, BOJONEGORO', 'TEGUH SANTOSO', '28', 'KARANG ANYAR RT 01 RW 06 KASIMAN, BOJONEGORO', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sukem`
--

CREATE TABLE `sukem` (
  `sukemID` int(11) NOT NULL,
  `noSukem` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglSukem` date DEFAULT NULL,
  `namaAlm` varchar(60) NOT NULL,
  `jenKelamin` varchar(10) NOT NULL,
  `alamatAlm` varchar(100) NOT NULL,
  `hariWafat` varchar(20) NOT NULL,
  `tglWafat` date NOT NULL,
  `wafatDi` varchar(30) NOT NULL,
  `sebabWafat` varchar(30) NOT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukem`
--

INSERT INTO `sukem` (`sukemID`, `noSukem`, `tglSukem`, `namaAlm`, `jenKelamin`, `alamatAlm`, `hariWafat`, `tglWafat`, `wafatDi`, `sebabWafat`, `id_penyuratan`) VALUES
(1, NULL, '2021-08-03', 'DIKLAT SAPUTRO OKTAFIANI', 'Laki-Laki', 'KARANG ANYAR RT 03 RW 06 KASIMAN, BOJONEGORO', 'Senin', '2021-08-02', 'Rumha sakit', 'Asma', 4);

-- --------------------------------------------------------

--
-- Table structure for table `suket`
--

CREATE TABLE `suket` (
  `suketID` int(11) NOT NULL,
  `jenisSuket` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `noSuket` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglSuket` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` varchar(20) NOT NULL,
  `jenKelamin` enum('Perempuan','Laki-Laki') NOT NULL DEFAULT 'Laki-Laki',
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_penyuratan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suket`
--

INSERT INTO `suket` (`suketID`, `jenisSuket`, `noSuket`, `tglSuket`, `nama`, `lahirDi`, `tglLahir`, `jenKelamin`, `pekerjaan`, `agama`, `status`, `keperluan`, `alamat`, `id_penyuratan`) VALUES
(1, 'SURAT KETERANGAN PENDUDUK', NULL, '2021-08-03', 'DIKLAT SAPUTRO OKTAFIANI', 'BOJONEGORO', '2000-10-24', 'Laki-Laki', 'Pelajar/Mahasiswa', 'Islam', 'Belum Kawin', 'Mendirikan Toko', 'Desa KARANG ANYAR RT 03 RW 06 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(11) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempatLahir` varchar(255) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma','Sarjana') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `statusNikah` enum('Belum Kawin','Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullname`, `username`, `password`, `level`, `alamat`, `tempatLahir`, `tglLahir`, `jenKelamin`, `agama`, `pendidikan`, `statusNikah`) VALUES
(1, 'Adminstrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Pegawai', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'Pegawai', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'R. Ghozali Dwianto, S.E.', 'kades', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'Kades', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'User 1', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'Admin', 'Jl.Cepu', 'Cepu', '1990-06-01', 'Laki-Laki', 'Islam', 'Diploma', 'Belum Kawin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontakID`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`ktpID`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`pendID`);

--
-- Indexes for table `penyuratan`
--
ALTER TABLE `penyuratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`skckID`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`sktmID`);

--
-- Indexes for table `sukeh`
--
ALTER TABLE `sukeh`
  ADD PRIMARY KEY (`sukehID`);

--
-- Indexes for table `sukel`
--
ALTER TABLE `sukel`
  ADD PRIMARY KEY (`sukelID`);

--
-- Indexes for table `sukem`
--
ALTER TABLE `sukem`
  ADD PRIMARY KEY (`sukemID`);

--
-- Indexes for table `suket`
--
ALTER TABLE `suket`
  ADD PRIMARY KEY (`suketID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kontakID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `ktpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `pendID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `penyuratan`
--
ALTER TABLE `penyuratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skck`
--
ALTER TABLE `skck`
  MODIFY `skckID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `sktmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sukeh`
--
ALTER TABLE `sukeh`
  MODIFY `sukehID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sukel`
--
ALTER TABLE `sukel`
  MODIFY `sukelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sukem`
--
ALTER TABLE `sukem`
  MODIFY `sukemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suket`
--
ALTER TABLE `suket`
  MODIFY `suketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
