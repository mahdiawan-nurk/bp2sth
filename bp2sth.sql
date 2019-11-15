-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2019 pada 11.03
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp2sth`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'mahdi', '02e3c871db62503d8539431c7843e7557c2fde17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pohon`
--

CREATE TABLE `data_pohon` (
  `id_pohon` int(5) NOT NULL,
  `kode_qr` varchar(25) NOT NULL,
  `nama_latin` varchar(250) NOT NULL,
  `sinonim` varchar(450) NOT NULL,
  `nama_daerah` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `penyebaran` longtext NOT NULL,
  `manfaat` longtext NOT NULL,
  `gambar_qr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pohon`
--

INSERT INTO `data_pohon` (`id_pohon`, `kode_qr`, `nama_latin`, `sinonim`, `nama_daerah`, `deskripsi`, `penyebaran`, `manfaat`, `gambar_qr`) VALUES
(2, 'ARB0001PHN', 'Acacia mangium wild', 'Racosperma mangium (wild)', 'Akasia', 'Perawakan Pohon berkayu berukuran sedang hingga besar, tinggi dapat mencapai 35 m. Batang diameter dapat mencapai 90 cm, kulit batang berwarna coklat keabuan hingga coklat tua. Daun setelah tumbuh beberapa minggu tidak menghasilkan lagi daun sesungguhnya tetapi tangkai daun sumbu utama setiap daun majemuk tumbuh melebar dan berubah menjadi phyllodae atau pohyllocladus yang dikenal dengan daun semu bentuk lurus di satu sisi dan melengkung di sisi lain (seperti bulan sabit dengan cekungan dangkal), panjang 25 cm dan lebar 3.59 cm, memiliki 4 (atau 5) urat daun utama yang memanjang. Buah kering lurus atau melingkar, panjang 10 cm dan lebar 0.3-0.5 cm', 'Sumatera, Kalimantan, Papua.', 'Konstruksi bangunan, furniture, vinir dan kayu lapis, pulp dan kertas', 'ARB0001PHN.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_vegetasi`
--

CREATE TABLE `data_vegetasi` (
  `id_vegetasi` int(5) NOT NULL,
  `nama_daerah` varchar(50) NOT NULL,
  `nama_ilmiah` varchar(250) NOT NULL,
  `family` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_vegetasi`
--

INSERT INTO `data_vegetasi` (`id_vegetasi`, `nama_daerah`, `nama_ilmiah`, `family`) VALUES
(2, 'Akasia', 'Acacia mangium Wild', 'Leguminosae');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_pohon`
--

CREATE TABLE `gambar_pohon` (
  `id` int(5) NOT NULL,
  `kode_qr` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_pohon`
--

INSERT INTO `gambar_pohon` (`id`, `kode_qr`, `nama_file`, `type`) VALUES
(3, 'ARB0001PHN', 'pohon1.JPG', 'ARB0001PHN_1'),
(4, 'ARB0001PHN', 'pohon2.JPG', 'ARB0001PHN_2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pohon`
--
ALTER TABLE `data_pohon`
  ADD PRIMARY KEY (`id_pohon`);

--
-- Indeks untuk tabel `data_vegetasi`
--
ALTER TABLE `data_vegetasi`
  ADD PRIMARY KEY (`id_vegetasi`);

--
-- Indeks untuk tabel `gambar_pohon`
--
ALTER TABLE `gambar_pohon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_pohon`
--
ALTER TABLE `data_pohon`
  MODIFY `id_pohon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_vegetasi`
--
ALTER TABLE `data_vegetasi`
  MODIFY `id_vegetasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gambar_pohon`
--
ALTER TABLE `gambar_pohon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
