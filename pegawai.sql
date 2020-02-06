-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 03:26 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_file` text NOT NULL,
  `jenis_file` varchar(100) DEFAULT NULL,
  `lokasi_file` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `id_user`, `nama_file`, `jenis_file`, `lokasi_file`, `created_at`, `updated_at`) VALUES
(17, 3, 'Foto Formal', 'foto_formal', 'rafly_foto_formal_1580955228.jpg', '2020-02-06 08:22:41', '2020-02-06 09:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `username_user` varchar(200) NOT NULL,
  `password_user` text NOT NULL,
  `jabatan_user` varchar(50) NOT NULL,
  `level_user` enum('1','2','3') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `jabatan_user`, `level_user`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Admin', '1', '2020-02-05 02:35:18', '2020-02-05 23:51:14'),
(2, 'Direksi', 'direksi', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Direksi', '2', '2020-02-05 02:35:18', '2020-02-05 20:49:17'),
(3, 'Rafly Firdausy Irawan', 'raflyfirdausy', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Dokter', '3', '2020-02-05 02:35:18', '2020-02-06 09:14:06'),
(4, 'Senia Trisna Saputri', 'seniatrisna', 'e10adc3949ba59abbe56e057f20f883e', 'Perawat', '3', '2020-02-05 02:35:18', '2020-02-05 02:58:58'),
(6, 'Ervina Nadia Salsabila', 'ervinanadia1', '25d55ad283aa400af464c76d713c07ad', 'Laboran', '3', '2020-02-05 21:11:55', '2020-02-05 21:11:55'),
(7, 'Senia Saputri', 'seniasaputri', '25d55ad283aa400af464c76d713c07ad', 'Bidan', '3', '2020-02-05 21:18:46', '2020-02-05 21:18:46'),
(8, 'Ervina Nadia', 'ervinanadia2', '25d55ad283aa400af464c76d713c07ad', 'Bidan', '3', '2020-02-05 21:19:37', '2020-02-05 21:19:37'),
(9, 'Ervina Nadia', 'ervinanadia3', '25d55ad283aa400af464c76d713c07ad', 'Farmasi', '3', '2020-02-05 21:19:58', '2020-02-05 21:19:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username_user` (`username_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
