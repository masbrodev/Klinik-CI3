-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2020 pada 06.42
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(10) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `spesialis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `alamat`, `spesialis`) VALUES
(1, 'Dr.Hande S.', 'paiton', 'Umum'),
(2, 'Dr.Fatimah', 'Probolinggo', 'Gigi'),
(3, 'Dr.Ulum K', 'Kotaanyar', 'Komplementer'),
(4, 'Dr.Wahyu N', 'Tanjung', 'IGD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `usia` varchar(2) NOT NULL,
  `kelamin` varchar(1) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `daerah` varchar(30) NOT NULL,
  `wilayah` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `nis_nik` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama`, `alamat`, `usia`, `kelamin`, `gol_darah`, `daerah`, `wilayah`, `pendidikan`, `nis_nik`, `status`) VALUES
(1, 'Halimatus Sya\'diah', 'pakuniran', '23', 'P', 'a', 'dalbar', 'ada', 'kuliah', '2357', 'Umum'),
(2, 'Dini A R', 'Besuki', '23', 'L', 'ab', 'daltim', 'ada', 'MI', '6796', 'Mukim'),
(3, 'wulandari', 'selogudig', '19', 'P', '', 'daltim', 'ada', 'MI', '123', 'BPJS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jam_daftar` varchar(8) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `no_antrian` varchar(3) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `dibaca` enum('y','t') NOT NULL DEFAULT 't'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `jam_daftar`, `id_pasien`, `keluhan`, `no_antrian`, `id_poli`, `id_petugas`, `dibaca`) VALUES
(1, '2020-07-31', '14:30:08', 2, 'sakit perut', '1', 1, 1, 'y'),
(2, '2020-07-31', '14:34:53', 1, 'pusing, mual', '1', 3, 1, 'y'),
(3, '2020-07-31', '15:25:53', 3, 'panas', '2', 1, 1, 'y'),
(4, '2020-07-31', '17:52:20', 1, 'kecelakaan', '1', 4, 1, 't');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `alamat`, `hp`, `username`, `password`) VALUES
(1, 'Admin AzZ', 'Tanjung Paiton', '0823018279', 'admin', 'admin'),
(2, 'sri', 'madura', '435890', 'igd', '12345'),
(3, 'qwerwert', 'wertwert', '234563456', 'qqqqq', 'qqqqq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama`, `username`, `password`) VALUES
(1, 'Poli Umum', 'umum', 'umum'),
(2, 'Poli Gigi', 'gigi', 'gigi'),
(3, 'Poli Komplementer', 'komplementer', 'komplementer'),
(4, 'IGD', 'igd', 'igd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm`
--

CREATE TABLE `tb_rm` (
  `id_rm` int(200) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `no_rm` varchar(200) NOT NULL,
  `diagnosa` varchar(200) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `terapy` varchar(200) NOT NULL,
  `perawat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rm`
--

INSERT INTO `tb_rm` (`id_rm`, `id_pasien`, `id_pendaftaran`, `id_dokter`, `id_poli`, `no_rm`, `diagnosa`, `tindakan`, `terapy`, `perawat`) VALUES
(1, 3, 3, 3, 1, '0909', 'demam', 'periksa', 'paracetamol', 'dinda'),
(2, 2, 1, 3, 1, '0804', 'lambung', 'periksa', 'promag', 'dinda');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rm`
--
ALTER TABLE `tb_rm`
  ADD PRIMARY KEY (`id_rm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_rm`
--
ALTER TABLE `tb_rm`
  MODIFY `id_rm` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
