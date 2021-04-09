-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mar 2021 pada 14.37
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serverside`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `country`, `created`, `status`) VALUES
(1, 'Doni', 'Afandi', 'senimankoding@gmail.com', 'Male', 'Indonesia', '2021-03-26 00:00:00', 1),
(2, 'Doni 2', 'Afandi', 'senimankoding@gmail.com', 'Male', 'Indonesia', '2021-03-26 00:00:00', 1),
(3, 'Doni 3', 'Last', 'senimankoding3@gmail.com', 'Male', 'indonesia', '2021-03-26 00:00:00', 1),
(4, 'Sita', 'Ari', 'sita@gmail.com', 'Female', 'Indonesia', '2021-03-26 00:00:00', 1),
(5, 'Deni', 'Kurniawa', 'deni@gmail.com', 'Male', 'indonesia', '2021-03-26 00:00:00', 1),
(6, 'Rumi', 'Reni', 'rumi@gmail.com', 'Female', 'Indonesia', '2021-03-26 00:00:00', 1),
(7, 'Erlang', 'Naga', 'erlangnaga@gmail.com', 'Male', 'indonesia', '2021-03-26 00:00:00', 1),
(8, 'Putri', 'Cinta', 'putri@gmail.com', 'Female', 'Indonesia', '2021-03-26 00:00:00', 1),
(9, 'Rimo', 'Budoyo', 'rimo@gmail.com', 'Male', 'indonesia', '2021-03-26 00:00:00', 1),
(10, 'Sinta', 'Reni', 'sinta@gmail.com', 'Male', 'Indonesia', '2021-03-26 00:00:00', 1),
(11, 'Denda', 'Afandi', 'denda@gmail.com', 'Male', 'indonesia', '2021-03-26 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
