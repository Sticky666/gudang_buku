-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 01:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudang_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(60) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `tahun_terbit`, `sinopsis`, `id_genre`, `id_penulis`, `id_penerbit`) VALUES
(1, 'Five Night At Freddy\'s', 2014, 'Selamat datang di pekerjaan musim panas baru Anda di Freddy Fazbear\'s Pizza, tempat anak-anak dan orang tua datang untuk hiburan dan makanan! Daya tarik utamanya tentu saja adalah Freddy Fazbear; dan kedua temannya. Mereka adalah robot animatronik, diprogram untuk menyenangkan orang banyak!', 3, 1, 1),
(2, 'Naruto Shippuden', 2002, 'Naruto adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime. Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif', 4, 2, 2),
(3, 'Chainsaw-man', 2022, 'Denji memiliki mimpi sederhana—hidup bahagia dan damai, menghabiskan waktu bersama gadis yang disukainya. Namun, ini jauh dari kenyataan, karena Denji dipaksa oleh yakuza untuk membunuh iblis untuk melunasi hutangnya yang besar. Menggunakan iblis peliharaannya Pochita sebagai senjata, dia siap melakukan apa saja dengan sedikit uang.', 2, 3, 2),
(4, 'Spy x Family', 2019, 'Untuk menjaga perdamaian antara negara-negara saingan Westalis dan Ostania, agen Westalis dengan nama sandi \"Twilight\" ditugaskan untuk memata-matai Donovan Desmond, pemimpin partai politik ekstremis di Ostania. Namun, karena Desmond terkenal tertutup, satu-satunya cara Twilight bisa dekat dengannya adalah dengan mendaftarkan seorang anak di sekolah swasta yang sama dengan putra Desmond dan menyamar sebagai ayah mereka.', 5, 4, 2),
(5, 'One Punch Man', 2009, 'menceritakan seorang superhero yang bernama Saitama. One-Punch Man dibuat oleh seorang penulis yang asal jepang dengan nama samaran ONE yang mulai diterbitkan pada awal tahun 2009. Serial ini menjadi viral sehingga mampu melampaui 7,9 juta penggemar pada bulan Juni 2012. One-Punch Man merupakan kontraksi wanpanchi (\"One-Punch\") yang artinya satu pukulan.', 5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_genre`
--

INSERT INTO `tb_genre` (`id_genre`, `nama_genre`) VALUES
(2, 'Psychological'),
(3, 'Horror'),
(4, 'Fantasy'),
(5, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(40) NOT NULL,
  `no_telp_penerbit` varchar(15) NOT NULL,
  `email_penerbit` varchar(50) NOT NULL,
  `alamat_penerbit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `no_telp_penerbit`, `email_penerbit`, `alamat_penerbit`) VALUES
(1, 'Scott Cawthon', '089474883631', 'scottcaw@gmail.com', 'N.Y.C.'),
(2, 'Shueisha', '081295992038', 'shueisha@yahoo.com', 'Shibuya Trans, Japan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penulis`
--

CREATE TABLE `tb_penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(40) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `no_telp_penulis` varchar(15) NOT NULL,
  `email_penulis` varchar(50) NOT NULL,
  `alamat_penulis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penulis`
--

INSERT INTO `tb_penulis` (`id_penulis`, `nama_penulis`, `jk`, `no_telp_penulis`, `email_penulis`, `alamat_penulis`) VALUES
(1, 'Scott Cawthon', 'L', '085819161132', 'scottcawth@gmail.com', 'Miami Beach'),
(2, 'Masashi Kisimoto', 'L', '08948142646', 'kishimotosensei@gmail.com', 'Toyko, Japan'),
(3, 'Tatsuki Fujimoto', 'L', '089344231341', 'fujimo@yahoo.com', 'Kyoto, Japan'),
(4, 'Tatsuya Endo', 'L', '0895992711832', 'endotatsuya@gmail.com', 'Shibuya, Japan'),
(5, 'One', 'L', '08126664472', 'onesensei@yahoo.com', 'Osaka Beach,Japan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_genre` (`id_genre`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tb_penulis`
--
ALTER TABLE `tb_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_penulis`
--
ALTER TABLE `tb_penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `tb_genre` (`id_genre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `tb_penulis` (`id_penulis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
