-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 06:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip_dosen` varchar(255) NOT NULL,
  `nm_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip_dosen`, `nm_dosen`) VALUES
('DP1210', 'Asep Saefullah, M.Kom.'),
('DP1211', 'Ary Budi Warsito, M.Kom.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Bangunan Gedung'),
(2, 'Bangunan Rumah'),
(3, 'Bangunan Ruko');

-- --------------------------------------------------------

--
-- Table structure for table `tiga_dimensi`
--

CREATE TABLE `tiga_dimensi` (
  `id_project` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nim_mhs` bigint(15) NOT NULL,
  `file_project` varchar(255) NOT NULL,
  `rotX` int(10) NOT NULL DEFAULT 20,
  `rotY` int(10) NOT NULL DEFAULT 20,
  `rotZ` int(10) NOT NULL DEFAULT 20,
  `posX` int(10) NOT NULL DEFAULT 20,
  `posY` int(10) NOT NULL DEFAULT 20,
  `posZ` int(10) NOT NULL DEFAULT 20,
  `tahun_angkatan` int(4) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nip_dosen` varchar(255) NOT NULL,
  `status` enum('None','Diserahkan','Approved','NotAccepted') NOT NULL DEFAULT 'None',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiga_dimensi`
--

INSERT INTO `tiga_dimensi` (`id_project`, `title`, `nama_mhs`, `nim_mhs`, `file_project`, `rotX`, `rotY`, `rotZ`, `posX`, `posY`, `posZ`, `tahun_angkatan`, `keterangan`, `id_kategori`, `nip_dosen`, `status`, `gambar`) VALUES
(1, 'abc1', 'Jevon', 20165520001, 'gedung.glb', 20, 20, 20, 20, 20, 20, 2016, 'project tahun 2016', 1, 'DP1211', 'Diserahkan', 'gedung.jpg'),
(2, 'abc12', 'Jevon', 20165520002, 'gedung2.glb', 20, 20, 20, 20, 20, 20, 2016, 'project tahun 2016', 1, 'DP1211', 'Diserahkan', 'gedung2.jpg'),
(3, 'abc123', 'Jevon2', 20165520003, 'gedung3.glb', 20, 20, 20, 20, 20, 20, 2016, 'project tahun 2016', 1, 'DP1211', 'Diserahkan', 'gedung3.jpg'),
(4, 'Rumah Kayu', 'Jevon', 20165520003, 'gedung3.glb', 20, 20, 20, 20, 20, 20, 2017, 'Ini adalah contoh rumah dengan menggunakan design kayu', 1, 'DP1211', 'Approved', 'rumah2.png'),
(5, 'Bangunan Rumah', 'Donny', 20165520004, 'gedung4.glb', 20, 20, 20, 20, 20, 20, 2017, 'Ini adalah contoh bangunan rumah sederhana', 1, 'DP1211', 'NotAccepted', 'rumah1.jpg'),
(6, 'Kios Jepang', 'Syaiful', 20165520005, 'scene.glb', 0, -90, 0, 0, 0, -7, 2016, 'Ini adalah contoh dari Kios Jepang', 1, 'DP1211', 'Approved', 'gambar5.png'),
(7, 'Kios Jepang', 'Jevon Adriel', 20165520001, '401493603_csene.glb', 0, -90, 0, 0, 0, -7, 2016, 'ini adalah contoh bangunan Kios di Jepang', 1, 'DP1211', 'Diserahkan', '1460067946_gambar5.png'),
(8, 'Kios', 'Jevon Adriel', 20165520001, '206962221_csene.glb', 0, 0, 0, 0, 0, 0, 2016, 'ini adalah contoh 3D dari sebuah kios di jepang', 1, 'DP1211', 'Diserahkan', '1816203424_gambar5.png'),
(9, 'Rumah Huni', 'Ary Budi', 20165520010, '456297324_house.glb', 0, 0, 0, 0, 0, 0, 2016, 'Ini adalah contoh bangunan Rumah Huni', 2, 'DP1210', 'Diserahkan', '1068256738_houses.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin Dosen', 'dosen123', 'd5bbfb47ac3160c31fa8c247827115aa', 'admin'),
(2, 'Jevon Adriel', 'jevon', 'a570980936fd9ee5a2dd5a5d17a0bc59', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip_dosen`),
  ADD KEY `nip_dosen` (`nip_dosen`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tiga_dimensi`
--
ALTER TABLE `tiga_dimensi`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `nip_dosen` (`nip_dosen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiga_dimensi`
--
ALTER TABLE `tiga_dimensi`
  MODIFY `id_project` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiga_dimensi`
--
ALTER TABLE `tiga_dimensi`
  ADD CONSTRAINT `tiga_dimensi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tiga_dimensi_ibfk_2` FOREIGN KEY (`nip_dosen`) REFERENCES `dosen` (`nip_dosen`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
