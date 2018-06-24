-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23 Jun 2018 pada 21.37
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama`, `tgl`, `tempat`, `ket`, `slug`, `img`, `id_user`) VALUES
(1, 'Techcomfest', '2017-12-12', 'Semarang', 'Yops', 'techcomfest', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(2, 'Hackathon', '2017-12-13', 'Yogyakarta', 'Hmm', 'hackathon', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(3, 'ITB Cooperation Day', '2017-12-24', 'Bandung', 'Yeaaaaa', 'itb-cooperation-day', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(4, 'Menristekdikti', '2018-01-12', 'Jakarta', 'Mantap', 'menristekdikti', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(5, 'Polines Cup', '2017-12-21', 'Semarang', 'Cuma cup biasa', 'abc', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(6, 'Undip Cup', '2017-12-22', 'Semarang', 'Hanya sekedar cup yang sudah diupdate', 'undip-cup-5885', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(7, 'Undip Competition', '2017-12-21', 'Semarang', 'Ssssss', 'undip-competition-8577', 'http://preview.ibb.co/cOpS5R/spirited_away.png', 1),
(8, 'Undip Mancing Challenge', '2017-12-21', 'Semarang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'undip-mancing-challenge-3709', 'https://image.ibb.co/cuNG28/mongodb.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'portfolio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pemohon` varchar(100) NOT NULL,
  `selesai` date NOT NULL,
  `pj` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(3) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `nama`, `pemohon`, `selesai`, `pj`, `id_user`, `id_kategori`, `foto`) VALUES
(1, 'Proyek Hibah Pertama', 'BEM FT Undip', '2018-05-20', 'Adi Nugroho', 2, NULL, 'https://image.ibb.co/cuNG28/mongodb.jpg'),
(2, 'Proyek Hibah Kedua', 'BEM FISIP Undip', '2018-05-21', 'Cahyo', 2, 1, 'https://image.ibb.co/cuNG28/mongodb.jpg'),
(3, 'Proyek Hibah Kedua', 'BEM FPIK Undip', '2018-05-22', 'Bima', 1, 1, 'https://image.ibb.co/cuNG28/mongodb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'fannyhasbi', '$2y$10$vnvb2pIBwcrd1hew82pju./zjKz374eOwII3lh6ZrZGfzhbwRKDb2', 'Fanny Hasbi', 1),
(2, 'adi', '$2y$10$bACTUuX.OErPBBwR0FwwJel2Belrrn7rwA.6H.bSAPRHbCwrz7c1K', 'Adi Nugroho', 1),
(3, 'abda', '$2y$10$KYG1rhowrTdk4BJJbNkQ0uOIRKkkXj5mCmqY4BJp5OT/ngvYyO8mS', 'Abda Rafi', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
