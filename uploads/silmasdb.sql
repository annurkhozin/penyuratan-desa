-- phpMyAdmin SQL Dump
-- version 4.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2021 at 08:32 AM
-- Server version: 5.6.22
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `silmasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
`kontakID` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noTlpn` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `ktp` (
`ktpID` int(11) NOT NULL,
  `tglKtp` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` varchar(50) NOT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepKeluarga` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`ktpID`, `tglKtp`, `nama`, `lahirDi`, `tglLahir`, `jenKelamin`, `status`, `pekerjaan`, `alamat`, `kepKeluarga`) VALUES
(1, '18 Maret 2016', 'SITI PATONAH', 'Bojonegoro', '13 - 12 -1993', 'Perempuan', 'Kawin', 'Belum/Tidak Bekerja', 'Desa Kasiman RT.03 RW.02 Kec. Kasiman Kab. Bojonegoro.', 'ZULFAHMI SIREGAR'),
(2, '02 Juni 2016', 'MARDELLINA LUIS LUKITA SARI', 'BOJONEGORO', '8 April 1999', 'Perempuan', 'Belum Kawin', 'Pelajar/Mahasiswa', 'DSN. KARANG ANYAR RT 02 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'SIRIN'),
(3, '04 Juni 2016', 'HENY KURNIAWATI', 'BOJONEGORO', '18 Januari 1998', 'Perempuan', 'Belum Kawin', 'Pelajar/Mahasiswa', 'DSN. KARANG ANYAR RT 02 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'WARSITO'),
(4, '15-06-2016', 'Bambang Tri Handika', 'Bojonegoro', '06 Juli 1996', 'Laki-Laki', 'Belum Kawin', 'Pelajar/Mahasiswa', 'Dusun Karanganyar Desa Kasiman RT.001 RW.005 Kecamatan Kasiman Bojonegoro', 'Yusmono'),
(5, '15-06-2016', 'RAKHA BAGASKARA', 'BOJONEGORO', '7 Juni 2014', 'Laki-Laki', 'Belum Kawin', 'Belum/Tidak Bekerja', 'Desa KARANG ANYAR RT 01 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'LUKMAN TAROM'),
(6, '15-06-2016', 'HENY KURNIAWATI', 'BOJONEGORO', '18 Januari 1998', 'Perempuan', 'Belum Kawin', 'Pelajar/Mahasiswa', 'Desa KARANG ANYAR RT 02 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'WARSITO');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE IF NOT EXISTS `penduduk` (
`pendID` int(11) NOT NULL,
  `noKK` varchar(20) DEFAULT NULL,
  `namaLengkap` varchar(80) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempatLahir` varchar(30) DEFAULT NULL,
  `tglLahir` varchar(20) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`pendID`, `noKK`, `namaLengkap`, `nik`, `jenKelamin`, `tempatLahir`, `tglLahir`, `agama`, `pendidikan`, `jenPekerjaan`, `statusNikah`, `statHubKel`, `wargaNeg`, `noPaspor`, `kitasKitap`, `namaAyah`, `namaIbu`, `alamat`, `rt`, `rw`, `desaKel`, `kecamatan`, `kabKota`, `kodePos`, `provinsi`) VALUES
(1, '3522201901077680', 'WARSITO', '3522201502720003', 'Laki-Laki', 'BOJONEGORO', '15 Pebruari 1972', 'Islam', 'Tamat SD/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'WAKMINI', 'NGARTIK', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(2, '3522201901077680', 'TAMSINAH', '3522206102740001', 'Perempuan', 'BOJONEGORO', '21 Pebruari 1974', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'KASDI', 'LASTI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(3, '3522201901077680', 'HENY KURNIAWATI', '3522206801980001', 'Perempuan', 'BOJONEGORO', '18 Januari 1998', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WARSITO', 'TAMSINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(4, '3522201901077680', 'LINDYA PUSPITASARI', '3522206811050001', 'Perempuan', 'BOJONEGORO', '18 November 2005', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WARSITO', 'TAMSINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(5, '3522201901077876', 'SUNOTO', '3522201606680004', 'Laki-Laki', 'BOJONEGORO', '16 Juni 1968', 'Islam', 'SLTA/Sederajat', '', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'RADIN', 'RUSMIJAH', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(6, '3522201901077876', 'SUNDARI', '3522206510780007', 'Perempuan', 'BOJONEGORO', '25 Oktober 1978', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Isteri', 'WNI', '--', '--', 'RATI', 'WIJI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(7, '3522201901077876', 'WARDI', '3522202501930004', 'Laki-Laki', 'BOJONEGORO', '25 Januari 1993', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(8, '3522201901077876', 'DIKLAT SAPUTRO OKTAFIANI', '3522202410000001', 'Laki-Laki', 'BOJONEGORO', '24 Oktober 2000', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(9, '3522201901077876', 'JAYA PUTRI KARUNIA ANI', '3522204907100001', 'Perempuan', 'BOJONEGORO', '09 Juli 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(10, '3522201504120001', 'TEGUH SANTOSO', '3522201402810001', 'Laki-Laki', 'BOJONEGORO', '14 Pebruari 1981', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SLAMET', 'LASMINI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(11, '3522201504120001', 'PRIYANTINI', '3522204504910004', 'Perempuan', 'BOJONEGORO', '05 April 1991', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'PARNO', 'PARMI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(12, '3522201504120001', 'ARSILA LEDI PERMATA', '3522206312100001', 'Perempuan', 'BOJONEGORO', '23 Desember 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'TEGUH SANTOSO', 'PRIYANTINI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(13, '3522201504120001', 'WILDAN ATMA WIJAYA', '3522201710130002', 'Laki-Laki', 'BOJONEGORO', '17 Oktober 2013', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'TEGUH SANTOSO', 'PRIYANTINI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(14, '3522202407070038', 'WAGIMIN', '3522203009820001', 'Laki-Laki', 'BOJONEGORO', '30 September 1982', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'PAIMAN', 'DALINEM', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(15, '3522202407070038', 'HARTATIK', '3522204709770004', 'Perempuan', 'BLORA', '7 September 1977', 'Islam', 'Tamat SD/Sederajat', '', 'Kawin', 'Isteri', 'WNI', '--', '--', 'MURDI', 'RASMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(16, '3522202407070038', 'RENDI PRASETIYO', '3522202607030001', 'Laki-Laki', 'BLORA', '26 Juli 2003', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WAGIMIN', 'HARTATIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(17, '3522202407070038', 'PUTRI AMELIA', '3522206708080001', 'Perempuan', 'BOJONEGORO', '27 Agustus 2008', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WAGIMIN', 'HARTATIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(18, '3522201901077674', 'SIRIN', '3522200702570002', 'Laki-Laki', 'BOJONEGORO', '7 Pebruari 1957', 'Islam', 'Belum Tamat SD/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(19, '3522201901077674', 'KASRI', '3522204702570003', 'Perempuan', 'BOJONEGORO', '7 Pebruari 1957', 'Islam', 'Belum Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(20, '3522201901077674', 'DIANTINI', '3522205310900003', 'Perempuan', 'BOJONEGORO', '13 Oktober 1990', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Anak', 'WNI', '--', '--', 'SIRIN', 'KASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(21, '3522201901077674', 'MARDELLINA LUIS LUKITA SARI', '3522204804990001', 'Perempuan', 'BOJONEGORO', '8 April 1999', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'SUKARDI', 'WATI WARINATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(22, '3522201901077674', 'ARSI AKSEN SAMUDRA', '3522203994150002', 'Laki-Laki', 'BOJONEGORO', '30 April 2015', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'SUKARDI', 'WATI WARINATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(23, '3522201311090003', 'LUKMAN TAROM', '3522201312780005', 'Laki-Laki', 'BOJONEGORO', '13 Desember 1978', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'LAMIN', 'RASIYAH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(24, '3522201311090003', 'SUPRIHATI', '3522205802860005', 'Perempuan', 'BOJONEGORO', '18 Pebruari 1986', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'PARNO', 'PARMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(25, '3522201311090003', 'CAHYA PRITA HARUM ANINDYA', '3522204306070001', 'Perempuan', 'BOJONEGORO', '3 Juni 2007', 'Islam', 'Belum Tamat SD/Sederajat', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'LUKMAN TAROM', 'SUPRIHATI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(26, '3522201311090003', 'RAKHA BAGASKARA', '3522200706140001', 'Laki-Laki', 'BOJONEGORO', '7 Juni 2014', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'LUKMAN TAROM', 'SUPRIHATI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(27, '3522201901077889', 'KISNANDAR', '3522200807780004', 'Laki-Laki', 'BOJONEGORO', '8 Juli 1978', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'RAMSUK', 'YASTI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(28, '3522201901077889', 'YUSMININGSIH', '3522206303810004', 'Perempuan', 'BOJONEGORO', '23 Maret 1981', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SUHARTO', 'CICIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(29, '3522201901077889', 'MICO YOANSYAH RAMADHAN', '3522201911040001', 'Laki-Laki', 'BOJONEGORO', '19 November 2004', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'KISNANDAR', 'YUSMININGSIH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(30, '3522201901077889', 'KEYZA YUSNIAR FEBRIASA', '3522204702130001', 'Perempuan', 'BOJONEGORO', '7 Pebruari 2013', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'KISNANDAR', 'YUSMININGSIH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(31, '3522201901077740', 'MOHAMMAD SODIK', '3522202204680002', 'Laki-Laki', 'BOJONEGORO', '22 April 1968', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '--', '--', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(32, '3522201901077740', 'RAKIMAH', '3522207007730001', 'Perempuan', 'BOJONEGORO', '30 Juli 1973', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'WASIRAH', 'SANEM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(33, '3522201901077740', 'DIAH FEBRIYANTI', '3522206402960002', 'Perempuan', 'BLORA', '24 Pebruari 1996', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MOHAMMAD SODIK', 'RAKIMAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(34, '3522201901077740', 'FEBRIANA DWI LESTARI', '3522204202050001', 'Perempuan', 'BLORA', '02 Pebruari 2005', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MOHAMMAD SODIK', 'RAKIMAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(35, '3522201901077730', 'PARLAN', '3522201201590002', 'Laki-Laki', 'BOJONEGORO', '12 Januari 1959', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(36, '3522201901077730', 'NGASRI', '3522204110610022', 'Perempuan', 'BOJONEGORO', '01 Oktober 1961', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(37, '3522201901077730', 'MINAR', '3522201705840003', 'Laki-Laki', 'BOJONEGORO', '17 Mei 1984', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(38, '3522201901077730', 'PUPUT RIYANTO', '3522202103890003', 'Laki-Laki', 'BOJONEGORO', '21 Maret 1989', 'Islam', 'Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(39, '3522201901077730', 'PUJI LESTARI', '3522206305930001', 'Perempuan', 'BOJONEGORO', '23 Mei 1993', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(40, '3522201901077730', 'KUSTANTO', '3522200306990002', 'Laki-Laki', 'BOJONEGORO', '03 Juni 1999', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(41, '3522201901077742', 'KARJIAN', '3522201406540001', 'Laki-Laki', 'BOJONEGORO', '14 Juni 1954', 'Islam', 'Tidak/Belum Sekolah', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'UNTUNG', 'MASREM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(42, '3522201901077742', 'RAKINAH', '3522205511700001', 'Perempuan', 'BOJONEGORO', '15 November 1970', 'Islam', 'Tidak/Belum Sekolah', 'Petani/Pekebun', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(43, '3522201901077742', 'ANIK ANGGRAENI', '3522206304930002', 'Perempuan', 'BOJONEGORO', '23 April 1993', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(44, '3522201901077742', 'AGUSTIN MELANI PERTIWI', '3522205408040002', 'Perempuan', 'BOJONEGORO', '14 Agustus 2004', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(45, '3522201901077742', 'ASRI RITA MAHARANI', '3522206203080003', 'Perempuan', 'BOJONEGORO', '22 Maret 2008', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(46, '3522201901077742', 'AFIPAH LESTARI', '3522206607100001', 'Perempuan', 'BOJONEGORO', '26 Juli 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(47, '3522201901077745', 'MUK ALI', '3522203112740013', 'Laki-Laki', 'BLORA', '31 Desember 1974', 'Islam', 'Tamat SD/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'PANDU', 'KASTINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(48, '3522201901077745', 'TUMIATI', '3522204110700012', 'Perempuan', 'BOJONEGORO', '01 Oktober 1970', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SAKUR', 'RUSTAM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(49, '3522201901077745', 'YUSUF', '3522201605850001', 'Laki-Laki', 'BOJONEGORO', '16 Mei 1985', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(50, '3522201901077745', 'ADITIA NUGROHO', '3522200210940001', 'Laki-Laki', 'BOJONEGORO', '02 Oktober 1994', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(51, '3522201901077745', 'IMRON NUR WICAKSONO', '3522202904020004', 'Laki-Laki', 'BOJONEGORO', '29 April 2002', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(52, '3522201901077701', 'JATMIKO', '3522200809740003', 'Laki-Laki', 'BOJONEGORO', '08 September 1974', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SUKIRYO', 'SRIPAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(53, '3522201901077701', 'WATINI', '3522206305820004', 'Perempuan', 'BOJONEGORO', '23 Mei 1982', 'Islam', 'Tamat SD/Sederajat', 'Pedagang', 'Kawin', 'Isteri', 'WNI', '--', '--', 'JAMARI', 'DASIYEM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(54, '3522201901077701', 'SUTEDY MARTNA', '3522201503030003', 'Laki-Laki', 'BOJONEGORO', '15 Maret 2003', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JATMIKO', 'WATINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(55, '3522201901077701', 'BAMBANG MURDANI', '3522201506110002', 'Laki-Laki', 'BOJONEGORO', '15 Juni 2011', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JATMIKO', 'WATINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(56, '3522201901077715', 'MASHURI', '3522200403590002', 'Laki-Laki', 'BOJONEGORO', '04 Maret 1959', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SAMINGUN', 'KASMONAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(57, '3522201901077715', 'PARSI', '3522205002620002', 'Perempuan', 'BOJONEGORO', '10 Pebruari 1962', 'Islam', 'SLTP/Sederajat', 'Pedagang', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SOMO RASIYO', 'SARINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(58, '3522201901077715', 'PRIYO JATI SAMPURNO', '3522201910840003', 'Laki-Laki', 'BOJONEGORO', '19 Oktober 1984', 'Islam', 'SLTA/Sederajat', 'Pedagang', 'Kawin', 'Anak', 'WNI', '--', '--', 'MASHURI', 'PARSI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(59, '3522201901077715', 'SITI MUTMAINAH', '3522205004900003', 'Perempuan', 'BOJONEGORO', '10 April 1990', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Anak', 'WNI', '--', '--', 'MASHURI', 'PARSI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(60, '3522201901077715', 'WADAK', '3522200510880001', 'Laki-Laki', 'BOJONEGORO', '05 Oktober 1988', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', 'Kawin', 'Menantu', 'WNI', '--', '--', 'SARJO', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR'),
(61, '3522201901077715', 'OCTAVIA NUR AINI', '3522206610100001', 'Perempuan', 'BOJONEGORO', '26 Oktober 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'WADAK', 'SITI MUTMAINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE IF NOT EXISTS `permohonan` (
`id` int(11) NOT NULL,
  `device_id` char(36) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `keperluan` int(2) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `device_id`, `nik`, `keperluan`, `gambar`, `catatan`) VALUES
(2, '', '3522062304950001', 1, 'jahe.jpg', 'Diajukan'),
(3, '', '3522062304950001', 1, 'jahe.jpg', 'Diajukan');

-- --------------------------------------------------------

--
-- Table structure for table `skck`
--

CREATE TABLE IF NOT EXISTS `skck` (
`skckID` int(11) NOT NULL,
  `noSkck` varchar(40) NOT NULL,
  `tglSkck` varchar(40) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` varchar(20) NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma','Sarjana') NOT NULL,
  `noKtp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `berlaku` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck`
--

INSERT INTO `skck` (`skckID`, `noSkck`, `tglSkck`, `nama`, `lahirDi`, `tglLahir`, `pekerjaan`, `agama`, `status`, `pendidikan`, `noKtp`, `alamat`, `keperluan`, `berlaku`) VALUES
(1, '001', '14 Maret 2016', 'SRI WAHYUNI', 'Bojonegoro', '31 Mei 1983', 'Karyawan Swasta', 'Islam', 'Kawin', '', '3522207105830002', 'Ds. Kasiman RT04 RW 04 Kec Kasiman Bojonegoro', 'Mengurus ijin BUJP ', '14 - 03 - 2016 S/d 14 - 08 - 2016');

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE IF NOT EXISTS `sktm` (
`sktmID` int(11) NOT NULL,
  `noSktm` varchar(40) NOT NULL,
  `tglSktm` varchar(40) NOT NULL,
  `namaOrtu` varchar(60) NOT NULL,
  `umurOrtu` varchar(10) NOT NULL,
  `pekerjaanOrtu` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `alamatOrtu` varchar(100) NOT NULL,
  `namaAnak` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` varchar(40) NOT NULL,
  `pekerjaanAnak` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `alamatAnak` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sktm`
--

INSERT INTO `sktm` (`sktmID`, `noSktm`, `tglSktm`, `namaOrtu`, `umurOrtu`, `pekerjaanOrtu`, `alamatOrtu`, `namaAnak`, `lahirDi`, `tglLahir`, `pekerjaanAnak`, `alamatAnak`) VALUES
(1, '471', '15 Februari 2016', 'YUSMONO', '58 Tahun', 'Karyawan Swasta', 'Ds. Kasiman RT.001 RW.005 Kec. Kasiman Bojonegoro', 'BAMBANG TRI HANDIKA', 'Bojonegoro', '06 Juli 1996', 'Pelajar/Mahasiswa', 'Ds. Kasiman RT.001 RW.005 Kec. Kasiman Bojonegoro');

-- --------------------------------------------------------

--
-- Table structure for table `sukeh`
--

CREATE TABLE IF NOT EXISTS `sukeh` (
`sukehID` int(11) NOT NULL,
  `noSukeh` varchar(30) NOT NULL,
  `tglSukeh` varchar(40) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` varchar(40) NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kehilangan` varchar(100) NOT NULL,
  `atasNama` varchar(60) NOT NULL,
  `alamatKeh` varchar(100) NOT NULL,
  `lokKehilangan` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukeh`
--

INSERT INTO `sukeh` (`sukehID`, `noSukeh`, `tglSukeh`, `nama`, `lahirDi`, `tglLahir`, `pekerjaan`, `agama`, `status`, `alamat`, `kehilangan`, `atasNama`, `alamatKeh`, `lokKehilangan`) VALUES
(1, '001', '04 April  2016', 'RAHMAT  HIDAYAT', 'Bojonegoro ', '07 Januari 1992', 'Karyawan Swasta', 'Islam', 'Belum Kawin', 'Ds. Kasiman RT.05 RW.04 Kec. Kasiman Kab. Bojonegoro.', 'Kartu  Tanda Penduduk (KTP) dan Kartu Keluarga (KK) ', 'SAMILAH', 'Desa Kasiman Rt. 05 Rw. 04 Kec. Kasiman ', 'perjalanan Cepu-Kasiman');

-- --------------------------------------------------------

--
-- Table structure for table `sukel`
--

CREATE TABLE IF NOT EXISTS `sukel` (
`sukelID` int(11) NOT NULL,
  `noSukel` varchar(40) NOT NULL,
  `tglSukel` varchar(40) NOT NULL,
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
  `alamatBapak` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukel`
--

INSERT INTO `sukel` (`sukelID`, `noSukel`, `tglSukel`, `namaAnak`, `anakKe`, `lahirDi`, `hariLahir`, `tglLahir`, `jenKelamin`, `namaIbu`, `umurIbu`, `alamatIbu`, `namaBapak`, `umurBapak`, `alamatBapak`) VALUES
(1, '111', '22 Maret 2016', 'IMRAN KAMIL', '2 (Kedua)', 'Bojonegoro', 'Jumat Pahing', '12 Februari 2016', 'Laki-Laki', 'MARTINI', '34 Tahun', 'Desa Kasimsn RT 04 RW 04 Kecamatan Kasiman Kabupaten Bojonegoro.', 'SADARUDIN', '36 Tahun', 'Desa Kasimsn RT 04 RW 04 Kecamatan Kasiman Kabupaten Bojonegoro.'),
(2, '222', '08 Desember  2015', 'MUHAMMAD REZKY OCTAVIAN', '4 (Keempat)', 'Bojonegoro', 'Selasa Kliwon', '13 Oktober 2015', 'Laki-Laki', 'SARWI', '39 Tahun', 'Desa Kasiman RT.003 RW.002 Kecamatan Kasiman Kabupaten Bojonegoro.', 'SEDONO', '45  Tahun', 'Desa Kasiman RT.003 RW.002 Kecamatan Kasiman Kabupaten Bojonegoro.');

-- --------------------------------------------------------

--
-- Table structure for table `sukem`
--

CREATE TABLE IF NOT EXISTS `sukem` (
`sukemID` int(11) NOT NULL,
  `noSukem` varchar(40) NOT NULL,
  `tglSukem` varchar(40) NOT NULL,
  `namaAlm` varchar(60) NOT NULL,
  `jenKelamin` varchar(10) NOT NULL,
  `alamatAlm` varchar(100) NOT NULL,
  `hariWafat` varchar(20) NOT NULL,
  `tglWafat` varchar(30) NOT NULL,
  `wafatDi` varchar(30) NOT NULL,
  `sebabWafat` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukem`
--

INSERT INTO `sukem` (`sukemID`, `noSukem`, `tglSukem`, `namaAlm`, `jenKelamin`, `alamatAlm`, `hariWafat`, `tglWafat`, `wafatDi`, `sebabWafat`) VALUES
(1, '001', '18 Maret 2016', 'SULASNI', 'Perempuan', 'Desa Kasiman RT 05 RW 04 Kasiman', 'Senin Legi', '7 Maret 2016', 'Rumah', 'Sakit'),
(2, '002', '25  Februari 2016', 'SAMIANI', 'Perempuan', 'Desa Kasiman RT.04 RW.04 Kec. Kasiman Kab. Bojonegoro.', 'Kamis Paing', '25 September 2014', 'Desa Kasiman Kecamatan Kasiman', 'Sakit'),
(3, '003', '12 Juli 2010', 'JAMISAH', 'Perempuan', 'Desa Kasiman RT.005 RW.002 Kecamatan Kasiman Kabupaten Bojonegoro.', 'Minggu Kliwon', '11 Juli 2010', 'Desa Kasiman Kecamatan Kasiman', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `suket`
--

CREATE TABLE IF NOT EXISTS `suket` (
`suketID` int(11) NOT NULL,
  `jenisSuket` varchar(100) NOT NULL,
  `noSuket` varchar(40) NOT NULL,
  `tglSuket` varchar(40) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `lahirDi` varchar(20) NOT NULL,
  `tglLahir` varchar(20) NOT NULL,
  `jenKelamin` enum('Perempuan','Laki-Laki') NOT NULL DEFAULT 'Laki-Laki',
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ket` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suket`
--

INSERT INTO `suket` (`suketID`, `jenisSuket`, `noSuket`, `tglSuket`, `fullname`, `lahirDi`, `tglLahir`, `jenKelamin`, `pekerjaan`, `agama`, `status`, `keperluan`, `alamat`, `ket`) VALUES
(1, 'SURAT KETERANGAN PENDUDUK', '001', '21 April 2016', 'Bambang Tri Handika', 'Bojonegoro', '06 Juli 1996', 'Laki-Laki', '', 'Islam', 'Belum Kawin', 'Mengajukan Beasiswa', 'Dusun Karanganyar No. 10 RT 01', '--'),
(2, 'SURAT KETERANGAN USAHA', '002', '10 Mei 2016', 'Wawan Hartanto', 'Blora', '24 September 1968', 'Laki-Laki', '', 'Islam', 'Kawin', 'Mengajukan Kredit Usaha Rakyat (KUR)', 'Desa Kasiman RT 04 RW 8', '--'),
(3, 'SURAT KETERANGAN PEMBENAR IDENTITAS', '003', '07 Maret 2016', 'SUKADI', 'Bojonegoro', '25 Mei 1962', 'Laki-Laki', '', 'Islam', 'Kawin', 'Orangnya adalah sama satu dan tunggal.', 'Karanganyar Desa Kasiman Rt. 0', '-'),
(4, 'SURAT KETERANGAN PENDUDUK', '004', '04 April 2016', 'RAHMAT HIDAYAT', 'Bojonegoro', '01 Januari 1992', 'Laki-Laki', 'Karyawan Swasta', 'Islam', 'Belum Kawin', '', 'Ds. Kasiman RT.05 RW.04 Kec. Kasiman Kab. Bojonegoro.', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userID` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullname`, `username`, `password`, `level`) VALUES
(1, 'Adminstrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'Pegawai', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'Pegawai'),
(4, 'Kepala Desa', 'kades', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'Kades');

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
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
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
MODIFY `kontakID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
MODIFY `ktpID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
MODIFY `pendID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skck`
--
ALTER TABLE `skck`
MODIFY `skckID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
MODIFY `sktmID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sukeh`
--
ALTER TABLE `sukeh`
MODIFY `sukehID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sukel`
--
ALTER TABLE `sukel`
MODIFY `sukelID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sukem`
--
ALTER TABLE `sukem`
MODIFY `sukemID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suket`
--
ALTER TABLE `suket`
MODIFY `suketID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
