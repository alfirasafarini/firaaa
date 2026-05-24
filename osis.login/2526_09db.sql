-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2026 at 08:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2526_09db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `nis`, `kelas`, `jabatan`) VALUES
(2, '2425.10.379', '12345678', 'Muhammad Ilham ', '2425.10.379', 'XI KULINER 4', 'Ketua'),
(5, '2425.10.046', '12345678', 'Fitria Octaviany', '2425.10.046', 'XI TKI 2', 'Wakil Ketua'),
(6, '2425.10.057', '12345678', 'Natasya Tri Rizkia Saputri ', '2425.10.057', 'XI TKI 2', 'Sekretaris'),
(7, '2526.10.460', '12345678', 'Putri Fajriyyah Al Khoeriyyah ', '2526.10.460', 'X KULINER 5', 'Wakil Ketua '),
(8, '2526.10.195', '12345678', 'Raisya Utami', '2526.10.195', 'X TJKT 2', 'Sekretaris'),
(9, '2425.10.385', '12345678', 'Putri Nadia Agustin', '2425.10.385', 'XI KULINER 4', 'Bendahara'),
(10, '2526.10.042', '12345678', 'Zulfia', '2526.10.042', 'X TKI 1', 'Bendahara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
