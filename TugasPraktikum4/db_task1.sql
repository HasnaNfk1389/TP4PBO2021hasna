-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 06.48
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_task1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_to_do`
--

CREATE TABLE `tb_to_do` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `statuss` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_to_do`
--

INSERT INTO `tb_to_do` (`id`, `nama`, `deadline`, `address`, `matkul`, `kelas`, `statuss`) VALUES
(2, 'sahg', '2021-04-12', 'ashdgg', 'asbdb', 'gsahd', 'Belum'),
(3, 'coba', '2021-04-07', 'adhjahda', 'DPBO', 'Medium', 'Sudah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_to_do`
--
ALTER TABLE `tb_to_do`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_to_do`
--
ALTER TABLE `tb_to_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
