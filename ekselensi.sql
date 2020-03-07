-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2020 pada 07.21
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
-- Database: `ekselensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@ekselensi.com'),
(3, 'hello', '5d41402abc4b2a76b9719d911017c592', 'hello@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karir`
--

CREATE TABLE `karir` (
  `id` int(11) NOT NULL,
  `job` varchar(125) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` varchar(125) NOT NULL,
  `gajiTerendah` int(11) NOT NULL,
  `gajiTertinggi` int(11) NOT NULL,
  `namaPerusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karir`
--

INSERT INTO `karir` (`id`, `job`, `deskripsi`, `tanggal`, `jenis`, `gajiTerendah`, `gajiTertinggi`, `namaPerusahaan`, `alamat`) VALUES
(4, 'Kerjaan', '', '2020-03-07 04:34:29', 'FullTime', 100000, 200000, 'PT. Ekselensi Komunika Kreasi', 'Kebayoran Lama , Jakarta Selatan.'),
(5, 'Web Desainer', 'web desainer yang kerjaannya bagus dan telaten.', '2020-03-07 02:47:34', 'Part Time', 1000000, 5000000, 'PT. Orange Menemani', 'Kebayoran Lama , Jakarta Selatan'),
(6, 'programmer', 'cekatan', '2020-03-07 04:50:49', 'PartTime', 1000000, 6000000, 'PayoAPp', 'Payakumbuh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bigImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi`, `image`, `bigImage`) VALUES
(1, 'outdoor', '', 'assets/img/5e61ca4ae74e3.jpeg', 'assets/img/5e61ca4ae7922.png'),
(2, 'indoor', 'indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor indoor', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(3, 'ecosolvent', 'ecosolvent ecosolvent ecosolvent ecosolvent ecosolvent ecosolvent ecosolvent ecosolvent ecosolvent ecosolvent', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(4, 'docuprint', 'docuprint docuprint docuprint docuprint docuprint docuprint docuprint docuprint docuprint docuprint', 'assets/img/desk.jpg', 'assets/img/test3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `minimum_quantity` int(5) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `subkategori_id` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga`, `minimum_quantity`, `satuan`, `kategori_id`, `subkategori_id`, `ket`, `gambar`) VALUES
(1, 'Flexy China 280 gram', '  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  ', 20000, 1, 'meter persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(2, 'Flexy China 340 gram', 'Flexy China adalah bahan seperti terpal dengan ketebalan 270 /440 yang diimport dari Negara China. Bahan Flexy China ini adalah versi yang paling murah sehingga dapat bersaing di pasar cetak Digital Printing di Jakarta.', 23000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', '/assets/img/produk.png'),
(3, 'Flexy China 370 gram (tanpa sambung)', 'Flexy China adalah bahan seperti terpal dengan ketebalan 270 /440 yang diimport dari Negara China. Bahan Flexy China ini adalah versi yang paling murah sehingga dapat bersaing di pasar cetak Digital Printing di Jakarta.', 65000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', '/assets/img/produk.png'),
(4, 'X-Banner 60x160 cm Flexy China 280 gram', 'Spanduk adalah sebuah kain rentang yang berisi propaganda, slogan atau juga berita yang juga perlu diketahui oleh umum. Banner adalah salah satu media promosi yang dicetak dengan Print Digital yang umumnya berbentuk Potrait atau Vertikal. Banner adalah bentuk penyederhanaan dari Baliho.', 62000, 1, 'Unit', 1, 2, '-', 'assets/img/produk.png'),
(5, 'Y-Banner 60x160 cm Flexy China 280 gram', 'Spanduk adalah sebuah kain rentang yang berisi propaganda, slogan atau juga berita yang juga perlu diketahui oleh umum. Banner adalah salah satu media promosi yang dicetak dengan Print Digital yang umumnya berbentuk Potrait atau Vertikal. Banner adalah bentuk penyederhanaan dari Baliho.', 70000, 1, 'unit', 1, 2, '-', 'assets/img/produk.png'),
(6, 'Flexy Korea 440 gram', '', 45000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk,png'),
(7, 'Flexy Korea 440 gram (tanpa sambung)', '', 76000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk,png'),
(9, 'Flexy Backlight China 510 gram	', '', 53000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(10, 'Flexy Backlight Korea 610 gram', '', 63000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(11, 'Flexy Backlight Korea (tanpa sambung)', '', 138000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(12, 'Flexy Mesh', '', 75000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(13, 'Sticker Ritrama Outdoor', '', 58000, 1, 'Meter Persegi', 1, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(14, 'Sticker China Outdoor', '', 37000, 1, 'Meter Persegi', 1, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(15, 'Sticker Transparant Outdoor', '', 74000, 1, 'Meter Persegi', 1, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(16, 'Sticker Blockout Outdoor', '', 74000, 1, 'Meter Persegi', 1, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(17, 'Sticker One Way Vision Outdoor', '', 90000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(18, 'Satin Cloth Outdoor	', '', 37000, 1, 'Meter Persegi', 1, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(19, 'Y-Banner 80x180 cm Flexy China 280 gram', '', 80000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(20, 'X-Banner 60x160 cm Flexy China 340 gram', '', 65000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(21, 'Y-Banner 60x160 cm Flexy China 340 gram	', '', 90000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(22, 'Y-Banner 80x180 cm Flexy China 340 gram	', '', 110000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(23, 'Roll Up Banner 60x160 cm Flexy China 340 gram', '', 215000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(24, 'Roll Up Banner 80x200 cm Flexy China 340 gram', '', 240000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(25, 'Roll Up Banner 85x200 cm Flexy China 340 gram', '', 250000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(26, 'Roll Up Banner 120x200 cm Flexy China 340 gram', '', 450000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(27, 'X-Banner 60x160 cm Flexy Korea 440 gram	', '', 80000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(28, 'Y-Banner 60x160 cm Flexy Korea 440 gram	', '', 105000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(29, 'Y-Banner 80x180 cm Flexy Korea 440 gram	', '', 125000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(30, 'Roll Up Banner 60x160 cm Flexy Korea 440 gram', '', 230000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(31, 'Roll Up Banner 80x200 cm Flexy Korea 440 gram', '', 260000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(32, 'Roll Up Banner 85x200 cm Flexy Korea 440 gram', '', 270000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(33, 'Roll Up Banner 120x200 cm Flexy Korea 440 gram', '', 500000, 1, 'Unit', 1, 2, '', 'assets/img/produk.png'),
(34, 'X-Banner 25x40 cm Albatros Indoor', '', 35000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(35, 'X-Banner 60x160 cm Albatros Indoor	', '', 100000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(36, 'Y-Banner 60x160 cm Albatros Indoor', '', 135000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(37, 'Y-Banner 80x180 cm Albatros Indoor	', '', 155000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(38, 'Roll Up Banner 60x160 cm Albatros Indoor	', '', 250000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(39, 'Roll Up Banner 80x200 cm Albatros Indoor	', '', 310000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(40, 'Roll Up Banner 85x200 cm Albatros Indoor	', '', 320000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(41, 'Roll Up Banner 120x200 cm Albatros Indoor', '', 535000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(42, 'Roll Up Banner 150x200 cm Albatros Indoor', '', 650000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(43, 'Backwall Modul 3x3 Sticker Vynil Indoor	', '', 4200000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(44, 'Backwall Modul 3x4 Sticker Vynil Indoor	', '', 4700000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(45, 'Event Desk 80x80x40/30cm Sticker Vynil Indoor', '', 1250000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(46, 'Pop-Up Table 200x93 cm Sticker Vinyl Indoor', '', 2000000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(47, 'Sticker Vynil + PVC + Magnet Modul 3x3 Indoor', '', 2200000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(48, 'Sticker Vynil + PVC + Magnet Modul 3x4  Indoor ', '', 3000000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(49, 'X-Banner 25x40 cm Albatros Indoor', '', 35000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(50, 'X-Banner 60x160 cm Albatros Indoor', '', 100000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(51, 'Y-Banner 60x160 cm Albatros Indoor', '', 135000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(52, 'Y-Banner 80x180 cm Albatros Indoor', '', 155000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(53, 'Roll Up Banner 60x160 cm Albatros Indoor', '\r\n\r\n', 250000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(54, 'Roll Up Banner 80x200 cm Albatros Indoor', '\r\n', 310000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(55, 'Roll Up Banner 85x200 cm Albatros Indoor', '\r\n', 320000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(56, 'Roll Up Banner 120x200 cm Albatros Indoor', ' ', 535000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(57, 'Roll Up Banner 150x200 cm Albatros Indoor', '\r\n', 650000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(58, 'Backwall Modul 3x3 Sticker Vynil Indoor', '', 4200000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(59, 'Backwall Modul 3x4 Sticker Vynil Indoor', '', 4700000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(60, 'Event Desk 80x80x40/30cm Sticker Vynil Indoor', '', 1250000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(61, 'Pop-Up Table 200x93 cm Sticker Vinyl Indoor', '', 2000000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(62, 'Sticker Vynil + PVC + Magnet Modul 3x3 Indoor', '', 2200000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(63, 'Sticker Vynil + PVC + Magnet Modul 3x4  Indoor ', '', 3000000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(64, 'X-Banner 25x40 cm Albatros Indoor', '', 35000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(65, 'X-Banner 60x160 cm Albatros Indoor', '', 100000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(66, 'Y-Banner 60x160 cm Albatros Indoor', '', 135000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(67, 'Y-Banner 80x180 cm Albatros Indoor', '', 155000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(68, 'Roll Up Banner 60x160 cm Albatros Indoor', '\r\n\r\n', 250000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(69, 'Roll Up Banner 80x200 cm Albatros Indoor', '\r\n', 310000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(70, 'Roll Up Banner 85x200 cm Albatros Indoor', '\r\n', 320000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(71, 'Roll Up Banner 120x200 cm Albatros Indoor', ' ', 535000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(72, 'Roll Up Banner 150x200 cm Albatros Indoor', '\r\n', 650000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(73, 'Backwall Modul 3x3 Sticker Vynil Indoor', '', 4200000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(74, 'Backwall Modul 3x4 Sticker Vynil Indoor', '', 4700000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(75, 'Event Desk 80x80x40/30cm Sticker Vynil Indoor', '', 1250000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(76, 'Pop-Up Table 200x93 cm Sticker Vinyl Indoor', '', 2000000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(77, 'Sticker Vynil + PVC + Magnet Modul 3x3 Indoor', '', 2200000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(78, 'Sticker Vynil + PVC + Magnet Modul 3x4  Indoor ', '', 3000000, 1, 'Unit', 2, 2, '', 'assets/img/produk.png'),
(79, 'X-Banner 25x40 cm Albatros Eco-solvent', '', 45000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(80, 'X-Banner 60x160 cm Albatros Eco-solvent	', '', 120000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(81, 'Y-Banner 60x160 cm Albatros Eco-solvent	', '', 155000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(82, 'Y-Banner 80x180 cm Albatros Eco-solvent	', '', 175000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(83, 'Roll Up Banner 60x160 cm Albatros Eco-solvent', '', 270000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(84, 'Roll Up Banner 80x200 cm Albatros Eco-solvent	', '', 330000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(85, 'Roll Up Banner 85x200 cm Albatros Eco-solvent', '', 340000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(86, 'Roll Up Banner 120x200 cm Albatros Eco-solvent', '', 550000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(87, 'Backwall Modul 3x3 Sticker Vynil Eco-solvent', '', 4400000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(88, 'Backwall Modul 3x4 Sticker Vynil Eco-solvent', '', 4900000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(89, 'Event Desk 80x80x40/30cm Sticker Vinyl Eco-solvent', '', 1350000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(90, 'Pop-Up Table 200x93 cm Sticker Vinyl Eco-solvent', '', 2200000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(91, 'Sticker Vynil + PVC + Magnet Modul 3x3 Eco-solvent', '', 2400000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(92, 'Sticker Vinyl + PVC + Magnet Modul 3x4 m Eco-solvent', ' ', 3200000, 1, 'Unit', 3, 2, '', 'assets/img/produk.png'),
(93, 'Albatros Indoor', '', 84000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(94, 'Sticker Vynil Indoor', '', 95000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(95, 'Sticker Transparant Indoor', '', 116000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(96, 'Sticker Backlight Indoor', '', 126000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(97, 'Photo Paper Indoor', '', 84000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(98, 'Duratrans Indoor	', '', 126000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(99, 'Canvas China & Varnish Indoor', '', 125000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(100, 'PVC Indoor', '', 95000, 1, 'Meter Persegi', 2, 1, '', 'assets/img/produk.png'),
(101, 'Albatros Eco-solvent', '', 84000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(102, 'Sticker Ritrama Eco-solvent', '', 79000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(103, 'Sticker Vynil Eco-solvent	', '', 95000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(104, 'Sticker China Eco-solvent', '', 58000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(105, 'Sticker Transparant Eco-solvent', '', 95000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(106, 'Sticker Blockout Eco-solvent	', '', 95000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(107, 'Sticker Backlight Eco-solvent	', '', 126000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(108, 'Sticker One Way Vision Eco-solvent	', '', 111000, 1, 'Meter Persegi', 3, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(109, 'Satin Cloth Eco-solvent	', '', 58000, 1, 'Meter Persegi', 3, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(110, 'Photo Paper Eco-solvent	', '', 84000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(111, 'Duratrans Eco-solvent	', '', 126000, 1, 'Meter Persegi', 3, 1, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(112, 'Canvas China & Varnish Eco-solvent	', '', 132000, 1, 'Meter Persegi', 3, 1, 'Tidak bisa laminating', 'assets/img/produk.png'),
(113, 'Full Body Mini Bus (tanpa varnish)	', '', 3850000, 1, 'Unit', 1, 4, '', 'assets/img/produk.png'),
(114, 'Full Body Mini Bus (tanpa varnish, tapi termasuk bongkar) 	', '', 4400000, 1, 'Unit', 1, 4, '', 'assets/img/produk.png'),
(115, 'Full Body Mini Bus (dengan varnish)	', '', 4400000, 1, 'Unit', 1, 4, '', 'assets/img/produk.png'),
(116, 'Full Body Mini Bus (dengan varnish & bongkar)	', '', 4950000, 1, 'Unit', 1, 4, '', 'assets/img/produk.png'),
(117, 'Mobil Box (half branding)*', '', 1650000, 1, 'Unit', 1, 4, '', 'assets/img/produk.png'),
(118, 'Mobil Box (full branding)*', '', 2200000, 1, 'Unit', 1, 4, '', 'assets/img/produk.png'),
(119, 'Full Body Mini Bus (tanpa varnish)	', '', 4400000, 1, 'Unit', 3, 4, '', 'assets/img/produk.png'),
(120, 'Full Body Mini Bus (tanpa varnish, tapi termasuk bongkar) ', '', 4950000, 1, 'Unit', 3, 4, '', 'assets/img/produk.png'),
(121, 'Full Body Mini Bus (dengan varnish)	', '', 4950000, 1, 'Unit', 3, 4, '', 'assets/img/produk.png'),
(122, 'Full Body Mini Bus (dengan varnish & bongkar)	', '', 5500000, 1, 'Unit', 3, 4, '', 'assets/img/produk.png'),
(123, 'Mobil Box (half branding)*', '', 2200000, 1, 'Unit', 3, 4, '', 'assets/img/produk.png'),
(124, 'Mobil Box (full branding)*', '', 2750000, 1, 'Unit', 3, 4, '', 'assets/img/produk.png'),
(125, 'Art Paper 1-10 Lembar A3+', '', 5000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(126, 'Art Paper 11-100 Lembar A3+', '', 2300, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(127, 'Art Paper > 100 Lembar A3+', '', 2000, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(128, 'Art Carton 1-10 Lembar A3+', '', 5000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(129, 'Art Carton 11-100 Lembar A3+', '', 2500, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(130, 'Art Carton > 100 Lembar A3+', '', 2300, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(131, 'Matte Paper 1-10 Lembar A3+	', '', 5000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(132, 'Matte Paper 11-100 Lembar A3+', '', 2400, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(133, 'Matte Paper > 100 Lembar A3+', '', 2200, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(134, 'HVS Paper 1-10 Lembar A3+	', '', 5000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(135, 'HVS Paper 11-100 Lembar A3+	', '', 2300, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(136, 'HVS Paper > 100 Lembar A3+	', '', 2000, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(137, 'Sticker Kromo 1-10 Lembar A3+	', '', 7000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(138, 'Sticker Kromo 11-100 Lembar A3+	', '', 3500, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(139, 'Sticker Kromo > 100 Lembar A3+	', '', 3000, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(140, 'BW 1-10 Lembar A3+	', '', 7000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(141, 'BW 11-100 Lembar A3+	', '', 3500, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(142, 'BW > 100 Lembar A3+	', '', 3000, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(143, 'Sticker Vynil Docu 1-10 Lembar A3+	', '', 15000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(144, 'Sticker Vynil Docu 11-100 Lembar A3+	', '', 14000, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(145, 'Sticker Vynil Docu > 100 Lembar A3+	', '', 10000, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(146, 'PVC Docu 1-10 Lembar A3+', '', 60000, 1, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(147, 'PVC Docu 11-100 Lembar A3+', '', 50000, 11, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(148, 'PVC Docu > 100 Lembar A3+	', '', 40000, 100, 'Lembar A3+', 4, 5, '', 'assets/img/produk.png'),
(149, 'Bahan Art Karton', '1 Sisi', 48000, 1, 'box', 4, 6, '1-2 box', 'assets/img/produk.png'),
(150, 'Bahan Art Karton', '1 Sisi', 25000, 3, 'Box', 4, 6, '3-10 Box', 'assets/img/produk.png'),
(151, 'Bahan Art Karton', '1 Sisi', 16000, 11, 'Box', 4, 6, '>10 Box', 'assets/img/produk.png'),
(152, 'Bahan Art Karton', '1 Sisi + Laminating', 54000, 1, 'Box', 4, 6, '1-2 Box', 'assets/img/produk.png'),
(153, 'Bahan Art Karton', '1 Sisi + Laminating	', 28000, 3, 'Box', 4, 6, '3-10 Box', 'assets/img/produk.png'),
(154, 'Bahan Art Karton', '1 Sisi + Laminating	', 22000, 11, 'Box', 4, 6, '>10 Box', 'assets/img/produk.png'),
(155, 'Bahan Art Karton', '2 Sisi	', 68000, 1, 'Box', 4, 6, '1-2 Box', 'assets/img/produk.png'),
(156, 'Bahan Art Karton', '2 Sisi	', 32000, 3, 'Box', 4, 6, '3-10 box', 'assets/img/produk.png'),
(157, 'Bahan Art Karton', '2 Sisi	', 26000, 11, 'Box', 4, 6, '>10 box', 'assets/img/produk.png'),
(158, 'Bahan Art Karton', '2 Sisi + Laminating	', 80000, 1, 'Box', 4, 6, '1-2 Box', 'assets/img/produk.png'),
(159, 'Bahan Art Karton', '2 Sisi + Laminating	', 48000, 3, 'Box', 4, 6, '3-10 Box', 'assets/img/produk.png'),
(160, 'Bahan Art Karton', '2 Sisi + Laminating	', 37500, 11, 'Box', 4, 6, '>10 Box', 'assets/img/produk.png'),
(161, 'Bahan BW (Blues White)', '1 Sisi	', 56000, 1, 'Box', 4, 6, '1-2 Box', 'assets/img/produk.png'),
(162, 'Bahan BW (Blues White)', '1 Sisi	', 30000, 3, 'Box', 4, 6, '3-10 Box', 'assets/img/produk.png'),
(163, 'Bahan BW (Blues White)', '1 Sisi	', 20000, 11, 'Box', 4, 6, '>10 Box', 'assets/img/produk.png'),
(164, 'Bahan BW (Blues White)', '2 Sisi	', 84000, 1, 'Box', 4, 6, '1-2 Box', 'assets/img/produk.png'),
(165, 'Bahan BW (Blues White)', '2 Sisi	', 40000, 3, 'Box', 4, 6, '3-10 Box', 'assets/img/produk.png'),
(166, 'Bahan BW (Blues White)', '2 Sisi	', 34000, 11, 'Box', 4, 6, '>10 Box', 'assets/img/produk.png'),
(167, 'Sticker Ritrama & Impraboard 3 mm Outdoor	', '', 150000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(168, 'Sticker Ritrama & Impraboard 5 mm Outdoor	', '', 224000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(169, 'Sticker Ritrama & Impraboard 3 mm (dua sisi) Outdoor', '', 219000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(170, 'Sticker Ritrama & Impraboard 5 mm (dua sisi) Outdoor	', '', 294000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(171, 'Sticker Ritrama & Polyfoam 5 mm Outdoor	', '', 150000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(172, 'Sticker Ritrama & Polyfoam 10 mm Outdoor	', '', 245000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(173, 'Sticker Ritrama & Polyfoam 5 mm (dua sisi) Outdoor	', '', 219000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(174, 'Sticker Ritrama & Polyfoam 10 mm (dua sisi) Outdoor	', '', 293000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(175, 'Sticker China & Impraboard 3 mm Outdoor	', '', 125000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(176, 'Sticker China & Impraboard 5 mm Outdoor	', '', 196000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(177, 'Sticker China & Polyfoam 5 mm Outdoor	', '', 125000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(178, 'Sticker China & Polyfoam 10 mm Outdoor	', '', 210000, 1, 'Meter Persegi', 1, 3, 'Bisa laminating bisa tidak', 'assets/img/produk.png'),
(179, 'Sticker Vynil & Impraboard 3 mm Indoor 	', '', 206000, 1, 'Meter Persegi', 2, 3, '', 'assets/img/produk.png'),
(180, 'Sticker Vynil & Impraboard 5 mm Indoor 	', '', 252000, 1, 'Meter Persegi', 2, 3, '', ''),
(181, 'Sticker Vynil & Impraboard 3 mm (dua sisi) Indoor ', '', 263000, 1, 'Meter Persegi', 2, 3, '', ''),
(182, 'Sticker Vynil & Impraboard 5 mm (dua sisi) Indoor 	', '', 315000, 1, 'Meter Persegi', 2, 3, '', ''),
(183, 'Sticker Vynil & Polyfoam 5 mm Indoor 	', '', 200000, 1, 'Meter Persegi', 2, 3, '', ''),
(184, 'Sticker Vynil & Polyfoam 10 mm Indoor ', '', 270000, 1, 'Meter Persegi', 2, 3, '', ''),
(185, 'Sticker Vynil & Polyfoam 5 mm (dua sisi) Indoor 	', '', 313000, 1, 'Meter Persegi', 2, 3, '', ''),
(186, 'Sticker Vynil & Polyfoam 10 mm (dua sisi) Indoor 	', '', 405000, 1, 'Meter Persegi', 2, 3, '', ''),
(187, 'Sandwich (Sticker Vynil & Impraboard & Tali & Finishing) Indoor 	', '', 259000, 1, 'Meter Persegi', 2, 3, '', ''),
(188, 'Sticker Ritrama+Impraboard 3 mm 	', '', 188000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(189, 'Sticker Ritrama+Impraboard 5 mm	', '', 266000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(190, 'Sticker Ritrama+Impraboard 3 mm (dua sisi)	', '', 294000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(191, 'Sticker Ritrama+Impraboard 5 mm (dua sisi)	', '', 378000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(192, 'Sticker Ritrama+Polyfoam 5 mm 	', '', 188000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(193, 'Sticker Ritrama+Polyfoam 10 mm 	', '', 255000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(194, 'Sticker Ritrama+Polyfoam 5 mm (dua sisi) 	', '', 294000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(195, 'Sticker Ritrama+Polyfoam 10 mm (dua sisi)	', '', 383000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(196, 'Sticker Vynil+Impraboard 3 mm	', '', 206000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(197, 'Sticker Vynil+Impraboard 5 mm 	', '', 252000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(198, 'Sticker Vynil+Impraboard 3 mm (dua sisi)	', '', 263000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(199, 'Sticker Vynil+Impraboard 5 mm (dua sisi)	', '', 315000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(200, 'Sticker Vynil+Polyfoam 5 mm	', '', 200000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(201, 'Sticker Vynil+Polyfoam 10 mm 	', '', 270000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(202, 'Sticker Vynil+Polyfoam 5 mm (dua sisi) 	', '', 313000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(203, 'Sticker Vynil+Polyfoam 10 mm (dua sisi) 	', '', 405000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(204, 'Sticker Vynil+Impraboard+Tali+Finishing) 	', '', 259000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(205, 'Sticker China+Impraboard 3 mm 	', '', 181000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(206, 'Sticker China+Impraboard 5 mm 	', '', 224000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(207, 'Sticker China+Polyfoam 5 mm 	', '', 175000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(208, 'Sticker China+Polyfoam 10 mm	', '', 240000, 1, 'Meter Persegi', 3, 3, '', 'assets/img/produk.png'),
(218, 'hello world', 'Helllo', 10000, 1, 'Unit', 1, 1, 'Tidak ada', 'assets/img/5e60c3e5eebae.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` text NOT NULL,
  `link` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `title`, `subtitle`, `link`, `gambar`) VALUES
(23, 'Judul Promo', 'Deskripsi singkat tentang promo', '5', 'Flat_design_web_page_templates_of_online…2.jpg'),
(26, 'This is SLider', 'Lorem Lorem Lorem Lorem Lorem', '2', 'car01.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `id` int(11) NOT NULL,
  `nama_subKategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `BigImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subkategori`
--

INSERT INTO `subkategori` (`id`, `nama_subKategori`, `deskripsi`, `image`, `BigImage`) VALUES
(1, 'tanpa media', ' tanpa media tanpa media tanpa media tanpa media tanpa media tanpa media', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(2, 'dengan media', ' dengan media dengan media dengan media dengan media dengan media dengan media dengan media dengan media', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(3, 'paket produk', ' paket produk paket produk paket produk paket produk paket produk paket produk paket produk', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(4, 'car branding', ' car branding car branding car branding car branding car branding car branding car branding', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(5, 'Kertas A3+', 'Kertas A3+ Kertas A3+Kertas A3+Kertas A3+', 'assets/img/desk.jpg', 'assets/img/test3.png'),
(6, 'Kartu Nama', 'Kartu Nama Kartu Nama Kartu Nama', 'assets/img/desk.jpg', 'assets/img/test3.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
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
-- AUTO_INCREMENT untuk tabel `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
