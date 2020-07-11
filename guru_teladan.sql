-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2015 at 12:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guru_teladan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`id_bobot` int(2) NOT NULL,
  `id_kriteria` int(2) DEFAULT NULL,
  `b1` int(4) NOT NULL,
  `b2` int(4) NOT NULL,
  `b3` int(4) NOT NULL,
  `b4` int(4) NOT NULL,
  `b5` int(4) NOT NULL,
  `b6` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `id_kriteria`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`) VALUES
(1, NULL, 30, 20, 18, 15, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(2) NOT NULL,
  `id_user` int(4) DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `id_user`, `isi`) VALUES
(1, NULL, '<p>Keteladanan guru adalah suatu perbuatan atau tingkah laku yang baik, yang patut ditiru oleh anak didik yang dilakukan oleh seorang guru didalam tugasnya sebagai pendidik, baik tutur kata ataupun perbuatannya yang dapat diterapkan dalam kehidupan sehari-hari oleh murid, baik di lingkungan sekolah maupun di lingkungan masyarakat.</p>'),
(2, NULL, '<p>Pembuatan Sistem ini bertujuan untuk melakukan pemilihan guru teladan, yang akan menjadi contoh yang baik untuk guru lain. Dalam melakukan pemilihan ini, akan dimasukan bebrapa kriteria yang dinilai nantinya, yaitu:</p><p>1. Kehadiran :&nbsp;Kehadiran disini adalah absensi, dimana guru dinilai dari datang atau masuk ke kelas.</p><p>2. Prestasi :&nbsp;Pencapaiaan seorang guru terhadap materi yang telah diajarkan, dalam hal lomba atau semacamnya.</p><p>3. Penguasaan Materi :&nbsp;Seorang guru yang baik akan menguasai materi yang akan diberikan kepada anak didiknya, tanpa&nbsp;terlalu &nbsp;bergantung&nbsp;terhadap buku.</p><p>4. Loyalitas atau tanggung jawab terhadap pekerjaan yang diamanatkan kepada seorang guru.</p><p>5. Prilaku :&nbsp;Sikap atau kelakuan yang dicerminkan oleh seorang guru.</p><p>6. Cara Mengajar Kriteria ini menilai bagaimanakah guru mengajar anak didiknya.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id_guru` int(5) NOT NULL,
  `id_kriteria` int(2) DEFAULT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `id_kriteria`, `nuptk`, `nama`, `gender`, `alamat`) VALUES
(1, NULL, '6035757859200023', 'Abdul Azis, S.Pd.I', 'Laki-laki', 'Bogor'),
(2, NULL, '5035758659200023', 'Ahmad Rivai, S.Pd.I', 'Laki-laki', 'Bogor'),
(3, NULL, '0964975265400016', 'Asepuddin, S.Pd.I', 'Laki-laki', 'bogor'),
(4, NULL, '2534743646200033', 'Atang Suganda, S.Sos', 'Laki-laki', 'Bogor'),
(5, NULL, '2353756657200010', 'Irwan Mawardian, S.E', 'Laki-laki', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(2) NOT NULL,
  `c1` varchar(30) NOT NULL,
  `c2` varchar(30) NOT NULL,
  `c3` varchar(30) NOT NULL,
  `c4` varchar(30) NOT NULL,
  `c5` varchar(30) NOT NULL,
  `c6` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(1, 'kehadiran', 'Kemampuan Mengajar', 'Penguasaan Materi', 'Tanggung Jawab', 'Perilaku', 'Prestasi');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
`id_nilai` int(2) NOT NULL,
  `id_guru` int(5) DEFAULT NULL,
  `nama` varchar(55) NOT NULL,
  `c1` int(4) NOT NULL,
  `c2` int(4) NOT NULL,
  `c3` int(4) NOT NULL,
  `c4` int(4) NOT NULL,
  `c5` int(4) NOT NULL,
  `c6` int(4) NOT NULL,
  `jumlah` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `id_guru`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `jumlah`) VALUES
(1, 1, 'Abdul Azis, S.Pd.I', 95, 82, 83, 91, 91, 86, 0.1934),
(2, 2, 'Ahmad Rivai, S.Pd.I', 97, 81, 86, 96, 98, 95, 0.2016),
(3, 3, 'Asepuddin, S.Pd.I', 97, 82, 88, 94, 95, 89, 0.2005),
(4, 4, 'Atang Suganda, S.Sos', 96, 91, 89, 91, 92, 88, 0.2026),
(5, 5, 'Irwan Mawardian, S.E', 95, 89, 89, 95, 91, 87, 0.2019);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(4) NOT NULL,
  `id_guru` int(5) DEFAULT NULL,
  `nama` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_guru`, `nama`, `password`, `level`) VALUES
(1, NULL, 'Dori Hidayat', 'admin', 'admin'),
(2, NULL, 'Abdul Azis', 'azis', 'user'),
(3, NULL, 'Ahmad Rivai', 'ahmad', 'user'),
(4, NULL, 'asepuddin', 'asepuddi', 'user'),
(5, NULL, 'Atang Suganda', 'atang', 'user'),
(6, NULL, 'Irwan Mawardian', 'irawan', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`id_bobot`), ADD UNIQUE KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`), ADD UNIQUE KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
 ADD PRIMARY KEY (`id_nilai`), ADD UNIQUE KEY `id_guru` (`id_guru`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `id_bobot` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
MODIFY `id_nilai` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot`
--
ALTER TABLE `bobot`
ADD CONSTRAINT `bobot_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `data`
--
ALTER TABLE `data`
ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
