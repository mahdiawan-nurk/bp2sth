-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2019 pada 16.16
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

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
(1, 'ARB0001PHN', 'aaa', 'sss', 'ddd', 'fff', 'dddg', 'hhhh', 'ARB0001PHN.png'),
(3, 'ARB0002PHN', 'Acacia Mangium Wild(Leguminosae)', 'Racosperma(Wild)', 'Akasia', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Politeknik Kampar merupakan Perguruan Tinggi yang bergerak dibidang sawit pertama di Indonesia. Dengan menerapkan sistem pendidikan vokasi, Politeknik Kampar mengarah pada penguasaan keahlian terapan, yang mana perbandingan praktek lebih banyak dari pada teori. Sistem registrasi ulang dan distribusi beban ajar yang bersifat konvensional menimbulkan kecemasan terhadap kinerja BAAK kedepannya. Mengingat&nbsp; registrasi ulang dan distribusi beban ajar dilakukan setiap semester secara terus-menerus dengan pola yang sama, sementara itu database yang digunakan untuk menyimpan data masih berupa excel dan dalam bentuk kertas. Solusi yang dilakukan yaitu membuat sistem baru yang &nbsp;berbasis <em>web base</em>. Dalam tahapan pembuatan sistem informasi berbasis web base menggunakan <em>framework</em> <em>codeigniter</em> sebagai kerangka kerja, <em>PHP</em> sebagai bahasa pemrograman dan <em>Mysql</em> sebagai database. Kesimpulan dari tugas akhir adalah telah dihasilkan suatu sistem informasi akademik berbasis <em>online</em> yang diharapkan dapat mengatasi permasalahan dalam sistem informasi registrasi ulang dan distibusi beban ajar di Politeknik Kampar.</span></span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Kata kunci : Sistem Informasi Akademik, Registrasi Ulang dan Distribusi Beban Ajar, <em>Codeigniter</em>.</span></span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Kata kunci : Sistem Informasi Akademik, Registrasi Ulang dan Distribusi Beban Ajar, <em>Codeigniter</em>.</span></span></p>\r\n', 'ARB0002PHN.png');

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
(1, 'Lengkeng', 'LEngkena', 'garia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_pohon`
--

CREATE TABLE `gambar_pohon` (
  `id` int(5) NOT NULL,
  `kode_qr` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_pohon`
--

INSERT INTO `gambar_pohon` (`id`, `kode_qr`, `nama_file`) VALUES
(5, 'ARB0002PHN', '201613001A.png'),
(6, 'ARB0002PHN', '1210160.png');

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
  MODIFY `id_pohon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_vegetasi`
--
ALTER TABLE `data_vegetasi`
  MODIFY `id_vegetasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gambar_pohon`
--
ALTER TABLE `gambar_pohon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
