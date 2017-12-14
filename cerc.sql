-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2017 at 10:31 
-- Server version: 10.1.21-MariaDB
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `tgl`, `tempat`, `ket`, `slug`, `img`) VALUES
(1, 'Techcomfest', '2017-12-12', 'Semarang', 'Yops', 'techcomfest', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(2, 'Hackathon', '2017-12-13', 'Yogyakarta', 'Hmm', 'hackathon', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(3, 'ITB Cooperation Day', '2017-12-24', 'Bandung', 'Yeaaaaa', 'itb-cooperation-day', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(4, 'Menristekdikti', '2018-01-12', 'Jakarta', 'Mantap', 'menristekdikti', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(5, 'Polines Cup', '2017-12-21', 'Semarang', 'Cuma cup biasa', 'abc', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(6, 'Undip Cup', '2017-12-22', 'Semarang', 'Hanya sekedar cup yang sudah diupdate', 'undip-cup-5885', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(7, 'Undip challenge', '2017-12-21', 'Semarang', 'Ssssss', 'undip-challenge', 'http://preview.ibb.co/cOpS5R/spirited_away.png'),
(8, 'Undip Mancing Cup', '2017-12-21', 'Semarang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'undip-mancing', 'http://preview.ibb.co/cOpS5R/spirited_away.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'fannyhasbi', '$2y$10$vnvb2pIBwcrd1hew82pju./zjKz374eOwII3lh6ZrZGfzhbwRKDb2', 'Fanny Hasbi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
