-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 05:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'Sutrisman', '202cb962ac59075b964b07152d234b70'),
(2, 'Nurul', '202cb962ac59075b964b07152d234b70'),
(5, 'nurul123', '55811d685377dc59c4f23b946670dcca');

-- --------------------------------------------------------

--
-- Table structure for table `table_alumni`
--

CREATE TABLE `table_alumni` (
  `id_alumni` int(10) NOT NULL,
  `nama_alumni` varchar(255) NOT NULL,
  `angkatan_alumni` int(20) NOT NULL,
  `nomor_alumni` varchar(20) NOT NULL,
  `email_alumni` varchar(255) NOT NULL,
  `alamat_makassar` varchar(255) NOT NULL,
  `alamat_soppeng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_alumni`
--

INSERT INTO `table_alumni` (`id_alumni`, `nama_alumni`, `angkatan_alumni`, `nomor_alumni`, `email_alumni`, `alamat_makassar`, `alamat_soppeng`) VALUES
(2, 'Irsan', 2017, '087865899254', 'irsanlatif7@gmail.com', 'Jl. Muh. Jufri 4 no.20', 'Jl Enrekeng'),
(4, 'Yunita Darma', 2018, '085256843426', 'Yunitadarma713@gmail.com', 'BTP Blok AE', 'Mattabulu'),
(5, 'Muhammad Gafur', 2017, '085298361519', 'muhammadd.gafur@gmail.com', 'Per. Dewi Karmila sari ', 'Cennoe'),
(6, 'Rahmayanti Rauf', 2014, '082347032421', 'raaahmaaayyy@gmail.com', 'Perumnas Sudiang, Jl. Selayar Raya Blok M No. 112', 'Abbanuange, Lajoa'),
(7, 'Muhammad Zul Iptek Manwan', 2018, '081343429011', 'Zulmanwan26@gmail.com', 'Permata Sudiang Raya', 'Lajoa'),
(8, 'Khairunnisa Azzahra', 2017, '085158562899', 'khaiirunnisazz@gmail.com', 'BTN Nusa Indah, Pallangga, Gowa', 'Jl Pasar Sentral'),
(9, 'Andi Muh. Raihan', 2012, '085299934900', 'andiraihani@gmail.com', 'Puri Taman Sari Blok G4 No.2', 'BTN Husada Permai'),
(10, 'A M Aminul Askar', 2017, '087800075305', 'andiaskar705@gmail.com', 'Maros', 'Kubba'),
(11, 'Aguswandi', 2016, '081341782095', 'wandiagus493@gmail.com', 'Sulawesi Tenggara', 'Cangadi'),
(12, 'A.Annisa Ida Mawarni, S.Tr.T', 2017, '082154200881', 'andiannisaa300415@gmail.com', 'Jl. Sahabat 3', 'Kabaro, Desa Labokong'),
(18, 'Asbi Jayadi, A.Md.T', 2016, '081243354465', 'asbijayadi@gmail.com', 'BTP Blok A', 'Kabaro, Desa Labokong'),
(200, 'Nurul', 2005, '081234567890', 'nurul@gmail.com', 'mangga tiga', 'BTN Husada Permai');

-- --------------------------------------------------------

--
-- Table structure for table `table_kegiatan`
--

CREATE TABLE `table_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_kegiatan`
--

INSERT INTO `table_kegiatan` (`id_kegiatan`, `photo`, `keterangan`) VALUES
(6, '14082024090715-kegiatan-upacara.jpg', 'BAKSOS 2022 IMS PNUP'),
(7, '23072022120458-kegiatan-kajian kedaerahan.jpg', 'Kajian Kedaerahan \"La Galigo\"'),
(8, '23072022120552-kegiatan-pengkaderan 2021.jpg', 'PENGADERAN 2021'),
(9, '23072022120631-kegiatan-persembahan anniversary VI IMS.jpg', 'Persembahan Anniversary VI IMS PNUP'),
(11, '23072022122409-kegiatan-23072022121904-kegiatan-kajian dan diskusi.jpg', 'Kajian dan Diskusi \"Sejarah IMS PNUP\" oleh Kakanda Ibrahim di Sekretariat IMS PNUP, 18 Juli 2022'),
(12, 'upacara.jpg', 'Upacara 17 Agustus');

-- --------------------------------------------------------

--
-- Table structure for table `table_struktur`
--

CREATE TABLE `table_struktur` (
  `id_nama` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `nip` int(11) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_handphone` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_struktur`
--

INSERT INTO `table_struktur` (`id_nama`, `nama`, `divisi`, `jabatan`, `tahun_masuk`, `foto`, `nip`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_handphone`, `alamat`) VALUES
(12, 'Gugun Maulana Ashar, A.Md.T', 'Pengurus inti', 'Ketua Dpo', '2021/2022', 'akram.JPG', 321180030, 'L', 'Batu-batu', NULL, '08135412345', 'Pesona Pelangi Residence'),
(13, 'Fadhil Farid', 'Pengurus inti', 'Ketua Umum', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(14, 'Nurcahyati Sarjuni', 'Pengurus inti', 'Sekertaris Umum', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(15, 'Alda Wandana', 'Pengurus inti', 'Bendahara Umum', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(16, 'Muh. Multazam', 'Dept. Pengkaderan', 'Kordinator', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(17, 'Ikhlasul Amal Muhlis', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(18, 'Maemunah', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(19, 'Reski', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(20, 'Ricky Rahmat', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(21, 'Umar Yusuf', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(22, 'Muh. Ilham', 'SENI', 'Guru Mapel', '2020', '42520035.jpeg', 190809, 'L', 'Makassar', '1994-01-02', '08218896980', 'BTP BLOK L'),
(83, 'Maemunah', 'IPA', 'Guru Mapel', '2021', '42520025.jpeg', 192890, 'P', 'Watansoppeng', '2002-10-23', '08218895980', 'SUDIANG'),
(84, 'Muh. Alif Solihin', 'SENI', 'Guru Mapel', '2019', '42520036.jpeg', 1890783, 'L', 'Makassar', '1980-12-23', '08218806907', 'BTP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `table_alumni`
--
ALTER TABLE `table_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `table_struktur`
--
ALTER TABLE `table_struktur`
  ADD PRIMARY KEY (`id_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_alumni`
--
ALTER TABLE `table_alumni`
  MODIFY `id_alumni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_struktur`
--
ALTER TABLE `table_struktur`
  MODIFY `id_nama` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
