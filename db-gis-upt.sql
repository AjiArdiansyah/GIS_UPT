-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2022 pada 03.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-gis-upt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lahan`
--

CREATE TABLE `tbl_lahan` (
  `id_lahan` int(11) NOT NULL,
  `nama_lahan` varchar(255) DEFAULT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `luas` int(11) DEFAULT NULL,
  `geojson` text DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id_lokasi`, `nama_lokasi`, `latitude`, `longitude`, `gambar`) VALUES
(6, 'GEDUNG SERBAGUNA', '-6.770450275324344', '111.72419218156901', 'GEDUNG_SERBAGUNA1.jpg'),
(7, 'GUDANG PENGEPAKAN IKAN BESAR', '-6.770466256317438', '111.72608527974309', 'GUDANG_PENGEPAKAN_IKAN_BESAR.jpg'),
(8, 'GUDANG PENGEPAKAN IKAN KECIL', '-6.770631393526329', '111.7260205512683', 'GUDANG_PENGEPAKAN_IKAN_KECIL.jpg'),
(9, 'GUDANG PENYIMPANAN BARANG', '-6.770109346641349', '111.72459436526933', 'GUDANG_PENYIMPANAN_BARANG.jpg'),
(10, 'GUDANG PENYIMPANAN ES BAGIAN TIMUR', '-6.77085512779883', '111.72600488593143', 'GUDANG_PENYIMPANAN_ES_BAGIAN_TIMUR.jpg'),
(11, 'GUDANG PENYIMPANAN ES BARAT', '-6.769986825343527', '111.7239881928677', 'GUDANG_PENYIMPANAN_ES_BARAT.jpg'),
(12, 'KANTOR TPI', '-6.770231867913587', '111.72540966110954', 'KANTOR_TPI.jpg'),
(13, 'KANTOR UPT PPP BULU TUBAN', '-6.770737933709152', '111.72543645312241', 'KANTOR_UPT_PPP_BULU_TUBAN.jpg'),
(14, 'MUSHOLA', '-6.770492891390484', '111.72478200095851', 'MUSHOLA.jpg'),
(15, 'POS KAMLADU', '-6.770519526425948', '111.72491621121101', 'POS_KAMLADU.jpg'),
(16, 'POS PANTAU BAGIAN TIMUR', '-6.770492891395687', '111.72719032934998', 'POS_PANTAU_BAGIAN_TIMUR.jpg'),
(17, 'POS PANTAU BARAT', '-6.769944209180686', '111.72441175494555', 'POS_PANTAU_BARAT.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'saya', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_lahan`
--
ALTER TABLE `tbl_lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indeks untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_lahan`
--
ALTER TABLE `tbl_lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
