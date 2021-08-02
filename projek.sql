-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 15.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `ft_barang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_barang`
--

INSERT INTO `t_barang` (`id_barang`, `nm_barang`, `ft_barang`, `deskripsi`, `harga`) VALUES
(1, 'Electric Scooter Xiaomi Mijia M365', 'XIAOMI MIJIA M365.jpg', 'Skuter elektrik dari Xiaomi ini menjadi pilihan menarik bagi Anda yang ingin merasakan sensasi menggunakan skuter futuristik. Skuter ini memiliki Max Speed 25 km/h, dengan Max Range 30 km, serta dengan kapasitas battery 250 Wh.                                                     ', 5590000),
(2, 'Electric Scooter Coswheel   A-One', 'cos.jpg', 'Skuter ini adalah skuter yang modern, mudah untuk dilipat, praktis, serta Sudah dilengkapi teknologi terkini (LCD Display). Skuter ini memiliki Max Range 30KM/40KM, Max Speed 35km/h, dan juga dengan Charging Time 4.5-6hours.', 17000000),
(3, 'Street Motion Tech II Electric Scooter', 'streetmotion.jpg', 'Street Motion Tech II Electric Scooter  adalah skuter minimalis dengan harga terjangkau serta mudah untuk dibawa kemana saja.Skuter ini memiliki Max Speed 20KM/h, dengan Max Range up to 15 km, dan memiliki battery 4400mAh 36V.', 2999000),
(4, 'Electric Scooter Xiaomi Ninebot ES2', 'nine.jpg', 'Xiaomi Ninebot KickScooter by Segway ES2 merupakan skuter elektrik bertenaga baterai dengan Max Range 15.5 KM, Max Speed hingga 15.5MPH, serta memiliki mesin powerful 700w yang menggunakan Smart Battery Management System.', 5699000),
(5, 'EScooter Minimotors Speedway-IV', 'minimotors.jpg', 'EScooter Minimotors Speedway-IV adalah salah satu skuter keluaran dari Minimotors dengan kualitas tinggi. Skuter ini terlihat simple yang dilengkapi dengan 48V 16Ah Panasonic batteries, dengan max speed 40 km/h, dan dengan charging time 7-8h.', 8500000),
(6, 'Dualtron Ultra Electric Scooter-Minimotors', 'Dualtron ultra.jpg', 'Dualtron Ultra dikenal sebagai skuter elektris yang tercanggih dan terdepan yang merupakan produk dari Minimotors. Dualtron Ultra ini memiliki Max Speed hingga 80 km/h , dengan max range 100-120 km, serta memiliki battery 60V/35ah.', 39999000),
(7, 'Lightweight Small Foldable Electric Scooter', 'Lightweight.jpg', 'Scooter ini adalah scooter yang biasanya dipakai anak - anak dan mudah untuk disimpan karena mudah dilipat.Scooter ini dengan Max Range 20 - 30 KM, Max Speed 25km/h, Charging Time 2 hours. Dan skuter ini memiliki daya muat maksimal 120 kg.', 2500000),
(8, 'Electric Scooter Xiaomi Mijia M365 Pro', 'mijiapro.jpg', 'Electric Scooter Xiaomi Mijia M365 Pro adalah salah satu skuter yang sangat affordabble. Skuter ini memiliki Max Speed 25 km/h, Max Range sekitar 45 km, dengan charging time 8-9 hours, serta memiliki daya muat maksimal 100 kg.', 7000000),
(9, 'Motify X7 Foldable Electric Scooter', 'x7.jpg', 'Motify X7 Foldable Electric Scooter adalah Skuter listrik merk Motify yang memiliki body yang kuat dan awet. Skuter ini memiliki Max Range 20 km, Max Speed 20 km, dan skuter ini memiliki daya muat maksimal 100 kg.', 6000000),
(10, 'Segway Ninebot Kickscooter ES4 Electric Scooter', 'es4.jpg', 'Segway Ninebot Kickscooter ES4 Electric Scooter adalah skuter listrik yang dapat dilipat sehingga mudah untuk disimpan .Skuter ini memiliki Max Range 45 KM, Max Speed 30km/h, serta dengan daya muat maksimal 100 kg.', 8500000),
(11, 'Electric Scooter Xiaomi Mijia M365 Smart Electric ', 'smartmijia.jpg', 'Electric Scooter Xiaomi Mijia M365 Smart Electric Scooter ini menjadi pilihan menarik untuk dibeli dan skuter ini mudah disimpan. Skuter ini memiliki Max Speed 25 km/h, dengan Max Range 35 km, serta dengan kapasitas battery 250 Wh.', 5689000),
(12, 'Mini Segway A8 Electric Scooter', 'minisegwey.jpg', 'Mini Segway A8 Electric Scooter adalah salah satu skuter yang ramah lingkungan Mini Self Balance Car dan terlihat mewah. Skuter ini memiliki Max Range 15-20 km, dengan Max Speed 25 km/h, serta dilengkapi dengan bluetooth.', 3070000),
(13, 'Darknight High Performance Electric Scooter', 'dark.jpg', 'Darknight High Performance Electric Scooter adalah skuter yang memiliki performa tinggi namun tetap nyaman dan stabil.Skuter ini memiliki Max Range 45 - 50 km, dengan Max Speed 45 km/h, dan memiliki daya muat maksimal 150 kg.', 11700000),
(14, 'Electric Scooter Otoped 36v400w', 'otoped.jpg', 'Electric Scooter Otoped 36v400w adalah salah satu skuter elektris yang canggih dan terdepan. Skuter otoped ini memiliki Max Speed hingga 35-50 km/h , dengan max range 40-60 km, serta dengan charging time 2-5 hours.', 5900000),
(15, 'Foldable Electric Scooter Lights L9-01', 'l9.jpg', 'Foldable Electric Scooter Lights L9-01 merupakan salah satu Electric Scooter yang dapat dihandalkan dari design, durability dan kenyamanan. Skuter ini memiliki Max Range 15-30 km, Max Speed 25 km/h, dengan Battery 36V 7.8ah.', 4650000),
(16, 'Ninebot Kick Scooter Air by Segwey T15 ', 'air.jpg', 'Xiaomi Ninebot AIR by Segway T15 merupakan skuter elektrik dengan desain konsep futuristik.Skuter ini memilki Max Speed 20 km/h, Max Range 12 km, serta dilengkapi dengan Smart Battery Management System.', 6950000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesanan`
--

CREATE TABLE `t_pesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesan`, `id_barang`, `nama`, `hp`, `jumlah`, `alamat`, `kode_pos`) VALUES
(22, 2, 'Mega', '084765232745', 1, 'batang', 5623),
(23, 2, 'ari', '084765232745', 1, 'semarang', 87327),
(24, 3, 'fita sheila', '085800219949', 3, 'Kendal', 82727),
(25, 5, 'villa', '084765232745', 1, 'Batang', 8762),
(26, 5, 'Ana Milatul Khauliya', '085800219949', 1, 'Batang, Jawa Tengah, Indonesia', 51252),
(27, 5, 'Umam', '-85877231414', 3, 'Semarang', 8723),
(28, 14, 'Talitha Tri Maulina', '089666454354', 1, 'Jakarta', 8765);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
