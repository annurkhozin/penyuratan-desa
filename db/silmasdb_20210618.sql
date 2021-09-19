/*
 Navicat Premium Data Transfer

 Source Server         : MySQL local
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : silmasdb

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 18/06/2021 22:45:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak`  (
  `kontakID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `noTlpn` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kontakID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES (1, 'Bambang Tri Handika', 'Dusun Karanganyar Desa Kasiman RT.001 RW.005 Kecamatan Kasiman Bojonegoro', '085782883970');
INSERT INTO `kontak` VALUES (2, 'Ndika', 'Karanganyar Kasiman', '087833061261');

-- ----------------------------
-- Table structure for ktp
-- ----------------------------
DROP TABLE IF EXISTS `ktp`;
CREATE TABLE `ktp`  (
  `ktpID` int(11) NOT NULL AUTO_INCREMENT,
  `tglKtp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglLahir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('Belum Kawin','Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kepKeluarga` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ktpID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ktp
-- ----------------------------
INSERT INTO `ktp` VALUES (1, '18 Maret 2016', 'SITI PATONAH', 'Bojonegoro', '13 - 12 -1993', 'Perempuan', 'Kawin', 'Belum/Tidak Bekerja', 'Desa Kasiman RT.03 RW.02 Kec. Kasiman Kab. Bojonegoro.', 'ZULFAHMI SIREGAR');
INSERT INTO `ktp` VALUES (2, '02 Juni 2016', 'MARDELLINA LUIS LUKITA SARI', 'BOJONEGORO', '8 April 1999', 'Perempuan', 'Belum Kawin', 'Pelajar/Mahasiswa', 'DSN. KARANG ANYAR RT 02 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'SIRIN');
INSERT INTO `ktp` VALUES (3, '04 Juni 2016', 'HENY KURNIAWATI', 'BOJONEGORO', '18 Januari 1998', 'Perempuan', 'Belum Kawin', 'Pelajar/Mahasiswa', 'DSN. KARANG ANYAR RT 02 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'WARSITO');
INSERT INTO `ktp` VALUES (4, '15-06-2016', 'Bambang Tri Handika', 'Bojonegoro', '06 Juli 1996', 'Laki-Laki', 'Belum Kawin', 'Pelajar/Mahasiswa', 'Dusun Karanganyar Desa Kasiman RT.001 RW.005 Kecamatan Kasiman Bojonegoro', 'Yusmono');
INSERT INTO `ktp` VALUES (5, '15-06-2016', 'RAKHA BAGASKARA', 'BOJONEGORO', '7 Juni 2014', 'Laki-Laki', 'Belum Kawin', 'Belum/Tidak Bekerja', 'Desa KARANG ANYAR RT 01 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'LUKMAN TAROM');
INSERT INTO `ktp` VALUES (6, '15-06-2016', 'HENY KURNIAWATI', 'BOJONEGORO', '18 Januari 1998', 'Perempuan', 'Belum Kawin', 'Pelajar/Mahasiswa', 'Desa KARANG ANYAR RT 02 RW 05 DS. KASIMAN KEC. KASIMAN KAB. BOJONEGORO', 'WARSITO');

-- ----------------------------
-- Table structure for penduduk
-- ----------------------------
DROP TABLE IF EXISTS `penduduk`;
CREATE TABLE `penduduk`  (
  `pendID` int(11) NOT NULL AUTO_INCREMENT,
  `noKK` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namaLengkap` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenKelamin` enum('Laki-Laki','Perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempatLahir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglLahir` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma','Sarjana') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenPekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `statusNikah` enum('Belum Kawin','Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `statHubKel` enum('Kepala Keluarga','Isteri','Anak','Cucu','Menantu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `wargaNeg` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noPaspor` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kitasKitap` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namaAyah` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namaIbu` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rt` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rw` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desaKel` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kecamatan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kabKota` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodePos` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `provinsi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pendID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 62 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penduduk
-- ----------------------------
INSERT INTO `penduduk` VALUES (1, '3522201901077680', 'WARSITO', '3522201502720003', 'Laki-Laki', 'BOJONEGORO', '15 Pebruari 1972', 'Islam', 'Tamat SD/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'WAKMINI', 'NGARTIK', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (2, '3522201901077680', 'TAMSINAH', '3522206102740001', 'Perempuan', 'BOJONEGORO', '21 Pebruari 1974', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'KASDI', 'LASTI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (3, '3522201901077680', 'HENY KURNIAWATI', '3522206801980001', 'Perempuan', 'BOJONEGORO', '18 Januari 1998', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WARSITO', 'TAMSINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (4, '3522201901077680', 'LINDYA PUSPITASARI', '3522206811050001', 'Perempuan', 'BOJONEGORO', '18 November 2005', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WARSITO', 'TAMSINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (5, '3522201901077876', 'SUNOTO', '3522201606680004', 'Laki-Laki', 'BOJONEGORO', '16 Juni 1968', 'Islam', 'SLTA/Sederajat', '', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'RADIN', 'RUSMIJAH', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (6, '3522201901077876', 'SUNDARI', '3522206510780007', 'Perempuan', 'BOJONEGORO', '25 Oktober 1978', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Isteri', 'WNI', '--', '--', 'RATI', 'WIJI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (7, '3522201901077876', 'WARDI', '3522202501930004', 'Laki-Laki', 'BOJONEGORO', '25 Januari 1993', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (8, '3522201901077876', 'DIKLAT SAPUTRO OKTAFIANI', '3522202410000001', 'Laki-Laki', 'BOJONEGORO', '24 Oktober 2000', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (9, '3522201901077876', 'JAYA PUTRI KARUNIA ANI', '3522204907100001', 'Perempuan', 'BOJONEGORO', '09 Juli 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'SUNOTO', 'SUNDARI', 'KARANG ANYAR', '03', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (10, '3522201504120001', 'TEGUH SANTOSO', '3522201402810001', 'Laki-Laki', 'BOJONEGORO', '14 Pebruari 1981', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SLAMET', 'LASMINI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (11, '3522201504120001', 'PRIYANTINI', '3522204504910004', 'Perempuan', 'BOJONEGORO', '05 April 1991', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'PARNO', 'PARMI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (12, '3522201504120001', 'ARSILA LEDI PERMATA', '3522206312100001', 'Perempuan', 'BOJONEGORO', '23 Desember 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'TEGUH SANTOSO', 'PRIYANTINI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (13, '3522201504120001', 'WILDAN ATMA WIJAYA', '3522201710130002', 'Laki-Laki', 'BOJONEGORO', '17 Oktober 2013', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'TEGUH SANTOSO', 'PRIYANTINI', 'KARANG ANYAR', '01', '06', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (14, '3522202407070038', 'WAGIMIN', '3522203009820001', 'Laki-Laki', 'BOJONEGORO', '30 September 1982', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'PAIMAN', 'DALINEM', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (15, '3522202407070038', 'HARTATIK', '3522204709770004', 'Perempuan', 'BLORA', '7 September 1977', 'Islam', 'Tamat SD/Sederajat', '', 'Kawin', 'Isteri', 'WNI', '--', '--', 'MURDI', 'RASMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (16, '3522202407070038', 'RENDI PRASETIYO', '3522202607030001', 'Laki-Laki', 'BLORA', '26 Juli 2003', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WAGIMIN', 'HARTATIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (17, '3522202407070038', 'PUTRI AMELIA', '3522206708080001', 'Perempuan', 'BOJONEGORO', '27 Agustus 2008', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'WAGIMIN', 'HARTATIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (18, '3522201901077674', 'SIRIN', '3522200702570002', 'Laki-Laki', 'BOJONEGORO', '7 Pebruari 1957', 'Islam', 'Belum Tamat SD/Sederajat', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (19, '3522201901077674', 'KASRI', '3522204702570003', 'Perempuan', 'BOJONEGORO', '7 Pebruari 1957', 'Islam', 'Belum Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (20, '3522201901077674', 'DIANTINI', '3522205310900003', 'Perempuan', 'BOJONEGORO', '13 Oktober 1990', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Anak', 'WNI', '--', '--', 'SIRIN', 'KASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (21, '3522201901077674', 'MARDELLINA LUIS LUKITA SARI', '3522204804990001', 'Perempuan', 'BOJONEGORO', '8 April 1999', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'SUKARDI', 'WATI WARINATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (22, '3522201901077674', 'ARSI AKSEN SAMUDRA', '3522203994150002', 'Laki-Laki', 'BOJONEGORO', '30 April 2015', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'SUKARDI', 'WATI WARINATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (23, '3522201311090003', 'LUKMAN TAROM', '3522201312780005', 'Laki-Laki', 'BOJONEGORO', '13 Desember 1978', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'LAMIN', 'RASIYAH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (24, '3522201311090003', 'SUPRIHATI', '3522205802860005', 'Perempuan', 'BOJONEGORO', '18 Pebruari 1986', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'PARNO', 'PARMI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (25, '3522201311090003', 'CAHYA PRITA HARUM ANINDYA', '3522204306070001', 'Perempuan', 'BOJONEGORO', '3 Juni 2007', 'Islam', 'Belum Tamat SD/Sederajat', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'LUKMAN TAROM', 'SUPRIHATI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (26, '3522201311090003', 'RAKHA BAGASKARA', '3522200706140001', 'Laki-Laki', 'BOJONEGORO', '7 Juni 2014', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'LUKMAN TAROM', 'SUPRIHATI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (27, '3522201901077889', 'KISNANDAR', '3522200807780004', 'Laki-Laki', 'BOJONEGORO', '8 Juli 1978', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'RAMSUK', 'YASTI', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (28, '3522201901077889', 'YUSMININGSIH', '3522206303810004', 'Perempuan', 'BOJONEGORO', '23 Maret 1981', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SUHARTO', 'CICIK', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (29, '3522201901077889', 'MICO YOANSYAH RAMADHAN', '3522201911040001', 'Laki-Laki', 'BOJONEGORO', '19 November 2004', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'KISNANDAR', 'YUSMININGSIH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (30, '3522201901077889', 'KEYZA YUSNIAR FEBRIASA', '3522204702130001', 'Perempuan', 'BOJONEGORO', '7 Pebruari 2013', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'KISNANDAR', 'YUSMININGSIH', 'KARANG ANYAR', '01', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (31, '3522201901077740', 'MOHAMMAD SODIK', '3522202204680002', 'Laki-Laki', 'BOJONEGORO', '22 April 1968', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '--', '--', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (32, '3522201901077740', 'RAKIMAH', '3522207007730001', 'Perempuan', 'BOJONEGORO', '30 Juli 1973', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'WASIRAH', 'SANEM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (33, '3522201901077740', 'DIAH FEBRIYANTI', '3522206402960002', 'Perempuan', 'BLORA', '24 Pebruari 1996', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MOHAMMAD SODIK', 'RAKIMAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (34, '3522201901077740', 'FEBRIANA DWI LESTARI', '3522204202050001', 'Perempuan', 'BLORA', '02 Pebruari 2005', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MOHAMMAD SODIK', 'RAKIMAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (35, '3522201901077730', 'PARLAN', '3522201201590002', 'Laki-Laki', 'BOJONEGORO', '12 Januari 1959', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (36, '3522201901077730', 'NGASRI', '3522204110610022', 'Perempuan', 'BOJONEGORO', '01 Oktober 1961', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (37, '3522201901077730', 'MINAR', '3522201705840003', 'Laki-Laki', 'BOJONEGORO', '17 Mei 1984', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (38, '3522201901077730', 'PUPUT RIYANTO', '3522202103890003', 'Laki-Laki', 'BOJONEGORO', '21 Maret 1989', 'Islam', 'Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (39, '3522201901077730', 'PUJI LESTARI', '3522206305930001', 'Perempuan', 'BOJONEGORO', '23 Mei 1993', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (40, '3522201901077730', 'KUSTANTO', '3522200306990002', 'Laki-Laki', 'BOJONEGORO', '03 Juni 1999', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'PARLAN', 'NGASRI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (41, '3522201901077742', 'KARJIAN', '3522201406540001', 'Laki-Laki', 'BOJONEGORO', '14 Juni 1954', 'Islam', 'Tidak/Belum Sekolah', 'Petani/Pekebun', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'UNTUNG', 'MASREM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (42, '3522201901077742', 'RAKINAH', '3522205511700001', 'Perempuan', 'BOJONEGORO', '15 November 1970', 'Islam', 'Tidak/Belum Sekolah', 'Petani/Pekebun', 'Kawin', 'Isteri', 'WNI', '--', '--', '-', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (43, '3522201901077742', 'ANIK ANGGRAENI', '3522206304930002', 'Perempuan', 'BOJONEGORO', '23 April 1993', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (44, '3522201901077742', 'AGUSTIN MELANI PERTIWI', '3522205408040002', 'Perempuan', 'BOJONEGORO', '14 Agustus 2004', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (45, '3522201901077742', 'ASRI RITA MAHARANI', '3522206203080003', 'Perempuan', 'BOJONEGORO', '22 Maret 2008', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (46, '3522201901077742', 'AFIPAH LESTARI', '3522206607100001', 'Perempuan', 'BOJONEGORO', '26 Juli 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JIYAN', 'SAKINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (47, '3522201901077745', 'MUK ALI', '3522203112740013', 'Laki-Laki', 'BLORA', '31 Desember 1974', 'Islam', 'Tamat SD/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'PANDU', 'KASTINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (48, '3522201901077745', 'TUMIATI', '3522204110700012', 'Perempuan', 'BOJONEGORO', '01 Oktober 1970', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SAKUR', 'RUSTAM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (49, '3522201901077745', 'YUSUF', 'success', 'Laki-Laki', 'BOJONEGORO', '16 Mei 1985', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (50, '3522201901077745', 'ADITIA NUGROHO', '3522200210940001', 'Laki-Laki', 'BOJONEGORO', '02 Oktober 1994', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (51, '3522201901077745', 'IMRON NUR WICAKSONO', '3522202904020004', 'Laki-Laki', 'BOJONEGORO', '29 April 2002', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'MUK ALI', 'TUMIATI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (52, '3522201901077701', 'JATMIKO', '3522200809740003', 'Laki-Laki', 'BOJONEGORO', '08 September 1974', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SUKIRYO', 'SRIPAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (53, '3522201901077701', 'WATINI', '3522206305820004', 'Perempuan', 'BOJONEGORO', '23 Mei 1982', 'Islam', 'Tamat SD/Sederajat', 'Pedagang', 'Kawin', 'Isteri', 'WNI', '--', '--', 'JAMARI', 'DASIYEM', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (54, '3522201901077701', 'SUTEDY MARTNA', '3522201503030003', 'Laki-Laki', 'BOJONEGORO', '15 Maret 2003', 'Islam', 'Belum Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JATMIKO', 'WATINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (55, '3522201901077701', 'BAMBANG MURDANI', '3522201506110002', 'Laki-Laki', 'BOJONEGORO', '15 Juni 2011', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Anak', 'WNI', '--', '--', 'JATMIKO', 'WATINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (56, '3522201901077715', 'MASHURI', '3522200403590002', 'Laki-Laki', 'BOJONEGORO', '04 Maret 1959', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', '--', '--', 'SAMINGUN', 'KASMONAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (57, '3522201901077715', 'PARSI', '3522205002620002', 'Perempuan', 'BOJONEGORO', '10 Pebruari 1962', 'Islam', 'SLTP/Sederajat', 'Pedagang', 'Kawin', 'Isteri', 'WNI', '--', '--', 'SOMO RASIYO', 'SARINI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (58, '3522201901077715', 'PRIYO JATI SAMPURNO', '3522201910840003', 'Laki-Laki', 'BOJONEGORO', '19 Oktober 1984', 'Islam', 'SLTA/Sederajat', 'Pedagang', 'Kawin', 'Anak', 'WNI', '--', '--', 'MASHURI', 'PARSI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (59, '3522201901077715', 'SITI MUTMAINAH', '3522205004900003', 'Perempuan', 'BOJONEGORO', '10 April 1990', 'Islam', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'Kawin', 'Anak', 'WNI', '--', '--', 'MASHURI', 'PARSI', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (60, '3522201901077715', 'WADAK', '3522200510880001', 'Laki-Laki', 'BOJONEGORO', '05 Oktober 1988', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', 'Kawin', 'Menantu', 'WNI', '--', '--', 'SARJO', '-', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');
INSERT INTO `penduduk` VALUES (61, '3522201901077715', 'OCTAVIA NUR AINI', '3522206610100001', 'Perempuan', 'BOJONEGORO', '26 Oktober 2010', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'Belum Kawin', 'Cucu', 'WNI', '--', '--', 'WADAK', 'SITI MUTMAINAH', 'KARANG ANYAR', '02', '05', 'KASIMAN', 'KASIMAN', 'BOJONEGORO', '62164', 'JAWA TIMUR');

-- ----------------------------
-- Table structure for permohonan
-- ----------------------------
DROP TABLE IF EXISTS `permohonan`;
CREATE TABLE `permohonan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device_id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nik` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` int(2) NOT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_buat` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permohonan
-- ----------------------------
INSERT INTO `permohonan` VALUES (2, '1624014658225', '3522201502720003', 6, 'uploads/1624023838913_lengkuas.jpg', 'Diproses', '2021-06-18 22:42:44');
INSERT INTO `permohonan` VALUES (6, '1624014658225', '3522206203080003', 6, 'uploads/1624030689717_kencur.jpg', 'Diajukan', '2021-06-17 22:42:47');
INSERT INTO `permohonan` VALUES (7, '1624014658225', '3522206203080003', 1, 'uploads/1624030791807_daun_kemangi.jpg', 'Selesai', '2021-06-01 22:42:51');
INSERT INTO `permohonan` VALUES (8, '1624014658225', '3522206203080003', 7, 'uploads/1624030873997_jahe.jpg', 'Diajukan', '2021-06-14 22:42:55');
INSERT INTO `permohonan` VALUES (9, '1624014658225', '3522200210940001', 4, 'uploads/1624030948768_kunyit.jpg', 'Ditolak', '2021-06-18 22:42:28');

-- ----------------------------
-- Table structure for skck
-- ----------------------------
DROP TABLE IF EXISTS `skck`;
CREATE TABLE `skck`  (
  `skckID` int(11) NOT NULL AUTO_INCREMENT,
  `noSkck` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglSkck` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglLahir` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('Belum Kawin','Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma','Sarjana') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `noKtp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berlaku` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`skckID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of skck
-- ----------------------------
INSERT INTO `skck` VALUES (1, '001', '14 Maret 2016', 'SRI WAHYUNI', 'Bojonegoro', '31 Mei 1983', 'Karyawan Swasta', 'Islam', 'Kawin', '', '3522207105830002', 'Ds. Kasiman RT04 RW 04 Kec Kasiman Bojonegoro', 'Mengurus ijin BUJP ', '14 - 03 - 2016 S/d 14 - 08 - 2016');

-- ----------------------------
-- Table structure for sktm
-- ----------------------------
DROP TABLE IF EXISTS `sktm`;
CREATE TABLE `sktm`  (
  `sktmID` int(11) NOT NULL AUTO_INCREMENT,
  `noSktm` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglSktm` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaOrtu` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umurOrtu` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaanOrtu` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatOrtu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaAnak` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglLahir` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaanAnak` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatAnak` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sktmID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sktm
-- ----------------------------
INSERT INTO `sktm` VALUES (1, '471', '15 Februari 2016', 'YUSMONO', '58 Tahun', 'Karyawan Swasta', 'Ds. Kasiman RT.001 RW.005 Kec. Kasiman Bojonegoro', 'BAMBANG TRI HANDIKA', 'Bojonegoro', '06 Juli 1996', 'Pelajar/Mahasiswa', 'Ds. Kasiman RT.001 RW.005 Kec. Kasiman Bojonegoro');

-- ----------------------------
-- Table structure for sukeh
-- ----------------------------
DROP TABLE IF EXISTS `sukeh`;
CREATE TABLE `sukeh`  (
  `sukehID` int(11) NOT NULL AUTO_INCREMENT,
  `noSukeh` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglSukeh` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglLahir` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('Belum Kawin','Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kehilangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `atasNama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatKeh` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokKehilangan` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sukehID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sukeh
-- ----------------------------
INSERT INTO `sukeh` VALUES (1, '001', '04 April  2016', 'RAHMAT  HIDAYAT', 'Bojonegoro ', '07 Januari 1992', 'Karyawan Swasta', 'Islam', 'Belum Kawin', 'Ds. Kasiman RT.05 RW.04 Kec. Kasiman Kab. Bojonegoro.', 'Kartu  Tanda Penduduk (KTP) dan Kartu Keluarga (KK) ', 'SAMILAH', 'Desa Kasiman Rt. 05 Rw. 04 Kec. Kasiman ', 'perjalanan Cepu-Kasiman');

-- ----------------------------
-- Table structure for sukel
-- ----------------------------
DROP TABLE IF EXISTS `sukel`;
CREATE TABLE `sukel`  (
  `sukelID` int(11) NOT NULL AUTO_INCREMENT,
  `noSukel` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglSukel` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaAnak` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anakKe` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hariLahir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglLahir` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenKelamin` enum('Perempuan','Laki-Laki') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Laki-Laki',
  `namaIbu` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umurIbu` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatIbu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaBapak` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umurBapak` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatBapak` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sukelID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sukel
-- ----------------------------
INSERT INTO `sukel` VALUES (1, '111', '22 Maret 2016', 'IMRAN KAMIL', '2 (Kedua)', 'Bojonegoro', 'Jumat Pahing', '12 Februari 2016', 'Laki-Laki', 'MARTINI', '34 Tahun', 'Desa Kasimsn RT 04 RW 04 Kecamatan Kasiman Kabupaten Bojonegoro.', 'SADARUDIN', '36 Tahun', 'Desa Kasimsn RT 04 RW 04 Kecamatan Kasiman Kabupaten Bojonegoro.');
INSERT INTO `sukel` VALUES (2, '222', '08 Desember  2015', 'MUHAMMAD REZKY OCTAVIAN', '4 (Keempat)', 'Bojonegoro', 'Selasa Kliwon', '13 Oktober 2015', 'Laki-Laki', 'SARWI', '39 Tahun', 'Desa Kasiman RT.003 RW.002 Kecamatan Kasiman Kabupaten Bojonegoro.', 'SEDONO', '45  Tahun', 'Desa Kasiman RT.003 RW.002 Kecamatan Kasiman Kabupaten Bojonegoro.');

-- ----------------------------
-- Table structure for sukem
-- ----------------------------
DROP TABLE IF EXISTS `sukem`;
CREATE TABLE `sukem`  (
  `sukemID` int(11) NOT NULL AUTO_INCREMENT,
  `noSukem` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglSukem` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaAlm` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenKelamin` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatAlm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hariWafat` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglWafat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `wafatDi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sebabWafat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sukemID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sukem
-- ----------------------------
INSERT INTO `sukem` VALUES (1, '001', '18 Maret 2016', 'SULASNI', 'Perempuan', 'Desa Kasiman RT 05 RW 04 Kasiman', 'Senin Legi', '7 Maret 2016', 'Rumah', 'Sakit');
INSERT INTO `sukem` VALUES (2, '002', '25  Februari 2016', 'SAMIANI', 'Perempuan', 'Desa Kasiman RT.04 RW.04 Kec. Kasiman Kab. Bojonegoro.', 'Kamis Paing', '25 September 2014', 'Desa Kasiman Kecamatan Kasiman', 'Sakit');
INSERT INTO `sukem` VALUES (3, '003', '12 Juli 2010', 'JAMISAH', 'Perempuan', 'Desa Kasiman RT.005 RW.002 Kecamatan Kasiman Kabupaten Bojonegoro.', 'Minggu Kliwon', '11 Juli 2010', 'Desa Kasiman Kecamatan Kasiman', 'Sakit');

-- ----------------------------
-- Table structure for suket
-- ----------------------------
DROP TABLE IF EXISTS `suket`;
CREATE TABLE `suket`  (
  `suketID` int(11) NOT NULL AUTO_INCREMENT,
  `jenisSuket` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `noSuket` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglSuket` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fullname` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lahirDi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tglLahir` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenKelamin` enum('Perempuan','Laki-Laki') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Laki-Laki',
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Mengurus Rumah Tangga','Petani/Pekebun','Pedagang','Karyawan Swasta','Wiraswasta','Pegawai Negeri Sipil') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('Belum Kawin','Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`suketID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of suket
-- ----------------------------
INSERT INTO `suket` VALUES (1, 'SURAT KETERANGAN PENDUDUK', '001', '21 April 2016', 'Bambang Tri Handika', 'Bojonegoro', '06 Juli 1996', 'Laki-Laki', '', 'Islam', 'Belum Kawin', 'Mengajukan Beasiswa', 'Dusun Karanganyar No. 10 RT 01', '--');
INSERT INTO `suket` VALUES (2, 'SURAT KETERANGAN USAHA', '002', '10 Mei 2016', 'Wawan Hartanto', 'Blora', '24 September 1968', 'Laki-Laki', '', 'Islam', 'Kawin', 'Mengajukan Kredit Usaha Rakyat (KUR)', 'Desa Kasiman RT 04 RW 8', '--');
INSERT INTO `suket` VALUES (3, 'SURAT KETERANGAN PEMBENAR IDENTITAS', '003', '07 Maret 2016', 'SUKADI', 'Bojonegoro', '25 Mei 1962', 'Laki-Laki', '', 'Islam', 'Kawin', 'Orangnya adalah sama satu dan tunggal.', 'Karanganyar Desa Kasiman Rt. 0', '-');
INSERT INTO `suket` VALUES (4, 'SURAT KETERANGAN PENDUDUK', '004', '04 April 2016', 'RAHMAT HIDAYAT', 'Bojonegoro', '01 Januari 1992', 'Laki-Laki', 'Karyawan Swasta', 'Islam', 'Belum Kawin', '', 'Ds. Kasiman RT.05 RW.04 Kec. Kasiman Kab. Bojonegoro.', '-');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Adminstrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');
INSERT INTO `user` VALUES (2, 'Pegawai', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'Pegawai');
INSERT INTO `user` VALUES (4, 'Kepala Desa', 'kades', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'Kades');

SET FOREIGN_KEY_CHECKS = 1;
