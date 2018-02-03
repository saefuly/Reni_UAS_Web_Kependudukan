-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2018 pada 18.17
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-login-registration`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `foto_wajah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `status`, `pekerjaan`, `kewarganegaraan`, `foto_wajah`) VALUES
('0234567890876543', 'Reni Andayani Cantik', 'Bandung Barat', '1997-03-10', 'l', 'Jl. Rancabentang Timur No 16244', '032', '122', 'Cibeureum Selatan', 'Cimahi Selatan Banget', 'Budha', 'kawin', 'Wiraswasta', 'WNA', 'file1517586910.jpg'),
('2389472389749240', 'Reni Andayani', 'Bandung', '2018-02-01', 'p', 'Cimahi', '03', '70', 'ANCOL', 'PADEMANGAN', 'Islam', 'belum', 'Pelajar/Mahasiswa', 'WNI', 'file1515847384.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`) VALUES
(6, 'Reni reni reni', 'a@gmail.com', '92f477ee7e213833b47e6f9824ffc6fe', 20, 8888),
(7, 'Reni', 'andayanireni2@gmail.com', '92f477ee7e213833b47e6f9824ffc6fe', 21, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
